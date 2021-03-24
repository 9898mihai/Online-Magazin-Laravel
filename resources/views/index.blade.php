@extends('master')
@section('title', 'Pagina principala')
@section('content')
<div class="container">
    <div id="myCarousel" class="carousel slide" >
        <div class="carousel-inner">
            @foreach ($banners as $banner)
            <div class="item @if($banner->id === $banner->first()->id) {{ 'active' }} @endif">
                <div class="image-size" style="background-image: url('{{ Storage::url($banner->image)}}');">
                </div>
                <div class="carousel-caption">
                    <h3>{{$banner->name}}</h3>
                    <p>{{$banner->description}}</p>
                </div>
            </div>
        @endforeach
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="starter-template">
        <h1>All products</h1>
        <form method="GET" action="{{ route('index') }}">
            <div class="filters row">
                    Price
                    <label for="price_from">min:<input type="text" name="price_from" id="price_from" size="6" value="{{request()->price_from}}">
                    </label>
                    <label for="price_to">max:<input type="text" name="price_to" id="price_to" size="6" value="{{request()->price_to}}">
                    </label>
                <a href="{{ route('index') }}" class="btn btn-warning">Reset</a>
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>

        <div class="row">
            @foreach ($products as $product)
            @include('card',compact('product'))
                @endforeach
        </div>
    </div>
    {{$products->links()}}
        @endsection

