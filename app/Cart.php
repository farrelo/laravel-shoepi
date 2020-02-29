<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function User()
    {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }
    public function Product()
    {
        return $this->hasOne(Product::class,'product_id','product_id');
    }
}
