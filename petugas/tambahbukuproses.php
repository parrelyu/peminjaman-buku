 <?php
 $koneksi = mysqli_connect("localhost","root","","peminjaman");
 $id_buku=$_POST['id_buku'];
 $judul=$_POST['judul'];
 $penerbit=$_POST['penerbit'];
 $pengarang=$_POST['pengarang'];
 $id_kategori=$_POST['id_kategori'];
 $id_rak=$_POST['id_rak'];
 $stok=$_POST['stok'];



 $data = [
 	$id_buku,
 	$judul,
    $penerbit,
    $pengarang,
    $id_kategori,
    $id_rak,
    $stok

];

// $sql = "INSERT INTO buku VALUES('$id_buku', '$judul', '$penerbit', '$pengarang', '$stok')";
// mysqli_query($koneksi, $sql);


$last_id = "SELECT * FROM buku ORDER BY id_buku ";
// $last_id = mysqli_query($koneksi, $lastid);

$sql2 = "INSERT INTO buku VALUES ('$id_buku', '$judul', '$penerbit','$pengarang','$id_kategori' '$last_id', '$id_rak','$stok')";

mysqli_query($koneksi, $sql2);


?>
<a href="buku_lengkap.php">Tampilkan</a>