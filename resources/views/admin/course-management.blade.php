@extends("admin.layouts.master")

@section('title')
    Course Management
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1>Course Management</h1>
    </div>
    @if (Session::has('success-message'))
       <div class="alert alert-success"><b>Hey!</b> {{ Session::get('success-message') }}</div>
    @endif
    @if (Session::has('danger-message'))
       <div class="alert alert-danger"><b>Hey!</b> {{ Session::get('danger-message') }}</div>
    @endif
    <div id="accordion">
      @if (count($units) > 0)
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
                        @if(count($unit->lessons) > 0)
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
                                    @foreach($unit->lessons as $lesson)
                                            @if($lesson->unit_id == $unit->id)
                                                <tr>
                                                    <td>{{ $lesson->title }}</td>
                                                    <td><a class="btn btn-block btn-outline-primary" href="/admin/course/manage/delete/lesson/{{ $lesson->id }}/lecture">Delete?</a></td>
                                                    <td><a class="btn btn-block btn-outline-danger" href="/admin/course/manage/delete/lesson/{{ $lesson->id }}/recap">Delete?</a></td>
                                                    <td><a class="btn btn-block btn-outline-success" href="/admin/course/manage/delete/lesson/{{ $lesson->id }}/challenge">Delete?</a></td>
                                                    <td><a class="btn btn-block btn-outline-warning" href="/admin/course/manage/delete/lesson/{{ $lesson->id }}">Delete entire lesson?</a></td>
                                                </tr>
                                            @endif
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-warning">
                                <b>Hey!</b> There's no lessons for this unit yet. Go ahead and add some.
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            <br>
        @endforeach
      @else
        <div class="alert alert-warning">
            <b>Hey!</b> There's no units yet! Go ahead and add some.
        </div>
      @endif
    </div>
@endsection
