<html>
<head>
<title> </title>
</head>
<body>
	<p><a href="index.php">Beranda</a> 
	<?php
	include('koneksi.php');
	$id = $_GET['id_makanan'];	
	$show = mysql_query("SELECT * FROM makanan WHERE id_makanan='$id'");
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()
		</script>';	
	}else{
		$data = mysql_fetch_assoc($show);
	}
	?>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="3" cellspacing="0" >
			<tr>
				<td>ID Makanan</td>
				<td>:</td>
				<td><input type="text" name="iMakan" value="<?php echo $data['id_makanan']; ?>" required></td>
			</tr>
			<tr>
				<td>Nama Makanan</td>
				<td>:</td>
				<td><input type="text" name="nMakan" size="30" value="<?php echo $data['nama_makanan']; ?>" required></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" name="jMakan" value="<?php echo $data['jumlah']; ?>" required></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="hMakan" value="<?php echo $data['harga']; ?>" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type='submit' name='simpan' value='simpan'></td>
			</tr>
		</table>
	</form>

</body>
</html>