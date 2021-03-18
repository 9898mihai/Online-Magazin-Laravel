<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Shop - @yield('title')</title>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Online Shop</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li ><a href="{{ route('categories') }}">Categories</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach($categories['categories'] as $category)
                            <li><a href="{{ route('category', $category->code) }}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li role="separator" class="divider"></li>
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endguest
                @auth
                    <li><a href="{{ route('listProducts') }}">Admin Panel</a></li>
                    <li><a href="{{ route('get-logout') }}">Logout</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
        @yield('content')
</div>
</body>
</html>
