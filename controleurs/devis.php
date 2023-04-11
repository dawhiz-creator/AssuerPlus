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
                        <label for="name">Nom :</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone :</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="car">Modèle de voiture :</label>
                        <input type="text" class="form-control" id="car" name="car" required>
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