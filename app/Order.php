<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'payment_id','user_id','total_price','delivery_method'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function products(){
        return $this->belongsToMany('App\Order','order_product');
    }
}
