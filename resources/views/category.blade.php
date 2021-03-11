@extends('layout')

@section('title', 'Categoria: ' . $category->name)

@section('content')
<div class="container">
    <div class="starter-template">
        <h1>
            {{$category -> name}}
        </h1>
        <div class="row">
            @foreach ($category->products as $product)
                @include('card',compact('product'))
            @endforeach
        </div>
    </div>
@endsection

