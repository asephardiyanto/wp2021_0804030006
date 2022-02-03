<?php
// date_default_timezone_get("Asia/Jakarta");

require 'functions.php';

// test vard dam
// if (isset($_POST['tambah'])) {
// var_dump($_POST);
// var_dump($_FILES);
// die;
// }

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di Tambah');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal di Tambah');
   </script>";
  }
}


?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- font -->
  <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

  <title>CRUD</title>
</head>

<body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SIPEMABA || Kampus Kita</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        <div class="text-white">
          <?php echo date('l, d-m-y'); ?>
        </div>
      </div>
    </div>
  </nav>

  <!-- sidebar -->

  <div class="row mt-4">
    <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
      <!-- menu -->
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
          <hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php"><i class="fas fa-users"></i> calon Mahasiswa</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-edit"></i> Input camaba</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-chalkboard-teacher"></i> Daftar Dosen</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> jadwal Kuliah</a>
          <hr>
        </li>

      </ul>
    </div>
    <div class="col-md-10 p-5 pt-5">
      <!-- konten -->
      <h3><i class="fas fa-users"></i> Input data Calon Mahasiswa</h3>
      <hr>

      <form method="POST" action="" enctype="multipart/form-data">

        <div class="form-group pb-2">
          <label for="nama">Nama : </label>
          <input type="text" class="form-control" id="nama" placeholder="nama lengkap" name="nama" autofocus required autocomplete="off">
        </div>
        <div class="form-group pb-2">
          <label for="alamat">Alamat : </label>
          <input type="text" class="form-control" id="alamat" placeholder="alamat lengkap" name="alamat" required autocomplete="off">
        </div>
        <div class="form-group pb-2">
          <label for="jenis_kelamin">jenis kelamin : </label>
          <input type="text" class="form-control" id="jenis_kelamin" placeholder="jenis kelamin" name="jenis_kelamin" required autocomplete="off">
        </div>
        <div class="form-group pb-2">
          <label for="agama">Agama : </label>
          <input type="text" class="form-control" id="agama" placeholder="agama anda" name="agama" required autocomplete="off">
        </div>
        <div class="form-group pb-2">
          <label for="sekolah_asal">Sekolah Asal : </label>
          <input type="text" class="form-control" id="sekolah_asal" placeholder="Sekolah Asalmu" name="sekolah_asal" required autocomplete="off">
        </div>
        <div class="form-group pb-2">
          <label for="foto_maba">foto : </label>
          <input type="file" class="form-control" id="foto_maba" placeholder="input foto anda" name="foto_maba" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
      </form>


    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>