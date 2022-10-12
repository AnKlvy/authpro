<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipments extends Model
{
    public function customers(){
        return $this->belongsToMany(Customers::class)->using(Customers_Shipments::class);
    }

    public function products(){
        return $this->belongsToMany(Products::class)->using(Products_Shipments::class);
    }

    use HasFactory;
}
