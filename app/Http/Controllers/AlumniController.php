<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class AlumniController extends Controller
{
    //Add new alumni
    public function addAlumni(Request $data)
    {
        $this->validate($data, [

            ]);

    }

    //Display view for adding a new alumni
    public function viewAddAlumni()
    {
        return view('members.addMember');
    }

    //Retrieve and view all alumni
    public function viewAlumni()
    {
        $alumni = Member::where('status_id', 'alumni')
            ->orderBy('first_name', 'desc')
            ->take(10)
            ->get();
        return view('alumni.viewAlumni')->with('alumni', $alumni);
    }
}
