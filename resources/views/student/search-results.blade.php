@extends("student.layouts.master")

@section('title')
    Search Results
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Search Results: <small>{{ $query }}</small></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          @if (count($lessons) > 0)
            <div id="accordion">
                @foreach($lessons as $lesson)
                    <div class="card">
                        <div class="card-header" id="heading{{ $lesson->title }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{ $lesson->id }}" aria-expanded="false" aria-controls="collapse{{ $lesson->id }}">
                                    {{ $lesson->title }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapse{{ $lesson->id }}" class="collapse" aria-labelledby="heading{{ $lesson->id }}" data-parent="#accordion">
                            <div class="card-body">
                                <p><b>Lesson Description:</b><br> {!! html_entity_decode($lesson->description) !!}</p>
                                <ul>
                                  <li><a href="/student/unit/{{ $lesson->unit->id }}/lesson/{{ $lesson->id }}/lecture">Lecture</a></li>
                                  <li><a href="/student/unit/{{ $lesson->unit->id }}/lesson/{{ $lesson->id }}/recap">Recap</a></li>
                                  <li><a href="/student/unit/{{ $lesson->unit->id }}/lesson/{{ $lesson->id }}/challenge">Challenge</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
          @else
            <div class="alert alert-warning">
              <b>Sorry!</b> No lessons matched your search query.
            </div>
          @endif
        </div>
    </div>
@endsection
