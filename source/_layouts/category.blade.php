@extends('_layouts.master')

@section('content')
<div class="text-center">
    <h1>{{ $page->title }}</h1>
    <div>
        @yield('category')
    </div>
    <br>
</div>
@include('_components.category-buttons')
<br>
<div class="row">
    <div class="card-columns">
    @foreach ($page->posts($posts) as $post)
        @include('_components.post-preview')
    @endforeach
</div>
</div>
@endsection