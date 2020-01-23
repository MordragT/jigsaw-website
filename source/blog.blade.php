---
pagination:
  collection: posts
  perPage: 5
---
@extends('_layouts.master')

@section('content')
<h1 class="text-center">Blog</h1>
<br><br>
<div class="row justify-content-center">
    @foreach ($pagination->items as $post)
    <div class="card bg-secondary mx-3" style="width: 18rem;">
        <img src="{{ $post->cover_image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <p> - {{ $post->author }}</p>
            <a href="{{ $post->getUrl() }}" class="btn btn-dark">Read more</a>
        </div>
    </div>
    @endforeach
</div>
@endsection