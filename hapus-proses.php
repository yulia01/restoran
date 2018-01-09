<?php
	
	include('koneksi.php');
	
	mysql_connect('localhost','root','');
	mysql_select_db('db_bt');
	
	
	$id		= $_GET['id_makanan'];	
	$delete = "DELETE FROM makanan WHERE id_makanan='$id'";
	mysql_query($delete)or die(mysql_error());
	header("location:index.php?pesan=hapus");

?>