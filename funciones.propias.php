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
