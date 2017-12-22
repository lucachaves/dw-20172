<?php
  // interactive debugger
  // require('psysh');
  // eval(\Psy\sh());
  // php -S localhost:8000 -t programExecution/
  // php -S localhost:8000 shell_exec.php
  // curl -I http://localhost:8000/?host=8.8.8.8

  // Get Params
  // print_r($_GET);
  $host = $_GET['host'] ?? null;

  // shell_exec -> string
  $command = "ping -c1 {$host}";
  $result = shell_exec($command);

  // string -> json
  // $json = json_encode($_GET);
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
