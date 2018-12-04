<header class="header" id="header-main">

    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark bg-dark" id="navbar-main">
        <div class="container">
            <a class="navbar-brand mr-lg-5" href="/">
                <img alt="Image placeholder" src="/assets/img/brand/white-logo.png" style="height: 50px;">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Overview</a>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow py-0">
                            <div class="list-group">
                                <a href="https://docs.google.com/document/d/1pMg04gNbXQQy9islPiR7XdTskhx7jNXtvvfpR32N9L0/edit?usp=sharing" target="_blank" class="list-group-item list-group-item-action">
                                    <div class="media d-flex align-items-center">
                                        <img alt="Image placeholder" src="/assets/img/icons/dusk/svg/list.svg" class="img-saturate" style="width: 50px;">
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1">Syllabus</h6>
                                            <p class="mb-0">Checkout our syllabus to see what you'll be learning.</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    @if(Auth::check())
                        <div class="dropdown">
                            <button class="btn btn-outline-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/student">Dashboard</a>
                                <a class="dropdown-item" href="/student/profile">Profile</a>
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                        </div>
                    @else
                        <li class="nav-item mr-2">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">
                                <span class="btn-inner--text">Login</span>
                            </a>
                        </li>
                        <li class="nav-item mr-2">
                            <a href="{{ route('register') }}" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex">
                                <span class="btn-inner--text">Register</span>
                            </a>
                        </li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>

</header>