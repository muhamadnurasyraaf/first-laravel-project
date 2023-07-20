@extends('layout.main')

@section('container')
<article>
<h2>{{ $post['title'] }}</h2>
<h5>By : {{ $post['author'] }}</h5>
<p>{{ $post['body'] }}</p>
</article>
<a href="/post" class="btn btn-primary">Back to Posts</a>
@endsection