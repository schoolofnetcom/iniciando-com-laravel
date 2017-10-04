@extends('foo.base')

@section('title', 'Bar page')

@section('container')
    <h1>Bar page</h1>
    <p>Texto para <b>bar</b> page</p>

    <hr>
    <h3>If</h3>
    @if(true)
        Imprime true
    @endif

    <hr>

    <h3>Foreach</h3>
    <ul>
    @foreach(['foo', 'bar', 'baz'] as $item)
        <li>{{ $item }}</li>
    @endforeach
    </ul>
@endsection