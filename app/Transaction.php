<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function Product(){
        return $this->hasOne(Product::class, 'product_id', 'prod_id');
    }

    public function User(){
        return $this->hasOne(User::class, 'user_id', 'buyer_id');
    }

    use Notifiable;

    protected $fillable = [
        'buyer_id', 'prod_id', 'quantity', 'transaction_date', 'isDelivered'
    ];
}
