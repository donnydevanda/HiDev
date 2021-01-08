<nav class="navbar navbar-expand-lg navbar-light px-5">
    <a class="navbar-brand" href="#"><span class="h3" style="color: #01e075; font-weight: bolder">Hi</span><span class="h3" style="color: #ffffff; font-weight: bold">Dev</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/job')}}">Job</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/status')}}">Status</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/profile')}}">Profile</a>
            </li>
        </ul>
    </div>
</nav>
