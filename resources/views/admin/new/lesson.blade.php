@extends('admin.layouts.master')

@section('title')
    New Lesson
@endsection

@section('content')
    <h1>New Lesson</h1>

    <form method="post" action="{{ route("admin.new.lesson.publish") }}">
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
                <label>Lesson title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label>Unit</label>
                <select class="form-control" id="unit" name="unit">
                    @foreach($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->title }}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label>Lesson description</label>
                <textarea class="form-control" id="summernote" name="body" rows="2"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-block btn-outline-primary" type="submit">Create lesson!</button>
            </div>
    </form>
@endsection
