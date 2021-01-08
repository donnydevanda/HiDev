@extends('layouts.app')
@section('title', 'HiDev | Job')

@section('content')
    <main class="job px-5">
        <div class="text-center mt-5">
            <h1>Job Available</h1>
            <p>Showing 99 Jobs</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mt-5" style="width: 16rem;">
                    <a href=""><img class="card-img-top px-5 py-5" src="{{asset('storage/images/001-google.png')}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <a class="h5" href="">Google</a>
                        <p>Software Engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
