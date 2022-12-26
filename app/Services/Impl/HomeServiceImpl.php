<?php

namespace App\Services\Impl;

use App\Models\Products;
use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeServiceImpl implements HomeService
{

    public function getAll()
    {
        $products = Products::all();

        if($products == null){
            throw new \Exception('Нет данных', 404);
        }

        return $products;
    }


//    public function details($id)
//    {
//        return view('details', [
//            'products' => Products::find($id)
//        ]);
//    }


    public function add(Request $request)
    {
        //image
        $validated=$request->validate([
            'prname' => 'required|max:255',
            'price' => 'required',
            'description'=> 'required|max:1000',
//            'image'=> 'required|image|max:2048'
            'image'=> 'required'

        ]);

//        $fileName = time().$request->file('image')->getClientOriginalName();
//        $image_path = $request->file('image')->storeAs('products', $fileName,'public');
//        $validated['image'] = '/storage/'.$image_path;

        Products::create($validated);

//        return redirect('/');
    }

    public function update(Request $r, $product)
    {

        $product = Products::find($r->id);
        $product->prname = $r->prname;
        $product->price = $r->price;
        $product->description = $r->description;
        //#
        $product->image = $r->image;
//        if($r->image!=null){
//            $validated=$r->validate([
//                'image'=> 'required|image|max:2048'
//            ]);
//
//            $fileName = time().$r->file('image')->getClientOriginalName();
//            $image_path = $r->file('image')->storeAs('products', $fileName,'public');
//            $validated['image'] = '/storage/'.$image_path;
//            $product->image = $validated['image'];
//        }
        $product->save();
//        return redirect('/');
    }

    public function delete(Products $product)
    {
        $product->delete();
//        return redirect('/');
    }
}
