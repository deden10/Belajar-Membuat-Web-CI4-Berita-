-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2020 pada 10.53
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Teknologi'),
(6, 'Sosial'),
(7, 'Kuliner'),
(8, 'Ekonomi'),
(9, 'Budaya'),
(10, 'Politik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-12-13-044246', 'App\\Database\\Migrations\\Kategori', 'default', 'App', 1607834699, 1),
(2, '2020-12-13-082438', 'App\\Database\\Migrations\\User', 'default', 'App', 1607848206, 2),
(3, '2020-12-14-010102', 'App\\Database\\Migrations\\Post', 'default', 'App', 1607907833, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`post_id`, `category_id`, `title`, `image`, `content`, `date`) VALUES
(2, 6, 'Pilpres AS, Tagar #Elections2020 dan Trump Ramai ', '1608194594_1d849f46f3a6569182b5.jpg', '                                                                                <div style=\"position: absolute; left: -99999px;\">KOMPAS.com - Setelah \r\nsempat berubah demi meredam peredaran misinformasi di masa pemilu \r\npresiden Amerika Serikat,  Twitter akhirnya mengembalikan cara me- \r\nretweet twit seperti semula.\r\n\r\nPengguna Twitter kini bisa langsung me-retweet tanpa harus mengosongkan \r\n\"quote tweet\" (mengutip twit) lebih dulu. Twitter mengumumkan perubahan \r\nini lewat akun resminya.<br><br> Artikel ini telah tayang di <a href=\"https://www.kompas.com/\">Kompas.com</a> dengan judul \"Pilpres AS Selesai, Cara Retweet di Twitter Kembali Seperti Semula\", Klik untuk baca: <a href=\"https://tekno.kompas.com/read/2020/12/17/10050067/pilpres-as-selesai-cara-retweet-di-twitter-kembali-seperti-semula\">https://tekno.kompas.com/read/2020/12/17/10050067/pilpres-as-selesai-cara-retweet-di-twitter-kembali-seperti-semula</a>. <br>Penulis : Wahyunanda Kusuma Pertiwi<br>Editor : Oik Yusuf<br> <br> Download aplikasi <a href=\"https://www.kompas.com/\">Kompas.com</a> untuk akses berita lebih mudah dan cepat:<br>Android: <a href=\"https://bit.ly/3g85pkA\">https://bit.ly/3g85pkA</a><br>iOS: <a href=\"https://apple.co/3hXWJ0L\">https://apple.co/3hXWJ0L</a></div><p>Jakarta, CNN Indonesia -- </p><p>Pemilihan presiden <span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/pilpres\" target=\"_blank\"><span style=\"color: #ff0000;\">Amerika Serikat</span></a></strong></span>\r\n dibuka pada Selasa (3/11) pagi waktu setempat. Sejumlah TPS di New \r\nYork, New Jersey, Pennsylvania, dan Virginia menandai pertarungan \r\nsebenarnya antara petahana <span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/trump\" target=\"_blank\"><span style=\"color: #ff0000;\">Donald Trump</span></a></strong></span> dan rivalnya, Joe Biden.</p><p>Pemungutan\r\n suara kali ini secara luas dilihat sebagai referendum tentang Trump dan\r\n kepresidenannya yang selama empat tahun terakhir dianggap sebagai \r\nsebuah kegagalan besar, termasuk salah satunya terkait penanganan \r\npandemi virus corona.</p>                                                                                                                                                                                                                                                                                                                                ', '2020-12-14'),
(4, 8, 'PPATK Mengendus Pelaku Korupsi Bansos Covid-19 ', '1608192979_d887c7a5bede146aeed5.jpg', '                                        <p>Pusat Pelaporan dan Analisis Transaksi Keuangan (<a href=\"https://www.liputan6.com/tag/ppatk\">PPATK</a>) tengah membantu Komisi Pemberantasan Korupsi (<a href=\"https://www.liputan6.com/tag/kpk\">KPK</a>) dalam menginvestigasi atas kasus korupsi/dugaan suap terkait pengadaan bantuan sosial (<a href=\"https://www.liputan6.com/news/read/4435058/maki-tegaskan-akan-berikan-bukti-soal-nilai-korupsi-bansos-ke-kpk\" title=\"bansos\">bansos</a>) penanganan Covid-19 di wilayah Jabodetabek.\r\n</p><p>Kepala <a href=\"https://www.liputan6.com/bisnis/read/4435204/ppatk-terus-selidiki-aliran-keuangan-asabri-sejauh-apa-perkembangannya\" title=\"PPATK\">PPATK</a> Dian Ediana Rae mengatakan, pihaknya tengah menelusuri pelaku dugaan suap <a href=\"https://www.liputan6.com/bisnis/read/4433170/sri-mulyani-perbaiki-data-bansos-covid-19-untuk-tekan-potensi-korupsi\" title=\"bansos \">bansos </a>lainnya pasca Menteri Sosial (<a href=\"https://surabaya.liputan6.com/read/4435169/wali-kota-risma-masih-tunggu-titah-megawati-terkait-tawaran-jadi-mensos\" title=\"Mensos\">Mensos</a>)<a href=\"https://www.liputan6.com/tag/juliari-batubara\"> Juliari Peter Batubara </a>dan empat orang lainnya ditetapkan sebagai tersangka.</p><p>\"Bansos pada kenyataan memang PPATK sudah melakukan langkah-langkah yang\r\n sama untuk melakukan pengamatan yang dianggap rawan,\" kata Dian dalam \r\nacara refleksi tahunan PPATK di Bogor, seperti dikutip Jumat \r\n(17/12/2020).</p><p><br></p>                                        ', '2020-12-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(70) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `name`, `no_telp`, `email`, `address`, `username`, `password`) VALUES
(5, 'Prian Daru', '0813321123123', 'prian.daru@gmail.com', 'Sumedang', 'prian', '$2y$10$oMltbdSVeODuODL6d1Uab.l5QNOnzm6il..zkYyKugBe5J/6ZR.G2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
