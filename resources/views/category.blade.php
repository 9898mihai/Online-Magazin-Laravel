@extends('master')

@section('title', 'Categoria: ' . $categoryName)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 a">
                <h2 class="my-4">{{$categoryName}}</h2>
                <div class="thumbnail">
                <div class="caption"align="center">
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
            </div>
                <div class="thumbnail">
                    <div class="caption"align="center">
                        <form method="GET" action="{{ route('category',[$categoryCode]) }}">
                            <div class="filters row">
                                Star rating
                                <div class="col-md-12">
                                   [five star]
                                </div>
                                <div class="col-md-12">
                                    <a href="{{ route('category',[$categoryCode]) }}" class="btn btn-warning">Reset</a>
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12">
                    <div class="starter-template">
                        <div class="sort">
                            <form method="GET" action="{{ route('category',[$categoryCode]) }}" align="right">
                                <select name="sorting" onchange="form.submit()">
                                    <option value="" selected disabled hidden>Sort By Price</option>
                                    <option value="price_asc"  name="price_asc">Lowest to Highest</option>
                                    <option value="price_dsc" name="price_dsc">Highest to Lowest</option>
                                </select>
                            </form>
                        </div>
                        @foreach ($category['data'] as $product)
                            @include('card',compact('product'))
                        @endforeach
                    </div>
                </div>
        </div>
@endsection

