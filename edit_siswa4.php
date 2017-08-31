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
		$ayah=addslashes(strtoupper(htmlentities($_POST['ayah'])));
		$nik_ayah=ucwords(htmlentities($_POST['nik_ayah']));
		$ibu=addslashes(strtoupper(htmlentities($_POST['ibu'])));
		$nik_ibu=ucwords(htmlentities($_POST['nik_ibu']));
		$alm_ortu=ucwords(htmlentities($_POST['alm_ortu']));
		$telp_ortu=ucwords(htmlentities($_POST['telp_ortu']));
		$thn_lahir_ayah=ucwords(htmlentities($_POST['thn_lahir_ayah']));
		$tahun_lahir_ibu=ucwords(htmlentities($_POST['tahun_lahir_ibu']));
		$pend_ayah=ucwords(htmlentities($_POST['pend_ayah']));
		$pend_ibu=ucwords(htmlentities($_POST['pend_ibu']));
		$krj_ayah=ucwords(htmlentities($_POST['krj_ayah']));
		$krj_ibu=ucwords(htmlentities($_POST['krj_ibu']));
		$gaji_ayah=ucwords(htmlentities($_POST['gaji_ayah']));
		$gaji_ibu=ucwords(htmlentities($_POST['gaji_ibu']));
		$nama_wali=addslashes(strtoupper(htmlentities($_POST['nama_wali'])));
		$alm_wali=ucwords(htmlentities($_POST['alm_wali']));
		$telp_wali=ucwords(htmlentities($_POST['telp_wali']));
		$thn_lahir_wali=ucwords(htmlentities($_POST['thn_lahir_wali']));
		$pend_wali=ucwords(htmlentities($_POST['pend_wali']));
		$kerja_wali=ucwords(htmlentities($_POST['kerja_wali']));
		$gaji_wali=ucwords(htmlentities($_POST['gaji_wali']));
	
			$upload=mysqli_query($koneksi,"UPDATE data_siswa SET ayah='$ayah', nik_ayah='$nik_ayah', ibu='$ibu', nik_ibu='$nik_ibu', alm_ortu='$alm_ortu', telp_ortu='$telp_ortu', thn_lahir_ayah='$thn_lahir_ayah',tahun_lahir_ibu='$tahun_lahir_ibu', pend_ayah='$pend_ayah', pend_ibu='$pend_ibu', krj_ayah='$krj_ayah', krj_ibu='$krj_ibu', gaji_ayah='$gaji_ayah', gaji_ibu='$gaji_ibu', nama_wali='$nama_wali', alm_wali='$alm_wali', telp_wali='$telp_wali', thn_lahir_wali='$thn_lahir_wali', pend_wali='$pend_wali', kerja_wali='$kerja_wali', gaji_wali='$gaji_wali' where nis='$nis'");
			?><script> document.location.href='home_siswa.php?page=1&status=Data Berhasil di simpan.'; </script>";<?php
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
			$ayah=$row['ayah'];
			$nik_ayah=$row['nik_ayah'];
			$ibu=$row['ibu'];
			$nik_ibu=$row['nik_ibu'];
			$alm_ortu=$row['alm_ortu'];
			$telp_ortu=$row['telp_ortu'];
			$thn_lahir_ayah=$row['thn_lahir_ayah'];
			$tahun_lahir_ibu=$row['tahun_lahir_ibu'];
			$pend_ayah=$row['pend_ayah'];
			$pend_ibu=$row['pend_ibu'];
			$krj_ayah=$row['krj_ayah'];
			$krj_ibu=$row['krj_ibu'];
			$gaji_ayah=$row['gaji_ayah'];
			$gaji_ibu=$row['gaji_ibu'];
			$nama_wali=$row['nama_wali'];
			$alm_wali=$row['alm_wali'];
			$telp_wali=$row['telp_wali'];
			$thn_lahir_wali=$row['thn_lahir_wali'];
			$pend_wali=$row['pend_wali'];
			$kerja_wali=$row['kerja_wali'];
			$gaji_wali=$row['gaji_wali'];
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
  <form name="postform" enctype="multipart/form-data" action="edit_siswa4.php?id=<?php echo $nis; ?>" method="post">
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
			<td width="20%" height="30" colspan="2"><font face="calibri" size="3" color=""><b>Data Orang Tua Siswa</font>
			<td width="42%"><font face="verdana" size="2" color="#666666"><?php //echo $tanggal;?></font></td>
			<td width="36%">&nbsp;</td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Nama Ayah </span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="ayah" type="text" value="<?php echo $ayah;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">N I K Ayah </span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="nik_ayah" type="text" value="<?php echo $nik_ayah;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Nama Ibu</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="ibu" type="text" value="<?php echo $ibu;?>" size="50" rows="2">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">N I K Ibu </span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="nik_ibu" type="text" value="<?php echo $nik_ibu;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Alamat Orang Tua</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="alm_ortu" type="text" value="<?php echo $alm_ortu;?>" size="50" rows="2">
			</font></td>
			</tr>
				
			<tr>
			<td>&nbsp;</td>
			<td height="11"><span class="style10">Telephon Orang Tua</span></td>
			<td><font face="Times New Roman" size="2">
				<input name="telp_ortu" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $telp_ortu;?>" size="15" rows="1" >
				</font></td>
			</tr>
				
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Tahun Lahir Ayah</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="thn_lahir_ayah" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $thn_lahir_ayah;?>" size="4" rows="1">
			</font></td>
			</tr>
				
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Tahun Lahir Ibu</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="tahun_lahir_ibu" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $tahun_lahir_ibu;?>" size="4" rows="1">
			</font></td>
			</tr>
						
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Pendidikan Ayah</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="pend_ayah" size="1" id="tinggal_di" value="<?php echo $pend_ayah;?>">
				<option selected="selected"><?php echo $pend_ayah;?></option>
				<option>SD Sederajat</option>
                <option>SMP Sederajat</option>
				<option>SMA Sederajat</option>
				<option>D1</option>
				<option>D2</option>
				<option>D3</option>
				<option>D4</option>
				<option>S1</option>
				<option>S2</option>
				<option>S3</option>
				<option>Tidak Sekolah</option>
			</select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Pendidikan Ibu</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="pend_ibu" size="1" id="tinggal_di" value="<?php echo $pend_ibu;?>">
				<option selected="selected"><?php echo $pend_ibu;?></option>
				<option>SD Sederajat</option>
                <option>SMP Sederajat</option>
				<option>SMA Sederajat</option>
				<option>D1</option>
				<option>D2</option>
				<option>D3</option>
				<option>D4</option>
				<option>S1</option>
				<option>S2</option>
				<option>S3</option>
				<option>Tidak Sekolah</option>
			</select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Pekerjaan Ayah</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="krj_ayah" size="1" id="tinggal_di" value="<?php echo $krj_ayah;?>">
				<option selected="selected"><?php echo $krj_ayah;?></option>
				<option>Tidak Bekerja</option>
                <option>Nelayan</option>
				<option>Petani</option>
				<option>Peternak</option>
				<option>PNS/TNI/POLRI</option>
				<option>Karyawan Swasta</option>
				<option>Pedagang Kecil</option>
				<option>Pedagang Besar</option>
				<option>Wiraswasta</option>
				<option>Wirausaha</option>
				<option>Buruh</option>
				<option>Pensiunan</option>
				<option>TKI</option>
				<option>Meninggal</option>
				<option>Lainya</option>
			</select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Pekerjaan Ibu</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="krj_ibu" size="1" id="tinggal_di" value="<?php echo $krj_ibu;?>">
				<option selected="selected"><?php echo $krj_ibu;?></option>
				<option>Tidak Bekerja</option>
                <option>Nelayan</option>
				<option>Petani</option>
				<option>Peternak</option>
				<option>PNS/TNI/POLRI</option>
				<option>Karyawan Swasta</option>
				<option>Pedagang Kecil</option>
				<option>Pedagang Besar</option>
				<option>Wiraswasta</option>
				<option>Wirausaha</option>
				<option>Buruh</option>
				<option>Pensiunan</option>
				<option>TKI</option>
				<option>Meninggal</option>
				<option>Lainya</option>
			</select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Penghasilan  Ayah</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="gaji_ayah" size="1" id="tinggal_di" value="<?php echo $gaji_ayah;?>">
				<option selected="selected"><?php echo $gaji_ayah;?></option>
				<option>Kurang Dari Rp. 500.000</option>
                <option>Rp. 500.000 s/d Rp. 999.999</option>
				<option>Rp. 1.000.000 s/d Rp. 1.999.999</option>
				<option>Rp. 2.000.000 s/d Rp. 4.999.999</option>
				<option>Rp. 5.000.000 s/d Rp. 20.000.000</option>
				<option>Lebih Dari Rp. 20.000.000</option>
			</select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Penghasilan  Ibu</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="gaji_ibu" size="1" id="tinggal_di" value="<?php echo $gaji_ibu;?>">
				<option selected="selected"><?php echo $gaji_ibu;?></option>
				<option>Kurang Dari Rp. 500.000</option>
                <option>Rp. 500.000 s/d Rp. 999.999</option>
				<option>Rp. 1.000.000 s/d Rp. 1.999.999</option>
				<option>Rp. 2.000.000 s/d Rp. 4.999.999</option>
				<option>Rp. 5.000.000 s/d Rp. 20.000.000</option>
				<option>Lebih Dari Rp. 20.000.000</option>
			</select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"align="left" colspan="3"><span class="style10"><font face="calibri" size="3" color="blue"></font></span></td>
			<td></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"align="left" colspan="3"><span class="style10"><font face="calibri" size="3" color=""><b>Data Wali Siswa (Selain Orang Tua Kandung)</font></span></td>
			<td></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Nama Wali</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="nama_wali" type="text" value="<?php echo $nama_wali;?>" size="50" rows="1">
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Alamat Wali</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="alm_wali" type="text" value="<?php echo $alm_wali;?>" size="50" rows="2">
			</font></td>
			</tr>
				
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Tahun Lahir Wali</span></td>
			<td><font face="Times New Roman" size="2">
		    <input name="thn_lahir_wali" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $thn_lahir_wali;?>" size="4" rows="1">
			</font></td>
			</tr>
				
			<tr>
			<td>&nbsp;</td>
			<td height="11"><span class="style10">Telephon Wali</span></td>
			<td><font face="Times New Roman" size="2">
				<input name="telp_wali" onkeypress="return hanyaAngka(event, false)" type="text" value="<?php echo $telp_wali;?>" size="10" rows="1" >
				</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Pendidikan Wali</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="pend_wali" size="1" id="pend_wali">
				<option selected="selected"><?php echo $pend_wali;?></option>
				<option>SD Sederajat</option>
                <option>SMP Sederajat</option>
				<option>SMA Sederajat</option>
				<option>D1</option>
				<option>D2</option>
				<option>D3</option>
				<option>D4</option>
				<option>S1</option>
				<option>S2</option>
				<option>S3</option>
				<option>Tidak Sekolah</option>
			</select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Pekerjaan Wali</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="kerja_wali" size="1" id="tinggal_di">
				<option selected="selected"><?php echo $kerja_wali;?></option>
				<option>Tidak Bekerja</option>
                <option>Nelayan</option>
				<option>Petani</option>
				<option>Peternak</option>
				<option>PNS/TNI/POLRI</option>
				<option>Karyawan Swasta</option>
				<option>Pedagang Kecil</option>
				<option>Pedagang Besar</option>
				<option>Wiraswasta</option>
				<option>Wirausaha</option>
				<option>Buruh</option>
				<option>Pensiunan</option>
				<option>TKI</option>
				<option>Meninggal</option>
				<option>Lainya</option>
			</select>
			</font></td>
			</tr>
			
			<tr>
			<td>&nbsp;</td>
			<td height="22"><span class="style10">Penghasilan  Wali</span></td>
			<td><font face="Times New Roman" size="2">
		    <select name="gaji_wali" size="1" id="gaji_wali" value="<?php echo $gaji_wali;?>">
				<option selected="selected"><?php echo $gaji_wali;?></option>
				<option>Kurang Dari Rp. 500.000</option>
                <option>Rp. 500.000 s/d Rp. 999.999</option>
				<option>Rp. 1.000.000 s/d Rp. 1.999.999</option>
				<option>Rp. 2.000.000 s/d Rp. 4.999.999</option>
				<option>Rp. 5.000.000 s/d Rp. 20.000.000</option>
				<option>Lebih Dari Rp. 20.000.000</option>
			</select>
			</font></td>
			</tr>
						
			<tr>
			<td width="2%">&nbsp;</td>
			<td width="20%"><p>&nbsp;</p>
				<p>&nbsp;</p></td>
		    <td width="42%"><br><input type="submit" value="Simpan">
			<input type="button" name="kembali" value="Kembali" onClick="location.replace('home_siswa.php?page=3');" />
				<input type="button" name="batal" value="Beranda" onClick="location.replace('home_siswa.php?page=1');" /></td>
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