@extends ('layouts.app')

@section('show')

<div class="container mt-5  ">
    <h1>{{ $post->title }}</h1>
    <p class="text-muted">Created At: {{ $post->created_at }}</p>

    <div class="mt-4">
        <p>{{ $post->content }}</p>
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>

@endsection
