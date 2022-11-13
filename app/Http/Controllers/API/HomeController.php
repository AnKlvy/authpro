<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\HomeService;
use App\Services\Impl\HomeServiceImpl;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;

  public function __construct(HomeService $homeService){
      $this->homeService= $homeService;
  }

  public function index(){
      try {
          $products = $this->homeService->getAll();

          return response()-> json([
              'status'=>true,
              'products'=>$products
          ]);
      } catch (\Exception $exception){
          return response()-> json([
              'status'=>false,
              'message'=>$exception->getMessage()
          ], $exception->getCode());
      }
   }
}
