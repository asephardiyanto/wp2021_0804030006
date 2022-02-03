<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'wpsmt5');

// pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $nama = htmlspecialchars($data['nama']);
  $alamat =  htmlspecialchars($data['alamat']);
  $jenis_kelamin =  htmlspecialchars($data['jenis_kelamin']);
  $agama =  htmlspecialchars($data['agama']);
  $sekolah_asal =  htmlspecialchars($data['sekolah_asal']);
  // $foto_maba =  htmlspecialchars($data['foto_maba']);

  $foto_maba = upload();
  if (!$foto_maba) {
    return false;
  }

  $query = "INSERT INTO calon_mhs 
VALUES 
(null,'$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal','$foto_maba');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function upload()
{
  $namaFile = $_FILES['foto_maba']['name'];
  $tipeFile = $_FILES['foto_maba']['type'];
  $ukuranFile = $_FILES['foto_maba']['size'];
  $error = $_FILES['foto_maba']['error'];
  $tmp_Name = $_FILES['foto_maba']['tmp_name'];

  // serangkaian pengecekan data file

  // saat tidak ada data yang di upload
  if ($error == 4) {
    echo "<script>
    alert('pilih gambar terlebih dahulu');
    </script>";
    return false;
  }

  $daftarfile = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $namaFile);
  // WhatsApp Image 2022-02-02 at 10.50.33.JPEG
  $ekstensi_file = strtolower(end($ekstensi_file));
  // jpeg
  if (!in_array($ekstensi_file, $daftarfile)) {
    echo "<script>
    alert('yang anda upload bukan gambar');
    </script>";
    return false;
  }

  // pengecekan ukuran file
  // ukuran dalam satuan byte
  if ($ukuranFile > 1000000) {
    echo "<script>
    alert('file melebihi 1 Mb');
    </script>";
    return false;
  }

  // membuat nama unik
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensi_file;
  // var_dump($namaFileBaru);
  // die;

  move_uploaded_file($tmp_Name, 'image/' . $namaFile);
  return $namaFile;
}


function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM calon_mhs WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function edit($data)
{
  global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $alamat =  htmlspecialchars($data['alamat']);
  $jenis_kelamin =  htmlspecialchars($data['jenis_kelamin']);
  $agama =  htmlspecialchars($data['agama']);
  $sekolah_asal =  htmlspecialchars($data['sekolah_asal']);
  $foto_maba =  htmlspecialchars($data['foto_maba']);

  $query = "UPDATE calon_mhs SET
  nama ='$nama',
  alamat ='$alamat',
  jenis_kelamin ='$jenis_kelamin',
  agama ='$agama',
  sekolah_asal ='$sekolah_asal',
  foto_maba ='$foto_maba'
  WHERE id =$id;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}



function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM calon_mhs WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
