<?php

/*
Operator Penugasan
- Mengunakan karakter =
- mengubah value sebuh variable
- operasi aritmatika

Penugasan               Keterangan
$a +=$b                 $a = $a + $b
$a -=$b                 $a = $a - $b
$a *=$b                 $a = $a * $b
$a /=$b                 $a = $a / $b
$a %=$b                 $a = $a % $b
*/

$a = 10;
$b = 10;
var_dump($a +=$b);


$total = 0;

$tomat = 10;
$jeruk = 20;
$apel = 10;

$total += $jeruk;
$total += $apel;
var_dump($total);