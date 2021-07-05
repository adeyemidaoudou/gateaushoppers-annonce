<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gateaushoppers.com - Compte à rebours</title>
    <meta name="description" content="Countdown landing page Bootstrap template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.green.min.css')}}" id="theme-stylesheet">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<header class="mb-auto" style=" .nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
} ">
    <div>
        <!--
              <h3 class="float-md-start mb-0">Cover</h3>
        -->
        <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Accueil</a>
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </nav>
    </div>
</header>
<section style="background: url(img/back.jpg)" class="page-holder position-relative d-flex justify-content-between flex-column">
    <div class="overlay"></div>
    <div class="container position-relative pt-3">
        <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="https://facebook.com/gateaushoppers" class="social-link facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/gateaushoppers" class="social-link twitter"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://instagram.com/gateaushoppers" class="social-link instagram"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
    <div class="container text-center text-white position-relative mt-4 mb-5">
        <h3 class="col-md-12 text-shadow mb-5 text-uppercase">GATEAUSHOPPERS</h3>


        <div > <img src="img/logo_rond.png" height="15%" width="15%"></div>
        <br>
        <br>
        <p class="h4 text-shadow font-weight-normal ">GATEAUSHOPPERS est une plateforme en ligne qui permet à des patisseries de fournir
            leurs services. Commandez des gateaux d'anniversaires, de mariage... payez puis faites-vous livrer.
        </p>
        <br>
        <div id="countdown" class="countdown mt-5">
            <div class="row">
                <div class="countdown-item col-md-3 col-sm-6">
                    <div id="countdown-days" class="countdown-number font-weight-light text-shadow"> </div>
                    <p class="h4 font-weight-light text-shadow">jours</p>
                </div>
                <div class="countdown-item col-md-3 col-sm-6">
                    <div id="countdown-hours" class="countdown-number font-weight-light text-shadow"> </div>
                    <p class="h4 font-weight-light text-shadow">heures</p>
                </div>
                <div class="countdown-item col-md-3 col-sm-6">
                    <div id="countdown-minutes" class="countdown-number font-weight-light text-shadow"> </div>
                    <p class="h4 font-weight-light text-shadow">minutes</p>
                </div>
                <div class="countdown-item col-md-3 col-sm-6">
                    <div id="countdown-seconds" class="countdown-number font-weight-light text-shadow"> </div>
                    <p class="h4 font-weight-light text-shadow">secondes</p>
                </div>
            </div>
        </div>
        <br>
        <p class="h3 text-shadow text-uppercase">Nous préparons les derniers réglagles pour le lancement.
            Restez connectés!</p>
    </div>
    <div class="container text-white position-relative text-center">
        <p class="h3 mb-4 text-shadow font-weight-normal">Ne manquez rien sur le lancement de gateaushoppers!</p>
        <div class="row">
            <div class="col-lg-5 mx-auto">
                <form action="{{route('newsletter')}}" method="post" class="d-flex d-inline-block w-100 flex-column flex-lg-row justify-content-center">
                    @csrf
                    <div class="input-group shadow">
                        <input id="inlineFormInputName2" type="email" name="email" required placeholder="Entrez votre adresse mail" class="form-control">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary mb-2">Me tenir informé</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="py-4 position-relative w-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">

                    <p class="text-small mb-1">©2021
                        <a href="{{url('/')}}" class="text-white" style="margin-right: 20px">Gateaushoppers</a>
                        <a href="{{route('contact')}}" class="text-white" style="margin-right: 20px">Contacts</a>
                    </p>

                </div>
                <div class="col-lg-6 text-center text-lg-right">
                </div>
            </div>
        </div>
    </footer>
</section>
<!-- JavaScript files-->
<script src="{{asset('vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendors/jquery-countdown/jquery.countdown.min.js')}}"></script>
<script src="{{asset('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{asset('js/front.js')}}"></script>
<script>
    // From the following config, you can set the final date.
    config = {
        countdown: {
            year: 2021,
            month: 8,
            day: 8,
            hour: 18,
            minute: 00,
            second: 00
        }
    };
    // and now we init the countdown
    $(function () {
        countdown();
    });
</script>
<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>
</html>


{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   @guest
                  Please, sign in.

                    @else
                        Hello, {{auth()->user()->name}}
                        @endguest
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
--}}
