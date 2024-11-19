<?php

// Pengulangan Pada Array 
// for / foreach 
$angka = [3,5,8,0,4,7,2,10,1,6,9];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title>Belajar Array</title>
    <style type="text/css" media="all">
    body {
      background-color: #007895;
    }
      .kotak {
        width: 50px;
        height: 50px;
        background-color: lightgreen;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
      }
    .clear {
      clear: both;
    }
    </style>
  </head>
  <body>

<?php
// Menggunakan for
for($i = 0; $i < count($angka); $i++) :
?>
<div class="kotak"><?= $angka[$i]; ?></div>
<?php endfor; ?>

<div class="clear">
  
</div>

<?php 
// Menggunakan foreach
foreach($angka as $angk): ?>
?>
<div class="kotak"><?= $angk ?></div>
<?php endforeach; ?>
  </body>
</html>