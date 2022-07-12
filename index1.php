<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
<title>CRUD</title>
</head>
<body>
<center>
<h1>Data Siswa</h1>
<a href="tambah1.php"> TAMBAH DATA Orangtua </a>
	<table border="1" width="90%">
			<tr>
				<th >No.Induk</th>
				<th >Nama Ayah </th>
				<th >Nama Ibu</th>
				<th >alamat </th>
			</tr>
	</tr>
<?php
$query = mysqli_query($koneksi,"SELECT * FROM orangtua ");
$no=1;
foreach ($query as $data) {

?>
<tr>
<td><?=$data['no_induk']?></td>
<td><?=$data['nama_ayah']?></td>
<td><?=$data['nama_ibu']?></td>
<td><?=$data['alamat']?></td>
	
	<td><a href="edit.php?no_induk=<?=$data['no_induk']?>">EDIT</a> | |<a href="delete1.php?no_induk=<?=$data['no_induk']?>"> DELETE </a></td>
</tr>
<?php 
}
?>
</table>
</center>
</body>
</html>
