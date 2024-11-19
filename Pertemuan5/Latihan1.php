<?php

// Array 
// Variabel Yang Dapat Memiliki Banyak Nilai
// Element Pada Array Boleh Memiliki Tipe Data Yang Berbeda Contoh : string, integer, boolean
// Pasangan Antara Key Dan Value
// Key-nya Adalah Index, Yg Dimulai Dari 0

// Membuat Array 
// Cara Lama 
$hari = array("Senin", "Selasa", "Rabu");

// Cara Baru
$bulan = ["January", "February", "Maret"];
$arr1 = ["Gas", 123, true];

/* // Menampilkan Array 
// var_dump() / print_r()

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 Element Pada Array 
echo $arr1[0];
echo "<br>";
echo $bulan[1]; */

// Penambahkan Element Baru Pada Array 

var_dump($hari);
echo "<br>";
$hari[] = "Kamis";
$hari[] = "Jum'at";
var_dump($hari);

?>