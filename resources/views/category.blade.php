@extends('master')

@section('title', 'Categoria: ' . $categoryName)

@section('content')
    <h1 align="center">
        {{$categoryName}}
    </h1>
    <div class="sidebar" align="center">
        <form method="GET" action="{{ route('category',[$categoryCode]) }}">
            <div class="filters row">
                Price
                <div class="col-md-12">
                    <label for="price_from">min:<input type="text" name="price_from" id="price_from" size="6" value="{{request()->price_from}}">
                    </label>
                    <label for="price_to">max:<input type="text" name="price_to" id="price_to" size="6" value="{{request()->price_to}}">
                    </label>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('category',[$categoryCode]) }}" class="btn btn-warning">Reset</a>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
                </div>
        </form>
    </div>
<div class="content">
    <div class="starter-template">
        <div class="row">
            <div class="starter-template">
            @foreach ($category['data'] as $product)
                @include('card',compact('product'))
            @endforeach
        </div>
    </div>
@endsection

