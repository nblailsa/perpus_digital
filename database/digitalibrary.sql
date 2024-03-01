-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 05:21 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `id_kategori`, `tahun_terbit`, `deskripsi`, `gambar`) VALUES
(3, 'Pemrograman Web', 'Sandra', 'Erlangga', 7, 2023, 'Dilansir dari laman Wikipedia, pemrograman atau programming adalah proses menulis, menguji dan memperbaiki (debug), dan memelihara kode yang membangun suatu program komputer. Kode ini ditulis dalam berbagai bahasa pemrograman atau sering disebut juga bahasa komputer. Tujuan dari pemrograman adalah untuk memuat suatu program yang dapat melakukan suatu perhitungan atau ‘pekerjaan’ sesuai dengan keinginan pemrogram. Untuk melakukan pemrograman, diperlukan keterampilan dalam algoritma, logika, bahasa pemrograman, dan pada banyak kasus, pengetahuan-pengetahuan lain seperti matematika.\r\n\r\nPemrograman adalah suatu cara dalam membuat satu atau menghubungkan lebih dari satu algoritma dengan menggunakan suatu bahasa pemrograman tertentu sehingga menjadi suatu program komputer. Ada banyak bahasa pemrograman yang dapat digunakan seperti bahasa C, C++, Java, Phyton, dan lain-lain. Setiap bahasa memiliki gaya yang berbeda-beda dalam penggunaannya sehingga memiliki gaya pemrograman yang berbeda pula. Gaya pemrograman ini biasa disebut dengan paradigma pemrograman. Orang yang pandai atau yang menggunakan bahasa pemrograman sering disebut seorang Pemrogram atau Programmer.\r\n\r\nTerciptanya bahasa pemrograman beriringan dengan sejarah ditemukannya mesin dan komputer. Dilansir dari laman Dicoding, cikal bakal bahasa pemrograman pertama kali muncul pada tahun 1822, sebuah mesin bernama Difference Engine diciptakan oleh Charles Babbage. Namun mesin buatan Babbage hanya bisa mengeluarkan satu jenis output. Barulah 10 tahun kemudian Charles Babbage mengembangkan mesin pengolah data itu hingga mencapai versi kedua tahun 1849. Perjuangan Babbage diteruskan oleh anaknya, Henry Prevost dengan membuat kopian dari perhitungan algoritma mesinnya dan mengirim ke berbagai institusi di dunia.\r\n\r\nDi tahun 1854, George Boole menemukan sistem logika yang disebut logika Boole. Logika ini menyatakan hubungan lebih besar, lebih kecil, sama dengan dan tidak sama dengan. Pengembangan logika ini terus berkembang dari tahun ke tahun hingga seorang ilmuwan Jerman bernama Konrad Zuse membuat sebuah mesin kalkulator biner dengan nama Z-1 pada tahun 1935.\r\n\r\nKetika sedang mengembangkan Z-4, Zuse sadar bahwa bahasa pemrograman dengan bahasa mesin terlalu rumit. Bahasa mesin ini tergolong bahasa tingkat rendah, karena hanya kumpulan kode 0 dan 1 (ya dan tidak). Setelah melakukan penelitian selama setahun, pada tahun 1945 barulah tercipta bahasa pemrograman tingkat tinggi pertama didunia, yaitu Plankalkul (Plan Kalkulus). Dengan Plankalkul terbukti bisa meciptakan mesin catur komputer pertama didunia.\r\n\r\nShort Code dicetuskan pada tahun 1949 sebagai bahasa pemrograman tingkat tinggi pertama yang diciptakan oleh John Mauchly. Namun programnya harus ditranslasikan ke dalam bahasa mesin setiap dijalankan sehingga membutuhkan waktu yang cukup lama. Alick Glennie mengembangkan bahasa pemrograman Autocode di awal tahun 1950-an. Bahasa ini menggunakan kompiler yang mengkonversi secara otomatis bahasanya ke bahasa mesin dan pertama kali digunakan pada tahun 1952 untuk komputer Mark 1 di Universitas Manchester.\r\n\r\nJohn W. Backus mengembangkan sebuah bahasa alternatif yang lebih praktis dari bahasa Assembly untuk memprogram IBM 704 mainframe computer dengan nama Formula Translation atau yang kita kenal dengan FORTRAN. Kompiler FORTRAN berhasil diselesaikan pada April 1957. Selanjutnya ada FLOW-MATIC yang dibuat oleh Grace Hopper yang diresmikan pada tahun 1959 dan membawa pengaruh besar untuk pembuatan bahasa pemrograman COBOL (Common Business Oriented Language).\r\n\r\nPerkembangan bahasa pemrograman semakin pesat dengan adanya bahasa C. Dennis Ritchie dan Brian Kernighan menciptakan C awalnya untuk mesin DEC PDP-11. Dengan adanya bahasa C banyak bahasa baru bermunculan seperti C++, Java, dan akan terus berevolusi menjadi semakin mudah digunakan seiring perkembangan zaman.', 'coding.jpeg'),
(16, 'cinta abadi', 'marnies', 'erlangga', 6, 2024, 'cinta adalah hal yang indah, sangat disukai banyak orang\r\n\r\nAnna Sasaki adalah seorang gadis pendiam yang tinggal di Sapporo bersama dengan orang tua angkat. Ketika ia terkena serangan asma di sekolahnya, dokter menyarankan kepada sang ibu angkat, Yoriko, untuk mengirim Anna ke tempat dengan udara yang bersih dan sejuk.\r\n\r\nOrang tua angkatnya kemudian mengirim Anna untuk menghabiskan liburan musim panas bersama dengan Setsu dan Kiyomasa Oiwa, paman dan bibi Anna yang tinggal di sebuah pedesaan tepi laut yang indah. Keduanya lalu menjemput Anna yang sudah datang seorang diri di stasiun kereta api.\r\n\r\nSetibanya di sana, Anna langsung menulis surat untuk orang tuanya yang tinggal di Sapporo. Saat pulang sehabis memasukkan surat ke kotak pos, Anna melihat sebuah rumah kosong yang ada di seberang rawa-rawa. Ia kemudian menyelidiki rumah tersebut karena memiliki bentuk yang sangat tidak asing bagi dirinya.\r\n\r\nKarena keasyikan melihat-lihat rumah tersebut, Anna tertidur pulas di sana hingga malam hari. Anna lalu terjebak dan tidak bisa pulang karena air laut sudah tinggi menggenangi rawa-rawa. Seorang nelayan tua yang bernama Toichi kemudian datang menghampirinya untuk membawa Anna kembali ke dermaga.\r\n\r\nDi rumah, paman bibinya kemudian mengatakan bahwa tempat itu dulunya adalah rumah yang kerap digunakan oleh orang-orang asing untuk liburan. Mereka pun mengutarakan kepada Anna untuk menjauhi tempat itu karena berhantu. Pada malam harinya saat Anna tidur, ia pun bermimpi tentang seorang gadis berambut pirang yang tinggal di rumah rawa tersebut.\r\n\r\nBeberapa minggu kemudian, Anna kembali lagi ke rumah itu dan akhirnya bertemu dengan gadis pirang yang selalu ada dalam mimpinya. Gadis tersebut bernama Marnie dan mereka pun menjadi teman yang sangat dekat. \r\n\r\nAnna pun kini tidak merasa sendirian lagi karena ada Marnie yang selalu membuatnya terhibur. Ketika air laut surut, Anna selalu berkunjung dan bermain bersama dengan Marnie. Keduanya pun kerap berbagi cerita tentang hal apa pun.\r\n\r\nSuatu hari, Marnie mengajak Anna untuk datang ke acara pesta di rumahnya. Untuk pertama kalinya juga, Anna masuk ke dalam rumah Marnie dan melihat orang-orang tengah berpesta dengan gembira. Di momen itu, Anna pun melihat Marnie sedang menari dengan seorang anak lelaki yang bernama Kazuhiko.\r\n\r\nSementara itu, beberapa warga desa secara tidak sengaja menemukan Anna yang sedang tertidur di dekat kantor pos. Mereka lalu membawanya pulang ke kediaman paman dan bibinya. Besok paginya, dengan semangat ia kembali ke rumah rawa tersebut, namun anehnya ia menemukan rumah itu kosong tidak berpenghuni dan terlihat kotor.\r\n', 'namar.jpeg'),
(17, 'When Marnie Was There', 'Hiromasa Yonebayashi', 'Ghibli', 6, 2014, 'Anna Sasaki adalah seorang gadis pendiam yang tinggal di Sapporo bersama dengan orang tua angkat. Ketika ia terkena serangan asma di sekolahnya, dokter menyarankan kepada sang ibu angkat, Yoriko, untuk mengirim Anna ke tempat dengan udara yang bersih dan sejuk.\r\n\r\nOrang tua angkatnya kemudian mengirim Anna untuk menghabiskan liburan musim panas bersama dengan Setsu dan Kiyomasa Oiwa, paman dan bibi Anna yang tinggal di sebuah pedesaan tepi laut yang indah. Keduanya lalu menjemput Anna yang sudah datang seorang diri di stasiun kereta api.\r\n\r\nSetibanya di sana, Anna langsung menulis surat untuk orang tuanya yang tinggal di Sapporo. Saat pulang sehabis memasukkan surat ke kotak pos, Anna melihat sebuah rumah kosong yang ada di seberang rawa-rawa. Ia kemudian menyelidiki rumah tersebut karena memiliki bentuk yang sangat tidak asing bagi dirinya.\r\n\r\nKarena keasyikan melihat-lihat rumah tersebut, Anna tertidur pulas di sana hingga malam hari. Anna lalu terjebak dan tidak bisa pulang karena air laut sudah tinggi menggenangi rawa-rawa. Seorang nelayan tua yang bernama Toichi kemudian datang menghampirinya untuk membawa Anna kembali ke dermaga.\r\n\r\nDi rumah, paman bibinya kemudian mengatakan bahwa tempat itu dulunya adalah rumah yang kerap digunakan oleh orang-orang asing untuk liburan. Mereka pun mengutarakan kepada Anna untuk menjauhi tempat itu karena berhantu. Pada malam harinya saat Anna tidur, ia pun bermimpi tentang seorang gadis berambut pirang yang tinggal di rumah rawa tersebut.\r\n\r\nBeberapa minggu kemudian, Anna kembali lagi ke rumah itu dan akhirnya bertemu dengan gadis pirang yang selalu ada dalam mimpinya. Gadis tersebut bernama Marnie dan mereka pun menjadi teman yang sangat dekat. \r\n\r\nAnna pun kini tidak merasa sendirian lagi karena ada Marnie yang selalu membuatnya terhibur. Ketika air laut surut, Anna selalu berkunjung dan bermain bersama dengan Marnie. Keduanya pun kerap berbagi cerita tentang hal apa pun.\r\n\r\nSuatu hari, Marnie mengajak Anna untuk datang ke acara pesta di rumahnya. Untuk pertama kalinya juga, Anna masuk ke dalam rumah Marnie dan melihat orang-orang tengah berpesta dengan gembira. Di momen itu, Anna pun melihat Marnie sedang menari dengan seorang anak lelaki yang bernama Kazuhiko.\r\n\r\nSementara itu, beberapa warga desa secara tidak sengaja menemukan Anna yang sedang tertidur di dekat kantor pos. Mereka lalu membawanya pulang ke kediaman paman dan bibinya. Besok paginya, dengan semangat ia kembali ke rumah rawa tersebut, namun anehnya ia menemukan rumah itu kosong tidak berpenghuni dan terlihat kotor.', 'marnie.jpeg'),
(18, 'My Neighbor Totoro', 'Hayao Miyazaki', 'Studio Ghibli', 6, 1988, 'Totoro, si mahluk gaib itu tidak dimunculkan di awal episode. Kisah film My Neighbor Totoro diawali dengan adegan di mana Mei dan Satsuki begitu senang mendapati rumah tua berhantu di salah satu desa di Hachikokuyama akan menjadi rumah tinggal mereka.\r\n\r\nTingkah adik kakak ini di luar dugaan. Mendapati rumah bobrok dengan tiang yang lapuk dan dinding yang kotor malah membuat mereka kegirangan. Meskipun masih layak huni, namun kelihatan jelas rumah itu sudah lama ditinggalkan. Banyak sarang laba-laba dan kunci-kunci yang berkarat.\r\n\r\nSetibanya di ‘rumah baru’ mereka, dua anak enerjik dan lincah ini langsung menyisir semua ruangan karena penasaran sembari menurunkan barang-barang dari kendaraan ke rumah. Ketika menyisir ruangan, Satsuki melihat biji pohon ek jatuh dari atap rumah. Ia pun memberitahu Mei.\r\n\r\nKemudian, Mei dan Satsuki diminta memeriksa bagian belakang rumah, dan di ruangan dapur dan toilet itu mereka melihat sesuatu benda hitam berlarian dan menghilang. Nenek Kangta, penjaga rumah itu bilang bahwa itu adalah Susu Atari (Peri Jelaga) yang biasanya menghuni rumah kosong.\r\n\r\nJika sebuah rumah dihuni oleh orang yang selalu tertawa dan gembira, maka Peri Jelaga akan pergi dengan sendirinya, begitu katanya.\r\n\r\nKeesokan harinya, Mei dan Satsuki menengok sang ibu yang dirawat di rumah sakit. Mereka menceritakan pertemuan dengan Peri Jelaga dan bertanya kepada ibunya apakah ia akan suka tinggal di rumah berhantu. Sambil tertawa, sang ibu mengangguk dan berkata bahwa ia akan menyukainya.\r\n\r\nDi suatu hari, Mei melihat sesosok mahluk berwarna putih yang melintas di dekatnya. Ia mengikuti mahluk itu sampai masuk ke pohon besar yang tak jauh dari rumah Mei. Rupanya pohon keramat itu adalah sarang mereka, dan di sana Mei melihat sosok mahluk yang lebih besar lagi tengah tertidur.\r\n\r\nMei yang penasaran menghampiri mahluk besar yang sedang pulas itu. Karena mahluk itu bertubuh gempal dan menggemaskan, Mei pun menamainya Totoro. \r\n\r\nSatsuki yang baru tiba dari sekolah kemudian mencari Mei ke sana kemari. Di dekat pohon besar itu, Satsuki melihat topi Mei tergeletak. Ia pun masuk dan mendapati Mei tertidur di bawah rimbunan pohon. Mei menceritakan tentang pertemuannya dengan Totoro dan teman-temannya.\r\nSejak saat itu, Mei, Satsuki dan Totoro kerap melakukan petualangan kecil yang ajaib dan menakjubkan yang hanya dapat dirasakan oleh mereka. Totoro menjadi teman yang menyenangkan sekaligus tetangga yang selalu sigap membantu, termasuk saat mencari Mei yang tersesat.', 'totoro.jpeg'),
(29, 'Howls Moving Castle', 'Makaio', 'Ghibli', 6, 2009, 'Ghibli adalah sesuai\r\nPengertian Seni\r\nJika dilihat menurut Kamus Besar Bahasa Indonesia, seni berarti keahlian membuat karya yang bermutu (dilihat dari segi kehalusannya, keindahannya, dan sebagainya). Arti seni di KBBI juga merupakan karya yang diciptakan dengan keahlian yang luar biasa, seperti tari, lukisan, ukiran. Berikutnya, coba kita lihat dari sisi bahasa Inggris. Kata “art” berarti ekspresi atau aplikasi keterampilan kreatif dan imajinasi manusia, yang dihasilkan dalam bentuk visual, serta kecantikan dan kekuatan emosionalnya dapat diapresiasi. \r\n\r\nAsal usul kata “seni” dalam bahasa Indonesia adalah kata “sani” dari bahasa Sansekerta, yang berarti pemujaan, persembahan, dan pelayanan. Sementara kata “art” dalam bahasa Inggris berasal dari kata “artem” dalam bahasa Latin yang berarti keterampilan, yang biasanya digunakan untuk menjelaskan kualitas atau ekspresi sesuatu yang indah atau sangat penting.\r\n\r\nTernyata, para filsuf dan orang-orang pintar dunia sudah melakukan perdebatan panjang dalam menentukan arti seni. Karena berdasarkan arti-arti di atas, menjelaskan tentang seni berarti juga harus menjelaskan apa itu prinsip estetika. Bagaimana kita menentukan apakah sebuah benda pantas disebut sebagai seni? Menurut sebuah artikel di\r\nThoughtCo.\r\n, secara umum pengertian seni dapat dibagi ke dalam tiga kategori: representasi, ekspresi, dan bentuk.\r\n\r\nSeni sebagai Representasi\r\nPlato pernah mengatakan kalau seni itu adalah representasi atau hasil tiruan dari sesuatu yang indah atau bermakna. Jadi, kurang lebih sampai akhir abad ke-18, yang dianggap sebuah karya seni yang baik biasanya yang bisa menggambarkan subjek dengan sangat mirip. Jadi teringat ketika kita menonton film-film berlatar belakang sejarah, biasanya lukisan yang dipajang bergambar seputar alam atau potret orang-orang terpandang. \r\n\r\nSeni sebagai Ekspresi\r\nSeni juga diartikan sebagai ekspresi. Artinya seni yang menimbulkan respon emosional dari orang yang melihatnya. Tidak hanya karya seni itu yang penting, tapi kita yang menikmati karya itu juga memegang peranan penting. Sampai sekarang, karya-karya seni masih digunakan untuk memancing emosi penikmatnya.\r\n\r\nSeni sebagai Bentuk\r\nSama seperti representasi, pengertian seni yang ini juga ditentukan oleh filsuf ternama, Immanuel Kant. Filsuf asal Jerman ini percaya bahwa kita tidak seharusnya menilai seni dari konsepnya, tapi dari hasil perpaduan elemen formal dan prinsipnya.\r\n\r\nMelihat pembagian pengertian seni di atas, kita dapat melihat jelas kalau sejarah itu memegang peranan penting dalam perjalanan menentukan pengertian seni. Konteks sosial, perilaku, waktu, lokasi, dan lingkungan, semuanya membantu mendefinisikan seni.', 'howls.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategoribuku`
--

INSERT INTO `kategoribuku` (`id_kategori`, `nama_kategori`) VALUES
(1, 'nonfiksi'),
(6, 'fiksi '),
(7, 'geografis'),
(11, 'Ensiklopedia');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `id_kategoribuku` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `id_koleksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `koleksipribadi`
--

INSERT INTO `koleksipribadi` (`id_koleksi`, `id_user`, `id_buku`) VALUES
(7, 7, 16),
(13, 7, 16),
(14, 18, 16),
(15, 7, 16);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_peminjaman` enum('dipinjam','dikembalikan','telat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_user`, `id_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`) VALUES
(8, 6, 16, '2024-02-04', '2024-02-07', 'dikembalikan'),
(15, 6, 3, '2024-02-11', '2024-02-14', 'dikembalikan'),
(25, 7, 3, '2024-02-15', '2024-02-22', 'telat'),
(45, 7, 16, '2024-02-29', '2024-03-07', 'dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulasanbuku`
--

INSERT INTO `ulasanbuku` (`id_ulasan`, `id_user`, `id_buku`, `ulasan`, `rating`) VALUES
(11, 7, 17, 'lumayan bagus', 4),
(13, 7, 17, 'bagus', 3),
(14, 7, 18, 'sangat bagus alur ceritanya', 4),
(15, 7, 29, 'bagus', 3),
(16, 7, 16, 'sangat menyentuh hati', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `level` enum('admin','petugas','peminjam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'administrator', 'Jember', 'admin'),
(5, 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas@gmail.com', 'Petugas', 'Jember', 'petugas'),
(6, 'nabila', '652d3266220e0aacb047d3aa6f51f1b0', 'nabila@gmail.com', 'Nabila Febriyanti', 'Jateng', 'peminjam'),
(7, 'ailsa', '3174fd2bc491b36c7c03bbb2801ff87d', 'ailsa@gmail.com', 'Ailsa Nabila', 'Jombang', 'peminjam'),
(18, 'aila', '7192bff14334c276c3b7ac02d11c7ede', 'aila@gmail.com', 'Aila Setiawati', 'semboro', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD PRIMARY KEY (`id_kategoribuku`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`id_koleksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  MODIFY `id_kategoribuku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  MODIFY `id_koleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategoribuku` (`id_kategori`);

--
-- Constraints for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD CONSTRAINT `koleksipribadi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `koleksipribadi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD CONSTRAINT `ulasanbuku_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `ulasanbuku_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
