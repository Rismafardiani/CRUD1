<?php
	include"koneksi.php";
	$noin = $_GET['no_induk'];
	$query = mysqli_query($koneksi,"DELETE FROM orangtua WHERE no_induk='$noin' ");
if ($query > 0 ) {
	echo "<script>alert('berhasil di Hapus');window.location.href='index1.php'</script>";
}else{
	echo "<script>alert('gagal di Hapus');'</script>";
}
?>
