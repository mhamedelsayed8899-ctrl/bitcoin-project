<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{

protected  $fillable = [

    "name" , 'img'
];


    public function product(){

    return $this->hasMany(Product::class) ;

    }
    //
}
