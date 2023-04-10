<?php

require_once 'Controleur.php';

class contact extends Controleur
{
    public function index()
    {
        // Code pour gérer la page d'accueil
        $data = []; // données à passer à la vue
        afficherVue('contact', $data); // affichage de la vue accueil
    }
}
// contact.php
$pageTitle = "Contact";
$content = "<div class=\"container\">
    <h1>Contactez-nous</h1>
    <form>
        <div class=\"form-group\">
            <label for=\"name\">Nom</label>
            <input type=\"text\" class=\"form-control\" id=\"name\">
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Adresse e-mail</label>
            <input type=\"email\" class=\"form-control\" id=\"email\">
        </div>
        <div class=\"form-group\">
            <label for=\"message\">Message</label>
            <textarea class=\"form-control\" id=\"message\" rows=\"3\"></textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
    </form>
</div>";
include("vues/layout.php");
?>