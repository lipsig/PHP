<?php
//JSON java script object notation
//tomou o universo da programação
//geram arquivos no formato JSON
//facilitam a integração de sistemas
//ex:php e java se conectam, java se conecta com o php atraves do json,
//antes era usado o xml

//ele economiza caracteres, notação de javascript
//ele é utilizado em qualquer linguagem
// principalmente em arrays.

//pegar um array e transformar em json
//transformar json em array

$pessoa = array();
 
 array_push($pessoa, array(
 "nome"=>"joão",
 "idade"=>20
 
 ));
 
  
 array_push($pessoa, array(
 "nome"=>"glaucio",
 "idade"=>25));
 
 
 echo json_encode($pessoa);
//php para json



$json = '[{"nome":"jo\u00e3o","idade":20},{"nome":"glaucio","idade":25}]';

$data = json_decode($json, true);

var_dump($data);

?>