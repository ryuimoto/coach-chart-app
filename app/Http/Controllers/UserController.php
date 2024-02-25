<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function Users(){
        $users = User::get();

        return view('users',$users);
    }

    public function User($id){
        return view('user');
    }

    public function UserEdit($id){
        return view('user_edit');
    }

    
}
