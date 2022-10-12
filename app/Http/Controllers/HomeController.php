<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function p2(){
        return view('p2');
    }
    public function p3(){
        return view('p3');
    }
    public function p4(){
        return view('p4');
    }
    public function p5(){
        return view('p5');
    }
    public function index()
    {
        $products = Products::all();
        return view('home',[
            'products'=>$products
        ]);
    }
    public function  create (Request $request){

        Products::create($request->all());

        return redirect('/');
    }
    public function save(Products $product){

        $product->save();
        return redirect('/');
    }

    public function delete(Products $product) {
        $product->delete();
        return redirect('/');
    }
}
