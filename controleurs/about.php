<?php
require_once 'Controleur.php';

class about extends Controleur
{
    public function index()
    {
        // Code pour gérer la page d'about
        $data = []; // données à passer à la vue
        afficherVue('about', $data); // affichage de la vue about
    }
}


$title = "about_us";
$content = '    
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h1 class="title text-center my-4"><span property="schema:name" class="field field--name-title field--type-string field--label-hidden">Qui sommes-nous ?</span></h1>
      <div>
        <p class="lead">Fondé il y a 20 ans, nous sommes un réseau français d\'assurance. Notre rôle est de vous protéger, ainsi que vos proches et vos biens et ce, quelle que soit votre situation. C’est pourquoi nous vous proposons tout un panel de produits et de services d\'assurance auto qui s’adaptent à vos besoins et vos attentes.</p>
      </div>
      <div class="details-texte lead">
        <h3>L\'assurance pour tous&nbsp;!</h3>
        <p>Parce que chacun a des attentes et des besoins spécifiques, chez AssurerPlus, nous vous trouvons toujours une solution. Quel que soit votre profil, <strong>nos offres sont adaptées aux bons conducteurs, comme aux conducteurs malussés et aux personnes résiliées par leur assurance</strong>.</p>
        <p>N’hésitez pas à nous contacter : votre conseiller vous proposera un contrat adapté.</p>
      </div>
      <div class="details-texte lead">
        <h3>Nos agences sont implantées partout en France.</h3>
        <p class="text-line">"Chez nous, chaque client mérite d’être conseillé personnellement. Nous vous devons ce service de proximité"</p>
        <p><strong>Depuis 20 ans, nous mettons tout en œuvre</strong> pour le développer. Cela se matérialise également par nos larges plages horaires d’ouverture et la grande disponibilité de nos conseillers par téléphone.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body text-center">
          <h3>Contact &amp; Aide</h3>
          <ul class="list-group list-group-flush">
          <p><strong>AssurerPlus</strong></p>
          <p>123 rue des assurances</p>
          <p>75001 Paris</p>
          <p>Tél. : 01 23 45 67 89</p>
          <p>Horaires d\'ouverture : du lundi au vendredi de 9h à 18h</p>
        </div>
      </div>
    </div>
  </div>
</div>

    ';
include("vues/layout.php");
?>

