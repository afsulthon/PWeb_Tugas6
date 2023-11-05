<?php

include("config.php");

if (isset($_POST['simpan'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis-kelamin'];
  $agama = $_POST['agama'];
  $sekolah = $_POST['sekolah-asal'];

  $stmt = $db->prepare("UPDATE calon_siswa SET nama=?, alamat=?, jenis_kelamin=?, agama=?, sekolah_asal=? WHERE id=?");
  $stmt->bind_param("sssssi", $nama, $alamat, $jenis_kelamin, $agama, $sekolah, $id);

  $stmt->execute();

  if ($stmt->affected_rows > 0) {
    header('Location: list-siswa.php');
  } else {
    die("Gagal menyimpan perubahan");
  }

  $stmt->close();
} else {
  die("Akses dilarang!");
}
