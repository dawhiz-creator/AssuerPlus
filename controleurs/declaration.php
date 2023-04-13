<?php

require_once 'Controleur.php';

class declaration extends Controleur
{
    public function index()
    {
        // Code pour gérer la page declaration
        $data = []; // données à passer à la vue
        afficherVue('declaration', $data); // affichage de la vue declaration
    }
}


$content = '
  
<div class="container">
    <h1>Déclaration de sinistre</h1>
    <form>
        <div class="form-group">
            <label for="date">Date de l\'accident</label>
            <input type="date" class="form-control" id="date" placeholder="Veuillez entrer la date de l\'accident (JJ/MM/AAAA)" required>
        </div>
        <div class="form-group">
            <label for="heure">Heure de l\'accident</label>
            <input type="time" class="form-control" id="heure" placeholder="Veuillez entrer l\'heure de l\'accident (HH:MM)" required>
        </div>
        <div class="form-group">
            <label for="description">Description de l\'accident</label>
            <textarea class="form-control" id="description" rows="3" placeholder="Veuillez entrer une description de l\'accident" required></textarea>
        </div>
        <div class="form-group">
            <label for="dommages">Dommages causés</label>
            <input type="text" class="form-control" id="dommages" placeholder="Veuillez entrer les dommages causés" required>
        </div>
        <div class="form-group">
            <label for="photos">Photos de l\'accident</label>
            <input type="file" class="form-control-file" id="photos" placeholder="Veuillez joindre des photos de l\'accident" required>
        </div>
        <div class="form-group">
            <label for="localisation">Localisation de l\'accident</label>
            <input type="text" class="form-control" id="localisation" placeholder="Veuillez entrer la localisation de l\'accident" required>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre la déclaration</button>
    </form>
    <hr>
    <h2>Suivi de l\'état du sinistre</h2>
    <ul class="list-group">
        <li class="list-group-item">Soumission de la déclaration <span class="badge badge-primary">En attente</span>
        </li>
        <li class="list-group-item">Traitement de la déclaration <span class="badge badge-warning">En cours</span>
        </li>
        <li class="list-group-item">Résolution de la déclaration <span class="badge badge-success">Terminé</span>
        </li>
    </ul>
</div>


  
  
  
  ';
include("vues/layout.php");