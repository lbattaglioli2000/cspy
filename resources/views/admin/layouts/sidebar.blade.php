<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>System Tools</span>
            </h6>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin') ? 'active' : null }}" href="{{ route('admin') }}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/users') ? 'active' : null }}" href="{{ route('admin.users') }}">
                    <span data-feather="users"></span>
                    Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/admins') ? 'active' : null }}" href="{{ route('admin.admins') }}">
                    <span data-feather="shield"></span>
                    Admins
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/new/notification') ? 'active' : null }}" href="{{ route('admin.new.notification') }}">
                    <span data-feather="bell"></span>
                    New Notification
                </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Course Structure Tools</span>
            </h6>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/new/unit') ? 'active' : null }}" href="{{ route('admin.new.unit') }}">
                    <span data-feather="book"></span>
                    New Unit
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/new/lesson') ? 'active' : null }}" href="{{ route('admin.new.lesson') }}">
                    <span data-feather="edit"></span>
                    New Lesson
                </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Instructional Tools</span>
            </h6>

            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#new-lecture">
                    <span data-feather="video"></span>
                    New Lecture
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#new-recap">
                    <span data-feather="book-open"></span>
                    New Recap
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#new-challenge">
                    <span data-feather="terminal"></span>
                    New Challenge
                </a>
            </li>
        </ul>
    </div>
</nav>



<!-- Modals -->
<div class="modal fade" id="new-lecture" tabindex="-1" role="dialog" aria-labelledby="new-lecture-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Lecture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Let's create a new lecture. What <b>unit</b> does this <b>lecture</b> fall under?
                </p>

                <form action="{{ route('admin.new.lecture') }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Unit</label>
                        <select class="form-control" id="unit" name="unit">
                            @foreach($units as $unit)
                                <option value="{{ $unit->id }}">Unit {{ $unit->id }}: {{ $unit->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-outline-primary">Continue...</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="new-recap" tabindex="-1" role="dialog" aria-labelledby="new-recap-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Recap</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Let's create a new recap. What <b>unit</b> does this <b>recap</b> fall under?
                </p>

                <form action="{{ route('admin.new.recap') }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Unit</label>
                        <select class="form-control" id="unit" name="unit">
                            @foreach($units as $unit)
                                <option value="{{ $unit->id }}">Unit {{ $unit->id }}: {{ $unit->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-outline-primary">Continue...</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="new-challenge" tabindex="-1" role="dialog" aria-labelledby="new-recap-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Challenge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Let's create a new challenge. What <b>unit</b> does this <b>challenge</b> fall under?
                </p>

                <form action="{{ route('admin.new.challenge') }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Unit</label>
                        <select class="form-control" id="unit" name="unit">
                            @foreach($units as $unit)
                                <option value="{{ $unit->id }}">Unit {{ $unit->id }}: {{ $unit->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-outline-primary">Continue...</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
