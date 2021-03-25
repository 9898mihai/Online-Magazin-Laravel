@extends('master')

@section('title', 'Categoria: ' . $categoryName)

@section('content')
    <h1 align="center">{{$categoryName}}</h1>
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
<!--    https://github.com/startbootstrap/startbootstrap-shop-homepage-->
        <form method="GET" action="{{ route('category',[$categoryCode]) }}" align="right">
            <select name="sort" onchange="this.form.submit()">
                <option value="" selected disabled hidden>Sort By Price</option>
                <option value="price_asc"  name="price_asc">Lowest to Highest</option>
                <option value="price_dsc" name="price_dsc">Highest to Lowest</option>
            </select>
        </form>
        <div class="row">
            <div class="starter-template">
            @foreach ($category['data'] as $product)
                @include('card',compact('product'))
            @endforeach
        </div>
    </div>
</div>
@endsection

