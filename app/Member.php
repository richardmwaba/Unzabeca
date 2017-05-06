<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //Table associated with model
    protected $table = 'members';
    protected $primaryKey = 'member_id';

    // for mass assignment
    protected $fillable = [
        'member_id', 'first_name', 'middle_name','last_name', 'email', 'year', 'status_id', 'role', 'phone_number','approved'
    ];

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
