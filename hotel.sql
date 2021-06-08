-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 08 Haz 2021, 16:30:19
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hotel`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hotel`
--

CREATE TABLE `hotel` (
  `HotelID` int(11) NOT NULL,
  `Address` varchar(60) DEFAULT NULL,
  `Stars` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hotel`
--

INSERT INTO `hotel` (`HotelID`, `Address`, `Stars`) VALUES
(1, 'Tahılpazarı mh, Şarampol Cd. No:38/105, 07040', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

CREATE TABLE `personel` (
  `PersonelID` int(11) NOT NULL,
  `PersonelName` varchar(30) DEFAULT NULL,
  `PersonelLastName` varchar(30) DEFAULT NULL,
  `PersonelEmail` varchar(30) DEFAULT NULL,
  `PersonelUsername` varchar(30) DEFAULT NULL,
  `PersonelPassword` varchar(30) DEFAULT NULL,
  `PersonelPic` varchar(60) DEFAULT NULL,
  `HotelID2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`PersonelID`, `PersonelName`, `PersonelLastName`, `PersonelEmail`, `PersonelUsername`, `PersonelPassword`, `PersonelPic`, `HotelID2`) VALUES
(0, 'Burak', 'Keskin', 'keskinburak@gmail.com', 'keskin55', 'Keskin06', NULL, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `position`
--

CREATE TABLE `position` (
  `PositionID` int(11) NOT NULL,
  `PositionName` varchar(60) NOT NULL,
  `PersonelID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reservation`
--

CREATE TABLE `reservation` (
  `ReservationID` int(11) NOT NULL,
  `Adults` int(11) DEFAULT NULL,
  `Children` int(11) DEFAULT NULL,
  `CheckIN` date DEFAULT NULL,
  `CheckOut` date DEFAULT NULL,
  `RoomID1` int(11) DEFAULT NULL,
  `ReservationTypeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `reservation`
--

INSERT INTO `reservation` (`ReservationID`, `Adults`, `Children`, `CheckIN`, `CheckOut`, `RoomID1`, `ReservationTypeID`) VALUES
(9, 1, 2, '2021-06-16', '2021-06-24', 3, 3),
(10, 1, 2, '2021-06-22', '2021-06-27', 3, 3),
(11, 3, 3, '2021-06-17', '2021-06-30', 3, 3),
(12, 1, 1, '2021-06-22', '2021-06-30', 1, 1),
(13, 2, 2, '2021-06-23', '2021-07-08', 2, 2),
(14, 1, 1, '0000-00-00', '0000-00-00', 1, 1),
(15, 3, 2, '2021-06-29', '2021-07-10', 2, 2),
(16, 1, 3, '2021-06-23', '2021-07-08', 3, 3),
(17, 2, 2, '2021-06-09', '2021-06-12', 2, 2),
(18, 1, 3, '2021-06-16', '2021-07-09', 1, 1),
(19, 1, 1, '2021-06-22', '2021-07-09', 1, 1),
(20, 2, 4, '2021-06-22', '2021-06-30', 3, 3),
(21, 1, 1, '0000-00-00', '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reservationtype`
--

CREATE TABLE `reservationtype` (
  `ReservationTypeID` int(11) NOT NULL,
  `ReservationName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `reservationtype`
--

INSERT INTO `reservationtype` (`ReservationTypeID`, `ReservationName`) VALUES
(1, 'Standart'),
(2, 'Mid'),
(3, 'Suit');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `room`
--

CREATE TABLE `room` (
  `RoomID` int(11) NOT NULL,
  `RoomType` int(11) DEFAULT NULL,
  `RoomPrice` int(11) DEFAULT NULL,
  `UserID1` int(11) DEFAULT NULL,
  `HotelID1` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `room`
--

INSERT INTO `room` (`RoomID`, `RoomType`, `RoomPrice`, `UserID1`, `HotelID1`) VALUES
(1, 1, 40, 1, 1),
(2, 2, 60, 1, 1),
(3, 3, 100, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roomtype`
--

CREATE TABLE `roomtype` (
  `RoomTypeID` int(11) NOT NULL,
  `RoomTypeName` varchar(30) DEFAULT NULL,
  `RoomID` int(11) DEFAULT NULL,
  `Quota` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `roomtype`
--

INSERT INTO `roomtype` (`RoomTypeID`, `RoomTypeName`, `RoomID`, `Quota`) VALUES
(1, 'Standart', 1, 28),
(2, 'Mid-Tier', 2, 30),
(3, 'Suit', 3, 30);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `support`
--

CREATE TABLE `support` (
  `SupportID` int(11) NOT NULL,
  `SupportMessage` text DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `support`
--

INSERT INTO `support` (`SupportID`, `SupportMessage`, `UserID`) VALUES
(14, 'lakjdjls', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `userinfo`
--

CREATE TABLE `userinfo` (
  `UserID` int(11) NOT NULL,
  `UserFirstName` varchar(60) DEFAULT NULL,
  `UserLastName` varchar(60) DEFAULT NULL,
  `UserEmail` varchar(60) DEFAULT NULL,
  `UserPassword` varchar(16) DEFAULT NULL,
  `UserNickName` varchar(60) DEFAULT NULL,
  `UserPic` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `userinfo`
--

INSERT INTO `userinfo` (`UserID`, `UserFirstName`, `UserLastName`, `UserEmail`, `UserPassword`, `UserNickName`, `UserPic`) VALUES
(1, 'Burak', 'Keskin', 'burakkeskin@gmail.com', 'Keskin05', 'Burak05', NULL),
(2, 'Furkan', 'Şen', 'furkan04@hotmail.com', 'Furkan04', 'Dexguard', NULL),
(3, 'Kutay', 'Boz', 'kboz@gmail.com', 'Kboz0707', 'kboz', NULL),
(4, 'Rahşan', 'Keskin', 'keskinrahsan@gmail.com', 'Keskin34', 'rahsan', NULL),
(5, 'Serdar', 'Keskin', 'serdarkeskin@gmail.com', 'Serdar05', 'Serdar05', NULL),
(6, 'admin', 'admin', 'admin@gmail.com', 'Admin0505', 'admin', NULL),
(7, 'Mehmet', 'Keskin', 'keskinmehmet@gmail.com', 'Mehmet05', 'Mehmet', ''),
(8, 'Ahmet', 'Keskin', 'ahmet@hotmail.com', 'Ahmet0505', 'Ahmet', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HotelID`);

--
-- Tablo için indeksler `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`PersonelID`),
  ADD KEY `FK_HotelID2` (`HotelID2`);

--
-- Tablo için indeksler `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`PositionID`),
  ADD KEY `FK_PersonelID` (`PersonelID`);

--
-- Tablo için indeksler `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ReservationID`),
  ADD KEY `FK_RoomID1` (`RoomID1`),
  ADD KEY `FK_ReservationTypeID` (`ReservationTypeID`);

--
-- Tablo için indeksler `reservationtype`
--
ALTER TABLE `reservationtype`
  ADD PRIMARY KEY (`ReservationTypeID`);

--
-- Tablo için indeksler `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomID`),
  ADD KEY `FK_UserID1` (`UserID1`),
  ADD KEY `FK_HotelID` (`HotelID1`);

--
-- Tablo için indeksler `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`RoomTypeID`),
  ADD KEY `FK_RoomID` (`RoomID`);

--
-- Tablo için indeksler `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`SupportID`),
  ADD KEY `FK_UserID` (`UserID`);

--
-- Tablo için indeksler `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`UserID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hotel`
--
ALTER TABLE `hotel`
  MODIFY `HotelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `position`
--
ALTER TABLE `position`
  MODIFY `PositionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ReservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `reservationtype`
--
ALTER TABLE `reservationtype`
  MODIFY `ReservationTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `room`
--
ALTER TABLE `room`
  MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `RoomTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `support`
--
ALTER TABLE `support`
  MODIFY `SupportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `personel`
--
ALTER TABLE `personel`
  ADD CONSTRAINT `FK_HotelID2` FOREIGN KEY (`HotelID2`) REFERENCES `hotel` (`HotelID`);

--
-- Tablo kısıtlamaları `position`
--
ALTER TABLE `position`
  ADD CONSTRAINT `FK_PersonelID` FOREIGN KEY (`PersonelID`) REFERENCES `personel` (`PersonelID`);

--
-- Tablo kısıtlamaları `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_ReservationTypeID` FOREIGN KEY (`ReservationTypeID`) REFERENCES `reservationtype` (`ReservationTypeID`),
  ADD CONSTRAINT `FK_RoomID1` FOREIGN KEY (`RoomID1`) REFERENCES `room` (`RoomID`);

--
-- Tablo kısıtlamaları `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `FK_HotelID` FOREIGN KEY (`HotelID1`) REFERENCES `hotel` (`HotelID`),
  ADD CONSTRAINT `FK_UserID1` FOREIGN KEY (`UserID1`) REFERENCES `userinfo` (`UserID`);

--
-- Tablo kısıtlamaları `roomtype`
--
ALTER TABLE `roomtype`
  ADD CONSTRAINT `FK_RoomID` FOREIGN KEY (`RoomID`) REFERENCES `room` (`RoomID`);

--
-- Tablo kısıtlamaları `support`
--
ALTER TABLE `support`
  ADD CONSTRAINT `FK_UserID` FOREIGN KEY (`UserID`) REFERENCES `userinfo` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
