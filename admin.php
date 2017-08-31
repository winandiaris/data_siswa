<html>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>Login</title>
<p>&nbsp;</p>
<p>&nbsp;</p>
<link rel="stylesheet" type="text/css" href="css/style4.css"/>
</head>
<body >

	<table width="486" align="center" >
		<tr><td width="231"><font face="verdana" size="2">&nbsp;
		</font>
		 <script language="javascript">
		function cek(){
			var user= document.getElementById('userid').value;
			var pass= document.getElementById('passwd').value;
			if(user.replace(/^\s+|\s+$/g, '')==''){
				alert('Username Harus Diisi!');
				return false;
			} 
			if(pass.replace(/^\s+|\s+$/g, '')==''){
				alert('Password Harus diisi!');
				return false;
			}
			return true;
		}
		</script>
		<form action="index2.php" method="post">
		<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>smada <span>Tuban</span></div>
		</div>
		<br>
		<div class="login">
				<input type="text" placeholder="username" name="admin" id="userid"><br>
				<input type="password" placeholder="password" name="kunci" id="passwd"><br>
				<input type="submit" value="LOGIN" onClick="return cek()">
		</div>
		</form>				
		</td></tr>
	</table>
</body>
</html>