<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;

class BrandsController extends Controller
{
  public function allBrands(){
    $brands = Brand::all();
    
    return view("agregarProducto", compact("brands"));
  }
}
