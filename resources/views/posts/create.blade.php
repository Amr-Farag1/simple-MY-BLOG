@extends ('layouts.app')

@section('create')
<form action="{{ route('posts.store' ) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mx-5">
  <label for="exampleFormControlInput1" class="form-label text-primary fw-bold">Title </label>
  <input type="text" class="form-control w-75" name="title" id="exampleFormControlInput1" placeholder="Post title here">
 @error('title')
        <div style="color:red">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3 mx-5">
  <label for="exampleFormControlTextarea1" class="form-label text-secondary fw-bold">Content</label>
  <textarea name="content" class="form-control   w-75" id="exampleFormControlTextarea1" rows="6"></textarea>
@error('content')
        <div style="color:red">{{ $message }}</div>
    @enderror
</div>
<div>
    <button class="btn btn-success px-5 mx-5  fw-bold">Save</button>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary px-5 mx-5 fw-bold">Cancel</a>
</form>
</div>
@endsection
