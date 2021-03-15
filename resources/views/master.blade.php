<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Shop: Main- @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
    <div class="navbar-header">
        <a class="navbar-brand" href="/">Online Shop</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="/">All products</a></li>
            <li ><a href="{{ route('categories') }}">Categories</a></li>
            <div class="dropdown">
                <button class="dropbtn">Dropdown</button>
                @foreach($categories['categories'] as $category)
                <div class="dropdown-content">
                    <a href="{{ route('category', $category->code) }}">{{$category->name}}</a>
                </div>
                @endforeach
            </div>
        </ul>
        <ul class="nav navbar-nav navbar-right">
                @guest
            <li><a href="{{ route('login') }}">Login</a></li>
                @endguest
                @auth
            <li><a href="{{ route('home') }}">Add Products</a></li>
            <li><a href="{{ route('get-logout') }}">Logout</a></li>
                @endauth
        </ul>
    </div>
</nav>
        @yield('content')
</div>
</body>
</html>
