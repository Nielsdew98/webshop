<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'award_id','stock_id','title','slug','short_description','description','price'
    ];
    public function categories(){
        return $this->belongsToMany('App\Category','category_product');
    }
    public function photos(){
        return $this->hasMany('App\Photo');
    }
    public function awards(){
        return $this->hasMany('App\Award');
    }
    public function reviews(){
        return $this->hasMany('App\Review');
    }
    public function stock(){
        return $this->belongsTo('App\Stock');
    }
    public function default_image()
    {
        return $this->hasOne('App\Photo')->where('main_image',1);
    }
    public function detail_images()
    {
        return $this->hasMany('App\Photo')->where('main_image',0);
    }
}
