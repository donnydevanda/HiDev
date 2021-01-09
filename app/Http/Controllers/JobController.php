<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index(Request $request){
        $jobs = Job::where('name', 'like', "%".$request->search."%")->paginate(3);
        return view('home', ['jobs' => $jobs]);
    }

    function job(){
        $jobs = Job::all();
        $jobsCount = count($jobs);
        return view('job', ['jobs' => $jobs, 'jobsCount' => $jobsCount]);
    }

    function jobDetail(Request $request, $slug){
        $jobs = Job::where('id', $slug)->firstOrFail();
        return view('job-detail', ['jobs' => $jobs]);
    }

    function jobAdd(){
        return view('job-add');
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
        $jobs = Job::where('id', $slug) -> firstOrFail();
        return view('job-update', ['jobs' => $jobs]);
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
