@extends("student.layouts.master")

@section('title')
    Chat
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Live Chat <small>Powered by Gitter.im</small></h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <iframe frameborder="none" src="https://gitter.im/Open-CodeGeek/CSPY/~embed" width="100%" height="650px">
        </div>
    </div>
@endsection