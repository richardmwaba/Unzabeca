<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'event_description', 'status', 'date_of_event', 'committee_id', 'email'
    ];

    /**
     * Relation on events and user. A user who's a member can
     * create an event
     */
    public function user(){
        return $this->belongsTo('App\User', 'email'); // using email as foreign key on users
    }

    /**
     * Relation on events and committee. An event belongs
     * to a particular committee
     */
    public function committee(){
        return $this->belongsTo('App\Committee');
    }
}
