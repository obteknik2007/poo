<?php

class Voiture {

//PROPRIETES
	public $couleur = 'bleue';
	public $marque;
	public $modele;
	private $_carburant;
	public $prix;


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
	public function setCouleur($couleur){
		$this->couleur = $couleur;
	}

	public function setMarque($marque){
		$this->marque = $marque;
	}

	public function setModele($modele){
		$this->modele = $modele;
	}

	public function setPrix($prix){
		if (!is_numeric($prix) || $prix < 0 || $prix > 12000) {
			throw new Exception("Le prix doit être compris entre 0 et 12 000 €");
		}
		$this->prix = $prix;
	}

//GETTERS
	public function getCouleur(){
		return $this->couleur;
	}

	public function getMarque(){
		return $this->marque;
	}

	public function getModele(){
		return $this->modele;
	}

	public function getPrix(){
		return $this->prix;
	}

//DISPLAYS
	public function showCouleur(){
		echo $this->couleur;
	}

	public function showMarque(){
		echo $this->marque;
	}

	public function showModele(){
		echo $this->modele;
	}

	public function showPrix(){
		echo $this->prix;
	}


} //fin class Voiture
