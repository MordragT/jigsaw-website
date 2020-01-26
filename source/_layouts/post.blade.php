@extends('_layouts.master')

@section('content')


<h1 class="text-center">{{ $page->title }}</h1>
<h4 class="text-center">{{ $page->author }}</h4>
<br><br>
<img src="{{ $page->cover_image }}" class="img-fluid rounded" alt="...">
<br><br>
<div>
    @foreach($page->categories as $category)
        <a class="btn btn-secondary btn-sm" href="/blog/categories/{{ $category }}">{{ $category }}</a>
    @endforeach
</div>
<br><br>

@yield('post')
@endsection