@extends('layout.main')

@section('container')
<article>
<h2>{{ $post->title }}</h2>
<h5>By : {{ $post->user->name }} in <a href="/category/{{ $post->category_id }}">{{ $post->category->name }}</a></h5>
<p>{{ $post->body }}</p>
</article>
<a href="/post" class="btn btn-primary">Back to Posts</a>
@endsection