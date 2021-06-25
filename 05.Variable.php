<?php 

$variable; 
$variable = 11;
$variable = 50;
var_dump($variable);

$variable = 'ini string';
var_dump($variable);

echo $variable;


//variable variables
$name = "arfian"; //$name berisi "arfian"
$$name = "keren"; //membuat variable dari isi var name
// $arfian = "keren" seperti ini


var_dump($arfian); //$arfian dari $$name

?>