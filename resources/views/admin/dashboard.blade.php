@extends("admin.layouts.master")

@section('title')
    Admin Dashboard
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1>Welcome, {{ Auth::user()->name }}</h1>
    </div>
    <h3>Course Structure</h3>
    <p>You can use these tools to add to the overall course structure. You may add a new unit, and to each unit, you may add the subsequent lessons that belong to each unit.</p>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>New unit</h4>
                    <p>A unit is a collection of different lessons relating to a specific big idea within the course. Each unit within the course should be rather broad, seeing how each lesson goes further in depth with the big idea.</p>
                    <a href="{{ route('admin.new.unit') }}" class="btn btn-block btn-outline-primary">New unit</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4>New lesson</h4>
                    <p>A lesson is a single component of a unit and contains information in regard to a topic within the course. A lesson should be more specific and in depth, focusing more on a <b>single</b> concept rather than a big idea.</p>
                    <a href="{{ route('admin.new.lesson') }}" class="btn btn-block btn-outline-primary">New lesson</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <br>
        <h3>Notification Management</h3>
        <br>
        <table class="table table-bordered">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Body</th>
              <th scope="col">Delete?</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($notifications as $notification)
              <tr>
                <th scope="row">{{$notification->id}}</th>
                <td>{!! $notification->title !!}</td>
                <td>{!! $notification->body !!}</td>
                <td><a class="btn btn-outline-danger btn-block" href="/admin/notification/delete/{{ $notification->id }}">Delete notification?</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="card text-white bg-info mb-3">
          <div class="card-header">Userbase</div>
          <div class="card-body">
            <h5 class="card-title">{{ count($users) }} Registered Users</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-white bg-success mb-3">
          <div class="card-header">Course Information</div>
          <div class="card-body">
            <h5 class="card-title">{{count($units) .  " " . str_plural('Unit', count($units)) }}</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card text-white bg-warning mb-3">
          <div class="card-header">Cloud9 Requests</div>
          <div class="card-body">
            <h5 class="card-title">{{count($requests) .  " " . str_plural('Request', count($units)) }} <a class="btn btn-sm btn-outline-light" data-toggle="modal" data-target="#c9-requests">View Requests</a></h5>
          </div>
        </div>
      </div>
    </div>
    <br>

    <!-- Modal -->
    <div class="modal fade" id="c9-requests" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cloud9 Account Requests</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Delete request?</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($requests as $request)
                  <tr>
                    <td>{{ $request->id }}</td>
                    <td>{{ $request->name }}</td>
                    <td>{{ $request->email }}</td>
                    <td><a href="{{ route('admin.request.delete', $request->id) }}" class="btn btn-block btn-lg btn-outline-danger">Delete?</a></td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endsection
