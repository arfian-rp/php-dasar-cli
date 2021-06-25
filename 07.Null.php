<?php 

$nama = "arfian";
var_dump($nama);
var_dump(is_null($nama));

$nama = null;
var_dump($nama);
var_dump(is_null($nama));

unset($nama);//menghapus variable
// echo $nama; error

var_dump(isset($nama));//mengecek apakah variable ada / tidak null
?>