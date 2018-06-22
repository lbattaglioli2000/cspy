@extends('admin.layouts.master')

@section('title')
    New Recap
@endsection

@section('content')
    <h1>New Challenge</h1>

    <form method="post" action="{{ route("admin.new.challenge.publish") }}">
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
                    You are creating a new <b>challenge</b>. Please select, from the drop down menu below, what lesson you want to associate this recap with.
                    <input type="hidden" value="{{ $lessonUnit }}" name="unit">
                </div>
            </div>

            <div class="form-group">
                <label>Lesson</label>
                <select class="form-control" id="lesson" name="lesson">

                    @foreach($lessons as $lesson)
                        <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
              <label>Lesson challenge</label>
              <textarea class="form-control" id="summernote" name="challenge" rows="10"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-block btn-outline-primary" type="submit">Create recap!</button>
            </div>
    </form>
@endsection
