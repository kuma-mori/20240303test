<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FasionablyLate</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/common.css')}}"/>
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <a href="/" class="header_logo">FashionablyLate</a>
        </div>
        <div class="header_button">
            @if (Request::is('/register'))
                <a href="#" class="btn">register</a>
            @elseif (Request::is('/login'))
                <a href="#" class="btn">login</a>
            @elseif (Auth::check())
                <a href="#" class="btn">logout</a>
            @endif
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>