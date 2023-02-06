-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Jul 2022 pada 12.56
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `muslim_book`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` varchar(50) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `id_pengarang` varchar(20) NOT NULL,
  `id_penerbit` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `stok` int(11) NOT NULL,
  `berat` float NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `id_pengarang`, `id_penerbit`, `id_kategori`, `stok`, `berat`, `harga`, `deskripsi`, `gambar`, `deleted`) VALUES
('BU-1', 'Filosofi Teras', 'PG-1', 'PN-2', 'K-4', 1, 1, 45000, 'Shalat adalah ibadah yang agung dalam Islam, menempati urutan kedua dalam rukun Islam. Namun amat disayangkan, masih didapati banyak kekeliruan yang dilakukan sebagian kaum Muslimin dalam tata cara shalat. Di antara penyebabnya adalah karena manhaj (cara) beragama umat Islam yang masih ikut-ikutan. Faktor ini harus menyadarkan setiap Muslim, untuk segera mengoreksi shalatnya, agar diterima oleh Allah. Dan jalan untuk kembali kepada tata cara shalat yang benar sebagaimana yang diajarkan oleh Nabi, adalah dengan mengkaji hadits-hadits beliau; baik sabda, keteladanan dari perbuatan beliau, maupun persetujuan beliau pada perbuatan para sahabat.', 'filosofi.jpg', 0),
('BU-2', 'Sebuah Seni untuk Bersikap Bodo Amat', 'PG-3', 'PN-7', 'K-3', 51, 1, 150000, 'Novel yang berjudul Sebuah Seni Untuk Bersikap Bodo Amat merupakan kisah nyata tentang seseorang yang bernama Charles Bukowski yang mempunyai masa lalu yang kelam, suka mabuk-mabukan, berjudi, mempermainkan wanita, tukang utang, kasar dan seorang penyair.', '1915947217518878581.jpg', 0),
('BU-3', 'Koala Kumal ', 'PG-2', 'PN-2', 'K-3', 50, 1, 67, 'Menceritakan anak muda yang bernama Raditya Dika. Dika kecil yang masih usia SD begitu sangat dimanja oleh orang tuanya, dan memiliki hobi bermain video game. Wajar kalau tidak punya teman bermain di luar rumah.', '1853344483576784537.jpg', 0),
('BU-4', 'Sebaik Baik Amal Adalah Shalat', 'PG-3', 'PN-3', 'K-3', 50, 1, 32000, 'Shalat adalah tiang agama, tidak akan tegak agama ini kecuali dengannya. Shalat adalah ibadah yang pertama kali diwajibkan dan termasuk amal perbuatan yang pertama kali akan dihisab pada hari Kiamat.', '1849824660192323617.jpg', 0),
('BU-5', 'Dzikir Pagi Petang dan Sesudah Shalat Fardhu', 'PG-3', 'PN-1', 'K-4', 51, 1, 16000, 'Dzikir pagi berikut patut diamalkan karena akan membuat kita lebih semangat di pagi hari dan dimudahkan Allah dalam segala urusan. Untuk waktunya, yang utama dibaca saat masuk waktu Shubuh hingga matahari terbit. Namun boleh juga dibaca sampai matahari akan bergeser ke barat (mendekati waktu Zhuhur). Dzikir kali ini pun kami bantu dengan transliterasi untuk setiap bacaan selain bacaan Al Qurâ€™an, moga bermanfaat bagi yang sulit membaca dzikir yang ada huruf demi huruf. ( rumaysho )', '1862889007323857908.jpg', 0),
('BU-7', 'Tentang Kamu', 'PG-4', 'PN-8', 'K-1', 50, 1, 15000, 'Tentang kamu adalah sebuah novel yang menceritakan perjuangan Zaman, seorang pengacara muda dari Thompson & Co, untuk mengurus warisan Sri Ningsih. Sri Ningsih adalah seorang wanita asal Indonesia yang meninggal di sebuah panti jompo di Paris.', '1915959747641505596.jpg', 0),
('BU-8', 'Tuntunan Hafalan Juz Amma jilid 1', 'PG-4', 'PN-5', 'K-1', 53, 1, 15000, 'Supaya Anak-Anak Cepat Hafal Juz Amma', '1915963394773346939.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` varchar(20) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `jk_customer` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat_customer` varchar(200) NOT NULL,
  `email_customer` varchar(100) NOT NULL,
  `telp_customer` varchar(20) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `jk_customer`, `alamat_customer`, `email_customer`, `telp_customer`, `deleted`) VALUES
('CUS-1', 'Abdallah Darussalam C.', 'Laki-Laki', 'Muharto', 'abda@polinema.ac.id', '08771', 0),
('CUS-2', 'Ilham Nuswantoro Aji', 'Laki-Laki', 'Pasuruan', 'iwonk@gmail.com', '0871', 0),
('CUS-4', 'Greggy Gianini F.', 'Laki-Laki', 'Malang', 'greggygf@gmail.com', '087759659653', 0),
('CUS-5', 'Hafizh Dias Ramadhan', 'Laki-Laki', 'Singosari', 'hafizh@polinema.ac.id', '08134784373', 0),
('CUS-6', 'raihan', 'Laki-Laki', 'hvhjtgcvulbln;k', 'jthmfd@yktfg', '0098765678', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deleted`) VALUES
('K-1', 'Anak', 0),
('K-2', 'comedy', 0),
('K-3', 'horor', 0),
('K-4', 'Shalat', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE IF NOT EXISTS `penerbit` (
  `id_penerbit` varchar(20) NOT NULL,
  `nama_penerbit` varchar(100) NOT NULL,
  `alamat_penerbit` varchar(100) NOT NULL,
  `email_penerbit` varchar(50) NOT NULL,
  `telp_penerbit` varchar(20) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `alamat_penerbit`, `email_penerbit`, `telp_penerbit`, `deleted`) VALUES
('PN-1', 'GagasMedia', 'Jakarta', 'pustaka@indonesia.com', '081615152322', 0),
('PN-2', 'Kompas Media ', 'Jakarta', 'kompasmedia@gmail.com', '08113161613', 0),
('PN-3', 'Pustaka At Taqwa', 'Jakarta', 'order@pustakaattaqwa.com', '081511117015', 0),
('PN-4', 'Khazanah Fawaid', 'Indonesia', 'tunasfawaid@gmail.com', '0821100039689', 0),
('PN-5', 'Pustaka Ibnu Umar', 'Bogor', 'marketing.pust.ibnuumar@gmail.com', '082118379889', 0),
('PN-6', 'Mizan Pustaka', 'Jakarta', 'mizanpustaka@gmail.com', '0851717171', 0),
('PN-7', 'Gramedia', 'Jakarta', 'gramedia@gmail.com', '08644545457', 0),
('PN-8', 'Republika', 'Jakarta', 'Republika@gmail.com', '0823267651', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE IF NOT EXISTS `pengarang` (
  `id_pengarang` varchar(20) NOT NULL,
  `nama_pengarang` varchar(100) NOT NULL,
  `alamat_pengarang` varchar(200) NOT NULL,
  `email_pengarang` varchar(50) NOT NULL,
  `telp_pengarang` varchar(20) NOT NULL,
  `deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `alamat_pengarang`, `email_pengarang`, `telp_pengarang`, `deleted`) VALUES
('PG-1', 'Henry Manampiring', 'Jakarta', 'henrymanampiringmanagement@gmail.com', '02184999585', 0),
('PG-2', 'Raditya Dika', 'Jakarta', 'radityadikamanagement@gmail.com', '085200171222', 0),
('PG-3', 'Mark Manson', 'Jakarta', 'Markmansonmanagement@gmail.com', '081878781222', 0),
('PG-4', 'Tere Liye', 'Jakarta', 'Tereliyemanagement@gmail.com', '082118379889', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `id_buku` varchar(50) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `id_buku`, `tgl_transaksi`, `jumlah`, `total`) VALUES
('TR-1', 'CUS-4', 'BU-7', '2022-07-12 17:55:49', 1, 15000);

--
-- Trigger `transaksi`
--
DELIMITER //
CREATE TRIGGER `kembalikan_buku` AFTER DELETE ON `transaksi`
 FOR EACH ROW BEGIN
	UPDATE buku SET stok=stok+OLD.jumlah WHERE id_buku=OLD.id_buku;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipe_user` enum('Customer','Admin') NOT NULL,
  `id_customer` varchar(20) DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `tipe_user`, `id_customer`, `deleted`) VALUES
('admin', 'admin', 'Admin', NULL, 0),
('greg', 'greg', 'Customer', 'CUS-4', 0),
('iwonk', 'iwonk', 'Customer', 'CUS-2', 0),
('abda', 'abda', 'Customer', 'CUS-1', 0),
('raihan', 'raihan', 'Customer', 'CUS-6', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`id_buku`), ADD KEY `FK_buku_pengarang` (`id_pengarang`), ADD KEY `FK_buku_penerbit` (`id_penerbit`), ADD KEY `FK_buku_kategori` (`id_kategori`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
 ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
 ADD PRIMARY KEY (`id_pengarang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD KEY `FK_transaksi_customer` (`id_customer`), ADD KEY `FK_transaksi_buku` (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD KEY `FK_user_customer` (`id_customer`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
ADD CONSTRAINT `FK_buku_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
ADD CONSTRAINT `FK_buku_penerbit` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`),
ADD CONSTRAINT `FK_buku_pengarang` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarang` (`id_pengarang`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
ADD CONSTRAINT `FK_transaksi_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
ADD CONSTRAINT `FK_transaksi_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `FK_user_customer` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
