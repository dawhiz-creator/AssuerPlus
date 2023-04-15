<?php

require_once 'Controleur.php';

class FAQ extends Controleur
{
    public function index()
    {
        // Code pour gérer la page FAQ
        $data = []; // données à passer à la vue
        afficherVue('FAQ', $data); // affichage de la vue FAQ
    }
}

$pageTitle = "FAQ";
$content = '
<section id="faq">
  <div class="container">
    <h2 class="text-center mb-5">FAQ (Foire aux questions)</h2>
    <div class="accordion" id="accordionFAQ">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Quels sont les types d\'assurance proposés par AssuerPlus ?
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
          <div class="card-body">
            AssuerPlus propose plusieurs types d\'assurance, notamment :
            <ul>
              <li>L\'assurance responsabilité civile, qui couvre les dommages que vous pourriez causer à des tiers dans le cadre de l\'utilisation de votre véhicule.</li>
              <li>L\'assurance tous risques, qui couvre les dommages que vous pourriez causer à votre propre véhicule, en plus de ceux causés à des tiers.</li>
              <li>L\'assurance conducteur, qui vous couvre en cas de dommages corporels que vous pourriez subir lors d\'un accident.</li>
              <li>L\'assurance vol, qui vous couvre en cas de vol de votre véhicule ou de ses accessoires.</li>
              <li>L\'assistance 24h/24 et 7j/7, qui vous assure une assistance en cas de panne ou d\'accident.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Comment puis-je contacter AssuerPlus ?
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
          <div class="card-body">
            Vous pouvez contacter AssuerPlus de plusieurs façons :
            <ul>
              <li>Par téléphone au <a href="tel:+33123456789">01 23 45 67 89</a>, du lundi au vendredi de 9h à 18h.</li>
              <li>Par email à l\'adresse <a href="mailto:contact@assurerplus.fr">contact@assuerplus.fr</a>.</li>
            </ul>
          </div>
        </div>
        <div class="card-header" id="headingThree">
  <h5 class="mb-0">
    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      Comment souscrire une assurance chez AssuerPlus ?
    </button>
  </h5>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
  <div class="card-body">
    Pour souscrire une assurance chez AssuerPlus, vous pouvez soit contacter un conseiller par téléphone ou par email, soit remplir un formulaire en ligne sur notre site web. Vous devrez fournir certaines informations telles que vos coordonnées, les détails de votre véhicule, votre historique de conduite, etc. Une fois que vous aurez fourni toutes les informations nécessaires, nous vous enverrons une proposition d\'assurance avec les détails des garanties et des tarifs proposés.
  </div>
</div>
<div class="card-header" id="headingFour">
  <h5 class="mb-0">
    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      Comment puis-je faire une réclamation ?
    </button>
  </h5>
</div>
<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
  <div class="card-body">
    En cas de sinistre, vous pouvez faire une réclamation en contactant notre service clientèle par téléphone ou par email. Nous vous fournirons les instructions détaillées sur la procédure de réclamation et les documents nécessaires à fournir. Nous ferons de notre mieux pour traiter votre demande rapidement et efficacement.
  </div>
</div>
<div class="card-header" id="headingOne1">
  <h5 class="mb-0">
    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
      Comment puis-je savoir quelle couverture d\'assurance automobile est la meilleure pour moi ?
    </button>
  </h5>
</div>
<div id="collapseOne1" class="collapse" aria-labelledby="headingOne1" data-parent="#accordionFAQ">
  <div class="card-body">
    Le choix de la couverture d\'assurance automobile dépend de vos besoins et de votre budget. Il est important de considérer plusieurs facteurs tels que le modèle de votre voiture, la fréquence d\'utilisation, le lieu de résidence et les risques associés, ainsi que le niveau de couverture souhaité. Nous vous recommandons de contacter notre service clientèle pour discuter de vos besoins spécifiques et recevoir une évaluation personnalisée de votre assurance automobile.
  </div>
</div>


<div class="card-header" id="headingFive">
  <h5 class="mb-0">
    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      Quels sont les avantages de souscrire une assurance tous risques ?
    </button>
  </h5>
</div>
<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFAQ">
  <div class="card-body">
    L\'assurance tous risques est la couverture la plus complète que vous pouvez obtenir pour votre véhicule. Elle couvre non seulement les dommages causés à des tiers, mais également ceux causés à votre propre véhicule, même si vous êtes responsable de l\'accident. Elle peut également inclure des garanties optionnelles telles que le bris de glace ou la garantie du conducteur. Souscrire une assurance tous risques vous donne donc une tranquillité d\'esprit supplémentaire en sachant que vous êtes entièrement protégé en cas de dommages.
  </div>
</div>

  <div class="card-header" id="headingSix">
  <h5 class="mb-0">
    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      Quels sont les critères pour établir le tarif d\'une assurance automobile ?
    </button>
  </h5>
</div>
<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionFAQ">
  <div class="card-body">
    Le tarif d\'une assurance automobile est établi en fonction de plusieurs critères tels que l\'âge et le sexe du conducteur, son historique de conduite, le type de véhicule, sa puissance fiscale, l\'usage qui en est fait, la zone géographique, etc. Les assureurs utilisent ces critères pour évaluer le risque représenté par chaque conducteur et établir un tarif personnalisé en conséquence.
  </div>
</div>

  <div class="card-header" id="headingSeven">
  <h5 class="mb-0">
    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      Est-il possible de modifier sa couverture d\'assurance en cours de contrat ?
    </button>
  </h5>
</div>
<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionFAQ">
  <div class="card-body">
    Oui, il est généralement possible de modifier sa couverture d\'assurance en cours de contrat. Si vous souhaitez ajouter ou supprimer des garanties, ou changer le niveau de couverture, vous devez contacter votre assureur pour lui faire part de vos souhaits. Dans certains cas, des frais peuvent s\'appliquer pour les modifications apportées au contrat en cours de validité.
  </div>
</div>

      </div>
    </div>
  </div>
</section>

';
include("vues/layout.php");
?>