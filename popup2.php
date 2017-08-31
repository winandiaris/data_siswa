<html>
<head>
<title>Ini Window Ke 2</title>
</head>
<body>
<p>Jika anda dapat melihat saya maka anda berhasil</p>
<p><a href="javascript: window.close()">Tutup Window[X]</a><p>
<script language="javascript">
		window.print()
		window.close()
		javascript:history.back()
		</script>
		<a href=delete.php?&nis=<?php echo $row['nis'];?>< onclick="return confirm('Yakin mau di hapus?');">|| hapus ||</a>
</body>
</html>