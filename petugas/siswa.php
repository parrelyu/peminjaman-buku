<?php
include "header.php";
include "sidebar.php";
?>

<div class="content-wrapper" style="min-height: 340px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="petugas.php">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Siswa</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>

                                    <tr>

                                        <th width="10%">ID</th>
                                        <th width="20%">NAMA</th>
                                        <th width="20%">ALAMAT</th>
                                        <th width="10%">AKSI</th>

                                    </tr>
                                </thead>
                            </head>
                            <body>
                                <?php 
                                $koneksi = mysqli_connect("localhost","root","","peminjaman");
                                $konek =" SELECT * FROM siswa";
                                $ling = mysqli_query($koneksi,$konek);
                                while ($kol=mysqli_fetch_array($ling)){

                                 echo "<tr><br>
                                 <td>$kol[0]</td>
                                 <td><a href='sosmed.php?aa=$kol[0]'>$kol[1]</a></td>
                                 <td>$kol[2]</td>
                                 <td><a href='tampilanupdate.php?aa=$kol[0]&bb=$kol[1]&cc=$kol[2]&dd=$kol[3]'><img src='../images/edit.png' width='30px'></a>
                                 <a href='deletesiswa.php?aa=$kol[0]'><img src='../images/delete.png' width='30px'></td>

                                 </tr>";
                             }
                             ?>

                         </tbody>
                     </table>
                 </div>
                 <!-- /.card-body -->
             </div>
             <!-- /.card -->
         </div>
     </div>
 </div>
<a href="tambahsiswa.php"><button type="button" class="btn-success">
    TAMBAH
</button></a>
</section>
<!-- /.content -->
</div>

<?php
include "footer.php";
?>  