<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biodata</title>
</head>
<body>
	<?php 
		$title = "Penjumlahan dan Pengurangan";
		$a = 6;
		$b = 1;
		$c = 2;
	?>
	<h1><?php echo $title; ?></h1>
	<ul>
		<li><?php echo $a . " + " . $b . " = "; ?> <?php echo $a + $b; ?></li>
		<li><?php echo $a . " - " . $c . " = "; ?><?php echo $a - $c; ?></li>
	</ul>
</body>
</html>