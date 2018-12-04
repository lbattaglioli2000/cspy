@extends('student.layouts.master')

@section('title')
    Resource not found! :(
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
                                        Well this is awkward.
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        This resource doesn't exist.
                                    </h1>

                                </div>
                            </div> <!-- / .row -->

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <img style="width: 100%" class="img-fluid img-thumbnail" src="/assets/img/ruhroh.gif">
                        </div>
                        <div class="col-md-7">
                            <div class="alert alert-info">
                                Chances are, this course resource isn't published to the classroom yet. Try checking back in the future.
                                If you believe this is an error, reach out to us via email at <b>hi@codegeek.org</b>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection