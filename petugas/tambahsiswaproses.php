 <?php
 $koneksi = mysqli_connect("localhost","root","","peminjaman");
 $id_siswa=$_POST['id_siswa'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $id_sosmed=$_POST['id_sosmed'];
 $id_kelas=$_POST['id_kelas'];
 $kelas=$_POST['kelas'];
 $jurusan=$_POST['jurusan'];
 $id_sosmed=$_POST['id_sosmed'];
 $no_hp=$_POST['no_hp'];
 $wa=$_POST['wa'];
 $instagram=$_POST['instagram'];
 $fb=$_POST['fb'];


 $data = [
 	$id_siswa,
 	$nama,
 	$alamat,
    $id_sosmed,
 	$id_kelas,
    $kelas,
    $jurusan,
 	$id_sosmed,
 	$no_hp,
 	$wa,
 	$instagram,
 	$fb

 ];

 $sql = "INSERT INTO sosmed VALUES('$id_sosmed', '$no_hp', '$wa', '$instagram', '$fb')";
 mysqli_query($koneksi, $sql);


 $last_id = "SELECT * FROM sosmed ORDER BY id_sosmed DESC LIMIT 1";
// $last_id = mysqli_query($koneksi, $lastid);

 $sql2 = "INSERT INTO siswa VALUES ('$id_siswa', '$nama', '$alamat','$id_sosmed' '$last_id', '$id_kelas')";

 mysqli_query($koneksi, $sql2);

// $konek = "INSERT INTO sosmed (hp,wa,instagram,fb) VALUES('$hp', '$wa','$instagram','$fb');"; 

// $konek .="INSERT INTO siswa (nama, alamat, kelas,jurusan,sosmed_id) values( '$nama', '$alamat','$kelas','$jurusan','$sosmed_id');";

// mysqli_query($koneksi,$konek);
 ?>
 <a href="siswa.php">Tampilkan</a>