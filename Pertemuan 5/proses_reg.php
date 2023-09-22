<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proses Registrasi</title>
</head>
<body>
	<h3>Data Registrasi Anda</h3>
	Nama : <?php echo $_POST["nama"]; ?><br>
	Username : <?php echo $_POST["username"]; ?><br>
	Email : <?php echo $_POST["email"]; ?><br>
	Password : <?php echo $_POST["password"]; ?><br>
	Jenis Kelamin : <?php echo $_POST["jenis_kelamin"]; ?><br>
	Agama : <?php echo $_POST["agama"]; ?><br>
	Biografi : <?php echo $_POST["biografi"]; ?>
</body>
</html>