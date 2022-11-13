<?php

namespace App\Services;

use App\Models\Products;
use http\Env\Request;

interface HomeService
{
public function getAll();
public function details($id);
public function add(Request $r);
public function update(Request $r);
public function delete(Products $p);
}
