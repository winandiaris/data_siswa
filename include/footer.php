<?php session_start();
//if (session_is_registered('id'))
	if(isset($_SESSION['id']))
{
?>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<font face="Verdana" size="1" color="#FF6600"><br>
	<font face="Verdana" size="1" color="#000000">Aplikasi Pendataan Siswa SMA Negeri 2 Tuban </font></font>
	</body>
	</html>
<?php
}else{
	echo "<script> document.location.href='konfirmasi.php?id=session'; </script>";
}
?>