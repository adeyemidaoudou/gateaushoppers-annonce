<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Remerciement</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">



    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.blue.min.css')}}" id="theme-stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/heroes.css')}}" rel="stylesheet">
</head>
<body>

<main>
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{asset('img/logo_rond.png')}}" alt="" width="72" height="57">
        <h1 class="display-5 fw-bold">Gateaushoppers</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Nous vous tiendrons informé de toute l'actualité sur gateaushoppers. Merci pour l'intérêt que
                vous portez à gateaushoppers. Portez-vous bien! </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">

                <a class="nav-link" href="{{url('/')}}">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Accueil</button>
                </a>


                <a class="nav-link" href="{{route('contact')}}">
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Retour aux contacts</button>
                </a>
            </div>
        </div>
    </div>


    <div id="countdown" class="px-4 py-5 my-5 countdown mt-5 text-center">
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

</main>

<script src="{{asset('vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
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

</body>
</html>
