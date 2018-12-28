@extends('student.layouts.master')

@section('title')
    {{ $lesson->title }}
@endsection

@section('content')

    <script src="https://cdn.datacamp.com/datacamp-light-latest.min.js"></script>

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col col-lg-2 col-xl-4">
                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Pretitle -->
                                    <h6 class="header-pretitle">
                                        Challenge for
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        {{ $lesson->title }}
                                    </h1>

                                </div>
                            </div> <!-- / .row -->

                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">
                            {!! $lesson->challenge->challenge !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-10 col-xl-8">
                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Pretitle -->
                                    <h6 class="header-pretitle">
                                        Write your code here
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        IDE
                                    </h1>

                                    <br>

                                    <div data-datacamp-exercise data-lang="python">
                                        <code data-type="pre-exercise-code">{{ $lesson->challenge->pre_exercise_code }}</code>
                                        <code data-type="sample-code">{{ $lesson->challenge->sample_code }}</code>
                                        <code data-type="solution">{{ $lesson->challenge->solution }}</code>
                                        <code data-type="sct">{{ $lesson->challenge->sct }}</code>
                                        <div data-type="hint">{{ $lesson->challenge->hint }}</div>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div>

                    </div>

                    <br>



                </div>

            </div>

            <a href="{{ route('student.unit', $lesson->unit->id) }}" class="btn btn-lg btn-outline-primary btn-block">Finish this lesson</a>

            <br>

        </div>
    </div>

@endsection