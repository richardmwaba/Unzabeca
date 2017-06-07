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
        'member_id', 'first_name', 'middle_name','last_name', 'email', 'year', 'status_id', 'position_id', 'phone_number','approved'
    ];

    public $incrementing = false;

    /**
     * Relation on member and user tables. A member can be
     * a user.
     */
    public function user(){
        return $this->hasOne('App\User', 'email', 'email');
    }

    /**
     * Relation between member and status
     */
    public function status(){
        return $this->hasOne('App\Status', 'status_id', 'status_id');
    }

    /**
     * Relationship on member and positions table
     */
    public function position()
    {
        return $this->hasOne('App\Position', 'position_id', 'position_id');
    }

    /**
     * Relationship on member and executive_photo table
     */
    public function executivePhoto()
    {
        return $this->hasOne('App\ExecutivePhoto', 'member_id', 'member_id');
    }
}
