@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-5">
        <div class="col-md-8">
            <h1 class="mb-3 mt-5">{{ $post->title }}</h1>

            <a href="/dashboard/posts" class="btn btn-success"><i class="fa-duotone fa-arrow-left fa-lg"></i> Back to all my posts</a>
            <a href="" class="btn btn-warning"><i class="fa-duotone fa-pen-to-square fa-lg"></i> Edit Post</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger " onclick="return confirm('are you sure?')"><i class="fa-duotone fa-circle-x fa-lg"></i> Delete</button>
            </form>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection