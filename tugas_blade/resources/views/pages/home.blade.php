@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    ini adalah halaman home <br/>
    Hello , {{ $name }}
@stop

@section('js')
    <script>
        console.log('Hello'); 
    </script>
@stop
