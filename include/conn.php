<?php

$host="localhost";
$user="root";
$pass="";
$db="data_siswa";
$entries=3;

$koneksi=mysqli_connect($host, $user, $pass, $db);
//$database=mysql_select_db($db,$koneksi);
$tanggal=date('D, d-M-Y H:i:s');
/*
if ($koneksi)
{
	echo "berhasil : )";
}else{
	echo "Gagal !";
}
*/
?>

