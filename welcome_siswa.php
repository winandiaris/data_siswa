<?php session_start(); 
	if(isset($_SESSION['nis']))
{
	include "conn.php";
	$nis=$_SESSION['nis'];
	$tgl=$_SESSION['tanggal'];
	?>
	
	<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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
					<span>Formulir ini sangat penting dan menjadi rujukan data yang digunakan untuk administrasi sekolah. Harap data diisi dengan<strong> Sebenar-benarnya </strong>sesuai data yang ada</span>
				</nav>
            </header>

	
	<div align="center">
	<b><font color="#009933" size="2" face="verdana"><?php //include "./include/waktu.php"; ?>
				</font></b><font color="#000080" size="2" face="verdana">
					
							
		<table border="0" width="850" cellpadding="0" style="border-collapse: collapse">
			
		<td>
			<?php
			$result = mysqli_query($koneksi, "SELECT * FROM data_siswa where nis='$nis'");
			while ($row=mysqli_fetch_row($result))
					{ 
					if (isset($_POST['save'])){
					$fotodoc=$_FILES['fotodoc']['name'];
					$type=$_FILES['fotodoc']['type'];
					$uploaddir='./gambar/';
					$alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];
					$alamatdatabase='./admin/gambar/'.$_FILES['fotodoc']['name'];
					move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar);
					$upload=mysqli_query($koneksi,"UPDATE data_siswa SET gambar='$alamatdatabase' where nis='$nis'");
					echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";   
					}
				?> 
				
				
				
			<tr height="30">
						<td align="left" width="210">
							<a href=home_siswa.php?page=2&id=<?php echo $row[0]; ?> style='text-decoration:none' title="Update Data : <?php echo $row['id'];?>">
								<font face="calibri" size="3" color="blue"><b>Edit Data</font></a>&nbsp;<img src="./img/update.png" border="0">&nbsp; 					
						</td><td></td>
						<td align="center" rowspan='6'>

							<?php 
							$gambar=$row[63];
							$pic=substr($gambar,15,40); 
							?>	
							<img align="center" src="./gambar/<?php echo $pic; ?>" width="120" height="160" border="0">					
						</td>	
			</tr>
			
			<tr height="25">
			<td width="100"><font face="verdana" size="2"><strong>N I S</strong></font></td>
			<td width="325"><font face="verdana" size="2" color="#666666"><?php echo $row[0];?></font></td>
			<td></td>
			</tr>
			
			<tr height="25">
			<td width="100"><font face="verdana" size="2"><strong>Kelas</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[1];?></font></td>
			<td></td>
			</tr>
			
			<tr height="25">
			<td valign="top"><font face="verdana" size="2"><strong>Nama Lengkap</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo stripslashes($row[2]);?></font></td>
			<td></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Jenis Kelamin</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[3];?></font></td>
			<td></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>NISN</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[4];?></font></td>
			<td></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Tempat Lahir</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[5];?></font></td>
			<td rowspan='4' valign="top" align="center">		
				<form method="post" enctype="multipart/form-data" action="welcome_siswa.php"><font face="calibri" color="#666666" size="2">
				Unggah Foto berseragam SMAN 2 Tuban (Ukuran Maks = 600 Kb) : </font><br><input type="file" name="fotodoc" required /> 
				<input type="submit" value="Upload" name="save">
				</form>
				<br>	
			<script type="text/javascript">
					var detik = <?php echo date('s'); ?>;
					var menit = <?php echo date('i'); ?>;
					var jam   = <?php echo date('H'); ?>;
		
					function clock()
					{
						if (detik!=0 && detik%60==0) {
							menit++;
							detik=0;
					}
						second = detik;
         
						if (menit!=0 && menit%60==0) {
							jam++;
							menit=0;
					}
						minute = menit;
         
						if (jam!=0 && jam%24==0) {
						jam=0;
					}
						hour = jam;
         
						if (detik<10){
						second='0'+detik;
					}
						if (menit<10){
							minute='0'+menit;
					}
         
						if (jam<10){
							hour='0'+jam;
					}
						waktu = hour+':'+minute+':'+second;
         
						document.getElementById("clock").innerHTML = waktu;
						detik++;
					}
 
						setInterval(clock,1000);
					</script>				
				<div style="text-align:center;">
					<h1 id="clock"></h1>
					</div>				
			</td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Tanggal Lahir</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php
				function indonesian_date ($timestamp = '', $date_format = 'j F Y ') {
				if (trim ($timestamp) == '')
				{
					$timestamp = time ();
				}
					elseif (!ctype_digit ($timestamp))
				{
					$timestamp = strtotime ($timestamp);
				}
					# remove S (st,nd,rd,th) there are no such things in indonesia :p
					$date_format = preg_replace ("/S/", "", $date_format);
					$pattern = array (
					'/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
					'/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
					'/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
					'/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
					'/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
					'/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
					'/April/','/June/','/July/','/August/','/September/','/October/',
					'/November/','/December/',
				);
					$replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
					'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
					'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
					'Januari','Februari','Maret','April','Juni','Juli','Agustus','September',
					'Oktober','November','Desember',
				);
					$date = date ($date_format, $timestamp);
					$date = preg_replace ($pattern, $replace, $date);
					$date = "{$date}";
					return $date;
				} 
					$tanggal = $row[6];
					echo indonesian_date ($tanggal);

					//echo $row[7];?></font></td>
			<td></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Agama</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[7];?></font></td>
			<td></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Anak Ke</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[8];?></font></td>
			<td></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Status Dalam Keluarga</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[9];?></font></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Jumlah Saudara</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[10];?></font></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Alamat Lengkap</strong></font></td>
			<td width="277" align="justify"><font face="verdana" size="2" color="#666666"><?php echo " $row[11] RT. $row[12] RW. $row[13] Dsn. $row[14] Ds. $row[15] 
				Kec. $row[16] Kab. $row[17] <br> Kode Pos : $row[18] <br> Email: $row[19] ";?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Telepon</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[20];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Tinggi Badan</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[21];?></font></td>
			</tr>
							
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Berat Badan</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[22];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Jarak ke Sekolah</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[23];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Waktu Tempuh</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo "$row[24] Menit";?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Nama Sekolah Asal</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[28];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Alamat Sekolah Asal</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[29];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Tahun ijazah</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[30];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Nomor Ijazah</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[31];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Tahun SKHUN</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[32];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Nomor SKHUN</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[33];?></font></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Nopes UN SMP</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[64];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>N I K</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[34];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>No. Reg. Akta Kelahiran</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[35];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Tinggal di</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[36];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Alat Transportasi</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[37];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Penerima KPS</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[38];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Nomor KPS</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[39];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Jenis Beasiswa</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[40];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Keterangan Beasiswa</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[41];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Tahun Mulai</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[42];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Tahun Selesai</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[43];?></font></td>
			</tr>
																
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Nama Ayah</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo stripslashes($row[44]);?></font></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>N I K Ayah</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[65];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Nama Ibu</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo stripslashes($row[45]);?></font></td>
			</tr>
			
			<tr height="25">
			<td><font face="verdana" size="2"><strong>N I K Ibu</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[66];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Alamat Orang Tua</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[46];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Telepon Orang Tua</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[47];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Taun Lahir Ayah</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[48];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Tahun Lahir Ibu</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[49];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Pendidikan Ayah</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[50];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Pendidikan Ibu</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[51];?></font></td>
			</tr>
									
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Pekerjaan Ayah</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[52];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Pekerjaan Ibu</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[53];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Penghasilan  Ayah</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[54];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Penghasilan  Ibu</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[55];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Nama Wali</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[56];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Alamat Wali</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[57];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Tahun Lahir Wali</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[58];?></font></td>
			</tr>
							
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Nomor Telephon Wali</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[59];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Pendidikan Wali</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[60];?></font></td>
			</tr>
							
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Pekerjaan Wali</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[61];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Penghasilan Wali</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php echo $row[62];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="verdana" size="2"><strong>Update Terakhir</strong></font></td>
			<td width="277"><font face="verdana" size="2" color="#666666"><?php
				function tglindo ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
					if (trim ($timestamp) == '')
					{
							$timestamp = time ();
					}
					elseif (!ctype_digit ($timestamp))
					{
						$timestamp = strtotime ($timestamp);
					}
						# remove S (st,nd,rd,th) there are no such things in indonesia :p
						$date_format = preg_replace ("/S/", "", $date_format);
						$pattern = array (
							'/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
							'/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
							'/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
							'/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
							'/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
							'/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
							'/April/','/June/','/July/','/August/','/September/','/October/',
							'/November/','/December/',
						);
						$replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
							'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
							'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
							'Januari','Februari','Maret','April','Juni','Juli','Agustus','September',
							'Oktober','November','Desember',
						);
						$date = date ($date_format, $timestamp);
						$date = preg_replace ($pattern, $replace, $date);
						$date = "{$date} {$suffix}";
						return $date;
					} 

					$tanggal = $row[67];
					echo tglindo ($tanggal);

					//echo $row[7];?></font></td>
			<td>					
			</td>	
			</tr>	
			
	<?php			
				//echo "$row[0] $row[1] $row[2] $row[3] $row[4]";
				//echo "<br />";
	}
	?>
			</font>
		</td>		
	<tr>
	<td colspan="2">
	<br>
	<font face="verdana" size="1" color="#666666">
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