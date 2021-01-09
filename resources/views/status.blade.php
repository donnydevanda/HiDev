@extends('layouts.app')
@section('title', 'HiDev | Status')

@section('content')
    <main class="status px-5">
        <div class="text-center mt-5">
            <h1>Status</h1>
            <p>Please check this page periodically</p>
            <table class="table table-hover text-center mt-3">
                <thead>
                <tr>
                    <th scope="col">Logo</th>
                    <th scope="col">Company</th>
                    <th scope="col">Role</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($transactions as $trans)
                    <tr>
                        <td><img src="{{asset('storage/'.$trans->jobs->image)}}" alt="" style="width: 120px; height: 120px"></td>
                        <td class="align-middle">{{$trans->jobs->name}}</td>
                        <td class="align-middle">{{$trans->jobs->role}}</td>
                        <td class="align-middle">{{$trans->status}}</td>
                        <td class="align-middle"><a href="{{route('jobDetail', $trans->jobs_id)}}"><button class="btn btn-primary">Withdraw</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
