<?php

namespace App\Services\Impl;

use App\Models\Products;
use App\Services\HomeService;
use http\Env\Request;

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


    public function details($id)
    {
        return view('details', [
            'products' => Products::find($id)
        ]);
    }


    public function add(Request $request)
    {
        Products::create($request->all());

        return redirect('/');
    }

    public function update(Request $r)
    {
        $product = Products::find($r->id);
        $product->prname = $r->prname;
        $product->price = $r->price;
        $product->description = $r->description;
        $product->save();
        return redirect('/');
    }

    public function delete(Products $product)
    {
        $product->delete();
        return redirect('/');
    }
}
