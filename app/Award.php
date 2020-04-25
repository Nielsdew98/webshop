<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    //
    protected $fillable = [
      'name','year','product_id'
    ];

    public function products(){
        return $this->belongsTo('App\Product');
    }
}
