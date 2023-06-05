<?php
/*
- digunakan untuk membandingkan dua buah value
- hasil dari operator perbandingan adalah boolean, true atau false

Operator Perbandingan

Operator       Nama                 Keterangan
$a == $b        Sama dengan         True jika $a sama dengan $b setelah dilakukan konversi tipe data
$a === $b       Identik             True jika $a sama dengan $b dan memiliki tipe data yang sama       
$a != $b        Tidak sama dengan   True jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
$a <> $b        Tidak sama dengan   True jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
$a !== $b       Tidak identik       True jika $a tidak sama dengan $b atau tidak sama tipe data      
$a < $b         Kurang dari         true jika $a kurang dari $b
$a <= $b        Kurang dari atau    True jika $a kurang dari atau sama dengan $b
                sama dengan         
$a > $b         Lebih dari          True jika $a lebih dari $b
$a >= $b        Lebih dari sama     True jika $a lebih dari atau sama dengan $b
                dengan
*/

var_dump("10" == 10);
var_dump("10" === 10);
var_dump("10" > 10);
var_dump("10" >= 10);
var_dump("100" <= 9);