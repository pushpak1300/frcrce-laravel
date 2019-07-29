@section('header')
<div class="header pb-6 d-flex align-items-center"
    style="min-height: 500px; background-image: url(../../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-7 col-md-10">
                <h1 class="display-2 text-white">{{ $user->first_name }} {{ $user->last_name }}.</h1>
                <p class="text-white mt-0 mb-5">This is your profile page.</p>
                <a href='/timeline' class="btn btn-neutral">View Timeline</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-content')
<div class="row">
    <div class="col-xl-4 order-xl-2">
        <div class="card card-profile">
            <img src="../../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                        <a href="#">
                        <img src="{{$user->photo}}" class="rounded-circle">
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body pt-10">
                <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading hide"></span>
                                    <span class="description"></span>
                                </div>
                                <div>
                                    <span class="heading hide"></span>
                                    <span class="description hide"></span>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                <div class="text-center" style="margin=20 0 0 0 px;">
                    <h5 class="h3">{{ $user->first_name }} {{ $user->last_name }},<span class="">{{$age}}</span>
                    </h5>

                </div>
            </div>
        </div>


    </div>
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Profile </h3>
                </div>
                <div class="col-4 text-right">
                    <a href="#!" class="btn btn-sm btn-primary">edit</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Email address</label>
                                <input type="email" id="input-email" class="form-control"
                                    placeholder="jesse@example.com" value="{{ $user->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="designation">Designation</label>
                                <input type="text" id="designation" class="form-control" placeholder="Designation"
                                    value="{{$staff->designation }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">First name</label>
                                <input type="text" id="input-first-name" class="form-control" placeholder="First name"
                                    value="{{ $user->first_name }}">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-last-name">Last name</label>
                                <input type="text" id="input-last-name" class="form-control" placeholder="Last name"
                                    value="{{ $user->last_name }}">
                            </div>
                        </div>
                         
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Date of Birth</label>
                                <input type="text" id="input-first-name" class="form-control"
                                    value="{{ $user->date_of_birth }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-last-name">Contact No</label>
                                <input type="text" id="input-last-name" class="form-control"
                                    value="{{ $user->contact_no }}">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Address</label>
                                <input id="input-address" class="form-control" placeholder="Home Address"
                            value="{{$user->adress}}" type="text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">City</label>
                                <input type="text" id="input-city" class="form-control" placeholder="City"
                            value="{{$user->city}}">
                            </div>
                        </div>
                    </div>
                    
                        </div>
                    </div>
                </div>
                <hr class="my-4" />

            </form>
        </div>
    </div>
</div>
</div>
@endsection



<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FRCRCE IT</title>


    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('assets/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="{{ URL::asset('assets/vendor/animate.css/animate.min.css') }}">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{  URL::asset('assets/css/argon.min9f1e.css?v=1.1.0') }}" type="text/css">
    <!-- Custom CSS -->
    @yield('custom-styles')
</head>

<body>


    <!-- Sidenav -->
    @include('components.sidenav')

    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        @include('components.topnav')

        <!-- Header -->
        @yield('header')
        <!-- Page content -->
        <div class="container-fluid mt--6">
            @yield('page-content')
            <!-- Footer -->
            @include('components.footer')
        </div>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->

    <script src="{{ URL::asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    {{--Notification--}}
    <script src="{{ URL::asset('assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ URL::asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>


    @yield('custom-script')
    <script src="{{ URL::asset('assets/js/argon.min9f1e.js') }}"></script>
</body>


</html>



@section ('custom-script')
@if(session()->has('type'))
<script>
    $.notify({
        // options
        title: '<h4 style="color:white">{{ session('
        title ') }}</h4>',
        message: '{{ session('
        message ') }}',
    }, {
        // settings
        type: '{{ session('
        type ') }}',
        allow_dismiss: true,
        placement: {
            from: "top",
            align: "right"
        },
        offset: 20,
        spacing: 10,
        z_index: 1031,
        delay: 3000,
        timer: 1000,
        animate: {
            enter: 'animated fadeInDown',
            exit: 'animated fadeOutUp'
        }
    });

</script>
@endif
@endsection
