@extends('master')

@section('content')
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Online Shop</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="/">All products</a></li>
                <li class="active"><a href="/categories">Categories</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @foreach($categories as $category)
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
