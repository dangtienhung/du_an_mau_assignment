-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2022 lúc 05:20 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `assignment_du_an_mau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin_usename` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_avatar` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_phone` varchar(20) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_usename`, `admin_password`, `admin_avatar`, `admin_email`, `admin_phone`, `level`) VALUES
(3, 'đặng tiến hưng', '25f9e794323b453885f5181f1b624d0b', NULL, 'hungdang02042003@gmail.com', '0946937769', 0),
(4, 'admin hưng', '25f9e794323b453885f5181f1b624d0b', NULL, 'hungdtph23624@fpt.edu.vn', '0123456789', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `comment_desc` varchar(255) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id_comment`, `id_customer`, `id_product`, `comment_desc`, `comment_date`) VALUES
(1, 53, 11, 'The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the ', '2022-10-17 16:42:46'),
(6, 17, 11, 'hungdang02042003@gmail.com', '2022-10-18 02:40:17'),
(17, 17, 10, 'sản phẩm rất là xấu ạ!', '2022-10-20 02:57:09'),
(18, 17, 10, 'không còn sản phẩm nào đẹp hơn ạ!\r\n', '2022-10-20 02:57:33'),
(19, 17, 10, 'sản phẩm xấu vãi \r\nmọi người không nên mua ạ!', '2022-10-20 02:58:07'),
(27, 17, 14, 'làm chức năng chỉnh sửa lại sản phẩm', '2022-10-20 07:37:06'),
(28, 17, 14, 'hihi âsdfga', '2022-10-20 07:38:56'),
(35, 17, 17, 'đặng tiến hưng ahihi', '2022-10-20 08:21:27'),
(38, 17, 12, 'abc', '2022-10-21 01:28:10'),
(40, 17, 15, 'abc', '2022-10-21 01:43:57'),
(41, 17, 11, 'đặng tiến hưng cmt ngày 22 đây ahhihi ngày 11 tháng 7\r\n', '2022-11-07 12:59:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cus`
--

CREATE TABLE `cus` (
  `id_customer` int(11) NOT NULL,
  `customers_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_password` varchar(30) NOT NULL,
  `customer_avatar` varchar(255) DEFAULT NULL,
  `date_register` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `active` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cus`
--

INSERT INTO `cus` (`id_customer`, `customers_name`, `customer_email`, `customer_password`, `customer_avatar`, `date_register`, `active`) VALUES
(17, 'đặng hưng tiến', 'hungdang02042003@gmail.com.vn', '12345678', '1666290119.jpg', '2022-10-20 18:21:59', 0),
(48, 'cô giáo hưng', 'hungdtph23624@fpt.edu.vn', '123456', '1666108166.jpg', '2022-10-18 15:49:26', 0),
(53, 'cô giáo hưng', 'pnk29703@gmail.com', '123456', '1666108176.jpg', '2022-10-18 15:49:36', 0),
(69, 'JohnDoe', 'ktphuong@hcmuns.edu.vn', '1234', '1666233886.jpg', '2022-10-20 02:44:46', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `sale` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `received_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_product_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `price`, `sale`, `image`, `description`, `received_date`, `id_product_category`) VALUES
(10, 'Hollister Easy Plaid Shirt', 450, 0, '1664641827.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\n\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\n\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-11 14:17:58', 10),
(11, 'Boyfriend Easy Plaid Shirt', 25, 2, '1664876482.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\r\n\r\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\r\n\r\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-04 09:41:22', 10),
(12, 'Zara BASIC DENIM SHIRT', 21, 0, '1664876548.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\r\n\r\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\r\n\r\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-04 09:42:28', 10),
(13, 'Zara BASIC STRAPPY TOP', 30, 0, '1664876606.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\r\n\r\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\r\n\r\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-04 09:43:26', 10),
(14, 'Zara BOMBER JACKET', 56, 0, '1664877322.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\r\n\r\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\r\n\r\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-04 09:55:22', 10),
(15, 'Zara CHECK SHIRT', 45, 0, '1664878356.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\r\n\r\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\r\n\r\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-04 10:12:36', 10),
(16, 'Zara CROPPED SHIRT', 25, 0, '1664878766.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\r\n\r\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\r\n\r\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-04 10:21:01', 10),
(17, 'Zara ELASTICITY JEGGINGS', 25, 0, '1664878882.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\r\n\r\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\r\n\r\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-04 10:21:22', 10),
(18, 'Zara CIGARETTE JEANS', 666, 0, '1665331132.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes. So, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics. It will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-09 15:58:52', 3),
(20, 'Zara OVERSIZED PARKA', 367, 0, '1665362378.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes. So, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics. It will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-10 00:39:38', 3),
(21, 'Zara SHIRT White Navy', 666, 0, '1665497888.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\r\n\r\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\r\n\r\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-11 14:18:08', 3),
(22, 'Zara OVERSIZED SHIRT', 456, 0, '1665497930.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\r\n\r\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\r\n\r\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one.', '2022-10-11 14:18:50', 3),
(27, 'Zara WATER REPELLENT JACKET', 456, 0, '1665847897.webp', 'Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies. Obviously there is nothing wrong about it because fashion satisfies our willingness to be attractive. And also fashion is the detector of prosperity and social rank. So, our natural desire to wear fashionable clothes has many reasons such as historical, social and others. Therefore being fashionable costs a lot of money. But nowadays fashion is not such unavailable as it was a couple of centuries ago. We are lucky to have an opportunity to buy qualitative, fashionable and affordable clothes.\r\n\r\nSo, with the great pleasure we are offering you our goods, and we are sure that only our choices of garments will suit you best. Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility. And it is good for you because as we all know people change their claims with the course of time, and our good will be actual for a long time. The main reason of buying our clothes is the unique combination of fair price, extraordinary style and perfect quality. Here you can find garments of all sizes, colors, styles and fabrics.\r\n\r\nIt will suit you best of all. Because we all live in the time of total consuming of uncountable goods and services, and this has become the main reason for the rapid growth of a so-called culture of consumption in our society. So, this circumstance forced all leading successful companies to explore all needs and wishes of different groups of potential clients very deeply. And that is why we are offering you the result of great market and technological research – our magnificent product. Our employees put in great efforts to make this commodity. Our good was made up by best experts with the help of most advanced technologies, and it gives us right to consider this product to be a premium one', '2022-10-15 15:31:37', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name_product_categories` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `name_product_categories`, `description`) VALUES
(3, 'Hoodies - Sweats', 'Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility.'),
(4, 'Sweats Coats & Jackets', 'Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility.'),
(10, 'T-Shirts & Vests', 'Our product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility.'),
(11, 'Jumpers & Cardigans', '	\r\nOur product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility.'),
(12, 'Jeans', '	\r\nOur product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility.'),
(13, 'Shirts', '	\r\nOur product is universal because it suits different customers with different demands. We assure you it is really important, it shows that our good has such capacity as flexibility.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Chỉ mục cho bảng `cus`
--
ALTER TABLE `cus`
  ADD PRIMARY KEY (`id_customer`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_product_category` (`id_product_category`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `cus`
--
ALTER TABLE `cus`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `cus` (`id_customer`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `cus` (`id_customer`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_product_category`) REFERENCES `product_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
