@extends('layouts.app')
@section('title', 'HiDev | Job Detail')

@section('content')
    <main class="job-detail px-5">
        <div class="mt-5 text-center">
            <h1>Job Detail</h1>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col my-auto mx-auto">
                    <img src="{{asset('storage/images/001-google.png')}}" alt="" style="width: 300px">
                </div>
                <div class="col my-auto mx-auto">
                    <p>Jakarta, Indonesia</p>
                    <h1 class="h2">Google Inc.</h1>
                    <h5>Software Engineer</h5>
                    <p>Salary: Rp. 15.000.000</p>
                    <p><b>Description:</b></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur doloribus nam repellendus sunt? Ad dicta dolorem ei
                        us hic ipsa, iusto nemo placeat quaerat ut voluptate! Aliquam aliquid ducimus eveniet hic in iusto laboriosam maiores, n
                        esciunt nulla possimus soluta, suscipit? A ab ad adipisci architecto assumenda atque autem blanditiis dolor dolorum ea e
                        os et expedita facere laudantium maxime natus necessitatibus, nemo officia omnis quae quod ratione repudiandae, sapiente se
                        d similique sunt tempore ut veniam voluptate voluptatibus. Cum dicta quaerat quis ratione unde? A asp ernatur consectetur
                        consequuntur, quas recusandae rerum saepe similique voluptatem.
                    </p>

                    <button class="btn btn-primary">Apply Now</button>
                </div>
            </div>
        </div>
    </main>
@endsection
