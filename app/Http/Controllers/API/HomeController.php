<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeResource;
use App\Models\Products;
use App\Services\HomeService;
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
              'products'=>HomeResource::collection($products)
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

//    public function addItem()
//    {
//        return view('additem');
//    }

   public function add(Request $request){
      $this->homeService->add($request);

       return response()->json([
           'status' => true,
           'message' => 'Successfully added'
       ]);
   }

   public function update(Request $r, Products $product){
      $this->homeService->update($r, $product);
      return response()->json([
          'status' => true,
          'message' => 'Successfully updated'
      ]);
   }

   public function delete(Products $product){
      $this->homeService->delete($product);
       return response()->json([
           'status' => true,
           'message' => 'Successfully deleted'
       ]);
   }

}
