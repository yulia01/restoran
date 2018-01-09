<html>
<head>
<title> Restoran</title>
</head>
<body>
	<h3 align="center">Restoran </h3>
		<a href="restoran.html">Tambah Data</a></p>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="DarkSalmon ">
			<th>ID Makanan </th>
			<th>Nama Makanan </th>
			<th>Jumlah </th>
			<th>Harga </th>
			<th colspan = "2">Opsi</th>
		</tr>
		
<?php
include ('koneksi.php');
$query = mysql_query ("SELECT * FROM makanan") or die (mysql_error());
if (mysql_num_rows($query) == 0){
echo '<tr><td colspan="6"> Tidak ada data !</td></tr>';
}else {
	$no = 1;
	while ($data = mysql_fetch_assoc($query)){
		echo '<tr>';
			echo '<td>'.$data['id_makanan'].'</td>';
			echo '<td>'.$data['nama_makanana'].'</td>';
			echo '<td>'.$data['jumlah'].'</td>';
			echo '<td>'.$data['harga'].'</td>';
			echo '<td><a href="edit.php?id_transaksi='.$data['id_makanan'].'">Edit</a></td>';
			echo '<td><a href="hapus-proses.php?id_transaksi='.$data['id_makanan'].'">Hapus</a></td>';
		echo '</tr>';
		$no++;
	}
}
?>	
	</table>
</body>
</html>