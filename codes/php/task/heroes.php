<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?
		$heroes = array();
		$heroes[] = array('name' => 'Bruce Wayne', 'hero' => 'Batman', 'city' => 'Gothan City');
		$heroes[] = array('name' => 'Peter Parker', 'hero' => 'Homem Aranha', 'city' => 'New York');
		$heroes[] = array('name' => 'Clark Kent', 'hero' => 'Super Homem', 'city' => 'Metropolis');		
	?>
	<table>
		<tr>
			<!-- <?foreach($heroes[0] as $key=>$hero){?>
				<th><?= ucfirst($key)?></th>
			<?}?>-->
			<th>Nome</th>
			<th>Herói</th>
			<th>Cidade</th>
		</tr>
		<? foreach ($heroes as $hero): ?>
			<tr>
				<? foreach ($hero as $name => $field): ?>
					<? if ($name == 'hero'): ?>
						<td> <a href="http://www.google.com.br/#q=<?=$field?>"><?=$field?></a></td>
					<? else: ?>
						<td><?=$field?></td>
					<? endif ?>
				<? endforeach ?>
			</tr>
		<? endforeach ?>
	</table>
</body>
</html>