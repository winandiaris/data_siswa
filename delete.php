<?php
include "conn.php";
$nis	= $_GET['nis'];

$sql	="delete from data_siswa where nis='$nis'";

$query	= mysqli_query($koneksi,$sql);
header('location: home.php?page=5');
?>