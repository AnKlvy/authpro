<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'cusname',
//        'proddate'
    ];
//    public function users(){
//        return $this->belongsTo(User::class);
//    }

//    public function products(){
//        return $this->belongsToMany(Products::class, 'carts', 'customer_id', 'product_id')->using(Cart::class);
//    }

//    public function shipments(){
//        return $this->belongsToMany(Shipments::class)->using(Products_Shipments::class);
//    }

}
