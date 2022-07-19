<?php
$koneksi = mysqli_connect("localhost","root","","peminjaman");
?>
<form method=post action="tambahsiswaproses.php">
    <table >
<tr><td><input type="text" name="id_siswa" placeholder="Tambahkan ID Siswa"></tr></td>
        <tr><td><input type="text" name="nama" placeholder="Tambahkan Nama"></tr></td>
        <tr><td><input type="text" name="alamat" placeholder="Tambahkan Alamat"></tr></td>
        <tr><td><input type="text" name="id_sosmed" placeholder="Tambahkan ID Sosmed"></tr></td>
        <tr><td><input type="text" name="id_kelas" placeholder="Tambahkan ID Kelas"></tr></td>
        <tr><td>
           <label>Pilih Kelas</label>
           <select name="id_kelas">
             <?php 
                $konek =" SELECT * FROM kelas";
                $ling = mysqli_query($koneksi,$konek);
                while ($kol=mysqli_fetch_array($ling)){
                    ?>
                    <option value="<?php echo $kol['id_kelas']; ?>"><?php echo $kol['kelas']; ?></option>
                    <?php
                }
                ?>
          </select></td></tr>
          <tr><td>
           <label>Pilih Jurusan</label>
           <select name="id_kelas">
             <?php 
                $konek =" SELECT * FROM kelas";
                $ling = mysqli_query($koneksi,$konek);
                while ($kol=mysqli_fetch_array($ling)){
                    ?>
                    <option value="<?php echo $kol['id_kelas']; ?>"><?php echo $kol['jurusan']; ?></option>
                    <?php
                }
                ?>
          </select></td></tr>
          <tr><td><input type="text" name="id_sosmed" placeholder="Tambahkan ID Sosmed"></tr></td>
          <tr><td><input type="text" name="no_hp" placeholder="Tambahkan HP"></tr></td>
          <tr><td><input type="text" name="wa" placeholder="Tambahkan WA"></tr></td>
          <tr><td><input type="text" name="instagram" placeholder="Tambahkan Instagram"></tr></td>
          <tr><td><input type="text" name="fb" placeholder="Tambahkan Facebook"></tr></td>
          <tr><td> 
            <button  >
                TAMBAHKAN
            </button></tr></td>
        </table>
    </form>