<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="caption">
            <h3>{{$product->name}}</h3>
            <img src="{{Storage::url($product->image)}}" alt="">
            <p>{{$product->price}}$</p>
            <p>
            <form action="/basket/add/1" method="POST">
                <button type="submit" class="btn btn-primary" role="button">Add to cart</button>
                <a href="{{ route('product', [$product->category_id, $product->code]) }}" class="btn btn-default" role="button">Details</a>
                <input type="hidden" name="" value="">
            </form>
            </p>
        </div>
    </div>
</div>