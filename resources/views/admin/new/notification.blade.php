@extends('admin.layouts.master')

@section('title')
    New Notification
@endsection

@section('content')
    <h1>New Notification</h1>

    <form method="post" action="{{ route("admin.new.notification.publish") }}">
        @if($errors->any())
            <div class="alert alert-danger">
                <h2>Error!</h2>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{  $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            {{ csrf_field() }}

            <div class="form-group">
                <div class="alert alert-info">
                    You are creating a new <b>notification</b>. These are system wide notifications that all registered users can see.
                </div>
            </div>
            <div class="form-group">
              <label>Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
              <label>Notification body</label>
              <textarea class="form-control" id="summernote" name="body" rows="10"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-block btn-outline-primary" type="submit">Create announcement!</button>
            </div>
    </form>
@endsection
