<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function deleteProfile ($id){
        $user = new User();
        return $user.delete();
    }
}
