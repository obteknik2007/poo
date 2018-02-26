<?php

class Moto extends Vehicule {
    //propriétés
	private $_cylindree;
	private $_modele_pneus;

    //pour test methode statique
    public static $bruit = 'Vroum !!!!';

    //Méthodes de la classe fille
    public function getCylindree() {
        return $this->_cylindree;
    }

    public function setCylindree($_cylindree) {
        $this->_cylindree = $_cylindree;
    }

    public function getModelePneus() {
        return $this->_modele_pneus;
    }

    public function setModelePneus($_modele_pneus) {
        $this->_modele_pneus = $_modele_pneus;
    }

    /* Exemple d'une méthode statique
    Le fait de déclarer des propriétés/attributs ou des méthodes comme statiques vous permet d'y accéder sans avoir besoin d'instancier la classe qui les contient.
    Pas besoin de passer par 'new' et par le __construct pour l'utiliser
    On peut utiliser une variable statique si besoin
    */

        public static function entendreBruitMoteur($bruit){
        echo $bruit;
    }

}
