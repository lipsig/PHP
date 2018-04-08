<?php

//metodo e variavel global

$nome = "fe";

function teste() 

{
	global $nome;
	echo $nome;
}

teste();


//o global foi usado para alcançar a variavel fora do metodo
//não é automatico que nem java


?>