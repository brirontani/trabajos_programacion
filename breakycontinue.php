<?php
$c=1;
while($c<=12){
    echo $c."<br>";
    if($c==5){
        break;
    }
    $c++;
}

$pc=["SO","RAM","Disco Duro","Procesador"];
foreach($pc as $componente){
     echo $componente."<br>";
    if($componente=="Disco Duro"){
        continue;
    }
    echo $componente."<br>";
}

$i=1;
while($i<=10){
    if($i==3){
        $i++;
        continue;
    }
    echo $i."<br>";
    $i++;
}