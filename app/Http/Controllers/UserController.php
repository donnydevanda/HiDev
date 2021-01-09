<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index($slug){
        $users = User::where('id', $slug)->firstOrFail();
        return view('profile', ['users' => $users]);
    }
}
