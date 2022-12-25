<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'prname',
        'price',
        'description',
        'image'
//        'proddate'
    ];

//    public function customers(){
//        return $this->belongsToMany(Customers::class, 'carts', 'product_id', 'customer_id')->using(Carts::class);
//
//    }

    public function shipments(){
        return $this->belongsToMany(Shipments::class)->using(Products_Shipments::class);
    }

    public function categories(){
        return $this->belongsToMany(Categories::class)->using(Categories_Products::class);
    }

    public function userBought(){
        return $this->belongsToMany(User::class, 'carts','product_id')
            //Vot tut vosmozhno nuzhno pomenyat biblioteku
            //Seichas stoit relations belongsToMany
            ->withTimestamps()
            ->withPivot('number', 'status');
    }


}
