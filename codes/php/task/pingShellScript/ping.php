<?php
	$address = $_GET['address'] ?? '';
	$count = $_GET['count'] ?? '4';
	$command = "./ping.sh ${address} ${count}";
	$result = shell_exec($command);
	header('Content-type: apllication/json');
	if($address == '')
	{
		echo "Error: Address not found!";
	}
	else
	{
		echo $result;
	}
?>
