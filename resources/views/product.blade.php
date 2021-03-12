@extends('master')
@section('title', 'Produs')
@section('content')
<div class="container">
    <div class="starter-template">
        <h1>{{ $product->name }}</h1>
        <img src="{{Storage::url($product->image)}}" alt="">
        <p>Price: {{$product->price}}$</p>
        <form action="/basket/add/1" method="POST">
            <button type="submit" class="btn btn-success" role="button">Add to Cart</button>

            <input type="hidden" name="" value="">        </form>
    </div>
</div>
@endsection

