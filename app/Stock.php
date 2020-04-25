<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
{
    //
    protected $fillable = [
      'product_id','stock'
    ];

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
