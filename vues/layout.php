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
        <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto">
            <a class="navbar-brand" href="index.php?page=accueil">
                <div class="d-flex align-items-center">
                    <img src="vues/logo.jpg" class="d-inline-block align-top mr-2"
                        <?php if (preg_match('/xs|sm/', $_SERVER['HTTP_USER_AGENT'])): ?> width="30" height="30"
                        <?php else: ?> width="28" height="45" <?php endif; ?> alt="">
                    <div>
                        <span class="d-none d-md-block">AssuerPlus</span>
                        <span class="d-md-none">AssuerPlus<br>l'assureur français</span>
                    </div>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse row" id="navbarNav">
                <ul class="navbar-nav col-md-10 justify-content-center text-center">
                    <li class="nav-item <?= ($page === 'accueil') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=accueil">Accueil</a>
                    </li>
                    <li class="nav-item <?= ($page === 'about') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=about">About us</a>
                    </li>
                    <li class="nav-item <?= ($page === 'services') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=services">Services</a>
                    </li>
                    <li class="nav-item <?= ($page === 'FAQ') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=FAQ">FAQ</a>
                    </li>
                    <li class="nav-item <?= ($page === 'devis') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=devis">Devis</a>
                    </li>
                    <li class="nav-item <?= ($page === 'contact') ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php?page=contact">Contact</a>
                    </li>
                </ul>

                <?php if (!isset($_SESSION['utilisateur'])): ?>
                <button class="btn btn-outline-primary  text-md-right mt-3 mt-md-0 mx-auto btn-sm">
                    <a href="index.php?page=connexion">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="17" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        Espace Personnel
                    </a>
                </button>
                <?php endif; ?>
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
    <script src="site_map.js"></script>

</body>

</html>