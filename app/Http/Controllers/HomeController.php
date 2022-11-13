<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Cart;
//use App\Models\Customers;
//use App\Models\Products;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use mysql_xdevapi\Session;
//
//
//class HomeController extends Controller
//{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//
//    public function cart()
//    {
//        $products =Products::all();
//        $customers =Customers::all();
//        return view('cart', [
//            'products' =>$products,
//            'customers'=>$customers
//        ]);
//    }
//
//    public function p4()
//    {
//        return view('p4');
//    }
//
//    public function p5()
//    {
//        return view('p5');
//    }
//
//    public function index()
//    {
//        $products = Products::all();
//        return view('home', [
//            'products' => $products
//        ]);
//    }
//
//    /**
//     * Show the application dashboard.
//     *
//     * @return \Illuminate\Contracts\Support\Renderable
//     */
//
//    public function addItem()
//    {
//        return view('additem');
//    }
//
//    public function details($id)
//    {
////        $products = new Products;
//
//        return view('details', [
//            'products' => Products::find($id)
//        ]);
//    }
//
//    public function addToCart(Request $r)
//    {
////      if($r->session()->get('user')['id']){
////          return 'hello';
////      }
////$cart = new Cart;
////$cart->user_id=$r->session()->get('user')['id'];
//
//        $product = Products::find($r->prid);
////        $customer = Customers::find
//        $customer = Customers::find(Auth::id());
//        $product->customers()->attach(Auth::user());
//        $product->prname = $r->prname;
//        $product->price = $r->price;
//        $product->description = $r->description;
//        $product->save();
//        return redirect('/');
//
//
//    }
//
//    public function create(Request $request)
//    {
//
//        Products::create($request->all());
//
//        return redirect('/');
//    }
//
//    public function save(Request $r)
//    {
//
//        $product = Products::find($r->id);
//        $product->prname = $r->prname;
//        $product->price = $r->price;
//        $product->description = $r->description;
//        $product->save();
//        return redirect('/');
//    }
//
//    public function delete(Products $product)
//    {
//        $product->delete();
//        return redirect('/');
//    }
//}
