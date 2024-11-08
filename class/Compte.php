<?php

class Compte{
    private string $_libelle;
    private int $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

    public function __construct($libelle, $solde, $devise, $titulaire) {
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->addCompte($this);
    }

    public function setLibelle($libelle) {
        $this->_libelle = $libelle;
    }
    public function setSolde($solde) {
        $this->_solde = $solde;
    }
    public function setDevise($devise) {
        $this->_devise = $devise;
    }

    public function getLibelle() {
        return $this->_libelle;
    }
    public function getSolde() {
        return $this->_solde;
    }
    public function getDevise() {
        return $this->_devise;
    }

    public function crediterCompte($somme) {
        $this->_solde += $somme;
    }
    public function debiterCompte($somme) {
        $this->_solde -= $somme;
    }
    public function virement($somme, Compte $CompteReceveur) {
        $this->debeiterCompte($somme);
        $CompteReceveur->crediterCompte($somme);
    }

    public function afficherCompte() {
        $result = "Titulaire du Compte : ".$_titulaire->getPrenom().$_titulaire->getNom()."<br>Libellé : ".$this->_libelle."<br>Solde : ".$this->_solde." €<br>Devise : ".$this->_devise."<br>";
    }
    public function __toString() {
        return "Le titulaire de ce compte est ".$titulaire->getPrenom()." ".$titulaire->getNom().".<br>";
    }

}