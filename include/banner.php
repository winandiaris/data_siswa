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
	&nbsp;
	
	</body>
	</html>
<?php
}else{
	echo "<script> document.location.href='konfirmasi.php?id=session'; </script>";
}
?>