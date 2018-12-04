@extends('student.layouts.master')

@section('title')
    {{ $lesson->title }}
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
                                        Lecture for
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        {{ $lesson->title }}
                                    </h1>

                                </div>
                            </div> <!-- / .row -->

                        </div>

                    </div>

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $lesson->lecture->url }}?rel=0" allowfullscreen></iframe>
                    </div>

                    <hr>

                    @if($lesson->recap()->exists())
                        <a href="{{ route('student.recap', $lesson->id) }}" class="btn btn-lg btn-outline-primary btn-block">Go to lesson recap</a> <a href="{{ route('student.unit', $lesson->unit->id) }}" class="btn btn-lg btn-outline-primary btn-block">Go back to unit overview</a>
                    @else
                        <a href="{{ route('student.unit', $lesson->unit->id) }}" class="btn btn-lg btn-outline-primary btn-block">Go back to unit overview</a>
                    @endif

                    <br>

                </div>
            </div>
        </div>
    </div>
@endsection