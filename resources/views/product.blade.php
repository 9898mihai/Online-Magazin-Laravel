@extends('master')
@section('title', 'Produs')
@section('content')
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Online Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="/">All products</a></li>
                <li ><a href="/categories">Categories</a>
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
        <h1>{{ $product }}</h1>
        <p>Price: </p>
        <img src="/storage/noimage.png">
        <p>64GB</p>

        <form action="/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Add to Cart</button>

            <input type="hidden" name="" value="">        </form>
    </div>
</div>
@endsection

