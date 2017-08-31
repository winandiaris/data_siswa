	<?php session_start(); 
	include "conn.php";
	if(isset($_SESSION['id']))
	{
	?>
	<html> 
	<head> 
	<title>Edit Artikel</title>
	
	<table width="800" border="1" cellpadding="0" cellspacing="0" bordercolor="#99CC99" align="center">
		<tr> 
			<td width="2%" align="right"><img src="./img/kiri.jpg"></td>
			<td width="96%" bgcolor="#9CCE17" ><div align="left"><strong><font face="verdana" size="2" color="#FFFFFF">DAFTAR DATA SISWA</font></strong></div></td>
			<td width="2%"><img src="./img/kanan.jpg"></td>
		</tr>
	
		<tr>   
			<td background="./img/b-kiri.jpg"></td>
			<td>  
				<table width="800" align="center"> 
					<tr><td width="800">     
							
					<div align="center"><p align="right">&nbsp;</p>
						<font color='#0066FF' face='verdana' size='2'><div align="center"><blink><?php echo $_GET['status'] ?></blink></div></font>
					<div align="left"> <font size="2" face="verdana"><a href="home.php?page=4">TAMBAH DATA</a></font></div>
				    </div>
				   <div align="left"></div>
				   <div align="left"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
		           <?php
				//untuk paging
				$query=mysqli_query($koneksi,"select * from data_siswa WHERE nis='9497' order by nis asc"); //input
				$get_pages=mysqli_num_rows($query);
				
				if ($get_pages>10)  //proses
				{
					echo "Halaman : ";
					$pages=1;
					while($pages<=ceil($get_pages/10))
					{
						if ($pages!=1)
						{
							echo " | ";
						}
					?>
				     <a href="home.php?page=3&nis=<?php echo ($pages-1); ?> " style="text-decoration:none"><font color="#0066FF"><?php echo $pages; ?></font></a> 
				        <?php
							$pages++;
					}
				}else{
					$pages=0;
				}
				?>
				     </font>
				     </p>
				     
				     <?php
				//akhir paging
				
				
				//proses halaman
				$page=(int)$_GET['nis'];
				$offset=$page*10;
				$result=mysqli_query($koneksi, "select * from data_siswa order by nis asc limit $offset,10"); //output
				$jumlah=mysqli_num_rows($query);
					
				
				if ($jumlah){
					?>
			       </div>
				<table align="center" width="800" border="0">
				<tr>
				  <td width="8%" height="24" background="img/bg_header.gif" bgcolor="#CCCCCC"><div align="center"><font color="#000000"><b><font size="2" face="Arial, Helvetica, sans-serif">Foto</font></b></font></div>
				  <td width="18%" background="img/bg_header.gif" bgcolor="#CCCCCC"><div align="center"><font color="#000000"><b><font size="2" face="Arial, Helvetica, sans-serif">NIS</font></b></font></div>				  </td>
				  <td width="20%" background="img/bg_header.gif" bgcolor="#CCCCCC"><div align="center"><font color="#000000"><b><font size="2" face="Arial, Helvetica, sans-serif">NAMA SISWA </font></b></font></div>				  </td>
				  <td width="14%" background="img/bg_header.gif" bgcolor="#CCCCCC"><div align="center"><font color="#000000"><b><font size="2" face="Arial, Helvetica, sans-serif">KELAS</font></b></font></div>				  </td>
				  <td width="14%" background="img/bg_header.gif" bgcolor="#CCCCCC"><div align="center"><font color="#000000"><b><font size="2" face="Arial, Helvetica, sans-serif">ALAMAT</font></b></font></div>
				  <td width="7%" background="img/bg_header.gif" bgcolor="#CCCCCC"><b><font color="#000000" size="2" face="Arial, Helvetica, sans-serif">TELP</font></b>
				  <td width="15%" background="img/bg_header.gif" bgcolor="#CCCCCC"><div align="center"><font color="#000000"><b><font size="2" face="Arial, Helvetica, sans-serif">EDIT</font></b></font></div>				  </td>
				</tr>
					<?php
					
					while ($row=mysqli_fetch_array($result))
					{
					?>
					<tr>
						<td align="center">
							<?php 
							$gambar=$row['gambar'];	
							$pic=substr($gambar,15,40); 
							?>
						<img src="./gambar/<?php echo $pic; ?>" width="50" height="50" border="0">						
						</td>
						<td align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#333333"><?php echo $row['nis'];?></font></font></td>
						<td align="left"><font face="Arial, Helvetica, sans-serif" size="2" color="#333333"><?php echo $row['nama_siswa'];?></font></td>
						<td align="left"><font face="Arial, Helvetica, sans-serif" size="2" color="#333333"><?php echo $row['kelas'];?></font></td>
						<td align="left"><div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#333333"><?php echo $row['alamat'];?></font> </div></td>
						<td align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#333333"><?php echo $row['telp'];?></font></td>
						<td align="center">
						<script language="javascript">
							function buka_popup(){
							window.open('identitas2.php', '', 'width=640, height=480, menubar=yes,location=yes,scrollbars=yes, resizeable=yes, status=yes, copyhistory=no,toolbar=no');
							}
						</script>
							<a href=identitas2.php?&nis=<?php echo  $row['nis']; ?> style='text-decoration:none' title="Cetak : <?php echo $row['nis'];?>">
							<img src="./img/print.png" border="0"></a>&nbsp;
							<a href=home.php?page=5&nis=<?php echo $row[0]; ?> style='text-decoration:none' title="Update terakhir : <?php echo $row['nis'];?>">
							<img src="./img/update.png" border="0"></a>&nbsp;
							<a href=delete.php?nis=<?php echo $row[0]; ?> onclick="return confirm('Yakin mau di hapus?');"&gambar=<?php echo $pic; ?>&type=siswa&hal=home.php?page=3 style='text-decoration:none' title="hapus">
							<img src="./img/publish_x.png" width="16" height="16" border="0"></a>						
							
							</td
							>
							
					</tr>
					<tr>
						<td colspan="8"><hr color="#CCCCCC"></td>
					</tr>
					<?php
					}
					?> 
				   </table>
				   <?php
				
				}else{
					echo "<font color='#FF0000' face='verdana' size='2'><b>Belum ada data!!</b></font>";
				}
				?>
				</td></tr> 
		  </table>
		</td>
		<td background="./img/b-kanan.jpg"></td>
	</tr>
	<tr> 
		<td align="right"><img src="./img/kib.jpg"></td>
		<td bgcolor="#9ECE18" ><div align="left"><font face="verdana" size="2" color="#FFFFFF">Jumlah Artikel : <strong><b>.</strong></font></div></td>
		<td><img src="./img/kab.jpg"></td>
	</tr>
	</table>
    <p>&nbsp;</p>
    
	<?php	
	}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
	}
	?>