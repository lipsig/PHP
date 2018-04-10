<?php

$frase = "Amanha ela ira sair, a Dona chiquinha foi passear";


$q = strpos($frase, "Dona");


var_dump($q); 

echo "<br>";


//função de posição na string, se ela existe "strpos" e seu indice


$texto = substr($frase, 0, $q);

var_dump($texto);

echo "<br>";

//para pegar tudo que tem antes de tal lugar na string é usado "substr", da posição 0 até tal posição

echo "<br>";

$texto2 = substr($frase, $q+4, strlen($frase));

var_dump($texto2);


//strlen é o lenght;

?>