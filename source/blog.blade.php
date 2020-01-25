---
pagination:
  collection: posts
  perPage: 5
---
@extends('_layouts.master')

@section('content')
<h1 class="text-center">Blog</h1>
<br><br>
@include('_components.category-buttons')
<br>
<div class="row">
    <div class="card-columns">
    @foreach ($pagination->items as $post)
        @include('_components.post-preview')
    @endforeach
  </div>
</div>
@endsection