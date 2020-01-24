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
    @include('_components.category-buttons')
    @foreach ($pagination->items as $post)
        @include('_components.post-preview')
    @endforeach
</div>
@endsection