@extends('layouts.app-footer')
@section('title', 'HiDev | Job')

@section('content')
    <main class="job py-5">

        <div class="container">
            <div class="header row">
                <div class="col">
                    <div class="text-center">
                        <h1>Job Available</h1>
                        <p>Showing {{$jobsCount}} Jobs</p>
                        @if($auth && $userRole == 'COMPANY')
                            <a href="{{ route('jobAdd')}}"><button class="btn btn-primary mt-1 mb-3">Add Job</button></a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="content row">
                @foreach($jobs as $job)
                    <div class="col mx-auto">
                        <div class="card mt-2 mx-auto" style="width: 15rem;">
                            <a href="{{route('jobDetail', $job->id)}}"><img class="card-img-top px-5 py-5" src="{{asset('storage/'.$job->image)}}" alt="{{$job->name}}"></a>
                            <div class="card-body">
                                <a class="h5" href="{{route('jobDetail', $job->id)}}">{{$job->name}}</a>
                                <p>{{$job->role}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



    </main>
@endsection
