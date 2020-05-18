<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //
    protected $fillable = [
      'name','description','percent','product_id','homepage'
    ];

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
