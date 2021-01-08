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
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 40%">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <h4 class="mt-5">Latest Job</h4>
                <div class="card-deck" style="width: 80%">
                    <div class="card" style="width: 14rem;">
                        <a href=""><img class="card-img-top px-5 py-5" src="{{asset('storage/images/001-google.png')}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <a class="h5" href="">Google</a>
                            <p>Software Engineer</p>
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <a href=""><img class="card-img-top px-5 py-5" src="{{asset('storage/images/001-google.png')}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <a class="h5" href="">Google</a>
                            <p>Software Engineer</p>
                        </div>
                    </div>

                    <div class="card" style="width: 14rem;">
                        <a href=""><img class="card-img-top px-5 py-5" src="{{asset('storage/images/001-google.png')}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <a class="h5" href="">Google</a>
                            <p>Software Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
