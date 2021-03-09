@extends('master')

@section('title', 'Categoria' . $category->name)



@section('content')
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Online Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="/">All products</a></li>
                <li class="active"><a href="/categories">Categories</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Login</a></li>

            </ul>
        </div>
    </div>
</nav>

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

