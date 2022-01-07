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
                        <tr class="card-parent">
                            <td scope="row">{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->role_as == '0' ? 'User' : 'Admin' }}</td>
                            <td>
                                <a href="{{ route('admin.users.view', $user->id) }}" class="btn btn-warning">View</a>
                                <input type="hidden" name="user" value="{{ $user->id }}" class="user_id">
                                @if ($user->role_as == '0')
                                    <a href="javascript:void(0)" class="btn btn-danger delete-user-btn">Delete</a>
                                @endif
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
