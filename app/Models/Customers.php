<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;


    public function users(){
        return $this->belongsTo(Users::class);
    }

    public function products(){
        return $this->belongsToMany(Products::class)->using(Cart::class);
    }

    public function shipments(){
        return $this->belongsToMany(Shipments::class)->using(Products_Shipments::class);
    }

}
