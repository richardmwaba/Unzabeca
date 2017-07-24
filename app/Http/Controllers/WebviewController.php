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
        $executive=Member::where('status_id', '1')
                    ->with('position', 'status', 'executivePhoto')
                    ->orderby('position_id')
                    ->get();
        return view('web view.executive')->with('executive', $executive);
    }

    //Download Constitution
    public function downloadConstitution()
    {
        $file = public_path()."/pdf/constitution.pdf";
        $headers = array('Content-Type: application/pdf',);
        return response()->download($file, 'Unzabeca Constitution.pdf', $headers);
    }

    public function viewConstitution()
    {
        $filename = 'Unzabeca Constitution.pdf';
        $path = public_path()."/pdf/constitution.pdf";

        return response()->make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
