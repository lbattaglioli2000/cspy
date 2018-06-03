@extends('student.layouts.master')

@section('title')
  Cloud9 Account Request
@endsection

@section("content")
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2">Cloud9 Account Request</h1>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p>Are you on a Chrome device? Are you unable to install applications,
        like Python and PyCharm, on your system? No need to worry, we've got
        you covered! Just click the request button below if the information
        looks right. We'll reach out to you personally with more information
        later, once we approve your request.</p>

        <form action="{{ route('student.cloud9.request') }}" method="post">

          {{ csrf_field() }}

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <h3>Uh-oh! You have an error!</h3>
              <p>Have you submitted this before? If you have, you may already have an account, or we're reviewing your request now. Please check your email or contact us for more information!</p>
            </div>
          @endif

          <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
              @if(Session::has('alert-' . $msg))

              <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
              @endif
            @endforeach
          </div> <!-- end .flash-message -->

          <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" value="{{ Auth::user()->name }}" class="form-control" id="name" name="name">
          </div>

          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" value="{{ Auth::user()->email }}" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-outline-primary btn-block">Request account!</button>
          </div>

        </form>

        <div class="card text-white bg-success mb-3" style="max-width: 25rem;">
          <div class="card-header">Already have an account? Looking for the Cloud9 IDE?</div>
          <div class="card-body">
            <a href="https://c9.io/login" target="_blank" class="btn btn-outline-light btn-block btn-lg">Go to the Cloud9 IDE!</a>
          </div>
        </div>
    </div>
  </div>

@endsection
