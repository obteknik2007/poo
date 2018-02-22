<?php

class Animal {

    private $_nombre_pattes;

    public function setNombrePattes($number) {
        if (!is_numeric($number) || $number < 0 || $number > 12) {
            throw new Exception("Le nombre de pattes d'un animal doit être un nombre compris entre 0 et 12");
        }
        $this->_nombre_pattes = $number;
    }
}

