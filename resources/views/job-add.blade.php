@extends('layouts.app')
@section('title', 'HiDev | Job Add')

@section('content')
    <main class="job-add px-5">
        <div class="text-center mt-5">
            <h1>Job Add</h1>
        </div>
        <div class="container mt-5">
            <form>
                <div class="form-group">
                    <label for="jobName">Company Name</label>
                    <input type="text" class="form-control" id="jobName" placeholder="ex: HiDev">
                </div>
                <div class="form-group">
                    <label for="jobLocation">Company Location</label>
                    <input type="text" class="form-control" id="jobLocation" placeholder="ex: Jakarta, Indonesia">
                </div>
                <div class="form-group">
                    <label for="jobRole">Job Role</label>
                    <input type="text" class="form-control" id="jobRole" placeholder="ex: Software Engineer">
                </div>
                <div class="form-group">
                    <label for="jobSalary">Salary</label>
                    <input type="number" class="form-control" id="jobSalary" placeholder="ex: 15000000">
                </div>
                <div class="form-group">
                    <label for="jobDescription">Description</label>
                    <textarea class="form-control" id="jobDescription" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for=jobImage">Company Logo</label>
                    <input type="file" class="form-control-file" id="jobImage">
                </div>
                <button class="btn btn-primary mt-3">Add Job</button>
            </form>
        </div>
    </main>
@endsection
