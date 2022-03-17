<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title','Home')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}" type="text/css" />
</head>
<body>
    <header>

    </header>

    <main>
        @yield('content')
    </main>

    <footer></footer>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>