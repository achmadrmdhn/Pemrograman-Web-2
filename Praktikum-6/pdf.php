<?php
// 1. Sertakan Koneksi Database
require_once "koneksi.php";
// 2. Definisikan Query
$sql = "SELECT * FROM pasien";
// 3. Jalankan Query
$query = $dbh->query($sql);
// 4. Tampilkan Hasil Query
?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th width="15">No</th>
            <th>Kode</th>
            <th>Nama Pasien</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($query as $row){
            echo
        }
        ?>
    </tbody>
</table>