<?php

include("config.php");

if (!isset($_GET['id'])) {
  header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
  die("Data tidak ditemukan");
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Edit | SMA Informatika</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center p-5">
      <div class="col-md-8 text-center">
        <h2 class="mt">Portal Pendaftaran Siswa Baru</h2>
        <h1 class="display-5">SMA Informatika</h1>
      </div>
    </div>

    <div style="max-width: 100vh; margin: 0 auto;">
      <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" placeholder="Masukkan nama" aria-label="Nama" name="nama" value="<?php echo $siswa['nama']; ?>" required />
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" placeholder="Masukkan alamat" aria-label="Alamat" name="alamat" value="<?php echo $siswa['alamat']; ?>" required />
        </div>

        <div class="mb-2">
          <?php $jk = $siswa['jenis_kelamin']; ?>
          <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
          <div class="row">
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis-kelamin" id="laki-laki" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="laki-laki">
                  Laki-laki
                </label>
              </div>
            </div>
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis-kelamin" id="perempuan" value="Perempuan" <?php echo ($jk == 'Perempuan') ? 'checked' : ''; ?>>
                <label class="form-check-label" for="perempuan">
                  Perempuan
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <?php $agama = $siswa['agama']; ?>
          <label for="agama" class="form-label">Agama</label>
          <select class="form-select" aria-label="Agama" name="agama" required>
            <option <?php echo ($agama == 'Islam') ? 'selected' : ''; ?>>Islam</option>
            <option <?php echo ($agama == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
            <option <?php echo ($agama == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
            <option <?php echo ($agama == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
            <option <?php echo ($agama == 'Budha') ? 'selected' : ''; ?>>Budha</option>
            <option <?php echo ($agama == 'Konghuchu') ? 'selected' : ''; ?>>Konghuchu</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="sekolah-asal" class="form-label">Sekolah Asal</label>
          <input type="text" class="form-control" placeholder="Sekolah Asal" aria-label="Sekolah Asal" name="sekolah-asal" value="<?php echo $siswa['sekolah_asal']; ?>" required />
        </div>

        <input type="submit" value="Simpan" class="btn btn-primary" name="simpan"></input>
      </form>
    </div>
  </div>
</body>

</html>