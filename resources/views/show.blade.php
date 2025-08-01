
@extends('layout') <!-- Assuming sidebar is in a separate Blade partial -->
@section('content')
    <div class="main-content" style="margin-left: 250px; padding: 2rem;">
        <section id="post-view">
            <div class="post-view-container">
                <h1>{{ $post->title }}</h1>
                <div class="post-meta">
                    <p><strong>Slug:</strong> {{ $post->slug }}</p>
                    <p><strong>Category:</strong> {{ $post->category->name }}</p>
                    <p><strong>Author:</strong> {{ $post->author_id }}</p>
                    <p><strong>Published:</strong> {{ $post->created_at->format('M d, Y') }}</p>
                </div>
                <div class="post-content">
                    {!! nl2br(e($post->content)) !!}
                </div>
                <a href="{{ route('posts.index') }}" class="btn btn-primary mt-3">Back to Posts</a>
            </div>
        </section>
    </div>
@endsection