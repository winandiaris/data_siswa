<?php session_start();
if (isset($_POST['nis']))
{
	include ("conn.php");
	$nis=($_POST['nis']);//htmlentities((trim($_POST['admin'])));
		
	$login=mysqli_query($koneksi, "SELECT * from data_siswa where nis='$nis'");
	$cek_login=mysqli_num_rows($login);
	//$baris=mysqli_fetch_row($login);
		if (empty($cek_login))
		{
			echo "<script> document.location.href='akses_siswa.php?go=salah_password'; </script>";
		}
		else
		{
		//daftarkan ID jika user dan password BENAR
			while ($row=mysqli_fetch_array($login))
			{
				$id=$row[0];
				$nama=$row[2];
				$_SESSION['id'] = $id;
				$_SESSION['nis'] = $nis;
				$_SESSION['nama_siswa'] = $nama;
				$_SESSION['tanggal'] = $tanggal;
			}
			echo "<script> document.location.href='home_siswa.php'; </script>";
		}
}

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
        <title>Pendataan Siswa SMA Negeri 2 Tuban</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>Kembali ke Web SMAN 2 Tuban</strong>
                </a>
                <span class="right">
                    <a href=" http://www.smadatuban.sch.id">
                        <strong>Kembali ke Web SMAN 2 Tuban</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Pendataan Siswa SMA Negeri 2 Tuban <span>TP. 2017/2018</span></h1>
				<nav class="codrops-demos">
					
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
            <form  action="index.php" autocomplete="on" method="post"> 
				<div class="container">
				  <div class="login">
					<h1 class="login-heading">
					  <strong>Masukan No. </strong> UN SMP</h1>
					  <form method="post">
						
						<input type="text" name="nis" placeholder="contoh : 21705150010027" required="required" size = "14" class="input-txt" />
						  <div class="login-footer">
						<button type="submit" class="btn btn--right">Login </button>
						  </div>
					  </form>
				  </div>
				</div>
				<script src="js/index.js"></script>
			</form>
                        </div>

						<script language="javascript">
		function cek(){
			var user= document.getElementById('userid').value;
			if(user.replace(/^\s+|\s+$/g, '')==''){
				alert('Username Harus Diisi!');
				return false;
			} 
		}
		</script>
                       
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>