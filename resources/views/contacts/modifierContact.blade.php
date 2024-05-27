<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <title>Modifier un contact</title>
</head>

<body class="bg-light bg-gradient">
    <header class="mb-5 border p-3 text-center shadow bg-body">
        <h1 style="font-size: 4rem">Contact-<b>App</b></h1>
    </header>
    <!-- contenu -->
    <main class="container my-5">
        <div class="clearfix mt-5 mb-3">
            <a href="{{ route('contact.listeContact') }}">
                <button class="btn btn-primary float-end">Retour</button>
            </a>
        </div>
        <div class="card m-auto" style="max-width: 500px">
            <div class="card-header">
                <h2 class="text-center">Modifier un contact</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('contact.enregistrerModification', $contact->id) }}" method="post">
                    @csrf <!-- Important -->
                    @method('put') <!-- Important -->
                    <div class="row">
                        <div class="row col-12 mb-3">
                            <div class="col-4">
                                <label for="" class="col-form-label">Nom</label>
                            </div>
                            <div class="col-8">
                                <input class="form-control @error('nom') is-invalid @enderror" type="text"
                                    placeholder="Nom" value="{{ $contact->nom }}" name="nom" required />
                                @error('nom')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-12 mb-3">
                            <div class="col-4">
                                <label for="" class="col-form-label">Prénom</label>
                            </div>
                            <div class="col-8">
                                <input class="form-control @error('prenom') is-invalid @enderror" type="text"
                                    placeholder="Prénom" value="{{ $contact->prenom }}" name="prenom" required />
                                @error('prenom')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-12 mb-3">
                            <div class="col-4">
                                <label for="" class="col-form-label">Téléphone</label>
                            </div>
                            <div class="col-8">
                                <input class="form-control @error('telephone') is-invalid @enderror" type="text"
                                    placeholder="Téléphone" value="{{ $contact->telephone }}" name="telephone"
                                    required />
                                @error('telephone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-12 mb-3">
                            <div class="col-4">
                                <label for="" class="col-form-label">Âge</label>
                            </div>
                            <div class="col-8">
                                <input class="form-control @error('age') is-invalid @enderror" type="number" placeholder="Âge"
                                    value="{{ $contact->age }}" name="age" required />
                                    @error('age')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary float-end me-4">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
