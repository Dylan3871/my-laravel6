<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
/* metod index user */
    public function index(){

        $users = User::all();
        return view('users.index',[
            'users' => $users
        ]);
        return back(); 

    }
    public function store(){

    }
    public function delete(User $user){

        $user->delete();

        return back();

    }

}
