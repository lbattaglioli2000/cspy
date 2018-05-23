@extends("student.layouts.master")

@section("title")
    Notifications
@endsection

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Notifications</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div id="accordion">
        @if(count($notifications) == 0)
          <div class="alert alert-info">
            There are no new notifications.
          </div>
        @else
            @foreach($notifications as $notification)
                <div class="card">
                    <div class="card-header" id="heading{{ $notification->id }}">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{ $notification->id }}" aria-expanded="false" aria-controls="collapse{{ $notification->id }}">
                                {{ $notification->title }}
                            </button>
                        </h5>
                    </div>
                    <div id="collapse{{ $notification->id }}" class="collapse" aria-labelledby="heading{{ $notification->id }}" data-parent="#accordion">
                        <div class="card-body">
                            {!! $notification->body !!}
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        @endif
        </div>
      </div>
    </div>
@endsection
