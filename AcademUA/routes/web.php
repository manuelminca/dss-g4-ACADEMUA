<?php
use App\User;

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
    $users = User::all();
    return view('home')->with('users', $users); //"hello world"; //view('welcome');
});

Route::get('/users/delete/{id}', function ($id) {
    $user = User::find($id);
    $user->delete();
    $users = App\User::all();
    return view('home')->with('users', $users); //"hello world"; //view('welcome');
});
