<?php session_start(); 
	if(isset($_SESSION['nis']))
{
	include "conn.php";
	$nis=$_SESSION['nis'];
	$tgl=$_SESSION['tanggal'];
	?>
	
<html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>DATA SISWA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
	 <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">                        
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Data Pokok Siswa SMAN 2 Tuban <span>TP 2016/2017</span></h1>
				<nav class="codrops-demos">
					<span>Gunakan  <strong> Nomor Induk Siswa  </strong> sebagai nama depan setiap file dengan ukuran file maksimum <strong> 600 KB </strong></span>
				</nav>
            </header>

	
	<div align="center">
	<b><font color="#009933" size="2" face="verdana">
	<?php //include "./include/waktu.php"; ?>
				</font></b><font color="#000080" size="2" face="verdana">	
		<table border="0" width="960" cellpadding="0" style="border-collapse: collapse">
			
		<td>
						<?php
						$result = mysqli_query($koneksi, "SELECT * FROM data_siswa where nis='$nis'");
								$ukuran_gambar=$_FILES['fotodoc']['size'];
								$ukuran = 614400;
						while ($row=mysqli_fetch_row($result))
						{ 
						if (isset($_POST['save1'])){
							$fotodoc=$_FILES['fotodoc']['name'];
							$type=$_FILES['fotodoc']['type'];
							$uploaddir='./ijazahdp/';
							$alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];
							$alamatdatabase='./admin/ijazahdp/'.$_FILES['fotodoc']['name'];
								if($ukuran_gambar <= $ukuran){
							move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar);
							$upload=mysqli_query($koneksi,"UPDATE data_siswa SET gambar1='$alamatdatabase' where nis='$nis'");
							echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>"; 
								}else {echo"<script>alert('Ukuran Gambar Lebih dari 600 kB !');history.go(-1);</script>";}
							}
						if (isset($_POST['save2'])){
							$fotodoc=$_FILES['fotodoc']['name'];
							$type=$_FILES['fotodoc']['type'];
							$uploaddir='./ijazahbk/';
							$alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];								
							$alamatdatabase='./admin/ijazahbk/'.$_FILES['fotodoc']['name'];
								if($ukuran_gambar <= $ukuran){
							move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar);
							$upload=mysqli_query($koneksi,"UPDATE data_siswa SET gambar2='$alamatdatabase' where nis='$nis'");
							echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";   
								}else {echo"<script>alert('Ukuran Gambar Lebih dari 600 kB !');history.go(-1);</script>";}							
							}
						if (isset($_POST['save3'])){
							$fotodoc=$_FILES['fotodoc']['name'];
							$type=$_FILES['fotodoc']['type'];
							$uploaddir='./skhundp/';
							$alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];		
							$alamatdatabase='./admin/skhundp/'.$_FILES['fotodoc']['name'];
								if($ukuran_gambar <= $ukuran){
							move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar);
							$upload=mysqli_query($koneksi,"UPDATE data_siswa SET gambar3='$alamatdatabase' where nis='$nis'");
							echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";   
								}else {echo"<script>alert('Ukuran Gambar Lebih dari 600 kB !');history.go(-1);</script>";}							
							}
						if (isset($_POST['save4'])){
							$fotodoc=$_FILES['fotodoc']['name'];
							$type=$_FILES['fotodoc']['type'];
							$uploaddir='./skhunbk/';
							$alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];								
							$alamatdatabase='./admin/skhunbk/'.$_FILES['fotodoc']['name'];
								if($ukuran_gambar <= $ukuran){
							move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar);
							$upload=mysqli_query($koneksi,"UPDATE data_siswa SET gambar4='$alamatdatabase' where nis='$nis'");
							echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";   
								}else {echo"<script>alert('Ukuran Gambar Lebih dari 600 kB !');history.go(-1);</script>";}							
							}
						if (isset($_POST['save5'])){
							$fotodoc=$_FILES['fotodoc']['name'];
							$type=$_FILES['fotodoc']['type'];
							$uploaddir='./akta/';
							$alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];
							$alamatdatabase='./admin/akta/'.$_FILES['fotodoc']['name'];
								if($ukuran_gambar <= $ukuran){
							move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar);
							$upload=mysqli_query($koneksi,"UPDATE data_siswa SET gambar5='$alamatdatabase' where nis='$nis'");
							echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";   
								}else {echo"<script>alert('Ukuran Gambar Lebih dari 600 kB !');history.go(-1);</script>";}							
							}
						if (isset($_POST['save6'])){
							$fotodoc=$_FILES['fotodoc']['name'];
							$type=$_FILES['fotodoc']['type'];
							$uploaddir='./KK/';
							$alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];
							$alamatdatabase='./admin/KK/'.$_FILES['fotodoc']['name'];
								if($ukuran_gambar <= $ukuran){
							move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar);
							$upload=mysqli_query($koneksi,"UPDATE data_siswa SET gambar6='$alamatdatabase' where nis='$nis'");
							echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";   
								}else {echo"<script>alert('Ukuran Gambar Lebih dari 600 kB !');history.go(-1);</script>";}							
							}
						if (isset($_POST['save7'])){
							$fotodoc=$_FILES['fotodoc']['name'];
							$type=$_FILES['fotodoc']['type'];
							$uploaddir='./SKTM/';
							$alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];
							$alamatdatabase='./admin/SKTM/'.$_FILES['fotodoc']['name'];
								if($ukuran_gambar <= $ukuran){
							move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar);
							$upload=mysqli_query($koneksi,"UPDATE data_siswa SET gambar7='$alamatdatabase' where nis='$nis'");
							echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";   
								}else {echo"<script>alert('Ukuran Gambar Lebih dari 600 kB !');history.go(-1);</script>";}							
							}
							?> 			
							
			<tr height="30">
						<td align="center" width="240">
							<?php 
							$gambar=$row[68];
							$pic=substr($gambar,17,40); 
							?>	
							<img align="center" src="./ijazahdp/<?php echo $pic; ?>" width="150" height="200" border="0">
						</td>
						<td align="center" width="240">
							<?php 
							$gambar=$row[69];
							$pic=substr($gambar,17,40); 
							?>	
							<img align="center" src="./ijazahbk/<?php echo $pic; ?>" width="150" height="200" border="0">
						</td>
						<td align="center" width="240">
							<?php 
							$gambar=$row[70];
							$pic=substr($gambar,16,40); 
							?>	
							<img align="center" src="./skhundp/<?php echo $pic; ?>" width="150" height="200" border="0">
						</td>
						<td align="center" width="240">
							<?php 
							$gambar=$row[71];
							$pic=substr($gambar,16,40); 
							?>	
							<img align="center" src="./skhunbk/<?php echo $pic; ?>" width="150" height="200" border="0">
						</td>
			</tr>
			
			<tr height="25">
			<td align="left" >
				<form method="post" enctype="multipart/form-data" action="lampiran.php"><font face="calibri" color="#666666" size="2">
				Lampiran Ijazah halaman depan </font><br><input type="file" name="fotodoc" required /><br> 
				<input type="submit" value="Upload" name="save1" align="left">
				</form>
				<br>	
			</td>
			<td align="left">
				<form method="post" enctype="multipart/form-data" action="lampiran.php"><font face="calibri" color="#666666" size="2">
				Lampiran Ijazah halaman belakang</font><br><input type="file" name="fotodoc" required /><br> 
				<input type="submit" value="Upload" name="save2" align="left">
				</form>
				<br>
			</td>
			<td align="left">
				<form method="post" enctype="multipart/form-data" action="lampiran.php"><font face="calibri" color="#666666" size="2">
				Lampiran SKHUN halaman depan </font><br><input type="file" name="fotodoc" required /><br> 
				<input type="submit" value="Upload" name="save3" align="left">
				</form>
				<br>
			</td>
			<td align="left">
				<form method="post" enctype="multipart/form-data" action="lampiran.php"><font face="calibri" color="#666666" size="2">
				Lampiran SKHUN halaman belakang </font><br><input type="file" name="fotodoc" required /><br> 
				<input type="submit" value="Upload" name="save4" align="left">
				</form>
				<br>
			</td>
			</tr>
			
			<tr height="30">
						<td align="center" width="240">
							<?php 
							$gambar=$row[72];
							$pic=substr($gambar,13,40); 
							?>	
							<img align="center" src="./akta/<?php echo $pic; ?>" width="150" height="200" border="0">
						</td>
						<td align="center" width="240">
							<?php 
							$gambar=$row[73];
							$pic=substr($gambar,11,40); 
							?>	
							<img align="center" src="./KK/<?php echo $pic; ?>" width="150" height="200" border="0">
						</td>
						<td align="center" width="240">
							<?php 
							$gambar=$row[74];
							$pic=substr($gambar,13,40); 
							?>	
							<img align="center" src="./SKTM/<?php echo $pic; ?>" width="150" height="200" border="0">
						</td>
						<td align="center" width="240">
							
						</td>
			</tr>
			
			<tr height="25">
			<td align="left">
				<form method="post" enctype="multipart/form-data" action="lampiran.php"><font face="calibri" color="#666666" size="2">
				Lampiran Akta Kelahiran </font><br><input type="file" name="fotodoc" required /><br> 
				<input type="submit" value="Upload" name="save5" align="left">
				</form>
				<br>	
			</td>
			<td align="left">
				<form method="post" enctype="multipart/form-data" action="lampiran.php"><font face="calibri" color="#666666" size="2">
				Lampiran Kartu Keluarga (KK) </font><br><input type="file" name="fotodoc" required /><br> 
				<input type="submit" value="Upload" name="save6" align="left">
				</form>
				<br>
			</td>
			<td align="left">
				<form method="post" enctype="multipart/form-data" action="lampiran.php"><font face="calibri" color="#666666" size="2">
				Lampiran Surat Keterangan Tidak Mampu (SKTM) </font><br><input type="file" name="fotodoc" required /><br> 
				<input type="submit" value="Upload" name="save7" align="left">
				</form>
				<br>
			</td>
			<td align="center">
				
			</td>
			</tr>
					
	<?php			
	}
	?>
			</font>
		</td>		
	<tr>
	<td colspan="2">
	<br>
	
	
	<?php
	}else{
	echo "<script> document.location.href='akses_siswa.php?go=session'; </script>";
	}
	?></td>
	</tr>
	</table>	
</div>
&nbsp;<p>&nbsp;
</p>
 </body>
 </html>