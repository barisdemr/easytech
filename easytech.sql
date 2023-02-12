-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 12 Şub 2023, 19:42:28
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `barisdemr_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `easytech`
--

DROP TABLE IF EXISTS `easytech`;
CREATE TABLE IF NOT EXISTS `easytech` (
  `id` int NOT NULL AUTO_INCREMENT,
  `urun_adi` text COLLATE utf16_turkish_ci NOT NULL,
  `urun_aciklamasi` text COLLATE utf16_turkish_ci NOT NULL,
  `urun_resimi` text COLLATE utf16_turkish_ci NOT NULL,
  `urun_link` text COLLATE utf16_turkish_ci NOT NULL,
  `urun_Aktifligi` text CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `urun_fiyat` text COLLATE utf16_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `easytech`
--

INSERT INTO `easytech` (`id`, `urun_adi`, `urun_aciklamasi`, `urun_resimi`, `urun_link`, `urun_Aktifligi`, `urun_fiyat`) VALUES
(1, 'MagSafe Özellikli Kılıf', 'CİHAZ MODELİNİZİ SİPARİŞ NOTUNDA BELİRTİN!\r\nMagSafe Özellikli Kılıf\r\nIphone 14 Pro Max/14 Pro/14/14plus\r\nIphone 13 Pro Max/13 Pro/13/13 Mini\r\nIphone 12 Pro Max/12 Pro/12/12 Mini\r\nIphone 11', 'https://dmih5ui1qqea9.cloudfront.net/pictures_large/EasyTech_af99a3bb8da2277b66ba0296cca5e282.jpg', '15604122', '1', '149,90'),
(2, 'MagSafe özellikli Deri Cüzdan - Gece Yarısı', 'MagSafe özellikli Deri Cüzdan - Gece Yarısı', 'https://dmih5ui1qqea9.cloudfront.net/pictures_large/EasyTech_e3d58d37127a32181d8a64c0a17b27a1.png', '15604277', '1', '299,90'),
(3, 'AİRPODS 3.NESİL', 'AİRPODS 3.NESİL', 'https://dmih5ui1qqea9.cloudfront.net/pictures_large/EasyTech_d9be173d0f643c983854b49f757d161d.jpeg', '15745350', '1', '349,90'),
(4, 'PORSCHE GT3 MAX', 'PORSCHE GT3 MAX', 'https://dmih5ui1qqea9.cloudfront.net/pictures_large/EasyTech_94612e64078db2382ccab71080f76d6e.jpeg', '15745371', '1', '999,99'),
(5, 'SEVGİLİLER GÜNÜNE ÖZEL WATCH 8 ULTRA+AIRPODS PRO', 'Sevgililer gününe özel fiyatlarla Watch 8 Ultra+AirPods Pro', 'https://dmih5ui1qqea9.cloudfront.net/pictures_large/EasyTech_d8863c604082ad053dfabd76b97de017.jpeg', '15649151', '1', '1.099,90'),
(6, 'SEVGİLİLER GÜNÜNE ÖZEL 2 ADET WATCH 8 ULTRA', 'Sevgililer gününe özel fiyatlarla Watch 8 Ultra', 'https://dmih5ui1qqea9.cloudfront.net/pictures_large/EasyTech_ed33271f594f03470fe1b07ec90c7ff6.jpeg', '15648642', '1', '1.349,90'),
(7, 'WATCH 8 ULTRA 49mm', 'Sevgililer gününe özel WATCH 8 ULTRA 49mm', 'https://dmih5ui1qqea9.cloudfront.net/pictures_large/EasyTech_c279d4660b9d61043b3fb06dc6af35b6.jpeg', '15746634', '1', '749,90 TL'),
(8, 'WATCH 8 ULTRA 45mm', 'Sevgililer gününe özel Watch 8 Ultra 45mm Sadece 699.90₺', 'https://dmih5ui1qqea9.cloudfront.net/pictures_large/EasyTech_061080f5c43b6b5fc371737282853779.jpeg', '15746663', '1', '699,90');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
