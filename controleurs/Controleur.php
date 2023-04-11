<?php

class Controleur {

public function afficherPage() {
    $title = 'Accueil - AssuerPlus';
    $content = 'accueil.php';
    return [
        'title' => $title,
        'content' => $content
    ];
}
/*public function about() {
    $title = 'about_us - AssuerPlus';
    $content = 'about.php';
    return [
        'title' => $title,
        'content' => $content
    ];
}*/


  /*public function getContent() {
        $title = 'Accueil - AssuerPlus';
        $content = 'accueil.php';
        require_once 'vues/layout.php';
    }*/

  /*  public function afficherPageContact() {
        $title = 'Contact - AssuerPlus';
        $content = 'contact.php';
        require_once 'vues/layout.php';
    }

    public function afficherPageDevis() {
        $title = 'Demande de devis - AssuerPlus';
        $content = 'devis.php';
        require_once 'vues/layout.php';
    }

    public function afficherPageConfirmationDevis() {
        $title = 'Confirmation - Demande de devis - AssuerPlus';
        $content = 'confirmation_devis.php';
        require_once 'vues/layout.php';
    }

    public function afficherPageErreur() {
        $title = 'Erreur - AssuerPlus';
        $content = 'erreur.php';
        require_once 'vues/layout.php';
    }
*/
}

?>
