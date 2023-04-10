<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="vues/style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> <img src="vues/logo.jpg" width="30" height="30"
                    class="d-inline-block align-top" alt="">AssuerPlus</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?= ($page === 'accueil') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=accueil">Accueil</a>
                    </li>
                    <li class="nav-item <?= ($page === 'assurance') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=assurance">Assurance auto</a>
                    </li>
                    <li class="nav-item <?= ($page === 'contact') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=contact">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main role="main" class="container">

        <?= $content ?>

    </main>

    <footer class="bg-light">
        <div class="container py-3 text-center">
            <p class="m-0">AssuerPlus : l'assurance auto depuis 20 ans, partout en France
            </p>
            <p class="m-0">&copy; 2023 AssuerPlus - Tous droits réservés</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>