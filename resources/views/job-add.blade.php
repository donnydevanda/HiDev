@extends('layouts.app')
@section('title', 'HiDev | Job Add')

@section('content')
    <main class="job-add px-5">
        <div class="text-center mt-5">
            <h1>Job Add</h1>
        </div>
        <div class="container mt-5">
            <form action="{{url('job/add')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Company Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"/>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="location">Company Location</label>
                    <input type="text" class="form-control @error('location') is-invalid @enderror" name="location"/>
                    @error('location')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" class="form-control @error('role') is-invalid @enderror" name="role"/>
                    @error('role')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="number" class="form-control @error('salary') is-invalid @enderror" name="salary"/>
                    @error('salary')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description"/>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Image">Image</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <input type="submit" value="Add Job" class="btn btn-primary mt-3 @error('image') is-invalid @enderror">
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </form>
        </div>
    </main>
@endsection
