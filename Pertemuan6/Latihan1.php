<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Belajar Associative Array</title>
    <style type="text/css" media="all">
      body {
        background-color: #004a5d;
      }
      .kotak {
        width: 30px;
        height: 30px;
        background-color: lightgreen;
        text-align: center;
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: 1s;
      }
      .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
      }
      .clear {
        clear: both;
      }
    </style>
  </head>
  <body>
    
<?php 

$angka = [
  [1,4,5],
  [7,8,9],
  [3,2,6]
  ];

foreach($angka as $angk) :

foreach($angk as $a) :
?>
    <div class="kotak"><?= $a ?></div>
  <?php endforeach; ?> 

<div class="clear"></div>

<?php endforeach; ?>
  </body>
</html>