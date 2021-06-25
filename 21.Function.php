<?php 
//FUNCTION
function salam1(){ //membuat funcion
    echo"hai".PHP_EOL;
}
salam1(); //memanggil function


//FUNCTION ARGUMEN
function salam2($nama)
{
    echo "hai $nama".PHP_EOL;
}
salam2("arfian");


//RETURN VALUE FUNCTION
function salam3($nama)
{
    return "hai $nama".PHP_EOL;//hanya mengembalikan nilai
}
$salam=salam3("arfian");//$salam menangkap nilai return
echo $salam;//menampilkan isi return

unset($salam);

//VARIABLE FUNCTION
function foo()
{
    echo"foo".PHP_EOL;
}
$callfunc = "foo";
$callfunc();

$callfunc = "salam1";
$callfunc();


//ANONYMOUSE FUNCTION / DISEBUT CLOSURE DI PHP
$anonymous = function (string $nama){
    echo "hai $nama".PHP_EOL;
}; //akhiri ;
$anonymous("arfian");

//ARROW FUNCTION
$name = "arfian";
$helloArfian = fn()=>"Hello $name".PHP_EOL;//return value

echo $helloArfian();

//CALLBACK FUNCTION
function callback($nama, callable $f)
{
    call_user_func($f, $nama);
}

function contoh($nama)
{
    echo"hai $nama".PHP_EOL;
}

//dipanggil
callback("arfian", "contoh");
echo callback("arfian", fn($name)=>"hai nama ku $name".PHP_EOL);
callback("arfian", function($name){
    echo"hai $name".PHP_EOL;
});

//REKURSIF FUNCTION
function cetak($kali)
{
    if($kali>=0){
        cetak($kali-1);
    }
    echo "cetak yg ke $kali".PHP_EOL;
}
cetak(5);
?>