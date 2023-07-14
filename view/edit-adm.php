<?php

require_once '../koneksi/koneksi.php';
require '../function/functions.php';

$id = $_GET['id'];

$row = query("SELECT * FROM administrasi WHERE id_adm=$id")[0];

if(isset($_POST['submit'])){
    if( ubahAdm($_POST) > 0){
        echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href='administrasi.php';
        </script>";
    }else{
        echo "
            <script>
                alert ('Gagal Mengubah Data!');
                document.location.href = 'administrasi.php';
            </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Edit Data Administrasi</title>
    <style>
        .nav-link{
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Edit Data Administrasi</h1>    
    <form class="row g-3" action="" method="post">
        <input type="hidden" name="id" value="<?= $row['id_adm']; ?>">
        <div class="col-md-12">
            <label for="nama_adm" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama_adm" name="nama_adm" value="<?= $row['nama_adm']; ?>">
        </div>
        <div class="col-md-12">
            <label for="nip_adm" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip_adm" name="nip_adm" value="<?= $row['nip_adm']; ?>">
        </div>
        <div class="col-md-12">
            <label for="bagian_adm" class="form-label">Bagian</label>
            <input type="text" class="form-control" id="bagian_adm" name="bagian_adm" value="<?= $row['bagian_adm']; ?>">
        </div>
        <div class="d-grid col-md-12">
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </div>
    </form>
</div>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>