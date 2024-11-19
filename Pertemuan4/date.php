<?php

/* Date Untuk Menampilkan Tanggal Dengan Format Tertentu
echo date("l, d - M - Y"), "<br><br><br>"; 
*/

// Time
// UNIX Timestamp / EPOCH time 
// detik yg sudah berlalu sejak 1 January 1970
// echo time();
// echo date("l, d - M - Y", time() - 60*60*24*100);

// MKTIME
// Membuat Detik Sendiri
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l, d - M - Y", mktime(0,0,0,2,22,2008));

// strtotime
echo date("l, d - M - Y", strtotime("08 Jan 2008"));

?>