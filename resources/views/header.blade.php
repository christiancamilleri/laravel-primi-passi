<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="nav-left">
                <h1>
                    #LOGO
                </h1>
            </div>
            <div class="nav-center">
                <ul>
                    @foreach ($links as $link)
                        <li> <a href="{{route($link)}}">{{$link}}</a>  </li>
                    @endforeach

                </ul>
            </div>
            <div class="nav-right">
                <h1>
                    #LOGIN
                </h1>
            </div>
        </nav>
    </header>

    <h2>
        Torna alla <a href="{{route('home')}}">home</a>
    </h2>
</body>
</html>