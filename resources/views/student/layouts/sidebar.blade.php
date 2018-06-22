<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('student') ? 'active' : null }}" href="{{ route("student") }}">
                    <span data-feather="activity"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i data-feather="send"></i>
                    Chat
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('student/notifications') ? 'active' : null }}" href="{{ route('student.notifications') }}">
                    <i data-feather="bell"></i>
                    Notifications
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('student/settings') ? 'active' : null }}" href="{{ route('student.settings') }}">
                    <i data-feather="settings"></i>
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('student/cloud9') ? 'active' : null }}" href="{{ route('student.cloud9') }}">
                    <i data-feather="terminal"></i>
                    Cloud9
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('student/donate') ? 'active' : null }}" href="{{ route('donate') }}">
                    <i data-feather="dollar-sign"></i>
                    Donate
                </a>
            </li>
        </ul>
    </div>
</nav>
