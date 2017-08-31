<?php
$page=$_GET['page'];

switch($page)
{
	case "1";
	include "welcome.php";
	break;
			
	case "2";
	include "edit-profil.php";
	break;
	
	case "3";
	include "tabel_siswa.php";
	break;
	
	case "4";
	include "input_siswa.php";
	break;
	
	case "5";
	include "daftar_siswa.php";
	break;
	
	case "6";
	include "identitas2.php";
	break;
	
	case "7";
	include "e.php";
	break;
		
	default;
	include "welcome.php";
	break;
}

?>