<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function reviews(){
        return $this->hasMany('App\Review');
    }
    public function roles(){
        return $this->belongsToMany('App\Role', 'user_role');
    }
    public function orders(){
        return $this->hasMany('App\Order');
    }
    public function adress(){
        return $this->belongsTo('App\Adress');
    }
    public function isAdmin(){
        foreach($this->roles as $role){
            if($role->name == 'administrator' && $this->deleted_at == null){
                return true;
            }
        }
    }
}
