<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
      'user_id','product_id','rating','title','body'
    ];

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
