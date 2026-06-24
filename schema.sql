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
