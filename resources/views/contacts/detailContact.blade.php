<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <title>Contact</title>
</head>

<body class="bg-light bg-gradient">
    <header class="mb-5 border p-3 text-center shadow bg-body">
        <h1 style="font-size: 4rem">Contact-<b>App</b></h1>
    </header>
    <!-- contenu -->
    <main class="container mb-5">
        <div class="clearfix mt-5 mb-3">
            <a href="{{ route('contact.listeContact') }}">
                <button class="btn btn-primary float-end">Retour</button>
            </a>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('assets/img/avatar.png') }}" height="128px" alt="Profile" class="rounded-circle" />
                        <h2>{{ $contact->nom.' '.$contact->prenom }}</h2>
                        <h3 class="fw-normal fs-5">Web Designer</h3>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"
                                    aria-selected="true" role="tab">
                                    Informations
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview"
                                role="tabpanel">
                                <h5 class="card-title">Description</h5>
                                <p class="small fst-italic">
                                    Sunt est soluta temporibus accusantium neque nam maiores
                                    cumque temporibus. Tempora libero non est unde veniam est
                                    qui dolor. Ut sunt iure rerum quae quisquam autem eveniet
                                    perspiciatis odit. Fuga sequi sed ea saepe at unde.
                                </p>

                                <h5 class="card-title">Détails du contact</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nom :</div>
                                    <div class="col-lg-9 col-md-8">{{ $contact->nom }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Prénom :</div>
                                    <div class="col-lg-9 col-md-8">{{ $contact->prenom }} </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Téléphone :</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ $contact->telephone }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Age :</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ $contact->age }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Job :</div>
                                    <div class="col-lg-9 col-md-8">Web Designer</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Country :</div>
                                    <div class="col-lg-9 col-md-8">USA</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Address :</div>
                                    <div class="col-lg-9 col-md-8">
                                        A108 Adam Street, New York, NY 535022
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email :</div>
                                    <div class="col-lg-9 col-md-8">jean@example.com</div>
                                </div>
                            </div>
                        </div>
                        <!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
