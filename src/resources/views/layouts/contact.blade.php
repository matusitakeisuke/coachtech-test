<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/contact.css')}}">
    <link 
    href="https://fonts.googleapis.com/css2?family=Gorditas&family=Noto+Serif+JP:wght@900&display=swap"
    rel="stylesheet">
    @yield('css')
</head>
<body>

    <header class="header">
        <div class="header__div">
            <a class="header__a" href="/">FashionablyLate</a>
        </div>
    </header>

    <main>
        @yield('contact')
    </main>
</body>
</html>