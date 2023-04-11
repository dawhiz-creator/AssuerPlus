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

$title='accueil';
$content = '
  
    <div class="container content col-md-12 col-lg-8 mx-auto">

      <div class="section-heading">
        <h1 class="heading col-md-12 text-center "><span class="highlight ">Assistance</span> et <span class="highlight ">sinistre</span></h1>
        <div class="heading col-md-12 text-center">Comment pouvons-nous vous aider ?</div>
      </div>
<section class="mod-section-entete">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-8 mx-auto">
        <div class="row">
          <div class="col-md-6 mb-3">
            <a class="btn btn-primary btn-promote" href="index.php?page=contact" onclick="javascript:tc_events_global(this,\'click\', {\'evt_click_name\': \'obtenir-assistance\'});">Une situation d’urgence, une panne&nbsp;?<span><strong>Obtenir de l’assistance</strong></span></a>
          </div>

<div class="col-md-6 mb-3">
        <a class="btn btn-primary btn-promote" href="index.php?page=connexion"
            onclick="javascript:tc_events_global(this,\'click\', {\'evt_click_name\': \'declaration\'});">Un accident,
            un problème&nbsp;?<span><strong>Déclarer un sinistre</strong></span></a>
        </div>

          <div class="col-md-6 mb-3">
            <a class="btn btn-primary btn-promote" href="index.php?page=connexion" onclick="javascript:tc_events_global(this,\'click\', {\'evt_click_name\': \'suivre-un-sinistre\'});" tabindex="-1">Une question, un document à envoyer&nbsp;?<span><strong>Suivre un sinistre</strong></span></a>
          </div>
          <div class="col-md-6 mb-3">
            <a class="btn btn-primary btn-promote" href="index.php?page=garages" onclick="javascript:tc_events_global(this,\'click\', {\'evt_click_name\': \'trouver-un-reparateur-partenaire\'});">Besoin d\'une réparation auto&nbsp;?<span><strong>Trouver un garage</strong></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </div>

<div class="container">
  <h3 class="col-md-12 text-center">Nos  Agences</h3>
  <div class="row text-center">
    <div class="col-md-3">
      <ul class="list-unstyled">
        <li><a href="/paris-C75056" title="Paris">Paris</a></li>
        <li><a href="/marseille-C13055" title="Marseille">Marseille</a></li>
        <li><a href="/lyon-C69123" title="Lyon">Lyon</a></li>
        <li><a href="/toulouse-C31555" title="Toulouse">Toulouse</a></li>
        <li><a href="/nice-C06088" title="Nice">Nice</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="list-unstyled">
        <li><a href="/nantes-C44109" title="Nantes">Nantes</a></li>
        <li><a href="/strasbourg-C67482" title="Strasbourg">Strasbourg</a></li>
        <li><a href="/montpellier-C34172" title="Montpellier">Montpellier</a></li>
        <li><a href="/bordeaux-C33063" title="Bordeaux">Bordeaux</a></li>
        <li><a href="/lille-C59350" title="Lille">Lille</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="list-unstyled">
        <li><a href="/rennes-C35238" title="Rennes">Rennes</a></li>
        <li><a href="/le-havre-C76351" title="Le Havre">Le Havre</a></li>
        <li><a href="/saint-etienne-C42218" title="Saint-Etienne">Saint-Etienne</a></li>
        <li><a href="/toulon-C83137" title="Toulon">Toulon</a></li>
        <li><a href="/grenoble-C38185" title="Grenoble">Grenoble</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="list-unstyled">
        <li><a href="/angers-C49007" title="Angers">Angers</a></li>
        <li><a href="/dijon-C21231" title="Dijon">Dijon</a></li>
        <li><a href="/brest-C29019" title="Brest">Brest</a></li>
      </ul>
    </div>
  </div>
</div>

  
  ';
include("vues/layout.php");
