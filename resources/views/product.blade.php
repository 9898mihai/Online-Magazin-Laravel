@extends('master')
@section('title', 'Produs')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="gallery-link"><img src="{{Storage::url($product->image)}}" alt="" class="img-responsive " /></a>
            </div>
            <div class="col-sm-6">
                <div class="clearfix">
                    <div class="pull-right">
                        <span class="h2"><strong>{{$product->price}}$</strong></span>
                    </div>
                    <span class="h4"><strong class="text-success">{{ $product->name }}</strong><br /></span>
                </div><hr>
                <p>{{ $product->description }}</p></hr>
                <form action="/basket/add/1" method="post" class="form-inline push-bit text-right">
                    <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection

