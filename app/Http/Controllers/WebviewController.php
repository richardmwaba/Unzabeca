<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class WebviewController extends Controller
{
    // View General About Us
    public function viewGeneralAboutUs()
    {
        //View general information page
        return view('web view.general_about');
    }

    //View Committees
    public function viewCommittees()
    {
        //View Committees page
        return view('web view.committees');
    }

    //View Executive Members
    public function viewExecutive()
    {
        //View Executive page
        $executive=Member::where('status_id', 'Executive Member')->get();
        return view('web view.executive')->with('executive', $executive);
    }
}
