<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function products(){
        return $this->belongsToMany(Products::class)->using(Categories_Products::class);
    }
    use HasFactory;

}
