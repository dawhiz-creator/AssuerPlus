<?php

require_once 'Controleur.php';

class Contact extends Controleur
{
    public function index()
    {
        // Code pour gérer la page d'accueil
        $data = []; // données à passer à la vue
        afficherVue('contact', $data); // affichage de la vue accueil
    }
}

$title = "Contact";
$content = '<div class="container">
    <h1 class="col-md-12 text-center">Contactez-nous</h1>
    <form>
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Adresse e-mail</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <!-- Ajout d\'informations sur l\'entreprise -->
<div class="row">
    <div class="col-md-12 text-center">
        <p><strong>AssurerPlus</strong></p>
        <p>123 rue des assurances</p>
        <p>75001 Paris</p>
        <p>Tél. : 01 23 45 67 89</p>
        <p>Horaires d\'ouverture : du lundi au vendredi de 9h à 18h</p>
    </div>
</div>
        <button type="submit" class="btn btn-primary col-md-12 text-center">Envoyer</button>
    </form>
</div>
';
include("vues/layout.php");
?>