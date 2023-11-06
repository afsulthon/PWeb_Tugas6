SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS pendaftaran_siswa;
USE pendaftaran_siswa;

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(1, 'Akmal Sulthon', 'Asrama Mahasiswa ITS Blok E', 'Laki-laki', 'Islam', 'SMAN 1 Ponorogo'),
(2, 'Duevano Fairuz', 'Perumahan GSI, Kedurus', 'Laki-laki', 'Islam', 'SMAN 6 Surabaya'),
(3, 'Ken Anargya', 'Perumdos ITS Blok U', 'Laki-laki', 'Islam', 'SMAN 7 Depok'),
(4, "Achmad Khosyi'", 'Kejawan Putih Tambak', 'Laki-laki', 'Islam', 'SMAN 1 Gresik'),
(5, 'Nadya Zuhria', 'Gang Mawar, Gebang Putih', 'Perempuan', 'Islam', 'MAN 2 Ponorogo'),
(6, 'Abdullah Yasykur', 'Pondok Pesantren Darussalam, Keputih', 'Laki-laki', 'Islam', 'Pondok Pesantren Tebuireng Jombang');

ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;