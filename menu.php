<html>
<head>
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

		<title>Mini-Tab Preview</title>
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
<li><a href="home.php?page=1">Home</a></li>
<li><a href="home.php?page=5">Data Siswa </a></li>

<li><a href="home.php?page=4">Input Siswa</a></li>
<li><a href="home.php?page=3">Laporan</a></li>
<li><a href="home.php?page=2">Profil</a></li>



<li><a class="active" href="#" title="Keluar" onClick="logout()">Logout</a></li>
          </ul>
</div>
        </body>
</html>