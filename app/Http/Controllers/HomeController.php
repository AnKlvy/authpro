<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Customers;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cart()
    {
        $products =Products::all();
        $customers =Customers::all();
        return view('cart', [
            'products' =>$products,
            'customers'=>$customers
        ]);
    }

    public function p3()
    {
//        $products =Products::all();
        return view('p3');
    }

    public function p5()
    {
        return view('p5');
    }

    public function index()
    {
        $products = Products::all();
        return view('home', [
            'products' => $products
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function addItem()
    {
        return view('additem');
    }

    public function details($id)
    {
//        $products = new Products;

        return view('details', [
            'products' => Products::find($id)
        ]);
    }

    public function edit($id)
    {
//        $products = new Products;

        return view('edit', [
            'products' => Products::find($id)
        ]);
    }

    public function addToCart(Request $r, Products $p)
    {

        $r->validate([
            'number'=>'required|min:1'
        ]);

        $productBought = Auth::user()->productBought()->where('product_id',$p->id)->first();

        if($productBought!=null){
            Auth::user()->productBought()->updateExsistingPivot($p->id, ['number'=>$r->input('number')]);
        }
        else{
            Auth::user()->productBought()->attach($p->id, ['number'=>$r->input('number')]);
        }

//      if($r->session()->get('user')['id']){
//          return 'hello';
//      }
//$cart = new Carts;
//$cart->user_id=$r->session()->get('user')['id'];

//        $product = Products::find($r->prid);
//        $customer = Customers::find
//        $customer = Customers::find(Auth::id());
//        $product->customers()->attach(Auth::user());
//        $product->prname = $r->prname;
//        $product->price = $r->price;
//        $product->description = $r->description;


        return redirect('/');


    }

    public function create(Request $request)
    {
        //image
        $validated=$request->validate([
            'prname' => 'required|max:255',
            'price' => 'required',
            'description'=> 'required|max:1000',
            'image'=> 'required|image|max:2048'
        ]);

        $fileName = time().$request->file('image')->getClientOriginalName();
        $image_path = $request->file('image')->storeAs('products', $fileName,'public');
        $validated['image'] = '/storage/'.$image_path;

        Products::create($validated);
//        Products::create($request->all());

        return redirect('/');
    }

    public function save(Request $r)
    {

        $product = Products::find($r->id);
        $product->prname = $r->prname;
        $product->price = $r->price;
        $product->description = $r->description;
        if($r->image!=null){
            $validated=$r->validate([
                'image'=> 'required|image|max:2048'
            ]);

            $fileName = time().$r->file('image')->getClientOriginalName();
            $image_path = $r->file('image')->storeAs('products', $fileName,'public');
            $validated['image'] = '/storage/'.$image_path;
        $product->image = $validated['image'];
        }
        $product->save();
//        Vozvrazhayet s posta na etu zhe stranicu
//        return back();
        return(redirect('/'));
    }

    public function delete(Products $product)
    {
        $product->delete();
        return redirect('/');
    }
}
