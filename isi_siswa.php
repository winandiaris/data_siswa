<?php
$page=$_GET['page'];

switch($page)
{
	case "1";
	include "welcome_siswa.php";
	break;
			
	case "2";
	include "edit_siswa2.php";
	break;
	
	case "3";
	include "edit_siswa3.php";
	break;
	
	case "4";
	include "edit_siswa4.php";
	break;
	
	case "5";
	include "lampiran.php";
	break;
	
	case "6";
	include "identitas.php";
	break;
	
	default;
	include "welcome_siswa.php";
	break;
}

?>