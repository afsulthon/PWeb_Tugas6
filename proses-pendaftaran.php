<?php

include("config.php");

if (isset($_POST['daftar'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis-kelamin'];
  $agama = $_POST['agama'];
  $sekolah = $_POST['sekolah-asal'];

  $stmt = $db->prepare("INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES (?, ?, ?, ?, ?)");
  $stmt->bind_param("sssss", $nama, $alamat, $jenis_kelamin, $agama, $sekolah);

  $stmt->execute();

  if ($stmt->affected_rows > 0) {
    header('Location: index.php?status=sukses');
  } else {
    header('Location: index.php?status=gagal');
  }

  $stmt->close();
} else {
  die("Akses dilarang!");
}
