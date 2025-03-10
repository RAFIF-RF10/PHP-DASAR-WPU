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
  
  // Uploud Gambar 
  $gambar = uploud();
  if( !$gambar )
  {
    return false;
  }

  $query = "INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar) 
              VALUES
            ('','$nama','$nrp','$email','$jurusan','$gambar')
            ";
  mysqli_query($conn, $query);
  
  return mysqli_affected_rows($conn);
}

function uploud() 
{
  
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];
  
  // Cekk Apakah Tidak Ada Gambar Yg Di Uploud 
  if( $error === 4 )
  {
    echo "<script>
    alert('Pilih Gambar Dulu')
    </script>
    ";
  return false;
  }
  
  // Cek Apakah Yang DiUploud Adalah Gambar
  $ektensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ektensiGambar = explode('.', $namaFile);
  $ektensiGambar = strtolower(end($ektensiGambar));
  if( !in_array($ektensiGambar, $ektensiGambarValid) ) 
  {
    echo "<script>
    alert('Uploud Gambar Berektensi jpg, jpeg, png')
    </script>
    ";
    return false;
  }
  
  // Cek Jika Ukurannya Terlalu Besar
  if( $ukuranFile > 1000000 )
  {
    echo "<script>
    alert('Ukuran Terlalu Besar :(')
    </script>
    ";
    return false;
  }
  
  // Lolos Pengecekan, Gambar Siap Di Uploud
  
  // Generate Nama Gambar Baru 
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ektensiGambar;
  
  move_uploaded_file($tmpName, '../img/' .$namaFileBaru);
  
  return $namaFileBaru;
  
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
  $gambarLama = htmlspecialchars($data["gambarLama"]);
  
  if( $_FILES['gambar']['error'] === 4 )
  {
    $gambar = $gambarLama;
  } else {
  $gambar = uploud();
  }
  
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

function cari($search)
{
  $query = "SELECT * FROM mahasiswa
              WHERE
            nama LIKE '%$search%' OR
            nrp LIKE '%$search%' OR
            email LIKE '%$search%' OR
            jurusan LIKE '%$search%'
              ";
    return query($query);
}

function registrasi($data)
{
  global $conn;
  
  $username = strtolower(stripslashes($data["username"]));
  $pass = mysqli_real_escape_string($conn, $data["password"]);
  $pass2 = mysqli_real_escape_string($conn,$data["password2"]);
  
  // Cek Username Udh Ada Atau Belom
$result =  mysqli_query($conn, "SELECT username FROM User WHERE username = '$username'");
  if( mysqli_fetch_assoc($result) )
  {
    echo "<script>
    alert('Username Sudah Ada DiDatabase Kami Cari Yang Lain');
    </script>
    ";
    return false;
  }
  
  // Cek Konfirmasi Password 
  if( $pass !== $pass2 )
  {
    echo "<script>
    alert('Password Kamu Tidak Sama Dengan Konfirmasi Password');
    </script>
    ";
    return false;
  }
  
  // Enkripsi Password 
  $password = password_hash($pass, PASSWORD_DEFAULT);
  
  // Tambah User Baru Ke Database
  mysqli_query($conn, "INSERT INTO User (username, password) VALUES('', '$username', '$password')");
  
  return mysqli_affected_rows($conn);
  
}

?>