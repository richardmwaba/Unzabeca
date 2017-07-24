<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use App\Member;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

//    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
            return view('auth.register')->with('members', Member::all());
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function register(Request $data)
    {
        $this->validate($data, [
            'email'=> 'unique:users|email',
            'password'=> 'required',
        ]);
        User::create([
            'email' => $data->email,
            'password' => bcrypt($data->password),
        ]);

        $this->sendMail($data);
        session()->flash('flash_message',
            $data->email.' has been promoted to user');
        return redirect()->back();
    }

    //send password to new user
    public function sendMail(Request $data){
        Mail::send('Mail.newUser',
            ['password' => $data['password']],
            function ($m) use ($data) {

                $m->to($data['email'], 'Me')
                    ->subject('You have been added to unzabeca');
            });
    }

}
