-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 11 Mar 2020 pada 18.35
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simartedata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `id_rt` int(11) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `password` varchar(64) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `diperbarui` datetime NOT NULL,
  `login` datetime NOT NULL,
  `aktif` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_lengkap`, `id_rt`, `no_telepon`, `password`, `dibuat`, `diperbarui`, `login`, `aktif`) VALUES
(2, 'AR Dev', 1, '085695904185', '$2y$10$K57burH3lIgBd4qXHODmvuo9KPbkLpSr.6Pzpf2/uET4vOMUy2LVG', '2019-02-02 05:11:23', '0000-00-00 00:00:00', '2020-03-08 05:53:43', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_banner`
--

CREATE TABLE `tb_banner` (
  `id_slider` int(11) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `slider` varchar(200) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `aktif` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_banner`
--

INSERT INTO `tb_banner` (`id_slider`, `caption`, `jenis`, `slider`, `dibuat`, `aktif`) VALUES
(2, 'Ini percobaan Ke 2', 'BERITA', 'banner_1583511924.jpg', '2020-03-06 16:25:24', 1),
(3, 'PERBAIKAN JEMBATAN JAMBU MAKSIMAL TIGA MINGGU', 'BERITA', 'banner_1583512092.jpeg', '2020-03-06 16:28:12', 1),
(4, 'Beragam seni & budaya di Kab. Tegal', 'BERITA', 'banner_1583643335.jpg', '2020-03-08 04:55:35', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(200) NOT NULL,
  `foto_berita` varchar(30) NOT NULL,
  `isi_berita` text NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT 1,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `foto_berita`, `isi_berita`, `publish`, `dibuat`, `id_admin`) VALUES
(1, 'Pemilihan kepala desa baronan berjalan lancar', 'berita_1549124929.jpg', '<p style=\"-webkit-tap-highlight-color: transparent; margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: fadeInLorem 1000ms linear 0s 1 normal none running;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus eget nunc scelerisque viverra. Tristique senectus et netus et malesuada fames. Justo laoreet sit amet cursus sit amet dictum. Feugiat in fermentum posuere urna. Sed blandit libero volutpat sed cras ornare arcu dui vivamus. Accumsan sit amet nulla facilisi morbi tempus iaculis urna. Tempor orci dapibus ultrices in iaculis nunc sed augue. Lectus quam id leo in vitae turpis massa. Duis tristique sollicitudin nibh sit. Enim sit amet venenatis urna. Erat nam at lectus urna. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis. Sit amet luctus venenatis lectus magna fringilla urna. Fringilla urna porttitor rhoncus dolor purus non enim praesent elementum.</p><p style=\"-webkit-tap-highlight-color: transparent; margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: fadeInLorem 1000ms linear 0s 1 normal none running;\">Consequat ac felis donec et odio. Euismod nisi porta lorem mollis. Mattis molestie a iaculis at erat pellentesque adipiscing. Eu feugiat pretium nibh ipsum consequat nisl vel pretium lectus. Neque viverra justo nec ultrices. Eu facilisis sed odio morbi. Id faucibus nisl tincidunt eget nullam non nisi est. Tellus in hac habitasse platea dictumst vestibulum rhoncus est. Risus commodo viverra maecenas accumsan lacus vel facilisis. Adipiscing bibendum est ultricies integer quis. Tortor vitae purus faucibus ornare suspendisse sed nisi. Sed adipiscing diam donec adipiscing. Vitae justo eget magna fermentum iaculis eu. Sed odio morbi quis commodo odio aenean.</p><p style=\"-webkit-tap-highlight-color: transparent; margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: fadeInLorem 1000ms linear 0s 1 normal none running;\">Magnis dis parturient montes nascetur ridiculus mus mauris. Quisque egestas diam in arcu. Ac placerat vestibulum lectus mauris ultrices eros. Lobortis elementum nibh tellus molestie nunc non blandit. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Consectetur a erat nam at lectus urna duis. Elementum tempus egestas sed sed. A diam sollicitudin tempor id eu nisl nunc mi ipsum. Eget magna fermentum iaculis eu non. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Massa tincidunt dui ut ornare lectus sit amet. Nunc sed velit dignissim sodales ut. Senectus et netus et malesuada fames.</p><p style=\"-webkit-tap-highlight-color: transparent; margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: fadeInLorem 1000ms linear 0s 1 normal none running;\">Mi bibendum neque egestas congue quisque egestas diam in arcu. A diam maecenas sed enim. Egestas maecenas pharetra convallis posuere morbi leo urna. Morbi tristique senectus et netus et malesuada fames ac. Sed enim ut sem viverra aliquet eget sit amet tellus. Bibendum arcu vitae elementum curabitur vitae nunc sed. Lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis. Fermentum iaculis eu non diam. Elementum integer enim neque volutpat ac tincidunt vitae semper quis. Lectus proin nibh nisl condimentum id venenatis a condimentum vitae. Dictum at tempor commodo ullamcorper a lacus vestibulum sed arcu. Praesent elementum facilisis leo vel fringilla est. Consequat interdum varius sit amet mattis vulputate enim nulla. Id aliquet lectus proin nibh nisl condimentum id venenatis a. Pulvinar pellentesque habitant morbi tristique senectus et netus. Fermentum leo vel orci porta non pulvinar neque. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Proin fermentum leo vel orci porta.</p><p style=\"-webkit-tap-highlight-color: transparent; margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: fadeInLorem 1000ms linear 0s 1 normal none running;\">Mauris nunc congue nisi vitae. Fermentum dui faucibus in ornare quam viverra orci sagittis. Proin nibh nisl condimentum id. Erat nam at lectus urna. Nisl tincidunt eget nullam non nisi. Bibendum est ultricies integer quis auctor elit sed. Ac felis donec et odio pellentesque diam volutpat commodo sed. Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Suspendisse interdum consectetur libero id faucibus nisl tincidunt. Tellus in metus vulputate eu scelerisque. Eget duis at tellus at urna condimentum mattis pellentesque. Ut venenatis tellus in metus vulputate eu scelerisque felis. Commodo ullamcorper a lacus vestibulum sed arcu non odio.</p><p style=\"-webkit-tap-highlight-color: transparent; margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: fadeInLorem 1000ms linear 0s 1 normal none running;\">Ultrices neque ornare aenean euismod elementum. Aenean sed adipiscing diam donec. Erat velit scelerisque in dictum. Tellus orci ac auctor augue mauris augue neque. Nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus. Auctor eu augue ut lectus arcu bibendum at varius vel. Lectus arcu bibendum at varius vel pharetra vel. Posuere urna nec tincidunt praesent semper feugiat. Aenean vel elit scelerisque mauris. At consectetur lorem donec massa. Quis hendrerit dolor magna eget. Netus et malesuada fames ac turpis egestas. Blandit volutpat maecenas volutpat blandit. Ut sem viverra aliquet eget sit amet. Risus viverra adipiscing at in tellus integer feugiat scelerisque. Viverra aliquet eget sit amet. Auctor augue mauris augue neque gravida in. Dapibus ultrices in iaculis nunc sed augue.</p><p style=\"-webkit-tap-highlight-color: transparent; margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: fadeInLorem 1000ms linear 0s 1 normal none running;\">Integer eget aliquet nibh praesent tristique magna. Neque sodales ut etiam sit amet nisl. Tellus at urna condimentum mattis. Rutrum quisque non tellus orci ac. Dolor purus non enim praesent. In hac habitasse platea dictumst quisque sagittis purus sit amet. In fermentum et sollicitudin ac orci phasellus egestas. Ut venenatis tellus in metus. Orci a scelerisque purus semper. Pretium aenean pharetra magna ac.</p>', 1, '2019-01-22 08:22:04', 2),
(3, 'Warga RT01 Menerima bantuan berupa sembako dari CALEG DPRD', 'berita_1549124989.jpg', '<p transparent;=\"\" margin-top:=\"\" 1.5em;=\"\" margin-bottom:=\"\" line-height:=\"\" 1.5;=\"\" animation:=\"\" fadeinlorem=\"\" 1000ms=\"\" linear=\"\" 0s=\"\" 1=\"\" normal=\"\" none=\"\" running;\\\"=\"\" style=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Cursus eget nunc scelerisque viverra. Tristique senectus et netus et malesuada fames. Justo laoreet sit amet cursus sit amet dictum. Feugiat in fermentum posuere urna. Sed blandit libero volutpat sed cras ornare arcu dui vivamus. Accumsan sit amet nulla facilisi morbi tempus iaculis urna. Tempor orci dapibus ultrices in iaculis nunc sed augue. Lectus quam id leo in vitae turpis massa. Duis tristique sollicitudin nibh sit. Enim sit amet venenatis urna. Erat nam at lectus urna. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis. Sit amet luctus venenatis lectus magna fringilla urna. Fringilla urna porttitor rhoncus dolor purus non enim praesent elementum.</p><p transparent;=\"\" margin-top:=\"\" 1.5em;=\"\" margin-bottom:=\"\" line-height:=\"\" 1.5;=\"\" animation:=\"\" fadeinlorem=\"\" 1000ms=\"\" linear=\"\" 0s=\"\" 1=\"\" normal=\"\" none=\"\" running;\\\"=\"\" style=\"\">Consequat ac felis donec et odio. Euismod nisi porta lorem mollis. Mattis molestie a iaculis at erat pellentesque adipiscing. Eu feugiat pretium nibh ipsum consequat nisl vel pretium lectus. Neque viverra justo nec ultrices. Eu facilisis sed odio morbi. Id faucibus nisl tincidunt eget nullam non nisi est. Tellus in hac habitasse platea dictumst vestibulum rhoncus est. Risus commodo viverra maecenas accumsan lacus vel facilisis. Adipiscing bibendum est ultricies integer quis. Tortor vitae purus faucibus ornare suspendisse sed nisi. Sed adipiscing diam donec adipiscing. Vitae justo eget magna fermentum iaculis eu. Sed odio morbi quis commodo odio aenean.</p><p transparent;=\"\" margin-top:=\"\" 1.5em;=\"\" margin-bottom:=\"\" line-height:=\"\" 1.5;=\"\" animation:=\"\" fadeinlorem=\"\" 1000ms=\"\" linear=\"\" 0s=\"\" 1=\"\" normal=\"\" none=\"\" running;\\\"=\"\" style=\"\">Magnis dis parturient montes nascetur ridiculus mus mauris. Quisque egestas diam in arcu. Ac placerat vestibulum lectus mauris ultrices eros. Lobortis elementum nibh tellus molestie nunc non blandit. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Consectetur a erat nam at lectus urna duis. Elementum tempus egestas sed sed. A diam sollicitudin tempor id eu nisl nunc mi ipsum. Eget magna fermentum iaculis eu non. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Nisi porta lorem mollis aliquam ut porttitor leo a diam. Massa tincidunt dui ut ornare lectus sit amet. Nunc sed velit dignissim sodales ut. Senectus et netus et malesuada fames.</p><p transparent;=\"\" margin-top:=\"\" 1.5em;=\"\" margin-bottom:=\"\" line-height:=\"\" 1.5;=\"\" animation:=\"\" fadeinlorem=\"\" 1000ms=\"\" linear=\"\" 0s=\"\" 1=\"\" normal=\"\" none=\"\" running;\\\"=\"\" style=\"\">Mi bibendum neque egestas congue quisque egestas diam in arcu. A diam maecenas sed enim. Egestas maecenas pharetra convallis posuere morbi leo urna. Morbi tristique senectus et netus et malesuada fames ac. Sed enim ut sem viverra aliquet eget sit amet tellus. Bibendum arcu vitae elementum curabitur vitae nunc sed. Lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis. Fermentum iaculis eu non diam. Elementum integer enim neque volutpat ac tincidunt vitae semper quis. Lectus proin nibh nisl condimentum id venenatis a condimentum vitae. Dictum at tempor commodo ullamcorper a lacus vestibulum sed arcu. Praesent elementum facilisis leo vel fringilla est. Consequat interdum varius sit amet mattis vulputate enim nulla. Id aliquet lectus proin nibh nisl condimentum id venenatis a. Pulvinar pellentesque habitant morbi tristique senectus et netus. Fermentum leo vel orci porta non pulvinar neque. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Proin fermentum leo vel orci porta.&lt;\\/p&gt;</p><p transparent;=\"\" margin-top:=\"\" 1.5em;=\"\" margin-bottom:=\"\" line-height:=\"\" 1.5;=\"\" animation:=\"\" fadeinlorem=\"\" 1000ms=\"\" linear=\"\" 0s=\"\" 1=\"\" normal=\"\" none=\"\" running;\\\"=\"\" style=\"\">Mauris nunc congue nisi vitae. Fermentum dui faucibus in ornare quam viverra orci sagittis. Proin nibh nisl condimentum id. Erat nam at lectus urna. Nisl tincidunt eget nullam non nisi. Bibendum est ultricies integer quis auctor elit sed. Ac felis donec et odio pellentesque diam volutpat commodo sed. Ullamcorper malesuada proin libero nunc consequat interdum varius sit. Suspendisse interdum consectetur libero id faucibus nisl tincidunt. Tellus in metus vulputate eu scelerisque. Eget duis at tellus at urna condimentum mattis pellentesque. Ut venenatis tellus in metus vulputate eu scelerisque felis. Commodo ullamcorper a lacus vestibulum sed arcu non odio.&lt;\\/p&gt;</p><p transparent;=\"\" margin-top:=\"\" 1.5em;=\"\" margin-bottom:=\"\" line-height:=\"\" 1.5;=\"\" animation:=\"\" fadeinlorem=\"\" 1000ms=\"\" linear=\"\" 0s=\"\" 1=\"\" normal=\"\" none=\"\" running;\\\"=\"\" style=\"\">Ultrices neque ornare aenean euismod elementum. Aenean sed adipiscing diam donec. Erat velit scelerisque in dictum. Tellus orci ac auctor augue mauris augue neque. Nulla porttitor massa id neque aliquam vestibulum morbi blandit cursus. Auctor eu augue ut lectus arcu bibendum at varius vel. Lectus arcu bibendum at varius vel pharetra vel. Posuere urna nec tincidunt praesent semper feugiat. Aenean vel elit scelerisque mauris. At consectetur lorem donec massa. Quis hendrerit dolor magna eget. Netus et malesuada fames ac turpis egestas. Blandit volutpat maecenas volutpat blandit. Ut sem viverra aliquet eget sit amet. Risus viverra adipiscing at in tellus integer feugiat scelerisque. Viverra aliquet eget sit amet. Auctor augue mauris augue neque gravida in. Dapibus ultrices in iaculis nunc sed augue.</p><p transparent;=\"\" margin-top:=\"\" 1.5em;=\"\" margin-bottom:=\"\" line-height:=\"\" 1.5;=\"\" animation:=\"\" fadeinlorem=\"\" 1000ms=\"\" linear=\"\" 0s=\"\" 1=\"\" normal=\"\" none=\"\" running;\\\"=\"\" style=\"\">Integer eget aliquet nibh praesent tristique magna. Neque sodales ut etiam sit amet nisl. Tellus at urna condimentum mattis. Rutrum quisque non tellus orci ac. Dolor purus non enim praesent. In hac habitasse platea dictumst quisque sagittis purus sit amet. In fermentum et sollicitudin ac orci phasellus egestas. Ut venenatis tellus in metus. Orci a scelerisque purus semper. Pretium aenean pharetra magna ac.</p>', 1, '2019-01-22 08:54:28', 2),
(4, 'Rapat Pleno 2019 Di Kantor Kecamatan', 'berita_1549125131.jpg', '<p>Siang tadi sejumlah pegawai melakukan rapan pleno guna koordinasi aktifitas warga setempat</p>', 1, '2019-02-01 14:00:08', 2),
(5, 'Apa itu Smart City?', 'berita_1549125236.png', '<p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(26, 26, 26); font-size: 16px;\"><span style=\"font-family: \" times=\"\" new=\"\" roman\";=\"\" background-color:=\"\" yellow;\"=\"\">Secara harfiah, smart city dapat diartikan sebagai “kota cerdas”. Smart city adalah konsep kota cerdas yang dirancang guna membantu berbagai hal kegiatan masyarakat, terutama dalam upaya mengelola sumber daya yang ada dengan efisien, serta memberikan kemudahan mengakses informasi kepada masyarakat, hingga untuk mengantisipasi kejadian yang tak terduga sebelumnya.</span></p><p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(26, 26, 26); font-size: 16px;\"><span style=\"font-family: \" times=\"\" new=\"\" roman\";=\"\" background-color:=\"\" yellow;\"=\"\">Dikutip dari laman&nbsp;<span class=\"skimlinks-unlinked\" style=\"box-sizing: inherit;\">smartcityindonesia.org</span>, sebuah kota dikatakan Smart apabila kota tersebut benar-benar dapat mengetahui keadaan kota di dalamnya, memahami permasalahan tersebut secara lebih mendalam, hingga mampu melakukan aksi terhadap permasalahan tersebut.</span></p><p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(26, 26, 26); font-size: 16px;\"><span style=\"font-family: \" times=\"\" new=\"\" roman\";=\"\" background-color:=\"\" yellow;\"=\"\">Sedangkan dalam buku Pengenalan dan Pengembangan Smart City, kota cerdas didefinisikan sebagai sebuah konsep pengembangan dan pengelolaan kota dengan pemanfaatan Teknologi Informasi dan Komunikasi (TIK) untuk menghubungkan, memonitor, dan mengendalikan berbagai sumber daya yang ada di dalam kota dengan lebih efektif dan efisien untuk memaksimalkan pelayanan kepada warganya serta mendukung pembangunan yang berkelanjutan</span></p>', 1, '2019-02-02 07:19:54', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(200) NOT NULL,
  `anggaran` decimal(10,0) NOT NULL,
  `iuran` decimal(10,0) NOT NULL,
  `mulai` datetime NOT NULL,
  `selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `anggaran`, `iuran`, `mulai`, `selesai`) VALUES
(2, 'Iuran Lomba 17 Agustus', '20000000', '50000', '2019-02-07 00:00:00', '2019-02-08 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konten_app`
--

CREATE TABLE `tb_konten_app` (
  `id_konten_app` int(11) NOT NULL,
  `title_konten_app` varchar(100) NOT NULL,
  `subtitle_konten_app` varchar(100) NOT NULL,
  `image_konten_app` varchar(50) NOT NULL,
  `konten_app` varchar(50) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lng` varchar(30) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_konten_app`
--

INSERT INTO `tb_konten_app` (`id_konten_app`, `title_konten_app`, `subtitle_konten_app`, `image_konten_app`, `konten_app`, `lat`, `lng`, `dibuat`) VALUES
(3, 'Konten1', 'Ini Konten1', 'konten_1583648923.jpg', '', '', '', '2020-03-08 06:28:43'),
(4, 'Konten2', 'Ini Konten2', 'konten_1583648936.jpg', '', '', '', '2020-03-08 06:28:56'),
(5, 'Konten3', 'Ini Konten3', 'konten_1583648951.jpg', '', '', '', '2020-03-08 06:29:11'),
(6, 'Konten4', 'Ini Konten4', 'konten_1583648962.jpg', '', '', '', '2020-03-08 06:29:22'),
(7, 'Konten5', 'Ini Konten5', 'konten_1583649018.jpg', '', '', '', '2020-03-08 06:30:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu_app`
--

CREATE TABLE `tb_menu_app` (
  `id_menu_app` int(11) NOT NULL,
  `title_menu_app` varchar(100) NOT NULL,
  `subtitle_menu_app` varchar(50) NOT NULL,
  `image_menu_app` varchar(50) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_menu_app`
--

INSERT INTO `tb_menu_app` (`id_menu_app`, `title_menu_app`, `subtitle_menu_app`, `image_menu_app`, `dibuat`, `id_admin`) VALUES
(1, 'WISATA', 'Ayo jelajahi wisata di Kab. Tegal', 'menu_1583645492.png', '2020-03-06 17:19:37', 0),
(2, 'SENI', 'Beragam seni & budaya di Kab. Tegal', 'menu_1583645499.png', '2020-03-06 17:22:56', 0),
(3, 'ACARA', 'Kab. Tegal memiliki acara tahuna yang menarik loh', 'menu_1583645505.png', '2020-03-06 17:23:30', 0),
(4, 'FASILITAS', 'ini dia fasilitas-fasilitas umum yang ada di Kab. ', 'menu_1583645513.png', '2020-03-06 17:25:18', 0),
(5, 'PEMERINTAH', 'Apa saja dinas-dinas di Kab. Tegal', 'menu_1583645534.png', '2020-03-06 17:25:52', 0),
(6, 'Aplikasi ', 'Aplikasi/Website yang ada di Kab. Peklaongan', 'menu_1583645544.png', '2020-03-06 17:26:37', 0),
(7, 'SOSMED', 'Yuk follow akun sosmed Kab. Pekalongan biar selalu', 'menu_1583645551.png', '2020-03-06 17:27:23', 0),
(8, 'CCTV', 'Sekarang desa kedungbanteng sudah terpantau cctv', 'menu_1583645700.png', '2020-03-08 05:35:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penarikan_dana`
--

CREATE TABLE `tb_penarikan_dana` (
  `id_penarikan_dana` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `id_warga` int(11) NOT NULL,
  `jumlah` decimal(10,0) NOT NULL,
  `tanggal` datetime NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penarikan_dana`
--

INSERT INTO `tb_penarikan_dana` (`id_penarikan_dana`, `id_kegiatan`, `id_warga`, `jumlah`, `tanggal`, `dibuat`, `id_admin`) VALUES
(119, 1, 69, '753000', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(120, 1, 70, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(121, 1, 71, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(122, 1, 72, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(123, 1, 73, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(124, 1, 74, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(125, 1, 75, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(126, 1, 76, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(127, 1, 77, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(128, 1, 78, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(129, 1, 79, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(130, 1, 80, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(131, 1, 81, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(132, 1, 82, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(133, 1, 83, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(134, 1, 84, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(135, 1, 85, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(136, 1, 86, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(137, 1, 87, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(138, 1, 88, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(139, 1, 89, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(140, 1, 90, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(141, 1, 91, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(142, 1, 92, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(143, 1, 93, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(144, 1, 94, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(145, 1, 95, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(146, 1, 96, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(147, 1, 97, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(148, 1, 98, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(149, 1, 99, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(150, 1, 100, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(151, 1, 101, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(152, 1, 102, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(153, 1, 103, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(154, 1, 104, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(155, 1, 105, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(156, 1, 106, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(157, 1, 107, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(158, 1, 108, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(159, 1, 109, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(160, 1, 110, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(161, 1, 111, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(162, 1, 112, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(163, 1, 113, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(164, 1, 114, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(165, 1, 115, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(166, 1, 116, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(167, 1, 117, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(168, 1, 172, '0', '2019-02-01 14:40:22', '2019-02-01 14:46:45', 1),
(169, 1, 118, '746000', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(170, 1, 119, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(171, 1, 120, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(172, 1, 121, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(173, 1, 122, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(174, 1, 123, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(175, 1, 124, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(176, 1, 125, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(177, 1, 126, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(178, 1, 127, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(179, 1, 128, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(180, 1, 129, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(181, 1, 130, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(182, 1, 131, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(183, 1, 132, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(184, 1, 133, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(185, 1, 134, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(186, 1, 135, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(187, 1, 136, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(188, 1, 137, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(189, 1, 138, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(190, 1, 139, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(191, 1, 140, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(192, 1, 141, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(193, 1, 142, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(194, 1, 143, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(195, 1, 144, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(196, 1, 145, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(197, 1, 146, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(198, 1, 147, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(199, 1, 148, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(200, 1, 149, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(201, 1, 150, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(202, 1, 151, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(203, 1, 152, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:24', 1),
(204, 1, 153, '0', '2019-02-01 14:41:01', '2019-02-01 14:47:25', 1),
(205, 1, 154, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(206, 1, 155, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(207, 1, 156, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(208, 1, 157, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(209, 1, 158, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(210, 1, 159, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(211, 1, 160, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(212, 1, 161, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(213, 1, 162, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(214, 1, 163, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(215, 1, 164, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(216, 1, 165, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(217, 1, 166, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(218, 1, 167, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(219, 1, 168, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(220, 1, 169, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(221, 1, 170, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(222, 1, 171, '0', '2019-02-01 14:41:02', '2019-02-01 14:47:25', 1),
(223, 1, 1, '1284000', '2019-02-01 14:41:52', '2019-02-01 14:48:15', 1),
(224, 1, 2, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(225, 1, 3, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(226, 1, 4, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(227, 1, 5, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(228, 1, 6, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(229, 1, 7, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(230, 1, 8, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(231, 1, 9, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(232, 1, 10, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(233, 1, 11, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(234, 1, 12, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(235, 1, 13, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(236, 1, 14, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(237, 1, 15, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(238, 1, 16, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(239, 1, 17, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(240, 1, 18, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(241, 1, 19, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(242, 1, 20, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(243, 1, 21, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(244, 1, 22, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(245, 1, 23, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(246, 1, 24, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(247, 1, 25, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(248, 1, 26, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(249, 1, 27, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(250, 1, 28, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(251, 1, 29, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(252, 1, 30, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(253, 1, 31, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(254, 1, 32, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(255, 1, 33, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(256, 1, 34, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:16', 1),
(257, 1, 35, '0', '2019-02-01 14:41:53', '2019-02-01 14:48:17', 1),
(258, 1, 36, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(259, 1, 37, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(260, 1, 38, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(261, 1, 39, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(262, 1, 40, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(263, 1, 41, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(264, 1, 42, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(265, 1, 43, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(266, 1, 44, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(267, 1, 45, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(268, 1, 46, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(269, 1, 47, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(270, 1, 48, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(271, 1, 49, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(272, 1, 50, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(273, 1, 51, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(274, 1, 52, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(275, 1, 53, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(276, 1, 54, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(277, 1, 55, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(278, 1, 56, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(279, 1, 57, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(280, 1, 58, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(281, 1, 59, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(282, 1, 60, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(283, 1, 61, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(284, 1, 62, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(285, 1, 63, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(286, 1, 64, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(287, 1, 65, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(288, 1, 66, '0', '2019-02-01 14:41:54', '2019-02-01 14:48:17', 1),
(289, 1, 67, '0', '2019-02-01 14:41:55', '2019-02-01 14:48:17', 1),
(290, 1, 68, '0', '2019-02-01 14:41:55', '2019-02-01 14:48:17', 1),
(291, 2, 1, '50000', '2019-02-13 06:42:18', '2019-02-13 05:42:18', 1),
(292, 2, 2, '50000', '2019-02-13 06:42:18', '2019-02-13 05:42:18', 1),
(293, 2, 3, '50000', '2019-02-13 06:42:18', '2019-02-13 05:42:18', 1),
(294, 2, 4, '50000', '2019-02-13 06:42:18', '2019-02-13 05:42:18', 1),
(295, 2, 5, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(296, 2, 6, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(297, 2, 7, '49996', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(298, 2, 8, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(299, 2, 9, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(300, 2, 10, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(301, 2, 11, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(302, 2, 12, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(303, 2, 13, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(304, 2, 14, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(305, 2, 15, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(306, 2, 16, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(307, 2, 17, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(308, 2, 18, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(309, 2, 19, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(310, 2, 20, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(311, 2, 21, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(312, 2, 22, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(313, 2, 23, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(314, 2, 24, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(315, 2, 25, '50000', '2019-02-13 06:42:19', '2019-02-13 05:42:19', 1),
(316, 2, 26, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(317, 2, 27, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(318, 2, 28, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(319, 2, 29, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(320, 2, 30, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(321, 2, 31, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(322, 2, 32, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(323, 2, 33, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(324, 2, 34, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(325, 2, 35, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(326, 2, 36, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(327, 2, 37, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(328, 2, 38, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(329, 2, 39, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(330, 2, 40, '49997', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(331, 2, 41, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(332, 2, 42, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(333, 2, 43, '50000', '2019-02-13 06:42:20', '2019-02-13 05:42:20', 1),
(334, 2, 44, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(335, 2, 45, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(336, 2, 46, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(337, 2, 47, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(338, 2, 48, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(339, 2, 49, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(340, 2, 50, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(341, 2, 51, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(342, 2, 52, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(343, 2, 53, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(344, 2, 54, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(345, 2, 55, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(346, 2, 56, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(347, 2, 57, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(348, 2, 58, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(349, 2, 59, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(350, 2, 60, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(351, 2, 61, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(352, 2, 62, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(353, 2, 63, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(354, 2, 64, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(355, 2, 65, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(356, 2, 66, '50000', '2019-02-13 06:42:21', '2019-02-13 05:42:21', 1),
(357, 2, 67, '50000', '2019-02-13 06:42:22', '2019-02-13 05:42:22', 1),
(358, 2, 68, '50000', '2019-02-13 06:42:22', '2019-02-13 05:42:22', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rt`
--

CREATE TABLE `tb_rt` (
  `id_rt` int(11) NOT NULL,
  `id_rw` int(11) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `ketua_rt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rt`
--

INSERT INTO `tb_rt` (`id_rt`, `id_rw`, `rt`, `ketua_rt`) VALUES
(1, 7, '01', 'Bpk. Wahadi'),
(2, 7, '02', 'Bpk. Subekhi'),
(3, 7, '03', 'Bpk. Gathot'),
(4, 7, '04', 'Bpk. Dasuki'),
(5, 7, '05', 'Bpk. Gajul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rw`
--

CREATE TABLE `tb_rw` (
  `id_rw` int(11) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `ketua_rw` varchar(100) NOT NULL,
  `nama_dusun` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rw`
--

INSERT INTO `tb_rw` (`id_rw`, `rw`, `ketua_rw`, `nama_dusun`) VALUES
(7, '07', 'Rejo Herbeno', 'Bubak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id_setting` int(11) NOT NULL,
  `kode_desa` varchar(10) NOT NULL,
  `nama_desa` varchar(100) NOT NULL,
  `nama_kepala_desa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(11) NOT NULL,
  `foto_slider` varchar(30) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp(),
  `aktif` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `foto_slider`, `caption`, `dibuat`, `aktif`) VALUES
(4, 'slider_1549124243.png', 'Contoh slider 1', '2019-01-23 04:53:35', 1),
(5, 'slider_1549124264.jpg', 'Contoh slider 2', '2019-01-23 08:17:46', 1),
(6, 'slider_1549124281.jpg', 'Contoh slider 3', '2019-01-23 08:18:50', 1),
(7, 'slider_1549124303.jpg', 'Contoh slider 4', '2019-01-26 14:33:58', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_submenu_app`
--

CREATE TABLE `tb_submenu_app` (
  `id_submenu_app` int(11) NOT NULL,
  `title_submenu_app` varchar(100) NOT NULL,
  `subtitle_submenu_app` varchar(100) NOT NULL,
  `image_submenu_app` varchar(50) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_submenu_app`
--

INSERT INTO `tb_submenu_app` (`id_submenu_app`, `title_submenu_app`, `subtitle_submenu_app`, `image_submenu_app`, `dibuat`) VALUES
(1, 'Konten', 'Ini Konten', 'submenu_1583648710.jpg', '2020-03-06 17:41:41'),
(2, 'Konten1', 'Ini Konten1', 'submenu_1583648729.jpg', '2020-03-08 06:25:29'),
(4, 'Konten2', 'Ini Konten2', 'submenu_1583648762.jpg', '2020-03-08 06:26:02'),
(5, 'Konten3', 'Ini Konten3', 'submenu_1583648776.jpg', '2020-03-08 06:26:16'),
(6, 'Konten4', 'Ini Konten4', 'submenu_1583648791.jpg', '2020-03-08 06:26:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `nama_lengkap`, `alamat_lengkap`) VALUES
(1, 'Edi Susanto', 'jl. delima tegal'),
(3, 'Kartijan', 'jl. Mujaer Mundur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_telepon`
--

CREATE TABLE `tb_telepon` (
  `id_telepon` int(11) NOT NULL,
  `nama_telepon` varchar(100) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_telepon`
--

INSERT INTO `tb_telepon` (`id_telepon`, `nama_telepon`, `nomor_telepon`, `dibuat`) VALUES
(4, 'RSUD DR. SOESELO SLAWI', ' (0283) 491016', '2019-01-23 04:27:57'),
(5, 'RSI SINGKIL', '(0283) 3448131', '2019-01-23 04:28:32'),
(6, 'POLRES TEGAL', '(0283) 492003', '2019-01-24 05:13:59'),
(7, 'SAMSAT KAB. TEGAL', ' (0283) 492003 ', '2019-01-24 05:14:56'),
(8, 'PDAM KAB. TEGAL', '(0283) 491682', '2019-01-24 05:16:19'),
(10, 'PMI KAB. TEGAL', '(0283) 4561201', '2019-01-24 05:18:02'),
(12, 'PLN SLAWI', '(0283) 492105', '2019-01-24 05:19:11'),
(13, 'KEJAKSAAN NEGERI SLAWI', '(0283) 491212', '2019-01-24 05:19:33'),
(14, 'BRIGIF-4 DEWA RATNA', '(0283) 6195246', '2019-01-24 05:19:53'),
(15, 'PUSKESMAS SLAWI\r\n', '(0281) 7620781', '2019-01-24 05:20:12'),
(16, 'KPU KAB. TEGAL', '(0283) 492171', '2019-01-24 05:20:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_warga`
--

CREATE TABLE `tb_warga` (
  `id_warga` int(11) NOT NULL,
  `nik` decimal(16,0) NOT NULL,
  `nama_lengkap_warga` varchar(100) NOT NULL,
  `id_rt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_warga`
--

INSERT INTO `tb_warga` (`id_warga`, `nik`, `nama_lengkap_warga`, `id_rt`) VALUES
(1, '3328081406000009', 'Casmudi', 1),
(2, '3328081406000009', 'Rahim', 1),
(3, '3328081406000009', 'Nurohman', 1),
(4, '3328081406000009', 'Edi Purnomo', 1),
(5, '3328081406000009', 'Oyot Suyoto', 1),
(6, '3328081406000009', 'Ade Saputra', 1),
(7, '3328081406000009', 'Dul Jalil', 1),
(8, '3328081406000009', 'Darlan', 1),
(9, '3328081406000009', 'Abdul Aziz', 1),
(10, '3328081406000009', 'Subeni', 1),
(11, '0', 'Casmidi', 1),
(12, '0', 'Sugeng', 1),
(13, '0', 'Sakur', 1),
(14, '0', 'Rudiyanto', 1),
(15, '0', 'Basuki', 1),
(16, '0', 'Bowo', 1),
(17, '0', 'Romadhon', 1),
(18, '0', 'Sobirin', 1),
(19, '0', 'Casmadi', 1),
(20, '0', 'Tahuri', 1),
(21, '0', 'Kholidin', 1),
(22, '0', 'Dopar', 1),
(23, '0', 'Darli', 1),
(24, '0', 'Jono', 1),
(25, '0', 'Utarsih', 1),
(26, '0', 'Kastari', 1),
(27, '0', 'Saroh', 1),
(28, '0', 'Nurwasis', 1),
(29, '0', 'H. Kadri', 1),
(30, '0', 'Slamet', 1),
(31, '0', 'Supar', 1),
(32, '0', 'Samai', 1),
(33, '0', 'Casbani', 1),
(34, '0', 'Salban', 1),
(35, '0', 'Tuti', 1),
(36, '0', 'Taryan', 1),
(37, '0', 'Agus', 1),
(38, '0', 'Giri', 1),
(39, '0', 'Roib', 1),
(40, '0', 'Nardi', 1),
(41, '0', 'Rojah', 1),
(42, '0', 'Muhayat', 1),
(43, '0', 'Basori', 1),
(44, '0', 'Rahmat', 1),
(45, '0', 'Wanuri', 1),
(46, '0', 'Suprirman', 1),
(47, '0', 'Parno', 1),
(48, '0', 'Sukadi', 1),
(49, '0', 'Ruminah', 1),
(50, '0', 'Diyo', 1),
(51, '0', 'Risah', 1),
(52, '0', 'Nanang', 1),
(53, '0', 'Cawil', 1),
(54, '0', 'Kaman', 1),
(55, '0', 'Iyah', 1),
(56, '0', 'Kasiroh', 1),
(57, '0', 'Olidah', 1),
(58, '0', 'Imam', 1),
(59, '0', 'Suryadi', 1),
(60, '0', 'Kasdono', 1),
(61, '0', 'Sukirno', 1),
(62, '0', 'Tasum', 1),
(63, '0', 'Purwanto', 1),
(64, '0', 'Rusnoto', 1),
(65, '0', 'Sion', 1),
(66, '0', 'Teguh', 1),
(67, '0', 'Raadi', 1),
(68, '0', 'Rasdan', 1),
(69, '0', 'Rasidi', 2),
(70, '0', 'Tarmono', 2),
(71, '0', 'Ramisah', 2),
(72, '0', 'Jamin', 2),
(73, '0', 'Wasirun', 2),
(74, '0', 'Suwono', 2),
(75, '0', 'Toyo', 2),
(76, '0', 'Kis', 2),
(77, '0', 'Nursito', 2),
(78, '0', 'Tarman', 2),
(79, '0', 'Dasari', 2),
(80, '0', 'Saroni', 2),
(81, '0', 'Anwar', 2),
(82, '0', 'Wirjo', 2),
(83, '0', 'Naim', 2),
(84, '0', 'Tarban', 2),
(85, '0', 'Amad', 2),
(86, '0', 'Usuf', 2),
(87, '0', 'Marinti', 2),
(88, '0', 'Sirun', 2),
(89, '0', 'Trimo', 2),
(90, '0', 'Hadi', 2),
(91, '0', 'Bodong', 2),
(92, '0', 'Rasmani', 2),
(93, '0', 'Dul Slamet', 2),
(94, '0', 'Kasdani', 2),
(95, '0', 'Komari', 2),
(96, '0', 'Sibun', 2),
(97, '0', 'Sikus', 2),
(98, '0', 'Dasmulyo', 2),
(99, '0', 'Tarmini', 2),
(100, '0', 'Sri’ah', 2),
(101, '0', 'Damiri', 2),
(102, '0', 'Rasmono', 2),
(103, '0', 'Mu’in', 2),
(104, '0', 'Juwadi', 2),
(105, '0', 'Jadi', 2),
(106, '0', 'Bejo', 2),
(107, '0', 'Eko', 2),
(108, '0', 'Tus', 2),
(109, '0', 'Mus', 2),
(110, '0', 'Sandriyo', 2),
(111, '0', 'Cayani', 2),
(112, '0', 'Kesrag', 2),
(113, '0', 'Nasoha', 2),
(114, '0', 'Rejo', 2),
(115, '0', 'Jaenal', 2),
(116, '0', 'Rahuti', 2),
(117, '0', 'Tutur', 2),
(118, '0', 'Casminten', 3),
(119, '0', 'Kasdik', 3),
(120, '0', 'Anton', 3),
(121, '0', 'Warso', 3),
(122, '0', 'Samad', 3),
(123, '0', 'Rusdanto', 3),
(124, '0', 'Rustamto', 3),
(125, '0', 'Muktar', 3),
(126, '0', 'Kambali', 3),
(127, '0', 'H. Tobiin', 3),
(128, '0', 'Anas', 3),
(129, '0', 'Sri Utami', 3),
(130, '0', 'Riyanah', 3),
(131, '0', 'Alinah', 3),
(132, '0', 'Paroji', 3),
(133, '0', 'Samudi', 3),
(134, '0', 'Surono', 3),
(135, '0', 'Rumaenis', 3),
(136, '0', 'Hj. Supiyah', 3),
(137, '0', 'H. Tarono', 3),
(138, '0', 'Kasturah', 3),
(139, '0', 'Sahuri', 3),
(140, '0', 'Atip', 3),
(141, '0', 'Dasupi', 3),
(142, '0', 'Umarni', 3),
(143, '0', 'Kutinah', 3),
(144, '0', 'Sodikin', 3),
(145, '0', 'Kunipah', 3),
(146, '0', 'Durahman', 3),
(147, '0', 'Bunyamin', 3),
(148, '0', 'Printis', 3),
(149, '0', 'Casmuri', 3),
(150, '0', 'Kardini', 3),
(151, '0', 'Teguh', 3),
(152, '0', 'Kardono', 3),
(153, '0', 'Suryadi', 3),
(154, '0', 'Suprapto', 3),
(155, '0', 'Darminto', 3),
(156, '0', 'Karsiti', 3),
(157, '0', 'Sri Marni', 3),
(158, '0', 'Sindung', 3),
(159, '0', 'Tambak', 3),
(160, '0', 'Suparti', 3),
(161, '0', 'Surijo', 3),
(162, '0', 'Nursalam', 3),
(163, '0', 'Martanto', 3),
(164, '0', 'Putut', 3),
(165, '0', 'Rundiyah', 3),
(166, '0', 'Basari', 3),
(167, '0', 'Kasmari', 3),
(168, '0', 'Sukasbu', 3),
(169, '0', 'Munarto', 3),
(170, '0', 'Sarwo', 3),
(171, '0', 'Nursari', 3),
(172, '0', 'Kudung', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wilayah`
--

CREATE TABLE `tb_wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama_rt` varchar(20) NOT NULL,
  `luas` varchar(50) NOT NULL,
  `batas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wilayah`
--

INSERT INTO `tb_wilayah` (`id_wilayah`, `nama_rt`, `luas`, `batas`) VALUES
(1, 'RT01', '2000M', 'Gg. Pacul s/d Gg. Mahoni'),
(2, 'RT02', '2100M', 'Gg. Waluh s/d Gg. Wahidin '),
(3, 'RT03', '2300M', 'Gg. Melati s/d Gg. Kenanga'),
(4, 'RT04', '2400M', 'Gg. Pandan s/d Gg. Kelapa'),
(5, 'RT05', '1800M', 'Gg. Raider s/d Gg. Djaja');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_banner`
--
ALTER TABLE `tb_banner`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`,`id_admin`);

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tb_konten_app`
--
ALTER TABLE `tb_konten_app`
  ADD PRIMARY KEY (`id_konten_app`);

--
-- Indeks untuk tabel `tb_menu_app`
--
ALTER TABLE `tb_menu_app`
  ADD PRIMARY KEY (`id_menu_app`);

--
-- Indeks untuk tabel `tb_penarikan_dana`
--
ALTER TABLE `tb_penarikan_dana`
  ADD PRIMARY KEY (`id_penarikan_dana`,`id_kegiatan`,`id_warga`,`id_admin`);

--
-- Indeks untuk tabel `tb_rt`
--
ALTER TABLE `tb_rt`
  ADD PRIMARY KEY (`id_rt`,`id_rw`);

--
-- Indeks untuk tabel `tb_rw`
--
ALTER TABLE `tb_rw`
  ADD PRIMARY KEY (`id_rw`);

--
-- Indeks untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `tb_submenu_app`
--
ALTER TABLE `tb_submenu_app`
  ADD PRIMARY KEY (`id_submenu_app`);

--
-- Indeks untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `tb_telepon`
--
ALTER TABLE `tb_telepon`
  ADD PRIMARY KEY (`id_telepon`);

--
-- Indeks untuk tabel `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD PRIMARY KEY (`id_warga`,`id_rt`);

--
-- Indeks untuk tabel `tb_wilayah`
--
ALTER TABLE `tb_wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_banner`
--
ALTER TABLE `tb_banner`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_konten_app`
--
ALTER TABLE `tb_konten_app`
  MODIFY `id_konten_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_menu_app`
--
ALTER TABLE `tb_menu_app`
  MODIFY `id_menu_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_penarikan_dana`
--
ALTER TABLE `tb_penarikan_dana`
  MODIFY `id_penarikan_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;

--
-- AUTO_INCREMENT untuk tabel `tb_rt`
--
ALTER TABLE `tb_rt`
  MODIFY `id_rt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_rw`
--
ALTER TABLE `tb_rw`
  MODIFY `id_rw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_submenu_app`
--
ALTER TABLE `tb_submenu_app`
  MODIFY `id_submenu_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_telepon`
--
ALTER TABLE `tb_telepon`
  MODIFY `id_telepon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_warga`
--
ALTER TABLE `tb_warga`
  MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT untuk tabel `tb_wilayah`
--
ALTER TABLE `tb_wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
