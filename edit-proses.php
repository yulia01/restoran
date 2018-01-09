<?php
	if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id			= $_POST['iMakan'];	
	$nma		= $_POST['nMakan'];	
	$jml		= $_POST['jMakan'];
	$hrg		= $_POST['hMakan'];
	
	$update = mysql_query("UPDATE makanan SET id_makanan='$id', nama_makanan='$nma', jumlah='$jml', harga='$hrg' WHERE id_makanan='$id'") or die(mysql_error());
	
	if($update){
		
		echo 'Data berhasil di simpan! ';	
		echo '<a href="index.php?id_makanan='.$id.'">Kembali</a>';
	}else{
		
		echo 'Gagal menyimpan data! ';		
		echo '<a href="edit.php?id_makanan='.$id.'">Kembali</a>';
		
	}

}else{

	echo '<script>window.history.back()</script>';

}

?>