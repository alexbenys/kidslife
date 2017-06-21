<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KidsLife | LifeUC</title>

    {{--Bootstrap Default CSS--}}
    <link rel="stylesheet" href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.css') }}">

    {{--Additional CSS--}}
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    @yield('css')

    {{--Additional JS Files--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('js')

</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">KidsLife</a>
        </div>
        <ul class="nav navbar-nav">
            <li class=""><a href="#">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Roster <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Roster</a></li>
                    <li><a href="#">Availability Form</a></li>
                </ul>
            </li>
            <li><a href="#">Contact Leaders</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>

@yield('content')

<footer style="margin-top: 20px;">
    <div class="text-center">
        <a href="http://www.lifeuc.com.au/">LifeUC</a> |
        <a href="#">Contact Administrator</a>
    </div>
</footer>

@yield('pageSpecificJS')
</body>
</html>
