@extends('layouts.app-footer')
@section('title', 'HiDev | Home')

@section('content')
    <main class="home py-5 text-center">

        <div class="hero container py-5">
            <div class="col">
                <h1>Your Dream Job is Waiting for You!</h1>
                <p class="h4">Type company name on the field below and we will give you the best matching result.</p>
                <form action="{{url('/')}}" class="form-inline mx-auto mt-5">
                    <input class="bar form-control mr-sm-2" type="search" name="search" placeholder="Search Job ..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <div class="row mt-3">
                    @foreach($jobs as $job)
                        <div class="card mx-auto my-3" style="width: 13.3rem;">
                            <a href="{{route('jobDetail', $job->id)}}"><img class="card-img-top px-3 py-3" src="{{asset('storage/'.$job->image)}}" alt="Card image cap"></a>
                            <div class="card-body">
                                <a class="h5" href="{{route('jobDetail', $job->id)}}">{{$job->name}}</a>
                                <p>{{$job->role}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination row mt-3 mx-auto">
                    {{$jobs->links()}}
                </div>
            </div>
        </div>

        <div class="about container mt-1">
            <div class="row">
                <div class="col">
                    <h2>About Us</h2>
                    <p>Short video about our company description, market, and value.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/k8HEAN6x88s"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="social-media container mt-5">
            <div class="row">
                <div class="col">
                    <h2>Social Media</h2>
                    <p>Follow us to get out latest update.</p>
                </div>
            </div>
            <div class="row">
                <div class="col mt-2">
                    <a class="mx-2" href="https://www.facebook.com/hi.dev.969?_rdc=1&_rdr"><img src="{{asset('ic_facebook.svg')}}" alt="https://www.facebook.com/hi.dev.969?_rdc=1&_rdr"></a>
                    <a class="mx-2" href="https://www.instagram.com/hidev_idn/"><img src="{{asset('ic_instagram.svg')}}" alt="https://www.instagram.com/hidev_idn/"></a>
                    <a class="mx-2" href="https://twitter.com/HiDev_idn"><img src="{{asset('ic_twitter.svg')}}" alt="https://twitter.com/HiDev_idn"></a>
                    <a class="mx-2" href="https://www.youtube.com/channel/UCBN0zXpq4gsvIE5pn5vZdpg"><img src="{{asset('ic_youtube.svg')}}" alt="https://www.youtube.com/channel/UCBN0zXpq4gsvIE5pn5vZdpg"></a>
                </div>
            </div>
        </div>

    </main>
@endsection
