<?php

require_once 'Controleur.php';

class services extends Controleur
{
    public function index()
    {
        // Code pour gérer la page services
        $data = []; // données à passer à la vue
        afficherVue('services', $data); // affichage de la vue services
    }
}

$title = "services";
$content = '
<!-- Ajout de détails sur les services -->
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h2>Nos services</h2>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Assurance responsabilité civile</li>
        <li class="list-group-item">Assurance tous risques</li>
        <li class="list-group-item">Assurance pour conducteur novice</li>
        <li class="list-group-item">Assurance pour conducteur malussé</li>
        <li class="list-group-item">Assurance pour conducteur étranger</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <hr>
      <p class="lead"><strong>Nos différentes offres d\'assurance :</strong></p>
      <ul>
        <li>Assurance responsabilité civile : Cette assurance est obligatoire pour tous les conducteurs en France et couvre les dommages que vous pouvez causer à un tiers en cas d\'accident.</li>
        <li>Assurance tous risques : Cette assurance couvre les dommages subis par votre véhicule, ainsi que les dommages causés à un tiers en cas d\'accident.</li>
        <li>Assurance pour conducteur novice : Cette assurance est destinée aux conducteurs qui viennent d\'obtenir leur permis de conduire et qui sont considérés comme des conducteurs novices. Elle peut offrir des garanties spécifiques pour les conducteurs débutants.</li>
        <li>Assurance pour conducteur malussé : Cette assurance est destinée aux conducteurs qui ont un malus, c\'est-à-dire qui ont été responsables de plusieurs accidents ou sinistres. Elle peut offrir des garanties spécifiques pour les conducteurs à risque.</li>
        <li>Assurance pour conducteur étranger : Cette assurance est destinée aux conducteurs qui ont un permis de conduire étranger et qui souhaitent conduire en France. Elle peut offrir des garanties spécifiques pour les conducteurs étrangers.</li>
      </ul>
    </div>
  </div>
</div>

';
include("vues/layout.php");
?>