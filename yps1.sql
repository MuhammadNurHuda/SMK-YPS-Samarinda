-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Apr 2016 pada 05.02
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yps1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `operator_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_login` date NOT NULL,
  PRIMARY KEY (`operator_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`operator_id`, `nama_lengkap`, `username`, `password`, `last_login`) VALUES
(5, 'Mochtar Aziz', 'mochtaraziz', 'mochtaraziz99', '2016-03-31'),
(6, 'Muhammad Nur Huda', 'huda', 'huda123', '2016-04-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alamat`
--

CREATE TABLE IF NOT EXISTS `tb_alamat` (
  `id_alamat` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `notlp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_alamat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_alamat`
--

INSERT INTO `tb_alamat` (`id_alamat`, `alamat`, `email`, `notlp`) VALUES
(1, 'Jl. Merdeka No.42, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur', 'smkypssamarinda@yahoo.co.id', '(0541) 4734933');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alumni`
--

CREATE TABLE IF NOT EXISTS `tb_alumni` (
  `id_alumni` int(11) NOT NULL AUTO_INCREMENT,
  `nama_alumni` varchar(255) NOT NULL,
  `tmpat_lhr` varchar(255) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk_alumni` enum('Laki-laki','Perempuan') NOT NULL,
  `agama_alumni` enum('Islam','Budha','Hindu','Kristen') NOT NULL,
  `alamat_alumni` text NOT NULL,
  `nisn_alumni` bigint(20) NOT NULL,
  `thn_lulus_alumni` int(11) NOT NULL,
  `alm_kerja_alumni` text NOT NULL,
  `alm_un_kuliah_alumni` text NOT NULL,
  `tlp_alumni` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id_alumni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artikel`
--

CREATE TABLE IF NOT EXISTS `tb_artikel` (
  `artikel_id` int(11) NOT NULL AUTO_INCREMENT,
  `artikel_nama` varchar(50) NOT NULL,
  `artikel_date` date NOT NULL,
  `artikel_content` text NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  PRIMARY KEY (`artikel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_download`
--

CREATE TABLE IF NOT EXISTS `tb_download` (
  `id_download` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) NOT NULL,
  `judul_file` varchar(100) NOT NULL,
  `ukuran_file` int(11) NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tb_download`
--

INSERT INTO `tb_download` (`id_download`, `nama_file`, `judul_file`, `ukuran_file`) VALUES
(5, '3d-ice-hd-wallpaper3.jpg', 'awd', 471),
(7, '15724459.pdf', 'bui', 1227643);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE IF NOT EXISTS `tb_galeri` (
  `galeri_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` int(11) NOT NULL,
  `title_file` varchar(50) NOT NULL,
  `isi_file` varchar(200) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  PRIMARY KEY (`galeri_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`galeri_id`, `nama_file`, `ukuran_file`, `title_file`, `isi_file`, `nama_lengkap`) VALUES
(1, '3367-1280x800.jpg', 430, 'Back-to-School cococo', 'Kembali belajar ke sekolahawdaw', 'Muhammad Nur Huda'),
(2, 'maxresdefault.jpg', 0, 'Laravel', 'PHP', 'Admin'),
(3, 'wallpaper.png', 33, 'Coding', 'Coding', 'Admin'),
(4, '29897-on-the-pier-1366x768-beach-wallpaper1.jpg', 147, 'Scenery', 'Pemandangan di sore hari', 'Mochtar Aziz'),
(5, 'Kemarau_China2.jpg', 79, 'Test', '', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE IF NOT EXISTS `tb_guru` (
  `guru_id` int(11) NOT NULL AUTO_INCREMENT,
  `nip_guru` bigint(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_file` text NOT NULL,
  PRIMARY KEY (`guru_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`guru_id`, `nip_guru`, `nama_guru`, `jabatan`, `mata_pelajaran`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `nama_file`) VALUES
(1, 99, 'hdua', 'huda', 'huda', 'huda', 'huda', '7217-08-12', '3d-wallpaper-dans-3d-hd-desktop-wallpapers-romania4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE IF NOT EXISTS `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(100) NOT NULL,
  `profil_jurusan` text NOT NULL,
  `file_jurusan` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`, `profil_jurusan`, `file_jurusan`) VALUES
(2, 'Administrasawdi Perkantoran', '<h3>Kompetensi Keahlian :</h3>\r\n<ul>\r\n<li>Mengoperasikan periferal untuk pembuatan grafis</li>\r\n<li>Melakukan entry data (grafis) dengan menggunakan image scanner (level 1)</li>\r\n<li>Mengoperasikan software pengolah gambar vektor (digital illustration)</li>\r\n<li>Mengoperasikan software pengolah gambar raster (digital imaging)</li>\r\n<li>Mengoperasikan periferal web</li>\r\n<li>Melakukan entry data (web) dengan menggunakan image scanner (level 2)</li>\r\n<li>Mengoperasikan software web design</li>\r\n<li>Mengoperasikan software 2D animation</li>\r\n<li>Mengoperasikan software FTP</li>\r\n<li>Mengoperasikan periferal multimedia</li>\r\n<li>Melakukan entry data (multimedia) dengan menggunakan image scanner (level 2)</li>\r\n<li>Mengoperasikan software multimedia</li>\r\n<li>Mengoperasikan software presentasi (level 2)</li>\r\n<li>Mengoperasikan periferal animasi 3D</li>\r\n<li>Mengoperasikan software basic 3D animation (level 1)</li>\r\n<li>Mengoperasikan software model 3D</li>\r\n<li>Mengoperasikan software basic 3D animation (level 2)</li>\r\n<li>Mengoperasikan periferal perekam suara</li>\r\n<li>Mengoperasikan periferal perekam gambar</li>\r\n<li>Mengoperasikan software digital audio dan software visual effect</li>\r\n</ul>\r\n<h3>Muatan Lokal :</h3>\r\n<ul>\r\n<li>Digital Printing</li>\r\n<li>Karikatur</li>\r\n</ul>\r\n<h3>Ruang Lingkup Pekerjaan/Profesi Tamatan :</h3>\r\n<ul>\r\n<li>Pengembang Multimedia (pembuat dan memelihara multimedia)</li>\r\n<li>Industri media dan periklanan dan desain grafis (pembuat dan perancang grafis)</li>\r\n<li>Pengembang permainan digital (pembuat permainan games digital, pembuat media simulasi)</li>\r\n<li>Rumah produksi sinema/film(penyunting video, pembuat video klip)</li>\r\n</ul>', 'ap.jpg'),
(4, 'Teknik Komputer & Jaringan', '<h3>Kompetensi Kalian :</h3>\r\n<ul>\r\n<li>Merakit dan menginstalasi PC/Laptop</li>\r\n<li>Mendiagnosis permasalahan pengoperasian PC dan periferal</li>\r\n<li>Melakukan perbaikan dan atau setting ulang sistem PC/Laptop</li>\r\n<li>Melakukan perbaikan periferal</li>\r\n<li>Melakukan perawatan PC/Laptop</li>\r\n<li>Melakukan perawatan peripheral</li>\r\n<li>Menginstalasi sistem operasi berbasis GUI (Graphical User Interface)</li>\r\n<li>Menginstalasi sistem operasi berbasis teks</li>\r\n<li>Menginstalasi software</li>\r\n<li>Mem-back up dan me-restore</li>\r\n<li>Menginstalasi perangkat jaringan lokal (Local Area Network)</li>\r\n<li>Mendiagnosis permasalahan pengoperasianPC yang tersambung jaringan</li>\r\n<li>Melakukan perbaikan dan atau setting ulang koneksi jaringan</li>\r\n<li>Menginstalasi sistem operasi jaringan berbasis GUI (Graphical User Interface)</li>\r\n<li>Menginstalasi sistem operasi jaringan berbasis teks</li>\r\n<li>Menginstalasi perangkat jaringan berbasis luas (Wide Area Network)</li>\r\n<li>Mendiagnosis permasalahan perangkat yang tersambung jaringan berbasis luas (Wide Area Network)</li>\r\n<li>Melakukan perbaikan dan atau setting ulang koneksi jaringan berbasis luas (Wide Area Network)</li>\r\n<li>Mengadministrasi server dalam jaringan</li>\r\n<li>Merancang bangun dan menganalisa Wide Area Network</li>\r\n</ul>\r\n<h3>Muatan Lokal :</h3>\r\n<ul>\r\n<li>Desain Grafis</li>\r\n<li>Desain Website</li>\r\n</ul>\r\n<h3>Ruang Lingkup Pekerjaan/Profesi Tamatan :</h3>\r\n<ul>\r\n<li>Teknisi komputer/laptop</li>\r\n<li>Teknisi jaringan LAN/WAN</li>\r\n<li>Administrator jaringan</li>\r\n<li>IT Support</li>\r\n<li>Entrepreneurship/wirausaha</li>\r\n</ul>', 'tkj.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE IF NOT EXISTS `tb_kontak` (
  `kontak_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`kontak_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_motivasi`
--

CREATE TABLE IF NOT EXISTS `tb_motivasi` (
  `id_motivasi` int(11) NOT NULL AUTO_INCREMENT,
  `isi_motivasi` text NOT NULL,
  PRIMARY KEY (`id_motivasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_motivasi`
--

INSERT INTO `tb_motivasi` (`id_motivasi`, `isi_motivasi`) VALUES
(5, '<p style="text-align: left;">loremloremloremloremloremloemloremloremloremloremloremloremloremloremloremloremloremlorem</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_organisasi`
--

CREATE TABLE IF NOT EXISTS `tb_organisasi` (
  `id_organisasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(50) NOT NULL,
  PRIMARY KEY (`id_organisasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_organisasi`
--

INSERT INTO `tb_organisasi` (`id_organisasi`, `nama_file`) VALUES
(1, '3367-1280x8001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sejarah`
--

CREATE TABLE IF NOT EXISTS `tb_sejarah` (
  `id_sejarah` int(11) NOT NULL AUTO_INCREMENT,
  `judul_sejarah` varchar(100) NOT NULL,
  `isi_sejarah` text NOT NULL,
  `file_sejarah` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sejarah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id_sejarah`, `judul_sejarah`, `isi_sejarah`, `file_sejarah`) VALUES
(1, 'awadawddwa', '<p>awdawdw</p>', '3D_WallPapers_(9).JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nisn` bigint(20) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas_siswa` enum('X','XI','XII') NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nama_siswa`, `kelas_siswa`, `jk`, `jurusan`, `tgl_lahir`) VALUES
(14, 9993107659, 'Mochtar Aziz', 'XI', 'Laki-laki', 'Administrasi Perkantoran', '1999-09-05'),
(15, 9921234199, 'Haikal Hikmi', 'XI', 'Laki-laki', 'Teknik Komputer & Jaringan', '2015-11-01'),
(16, 99992283758, 'Ersa Perdana Aswany', 'XI', 'Laki-laki', 'Administrasi Perkantoran', '2016-03-22'),
(17, 9993107659, 'Nur Huda', 'XI', 'Laki-laki', 'Administrasi Perkantoran', '2016-04-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slide`
--

CREATE TABLE IF NOT EXISTS `tb_slide` (
  `id_gambar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(255) NOT NULL,
  `title_file` varchar(255) NOT NULL,
  PRIMARY KEY (`id_gambar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `tb_slide`
--

INSERT INTO `tb_slide` (`id_gambar`, `nama_file`, `title_file`) VALUES
(13, '3d-ice-hd-wallpaper.jpg', 'dingin'),
(14, '3D_desktop_wallpaper_wide.jpg', 'asam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_upload`
--

CREATE TABLE IF NOT EXISTS `tb_upload` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) NOT NULL,
  PRIMARY KEY (`upload_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi`
--

CREATE TABLE IF NOT EXISTS `tb_visi` (
  `id_visi` int(11) NOT NULL AUTO_INCREMENT,
  `isi_visi` text NOT NULL,
  `isi_misi` text NOT NULL,
  `isi_tujuan` text NOT NULL,
  PRIMARY KEY (`id_visi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tb_visi`
--

INSERT INTO `tb_visi` (`id_visi`, `isi_visi`, `isi_misi`, `isi_tujuan`) VALUES
(8, '<h5 style="text-align: center;">Cerdas, Cakep, Terampil, Percaya Diri, Berdasarkan Iman dan Taqwa</h5>', '<ol>\r\n<li>\r\n<h5>Menumbuhkan penghayatan dan pengamalan ajaran Islam berdasarkan Al-Qur&rsquo;an dan As-Sunnah sehingga tercipta rasa aman di lingkungannya.</h5>\r\n</li>\r\n<li>\r\n<h5>Menumbuhkan semangat belajar yang tinggi bagi guru dan siswa sehingga tercipta kegiatan belajar mengajar aktif dan kondusif.</h5>\r\n</li>\r\n<li>\r\n<h5>Menumbuhkan minat teknologi informasi sehingga mampu membaca dan mengikuti perkembangan jaman.</h5>\r\n</li>\r\n<li>\r\n<h5>Menumbuhkan minat berusaha mandiri dengan mampu melakukan perbaikan dan perakitan komputer dan HP.</h5>\r\n</li>\r\n<li>\r\n<h5>Menumbuhkan minat olahraga dan sni dalam rangka menegakkan budaya bangsa.</h5>\r\n</li>\r\n</ol>', '<ol>\r\n<li>\r\n<h5>Memasuki lapangan kerja serta dapat mengembangkan sikap profesional</h5>\r\n</li>\r\n<li>\r\n<h5>Mampu berkompetensi memilih karir guna mengembangkan diri</h5>\r\n</li>\r\n<li>\r\n<h5>Mengisi kebutuhan dunia usaha dan industri dengan kompetensi yang dimiliki</h5>\r\n</li>\r\n</ol>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
