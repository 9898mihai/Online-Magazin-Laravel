@extends('layout')

@section('content')
<div class="container">
    <div class="starter-template">
        @foreach($categories['categories'] as $category)
        <div class="panel">
            <a href="{{ route('category', $category->code) }}"> <h2>{{$category->name}}</h2>
            </a>
            <p>
                {{$category->description}}
            </p>
        </div>
            @endforeach
    </div>
</div>
@endsection
