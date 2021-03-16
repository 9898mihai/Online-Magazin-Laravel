@extends('auth.masterauth')

@section('title', 'Add product')

@section('content')
    <div class="col-md-12">
        <form method="POST" enctype="multipart/form-data"  action="{{ route('products.store') }}">
            <div>
                @csrf
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Code: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code" value="">
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name" value="">
                    </div>
                </div><br>
                <div class="input-group row">
                    <label for="category_id" class="col-sm-2 col-form-label">Categoria: </label>
                    <div class="col-sm-6"><br>
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Description: </label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="72" rows="7"></textarea>
                    </div>
                </div>
                <br>
                <br>
                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Upload <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                    </div>
                <button class="btn btn-success">Add!</button>
            </div>
        </form>
    </div>
@endsection
