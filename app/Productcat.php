<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Productcat extends Model
{
    public function Product(){
        return $this->belongsTo(Product::class, 'category_id', 'cat_id');
    }
    use Notifiable;

    protected $fillable = [
        'category_name'
    ];

    protected $primaryKey = 'category_id';

}


