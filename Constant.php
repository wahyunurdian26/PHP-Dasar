<?php
/*Constant :
- Variable di PHP bersifat Mutable (Bisa di rubah).
- Jika kita ingin membuat variable yng immutable (tidak bisa di ubah), 
maka tidak bisa di lakukan di php
- Sebagai gantinya, terdapat fitur "Constant"

- Constant adlh tempat untuk menyimpan data yg tidak bisa di rubah lagi setelah di deklarasikan

- membuat Constant menggunakan "function define()"

- membuat nama constant menggunakan UPPER_CASE
*/

define ("AUTHOR", "WAHYU NURDIAN ");
define ("APP_VERSION", 20);
echo "Author :";
echo AUTHOR;
echo "\n";
echo "App Version :";
echo APP_VERSION;
echo "\n";
