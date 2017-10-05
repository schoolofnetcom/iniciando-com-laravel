@extends('user.base')

@section('title', 'Create user')

@section('container')
    <h1>Create user</h1>

    <pre>
    <!-- Descomente os métodos abaixo, caso queira testar em sua aplicação -->
    {{ var_dump($errors) }}
    {{--{{ var_dump($errors->has('email')) }}--}}
    {{--{{ var_dump($errors->get('password')) }}--}}
    {{--{{ var_dump($errors->first('password')) }}--}}
    </pre>

    <form action="/user/add" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Repeat password">
        <input type="submit" value="Submit">
    </form>
@endsection