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

        <form action="" method="post">
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

    </div>
  </div>

@endsection
