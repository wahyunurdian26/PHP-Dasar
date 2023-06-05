<?php
/*
2 jenis tipe data :
1. (int) Bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2)
2. (float) Bilangan pecahan

var_dump = Merupakan function untuk ngedump data, untuk melihat datanya apa tipe datanya apa
*/


echo "Decimal : ";
var_dump(1234);
echo "Octal : ";
var_dump(0123);
echo "Hexadecimal : ";
var_dump(0x1A);
echo "Binary : ";
var_dump(0b11111);
echo " Underscore di number: ";
var_dump(1_234_567);


echo "Floating Point : ";
var_dump(1.233);
echo "Floating Point dengan E notation Plus (1.2 x 1000): ";
var_dump(1.2e3);
echo "Floating Point dengan E notation Plus (7 x 0.001): ";
var_dump(7e-3);
echo "Underscore di sFloating Point: ";
var_dump(1_234.567);


//integer overflow

echo "Integer Overflow 32 Bit: ";
var_dump(2147483648);
echo "Integer Overflow 64 Bit: ";
var_dump(9223372036854775808);



?>