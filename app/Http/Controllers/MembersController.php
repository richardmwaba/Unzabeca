<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    //retrieve users and view them
    public function view_members()
    {
        //all members
        return view('members.view_users')->with('members', Member::all());
    }
    //view user profile
    public function profile($id)
    {

        $user = User::findOrFail($id);
        return view('members.profile.profile')->with('user', $user);

    }
}
