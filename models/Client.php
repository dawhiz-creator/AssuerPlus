<?php
class Client {
  private $id;
  private $nom;
  private $prenom;
  private $email;
  private $telephone;

  public function __construct($id, $nom, $prenom, $email, $telephone) {
    $this->id = $id;
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    $this->telephone = $telephone;
  }

  // Les méthodes pour accéder et modifier les propriétés privées

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getNom() {
    return $this->nom;
  }

  public function setNom($nom) {
    $this->nom = $nom;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  public function setPrenom($prenom) {
    $this->prenom = $prenom;
  }

  public function getEmail() {
    return $this->email;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function getTelephone() {
    return $this->telephone;
  }

  public function setTelephone($telephone) {
    $this->telephone = $telephone;
  }

  // Les méthodes CRUD

  public static function getAll() {
    // Code pour récupérer tous les clients de la base de données
  }

  public static function getById($id) {
    // Code pour récupérer un client par son ID
  }

  public function save() {
    // Code pour enregistrer les modifications apportées à un client dans la base de données
  }

  public function delete() {
    // Code pour supprimer un client de la base de données
  }
}