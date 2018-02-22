<?php
Class Voiture{
	//propriétés
	public $couleur;
	public $prix;
	private $_tva = 20;

	//méthodes
	//SETTERS
	public function setCouleur($couleur){
		$this->couleur = $couleur;
	}

	public function setPrix($prix){
		if($prix <10000){
			throw new Exception("Le prix ne peut pas être fixé en dessous de 10000 €");
		}
		$this->prix = $prix + (($prix * $_tva)/100);
	}

	//GETTERS
	public function getCouleur(){
		return 'La couleur de la voiture est '.$this->couleur.'<br>';
	}

	public function getPrix(){
		return 'Le prix de la voiture est de '.$this->prix.' euros<br>';
	}

} // fin de classe Voiture

//instanciation
$voiture_A = new Voiture();

//hydratation couleur
$voiture_A->setCouleur('bleue');

//récupérationde la couleur
echo $voiture_A->getCouleur();

//hydratation couleur
$voiture_A->setPrix(15000);

//récupérationde la couleur
echo $voiture_A->getCouleur();

//Modification du prix
try{
	$voiture_A->setPrix(3000);
} catch (Exception $e) {
    echo $e->getMessage(); // On affiche le message envoyé par "throw new Exception()"

}

//essai modif variable privée tva à 21
echo $voiture_A->$_tva = 21;