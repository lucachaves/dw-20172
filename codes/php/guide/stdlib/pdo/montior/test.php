<?php
use Model\Icmp;
use Model\Packet;
use Model\Host;

require('model/icmp.php');
require('model/packet.php');
require('model/host.php');

$icmp = new Icmp();
$packet = new Packet();
$host = new Host();

$lastInsertId = $host->create('www.ifpb.edu.br', '200.129.77.62');

$lastInsertId = $icmp->create(2, 2, $lastInsertId);

$packet->create(0, 63, 123, $lastInsertId);
$packet->create(1, 63, 121, $lastInsertId);

$lastInsertId = $host->create('www.ifrn.edu.br', '200.137.2.130');

$lastInsertId = $icmp->create(2, 2, $lastInsertId);

$packet->create(0, 63, 104, $lastInsertId);
$packet->create(1, 63, 104, $lastInsertId);

print_r($icmp->readJoinAll());
