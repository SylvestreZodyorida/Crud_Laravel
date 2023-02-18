<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel Application</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header class="container">
        <nav class="row">
            <span class="col-md-4 logo">CRUD Laravel Application</span>
            <ul class="row col-md-4 menu">
                <li class="col-md-4 lk_acc"><a href="{{ route('acceuil') }}">Acceuil</a></li>
                <li class="col-md-4 lk_etu"><a href="{{ route('etudiant') }}">Etudiant</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        @yield("contenu")
    </main>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>