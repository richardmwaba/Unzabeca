<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // for mass assignment
    protected $fillable = [
        'first_name', 'middle_name','last_name', 'email', 'year', 'status_id', 'position', 'approved'
    ];

    public $primaryKey = 'member_id';
    public $incrementing = false;

    /**
     * Relation on member and user tables. A member can be
     * a user.
     */
    public function user(){
        return $this->hasOne('App\User', 'email');
    }

    /**
     * Relation between member and status
     */
    public function status(){
        return $this->hasOne('App\Status', 'status_id');
    }

}
