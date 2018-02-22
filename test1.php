<?php

require_once("functions.php");
require_once("Voiture.class.php");
require_once("Livre.class.php");
require_once("Animal.class.php");

$voiture1 = new Voiture();

$couleurVoiture1 = $voiture1->setCouleur('rouge');

//couleur par défaut fixée à bleu
echo "La voiture1 est ".$voiture1->getCouleur().'<br>';

// Affecte la valeur 'Renault' à la proprieté _marque
$voiture1->setMarque('Renault');

echo "La voiture1 est de marque ".$voiture1->getMarque().'<br>';

//Je change la couleur
$voiture1->setCouleur('noire');

echo "La couleur est maintenant ".$voiture1->getCouleur().'<br>';

//la voiture démarre
$voiture1->demarrer();

echo "-------------------";

try{
	$voiture2 = new Voiture();
	$voiture2->setPrix(25550);

	echo 'Le prix de la voiture 2 est de '.$voiture2->getPrix();

} catch (Exception $error) {
    /*echo "Un erreur a eu lieu : <strong>".$error->getMessage().' dans le fichier '.$error->getFile().' à la ligne'.$error->getLine(); // On affiche le message envoyé par "throw new Exception()"*/
    echo $error->getMessage();
}



/*try{
	$voiture2 = new Voiture();
	//Hydratation car objet 'sec' (aucune propriété)
	$livre->author="Bernard Minier";
	$livre->title="Glacial";
	$livre->setContent="Le ";

	//recherche mot
	echo $livre->searchWord('imprimerie');
	echo $livre->searchWord('tatayoyo');

} catch (Exception $error) {
    echo "Un erreur a eu lieu : <strong>".$error->getMessage().' dans le fichier '.$error->getFile().' à la ligne'.$error->getLine(); // On affiche le message envoyé par "throw new Exception()"
}

try {

    $animal = new Animal();
    $animal->setNombrePattes(4); // Pas d'erreur, affecte 4 à l'attribut _nombre_pattes
    $animal->setNombrePattes(20); // Exception, on quitte le bloc try et on attérit dans le bloc catch avec l'exception correspondante

} catch (Exception $e) {
    echo $e->getMessage(); // On affiche le message envoyé par "throw new Exception()"
}

try{
	$livre2 = new Livre();
	$livre-2>setPrix(15);
} catch (Exception $e){
	echo $e->getMessage();
}*/





?>

