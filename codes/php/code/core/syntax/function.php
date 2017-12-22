<?php

  function println($string){
    print $string."\n";
  }

  function soma($a, $b) {
    return $a+$b;
  }
  println(soma(1, 2));
  println(Soma(1, 2));
  println(SOMA(1, 2));

  // scope
  $name = 'fulano';
  function hello() {
    global $name;
    return "Hello $name";
  }
  println(hello());

  // override
  // function soma($a, $b, $c) {
  //   return $a+$b;
  // }
  // echo soma(1, 2, 3)."\n";

  // Default argument values
  function soma2($a, $b, $c=0) {
    return $a + $b + $c;
  }
  println(soma2(1, 2));
  println(soma2(1, 2, 3));

  // passing by reference
  $num = 10;
  function add($a) {
    return ++$a;
  }
  println($num);
  println(add($num));
  println($num);

  function addref(&$a) {
    return ++$a;
  }
  println($num);
  println(addref($num));
  println($num);

  // Scalar type declarations & typed param
  function somation(int ...$values):int {
    return array_sum($values);
  }

  println(somation(1, 2));
  // println(somation(1, 'a'));
  println(somation(1, 2, 3, 4));

  // callback
  $helloWorld = function($name){
    return "Hello $name";
  };
  println($helloWorld('fulano'));

?>
