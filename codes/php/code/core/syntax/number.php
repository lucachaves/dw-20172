<?php
  // Integer  {..., -2, -1, 0, 1, 2, ...}
  $a = 1234; // decimal number
  var_dump($a);
  $a = -123; // a negative number
  var_dump($a);
  $a = 0123; // octal number (equivalent to 83 decimal)
  var_dump($a);
  $a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
  var_dump($a);
  $a = 0b11111111; // binary number (equivalent to 255 decimal)
  var_dump($a);

  var_dump(pow(2,62)); //int(4611686018427387904)
  var_dump(pow(2,63)); //float(9.2233720368548E+18)

  // float
  $a = 1.234;
  var_dump($a);
  $b = 1.2e3;
  var_dump($b);
  $c = 1.21233312432534523e1;
  var_dump($c);
  $d = 7E-10;
  var_dump($d);

  var_dump((float)3);

  var_dump(0.3-0.2);
  $x = 8 - 6.4;  // which is equal to 1.6
  $y = 1.6;
  var_dump($x);
  var_dump($y);
  var_dump($x == $y); // is not true

  // NaN
  $nan = acos(8); //NaN
  var_dump($nan, is_nan($nan));

  // INF
  var_dump(10/0);

  // $variable = 'fulano';
  // var_dump($variable, is_nan($variable));
?>
