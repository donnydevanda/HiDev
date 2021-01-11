<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index($slug){
        $auth = Auth::check();
        $users = User::where('id', $slug)->firstOrFail();
        return view('profile', ['auth' => $auth, 'users' => $users]);
    }

    function profile(){
        $auth = Auth::check();
        $userId = 0;
        if($auth){
            $userId = Auth::user()->id;
        }
        $users = User::where('id', $userId)->firstOrFail();
        return view('profile', ['auth' => $auth, 'users' => $users]);
    }
}
