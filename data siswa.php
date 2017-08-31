<?php  
include("conn.php"); 
if(isset($_SESSION['id'])) 
?>  
<html>  
<head>  
<title>Pencarian Berdasarkan Kategori</title>  
<link href="css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-1.4.js"></script>
<script type="text/javascript" src="jquery.validate.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $("#form").validate({
                rules: {
                  txtsearch: "required",
                  kategori: "required"
                },
             
        messages: { 
                 txtsearch: {
                    required: ''
                },
                  kategori: {
                    required: ''
                },
        },
                success: function(label) {
            label.text('').addClass('valid');
         }
            });
        });
    </script>
</head>  
<body>  
<form method="POST" action=home.php?page=5&nis=<?php echo $nis; ?> id="form">  
<label for="txtsearch">Cari: <input type="text" name="cari">  
<select name="kategori">  
  <option value="kelas">Kelas</option>  
  <option value="nama_siswa">Nama Siswa</option>  
  <option value="nis">NIS</option>  
</select>   
<input type="submit" value="Cari" name="submit"/>  
   
<?php  
  if (isset($_POST['submit'])) {
   $search = $_POST['cari'];  
   $kategori = $_POST['kategori'];  
   $nis=$_POST['cari'];  
   
   $sql = "SELECT * FROM data_siswa WHERE $kategori LIKE '%$search%'";
   //$nis = $row['nis'];
   $i=1;
   $result = mysqli_query($koneksi,$sql) or die('Error, list skripsih failed. ' . mysqli_connect_error());  
       
   if (mysqli_num_rows($result) == 0) {  
    echo '<p></p><p>Pencarian tidak ditemukan</p>';  
   } else {  
    echo '<p></p>';  
    while ($row = mysqli_fetch_array($result)) {  
     extract($row);  
     echo '<table border="1" align = "left" >';
     echo '<tr><td valign="top" width="20px" rowspan="6">'.$i.'</td></tr>';  
     echo '<tr><td valign="top">NIS</td><td valign="top">: </td><td valign="top">'.$nis.'</td></tr>';  
     echo '<tr><td width="150px" valign="top">Nama Siswa</td><td valign="top">:</td> <td valign="top">'.$nama_siswa.'</td></tr>';  
     echo '<tr><td valign="top">Kelas</td><td valign="top">: </td><td valign="top">'.$kelas.'</td></tr>';  
     echo '<tr><td valign="top">Jenis Kelamin</td><td valign="top">: </td><td valign="top">'.$kelamin.'</td></tr>';?>
            
     <tr><td align="left">  <a href=identitas2.php?&nis=<?php echo $nis; ?> style='text-decoration:none' title="Cetak : <?php echo $row['nis'];?>">
              <img src="./img/print.png" border="0"></a>&nbsp;
              <a href=delete.php?nis=<?php echo $nis; ?> onclick="return confirm('Yakin mau di hapus?');"&gambar=<?php echo $pic; ?>&type=siswa&hal=home.php?page=3 style='text-decoration:none' title="hapus">
              <img src="./img/publish_x.png" width="16" height="16" border="0"></a>
              
  </td></tr>  
   <?php
   
     $i++;
     echo '</table>';
     echo '<p></p>';
    }
   }
  }  
?> 
</form>  
<script language="javascript">
              function buka_popup(){
              window.open('identitas2.php?&nis=<?php echo $nis; ?>', '', 'width=640, height=480, menubar=yes,location=yes,scrollbars=yes, resizeable=yes, status=yes, copyhistory=no,toolbar=no');
              }
            </script>
</body>  
</html>