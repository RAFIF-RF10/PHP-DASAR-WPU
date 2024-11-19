<?php

require 'Functions.php';

// Ini Yang Lama Semua Disingkat Si File Functions.php 

/* Koneksi Ke Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar"); */

// Cek Tombol Submit Sudah Di Tekan Apa Belom
if(isset($_POST["submit"]))
{
  
/* Ambil Data Dari Tiap Element Dalam Form
  $nama = htmlspecialchars($_POST["nama"]);
  $nrp = htmlspecialchars($_POST["nrp"]);
  $email = htmlspecialchars($_POST["email"]);
  $jurusan = htmlspecialchars($_POST["jurusan"]);
  $gambar = htmlspecialchars($_POST["gambar"]); */
  
  /* Query Insert Data 
  $query = "INSERT INTO mahasiswa
              VALUES
            ('','$nama','$nrp','$email','$jurusan','$gambar')
            ";
  mysqli_query($conn, $query); */
  
  /* Cek Data Berhasil Ditambah Apa Tidak
  if( mysqli_affected_rows($conn) > 0)
  {
    echo "<script>alert('Data Berhadil Ditambahkan :)')</script>";
  } else {
    echo "<script>alert('Maaf Data Tidak Berhasil Ditambahkan :(')</script>";
  } */
  
  if( create($_POST) > 0)
  {
    echo "
    <script>
    alert('Data Berhasil Ditambahkan :)')
    document.location.href = 'index.php'
    </script>
    ";
  } else {
    echo "<script>alert('Maaf Data Gagal Ditambahkan :(')</script>";
  }
  
} 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Tambah Data</title>
    <style>
      body {
        background-color: skyblue ;
        color: black;
      }
      a {
        text-decoration: none;
        color: whitesmoke;
        font-size: 25px;
        font-style: bold;
      }
      li {
        color: black;
        margin-top: 10px;
      }
      button {
        background: grey  ;
        color: #ffff;
        font-size: 20px;
      }
      h1 {
        color: whitesmoke;
      }
    </style>
  </head>
  <body>
    
    <h1>Tambah Data</h1>
    
    <form action="" method="post">
      
      <ul>
        <li>
          <label for="nama">Nama : </label>
          <br>
          <input type="text" name="nama" id="nama" required>
        </li>
        <li>
          <label for="nrp">NRP : </label>
          <br>
          <input type="text" name="nrp" id="nrp" required>
        </li>
        <li>
        <label for="email">EMAIL : </label>
          <br>
        <input type="email" name="email" id="email" required>
        </li>
        <li>
          <label for="jurusan">JURUSAN : </label>
          <br>
          <input type="text" name="jurusan" id="jurusan" required>
        </li>
        <li>
          <label for="gambar">GAMBAR : </label>
          <br>
          <input type="text" name="gambar" id="gambar" required>
        </li>
        <li>
          <button type="submit" name="submit">Create!!</button>
        </li>
      </ul>
      
    </form>
    
<a href="index.php"><--Kembali</a>
    
  </body>
</html>