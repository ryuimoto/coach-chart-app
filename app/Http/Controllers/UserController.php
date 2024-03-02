<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Container\RewindableGenerator;
use PhpParser\Node\Expr\FuncCall;

class UserController extends Controller
{
    public function Users(){
        $users = User::get();
        return view('users',['users' => $users]);
    }

    public function User(User $user){

        return view('user',['user' => $user]);
    }

    public function UserCreate(){
        return view('user_create');
    }

    public function UserCreatePost(Request $request){
        $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'age' => 'required|integer',
            'prefectures' => 'required|max:50',
            'municipalities' => 'required|max:50',
            'address' => 'required|max:100',
            'profession_id' => 'required|integer',
            'building_name' => 'required|max:50',
            'hobby' => 'required|integer',
            'personality_id' => 'required|integer',
            'other' => 'string|max:100',
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'prefectures' => $request->prefectures,
            'municipalities' => $request->municipalities,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'profession_id' => $request->profession_id,
            'hobby' => $request->hobby,
            'personality_id' => $request->personality_id,
            'other' => $request->other,
        ]);

        return redirect()->route('users');
    }




    public function UserEdit(User $user){
        return view('user_edit',['user' => $user]);
    }

    public function UserEditPost(Request $request,User $user){
        $request->validate([
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'age' => 'required|integer',
            'prefectures' => 'required|max:50',
            'municipalities' => 'required|max:50',
            'address' => 'required|max:100',
            'profession_id' => 'required|integer',
            'building_name' => 'required|max:50',
            'hobby' => 'required|integer',
            'personality_id' => 'required|integer',
            'other' => 'string|max:100',
        ]);


        $user->update();

        return back();
    }

    public function UserDelete(Request $request){
        $userObject = json_decode($request->user);
        $user = User::where('id',$userObject->id)->first();

        $user->delete();

        return redirect()->route('users');
        
    }

    
}
