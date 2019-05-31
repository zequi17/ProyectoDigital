<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductsController extends Controller
{
    public function agregar(Request $req){
      $productoNuevo = new Product();

      $ruta = $req->file("image")->store("public");
      $nombreArchivo = basename($ruta);

      $productoNuevo->image = $nombreArchivo;
      $productoNuevo->name = $req["name"];
      $productoNuevo->price = $req["price"];
      $productoNuevo->category_id = $req["categories"];
      $productoNuevo->brand_id = $req["brands"];

      $productoNuevo->save();

      return redirect("/");
    }

    public function productos(){
      $products = Product::paginate();

      return view("welcome", compact("products"));
    }
}
