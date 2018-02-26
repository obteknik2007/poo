<?php


class Animal {

    private $_race;
    private $_color;
    private $_age;

    // Par défaut on défini l'argument $data facultatif et vide par défaut, ce qui permet de continuer à instancier l'objet avec new Animal() en utilisant les setters manuellement
    public function __construct($data = array())    {

        // Pour chaque élément du tableau $data
        foreach ($data as $key => $value) {
            // On défini une variable pour reconstituer le nom d'un setter avec la clé issue du tableau $data
            $method = 'set'.ucfirst($key); // Ex: setColor

            // Si le setter existe dans la classe
            if (method_exists($this, $method)) {

                // On appelle le setter et on lui passe la valeur issue du tableau $data
                $this->$method($value); // Ex: $this->setColor('Noir');
            }
        }
    }

    public function setRace($race) {
        $this->_race = $race;
    }
    public function setColor($color) {
        $this->_color = $color;
    }
    public function setAge($age) {
        $this->_age = $age;
    }

    public function getRace() {
        return $this->_race;
    }
    public function getColor() {
        return $this->_color;
    }
    public function getAge() {
        return $this->_age;
    }
}

$data = array(
    'race' => 'Caniche',
    'color' => 'Noir',
    'age' => 10,
);

$animal = new Animal($data); // On instancie l'objet en lui passant le tableau $data en argument

echo '<pre>';
print_r($animal);
echo '</pre>';

echo $animal->getRace().'<br>'; // Affiche Caniche<br>
echo $animal->getColor().'<br>'; // Affiche Noir<br>
echo $animal->getAge().'<br>'; // Affiche 10<br>