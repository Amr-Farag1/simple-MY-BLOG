@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container mt-5">
    <h1 class="mb-4">All Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-4">Add New Post</a>

    @if ($posts->count() > 0)
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h4 class="card-title">{{ $post->title }}</h4>
                            <p class="card-text">{{ $post->content }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-primary btn-sm">
                                View Details
                            </a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="" class="btn btn-outline-danger px-4 btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-danger fw-bold">No posts available</p>
    @endif
</div>
@endsection
