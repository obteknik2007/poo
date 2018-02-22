<?php

Class Livre {

//propriétés
	public $author;
	public $title;
	public $content;
	public $prix;

	public function searchWord($word){
		$word_position = strpos($this->content,$word);
		if($word_position !== false){
			return "Le livre contient le mot ".$word." à la position ".$word_position.'<br>';
		} else {
			return "Le livre ne contient pas le mot <strong>".$word.'</strong><br>';
		}
	}

	public function setContent($content){
		if(strlen($this->content) <10) {
			 throw new Exception("Le contenu doit comprendre au-moins 10 caractères");
		}
		$this->content = $content;
	}

	public function setPrix($prix){
		if($this->content <20) {
			 Throw new Exception("Le prix doit être au-moins de 20 €");
		}
		$this->content = $content;
	}

}