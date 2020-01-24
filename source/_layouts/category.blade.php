@extends('_layouts.master')

@section('content')
<div class="text-center">
    <h1>{{ $page->title }}</h1>
    <div>
        @yield('category')
    </div>
    <br>
</div>
<div class="row">
    @include('_components.category-buttons')
    @foreach ($page->posts($posts) as $post)
    @include('_components.post-preview')
    @endforeach
</div>
@endsection