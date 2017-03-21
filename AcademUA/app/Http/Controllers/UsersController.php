<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UsersController extends Controller
{
    public function deleteProfile ($id){
        $user = new User();
        $user->deleteUser($id);
    }
}
