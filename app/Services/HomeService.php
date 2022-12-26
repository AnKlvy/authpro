<?php

namespace App\Services;

use App\Models\Products;
use Illuminate\Http\Request;

interface HomeService
{
public function getAll();
//public function details($id);
public function add(Request $r);
public function update(Request $r, $product);
public function delete(Products $p);
}
