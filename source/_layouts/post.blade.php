@extends('_layouts.master')

@section('content')


<h1 class="text-center">{{ $page->title }}</h1>
<h4 class="text-center">{{ $page->author }}</h4>
<br><br>
<img src="{{ $page->cover_image }}" class="img-fluid rounded" alt="...">
<br><br>


@yield('post')

@endsection