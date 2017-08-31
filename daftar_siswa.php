<?php  
include("conn.php"); 
include("tglindo.php"); 
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
<table border = 0 align="center">
        <tr><td width="300"> 
<select name="kategori" align= "left">  
  <option value="X MIPA A">X MIPA A</option>  
  <option value="X MIPA B">X MIPA B</option>  
  <option value="X MIPA C">X MIPA C</option>  
  <option value="X MIPA D">X MIPA D</option>  
  <option value="X IPS A">X IPS A</option>  
  <option value="X IPS B">X IPS B</option>  
  <option value="X IPS C">X IPS C</option> 
  <option value="X IPS D">X IPS D</option>  
  <option value="XI MIPA A">XI MIPA A</option>  
  <option value="XI MIPA B">XI MIPA B</option>  
  <option value="XI MIPA C">XI MIPA C</option>  
  <option value="XI MIPA D">XI MIPA D</option>  
  <option value="XI MIPA E">XI MIPA E</option> 
  <option value="XI IPS A">X IPS A</option>  
  <option value="XI IPS B">X IPS B</option>  
  <option value="XI IPS C">X IPS C</option> 
  <option value="XII MIPA A">XII MIPA A</option>  
  <option value="XII MIPA B">XII MIPA B</option>  
  <option value="XII MIPA C">XII MIPA C</option>  
  <option value="XII MIPA D">XII MIPA D</option>  
  <option value="XII MIPA E">XII MIPA E</option> 
  <option value="XII IPS A">XII IPS A</option>  
  <option value="XII IPS B">XII IPS B</option>  
  <option value="XII IPS C">XII IPS C</option> 
  </select>   
  <input type="submit" value="submit" name="submit"/></td>
 
   
<?php  
  if (isset($_POST['submit'])) {
   $search = $_POST['cari'];  
   $kategori = $_POST['kategori'];  
   $nis=$_POST['cari'];  
   
   $sql = "SELECT * FROM data_siswa WHERE kelas LIKE '%$kategori%' order by nis";
   $sql2 = "SELECT * FROM data_siswa WHERE kelas LIKE '%$kategori%' and kelamin='L' order by nis";
   $sql3 = "SELECT * FROM data_siswa WHERE kelas LIKE '%$kategori%' and kelamin='P' order by nis";

   $i=1;
   $result = mysqli_query($koneksi,$sql) or die('Error, list skripsih failed. ' . mysqli_connect_error());  
   $result2 = mysqli_query($koneksi,$sql2) or die('Error, list skripsih failed. ' . mysqli_connect_error());  
   $result3 = mysqli_query($koneksi,$sql3) or die('Error, list skripsih failed. ' . mysqli_connect_error());  
       $jumlah=mysqli_num_rows($result);
       $jumlahl=mysqli_num_rows($result2);
       $jumlahp=mysqli_num_rows($result3);
       ?>
        <td width="175">JUMLAH SISWA : <font color="blue" face="Bernard MT Condensed"><b><?php echo $jumlah;?></td>
        <td width="150">LAKI LAKI : <font color="blue" face="Bernard MT Condensed"><b><?php echo $jumlahl;?></td>
        <td width="150">PEREMPUAN : <font color="blue" face="Bernard MT Condensed"><b><?php echo $jumlahp;?></td>
        <td width="150"> </td></tr>
        </table>
<?php
   if (mysqli_num_rows($result) == 0) {  
    echo '<p></p><p>Pencarian tidak ditemukan</p>';  
   } else {  
   
    echo '<table border="1" cellpadding="1" cellspacing="1" bordercolor="#99CC99" align = "center" >';
    echo '';
    ?>
    <tr>
    <td align="center"><font face="arial narrow"><b>No.</td> 
    <td align="center"><font face="arial narrow"><b>NIS</td> 
    <td align="center"><font face="arial narrow"><b>KELAS</td> 
    <td align="center"><font face="arial narrow"><b>NAMA SISWA</td> 
    <td align="center"><font face="arial narrow"><b>L/P</td> 
    <td align="center"><font face="arial narrow"><b>NISN</td> 
    <td align="center"><font face="arial narrow"><b>Tempat & Tgl. Lahir</td> 
    <td align="center"><font face="arial narrow"><b>AGAMA</td> 
    
    <td align="center"><font face="arial narrow"><b>NAMA AYAH</td> 
    <td align="center"><font face="arial narrow"><b>NAMA IBU</td> 
    <td align="center"><font face="arial narrow"><b>AKSI</td> 
    </tr>
    <?php  
    while ($row = mysqli_fetch_array($result)) {  

     extract($row);  
    
     echo '<tr><td valign="center" align="center">  <FONT face="arial narrow" size ="3">'.$i.'</td>';  
     echo '<td valign="center" align="center"> <FONT face="arial narrow">'.$nis.'</td>';  
     echo '<td valign="center"  align="center"> <FONT face="arial narrow">'.$kelas.'</td>';  
	   echo '<td valign="center" > <FONT face="arial narrow">'.$nama_siswa.'</td>';  
     echo '<td valign="center" align="center" width="20px"> <FONT face="arial narrow">'.$kelamin.'</td>';  
     echo '<td valign="center" align="center"> <FONT face="arial narrow">'.$nisn.'</td>';  
          
     ?>
				<td><font face="arial narrow"><?php   echo ucfirst(strtolower($row[5]))?>,&nbsp<?php echo TanggalIndo($row[6]);  
      echo '<td valign="center" align="center" width = "45px" ><FONT face="arial narrow">'.$agama.'</td>';
      //echo '<td valign="center"  ><FONT face="arial narrow">'.$sklh_asal.'</td>';
      echo '<td valign="center"  ><FONT face="arial narrow">'.$ayah.'</td>';
      echo '<td valign="center"  ><FONT face="arial narrow">'.$ibu.'</td>';
             ?>

        </td>		
     <td align="left">	
     <a href=identitas2.php?&nis=<?php echo $nis; ?> style='text-decoration:none' title="Cetak : <?php echo $row['nis'];?>"><FONT face="arial narrow">	<img src="./img/print1.png" border="0" width="18px" height="18px" valign="bottom"></a>&nbsp;</a>&nbsp;
     <a href=home.php?page=5&nis=<?php echo $row[0]; ?> style='text-decoration:none' title="Update terakhir : <?php echo $row['nis'];?>">        <img src="./img/edit1.png" border="0" width="16px" height="16px" valign="bottom"></a>&nbsp;
							<a href=delete.php?nis=<?php echo $nis; ?> onclick="return confirm('Yakin mau di hapus?');"&gambar=<?php echo $pic; ?>&type=siswa&hal=home.php?page=3 style='text-decoration:none' title="hapus">
							 <img src="./img/hapus1.png" border="0" width="18px" height="18px" valign="bottom"></a>
               <a href=identitas2.php?&nis=<?php echo $nis; ?> target="_blank" style='text-decoration:none' title="Cetak : <?php echo $row['nis'];?>"><FONT face="arial narrow">  <img src="./img/cari1.png" border="0" width="18px" height="18px" valign="bottom"></a>&nbsp;
							
	</td> </tr>	
	 <?php
	 
     $i++;
    
     
    }
     echo '</font></table>';
     echo '<p></p><br>';
   }
  }  
?> <br>

</form>  
<script language="javascript">
							function buka_popup(){
							window.open('identitas2.php?&nis=<?php echo $nis; ?>', '', 'width=640, height=480, menubar=yes,location=yes,scrollbars=yes, resizeable=yes, status=yes, copyhistory=no,toolbar=no');
							}
						</script>
</body>  
</html>