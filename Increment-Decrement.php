<?php
/*
- PHP mendukung gaya bahasa pemrograman C untuk menaikan dan menurunkan data number sejumlah 1 angka
- ini bisa mempersingkat kita ketika ingin menaikkan data
 
Contoh      Name                Efek
$a++        Post increment      Kembalikan $a lalu naikkan 1 angka
++$a        Pre increment       Naikkan $a satu angka, lalu kembalikan $a
$a--        Post decrement      Kembalikan $a lalu turunkan 1 angka
--$a        Pre decrement       Turunkan $a satu angka, lalu kembalikan $a




*/

$a = 10;
$b = $a++; // $a++ = $a di masukan ke $b baru $a nya di naikan 1 ($b = $a; $a = $a + 1);
          // ++$a = $a di naikan 1 dulu baru di berikan ke $b ( $a = $a + 1; $b= $a;
var_dump($a);
 var_dump($b);