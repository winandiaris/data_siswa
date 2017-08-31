<html>
<head>
<meta charset="UTF-8" />
<script language="javascript">
<!--
function logout()
{
	tanya=confirm("Apakah anda yakin akan keluar ?")
	if (tanya !="0")
	{
		top.location="logout.php"
	}
}
//-->
</script>

		<title>Peringatan</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style type="text/css">
<!--
.container {
        width: 1024px;
        padding: 6px;
        margin: 3px 0 20px 0;
        border: 1px solid #ccc;
        
}

/* pyramid */

#navPyra {
        margin: 0;
        padding: 0 0 20px 10px;
        border-bottom: 0px solid #9FB1BC;
}

#navPyra li {
        margin: 0;
        padding: 0;
        display: inline;
        list-style-type: none;
}

#navPyra a:link, #navPyra a:visited {
        float: center;
        font-size: 10px;
        line-height: 14px;
        font-weight: bold;
        padding: 0 12px 6px 12px;
        text-decoration: none;
        color: #708491;
}

#navPyra a:link.active, #navPyra a:visited.active, #navPyra a:hover {
        color: #000;
        background: url(downarrow.png) no-repeat bottom center;
}
-->
</style>
                <style type="text/css">
                <!--
/* code for presentation purpose (CSS preview) */
body {
        font-family: verdana, sans-serif;
        font-size: 11px;
}

h4 {
        font-size: 100%;
        color: #999;
        margin: 0;
}
                -->
                </style>
</head>

<body>
		<div class="container" style="width: 800px; height: 15px">
				<ul id="navPyra">
<!-- CSS Tabs -->

<li><a href="home_siswa.php?page=1" class="to_register" >Beranda</a></li>
<li><a href="home_siswa.php?page=2">Edit Data</a></li>
<li><a href="home_siswa.php?page=5">Unggah Lampiran</a></li>
<li><a href="home_siswa.php?page=6">Identitas Rapor</a></li>
<li><a class="active" href="#" title="Keluar" onClick="logout()">Keluar</a></li>

          </ul>
</div>
        </body>
</html>