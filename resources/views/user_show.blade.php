
    @extends('layout')
    @section('content')
    <div class="main-content" style="margin-left: 250px; padding: 2rem;">
        <section id="user-profile">
            <div class="user-profile-container">
                <h1>{{ $user->name }}</h1>
                <div class="profile-meta">
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Role:</strong> {{ ucfirst($user->user_role) }}</p>
                    <p><strong>Joined:</strong> {{ $user->created_at ? $user->created_at : '2025'}}</p>
                </div>
                <a href="{{ route('users.index') }}" class="btn btn-primary mt-3">Back to Users</a>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary mt-3 ms-2">Edit Profile</a>
            </div>
        </section>
    </div>
@endsection