<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Pendaftaran | SMA Informatika</title>
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
      <form action="proses-pendaftaran.php" method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" placeholder="Masukkan nama" aria-label="Nama" name="nama" required />
        </div>

        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" placeholder="Masukkan alamat" aria-label="Alamat" name="alamat" required />
        </div>

        <div class="mb-2">
          <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
          <div class="row">
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis-kelamin" id="laki-laki" value="Laki-laki">
                <label class="form-check-label" for="laki-laki">
                  Laki-laki
                </label>
              </div>
            </div>
            <div class="col-auto">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis-kelamin" id="perempuan" value="Perempuan">
                <label class="form-check-label" for="perempuan">
                  Perempuan
                </label>
              </div>
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="agama" class="form-label">Agama</label>
          <select class="form-select" aria-label="Agama" name="agama" required>
            <option selected disabled>Pilih agama</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghuchu">Konghuchu</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="sekolah-asal" class="form-label">Sekolah Asal</label>
          <input type="text" class="form-control" placeholder="Sekolah Asal" aria-label="Sekolah Asal" name="sekolah-asal" required />
        </div>

        <input type="submit" value="Daftar" class="btn btn-primary" name="daftar"></input>
      </form>
    </div>
  </div>
</body>

</html>