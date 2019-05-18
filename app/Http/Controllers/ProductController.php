<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function agregar(Request $req){
      $productoNuevo = new Product();

      $productoNuevo->name = $req["name"];
      $productoNuevo->price = $req["price"];
      $productoNuevo->category_id = $req["category"];
      $productoNuevo->brand_id = $req["brand"];

      $pruductoNuevo->save();

      return redirect("/home");
    }
}
