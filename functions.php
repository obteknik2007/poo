<?php

function vdm($variable){
	echo '<pre>';
	var_dump($variable);
	echo '</pre>';
}

function pr($variable){
	echo '<pre>';
	print_r($variable);
	echo '</pre>';
}

function ve($variable){
	echo '<pre>';
	var_export($variable);
	echo '</pre>';
}

?>