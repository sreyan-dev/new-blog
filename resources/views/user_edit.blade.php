
    @extends('layout')

    <div class="main-content" style="margin-left: 250px; padding: 2rem;">
        <section id="edit-user">
            <h1 class="mb-4">Edit User</h1>
            <div class="user-edit-container mb-4">
                <h2>Edit User</h2>
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
                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="user-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="user-name" name="name" value="{{ old('name', $user->name) }}" placeholder="Enter user name">
                    </div>
                    <div class="mb-3">
                        <label for="user-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="user-email" name="email" value="{{ old('email', $user->email) }}" placeholder="Enter user email">
                    </div>
                    <div class="mb-3">
                        <label for="user-password" class="form-label">Password (Leave blank to keep unchanged)</label>
                        <input type="password" class="form-control" id="user-password" name="password"  placeholder="Enter new password">
                    </div>
                    <div class="mb-3">
                        <label for="user-role" class="form-label">Role</label>
                        <select class="form-select" id="user-role" name="role">
                            <option value="">Select a role</option>
                            <option value="admin" {{ old('role', $user->user_role) == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="editor" {{ old('role', $user->user_role) == 'editor' ? 'selected' : '' }}>Editor</option>
                            <option value="user" {{ old('role', $user->user_role) == 'user' ? 'selected' : '' }}>User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update User</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </section>
    </div>
