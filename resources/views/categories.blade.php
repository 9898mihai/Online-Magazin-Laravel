@extends('master')

@section('title', 'Categories')

@section('content')
<div class="container">
    <div class="starter-template">
        <h1>Categorii</h1>
        @foreach($categories['categories'] as $category)
        <div class="list-group">
            <a href="{{ route('category', $category->code) }}" class="list-group-item"> <h2>{{$category->name}}</h2></a>
        </div>
            @endforeach
    </div>
</div>
@endsection
