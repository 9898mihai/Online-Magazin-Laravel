@extends('auth.masterauth')

@section('title', 'Lista de produse')

@section('content')
    <div class="col-md-12">
        <table class="table">
            <tbody>
            <tr><th>#</th>
                <th>Cod</th>
                <th>Nume</th>
                <th>Categorie</th>
                <th>Actiune</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id}}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>

                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('products.destroy', $product) }}" method="POST">
                                <a class="btn btn-warning" type="button" href="{{ route('editProduct', $product->code) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a class="btn btn-success" type="button" href="{{ route('addProduct') }}">Add product</a>
    </div>
    </div>
@endsection
