<?php 

function teste ($a) {
	if($a == 1)
		return "SIM";
	else
		return "NAO";

	return $array = array('Nome' => 'Joao', 'Idade' => 18 );
}

$array = teste(2);
var_dump($array);