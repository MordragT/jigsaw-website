---
pagination:
    collection: posts
    perPage: 10
---
@extends('_layouts.master')

@section('content')
<h1 class="text-center">Hello, i'm Thomas</h1>
<br><br>

<div class="row col-md-4">
    <h3>Latest Article</h3>
</div>
<br>
<div class="row">
    <div class="col-md-3 mb-4">
    @foreach($pagination->items as $post)
        @if($loop->first)
            @include('_components.post-preview')
            @break
        @endif
    @endforeach
    </div>
    <p class="offset-md-1 col-md-8">Welcome to my Website, i will post here frequently <mark>tutorials</mark> for informatics
        since i am studying <mark>Computer Science</mark> at the FH in Aachen.
       At the moment i am in my third semester and will soon be in my fourths.
       If you have a question about a topic on my website feel free to <mark>contact</mark> me,
       i will most likely answer on <mark>steam</mark> or <mark>youtube</mark>.</p>
</div>
@endsection