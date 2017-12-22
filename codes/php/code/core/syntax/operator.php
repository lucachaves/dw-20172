<?php
  // http://php.net/manual/en/language.operators.php

  // arithmetic
  var_dump("1"+1);
  var_dump(25/7);         // float(3.5714285714286)
  var_dump((int) (25/7)); // int(3)
  var_dump(round(25/7));  // float(4)
  var_dump(2 ** 3);

  // Comparison http://php.net/manual/en/types.comparisons.php
  var_dump("1 programador"+"1 computador" == "2 passos para o paraíso");
  var_dump("1 programador"+"1 computador" === (int)"2 passos paraíso");
  var_dump(1 <=> 0);
  var_dump(1 <=> 1);
  var_dump(0 <=> 1);
  var_dump('fulano' <=> 'sicrano');
  var_dump('fulano' <=> 'Sicrano');
  $a = (object) ["a" => "b"];
  $b = (object) ["a" => "b"];
  var_dump($a <=> $b);

  // concat
  var_dump("hello"." world");

  // Execution Operators
  var_dump(`ls`);
  var_dump(shell_exec('ls'));
  var_dump(shell_exec('ping -c1 8.8.8.8'));

?>
