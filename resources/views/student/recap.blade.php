@extends("student.layouts.master")

@section("title")
    {{  $lesson->title }}
@endsection

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $lesson->title }}</h1>
    </div>

    {!! $lesson->recap->recap !!}

    <hr>
    <a href="/student/unit/{{ $lesson->unit->id }}/lesson/{{ $lesson->id }}/challenge" class="btn btn-block btn-lg btn-outline-primary">Continue to lesson challenge...</a>
    <br><br>
@endsection
