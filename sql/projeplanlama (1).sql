-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Haz 2021, 13:31:50
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `projeplanlama`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about_page`
--

CREATE TABLE `about_page` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `spotify` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `about_page`
--

INSERT INTO `about_page` (`about_id`, `about_title`, `content`, `instagram`, `twitter`, `spotify`) VALUES
(1, 'HAKKIMDA', 'İnönü Üniversitesi Bilgisayar Mühendisliği Bölümü 1. Sınıf öğrencisiyim.    ', 'nilsukamislii', 'yilcuu', '31iong6g37mnz3pqwokibidytis4?si=dfac2b24faac4d6c');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact_info`
--

CREATE TABLE `contact_info` (
  `contact_id` int(11) NOT NULL,
  `contact_title` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gsm` int(11) NOT NULL,
  `province` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `contact_info`
--

INSERT INTO `contact_info` (`contact_id`, `contact_title`, `email`, `gsm`, `province`) VALUES
(1, 'İLETİŞİM', 'niloyasli123@gmail.comm', 2147483647, 'Ankara');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_info`
--

CREATE TABLE `personal_info` (
  `personal_id` int(11) NOT NULL,
  `personal_title` varchar(50) NOT NULL,
  `personal_name` varchar(50) NOT NULL,
  `personal_surname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `cv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `personal_info`
--

INSERT INTO `personal_info` (`personal_id`, `personal_title`, `personal_name`, `personal_surname`, `age`, `cv`) VALUES
(1, 'KİŞİSEL BİLGİLER', 'Nilsu', 'Kamişli', 22, 'imal usulleri.pdf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings_page`
--

CREATE TABLE `settings_page` (
  `settings_id` int(11) NOT NULL,
  `first_menutitle` varchar(50) NOT NULL,
  `second_menutitle` varchar(50) NOT NULL,
  `third_menutitle` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subtitle` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `settings_page`
--

INSERT INTO `settings_page` (`settings_id`, `first_menutitle`, `second_menutitle`, `third_menutitle`, `title`, `subtitle`, `picture`) VALUES
(1, 'HAKKIMDA', 'İLETİŞİM', 'CV', 'NİLSU KAMİŞLİ', 'BİLGİSAYAR MÜHENDİSLİĞİ ÖĞRENCİSİ', 'imal usulleri.pdf');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `skills_page`
--

CREATE TABLE `skills_page` (
  `skills_id` int(11) NOT NULL,
  `skills_title` varchar(50) NOT NULL,
  `first_skill` varchar(50) NOT NULL,
  `second_skill` varchar(50) NOT NULL,
  `third_skill` varchar(50) NOT NULL,
  `first_counter` varchar(10) NOT NULL,
  `second_counter` varchar(10) NOT NULL,
  `third_counter` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `skills_page`
--

INSERT INTO `skills_page` (`skills_id`, `skills_title`, `first_skill`, `second_skill`, `third_skill`, `first_counter`, `second_counter`, `third_counter`) VALUES
(1, 'YETENEKLERİM', 'C#', 'JAVA SCRİPT ', 'HTML5', '60', '80', '90');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'admin', 'ab@c.com', '93279e3308bdbbeed946fc965017f67a');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about_page`
--
ALTER TABLE `about_page`
  ADD PRIMARY KEY (`about_id`);

--
-- Tablo için indeksler `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`contact_id`);

--
-- Tablo için indeksler `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`personal_id`);

--
-- Tablo için indeksler `settings_page`
--
ALTER TABLE `settings_page`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `skills_page`
--
ALTER TABLE `skills_page`
  ADD PRIMARY KEY (`skills_id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about_page`
--
ALTER TABLE `about_page`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `settings_page`
--
ALTER TABLE `settings_page`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `skills_page`
--
ALTER TABLE `skills_page`
  MODIFY `skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
