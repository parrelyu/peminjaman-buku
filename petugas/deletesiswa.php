<?php
$koneksi = mysqli_connect("localhost","root","","peminjaman");
$id_siswa=$_GET['aa'];
$sql = "DELETE a.*, b.* FROM siswa a JOIN sosmed b ON a.id_siswa = b.id_sosmed WHERE a.id_siswa = $id_siswa";

$exe = mysqli_query($koneksi, $sql);

if($sql){
	echo "<script> alert('data berhasil di hapus!');
	document.location='siswa.php';
	</script>";
}

else{
	echo "<script>
	alert('gagal!');
	document.location='siswa.php';
	</script>";
}
?>

