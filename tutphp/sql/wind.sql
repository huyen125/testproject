-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 10:48 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wind`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ido` int(15) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `newprice` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ido`, `product_name`, `newprice`, `units`, `total`, `date`, `email`) VALUES
(12, 'Quần Tây Nam', 199000, 1, 199000, '2018-09-19 06:13:30', 'phuongnam@phoenix.com'),
(13, 'Phụ kiện Samsung Happy Hallowen', 120000, 2, 240000, '2018-09-19 06:35:12', 'phuongnam@phoenix.com'),
(14, 'Chân Váy Xòe', 72000, 3, 216000, '2018-09-19 06:42:14', 'phuongnam@phoenix.com'),
(15, 'Áo Thun Nữ Cổ Tròn', 119000, 1, 119000, '2018-09-19 06:44:25', 'quangsang@phoenix.com'),
(16, 'Đồng Hồ Casio Nam', 999000, 1, 999000, '2018-09-19 06:44:35', 'quangsang@phoenix.com'),
(17, 'Phụ kiện LG Casio', 870000, 1, 870000, '2018-09-19 06:44:59', 'nguyentruong@phoenix.com'),
(18, 'Phụ kiện Samsung Happy Hallowen', 120000, 1, 120000, '2018-09-22 07:09:37', 'phuongnam@phoenix.com'),
(19, 'Oppo Zapas', 99000, 1, 99000, '2018-09-22 07:10:38', 'quangsang@phoenix.com'),
(20, 'Samsung Naruto', 230000, 1, 230000, '2018-09-23 06:44:51', 'quangsang@phoenix.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idp` int(15) NOT NULL,
  `idg_1` int(15) DEFAULT NULL,
  `idg_2` int(15) DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_details` varchar(255) CHARACTER SET utf8 NOT NULL,
  `newprice` int(10) NOT NULL,
  `oldprice` int(10) NOT NULL,
  `qty` int(5) NOT NULL,
  `img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idp`, `idg_1`, `idg_2`, `product_name`, `product_details`, `newprice`, `oldprice`, `qty`, `img`) VALUES
(1, 1, 1, 'Sơ Mi Nam Sọc Xanh', 'Chất liệu cotton pha nhẹ, thoáng mát\r\n\r\nForm slim fit, dễ kết hợp với các loại quần\r\n\r\nKiếu áo sơ mi tay dài lịch lãm, sang trọng\r\n\r\nThích hợp mặc trong nhiều môi trường khác\r\nnhau', 159000, 340000, 0, '1.jpg'),
(2, 1, 2, 'Samsung Cổ Tròn', 'Vải thun cotton 100%: thoáng mát, thấm mồ\r\nhôi cực tốt\r\n\r\nKhông xù lông, giặt không phai màu\r\n\r\nStyle áo trẻ trung, dễ phối đồ', 150000, 214000, 50, '2.jpg'),
(3, 1, 3, 'Quần Tây Nam', 'Chất liệu Cotton pha cao cấp \r\n\r\nThiết kế ống suông trẻ trung\r\n\r\nGam màu sang trọng, thanh lịch', 199000, 350000, 34, '3.jpg'),
(4, 1, 4, 'Oppo Biti’s Hunter', 'Công nghệ LiteFlex độc quyền\r\n\r\nCo dãn 4 chiều, thoáng khí tối đa\r\n\r\nĐịnh hình và trợ lực gót chân\r\n\r\nĐế lót kháng khuẩn và massage', 849000, 899000, 20, '4-1.jpg'),
(5, 1, 5, 'LG Cariano', 'Bộ máy Seiko Nhật Bản chính xác\r\n\r\nMặt sapphire trong suốt, không trầy, khó bể\r\n\r\nCông nghệ mã vàng PVD chống ăn mòn, mài mòn\r\ncao\r\n\r\nKính phóng đại bảng báo ngày giúp nhìn rõ hơn\r\n\r\nKhả năng chống thấm nước 3 ATM\r\n\r\nSố và kim đồng hồ phát quang nhìn rõ', 890000, 3280000, 76, '5.jpg'),
(6, 2, 1, 'Chân Váy Công Sở', 'Chân váy đắp tà phối ren và đính nút\r\n\r\nChất liệu mềm mại, thoáng mát\r\n\r\nĐường may tỉ mỉ, tinh tế\r\n\r\nThích hợp diện đi chơi, đi tiệc', 180000, 250000, 78, '6.jpg'),
(7, 2, 2, 'Áo Thun Nữ Cổ Tròn', 'Chất liệu 100% cotton, mềm mịn\r\n\r\nKháng khuẩn và khử mùi\r\n\r\nThấm hút tốt tạo cảm giác thoải mái khi mặc\r\n\r\nĐường may chắc chắn, tỉ mỉ\r\n\r\nCó thể mặc đi học, dạo phố hoặc đi du lịch', 119000, 139000, 85, '7.jpg'),
(8, 2, 3, 'Quần Jean Nữ', 'Một chiếc quần không thể thiếu trong tủ đồ\r\ncủa mọi phụ nữ năng động\r\n\r\nMàu xanh pantone mới lạ và đang rất được ưa\r\nchuộng trong các màu quần jeans\r\n\r\nSản phẩm được mài nhẹ thời trang ở phần đùi\r\ntạo cảm giác sống động và tràn đầy năng lượng', 249000, 429000, 54, '8.jpg'),
(9, 2, 4, 'Phụ kiện Oppo Biti\'s Hunter', 'Kiểu dáng thể thao dành cho nữ, năng động\r\n\r\nThiết kế với gam màu đen sang trọng và cá tính\r\n\r\nPhần đế phylon siêu nhẹ kết hợp cùng đế\r\ntiếp đất cao su\r\n\r\nMũi giày được bọc cứng, có lớp đệm cao su\r\nbảo vệ đầu ngón chân\r\n\r\nTrọng lượng siêu nhẹ, đàn hồi và ', 544000, 680000, 85, '9-1.jpg'),
(10, 2, 5, 'Phụ kiện LG Vàng', 'Kiểu máy: Quartz (Pin)\r\n\r\nKích thước mặt: 25mm\r\n\r\nChất liệu vỏ: Thép không gỉ\r\n\r\nChất liệu dây: Hợp kim\r\n\r\nChất liệu kính: Kính khoáng\r\n\r\nChịu nước: 3 ATM', 502000, 590000, 85, '10-1.jpg'),
(11, 1, 5, 'Đồng Hồ Casio Nam', 'Mặt đồng hồ bằng chất liệu kính khoáng cao\r\ncấp chống trầy\r\n\r\nDây đeo và vỏ máy bằng thép kim loại không gỉ\r\n\r\nThiết kế lịch lãm hiện đại\r\n\r\nHiển thị giờ quốc tế tiện ích\r\n\r\nTông màu cá tính, dễ phối trang phục', 999000, 1219000, 35, '11.jpg'),
(12, 1, 5, 'LG Kim Loại', 'Mặt đồng hồ bằng chất liệu kính khoáng cao\r\ncấp chống trầy\r\n\r\nDây đeo và vỏ máy bằng thép kim loại không gỉ\r\n\r\nThiết kế lịch lãm hiện đại\r\n\r\nHiển thị giờ quốc tế tiện ích\r\n\r\nTông màu cá tính, dễ phối trang phục', 150000, 214000, 38, '12.jpg'),
(13, 1, 5, 'LG Cao Su', 'Mặt đồng hồ bằng chất liệu kính khoáng cao\r\ncấp chống trầy\r\n\r\nDây đeo và vỏ máy bằng thép kim loại không gỉ\r\n\r\nThiết kế lịch lãm hiện đại\r\n\r\nHiển thị giờ quốc tế tiện ích\r\n\r\nTông màu cá tính, dễ phối trang phục', 199000, 350000, 63, '13.jpg'),
(14, 1, 5, 'LG Dây Da', 'Mặt đồng hồ bằng chất liệu kính khoáng cao\r\ncấp chống trầy\r\n\r\nDây đeo và vỏ máy bằng thép kim loại không gỉ\r\n\r\nThiết kế lịch lãm hiện đại\r\n\r\nHiển thị giờ quốc tế tiện ích\r\n\r\nTông màu cá tính, dễ phối trang phục', 849000, 899000, 73, '14.jpg'),
(15, 1, 5, 'Đồng Hồ Neos', 'Mặt đồng hồ bằng chất liệu kính khoáng cao\r\ncấp chống trầy\r\n\r\nDây đeo và vỏ máy bằng thép kim loại không gỉ\r\n\r\nThiết kế lịch lãm hiện đại\r\n\r\nHiển thị giờ quốc tế tiện ích\r\n\r\nTông màu cá tính, dễ phối trang phục', 3390000, 3590000, 35, '15-1.jpg'),
(16, 2, 5, 'Phụ kiện LG Dây Da', 'Dây đeo bằng kim loại không gỉ cao cấp,\r\nbóng sáng đẳng cấp\r\n\r\nMặt kính khoáng chống trầy hiệu quả\r\n\r\nThiết kế tinh tế, sang trọng\r\n\r\nTông màu thanh lịch, dễ phối đồ\r\n\r\nChống nước ở độ sâu 30m', 799000, 1000000, 84, '16-1.jpg'),
(17, 2, 5, 'Phụ kiện LG SKMEI', 'Dây đeo bằng kim loại không gỉ cao cấp,\r\nbóng sáng đẳng cấp\r\n\r\nMặt kính khoáng chống trầy hiệu quả\r\n\r\nThiết kế tinh tế, sang trọng\r\n\r\nTông màu thanh lịch, dễ phối đồ\r\n\r\nChống nước ở độ sâu 30m', 399000, 599000, 46, '17.jpg'),
(18, 2, 5, 'Phụ kiện LG Casio', 'Dây đeo bằng kim loại không gỉ cao cấp,\r\nbóng sáng đẳng cấp\r\n\r\nMặt kính khoáng chống trầy hiệu quả\r\n\r\nThiết kế tinh tế, sang trọng\r\n\r\nTông màu thanh lịch, dễ phối đồ\r\n\r\nChống nước ở độ sâu 30m', 870000, 1200000, 57, '18.jpg'),
(19, 2, 5, 'Phụ kiện LG Kapten', 'Dây đeo bằng kim loại không gỉ cao cấp,\r\nbóng sáng đẳng cấp\r\n\r\nMặt kính khoáng chống trầy hiệu quả\r\n\r\nThiết kế tinh tế, sang trọng\r\n\r\nTông màu thanh lịch, dễ phối đồ\r\n\r\nChống nước ở độ sâu 30m', 4349000, 5000000, 46, '19.jpg'),
(20, 2, 5, 'Phụ kiện LG Black', 'Dây đeo bằng kim loại không gỉ cao cấp,\r\nbóng sáng đẳng cấp\r\n\r\nMặt kính khoáng chống trầy hiệu quả\r\n\r\nThiết kế tinh tế, sang trọng\r\n\r\nTông màu thanh lịch, dễ phối đồ\r\n\r\nChống nước ở độ sâu 30m', 500000, 600000, 35, '20.jpg'),
(21, 1, 2, 'Samsung Naruto', 'Vải thun cotton 100%: thoáng mát, thấm mồ\r\nhôi cực tốt\r\n\r\nKhông xù lông, giặt không phai màu\r\n\r\nStyle áo trẻ trung, dễ phối đồ', 230000, 250000, 54, '21.jpg'),
(22, 1, 1, 'Apple(iphone) Envy', 'Chất liệu Cotton cao cấp thấm hút mồ hôi\r\n\r\nThiết kế thời trang lịch thiệp, tinh tế\r\n\r\nĐược giới công sở ưa chuộng nhất\r\n\r\nGiúp bạn trở nên lịch lãm và sang trọng', 449000, 580000, 52, '22.jpg'),
(23, 1, 2, 'Áo Thun Có Cổ', 'Vải thun cotton 100%: thoáng mát, thấm mồ hôi cực tốt\r\n\r\nKhông xù lông, giặt không phai màu\r\n\r\nStyle áo trẻ trung, dễ phối đồ', 230000, 300000, 43, '23.jpg'),
(24, 2, 2, 'Phụ kiện Samsung Happy Hallowen', 'Thiết kế đơn giản, trẻ trung\r\n\r\nĐường may tỉ mỉ, chắc chắn\r\n\r\nPhong cách đường phố năng động', 120000, 200000, 34, '24-1.jpg'),
(25, 2, 1, 'Chân Váy Xòe', 'Chất liệu vải an toàn cho sức khỏe\r\n\r\nChất vải thoáng mát tạo cảm giác thoải mái khi mặc\r\n\r\nKiểu dáng thời trang đẹp mắt\r\n\r\nThiết kế mang phong cách hiện đại, cá tính', 72000, 120000, 64, '25.jpg'),
(26, 2, 2, 'Phụ kiện Samsung Chữ Vicky', 'Phong cách năng động, trẻ trung\r\n\r\nThiết kế in chữ dễ thương\r\n\r\nThích hợp diện đi chơi, dạo phố', 120000, 150000, 32, '26.jpg'),
(27, 2, 2, 'Áo In Hình Everest', 'Chất liệu vải tổng hợp thoáng mát\r\n\r\nChất vải thấm hút tốt tạo cảm giác thoải mái khi mặc\r\n\r\nĐường may chắc chắn, tỉ mỉ\r\n\r\nCó thể mặc đi học, dạo phố hoặc đi du lịch', 69000, 100000, 64, '27.jpg'),
(28, 2, 2, 'Áo Thun Nữ Police', 'Áo có gam màu nền nã\r\n\r\nCó thể mặc cùng nhiều loại trang phục khác nhau\r\n\r\nChất liệu thun Cotton êm ái, co giãn dễ dàng, thấm hút tốt\r\n\r\nĐường chỉ may mịn đẹp, không thừa đầu chỉ\r\n\r\nÁo có độ bền màu cao, chống xù lông trong suốt thời gian\r\nsử dụng', 269000, 300000, 89, '28.jpg'),
(29, 2, 2, 'Áo Thun Màu Trắng', 'Chất liệu thun mềm mại, thoáng mát\r\n\r\nForm áo ôm vừa vặn cơ thể\r\n\r\nHọa tiết chữ cái phối sọc khác màu trẻ trung\r\n\r\nPhù hợp để mặc đi học, dạo phố hay du lịch', 59000, 158000, 34, '29.jpg'),
(30, 2, 4, 'Phụ kiện Oppo Juno', 'Chất liệu vải lưới thông thoáng\r\n\r\nThiết kế phối màu trẻ trung\r\n\r\nĐế Phylon có rãnh chống trơn trượt\r\n\r\nThích hợp diện đi học, đi chơi,...', 400000, 590000, 54, '30.jpg'),
(31, 2, 4, 'Phụ kiện Oppo Ulzzang', 'Dễ phối với nhiều kiểu trang phục khác nhau\r\n\r\nĐế \"bí mật\" tôn chiều cao của các nàng lên 4-5 cm.\r\n\r\nChất liệu giả da mềm và dễ làm sạch.\r\n\r\nSử dụng trong mọi trường hợp: đi dạo, đi học, đi làm,\r\nshopping…', 199000, 250000, 63, '31.jpg'),
(32, 2, 4, 'Phụ kiện Oppo Hot Trend', 'Chất liệu tổng hợp bền chắc\r\n\r\nPhối màu trẻ trung, năng động\r\n\r\nĐế giày làm bằng chất liệu cao su tổng hợp\r\n\r\nThích hợp mang đi học, đi làm', 189000, 250000, 53, '32.jpg'),
(33, 2, 4, 'Phụ kiện Oppo Cột Dây', 'Form dáng mũi tròn cổ điển, thời trang\r\n\r\nMàu sắc cá tính, trẻ trung\r\n\r\nChất liệu tốt, bền chắc\r\n\r\nKiểu dáng hiện đại\r\n\r\nKết hợp được nhiều trang phục khác nhau', 112000, 339000, 53, '33.jpg'),
(34, 2, 4, 'Phụ kiện Oppo Rozalo', 'Thông tin sản phẩm:\r\n\r\nMã sản phẩm: RM54716\r\n\r\nMàu sắc: Trắng, Trắng Vàng, Trắng Xanh.\r\n\r\nKích thước: 35, 36, 37, 38, 39.\r\n\r\nChất liệu trên: PU\r\n\r\nChất liệu đế: Cao su.', 169000, 300000, 25, '34.jpg'),
(35, 1, 4, 'Oppo Gadino', 'Giày với chất liệu vải hạn chế sờn rách, phai màu\r\n\r\nMũi giày tròn, kiểu dáng ôm chân vừa vặn\r\n\r\nKiểu giày cột dây dễ điều chỉnh kích cỡ\r\n\r\nThiết kế tinh tế, phù hợp với các bạn nam trẻ trung, hiện đại', 89000, 299000, 53, '35.jpg'),
(36, 1, 4, 'Oppo Zapas', 'Có độ bền cao và kiểu dáng năng động\r\n\r\nForm giày ôm bảo vệ chân tốt\r\n\r\nChất liệu vải sợi cao cấp, mềm mại\r\n\r\nĐế giày làm bằng chất liệu cao su tổng hợp', 99000, 210000, 17, '36.jpg'),
(37, 1, 4, 'Oppo POSA', 'Kiểu dáng năng động\r\n\r\nChất liệu: da, cao su bền bỉ\r\n\r\nThích hợp dạo phố, du lịch', 299000, 380000, 34, '37.jpg'),
(38, 1, 4, 'Oppo Rozalo', 'Thông tin:\r\n\r\nMã sản phẩm: RM8019\r\n\r\nMàu sắc: Đen, Đen Trắng\r\n\r\nKích thước: 39, 40, 41, 42, 43\r\n\r\nChất liệu ngoài: Vải lưới\r\n\r\nChất liệu đế: Cao su', 189000, 300000, 75, '38.jpg'),
(39, 1, 4, 'Oppo Classcial', 'Kiểu giày cột dây tiện lợi, thoải mái điều chỉ độ rộng\r\n\r\nChất liệu vải sợi cao cấp, bền chắc\r\n\r\nĐế cao su xẻ rãnh chống trơn trợt\r\n\r\nThiết kế trẻ trung, năng động', 99000, 350000, 53, '39.jpg'),
(40, 1, 1, 'Apple(iphone) FASHION', 'Chất liệu cotton pha nhẹ, thoáng mát\r\n\r\nForm slim fit, dễ kết hợp với các loại quần\r\n\r\nKiếu áo sơ mi tay dài lịch lãm, sang trọng\r\n\r\nThích hợp mặc trong nhiều môi trường khác nhau', 129000, 280000, 53, '40.jpg'),
(41, 1, 1, 'Áo Sơ Mi Envymen', 'Chất liệu sợi Cotton thông thoáng, không gây hầm bí\r\n\r\nForm áo ôm nhẹ, tôn đường nét săn chắc và khỏe khoắn \r\ncủa cơ thể\r\n\r\nThiết kế cổ bẻ lịch sự và thu hút\r\n\r\nTông màu hiện đại, dễ kết hợp với nhiều\r\ntrang phục khác', 499000, 800000, 23, '41.jpg'),
(42, 1, 1, 'Áo Nam Tay Dài', 'Chất kate trơn, không nhăn, không xù, không phai màu\r\n\r\nForm body Hàn Quốc, dễ kết hợp với các loại quần\r\n\r\nKiếu áo sơ mi tay dài lịch lãm, sang trọng\r\n\r\nThích hợp mặc trong nhiều môi trường khác nhau', 110000, 230000, 26, '42.jpg'),
(43, 1, 3, 'Quần Tây Nam Xám', 'Kiểu quần form suông 4 túi\r\n\r\nChất liệu vải cao cấp thấm hút tốt\r\n\r\nNút cài và khóa kéo chắc chắn\r\n\r\nĐường may tỉ mỉ, màu xám muối tiêu thời trang\r\n\r\nPhù hợp chốn công sở, đi tiệc', 360000, 399000, 42, '43.jpg'),
(44, 1, 3, 'Xiaomi baggy', 'Sản phẩm được sản xuất bằng chất liệu vải linen (đũi ) \r\ncao cấp.\r\n\r\nĐã qua xử lý không bị co rút khi giặt sản phẩm.\r\n\r\nThấm hút mồ hôi tốt, thoáng mát, tạo sự thoải mái khi mặc.\r\n\r\nPhom dáng được thiết kế phù hợp với vóc dáng người Việt.', 250000, 350000, 23, '44.jpg'),
(45, 1, 3, 'Quần Tây Nam Đen', 'Kiểu quần form suông 4 túi\r\n\r\nChất liệu vải cao cấp thấm hút tốt\r\n\r\nNút cài và khóa kéo chắc chắn\r\n\r\nĐường may tỉ mỉ, màu đen muối tiêu lịch lãm\r\n\r\nPhù hợp chốn công sở, đi tiệc', 360000, 399000, 32, '45.jpg'),
(46, 1, 3, 'Quần Tây VFS0016', 'Kiểu dáng quần hiện đại, trẻ trung\r\n\r\nChất liệu vải cao cấp co giãn nhẹ, không nhăn\r\n\r\nThiết kế quần ống ôm, thoải mái\r\n\r\nTúi xẻ hai bên tiện lợi\r\n\r\nMàu xám lịch lãm, nam tính', 175000, 360000, 35, '46.jpg'),
(47, 1, 3, 'Quần Tây Xanh Đậm', 'Kiểu dáng quần hiện đại, trẻ trung\r\n\r\nChất liệu vải cao cấp co giãn nhẹ, không nhăn\r\n\r\nThiết kế quần ống ôm, thoải mái\r\n\r\nMàu xanh đậm lịch lãm, nam tính', 175000, 360000, 56, '47.jpg'),
(48, 2, 3, 'Quần Short Nữ', 'Quần sort kaki có rách phía dưới ,phong cách bụi\r\n\r\nĐiểm nhấn rách và chữ thiêu bên dưới cho bạn thêm nổi bật\r\n\r\nChất liệu cao cấp bền đẹp', 179000, 358000, 23, '48.jpg'),
(49, 2, 3, 'Quần Jeans Skinny', 'Chất liệu cotton pha thun co giãn tốt\r\n\r\nThiết kế 5 túi cổ điển, thêu túi sau, khóa kéo, phong cách \r\nChâu Âu\r\n\r\nMàu trơn không wask tiện dụng dễ phối đồ', 290000, 390000, 43, '49.jpg'),
(50, 2, 3, 'Quần Jean Nữ Đen', 'Màu đen tuyền sang trọng và dễ phối đồ.\r\n\r\nSản phẩm được hoàn thiện với độ chính xác cao với đường \r\nmay dày, cẩn thận\r\n\r\nForm quần thoải mái và tôn dáng khi mặc\r\n\r\nChất vải cao cấp có tính đàn hồi tốt giúp quần giữ được \r\nform nhiều lần giặt', 249000, 429000, 52, '50-1.jpg'),
(51, 2, 3, 'Quần Jean Thun Nữ', 'Có đường may tinh tế, tỉ mỉ, chắc chắn,sắc xảo\r\n\r\nForm ôm co giãn nhưng vẫn tạo cảm giác thoải mái khi \r\nmặc, chất liệu 97% jeans cotton ,3% spandex, cao cấp, \r\nmềm mại co giãn và thấm hút mồ hôi tốt\r\n\r\nForm quần ôm skinny, tôn dáng', 275000, 350000, 23, '51.jpg'),
(52, 2, 3, 'Quần Jean Xanh', 'Thiết kế năm túi cổ điển theo phong cách vintage\r\n\r\nMàu xanh đậm phổ biến và dễ phối đồ\r\n\r\nChất vải mềm, thun giãn tốt thân thiện với làn da\r\n\r\nĐường may đẹp, cẩn thận với thiết kế chú trọng vào \r\nsự thoải mái', 429000, 580000, 53, '52.jpg'),
(53, 2, 1, 'Chân Váy Nhún Bèo', 'Chân váy dài ngắn 1 bên chân nhún bèo\r\n\r\nChất liệu mềm mại, thoáng mát\r\n\r\nThiết kế cơ bản dễ phối đồ', 250000, 400000, 43, '53.jpg'),
(54, 2, 1, 'Chân Váy Ainosofia', 'Kiểu váy bút chì ôm tạo đường cong cơ thể\r\n\r\nChất liệu polyester co giãn\r\n\r\nLưng liền, cài bằng dây khóa kéo bên hông\r\n\r\nThích hợp diện với áo sơ mi, áo kiểu,...', 550000, 700000, 54, '54.jpg'),
(55, 2, 1, 'Váy Lanh Xước Vicci', 'Chất liệu vải mềm mại, co giãn tốt\r\n\r\nMàu sắc nữ tính\r\n\r\nĐường may tỉ mỉ, chắc chắn.\r\n\r\nForm dáng rộng thoải mái khi mặc', 179000, 329000, 24, '55.jpg'),
(56, 2, 1, 'Váy Đen Huyền Bí', 'Chất liệu thun thoáng mát\r\n\r\nĐường may chắc chắn\r\n\r\nVới thiết kế đơn giản và sang trọng', 125000, 169000, 5, '56.jpg'),
(57, 2, 1, 'Chân Váy Jean', 'Chất liệu: Jean, bền đẹp, tạo cảm giác thoải mái cho \r\nngười mặc\r\n\r\nMàu sắc: Xanh\r\n\r\nKiểu dáng: Chân váy ôm trên gối, 2 túi 2 bên và 2 túi sau, \r\nxước rách cách điệu như hình', 195000, 300000, 13, '57.jpg'),
(58, 1, 2, 'Áo Thun Xám nhạt', 'Form slim ôm vừa gọn gàng, trẻ trung, tay dài thanh lịch\r\n\r\nSản phẩm may từ vải thun cao cấp\r\n\r\nBạn có thể kết hợp cùng quần tây, jeans, kaki cho phong \r\ncách thời trang đa dạng', 119000, 200000, 23, '58.jpg'),
(59, 1, 2, 'Áo Thun Xanh Rêu', 'Chất liệu cotton mềm mại\r\n\r\nCổ tròn và tay ngắn năng động\r\n\r\nKiểu dáng khỏe khoắn, mạnh mẽ\r\n\r\nThiết kế cơ bản dễ phối đồ', 89000, 175000, 12, '59.jpg'),
(60, 1, 2, 'Áo Thun Polo Cam', 'Thiết kế đơn giản với cổ bẻ xẻ trụ\r\n\r\nKiểu dáng năng động, khỏe khoắn, sành điệu\r\n\r\nChất liệu thun mềm mại, thông thoáng, co giãn tối ưu\r\n\r\nMàu sắc tươi mới trẻ trung, dễ dàng phối đồ\r\n\r\nPhù hợp với hầu hết các buổi đi chơi, đi làm', 400000, 600000, 21, '60.jpg'),
(61, 1, 2, 'Samsung Đen', 'Chất liệu cotton mềm mại\r\n\r\nCổ tròn và tay ngắn năng động\r\n\r\nKiểu dáng khỏe khoắn, mạnh mẽ\r\n\r\nThiết kế cơ bản dễ phối đồ', 149000, 159000, 32, '61.jpg'),
(62, 2, 2, 'Áo Thun Japanese', 'Thiết kế đơn giản, trẻ trung\r\n\r\nĐường may tỉ mỉ, chắc chắn\r\n\r\nPhong cách đường phố năng động', 145000, 199000, 23, '62.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idu` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idu`, `fname`, `lname`, `address`, `city`, `email`, `password`, `type`) VALUES
(1, 'Nam', 'Dang', 'Ung Hoa', 'Ha Noi', 'phuongnam@phoenix.com', 'adminnam', 'admin'),
(2, 'Sang', 'Pham', 'Ha Dong', 'Ha Noi', 'quangsang@phoenix.com', 'adminsang', 'user'),
(3, 'Truong', 'Nguyen', 'Ha Dong', 'Ha Noi', 'nguyentruong@phoenix.com', 'admintruong', 'user'),
(4, 'Cuong', 'Nguyen', 'Ha Dong', 'Ha Noi', 'nguyencuong@phoenix.com', 'admincuong', 'user'),
(5, 'Bao', 'Nguyen', 'Ha Dong', 'Ha Noi', 'nguyenbao@phoenix.com', 'adminbao', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ido`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idu`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ido` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idp` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
