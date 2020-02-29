<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    public function Transaction(){
        return $this->belongsTo(Transaction::class, 'prod_id', 'product_id');
    }

    public function Seller(){
        return $this->hasOne(Seller::class, 'seller_id', 'seller_id');
    }

    public function Productcat(){
        return $this->hasOne(Productcat::class, 'category_id', 'cat_id');
    }

    use Notifiable;

    protected $fillable = [
        'product_name', 'seller_id', 'category_id', 'price', 'stock', 'description'
    ];

    protected $primaryKey = 'product_id';
}

