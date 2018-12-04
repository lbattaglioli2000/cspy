@extends('student.layouts.master')

@section('title')
    {{ $unit->title }}
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
                                            Welcome to
                                        </h6>

                                        <!-- Title -->
                                        <h1 class="header-title">
                                            {{ $unit->title }}
                                        </h1>

                                    </div>
                                </div> <!-- / .row -->

                            </div>

                        </div>

                        @if($unit->lessons()->count() > 0)

                            @foreach($unit->lessons as $lesson)
                                <div class="card">
                                    <div class="card-body">
                                        <h3>{{ $lesson->title }}</h3>
                                        {!! html_entity_decode($lesson->description) !!}
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a href="{{ route('student.lecture', $lesson->id) }}" class="btn btn-outline-primary btn-block btn-lg">Watch Lecture</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ route('student.recap', $lesson->id) }}" class="btn btn-outline-primary btn-block btn-lg">Read Recap</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ route('student.challenge', $lesson->id) }}" class="btn btn-outline-primary btn-block btn-lg">Try a Challenge</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            @endforeach

                        @else

                            <div class="alert alert-info">
                                <b>Sorry!</b> This unit has no lessons!
                            </div>

                        @endif
                        <hr>
                        <a href="{{ route('student') }}" class="btn btn-lg btn-outline-primary btn-block">Return to course overview</a>
                    </div>
                </div>
            </div>
        </div>
@endsection