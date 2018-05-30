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
                <a class="nav-link {{ Request::is('student/chat') ? 'active' : null }}" href="{{ route("student.chat") }}">
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
                <a class="nav-link {{ Request::is('student/notifications') ? 'active' : null }}" href="{{ route('student.notifications') }}">
                    <i data-feather="settings"></i>
                    Settings
                </a>
            </li>
        </ul>
    </div>
</nav>
