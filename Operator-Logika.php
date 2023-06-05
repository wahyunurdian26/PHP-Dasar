<?php

/*
Operator       Nama                 Keterangan
$a && $b        And                 True jika $a dan $b keduanya true
$a and $b       And                 True jika $a dan $b keduanya true       
$a || $b        Or                  True jika $a $b salah satu atau keduanya true
$a or $b        Or                  True jika $a dan $b salah satu atau keduanya true
!$a             Not                 True jika $a bernilai false     
$a xor $b       Xor                 True jika $a dan $b salah satu true, tapi tidak keduanya

*/

var_dump(true && true); //true
var_dump(true && false); // false
var_dump(true || true);//true
var_dump(true xor true);//false
var_dump(!true);//false