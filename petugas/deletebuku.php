<?php
include'../config2.php';
$id_buku = $_GET['aa'];
$konek="DELETE FROM buku WHERE id_buku='$id_buku'";

mysqli_query($koneksi,$konek);

if($konek){
	echo "<script> alert('data berhasil di hapus!');
	document.location='buku.php';
	</script>";
}

else{
	echo "<script>
	alert('gagal!');
	document.location='buku.php';
	</script>";
}
?>

