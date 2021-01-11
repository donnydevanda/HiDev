@extends('layouts.app')
@section('title', 'HiDev | Job Detail')

@section('content')
    <main class="job-detail px-5">
        <div class="mt-5 text-center">
            <h1>Job Detail</h1>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col my-auto mx-auto">
                    <img src="{{asset('storage/'.$jobs->image)}}" alt="" style="width: 300px; height: 300px">
                </div>
                <div class="col my-auto mx-auto">
                    <p>{{$jobs->location}}</p>
                    <h1 class="h2">{{$jobs->name}}</h1>
                    <h5>{{$jobs->role}}</h5>
                    <p>Salary: Rp. {{number_format($jobs->salary)}}</p>
                    <p><b>Description:</b></p>
                    <p>{{$jobs->description}}</p>

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
