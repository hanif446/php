<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Percabangan</title>
</head>
<body>
	<form action="proses_hitung.php" method="POST">
		<h3>Toko Cat Guna Bangun Jaya</h3>
		<table>
			<tr>
				<td>
					<label>Nama Customer</label>
				</td>
				<td>:</td>
				<td><input type="text" name="nama" /></td>
			</tr>
			<tr>
				<td>
					<label>Alamat :</label>
				</td>
				<td>:</td>
				<td><input type="text" name="alamat" /></td>
			</tr>
			<tr>
				<td>
					<label>Jenis Cat :</label>
				</td>
				<td>:</td>
				<td>
					<select name="jenis_cat">
						<option value="Bituminous Paint">Bituminous Paint</option>
						<option value="Chlorinated Rubber">Chlorinated Rubber</option>
						<option value="Vinyl">Vinyl</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<label>Warna Cat :</label>
				</td>
				<td>:</td>
				<td>
					<label><input type="radio" name="warna_cat" value="Merah" />Merah</label>
					<label><input type="radio" name="warna_cat" value="Biru" />Biru</label>
					<label><input type="radio" name="warna_cat" value="Kuning" />Kuning</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Jumlah Beli :</label>
				</td>
				<td>:</td>
				<td><input type="text" name="jml_beli" /></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="Hitung">
					<input type="reset" name="reset" value="Batal">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>