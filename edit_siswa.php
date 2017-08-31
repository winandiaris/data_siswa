<?php session_start();
ini_set("display_errors",FALSE);
if(isset($_SESSION['id']))
{
	include "conn.php";
	$ok=$_POST['ok'];
	$id=$_GET['id']; //id catatan
	$fotodoc=$_FILES['fotodoc']['name'];
	$type=$_FILES['fotodoc']['type'];
	$gambar=$_POST['gambar'];
	
	if (isset($_POST['telp']))//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan isi
	{
		$tanggal;
		$nis=ucwords(htmlentities($_POST['nis']));
		$nama_siswa=ucwords(htmlentities($_POST['nama_siswa']));
		$alamat=ucwords(htmlentities($_POST['alamat']));
		$agama=ucwords(htmlentities($_POST['agama']));
		$kelamin=ucwords(htmlentities($_POST['kelamin']));	
		$telp=ucwords(htmlentities($_POST['telp']));
		$jurusan=ucwords(htmlentities($_POST['jurusan']));
		$kelas=ucwords(htmlentities($_POST['kelas']));
		$ket=ucwords(htmlentities($_POST['ket']));
				
		$id=$_POST['id'];
		if ($ok=="ok"){
			//echo "pilih ok, berarti gambar tidak di ubah";
			//kalo gambar gak mau di ganti
			if ($nis=="" || $nama_siswa=="" )//periksa jika data yang dimasukan belum lengkap
			{
				?><script> document.location.href='home.php?page=5&id=<?php echo $id; ?>&status=<font color=red>Maaf, Data Anda belum lengkap</font>'; </script>;<?php
			}
			else
			{	
				$upload=mysqli_query($koneksi,"UPDATE data_siswa SET nis='$nis',nama_siswa='$nama_siswa', alamat='$alamat',agama='$agama',kelamin='$kelamin',,telp='$telp',kelas='$kelas',jurusan='$jurusan',gambar='$gambar',ket='$ket' where id='$id'");
				?><script> document.location.href='home.php?page=3&status=Data berhasil di ubah'; </script>";<?php
			}
			
		
		}else{
			//echo "tidak pilih ok";
			
			//kalo gambar di ganti
			if ($nis=="" || $nama_siswa=="" )//periksa jika data yang dimasukan belum lengkap
			{
				?><script> document.location.href='home.php?page=5&id=<?php echo $id; ?>&status=<font color=red>Maaf, Data Anda belum lengkap</font>'; </script>;<?php
			}
			else
			{
				//echo "salah parameter";
				
				
				$uploaddir='./gambar/';
				$alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];
				$alamatdatabase='./admin/gambar/'.$_FILES['fotodoc']['name'];
				
				
				if (move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar))//periksa jika proses upload berjalan sukses
				{
					
					?><script> document.location.href='home.php?page=3&status=Data Anda berhasil di simpan.'; </script>";<?php
					
					$upload=mysqli_query($koneksi,"UPDATE data_siswa SET nis='$nis',nama_siswa='$nama_siswa',alamat='$alamat', agama='$agama',kelamin='$kelamin',telp='$telp',jurusan='$jurusan',kelas='$kelas',gambar='$alamatdatabase' ket='$ket', where id='$id'");
					
					
					$myFile ="./gambar/".$gambar;
					unlink($myFile);
					
				}else{
					echo "Proses upload gagal, kode error = " . $_FILES['location']['error'];
				}
				
			}
		}
		
		
	}
	else
	{
		unset($_POST['isi']);
	}
	?>




	<html>
	<head>
		<title>GIS-Endemik</title>
		<style type="text/css">
		<!--
.style2 {
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
}
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	color: #FF0000;
}
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style11 {color: #FFFFFF}
		-->
		</style>
	</head>
	<body>
	<p>&nbsp;</p>
		
		<?php
		$tampil=mysqli_query($koneksi,"select * from data_siswa where id='$id'");
		while ($row=mysqli_fetch_array($tampil))
		{
			$id=$row['id'];
			$nis=$row['nis'];
			$nama_siswa=$row['nama_siswa'];
			$alamat=$row['alamat'];
			$agama=$row['agama'];
			$kelamin=$row['kelamin'];
			$jurusan=$row['jurusan'];
			$kelas=$row['kelas'];
			$ket=$row['ket'];
			$telp=$row['telp'];
			
			$gambar=$row['gambar'];
		}
		?> 
		<html><head>
	
		<script type="text/javascript" src="./jscripts/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript">
		tinyMCE.init({
		mode : "exact",
		elements : "elm2",
		theme : "advanced",
		skin : "o2k7",
		skin_variant : "silver",
		plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups",
		
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",
		
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
		});
		</script>
		</head>

		<h2 align="center" class="style2"><font color='#0066FF' face='verdana' size='2'>
        </font></h2>

			    </font></p>
				
  <form enctype="multipart/form-data" action="edit_siswa.php?id=<?php echo $id; ?>" method="post">
		
        <table width="800" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#009933">
  <tr>
    <td bgcolor="#999999"><table width="735" cellspacing="0" cellpadding="0" border="0" align="center">
		<tr>
		  <td width="2%">          
		  <td width="20%" height="30"><font face="verdana" size="2">Tanggal Update </font>
			<td width="42%"><font face="verdana" size="2" color="#666666"><?php echo $tanggal;?></font></td>
			<td width="36%">&nbsp;</td>
		</tr>
		<tr>
		  <td width="2%">&nbsp;</td>
			<input type="hidden" name="id" value="<?php echo $id;?>" >
			<td width="20%" height="22"><span class="style10">ID</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
		      <input type="text" disabled= "true" name="id" cols="30" rows="1" value="<?php echo $id;?>">
		    </font></td>
	      <td width="36%" rowspan="12"><font face="Times New Roman" size="2"></textarea></font><font face="Times New Roman" size="2"></textarea>
	     <img src="img/keyboad.png" width="268" height="166" /> </font>
          <p>&nbsp;</p>	        <p>&nbsp;</p></td>
		</tr>
		<tr>
		  <td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">nis</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
		      <input type="text" name="nis" cols="30" rows="1" value="<?php echo $nis;?>">
		    </font></td>
	      </tr>
		
		<tr>
		  <td>&nbsp;</td>
		  <td height="22"><span class="style10">Nama Siswa </span></td>
		  <td><font face="Times New Roman" size="2">
		    <input name="nama_siswa" type="text" value="<?php echo $nama_siswa;?>" size="50" rows="1">
		  </font></td>
		  </tr>
		<tr>
		  <td>&nbsp;</td>
		  <td height="22"><span class="style10">Alamat</span></td>
		  <td><font face="Times New Roman" size="2">
		    <input name="alamat" type="text" value="<?php echo $alamat;?>" size="50" rows="1">
		  </font></td>
		  </tr>
		<tr>
		  <td>&nbsp;</td>
		  <td height="22"><span class="style10">Agama</span></td>
		  <td><font face="Times New Roman" size="2">
		    <select name="agama" size="1" id="agama">
            	<option><?php=$row['agama']?></option>
              <option>Islam</option>
              
              <option>Kristen</option>
              <option>Hindu</option>
              <option>Budha</option>
              <option>Lainnya</option>
                                    </select>
		  </font></td>
		  </tr>
		
		<tr>
		  <td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">Kelamin</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
		      <input type="text"name="kelamin" cols="30" rows="1" value="<?php echo $kelamin;?>">
		    </font></td>
	      </tr> 
		
		<?php $pic=substr($gambar,15,40); ?>
		
		<tr>
		  <td>&nbsp;</td>
		  <td height="11"><span class="style10">Jurusan</span></td>
		  <td><font face="Times New Roman" size="2">
		    <input type="text"name="jurusan" cols="30" rows="1" value="<?php echo $jurusan;?>">
		  </font></td>
		  </tr>
		<tr>
		  <td>&nbsp;</td>
		  <td height="11"><span class="style10">Kelas</span></td>
		  <td><font face="Times New Roman" size="2">
		    <input type="text"name="kelas" cols="30" rows="1" value="<?php echo $kelas;?>">
		  </font></td>
		  </tr>
		<tr>
		  <td>&nbsp;</td>
		  <td height="11"><span class="style10">Telp</span></td>
		  <td><font face="Times New Roman" size="2">
		    <input type="text"name="telp" cols="30" rows="1" value="<?php echo $telp;?>">
		  </font></td>
		  </tr>
		<tr>
		  <td>&nbsp;</td>
		  <td height="11"><span class="style10">Keterangan</span></td>
		  <td><font face="Times New Roman" size="2">
		    <input name="ket" type="text" value="<?php echo $ket;?>" size="50" rows="1">
		  </font></td>
		  </tr>
		<tr>
		  <td>&nbsp;</td>
			<td height="115"><span class="style3"><img src="./gambar/<?php echo $pic; ?>" width="100" height="100" border="0" title="<?php echo substr($gambar,15,40); ?>"></span>			</td>
			<td><input type="checkbox" name="ok" value="ok">
		    <font face="verdana" size="1" color="#666666"><?php echo $gambar; ?></font><span class="style5"><br>
		    <span class="style11">Jika Foto tidak ingin di ganti, silahkan ceklist tanda ini !!</span></span></td>
			<input type="hidden" name="gambar" value="<?php echo $pic; ?>">
		  </tr>
		
		<tr>
		  <td>&nbsp;</td>
			<td height="27">&nbsp;</td>
		    <td>&nbsp;</td>
	      </tr>
		
		<tr>
		  <td width="2%" valign="middle">&nbsp;</td>
		  <td width="20%" height="33" valign="middle">
		  <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
		  <font size="2" face="verdana">Foto</font></td>
			<td><input type="file" name="fotodoc" size="30"></td>
			<td>&nbsp;</td>
		</tr>
		
		<tr>
		  <td width="2%">&nbsp;</td>
			<td width="20%"><p>&nbsp;
			  </p>
		  <p>&nbsp;</p></td>
		    <td width="42%"><input type="submit" value="Update">
	        <input type="button" name="batal" value="Batal" onClick="location.replace('home.php?page=3');" /><font color='#0066FF' face='verdana' size='2'><div align="center"><blink><?php echo $_GET['status'] ?></blink></div></td>
	      <td width="36%">&nbsp;</td>
		</tr>
		</table></td>
  </tr>
</table>

	</form>
	
				
			 
	</body>
	</html>
	<?php
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>