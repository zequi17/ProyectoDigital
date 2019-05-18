<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $guarded = [];

    public function products() {
      return $this->hasMan                                         y(Product::class, "brand_id");
    }
}
