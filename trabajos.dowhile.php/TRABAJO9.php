<?php
$c=1;
$precio=3500;
do{
    echo " pedido ".$c.": $".$c*$precio."<br>";
    $c++; 
}while($c<=10); 
echo "promocion finalizada";