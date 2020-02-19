-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 26, 2019 lúc 11:32 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demophp2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `price_order` float NOT NULL,
  `status` bit(1) NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `telephone`, `created_at`, `price_order`, `status`, `note`) VALUES
(60, 'Dat Tran Dinh', 'trandinhdat120@gmail.com', '0981740120', '2019-02-26 10:39:55', 301000, b'1', 'good'),
(61, 'Dat Tran Dinh', 'trandinhdat120@gmail.com', '0981740120', '2019-02-26 11:18:21', 574000, b'1', '111'),
(62, 'Dat Tran Dinh', 'trandinhdat120@gmail.com', '0981740120', '2019-02-26 11:21:56', 574000, b'1', '111'),
(63, '', '', '', '2019-02-26 11:26:52', 273000, b'1', ''),
(64, '', '', '', '2019-02-26 11:29:18', 273000, b'1', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `sale` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `status`, `product_name`, `price`, `sale`) VALUES
(0, 63, 12, 1, 0, 'BÁNH KEM VANI', 350000, 22),
(0, 64, 12, 1, 0, 'BÁNH KEM VANI', 350000, 22);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `sale` float NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `special` bit(1) NOT NULL,
  `type_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `sale`, `image`, `date`, `detail`, `special`, `type_id`, `quantity`) VALUES
(12, 'BÁNH KEM VANI', 350000, 22, 'banhkemvani.jpg', '1111-11-11', 'Bánh cupcake dễ thương đã trở thành một hiện tượng trong giới trẻ Việt hiện nay. Những chiếc bánh cupcake ngon miệng và vô cùng đẹp mắt đã làm bao trái tim yêu ẩm thực rung động. Cupcake có rất nhiều vị phù hợp với mọi lứa tuổi: bánh cupcake socola, bánh cupcake dâu tây sữa chua, bánh cupcake trà xanh… Ta có thể mua cupcake ở bất kì cửa hàng bánh nào. Hay bây giờ có rất nhiều người tự tay làm cupcake tại nhà để làm bánh sinh nhật tặng người thân và bạn bè. Tuy nhiên có những điều thú vị về cupcake mà không phải ai cũng biết. Hãy cùng nhau tìm hiểu nhé! Đã nhiều lần thưởng thức những chiếc bánh cupcake ngon miệng, dễ thương, liệu bạn đã bao giờ tự hỏi nguồn gốc cupcake là ở đâu? Tên gọi bánh cupcake là gì?', b'0', 0, 110),
(14, 'BÁNH KEM DÂU', 35000, 20, 'banhkemdau.png', '1111-11-11', 'Điểm qua một số mẫu bánh gato sinh nhật dễ thương làm quà tặng độc đáo cho bé cùng GATO nào. Loại bánh gato sinh nhật này ngoài làm quà sinh nhật cho bé, bạn có thể đặt những chiếc birthday cake dễ thương này làm quà sinh nhật cho cả những người “chưa muốn lớn” nữa :) Bánh sinh nhật loại này không chỉ đẹp mà ăn còn rất ngon! Quà sinh nhật cho gia đình – ngoài birthday cake – còn có hoa sinh nhật rất phổ biến. Bạn nghĩ sao nếu kết hợp 2 món quà tặng sinh nhật đó lại nhỉ? Chắc chắn là vừa tiết kiệm, món quà sinh nhật lại độc đáo không thể chê rồi! Happy birthday cake cổ điển – chocolate cake phủ hoa và trang trí đơn giản với tên người nhận – món quà sinh nhật cho anh trai', b'0', 0, 23),
(15, 'Mứt kem', 30000, 20, 'mutkem.png', '1111-11-11', 'Trứng được ăn hàng ngày. Nó có mặt khắp nơi, từ các nhà hàng sang trọng cho đến những hàng ăn bình dân hay tại nhà. Trứng đúc khoai tây, ăn nguội hay để lạnh là món phổ biến. Khách hàng lựa chọn 1 trong 5 mẫu Cupcake xinh xắn tại Afamily Cake (cụ thể hình ảnh và tên từng loại xem chi tiết), 1 set bao gồm 8 chiếc bánh xinh xắn (khách hàng chọn tối thiểu là 4 chiếc/ 1 mẫu - 1 set tối đa được chọn 2 mẫu bánh).', b'0', 0, 110),
(16, 'CUPCAKE VANI', 50000, 22, 'cupcakevani.jpg', '1111-11-11', 'Bánh cupcake dễ thương đã trở thành một hiện tượng trong giới trẻ Việt hiện nay. Những chiếc bánh cupcake ngon miệng và vô cùng đẹp mắt đã làm bao trái tim yêu ẩm thực rung động. Cupcake có rất nhiều vị phù hợp với mọi lứa tuổi: bánh cupcake socola, bánh cupcake dâu tây sữa chua, bánh cupcake trà xanh… Ta có thể mua cupcake ở bất kì cửa hàng bánh nào. Hay bây giờ có rất nhiều người tự tay làm cupcake tại nhà để làm bánh sinh nhật tặng người thân và bạn bè. Tuy nhiên có những điều thú vị về cupcake mà không phải ai cũng biết. Hãy cùng nhau tìm hiểu nhé! Đã nhiều lần thưởng thức những chiếc bánh cupcake ngon miệng, dễ thương, liệu bạn đã bao giờ tự hỏi nguồn gốc cupcake là ở đâu? Tên gọi bánh cupcake là gì?', b'0', 0, 110),
(17, 'CUPCAKE BẠC HÀ', 300000, 10, 'cupcakebacha.png', '1111-11-11', 'Bánh cupcake dễ thương đã trở thành một hiện tượng trong giới trẻ Việt hiện nay. Những chiếc bánh cupcake ngon miệng và vô cùng đẹp mắt đã làm bao trái tim yêu ẩm thực rung động. Cupcake có rất nhiều vị phù hợp với mọi lứa tuổi: bánh cupcake socola, bánh cupcake dâu tây sữa chua, bánh cupcake trà xanh… Ta có thể mua cupcake ở bất kì cửa hàng bánh nào. Hay bây giờ có rất nhiều người tự tay làm cupcake tại nhà để làm bánh sinh nhật tặng người thân và bạn bè. Tuy nhiên có những điều thú vị về cupcake mà không phải ai cũng biết. Hãy cùng nhau tìm hiểu nhé!', b'0', 0, 110),
(18, 'CAKE WEET', 35000, 22, 'cakeweet.png', '1111-11-11', 'Hoa sinh nhật 2 trong một với cupcake – một chiếc happy birthday cake tuyệt vời để tặng quà sinh nhật cho bạn gái nhỉ?Một chút sáng tạo, cộng với sự giúp đỡ của… bánh quế và kem phủ, bạn đã có ngay cupcake giày cao gót làm quà sinh nhật bạn gái. Con gái không thể chê một món quà sinh nhật tâm lý và tuyệt vời thế này từ bạn trai của mình đâu.Hôm nay dọn tủ bếp thấy có cơ man nào là hạt khô: nho khô, cranberry khô, hạt óc chó, hạt điều, hạt dẻ cười, đậu phộng,… Ôi sao mà nhiều thế! Lần trước có khách đến mang ra nhấm nháp với bia mà sao vẫn chưa hết nhỉ!? Nhìn hạn sử dụng thì chỉ còn hai tuần nữa, thế là phải chưng dụng làm bánh ngọt để uống trà hoặc là cho vào túi để lúc đói nhấm nháp. Kiểu này lại sắp có cái eo bánh mỳ rồi đây, bởi làm bánh ngọt thì không thể thiếu trứng và bơ ơ ơ ơ……', b'0', 0, 110);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `email`, `avatar`, `fullname`, `role`) VALUES
(1, 'Dateee', '', 'dattdpd02368@fpt.edu.vn', 'iphone-x-256gb-20-400x400.jpg', 'Tran Dinh Dat', b'0'),
(43, 'Dat Tran Dinh', '1234', 'dat@gmail.com', 'banhkemvani.jpg', 'Dat Tran Dinh', b'0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
