@extends("student.layouts.master")

@section('title')
    Student Dashboard
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Course Dashboard</h1>
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
            <div id="accordion">
                @foreach($units as $unit)
                    <div class="card">
                        <div class="card-header" id="heading{{ $unit->id }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{ $unit->id }}" aria-expanded="false" aria-controls="collapse{{ $unit->id }}">
                                    Unit {{ $unit->id }}: {!! html_entity_decode($unit->title, ENT_QUOTES) !!}
                                </button>
                            </h5>
                        </div>
                        <div id="collapse{{ $unit->id }}" class="collapse" aria-labelledby="heading{{ $unit->id }}" data-parent="#accordion">
                            <div class="card-body">
                                <p><b>Unit Description:</b><br> {!! html_entity_decode($unit->description, ENT_QUOTES) !!}</p>
                                @if(count($lessons) > 0)
                                    <table class="table table-bordered responsive">

                                        <thead class="thead-dark">
                                            <tr>

                                                <th scope="col">Lesson</th>

                                                <th scope="col">Lecture</th>
                                                <th scope="col">Recap</th>
                                                <th scope="col">Challenge</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($lessons as $lesson)
                                                    @if($lesson->unit_id == $unit->id)
                                                        <tr>
                                                            <td>{{ $lesson->title }}</td>
                                                            <td><a class="btn btn-block btn-outline-primary" href="/student/unit/{{ $unit->id }}/lesson/{{ $lesson->id }}/lecture"><i class="fas fa-video"></i></a></td>
                                                            <td><a class="btn btn-block btn-outline-danger" href="/student/unit/{{ $unit->id }}/lesson/{{ $lesson->id }}/recap"><i class="fas fa-book"></i></a></td>
                                                            <td><a class="btn btn-block btn-outline-success" href="/student/unit/{{ $unit->id }}/lesson/{{ $lesson->id }}/challenge"><i class="fas fa-code"></i></a></td>
                                                        </tr>
                                                    @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <div class="alert alert-warning">
                                        <b>Hey!</b> There's no lessons for this unit yet. Stay tuned for more updates!
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
