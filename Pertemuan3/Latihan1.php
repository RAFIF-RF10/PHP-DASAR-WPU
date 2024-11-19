<?php

// Pengulangan
// for
// while
// do.. while
// foreach : Pengulangan Untuk Array

/* For 
for( $i = 0; $i < 5; $i++ )
{
  echo "Hallo World! <br>";
} */

/* While 
$i = 0;
while( $i < 5 ) 
{
  echo "Hallo World! <br>";
$i++;
} */

/* Do... While
$i = 10;
do 
{
  echo "Hallo World! <br>";
$i++;
} while( $i < 5 );
*/

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Pengulangan PHP</title>
    <style type="text/css" media="all">
      .warna {
        background-color: lightblue;
      }
      #warna {
        background-color: lightgreen;
      }
    </style>
  </head>
  <body>
    
<table border="1" cellpadding="10" cellspacing="0">
  
<?php for( $i = 1; $i <= 5; $i++ ): ?>

<?php if( $i % 2 == 1 ) : ?>

<tr class="warna">
  
<?php else: ?>

<tr id="warna">
  
<?php endif; ?>

<?php for( $j = 1; $j <= 5; $j++ ): ?>

<td><?= "$i,$j"; ?></td>

<?php endfor; ?>

</tr>

<?php endfor; ?>

</table>
    
  </body>
</html>