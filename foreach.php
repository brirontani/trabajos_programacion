<?php
$productos=[
    ["codigo"=>1,"A0001","descripcion"=> "mouse"],
    ["codigo"=>2,"A0002","descripcion"=> "teclado"],
    ["codigo"=>3,"A0003","descripcion"=> "monitor"],
    ["codigo"=>4,"A0004","descripcion"=> "impresora"]
];
foreach($productos as $prod){
    echo $prod["codigo"]." - ".$prod["descripcion"]."<br>";
}