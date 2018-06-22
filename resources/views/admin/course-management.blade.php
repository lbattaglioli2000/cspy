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
                            {!! html_entity_decode($unit->title, ENT_QUOTES) !!}
                        </button>
                    </h5>
                </div>
                <div id="collapse{{ $unit->id }}" class="collapse" aria-labelledby="heading{{ $unit->id }}" data-parent="#accordion">
                    <div class="card-body">
                        <p><b>Unit Description:</b><br> {!! html_entity_decode($unit->description, ENT_QUOTES) !!}</p>
                        <div class="card">
                          <div class="card-body">
                            <h3>Unit management</h3>

                            <form action="/admin/course/manage/edit/unit/{{ $unit->id }}" method="post">
                              {{ csrf_field() }}
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">Unit name:</span>
                                  </div>
                                  <input type="hidden" value="{{ $unit->id }}" name="unit_id">
                                  <input type="text" class="form-control" value="{{ $unit->title }}" name="name" aria-describedby="inputGroup-sizing-default">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group">
                                  <textarea class="form-control" id="body" value="{{ $unit->description }}" name="description" rows="2">{!! $unit->description !!}</textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group">
                                  <button type="submit" class="btn btn-outline-primary">Update unit</button>
                                </div>
                              </div>
                            </form>
                            <hr>
                            <a href="/admin/course/manage/delete/unit/{{ $unit->id }}" class="btn btn-outline-danger">Delete enitre unit?</a>
                          </div>
                        </div>
                        <hr>
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

                                                    <td>
                                                      <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <a href="/admin/course/manage/delete/lesson/{{ $lesson->id }}/lecture" class="btn btn-danger {{ is_null($lesson->lecture) ? 'disabled' : null }}"><i class="far fa-trash-alt"></i></a>
                                                        <a href="/admin/course/manage/edit/lesson/{{ $lesson->id }}/lecture" class="btn btn-warning {{ is_null($lesson->lecture) ? 'disabled' : null }}"><i class="fas fa-edit"></i></a>
                                                        <a href="/student/unit/{{ $lesson->unit->id }}/lesson/{{ $lesson->id }}/lecture" target="_blank" class="btn btn-success {{ is_null($lesson->lecture) ? 'disabled' : null }}"><i class="fas fa-search"></i></a>
                                                      </div>
                                                    </td>

                                                    <td>
                                                      <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <a href="#" class="btn btn-danger {{ is_null($lesson->recap) ? 'disabled' : null }}"><i class="far fa-trash-alt"></i></a>
                                                        <a href="#" class="btn btn-warning {{ is_null($lesson->recap) ? 'disabled' : null }}"><i class="fas fa-edit"></i></a>
                                                        <a href="#" class="btn btn-success {{ is_null($lesson->recap) ? 'disabled' : null }}"><i class="fas fa-search"></i></a>
                                                      </div>
                                                    </td>

                                                    <td>
                                                      <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <a href="#" class="btn btn-danger {{ is_null($lesson->challenge) ? 'disabled' : null }}"><i class="far fa-trash-alt"></i></a>
                                                        <a href="#" class="btn btn-warning {{ is_null($lesson->challenge) ? 'disabled' : null }}"><i class="fas fa-edit"></i></a>
                                                        <a href="#" class="btn btn-success {{ is_null($lesson->challenge) ? 'disabled' : null }}"><i class="fas fa-search"></i></a>
                                                      </div>
                                                    </td>

                                                    <td>
                                                      <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                                        <a href="#" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                                        <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                        <a href="#" class="btn btn-success"><i class="fas fa-search"></i></a>
                                                      </div>
                                                    </td>
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
