<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Users(){
        return view('users');
    }

    public function User($id){
        return view('user');
    }

    public function UserEdit($id){
        return view('user_edit');
    }

    
}
