<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Menu Pasien</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Pasien</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <h2 class="text-center">Data Pasien</h2>
                            <a href="add.php"><button class="btn btn-primary mb-1">Tambah Data</button></a>
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Kelurahan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                // Memanggil DB
                                require '../koneksi.php';
                                // Membuat Query dengan JOIN antara tabel pasien dan kelurahan
                                $query = $dbh->query("
                                    SELECT pasien.*, kelurahan.nama AS nama_kelurahan 
                                    FROM pasien
                                    INNER JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id ORDER BY pasien.id
                                ");
                                // Menampilkan Data
                                foreach ($query as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['id'] . "</td>";
                                    echo "<td>" . $row['kode'] . "</td>";
                                    echo "<td>" . $row['nama'] . "</td>";
                                    echo "<td>" . $row['tmp_lahir'] . "</td>";
                                    echo "<td>" . $row['tgl_lahir'] . "</td>";
                                    echo "<td>" . $row['gender'] . "</td>";
                                    echo "<td>" . $row['email'] . "</td>";
                                    echo "<td>" . $row['alamat'] . "</td>";
                                    echo "<td>" . $row['nama_kelurahan'] . "</td>"; // Menggunakan alias nama_kelurahan untuk menampilkan nama kelurahan
                                    echo "<td>";
                                    echo "<a href='edit.php?id=" . $row['id'] . "'><button class='btn btn-primary'>Edit</button></a>";
                                    echo "<span class='mx-1'></span>"; 
                                    echo "<a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Yakin Hapus Data?\")'><button class='btn btn-danger'>Delete</button></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- card-body end -->
                        <div class="card-footer">
                            <!-- Buat Footer -->
                        </div>
                        <!-- card-footer end-->
                    </div>
                    <!-- card end -->
                </div>
            </div>
        </div>
    </section>
    <!-- content end -->
</div>
<!-- content-wrapper end -->

<?php
require_once 'footer.php';
?>
