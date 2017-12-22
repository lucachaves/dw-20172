<?php
  $variable = array(1, 2, 3);
  print_r($variable);

  $variable = [1, 2, 3]; // 5.4
  print_r($variable);
  var_dump($variable[0]);
  var_dump($variable[1]);
  var_dump($variable[2]);

  $variable = [1, 'number' => 2, 3];
  print_r($variable);
  var_dump($variable[0]);
  var_dump($variable['number']);
  var_dump($variable[1]);

  $variable = [1, 'number' => 2, 3, 4 => 4, 5];
  print_r($variable);
  var_dump($variable[0]);
  var_dump($variable['number']);
  var_dump($variable[1]);
  // var_dump($variable[3]);
  var_dump($variable[4]);
  var_dump($variable[5]);

  $variable = [
    [1, 2, 3],
    [4, 5, 6]
  ];
  var_dump($variable[1][2]);

  $variable = json_decode('{
    "address": "192.168.0.1",
    "mask": "255.255.255.0"
  }');
  var_dump($variable);
  var_dump($variable->address);

  $variable = json_decode('{
    "address": "192.168.0.1",
    "mask": "255.255.255.0"
  }', true);
  var_dump($variable);
  var_dump($variable['address']);

  $variable = '[
    {"address":"192.168.0.1","mask":"255.255.255.0"},
    {"address":"192.168.0.2","mask":"255.255.255.0"}
  ]';
  $ips1 = json_decode($variable);
  var_dump($ips1);
  var_dump($ips1[0]->address);
  $ips2 = json_decode($variable, true);
  var_dump($ips2);
  var_dump($ips2[0]['address']);

  $variable = json_encode([
    "address" => "192.168.0.1",
    "mask" => "255.255.255.0"
  ]);
  var_dump($variable);

  $arrayAddress = [
    [
      "address" => "192.168.0.1",
      "mask" => "255.255.255.0"
    ],
    [
      "address" => "192.168.0.2",
      "mask" => "255.255.255.0"
    ]
  ];
  $variable = json_encode($arrayAddress);
  var_dump($variable);


  $names = ['fulano', 'sicrano'];
  var_dump(implode(', ', $names));

  var_dump(explode(", ", "fulano, sicrano"));

  // TODO https://medium.com/@brenodouglas/conhecendo-um-pouco-das-fun%C3%A7%C3%B5es-de-array-filter-map-e-reduce-com-php-cd02f6d51857#.ea71a973t
  // array_filter(), array_map(), array_reduce(), array_walk(), foreach
  function selectAddress($address){
    return $address["address"];
  }
  print_r(array_map("selectAddress", $arrayAddress));

?>
