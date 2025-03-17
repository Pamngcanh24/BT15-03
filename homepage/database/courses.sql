-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 17, 2025 lúc 04:09 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `edu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `discount_price` decimal(10,2) DEFAULT 0.00,
  `image` varchar(255) DEFAULT NULL,
  `students` int(11) DEFAULT 0,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`id`, `title`, `author`, `duration`, `price`, `discount_price`, `image`, `students`, `description`, `created_at`) VALUES
(1, 'Create An LMS Website With LearnPress', 'DeterminedPottra', '2 Weeks', 39.99, 0.00, 'image/course1.png', 156, 'Learn to build LMS with LearnPress', '2025-03-17 14:22:47'),
(2, 'Design A Website With ThimPress', 'DeterminedPottra', '2 Weeks', 60.00, 49.00, 'image/course2.png', 156, 'Create modern websites with ThimPress', '2025-03-17 14:22:47'),
(3, 'Create An LMS Website', 'DeterminedPottra', '2 Weeks', 99.99, 0.00, 'image/course3.png', 156, 'Step by step LMS website tutorial', '2025-03-17 14:22:47'),
(4, 'Create An LMS Website With LearnPress', 'DeterminedPottra', '5 Weeks', 29.99, 0.00, 'image/course4.png', 256, 'Learn to build LMS with LearnPress', '2025-03-17 15:06:37'),
(5, 'Design A Website With ThimPress', 'DeterminedPottra', '4 Weeks', 60.00, 49.00, 'image/course5.png', 126, 'Create modern websites with ThimPress', '2025-03-17 15:06:37'),
(6, 'Create An LMS Website', 'DeterminedPottra', '3 Weeks', 29.99, 0.00, 'image/course6.png', 166, 'Step by step LMS website tutorial', '2025-03-17 15:06:37');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
