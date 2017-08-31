<?php session_start();
//if (session_is_registered('id'))
	if(isset($_SESSION['id']))
{
	unset($_SESSION['id']);
	unset($_SESSION['userid']);
	unset($_SESSION['tanggal']);
	
	//session_destroy();
	echo "<script> document.location.href='index.php'; </script>";
	
}else{
	echo "<script> document.location.href='akses_siswa.php?go=session'; </script>";
}
?>