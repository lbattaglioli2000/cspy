<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{ url('/') }}">CSPY</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : null }}">
                <a class="nav-link" href="{{ url("/") }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Request::is('overview') ? 'active' : null }}">
                <a class="nav-link" href="{{ url("overview") }}">Course Overview</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a  class="nav-link" href="{{ url('/student') }}">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    @else
                        <li class="nav-item {{ Request::is('login') ? 'active' : null }}">
                            <a class="nav-link" href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('register') ? 'active' : null }}">
                            <a class="nav-link" href="{{ route('register') }}">
                                Register
                            </a>
                        </li>
                    @endauth
            @endif
        </ul>
    </div>
</nav>