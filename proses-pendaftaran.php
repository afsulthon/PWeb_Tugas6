<?php

include("config.php");

if (isset($_POST['daftar'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis-kelamin'];
  $agama = $_POST['agama'];
  $sekolah = $_POST['sekolah-asal'];

  $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah')";
  $query = mysqli_query($db, $sql);

  if ($query) {
    header('Location: index.php?status=sukses');
  } else {
    header('Location: index.php?status=gagal');
  }
} else {
  die("Akses dilarang!");
}
