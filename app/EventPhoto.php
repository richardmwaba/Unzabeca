<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPhoto extends Model
{
    //
    protected $table = 'events_photos';
    public $fillable = ['id', 'event_id', 'photoPath'];
}
