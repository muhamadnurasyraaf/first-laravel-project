@extends('layout.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach($posts as $post)
        <article class="mb-5 border p-5 rounded">
            <h4>{{ $post->title }}</h4>
            <p>{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->id }}" class="text-decoration-none">Read More...</a>
        </article>
    @endforeach
@endsection