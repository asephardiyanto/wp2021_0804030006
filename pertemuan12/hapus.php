<?php
require "functions.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id = $_GET['id'];
if (hapus($id) > 0) {
  echo
  "<script>
  alert('data berhasil di hapus');
  document.location.href = 'index.php';
  </script>";
} else {
  echo
  "<script>
  alert('data gagal dihapus');
 </script>";
}
