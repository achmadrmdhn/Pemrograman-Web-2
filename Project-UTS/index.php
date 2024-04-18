<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Informasi</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Project UTS - Sistem CRUD Puskesmas Ciriung</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <h4 class="text-center mt-4 text-bold">Selamat Datang </br> Di Dashboard Informasi Puskesmas Ciriung</h4>
                                <div class="informasi_menu mt-5">
                                    <!-- Jumlah Data Per Menu -->
                                    <?php
                                    require 'koneksi.php';
                                    $dokter = $dbh->query("SELECT COUNT(*) AS total FROM dokter")->fetchColumn();
                                    $pasien = $dbh->query("SELECT COUNT(*) AS total FROM pasien")->fetchColumn();
                                    $periksa = $dbh->query("SELECT COUNT(*) AS total FROM periksa")->fetchColumn();
                                    ?>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-info">
                                                <div class="inner">
                                                    <h3><?= $dokter ?></h3>
                                                    <p>Total Dokter Puskesmas</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-user-md"></i>
                                                </div>
                                                <a href="dokter/index.php" class="small-box-footer">Menu Dokter <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-success">
                                                <div class="inner">
                                                    <h3><?= $periksa ?></h3>
                                                    <p>Total Pasien Terdata</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-wheelchair"></i>
                                                </div>
                                                <a href="pasien/index.php" class="small-box-footer">Menu Pasien <i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-warning">
                                                <div class="inner">
                                                    <h3><?= $periksa ?></h3>
                                                    <p>Total Pemeriksaan Pasien</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-medkit"></i>
                                                </div>
                                                <a href="periksa/index.php" class="small-box-footer">Menu Periksa<i class="fas fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Jumlah Data Per Menu -->



                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            Puskesmas Ciriung - Jl. Golf No. 48 Kel. Ciriung Kec. Cibinong Kab. Bogor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once 'footer.php';
?>