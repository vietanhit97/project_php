
CREATE DATABASE `demo1` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use demo1 ;
CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'customer',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `password`, `phone`, `address`, `role`, `created_at`, `last_login`) VALUES
(1, 'vietanh', 'adim@gmail.com', '123456', '032565441', 'Hà Nội', 'admin', '2022-03-20 12:57:45', '2022-03-20 12:57:45'),
(2, 'hoang anh', 'customer@gmail.com', '123456', '32141213', 'hải phòng', 'customer', '2022-03-25 14:38:06', '2022-03-25 14:38:06'),
(3, 'nam', 'nam@gmail.com', '123456', '', '', 'customer', '2022-03-27 13:43:12', '2022-03-27 13:43:12'),
(10, 'vittt', 'adim12312@gmail.com', '123456', '014513215312', NULL, 'admin', '2022-03-28 15:14:18', '2022-03-28 15:14:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(12, 'Mỹ Phẩm', 2),
(13, 'Trang Điểm', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favourite`
--

CREATE TABLE `favourite` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(120) COLLATE utf8_unicode_ci DEFAULT '0',
  `address` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oders`
--

INSERT INTO `oders` (`id`, `name`, `email`, `phone`, `address`, `account_id`, `status`, `created_at`) VALUES
(4, 'hoang anh', 'customer@gmail.com', '32141213', 'hải phòng', 2, 0, '2022-03-26 07:55:54'),
(5, 'hoang anh', 'customer@gmail.com', '32141213', 'hải phòng', 2, 0, '2022-03-26 07:56:59'),
(6, 'hoang anh', 'customer@gmail.com', '32141213', 'hải phòng', 2, 0, '2022-03-27 12:53:51'),
(7, 'nam', 'nam@gmail.com', '', '', 3, 0, '2022-03-28 10:38:53'),
(8, 'nam', 'nam@gmail.com', '', '', 3, 0, '2022-03-28 10:41:55'),
(9, 'hoang anh', 'customer@gmail.com', '32141213', 'hải phòng', 2, 0, '2022-03-28 14:36:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders_detail`
--

CREATE TABLE `oders_detail` (
  `product_id` int(11) NOT NULL,
  `oders_id` int(11) NOT NULL,
  `quantity` tinyint(4) NOT NULL,
  `price` float NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oders_detail`
--

INSERT INTO `oders_detail` (`product_id`, `oders_id`, `quantity`, `price`, `status`, `created_at`) VALUES
(13, 4, 1, 888888, 0, '2022-03-26 07:55:54'),
(13, 5, 1, 888888, 0, '2022-03-26 07:56:59'),
(17, 5, 3, 250000, 0, '2022-03-26 07:56:59'),
(21, 5, 1, 230000, 0, '2022-03-26 07:56:59'),
(12, 6, 1, 2312310, 0, '2022-03-27 12:53:51'),
(13, 7, 1, 888888, 0, '2022-03-28 10:38:54'),
(11, 8, 1, 80000, 0, '2022-03-28 10:41:55'),
(14, 9, 2, 189000, 0, '2022-03-28 14:36:46'),
(22, 9, 1, 50000, 0, '2022-03-28 14:36:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `sale_price` float DEFAULT 0,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `sale_price`, `image`, `category_id`, `status`, `description`, `created_at`) VALUES
(11, 'White Shave Brush', 100000, 80000, 'product-1.png', 12, 2, '', '2022-03-21 13:52:59'),
(12, '  White Shave Brush 1', 2312310, 0, 'product-15.png', 12, 2, '', '2022-03-22 09:34:36'),
(13, 'White Shave Brush 2   ', 1000000, 888888, 'product-4.png', 13, 1, '', '2022-03-24 12:39:55'),
(14, 'White Shave Brush 3', 200000, 189000, 'product-5.png', 13, 1, '', '2022-03-24 12:40:53'),
(15, 'White Shave Brush 4 ', 250000, 0, 'product-10.png', 12, 1, '', '2022-03-24 12:41:29'),
(16, 'White Shave Brush 5', 500000, 399000, 'product-12.webp', 13, 2, '', '2022-03-24 12:41:58'),
(17, 'White Shave Brush 5      ', 300000, 250000, 'product-3.png', 13, 1, '', '2022-03-24 12:42:36'),
(18, 'White Shave Brush 6', 550000, 499999, 'product-7.png', 12, 1, '', '2022-03-24 12:44:12'),
(19, 'White Shave Brush 8', 600000, 0, 'product-18 (1).png', 12, 1, '', '2022-03-24 12:45:40'),
(20, 'White Shave Brush 9', 150000, 100000, 'product-13.png', 12, 2, '', '2022-03-24 12:47:04'),
(21, 'White Shave Brush 101', 230000, 0, 'product-6.png', 12, 1, '', '2022-03-24 12:48:24'),
(22, 'White Shave Brush 9', 50000, 0, 'product-14.png', 13, 1, '', '2022-03-24 12:49:18');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `favourite`
--
ALTER TABLE `favourite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `oders_detail`
--
ALTER TABLE `oders_detail`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `oders_id` (`oders_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `favourite`
--
ALTER TABLE `favourite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `favourite`
--
ALTER TABLE `favourite`
  ADD CONSTRAINT `favourite_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `favourite_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `oders`
--
ALTER TABLE `oders`
  ADD CONSTRAINT `oders_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`);

--
-- Các ràng buộc cho bảng `oders_detail`
--
ALTER TABLE `oders_detail`
  ADD CONSTRAINT `oders_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `oders_detail_ibfk_2` FOREIGN KEY (`oders_id`) REFERENCES `oders` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

