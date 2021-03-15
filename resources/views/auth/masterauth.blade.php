<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="/js/app.js" defer></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="/">HOME</a>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Categorii</a></li>
                    <li><a href="/">Produse</a>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endguest
                    @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('get-logout') }}">Logout</a></li>
                     @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <h1 align="center" class="card-header">@yield('title')</h1>
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

