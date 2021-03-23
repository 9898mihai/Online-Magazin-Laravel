@extends('master')

@section('title', 'Categoria: ' . $category->name)

@section('content')
<div class="container">
    <div class="starter-template">
        <h1>
            {{$category -> name}}
        </h1>
        <div class="row">
            <div class="starter-template">
                <form method="GET" action="{{ route('category',[$category->code]) }}">
                    <div class="filters row">
                        <div class="col-md-auto">
                            Price
                            <label for="price_from">min:<input type="text" name="price_from" id="price_from" size="6" value="{{request()->price_from}}">
                            </label>
                            <label for="price_to">max:<input type="text" name="price_to" id="price_to" size="6" value="{{request()->price_to}}">
                            </label>
                        </div>
                        <div class="col-md-auto">
                            <a href="{{ route('category',[$category->code]) }}" class="btn btn-warning">Reset</a>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </form>
            @foreach ($category->products as $product)
                @include('card',compact('product'))
            @endforeach
        </div>
    </div>
@endsection

