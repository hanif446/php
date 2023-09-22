<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi</title>
</head>
<body>
	<form action="proses_reg.php" method="POST">
		<fieldset>
			<legend>Registrasi</legend>
			<p>
				<label>Nama :</label>
				<input type="text" name="nama" />
			</p>
			<p>
				<label>Usernama :</label>
				<input type="text" name="username" />
			</p>
			<p>
				<label>Email :</label>
				<input type="email" name="email" />
			</p>
			<p>
				<label>Password :</label>
				<input type="password" name="password" />
			</p>
			<p>
				<label>Jenis Kelamin :</label>
				<label><input type="radio" name="jenis_kelamin" value="Laki-Laki" />Laki-Laki</label>
				<label><input type="radio" name="jenis_kelamin" value="Perempuan" />Perempuan</label>
			</p>
			<p>
				<label>Agama :</label>
				<select name="agama">
					<option value="Islam">Islam</option>
					<option value="Katolik">Katolik</option>
					<option value="Kristen">Kristen</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
					<option value="Konghuchu">Konghuchu</option>
				</select>
			</p>
			<p>
				<label>Biografi :</label>
				<textarea name="biografi"></textarea>
			</p>
			<p>
				<input type="submit" name="submit" value="Daftar">
			</p>
		</fieldset>
	</form>
</body>
</html>