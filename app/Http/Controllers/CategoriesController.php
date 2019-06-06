<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoriesController extends Controller
{
    public function allCategory(){
      $categories = Category::all();
      return view("agregarProducto", compact("categories"));
    }
}
