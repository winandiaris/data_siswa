<?php

$host="localhost";
$user="root";
$pass="";
$db="data_siswa";
$entries=3;

$koneksi=mysqli_connect($host, $user, $pass, $db);
$database=mysqli_select_db($koneksi, $db);

date_default_timezone_set('Asia/Jakarta');
$tanggal=date('D, d-M-Y H:i:s');

/*if (!$koneksi) {
   die('Koneksi Error : '.mysqli_connect_errno() 
   .' - '.mysqli_connect_error());
}
   
// koneksi berhasil
echo 'Koneksi Berhasil : '.mysqli_get_host_info($koneksi)."<br />";
   
// tutup koneksi
mysqli_close($koneksi);
/*
if ($koneksi)
{
	echo "berhasil : )";
}else{
	echo "Gagal !";
}
*/
?>

