@extends('layout') 
@section('content')
    <div class="main-content" style="margin-left: 250px; padding: 2rem;">
        <section id="user-management">
            <h1 class="mb-4">User Management</h1>

            

            <!-- User List Table -->
            <h2>All Users</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ ucfirst($user->user_role) }}</td>
                            <td>
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm me-2">View Profile</a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm me-2">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <!-- Create/Edit User Form -->
            <!-- <div class="user-management-container mb-4">
                <h2>{{ isset($user) ? 'Edit User' : 'Create New User' }}</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST">
                    @csrf
                    @if (isset($user))
                        @method('PUT')
                    @endif
                    <div class="mb-3">
                        <label for="user-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="user-name" name="name" value="{{ old('name', isset($user) ? $user->name : '') }}" placeholder="Enter user name">
                    </div>
                    <div class="mb-3">
                        <label for="user-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="user-email" name="email" value="{{ old('email', isset($user) ? $user->email : '') }}" placeholder="Enter user email">
                    </div>
                    <div class="mb-3">
                        <label for="user-password" class="form-label">Password {{ isset($user) ? '(Leave blank to keep unchanged)' : '' }}</label>
                        <input type="password" class="form-control" id="user-password" name="password" placeholder="Enter password">
                    </div>
                    <div class="mb-3">
                        <label for="user-role" class="form-label">Role</label>
                        <select class="form-select" id="user-role" name="role">
                            <option value="">Select a role</option>
                            <option value="admin" {{ old('role', isset($user) ? $user->role : '') == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="editor" {{ old('role', isset($user) ? $user->role : '') == 'editor' ? 'selected' : '' }}>Editor</option>
                            <option value="user" {{ old('role', isset($user) ? $user->role : '') == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ isset($user) ? 'Update User' : 'Create User' }}</button>
                    @if (isset($user))
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                    @endif
                </form>
            </div> -->
    </div>
@endsection