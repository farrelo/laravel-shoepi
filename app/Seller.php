<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Seller extends Model
{
    public function Product(){
        return $this->belongsTo(Product::class, 'seller_id', 'seller_id');
    }
    use Notifiable;

    protected $fillable = [
        'seller_name'
    ];
    protected $primaryKey = 'seller_id';

}
