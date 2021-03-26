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
                    <span class="h2"><strong class="text-success">{{ $product->name }}</strong><br /></span>
                </div><hr>
                <p>{{ $product->description }}</p></hr>
                <form action="/basket/add/1" method="post" class="form-inline push-bit text-right">
                    <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
                </form>

                <form action="{{ route('product.rating') }}" method="POST">
                   @csrf
                    <h3 class="product-title">Rating</h3>
                    <div class="rating">
                        <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $product->userAverageRating }}" data-size="xs">
                        <input type="hidden" name="id" required="" value="{{ $product->id }}">
                        <button class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $("#input-id").rating();
    </script>
@endsection
