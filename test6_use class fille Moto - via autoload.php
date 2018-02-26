<?php

require_once('autoload.php');

//classe abstract mère
////require_once ('Vehicule.class.php');
//classe fille
////require_once ('Moto.class.php');

//Imaginons que j'obtiens via req PDO le recordset ci-dessous // ou $_POST...
$data = array(
    'couleur' => 'blanc',
    'marque' => 'Suzuki',
    'modele' => 'GP Raider',
    'carburant' => 'essence',
    'prix' => 10125125);

try{

	//création d'un objet de la classe fille
	$moto1 = new Moto($data);

	$moto1->demarrer();
	echo '<br>';

	$moto1->setCylindree('125 cm3');
	echo 'La cylindrée de la moto est '.$moto1->getCylindree();

	echo '<br>';

	$prix_moto1 = $moto1->getPrix();
	//echo "Le prix de la moto 1 est de ".$prix_moto1.$moto1->getCurrency();
	echo "Le prix de la moto 1 est de ".$prix_moto1;

	echo '<br>';
	//via variable statique
	echo Moto::$bruit;
	//via fonction statique
	Moto::entendreBruitMoteur('Vroum !!!!');

} catch (Exception $e) {
    echo $e->getMessage(); // On affiche le message envoyé par "throw new Exception()"

}