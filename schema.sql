CREATE DATABASE IF NOT EXISTS `gdive`;
USE `gdive`;

CREATE TABLE IF NOT EXISTS `admin` (
  `Id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Namalengkap` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `admin` (`Username`, `Password`, `Namalengkap`, `Email`) VALUES
('admin', 'admin', 'Administrator', 'admin@gorontalodivesite.com');

CREATE TABLE IF NOT EXISTS `divedata` (
  `Id_dive` int(11) NOT NULL AUTO_INCREMENT,
  `Namadivesite` varchar(255) NOT NULL,
  `Lokasi` text NOT NULL,
  `Kedalaman` varchar(50) NOT NULL,
  `Visibility` varchar(50) NOT NULL,
  `Jeniskarang` text NOT NULL,
  `Jenisbiolaut` text NOT NULL,
  `Gambar` varchar(255) DEFAULT NULL,
  `Gambar2` varchar(255) DEFAULT NULL,
  `Gambar3` varchar(255) DEFAULT NULL,
  `Gambar4` varchar(255) DEFAULT NULL,
  `Gambar5` varchar(255) DEFAULT NULL,
  `Gambar6` varchar(255) DEFAULT NULL,
  `Gambar7` varchar(255) DEFAULT NULL,
  `Gambar8` varchar(255) DEFAULT NULL,
  `Gambar9` varchar(255) DEFAULT NULL,
  `Gambar10` varchar(255) DEFAULT NULL,
  `Lat` varchar(50) NOT NULL,
  `Lng` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_dive`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `divedata` (`Namadivesite`, `Lokasi`, `Kedalaman`, `Visibility`, `Jeniskarang`, `Jenisbiolaut`, `Lat`, `Lng`) VALUES
('Olele Point', 'Bone Bolango', '10-30m', '15m', 'Hard & Soft Corals', 'Salvador Dali Sponge, Nudibranchs', '0.461622', '123.111815'),
('Biluhu', 'Gorontalo', '5-25m', '20m', 'Hard Corals', 'Turtles, Reef Sharks', '0.435678', '122.956789');

CREATE TABLE IF NOT EXISTS `berita` (
  `Id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  PRIMARY KEY (`Id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `berita` (`tanggal`, `gambar`, `judul`, `konten`) VALUES
('2023-10-01', '', 'Gorontalo Dive Festival', 'Acara tahunan festival selam Gorontalo akan segera diadakan.');

CREATE TABLE IF NOT EXISTS `comment` (
  `Id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `komentar` text NOT NULL,
  `art_id` int(11) NOT NULL,
  `art_url` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`Id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Booking System Extensions --

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `products` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `products` (`nama_produk`, `deskripsi`, `harga`, `gambar`) VALUES
('Sewa Alat Selam Lengkap (Full Set)', 'Paket lengkap termasuk Wetsuit, BCD, Regulator, Masker, Fins, dan Tabung.', 350000, 'bg-1.jpg'),
('Sewa Kamera Underwater (GoPro)', 'Abadikan momen bawah laut Anda dengan GoPro Hero 10 Black.', 150000, 'bg-2.jpg'),
('Tiket Kapal (Boat Transfer)', 'Antar jemput dari pesisir menuju titik penyelaman.', 100000, 'bg-3.jpg');

CREATE TABLE IF NOT EXISTS `bookings` (
  `id_booking` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tanggal_booking` datetime NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_pembayaran` enum('Pending', 'Lunas', 'Dibatalkan') DEFAULT 'Pending',
  PRIMARY KEY (`id_booking`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `booking_details` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_booking` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
