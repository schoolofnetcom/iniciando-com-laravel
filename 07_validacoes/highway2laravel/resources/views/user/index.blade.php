@extends('user.base')

@section('title', 'All users')

@section('container')
    <h1>All users</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
@endsection