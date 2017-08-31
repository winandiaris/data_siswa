<?php session_start();
ini_set('display_errors', 1); ini_set('error_reporting', E_ERROR);
//if (session_is_registered('id'))
	if(isset($_SESSION['id']))
{
	$_SESSION['id'];
	$_SESSION['user'];
	
	?>
	<html>
	<head>
		<title>Administrator</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<style type="text/css">
		<!--
	.style2 {
	font-family: arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000000;
	}
	.style3 {
	font-family: 'Broadway', Helvetica, sans-serif;
	font-weight: bold;
	font-size: 22px;
	color: #000000;
	}
	.style4 {
	font-family: 'calibri', Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
	color: #000000;
	}
	-->
		</style>
	</head>
	<body background="./img/background.jpg">
	    <table border="0" width="100%" cellpadding="0" style="border-collapse: collapse">
			<!-- MSTableType="nolayout" -->
			<tr>
				<td background="img/bg_header.png">
				<div align="center">
					<table border="0" width="900" cellpadding="0" style="border-collapse: collapse">
						<tr>
							<td width="60"><img src="img/logojatim2.png" width="75" height="100"></td>
							<td width="721" align="center"><span class="style2">PEMERINTAH PROVINSI JAWA TIMUR <br>DINAS PENDIDIKAN<br></span>
							<span class="style3">SEKOLAH MENENGAH ATAS NEGERI 2 TUBAN<br></span>
							<span class="style4">Jalan Dr. Wahidin Sudirohusodo 869 Telp/Fax. (0356) 321094/325497<br></span>
							<span class="style4">e-mail : sman2tuban@gmail.com  website : http://www.smadatuban.sch.id<br></span>
							<span class="style4">T U B A N - 62315</span><?php include "./include/banner.php"; ?></td>
						    <td width="60"><img src="img/logo smada.png" width="80" height="80">&nbsp;</td>
					  </tr>
					</table>
				</div>				</td>
			</tr>
			<tr>
				<td align="center" background="img/menu_bg.gif" height="15">
				<?php include "menu.php"; ?></td>
			</tr>
			<tr>
				<td>
				<p align="center"></td>
			</tr>
			<tr>
				<td align="center">
				 <?php include "isi.php"; ?>				</td>
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