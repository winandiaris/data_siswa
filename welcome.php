<?php session_start(); 
//if (session_is_registered('id'))
	if(isset($_SESSION['id']))
{

	include "conn.php";
	$userid=$_SESSION['userid'];
	$tgl=$_SESSION['tanggal'];
	?>
	<div align="center">
		<table border="0" width="800" cellpadding="0" style="border-collapse: collapse">
			<tr>
				<td><b><font color="#009933" size="2" face="verdana"><?php include "./include/waktu.php"; ?><br>
				</font></b><font color="#000080" size="2" face="verdana">
				Fasilitas Pendataan Siswa  .<br>
				<br>
				1. Input Data Siswa.<br>
				2. Tampil data Siswa.<br>
				3. Login Administrator.<br>
				4. Update Data Siswa.<br>
				5. Hapus Data Siswa.<br>
				6. Ubah Login Admin.<br>
				7. Laporan Data Siswa.<br>
				8. Keluar</font></td>
				<td width="325">
				<img border="0" src="img/record-audio21.png" width="244" height="194" align="right"></td>
			</tr>
			<tr>
				<td colspan="2">
	

	<font face="verdana" size="1" color="#666666"><b>STATUS</b> 
	Jam Masuk      : <?php echo substr($tgl,11,19);?> <br>
	Jam Sekarang   : <?php echo substr($tanggal,11,19);?> <br> 
	Tanggal        : <?php echo substr($tanggal,0,10);?> <br>
	<?php
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		echo 'IP Anda : ',$_SERVER['HTTP_X_FORWARDED_FOR'],'<br>';
	}else{
		echo 'IP Anda : ',$_SERVER['REMOTE_ADDR'],"<br>";
	}
	?>
	</font>
	
<?php
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?></td>
			</tr>
		</table>
</div>
&nbsp;<p>&nbsp;
</p>
	