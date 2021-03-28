@extends('master')
@section('title', 'Produs')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="gallery-link"><img src="{{Storage::url($product->image)}}" alt="" class="img-responsive " /></a>
            </div>
            <div class="col-sm-6">
                    <div class="pull-right">
                        <span class="h2"><strong>{{$product->price}}$</strong></span>
                    </div>
                    <span class="h2"><strong class="text-success">{{ $product->name }}</strong><br /></span>
                <hr>
                <p>{{ $product->description }}</p></hr>
                <form action="/basket/add/1" method="post" class="form-inline push-bit text-right">
                    <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
                </form>

                <form action="{{ route('product.rating') }}" method="POST">
                    @csrf
                <div class="rating">
                    <input type="radio" id="star5" name="rate" value="5" />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                </div>
                    <input type="hidden" name="id" required="" value="{{ $product->id }}">
                    <button class="btn btn-success">Submit</button>
                </form

            </div>
        </div>
    </div>
@endsection
