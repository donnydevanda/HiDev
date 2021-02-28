@extends('layouts.app-footer')
@section('title', 'HiDev | Download')

@section('content')
    <main class="download py-5">

        <div class="container-fluid">
            <div class="header row">
                <div class="col">
                    <div class="text-center">
                        <h1>Coming Soon</h1>
                        <p>Take a look to our HiDev mobile apps design.</p>
                    </div>
                </div>
            </div>

            <div class="button row text-center">
                <div class="col">
                    <a href="https://www.figma.com/file/YuMu4vTDGkRlN24nROUlXp/hidev?node-id=0%3A1">
                        <button class="btn btn-primary px-3 py-2 mx-2">View Prototype</button>
                    </a>
                    <a href="https://bisanara.com/kmg-hidev-4115/">
                        <button class="btn btn-secondary px-3 py-2 mx-2">Bisanara</button>
                    </a>
                </div>
            </div>

            <div class="content container pt-5">
                <div class="row">
                    <div class="col mx-auto"><img class="" src="{{ asset('d_home.jpg') }}" alt=""></div>
                    <div class="col mx-auto"><img class="" src="{{ asset('d_forum.jpg') }}" alt=""></div>
                    <div class="col mx-auto"><img class="" src="{{ asset('d_calendar.jpg') }}" alt=""></div>
                    <div class="col mx-auto"><img class="" src="{{ asset('d_profile.jpg') }}" alt=""></div>
                </div>
            </div>
        </div>

    </main>
@endsection
