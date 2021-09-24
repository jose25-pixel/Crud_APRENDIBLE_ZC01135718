@extends('layout')
@section('content')
<h1>Home</h1>
@auth
{{ auth()->user()->name}}
@endauth
 {{-- --}}
@endsection
@section('title')


Home
@endsection