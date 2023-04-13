<?php

//require_once 'config/config.php';
require_once 'models/helpers.php';
require_once 'controleurs/Controleur.php';
require_once 'models/Client.php';
require_once 'models/Contrat.php';
require_once 'models/Sinistre.php';

// Récupération de la page à afficher
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

// Instanciation du contrôleur correspondant à la page demandée
$controleur = getControleur($page);

// Affichage de la page
afficher($controleur, 'afficherPage');