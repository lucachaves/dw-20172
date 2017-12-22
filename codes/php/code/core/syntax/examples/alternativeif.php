<?php
  $idade = 15;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>
      <?php if($idade > 18){?>
        maior de idade
      <?php }else{ ?>
        menor de idade
      <?php }?>
    </p>
  </body>
</html>
