@extends('auth.masterauth')

@section('title', 'Edit product: ' . $product->name)

@section('content')
    <div class="col-md-12">
        <form method="POST" enctype="multipart/form-data"  action="{{ route('products.update', $product) }}">
            <div>
                @method('PUT')
                @csrf
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
                    </div>
                </div><br>
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Code: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="code" id="code" value="{{ $product->code }}">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Price: </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="price" id="price" value="{{ $product->price }}">
                    </div>
                </div><br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Categoria: </label>
                    <div class="col-sm-8"><br>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @if($product->category_id == $category->id) selected
                                        @endif >{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description: </label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="72" rows="7">{{ $product->description }}</textarea>
                    </div>
                </div><br><br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Upload <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
            </div><br>
            <button class="btn btn-success">Edit!</button>
    </div>
    </form>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
@endsection
