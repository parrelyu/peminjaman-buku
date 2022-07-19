<?php
$koneksi = mysqli_connect("localhost","root","","peminjaman");
$id_siswa=$_POST['aa'];
$nama=$_POST['bb'];
$alamat=$_POST['cc']	;
$kodeLama=$_POST['ee'];
$kuery = "UPDATE siswa SET id_siswa='$id_siswa', nama='$nama',alamat='$alamat',  WHERE id_siswa='$kodeLama'";
mysqli_query($koneksi,$kuery);

if($kuery){
	echo "<script> alert('ubah data sukses!');
	document.location='siswa.php';
	</script>";
}

else{
	echo "<script>
	alert('ubah data gagal');
	document.location='siswa.php';
	</script>";
}
?>
