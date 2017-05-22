<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //Primary key
    protected $primaryKey = 'position_id';

    // for mass assignment
    protected $fillable = ['position_id', 'position_description'];

    /**
     * Relation on member and positions tables. A member can have
     * a position.
     */
    public function member()
    {
        return $this ->belongsTo('App\Member', 'position_id', 'position_id');
    }

}
