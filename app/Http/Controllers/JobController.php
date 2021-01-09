<?php

namespace App\Http\Controllers;

use App\Job;

class JobController extends Controller
{
    function index(){
        $jobs = Job::all();
        return view('home', ['jobs' => $jobs]);
    }
}
