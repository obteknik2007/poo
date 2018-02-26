<?php

require_once ('Vehicule.class.php');

//Imaginons que j'obtiens via req PDO le recordset ci-dessous // ou $_POST...
$data = array(
    'couleur' => 'violet',
    'marque' => 'Mercedes',
    'modele' => '225 SLK',
    'carburant' => 'diesel',
    'prix' => 15750);


try{
	//Création d'un nouvel objet à partir de la classe Véhicule
	//J'instancie la classe
	$voiture1 = new Vehicule($data);
	//echo 'La couleur est '.$voiture1->getCouleur();

	echo '<pre>';
	print_r($data);
	echo '</pre>';

	echo '<pre>';
	print_r($voiture1);
	echo '</pre>';

} catch (Exception $e) {
    echo $e->getMessage(); // On affiche le message envoyé par "throw new Exception()"

}


