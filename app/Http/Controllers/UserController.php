<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function Users(){
        $users = User::get();
        return view('users',['users' => $users]);
    }

    public function User(User $user){

        return view('user',['user' => $user]);
    }

    public function UserEdit($id){
        return view('user_edit');
    }

    
}
