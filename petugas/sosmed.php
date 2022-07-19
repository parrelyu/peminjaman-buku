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
                            <h3 class="card-title">Tabel Sosmed</h3>

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
                                        <th width="20%">KELAS</th>
                                        <th width="20%">JURUSAN</th>
                                        <th width="20%">HP</th>
                                        <th width="20%">WA</th>
                                        <th width="20%">INSTAGRAM</th>
                                        <th width="20%">FB</th>

                                    </tr>
                                </thead>
                            </head>
                            <body>
                             <?php 
                             $koneksi = mysqli_connect("localhost","root","","peminjaman");
                             $id_siswa = $_GET['aa'];
                             $data = mysqli_query($koneksi,"SELECT * FROM siswa JOIN sosmed ON  (siswa.id_siswa = sosmed.id_sosmed) JOIN kelas ON (siswa.id_siswa = kelas.id_kelas) WHERE id_siswa=$id_siswa");
                             while($d = mysqli_fetch_array($data)){
                              ?>
                              <tr>
                                <td><?php echo $d['id_sosmed']; ?></td>
                                <td><?php echo $d['nama']; ?></td>
                                <td><?php echo $d['kelas']; ?></td>
                                <td><?php echo $d['jurusan']; ?></td>
                                <td><?php echo $d['no_hp']; ?></td>
                                <td><?php echo $d['wa']; ?></td>
                                <td><?php echo $d['instagram']; ?></td>
                                <td><?php echo $d['fb']; ?></td>


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