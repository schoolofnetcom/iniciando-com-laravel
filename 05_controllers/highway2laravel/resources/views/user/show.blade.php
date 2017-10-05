@extends('user.base')

@section('title', 'Show user')

@section('container')
    <h1>Show user</h1>

    <p>I am the user {{ $id }}</p>
@endsection