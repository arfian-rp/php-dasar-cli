<?php 

//if elseif else
$var = 4;
if($var === 3){
    echo "tiga";
}else if($var === 4){
    echo "empat";
}else{
    echo "lain lain";
}

unset($var);
echo PHP_EOL;

//switch-case
$var = "48";
switch ($var) {
    case '4':
        echo "empat";
        break;
    case '5':
        echo "lima";
        break;
    case '6':
        echo "enam";
        break;
    
    default:
        echo "lain lain";
        break;
}

//ternary

// (kondisi ? true : false)

$r = (12<15?"lebih kecil":"lebih besar");
echo PHP_EOL.$r;
?>