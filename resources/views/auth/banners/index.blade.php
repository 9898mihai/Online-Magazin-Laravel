@extends('auth.masterauth')

@section('title', 'Lista de bannere')

@section('content')
    <div class="col-md-5">
        <table class="table">
            <tbody>
            <tr>
                <th>#</th>
                <th>Nume</th>
                <th>Actiune</th>
            </tr>
            @foreach($banners as $banner)
                <tr>
                    <td>{{ $banner->id}}</td>
                    <td>{{ $banner->name }}</td>
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
        <a class="btn btn-success" type="button" href="{{ route('addBanner') }}">Add banner</a>
    </div>
@endsection
