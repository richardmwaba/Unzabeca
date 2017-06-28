<?php

namespace App\Http\Controllers;

use App\Committee;
use App\EventPhoto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Event;
use Auth;
use Redirect;
use Illuminate\Support\Facades\Storage;
use Validator;

class EventsController extends Controller
{
    //view all events to unauthenticated member
    public function webviewEvents($id)
    {

        //check the requested event time and display  the events accordingly
        switch ($id) {

            case 1:
                return view('web view.events')
                    ->with([
                        'events' => Event::where('status', 'Upcoming')->get(),
                        'time' => 'Upcoming',
                        'all' => Event::all(),
                    ]);
            case 2:
                return view('web view.events')
                    ->with([
                        'events' => Event::where('status', 'Today')->get(),
                        'time' => 'Today',
                        'all' => Event::all()
                    ]);
            case 3:
                return view('web view.events')
                    ->with([
                        'events' => Event::where('status', 'Past')->get(),
                        'time' => 'Past',
                        'all' => Event::all()
                    ]);
            default:
                return view('web view.events')
                    ->with([
                        'events' => Event::all(),
                        'time' => 'All',
                        'all' => Event::all()
                    ]);
        }
    }

    //view all events to authenticated member
    public function allEvents()
    {

        return view('members.events.allEvents')
            ->with(['events' => Event::all(),
                'committees' => Committee::all()]);
    }

    //create new event
    public function create(Request $request)
    {
        //return 'has photo';

        //crete the record
        Event::create([
            'event_id' => $request->event_id,
            'status' => $this->getStatus($request),
            'event_description' => $request->event_description,
            'email' => $request->email,
            'location' => $request->location,
            'added_by' => Auth::user()->email,
            'date_of_event' => $request->date_of_event,
            'committee_id' => $request->committee_id]);
//save the image
        $this->savePhoto($request);
        session()->flash('flash_message', 'Event has been added');

        //return to the previous page
        return redirect()->back();
    }

    //validate photo
    public function validatePhoto(Request $request)
    {
        // validate the variables ======================================================
        // if any of these variables don't exist, add an error to the $errors array
        $data = array();
        $validator = Validator::make($request->all(), [
            'photo' => 'mimes:jpeg,png,bmp,jpg|max:15360',

        ]);
        // return a response ===========================================================
        // if there are any errors in the errors array, return a success boolean of false
        if ($validator->fails()) {

            //send response to json
            $data['success'] = true;
            //save the rest of the fields
            $this->create($request);
            //return $request->all();
            //function for validation and saving the event photo
            $this->savePhoto($request);
            session()->flash('flash_message', 'Event has been added');

        } else {

            //has wrong photo requirements
            $validator->errors()
                ->add('photo', 'and less than 15 MB');
            // show a message of success and provide a false success variable
            $data['success'] = false;
        }
        $data['errors'] = $validator->errors();


    }

    //stores event photos
    public function savePhoto(Request $request)
    {
        // stores image using public disk
        $photoPath = $request->file('photo')->store('public/EventImages');
        // saves to db
        EventPhoto::create(['event_id' => $request->event_id, 'photoPath' => $photoPath]);
    }

    //sets and returns the status of this event based on event date
    public function getStatus(Request $request)
    {
        if (Carbon::parse($request->date_of_event) < Carbon::today()) {
            return 'Past';
        } elseif (Carbon::parse($request->date_of_event) == Carbon::today()) {
            return 'Today';
        } else {
            return 'Upcoming';
        }
    }


    //loads the edit form for this event
    public function editForm($id)
    {

        return view('members.events.editForm')
            ->with(['event' => Event::findOrFail($id),
                'committees' => Committee::all()]);
    }

    //update changed fields
    public function update(Request $request)
    {

        $event = Event::findOrFail($request->event_id);
        $event->fill(['status' => $this->getStatus($request),
            'event_description' => $request->event_description,
            'email' => $request->email,
            'location' => $request->location,
            'added_by' => Auth::user()->email,
            'date_of_event' => $request->date_of_event,
            'committee_id' => $request->committee_id]);
        $event->save();

        session()->flash('flash_message', 'Event has successfully been changed');

        return Redirect::action('EventsController@allEvents');

    }

    //delete this event and it's associated image
    public function delete($id)
    {
        $event = Event::findOrFail($id);
        if ($event->photo != null) {
            Storage::delete($event->photo->photoPath);
        }
        session()->flash('flash_message',
            $event->event_description . 'has successfully been deleted');
        $event->delete();
        return redirect()->back();
    }


}
