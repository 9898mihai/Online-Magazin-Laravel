@extends('layout')
@section('title', 'Pagina principala')
@section('content')
<div class="container">
    <div class="starter-template">
        <h1>All products</h1>
        <div class="row">
            @foreach ($products['products'] as $product)
            @include('card',compact('product'))
                @endforeach
        </div>
    </div>
        @endsection

