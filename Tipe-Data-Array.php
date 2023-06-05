<?php
/*
Tipe Data Array
- Array adlh tipe data yang berisikan kosong atau banyak data
- Array di PHP bisa berisikan data dengan jenis berbeda-beda
- Array di PHP memiliki panjang dinamis, bisa manmbah data sebanyak-banyaknya
 */
 $values = array (1 ,2 ,3, 4, 7.5, 7.0);
 var_dump($values);
 $name = ["Wahyu", "Nurdian"];
 var_dump($name);

 /*
 Operasi Array
Operasi                         Keterangan
$array[index]                   Mengakses data di array pada nomor index
$array[index] = value           Mengubah data di array pada nomor index dengan value baru
$array[] = value                Menambah data di array pada posisi paling belakang
unset($array[index])            Menghapus data di array, index otomatis hilang dari array
count($array)                   Mengambil total data di array
 */
$name = ["Wahyu", "Nurdian"];
var_dump($name [0]);
$name [0] = "Wahyu";
var_dump($name);
unset($name [1]);
var_dump($name);
$name [] = "Wahyu";
var_dump(count($name));


/*Array Sebagai MAP
- Map : asosiasi antara key dan value
- di PHP, MAP bisa di buat menggunakan Array
- Secara default Array akan menggunakan index(number) sebagai key dan value nya kita bisa bebas memasukan data ke dalam Array
- Mengubah index nya tidak harus menggunakan number, bisa gunakan tipe data lain, seperti string misalnya
*/

$wahyu = array(
    "id" => "wahyu",
    "name" => "age",
    "usia" => 24,
    "alamat" => array ( //Array di dalam array
        "Ds" => "Badegan",
        "RT" => 1,
        "RW" => 3
    )
);
$budi =[
    "id" => "dina",
    "name" => "age",
    "usia" => 23,
    "address" => [ //Array di dalam array
        "Ds" => "Badegan",
        "RT" => 1,
        "RW" => 3 
    ]
];

var_dump($budi);
var_dump($wahyu['id']);
var_dump($budi["address"]["Ds"]); //Menampilkan array di dalam array