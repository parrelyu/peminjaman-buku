
<?php
$koneksi = mysqli_connect("localhost","root","","peminjaman");
$id_siswa=$_GET['aa'];
$nama=$_GET['bb'];
$alamat=$_GET['cc'];
?>
<form method=post action="updatesiswa.php">
	<table cellspacing=0 width="1000px">
   <input type="hidden" name="ee" value=<?=$id_siswa?>>
 </td><td><input type=text name=aa  value=<?php echo $id_siswa; ?>></td></tr>
</td><td><input type=text name=bb value=<?php echo $nama; ?>></td></tr>
</td><td><input type=text name=cc value=<?php echo $alamat; ?>></td></tr>


<td><button>
  kirim
</button></td>
</table>
</form>