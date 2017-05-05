<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $primaryKey = '';

    protected $fillable = [
        'status_id', 'status_description'
    ];

    /**
     * Relation of status to member. A status belongs
     * to a particular member
     */
    public function member(){
        return $this->belongsTo('App\Member');
    }
}
