<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah data</title>
</head>
<body>
<center>
	<h3>Tambah Data </h3>
			<form method="post">
			<strong>No.Induk :</strong><br />
			<input name="noinduk" type="text" size="12" maxlength="12" required>
			<br /><br />
			<strong>Nama Ayah :</strong><br />
			<input name="ayah" type="text" size="50" maxlength="50"required>
			<br /><br />
			<strong>Nama Ibu :</strong><br />
			<input name="ibu" type="text" size="50" maxlength="50"required>
			<br /><br />
			<strong>Alamat :</strong><br />
			<input name="alamat" type="text" size="50" maxlength="50"required>
			<input type="submit" name="btnSubmit" value="simpan">
			</form>
</center>
</body>
</html>

<?php
	if(isset($_POST["btnSubmit"]))
	{
		$noin = $_POST['noinduk'];
		$ayah = $_POST['ayah'];
		$ibu = $_POST['ibu'];
		$alamat = $_POST['alamat'];

$query = mysqli_query($koneksi,"INSERT INTO orangtua VALUES('$noin', '$ayah','$ibu', '$alamat') ");
if ($query > 0) {
echo "<script>alert('berhasil di tambah');window.location.href='index1.php'</script>";
}else{
echo "<script>alert('gagal di tambah');'</script>";
}
}
?>
