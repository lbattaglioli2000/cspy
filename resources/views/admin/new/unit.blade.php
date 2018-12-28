@extends('admin.layouts.master')

@section('title')
    New Unit
@endsection

@section('content')
    <h1>New Unit</h1>
        @if(count($units) > 0)
            <p>Before you make a new unit, here are the existing units:</p>
            <ol>
                @foreach($units as $unit)
                    <li>{{  $unit->title }}</li>
                @endforeach
            </ol>
        @else
            <div class="alert alert-warning">
                <b>Hey, you have no units!</b> What is a course with no content!? Make a new unit now!
            </div>
        @endif
    <form method="post" action="{{ route('admin.new.unit.publish') }}">

        {{ csrf_field() }}

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

        <div class="form-group">
            <label>Unit title</label>
            <input type="text" class="form-control" name="title" id="title">
        </div>

        <div class="form-group">
            <label>Unit description</label>
            <textarea class="editor form-control" id="body" name="body" rows="2"></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-block btn-outline-primary" type="submit">Create unit!</button>
        </div>
    </form>
@endsection
