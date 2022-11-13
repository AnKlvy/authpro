<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Services\HomeService;
use http\Env\Request;

class HomeController extends Controller
{
    protected $homeService;

  public function __construct(HomeService $homeService){
      $this->homeService= $homeService;
      $this->middleware('auth');
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

   public function details($id){
$products = $this->homeService->details($id);
       return response()-> json([
           'status'=>true,
           'products'=>$products
       ]);
   }

    public function addItem()
    {
        return view('additem');
    }

   public function add(Request $request){
      $this->homeService->add($request);

      return redirect('/');
   }

   public function update(Request $r){
      $this->homeService_>$this->update($r);
      return redirect('/');
   }

   public function delete(Products $product){
      $this->homeService->delete($product);
      return redirect('/');
   }

}
