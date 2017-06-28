<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Redirect;
use App\Member;
use App\Status;
use App\ExecutivePhoto;
use Mail;


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
            'approved' => 0,
        ]);
        //send mail notification
        $this->sendMail($request);

        //redirect back to same page
        return redirect()->back()->with('status',
            'Your join request has ben sent. Please wait for a confirmation email!');
    }

    //send password to notify the admin
    public function sendMail(Request $data){
        Mail::send('Mail.newMember',
            ['member' => $data],
            function ($m) use ($data) {
                $m->to($data['email'], 'Me')
                    ->subject('New member has joined unzabeca');
            });
    }

    //changed the approval state of a members who has joined via the web portal
    public function approve($id){

        return 'hi';
    }


    //Retrieve members and view them
    public function viewMembers()
    {

        //get approved members
        $members = Member::where('approved', '1')
                    ->with('position', 'status')
                    ->orderBy('created_at', 'desc')
                    ->get();

        //get pending members
        $Pmembers = Member::where('approved', '0')->orderBy('created_at', 'desc')->get();
        return view('members.viewMembers')
            ->with(['members' => $members, 'Pmembers' => $Pmembers]);
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
            'first_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email'=> 'required|max:255|email',
            'year' => 'required|max:255',
            'position_id' => 'max:255',
            'status_id' => 'required|max:255',
            'phone_number' => 'required|max:255'
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
            'first_name' => 'required|max:255',
            'middle_name' => 'max:255',
            'last_name' => 'required|max:255',
            'email'=> 'required|max:255|email|unique:members',
            'year' => 'required|max:255',
            'position_id' => 'max:255',
            'status_id' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'photo' => 'mimes:jpg,jpeg,png,bmp|max:15360',
           'approved' => 'max:255'
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
}
