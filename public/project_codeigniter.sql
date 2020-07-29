-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2020 at 06:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carousel_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `carousel_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `carousel_title`, `carousel_slug`, `status`, `carousel_image`, `created_at`, `updated_at`) VALUES
(2, 'Slide Test 1', 'slide-test-1', 0, 'slide-test-1-qYpJJr.png', '2020-04-25 16:21:45', '2020-04-25 16:21:45'),
(3, 'Carousel 2', 'carousel-2', 1, 'carousel-2-MiX7vR.jpg', '2020-04-26 15:02:38', '2020-04-26 15:02:38'),
(4, 'Liên Hệ', 'lien-he', 0, 'lin-h-48jlnD.jpg', '2020-06-29 15:24:00', '2020-06-29 15:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `cate_id` int(10) NOT NULL,
  `cate_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_cate_id` int(10) NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`cate_id`, `cate_name`, `cate_slug`, `parent_cate_id`, `meta_key`, `meta_desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'In Offset', 'in-offset', 0, 'In Offset', 'In Offset', '2020-05-30 04:29:07', '2020-07-23 15:21:28', '2020-07-23 15:00:58'),
(8, 'Blog 22', 'blog', 0, 'Blog', 'Blog', '2020-07-23 15:12:15', '2020-07-23 15:12:15', NULL),
(10, 'thằng con', 'thang-con', 1, 'thằng con', 'thằng con', '2020-07-23 17:19:24', '2020-07-23 17:19:24', NULL),
(11, 'thằng con 2', 'thang-con-2', 1, 'thằng con', 'thằng con', '2020-07-23 17:19:42', '2020-07-23 17:19:42', NULL),
(13, 'bố to rồi', 'bo-to-roi', 14, 'bố to rồi', 'bố to rồi', '2020-07-23 17:19:57', '2020-07-23 17:19:57', NULL),
(14, 'bố to rồi 222', 'bo-to-roi', 0, 'bố to rồi', 'bố to rồi', '2020-07-23 17:19:57', '2020-07-23 17:19:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_20_145405_thp_user', 2),
(4, '2020_03_22_052637_cate', 3),
(5, '2020_03_22_130113_t_h_p_post', 4),
(6, '2020_03_28_190118_table_page', 5),
(7, '2020_04_19_114701_create_permission_tables', 6),
(8, '2014_10_12_100000_create_password_resets_table', 7),
(9, '2020_04_25_203926_create_carousel_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 3),
(2, 'App\\User', 2),
(2, 'App\\User', 8);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` int(10) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_status` tinyint(4) NOT NULL,
  `page_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_title`, `page_slug`, `page_image`, `page_status`, `page_content`, `meta_key`, `meta_desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'Trang Chủ', 'trang-chu', 'trang-chu-1595697060.jpg', 1, '<p>Trang Chủ</p>', 'Trang Chủ', 'Trang Chủ', '2020-04-09 16:49:30', '2020-07-25 17:11:00', NULL),
(24, 'sdfsfdfgdfg', 'sdfsfdfgdfg', 'sdfsf-GFiRLF.jpg', 0, '<p>sdfsf</p>', 'sdf', 'sdf', '2020-04-10 04:06:51', '2020-04-10 04:08:39', NULL),
(25, 'Giới Thiệu', 'gioi-thieu', 'gioi-thieu-1595697022.png', 0, '<p>Hỗ Trợ<br></p>', 'Hỗ Trợ', 'Hỗ Trợ', '2020-07-25 16:56:50', '2020-07-25 17:10:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(2, 'role-create', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(3, 'role-edit', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(4, 'role-delete', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(5, 'post-list', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(6, 'post-create', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(7, 'post-edit', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01'),
(8, 'post-delete', 'web', '2020-04-19 06:43:01', '2020-04-19 06:43:01');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(10) NOT NULL,
  `post_cate_id` int(10) NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_featured` int(4) NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_view` int(10) NOT NULL,
  `meta_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_cate_id`, `post_title`, `post_slug`, `post_intro`, `post_image`, `post_featured`, `post_content`, `post_view`, `meta_key`, `meta_desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, '[Có thể bạn chưa biết] Điều gì xảy ra với cơ thể khi sử dụng heroin?', NULL, '[Có thể bạn chưa biết] Điều gì xảy ra với cơ thể khi sử dụng heroin?', 'c-th-bn-cha-bit-iu-g-xy-ra-vi-c-th-khi-s-dng-heroin-n7OI2N.jpg', 1, '<p>Bạn đ&atilde; biết hết những t&aacute;c hại của&nbsp;<a href=\"https://tinhte.vn/tags/heroin/\">heroin</a>&nbsp;chưa? Heroin được sản xuất v&agrave;o năm 1898 ở Đức v&agrave; được b&aacute;n tr&ecirc;n thị trường như một loại thuốc trị bệnh lao. Ch&uacute;ng chiết suất từ nhựa hoa&nbsp;<a href=\"https://tinhte.vn/tags/anh-tuc/\">anh t&uacute;c</a>, pha th&ecirc;m h&oacute;a chất v&agrave; được tinh chế để trở th&agrave;nh heroin. Thường th&igrave; 0,1g heroin c&oacute; gi&aacute; khoảng 15 - 20 $ Mỹ v&agrave; những kẻ&nbsp;<a href=\"https://tinhte.vn/tags/nghien/\">nghiện</a>&nbsp;phải trả đến 150 - 200 $ mỗi ng&agrave;y mới thỏa m&atilde;n được cơn nghiện của m&igrave;nh.</p>\r\n\r\n<p>Heroin l&agrave; một dẫn xuất của Opioid v&agrave; ước t&iacute;nh c&oacute; khoảng 9,2 triệu người tr&ecirc;n thế giới đang sử dụng ch&uacute;ng. Theo b&aacute;o c&aacute;o ở Mỹ th&igrave; độ tuổi từ 18 đến 25 l&agrave; đối tượng thường sử dụng nhất.<br />\r\n<br />\r\nKhi n&oacute;i đến heroin, mọi người ắt hẳn sẽ nghĩ đến kim ti&ecirc;m, nhưng heroin cũng c&oacute; thể h&uacute;t, điều n&agrave;y c&ograve;n t&ugrave;y thuộc v&agrave;o độ tinh khiết của thuốc cũng như sở th&iacute;ch của người d&ugrave;ng. Nếu ti&ecirc;m, ch&uacute;ng sẽ được ti&ecirc;m v&agrave;o tĩnh mạch hoặc cơ. Hầu như người nghiện thường c&oacute; xu hướng ti&ecirc;m tĩnh mạch v&igrave; thuốc sẽ ph&aacute;t huy t&aacute;c dụng nhanh hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sau khi đưa thuốc v&agrave;o cơ thể, họ sẽ c&oacute; cảm gi&aacute;c hưng phấn tức th&igrave;, miệng bắt đầu kh&ocirc; v&agrave; da ửng đỏ. L&uacute;c n&agrave;y thuốc như gi&uacute;p họ giảm đau v&agrave; bớt căng thẳng, tay ch&acirc;n c&oacute; vẻ nặng nề hơn b&igrave;nh thường. Nhiệt độ cơ thể thường tăng v&agrave; họ sẽ thấy buồn n&ocirc;n. Nhịp tim c&oacute; thể chậm hoặc kh&ocirc;ng đều. N&oacute;i c&aacute;ch kh&aacute;c l&agrave; họ đang rơi v&agrave;o trạng th&aacute;i mất &yacute; thức ho&agrave;n to&agrave;n.<br />\r\n<br />\r\nTuy nhi&ecirc;n đ&acirc;y chỉ l&agrave; những biểu hiện do một lượng nhỏ heroin g&acirc;y ra, mức độ nặng nhẹ c&ograve;n t&ugrave;y thuộc v&agrave;o liều cũng như khả năng chịu đựng của người sử dụng. Nếu sử dụng qu&aacute; liều heroin, thuốc c&oacute; thể g&acirc;y n&atilde;o thiếu m&aacute;u v&agrave; khiến hệ h&ocirc; hấp ngưng hoạt động.<br />\r\n&nbsp;</p>', 6, 'Tuy nhiên đây chỉ là những biểu hiện do một lượng nhỏ heroin gây ra, mức độ nặng nhẹ còn tùy thuộc vào liều cũng như khả năng chịu đựng của người sử dụng. Nếu sử dụng quá liều heroin, thuốc có thể gây não thiếu máu và khiến hệ hô hấp ngưng hoạt động.', 'Tuy nhiên đây chỉ là những biểu hiện do một lượng nhỏ heroin gây ra, mức độ nặng nhẹ còn tùy thuộc vào liều cũng như khả năng chịu đựng của người sử dụng. Nếu sử dụng quá liều heroin, thuốc có thể gây não thiếu máu và khiến hệ hô hấp ngưng hoạt động.', '2020-05-27 15:04:38', '2020-07-26 08:47:36', NULL),
(3, 13, 'bai viet test 2', 'bai-viet-test-2', 'lam gi viet day', 'bai-viet-test-2-ygu9h6.png', 1, '<p>lam gi viet day&nbsp;lam gi viet day</p>', 3, 'lam gi viet day', 'lam gi viet day', '2020-06-03 06:24:05', '2020-06-26 16:20:07', NULL),
(4, 10, 'Chính thức “xóa sổ” dịch vụ đòi nợ thuê', NULL, 'Chiều nay (17/6), Quốc hội biểu quyết thông qua dự án Luật Đầu tư (sửa đổi),', 'chnh-thc-xa-s-dch-v-i-n-thu-sbMiAv.jpg', 1, '<p>Trước khi bấm n&uacute;t biểu quyết, &ocirc;ng Vũ Hồng Thanh - Chủ nhiệm Ủy ban Kinh tế của Quốc hội - đ&atilde; c&oacute; b&aacute;o c&aacute;o tiếp thu, giải tr&igrave;nh, chỉnh l&yacute; dự &aacute;n Luật n&agrave;y.</p>\r\n\r\n<p><em>Về quy định cấm kinh doanh dịch vụ đ&ograve;i nợ</em>, &ocirc;ng Vũ Hồng Thanh th&ocirc;ng tin: Đa số &yacute; kiến đề nghị cấm &ldquo;kinh doanh dịch vụ đ&ograve;i nợ&rdquo;. Một số &yacute; kiến đề nghị kh&ocirc;ng cấm kinh doanh dịch vụ đ&ograve;i nợ m&agrave; thực hiện theo quy định của Luật hiện h&agrave;nh, đồng thời đổi t&ecirc;n l&agrave; &quot;kinh doanh dịch vụ thu hồi nợ&rdquo;.</p>\r\n\r\n<p>&ldquo;Ủy ban Thường vụ Quốc hội đ&atilde; gửi phiếu xin &yacute; kiến đại biểu Quốc hội v&agrave; xin tiếp thu theo đa số &yacute; kiến đại biểu Quốc hội, quy định &ldquo;cấm kinh doanh dịch vụ đ&ograve;i nợ&rdquo; tại điểm h khoản 1 Điều 6&rdquo; - Chủ nhiệm Ủy ban Kinh tế của Quốc hội cho biết.</p>\r\n\r\n<p>Ri&ecirc;ng với quy định n&agrave;y, Quốc hội đ&atilde; lấy &yacute; kiến đại biểu tại hội trường th&ocirc;ng qua việc bấm n&uacute;t biểu quyết. Kết quả, c&aacute;c đại biểu đều t&aacute;n th&agrave;nh với &ldquo;cấm kinh doanh dịch vụ đ&ograve;i nợ&rdquo;.</p>', 6, 'Riêng với quy định này, Quốc hội đã lấy ý kiến đại biểu tại hội trường thông qua việc bấm nút biểu quyết. Kết quả, các đại biểu đều tán thành với “cấm kinh doanh dịch vụ đòi nợ”.', 'Riêng với quy định này, Quốc hội đã lấy ý kiến đại biểu tại hội trường thông qua việc bấm nút biểu quyết. Kết quả, các đại biểu đều tán thành với “cấm kinh doanh dịch vụ đòi nợ”.', '2020-06-17 14:05:34', '2020-07-26 09:07:26', NULL),
(5, 3, '“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam”', NULL, '“Tôi thấy bất ngờ khi người bệnh hoàn toàn tỉnh táo, các bác sĩ của chúng ta đã làm nên điều kỳ diệu. Đây là niềm tự hào của thành phố và ngành y tế cả nước với bạn bè quốc tế”.', 'cu-sng-phi-cng-nhim-covid-19-l-nim-t-ho-ca-vit-nam-iNiqNY.jpg', 0, '<p>Đ&oacute; l&agrave; những ph&aacute;t biểu đầy x&uacute;c động của &ocirc;ng Nguyễn Th&agrave;nh Phong, Chủ tịch UBND TP HCM khi tới thăm nam phi c&ocirc;ng người Anh đang điều trị tại Bệnh viện Chợ Rẫy v&agrave;o chiều 17/6.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/1-1592402130341.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 1\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Chiều 17/6, &ocirc;ng Nguyễn Th&agrave;nh Phong, Chủ tịch UBND TPHCM tới thăm nam phi c&ocirc;ng người Anh đang điều trị tại Bệnh viện Chợ Rẫy</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 2\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/2-1592402130106.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 2\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>&Ocirc;ng Phong cho rằng c&aacute;c b&aacute;c sĩ đ&atilde; l&agrave;m n&ecirc;n điều kỳ diệu</p>\r\n\r\n<p>&ldquo;Ch&uacute;ng t&ocirc;i theo d&otilde;i thường xuy&ecirc;n, li&ecirc;n tục đối với những diễn tiễn sức khỏe của tất cả c&aacute;c ca bệnh nhiễm Covid-19 được điều trị tr&ecirc;n địa b&agrave;n th&agrave;nh phố, trong đ&oacute; đặc biệt quan t&acirc;m đến trường hợp bệnh nh&acirc;n thứ 91 (nam phi c&ocirc;ng người Anh &ndash; PV). Tưởng chừng, sự sống của người bệnh đ&atilde; đi v&agrave;o bế tắc nhưng đến h&ocirc;m nay, t&ocirc;i v&agrave;o thăm th&igrave; thấy rất bất ngờ khi người bệnh ho&agrave;n to&agrave;n tỉnh t&aacute;o&rdquo;, &ocirc;ng Phong n&oacute;i.</p>\r\n\r\n<p>B&aacute;o c&aacute;o chuy&ecirc;n m&ocirc;n về ca bệnh nhiễm Covid thứ 91, BS Trần Thanh Linh, Ph&oacute; trưởng khoa Hồi sức Cấp cứu, Bệnh viện Chợ Rẫy cho biết, sau khi được điều trị sạch virus, người bệnh được chuyển từ Bệnh viện Bệnh Nhiệt Đới sang Bệnh viện Chợ Rẫy trong t&igrave;nh trạng m&ecirc; s&acirc;u với chỉ định gh&eacute;p phổi. Khi tiếp nhận bệnh nh&acirc;n, ngay cả những b&aacute;c sĩ lạc quan nhất cũng kh&ocirc;ng d&aacute;m nghĩ tới cơ hội b&igrave;nh phục cho người bệnh.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 3\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/3-1592402129840.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 3\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>B&aacute;c sĩ Trần Thanh Linh, Ph&oacute; trưởng khoa Hồi sức Cấp cứu, Bệnh viện Chợ Rẫy</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 4\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/4-1592402127792.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 4\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>H&igrave;nh ảnh nh&acirc;n vi&ecirc;n bệnh viện Chợ Rẫy tiếp nhận bệnh nh&acirc;n 91 từ Bệnh viện Bệnh Nhiệt Đới</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 5\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/5-1592402126981.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 5\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Một đội chuyển bệnh chuy&ecirc;n nghiệp được cử đi l&agrave;m nhiệm vụ</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 6\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/6-1592402124716.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 6\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Một nhiệm vụ kh&ocirc;ng hề đơn giản của c&aacute;c y b&aacute;c sĩ</p>\r\n\r\n<p>Tuy nhi&ecirc;n, dưới sự chỉ đạo về mặt chuy&ecirc;n m&ocirc;n của Tiểu ban Điều trị Covid-19 m&agrave; đứng đầu l&agrave; PGS.TS.BS Nguyễn Trường Sơn, Thứ trưởng Bộ Y tế c&aacute;c cuộc hội chẩn chuy&ecirc;n m&ocirc;n trực tuyến to&agrave;n quốc đ&atilde; li&ecirc;n tiếp được tổ chức.</p>\r\n\r\n<p>&ldquo;Mấu chốt th&agrave;nh c&ocirc;ng của ca 91 l&agrave; sự tập trung tr&iacute; tuệ quốc gia, ng&agrave;nh y tế đ&atilde; huy động được mọi đội ngũ, tập trung to&agrave;n lực cho việc cứu chữa. Với kinh nghiệm điều trị cho c&aacute;c ca bệnh nặng, chuy&ecirc;n gia đầu ng&agrave;nh tr&ecirc;n cả nước đ&atilde; hợp sức định hướng cho bệnh viện Chợ Rẫy, từng bước điều trị gi&uacute;p bệnh nh&acirc;n hồi phục. Sắp tới Bệnh viện Chợ Rẫy sẽ c&oacute; cuộc hội chẩn với tiểu ban điều trị, xin &yacute; kiến Bộ Y tế để c&oacute; định hướng chuẩn bị cho phương &aacute;n khi bệnh nh&acirc;n xuất viện&rdquo; &ndash; BS ưu t&uacute; Nguyễn Tri Thức, Gi&aacute;m đốc Bệnh viện Chợ Rẫy cho biết.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 7\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/7-1592402127702.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 7\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>BS ưu t&uacute; Nguyễn Tri Thức, Gi&aacute;m đốc Bệnh viện Chợ Rẫy</p>\r\n\r\n<p>Ph&aacute;t Video</p>\r\n\r\n<p>Gi&aacute;m đốc Bệnh viện Chợ Rẫy kể về qu&aacute; tr&igrave;nh tiếp nhận bệnh</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 8\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/8-1592402129155.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 8\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Mấu chốt th&agrave;nh c&ocirc;ng của ca 91 l&agrave; sự tập trung tr&iacute; tuệ quốc gia, ng&agrave;nh y tế đ&atilde; huy động được mọi đội ngũ, tập trung to&agrave;n lực cho việc cứu chữa</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 9\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/9-1592402126468.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 9\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Với kinh nghiệm điều trị cho c&aacute;c ca bệnh nặng, chuy&ecirc;n gia đầu ng&agrave;nh tr&ecirc;n cả nước đ&atilde; hợp sức định hướng cho bệnh viện Chợ Rẫy, từng bước điều trị gi&uacute;p bệnh nh&acirc;n hồi phục</p>\r\n\r\n<p>GS.TS.BS Nguyễn Tấn Bỉnh, Gi&aacute;m đốc Sở Y tế: &ldquo;Trong ng&agrave;nh y c&oacute; thể xem việc cứu sống bệnh nh&acirc;n 91 l&agrave; sự kỳ diệu. Ở giai đoạn nặng, tưởng như đ&atilde; tuyệt vọng nhưng sự tập trung của c&aacute;c b&aacute;c sĩ đ&atilde; mang đến th&agrave;nh c&ocirc;ng ngo&agrave;i mong đợi. C&aacute;c giải ph&aacute;p hồi sức, kết hợp vật l&yacute; trị liệu được định hướng đ&uacute;ng đ&atilde; gi&uacute;p người bệnh b&igrave;nh phục&hellip; phổi bệnh nh&acirc;n phục hồi 20% rồi 30% v&agrave; đến h&ocirc;m nay, bệnh nh&acirc;n gần như đ&atilde; trở lại với t&igrave;nh trạng của một người b&igrave;nh thường&rdquo;.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 10\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/10-1592402129887.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 10\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>GS.TS.BS Nguyễn Tấn Bỉnh, Gi&aacute;m đốc Sở Y tế TPHCM</p>\r\n\r\n<p>Trao đổi với &ecirc; k&iacute;p b&aacute;c sĩ trực tiếp điều trị v&agrave; l&atilde;nh đạo c&aacute;c bệnh viện c&ugrave;ng l&atilde;nh đạo Sở Y tế, Chủ tịch th&agrave;nh phố Nguyễn Th&agrave;nh Phong b&agrave;y tỏ: &ldquo;L&agrave; l&atilde;nh đạo địa phương, t&ocirc;i thực sự cảm phục đối với c&aacute;c y b&aacute;c sĩ cả về năng lực chuy&ecirc;n m&ocirc;n, tấm l&ograve;ng của người thầy thuốc trong cuộc chiến chống dịch Covid-19. Đ&acirc;y l&agrave; niềm tự h&agrave;o, niềm vui của th&agrave;nh phố trong những chiến thắng ban đầu đẩy l&ugrave;i đại dịch đang diễn ra tr&ecirc;n to&agrave;n cầu&rdquo;.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 11\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/11-1592402130368.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 11\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>&Ocirc;ng Th&agrave;nh Phong chia sẻ: &ldquo;C&aacute;c b&aacute;c sĩ l&agrave; những chiến sĩ dũng cảm, ti&ecirc;n phong, xuất sắc ho&agrave;n th&agrave;nh nhiệm vụ cứu chữa người bệnh, gi&uacute;p Việt Nam ch&uacute;ng ta đạt được th&agrave;nh quả khiến c&aacute;c quốc gia kh&aacute;c phải khen ngợi. C&aacute;c b&aacute;c sĩ từ bệnh viện trung ương đến bệnh viện cơ sở đ&atilde; cộng t&aacute;c rất tốt tr&ecirc;n tinh thần &ldquo;chống dịch như chống giặc&rdquo; mỗi y b&aacute;c sĩ đ&atilde; trở th&agrave;nh chiến sĩ dũng cảm kh&ocirc;ng chỉ giỏi về năng lực chuy&ecirc;n m&ocirc;n m&agrave; c&ograve;n mang cả tấm l&ograve;ng cứu chữa người bệnh&rdquo;.&nbsp;</p>\r\n\r\n<p>Việt Nam đ&atilde; bước đầu chiến thắng dịch Covid-19, tuy nhi&ecirc;n, dịch bệnh đang tiếp tục diễn biến phức tạp, mất kiểm so&aacute;t tại nhiều quốc gia tr&ecirc;n thế giới, nhiều nước dịch đang b&ugrave;ng ph&aacute;t trở lại.&nbsp;</p>\r\n\r\n<p>Trước t&igrave;nh h&igrave;nh tr&ecirc;n, &ocirc;ng Nguyễn Th&agrave;nh Phong cho rằng: &ldquo;L&agrave;n s&oacute;ng sau bao giờ cũng cao hơn l&agrave;n s&oacute;ng trước, điều kiện điều trị bệnh của ch&uacute;ng ta kh&ocirc;ng thể n&agrave;o so được với c&aacute;c quốc gia ti&ecirc;n tiến tr&ecirc;n thế giới. Ch&uacute;ng ta đ&atilde; chủ động ph&ograve;ng chống tốt, c&oacute; được những kết quả thắng lợi bước đầu. Để tiếp tục bảo vệ những th&agrave;nh quả của cuộc chiến chống dịch, mọi cơ sở y tế, mọi người d&acirc;n kh&ocirc;ng n&ecirc;n chủ quan m&agrave; cần tăng cường hợp nữa c&ocirc;ng t&aacute;c chủ động ph&ograve;ng chống, bảo vệ th&agrave;nh quả đ&atilde; đạt được&rdquo;.</p>\r\n\r\n<p><img alt=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 12\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/17/12-1592402130673.jpg\" title=\"“Cứu sống phi công nhiễm Covid-19 là niềm tự hào của Việt Nam” - 12\" /></p>\r\n\r\n<p>Nhấn để ph&oacute;ng to ảnh</p>\r\n\r\n<p>Bệnh viện Bệnh Nhiệt Đới v&agrave; Bệnh viện Chợ Rẫy được nhận bằng khen từ UBND TPHCM</p>\r\n\r\n<p>Ghi nhận những đ&oacute;ng g&oacute;p của Bệnh viện Bệnh Nhiệt Đới v&agrave; Bệnh viện Chợ Rẫy trong cuộc chiến chống dịch Covid-19 n&oacute;i chung v&agrave; trong việc điều trị cho bệnh nh&acirc;n số 91, Chủ tịch UBND TPHCM đ&atilde; k&yacute; quyết định khen tặng v&agrave; thưởng n&oacute;ng cho mỗi bệnh viện số tiền 50 triệu đồng. Theo &ocirc;ng Th&agrave;nh Phong: &ldquo;Đ&acirc;y l&agrave; m&oacute;n qu&agrave; của th&agrave;nh phố, động vi&ecirc;n tinh thần tất c&aacute;c y b&aacute;c sĩ đ&atilde; v&agrave; đang ti&ecirc;n phong trong cuộc chiến đẩy l&ugrave;i dịch Covid-19&rdquo;.&nbsp;</p>', 7, 'Chợ Rẫy trong cuộc chiến chống dịch Covid-19 nói chung và trong việc điều trị cho bệnh nhân số 91, Chủ tịch UBND TPHCM', 'Chợ Rẫy trong cuộc chiến chống dịch Covid-19 nói chung và trong việc điều trị cho bệnh nhân số 91, Chủ tịch UBND TPHCM', '2020-06-17 16:28:56', '2020-06-28 11:18:50', NULL),
(6, 8, 'Thay đổi thông tin trên bản khai', NULL, 'sdfs', '', 0, 'sdf', 0, 'sdf', 'sf', '2020-07-21 15:43:27', '2020-07-21 15:43:27', NULL),
(7, 11, 'bai moi viet de test codeigniter', NULL, 'bai moi', '', 1, 'bai moi', 0, 'bai moi', 'bai moi', '2020-07-21 15:44:34', '2020-07-21 15:44:34', NULL),
(8, 2, 'sdfsf', NULL, 'sdfasdfsd', '', 0, 'fasdfasdfasd', 0, 'fasdfasd', 'asdfasdf', '2020-07-21 15:51:45', '2020-07-21 15:51:45', NULL),
(9, 13, 'fghf', NULL, 'fghf', '', 0, 'fghf', 0, 'fgh', 'fgh', '2020-07-21 15:57:28', '2020-07-21 15:57:28', NULL),
(10, 10, 'tiny 222 mới sửa', NULL, 'tiny', '', 0, '<p>tiny<br></p>', 0, 'tiny', 'tiny', '2020-07-21 15:59:52', '2020-07-25 16:11:07', NULL),
(11, 5, 'Thay đổi thông tin trên bản khai Nhatnang.vn ẩ sdsf', NULL, 'sdfsf', 'thay-djoi-thong-tin-tren-ban-khai-nhatnangvn-a-sdsf-1595347300.jpg', 0, 'sf', 0, 'sdf', 'sdf', '2020-07-21 16:01:40', '2020-07-21 16:01:40', NULL),
(12, 11, 'tiny titny', NULL, 'tiny', 'tiny-1595692791.', 0, '<p>tiny<br></p>', 0, 'tiny', 'tiny', '2020-07-21 16:04:00', '2020-07-25 16:13:16', NULL);
INSERT INTO `post` (`post_id`, `post_cate_id`, `post_title`, `post_slug`, `post_intro`, `post_image`, `post_featured`, `post_content`, `post_view`, `meta_key`, `meta_desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 10, 'test bài viết thuộc blog', NULL, 'test bài viết thuộc blog', 'test-bai-viet-thuoc-blog-1595526760.jpg', 0, '<p>test bài viết thuộc blog</p><p><img src=\"data:image/jpeg;base64,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\" data-filename=\"msi_prestige_14_a10sc_091_prestige_14_i7_10710u_1580474234_1542062.jpg\" style=\"width: 500px;\"><br></p>', 0, 'test bài viết thuộc blog', 'test bài viết thuộc blog', '2020-07-23 17:52:40', '2020-07-23 17:52:40', NULL),
(14, 11, 'tiny tiny tiny', NULL, 'tiny', 'tiny-tiny-tiny-1595693780.jpg', 0, '<p>tiny<br></p>', 0, 'tiny', 'tiny', '2020-07-25 15:25:05', '2020-07-25 16:16:20', NULL),
(15, 8, 'Đà Nẵng xem xét việc giãn cách xã hội phù hợp thực tế', NULL, 'Đà Nẵng xem xét việc giãn cách xã hội phù hợp', 'dja-nang-xem-xet-viec-gian-cach-xa-hoi-phu-hop-thuc-te-1595694186.jpg', 1, '<h1 class=\"dt-news__title\" style=\"margin-bottom: 12px; font-family: &quot;Noto Serif&quot;, serif; font-weight: 600; font-size: 32px; line-height: 40px; color: rgb(22, 22, 22);\">Đà Nẵng xem xét việc giãn cách xã hội phù hợp thực tế</h1>', 0, 'Đà Nẵng xem xét việc giãn cách xã hội phù hợp thực tế', 'Đà Nẵng xem xét việc giãn cách xã hội phù hợp thực tế', '2020-07-25 16:23:06', '2020-07-25 16:23:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2020-04-19 06:45:16', '2020-04-19 06:45:16'),
(2, 'Writer', 'web', '2020-04-19 06:45:16', '2020-04-19 06:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `thp_user`
--

CREATE TABLE `thp_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thp_user`
--

INSERT INTO `thp_user` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Mustang', 'tranhuuphu9x@gmail.com', '$2y$10$cokE8dutbuhe.QNc40z0A.3JwOZvJJ.b4rU0KR5AwB5ykHdanExwS', 'JF2Uz6gPd1Bpul33u8erJTHApikUeNIUt1GhavE4r0IpQcyZXlFnopQr7F7l', '2020-03-30 15:22:44', '2020-06-24 17:23:59'),
(3, 'Manager', 'admin@gmail.com', '$2y$10$TlXJD0egkyXye756DLOMku9f5/irD5M0pOf9LTwvi9vbB2UEO.mI6', 'jgE5R4NGpQutlp4Mze3ymUj9AG07fG0EWWhPstmeo79XGdX2heTrYr2Jcb4K', '2020-04-19 06:45:16', '2020-06-24 17:26:39'),
(8, 'Huu Phu', 'phuth.site@gmail.com', '$2y$10$QbmchbC6X895wyA8hK9kFeNFeMwPzMEwVpyphlFJYb682Xg0vLH12', NULL, '2020-06-24 16:30:31', '2020-06-24 16:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'a', 'admin@gmail.com', NULL, '$2y$10$zr6rimIAaDj4GUaX4sA2PuQ/mfH9hdyXK6Aio5R0M0lTRsaDnmz9C', NULL, '2020-07-20 13:03:50', '2020-07-20 13:03:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `thp_user`
--
ALTER TABLE `thp_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `cate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thp_user`
--
ALTER TABLE `thp_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
