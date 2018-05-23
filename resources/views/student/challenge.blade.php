@extends("student.layouts.master")

@section("title")
    {{  $lesson->title }}
@endsection

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $lesson->title }}</h1>
    </div>

    {!! $lesson->challenge->challenge !!}

    <hr>
    <a href="{{ route('student') }}" class="btn btn-block btn-lg btn-outline-primary">Finish lesson!</a>
    <br><br>
@endsection
