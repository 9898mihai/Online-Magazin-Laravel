@extends('auth.masterauth')

@section('title', 'Lista de bannere')

@section('content')
    <div class="table-responsive">
        <table class="table table-image table-hover ">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($banners as $banner)
            <tr>
                <th scope="row">{{ $banner->id}}</th>
                <td style="width: 35%">
                    <img src="{{Storage::url($banner->image)}}" class="img-fluid img-thumbnail" alt="">
                </td>
                <td>{{ $banner->name }}</td>
                <td>{{ $banner->description }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <form action="{{ route('banners.destroy', $banner) }}" method="POST">
                            <a class="btn btn-warning" type="button" href="{{ route('banners.edit', $banner) }}" style="margin-bottom: 1px">Edit</a>
                            @csrf @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Delete"/>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a class="btn btn-success" type="button" href="{{ route('addBanner') }}">Add banner</a>
@endsection
