<?php
session_start();

if( isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if( isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 118px;
            left: 210px;
            z-index: -1;
            display: none;
        }
    </style>

    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

<a href="logout.php">Logout</a>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus 
    placeholder="masukkan keyword pencarian.." autocomplete="off" id=
    "keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

    <img src="img/loader.gif" class="loader">

</form>

<br>
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <!-- ctrl + d untuk mengubah td yang salah menjadi th
         tanpa harus manual satu-satu -->
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Name</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>|
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm
            ('yakin?');">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50" height="50"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
</div>

</body>
</html>