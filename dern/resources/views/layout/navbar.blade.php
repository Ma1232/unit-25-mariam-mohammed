<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
        <title>Document</title>
    </head>
    <body>

<nav class="navbar navbar-expand text-white  navbar-dark bg-dark">
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('customers.index')}}">customers <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('jobs.index')}}">jobs</a>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tickets.index')}}">tickets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('knowladgebase.index')}}">knowladge Base</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">login</a>
            </li>
        </li>
    </ul>
</nav>

@yield('main')


    </body>
</html>
