-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2022 at 08:22 PM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisatai3_dbpantai`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(7, 'admin', 'admin'),
(8, 'rizal', 'rizal12345'),
(9, 'admin', '12345ri'),
(10, 'rizal', 'rizal12345'),
(11, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pantai`
--

CREATE TABLE `pantai` (
  `id` int(5) NOT NULL,
  `wisata` varchar(255) CHARACTER SET latin1 NOT NULL,
  `kategori` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fasilitas` varchar(256) CHARACTER SET latin1 NOT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `kecamatan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `lat_long` varchar(255) NOT NULL,
  `gambar_wisata` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pantai`
--

INSERT INTO `pantai` (`id`, `wisata`, `kategori`, `fasilitas`, `alamat`, `desa`, `kecamatan`, `lat_long`, `gambar_wisata`) VALUES
(4, 'Pantai Kebo Ngulung wetan', 'Pantai', 'Wc Umum, Warung Makan, Tempat Parkir', ' Ngulungwetan, Munjungan, Trenggalek Regency, East Java 66365', 'Ngulungwetan', 'Munjungan', '-8.306055713995816, 111.48023052666326', '276-pkebo.jpg'),
(5, 'Pantai Prigi', 'Pantai', 'Taman, Ayunan, Gazebo, Warung, Parkir Lebar, Spot Foto', 'Jl. Raya Pantai Tasikmadu, Ketawang, Tasikmadu, Kec. Watulimo, Kabupaten Trenggalek, Jawa Timur 66382', 'Tasikmadu', 'Watulimo', '-8.286766182825094, 111.72587534360115', '98-prigi.jpg'),
(13, 'Dilem Wilis', 'Agro Wisata', 'Wc Umum, Warung Makan, Akses Parkir', '3PF9+F7F, Area Hutan, Dompyong, Kec. Bend., Kabupaten Trenggalek, Jawa Timur 66351', 'Dompyong', 'Bendungan', '-7.926313989213347, 111.7181524178024', '576-dilemwillis.jpg'),
(16, 'Tirta Jwalita', 'Kolam Renang', 'Wc Umum, Warung Makan, Akses Parkir, Penyewaan Ban, Prosotan', 'Jl. Sukarno Hatta No.225, Kelutan, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66313', 'Kelutan', 'Trenggalek', '-8.072444211706093, 111.70586532664176', '209-jwalita.jpg'),
(17, 'Gua Lowo', 'Gua', 'Akses Parkir, Warung Makan', 'QPQH+FF2, Kambe, Watuagung, Kec. Watulimo, Kabupaten Trenggalek, Jawa Timur 66382', 'Watuagung', 'Watulimo', '-8.211370195384575,  111.72865537703991', '652-goalowo.jpg'),
(18, 'Hutan Kota', 'Alam', 'Wc Umum, Warung Makan, Akses Parkir', 'Wisata kuliner hutan kota, Area Hutan, Ngantru, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311', 'Ngantru', 'Trenggalek', '-8.053504910385302, 111.70348513515835', '190-hukot.jpg'),
(20, 'Air Terjun Banyu Nget', 'Alam', 'Wc Umum, Akses Parkir', 'PMWM+97G, Unnamed Road, Area Hutan, Dukuh, Kec. Watulimo, Kabupaten Trenggalek, Jawa Timur 66382', 'Dukuh', 'Watulimo', '-8.254060576202422, 111.68320507222464', '162-banyunget.jpg'),
(21, 'Putra Maron', 'Alam', 'Wc Umum, Akses Parkir, Spot Foto, Tempat Makan', 'dusun soko, desa Depok, Bendungan, Depok, Bendungan, Trenggalek, Jawa Timur 66351', 'Depok', 'Bendungan', '-7.99068904542794, 111.7329945921218', '617-putrimaron.jpg'),
(22, 'Tebing Lingga', 'Alam', 'Tempat Makan, Wc Umum, Parkiran', 'Jl. AKP ROESTAMAJI RT.06/RW.02 Dsn. Tawang, Area Gn., Nglebo, Kec. Suruh, Kabupaten Trenggalek, Jawa Timur 66360', 'Nglebo', 'Suruh', '-8.111778609545594, 111.60038633484167', '659-tebinglingga.jpg'),
(23, 'Beji Maron', 'Alam', 'Wc Umum, Warung Makan, Akses Parkir, Gazebo', 'VP9H+FX8, Kw. Ladang, Karanganyar, Kec. Gandusari, Kabupaten Trenggalek, Jawa Timur 66372', 'Karanganyar', 'Gandusari', '-8.131347667855708, 111.72996271105947', '392-bejimaron.jpg'),
(24, 'Pantai Cengkrong', 'Bahari', 'Wc Umum, Warung Makan, Akses Parkir', 'Tirto, Karanggandu, Kec. Watulimo, Kabupaten Trenggalek, Jawa Timur 66382', 'Karanggandu', 'Watulimo', '-8.298072745740422, 111.70773416537405', '894-cengkrong.jpg'),
(25, 'Gua Ngerit', 'Gua', 'Wc Umum, Warung Makan, Akses Parkir', 'QMWJ+C8P, Unnamed Road,, Area Hutan, Senden, Kec. Kampak, Kabupaten Trenggalek, Jawa Timur 66373', 'Senden', 'Kampak', '-8.203905458008647, 111.68084005458995', '526-guangerit.jpg'),
(26, 'Bukit Tunggangan', 'Alam', 'View Bagus, Camp Ground, Tempat Paralayang', 'VQQP+RFJ, Ngrandu, Kendalrejo, Kec. Durenan, Kabupaten Trenggalek, Jawa Timur 66381', 'Kendalrejo', 'Durenan', '-8.11042461565043, 111.78616295407785', '962-bukittunggangan.jpg'),
(27, 'Kampung Toga', 'Edukasi', 'Wc Umum, Warung Makan, Akses Parkir', 'VRGH+2QV, Nglandean, Malasan, Kec. Durenan, Kabupaten Trenggalek, Jawa Timur 66381', 'Malasan', 'Durenan', '-8.124890194147204, 111.82943932527901', '237-kampungtoga.jpg'),
(28, 'Wisata Sawah Gede', 'Alam', 'Wc Umum, Warung Makan, Akses Parkir, Spot Foto', 'VH93+24C, Jalan Raya, Bangunsari, Pule, Trenggalek Regency, East Java 66362', 'Bangunsari', 'Pule', '-8.132420873164627, 111.55278662524296', '165-sawahgede.jpg'),
(29, 'Gupili', 'Buatan', 'Wc Umum, Warung Makan, Akses Parkir, Gazebo', 'Tenggar, Slawe, Kec. Watulimo, Kabupaten Trenggalek, Jawa Timur 66382', 'Slawe', 'Watulimo', '-8.241882612057147, 111.70147489640898', '850-gupili.jpg'),
(30, 'Bukit Belik Waru', 'Alam', 'Gazebo, Wc Umum, Warung Makan', 'Area Hutan, Wonoanti, Kec. Gandusari, Kabupaten Trenggalek, Jawa Timur 66372', 'Wonoanti', 'Gandusari', '-8.113575237008197, 111.68723835407789', '526-belikwaru.jpg'),
(31, 'Banyon Hill', 'Alam', 'Spot Foto, View Bagus, Camp Ground', 'VP7J+MFH, Widoro, Gandusari, Kw. Ladang, Karanganyar, Kec. Gandusari, Kabupaten Trenggalek, Jawa Timur 66372', 'Karangan', 'Gandusari', '-8.135799994106316, 111.73124999640758', '843-banyonhill.jpg'),
(32, 'COC Danon', 'Edukasi', 'Wc Umum, Warung Makan, Akses Parkir', 'RT 04 RW 02, Beji, Sengon, Kec. Bendungan, Kabupaten Trenggalek, Jawa Timur 66351', 'Sengon', 'Bendungan', '-8.010917594194252, 111.69146922524149', ''),
(33, 'Watu Jago', 'Buatan', 'Wc Umum, Warung Makan, Akses Parkir', 'XPQ2+F88, Jl. Trenggalek-Bendungan, Jeruk, Ngares, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66319', 'Srabah', 'Bendungan', '-8.01133420625801, 111.70082906757104', '265-watujago.jpg'),
(34, 'Pantai Kemukus', 'Bahari', 'Warung Makan, Akses Parkir', 'MG9H+85V, Unnamed Road, Area Hutan, Craken, Kec. Munjungan, Kabupaten Trenggalek, Jawa Timur 66365', 'Craken', 'Munjungan', '-8.331622270563939, 111.52792253199252', '860-kemukus.jpg'),
(36, 'Taman Watu Kandang', 'Desa Wisata', 'Toilet Umum, Penyewaan Ban, Warung Makan, Gazebo', 'Taman Watu Kandang No.1, Bonsari, Pandean, Kec. Dongko, Kabupaten Trenggalek, Jawa Timur 66363', 'Pandean', 'Dongko', '-8.31878133126419, 111.74433049402661', '417-watukandang.jpg'),
(37, 'Pantai Konang', 'Pantai', 'Warung Ikan Bakar, Gazebo Tempat Ngopi, Sunset Bagus, Parkiran Lumayan Luas', 'Sukorejo, Nglebeng, Kec. Panggul, Kabupaten Trenggalek, Jawa Timur 66364', 'Nglebeng', 'Panggul', '-8.274823164197517, 111.45292060611189', '546-pantaikonang.jpg'),
(38, 'Bukit Goa Biru', 'Goa', 'View Bagus', 'XMXQ+6XM, Plosorejo, Sengon, Kec. Bend., Kabupaten Trenggalek, Jawa Timur 66351', 'Sengon', 'Bendungan', '-8.001887245452417, 111.68992899640604', '37-goabiru.jpg'),
(39, 'Gunung Buceng', 'Gunung', 'Camp Ground, Gazebo, Toilet Umum', 'WM2C+VJ9 Gunung buceng, Kedungwaru, Kedungsigit, Karangan, Kabupaten Trenggalek, Jawa Timur 66361', 'Kedungsigit', 'Karangan', '-8.097796784839339, 111.6716007964072', '210-gunungbuceng.jpg'),
(40, 'Bukit Braksinto', 'Bukit', 'Keindahan Alam Terbuka + Pemandangan Laut, Toilet Umum, Warung Makan', 'Dusun jajar, Area Hutan, Salamwates, Kec. Dongko, Kabupaten Trenggalek, Jawa Timur 66363', 'Salamwater', 'Dongko', '-8.243522776086975, 111.58115803860757', '602-IMG_20210321_095212.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pantai`
--
ALTER TABLE `pantai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pantai`
--
ALTER TABLE `pantai`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
