@extends('layout.main')

@section('container')
    <p>Welcome! {{ auth()->user()->username }}</p>
@endsection