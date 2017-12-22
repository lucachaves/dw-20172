<?php
  // single quoted
  $variable = 'lorem ipsum';
  var_dump($variable);

  $variable = 'lorem
  ipsum';
  var_dump($variable);

  $variable = 'lorem\' ipsum';
  var_dump($variable);

  $variable = 'lorem \' ipsum';
  var_dump($variable);

  $variable = 'lorem \\\' ipsum';
  var_dump($variable);

  $variable = 'lorem \n ipsum';
  var_dump($variable);
  echo $variable;

  // double quoted
  $variable = "lorem ipsum";
  var_dump($variable);

  $variable = "lorem \n ipsum";
  var_dump($variable);
  echo $variable;

  $name = 'fulano';
  $hello = 'Hello $name';
  var_dump($hello);
  $hello = "Hello $name";
  var_dump($hello);
  $hello = "Hello {$name}";
  var_dump($hello);
  $name = ['name' => 'fulano'];
  $hello = "Hello {$name['name']}";
  var_dump($hello);
  $name = 'name';
  var_dump("2 {$name}s");

  // heredoc syntax
  $variable = <<<EOD
lorem
  ipsum
EOD;
  var_dump($variable);

  $variable = "lorem
  \tipsum";
  var_dump($variable);

  $name = 'fulano';
  $variable = <<<EOD // double quote
Hello $name
EOD;
  var_dump($variable);

// TODO   $variable = <<<"EOD"
// Hello world!
// EOD;
//   var_dump($variable);

  // nowdoc syntax
  $variable = <<<'EOD'
Hello world!
EOD;
  var_dump($variable);

  $name = 'fulano';
  $variable = <<<'EOD' //single quote
Hello $name
EOD;
  var_dump($variable);

?>
