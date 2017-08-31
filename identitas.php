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
		<div style="text-align:left;"><a class="no-print" href="javascript:printDiv('print-area-1');"><font face="arial" size="3" color="blue" >
		<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cetak Data</font></a></div>	
        <div id="print-area-1" class="print-area">	 
				
			
			
			
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->	
			
				
				<h3 align = "center"><b>IDENTITAS PESERTA DIDIK</h3><br><br>           
	<div align="center">
	<b><font color="#009933" size="2" face="verdana"><?php //include "./include/waktu.php"; ?>
				</font></b><font color="#000080" size="2" face="verdana">
					
						
		<table border="0" width="600" cellpadding="0" style="border-collapse: collapse">
			
		<td>
			<?php
			$result = mysqli_query($koneksi, "SELECT * FROM data_siswa where nis='$nis'");
			while ($row=mysqli_fetch_row($result))
					{ 
					if (isset($_POST['save'])){
					  
					}
				?> 
				
			<tr height="28">
			<td valign="center" align="left" width="222"><font face="arial" size="2"><strong>&nbsp;&nbsp;1. Nama Lengkap</strong></font></td>
			<td ><?php echo ":&nbsp; ";?> </td>
			<td width="375"><font face="arial" size="2" color="black"><?php echo  stripslashes($row[2]);?></font></td>
			</tr>
			
			<tr height="25">
			<td width="100"><font face="arial" size="2"><strong>&nbsp;&nbsp;2. Nomor Induk / NISN</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="325"><font face="arial" size="2" color="black"><?php echo  $row[0]," / ", $row[4];?></font></td>
			</tr>
			
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;3. Tempat / Tanggal Lahir</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php
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
					echo  $row[5], ", ",indonesian_date ($tanggal);

					//echo $row[7];?></font>
			</td>
			</tr>
			
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;4. Jenis Kelamin</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black">
			<?PHP
				$d=$row[3];
				if ($d=="L")
				echo "Laki Laki";
				elseif ($d=="P")
				echo "Perempuan";
				else
				echo "";?></font></td>
			</tr>
			
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;5. Agama</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[7];?></font></td>
			</tr>
			
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;6. Status Dalam Keluarga</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[9];?></font></td>
			</tr>
			
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;7. Anak Ke</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[8];?></font></td>
			</tr>
			
			<tr height="25">
			<td valign = "top"><font face="arial" size="2"><strong>&nbsp;&nbsp;8. Alamat Peserta Didik</strong></font></td>
			<td valign = "top"><?php echo ": ";?> </td>
			<td width="277" align="justify"><font face="arial" size="2" color="black"><?php echo  " $row[11] RT. $row[12] RW. $row[13] Dsn. $row[14] Ds. $row[15] 
				Kec. $row[16] Kab. $row[17] ";?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;9. Nomor Telepon Rumah/HP</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[20];?></font></td>
			</tr>
					
			<tr height="25">
			<td><font face="arial" size="2"><strong>10. Sekolah Asal</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[28];?></font></td>
			</tr>
			
			<tr height="25">
			<td width="100"><font face="arial" size="2"><strong>11. Di Terima di SMA ini</strong></font></td>
			<td ></td>
			<td width="277"></td>
			</tr>
			
			<tr height="25">
			<td width="100"><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Di Kelas</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[1];?></font></td>
			</tr>
			
			<tr height="25">
			<td width="100"><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Pada Tanggal</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black">18 Juli 2016</font></td>
			</tr>
			
			<tr height="25">
			<td width="100"><font face="arial" size="2"><strong>12. Orang Tua</strong></font></td>
			<td ></td>
			<td width="277"></td>
			</tr>
															
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Ayah</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  stripslashes($row[44]);?></font></td>
			</tr>
					
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  stripslashes($row[45]);?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Alamat</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[46];?></font></td>
			</tr>
									
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. Nomor Telepon/HP</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[47];?></font></td>
			</tr>
				
			<tr height="25">
			<td width="100"><font face="arial" size="2"><strong>13. Orang Tua</strong></font></td>
			<td ></td>
			<td width="277"></td>
			</tr>
							
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Ayah</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[52];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Ibu</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[53];?></font></td>
			</tr>
				
			<tr height="25">
			<td width="100"><font face="arial" size="2"><strong>14. Orang Tua</strong></font></td>
			<td ></td>
			<td width="277"></td>
			</tr>
					
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Nama Wali</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[56];?></font></td>
			</tr>
							
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Nomor Telephon/HP</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[59];?></font></td>
			</tr>
						
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Alamat</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[57];?></font></td>
			</tr>
							
			<tr height="25">
			<td><font face="arial" size="2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. Pekerjaan</strong></font></td>
			<td ><?php echo ": ";?> </td>
			<td width="277"><font face="arial" size="2" color="black"><?php echo  $row[61];?></font></td>
			</tr>
			
			<tr height="25">
			<td width="100"></td>
			<td ></td>
			<td ></td>
			</tr>	
											
			<tr height="25">
			<td><font face="arial" size="2" color="black">Mengetahui</font></td>
			<td></td>
			<td width="277"><font face="arial" size="2" color="black"><?php
				function tglindo ($timestamp = '', $date_format = ' j F Y ', $suffix = '') {
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

					$tanggal = date('l, d-m-Y');//$row[67];
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;Tuban, ", tglindo ($tanggal);

					//echo $row[7];?></font></td>	
			
			</tr>	
							
			<tr height="25">
			<td><font face="arial" size="2" color="black">Orang Tua/Wali Peserta Didik</font></td>
			<td > </td>
			<td width="277"><font face="arial" size="2" color="black">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Peserta Didik</font></td>
			</tr>
							
			<tr height="80">
			<td valign = "bottom"><font face="arial" size="2" color="black">___________________________</font></td>
			<td > </td>
			<td width="277" valign = "bottom"><font face="arial narrow" size="2" color="black" align = "left" ><?php echo 
			"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			
			",$row[2];?></font></td>
						
	<?php			
	}
	?>
			</font>
		</td>		
	<tr>
	<td colspan="2">
	<br>
	<font face="verdana" size="1" color="black" onClick="window.print();">
	
	</font>
	
	<?php
	}else{
	echo "<script> document.location.href='akses_siswa.php?go=session'; </script>";
	}
	?></td>
	</tr>
	</table>	
</div>	

</div>


<textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="" style="display:none;"></iframe>

<script type="text/javascript">
     
    function printDiv(elementId) {
    var a = document.getElementById('print-area-1').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>
 </body>
 </html>
 