<?php

require_once 'Controleur.php';

class newaccount extends Controleur
{
    public function index()
    {
        // Code pour gérer la page newaccount
        $data = []; // données à passer à la vue
        afficherVue('newaccount', $data); // affichage de la vue newaccount
    }
}

$title = "newaccount";
$content = '
<div class="container py-5">
  <div class="row">
    <div class="col-md-12">
      <h2 class="heading col-md-12 text-center">Inscription</h2>
      <form >
        <div class="form-row mt-4">
          <div class="form-group col-md-6 mt-2">
            <label for="inputFirstName">Prénom <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="inputFirstName" placeholder="Prénom" required>
            <small class="form-text text-muted">Format attendu: Lettres uniquement</small>
          </div>
          <div class="form-group col-md-6 mt-2">
            <label for="inputLastName">Nom <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="inputLastName" placeholder="Nom" required>
            <small class="form-text text-muted">Format attendu: Lettres uniquement</small>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6 mt-3">
            <label for="inputEmail">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
            <small class="form-text text-muted">Format attendu: exemple@domaine.com</small>
          </div>
          <div class="form-group col-md-6 mt-3">
            <label for="inputPassword">Mot de passe <span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe" required>
            <small class="form-text text-muted">Format attendu: Minimum 8 caractères, une lettre majuscule, une lettre minuscule et un chiffre</small>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6 mt-3">
            <label for="inputPasswordConfirmation">Confirmation du mot de passe <span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="inputPasswordConfirmation"
                   placeholder="Confirmation du mot de passe" required>
            <small class="form-text text-muted">Format attendu: Doit être identique au mot de passe précédent</small>
          </div>
          <div class="form-group col-md-6 mt-3">
            <label for="inputPhoneNumber">Numéro de téléphone <span class="text-danger">*</span></label>
            <input type="tel" class="form-control" id="inputPhoneNumber" placeholder="Numéro de téléphone" required>
            <small class="form-text text-muted">Format attendu: 10 chiffres, sans espaces ni caractères spéciaux</small>
          </div>
        </div>
        <button type="submit" class="btn btn-primary col-md-12 text-center mt-4"><i class="fas fa-user-plus"></i> S\'inscrire</button>
      </form>
    </div>
  </div>
</div>
  
';
include("vues/layout.php");
?>