<?php
$koneksi = mysqli_connect("localhost","root","","peminjaman");
?>
<form method=post action="tambahbukuproses.php">
    <table >
        <tr><td><input type="text" name="id_buku" placeholder="Tambahkan id_buku"></tr></td>
        <tr><td><input type="text" name="judul" placeholder="Tambahkan judul"></tr></td>
        <tr><td><input type="text" name="pengarang" placeholder="Tambahkan pengarang"></tr></td>
        <tr><td><input type="text" name="penerbit" placeholder="Tambahkan penerbit"></tr></td>
        <tr><td>
         <label>Pilih Kategori</label>
         <select name="kategori_id">
           <?php 
           $konek =" SELECT * FROM kategori";
           $ling = mysqli_query($koneksi,$konek);
           while ($kol=mysqli_fetch_array($ling)){
            ?>
            <option value="<?php echo $kol['id_kategori']; ?>"><?php echo $kol['kategori']; ?></option>
            <?php
        }
        ?>
    </select></td></tr>
    <tr><td>
     <label>Pilih nomor rak</label>
     <select name="rak_id">
       <?php 
       $konek =" SELECT * FROM rak";
       $ling = mysqli_query($koneksi,$konek);
       while ($kol=mysqli_fetch_array($ling)){
        ?>
        <option value="<?php echo $kol['id_rak']; ?>"><?php echo $kol['rak']; ?></option>
        <?php
    }
    ?>
</select></td></tr>
<tr><td><input type="text" name="stok" placeholder="Tambahkan sisa stok"></tr></td>
<tr><td> 
    <button  >
        TAMBAHKAN
    </button></tr></td>
</table>
</form>