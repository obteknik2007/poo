<?php

abstract class Vehicule {

//PROPRIETES
	private $_couleur;
	private $_marque;
	private $_modele;
	private $_carburant;
	private $_prix;
	CONST CURRENCY = '€';


//CONSTRUCTEUR
 // Par défaut on défini l'argument $data facultatif et vide par défaut, ce qui permet de continuer à instancier l'objet avec new Vehicule() en utilisant les setters manuellement
    public function __construct($data = array())    {

        // Pour chaque élément du tableau $data
        foreach ($data as $key => $value) {
            // On définit une variable pour reconstituer le nom d'un setter avec la clé issue du tableau $data
            $method = 'set'.ucfirst($key); // Ex: setColor

            // Si le setter existe dans la classe
            if (method_exists($this, $method)) {

                // On appelle le setter et on lui passe la valeur issue du tableau $data
                $this->$method($value); // Ex: $this->setColor('Noir');
            }
        }
    }


//METHODES
	public function demarrer(){
		echo "la voiture démarre";
	}

	public function accelerer(){
		echo "la voiture accélère";
	}

	public function ralenir(){
		echo "la voiture ralentit";
	}

//SETTERS
	//possibilité de définir des règles dans les setters pour contraindre les valeurs
	public function setCouleur($_couleur){
		$couleurs_autorisees = array("blanc","noir","gris","rouge");
		if(in_array($_couleur,$couleurs_autorisees)){
			$this->_couleur = $_couleur;
		} else {
			throw new Exception("Vous avez choisi la couleur ".$_couleur."<br>La couleur doit être soit blanc,noir,gris ou rouge");
		}

	}

	public function setMarque($_marque){
		$this->_marque = $_marque;
	}

	public function setModele($_modele){
		$this->_modele = $_modele;
	}

	public function setCarburant($_carburant){
		$this->_carburant = $_carburant;
	}

	public function setPrix($_prix){
		if (!is_numeric($_prix) || $_prix < 0 || $_prix > 15000000) {
			throw new Exception("Le prix doit être compris entre 0 et 15 000 000 €");
		}

		$_prix = number_format($_prix, 2, ',', ' ');
		$this->_prix = $_prix.' '.self::CURRENCY;
	}

	/*public function setCurrency($_currency){
		$this->_currency = $_currency;
	}*/

//GETTERS
	public function getCouleur(){
		return $this->_couleur;
	}

	public function getMarque(){
		return ucfirst($this->_marque);
	}

	public function getModele(){
		return $this->_modele;
	}

	public function getCarburant(){
		return $this->_carburant;
	}

	public function getPrix(){
		return $this->_prix;
	}

	/*public function getCurrency(){
		return $this->_currency;
	}*/

//DISPLAYS
	public function showCouleur(){
		return $this->_couleur;
	}

	public function showMarque(){
		return $this->getMarque();
	}

	public function showModele(){
		return $this->_modele;
	}

	public function showPrix(){
		return $this->getPrix();
	}


} //fin class Vehicule