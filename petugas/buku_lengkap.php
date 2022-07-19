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
                                        <th width="20%">JUDUL</th>
                                        <th width="20%">PENERBIT</th>
                                        <th width="20%">PENGARANG</th>
                                        <th width="20%">STOK</th>
                                        <th width="20%">KATEGORI</th>
                                        <th width="20%">RAK</th>
                                        
                                    </tr>
                                </thead>
                            </head>
                            <body>
                             <?php 
                             $koneksi = mysqli_connect("localhost","root","","peminjaman");
                             $id_buku = $_GET['aa'];
                             $data = mysqli_query($koneksi,"SELECT * FROM buku JOIN kategori ON  (buku.id_buku = kategori.id_kategori) JOIN rak ON (buku.id_buku = rak.id_rak) where id_buku=$id_buku");
                             while($d = mysqli_fetch_array($data)){
                                ?>
                                <tr>
                                    <td><?php echo $d['id_buku']; ?></td>
                                    <td><?php echo $d['judul']; ?></td>
                                    <td><?php echo $d['penerbit']; ?></td>
                                    <td><?php echo $d['pengarang']; ?></td>
                                    <td><?php echo $d['stok']; ?></td>
                                    <td><?php echo $d['kategori']; ?></td>
                                    <td><?php echo $d['rak']; ?></td>
                                    


                                </tr>
                                <?php 
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

</section>
<!-- /.content -->
</div>

<?php
include "footer.php";
?>  