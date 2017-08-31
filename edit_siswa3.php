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
		$sklh_asal=strtoupper(htmlentities($_POST['sklh_asal']));
		$almt_sek=ucwords(htmlentities($_POST['almt_sek']));
		$thn_ijzh=ucwords(htmlentities($_POST['thn_ijzh']));
		$nmor_ijzh=strtoupper(htmlentities($_POST['nmor_ijzh']));
		$thn_skhun=ucwords(htmlentities($_POST['thn_skhun']));
		$nmor_skhun=strtoupper(htmlentities($_POST['nmor_skhun']));
		$no_un=strtoupper(htmlentities($_POST['no_un']));
		$nik=ucwords(htmlentities($_POST['nik']));
		$akta=ucwords(htmlentities($_POST['akta']));
		$tinggal_di=ucwords(htmlentities($_POST['tinggal_di']));
		$alat_trans=ucwords(htmlentities($_POST['alat_trans']));	
		$kps=ucwords(htmlentities($_POST['kps']));
		$no_kps=ucwords(htmlentities($_POST['no_kps']));
		$jenis_bea=ucwords(htmlentities($_POST['jenis_bea']));
		$ket_bea=ucwords(htmlentities($_POST['ket_bea']));
		$thn_mulai=ucwords(htmlentities($_POST['thn_mulai']));
		$thn_slsai=ucwords(htmlentities($_POST['thn_slsai']));
		
			$upload=mysqli_query($koneksi,"UPDATE data_siswa SET sklh_asal='$sklh_asal', almt_sek='$almt_sek', thn_ijzh='$thn_ijzh', nmor_ijzh='$nmor_ijzh', thn_skhun='$thn_skhun', nmor_skhun='$nmor_skhun', no_un='$no_un', nik='$nik', akta='$akta', tinggal_di='$tinggal_di', alat_trans='$alat_trans', kps='$kps', no_kps='$no_kps', jenis_bea='$jenis_bea', ket_bea='$ket_bea', thn_mulai='$thn_mulai', thn_slsai='$thn_slsai' where nis='$nis'");
			?><script> document.location.href='home_siswa.php?page=4&status=Data Berhasil di simpan.'; </script>";<?php
	}
	else
	{
		unset($_POST['nis']);
	}
	?>


	<html>
	<head>
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
			$nis=$row['nis'];
			$sklh_asal=$row['sklh_asal'];
			$almt_sek=$row['almt_sek'];
			$thn_ijzh=$row['thn_ijzh'];
			$nmor_ijzh=$row['nmor_ijzh'];
			$thn_skhun=$row['thn_skhun'];
			$nmor_skhun=$row['nmor_skhun'];
			$no_un=$row['no_un'];
			$nik=$row['nik'];
			$akta=$row['akta'];
			$tinggal_di=$row['tinggal_di'];
			$alat_trans=$row['alat_trans'];
			$kps=$row['kps'];
			$no_kps=$row['no_kps'];
			$jenis_bea=$row['jenis_bea'];
			$ket_bea=$row['ket_bea'];
			$thn_mulai=$row['thn_mulai'];
			$thn_slsai=$row['thn_slsai'];
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
		
		</head>

		<h2 align="center" class="style2"><font color='#0066FF' face='verdana' size='2'>
        </font></h2>
	    </font></p>
  <form name="postform" enctype="multipart/form-data" action="edit_siswa3.php?id=<?php echo $nis; ?>" method="post">
	<table width="800" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#009933">
	<tr>
		<td bgcolor="#B0C4DE">
			<table width="735" cellspacing="0" cellpadding="0" border="0" align="center">
			
			<tr>
			<td width="2%">&nbsp;</td>
			<input type="hidden" name="nis" value="<?php echo $nis;?>" >
			<td></td>
			<td></td>
			<td width="36%" rowspan="12"><font face="Times New Roman" size="2"></textarea></font><font face="Times New Roman" size="2"></textarea>
			<p>&nbsp;</p><p>&nbsp;</p>
			</td>
			</tr>
			
			<tr>
			<td width="2%">          
			<td width="20%" height="30"><font face="calibri" size="3" ><b>Data Siswa </font>
			<td width="42%"><font face="verdana" size="2" color="#666666"><?php //echo $tanggal;?></font></td>
			<td width="36%">&nbsp;</td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Sekolah Asal </span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="sklh_asal" type="text" value="<?php echo $sklh_asal;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Alamat Sekolah</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="almt_sek" type="text" value="<?php echo $almt_sek;?>" size="50" rows="2">
			</font></td>
			</tr>
					
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Tahun Ijazah</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="thn_ijzh" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $thn_ijzh;?>" size="4" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="11"><span class="style10">Nomor Ijazah</span></td>
			<td><font face="Times New Roman" size="2">
				<input name="nmor_ijzh" type="text" value="<?php echo $nmor_ijzh;?>" size="19" rows="1" ><div><i>Contoh No. Ijazah : DN-05 DI xxxxxxx / MTs 130052518
				</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Tahun SKHUN</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="thn_skhun" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $thn_skhun;?>" size="4" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="11"><span class="style10">Nomor SKHUN</span></td>
			<td><font face="Times New Roman" size="2">
				<input name="nmor_skhun"   type="text" value="<?php echo $nmor_skhun;?>" size="19" rows="1" ><br><div><i>Contoh No. SKHUN : DN-05 DI xxxxxxx
				</font></td>
			</tr>
			
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">No. Peserta UN</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
		      <input type="text" name="no_un"  cols="30" rows="1" value="<?php echo $no_un;?>" size=19"><div><i>Contoh Nopes UN : 0-00-00-00-000-000-0 
		    </font></td>
			</tr>
			
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">N I K</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
		      <input type="text" name="nik" onkeypress="return hanyaAngka(event, false)" cols="30" rows="1" value="<?php echo $nik;?>" size=19">
		    </font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="11"><span class="style10">No. Reg. Akta Kelahiran</span></td>
			<td><font face="Times New Roman" size="2">
				<input name="akta"   type="text" value="<?php echo $akta;?>" size="19" rows="1" >
				</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Tinggal di</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="tinggal_di" size="1" id="tinggal_di" value="<?php echo $tinggal_di;?>">
				<option selected="selected"><?php echo $tinggal_di;?></option>
				<option>Asrama</option>
                <option>Bersama Orang Tua</option>
				<option>Kost</option>
			</select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Alat Tranportasi</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="alat_trans" size="1" id="alat_trans" value="<?php echo $alat_trans;?>">
				<option selected="selected"><?php echo $alat_trans;?></option>
				<option>Angkutan Umum</option>
                <option>Jalan Kaki</option>
				<option>Mobil/ Antar Jemput</option>
				<option>Sepeda</option>
				<option>Sepeda Motor</option>
			</select>
			</font></td>
			</tr>
			 
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">Penerima KPS</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
		       <input type="radio" name="kps" value="ya"/>Ya
				<input type="radio" name="kps" value="tidak"/>Tidak
		    </font></td>
			</tr>
			 
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%" height="22"><span class="style10">Nomor KPS Jika Menerima</span></td>
		    <td width="42%"><font face="Times New Roman" size="2">
		      <input type="text" name="no_kps" onkeypress="return hanyaAngka(event, false)" cols="30" rows="1" value="<?php echo $no_kps;?>" size=19">
		    </font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"align="left"><span class="style10"><font face="calibri" size="3" color=""><b>Beasiswa (Jika Ada)</font></span></td>
			<td></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Jenis Beasiswa</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="jenis_bea" size="1" id="jenis_bea" value="<?php echo $jenis_bea;?>">
				<option selected="selected"><?php echo $jenis_bea;?></option>
				<option>Tidak Ada</option>
				<option>Prestasi</option>
                <option>Pendidikan</option>
				<option>Unggulan</option>
				<option>Kemiskinan</option>
				<option>Lainya</option>
			</select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Keterangan Beasiswa </span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="ket_bea" type="text" value="<?php echo $ket_bea;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Tahun Mulai</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="thn_mulai" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $thn_mulai;?>" size="4" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Tahun Selesai</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="thn_slsai" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $thn_slsai;?>" size="4" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%"><p>&nbsp;</p>
				<p>&nbsp;</p></td>
		    <td width="42%"><br><input type="submit" value="Lanjut">
			<input type="button" name="kembali" value="Kembali" onClick="location.replace('home_siswa.php?page=2');" />
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