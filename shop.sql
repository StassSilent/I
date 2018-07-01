-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 13 2017 г., 20:01
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shop`;
-- --------------------------------------------------------

--
-- Структура таблицы `bag`
--

CREATE TABLE `bag` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bag`
--

INSERT INTO `bag` (`id`, `name`, `surname`, `city`, `adress`, `tel`, `mail`) VALUES
(29, 'lil', 'kuk', 'rostov', 'puskina 17', '333333', 'lm.@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `nazv` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `nazv`) VALUES
(1, 'Diswashes,sinks & taps'),
(2, 'Fridges & freezes'),
(3, 'Ovens and cooking'),
(4, 'Small applines'),
(5, 'Tv audio & electronics');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(10) NOT NULL,
  `nazv_tov` varchar(30) NOT NULL,
  `category` int(10) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Структура таблицы `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `small` varchar(100) NOT NULL,
  `big` varchar(100) NOT NULL,
  `nazv_tov` text NOT NULL,
  `category` int(10) NOT NULL,
  `price` varchar(30) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photos`
--

INSERT INTO `photos` (`id`, `small`, `big`, `nazv_tov`, `category`, `price`, `info`) VALUES
(27, 'jkhv.jpg', 'jkhv.jpg', 'BOSCH SPV58M50RU', 1, '50 990 P', 'Type: Narrow Washing class: A Drying class: A Canteen capacity: 10 sets Type of drying: Condensation Inverter motor: Yes Number of Programs: 5 Control Type: Electronic'),
(28, 'kijhli.jpg', 'kijhli.jpg', 'BOSCH SPV58M50RU', 1, '22 989 P', 'Type: Narrow Washing class: A Drying class: A Canteen capacity: 10 sets Type of drying: Condensation Inverter motor: Yes Number of Programs: 5 Control Type: Electronic'),
(29, 'kjgkkkk.jpg', 'kjgkkkk.jpg', '          \n  BEKO DIS26010', 1, '19389 P', 'Type: Narrow Washing class: A Drying class: A Canteen capacity: 10 sets Drying type: Turbo-dryer Number of Programs: 6 Control Type: Electronic Energy class: A'),
(31, 'jwe.jpg', 'jwe.jpg', 'ROCA Foro', 1, '8 826 P', 'Type: Sink Shape: Round Installation Type: Mortise Material: Ceramics Height: 18 cm Width: 40 centimeters Depth: 40 centimeters'),
(33, 'w.jpg', 'w.jpg', 'JACOB DELAFON Ola', 1, '20 260 P', 'MAIN CHARACTERISTICS Mounting typeAbout ConstructionRectangular Housing material Casing coverMatched Facade materialMDF DIMENSIONS AND WEIGHTS Height56 cm Width100 cm Depth 45 cm'),
(34, 's.jpg', 's.jpg', 'Bath mixer VIDIMA Style', 1, '4 819 P', 'Bath mixer VIDIMA Style, spout 320 mm (BA138AA) Type: Two-valve Purpose: For bath with shower Stop valve: Ceramic crane-beech Case Material: Brass Finish: Chrome Aerator: Yes Installation method: Vertical Diameter of connection: 1/2 \" Spout form: Traditional Length of spout: 32 cm Swivel spout: Yes'),
(47, 'l.jpg', 'l.jpg', 'GROHE Grohtherm 800 34576000', 1, '9 567 P', 'Type: Thermostatic Purpose: For a bath Shut-off valve: Thermostatic cartridge Case Material: Brass Finish: Chrome Aerator: Yes Installation method: Vertical Diameter of connection: 1/2 \"'),
(48, 'jg.jpg', 'jg.jpg', 'AM.PM Inspire', 1, '4560 P', 'Type: Single lever Purpose: For bath with shower Shut-off valve: Ceramic cartridge Case Material: Brass Finish: Chrome Installation method: Horizontal Diameter of connection: 1/2 \" Length of spout: 20.7 cm'),
(49, 'q2.jpg', 'q2.jpg', 'BOSCH NatureCool KGE39XK2AR', 2, '31999P', 'Type: Double chamber Defrosting system: Drip Location: Bottom Defrosting system: NatureCool Number of compressors: 1 Control Type: Electronic Energy efficiency class: A + Height: 200 cm Width: 60 cm Depth: 63 cm'),
(50, 'i9.jpg', 'i9.jpg', 'BOSCH KGN39SM10R', 2, '72999 P', 'Type: Double chamber Defrosting system: No Frost Freshness zone: Yes Location: Bottom Defrosting system: No Frost Number of compressors: 1 Control Type: Electronic Energy class: A Height: 200 cm Width: 60 cm Depth: 64 centimeters'),
(51, 'jh.jpg', 'jh.jpg', 'SHIVAKI SHRF-55CHS', 2, '6609 P', 'Country China ARE COMMON Type Single-chamber Number of doors 1 The total volume of 50 liters Useful volume 45 l Climatic class ST Noise level 42 dB Coating Stainless steel'),
(52, 'ajgf.jpg', 'ajgf.jpg', 'EZETIL EZC 45 12/24 / 220V Type: Auto-refrigerator', 2, '54599 P', 'Type: Auto-refrigerator Number of branches: 1 Total: 45 l Type: Network, 12 V'),
(53, 'ksgf.jpg', 'ksgf.jpg', 'HITACHI R-E 6200 U XT', 2, '299599 P', 'ype: Five-chamber Defrosting system: No Frost Freshness zone: Yes Location: Bottom Defrosting system: No Frost Number of compressors: 1 Inverter Compressor: Yes Control Type: Electronic Display type: Symbolic LED display Energy efficiency class: A ++ Height: 181.8 centimeters Width: 73.8 centimeters Depth: 75 cm'),
(61, 'lkjbu.jpg', 'lkjbu.jpg', 'ELIKOR Sigma 60', 3, '7 759 P', 'Type of hood: Fireplace (dome) Design: Classic Operating modes: Tap + Circulation Control Type: Pushbutton Number of Engines: 1 Productivity: 650 m? / h Power Consumption: 185 W Width: 60 cm'),
(62, 'afl.jpg', 'afl.jpg', '90 W / WG 3ETC', 3, '43399', 'Type of hood: Fireplace (dome) Design: Modern Operating modes: Tap Control Type: Pushbutton Number of Engines: 1 Productivity: 800 m? / h Power consumption: 190 W Width: 90 cm'),
(63, 'i8.jpg', 'i8.jpg', 'GRETA 600 isp.10', 3, '9489 P', 'Number of cooking zones: 4 Finish: Enamel Oven type: Gas Gas control: Oven Width: 60 cm Depth: 54 centimeters'),
(64, '34.jpg', '34.jpg', 'GEFEST 6300-03 0046', 3, '22499', 'Number of cooking zones: 4 Finish: Enamel Oven type: Gas Grill: Yes Gas control: Burners, Oven Width: 60 cm Depth: 60 cm White color'),
(65, '3s.jpg', '3s.jpg', 'FLAMA FG 24210 W', 3, '9049', 'Number of cooking zones: 4 Finish: Enamel Oven type: Gas Gas control: Oven Width: 50 cm Depth: 58 cm'),
(66, 'uwt.jpg', 'uwt.jpg', 'GORENJE MO17DW', 3, '4300', 'Control Type: Electronic Volume: 17 liters Microwave power: 700 W White color'),
(67, 'hfs3.jpg', 'hfs3.jpg', 'SUPRA MW-G2119TW', 3, '4499', 'Grill: Yes Control Type: Electronic Volume: 21 liters Microwave power: 700 W Color: Black, White'),
(70, 'kih54.jpg', 'kih54.jpg', 'MARSHALL Major II Bluetooth Black', 4, '9045', 'Headphone type: Monitor Connection: Wired Acoustic design: Closed Frequency range: 10 - 20000 Hz Foldable construction: Yes Microphone: Yes Wire length: 1.2 m Detachable cable from headphone: Yes Weight: 361 g'),
(71, 'sjh.jpg', 'sjh.jpg', 'JBL Synchros E40BT Black', 4, '5068', 'Headphone type: Overhead Connection: Wired Acoustic design: Closed Frequency range: 10 - 24000 Hz Power: 1000 mW Microphone: Yes Wire length: 1.2 m Weight: 240g'),
(72, 'djfg.jpg', 'djfg.jpg', 'SONY MDR-RF811RK', 4, '3865', 'Headphone type: Overhead Connection: Wired Acoustic design: Closed Frequency range: 10 - 24000 Hz Power: 1000 mW Wire length: 1.2 m Weight: 120g'),
(73, 'je.jpg', 'je.jpg', 'ASUS X555YI-XO180T', 4, '32645', 'Operating system: Windows 10 x64 Diagonal: 15.6 inches Resolution: 1366x768 pixels Processor manufacturer: AMD Processor model: Quad Core A8 7410 Clock frequency: 2.2 GHz Maximum clock frequency: 2.5 GHz Number of cores: 4 RAM: 8 GB RAM Type: DDR3L HDD Type: HDD Storage capacity: 1 TB Video card manufacturer: AMD Video card model: Radeon R5 M320 Video memory: 2 GB USB 2.0: 1 USB 3.0: 2'),
(74, 'ytr.jpg', 'ytr.jpg', 'HP 15-ba028ur', 4, '37990', 'Gaming Notebook: Yes Operating System: Windows 10 Diagonal: 15.6 inches Resolution: 1920x1080 pixels Processor manufacturer: AMD Processor model: A10 9600P Clock frequency: 2.4 GHz Maximum clock speed: 3.3 GHz Number of cores: 4 Amount of RAM: 6 GB RAM Type: DDR4 HDD Type: HDD Storage capacity: 1 TB Video card manufacturer: AMD Video card model: Radeon R5 + Radeon R7 M440 Video memory: 4 GB Optical Drive Type: DVD / CD ± RW Bluetooth: Yes USB 2.0: 2 USB 3.0: 1'),
(75, 'jfyt.jpg', 'jfyt.jpg', 'ASUS R540SA-XX052T', 4, '1999', 'Operating System: Windows 10 Diagonal: 15.6 inches Resolution: 1366x768 pixels Processor manufacturer: Intel Processor model: Intel Celeron-N3050 Clock frequency: 1.6 GHz Maximum clock speed: 2.16 GHz Number of cores: 2 Amount of RAM: 4 GB RAM Type: DDR3L HDD Type: HDD Storage capacity: 500 GB Bluetooth: Yes USB: 2 USB 2.0: 1 USB 3.0: '),
(76, 'yguy.jpg', 'yguy.jpg', 'SAMSUNG UE50KU6000UXRU', 4, '49990', 'Diagonal: 50 \"(127 cm) Technology: LED Ultra HD: Yes Resolution: 3840x2160 pixels HDR Support: Yes Contrast Ratio: MEGA DCR Video playback via USB: Yes Smart TV: Yes HDMI: 3 Number of USB connectors: 2 Wi-Fi: Yes Black color'),
(79, 'LIYG.jpg', 'LIYG.jpg', 'SAMSUNG UE50J6240', 4, '36299', 'Diagonal: 50 \"(127 cm) Technology: LED Full HD: Yes Resolution: 1920x1080 pixels Video playback via USB: Yes Smart TV: Yes HDMI: 4 Number of USB connectors: 3 Wi-Fi: Yes');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `online` int(255) NOT NULL,
  `last_act` int(255) NOT NULL,
  `prava` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Name`, `Password`, `Email`, `online`, `last_act`, `prava`) VALUES
(20, 'root', '123', 'root@mail.ru', 1499967510, 1499967510, 1),
(21, 'Lm', '55', 'Lm@mail.ru', 1499968864, 1499968864, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bag`
--
ALTER TABLE `bag`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `категория` (`category`) USING BTREE;

--
-- Индексы таблицы `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
