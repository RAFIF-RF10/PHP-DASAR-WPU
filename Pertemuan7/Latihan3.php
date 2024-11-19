<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Belajar Variabel Super Globals POST</title>
    <style type="text/css" media="all">
            body {
        background-color: #75e3ff;
        color: #006d89;
      }
    </style>
  </head>
  <body>
    
<?php if(isset($_POST["submit"])) : ?>
<h1>Halo Selamat Datang, <?= $_POST["nama"]; ?></h1>
<?php endif; ?>
    
    <form action="" method="post" accept-charset="utf-8">
      Masukkan Nama : 
      <input type="text" name="nama" required />
      <br>
      <button type="submit" name="submit">Kirim</button>
    </form>
    
  </body>
</html>