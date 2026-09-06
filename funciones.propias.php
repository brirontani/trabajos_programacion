<?php

function saludo(){
    echo "mi nombre es: carlos";
    echo "<br>";
}

saludo();
    echo "<br>";
$saludo=saludo();
echo $saludo;
    echo "<br>";
function saludo2($nombre){
    return "mi nombre es: $nombre";
}
    echo saludo2("lara");

function promedio_alumno($nota1, $nota2, $nota3){
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    return $promedio;
}
$promedio=promedio_alumno(8,9,4);
echo "el promedio es: ".$promedio;
