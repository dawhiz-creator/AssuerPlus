<?php

require_once 'Controleur.php';

class accueil extends Controleur
{
    public function index()
    {
        // Code pour gérer la page d'accueil
        $data = []; // données à passer à la vue
        afficherVue('accueil', $data); // affichage de la vue accueil
    }
}


$content = '
  
  <div class="container">
        <h1>Déclaration de sinistre</h1>
        <form>
            <div class="form-group">
                <label for="date">Date de l\'accident</label>
                <input type="date" class="form-control" id="date">
            </div>
            <div class="form-group">
                <label for="heure">Heure de l\'accident</label>
                <input type="time" class="form-control" id="heure">
            </div>
            <div class="form-group">
                <label for="description">Description de l\'accident</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="dommages">Dommages causés</label>
                <input type="text" class="form-control" id="dommages">
            </div>
            <div class="form-group">
                <label for="photos">Photos de l\'accident</label>
                <input type="file" class="form-control-file" id="photos">
            </div>
            <div class="form-group">
                <label for="localisation">Localisation de l\'accident</label>
                <input type="text" class="form-control" id="localisation">
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