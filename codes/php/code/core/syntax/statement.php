<?php
  $number = 10;
  if($number == 10){
      print 'é 10';
  } elseif($number == 20) {
    print 'é 20';
  } else {
    print 'não é 10 nem 20';
  }

  if($number == 10):
      print "é 10\n";
  elseif($number == 20):
    print "é 20\n";
  else:
    print "não é 10 nem 20\n";
  endif;

  foreach (range(0, 12) as $number) {
    echo $number;
  }
  $names = ['fulano', 'sicrano', 'beltrano'];
  for($index = 0; $index < sizeof($names); $index++){
    print($names[$index]."\n");
  }
  $names = [
    0 => 'fulano',
    'admin' => 'sicrano',
    'client' => 'beltrano'
  ];
  foreach($names as $name){
    print($name."\n");
  }
  foreach($names as $key=>$name){
    print("$key => $name\n");
  }
  foreach($names as $key=>$name){
    $name .= 'sufix';
  }
  print_r($names);
  foreach($names as $key=>&$name){
    $name .= 'sufix';
  }
  print_r($names);

?>
