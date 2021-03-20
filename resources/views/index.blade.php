@extends('master')
@section('title', 'Pagina principala')
@section('content')
<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach ($banners as $banner)
            <div class="item @if($banner->id === $banner->first()->id) {{ 'active' }} @endif">
                <img src="{{Storage::url($banner->image)}}" alt="">
                <div class="carousel-caption">
                    <h3>{{$banner->name}}</h3>
                    <p>{{$banner->description}}</p>
                </div>
            </div>
        @endforeach
        <!-- Left and right controls -->
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
        <div class="row">
            @foreach ($products['products'] as $product)
            @include('card',compact('product'))
                @endforeach
        </div>
    </div>
        @endsection

