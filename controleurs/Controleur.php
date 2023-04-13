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

}

?>