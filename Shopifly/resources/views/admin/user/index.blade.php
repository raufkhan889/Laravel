@extends('layouts.admin-app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Registered Users</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="row">{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->role_as == '0' ? 'User' : 'Admin' }}</td>
                            <td>
                                <a href="{{ route('admin.users.view', $user->id) }}" class="btn btn-warning">View</a>
                                <a href="#" class="btn btn-success">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <p class="card-text">

            </p>
        </div>
    </div>
@endsection
