<?php
$user_name = "root";
$password = "";
$database = "makan";
$host_name = "localhost";

$connect_db= mysql_connect ($host_name,$user_name, $password);
mysql_select_db($database,$connect_db);


$id = $_POST["id"];
$nma = $_POST["nama"];
$jml = $_POST["jumlah"];
$hrg = $_POST["harga"];

if ($connect_db){
	echo "Terhubung Dengan Database";
	echo "<br/>";
	$query = "INSERT INTO makanan(id_makanan,nama_makanan,jumlah,harga)VALUES('$id','$nma','$jml','$hrg')";
	mysql_query($query);
		echo "Berhasil Memasukkan Data";
	mysql_close($connect_db);
	echo '<br><a href = "index.php">Kembali</a>';
}else{
	echo "Terputus dengan Database";
	mysql_close($connect_db);
	echo '<br><a href = "index.php">Kembali</a>';
}
?>
