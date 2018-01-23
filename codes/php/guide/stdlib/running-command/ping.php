<?php
  // get host
  $host = $_GET['host'] ?? null;

  // shell_exec -> string
  $command = "ping -c1 {$host}";
  $result = shell_exec($command);

  // string -> json
  $json = '';
  if($host){
    $json = json_encode(['result' => $result]);
  } else {
    $json = json_encode(['error' => 'host not found']);
  }

  // echo json
  header('Content-type: application/json; charset=UTF-8');
  echo $json;
?>
