@extends("student.layouts.master")

@section('title')
    Student Dashboard
@endsection

@section('content')
    <div class="main-content">


        <!-- HEADER -->
        <div class="header">

            <!-- Image -->
            <img src="https://static.techspot.com/images2/news/bigimage/2018/11/2018-11-27-image-36.jpg" class="header-img-top" style="max-height: 450px" alt="...">

            <div class="container-fluid">

                <!-- Body -->
                <div class="header-body mt--5 mt-md--6">
                    <div class="row align-items-end">
                        <div class="col-auto">

                            <!-- Avatar -->
                            <div class="avatar avatar-xxl header-avatar-top">
                                <img src="{{ Auth::user()->profile_image_url }}" alt="..." class="avatar-img rounded-circle border border-4 border-body">
                            </div>

                        </div>
                        <div class="col mb-3 ml--3 ml-md--2">

                            <!-- Pretitle -->
                            <h6 class="header-pretitle">
                                Hey there,
                            </h6>

                            <!-- Title -->
                            <h1 class="header-title">
                                {{ Auth::user()->name }}
                            </h1>

                        </div>
                    </div> <!-- / .row -->
                    <div class="row align-items-center">
                        <div class="col">

                            <!-- Nav -->
                            <ul class="nav nav-tabs nav-overflow header-tabs">
                                <li class="nav-item">
                                    <a href="/student" class="nav-link active">
                                        Course
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/student/forum" class="nav-link">
                                        Forum
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div> <!-- / .header-body -->

            </div>
        </div>

        <!-- CONTENT -->
        <div data-toggle="lists" data-lists-values='["name"]'>
            <div class="container-fluid" data-toggle="lists" data-lists-class="listAlias" data-lists-values='["name"]'>
                <div class="row mb-4">
                    <div class="col">

                        <!-- Form -->
                        <form>
                            <div class="input-group input-group-lg input-group-merge">
                                <input type="text" class="form-control form-control-prepended search" placeholder="Search for a unit">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fe fe-search"></span>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div> <!-- / .row -->

                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tabPaneTwo" role="tabpanel">
                        <div class="row list">
                            @foreach(App\Unit::all() as $unit)
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">

                                            <div class="col ml--2">

                                                <!-- Title -->
                                                <h4 class="card-title mb-1 name">
                                                    <a href="{{ route('student.unit', $unit->id) }}">{{ $unit->title }}</a>
                                                </h4>

                                                <!-- Text -->
                                                <p class="card-text small text-muted mb-1">
                                                    {!! html_entity_decode($unit->description) !!}
                                                </p>

                                            </div>

                                            <div class="col-auto">

                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe fe-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#!" class="dropdown-item">
                                                            Action
                                                        </a>
                                                        <a href="#!" class="dropdown-item">
                                                            Another action
                                                        </a>
                                                        <a href="#!" class="dropdown-item">
                                                            Something else here
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </div> <!-- / .card-body -->
                                </div>

                            </div>
                            @endforeach
                        </div> <!-- / .row -->
                    </div>
                </div> <!-- / .tab-content -->

            </div>
        </div>

    </div> <!-- / .main-content -->
@endsection
