<?php

// Cek Apakah Tidak Ada Data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["teknik"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["gambar"])) 
{
  // redirect 
  header("Location: latihan1.php");
  exit();
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <style type="text/css" media="all">
      body {
        background-color: #75e3ff;
        color: #006d89;
        margin: 50px;
      }
      li {
        font-size: 15px;
      }
    </style>
    <title>Daftar Detail Mahasiswa</title>
  </head>
  <body>
    
<ul>
  <li><img src="img/<?= $_GET["gambar"]; ?>" width="100" height="100"></li>
  <li><?= $_GET["nama"]; ?></li>
  <li><?= $_GET["nrp"]; ?></li>
  <li><?= $_GET["teknik"]; ?></li>
  <li><?= $_GET["email"]; ?></li>
</ul>

<br>
<a href="latihan1.php">Kembali</a>

  </body>
</html>