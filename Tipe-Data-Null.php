<?php
/*
Nilai NULL merepresentasikan sebuah variable tanpa Nilai

NULL (case insensitive)

*/
$name =" Wahyu Nurdian"; //string
$usia = NULL;     //int
$tgl = '26 November 1998';
echo "\n :"; //enter
echo "name :";
echo $name;
echo "\n :";
echo "usia :";
echo $usia;
echo "\n :";
echo "Tanggal Lahir :";
echo $tgl;
echo "\n";

/*
Mengecak apakah data Null
- untuk mengecek apakakh sebuah data bernilai null, 
menggunakan function is_null($variable)
*/
echo "Is Name Null? : ";
echo is_null($usia);
echo "\n";
var_dump(is_null($name));
echo "\n";

/*
Menghapus Variabel
- selain merubah nilai menjadi "NULL", bisa menggunkan function unset($variable)
- hati hati, ketika menghapus variavle kita tdk bisa mengakses variable tsb.
- agar lebih aman, bisa menggunakan function isset($variable) untuk mengecek apakah
sebuah variable ada dan nilainya tidak NULL

*/

$contoh = "Wahyu";
//unset ($contoh); // error
isset ($contoh); //mengecek variable ada dan nilanya tdk null

echo $contoh;