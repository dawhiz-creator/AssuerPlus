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

<div class="container mt-5" style="height: 70vh;">
  <div class="row h-100">
    <div class="col-md-4 offset-md-4 my-auto">
      <div class="card">
        <div class="card-header">
          Connexion
        </div>
        <div class="card-body">

          <form>
            <div class="mb-3">
              <label for="username" class="form-label">Nom d\'utilisateur</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
          </form>

        </div>
      </div>

      <div class="mt-3 text-center">
        <small>Notre site s\'engage à respecter les règles RGPD en vigueur.Nous nous engageons à ne pas communiquer vos données à des tiers sans votre consentement</small>
      </div>

    </div>
  </div>
</div>



    ';
include("vues/layout.php");
?>