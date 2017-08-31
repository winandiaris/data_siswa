<?php session_start();
ini_set("display_errors",FALSE);
if(isset($_SESSION['nis']))
{
	include "conn.php";
	$nis=$_SESSION['nis'];
	$id=$_GET['id']; //id catatan
	
	
	if (isset($_POST['nis']))//periksa apakah user telah menekan submit, dengan menggunakan parameter setingan isi
	{
		$tanggal;
		$nis=ucwords(htmlentities($_POST['nis']));
		$kelas=ucwords(htmlentities($_POST['kelas']));
		$nama_siswa=addslashes(strtoupper(htmlentities($_POST['nama_siswa'])));
		$kelamin=ucwords(htmlentities($_POST['kelamin']));	
		$nisn=ucwords(htmlentities($_POST['nisn']));	
		$tmp_lahir=ucwords(htmlentities($_POST['tmp_lahir']));	
		$tgl_lahir=ucwords(htmlentities($_POST['tgl_lahir']));	
		$agama=ucwords(htmlentities($_POST['agama']));
		$anak_ke=ucwords(htmlentities($_POST['anak_ke']));
		$status=ucwords(htmlentities($_POST['status']));
		$jmlh_sdr=ucwords(htmlentities($_POST['jmlh_sdr']));
		$alamat=(ucwords(strtolower(htmlentities($_POST['alamat']))));
		$rt=ucwords(htmlentities($_POST['rt']));
		$rw=ucwords(htmlentities($_POST['rw']));
		$dusun=ucwords(htmlentities($_POST['dusun']));
		$desa=ucwords(htmlentities($_POST['desa']));
		$kec=ucwords(htmlentities($_POST['kec']));
		$kab=ucwords(htmlentities($_POST['kab']));		
		$kodepos=ucwords(htmlentities($_POST['kodepos']));
		$email=ucwords(htmlentities($_POST['email']));
		$telp=ucwords(htmlentities($_POST['telp']));
		$tb=ucwords(htmlentities($_POST['tb']));
		$bb=ucwords(htmlentities($_POST['bb']));
		$jarak_sek=ucwords(htmlentities($_POST['jarak_sek']));
		$wktu_tmpuh=ucwords(htmlentities($_POST['wktu_tmpuh']));
		$id=$_POST['id'];
			//echo "tidak pilih ok";
			//kalo gambar di ganti
			if ($nis=="" || $nama_siswa=="" )//periksa jika data yang dimasukan belum lengkap
			{
				?><script> document.location.href='home_siswa.php?page=2&id=<?php echo $id; ?>&status=<font color=red>Maaf, Data Anda belum lengkap</font>'; </script>;<?php
			}else{
			$upload=mysqli_query($koneksi,"UPDATE data_siswa SET kelas='$kelas', nama_siswa='$nama_siswa', kelamin='$kelamin', nisn='$nisn', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', agama='$agama', anak_ke='$anak_ke', status='$status', jmlh_sdr='$jmlh_sdr', alamat='$alamat', rt='$rt', rw='$rw', dusun='$dusun', desa='$desa', kec='$kec', kab='$kab', kodepos='$kodepos', email='$email', telp='$telp', tb='$tb', bb='$bb', jarak_sek='$jarak_sek', wktu_tmpuh='$wktu_tmpuh', now=now() where nis='$nis'");
			?><script> document.location.href='home_siswa.php?page=3&status=Data Berhasil di simpan.'; </script>";<?php
			}
	}
	else
	{
		unset($_POST['nis']);
	}
	?>


	<html>
	<head>
	<meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<title>Data Siswa</title>
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
		$tampil=mysqli_query($koneksi,"select * from data_siswa where nis='$nis'");
		while ($row=mysqli_fetch_array($tampil))
		{
			$id=$row['id'];
			$nis=$row['nis'];
			$kelas=$row['kelas'];
			$nama_siswa=$row['nama_siswa'];
			$kelamin=$row['kelamin'];
			$nisn=$row['nisn'];
			$tmp_lahir=$row['tmp_lahir'];
			$tgl_lahir=$row['tgl_lahir'];
			$agama=$row['agama'];
			$anak_ke=$row['anak_ke'];
			$status=$row['status'];
			$jmlh_sdr=$row['jmlh_sdr'];
			$alamat=$row['alamat'];
			$rt=$row['rt'];
			$rw=$row['rw'];
			$dusun=$row['dusun'];
			$desa=$row['desa'];
			$kec=$row['kec'];
			$kab=$row['kab'];
			$kodepos=$row['kodepos'];
			$email=$row['email'];
			$telp=$row['telp'];
			$tb=$row['tb'];
			$bb=$row['bb'];
			$jarak_sek=$row['jarak_sek'];
			$wktu_tmpuh=$row['wktu_tmpuh'];
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
	<script language="javascript">
    function hanyaAngka(e, decimal) {
    var key;
    var keychar;
     if (window.event) {
         key = window.event.keyCode;
     } else
     if (e) {
         key = e.which;
     } else return true;
  
    keychar = String.fromCharCode(key);
    if ((key==null) || (key==0) || (key==8) ||  (key==9) || (key==13) || (key==27) ) {
        return true;
    } else
    if ((("0123456789").indexOf(keychar) > -1)) {
        return true;
    } else
    if (decimal && (keychar == ".")) {
        return true;
    } else return false;
    }
	</script>
		<meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Data Pokok Siswa SMAN 2 Tuban</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		
		
		</head>

		<h2 align="center" class="style2"><font color='#0066FF' face='verdana' size='2'>
        </font></h2>
	    </font></p>
		
		
		
						
						
  <form name="postform" enctype="multipart/form-data" action="edit_siswa2.php?id=<?php echo $id; ?>" method="post">
	<table width="800" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#009933">
	<tr>
		<td bgcolor="#B0C4DE">
			<table width="790" cellspacing="0" cellpadding="0" border="0" align="center">
			<tr>
			<td width="2%">&nbsp;</td>
			<input type="hidden" name="id" value="<?php echo $id;?>" >
			<td></td>
			<td></td>
			<td width="36%" rowspan="12"><font face="Times New Roman" size="2"></textarea></font><font face="Times New Roman" size="2"></textarea>
			<p>&nbsp;</p><p>&nbsp;</p>
			</td>
			</tr>
			
			<tr>
			<td width="2%">          
			<td width="20%" height="30"><font face="calibri" size="4" ><b>Data Siswa </font>
			<td width="42%"><font face="verdana" size="2" color="#666666"><?php //echo $tanggal;?></font></td>
			<td width="36%">&nbsp;</td>
			
			<div>
			</tr>
			
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">NIS</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
		      <input type="text" name="nis" cols="30" rows="1" value="<?php echo $nis;?>" size=2" readonly="readonly">
		    </font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Kelas</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="kelas" size="1" id="kelas" value="<?php echo $kelas;?>">
				<option selected="selected"><?php echo $kelas;?></option>
            	<option>XII IPA A</option>
                <option>XII IPA B</option>
				<option>XII IPA C</option>
				<option>XII IPA D</option>
				<option>XII IPS A</option>
				<option>XII IPS B</option>
				<option>XII IPS C</option>
				<option>XII IPS D</option>
            </select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Nama Siswa </span>      </td>
			<td><font face="Times New Roman" size="2">
		    <input name="nama_siswa" type="text" value="<?php echo stripslashes($nama_siswa);?>" size="50" rows="1"><div><div>
			<span><i>( Sesuai Ijazah SMP )</i></span><div>
			</font></td>
			</tr>
			
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">Jenis Kelamin</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
		       <input type="radio" name="kelamin" value="L"/>&nbsp;L &nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" name="kelamin" value="P"/>&nbsp;P
		    </font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22" ><span class="style10">NISN</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="nisn" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $nisn;?>" size="10" rows="1"><br><span><i>Silahkan cek di <a href="http://nisn.data.kemdikbud.go.id/page/data"target="_blank" ><strong>http://nisn.data.kemdikbud.go.id/page/data</strong></i></span>
			</font></td>
			
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Tempat Lahir</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="tmp_lahir" type="text" value="<?php echo $tmp_lahir;?>" size="10" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Tanggal Lahir</span></td> <td><input type="text" size="10" value="<?php echo $tgl_lahir;?>"  id="from" name="tgl_lahir" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.from);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
			</tr>
									
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Agama</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="agama" size="1" id="agama" value="<?php echo $agama;?>">
				<option selected="selected"><?php echo $agama;?></option>
				<option>Islam</option>
                <option>Kristen</option>
				<option>Katholik</option>
				<option>Hindu</option>
				<option>Budha</option>				
            </select>
			</font></td>
			</tr>
						
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">Anak Ke</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
				<input type="text" name="anak_ke" onkeypress="return hanyaAngka(event, false)" cols="30" rows="1" size="2" value="<?php echo $anak_ke;?>">
				</font></td>
			</tr> 
					
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Status</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="status" size="1" id="status" value="<?php echo $status;?>">
				<option selected="selected"><?php echo $status;?></option>
				<option>Anak Kandung</option>
                <option>Anak Angkat</option>
				<option>Anak Tiri</option>
            </select>
			</font></td>
			</tr>
			
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">Jumlah Saudara</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
				<input type="text"name="jmlh_sdr" onkeypress="return hanyaAngka(event, false)" cols="30" rows="1" size="2" value="<?php echo $jmlh_sdr;?>">
				</font></td>
			</tr> 
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"align="left"><span class="style10">Alamat Rumah</span></td>
			<td></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jalan</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="alamat" type="text" value="<?php echo $alamat;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RT</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="rt" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $rt;?>" size="2" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RW</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="rw" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $rw;?>" size="2" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dusun</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="dusun" type="text" value="<?php echo $dusun;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desa</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="desa" type="text" value="<?php echo $desa;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kecamatan</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="kec" type="text" value="<?php echo $kec;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kabupaten</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="kab" type="text" value="<?php echo $kab;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kode Pos</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="kodepos" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $kodepos;?>" size="10" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="email" type="text" value="<?php echo $email;?>" size="50" rows="1">
			</font></td>
			</tr>
													
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">Telephon/No. HP</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
				<input type="text"name="telp" onkeypress="return hanyaAngka(event, false)" cols="30" rows="1" size="10" value="<?php echo $telp;?>">
				</font></td>
			</tr> 
		
			<tr>
			<td>&nbsp;</td>
			<td height="11"><span class="style10">Tinggi Badan (cm)</span></td>
			<td><font face="Times New Roman" size="2">
		    <input type="text" name="tb" onkeypress="return hanyaAngka(event, false)" cols="30" rows="1" size="2" value="<?php echo $tb;?>">
			</font></td>
			</tr>
		  
			<tr>
			<td>&nbsp;</td>
			<td height="11"><span class="style10">Berat Badan (Kg)</span></td>
			<td><font face="Times New Roman" size="2">
		    <input type="text"name="bb" onkeypress="return hanyaAngka(event, false)" cols="30" rows="1" size="2" value="<?php echo $bb;?>">
			</font></td>
			</tr>
		  
			<tr>
			<td>&nbsp;</td>
			<td height="11"><span class="style10">Jarak Ke Sekolah</span></td>
			<td><font face="Times New Roman" size="2">
		    <input type="text"name="jarak_sek" onkeypress="return hanyaAngka(event, false)" cols="30" rows="1" size="2" value="<?php echo $jarak_sek;?>">&nbsp;&nbsp;Km
			</font></td>
			</tr>
						
			<tr>
			<td>&nbsp;</td>
			<td height="11"><span class="style10">Waktu Tempuh</span></td>
			<td><font face="Times New Roman" size="2">
				<input name="wktu_tmpuh" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $wktu_tmpuh;?>" size="2" rows="1" >&nbsp;&nbsp;Menit
				</font></td>
			</tr>
		  	
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%"><p>&nbsp;</p>
				<p>&nbsp;</p></td>
		    <td width="42%"><br><input type="submit" value="Lanjut">
				<input type="button" name="batal" value="Batal" onClick="location.replace('home_siswa.php?page=1');" /></td>
			<td width="36%">&nbsp;</td>
			</tr>
			
			<tr>
			<td width="2%" valign="middle">&nbsp;</td>
			<td width="20%" height="33" valign="middle"></td>
			<td><font color='#0066FF' face='verdana' size='2'><div align="left"><blink><?php echo $_GET['status'] ?></blink></div></td>
			<td>&nbsp;</td>
			</tr>
			
		</table></td>
		</tr>
	</table>
	</form>
		<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
		</iframe>
	</body>
	</html>
	<?php
}else{
	echo "<script> document.location.href='akses_siswa.php?go=session'; </script>";
}
?>