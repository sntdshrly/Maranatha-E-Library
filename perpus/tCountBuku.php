<!DOCTYPE html>
<html>
<head>
 <title>Maranatha e-Library</title>
</head>
<body>
 <div align="center">
  <h3>Maranatha e-Library<br>The only thing that you absolutely have to know, is the location of the library</h3>
  <br>
 	   <form method="POST" >
    <tr>
     <td>Nama Penerbit</td>
     <td><input type="text" name="nama_penerbit" id="nama_penerbit"></td>
    </tr>
	

	<td>
      <input type="submit" name="eksekusi" value="eksekusi">
     </td>
	 
	<br><br>
  <table border="1" width="400px">
   <thead>
    <tr>
     <th>Id Penerbit</th>
     <th>Nama Penerbit</th>
     <th>Nama Penerbit</th>
     <th>Stock</th>
    </tr>
   </thead>
   <tbody>
   </form>
    <?php
     // panggil file koneksi
     include "config.php";
	 if (isset($_POST['eksekusi'])) {
	 $pKata = $_POST['nama_penerbit'];
	 $sql="Select * FROM tCountBuku('$pKata')";
     //$sql="EXEC [dbo].[SP_LihatDataMahasiswaBerdasarkanNrp] '$pKata'";
     $no=1;
     //eksekusi query menampilkan data dari tabel Mhsw
     $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());;
     //mengembalikan data row menjadi array dan looping data menggunakan while
	
     while ($data=sqlsrv_fetch_array($query)) {
	 ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['id_penerbit']; ?></td>
      <td><?php echo $data['nama_penerbit']; ?></td>
      <td><?php echo $data['Jumlah Buku']; ?></td>
     </tr>
	  <?php }
	 }?>

   </tbody>
  </table>
 </div>
</body>
</html>