<?php
$numero=2;
$x=10
$y=2
$z=21
$resultado = match ($numero) {
    $x => "El numero es igual a x",
    $y => "El numero es igual a y",
    $z => "El numero es igual a z",
    default => "El numero no es igual a x, y o z"
}; echo $resultado;