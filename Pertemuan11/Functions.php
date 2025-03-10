<?php

// Koneksi Ke Database
$conn = mysqli_connect("localhost", "root", "", "php_dasar");

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result))
  {
    $rows[] = $row;
  }
  return $rows;
}

function create($data)
{
  global $conn;
  $nama = htmlspecialchars($data["nama"]);
  $nrp = htmlspecialchars($data["nrp"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);

  $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar) 
            VALUES
            ('$nama','$nrp','$email','$jurusan','$gambar')
            ";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function delete($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
  
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $nrp = htmlspecialchars($data["nrp"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambar = htmlspecialchars($data["gambar"]);
  
  $query = "UPDATE mahasiswa SET 
              nama = '$nama',
              nrp = '$nrp',
              email = '$email',
              jurusan = '$jurusan',
              gambar = '$gambar'
            WHERE id = $id
            ";
  mysqli_query($conn, $query);
  
  return mysqli_affected_rows($conn);
}

?>