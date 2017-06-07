<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //for increments
    public $incrementing = false;

    //the primary key for this model
    protected $primaryKey = 'event_id';

    //for mass assignment
    protected $fillable = ['event_id', 'status', 'event_description', 'date_of_event',
        'committee_id', 'email', 'location', 'added_by'];


    //the committee tha this event belongs to
    public function committee(){
        return $this->hasOne('App\Committee', 'committee_id', 'committee_id');
    }

    //the user who added this event
    public function addedBy(){
        return $this->hasOne('App\Member', 'email','added_by');
    }

    //the photo for this event
    public function photo(){
        return $this->hasOne('App\EventPhoto', 'event_id', 'event_id');
    }
}
