<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biodata</title>
</head>
<body>
	<?php 
		$nama = "Faridah Hanifah";
		$tempat_lahir = "Garut";
		$tanggal_lahir = "23 Januari 2002";
		$hobi = "Nonton Film, Rebahan";
	?>
	<center>
		<h1>Biodata</h1>
		<table border="1" width="30%">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $nama; ?></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><?php echo $tempat_lahir; ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><?php echo $tanggal_lahir; ?></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><?php echo $hobi; ?></td>
			</tr>
		</table>
		
	</center>
</body>
</html>