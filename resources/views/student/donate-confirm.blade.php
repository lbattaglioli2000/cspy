@extends("student.layouts.master")

@section("title")
    Donation ${{ number_format(($ammount /100), 2, '.', ' ') }}
@endsection

@section("content")
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Thank you so much.</h1>
    </div>

    <p>Thank you for pledging us <b>${{ number_format(($ammount /100), 2, '.', ' ') }}</b>. You're one step closer to making free and open education more accessible! Just enter your payment information by clicking the button below, and <a target="_blank" href="https://www.stripe.com">Stripe</a> will securely handle the rest!</p>

    @if (Session::has('success-message'))
      <div class="alert alert-success">
        <b>Thank you so much!</b> We have recieved your donation! It will go a long way in helping us run our day to day opperations, and fulfill our goal to provide free, high qulity, open sourced computer science education.
      </div>
    @endif

    @if (Session::has('fail-message'))
      <div class="alert alert-danger">
        <b>Uh-oh!</b> We appologize but your donation couldn't be processed. Please try again if you wouldn't mind
      </div>
    @endif


    <div class="row">
      <div class="col-md-12">
        <form action="/student/donate/charge" method="POST">
          {{ csrf_field() }}
          <input type="hidden" name="ammount" value="{{ $ammount }}">
          <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount="{{ $ammount }}"
            data-name="CodeGeek.org"
            data-description="Helping make free and open education!"
            data-locale="auto">
          </script>
        </form>
      </div>
    </div>
@endsection
