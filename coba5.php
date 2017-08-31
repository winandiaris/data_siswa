<?php
include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pencarian Berdasarkan Kategori di PHP</title>
<script src="selectdesa.js"></script>
</head>
<body>
<form method="POST" action="">
Search: <input type="text" name="txtsearch">
<select name="kategori_obat">
 <option value="nama_obat">Nama Obat</option>
 <option value="produk">Produk</option>
 <option value="indikasi">Indikasi</option>
 <option value="golongan_obat">Golongan Obat</option>
</select>
<input type="submit" value="Search" name="submit"/>

<?php
  if (isset($_POST['submit'])) {
   $search = $_POST['txtsearch'];
   $kategoriobat = $_POST['kategori_obat'];
   
   $sql = "SELECT * FROM data_siswa WHERE $kategoriobat LIKE '%$search%'";
   $result = mysqli_query($koneksi, 
   $sql) or die('Error, list obat failed. ' . mysqli_error());
    
   if (mysqli_num_rows($result) == 0) {
    echo '<p></p><p>Pencarian tidak ditemukan</p>';
   } else {
    echo '<p></p>';
    while ($row = mysqli_fetch_array($result)) {
     extract($row);
      
     echo '<p>Nama Obat: '.$nama_obat.'</p>';
     echo '<p>Produk: '.$produk.'</p>';
     echo '<p>Indikasi: '.$indikasi.'</p>';
     echo '<p>Golongan Obat: '.$golongan_obat.'</p>';
     echo '<p></p>';
    }
   }
  }
?>
</form>
</body>
</html>