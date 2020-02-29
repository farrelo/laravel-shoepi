<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style type="text/css">
    .cart{
        width: 40px;
        height: 40px;
    }
    .hvr:hover{
        transform:scale(1.2);
    }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>

<body>
<!--NAVBAR-->
<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary">
    <div class="col-2">
        <a class="navbar-brand hvr" href="/"><img class="resize" src="/img/shoepi.png"></a>
    </div>
    <div class="col-8">
        <form action="{{route('search')}}" method="get" class="mx-2 my-auto d-inline w-100">
            <div class="input-group">
                <input name="search" class="form-control mr-sm-2" type="text" placeholder="Search by name, categories or seller name" aria-label="Search">
                <span class="input-group-append">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </span>
            </div>
        </form>
    </div>
    <div class="col-1">
        <ul class="navbar-nav ml-auto">
            <a class="nav-link text-white" id="time"></a>
            <!-- Authentication Links -->
                @if(Auth::user())
                    <li class="nav-item">
                        <a class="nav-link text-white hvr" href="/">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white hvr" href="{{route('logout')}}">Logout</a>
                    </li>
                    
                    <li class="nav-item">
                    
                    </li>
                   
                @else
                <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <class="nav-link text-white" href="{{route('register')}}">Register</a>
                    </li>
                @endif
        </ul>
    </div>
    @if(Auth::user())
    <?php
        $cr=Auth::user()->Cart()->get();
        $qt=0;
        foreach($cr as $rc)
        {
            $qt+=$rc->quantity;
        }
    ?>
    <div class="col-2 ml-4">
    <a button type='button' class="nav-link text-white hvr" href="{{route('cart')}}"><img class="cart" src="/img/cart-icon.png"><span class="badge badge-light">{{$qt}}</span></a>
    </div>
    @endif
</nav>
<!--END OF NAVBAR-->
@yield('content')
<footer class="py-2 bg-primary text-white-50">
        <div class="container text-center text-white">
            <p> &copy 2019 Copyright Shoepi</p>
        </div>
    </footer>
</body>
</html>
