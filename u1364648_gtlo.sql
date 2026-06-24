-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Apr 2022 pada 02.53
-- Versi server: 10.5.15-MariaDB-cll-lve
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1364648_gtlo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Id_admin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `namalengkap` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Id_admin`, `username`, `password`, `namalengkap`, `email`) VALUES
(15, 'divesite', 'divesite123', 'gorontalodivesite', 'admin@gorontalodivesite.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(55) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `gambar`, `judul`, `konten`) VALUES
(8, '2019-05-06', '', 'Flights to Gorontalo', '<p>flights to Gorontalo have daily connections. Most flights to Gorontalo start in Jakarta. Several airlines have daily flights to Gorontalo via Makassar (Ujung Pandang).&nbsp; They are Garuda Indonesia, Batik Air, Lion Air and Citilink.</p>\r\n<p><br />Cheap flights from Bangkok, Kuala Lumpur or Singapore arrive in Jakarta. Most flights from Jakarta stop in Makassar for 20 minutes before preceding to Gorontalo.&nbsp; Divers can also choose daily flights to Gorontalo from Denpasar (Bali).</p>\r\n<p><br />Wings Air currently has two daily flights to Gorontalo from Manado. Wings is a subsidiary of Lion Air. Its flight times allow Gorontalo divers to connect with Silk Air from Singapore. Tickets can be purchased on-line from the Lion Air web site. Wings Air flies daily from Manado. This allows divers from Singapore to arrive in Gorontalo the same day. The overland route from Manado takes a full day whether by private transport or by bus.</p>\r\n<p><br />Air Asia connects Kuala Lumpur with the new terminal at Makassar (Ujung Pandang) in South Sulawesi. Batik Air has a new second flight that may allow travelers arriving in Makassar to connect to Gorontalo. Air Asia&lsquo;s evening departure back to Kuala Lumpur allows plenty of time for travelers to connect from flights from Gorontalo. See Air Asia&rsquo;s web site for current information for flight changes as these can change.</p>'),
(9, '2019-05-06', '', 'DIVE GORONTALO', '<p>The area of northern Sulawesi lies within the Coral Triangle. This includes Gorontalo. The marine environment here boasts the highest marine biodiversity on the planet. This area contains well over 500 species of stony, reef-building corals</p>\r\n<p>Gorontalo lies along the northern coastline of Tomini Bay in northern Sulawesi, Indonesia. As you travel in our speed boat, gaze up the towering limestone cliffs that plunge directly into the sea. A narrow coral reef rims the coastline. To dive Gorontalo is a world-class experience.</p>\r\n<p>We guarantee that you will see surreal Salvador Dali sponges when you dive Gorontalo.They are a strange morphology of Petrosia lignosa. They are not found at famous Sulawesi diving destination near us &ndash; nor in other oceans.<br />Our extensive knowledge of Gorontalo waters is at your service. We offer a variety of marine environments for scuba diving. These include pristine coral walls, caverns, muck, multiple pinnacles, shallow coral gardens, submerged points and wrecks. We have discovered over 30 dive sites. Gorontalo dive season start from November to April</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `Id_comment` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `komentar` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `art_id` int(3) NOT NULL,
  `art_url` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`Id_comment`, `nama`, `email`, `website`, `komentar`, `date`, `art_id`, `art_url`) VALUES
(6, 'fdgdf', 'fdg', 'fdgfd', 'fdgfdgdf', '2019-08-28 03:17:38', 1, 'komentar.php'),
(7, 'dons', 'donaldwahani@gmail.com', '', 'good website', '2019-08-28 07:04:36', 1, 'komentar.php'),
(8, 'donald', 'donald_wah@yahoo.com', 'none', 'coba kirim pesan', '2019-08-28 08:11:53', 1, 'komentar.php'),
(9, 'George Martin', 'george1@georgemartinjr.com', 'www.georgemartjr.com', 'Would you be interested in submitting a guest post on georgemartjr.com or possibly allowing us to submit a post to gorontalodivesite.com ? Maybe you know by now that links are essential\r\nto building a brand online? If you are interested in submitting', '2019-08-28 09:23:54', 1, 'komentar.php'),
(10, 'Contact Form', 'raphaespose@gmail.com', 'https://www.google.com', 'Good day!  gorontalodivesite.com \r\n \r\nWe propose \r\n \r\nSending your commercial proposal through the feedback form which can be found on the sites in the Communication partition. Feedback forms are filled in by our application and the captcha is solved', '2019-08-30 07:14:02', 1, 'komentar.php'),
(11, 'Robertnak', 'quickchain50@gmail.com', 'https://quickchain.cc/', 'Profit +10% after 2 days \r\nThe minimum amount for donation is 0.0025 BTC. \r\nMaximum donation amount is 10 BTC. \r\n \r\nRef bonus 3 levels: 5%,3%,1% paying next day after donation \r\nhttps://quickchain.cc/', '2019-09-10 17:54:40', 1, 'komentar.php'),
(12, 'AveryTor', 'raphaespose@gmail.com', 'https://www.google.com', 'Hello!  gorontalodivesite.com \r\n \r\nHave you ever heard of sending messages via contact forms? \r\n \r\nImagine that your message will be readseen by hundreds of thousands of your potential buyerscustomers. \r\nYour message will not go to the spam folder be', '2019-09-17 14:25:44', 1, 'komentar.php'),
(13, 'Lucas Weber', 'info@wrldclass-solutions.com', 'www.worldclass-solutions.space', 'Good Day,\r\n\r\nLucas Weber Here from World Class Solutions, wondering \r\ncan we publish your blog post over here? We are looking to \r\npublish new content and would love to hear about any new products,\r\nor new subjects regarding your website here at goro', '2019-09-28 04:47:20', 1, 'komentar.php'),
(14, 'Steverew', 'steveLak@gmail.com', 'https://advertisingagencymiami.net/cheap-seo-packa', 'hi there \r\nWe provide best monthly affordable SEO packages & SEO services prices starting $49, Pay for performance based plans & pricing, thatâ€™s uniquely tailored to your website, we would be more than happy to create a campaign which accommodates ', '2019-09-28 06:47:06', 1, 'komentar.php'),
(15, 'JulioHem', 'cloudhosting@cyberservices.com', 'https://5cloudhost.businessreviewnow.com', 'Hi , \r\nFor everything you do online, you need a web hosting for your website, blog, application or landing page. \r\nBecause customers hate waiting and the site speed is also a search engines ranking factor,  it needs to be very fast! \r\nBut why paying ', '2019-10-05 14:55:08', 1, 'komentar.php');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divedata`
--

CREATE TABLE `divedata` (
  `Id_dive` int(10) NOT NULL,
  `namadivesite` varchar(50) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `kedalaman` varchar(30) DEFAULT NULL,
  `visibility` varchar(50) DEFAULT NULL,
  `jeniskarang` varchar(500) DEFAULT NULL,
  `jenisbiolaut` varchar(500) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `gambar2` varchar(50) DEFAULT NULL,
  `gambar3` varchar(50) DEFAULT NULL,
  `gambar4` varchar(50) DEFAULT NULL,
  `gambar5` varchar(50) DEFAULT NULL,
  `gambar6` varchar(50) DEFAULT NULL,
  `gambar7` varchar(50) DEFAULT NULL,
  `gambar8` varchar(50) DEFAULT NULL,
  `gambar9` varchar(50) DEFAULT NULL,
  `gambar10` varchar(50) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `divedata`
--

INSERT INTO `divedata` (`Id_dive`, `namadivesite`, `lokasi`, `kedalaman`, `visibility`, `jeniskarang`, `jenisbiolaut`, `gambar`, `gambar2`, `gambar3`, `gambar4`, `gambar5`, `gambar6`, `gambar7`, `gambar8`, `gambar9`, `gambar10`, `lat`, `lng`) VALUES
(116, 'Syah Point', 'Kabupaten Pohuwato', '3m - 17m', '10m - 15m', 'Sponges, actiniidae, cerianthidae, clavelinidae, diazonidae, polycitoridae, melithaeidae, plexauridae, ellisellidae, pennatulacea', 'Anemonefish, blennies, boxfish, butterflyfishes, gobies, nudiranch, damsel, flathead, lionfish, tobies', 'Syah-Point.jpg', '', '', '', '', '', '', '', '', '', '0.417517', '121.947978'),
(115, 'Busy Corner', 'Kabupaten Pohuwato', '6m - 50m', '20m - 40m', 'Ascidians, ascidiidae, clavelinidae, diazonidae, polycitoridae, melithaeidae, plexauridae, ellisellidae, petrosia lignosa', 'Groupers, puffer, whiptails, switlips, snapper, tobies, wrasses, polyceridae, big eye, turtles, eagle ray, giant traveling', 'Busy-Corner.jpg', 'Busy-Corner-(2).jpg', 'Busy-Corner (1).jpg', '', '', '', '', '', '', '', '0.408011', '122.043014'),
(114, 'Eagle Point', 'Kabupaten Pohuwato', '6m - 40m', '20m - 40m', 'Ascidians, ascidiidae, clavelinidae, diazonidae, polycitoridae, melithaeidae, plexauridae, gorgoniidae, ellisellidae, petrosia lignosa', 'Groupers, puffer, whiptails, switlips, snapper, tobies, wrasses, polyceridae, turtles, big eye, eagle ray, fire goby', 'Eagle-Point.jpg', 'Eagle-Point-(2).jpg', 'Eagle-Point-(3).jpg', 'Eagle-Point4.jpg', '', '', '', '', '', '', '0.407033', '122.044794'),
(113, 'Crack Wall', 'Kabupaten Pohuwato', '5m - 32m', '20m - 40m', 'Ascidians, ascidiidae, clavelinidae, diazonidae, polycitoridae, melithaeidae, plexauridae, gorgoniidae, ellisellidae, petrosia lignosa', 'Groupers, puffer, whiptails, switlips, snapper, tobies, wrasses, polyceridae, turtles, big eye, eagle ray, fire goby', 'Crack-Wall.jpg', 'Crack-Wall-(2).jpg', 'Crack-Wall-(1).jpg', '', '', '', '', '', '', '', '0.407636', '122.047411'),
(112, 'Fan Garden', 'Kabupaten Pohuwato', '4m - 20m', '20m - 35m', 'Ascidians, ascidiidae, clavelinidae, diazonidae, polycitoridae, melithaeidae, plexauridae, gorgoniidae, ellisellidae', 'Jellyfish, Anemonefish, blennies, boxfish, butterflyfishes, cardinalfish, whiptails, damsel, gobies, nudibranch, puffer, snapper, tobies', 'Fan-Garden.jpg', 'Fan-Garden3.jpg', 'Fan-Garden-(2).jpg', '', '', '', '', '', '', '', '0.408133', '122.049567'),
(111, 'Blue Sand', 'Kabupaten Pohuwato', '6m - 33m', '20m - 40m', 'Aliciidae, ascidiidae, clavelinidae, diazonidae, polycitoridae, melithaeidae, nephteidae, plexauridae, ellisellidae, petrosia lignosa', 'Groupers, puffer, whiptails, switlips, snapper, tobies, wrasses, polyceridae, turtles,', 'Blue-Sand.jpg', 'Blue-Sands-(2).jpg', 'Blue-Sands.jpg', '', '', '', '', '', '', '', '0.407728', '122.058669'),
(109, 'Death Man', 'Kabupaten Pohuwato', '4m - 50m', '20m - 40m', 'Ascidians, ascidiidae, clavelinidae, diazonidae, melithaeidae, plexauridae, gorgoniidae, ellisellidae, petrosia lignosa', 'Groupers, puffer, whiptails, switlips, snapper, tobies, wrasses, polyceridae, big eye', 'Death-Man.jpg', 'Death-Man-(2).jpg', 'Death-Man3.jpg', '', '', '', '', '', '', '', '0.391333', '122.080106'),
(110, 'Silent Wall', 'Kabupaten Pohuwato', '4m - 35m', '20m - 40m', 'Ascidians, ascidiidae, clavelinidae, diazonidae, melithaeidae, plexauridae, gorgoniidae, ellisellidae, petrosia lignosa', 'Groupers, puffer, whiptails, switlips, snapper, tobies, wrasses, polyceridae, big eye', 'Silent-Wall.jpg', 'Silent-Wall-(2).jpg', 'Silent-Wall3.jpg', '', '', '', '', '', '', '', '0.395036', '122.074683'),
(117, 'Wreck Mobil', 'Kabupaten Pohuwato', '4m - 21m', '10m -20m', 'Aliciidae, actiniidae, actinodendridae, diazonidae, nephteidae,  gorgoniidae, ellisellidae, pennatulacea', 'Anemonefish, blennies, boxfish, butterflyfishes, gobies, nudiranch, damsel, flathead, lionfish, tobies', 'Wreck-Mobil.jpg', '', '', '', '', '', '', '', '', '', '0.418069', '121.953364'),
(118, 'Rose Point', 'Kabupaten Pohuwato', '3m - 17m', '10m - 20m', 'Aliciidae, actiniidae, actinodendridae, cerianthidae, nephteidae,  gorgoniidae, ellisellidae, pennatulacea', 'Anemonefish, blennies, boxfish, butterflyfishes, gobies, nudibranch, damsel, flathead, lionfish, goatfish, hawkfish', 'Rose Point.jpg', '', '', '', '', '', '', '', '', '', '0.417608', '121.955881'),
(119, 'Pasisa Wall', 'Kabupaten Pohuwato', '5m - 25m', '10m - 20m', 'Aliciidae, actiniidae, actinodendridae, cerianthidae, gorgoniidae, ellisellidae, pennatulacea, petrosia lignosa', 'Anemonefish, blennies, boxfish, butterflyfishes, gobies, nudibranch, damsel, flathead, lionfish, goatfish, hawkfish, grouper', 'Pasisa Wall.jpg', 'Pasisa-Wall2.jpg', '', '', '', '', '', '', '', '', '0.416892', '121.955947'),
(122, 'Bintang Spot', 'Kabupaten Pohuwato', '5m - 25m', '10m - 25m', 'Aliciidae, actiniidae, actinodendridae, cerianthidae, nephteidae,  gorgoniidae, ellisellidae', 'Anemonefish, blennies, boxfish, butterflyfishes, gobies, nudibranch, damsel, flathead, lionfish, goatfish, hawkfish, grouper', 'Bintang Spot.jpg', '', '', '', '', '', '', '', '', '', '0.413558', '121.953108'),
(123, 'Biluhu ring', 'Desa Biluhu kabupaten Gorontalo', '5m â€“ 20m', '20m â€“ 25m', 'polycarpa, symplegma, rhopalaea, didemnum, petrosia lignosa', 'anthias, parrotfish, triggerfish, nudibranch, surgeonfish', 'Biluhu Ring white sponge.jpg', 'Biluhu ring.JPG', '', '', '', '', '', '', '', '', '0.490028', '122.965611'),
(124, 'Sand channels', 'Desa Biluhu kabupaten Gorontalo', '5m â€“ 20m', '15m â€“ 18m', 'oxycomanthus, triphyllozoon sp, cirrhipathes, heliopora', 'anthias, blue devil, butterflyfish, grouper, nudibranch, foxtail colonial tunicates', 'Sand Channels Foxtail tunicates.jpg', 'Sand Channels Pink Nemo.JPG', '', '', '', '', '', '', '', '', '0.488778', '122.974472'),
(125, 'west point', 'Desa Biluhu kabupaten Gorontalo', '5m â€“ 30m', '20m â€“ 30m', 'petrosia lignose, heliopore, plexauridea, dendronephthya sp, gorgonian', 'blenny, grouper, triggerfish, anemone, clownfish', 'IMG_0270-FB.jpg', 'IMG_0345-FB.jpg', 'West Point Female cuttlefish.jpg', 'West Point mirror.JPG', '', '', '', '', '', '', '0.486389', '122.976944'),
(126, 'Sponge Wall', 'Desa Biluhu kabupaten Gorontalo', '5m â€“ 20m', '10m â€“ 15m', 'polycarpa, rhopalaca, didemnum, xenia sp, alveopora, acropora, petrosia lignosa', 'anthias, fusiliers, caesionidae, surgeonfish, nudibranch, butterflyfish', '9887-FB.jpg', 'IMG_3653.JPG', '', '', '', '', '', '', '', '', '0.487417', '122.978472'),
(127, 'windows', 'Desa Kayubulan Kabupaten Gorontalo', '5m â€“ 20m', '10m â€“ 25m', 'arcopora, sarcophyton sp, sunilaria sp, lobophyton sp, petrosia lignosa', 'napoleon wrasse, anthias, blenny, firefish goby, fusiliers', 'WIindows damsels.JPG', 'Windows Hanging oysters.jpg', 'Windows.jpg', '', '', '', '', '', '', '', '0.486194', '122.985139'),
(128, 'Cliffs', 'Desa Kayubulan Kabupaten Gorontalo', '3m â€“ 25m', '10m â€“ 25m', 'petrosia lignosa, favites, alveopora, porites sp, arcopora', 'sweetlips, damsel, parrotfish, anthias, napoleon wrasse', 'Cliffs fusiliers.JPG', 'Cliffs Safety stop.jpg', '', '', '', '', '', '', '', '', '0.485556', '122.990028'),
(129, 'Lady Fingers', 'Desa Kayubulan Kabupaten Gorontalo', '3m â€“ 25m', '10m â€“ 25m', 'favites, platygyra, turbinaria, lobophyton sp, petrosia lignosa', 'hawkfish, grouper, anthias, damsel, snapper', 'Naked Lady.JPG', 'Naked Lady Cigar Sponges.jpg', '', '', '', '', '', '', '', '', '0.486917', '122.991944'),
(130, 'white point', 'Desa Kayubulan Kabupaten Gorontalo', '3m â€“ 40m', '10m â€“ 25m', 'acanthogorgia sp, arcopora, subergorgia, gorgonian, sarcophyton sp, sinularia sp', 'purple firefish, butterflyfish, snapperfish, snapper, rainbow runner, nudibranch', 'White Point Mossy nudi.jpg', 'White point Salvador Dali sponge.jpg', '', '', '', '', '', '', '', '', '0.484306', '122.988944'),
(131, 'Sunrise Garden', 'Desa Lopo Kabupaten Gorontalo', '3m â€“ 30m', '10m â€“ 25m', 'hextospongia, milleporasp, pocillopora, stylophora, petrosia lignosa, antipathies sp', 'pymy seahorse, snapper, anthias, Sarasvati shrimp, bubble coral shrimp', 'Sunrise Garden Black corals.JPG', 'Sunrise Garden sea fan.JPG', '', '', '', '', '', '', '', '', '0.488917', '123.010278'),
(132, 'Otje garden', 'Desa Lopo Kabupaten Gorontalo', '3m â€“ 20m', '10m â€“ 25m', 'arcopra, echinopora, turbinaria, millepora sp, xetospongia, cribrochalina', 'anthias, sea star shrimp, crinoid shrimp, squat shrimp, fusilier, algae shrimp', 'Otje Garden coral.JPG', 'Otje Garden Leaf Scorpionfish .jpg', 'Otje Garden Lionfish.JPG', '', '', '', '', '', '', '', '0.491306', '123.012972'),
(133, 'Rawan', 'Desa Lopo Kabupaten Gorontalo', '5m â€“ 25m', '10m â€“ 25m', 'favites, dendronephthya sp, ellisellasp, sinularia sp, arcopora', 'nudibranch, crinoid shrimp, parrotfish, sweetlips, Sarasvati shrimp', 'Rawan diver.JPG', 'Rawan PT Salvador.JPG', '', '', '', '', '', '', '', '', '0.492056', '123.023361'),
(134, 'Tempat Baru', 'Desa Bongo Kabupaten Gorontalo', '3m â€“ 25m', '10m â€“ 25m', 'arcopora, cribrochalina, theonella, callyspongia, polycarpa, rhopalaea', 'anthias, damsel, sweetlips, cryptic sponge shrimp, nudibranch, sea cucumber', 'IMG_0440-FB.jpg', 'IMG_0448-FB.jpg', 'IMG_0455-FB.jpg', 'IMG_20170106_202151_219.jpg', 'T4 Baru anthias.JPG', 'T4 Baru Starfish climbing wall.jpg', '', '', '', '', '0.491139', '123.027278'),
(135, 'Mystic Point', 'Desa Tanjung keramat Kota Gorontalo', '3m â€“ 18m', '10m â€“ 15m', 'sarcophyton sp, arcopora, alveopora, stylophora, cribrochalina sp, didemnum', 'sea cucumber, goby, nudibranch, leaf scorpionfish, cardinalfish', 'Mystic Point Pink Nemo.JPG', 'Mystic Point Tire and ropes.jpg', '', '', '', '', '', '', '', '', '0.493750', '123.04444'),
(136, 'Tjendrawasih barge wreck', 'Desa Leato Selatan kota Gorontalo', '8m â€“ 25m', '5m â€“ 15m', 'lobophyton, arcopora, gelliodes, didemnum, comaster', 'lionfish, stonefish, surgeonfish, cardinalfish, goatfish', 'C9hwXyOUQAA8Wzn.jpg', '', '', '', '', '', '', '', '', '', '0.495472', '123.071194'),
(137, 'Tamboo muck diving', 'Desa Leato Selatan kota Gorontalo', '3m â€“ 25m', '5m â€“ 15m', 'alveopora, porites, cirrhipathes, callyspongia sp, gelliodes', 'ghost pipefish, frogfish, mimic octopus, dragon sea moth, anemone,ambonscorpinfish', 'cff2-fb.jpg', 'ktg-FB.jpg', 'ff4-FB.jpg', 'IMG_4047-FB.jpg', 'co-FB.jpg', 'mos-fb.jpg', 'IMG_9244FB_1514883838783.jpg', 'IMG_1943-FB.jpg', 'IMG_1740-FB.jpg', 'ffs-FB.jpg', '0.491694', '123.077972'),
(138, 'Japanese cargo wreck', 'Desa Leato Selatan kota Gorontalo', '5m â€“ 52m', '25m â€“ 30m', 'favites, porites, arcopora, spirastrella, tridacna', 'snapper, turtle, napoleon wrasse, parrotfish, goby, Sarasvati shrimp', 'japanese-shipwreck-fb.jpg', 'japanese-1.jpg', 'jf11-fb.jpg', 'jf3-fb.jpg', '', '', '', '', '', '', '0.486139', '123.082972'),
(139, 'Old port muck diving', 'Desa Leato Selatan kota Gorontalo', '3m â€“ 20m', '10m â€“ 20m', 'alveopora, porites sp, cribrochalina sp, Xestospongia, spirastrella', 'nudibranch, ghost pipefish, seahorse, lionfish, Sarasvati anemone shrimp', 'es-FB.jpg', 'IMG_3663.JPG', 'IMG_3664.JPG', 'IMG_3666.JPG', '', '', '', '', '', '', '0.486417', '123.085167'),
(140, 'Mirabella', 'Desa Leato Selatan kota Gorontalo', '3m â€“ 25m', '10m â€“ 25m', 'mantipora, seriatopora, clathria, turbinariacf, echinopora', 'turtle, whitetip shark, blacktip shark, napoleon wrasse, goatfish', '9040-FB.jpg', '9498-FB.jpg', '9539-FB.jpg', '9545-FB.jpg', 'IMG_2430-FB_1511782999828.jpg', '', '', '', '', '', '0.482361', '123.086222'),
(141, 'Swirling Steps', 'Desa Botubarani Kabupaten Bone Bolango', '5m â€“ 40m', '10m â€“ 30m', 'turbinaria, arcopora, gorgonian, seriatopora, millepora sp, clathria, montipora', 'napoleon wrasse, turtle, hammerhead shark, whitetip shark, triggerfish', '9013-FB.jpg', 'GOPR9328-FB.jpg', 'GOPR9415-FB.jpg', 'GOPR9432-FB.jpg', 'IMG_0050-FB.jpg', 'IMG_0072-FB.jpg', 'IMG_8402-FB.jpg', 'ndpk-FB.jpg', '', '', '0.478056', '123.086083'),
(142, 'Sand bowl', 'Desa Botubarani Kabupaten Bone Bolango', '3m â€“ 25m', '10m â€“ 25m', 'porites sp, arcopora, petrosia lignose, millepora, symphyllia', 'jawfish, sea cucumber, goby, basket star, cuttlefish', 'G0039209-FB.jpg', 'GOPR9220-FB.jpg', 'GOPR9263-FB.jpg', 'IMG_0133-FB.jpg', '', '', '', '', '', '', '0.477472', '123.087528'),
(143, 'Kurenai beach', 'Desa Botubarani Kabupaten Bone Bolango', '3m â€“ 25m', '10m â€“ 25m', 'triphylozoon sp, heliopore, dendronephthya sp, gorgonian, sinularia', 'turtle, cuttlefish, snapper, napoleon wrasse, grouper', 'kb.jpg', 'kb2.jpg', 'kb3.jpg', '', '', '', '', '', '', '', '0.477306', '123.089639'),
(144, 'Whale Shark Area', 'Desa Botubarani Kabupaten Bone Bolango', '5m â€“ 30m', '5m â€“ 15m', 'arcopora, sarcophyton sp, Xestospongia sp, millepora sp, cribrochalina sp', 'whale shark, napoleon wrasse, triggerfish, parrotfish, remora fish', 'GOPR1505-FB.jpg', 'GOPR1567a-FB.jpg', 'GOPR4297FB.jpg', 'GOPR4308FB.jpg', 'GOPR4335FB.jpg', 'gorontalo-whale-2-FB.jpg', '', '', '', '', '0.4740581', '123.0998722'),
(145, 'Sunken island', 'Desa Molotabu Kabupaten Bone Bolango', '8m â€“ 30m', '10m â€“ 15m', 'sarcophyton sp, sinularia, turbinaria, platygyra, cribrochalina, agaricidae', 'grouper, pufferfish, cardinalfish, lionfish, goby, anthias ', 'sunken island 1.jpg', 'sunken-1.jpg', 'sunken island5.jpg', 'sunken-2.jpg', 'sunken-6.jpg', '', '', '', '', '', '0.441278', '123.129611'),
(146, 'Sand castle muck diving', 'Desa Molotabu Kabupaten Bone Bolango', '2m â€“ 18m', '5m â€“ 10m', 'placortis, clathria, udotea sp, callyspongia sp', 'lionfish, nudibranch, blenny, tozeuma shrimp, garden eels, pteroidessp', 'nbk1-fb.jpg', 'nbk4-fb.jpg', 'nbkk-FB (3).jpg', 'ndml-fb.jpg', 'mik-FB.jpg', 'IMG_4466-FB.jpg', 'IMG_4466-FB.jpg', 'IMG_3870.JPG', '', '', '0.441833', '123.130722'),
(147, 'Shadowlands', 'Desa Oluhuta Kabupaten Bone Bolango', '3m â€“ 30m', '10m â€“ 25m', 'gorgonian, siphonogorgia sp, seleronephthya sp, didemnum, acabaria sp', 'boxer crab, pygmy seahorse, harlequin shrimp, nudibranch, mantis shrimp, grouper', 'shadow-land-1.jpg', 'nbg-FB.jpg', 'IMG_4414-FB.jpg', 'IMG_3670.JPG', 'IMG_3660.JPG', 'IMG_2184-FB.jpg', '', '', '', '', '0.422417', '123.141194'),
(148, 'Oluhuta beach', 'Desa Oluhuta Kabupaten Bone Bolango', '3m â€“ 20m', '10m â€“ 20m', 'arcopora, heliopora, dendronephthya sp, aplysina, montipora, stylophora', 'anthias, damselfish, blenny, goby, parrotfish', 'oluhuta-beach-9.jpg', 'oluhuta-beach-10.jpg', 'oluhuta-beach-11.jpg', 'oluhuta.jpg', '', '', '', '', '', '', '0.420056', '123.145000'),
(149, 'Honeycomb West', 'Desa Oluhuta Kabupaten Bone Bolango', '5m â€“ 20m', '10m â€“ 25m', 'petrosia lignose, pachyseris, alveopora sp, gorgonian, dendronephthya sp, aplysina', 'anthias, damsel, parrotfish, nudibranch, grouper', 'GOPR4076.jpg', 'GOPR9273-FB.jpg', 'GOPR9282-FB.jpg', 'IMG_20160913_110052.jpg', '', '', '', '', '', '', '0.417194', '123.143944'),
(150, 'Honeycomb east', 'Desa Olele Kabupaten Bone Bolango', '5m â€“ 25m', '10m â€“ 25m', 'dendrodephthya sp, ceoloseris, aplysina, pocillopora, acropora, millepora sp', 'triggerfish, damsel, anthias, blenny, grouper, leaf scorpionfish', '9730-fb.jpg', '9734-fb.jpg', 'GOPR4078.jpg', 'sal-FB.jpg', '', '', '', '', '', '', '0.414556', '123.146083'),
(151, 'Sentinels', 'Desa Olele Kabupaten Bone Bolango', '3m â€“ 25m', '10m â€“ 15m', 'acropora, lobophyton sp, symphyllia, pachyseris, montipora', 'cuttlefish, bumphead, napoleon wrasse, razor fish, snapper, spadefish', 'sentinel-1.jpg', 'sentinel-2.jpg', 'sentinel-4.jpg', 'sentinel-5.jpg', 'sentinel-6.jpg', 'sentinel-7.jpg', 'sentinel-9.jpg', '', '', '', '0.413528', '123.149389'),
(152, 'Traffic Circle', 'Desa Olele Kabupaten Bone Bolango', '3m â€“ 25m', '10m â€“ 25m', 'pavona, acropora, alveopora, stylophora, seriatopora, aplysina', 'napoleon wrasse, anthias, damsel, sergeant, barramundi grouper', 'can-ole-FB.jpg', 'FB_IMG_1448266759297.jpg', 'GOPR1489-FB.jpg', 'IMG_3561-FB.jpg', '', '', '', '', '', '', '0.409056', '123.151778'),
(153, 'Traffic Jam', 'Desa Olele Kabupaten Bone Bolango', '5m â€“ 30m', '10m â€“ 25m', 'seriatopora, pavona, acropora, aplysina, turbinaria, petrosia lignosa', 'bumphead, anthias, parrotfish, sergeant, grouper', 'GOPR1475-FB.jpg', 'GOPR1483-FB.jpg', 'GOPR4059.jpg', 'GOPR4073.jpg', '', '', '', '', '', '', '0.407306', '123.152667'),
(154, 'Jin Caves', 'Desa Olele Kabupaten Bone Bolango', '5m â€“ 40m', '10m â€“ 20m', 'gorgonian, antipathes sp, cirrhipathes, turbinaria, acropora, millepora sp', 'pufferfish, snapper, leaf scorpionfish, nudibranch, batfish', 'GOPR0588-FB.jpg', 'GOPR53320-FB.jpg', 'GOPR53490-FB.jpg', 'jin-caves-1.jpg', 'jin-caves--2.jpg', '', '', '', '', '', '0.405917', '123.155194'),
(155, 'Silvertip grounds', 'Desa Olele Kabupaten Bone Bolango', '5m â€“ 30m', '10m â€“ 25m', 'petrosia lignosa, turbinaria, dendronephthya sp,aplysina,stylophora, kallypilidion', 'napoleon wrasse, sweetlips, anthias, damsel, nudibranch', 'silver-tip-2.jpg', 'silvertip-g.jpg', 'stg.jpg', 'napoleon-1.jpg', '', '', '', '', '', '', '0.40406', '123.155611'),
(156, 'Fallen rock', 'Desa Olele Kabupaten Bone Bolango', '3m â€“ 20m', '10m â€“ 25m', 'petrosia lignosa, turbinaria, dendronephthya sp, gorgonian, acropora', 'anthias, damsel, sweetlips, triggerfish, leaf scorpion fish', 'fr-8.jpg', 'fr-11.jpg', 'fr-12.jpg', 'fr-13.jpg', '', '', '', '', '', '', '0.402111', '123.157556'),
(157, 'Buffalo head', 'Desa Olele Kabupaten Bone Bolango', '5m â€“ 40m', '10m â€“ 30m', 'petrosia lignosa, turbinaria, millepora sp, gorgonian, acropora, aplysina, xestospongia', 'jackfish, dogtooth tuna, napoleon wrasse, grouper, triggerfish, bumphead', 'tanjung kerbau 1.jpg', 'tanjung kerbau 2.jpg', 'tanjung kerbau 3.jpg', 'tanjung kerbau 4.jpg', '', '', '', '', '', '', '0.399194', '123.161972'),
(158, 'Helicopter bay', 'Desa Olele Kabupaten Bone Bolango', '3m â€“ 30m', '10m â€“ 20m', 'turbinaria, petrosia lignosa, dendronephthya sp, gorgonian, ellisella sp, cribrochalina sp', 'snapper, grouper, nudibranch, anthias, dogtooth tuna, blenny', 'helicopter-1.jpg', 'helicopter-2.jpg', 'helicopter-4.jpg', 'hrb.jpg', '', '', '', '', '', '', '0.399611', '123.164167'),
(159, 'Chimneys', 'Desa Tolotio Kabupaten Bone Bolango', '5m â€“ 25m', '10m â€“ 20m', 'turbinaria, petrosia lignosa, acropora, millepora, clathria, stylophora', 'cuttlefish, grouper, sweetlips, anthias, blenny, scorpionfish', 'chimney-3.jpg', 'chimney-7.jpg', 'chm-9.jpg', 'chimney-6.jpg', '', '', '', '', '', '', '0.399194', '123.167667'),
(160, 'PuloCinta', 'Kabupaten Boalemo', '5m â€“ 25m', '10m â€“ 15m', 'petrosia lignosa, gorgonian, polycarpa, dendronephthya sp, ellisella sp', 'grouper, clownfish, barracuda, nudibranch, triggerfish', 'pl-1.jpg', 'pl-2.jpg', 'pl-3.jpg', '', '', '', '', '', '', '', '0.4515582', '122.2909267'),
(161, 'Litobohu', 'Kabupaten Gorontalo Utara', '5m â€“ 18m', '10m â€“ 15m', 'sarcophyton sp, sinularia sp, gorgonian, lobophyton, millepora sp', 'nudibranch, grouper, trevally, damsel, spadefish', 'GOPR3440.jpg', 'GOPR3416.jpg', 'GOPR6408.jpg', 'GOPR6439.jpg', '', '', '', '', '', '', '0.912163', '122.741411');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id_comment`);

--
-- Indeks untuk tabel `divedata`
--
ALTER TABLE `divedata`
  ADD PRIMARY KEY (`Id_dive`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `Id_comment` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `divedata`
--
ALTER TABLE `divedata`
  MODIFY `Id_dive` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
