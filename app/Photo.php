<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    //

    protected $uploads = '/images/products/';
    protected $fillable = [
        'file','product_id','main_image'
    ];
    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }
    public function product(){
        return $this->belongsTo('App\Product');
    }

}
