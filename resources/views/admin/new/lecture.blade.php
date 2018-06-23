@extends('admin.layouts.master')

@section('title')
    New Lecture
@endsection

@section('content')
    <h1>New Lecture</h1>

    <form method="post" action="{{ route("admin.new.lecture.publish") }}">
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
                    You are creating a new <b>lecture</b> for <b>unit {{ $lessonUnit }}</b>. Please select, from the drop down menu below, what lesson you want to associate this lecture with.
                    <input type="hidden" value="{{ $lessonUnit }}" name="unit">
                </div>
            </div>

            <div class="form-group">
                <label>Lesson</label>
                <select class="form-control" id="lesson" name="lesson">

                    @foreach($lessons as $lesson)
                        <option value="{{ $lesson->id }}">Lesson {{ $lesson->id }}: {{ $lesson->title }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="basic-url">YouTube URL</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">https://youtube.com/watch?v=</span>
                    </div>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Insert YouTube video ID here" aria-describedby="basic-addon3">
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-block btn-outline-primary" type="submit">Create lecture!</button>
            </div>
    </form>
@endsection
