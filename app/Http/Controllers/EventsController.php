<?php

namespace App\Http\Controllers;

use App\Committee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Event;
use Auth;
use Redirect;

class EventsController extends Controller
{
    //view all events
    public function allEvents(){

        return view('members.events.allEvents')->with(['events'=> Event::all(),
            'committees' => Committee::all()]);
    }

    //create new event
    public function create(Request $request){

        Event::create(['event_id'=>$request->event_id, 'status'=>$this->getStatus($request),
            'event_description'=>$request->event_description,
            'email'=>$request->email, 'location'=>$request->location, 'added_by'=>Auth::user()->email,
        'date_of_event'=>$request->date_of_event, 'committee_id'=>$request->committee_id]);

        session()->flash('message', 'Event has been added');

        //return to the previous page
        return redirect()->back();
    }

    //sets and returns the status of this event based on event date
    public function getStatus(Request $request){
        if(Carbon::parse($request->date_of_event) < Carbon::today()){
            return 'past';
        }elseif(Carbon::parse($request->date_of_event) == Carbon::today()){
            return 'today';
        }else{
            return 'upcoming';
        }
    }


    //loads the edit form for this event
    public function editForm($id){

        return view('members.events.editForm')->with(['event'=> Event::findOrFail($id), 'committees' => Committee::all()]);
    }

    //update changed fields
    public function update(Request $request){

       $event = Event::findOrFail($request->event_id);
        $event->fill(['event_id'=>$request->event_id, 'status'=>$this->getStatus($request),
            'event_description'=>$request->event_description,
            'email'=>$request->email, 'location'=>$request->location, 'added_by'=>Auth::user()->email,
            'date_of_event'=>$request->date_of_event, 'committee_id'=>$request->committee_id]);
        $event->save();

        session()->flash('message', 'Event has been changed');

        return Redirect::action('EventsController@allEvents');

    }

    //delete this event
    public function delete($id){
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->back();
    }

    
}
