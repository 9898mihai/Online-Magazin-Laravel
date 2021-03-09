@extends('master')
@section('title', 'Pagina principala')
@section('content')
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}">Online Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('index') }}">All products</a></li>
                <li ><a href="{{ route('categories') }}">Categories</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Login</a></li>


            </ul>
        </div>
    </div>
</nav>

        @foreach($categories as $category)
            <div class="sidenav">
                <a href="{{ route('category', $category->code) }}">{{$category->name}}</a>
            </div>
        @endforeach

<div class="container">
    <div class="starter-template">
        <h1>All products</h1>
        <div class="row">
            @foreach ($products as $product)
            @include('card',compact('product'))
                @endforeach

        </div>


    </div>
        @endsection

