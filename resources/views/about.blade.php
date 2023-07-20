@extends('layout.main')

@section('container')
    <h1>This is About Page</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img class="rounded" src="{{ $image }}" alt="{{ $image }}">
    <p class="text-3xl font-bold">Testing tailwind</p>
@endsection