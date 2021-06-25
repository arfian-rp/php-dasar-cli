<?php 

//kumpulan data (boleh berbeda tipedata)

$array = [
    'satu',
    2,
    'tiga',
    true
];

$contohlain = array(1,2,"tiga"); //mengaksesnya sama
$contohlainarraykosong = []; //atau array();

echo $array[0]."\n";
echo $array[2]."\n";

$array[0]="index 1 diubah";
echo $array[0]."\n";
var_dump($contohlain);

//operasi di array

//$arr[index]|mengakses arr di index
//$arr[index]=val|mengubah isi arr pada index dengan value
//$arr[]=val|menambah data val di paling belakang
//unset($arr[index])|mengahpus data di arr, index hilang
//count($arr)|mengambil total data array


//ARRAY MAP / ASOCIATIVE
$arrmap = [
    "k1"=>'arfian',
    'k2'=>"pradana"
]; //key harus Unique!

var_dump($arrmap);
echo $arrmap['k1']."\n";


//ARRAY DIDALAM ARRAY (nested array)

$arr2d = [
    "arr"=>[
        "arr1"=>[
            "k1"=>"arfian"
        ],
        "arr2"=>[
            "k2"=>"pradana"
        ]
    ]
        ];

var_dump($arr2d);
echo $arr2d['arr']["arr1"]['k1']; //mengambil k1
?>