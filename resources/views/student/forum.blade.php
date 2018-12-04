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

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-10 col-xl-8">

                                    <!-- Image -->
                                    <img src="/assets/img/illustrations/lost.svg" alt="..." class="img-fluid mt--5 mb-4" style="max-width: 272px;">

                                    <!-- Title -->
                                    <h2>
                                        Having some trouble with your code? Feeling lost in the sauce? There's no need to worry.
                                    </h2>

                                    <!-- Content -->
                                    <p class="text-muted">
                                        This is a true story and totally not made up. This is going to be better in the long run but for now this is the way it is.
                                    </p>

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-primary">
                                        Try it for free
                                    </a>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Top Earners -->
                    <div class="card">
                        <div class="card-header">

                            <!-- Title -->
                            <h4 class="card-header-title">
                                Top Earners
                            </h4>

                        </div>
                        <div class="table-responsive mb-0">
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>
                                        Member
                                    </th>
                                    <th>
                                        Schedule
                                    </th>
                                    <th>
                                        Hours Billed
                                    </th>
                                    <th>
                                        Completion
                                    </th>
                                    <th>
                                        Effective Rate
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs d-inline-block mr-2">
                                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>

                                        <!-- Title -->
                                        <span>Dianna Smiley</span>

                                    </td>
                                    <td>
                                        <span class="text-success">●</span> On Schedule
                                    </td>
                                    <td>
                                        271
                                    </td>
                                    <td>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <span class="mr-2">55%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </td>
                                    <td>
                                        $55.25%
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs d-inline-block mr-2">
                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>

                                        <!-- Title -->
                                        <span>Ab Hadley</span>

                                    </td>
                                    <td>
                                        <span class="text-warning">●</span> Delayed
                                    </td>
                                    <td>
                                        44
                                    </td>
                                    <td>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <span class="mr-2">25%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </td>
                                    <td>
                                        $122.52%
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs d-inline-block mr-2">
                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>

                                        <!-- Title -->
                                        <span>Adolfo Hess</span>

                                    </td>
                                    <td>
                                        <span class="text-success">●</span> On Schedule
                                    </td>
                                    <td>
                                        271
                                    </td>
                                    <td>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <span class="mr-2">55%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </td>
                                    <td>
                                        $55.25%
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs d-inline-block mr-2">
                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>

                                        <!-- Title -->
                                        <span>Daniela Dewitt</span>

                                    </td>
                                    <td>
                                        <span class="text-warning">●</span> Delayed
                                    </td>
                                    <td>
                                        44
                                    </td>
                                    <td>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <span class="mr-2">25%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </td>
                                    <td>
                                        $122.52%
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs d-inline-block mr-2">
                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>

                                        <!-- Title -->
                                        <span>Miyah Myles</span>

                                    </td>
                                    <td>
                                        <span class="text-success">●</span> On Schedule
                                    </td>
                                    <td>
                                        271
                                    </td>
                                    <td>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <span class="mr-2">55%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </td>
                                    <td>
                                        $55.25%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Sales -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h4 class="card-header-title">
                                        Sales increased 45.2% this period!
                                    </h4>

                                </div>
                                <div class="col-auto mr--3">

                                    <!-- Caption -->
                                    <small class="text-muted">
                                        Show affiliate:
                                    </small>

                                </div>
                                <div class="col-auto">

                                    <!-- Toggle -->
                                    <div class="custom-control custom-checkbox-toggle">
                                        <input type="checkbox" class="custom-control-input" id="cardToggle" data-toggle="chart" data-target="#ordersChart" data-add='{"data":{"datasets":[{"data":[15,10,20,12,7,0,8,16,18,16,10,22],"backgroundColor":"#d2ddec","label":"Affiliate"}]}}'>
                                        <label class="custom-control-label" for="cardToggle"></label>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div>
                        <div class="card-body">

                            <!-- Chart -->
                            <div class="chart">
                                <canvas id="ordersChart" class="chart-canvas"></canvas>
                            </div>

                        </div>
                    </div>

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-4 order-lg-2">

                                    <!-- Image -->
                                    <div class="text-center">
                                        <img src="assets/img/illustrations/happiness.svg" alt="..." class="img-fluid mt--5 mt-lg-0 mb-4 mr-md--5" style="max-width: 272px;">
                                    </div>

                                </div>
                                <div class="col-12 col-lg-8 px-4 py-3 order-lg-1">

                                    <!-- Title -->
                                    <h2>
                                        We released 2008 new versions of our theme to make the world a better place.
                                    </h2>

                                    <!-- Content -->
                                    <p class="text-muted">
                                        This is a true story and totally not made up. This is going to be better in the long run but for now this is the way it is.
                                    </p>

                                    <!-- Button -->
                                    <a href="#!" class="btn btn-primary">
                                        Try it for free
                                    </a>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-xl-6">

                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">

                                            <!-- Title -->
                                            <h6 class="card-title text-uppercase text-muted mb-2">
                                                Budget
                                            </h6>

                                            <!-- Heading -->
                                            <span class="h2 mb-0">
                              $24,500
                            </span>

                                            <!-- Badge -->
                                            <span class="badge badge-soft-success mt--1">
                              +3.5%
                            </span>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Icon -->
                                            <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                                        </div>
                                    </div> <!-- / .row -->

                                </div>
                            </div>

                        </div>
                        <div class="col-12 col-xl-6">

                            <!-- Card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">

                                            <!-- Title -->
                                            <h6 class="card-title text-uppercase text-muted mb-2">
                                                Progress
                                            </h6>

                                            <div class="row align-items-center no-gutters">
                                                <div class="col-auto">

                                                    <!-- Heading -->
                                                    <span class="h2 mr-2 mb-0">
                                  84.5%
                                </span>

                                                </div>
                                                <div class="col">

                                                    <!-- Progress -->
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                </div>
                                            </div> <!-- / .row -->

                                        </div>
                                        <div class="col-auto">

                                            <!-- Icon -->
                                            <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                                        </div>
                                    </div> <!-- / .row -->

                                </div>
                            </div>

                        </div>
                    </div> <!-- / .row -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">

                            <!-- Header -->
                            <div class="mb-3">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a href="#!" class="avatar">
                                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                        </a>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Title -->
                                        <h4 class="card-title mb-1">
                                            Dianna Smiley
                                        </h4>

                                        <!-- Time -->
                                        <p class="card-text small text-muted">
                                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">4hr ago</time>
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
                            </div>

                            <!-- Text -->
                            <p class="mb-3">
                                I've been working on shipping the latest version of Launchday. The story I'm trying to focus on is something like "You're launching soon and need to be 100% focused on your product. Don't lose precious days designing, coding, and testing a product site. Instead, build one in minutes."
                            </p>

                            <p class="mb-4">
                                What do you y'all think? Would love some feedback from <a href="#!" class="badge badge-soft-primary">@Ab</a> or <a href="#!" class="badge badge-soft-primary">@Adolfo</a>?
                            </p>

                            <!-- Image -->
                            <p class="text-center mb-3">
                                <img src="assets/img/posts/post-1.jpg" alt="..." class="img-fluid rounded">
                            </p>

                            <!-- Buttons -->
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
                                            <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Ab Hadley">
                                                <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                            </a>
                                            <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Adolfo Hess">
                                                <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                            </a>
                                            <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Daniela Dewitt">
                                                <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                            </a>
                                            <a href="profile-posts.html" class="avatar avatar-xs" data-toggle="tooltip" title="Miyah Myles">
                                                <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                            </a>
                                        </div>

                                    </div>
                                    <div class="col-auto">

                                        <a href="#!" class="btn btn-sm btn-white">
                                            Share
                                        </a>

                                    </div>
                                </div> <!-- / .row -->
                            </div>

                            <!-- Divider -->
                            <hr>

                            <!-- Comments -->

                            <div class="comment mb-3">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a class="avatar" href="profile-posts.html">
                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                        </a>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Body -->
                                        <div class="comment-body">

                                            <div class="row">
                                                <div class="col">

                                                    <!-- Title -->
                                                    <h5 class="comment-title">
                                                        Ab Hadley
                                                    </h5>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Time -->
                                                    <time class="comment-time">
                                                        11:12
                                                    </time>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Text -->
                                            <p class="comment-text">
                                                Looking good Dianna! I like the image grid on the left, but it feels like a lot to process and doesn't really <em>show</em> me what the product does? I think using a short looping video or something similar demo'ing the product might be better?
                                            </p>

                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                            </div>

                            <div class="comment mb-3">
                                <div class="row">
                                    <div class="col-auto">

                                        <!-- Avatar -->
                                        <a class="avatar" href="profile-posts.html">
                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                        </a>

                                    </div>
                                    <div class="col ml--2">

                                        <!-- Body -->
                                        <div class="comment-body">

                                            <div class="row">
                                                <div class="col">

                                                    <!-- Title -->
                                                    <h5 class="comment-title">
                                                        Adolfo Hess
                                                    </h5>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- Time -->
                                                    <time class="comment-time">
                                                        11:12
                                                    </time>

                                                </div>
                                            </div> <!-- / .row -->

                                            <!-- Text -->
                                            <p class="comment-text">
                                                Any chance you're going to link the grid up to a public gallery of sites built with Launchday?
                                            </p>

                                        </div>

                                    </div>
                                </div> <!-- / .row -->
                            </div>

                            <!-- Divider -->
                            <hr>

                            <!-- Form -->
                            <div class="row align-items-start">
                                <div class="col-auto">

                                    <!-- Avatar -->
                                    <div class="avatar">
                                        <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>

                                </div>
                                <div class="col ml--2">

                                    <!-- Input -->
                                    <form>
                                        <label class="sr-only">Leave a comment...</label>
                                        <textarea class="form-control" placeholder="Leave a comment" rows="2"></textarea>
                                    </form>

                                </div>
                            </div> <!-- / .row -->

                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div>
    </div>

@endsection