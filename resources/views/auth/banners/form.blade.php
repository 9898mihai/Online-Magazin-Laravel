@extends('auth.masterauth')

@isset($banner)
    @section('title', 'Edit - ' . $banner->name)
@else
    @section('title', 'Add banner')
@endisset

@section('content')
    <div class="col-md-12">
        <form method="POST" enctype="multipart/form-data"
              @isset($banner)
              action="{{ route('banners.update', $banner) }}"
              @else
              action="{{ route('banners.store') }}"
            @endisset
        >
            <div>
                @isset($banner)
                    @method('PUT')
                @endisset
                @csrf
                    <div class="input-group row" style="margin-bottom: 20px">
                        <label for="name" class="col-sm-2 col-form-label">Name: </label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="name" id="name" value="@isset($banner){{ $banner->name }}@endisset" />
                        </div>
                    </div>
                <div class="input-group row" style="margin-bottom: 20px">
                    <label for="description" class="col-sm-2 col-form-label">Description: </label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="description" id="description" value="@isset($banner){{ $banner->description }}@endisset" />
                    </div>
                </div>
                <div class="input-group row" style="margin-bottom: 20px">
                    <label for="image" class="col-sm-2 col-form-label">Image: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file"> Upload <input type="file" style="display: none;" name="image" id="image" /> </label>
                    </div>
                </div>
                    @isset($banner) <img src="{{Storage::url($banner->image)}}" class="img-fluid img-thumbnail" alt="">@endisset
            </div><br>
            <button class="btn btn-success">@isset($banner)Edit @else Add @endisset</button>
        </form>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @if(session()->has('errormessage'))
        <div class="alert alert-danger">
            {{ session()->get('errormessage') }}
        </div>
    @endif
@endsection
