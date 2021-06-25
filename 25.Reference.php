<?php 
//Reference
$n1 = "arfian";

$n2 = &$n1;

$n2 = "rafi";

echo $n1.PHP_EOL;

//Pass by reference
function incre(int &$val)
{
    $val++;
}

$count = 1;
incre($count);
echo $count;
?>