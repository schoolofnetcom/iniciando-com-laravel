@extends('user.base')

@section('title', 'Create user')

@section('container')
    <h1>Create user</h1>

    <form action="/user/add" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="submit" value="Submit">
    </form>
@endsection