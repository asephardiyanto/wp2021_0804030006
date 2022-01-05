<?php
// koneksi dengan database
$conn = mysqli_connect('localhost', 'root', 'root', 'wpsmt5');

// pemanggilang tabel
function query($query)
{
  global $conn;
  // mengambil tabel dan seluruh data
  $result = mysqli_query($conn, $query);
  // memisahkan data pada tabel menjadi rapih/elemen


  // pengambilan 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  // mengembalikan  kedalam penampung
  return $rows;
}
