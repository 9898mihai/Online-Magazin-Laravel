@extends('layout')
@section('title', 'Produs')
@section('content')
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

