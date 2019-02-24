@extends("student.layouts.master")

@section('title')
    Student Dashboard
@endsection

@section('content')
    <div class="main-content">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">

                    <!-- Header -->
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Pretitle -->
                                    <h6 class="header-pretitle">
                                        Overview
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="header-title">
                                        Settings
                                    </h1>

                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>

                    <!-- Form -->

                        <div class="row">
                            <div class="col-12 col-md-12">

                                <!-- First name -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label>
                                        Name
                                    </label>

                                    <!-- Input -->
                                    <input value="{{ Auth::user()->name }}" type="text" class="form-control">

                                </div>

                            </div>

                            <div class="col-12">

                                <!-- Email address -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label class="mb-1">
                                        Email address
                                    </label>

                                    <!-- Form text -->
                                    <small class="form-text text-muted">
                                        This contact will be shown to others publicly, so choose it carefully.
                                    </small>

                                    <!-- Input -->
                                    <input value="{{ Auth::user()->email }}" type="email" class="form-control">

                                </div>

                            </div>
                        </div> <!-- / .row -->

                        <!-- Divider -->
                        <hr class="mt-4 mb-5">

                        <div class="row">
                            <div class="col-12 col-md-6 order-md-2">

                                <!-- Card -->
                                <div class="card bg-light border ml-md-4">
                                    <div class="card-body">

                                        <p class="mb-2">
                                            Password requirements
                                        </p>

                                        <p class="small text-muted mb-2">
                                            To create a new password, you have to meet all of the following requirements:
                                        </p>

                                        <ul class="small text-muted pl-4 mb-0">
                                            <li>
                                                Minimum 8 character
                                            </li>
                                            <li>
                                                At least one special character
                                            </li>
                                            <li>
                                                At least one number
                                            </li>
                                            <li>
                                                Can’t be the same as a previous password
                                            </li>
                                        </ul>

                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-md-6">

                              <form action="{{ route('student.update.password') }}" method="post">

                                @csrf

                                @if(Session::has('success'))
                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                                @endif

                                @if(Session::has('error'))
                                <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!-- Password -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label>
                                        Password
                                    </label>

                                    <!-- Input -->
                                    <input name="current_password" type="password" class="form-control">

                                </div>

                                <!-- New password -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label>
                                        New password
                                    </label>

                                    <!-- Input -->
                                    <input name="password" type="password" class="form-control">

                                </div>

                                <!-- Confirm new password -->
                                <div class="form-group">

                                    <!-- Label -->
                                    <label>
                                        Confirm new password
                                    </label>

                                    <!-- Input -->
                                    <input name="password_confirmation" type="password" class="form-control">

                                </div>

                                <!-- Submit -->
                                <button type="submit" class="btn btn-primary">
                                    Update password
                                </button>

                              </form>

                            </div>
                        </div> <!-- / .row -->

                </div>
            </div> <!-- / .row -->
        </div>

    </div>
@endsection
