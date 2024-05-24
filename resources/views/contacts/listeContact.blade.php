<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <title>Gestion des contacts</title>
</head>

<body class="bg-light bg-gradient">
    <header class="mb-5 border p-3 text-center shadow bg-body">
        <h1 style="font-size: 4rem">Contact-<b>App</b></h1>
    </header>
    <!-- contenu -->
    <main class="container my-5">
        {{-- message de session --}}
        @session('success')
            <div class="alert alert-success text-center">{{ $value }}</div>
        @endsession
        {{-- message de session fin --}}
        <div class="clearfix mt-5 mb-3">
            <a href="{{ route('contact.ajouterContact') }}">
                <button class="btn btn-primary float-end">Créer un contact</button>
            </a>
        </div>
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Liste des contacts</h2>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Âge</th>
                            <th class="w-25">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listeContacts as $contact)
                            <tr>
                                <td>{{ $contact->nom }}</td>
                                <td>{{ $contact->prenom }}</td>
                                <td>{{ $contact->telephone }}</td>
                                <td>{{ $contact->age }}</td>
                                <td class="w-25">
                                    <div class="btn-group" role="group">
                                        <a href="show.html">
                                            <button type="button" class="btn btn-info">Voir</button>
                                        </a>
                                        <a href="edit.html" class="mx-2">
                                            <button type="button" class="btn btn-warning">
                                                Modifier
                                            </button>
                                        </a>
                                        <form action="" method="post">
                                            <button type="submit" class="btn btn-danger">
                                                Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
