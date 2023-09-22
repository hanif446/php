<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proses Hitung Percabangan</title>
</head>
<body>
	<table>
		<tr>
			<td colspan="4">------------------------------------------------------------------------------</td>
		</tr>
		<tr>
			<td colspan="3"><center><h3>Toko Cat Guna Bangun Jaya</h3></center></td>
		</tr>
		<tr>
			<td colspan="4">------------------------------------------------------------------------------</td>
		</tr>
		<tr>
			<td>Nama Customer</td>
			<td>:</td>
			<td><?php echo $_POST["nama"]; ?></td>
		</tr>
		<tr>
			<td width="50%">Alamat</td>
			<td>:</td>
			<td><?php echo $_POST["alamat"]; ?></td>
		</tr>
		<tr>
			<td>Jenis Cat</td>
			<td>:</td>
			<td><?php echo $_POST["jenis_cat"]; ?></td>
		</tr>
		<tr>
			<td>Warna</td>
			<td>:</td>
			<td><?php echo $_POST["warna_cat"]; ?></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td>:</td>
			<td>
				Rp.
				<?php 
					$jenis_cat = $_POST["jenis_cat"];
					if($jenis_cat == "Bituminous Paint"){
						echo 20000;
					}elseif($jenis_cat == "Chlorinated Rubber"){
						echo 30000;
					}else{
						echo 40000;
					}
				?> 
			</td>
		</tr>
		<tr>
			<td>Jumlah Beli</td>
			<td>:</td>
			<td><?php echo $_POST["jml_beli"]; ?></td>
		</tr>
		<tr>
			<td colspan="3">---------------------------------------------------------------------</td>
			<td>(*)</td>
		</tr>
		<tr>
			<td>Total Harga
			<td>:</td>
			<td>Rp.
				<?php 
					$jml_beli = $_POST["jml_beli"];

					if($jenis_cat == "Bituminous Paint"){
						echo $total_harga = $jml_beli * 20000;
					}elseif($jenis_cat == "Chlorinated Rubber"){
						echo $total_harga = $jml_beli * 30000;
					}else{
						echo $total_harga = $jml_beli * 40000;
					}
				?>
			</td>
		</tr>
		<tr>
			<td>Diskon</td>
			<td>:</td>
			<td>Rp. 
				<?php 

					if($jml_beli >= 5 && $jml_beli < 10){
						echo $diskon = $total_harga * 5/100;
					}elseif($jml_beli >= 10 ){
						echo $diskon = $total_harga * 10/100;
					}else{
						echo $diskon = 0;
					}
				?>		
			</td>
		</tr>
		<tr>
			<td colspan="3">---------------------------------------------------------------------</td>
			<td>(-)</td>
		</tr>
		<tr>
			<td>Total Bayar</td>
			<td>:</td>
			<td>Rp. <?php echo $total_harga - $diskon ?></td>
		</tr>
		<tr>
			<td colspan="4">------------------------------------------------------------------------------</td>
		</tr>
	</table>
</body>
</html>