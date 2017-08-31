<? session_start();
include "conn.php";
if(isset($_SESSION['id']))
{
	$nama=$_GET['nama'];
	$userid=$_GET['userid'];
	
		
	if (isset($_POST['ubah']))
	{
		$iduser=$_POST['iduser'];
		$status=$_POST['status'];
		
		//update yang di tabel pemesanan
		$ubahpesan=mysql_query("update pemesanan set status='$status' where iduser='$iduser'",$koneksi);
		
		//update yang di tabel laporan
		$ubah=mysql_query("update laporan set status='$status' where iduser='$iduser'",$koneksi);
		if($ubah){
			echo "<script> document.location.href='home.php?page=7'; </script>";
		}else{
			echo "gagal";
		}
		
	}else{
		unset($_POST['simpan']);
	}
?>
	<form action="home.php?page=4" method="post">
	<font face="verdana" size="2">Ganti status pemesanan untuk pelanggan :  <? echo $nama;?></font><br /><br><br /> 
	<input type="hidden" name="iduser" value="<? echo $iduser;?>" />
	<select name="status">
		<option value="lunas">Lunas
		<option value="proses">Proses
	</select>
	<input type="submit" value="Ubah" name="ubah">		
	</form>
	<a href="home.php?page=7" title="Kembali"><img src="./img/back.png" alt="d" border="0" /></a>
<?
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>