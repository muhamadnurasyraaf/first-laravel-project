@extends('layout.main')

@section('container')
   <h1>{{ $title }}</h1>
    @foreach ( $posts as $p)
        <h4>{{ $p->title }}</h4>
        <p>{{ $p->author }}</p>
       <p>{{ $p->body }}</p> 

    @endforeach
@endsection