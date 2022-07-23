<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function InsertProduct(Request $request){

    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->category = $request->category;
    $product->save();

    return "Inserted Successfully.";
   }



   public function GetProducts(){
    $products = Product::all();
    return $products;
   }
}
