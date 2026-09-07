<?php

$cadena_texto="hola Mundo";
echo strtolower($cadena_texto);
echo "<br>";
$cadena_texto=strtolower($cadena_texto);
echo $cadena_texto;
echo "<br>";
$cadena_texto=strtoupper($cadena_texto);
echo $cadena_texto;
echo "<br>";
$cadena_texto2="hola mundo";
$cadena_texto2=ucfirst($cadena_texto2);
echo $cadena_texto2;
echo "<br>";
$cadena_texto2=ucwords($cadena_texto2);
echo $cadena_texto2;
echo "<br>";