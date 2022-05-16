-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 09:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id_bv` int(11) NOT NULL,
  `tenbv` varchar(255) NOT NULL,
  `tinvt` varchar(255) NOT NULL,
  `anhbv` varchar(255) NOT NULL,
  `tinct` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id_bv`, `tenbv`, `tinvt`, `anhbv`, `tinct`) VALUES
(1, 'Lý Do Khiến Công Việc Của Người Thợ Làm Bánh Pizza Luôn Bền Vững', 'Nước Ý được biết đến nhiều với phong cảnh nên thơ và nền văn hoá ẩm thực tuyệt vời. Nhắc tới nước Ý thì không thể không nhắc tới món ăn trứ danh của Ý', 'blog2.jpeg', 'Nước Ý được biết 1 đến nhiều với phong cảnh nên thơ và nền văn hoá ẩm thực tuyệt vời. Nhắc tới nước Ý thì không thể không nhắc tới món ăn trứ danh của Ý'),
(2, ' 1 Những Thông Tin Khiến Bạn Bất Ngờ Về Biểu Tượng Ẩm Thực Italy', 'Lượng tiêu thụ khủng khiếp về số lư1ợng bánh Pizza ', 'blog3.jpg', 'Lượng tiêu thụ 1 khủng khiếp về số lượng bánh Pizz1a '),
(3, 'Chuyên Mục Ẩm Thực Mỹ – Món Hàu Có Gì Đặc Biệt 1?', 'Để nói về sự phong phóng hay giàu có trong ẩm thực thì Mỹ không được đánh giá cao dù trong ẩm thực châu Âu hay châu Á. Tuy nhiên, cũng không thể bỏ qua ẩm thực Mỹ được, bởi nó có sự đặc biệt và khác biệt khiến nhiều người phải trầm trồ.', 'blog4.jpg', 'Để nói về sự phong phóng hay giàu có trong ẩm thực thì Mỹ không được đánh giá cao dù trong ẩm thực châu Âu hay châu Á. Tuy nhiên, cũng không thể bỏ qua ẩm thực Mỹ được, bởi nó có sự đặc biệt và khác biệt khiến nhiều người phải trầm 1 trồ.'),
(4, 'Nhà hàng mới chuyên Pizza ngon nức mũi mọi người ạ', 'Cứ đà phát triển thế này thì chẳng mấy chủ quán Giang Nguyên mua được Lamborgini và Vinfast', 'blog5.jpg', 'Cứ đà phát triển thế này thì chẳng mấy chủ quán Giang Nguyên mua được Lamborgini và Vinfast');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id_dm` int(11) NOT NULL,
  `ten_dm` varchar(50) NOT NULL,
  `anhdm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmucsp`
--

INSERT INTO `danhmucsp` (`id_dm`, `ten_dm`, `anhdm`) VALUES
(1, 'Pizza', 'icon_pizza.png'),
(2, 'Đồ uống', 'icon_douong.png'),
(3, 'Salad', 'icon_salad.png'),
(4, 'Mỳ Ý', 'icon_myi.png'),
(5, 'Combo', 'icon_combo.png');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `id_dh` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `ghichu` varchar(255) NOT NULL,
  `ngay` date NOT NULL,
  `tinhtrang` varchar(15) NOT NULL,
  `vocherdh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`id_dh`, `id_tk`, `tenkh`, `diachi`, `sdt`, `ghichu`, `ngay`, `tinhtrang`, `vocherdh`) VALUES
(35, 1, 'Giang Lính Cứu Hỏa', 'Hà Nội', 366608023, '', '2021-12-11', 'Chờ xác nhận', 0),
(36, 3, 'maimai', 'Hà Nội', 366608023, '', '2021-12-11', 'Chờ xác nhận', 0),
(37, 6, 'maimai', 'Hà Nội', 366608023, 'Thêm nhiều ớt và nước chấm', '2021-12-12', 'Chờ xác nhận', 0),
(38, 3, 'Giang Nhà Giàu', 'Xuân Dương', 366608023, 'Ship Nhanh nhanh nhá', '2021-12-12', 'Chờ xác nhận', 0),
(40, 3, 'Nguyễn Quý Giang', 'Xuân Dương', 366608023, '', '2021-12-13', 'Chờ xác nhận', 10);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang_thuong`
--

CREATE TABLE `don_hang_thuong` (
  `id_dht` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_s` int(11) NOT NULL,
  `tenkhach` varchar(50) NOT NULL,
  `sl` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` int(11) NOT NULL,
  `ngaynhan` date NOT NULL,
  `tinhtrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `don_hang_thuong`
--

INSERT INTO `don_hang_thuong` (`id_dht`, `id_sp`, `id_s`, `tenkhach`, `sl`, `diachi`, `sdt`, `ngaynhan`, `tinhtrang`) VALUES
(1, 2, 1, 'Giang Nguyên', 1, 'Xuan Duong', 392332779, '2021-11-18', '4'),
(8, 2, 1, 'ANH Giang', 1, 'Ha Noi', 123456, '2021-11-18', '2'),
(11, 1, 1, 'Giang Giường Chiếu', 3, 'Đường 16 XD KL SS HH', 366608023, '0000-00-00', 'Đã nhận'),
(12, 14, 1, 'Giang số 1', 10, 'Xuân Dương Kim Lũ Sóc Sơn Hà Nôi', 366608023, '0000-00-00', 'Chờ xác nhận'),
(13, 13, 1, 'Giang Lăng Nhăng', 3, 'Xuân Dương Kim Lũ Sóc Sơn Hà Nôi', 366608023, '2021-12-09', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id_gh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `sl` int(11) NOT NULL,
  `id_s` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `oderolds` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`id_gh`, `id_sp`, `id_tk`, `sl`, `id_s`, `trangthai`, `oderolds`) VALUES
(65, 2, 1, 3, 1, 1, 35),
(66, 3, 3, 3, 1, 1, 36),
(68, 8, 3, 3, 1, 1, 36),
(69, 3, 6, 4, 1, 1, 37),
(71, 3, 6, 3, 3, 1, 37),
(72, 8, 6, 2, 1, 1, 37),
(73, 15, 6, 3, 1, 1, 37),
(74, 15, 6, 3, 1, 0, 0),
(75, 3, 3, 2, 2, 1, 38),
(76, 46, 3, 3, 1, 1, 38),
(77, 3, 3, 1, 1, 1, 40),
(78, 14, 3, 2, 1, 1, 40),
(79, 15, 3, 6, 1, 1, 40),
(80, 2, 3, 4, 1, 1, 40),
(81, 8, 3, 6, 1, 1, 40),
(82, 3, 3, 1, 1, 1, 40),
(85, 3, 3, 1, 1, 0, 0),
(86, 6, 3, 2, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `anhdd` varchar(255) NOT NULL,
  `giasp` int(11) NOT NULL,
  `ttsp` varchar(255) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `tensp`, `anhdd`, `giasp`, `ttsp`, `id_dm`) VALUES
(1, 'P1. BEEFY PIZZA', 'P1rs1.jpg', 90000, 'Thịt bò xay, ngô, sốt BBQ, pho mai', 1),
(2, 'U1. COCA COLA 1.5L ', 'Coca-1.5L-260x204.jpg', 15000, 'Coca cola chai nhựa 1.5 lít', 2),
(3, 'P2. SALAMI PIZZA', 'P3rs1.jpg', 150000, 'Xúc xích salami, hành tây ,sốt cà chua, pho mai', 1),
(4, 'P3. SMOKE CHICKEN PIZZA', 'P7rs1.jpg', 150000, 'Thịt gà hun khói, hành tây ,nấm sốt cà chua, pho mai', 1),
(5, 'S1. GARDEN SALAD', 'S1.-Garden-Salad.jpg', 40000, 'Xà lách, dưa chuột, cà chua, sốt dâu dấm', 3),
(6, 'U2. COCA COLA 390ML', 'coca-390ml-370x330-260x204.jpg', 10000, ' Coca cola chai nhựa 390 ml', 2),
(7, 'S2. SEASONAL SALAD', 'S2-260x204.jpg', 60000, 'Rau theo mùa, thịt gà hun khói, xà lách,sốt Ceasar', 3),
(8, 'S3. NICOISE SALAD', 'S3-260x204.jpg', 60000, 'Cá ngừ, trứng, cà chua tươi, hành tây, dưa chuột, pho mai ', 3),
(9, 'P4. HAWAII PIZZA', 'P2rs1.jpg', 90000, 'Jam bông, dứa,sốt cà chua, pho mai', 1),
(10, 'P5. CHORIZO PIZZA', 'P4rs1.jpg', 90000, 'Xúc xích Tây Ban Nha, hành tây, ô liu, sốt cà chua, pho mai', 1),
(11, 'P6. MEAT LOVERS PIZZA', 'P5-1.jpg', 90000, 'Xúc xích các loại, jam bông, hành tây,sốt cà chua, pho mai', 1),
(12, 'P6. BBQ CHICKEN PIZZA', 'P6rs1.jpg', 90000, 'Thịt gà xay, nấm, hành tây,sốt BBQ, pho mai', 1),
(13, 'M1. Spaghetti Bolognese', 'M1-260x204.jpg', 65000, 'Sốt bò băm, pho mai Parmesan', 4),
(14, 'M2. Spaghetti Carbonara', 'M2-260x204 (1).jpg', 65000, 'Jam bông, nấm, sốt kem trứng, pho mai Parmensa', 4),
(15, 'M3. Spaghetti Smoke Chicken', 'M3-1.jpg', 90000, 'Thịt gà hun khói, sốt kem trứng, pho mai Parmesan', 4),
(17, 'M4. SPAGHETTI RATATOUILLE', 'M4-260x204.png', 65000, 'Xúc xích Chorizo, sốt cà chua rau hầm, pho mai Parmensan', 4),
(18, 'M5. Spaghetti Seafood', 'M5-260x204.jpg', 75000, 'Mực, tôm, ớt xanh, cà chua, hành tây, sốt cà chua, pho mai Parmesan', 4),
(19, 'M6. Spaghetti Shrimp', '41411111.jpg', 75000, 'Tôm, nấm, sốt kem, pho mai Parmesan', 4),
(43, 'COMBO 01', 'combo-11-1.jpg', 139000, '1 Pizza size S + 1 Salad + 1 Coca 390ml', 5),
(44, 'COMBO 02', 'combo-22-1.jpg', 179000, '1 Pizza size L + 1 Mỳ Ý + 1 Coca 390ml', 5),
(45, 'COMBO 03', 'combo-33-1.jpg', 269000, '1 Pizza size L + 1 Pizza size M+ 1 Mỳ Ý + 1 Coca 390ml', 5),
(46, 'COMBO 04', 'combo-44-260x204.png', 429000, '3 Pizza size L + 1 Khoai tây chiên + 1 Mỳ Ý + 1 Coca 390ml', 5);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id_s` int(11) NOT NULL,
  `ten_size` varchar(5) NOT NULL,
  `gia_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id_s`, `ten_size`, `gia_tien`) VALUES
(1, 'S', 90000),
(2, 'M', 120000),
(3, 'L', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `tk`
--

CREATE TABLE `tk` (
  `id_tk` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vocher` int(11) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tk`
--

INSERT INTO `tk` (`id_tk`, `user`, `pass`, `email`, `vocher`, `quyen`) VALUES
(1, 'anhgiang69', 'anhgiang1', 'giangquy2468@gmail.com', 0, 0),
(2, 'anhgiang123', 'anhgiang1', 'giangnqph15195@fpt.edu.vn', 0, 0),
(3, 'gianggioi69', 'anhgiang1', 'giangquy2468@gmail.com', 10, 1),
(4, 'giangchuyen69', 'anhgiang1', 'giangqu13579@gmail.com', 0, 1),
(5, 'abczxyz123', '123456', 'abc@gmail.com', 0, 0),
(6, 'maimai', '123', 'mai@gmail.com', 0, 0),
(7, 'maimai', '123456', 'mai@gmail.com', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_bv`);

--
-- Indexes for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_dh`),
  ADD KEY `id_tk` (`id_tk`);

--
-- Indexes for table `don_hang_thuong`
--
ALTER TABLE `don_hang_thuong`
  ADD PRIMARY KEY (`id_dht`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_s` (`id_s`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id_gh`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_s` (`id_s`),
  ADD KEY `id_tk` (`id_tk`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id_s`);

--
-- Indexes for table `tk`
--
ALTER TABLE `tk`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_bv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_dh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `don_hang_thuong`
--
ALTER TABLE `don_hang_thuong`
  MODIFY `id_dht` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id_gh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tk`
--
ALTER TABLE `tk`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`id_tk`) REFERENCES `tk` (`id_tk`);

--
-- Constraints for table `don_hang_thuong`
--
ALTER TABLE `don_hang_thuong`
  ADD CONSTRAINT `don_hang_thuong_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `don_hang_thuong_ibfk_2` FOREIGN KEY (`id_s`) REFERENCES `size` (`id_s`);

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `gio_hang_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`),
  ADD CONSTRAINT `gio_hang_ibfk_2` FOREIGN KEY (`id_s`) REFERENCES `size` (`id_s`),
  ADD CONSTRAINT `gio_hang_ibfk_3` FOREIGN KEY (`id_tk`) REFERENCES `tk` (`id_tk`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmucsp` (`id_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
