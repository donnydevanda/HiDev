@extends('layouts.app')
@section('title', 'HiDev | Home')

@section('content')
    <main class="home px-5">
        <div class="row">
            <div class="col my-auto mx-auto">
                <img src="{{url('/hero.png')}}" alt="" style="width: 85vh;">
            </div>
            <div class="col my-auto mx-auto">
                <h1 style="font-weight: bolder">Search Job Here!</h1>
                <h2>Your Dream Job is Waiting</h2>
                <form action="{{url('/')}}" class="form-inline mx-auto">
                    <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search Job ..." aria-label="Search" style="width: 40%">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <h4 class="mt-5">Latest Job</h4>
                <div class="row" style="width: 80%">
                    @foreach($jobs as $job)
                        <div class="card" style="width: 14rem;">
                            <a href="{{route('jobDetail', $job->id)}}"><img class="card-img-top px-5 py-5" src="{{asset('storage/'.$job->image)}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <a class="h5" href="{{route('jobDetail', $job->id)}}">{{$job->name}}</a>
                                <p>{{$job->role}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="container mt-4 mx-auto">
                    {{$jobs->links()}}
                </div>
            </div>
        </div>
    </main>
@endsection
