@extends('student.layouts.master')

@section('title')
    Notifications
@endsection

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Pretitle -->
                                    <h6 class="header-pretitle">
                                        Here are all of your
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Notifications
                                    </h1>

                                </div>
                            </div> <!-- / .row -->

                        </div>

                    </div>

                    @foreach(App\Notification::all() as $notification)
                        <div class="card">
                            <div class="card-body">
                                <h3>{{ $notification->title }}</h3>
                                {!! $notification->body !!}
                            </div>
                        </div>
                    @endforeach

                    <hr>

                    <a href="{{ route('student') }}" class="btn btn-lg btn-outline-primary btn-block">Return to student dashboard</a>

                    <br>

                </div>
            </div>
        </div>
    </div>
@endsection