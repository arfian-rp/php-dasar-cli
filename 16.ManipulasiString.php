<?php 

//concat
$full = "arfian"."pradana"; //concat 2 string;

echo "nama saya : ".$full.PHP_EOL;


//konfersi number string
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"700";
var_dump($valueInt);

//jika data tidak falid data akan 0


//mengakses character
$string = "arfian";
echo $string[2].PHP_EOL; //jika melebihi char maka akan error

//Variable Parsing
echo "nama saya $full \n";

//Curly Brace
echo "nama saya {$full}S \n";
?>