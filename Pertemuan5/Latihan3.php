<?php

$mahasiswa = [
  ["Fbaz", "0363646373", "Teknik Heking", "fbaz@gmail.com"],
  ["Black", "67474664", "Teknik Ngentud", "Black@gmail.com"],
  ["Fhm Gans", "7454746", "Teknik Jomblo", "Fhm@gmail.com"],
];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    
    <h1>Daftar Mahasiswa Heker</h1>
    
<?php foreach($mahasiswa as $mhs) : ?>
<ul>
  <li>Nama : <?= $mhs[0] ?></li>
  <li>NRP : <?= $mhs[1] ?></li>
  <li>Teknik : <?= $mhs[2] ?></li>
  <li>Email : <?= $mhs[3] ?></li>
</ul>
<?php endforeach; ?>

  </body>
</html>