<?php
$fecha_1="2024-06-01";
$fecha_2="2024/06/15";
$numeros= "Uno Dos Tres Cuatro Cinco Seis Siete";

$array_fecha=explode("-",$fecha_1);
echo $array_fecha[0]."<br>";
echo $array_fecha[2]."<br>";

$array_fecha=explode("/",$fecha_2);
echo $array_fecha[2]."<br>";

$array_numeros=explode(" ",$numeros,2);
echo $array_numeros[1]."<br>";

$array_numeros=explode(" ",$numeros,-1);
echo $array_numeros[5]."<br>";