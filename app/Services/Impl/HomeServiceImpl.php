<?php

namespace App\Services\Impl;

use App\Models\Products;
use App\Services\HomeService;

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
}
