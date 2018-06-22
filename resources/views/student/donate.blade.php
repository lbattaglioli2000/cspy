@extends("student.layouts.master")

@section("title")
    Donate
@endsection

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">We're a not for profit organization.</h1>
    </div>

    <p>We believe that computer science education, and all education for that matter, should be free and open, which is why we don't charge you to use our platform, and we never will. That being said, we could use your help however. We rely on several different servers from companies like <a href="https://m.do.co/c/18029c61c7a7" target="_blank">DigitalOcean</a>, with a lot of storage and computing power, to keep our applictions up and running. These servers can be costly to maintain however, and if we're not making any revenue, it would be impossible to keep them running, and CodeGeek would be forced to shutdown. With your help however, we can keep CodeGeek up and running through small, one time donations. These little donations can go a long way in helping us fullfil our mission to provide open and high quality computer science education to everyone, for free.</p>

    <h3>How much?</h3>
    <hr>
    <div class="row">
      <div class="col-md-2">
        <a href="{{ route('donate.confirm', 500) }}" class="btn btn-block btn-outline-primary btn-lg">$5.00</a>
      </div>
      <div class="col-md-2">
        <a href="{{ route('donate.confirm', 1000) }}" class="btn btn-block btn-outline-primary btn-lg">$10.00</a>
      </div>
      <div class="col-md-2">
        <a href="{{ route('donate.confirm', 1500) }}" class="btn btn-block btn-outline-primary btn-lg">$15.00</a>
      </div>
      <div class="col-md-2">
        <a href="{{ route('donate.confirm', 2000) }}" class="btn btn-block btn-outline-primary btn-lg">$20.00</a>
      </div>
      <div class="col-md-2">
        <a href="{{ route('donate.confirm', 2500) }}" class="btn btn-block btn-outline-primary btn-lg">$25.00</a>
      </div>
      <div class="col-md-2">
        <a href="{{ route('donate.confirm', 3000) }}" class="btn btn-block btn-outline-primary btn-lg">$30.00</a>
      </div>
    </div>
@endsection
