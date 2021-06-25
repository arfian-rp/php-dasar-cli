<?php 

echo 'arfian';
echo "\nrafi"; //kelebihan doble quote bisa pakai escape char
echo "\narfian\t".'rafi'."\tpradana\n\n";

//heredoc
echo <<<ARFIAN
ini adalah 
multiline string
yang sangat panjang
menggunakan Heredoc
Heredoc bisa parsing variable
dan escape character 
(mirip "")\n\n
ARFIAN;

//nowdoc
echo <<<'ARFIAN'
ini adalah 
multiline string
yang sangat panjang
menggunakan Nowdoc
Nowdoc tidak bisa parsing variable
dan escape character 
(mirip '')\n
ARFIAN
?>