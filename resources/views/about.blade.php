@extends('master')
@section('title', 'Despre noi')
@section('content')
<div class="container">
    <h1>About us</h1>
    @foreach ($about as $info)
    <h5>{{$info->description}}</h5>
    @endforeach
    @endsection