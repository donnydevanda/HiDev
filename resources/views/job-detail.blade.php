@extends('layouts.app')
@section('title', 'HiDev | Job Detail')

@section('content')
    <main class="job-detail py-5">
        <div class="container">
            <div class="text-center">
                <h1>Job Detail</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-xs-12 py-3 px-5 mx-auto my-auto">
                    <img src="{{asset('storage/'.$jobs->image)}}" alt="{{$jobs->name}}">
                </div>
                <div class="col py-5 mx-auto my-auto">
                    <h2>{{$jobs->name}}</h2>
                    <p class="h5">{{$jobs->role}}</p>
                    <p class="location">{{$jobs->location}}</p>
                    <p><b>Description:</b></p>
                    <p>{{$jobs->description}}</p>
                    <p><b>Salary:</b> Rp.{{number_format($jobs->salary)}}</p>
                    @if($auth && $userRole == 'USER')
                        <form action="{{url('/job/detail')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id" value="{{$jobs->id}}"/>
                            </div>
                            <input type="submit" value="Apply Now" class="btn btn-primary mt-3">
                        </form>
                    @endif
                    @if($auth && $userRole == 'COMPANY')
                        <a href="{{route('jobUpdate', $jobs->id)}}"><button class="btn btn-primary">Update Job</button></a>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
