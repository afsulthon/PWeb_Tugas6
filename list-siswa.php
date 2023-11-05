<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Siswa | SMA Informatika</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/82d0e7f3eb.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center p-5">
      <div class="col-md-8 text-center">
        <h2 class="mt">Portal Pendaftaran Siswa Baru</h2>
        <h1 class="display-5">SMA Informatika</h1>
      </div>
    </div>
    <a href="form-daftar.php">
      <button type="button" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i></i> Tambah Baru</button>
    </a>
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Agama</th>
          <th>Sekolah Asal</th>
          <th>Tindakan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql_script = 'SELECT * FROM calon_siswa';
        $query = mysqli_query($db, $sql_script);
        while ($siswa = mysqli_fetch_array($query)) {
          echo '<tr>';
          echo '<td>' . $siswa['id'] . '</td>';
          echo '<td>' . $siswa['nama'] . '</td>';
          echo '<td>' . $siswa['alamat'] . '</td>';
          echo '<td>' . $siswa['jenis_kelamin'] . '</td>';
          echo '<td>' . $siswa['agama'] . '</td>';
          echo '<td>' . $siswa['sekolah_asal'] . '</td>';
          echo '<td>';
          echo '<a class="btn btn-warning btn-sm" href="form-edit.php?id=' . $siswa['id'] . '">Edit</a> ';
          echo '<button class="btn btn-danger btn-sm" data-id="' . $siswa['id'] . '">Hapus</button>';
          echo '</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query); ?></p>
  </div>
  <script>
    const deleteButton = document.querySelectorAll('.btn-danger');
    deleteButton.forEach((button) => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        Swal.fire({
          title: 'Konfirmasi penghapusan',
          text: "Apakah Anda yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#dc3545',
          confirmButtonText: 'Ya, hapus data ini',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = 'hapus.php?id=' + button.getAttribute('data-id');
          }
        })
      });
    });
  </script>
</body>

</html>