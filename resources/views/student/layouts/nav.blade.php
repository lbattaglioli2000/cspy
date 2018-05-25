<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">CSPY<sup> student</sup></a>
    <form style="width: 100%" action="/student/search" method="get">
      {{ csrf_field() }}
      <input class="form-control form-control-dark w-100" id="search" type="text" name="query" placeholder="Search" aria-label="Search">
    </form>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="/logout">Sign out</a>
        </li>
    </ul>
</nav>
