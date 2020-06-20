<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adress extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
      'user_id','street','number','city','postal_code'
    ];
    public function user(){
        return $this->belongsTo('App\User')->withTrashed();
    }

}
