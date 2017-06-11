<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class AlumniController extends Controller
{
    //Update Alumni details
    public function update(Request $data, $member_id)
    {
        //Validate
        $this->validate($data, [
            'first_name' => 'required|max:60',
            'middle_name' => 'max:60',
            'last_name' => 'required|max:60',
            'email'=> 'required|max:60|email',
            'year' => 'required|max:60',
            'position_id' => 'required|max:60',
            'phone_number' => 'required|max:60'
        ]);

        $members = Member::findOrFail($member_id);

        $members->update($data->all());

        return redirect()->back()
            ->with('status', 'Executive Alumni has been updated successfully!!');
    }


    //Add new alumni
    public function addAlumni(Request $data)
    {
        $this->validate($data, [
            'first_name' => 'required|max:60',
            'middle_name' => 'max:60',
            'last_name' => 'required|max:60',
            'email'=> 'required|max:60|email|unique:members',
            'year' => 'required|max:60',
            'position_id' => 'required|max:60',
            'status_id' => 'required|max:60',
            'phone_number' => 'required|max:60',
            'approved' => 'max:60'
            ]);

        Member::create([
            'member_id' => 'MBR'.random_int(100,999),
            'first_name' => $data -> first_name,
            'middle_name' => $data -> middle_name,
            'last_name' => $data -> last_name,
            'email' => $data -> email,
            'year' => $data -> year,
            'position_id' => $data -> position_id,
            'status_id' => $data -> status_id,
            'phone_number' => $data -> phone_number,
            'approved' => $data -> approved
        ]);

        return redirect()->back()->with('status', 'Executive Alumni has been added successfully!!');

    }

    //Display view for adding a new alumni
    public function viewAddAlumni()
    {
        return view('members.addMember');
    }

    //Retrieve and view all executive alumni
    public function viewAlumni()
    {
        $alumni = Member::where('status_id', '3')
            ->with('position', 'status')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('alumni.viewAlumni')->with('alumni', $alumni);
    }

    public function delete($member_id)
    {
        $user = Member::findOrFail($member_id);
        $user->delete();
        return redirect()->back()->with('status', 'Executive Alumni has been deleted successfully!!');
    }

    //return the alumni executive page for visitors
    public function viewExecutives(){
        $alumni = Member::where('status_id', 3)->where('approved', 1)->where('position_id', '3')->get();
        $alumni_2016 = $alumni->where('year', 2016);
        $alumni_2015 = $alumni->where('year', 2015);
        $alumni_2014 = $alumni->where('year', 2014);
        $alumni_2013 = $alumni->where('year', 2013);
        $alumni_2012 = $alumni->where('year', 2012);
        $alumni_2011 = $alumni->where('year', 2011);
        $alumni_2010 = $alumni->where('year', 2010);
        $alumni_2009 = $alumni->where('year', 2009);
        $alumni_2008 = $alumni->where('year', 2008);
        $alumni_2007 = $alumni->where('year', 2007);

        return view('web view.executiveAlumniTimeline')
            ->with(['alumni_2016'=> $alumni_2016,
                'alumni_2015'=>$alumni_2015,
                'alumni_2014'=>$alumni_2014,
                'alumni_2013'=>$alumni_2013,
                'alumni_2012'=>$alumni_2012,
                'alumni_2011'=>$alumni_2011,
                'alumni_2010'=>$alumni_2010,
                'alumni_2009'=>$alumni_2009,
                'alumni_2008'=>$alumni_2008,
                'alumni_2007'=>$alumni_2007]);
    }
    //return the alumni ordinary page for visitors
    public function viewOrdinaries(){
        $alumni = Member::where('status_id', 4)->where('approved', 1)->where('position_id', '4')->get();
        $alumni_2016 = $alumni->where('year', 2016);
        $alumni_2015 = $alumni->where('year', 2015);
        $alumni_2014 = $alumni->where('year', 2014);
        $alumni_2013 = $alumni->where('year', 2013);
        $alumni_2012 = $alumni->where('year', 2012);
        $alumni_2011 = $alumni->where('year', 2011);
        $alumni_2010 = $alumni->where('year', 2010);
        $alumni_2009 = $alumni->where('year', 2009);
        $alumni_2008 = $alumni->where('year', 2008);
        $alumni_2007 = $alumni->where('year', 2007);

        return view('web view.ordinaryAlumniTimeline')
            ->with(['alumni_2016'=> $alumni_2016,
                'alumni_2015'=>$alumni_2015,
                'alumni_2014'=>$alumni_2014,
                'alumni_2013'=>$alumni_2013,
                'alumni_2012'=>$alumni_2012,
                'alumni_2011'=>$alumni_2011,
                'alumni_2010'=>$alumni_2010,
                'alumni_2009'=>$alumni_2009,
                'alumni_2008'=>$alumni_2008,
                'alumni_2007'=>$alumni_2007]);
    }
}
