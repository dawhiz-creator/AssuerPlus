<?php

require_once 'Controleur.php';

class devis extends Controleur
{
    public function index()
    {
        // Code pour gérer la page devis
        $data = []; // données à passer à la vue
        afficherVue('devis', $data); // affichage de la vue devis
    }
}

$pageTitle = "devis";
$content = '
<section id="quote-form" class="container">
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="text-center mb-4">Demandez un devis</h2>
        <form action="submit.php" method="POST">
            <div class="form-group">
                <label for="username">Nom d\'utilisateur :</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Entrez votre nom d\'utilisateur" pattern="[A-Z][a-z]+ [A-Z][a-z]+" required>
                <small class="form-text text-muted">Format : Vivier Patrice</small>
                <div class="invalid-feedback" onclick="this.parentNode.querySelector(\'input\').focus()">Entrez un nom d\'utilisateur valide (format : Vivier Patrice)</div>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse email" required>
                <small class="form-text text-muted">Format : example@domain.com</small>
                <div class="invalid-feedback" onclick="this.parentNode.querySelector(\'input\').focus()">Entrez une adresse email valide</div>
            </div>
            <div class="form-group">
                <label for="phone">Téléphone :</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Entrez votre numéro de téléphone" pattern="\+[0-9]{2} [0-9]{1,2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" required>
                <small class="form-text text-muted">Format : +33 6 12 34 56 78</small>
                <div class="invalid-feedback" onclick="this.parentNode.querySelector(\'input\').focus()">Entrez un numéro de téléphone valide (format : +33 6 12 34 56 78)</div>
            </div>

            <div class="form-group">
                <label for="car">Modèle de voiture :</label>
                <input type="text" class="form-control" id="car" name="car" placeholder="Entrez le modèle de votre voiture" pattern="[a-zA-Z]+ [a-zA-Z]+" required>
                <small class="form-text text-muted">Format : toyota Corolla</small>
                <div class="invalid-feedback" onclick="this.parentNode.querySelector(\'input\').focus()">Entrez un modèle de voiture valide (format : toyota Corolla)</div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
            </div>
        </form>
    </div>
</div>
</section>

';
include("vues/layout.php");
?>