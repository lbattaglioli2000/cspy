@extends("student.layouts.master")

@section("title")
    {{  $lesson->title }}
@endsection

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $lesson->title }}</h1>
    </div>

    <iframe width="100%" height="700px" src="https://www.youtube.com/embed/{{ $lesson->lecture->url }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    <hr>
    <a href="/student/unit/{{ $lesson->unit->id }}/lesson/{{ $lesson->id }}/recap" class="btn btn-block btn-lg btn-outline-primary">Continue to lesson recap...</a>
    <br><br>
@endsection
