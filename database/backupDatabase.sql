-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 30 Jan 2018 pada 08.10
-- Versi Server: 5.5.58-0ubuntu0.14.04.1
-- Versi PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `karima`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `gender`, `no_telp`) VALUES
(6, 'Uciha Mahmud', 'Laki-laki', '2147483647');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakturis`
--

CREATE TABLE IF NOT EXISTS `fakturis` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `fakturis`
--

INSERT INTO `fakturis` (`id`, `nama`, `gender`, `no_telp`) VALUES
(3, 'Uciha Hanafi', '', '2147483647');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logistik`
--

CREATE TABLE IF NOT EXISTS `logistik` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_sika` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logistik`
--

INSERT INTO `logistik` (`id`, `nama`, `no_sika`, `gender`, `no_telp`) VALUES
(0, 'Imam Hanafi', 'ss4545', 'Perempuan', '2147483647');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugasPengiriman`
--

CREATE TABLE IF NOT EXISTS `petugasPengiriman` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `petugasPengiriman`
--

INSERT INTO `petugasPengiriman` (`id`, `nama`, `gender`, `no_telp`) VALUES
(4, 'Davis', 'Perempuan', '2147483647'),
(12, 'Uciha Mahmud', 'Perempuan', '2147483647');

-- --------------------------------------------------------

--
-- Struktur dari tabel `salesman`
--

CREATE TABLE IF NOT EXISTS `salesman` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `no_kendaraan` varchar(15) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `salesman`
--

INSERT INTO `salesman` (`id`, `nama`, `area`, `no_kendaraan`, `no_telp`, `gender`) VALUES
(5, 'Imam Hanafi', 'Bogor', 'B 1212 BK', '2147483647', 'Laki-laki');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
