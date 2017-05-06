<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('web view/home');
});

//these are member pages for authenticated users
//these pages are accessible only to authenticated users
Route::group(['middleware' => 'auth'], function () {

    //user routes
Route::get('/members/my_profile', 'users_controller@my_profile');
Route::get('/members/profile/{id}', 'users_controller@profile');
    Route::get('/members/viewMembers', 'MembersController@viewMembers');
    Route::get('/alumni/viewAlumni', 'AlumniController@viewAlumni');
    Route::get('/members/viewAddMember', 'MembersController@viewAddMember');
    Route::get('/alumni/viewAddMember', 'AlumniController@viewAddAlumni');
    Route::post('members/addMember', 'MembersController@addMember');
    Route::post('alumni/addAlumni', 'AlumniController@addAlumni');
Route::get('/members/my_profile/edit', 'users_controller@edit_form');
Route::get('/members/profile/edit/{id}', 'users_controller@form');
Route::post('members/profile/update', 'users_controller@update');
Route::post('members/change_password', 'PasswordController@change_password');

//events routes
Route::get('members/events', 'EventsController@allEvents');
Route::post('/members/events/create', 'EventsController@create');
Route::get('/members/events/edit/{id}', 'EventsController@editForm');
Route::post('/members/events/update', 'EventsController@update');
Route::get('/members/events/delete/{id}', 'EventsController@delete');

});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index');
