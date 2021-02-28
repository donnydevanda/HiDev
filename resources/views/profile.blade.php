@extends('layouts.app')
@section('title', 'HiDev | Profile')

@section('content')
    <main class="profile py-5 text-center">

        <div class="container">
            <h1>Profile</h1>
            <img class="rounded-circle mt-3" src="https://ui-avatars.com/api/?size=180&name={{$users->name}}" alt="">
            <h2 class="mt-4">{{$users->name}}</h2>
            <h5 class="mt-2">{{$users->email}} - {{$users->number}}</h5>
            <p>{{$users->location}}</p>
            <div class="card mx-auto py-2 px-1" style="width: 18rem">
                <p class="h6">Portfolio:</p>
                <a href="{{$users->link}}">{{$users->link}}</a>
            </div>
        </div>

    </main>
@endsection
