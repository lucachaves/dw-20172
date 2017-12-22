<?php
  // definition
  $variable;
  $variable = 10;
  var_dump($variable);
  print($variable);
  echo($variable);
  echo $variable;

  // [a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*
  $Variable = 10;
  echo $Variable;
  $_variable = 10;
  echo $_variable;
  $_variable = 10;
  echo $_variable;
  // $1variable = 10; //PHP Parse error

  $variable = [1, 2, 3];
  var_dump($variable);
  print_r($variable);
  // print($variable);
  // echo($variable);

  // dinamic type
  $variable = 10;
  echo $variable;
  $variable = 'fulano';
  echo $variable;

  // Variable variables
  $param = 'name';
  $$param = 'fulano';
  echo $param;
  echo $$param;
  echo $name;

  // variable from array
  $params = ['name' => 'fulano', 'email' => 'fulano@email'];
  print_r($params);

  $name = $params['name'];
  $email = $params['email'];
  echo $name, $email;

  $params = ['name' => 'fulano', 'email' => 'fulano@email'];
  extract($params);
  print_r(get_defined_vars());
  echo $name, $email;

  $params = ['10' => 'fulano', '20' => 'fulano@email'];
  extract($params);
  print_r(get_defined_vars());
  // echo $10, $20;

  // case sensitive
  $variable = 10;
  $Variable = 'fulano';
  echo $variable;
  echo $Variable;

  // constante
  define('VARIABLE', 10);
  echo VARIABLE;

  // passing value by value or reference
  $var1 = "test";
  $var2 = $var1;
  $var2 = "new test";
  $var3 = &$var2;
  $var3 = "final test";
  print ("var1: $var1, var2: $var2, var3: $var3");

  $params = ['name' => 'fulano', 'email' => 'fulano@email'];
  print_r($params);
  $params2 = $params;
  $params2['name'] = 'sicrano';
  print_r($params);
  $params3 = &$params;
  $params3['name'] = 'sicrano';
  print_r($params);

  $myCar = new stdClass;
  print_r($myCar);
  $myCar->engine = 'Nice Engine';
  $myCar->numberOfDoors = 4;
  $myCar->howFast = 150;
  print_r($myCar);
  $myCar2 = $myCar;
  $myCar2->power = 110;
  print_r($myCar);

  class Car {
    public $engine;
    public $numberOfDoors;
    public $howFast;
  }
  $myCar = new Car();
  $myCar->engine = 'Nice Engine';
  print_r($myCar);
  $myCar->numberOfDoors = 4;
  $myCar->howFast = 150;
  $myCar->power = 200;
  print_r($myCar);

  $myCar2 = $myCar;
  $myCar2->howFast = 300;
  print_r($myCar);

  $myCar3 = clone $myCar;
  $myCar3->howFast = 400;
  print_r($myCar);

  // Predefined Variables - http://php.net/manual/en/reserved.variables.php
  print_r($GLOBALS);
  print_r($GLOBALS['myCar']);
  print_r($myCar);

  // Magic constants - http://php.net/manual/en/language.constants.predefined.php http://i.imgur.com/YsbKHg1.gif
  print_r(__DIR__);

 ?>
