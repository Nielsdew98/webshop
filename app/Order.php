<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

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
        return $this->belongsToMany('App\Product','order_product');
    }
    public function guest(){
        return $this->belongsTo('App\Guest');
    }
    public static function getMonthlySum(Carbon $date)
    {
        $year = $date->year;
        $month = $date->month;

        if ($month < 10) {
            $month = '0' . $month;
        }

        $search = $year . '-' . $month;

        $revenues = Order::where('created_at', 'like', $search .'%')->get();

        $sum = 0;
        foreach ($revenues as $revenue) {
            $sum += $revenue->total_price;
        }

        return $sum;
    }
}
