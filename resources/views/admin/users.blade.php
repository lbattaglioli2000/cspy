@extends("admin.layouts.master")

@section('title')
    Users
@endsection

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1>Users</h1>
    </div>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID #</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Delete user?</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ url('admin/users/delete/' . $user->id) }}" class="btn btn-block btn-outline-danger">Delete</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection