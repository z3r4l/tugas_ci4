-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 05:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) NOT NULL,
  `no_bp` varchar(20) DEFAULT NULL,
  `nm_mhs` varchar(75) DEFAULT NULL,
  `kelas` varchar(12) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `no_bp`, `nm_mhs`, `kelas`, `foto`, `created_at`, `updated_at`) VALUES
(1, '201055201120', 'Zery Aldi', '4A Teknik In', '1656660942_3985254a74223b2c19de.jpeg', '2022-07-01 02:35:42', '2022-07-01 02:35:42'),
(2, '201055201063', 'ABD. AZIS RAHMAN', '4A-TF', '1656661133_bcbb7b87ef494cae1826.jpg', '2022-07-01 02:38:53', '2022-07-01 02:38:53'),
(3, '201055201014', 'ALIP RAMDAN KUSUMA HARYANTO', '4A-TF', '1656661164_d37db292f1a6ad626c28.jpg', '2022-07-01 02:39:24', '2022-07-01 02:39:24'),
(4, '201055201117', 'ANJELUS MALEKI FAU', '4A-TF', 'default.png', '2022-07-01 02:39:48', '2022-07-01 02:39:48'),
(5, '201055201031', 'ANTONI STEVEN', '4A-TF', '1656661210_72287ae61e31c74192fd.jpg', '2022-07-01 02:40:10', '2022-07-01 02:40:10'),
(6, '201055201028', 'DIMAS PRADIPTO', '4A-TF', '1656661228_60e001e1b2eb75df9259.jpg', '2022-07-01 02:40:28', '2022-07-01 02:40:28'),
(7, '201055201023', 'DONI RIFAI DAULAY', '4A-TF', 'default.png', '2022-07-01 02:40:46', '2022-07-01 02:40:46'),
(8, '201055201093', 'HARDIANSYAH', '4A-TF', 'default.png', '2022-07-01 02:41:04', '2022-07-01 02:41:04'),
(9, '201055201013', 'IJAY LESMANA', '4A-TF', 'default.png', '2022-07-01 02:41:17', '2022-07-01 02:41:17'),
(10, '201055201002', 'MELANI RAHAYU PUTRI', '4A-TF', 'default.png', '2022-07-01 02:41:45', '2022-07-01 02:41:45'),
(11, '201055201037', 'RADIYATUL ULIA', '4A-TF', '1656661333_697daf5dd24c5261a75a.jpg', '2022-07-01 02:42:13', '2022-07-01 02:42:13'),
(12, '201055201012', 'RAMADHAN PRATAMA PUTRA', '4A-TF', 'default.png', '2022-07-01 02:42:51', '2022-07-01 02:42:51'),
(13, '201055201094', 'REFICHA ARDHIA PRANATA', '4A-TF', 'default.png', '2022-07-01 02:43:14', '2022-07-01 02:43:14'),
(14, '201055201019', 'RUSDIYANTO', '4A-TF', '1656661421_d3cc1525e92a3cb47a9a.jpg', '2022-07-01 02:43:41', '2022-07-01 02:43:41'),
(15, '201055201005', 'SHERLY SYAEDATUL FITRIA', '4A-TF', 'default.png', '2022-07-01 02:44:11', '2022-07-01 02:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-06-28-160540', 'App\\Database\\Migrations\\Orang', 'default', 'App', 1656569247, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id`, `nama`, `alamat`) VALUES
(1, 'Mohanadas Sambanthan a/l Ravichandran Patto', 'A-95-46, Jln 5/78, Medan Ria, 53595 Desa Petaling, WP Kuala Lumpur'),
(2, 'B. C. Rayer', '56, Jln 1/80, Pangsapuri Pahlawan, 70641 Lenggeng, Negeri Sembilan'),
(3, 'Yam Jian Lak', '4, Jln Sultan Abdul Samad 7/17T, Bandar Awan, 77087 Naning, Malacca'),
(4, 'Nuur Suhaina binti Aniq', 'No. 95, Jln Thambipillay 5/9O, Taman Tun Hussein Onn, 39027 Brinchang, Pahang'),
(5, 'Nurul Fadhilah Wazif binti Danish', '82, Jln Prangin 6/1Z, Taman Desa Harmoni, 62018 Precinct 16, Putrajaya'),
(6, 'Theiviya Rajannaidu', '4, Jalan Tan Cheng Lock 7/83, Seksyen 57H, 72823 Kuala Pilah, Negeri Sembilan Darul Khusus'),
(7, 'Mohammad Adnan bin Che Rukmanihakim Pauzi', 'No. 5, Jalan S.P. Seenivasagam 1/3U, Taman Kinrara, 75795 Ramuan China, Melaka'),
(8, 'Shuba Jayawardene a/l Sumisha', 'Lot 26, Jln 1, Medan Amanjaya, 09790 Sintok, Kedah Darul Aman'),
(9, 'M. K.  Ravichandran', 'No. P-63-59, Jln Raja Abdullah 99B, Bandar Baru Tunku, 02035 Chuping, Perlis Indera Kayangan'),
(10, 'Lo Sok Jen', '33, Jalan Sultan Iskandar 59P, Bandar Puteri, 31198 Tambun, Perak Darul Ridzuan'),
(11, 'Hajjah Zafirah Syahrin binti Fahmi', '45, Jln 6/9, Seksyen 95, 77315 Bandaraya Melaka, Malacca'),
(12, 'Arul a/l Pavandeep', '37, Lorong 86Y, Lembah Tunku, 73448 Rompin, Negeri Sembilan Darul Khusus'),
(13, 'Haanii Kumaresan a/l Sanisvara Puaneswaran', '68, Jalan 9/5B, SS59, 33920 Slim River, Perak'),
(14, 'Kam Lea Hiong', 'No. 2, Lorong Sultan Sulaiman, SS5, 72301 Ampangan, Negeri Sembilan Darul Khusus'),
(15, 'Noor Rasyiqqah binti Wan Hamdan', 'No. 5-7, Jln Hang Lekir 6/54T, Taman Sungai Besi, 83113 Kota Tinggi, Johor'),
(16, 'Hao Me Yon', 'Lot 2, Jalan Perdana 7/76, Bandar Suria, 73224 Port Dickson, Negeri Sembilan'),
(17, 'Muhammet Wan Nizam bin Nik Hazwan Rifqi', 'No. 54, Jalan 4E, Bukit Amanjaya, 36791 Sungkai, Perak'),
(18, 'Mohamad Mikhail bin Akif', 'No. 7, Jalan 1/77, USJ 69Z, 15671 Ketereh, Kelantan'),
(19, 'Canagasabai a/l Kasinather Rajan', '71, Jln 7/93X, PJU9, 20643 Kuala Besut, Terengganu'),
(20, 'Muhammad Nizan bin Salamon Norhisam', 'No. 52, Jln Prangin 4/5, Bandar Selamat, 62078 Precinct 16, Putrajaya'),
(21, 'Nor Siti Zakwan binti Nik Fasil Azrul', 'No. 265, Jalan Cenderawasih 3/9L, Puncak Laksamana, 32785 Gopeng, Perak Darul Ridzuan'),
(22, 'R. S. Manicka', '6, Jalan 5, Puncak Awan, 88797 Ranau, Sabah'),
(23, 'Anita Purushothaman a/l Ravichandran', '92, Jalan Baru 6/7J, Seksyen 12, 17138 Wakaf Bharu, Kelantan Darul Naim'),
(24, 'Liao Tet Shek', 'No. 95, Jalan Hang Jebat 3, Taman Antarabangsa, 17835 Lojing, Kelantan'),
(25, 'Mohammad Jafri Azizi', 'Y-73-68, Jalan Hang Kasturi 1/5O, PJS81S, 65133 Puchong, Selangor'),
(26, 'Tatparanandam a/l Veenod', '65, Jalan 8, Taman Ria, 87024 Layang-Layang, Labuan'),
(27, 'Noor \'Izzah binti Nik Amier', '5, Lorong Lembah Permai 78C, Taman Bintang, 59192 Pudu, WP Kuala Lumpur'),
(28, 'Nadia Sin Ti Tai', '6, Jalan 8, SS3, 09398 Durian Burung, Kedah'),
(29, 'Mohamad Haji Nik Zaiyon Aszahari bin Syed Sharizal', 'Lot 229, Jalan 5, Sri Tropika, 80581 Jementah, Johor Darul Ta\'zim'),
(30, 'Nurun binti Wan Iqwan Hakiem', 'No. 1, Jalan Utama, PJS7, 30286 Simpang Pulai, Perak'),
(31, 'Yu Nan Ka', '286, Jalan 1/96, SS9, 21365 Ajil, Terengganu Darul Iman'),
(32, 'Nurul Dini Nazarudin binti Rafael', 'No. 5-7, Lorong 2/2R, Taman Manggis, 57141 Kepong, Kuala Lumpur'),
(33, 'Sia Gao Chang', '40, Jalan Bijih Timah 8H, Bandar Setia Jaya, 62295 Precinct 6, Putrajaya'),
(34, 'Murugayan a/l Kulasegaran', 'No. B-82-57, Jalan Thambipillay 32O, Pandan Bangsar, 62000 Precinct 5, Putrajaya'),
(35, 'Chou Siam Kiang', 'Lot 9, Lorong Chan Sow Lin 5/3Z, Sri Bendahara, 62219 Precinct 4, Putrajaya'),
(36, 'Swarna Thanabalasingam a/l Mahaletchumy', '8, Lorong S.P. Seenivasagam, Batu Razak, 96266 Batu Kawa, Sarawak'),
(37, 'Nathasa Shaihuddin binti Redzwan Mamhuri', 'Lot 2, Jln 3/35, Desa Maluri, 76907 Telok Mas, Melaka'),
(38, 'Lam Sow Bak', 'No. 11, Lorong 1, PJU4, 62614 Precinct 4, Putrajaya'),
(39, 'Gong Aun Khi', 'No. 80, Jln Birch 7/8, USJ 50D, 72388 Linggi, Negeri Sembilan Darul Khusus'),
(40, 'Harikrish a/l Rakesh', '75, Jln Damansara 3/1C, PJS45S, 63197 Port Klang, Selangor Darul Ehsan'),
(41, 'Arul Subramaniam a/l Sellan', 'No. 8, Jalan Rakyat 9I, Bandar Putra, 09765 Changlun, Kedah Darul Aman'),
(42, 'Jeevandran a/l Huzir Balakrishnan', 'No. 83, Jalan Hang Lekir 2O, Seri Saujana, 18165 Salor, Kelantan Darul Naim'),
(43, 'Muhammed Hj Norazman bin Muhaimi Ashraff', 'Lot 8-5, Jln Zainal Abidin 6D, USJ 24, 62219 Precinct 10, Putrajaya'),
(44, 'Nurul Ariana binti Nik Alif Adham', '1, Lorong 2T, Bandar Seri Mulia, 21242 Bandar Permaisuri, Terengganu'),
(45, 'Nik Norsilan bin Nik Rifin', '9-1, Jln 1/59U, Bandar Bukit Pertama, 87020 Batu Manikar, Labuan'),
(46, 'Lina binti Aqil', '66, Jalan 9, Taman Saujana, 02372 Padang Besar, Perlis'),
(47, 'Muhammad Nik Lukman bin Syed Yusseri', 'No. 151, Jalan 5/42N, Kondominium Duta, 88659 Papar, Sabah'),
(48, 'Nurul Hakimah binti Che Salleh Hamjah', 'Lot 44, Jalan 4/9Q, Batu Segambut, 72735 Chembong, Negeri Sembilan'),
(49, 'Gobind a/l Devaki Nahappan', '63, Jalan 2/9, Kota Setia Jaya, 90516 Kundasang, Sabah'),
(50, 'Eng Kor Chau', '2, Jalan Madras 3/1, Bandar Suria, 08309 Baling, Kedah Darul Aman'),
(51, 'Nur Dini Dini binti Aman Senon', 'No. 9-3, Jalan Sungai Besi 7/4X, Kondominium Harmoni, 09495 Alor Setar, Kedah'),
(52, 'Oo Sieu Sim', '47, Jln 2/7, Kondominium Aman, 34768 Behrang, Perak'),
(53, 'Pang Shum Her', 'No. 46, Jalan Pudu Lama 6M, Apartment Aman, 09120 Sungai Petani, Kedah'),
(54, 'Mohamad Syed Norsilan bin Che Saufishazwi Ikhmal', '3, Jalan 5/91, SS90V, 13614 Butterworth, Pulau Pinang'),
(55, 'Nurul Hjh Jihan binti Jumat', '868, Jln 6, Seksyen 82Y, 85231 Pagoh, Johor'),
(56, 'Mark Ee Koo Lion', '7, Jalan 7/52, Pandan Jaya, 87022 Batu Manikar, Labuan'),
(57, 'Serbegeth Pillai', 'No. 96, Jalan 4/3, Laman Selatan, 05581 Baling, Kedah Darul Aman'),
(58, 'Sybil a/l Balasubramaniam Dharmalingam', '35, Jln 7/92, Bandar Seri Melawati, 95588 Sungai Tujoh, Sarawak'),
(59, 'Nurul Hajjah Hayaty Muslim', 'No. 1, Jalan Tuanku Abdul Rahman 9/98Q, Bandar Ulu, 80481 Tangkak, Johor Darul Ta\'zim'),
(60, 'Samad Yazid bin Rafi', '29, Lorong Wisma Putra 7, Pangsapuri Permai, 67665 Sungai Buloh, Selangor Darul Ehsan'),
(61, 'Muhammed Haji Wan Zaidi Fadhilah bin Syed Aliff Dini', 'No. 618, Jalan Wisma Putra 4, Seri Mahkota, 87015 Layang-Layang, Labuan'),
(62, 'Sybil a/l Tanasekharan', '10, Lorong Sultan Sulaiman 9/7, PJU33, 77708 Naning, Malacca'),
(63, 'Lye Ha Haa', '8, Jln 5/20I, Kota Angkasa, 10180 Tanjung Tokong, Penang'),
(64, 'Qu Leng Khian', '82, Jalan Dewan Bahasa 55X, Seksyen 9, 25494 Teriang, Pahang'),
(65, 'Krishen a/l Arumugam Lourdenadin', '3, Lorong 1V, Bandar Bukit Puchong, 18045 Kuala Krai, Kelantan'),
(66, 'Theiviya a/l Cecil', '44, Jalan Bukit Bintang 2/44A, Bandar Suria, 76652 Simpang Ampat, Melaka'),
(67, 'Yen New Low', 'No. 2-4, Jalan 40Z, Batu Changkat, 87005 Kiamsam, Labuan'),
(68, 'Rasammah Parthiban', 'G-25-41, Lorong 3/3, Medan Duta, 39042 Genting Highlands, Pahang'),
(69, 'Qistina binti Syed Azmin', 'No. B-83-06, Jalan 8/13, Laman Baru, 01684 Beseri, Perlis'),
(70, 'Nur Hjh Nadiah Naim binti Yusaini Hassimon', 'No. 9H-95, Jln Tun Dr Ismail 5S, Batu Changkat, 30287 Lumut, Perak Darul Ridzuan'),
(71, 'Kamal Ammasee a/l Mahadev Marimuthu', '7E-83, Jalan Residensi 56Y, Pandan Keramat, 16340 Pasir Puteh, Kelantan Darul Naim'),
(72, 'Chiang Hon Man', 'Lot 5-2, Jln Sultan Abdul Samad 3, PJS7, 13073 Batu Kawan, Pulau Pinang'),
(73, 'Tay Lay Niau', 'No. 8-4, Jalan 3/31M, SS8, 62965 Precinct 11, Putrajaya'),
(74, 'M.  Nahappan', '324, Jln 1/16B, SS73Z, 90910 Manggatal, Sabah'),
(75, 'Chiang Sio Shea', 'No. 26, Jln 9I, Desa Raya, 67330 Pandamaran, Selangor Darul Ehsan'),
(76, 'Hajjah Zilhaiza binti Syed Narul Iqbal', 'Lot 37, Jln Sultan Azlan Shah 2/3, USJ 13, 90208 Pitas, Sabah'),
(77, 'Muhammet Che Haziq Aizad bin Maamor', '50, Jln 5/8A, PJU6, 90270 Inanam, Sabah'),
(78, 'Khor Dan Meg', '5, Jalan 8, Taman Kinrara, 30820 Gua Tempurung, Perak'),
(79, 'Nuur Hajjah Khairunnisak Zainul-\'alam binti Che Mazmin', '75, Jalan 3/1, Alam Damansara, 05586 Yan, Kedah'),
(80, 'Gheetha a/l Kumutha', '39, Jln Cantonment 7, Puncak Antarabangsa, 95771 Sri Aman, Sarawak'),
(81, 'Thanuja Nair a/l Surendran', '44, Jalan 7/14, Laman Meru, 51213 Kampung Baru, KL'),
(82, 'Tew Sian Nee', 'No. 5, Jalan Genting Klang 8/31P, Ara Putra, 93441 Asajaya, Sarawak'),
(83, 'Muhammed Syed Nazari Jamri bin Che Salim', '8-9, Lorong Prangin 8/20, Seksyen 95, 66797 Maran, Pahang'),
(84, 'Nor Hjh Norliyana binti Zulkipli', 'I-04-20, Lorong Tun Dr Ismail 2/6, Kampung Mahkota, 91268 Likas, Sabah'),
(85, 'Ngeow Kung Keat', 'No. X-23-41, Jalan 4/4, Taman Tunku, 09205 Lunas, Kedah'),
(86, 'Nur Hjh Zaidalina binti Bakri', 'No. 7, Lorong Masjid 5N, Bandar Casa, 08113 Kuala Ketil, Kedah Darul Aman'),
(87, 'Nuur Afiza Hassim', 'No. 8J-28, Jln 10R, Bandar Baru Keramat, 96373 Betong, Sarawak'),
(88, 'Muhamed Che Adi Ridduan bin Alfian Sharif', '717, Jalan 67J, Sri Tun Hussein Onn, 25066 Sebertak, Pahang'),
(89, 'Mohamed Fauzi bin Farris', '8-4, Jln 9K, Bandar Harmoni, 41108 Subang, Selangor'),
(90, 'Siva a/l Paramjit Rajhans', 'Lot 41, Jln Kedah 4/61, SS20A, 90736 Weston, Sabah'),
(91, 'Kulasegaran Pillai a/l Sittampalam Pandithan', 'Q-54-32, Jln 89J, Taman Tun Hussein Onn, 57612 Batu, Kuala Lumpur'),
(92, 'Muhamad Amiruddin bin Nik Arifen Wazif', '63, Jln 7/49Z, Petaling Intan, 39064 Lanchang, Pahang Darul Makmur'),
(93, 'Hj Syed Amir Tarudin bin Wan Shapiein', 'No. 3, Jalan Pasar Besar 4/86K, Lembah Hartamas, 65693 Ampang, Selangor'),
(94, 'An Zou Shong', '89, Jalan Selamat 69J, Pandan Timur, 35674 Proton City, Perak Darul Ridzuan'),
(95, 'Paramjit Sangalimuthu a/l Fernandes', '4-6, Jalan 6/24, Bandar Bukit Belakong, 63512 Serendah, Selangor Darul Ehsan'),
(96, 'Tanasekharan Chengara a/l Devaser', 'No. 34, Lorong 63I, Bandar Meru, 84540 Tebrau, Johor Darul Ta\'zim'),
(97, 'Mohd Shamhazli bin Aziz', '597, Jalan Petaling 5/2, Kampung Segambut, 55048 Ampang, KL'),
(98, 'C. Moorthy', 'No. 50, Jalan Tun Sambanthan, Taman Desa Kiara, 87025 Kiamsam, Labuan'),
(99, 'Nuur Norshuhailah Norazmi binti Sualman', '176, Jalan Utama 1/71, Pandan Hartamas, 66114 Ijok, Selangor'),
(100, 'Ramesh Thiru a/l Manogaran Rajakumar', '19, Jalan 9/69, SS5, 64306 Bandar Sunway, Selangor Darul Ehsan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
