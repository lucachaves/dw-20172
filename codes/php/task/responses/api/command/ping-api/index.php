<?php

  $infoName = $_GET['name'] ?? 'services';

  function services(){
    $result = [];

    $services_file = file_get_contents('/etc/services');
    $services = explode("\n", $services_file);

    foreach ($services as $service) {
      if($service && $service[0] == '#')
        continue;
      preg_match("/(.+)\s+(\w+)\/(\w+)\s*(.+)?/", $service, $fields);
      if($fields != null){
        $info = [];
        $info['name'] = $fields[1];
        $info['port'] = $fields[2];
        $info['protocol'] = $fields[3];
        $info['description'] = $fields[4] ?? '';
        $info['description'] = str_replace('# ', '', $info['description']);
        $result[] = $info;
      }
    }
    return $result;
  }

  function users(){
    $result = [];

    $passwd_file = file_get_contents('/etc/passwd');
    $users = explode("\n", $passwd_file);

    foreach ($users as $user) {
      if($user == '')
        continue;
      $fields = explode(":", $user);

      $info = [];
      $info["username"] = $fields[0]; # User name
      $info["encrypted_password"] = $fields[1] ?? ''; # Encrypted Password
      $info["uid"] = $fields[2] ?? ''; # User ID number (UID)
      $info["gid"] = $fields[3] ?? ''; # User's group ID number (GID)
      $info["gecos"] = $fields[4] ?? ''; # Full name of the user (GECOS)
      $info["home"] = $fields[5] ?? ''; # User home directory
      $info["shell"] = $fields[6] ?? ''; # Login shell

      $result[] = $info;
    }

    return $result;
  }

  $result;
  switch ($infoName) {
    case 'services':
      $result = services();
      break;
    case 'users':
      $result = users();
      break;
  }

  echo json_encode($result);
