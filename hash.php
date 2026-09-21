<?php

$clave="holamundo123";


echo sha1($clave)."<br>";

echo hash("md5",$clave)."<br>";
echo md5($clave)."<br>";
foreach(hash_algos() as $algoritmos){
echo $algoritmos."<br>";
};

echo password_hash($clave,PASSWORD_DEFAULT)."<br>";
echo password_hash($clave,PASSWORD_BCRYPT)."<br>";

echo password_hash($clave,PASSWORD_BCRYPT,['cost'=>12]);

$clave_procesada=password_hash($clave,PASSWORD_BCRYPT,['cost'=>12])."<br>";
echo password_verify($clave,$clave_procesada);


if(password_verify($clave,$clave_procesada)){
    echo "las claves coinciden";
    }else {
        echo"las claves no coinciden";
    }