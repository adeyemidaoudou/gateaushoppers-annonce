<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Contact</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">



    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

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
    <link href="{{asset('css/form-validation.css')}}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <main>
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{asset('img/logo_rond.png')}}" alt="" width="100" height="100">
            <h2>Bienvenue sur la page de Contact</h2>
            <p class="lead">Nous vous remercions parce que vous jetez un coup d'oeil sur cette page.
            Vous avez besoin de plus d'informations concernant gateaushoppers, vous voulez nous contacter
                pour avoir certaines informations précises, remplissez l'un des formulaires ci-dessous.
            </p>
        </div>

        <div class="row g-3">
           <div class="col-md-5 col-lg-4 order-md-last">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge bg-secondary rounded-pill">3</span>
                </h4><ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$20</strong>
                    </li>
                </ul>

                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7 col-lg-8">
                <p class="lead">Vous possédez une patisserie et vous souhaitez proposer vos services sur gateaushoppers,
                nous serons ravis de collaborer avec vous! Ecrivez nous en remplissant le formulaire ci-dessous!
                </p>
                <form class="needs-validation" action="{{route('contact.patisseries')}}" method="post" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Votre nom</label>
                            <input type="text" class="form-control" id="name" placeholder="Votre nom" name="name" required>
                            <input type="text" class="form-control"  hidden name="subject_id" value="1" required>

                            <div class="invalid-feedback">
                                Vous avez oublié de préciser votre nom!
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Votre email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email" required>
                            <div class="invalid-feedback">
                                Vous avez oublié de préciser votre adresse mail!
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Votre message</label>
                            <div class="input-group">
                                <textarea class="form-control" id="message" name="message" required></textarea>
                                <div class="invalid-feedback">
                                    Vous avez oublié de rédiger votre message !
                                </div>
                            </div>
                        </div>
                        <button class="ml-3 mt-2 btn btn-primary" type="submit">Envoyer</button>
                    </div>
                    <hr class="my-4">
                </form>

                <p class="lead">Vous êtes un visiteur. Vous voulez tester la version bêta du site lorsqu'elle
                    sera prête! Ecrivez nous en remplissant le formulaire ci-dessous!
                </p>
                <form class="needs-validation" action="{{route('contact.patisseries')}}" method="post" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Votre nom</label>
                            <input type="text" class="form-control" id="name" placeholder="votre nom" name="name" required>
                            <input type="text" class="form-control"  hidden name="subject_id" value="2" required>
                            <div class="invalid-feedback">
                                Vous avez oublié de préciser votre nom!
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Votre email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email" required>
                            <div class="invalid-feedback">
                                Vous avez oublié de préciser votre adresse mail.
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="username" class="form-label">Votre message</label>
                            <div class="input-group">
                                <textarea class="form-control" id="message" name="message" required></textarea>
                                <div class="invalid-feedback">
                                    Votre message ici.
                                </div>
                            </div>
                        </div>

                        <button class="ml-3 mt-2 btn btn-primary" type="submit">Envoyer</button>

                    </div>
                    <hr class="my-4">
                </form>


                <p class="lead">Vous êtes disponible, vous voulez proposer vos services de livraison aux patisseries!
                    Ecrivez nous en remplissant le formulaire ci-dessous!
                </p>
                <form class="needs-validation" action="{{route('contact.patisseries')}}" method="post" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Votre nom</label>
                            <input type="text" class="form-control" id="name" placeholder="votre nom" name="name" required>
                            <input type="text" class="form-control"  hidden name="subject_id" value="3" required>
                            <div class="invalid-feedback">
                                Vous avez oublié de préciser votre nom!
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Votre email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email" required>
                            <div class="invalid-feedback">
                                Vous avez oublié de préciser votre adresse mail.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Votre message</label>
                            <div class="input-group">
                                <textarea class="form-control" id="message" name="message" required></textarea>
                                <div class="invalid-feedback">
                                    Votre message ici.
                                </div>
                            </div>
                        </div>

                        <button class="ml-3 mt-2 btn btn-primary" type="submit">Envoyer</button>

                    </div>
                    <hr class="my-4">
                </form>


                <p class="lead">Vous êtes développeur, vous voulez avoir accès à l'API publique de l'application lorsqu'elle sera prête!
                    Ecrivez nous en remplissant le formulaire ci-dessous!
                </p>
                <form class="needs-validation" action="{{route('contact.patisseries')}}" method="post" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Votre nom</label>
                            <input type="text" class="form-control" id="name" placeholder="votre nom" name="name" required>
                            <input type="text" class="form-control"  hidden name="subject_id" value="4" required>
                            <div class="invalid-feedback">
                                Vous avez oublié de préciser votre nom!
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Votre email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email" required>
                            <div class="invalid-feedback">
                                Vous avez oublié de préciser votre adresse mail.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Votre message</label>
                            <div class="input-group">
                                <textarea class="form-control" id="message" name="message" required></textarea>
                                <div class="invalid-feedback">
                                    Votre message ici.
                                </div>
                            </div>
                        </div>

                        <button class="ml-3 mt-2 btn btn-primary" type="submit">Envoyer</button>

                    </div>
                    <hr class="my-4">
                </form>

                <p class="lead">Vous voulez dire un coucou ou envoyer un message d'encouragement ou quoi que ce soit
                    à toute l'équipe de Gateaushoppers! Ecrivez nous en remplissant le formulaire ci-dessous!
                </p>
                <form class="needs-validation" action="{{route('contact.patisseries')}}" method="post" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Votre nom</label>
                            <input type="text" class="form-control" id="name" placeholder="votre nom" name="name" required>
                            <input type="text" class="form-control"  hidden name="subject_id" value="5" required>
                            <div class="invalid-feedback">
                                Vous avez oublié de préciser votre nom!
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Votre email</label>
                            <input type="email" class="form-control" id="email" placeholder="Votre email" name="email" required>
                            <div class="invalid-feedback">
                                Vous avez oublié de préciser votre adresse mail.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Votre message</label>
                            <div class="input-group">
                                <textarea class="form-control" id="message" name="message" required></textarea>
                                <div class="invalid-feedback">
                                    Votre message ici.
                                </div>
                            </div>
                        </div>

                        <button class="ml-3 mt-2 btn btn-primary" type="submit">Envoyer</button>

                    </div>
                    <hr class="my-4">
                </form>

            </div>
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 GateauShoppers</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a class="nav-link" href="{{url('/')}}">Accueil</a></li>
            <li class="list-inline-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
        </ul>
    </footer>
</div>


<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('js/form-validation.js')}}"></script>
</body>
</html>
