<?php


/*

Operator                        Keterangan
+$variable                      Positip
-$variable                      Negatif
$variable + $variable           Penambahan
$variable - $variable           Pengurangan
$variable * $variable           Perkalian
$variable / $variable           Pembagian
$variable % $variable           Sisa bagi
$variable ** $variable          Pangkat
*/

$a = 10;
$b = 5;
$result = $a + $b ;
var_dump($result);
$resultNegative = -$result;
var_dump($resultNegative);
$resultPositive = +$result;
var_dump($resultPositive);
$resultModulo = 100 % 3 ; //Sisa bagi
var_dump($resultModulo);