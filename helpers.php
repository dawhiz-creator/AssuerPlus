<?php

/**
 * Fonction permettant de charger une vue
 *
 * @param string $vue
 * @param array $data
 * @return void
 */
function afficherVue(string $vue, array $data = [])
{
    extract($data);

    require_once 'vues/' . $vue . '.php';
}

/**
 * Fonction permettant de rediriger l'utilisateur vers une nouvelle URL
 *
 * @param string $url
 * @return void
 */
function redirection(string $url)
{
    header("Location: $url");
    exit;
}

/**
 * Fonction permettant de se connecter à la base de données
 *
 * @return PDO
 */
function getPDO(): PDO
{
    require_once 'config/config.php';

    $dsn = "mysql:host=$db_host;dbname=$db_name;charset=utf8";

    try {
        $pdo = new PDO($dsn, $db_user, $db_password);
        return $pdo;
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
}


function getControleur($nomControleur) {
  $fichier = 'controleurs/' . $nomControleur . '.php';
  if (file_exists($fichier)) {
    require_once $fichier;
    return new $nomControleur();
  } else {
    throw new Exception('Erreur 404: le fichier de contrôleur ' . $nomControleur . ' est introuvable.');
  }
}
//prend en paramètre le nom de la méthode du contrôleur à appeler pour récupérer le titre et le contenu de la page
//appelez la méthode correspondante du contrôleur pour récupérer le titre et le contenu de la page.
//afficherVue en passant en paramètre les variables title et content qui ont été récupérées dans la méthode du contrôleur
function afficherPage($controleur, $methode) {
        $resultat = $controleur->$methode();
        if (is_array($resultat) && isset($resultat['title']) && isset($resultat['content'])) {
            $title = $resultat['title'];
            $content = $resultat['content'];
            afficherVue('layout', compact('title', 'content'));
        } else {
            throw new Exception("Le résultat de la méthode $methode n'est pas un tableau avec les clés 'title' et 'content'.");
        }

}