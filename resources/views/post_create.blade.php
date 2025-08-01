@extends('layout')
@section('content')

<div class="main-content" style="margin-left: 250px; padding: 2rem;">
    <section id="create-post">
        <h1 class="mb-4">Create New Post</h1>
        <div class="post-form-container mb-4">
            <h2>Create Post</h2>
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
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="post-title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="post-title" name="title" value="{{ old('title') }}" placeholder="Enter post title">
                </div>
                <div class="mb-3">
                    <label for="post-slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="post-slug" name="slug" value="{{ old('slug') }}" placeholder="Auto-generated slug">
                </div>
                <div class="mb-3">
                    <label for="post-category" class="form-label">Category</label>
                    <select class="form-select" id="post-category" name="category_id">
                        <option value="">Select a category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="post-author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="post-author" name="author_id" value="{{ old('author_id') }}" placeholder="Author">
                </div>
                <div class="mb-3">
                    <label for="post-content" class="form-label">Content</label>
                    <textarea class="form-control" id="post-content" name="content" rows="8" placeholder="Enter post content">{{ old('content') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('post-title').addEventListener('input', function() {
        const title = this.value;
        const slug = title.toLowerCase()
            .replace(/ /g, '-')
            .replace(/[^\w-]+/g, '');
        document.getElementById('post-slug').value = slug;
    });
</script>
@endsection