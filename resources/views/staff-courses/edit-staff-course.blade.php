@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/staff-courses"><i class="fas fa-book"></i></a></li>
    <li class="breadcrumb-item"><a href="/staff-courses">Staff Courses</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Staff Course</li>
@endsection

@section('page-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Edit Staff Course</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/staff-courses/{{ $staff_course->id }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <div class="input-group input-group-merge @error('name') has-danger @enderror">
                                <div class="input-group-prepend"> <span class="input-group-text">
                                        <i class="ni ni-single-copy-04"></i></span>
                                </div>
                                <input value="{{ $staff_course->name }}" required name="name" type="text" placeholder="Name of the Course" class="form-control @error('name') is-invalid @enderror">
                            </div>
                            @error('name')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-merge @error('details') has-danger @enderror">
                                <div class="input-group-prepend"> <span class="input-group-text">
                                        <i class="ni ni-single-copy-04"></i></span>
                                </div>
                                <input value="{{ $staff_course->details }}" required name="details" type="text" placeholder="Details of the Course" class="form-control @error('details') is-invalid @enderror">
                            </div>
                            @error('details')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-group input-group-merge @error('location') has-danger @enderror">
                                <div class="input-group-prepend"> <span class="input-group-text">
                                        <i class="ni ni-square-pin"></i></span>
                                </div>
                                <input value="{{ $staff_course->location }}" required name="location" type="text" placeholder="Location" class="form-control @error('location') is-invalid @enderror">
                            </div>
                            @error('location')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="input-daterange datepicker row align-items-center" data-provide="datepicker"
                        data-date-format="yyyy/mm/dd" data-orientation="top auto" aria-orientation="vertical">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control" name="start_date" placeholder="Start date" value="{{ $staff_course->start_date }}" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control" name="end_date" placeholder="End date" value="{{ $staff_course->end_date }}" type="text">
                                </div>
                            </div>
                        </div>
                    </div>

                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section ('custom-script')
    <script src="{{ asset("/js/shape/add-shape.js") }}"></script>
     <script src="{{asset('/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
   
    <script>
    $('.datepicker').datepicker({
        orientation: "top"
    });

</script>


    @if(session()->has('type'))
        <script>
            $.notify({
                // options
                title: '<h4 style="color:white">{{ session('title') }}</h4>',
                message: '{{ session('message') }}',
            },{
                // settings
                type: '{{ session('type') }}',
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
