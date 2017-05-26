<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $fillable = [
        'email', 'password','remeber_token'
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
     * Relation on user and member. A user is a member
     * of the system.
     */
    public function member(){
        return $this->hasOne('App\Member', 'email', 'email');  // using email as foreign key
    }

    /**
     * Relation on user and events. A user can create
     * many events
     */
    public function events(){
        return $this->hasMany('App\Events', 'email');
    }
}
