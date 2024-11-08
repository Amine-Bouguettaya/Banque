<?php

class Titulaire{
    private string $_nom;
    private string $_prenom;
    private string $_ville;
    private array $_comptes;
    private \DateTime $_dateNaissance;

    public function __construct($nom, $prenom, $ville,$dateNaissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_ville = $ville;
        $this->_comptes = [];
        $this->_dateNaissance = $dateNaissance;
    }
    
    public function setNom($nom) {
        $this->_nom = $nom;
    }
    public function setPrenom($prenom) {
        $this->_prenom = $prenom;
    }
    public function setDate($date) {
        $this->_date = $date;
    }
    public function setVille($ville) {
        $this->_ville = $ville;
    }

    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function getDate() {
        return $this->_date;
    }
    public function getVille() {
        return $this->_ville;
    }

    public function afficherAge() {
        $date_obj = new DateTime(date('Y-m-d'));
        $difference = $date_obj->diff($this->_dateNaissance->_date);
        $result = $difference->y;
        return $result;
    }

    public function addCompte(Compte $compte) {
        $this->_comptes[] = $compte;
    }

    public function afficherTitulaire(){
        $result = "Titulaire :".$this->_prenom." ".$this->_nom."<br> Age : ".$this->afficherAge()." ans.<br>Ville : ".$this->_ville."<br><br>Liste des Comptes :<br><br>";
        foreach ($this->_comptes as $compte) {
            $result .= $compte->getLibelle()."<br>Solde du compte : ".$compte->getSolde()." ".$compte->getDevise()."<br><br>";
        }
        return $result;
    }
    public function __toString() {
        return "Le nom du titulaire est ".$this->_prenom.$this->_nom.".<br>";
    }
}