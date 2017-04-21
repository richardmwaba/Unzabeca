<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class users_controller extends Controller
{

    //view current user profile
    public function my_profile()
    {

        $user = Auth::User();
        return view('members.profile.my_profile')->with('user', $user);

    }


    //load the edit form with data
    public function edit_form()
    {
        $user = Auth::user();
        return view('members.profile.edit_profile')->with('user', $user);


    }

    //load the edit form with data for user
    public function form($id)
    {
        $user = User::findOrFail($id);
        return view('members.profile.edit_profile')->with('user', $user);


    }

    //create new user record
    protected function create(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
            'email' => 'required|email|max:255|unique:users',
        ]);
        User::create([
            'email' => $request->email,
            'user_id' => $request->user_id,
            'password' => bcrypt($request->password)]);
        return Redirect::action('users_controller@view_users');
    }

    //stores profile changes to database
    public function update(Request $request)
    {
        $user = Auth::user();

        if ($request->has('email')) {
            $user->email = $request->email;
        }elseif($request->has('user_id')){
            $user->email = $request->user_id;
        }

        $user->save();
        session()->flash('flash_message', 'Profile updated');
        Return Redirect::action('HomeController@index');

    }

    //delete record
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        Return redirect()->back();
    }
}
