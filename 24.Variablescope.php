<?php 

//global->variable diluar function, hanya bisa diakses diluar funct

$name = "arfian"; //var global
function Function1()
{
    // echo $name;//error

    //solusinya denga global keyword
    // global $nama;
    // echo $nama; //bisa
}
//local->variable didalam function, hanya bisa diakses didalam funct
$name = "arfian"; //var global
function Function2()
{
    $name = "rafi"; //var local
    echo $name;//yg diakese var local
}
//static->hanya bisa di set di local var, siklus hidupnya terus menerus
function incr()
{
    static $count = 1; //agar static
    echo "count ke $count".PHP_EOL;
    $count++;
}
incr();
incr();
incr();
?>