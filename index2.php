<?php session_start();
if (isset($_POST['admin']))
{
	include ("conn.php");
	//$koneksi = mysqli_connect("localhost", "root", "", "data_siswa");
	$userid=($_POST['admin']);//htmlentities((trim($_POST['admin'])));
	$password=htmlentities(md5($_POST['kunci']));
	
	$login=mysqli_query($koneksi, "SELECT * from admin where user='$userid' and password='$password'");
	//echo "ada yang error: ".mysqli_error(); 
	$cek_login=mysqli_num_rows($login);
		if (empty($cek_login))
		{
			echo "<script> document.location.href='akses2.php?go=salah_password'; </script>";
			//echo "<script> document.location.href='index.php'; </script>";
		}
		else
		{
			//daftarkan ID jika user dan password BENAR
			while ($row=mysqli_fetch_array($login))
			{
				$id=$row[0];
				//$_SESSION['namauser'] = "Desrizal";
				$_SESSION['id'] = $id;
				$_SESSION['userid'] = $userid;
				$_SESSION['tanggal'] = $tanggal;
			}
			echo "<script> document.location.href='home.php'; </script>";
		}
}

?>
<html>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>Login</title>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="25%" height="229" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#99CC99">
<tr> 
	<td width="4%" align="right"><img src="./img/kiri.jpg"></td>
	<td width="100%" bgcolor="#9CCE17" ><div align="left"><strong><font face="verdana" size="2" color="#FFFFFF">LOGIN </font></strong></div></td>
	<td width="4%"><img src="./img/kanan.jpg"></td>
</tr>
<tr>
	<td background="./img/b-kiri.jpg">&nbsp; </td>
	<td>
	<table width="486" align="center">
		<tr><td width="231"><font face="verdana" size="2">&nbsp;
		</font>
		 <script language="javascript">
		function cek(){
			var user= document.getElementById('userid').value;
			var pass= document.getElementById('passwd').value;
			if(user.replace(/^\s+|\s+$/g, '')==''){
				alert('Username Harus Diisi!');
				return false;
			} 
			if(pass.replace(/^\s+|\s+$/g, '')==''){
				alert('Password Harus diisi!');
				return false;
			}
			return true;
		}
		</script>
		<form action="index.php" method="post">
		  <table width="100%" height="100%" border="0" align="center">
		  <tr valign="bottom">
		    <td width="104" rowspan="4" valign="top"><div align="center"><img src="img/j_login_lock.jpg" width="104" height="93" align="top"></div></td>
		    <td height="21"><font size="2" face="verdana">Username</font></td>
		    </tr>
		  <tr valign="bottom">
		    <td height="24"><font size="4" face="verdana">
		      <input type="text" name="admin" size="20" id="userid">
		    </font></td>
		    </tr>
		  <tr valign="bottom">
			<td width="207" height="21"><font size="2" face="verdana">Password</font></td>
		  </tr>
		  
		  <tr valign="top">
			<td height="24"><font size="4" face="verdana">
				<input type="password" name="kunci" size="20" id="passwd">
			  </font></td>
		  </tr>
		  
		  <tr>
		  	<td height="38"><div align="center"><font size="1" face="Arial, Helvetica, sans-serif">Masukkan Username dan Password dengan Benar</font></div></td>
		  	<td><font size="4" face="verdana">
				<input type="submit" value="LOGIN" onClick="return cek()">
			  </font></td>
		  </tr>
		  </table>
		</form>
		
				
		</td></tr>
	</table>
	</td>
	<td background="./img/b-kanan.jpg">&nbsp;</td>
	<td width="1%"></td>
</tr>
<tr> 
	<td align="right"><img src="./img/kib.jpg"></td>
	<td bgcolor="#9DCF18" ><div align="center"><strong><font face="verdana" size="3"></font></strong></div></td>
	<td><img src="./img/kab.jpg"></td>
</tr>
</table>

<div align="center">
  <p>
  <font size="1" face="verdana" color="#999999">
    <?php
//echo $waktu=date("d-m-Y H:i:s");
//date_default_timezone_set('Asia/Jakarta');
///*
$waktu= mktime(date("m"),date("d"),date("Y"));
echo "waktu : <b>".date("d-M-Y", $waktu)."</b> ";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo "| Pukul : <b>". $jam." "."</b>";

echo "<br>";
if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
{
	echo 'IP Anda : ',$_SERVER['HTTP_X_FORWARDED_FOR'],'<br>';
}else{
	echo 'IP Anda : ',$_SERVER['REMOTE_ADDR'],"<br>";
}
echo "<br>";

?>
	</font>
  </p>
</div>
</body>
</html>