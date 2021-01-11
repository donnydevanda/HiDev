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
                    @if($userRole == 'USER')
                        <th scope="col">Logo</th>
                        <th scope="col">Company</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    @endif
                    @if($userRole == 'COMPANY')
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Accept</th>
                        <th scope="col">Reject</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @if($userRole == 'USER')
                    @foreach($transactions as $trans)
                        @if($trans->users_id == $userId)
                            <tr>
                                <td><img src="{{asset('storage/'.$trans->jobs->image)}}" alt="" style="width: 120px; height: 120px"></td>
                                <td class="align-middle">{{$trans->jobs->name}}</td>
                                <td class="align-middle">{{$trans->jobs->role}}</td>
                                <td class="align-middle">{{$trans->status}}</td>
                                <form action="{{url('statusWithdraw')}}" method="POST" class="" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" class="form-control" name="id" value="{{$trans->id}}"/>
                                    <td class="align-middle"><input type="submit" class="btn btn-primary" value="Withdraw"></td>
                                </form>
                        @endif
                    @endforeach
                @endif

                @if($userRole == 'COMPANY')
                    @foreach($transactions as $trans)
                        @if($trans->jobs->users_id == $userId)
                            <tr>
                                <td class="align-middle">{{$trans->users->name}}</td>
                                <td class="align-middle">{{$trans->jobs->role}}</td>
                                <td class="align-middle">{{$trans->status}}</td>
                                <td class="align-middle"><a href="http://127.0.0.1:8000/profile/{{$trans->users_id}}">View</a></td>
                                <form action="{{url('statusAccept')}}" method="POST" class="" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" class="form-control" name="id" value="{{$trans->id}}"/>
                                    <td class="align-middle"><input type="submit" class="btn btn-primary" value="Accept"></td>
                                </form>
                                <form action="{{url('statusReject')}}" method="POST" class="" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" class="form-control" name="id" value="{{$trans->id}}"/>
                                    <td class="align-middle"><input type="submit" class="btn btn-secondary" value="Reject"></td>
                                </form>
                        @endif
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </main>
@endsection






