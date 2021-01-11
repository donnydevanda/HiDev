@extends('layouts.app')
@section('title', 'HiDev | Job')

@section('content')
    <main class="job px-5">
        <div class="text-center mt-5">
            <h1>Job Available</h1>
            <p>Showing {{$jobsCount}} Jobs</p>
            @if($auth && $userRole == 'COMPANY')
                <a href="{{ route('jobAdd')}}"><button class="btn btn-primary">Add Job</button></a>
            @endif
        </div>
        <div class="row mb-5">
            @foreach($jobs as $job)
                    <div class="card mt-5 mx-4" style="width: 16rem;">
                        <a href="{{route('jobDetail', $job->id)}}"><img class="card-img-top px-5 py-5" src="{{asset('storage/'.$job->image)}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <a class="h5" href="{{route('jobDetail', $job->id)}}">{{$job->name}}</a>
                            <p>{{$job->role}}</p>
                        </div>
                    </div>
            @endforeach
        </div>
    </main>
@endsection
