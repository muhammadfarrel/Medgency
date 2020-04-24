-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2020 at 09:39 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medgency`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `data`) VALUES
(1, '{\"nama\":\"Muhammad Aziz Pratama\",\"ket\" : \"Anggota 1\",\"deskripsi\":\"No Hp 085273309914 Bengkulu, Bengkulu\",\"foto\":\"\"}'),
(2, ' {\"nama\":\"Muhammad Farrel\",\"ket\" : \"KETUA\",\"deskripsi\":\"No Hp : 08114551997 Balikpapan, Kalimantan Timur\",\"foto\":\"\"}'),
(3, ' {\"nama\":\"Haris  Subekti\",\"ket\" : \"Anggota 2\",\"deskripsi\":\"No Hp : 082219739266 Buah Batu, Bandung, Jawa Barat\",\"foto\":\"\"}'),
(4, '{\"nama\":\"Daffashiddiq Nur Awan\",\"ket\" : \"Anggota 3\",\"deskripsi\":\"No Hp : 081239471472 Jakarta Timur, DKI Jakarta\",\"foto\":\"\"}'),
(5, '{\"nama\":\"Huda Rizky Prasetyo\",\"ket\" : \"Anggota 4\",\"deskripsi\":\"No Hp : 08975010636 Purworejo, Jawa Tengah\",\"foto\":\"\"}');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `data`) VALUES
(1, '{\"title\":\"Pentingnya Kesehatan\",\"time\":\"1 days ago\",\"desc\":\"Kesehatan\",\"src\":\"www.kes.com\"}'),
(2, '{\"title\":\"4 Tanda Dehidrasi yang Tak Banyak Orang Tahu\",\"time\":\"1 days ago\",\"desc\":\"Dehidrasi yang dialami setiap orang tidak pernah sama. Bayi, anak-anak, bahkan orang tua sekalipun dapat mengalami dehidrasi dan tanda serta gejalanya bervariasi, tergantung tingkat keparahannya.Bahkan tanpa disadari, dehidrasi dapat membahayakan tubuh. Sebelum membahas lebih jauh, ketahui dulu apa itu dehidrasi.Apa sih Dehidrasi?Tubuh manusia terdiri dari dua pertiga air. Dengan kata lain, air memainkan peran besar dalam tubuh, seperti memfasilitasi pencernaan, melumasi sendi dan menghilangkan racun untuk menjaga kulit tetap sehat.Nah dehidrasi umumnya terjadi karena seseorang kehilangan lebih banyak cairan (meski hanya kehilangan satu sampai dua persen) daripada yang mereka terima.Jika dehidrasi dibiarkan berlanjut dalam waktu lama, akan memengaruhi fungsi ginjal dan meningkatkan risiko terkena batu ginjal. Juga menyebabkan kerusakan otot.Ciri : 1. Detak Jantung dan Pernapasan Cepat,2. Kebingungan,3. Demam dan Mengigil, 4.Obesitas\",\"src\":\"https://www.liputan6.com/health/read/4187484/4-tanda-dehidrasi-yang-tak-banyak-orang-tahu\"}'),
(3, '{\"title\":\"Hindari Lemas, Ikuti Tips Puasa Sehat Berikut Ini\",\"time\":\"3 days ago\",\"desc\":\"Saat berpuasa, terjadinya perubahan pola makan serta berkurangnya aktivitas fisik merupakan hal yang wajar terjadi. Karena itu, Anda perlu melakukan beberapa penyesuaian, agar kesehatan tubuh tetap terjaga selama bulan Ramadan. Meski puasa identik dengan rasa lemas dan kantuk, bukan berarti Anda harus merasakan hal yang sama. Ada beberapa tips puasa sehat yang dapat Anda, coba agar tubuh senantiasa bugar. Berikut ini tipsnya, mulai dari saat sahur hingga berbuka. 1. Jangan Lewatkan Sahur. Sama seperti halnya sarapan, sahur juga sangat penting untuk dilakukan. Saat berpuasa, sahur akan membantu kadar cairan tubuh tetap terjaga, serta memberikan energi dan nutrisi yang diperlukan tubuh untuk beraktivitas, hingga waktunya Anda berbuka. Makan sahur juga dapat mencegah Anda makan berlebihan saat buka puasa akibat terlalu lapar. Sahur yang sehat harus memperhatikan asupan yang bergizi seimbang, dan mengandung karbohidrat kompleks, makanan tinggi serat, serta makanan tinggi protein. Karbohidrat Kompleks,Karbohidrat kompleks bisa Anda dapatkan dari oats, kacang-kacangan, dan gandum. Karbohidrat kompleks memerlukan waktu yang lebih lama untuk dicerna tubuh, sehingga Anda bisa kenyang lebih lama. Makanan Tinggi Serat,Makanan tinggi serta juga memerlukan waktu yang lebih lama untuk dicerna tubuh, sehingga dapat membuat Anda kenyang lebih lama. Anda dapat mengonsumsi kurma, sayur dan buah, gandum utuh, kentang, hingga biji-bijian. Makanan Tinggi Protein,Makanan tinggi protein seperti telur, keju, yogurt, atau daging, juga dipercaya dapat membantu menyediakan tenaga bagi tubuh untuk beraktivitas seharian, meski sedang berpuasa. 2. Minum Cukup Air. 3. Lakukan Olahraga di Waktu yang Tepat. 4. Jangan Makan Terlalu Banyak Saat Berbuka . 5. Konsumsi Makanan Sehat Saat Sahur dan Buka Puasa.\",\"src\":\"https://www.sehatq.com/artikel/tips-puasa-sehat-antilemas-bulan-Ramadan\"}\r\n'),
(4, '{\"title\":\"Dampak Buruk Junk Food Untuk Kesehatan Tubuh\",\"time\":\"4 days ago\",\"desc\":\"Junk Food disebut makanan instan atau makanan cepat saji yang kini telah berkembang pesat di persaingan perusahaan makanan di Indonesia. Makanan cepat saji dinilai sebagian orang lebih efektif terhadap waktu dan mudah ditemukan. Tak hanya itu saja, makanan cepat saji juga memiliki cita rasa yang lezat ditambah lagi harganya yang terjangkau. Makanan cepat saji sudah lama mengundang kontroversi di negara kita karena terungkapnya beberapa dampak buruk yang ia miliki. Dampak buruk itu disebabkan oleh kandungan zat-zat berbahaya di dalam makanan instan seperti lilin yang ada pada mie instan. Tak berhenti disitu, nyatanya di dalam makanan cepat saji terkandung bahan pengawet dan penyedap yang kini disebut micin. Fenomena kata micin kini mendadak kerap digunakan para remaja hingga dewasa bila seseorang mengalami hal-hal yang kurang normal. Maksud dari hal kurang normal itu seperti seseorang yang telat berpikir, lama menjawab bila diajak bicara dan lain sebagainya. Tak dielakkan, makanan cepat saji memang mengandung zat berbahaya seperti yang telah diungkapkan di atas. Sejumlah penelitian telah membuktikan bahwa keseringan mengkonsumsi makanan cepat saja memang tidak berdampak secara langsung ke tubuh. Namun, makanan-makanan cepat saji yang dikonsumsi akan tertimbun di dalam tubuh yang kemudian hari menjadi penyebab penyakit mematikan seperti kanker. Tak hanya kanker, penyakit berbahaya juga mengintai misalnya stroke, usus buntu dan penyakit ginjal. Maka bila Anda termasuk ke dalam orang yang hobi mengkonsumsi makanan cepat saja, kurangilah hal itu dan mulai sayangi tubuh serta diri Anda sendiri. Perlu diketahui bahwa salah satu kandungan di dalam makanan instan yaitu lilin sulit dicerna tubuh. Lilin itu menghancurkan prinsip kerja sistem pencernaan tubuh sehingga makanan yang mengandung lilin akan dicerna dengan waktu minimal dua hari.\",\"src\":\"https://thegorbalsla.com/contoh-artikel/\"}\r\n'),
(5, '{\"title\":\"Manfaat Madu Bagi Kesehatan\",\"time\":\"5 days ago\",\"desc\":\"Madu adalah hasil produksi dari hewan lebah yang kini telah dikenal lebih jauh karena khasiatnya bagi kesehatan yang melimpah.Takheranjikamadubanyakdigunakanuntukpengobatanberbagaimacampenyakit. Adapunmanfaat madu, yaitu: a. Manfaat madu untuk kesehatan kulit wajah Madu tak hanya dikenal sebagai pemanis alami, madu juga memiliki manfaat lain yang dapat digunakan untuk kesehatan kulit khususnya kulit wajah. Madu dipercaya dapat digunakan untuk penghilang jerawat, namun perlu ditambahkan dengan beberapa bahan lain seperti jeruk nipis. Madu pun dapat dimanfaatkan untuk mengecilkan pori-pori wajah dan menghaluskan kulit wajah. b. Madu sebagai penghilang batuk Manfaat madu sebagai penghilang batuk tak hanya isapan jempol belaka yang tiada buktinya, namun manfaat ini dibuktikan dengan jurnal pula. Jurnal itu telah dirilis pada tahun 2007 dengan sampel anak-anak sebanyak 270 orang. Hasil dari penelitian yaitu dengan meminum satu sendok madu sebelum Mereka tidur intensitas batuk yang terjadi mengalami penurunan. c. Madu sebagai peningkat kekebalan tubuh Di dalam madu ada aneka nutrisi yang begitu kompleks mulai dari vitamin hingga aneka mineral yang dibutuhkan tubuh. Tak heran bila kini banyak para orang tua yang mempercayai madu untuk diberikan kepada anak-anak mereka. Alasan para orang tua memberikan madu yaitu untuk menjaga kesehatan sang anak terutama untuk meningkatkan kekebalan tubuh dan stamina. d. Madu sebagai pembunuh bakteri Di dalam madu ada suatu zat yang memiliki fungsi memperlambat laju bakteri bahkan mematikan bakteri tersebut sehingga tubuh terhindarkan penyakit. Telah dibuktikan pada suatu studi bila madu efektif membasmi bakteri dalam tubuh seperti E. Coli, Salmonella dan bakteri lain sejenisnya. Maka dari itu, khasiat dari madu tak perlu diragukan lagi.\",\"src\":\"https://thegorbalsla.com/contoh-artikel/\"}\r\n'),
(6, '{\"title\":\"Berita Telur Palsu yang Telah Beredar di Masyarakat\",\"time\":\"6 days ago\",\"desc\":\"Beberapa bulan yang lalu, masyarakat Indonesia dikejutkan dengan berita sensasional yaitu munculnya telur palsu di pasaran berbagai wilayah. Penyebar berita ini memberikan ciri-ciri telur palsu yaitu tidak memberi bau amis, putih telurnya encer dan warna merahnya pudar. Tak lama setelah beredarnya berita itu, seluruh warga langsung heboh hingga penjualan telur pedagang menurun. Beredarnya berita itu tak hanya merugikan pedagang, namun juga merugikan seluruh kalangan karena telur merupakan hasil hewani protein terbaik. Sejak dahulu, telur memang dipercaya memiliki kandungan protein yang baik bagi tubuh selain ikan-ikan dari laut. Tak heran bila telur diolah ke berbagai macam jenis makanan mulai dari telur goreng, telur balado hingga semur telur. Namun, perlu diketahui bagi seluruh pembaca bahwa berita tentang telur palsu itu adalah hoax atau berita yang tak memiliki kebenaran. Oknum-oknum tak bertanggung jawab sengaja mempublikasikan berita palsu demi tujuan dan maksud pribadi yang menguntungkan bagi mereka. Sehingga, kini semua orang yang perlu khawatir untuk kembali membeli telur dan mengkonsumsinya setiap hari. Nah itulah contoh artikel yang menarik. Mulai dari contoh artikel di koran, contoh artikel pendidikan, contoh artikel ilmiah, contoh artikel kesehatan, contoh artikel singkat, contoh artikel panjang, contoh artikel adiwiyata, contoh artikel ekonomi, contoh artikel lingkungan hidup, contoh artikel pemanasan global, contoh artikel tentang narkoba, contoh artikel sekolah, dll.\",\"src\":\"https://thegorbalsla.com/contoh-artikel/\"}\r\n'),
(7, '\r\n{\"title\":\"Ini Artikel\",\"time\":\"7 days ago\",\"desc\":\"Artikel ni bosss\",\"src\":\"www.artikel.com\"}'),
(8, '\r\n{\"title\":\"Kesehatan\",\"time\":\"8 days ago\",\"desc\":\"Artikel Kesehatan - Artikel kesehatan dalam media apapun seringkali diburu orang sebagai bahan dasar atau referensi untuk melanjutkan tindakan medis selanjutnya. Kesehatan dan manusia seperti dua sisi yang tidak dapat di pisahkan. Itulah mengapa artikel tentang dunia kesehatan begitu di cari dan diburu oleh masyarakat. Anda bisa bayangkan kebutuhan mendesak seorang ibu yang baru melahirkan, bayi- bayi mungil yang perlu mendapat perawatan kesehatan,pekerja kantoran yang sering mendapat tekanan, atau 76 juta kaum manula yang ingin hidup sehat dan menurunkan berat badan.Mereka akan berusaha mencari informasi tentang hidup sehat. Informasi mengenai kesehatan adalah suatu hal yang sangat dibutuhkan dewasa ini.Informasi mengenai tips pengobatan,baik medis maupun terapi alternatif dan pengobatan tradisional merupakan hal penting yang patut untuk diketahui,belum lagi mengenai informasi berbagai macam penyakit beserta pantangannya yang harus di hindari,kemudian ada lagi artikel kesehatan mengenai gejala dan penyebab suatu penyakit yang di ikuti dengan cara pencegahannya. Semua hal di atas adalah berguna manakala kita sedang  mengumpulkan materi untuk pembuatan kliping atau tugas sekolah maupun pengumpulan bahan untuk skripsi,namun tak sedikit pula kita menggunakan informasi tersebut ketika kita sedang sakit dan ingin mencari pengobatan yang terbaik untuk kita maupun orang yang kita sayangi.\",\"src\":\"https://www.kompasiana.com/materipendidikan/550eab04813311ba2cbc64d8/artikel-kesehatan\"}\r\n'),
(9, '\r\n{\"title\":\"Artikel tentang Kesehatan Tubuh\",\"time\":\"9 days ago\",\"desc\":\"Alasan Pentingnya Kesehatan bagi Tubuh. Kesehatan merupakan hal yang mutlak dibutuhkan oleh tubuh. Tanpa kesehatan, manusia tidak bisa beraktivitas dan bekerja. Saat sakit, baru sangat terasa arti penting kesehatan bagi seseorang. Bahkan tidak perlu sakit yang keras, sakit flu yang terbilang sakit ringan saja sudah sangat mengganggu. Oleh sebab itu, sangat penting untuk menjaga kesehatan yang dimiliki. Selain itu, kesehatan terbilang sangat mahal. Saat ini, biaya pengobatan dan perawatan sangat mahal. Bahkan banyak orang yang terpaksa menjual seluruh harta miliknya demi menyembuhkan penyakit. Hal ini menunjukkan pentingnya kesehatan bagi tubuh dan harus dijaga sebisa mungkin. Jangan sampai penyakit terlanjur datang dan penyesalan mendera, setiap saat kita harus memiliki pola hidup sehat untuk menjaga tubuh ini.\",\"src\":\"https://www.artikelind.com/2018/03/artikel-tentang-kesehatan-tubuh.html\"}');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `id_user`, `id_mitra`, `id_dokter`, `keterangan`) VALUES
(11, 4, 1, 5, 'oyee'),
(13, 5, 1, 5, 'yee'),
(15, 1, 1, 1, 'ayee bro');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `id_mitra` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `id_mitra`, `nama`, `spesialis`, `waktu`) VALUES
(1, 1, 'dr. Tirta', 'jantung', '9.00 AM - 5.00 PM'),
(2, 1, 'dr. Farrel', 'Paru-Paru', '5.00 PM - 10.00 PM'),
(5, 1, 'arinda', 'Anak & Kandungan', 'kapan pun bisa'),
(6, 4, 'Ansellma', 'Anak & Kandungan', '24 Jam');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id`, `nama`, `address`, `waktu`, `username`, `password`, `jenis`, `url`) VALUES
(1, 'Siloam', 'bandung', '24 Jam', 'siloam', '123', 'rumah sakit', ''),
(3, 'Klinik Cijantung', 'Jakarta Timur', '9.00-21.00', 'cijantung', '123', 'clinic', ''),
(4, 'rumah sakit ciputra', 'jakarta barat', '24 Jam', 'ciputra', '123', 'rumah sakit', ''),
(5, 'Klinic telkom medika', 'bandung', '9.00-21.00', 'medika', '123', 'clinic', ''),
(6, 'Rumah sakit Pertamina', 'Balikpapan', '24 Jam', 'pertamina', '123', 'rumah sakit', '');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `username`, `url`) VALUES
(2, 'siloam', 'Capture.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `mitra` varchar(100) NOT NULL,
  `dokter` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `id_user`, `mitra`, `dokter`, `keterangan`) VALUES
(4, 4, 'Siloam', 'dr. Farrel', 'sakti help...');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `email`, `password`, `phonenumber`, `address`, `role`) VALUES
(1, 'maul', 'Maulana Irfan', '123@gmail.com', '123', '123', '123', '1'),
(2, 'farrelm__', 'Muhammad Farrel', 'farrelmuhammad0410@gmail.com', '123', '08114551997', 'BDI Blok A No 14, Balikpapan', '1'),
(4, 'apink', 'Naufal Alvin', '123@gmail.com', '123', '123', '123', '1'),
(5, 'daffa', 'Daffashiddiq', 'daffa@gmail.com', '1234', '1234', 'pbb', '1'),
(6, 'aye', 'oyee', 'aye@gmail.com', '123', '123', '123', '1'),
(7, 'hudarizky', 'Huda Rizky', 'huda.rizky.8@gmail.com', 'hud', '08975010636', 'Purworejo, Jawa Tengah', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_mitra` (`id_mitra`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `FK id_mitra` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
