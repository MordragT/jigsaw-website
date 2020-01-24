---
pagination:
    collection: posts
    perPage: 1
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
    @foreach($pagination->items as $post)
        @include('_components.post-preview')
    @endforeach
    <p class="col-md-8">Welcome to my Website, i will post here frequently <mark>tutorials</mark> for informatics
        since i am studying <mark>Informatics</mark> at the FH in Aachen.
       At the moment i am in my third semester and will soon be in my fourths.
       If you have a question to a topic on my website feel free to <mark>contact</mark> me,
       you have the best chance that i will answer it, if you contact my via <mark>steam</mark> or <mark>youtube</mark> ;).</p>
</div>
@endsection