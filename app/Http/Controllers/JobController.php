<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    function index(Request $request){
        $auth = Auth::check();
        $jobs = Job::where('name', 'like', "%".$request->search."%")->paginate(3);
        return view('home', ['auth' => $auth, 'jobs' => $jobs]);
    }

    function job(){
        $auth = Auth::check();
        $userRole = 0;
        if ($auth){
            $userRole = Auth::user()->role;
        }
        $jobs = Job::all();
        $jobsCount = count($jobs);
        return view('job', ['auth' => $auth, 'userRole' => $userRole, 'jobs' => $jobs, 'jobsCount' => $jobsCount]);
    }

    function jobDetail(Request $request, $slug){
        $auth = Auth::check();
        $userRole = 0;
        if ($auth){
            $userRole = Auth::user()->role;
        }
        $jobs = Job::where('id', $slug)->firstOrFail();
        return view('job-detail', ['auth' => $auth, 'userRole' => $userRole, 'jobs' => $jobs]);
    }

    function jobAdd(){
        $auth = Auth::check();
        return view('job-add', ['auth' => $auth]);
    }

    function jobAddPost(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'role' => 'required',
            'salary'=> 'required|numeric|min: 10000',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png'
        ]);

        Job::create([
            'users_id' => 1,
            'name' => $request->name,
            'location' => $request->location,
            'role' => $request->role,
            'salary' => $request->salary,
            'description' => $request->description,
            'image' => $request->file('image')->store('images', 'public')
        ]);

        return redirect()->back();
    }

    function jobUpdate(Request $request, $slug){
        $auth = Auth::check();
        $jobs = Job::where('id', $slug) -> firstOrFail();
        return view('job-update', ['auth' => $auth, 'jobs' => $jobs]);
    }

    function jobUpdatePost(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'role' => 'required',
            'salary'=> 'required|numeric|min: 10000',
            'description' => 'required',
        ]);

        if($request->image != NULL){
            Job::where('id', $request->id)->update([
                'name'=>$request->name,
                'location'=>$request->location,
                'role'=>$request->role,
                'salary'=>$request->salary,
                'description'=>$request->description,
                'image' => $request->file('image')->store('images', 'public')
            ]);
        } elseif($request->image == NULL){
            Job::where('id', $request->id)->update([
                'name'=>$request->name,
                'location'=>$request->location,
                'role'=>$request->role,
                'salary'=>$request->salary,
                'description'=>$request->description,
            ]);
        }

        return redirect()->back();
    }
}
