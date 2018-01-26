<?php
require 'calc.php';
$number = $_GET['fatorial'];
$fatorial = fatorial($number);
$output = (!is_nan($number))?"O fatorial de $number é $fatorial":"Não foi digitado valor algum";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?php echo $output ?></p>
  </body>
</html>
