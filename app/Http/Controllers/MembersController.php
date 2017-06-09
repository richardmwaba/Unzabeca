<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Redirect;
use App\Member;
use App\Status;
use App\ExecutivePhoto;


class MembersController extends Controller
{

    //show join form
    public function joinForm()
    {
        return view('web view.joinUs')->with('status', Status::all());
    }

    //save joining member
    public function joinSave(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:60',
            'middle_name' => 'max:60',
            'last_name' => 'required|max:60',
            'email'=> 'required|max:60|email|unique:members',
            'year' => 'required|max:60',
            'position_id' => 'max:60',
            'status_id' => 'required|max:60',
            'phone_number' => 'required|max:60',
        ]);

        Member::create([
            'member_id' => 'MBR-'.random_int(100,999),
            'first_name' => $request -> first_name,
            'middle_name' => $request -> middle_name,
            'last_name' => $request -> last_name,
            'email' => $request -> email,
            'year' => $request -> year,
            'position_id' => $request -> position_id,
            'status_id' => $request -> status_id,
            'phone_number' => $request -> phone_number,
        ]);


        return redirect()->back()->with('status', 'Your join request has ben sent. Please wait for a confirmation email!');
    }


    //Retrieve users and view them
    public function viewMembers()
    {
        $members = Member::where('approved', '1')
                        ->with('position', 'status')
                        ->orderBy('created_at', 'desc')
                        ->get();
        //Calculate number of days to automatically set status value to alumni
        $today = Carbon::today();
        foreach($members as $member)
        {
            $joined = Carbon::parse($member->created_at);
            $difference = $joined->diffInMonths($today, false);

            //Check the difference
            if($difference >= 7 AND $member->status_id == '2')
            {
                $member->fill([
                    'status_id' => '4'
                ]);
                $member->save();

                $member->status_id;
            }elseif ($difference >= 7 AND $member->status_id == '1')
            {
                $member->fill([
                    'status_id' => '3'
                ]);
                $member->save();

                $member->status_id;
            }
        }

        //Return members view
        return view('members.viewMembers')->with('members', $members);
    }

    //Display view for adding a new member
    public function viewAddMember()
    {
        $status = Status::all();
        return view('members.addMember')->with('status', $status);
    }

    public function viewEditMember($member_id)
    {
        $members = Member::findOrFail($member_id);
        return view('members.viewMembers')->with('members', $members);
    }

    //Update member details
    public function update(Request $data, $member_id)
    {
        // validation
        $this->validate($data, [
            'member_id'=>'MBR-'.random_int(100,999),
            'first_name' => 'required|max:60',
            'middle_name' => 'max:60',
            'last_name' => 'required|max:60',
            'email'=> 'required|max:60|email',
            'year' => 'required|max:60',
            'position_id' => 'max:60',
            'status_id' => 'required|max:60',
            'phone_number' => 'required|max:60'
        ]);

        $members = Member::findOrFail($member_id);

        $members->update($data->all());

        return redirect()->back()
            ->with('status', 'Member has been updated successfully!!');
    }


    //Add a new member
    public function addMember(Request $data)
    {
        $this->validate($data, [
            'first_name' => 'required|max:60',
            'middle_name' => 'max:60',
            'last_name' => 'required|max:60',
            'email'=> 'required|max:60|email|unique:members',
            'year' => 'required|max:60',
            'position_id' => 'max:60',
            'status_id' => 'required|max:60',
            'phone_number' => 'required|max:60',
            'photo' => 'mimes:jpg,jpeg,png,bmp|max:15360',
           'approved' => 'max:60'
        ]);

        if($data->position_id == 1)
        {
            // stores image using public disk
            $filename = $data->photo->store('photo', 'public');
            $member_id = 'MBR-'.random_int(1000,9999);

            //Store member photo
            ExecutivePhoto::create([
                'member_id' => $member_id,
                'filename' => $filename
            ]);

            //Create new member
            Member::create([
                'member_id'=> $member_id,
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

        }else{

            //Generate member id
            $member_id = 'MBR-'.random_int(1000,9999);

            Member::create([
                'member_id'=> $member_id,
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

            //return redirect()->back()->with('status', 'Member has been added successfully!!');
        }

        return redirect()->back()->with('status', 'Member has been added successfully!!');
    }

    public function delete($member_id)
    {
        $user = Member::findOrFail($member_id);
        $user->delete();
        return redirect()->back()->with('status', 'Member has been deleted successfully!!');
    }

    public function changeState()
    {

    }
}
