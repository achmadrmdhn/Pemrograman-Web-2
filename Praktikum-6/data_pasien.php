<?php
// Sisipkan File Koneksi
require_once("koneksi.php");

// buat query untuk mengambil semua data
$query = "SELECT * FROM pasien";

// eksekusi query dengan PDO
$pasiens =  $dbh->query($query)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
</head>
<body class="m-5">
    <h1 class="mb-2"> List Data Pasien </h1>
    <table class="table">
        <tr class="">
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Tempat Lahir</th>
            <th>Tgl Lahir</th>
            <th>JK</th>
            <th>Aksi</th>
        </tr>

        <?php 
        $no = 1;
        foreach($pasiens as $pasien):
        ?>
            <tr>
                <td><?php echo $no ++ ?></td>
                <td><?php echo $pasien["nama"] ?></td>
                <td><?php echo $pasien["email"] ?></td>
                <td><?php echo $pasien["tmp_lahir"] ?></td>
                <td><?php echo $pasien["tgl_lahir"] ?></td>
                <td><?php echo $pasien["gender"] ?></td>
                <td>
                    <a href="#" class="btn btn-primary">
                        Edit
                    </a>
                    <a href="#" class="btn btn-danger">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>