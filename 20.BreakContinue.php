<?php 

//break
echo "break\n";
for ($i=0; $i < 10; $i++) { 
    if($i==4){
        break;
    }
    echo "i ke -$i".PHP_EOL;
}

//continue
echo "continue\n";
for ($i=0; $i < 10; $i++) { 
    if($i%2==0){
        continue;
    }
    echo "i ke -$i".PHP_EOL;
}
?>