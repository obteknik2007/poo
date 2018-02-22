<?php
require_once('functions.php');
include_once('Voiture.class.php');

$voiture1 = new Voiture();

//hydratation

$voiture1->setMarque('Peugeot');
$voiture1->setCouleur('rouge');

try{
	$voiture1->setPrix(20000);
}
catch(Exception $error) {
	echo "Un erreur a eu lieu : <strong>".$error->getMessage().' dans le fichier '.$error->getFile().' à la ligne'.$error->getLine(); // On affiche le message envoyé par "throw new Exception()"
}
pr($voiture1);

?>