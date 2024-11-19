<?php

/*
 $mahasiswa = [
  ["Fbaz", "0363646373", "Teknik Heking", "fbaz@gmail.com"],
  ["Black", "67474664", "Teknik Ngentud", "Black@gmail.com"],
  ["Fhm Gans", "7454746", "Teknik Jomblo", "Fhm@gmail.com"],
]; */

// Array Associative 
// definisinya sama seperti array numerik, kecuali
// Key-nya Adalah String Yang Kita Buat Sendiri
$mahasiswa = [
  [
  "nama" => "Fbaz",
  "nrp" => "0363646373",
  "Teknik" => "Teknik Heking",
  "Email" => "fbaz@gmail.com",
  "gambar" => "aku.jpg"
  ],
    [
  "nama" => "Black",
  "nrp" => "67474664",
  "Teknik" => "Teknik Ngentud",
  "Email" => "Black@gmail.com",
  "gambar" => "aku.jpg"
  ],
    [
  "nama" => "Fhm Gans",
  "nrp" => "7454746",
  "Teknik" => "Teknik Jomblo",
  "Email" => "Fhm@gmail.com",
  "gambar" => "aku.jpg"
  ]
];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <style type="text/css" media="all">
      body {
        background-color: #004a5d;
        color: white;
        margin: 50px;
      }
      li {
        font-size: 15px;
      }
    </style>
    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
    <h1>Daftar Mahasiswa Heker</h1>
    
<?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
<li>
  <img src="img/<?= $mhs["gambar"]; ?>" width="100px" height="100px">
</li>
<li>NAMA : <?= $mhs["nama"] ?></li>
<li>NRP : <?= $mhs["nrp"] ?></li>
<li>TEKNIK : <?= $mhs["Teknik"] ?></li>
<li>EMAIL : <?= $mhs["Email"] ?></li>
    </ul>
<?php endforeach; ?>
    
  </body>
</html>