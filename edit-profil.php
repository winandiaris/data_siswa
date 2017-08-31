<?php session_start();
//////////////////page=2////////////////////////

//if (session_is_registered('id'))
	if(isset($_SESSION['id']))
{
	include "conn.php";
	$id=$_SESSION['id'];
	
	$user=htmlentities($_POST['user']);
	$kunci=htmlentities($_POST['kunci']);
	$namaku=htmlentities(ucwords($_POST['nama']));
	$email=htmlentities($_POST['email']);
	
	//periksa apakah udah submit
	if (isset($_POST['user']))
	{
		//periksa apakah masih kosong
		if (empty($kunci) || empty($user) || empty($namaku) || empty($email))
		{
			echo "<script> document.location.href='home.php?page=2&status=Maaf, Data Anda belum lengkap!!'; </script>";
		}else{	
			$password=md5($kunci);
			$edit=mysqli_query($koneksi,"UPDATE admin SET nama='$namaku',user='$user', password='$password', email='$email' where id='$id' ");
			
			//jika sudah berhasil 
			if ($edit)
			{
				echo "<script> document.location.href='home.php?page=2&status=Data berhasil disimpan!!'; </script>";
			}else{
				echo "GAGAL";
			}
		}

	}else{
		unset($_POST['user']);
	}
		
?>


	<table width="35%" border="0" cellpadding="0" cellspacing="0" bordercolor="#99CC99" align="center">
<tr> 
		<td width="3%" align="right"><img src="./img/kiri.jpg"></td>
		<td width="92%" bgcolor="#9CCE17" ><div align="center"><strong><font face="verdana" size="2" color="#FFFFFF">Update Profil Admin</font></strong></div></td>
	  <td width="3%"><img src="./img/kanan.jpg"></td>
	</tr>
	<tr>
		<td background="./img/b-kiri.jpg">&nbsp; </td>
		<td>
		<table width="376" align="center">
			<tr><td width="368">
			
			  <font face="verdana" size="2"> </font> <font color="#0033FF" face='verdana' size='2'>
			  <div align="center">
			    <p><br />
			      <blink><?php echo $_GET['status'] ?></blink></p>
		      </div>
			  </font>
			
			 <form action="edit-profil.php" method="post">
			  <table width="343" border="0" align="center">
			  <?php
				include "./include/conn.php";
				$query=mysqli_query($koneksi,"SELECT * from admin where id='$id'");
				while ($row=mysqli_fetch_array($query))
				{
				?>
			  
			  <tr>
				<td width="128"><font face="verdana" size="2">Nama Lengkap </font></td>
				<td width="205"><input type="text"  dir="ltr" size="25" name="nama" value="<?php echo $row['nama']; ?>" /></td>
			  </tr>
			  
			  <tr>
				<td><font face="verdana" size="2">Email </font></td>
				<td><input type="text"  dir="ltr" size="25" name="email" value="<?php echo $row['email']; ?>" /></td>
			  </tr>
			  
			  <tr>
				<td><font face="verdana" size="2">User name </font></td>
				<td><input type="text" size="25" name="user" value="<?php echo $row['user'];?>" /></td>
			  </tr>
			  
			  <tr>
				<td><font face="verdana" size="2">Password </font></td>
				<td>
					<input type="password" size="20" name="kunci" />
				</td>
			  </tr>
			  <tr>
			  	<td></td>
			  	<td><font color="#333333" size="-4" face="verdana">(Max 6 digit 0-9 a-z case sensitif)</font></td>
			  </tr>
			  <tr>
				<td>&nbsp;</td>
				<td><input name="submit" type="submit" value="Simpan" /></td>
				  
			  </tr>
				<?php
				}
				?>
			</table>
			</form >
					
			
			
			
					
			</td></tr>
		</table>
		</td>
		<td background="./img/b-kanan.jpg">&nbsp;</td>
		<td width="2%"></td>
	</tr>
	<tr> 
		<td align="right"><img src="./img/kib.jpg"></td>
		<td bgcolor="#9ECE16" ><div align="center"><strong><font face="verdana" size="3"></font></strong></div></td>
	  <td><img src="./img/kab.jpg"></td>
	</tr>
</table>


<p>
      <?php
}
else
{
echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>
</p>
    <p>&nbsp;        </p>
