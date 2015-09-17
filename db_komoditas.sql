-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2015 at 11:23 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_komoditas`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend_users`
--

CREATE TABLE IF NOT EXISTS `backend_users` (
  `id` int(11) unsigned NOT NULL,
  `role` enum('admin','staff') NOT NULL DEFAULT 'staff',
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `backend_users`
--

INSERT INTO `backend_users` (`id`, `role`, `username`, `password`, `full_name`, `active`, `created_at`) VALUES
(1, 'admin', 'admin', '$2y$10$5Ckk.kPJyZeJ368XvIfLC.Sns4MqOueMOASIqk0oGZB9zlQgIi34S', 'Administrator', 1, '2014-07-31 04:56:41'),
(2, 'staff', 'staff', '$2y$10$uvx0ySA7s2GZDsKcrlv40.Wev5q9xkjVg.pirwZOH9n2K4lPrIOvC', 'Staff', 1, '2014-08-11 10:10:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bahanpokok`
--

CREATE TABLE IF NOT EXISTS `tb_bahanpokok` (
  `id_bahanpokok` int(11) NOT NULL,
  `nama_bahan_pokok` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bahanpokok`
--

INSERT INTO `tb_bahanpokok` (`id_bahanpokok`, `nama_bahan_pokok`) VALUES
(1, 'Beras'),
(2, 'Daging'),
(3, 'Telur Ayam'),
(4, 'Cabai'),
(5, 'Bawang'),
(6, 'Gula');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE IF NOT EXISTS `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl_update` date NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `user`, `judul_berita`, `isi_berita`, `gambar`, `tgl_update`, `status`) VALUES
(3, 'Administrator', 'Lorem Ipsum dolor sit amet', '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus libero libero, imperdiet id aliquet a, condimentum faucibus ante. Suspendisse vestibulum porta lorem, et efficitur mi convallis a. Nunc luctus eros ut purus iaculis, vel tincidunt quam facilisis. Praesent elementum, odio quis aliquet cursus, ipsum ipsum dictum nunc, vitae tincidunt nisi tortor quis mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum suscipit mollis mauris. Morbi vestibulum vitae elit quis varius. Etiam varius quam a enim semper pretium. Donec condimentum commodo ipsum quis condimentum. Vivamus blandit mattis posuere. Cras hendrerit nibh a consectetur aliquet. Nunc condimentum odio interdum lacus vehicula, sed ullamcorper lacus mollis.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Aenean ornare nisl in luctus semper. Vestibulum congue at ex id iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ullamcorper lacinia neque ut tempus. Nulla facilisi. Quisque id bibendum arcu. Sed a nunc vestibulum, gravida diam at, auctor tellus. Fusce quis quam a mauris porta tincidunt a ut neque. Donec maximus tortor eget ex eleifend, ut laoreet metus vestibulum. In hac habitasse platea dictumst.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Maecenas dapibus commodo magna, ut ultricies nisi tincidunt eget. Praesent vel consectetur ligula. Morbi condimentum massa nec sodales fringilla. Suspendisse nisl leo, tincidunt vel augue auctor, semper auctor metus. Maecenas sit amet ornare nibh. Praesent a malesuada urna. Curabitur cursus nisl ut arcu pulvinar aliquet. Mauris sodales quis lacus eget luctus. Sed luctus euismod gravida. In sed suscipit mauris. Integer feugiat tortor libero, ac facilisis massa pretium sed. Etiam pharetra, dui vel porttitor ullamcorper, dolor nibh commodo mauris, id faucibus tellus leo sit amet urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eleifend lacinia blandit. Vivamus facilisis in lacus tincidunt blandit.</div>\r\n', '8cfb0-filkom.png', '2015-08-20', 1),
(4, 'Administrator', 'Berita 2', '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus libero libero, imperdiet id aliquet a, condimentum faucibus ante. Suspendisse vestibulum porta lorem, et efficitur mi convallis a. Nunc luctus eros ut purus iaculis, vel tincidunt quam facilisis. Praesent elementum, odio quis aliquet cursus, ipsum ipsum dictum nunc, vitae tincidunt nisi tortor quis mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum suscipit mollis mauris. Morbi vestibulum vitae elit quis varius. Etiam varius quam a enim semper pretium. Donec condimentum commodo ipsum quis condimentum. Vivamus blandit mattis posuere. Cras hendrerit nibh a consectetur aliquet. Nunc condimentum odio interdum lacus vehicula, sed ullamcorper lacus mollis.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Aenean ornare nisl in luctus semper. Vestibulum congue at ex id iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ullamcorper lacinia neque ut tempus. Nulla facilisi. Quisque id bibendum arcu. Sed a nunc vestibulum, gravida diam at, auctor tellus. Fusce quis quam a mauris porta tincidunt a ut neque. Donec maximus tortor eget ex eleifend, ut laoreet metus vestibulum. In hac habitasse platea dictumst.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Maecenas dapibus commodo magna, ut ultricies nisi tincidunt eget. Praesent vel consectetur ligula. Morbi condimentum massa nec sodales fringilla. Suspendisse nisl leo, tincidunt vel augue auctor, semper auctor metus. Maecenas sit amet ornare nibh. Praesent a malesuada urna. Curabitur cursus nisl ut arcu pulvinar aliquet. Mauris sodales quis lacus eget luctus. Sed luctus euismod gravida. In sed suscipit mauris. Integer feugiat tortor libero, ac facilisis massa pretium sed. Etiam pharetra, dui vel porttitor ullamcorper, dolor nibh commodo mauris, id faucibus tellus leo sit amet urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eleifend lacinia blandit. Vivamus facilisis in lacus tincidunt blandit.</div>\r\n', '01e3a-flat-design-concept-internet-and-e-learning-icons-vectors590.jpg', '2015-08-20', 1),
(5, 'Administrator', 'Berita 3', '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus libero libero, imperdiet id aliquet a, condimentum faucibus ante. Suspendisse vestibulum porta lorem, et efficitur mi convallis a. Nunc luctus eros ut purus iaculis, vel tincidunt quam facilisis. Praesent elementum, odio quis aliquet cursus, ipsum ipsum dictum nunc, vitae tincidunt nisi tortor quis mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum suscipit mollis mauris. Morbi vestibulum vitae elit quis varius. Etiam varius quam a enim semper pretium. Donec condimentum commodo ipsum quis condimentum. Vivamus blandit mattis posuere. Cras hendrerit nibh a consectetur aliquet. Nunc condimentum odio interdum lacus vehicula, sed ullamcorper lacus mollis.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Aenean ornare nisl in luctus semper. Vestibulum congue at ex id iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ullamcorper lacinia neque ut tempus. Nulla facilisi. Quisque id bibendum arcu. Sed a nunc vestibulum, gravida diam at, auctor tellus. Fusce quis quam a mauris porta tincidunt a ut neque. Donec maximus tortor eget ex eleifend, ut laoreet metus vestibulum. In hac habitasse platea dictumst.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Maecenas dapibus commodo magna, ut ultricies nisi tincidunt eget. Praesent vel consectetur ligula. Morbi condimentum massa nec sodales fringilla. Suspendisse nisl leo, tincidunt vel augue auctor, semper auctor metus. Maecenas sit amet ornare nibh. Praesent a malesuada urna. Curabitur cursus nisl ut arcu pulvinar aliquet. Mauris sodales quis lacus eget luctus. Sed luctus euismod gravida. In sed suscipit mauris. Integer feugiat tortor libero, ac facilisis massa pretium sed. Etiam pharetra, dui vel porttitor ullamcorper, dolor nibh commodo mauris, id faucibus tellus leo sit amet urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eleifend lacinia blandit. Vivamus facilisis in lacus tincidunt blandit.</div>\r\n', '6774a-manfaat-bawang-putih.jpg', '2015-09-16', 1),
(6, 'Administrator', 'Berita 4', '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus libero libero, imperdiet id aliquet a, condimentum faucibus ante. Suspendisse vestibulum porta lorem, et efficitur mi convallis a. Nunc luctus eros ut purus iaculis, vel tincidunt quam facilisis. Praesent elementum, odio quis aliquet cursus, ipsum ipsum dictum nunc, vitae tincidunt nisi tortor quis mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum suscipit mollis mauris. Morbi vestibulum vitae elit quis varius. Etiam varius quam a enim semper pretium. Donec condimentum commodo ipsum quis condimentum. Vivamus blandit mattis posuere. Cras hendrerit nibh a consectetur aliquet. Nunc condimentum odio interdum lacus vehicula, sed ullamcorper lacus mollis.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Aenean ornare nisl in luctus semper. Vestibulum congue at ex id iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ullamcorper lacinia neque ut tempus. Nulla facilisi. Quisque id bibendum arcu. Sed a nunc vestibulum, gravida diam at, auctor tellus. Fusce quis quam a mauris porta tincidunt a ut neque. Donec maximus tortor eget ex eleifend, ut laoreet metus vestibulum. In hac habitasse platea dictumst.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Maecenas dapibus commodo magna, ut ultricies nisi tincidunt eget. Praesent vel consectetur ligula. Morbi condimentum massa nec sodales fringilla. Suspendisse nisl leo, tincidunt vel augue auctor, semper auctor metus. Maecenas sit amet ornare nibh. Praesent a malesuada urna. Curabitur cursus nisl ut arcu pulvinar aliquet. Mauris sodales quis lacus eget luctus. Sed luctus euismod gravida. In sed suscipit mauris. Integer feugiat tortor libero, ac facilisis massa pretium sed. Etiam pharetra, dui vel porttitor ullamcorper, dolor nibh commodo mauris, id faucibus tellus leo sit amet urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eleifend lacinia blandit. Vivamus facilisis in lacus tincidunt blandit.</div>\r\n', '79ddf-bawang-merah.jpg', '2015-09-16', 1),
(7, 'Administrator', 'Berita 5', '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus libero libero, imperdiet id aliquet a, condimentum faucibus ante. Suspendisse vestibulum porta lorem, et efficitur mi convallis a. Nunc luctus eros ut purus iaculis, vel tincidunt quam facilisis. Praesent elementum, odio quis aliquet cursus, ipsum ipsum dictum nunc, vitae tincidunt nisi tortor quis mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum suscipit mollis mauris. Morbi vestibulum vitae elit quis varius. Etiam varius quam a enim semper pretium. Donec condimentum commodo ipsum quis condimentum. Vivamus blandit mattis posuere. Cras hendrerit nibh a consectetur aliquet. Nunc condimentum odio interdum lacus vehicula, sed ullamcorper lacus mollis.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Aenean ornare nisl in luctus semper. Vestibulum congue at ex id iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ullamcorper lacinia neque ut tempus. Nulla facilisi. Quisque id bibendum arcu. Sed a nunc vestibulum, gravida diam at, auctor tellus. Fusce quis quam a mauris porta tincidunt a ut neque. Donec maximus tortor eget ex eleifend, ut laoreet metus vestibulum. In hac habitasse platea dictumst.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Maecenas dapibus commodo magna, ut ultricies nisi tincidunt eget. Praesent vel consectetur ligula. Morbi condimentum massa nec sodales fringilla. Suspendisse nisl leo, tincidunt vel augue auctor, semper auctor metus. Maecenas sit amet ornare nibh. Praesent a malesuada urna. Curabitur cursus nisl ut arcu pulvinar aliquet. Mauris sodales quis lacus eget luctus. Sed luctus euismod gravida. In sed suscipit mauris. Integer feugiat tortor libero, ac facilisis massa pretium sed. Etiam pharetra, dui vel porttitor ullamcorper, dolor nibh commodo mauris, id faucibus tellus leo sit amet urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eleifend lacinia blandit. Vivamus facilisis in lacus tincidunt blandit.</div>\r\n', '54ce4-telurayamkampung_cntt.jpg', '2015-09-16', 1),
(8, 'Administrator', 'Berita 6', '<div>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus libero libero, imperdiet id aliquet a, condimentum faucibus ante. Suspendisse vestibulum porta lorem, et efficitur mi convallis a. Nunc luctus eros ut purus iaculis, vel tincidunt quam facilisis. Praesent elementum, odio quis aliquet cursus, ipsum ipsum dictum nunc, vitae tincidunt nisi tortor quis mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum suscipit mollis mauris. Morbi vestibulum vitae elit quis varius. Etiam varius quam a enim semper pretium. Donec condimentum commodo ipsum quis condimentum. Vivamus blandit mattis posuere. Cras hendrerit nibh a consectetur aliquet. Nunc condimentum odio interdum lacus vehicula, sed ullamcorper lacus mollis.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Aenean ornare nisl in luctus semper. Vestibulum congue at ex id iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut ullamcorper lacinia neque ut tempus. Nulla facilisi. Quisque id bibendum arcu. Sed a nunc vestibulum, gravida diam at, auctor tellus. Fusce quis quam a mauris porta tincidunt a ut neque. Donec maximus tortor eget ex eleifend, ut laoreet metus vestibulum. In hac habitasse platea dictumst.</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Maecenas dapibus commodo magna, ut ultricies nisi tincidunt eget. Praesent vel consectetur ligula. Morbi condimentum massa nec sodales fringilla. Suspendisse nisl leo, tincidunt vel augue auctor, semper auctor metus. Maecenas sit amet ornare nibh. Praesent a malesuada urna. Curabitur cursus nisl ut arcu pulvinar aliquet. Mauris sodales quis lacus eget luctus. Sed luctus euismod gravida. In sed suscipit mauris. Integer feugiat tortor libero, ac facilisis massa pretium sed. Etiam pharetra, dui vel porttitor ullamcorper, dolor nibh commodo mauris, id faucibus tellus leo sit amet urna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eleifend lacinia blandit. Vivamus facilisis in lacus tincidunt blandit.</div>\r\n', '3387a-8844_cabe.jpg', '2015-09-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hargakomoditas`
--

CREATE TABLE IF NOT EXISTS `tb_hargakomoditas` (
  `id_komoditas` int(11) NOT NULL,
  `id_bahanpokok` int(11) NOT NULL,
  `id_jenisbahanpokok` int(11) NOT NULL,
  `id_pasar` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `tgl_update` date NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hargakomoditas`
--

INSERT INTO `tb_hargakomoditas` (`id_komoditas`, `id_bahanpokok`, `id_jenisbahanpokok`, `id_pasar`, `satuan`, `tgl_update`, `harga`) VALUES
(25, 5, 12, 2, 'Kg', '2015-09-09', 23000),
(26, 5, 12, 1, 'Kg', '2015-09-09', 40000),
(27, 5, 11, 2, 'Kg', '2015-09-09', 54000),
(28, 5, 11, 1, 'Kg', '2015-09-09', 56000),
(29, 1, 7, 2, 'Kg', '2015-09-09', 23000),
(30, 1, 7, 1, 'Kg', '2015-09-09', 34000),
(31, 1, 1, 2, 'Kg', '2015-09-09', 52000),
(32, 1, 1, 1, 'Kg', '2015-09-09', 23400),
(33, 1, 2, 2, 'Kg', '2015-09-09', 15000),
(34, 1, 2, 1, 'Kg', '2015-09-09', 23000),
(35, 4, 13, 2, 'Kg', '2015-09-09', 16000),
(36, 4, 13, 1, 'Kg', '2015-09-09', 14000),
(37, 4, 8, 2, 'Kg', '2015-09-09', 23100),
(38, 4, 8, 1, 'Kg', '2015-09-09', 22500),
(39, 2, 4, 2, 'Kg', '2015-09-09', 75000),
(40, 2, 4, 1, 'Kg', '2015-09-09', 54000),
(41, 2, 3, 2, 'Kg', '2015-09-09', 72000),
(42, 2, 3, 1, 'Kg', '2015-09-09', 82000),
(43, 6, 10, 2, 'Kg', '2015-09-09', 20000),
(44, 6, 10, 1, 'Kg', '2015-09-09', 23000),
(45, 6, 9, 2, 'Kg', '2015-09-09', 32000),
(46, 6, 9, 1, 'Kg', '2015-09-09', 54200),
(47, 3, 6, 2, 'Kg', '2015-09-09', 31000),
(48, 3, 6, 1, 'Kg', '2015-09-09', 32200),
(49, 3, 5, 2, 'Kg', '2015-09-09', 24000),
(50, 3, 5, 1, 'Kg', '2015-09-09', 32100),
(51, 5, 12, 2, 'Kg', '2015-09-10', 23000),
(52, 5, 12, 1, 'Kg', '2015-09-10', 40000),
(53, 5, 11, 2, 'Kg', '2015-09-10', 10000),
(54, 5, 11, 1, 'Kg', '2015-09-10', 3000),
(55, 1, 7, 2, 'Kg', '2015-09-10', 120000),
(56, 1, 7, 1, 'Kg', '2015-09-10', 220000),
(57, 1, 1, 2, 'Kg', '2015-09-10', 210000),
(58, 1, 1, 1, 'Kg', '2015-09-10', 32100),
(59, 1, 2, 2, 'Kg', '2015-09-10', 250000),
(60, 1, 2, 1, 'Kg', '2015-09-10', 150000),
(61, 4, 13, 2, 'Kg', '2015-09-10', 11000),
(62, 4, 13, 1, 'Kg', '2015-09-10', 12000),
(63, 4, 8, 2, 'Kg', '2015-09-10', 15000),
(64, 4, 8, 1, 'Kg', '2015-09-10', 5000),
(65, 2, 4, 2, 'Kg', '2015-09-10', 154000),
(66, 2, 4, 1, 'Kg', '2015-09-10', 130000),
(67, 2, 3, 2, 'Kg', '2015-09-10', 125000),
(68, 2, 3, 1, 'Kg', '2015-09-10', 142000),
(69, 6, 10, 2, 'Kg', '2015-09-10', 25000),
(70, 6, 10, 1, 'Kg', '2015-09-10', 5300),
(71, 6, 9, 2, 'Kg', '2015-09-10', 5600),
(72, 6, 9, 1, 'Kg', '2015-09-10', 6400),
(73, 3, 6, 2, 'Kg', '2015-09-10', 20000),
(74, 3, 6, 1, 'Kg', '2015-09-10', 19500),
(75, 3, 5, 2, 'Kg', '2015-09-10', 17500),
(76, 3, 5, 1, 'Kg', '2015-09-10', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenisbahanpokok`
--

CREATE TABLE IF NOT EXISTS `tb_jenisbahanpokok` (
  `id_jenisbahanpokok` int(11) NOT NULL,
  `nama_jenis_bahan_pokok` varchar(100) NOT NULL,
  `foto_jenis_bahan_pokok` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenisbahanpokok`
--

INSERT INTO `tb_jenisbahanpokok` (`id_jenisbahanpokok`, `nama_jenis_bahan_pokok`, `foto_jenis_bahan_pokok`) VALUES
(1, 'Beras Merah', 'ba8dd-beras-merah.jpg'),
(2, 'Beras Putih', 'c7cf9-putih-beras_zps2dfdcce7.jpg'),
(3, 'Daging Sapi Murni', '12efb-daging.jpg'),
(4, 'Daging Ayam Broiler', '016bf-7136_daging_ayam.jpg'),
(5, 'Telur Ayam Ras', '3da7c-telur.jpg'),
(6, 'Telur Ayam Kampung', '1e17f-telurayamkampung_cntt.jpg'),
(7, 'Beras Bengawan', 'd1ad9-09122012005.jpg'),
(8, 'Cabai Merah', '0a2ee-8844_cabe.jpg'),
(9, 'Gula Pasir Import', '8791a-ilustrasi-gula-pasir_09082012101104.jpg'),
(10, 'Gula Pasir Dalam Negeri', 'd29c9-7_zpsis5axhmx.jpg'),
(11, 'Bawang Putih', '6fe50-manfaat-bawang-putih.jpg'),
(12, 'Bawang Merah', 'aa95a-bawang-merah.jpg'),
(13, 'Cabai Hijau', '3c92e-cabe-hijau1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasar`
--

CREATE TABLE IF NOT EXISTS `tb_pasar` (
  `id_pasar` int(11) NOT NULL,
  `nama_pasar` varchar(100) NOT NULL,
  `alamat_pasar` varchar(200) NOT NULL,
  `biografi_pasar` text NOT NULL,
  `foto_pasar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasar`
--

INSERT INTO `tb_pasar` (`id_pasar`, `nama_pasar`, `alamat_pasar`, `biografi_pasar`, `foto_pasar`) VALUES
(1, 'Pasar Dinoyo', 'Jalan MT Haryono', '<p>\r\n	Biografi</p>\r\n', '2910c-psr_590x300.jpg'),
(2, 'Pasar Blimbing', 'Jalan Blimbing', '<p>\r\n	Karena banyak pohon blimbingnya</p>\r\n', 'cce8c-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `role` enum('member') NOT NULL DEFAULT 'member',
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `activation_code` varchar(32) DEFAULT NULL,
  `forgot_password_code` varchar(32) DEFAULT NULL,
  `forgot_password_time` timestamp NULL DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backend_users`
--
ALTER TABLE `backend_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bahanpokok`
--
ALTER TABLE `tb_bahanpokok`
  ADD PRIMARY KEY (`id_bahanpokok`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_hargakomoditas`
--
ALTER TABLE `tb_hargakomoditas`
  ADD PRIMARY KEY (`id_komoditas`);

--
-- Indexes for table `tb_jenisbahanpokok`
--
ALTER TABLE `tb_jenisbahanpokok`
  ADD PRIMARY KEY (`id_jenisbahanpokok`);

--
-- Indexes for table `tb_pasar`
--
ALTER TABLE `tb_pasar`
  ADD PRIMARY KEY (`id_pasar`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backend_users`
--
ALTER TABLE `backend_users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_bahanpokok`
--
ALTER TABLE `tb_bahanpokok`
  MODIFY `id_bahanpokok` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_hargakomoditas`
--
ALTER TABLE `tb_hargakomoditas`
  MODIFY `id_komoditas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `tb_jenisbahanpokok`
--
ALTER TABLE `tb_jenisbahanpokok`
  MODIFY `id_jenisbahanpokok` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_pasar`
--
ALTER TABLE `tb_pasar`
  MODIFY `id_pasar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
