<?php

namespace App\Http\Controllers;

use App\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommitteesController extends Controller
{
    //show all committees
    public function viewAll(){
        return view('members.committees.viewAll')->with('committees', Committee::all());
    }

    //save new committee
    public function create(Request $request){
        Committee::create($request->all());

        //set flash message
        session()->flash('flash_message', $request->committee_description.' has bee saved!');
        return $this->viewAll();
    }

    //edit form
    public function editForm(){
        return view('members.committees.editForm');
    }

    //update
    public function update(Request $request){
        $committee = Committee::findOrFail($request->committee_id);
        $committee->update($request->all());

        //show flash message
        session()->flash('flash_message', $request->committee_description.' has been updated!');
       return $this->viewAll();
    }

    //delete committee
    public function delete($id){
        $committee = Committee::findOrFail($id);
        $committee->delete();

        //show flash message
        session()->flash('flash_message', $id.' has been deleted successfully');
        return $this->viewAll();
    }
}
