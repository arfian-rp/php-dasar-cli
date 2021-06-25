<?php 

echo"for loop".PHP_EOL;

//for loop
for ($i=0; $i < 5; $i++) { 
    echo "i ke-$i".PHP_EOL;
}

echo"while loop".PHP_EOL;

//while loop
$a = 0;
while ($a <= 5) {
    echo "a ke-$a".PHP_EOL;
    $a++;
}

unset($a);

echo"do while loop".PHP_EOL;

//do while loop
$a = 0;
do {
    echo "a ke-$a".PHP_EOL;
    $a++;
} while ($a <= 5);

echo"foreach".PHP_EOL;
//foreach (untuk data array)
$arr1 = [1,2,3,4,5];
foreach ($arr1 as $k) {
    echo$k.PHP_EOL;
}

echo PHP_EOL;
$arr2 = [
    'k1'=>'arfian',
    'k2'=>'rafi',
    'k3'=>'pradana'
];
foreach ($arr2 as $key => $value) {
    echo "$key = $value".PHP_EOL;
}
?>