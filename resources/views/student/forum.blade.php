@extends('student.layouts.master')

@section('title')
    Forum
@endsection

@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">

                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">

                            <!-- Pretitle -->
                            <h6 class="header-pretitle">
                                CodeGeek
                            </h6>

                            <!-- Title -->
                            <h1 class="header-title">
                                Platform Feed
                            </h1>

                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="card">
                            <div class="card-body">
                                <h3>Uh-oh!</h3>
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if (\Illuminate\Support\Facades\Session::has('success'))
                        <div class="card">
                            <div class="card-body">
                                <h3>News flash!</h3>
                                <div class="alert alert-success">
                                    {{ \Illuminate\Support\Facades\Session::get('success') }}
                                </div>
                            </div>
                        </div>
                @endif

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-xl-8">

                                    <!-- Image -->
                                    <img src="/assets/img/illustrations/lost.svg" alt="..." class="img-fluid mt--5 mb-4" style="max-width: 272px;">

                                    <!-- Title -->
                                    <h2>
                                        Having trouble with your code?! Feelin' lost in the sauce?! There's no need to worry.
                                    </h2>

                                    <!-- Content -->
                                    <p class="text-muted">
                                        We don't want anyone to feel lost or intimidated, which is why we built this forum. Please, make use of this forum
                                        to post any issues, comments, questions, errors, or concerns you run into and someone
                                        will help you!
                                    </p>

                                    <!-- Button -->
                                    <button id="postButton" onclick="$('#postForm').toggle(500); $('html,body').animate({ scrollTop: $('#postButton').offset().top});" class="btn btn-primary">
                                        Post a question
                                    </button>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <div id="postForm" class="card" style="display: none">
                        <div class="card-body">

                            <form method="post" action="{{ route('student.forum.post') }}" class="mb-4" >

                                @csrf

                                <!-- Project name -->
                                <div class="form-group">
                                    <label>
                                        Post title
                                    </label>
                                    <input type="text" name="title" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>What unit in the course does this post pertain to?</label>
                                    <select class="form-control" id="unit" name="unit">
                                        <option></option>
                                        @foreach(\App\Unit::all() as $unit)
                                            <option value="{{ $unit->id }}">{{ $unit->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Project description -->
                                <div class="form-group">
                                    <label class="mb-1">
                                        Post description
                                    </label>

                                    <small class="form-text text-muted">
                                        You should be as descriptive as possible. You should include code, along with a detailed description of any errors you got and the steps you exercised to try and fix it.
                                    </small>

                                    <div data-toggle="quill" class="ql-container ql-snow">
                                        <div class="ql-editor" data-gramm="false" contenteditable="true"></div>
                                        <div class="ql-clipboard" contenteditable="true" tabindex="-1">

                                        </div>
                                        <div class="ql-tooltip ql-hidden">
                                            <a class="ql-preview" target="_blank" href="about:blank"></a>
                                            <input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">
                                            <a class="ql-action"></a><a class="ql-remove"></a>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="post" id="postBody" value="">

                                <!-- Divider -->
                                <hr class="mt-5 mb-5">

                                <!-- Buttons -->
                                <button onclick="$('#postBody').val(document.querySelector('.ql-editor').innerHTML)" type="submit" class="btn btn-block btn-primary">
                                    Submit your post!
                                </button>

                            </form>
                        </div>
                    </div>

                    @if(\App\Post::all()->count() == 0)
                        <div class="alert alert-info">
                            Hey, there's no posts! Why don't you introduce yourself to the community to get things started in here!
                        </div>
                    @endif

                    <!-- Card -->
                    @foreach(\App\Post::all() as $post)
                        <div class="card">
                            <div class="card-body">

                                <!-- Header -->
                                <div class="mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <a href="#!" class="avatar">
                                                <img src="{{ $post->user->profile_image_url }}" alt="..." class="avatar-img rounded-circle">
                                            </a>

                                        </div>
                                        <div class="col ml--2">

                                            <!-- Title -->
                                            <h4 class="card-title mb-1">
                                                {{ $post->user->name }}
                                            </h4>

                                            <!-- Time -->
                                            <p class="card-text small text-muted">
                                                <span class="fe fe-clock"></span> {{ $post->created_at->diffForHumans() }}
                                            </p>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>

                                <!-- Text -->
                                {!! $post->post !!}

                                <!-- Buttons -->
                                <!--
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">

                                            <a href="#!" class="btn btn-sm btn-white">
                                                😬 1
                                            </a>
                                            <a href="#!" class="btn btn-sm btn-white">
                                                👍 2
                                            </a>
                                            <a href="#!" class="btn btn-sm btn-white">
                                                Add Reaction
                                            </a>

                                        </div>
                                        <div class="col-auto mr--3">

                                            <div class="avatar-group d-none d-sm-flex">
                                                @foreach($post->comments() as $comment)
                                                    <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                                                        <img src="{{ $comment->user()->profile_image_url }}" alt="..." class="avatar-img rounded-circle">
                                                    </a>
                                                @endforeach
                                            </div>

                                        </div>
                                        <div class="col-auto">

                                            <a href="#!" class="btn btn-sm btn-white">
                                                Share
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                -->

                                <!-- Divider -->
                                <hr>

                                <!-- Comments -->

                                @if($post->comments()->count() == 0)
                                    <div class="alert alert-info">
                                        Hey, there's no comments! Post one!
                                    </div>
                                @endif

                                @foreach($post->comments as $comment)
                                    <div class="comment mb-3">
                                        <div class="row">
                                            <div class="col-auto">

                                                <!-- Avatar -->
                                                <a class="avatar" href="#">
                                                    <img src="{{ $comment->user->profile_image_url }}" alt="..." class="avatar-img rounded-circle">
                                                </a>

                                            </div>
                                            <div class="col ml--2">

                                                <!-- Body -->
                                                <div class="comment-body">

                                                    <div class="row">
                                                        <div class="col">

                                                            <!-- Title -->
                                                            <h5 class="comment-title">
                                                                {{ $comment->user->name }}
                                                            </h5>

                                                        </div>
                                                        <div class="col-auto">

                                                            <!-- Time -->
                                                            <time class="comment-time">
                                                                {{ $comment->created_at->toDayDateTimeString() }}
                                                            </time>

                                                        </div>
                                                    </div> <!-- / .row -->

                                                    <!-- Text -->
                                                    <p class="comment-text">
                                                        {!! $comment->comment !!}
                                                    </p>

                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </div>
                                @endforeach

                                <!-- Divider -->
                                <hr>

                                <!-- Form -->
                                <div class="row align-items-start">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <div class="avatar">
                                            <img src="{{ Auth::user()->profile_image_url }}" alt="..." class="avatar-img rounded-circle">
                                        </div>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Input -->
                                        <form action="{{ route('student.comment.post') }}" method="post">
                                            @csrf
                                            <label class="sr-only">Leave a comment...</label>
                                            <input type="hidden" name="post" value="{{ $post->id }}">
                                            <textarea name="comment" class="form-control" placeholder="Leave a comment" rows="2"></textarea>
                                            <br>
                                            <button type="submit" class="btn btn-outline-primary">Post comment!</button>
                                        </form>

                                    </div>
                                </div> <!-- / .row -->

                            </div>
                        </div>
                    @endforeach
                </div>
            </div> <!-- / .row -->
        </div>
    </div>

@endsection