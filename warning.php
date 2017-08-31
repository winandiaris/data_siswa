<? session_start();
if (session_is_registered('id'))
{
	$_SESSION['id'];
	$_SESSION['user'];
	
	?>
	<html>
	<head>
		<title>GIS-Endemik</title>
		<style type="text/css">
		<!--
		.style1 {
		font-family: Verdana, Arial, Helvetica, sans-serif;
		font-size: 12px;
		}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #FF0000;
}
		-->
		</style>
	</head>
	<body background="./img/background.jpg" style="text-align: center">
	<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
	<div align="center">
			<table width="100%" border="0" cellpadding="0" style="border-collapse: collapse">
			<tr>
				<td align="center" background="img/bg_header.gif">
				<table border="0" width="800" cellpadding="0" background="img/bg_header.gif" style="border-collapse: collapse">
					<tr>
						<td width="52">
						<img border="0" src="img/logo.PNG" width="52" height="57"></td>
						<td><? include "./include/banner.php"; ?></td>
						<td align="center">&nbsp;</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td height="20" align="center" background="img/menu_bg.gif"><? include "menu.php"; ?></td>
			</tr>
			<tr>
				<td height="150" align="center"><?
				$type=$_GET['type'];
				$id=$_GET['id'];
				$hal=$_GET['hal'];
				$topik=$_GET['topik'];
				
				?>
				  <p><img src="./img/delete.png"/>
				<font face="verdana" color="#666666"><span class="style1"><strong>Apakah anda yakin akan menghapus data ini??</strong></span>			        
				<br/>
				<br/>
				</font>
			  
				<a href="delete.php?id=<? echo $id; ?>&type=<? echo $type; ?>&hal=<? echo $hal; ?>" style="text-decoration:none">
				<font face="Times New Roman, Times, serif" color="#FF3333"><strong>[YA]</strong></font></a>
			  
				<strong><font face="Times New Roman, Times, serif"><a href="<? echo $hal; ?>" class="style2" style="text-decoration:none">
				<font color="#0033FF">[TIDAK]</font></a></font></strong></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			  </td>
			</tr>
			<tr>
				<td colspan="1"><hr color="#000000"><? include "./include/footer.php"; ?> </td>
			</tr>
			</table>
		  </div>
	</body>
	</html>
	<?
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>