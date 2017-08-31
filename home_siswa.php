<?php session_start();
ini_set('display_errors', 1); ini_set('error_reporting', E_ERROR);
	if(isset($_SESSION['id']))
{
	$_SESSION['id'];
	$_SESSION['nis'];
	$_SESSION['nama_siswa'];
	
?>
	<html>
	<head>
		<title>Data Siswa</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<style type="text/css">
		<!--
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000000;
}
		-->
		</style>
	</head>
	<body background="./img/background.jpg">
	
	    <table border="0" width="100%" cellpadding="0" style="border-collapse: collapse">
			<!-- MSTableType="nolayout" -->
			<tr>
				<td background="img/bg_header.gif">
				<div align="center">
					<table border="0" width="800" cellpadding="5" cellspacing="20" style="border-collapse: collapse">
						<tr>
							<td width="61"><img src="img/logo smada.png" width="70" height="72"></td>
							<td width="721" ><span class="style2">&nbsp;&nbsp; <?php echo stripslashes($_SESSION['nama_siswa']);?></span>	<?php include "./include/banner.php"; ?></td>
						    <td width="10">&nbsp;</td>
					  </tr>
					</table>
				</div>				</td>
			</tr>
			<tr>
				<td align="center" background="img/menu_bg.gif" height="15">
				<?php include "menu_siswa.php"; ?></td>
			</tr>
			<tr>
				<td>
				<p align="center"></td>
			</tr>
			<tr>
				<td align="center">
				<?php include "isi_siswa.php"; ?></td>
			</tr>
			<tr>
			  <td align="left"><table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><div align="center"><tr>
						<td colspan="1"><hr color="#000000"></td>
					</tr></div></td>
                </tr>
                <tr>
                  <td><?php include "./include/footer.php"; ?></td>
                </tr>
              </table></td>
		  </tr>
			<tr>
				<td align="left">&nbsp;</td>
			</tr>
	</table>
	    <p>&nbsp;</p>
	</body>
	</html>
<?php
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
	//echo "<script> document.location.href='home.php'; </script>";
}
?>