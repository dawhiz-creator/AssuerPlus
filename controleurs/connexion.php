<?php
require_once 'Controleur.php';

class connexion extends Controleur
{
    public function index()
    {
        // Code pour gérer la page de connexion
        $data = []; // données à passer à la vue
        afficherVue('connexion', $data); // affichage de la vue connexion
    }
}


$title = "connexion";
$content = '    

<div class="container mt-5">
  <div class="row h-100">
    <div class="col-md-4 offset-md-4 my-auto">
      <div class="card">
        <div class="card-header">
          Connexion
        </div>
        <div class="card-body">

          <form>
            <div class="mb-3">
                <div class="form-group">
                    <label for="username">Nom d\'utilisateur :</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Entrez votre nom d\'utilisateur" pattern="[A-Z][a-z]+ [A-Z][a-z]+" required>
                    <small class="form-text text-muted">Format : Vivier Patrice</small>
                    <div class="invalid-feedback" onclick="this.parentNode.querySelector(\'input\').focus()">Entrez un nom d\'utilisateur valide (format : Vivier Patrice)</div>
                </div>
            
                <div class=class="mb-3">
                    <label for="password">Mot de passe :</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                    <small class="form-text text-muted">Format : dawhiz@live.fr</small>
                    <div class="invalid-feedback" onclick="this.parentNode.querySelector(\'input\').focus()">Entrez un mot de passe valide (format : dawhiz@live.fr)</div>
                </div>

            <button type="submit" class="btn btn-primary my-4">Se connecter</button>
          </form>
            <p class="mt-3">Vous n\'avez pas encore de compte ? <a href="index.php?page=newaccount">Créer un compte</a></p>
        </div>
      </div>

      <div class="mt-3 text-center bg-light">
        <small><strong>*</strong>Notre site s\'engage à respecter les règles RGPD en vigueur.Nous nous engageons à ne pas communiquer vos données à des tiers sans votre consentement</small>
      </div>

    </div>
  </div>
</div>



    ';
include("vues/layout.php");
?>