-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 18 Des 2021 pada 17.17
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendeteksi_mata_rabun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Gejala'),
(4, 'Kerusakan'),
(5, 'Pengetahuan'),
(6, 'Laporan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gejala`
--

CREATE TABLE `tbl_gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` char(3) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gejala`
--

INSERT INTO `tbl_gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`) VALUES
(77, 'G01', 'Penglihatan buram'),
(78, 'G02', 'Mata mudah tegang dan lelah'),
(79, 'G03', 'Sakit kepala'),
(80, 'G04', 'Benda terlihat kabur jika jarak dekat, tetapi benda terlihat jelas jika jarak jauh'),
(81, 'G05', 'Kesulitan membaca tulisan dengan cetakan huruf yang halus / kecil'),
(82, 'G06', 'Sudah berusia lebih dari 40 tahun'),
(83, 'G07', 'Benda terlihat kabur jika jarak jauh, tetapi benda terlihat jelas jika jarak dekat'),
(84, 'G08', 'Menyipitkan mata untuk melihat objek jauh'),
(85, 'G09', 'Rabun pada malam hari'),
(86, 'G10', 'Menyipitkan mata untuk melihat objek dekat'),
(87, 'G11', 'Masalah dalam membaca'),
(88, 'G12', 'Masalah dalam membaca'),
(89, 'G13', 'Suka memiringkan kepala saat melihat obyek'),
(90, 'G14', 'Penglihatan dekat dan jauh kabur'),
(91, 'G15', 'Tidak bisa melihat objek jarak jauh maupun jarak dekat'),
(92, 'G16', 'Penglihatan tidak jelas, seperti terdapat kabut menghalangi objek.'),
(93, 'G17', 'Lensa mata berubah menjadi buram seperti kaca susu'),
(94, 'G18', 'Mata menjadi sensitif pada cahaya'),
(95, 'G19', 'Melihat objek menjadi ganda dengan menggunakan 1 mata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hasil_diagnosa`
--

CREATE TABLE `tbl_hasil_diagnosa` (
  `id_hasil` int(11) NOT NULL,
  `hasil_probabilitas` float NOT NULL,
  `nama_kerusakan` varchar(100) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `solusi` text NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_hasil_diagnosa`
--

INSERT INTO `tbl_hasil_diagnosa` (`id_hasil`, `hasil_probabilitas`, `nama_kerusakan`, `nama_user`, `solusi`, `waktu`) VALUES
(16, 0, 'Mata Myopia', 'Member', '- Gunakan kacamata hitam saat bepergian di siang hari untuk melindungi mata dari sinar matahari.\r\n- Lakukan pemeriksaan kesehatan mata secara rutin.\r\n- Gunakan kacamata atau lensa kontak dengan ukuran tepat.\r\n- Berhenti Merokok\r\n- Istirahatkan mata secara berkala saat bekerja dengan menggunakan\r\nPerbanyak konsumsi buah-buahan dan sayuran, khususnya yang kaya vitamin A dan vitamin D\r\n- Lakukan pemeriksaan kesehatan secara rutin jika memiliki penyakit kronis, terutama diabetes dan hipertensi', 1639483060),
(17, 0, 'Mata Myopia', 'Member', '- Gunakan kacamata hitam saat bepergian di siang hari untuk melindungi mata dari sinar matahari.\r\n- Lakukan pemeriksaan kesehatan mata secara rutin.\r\n- Gunakan kacamata atau lensa kontak dengan ukuran tepat.\r\n- Berhenti Merokok\r\n- Istirahatkan mata secara berkala saat bekerja dengan menggunakan\r\nPerbanyak konsumsi buah-buahan dan sayuran, khususnya yang kaya vitamin A dan vitamin D\r\n- Lakukan pemeriksaan kesehatan secara rutin jika memiliki penyakit kronis, terutama diabetes dan hipertensi', 1639498407),
(18, 0, 'Mata Myopia', 'Member', '- Gunakan kacamata hitam saat bepergian di siang hari untuk melindungi mata dari sinar matahari.\r\n- Lakukan pemeriksaan kesehatan mata secara rutin.\r\n- Gunakan kacamata atau lensa kontak dengan ukuran tepat.\r\n- Berhenti Merokok\r\n- Istirahatkan mata secara berkala saat bekerja dengan menggunakan\r\nPerbanyak konsumsi buah-buahan dan sayuran, khususnya yang kaya vitamin A dan vitamin D\r\n- Lakukan pemeriksaan kesehatan secara rutin jika memiliki penyakit kronis, terutama diabetes dan hipertensi', 1639498545),
(19, 0, 'Mata Myopia', 'Member', '- Gunakan kacamata hitam saat bepergian di siang hari untuk melindungi mata dari sinar matahari.\r\n- Lakukan pemeriksaan kesehatan mata secara rutin.\r\n- Gunakan kacamata atau lensa kontak dengan ukuran tepat.\r\n- Berhenti Merokok\r\n- Istirahatkan mata secara berkala saat bekerja dengan menggunakan\r\nPerbanyak konsumsi buah-buahan dan sayuran, khususnya yang kaya vitamin A dan vitamin D\r\n- Lakukan pemeriksaan kesehatan secara rutin jika memiliki penyakit kronis, terutama diabetes dan hipertensi', 1639498546),
(20, 0, 'Mata Myopia', 'Member', '- Gunakan kacamata hitam saat bepergian di siang hari untuk melindungi mata dari sinar matahari.\r\n- Lakukan pemeriksaan kesehatan mata secara rutin.\r\n- Gunakan kacamata atau lensa kontak dengan ukuran tepat.\r\n- Berhenti Merokok\r\n- Istirahatkan mata secara berkala saat bekerja dengan menggunakan\r\nPerbanyak konsumsi buah-buahan dan sayuran, khususnya yang kaya vitamin A dan vitamin D\r\n- Lakukan pemeriksaan kesehatan secara rutin jika memiliki penyakit kronis, terutama diabetes dan hipertensi', 1639498648),
(21, 0, 'Mata Myopia', 'Member', '- Gunakan kacamata hitam saat bepergian di siang hari untuk melindungi mata dari sinar matahari.\r\n- Lakukan pemeriksaan kesehatan mata secara rutin.\r\n- Gunakan kacamata atau lensa kontak dengan ukuran tepat.\r\n- Berhenti Merokok\r\n- Istirahatkan mata secara berkala saat bekerja dengan menggunakan\r\nPerbanyak konsumsi buah-buahan dan sayuran, khususnya yang kaya vitamin A dan vitamin D\r\n- Lakukan pemeriksaan kesehatan secara rutin jika memiliki penyakit kronis, terutama diabetes dan hipertensi', 1639498878),
(22, 52, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639499322),
(23, 52, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639499351),
(24, 52, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639499386),
(25, 52, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639499415),
(26, 46, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639499461),
(27, 35, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639499638),
(28, 52, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639499662),
(29, 22, 'Mata Katarak', 'Member', '- Memeriksakan mata secara teratur pada dokter spesialis mata.\r\n- Melindungi mata dari benturan dan cahaya matahari yang terlalu lama, dengan menggunakan kacamata yang melindungi dari sinar ultraviolet baik UVA dan UVB.\r\n- Mempertahankan kadar gula darah agar tetap normal, pada pengidap diabetes.\r\n- Membatasi kebiasaan menyetir di malam hari.\r\n- Memperbaiki pencahayaan di rumah.\r\n- Menggunakan kaca pembesar saat membaca.          ', 1639499825),
(30, 22, 'Mata Katarak', 'Member', '- Memeriksakan mata secara teratur pada dokter spesialis mata.\r\n- Melindungi mata dari benturan dan cahaya matahari yang terlalu lama, dengan menggunakan kacamata yang melindungi dari sinar ultraviolet baik UVA dan UVB.\r\n- Mempertahankan kadar gula darah agar tetap normal, pada pengidap diabetes.\r\n- Membatasi kebiasaan menyetir di malam hari.\r\n- Memperbaiki pencahayaan di rumah.\r\n- Menggunakan kaca pembesar saat membaca.          ', 1639499866),
(31, 22, 'Mata Katarak', 'Member', '- Memeriksakan mata secara teratur pada dokter spesialis mata.\r\n- Melindungi mata dari benturan dan cahaya matahari yang terlalu lama, dengan menggunakan kacamata yang melindungi dari sinar ultraviolet baik UVA dan UVB.\r\n- Mempertahankan kadar gula darah agar tetap normal, pada pengidap diabetes.\r\n- Membatasi kebiasaan menyetir di malam hari.\r\n- Memperbaiki pencahayaan di rumah.\r\n- Menggunakan kaca pembesar saat membaca.          ', 1639499910),
(32, 46, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639499951),
(33, 41, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639500683),
(34, 41, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639841523),
(35, 100, 'Mata Presbiopi', 'Member', '- Menjalani pemeriksaan mata secara berkala.\r\n- Menggunakan pencahayaan yang bagus saat membaca\r\n- Mengenakan kacamata yang sesuai dengan kondisi penglihatan\r\n- Memakai kacamata pelindung ketika melakukan aktivitas yang berisiko menyebabkan cedera mata\r\n- Mengatasi penyakit yang dapat menyebabkan gangguan penglihatan, seperti diabetes dan tekanan darah tinggi\r\n- Mengonsumsi makanan sehat yang mengandung antioksidan, vitamin A, dan beta karoten', 1639842546),
(36, 100, 'Mata Presbiopi', 'Member', '- Menjalani pemeriksaan mata secara berkala.\r\n- Menggunakan pencahayaan yang bagus saat membaca\r\n- Mengenakan kacamata yang sesuai dengan kondisi penglihatan\r\n- Memakai kacamata pelindung ketika melakukan aktivitas yang berisiko menyebabkan cedera mata\r\n- Mengatasi penyakit yang dapat menyebabkan gangguan penglihatan, seperti diabetes dan tekanan darah tinggi\r\n- Mengonsumsi makanan sehat yang mengandung antioksidan, vitamin A, dan beta karoten', 1639842652),
(37, 100, 'Mata Presbiopi', 'Member', '- Menjalani pemeriksaan mata secara berkala.\r\n- Menggunakan pencahayaan yang bagus saat membaca\r\n- Mengenakan kacamata yang sesuai dengan kondisi penglihatan\r\n- Memakai kacamata pelindung ketika melakukan aktivitas yang berisiko menyebabkan cedera mata\r\n- Mengatasi penyakit yang dapat menyebabkan gangguan penglihatan, seperti diabetes dan tekanan darah tinggi\r\n- Mengonsumsi makanan sehat yang mengandung antioksidan, vitamin A, dan beta karoten', 1639842694),
(38, 100, 'Mata Presbiopi', 'Member', '- Menjalani pemeriksaan mata secara berkala.\r\n- Menggunakan pencahayaan yang bagus saat membaca\r\n- Mengenakan kacamata yang sesuai dengan kondisi penglihatan\r\n- Memakai kacamata pelindung ketika melakukan aktivitas yang berisiko menyebabkan cedera mata\r\n- Mengatasi penyakit yang dapat menyebabkan gangguan penglihatan, seperti diabetes dan tekanan darah tinggi\r\n- Mengonsumsi makanan sehat yang mengandung antioksidan, vitamin A, dan beta karoten', 1639842782),
(39, 75, 'Mata Presbiopi', 'Member', '- Menjalani pemeriksaan mata secara berkala.\r\n- Menggunakan pencahayaan yang bagus saat membaca\r\n- Mengenakan kacamata yang sesuai dengan kondisi penglihatan\r\n- Memakai kacamata pelindung ketika melakukan aktivitas yang berisiko menyebabkan cedera mata\r\n- Mengatasi penyakit yang dapat menyebabkan gangguan penglihatan, seperti diabetes dan tekanan darah tinggi\r\n- Mengonsumsi makanan sehat yang mengandung antioksidan, vitamin A, dan beta karoten', 1639842817),
(40, 57, 'Mata Myopia', 'Member', '- Gunakan kacamata hitam saat bepergian di siang hari untuk melindungi mata dari sinar matahari.\r\n- Lakukan pemeriksaan kesehatan mata secara rutin.\r\n- Gunakan kacamata atau lensa kontak dengan ukuran tepat.\r\n- Berhenti Merokok\r\n- Istirahatkan mata secara berkala saat bekerja dengan menggunakan\r\nPerbanyak konsumsi buah-buahan dan sayuran, khususnya yang kaya vitamin A dan vitamin D\r\n- Lakukan pemeriksaan kesehatan secara rutin jika memiliki penyakit kronis, terutama diabetes dan hipertensi', 1639843003),
(41, 60, 'Mata Presbiopi', 'Member', '- Menjalani pemeriksaan mata secara berkala.\r\n- Menggunakan pencahayaan yang bagus saat membaca\r\n- Mengenakan kacamata yang sesuai dengan kondisi penglihatan\r\n- Memakai kacamata pelindung ketika melakukan aktivitas yang berisiko menyebabkan cedera mata\r\n- Mengatasi penyakit yang dapat menyebabkan gangguan penglihatan, seperti diabetes dan tekanan darah tinggi\r\n- Mengonsumsi makanan sehat yang mengandung antioksidan, vitamin A, dan beta karoten', 1639843086),
(42, 36, 'Mata Myopia', 'Member', '- Gunakan kacamata hitam saat bepergian di siang hari untuk melindungi mata dari sinar matahari.\r\n- Lakukan pemeriksaan kesehatan mata secara rutin.\r\n- Gunakan kacamata atau lensa kontak dengan ukuran tepat.\r\n- Berhenti Merokok\r\n- Istirahatkan mata secara berkala saat bekerja dengan menggunakan\r\nPerbanyak konsumsi buah-buahan dan sayuran, khususnya yang kaya vitamin A dan vitamin D\r\n- Lakukan pemeriksaan kesehatan secara rutin jika memiliki penyakit kronis, terutama diabetes dan hipertensi', 1639843303),
(43, 53, 'Mata Hipermetropi', 'Member', '- Memeriksakan mata secara rutin.\r\n- Mengonsumsi makanan bernutrisi\r\n- Menggunakan penerangan yang baik.\r\n- Menggunakan kacamata hitam saat terpapar sinar matahari langsung.\r\n- Menggunakan kacamata yang tepat.\r\n- Memakai pelindung mata saat melakukan aktivitas tertentu seperti mengecat, memotong rumput, atau saat menggunakan produk kimia.\r\n- Mengendalikan kadar gula darah dan tekanan darah, bila menderita hipertensi atau diabetes.\r\n- Berhenti merokok', 1639843352),
(44, 57, 'Mata Hipermetropi', 'Member', '- Memeriksakan mata secara rutin.\r\n- Mengonsumsi makanan bernutrisi\r\n- Menggunakan penerangan yang baik.\r\n- Menggunakan kacamata hitam saat terpapar sinar matahari langsung.\r\n- Menggunakan kacamata yang tepat.\r\n- Memakai pelindung mata saat melakukan aktivitas tertentu seperti mengecat, memotong rumput, atau saat menggunakan produk kimia.\r\n- Mengendalikan kadar gula darah dan tekanan darah, bila menderita hipertensi atau diabetes.\r\n- Berhenti merokok', 1639843491),
(45, 50, 'Mata Hipermetropi', 'Member', '- Memeriksakan mata secara rutin.\r\n- Mengonsumsi makanan bernutrisi\r\n- Menggunakan penerangan yang baik.\r\n- Menggunakan kacamata hitam saat terpapar sinar matahari langsung.\r\n- Menggunakan kacamata yang tepat.\r\n- Memakai pelindung mata saat melakukan aktivitas tertentu seperti mengecat, memotong rumput, atau saat menggunakan produk kimia.\r\n- Mengendalikan kadar gula darah dan tekanan darah, bila menderita hipertensi atau diabetes.\r\n- Berhenti merokok', 1639843592),
(46, 72, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639843649),
(47, 90, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639843706),
(48, 92, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639843732),
(49, 95, 'Mata Astigmatisma', 'Member', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 1639843757),
(50, 93, 'Mata Katarak', 'Member', '- Memeriksakan mata secara teratur pada dokter spesialis mata.\r\n- Melindungi mata dari benturan dan cahaya matahari yang terlalu lama, dengan menggunakan kacamata yang melindungi dari sinar ultraviolet baik UVA dan UVB.\r\n- Mempertahankan kadar gula darah agar tetap normal, pada pengidap diabetes.\r\n- Membatasi kebiasaan menyetir di malam hari.\r\n- Memperbaiki pencahayaan di rumah.\r\n- Menggunakan kaca pembesar saat membaca.          ', 1639843897),
(51, 33, 'Mata Presbiopi', 'Member', '- Menjalani pemeriksaan mata secara berkala.\r\n- Menggunakan pencahayaan yang bagus saat membaca\r\n- Mengenakan kacamata yang sesuai dengan kondisi penglihatan\r\n- Memakai kacamata pelindung ketika melakukan aktivitas yang berisiko menyebabkan cedera mata\r\n- Mengatasi penyakit yang dapat menyebabkan gangguan penglihatan, seperti diabetes dan tekanan darah tinggi\r\n- Mengonsumsi makanan sehat yang mengandung antioksidan, vitamin A, dan beta karoten', 1639843918),
(52, 93, 'Mata Myopia', 'Member', '- Gunakan kacamata hitam saat bepergian di siang hari untuk melindungi mata dari sinar matahari.\r\n- Lakukan pemeriksaan kesehatan mata secara rutin.\r\n- Gunakan kacamata atau lensa kontak dengan ukuran tepat.\r\n- Berhenti Merokok\r\n- Istirahatkan mata secara berkala saat bekerja dengan menggunakan\r\nPerbanyak konsumsi buah-buahan dan sayuran, khususnya yang kaya vitamin A dan vitamin D\r\n- Lakukan pemeriksaan kesehatan secara rutin jika memiliki penyakit kronis, terutama diabetes dan hipertensi', 1639843956),
(53, 84, 'Mata Hipermetropi', 'Member', '- Memeriksakan mata secara rutin.\r\n- Mengonsumsi makanan bernutrisi\r\n- Menggunakan penerangan yang baik.\r\n- Menggunakan kacamata hitam saat terpapar sinar matahari langsung.\r\n- Menggunakan kacamata yang tepat.\r\n- Memakai pelindung mata saat melakukan aktivitas tertentu seperti mengecat, memotong rumput, atau saat menggunakan produk kimia.\r\n- Mengendalikan kadar gula darah dan tekanan darah, bila menderita hipertensi atau diabetes.\r\n- Berhenti merokok', 1639843998);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengetahuan`
--

CREATE TABLE `tbl_pengetahuan` (
  `id` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengetahuan`
--

INSERT INTO `tbl_pengetahuan` (`id`, `id_penyakit`, `id_gejala`, `probabilitas`) VALUES
(68, 39, 77, 1),
(69, 39, 78, 1),
(70, 39, 79, 0.5),
(71, 39, 83, 5),
(72, 39, 84, 5),
(73, 39, 85, 5),
(74, 40, 77, 1),
(75, 40, 78, 1),
(76, 40, 79, 1),
(77, 40, 80, 5),
(78, 40, 84, 6),
(79, 40, 87, 7),
(80, 41, 77, 1),
(81, 41, 78, 1),
(82, 41, 79, 1),
(83, 41, 81, 4),
(84, 41, 89, 4),
(85, 41, 90, 4),
(86, 42, 77, 1),
(87, 42, 78, 1),
(88, 42, 80, 3),
(89, 42, 81, 2),
(90, 42, 82, 3),
(91, 42, 91, 2),
(92, 43, 79, 1),
(93, 43, 82, 1),
(94, 43, 92, 4),
(95, 43, 93, 1),
(96, 43, 94, 5),
(97, 43, 95, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penyakit`
--

CREATE TABLE `tbl_penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `kode_penyakit` char(3) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `solusi` text NOT NULL,
  `probabilitas` float NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penyakit`
--

INSERT INTO `tbl_penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `solusi`, `probabilitas`, `gambar`) VALUES
(39, 'K01', 'Mata Myopia', '- Gunakan kacamata hitam saat bepergian di siang hari untuk melindungi mata dari sinar matahari.\r\n- Lakukan pemeriksaan kesehatan mata secara rutin.\r\n- Gunakan kacamata atau lensa kontak dengan ukuran tepat.\r\n- Berhenti Merokok\r\n- Istirahatkan mata secara berkala saat bekerja dengan menggunakan\r\nPerbanyak konsumsi buah-buahan dan sayuran, khususnya yang kaya vitamin A dan vitamin D\r\n- Lakukan pemeriksaan kesehatan secara rutin jika memiliki penyakit kronis, terutama diabetes dan hipertensi', 0.2, 'miopi.jpeg'),
(40, 'K02', 'Mata Hipermetropi', '- Memeriksakan mata secara rutin.\r\n- Mengonsumsi makanan bernutrisi\r\n- Menggunakan penerangan yang baik.\r\n- Menggunakan kacamata hitam saat terpapar sinar matahari langsung.\r\n- Menggunakan kacamata yang tepat.\r\n- Memakai pelindung mata saat melakukan aktivitas tertentu seperti mengecat, memotong rumput, atau saat menggunakan produk kimia.\r\n- Mengendalikan kadar gula darah dan tekanan darah, bila menderita hipertensi atau diabetes.\r\n- Berhenti merokok', 0.2, 'hipermetropi.jpeg'),
(41, 'K03', 'Mata Astigmatisma', '- Dokter umumnya akan menyarankan menggunakan kacamata. Ukuran kacamata atau lensa kontak tersebut ditentukan dari hasil uji refraksi.\r\n- Laser-assisted in situ keratomileusis (LASIK) adalah prosedur untuk membentuk ulang kornea dengan menggunakan laser.\r\n- Laser-assisted subepithelial keratectomy (LASEK) adalah mengendurkan lapisan luar kornea (epitelium) dengan alkohol khusus lalu membentuk ulang kornea menggunakan laser.\r\n- Photorefractive keratectomy (PRK) adalah epitelium akan diangkat dan dikembali dalam bentuk alami mengikuti kelengkungan kornea yang baru\r\n- Small-incision lenticule extraction (SMILE) adalah untuk memperbaiki bentuk kornea.', 0.1, 'Astigmatisma.jpeg'),
(42, 'K04', 'Mata Presbiopi', '- Menjalani pemeriksaan mata secara berkala.\r\n- Menggunakan pencahayaan yang bagus saat membaca\r\n- Mengenakan kacamata yang sesuai dengan kondisi penglihatan\r\n- Memakai kacamata pelindung ketika melakukan aktivitas yang berisiko menyebabkan cedera mata\r\n- Mengatasi penyakit yang dapat menyebabkan gangguan penglihatan, seperti diabetes dan tekanan darah tinggi\r\n- Mengonsumsi makanan sehat yang mengandung antioksidan, vitamin A, dan beta karoten', 0.3, 'presbyopia.jpeg'),
(43, 'K05', 'Mata Katarak', '- Memeriksakan mata secara teratur pada dokter spesialis mata.\r\n- Melindungi mata dari benturan dan cahaya matahari yang terlalu lama, dengan menggunakan kacamata yang melindungi dari sinar ultraviolet baik UVA dan UVB.\r\n- Mempertahankan kadar gula darah agar tetap normal, pada pengidap diabetes.\r\n- Membatasi kebiasaan menyetir di malam hari.\r\n- Memperbaiki pencahayaan di rumah.\r\n- Menggunakan kaca pembesar saat membaca.          ', 0.2, 'katarak.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `image`, `password`, `role_id`, `date_created`) VALUES
(6, 'Alfonso Aryando S', 'alfonso', 'face-1.jpg', '$2y$10$RvVYgo42792Sni6uvIKSieQ79XnIC72pIfdGZWYRigpRON.tGjcRC', 1, 1573977778),
(7, 'Member', 'Member', 'default.jpg', '$2y$10$gam52naGqUaHYPkQ49WDn.NtUmAUqZ5jdoMwKGAkw8DW8daCdLmoW', 2, 1575266061),
(10, 'Herdhani Eko', 'herdhani', 'default.jpg', '$2y$10$9ZOtFTPipOtsZDWatw4RvuqbTtWIHo/ZSotuGaAsfL4MDkz4u/8cm', 2, 1576725354);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_final`
--

CREATE TABLE `tmp_final` (
  `id` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `probabilitas` float NOT NULL,
  `hasil_probabilitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmp_final`
--

INSERT INTO `tmp_final` (`id`, `id_gejala`, `id_penyakit`, `probabilitas`, `hasil_probabilitas`) VALUES
(1, 77, 39, 1, 0.0120482),
(2, 77, 40, 1, 0.843373),
(3, 77, 41, 1, 0.0120482),
(4, 77, 42, 1, 0.108434),
(5, 78, 39, 1, 0.0120482),
(6, 78, 40, 1, 0.843373),
(7, 78, 41, 1, 0.0120482),
(8, 78, 42, 1, 0.108434),
(9, 79, 39, 0.5, 0.0120482),
(10, 79, 40, 1, 0.843373),
(11, 79, 41, 1, 0.0120482),
(12, 79, 43, 1, 0.0240964),
(13, 80, 40, 5, 0.843373),
(14, 80, 42, 3, 0.108434),
(15, 87, 40, 7, 0.843373);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `id_user` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmp_gejala`
--

INSERT INTO `tmp_gejala` (`id_user`, `id_gejala`) VALUES
(7, 77),
(7, 78),
(7, 79),
(7, 80),
(7, 86),
(7, 87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(8, 1, 3),
(9, 1, 4),
(10, 1, 5),
(11, 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `tbl_hasil_diagnosa`
--
ALTER TABLE `tbl_hasil_diagnosa`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_gejala` (`id_gejala`),
  ADD KEY `id_kerusakan` (`id_penyakit`);

--
-- Indeks untuk tabel `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tmp_final`
--
ALTER TABLE `tmp_final`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_gejala`
--
ALTER TABLE `tbl_gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `tbl_hasil_diagnosa`
--
ALTER TABLE `tbl_hasil_diagnosa`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `tbl_penyakit`
--
ALTER TABLE `tbl_penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tmp_final`
--
ALTER TABLE `tmp_final`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pengetahuan`
--
ALTER TABLE `tbl_pengetahuan`
  ADD CONSTRAINT `tbl_pengetahuan_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `tbl_penyakit` (`id_penyakit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
