@extends('auth.masterauth')

@section('title', 'Add product')

@section('content')
    <div class="col-md-12">
        <form method="POST" enctype="multipart/form-data" action="{{ route('products.store') }}">
            <div>
                @csrf
                <div class="input-group row" style="margin-bottom: 20px">
                    <label for="name" class="col-sm-2 col-form-label">Name: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" id="name" value="" />
                    </div>
                </div>
                <div class="input-group row" style="margin-bottom: 20px">
                    <label for="code" class="col-sm-2 col-form-label">Code: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="code" id="code" value="" />
                    </div>
                </div>
                <div class="input-group row" style="margin-bottom: 20px">
                    <label for="name" class="col-sm-2 col-form-label">Price: </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="price" id="price" value="" />
                    </div>
                </div>
                <div class="input-group row" style="margin-bottom: 20px">
                    <label for="category_id" class="col-sm-2 col-form-label">Category: </label>
                    <div class="col-sm-8">
                        <br />
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="input-group row" style="margin-bottom: 20px">
                    <label for="description" class="col-sm-2 col-form-label">Description: </label>
                    <div class="col-sm-12">
                        <textarea name="description" id="description" cols="72" rows="7"></textarea>
                    </div>
                </div>
                <div class="input-group row" style="margin-bottom: 20px">
                    <label for="image" class="col-sm-2 col-form-label">Image: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file"> Upload <input type="file" style="display: none;" name="image" id="image" /> </label>
                    </div>
                </div>
            </div>
            <button class="btn btn-success">Add!</button>
        </form>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
@endsection
