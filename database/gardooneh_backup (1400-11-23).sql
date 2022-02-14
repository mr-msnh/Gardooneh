-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 02:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gardooneh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ad_banners`
--

CREATE TABLE `tbl_ad_banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ad_banners`
--

INSERT INTO `tbl_ad_banners` (`id`, `title`, `image`, `alt`, `url`, `active`) VALUES
(1, 'بنر تبلیغ اول', 'images/banners/banner1.jpg', 'بنر تبلیغ اول', '#', 1),
(2, 'بنر تبلیغ دوم', 'images/banners/banner2.jpg', 'بنر تبلیغ دوم', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_slider`
--

CREATE TABLE `tbl_main_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_main_slider`
--

INSERT INTO `tbl_main_slider` (`id`, `title`, `image`, `alt`, `url`, `active`) VALUES
(1, 'اسلاید اول', 'images/slides/slide1.jpg', 'اسلاید اول', '#', 1),
(2, 'اسلاید دوم', 'images/slides/slide2.jpg', 'اسلاید دوم', '#', 1),
(3, 'اسلاید سوم', 'images/slides/slide3.jpg', 'اسلاید سوم', '#', 1),
(4, 'اسلاید چهارم', 'images/slides/slide4.jpg', 'اسلاید چهارم', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_config`
--

CREATE TABLE `tbl_page_config` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `css` varchar(255) NOT NULL,
  `js` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_page_config`
--

INSERT INTO `tbl_page_config` (`id`, `name`, `title`, `url`, `css`, `js`, `status`) VALUES
(1, 'home', 'فروشگاه اینترنتی گردونه', 'home/', 'css/home.css', 'javascript/home.js', 1),
(2, 'errors', 'صفحه یافت نشد', 'errors/', 'css/erros.css', 'javascript/errors.css', 1),
(3, 'product', 'صفحه محصول', 'product/', 'css/product.css', 'javascript/product.js', 1),
(4, 'search', 'جستجو محصولات', 'search/', 'css/search.css', 'javascript/search.js', 1),
(5, 'login', 'ورود / ثبت‌نام', 'login/', 'css/login.css', 'javascript/login.js', 1),
(6, 'pannel', 'پنل کاربری', 'pannel/', 'css/pannel.css', 'javascript/pannel.js', 1),
(7, 'orders', 'جزییات سفارش', 'orders/', 'css/orders.css', 'javascript/orders.js', 1),
(8, 'card', 'سبد خرید', 'card/', 'css/card.css', 'javascript/card.js', 1),
(9, 'weblog', 'پست‌ها', 'weblog/', 'css/weblog.css', 'javascript/weblog.js', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `price` int(11) UNSIGNED NOT NULL,
  `price_off` int(11) UNSIGNED DEFAULT NULL,
  `percent_off` tinyint(4) UNSIGNED DEFAULT NULL,
  `timer_off` time DEFAULT NULL,
  `cover_image` varchar(255) NOT NULL,
  `star` float NOT NULL,
  `total_view` int(11) NOT NULL,
  `total_sale` int(11) NOT NULL,
  `inventory` int(11) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `category_id`, `subcategory_id`, `vendor_id`, `brand`, `detail`, `price`, `price_off`, `percent_off`, `timer_off`, `cover_image`, `star`, `total_view`, `total_sale`, `inventory`, `created_date`, `active`) VALUES
(1, 'پک دمنوش', 1, 1, 1, 'دمنوش', 'مجموعه از دمنوش‌های گیاهی و محلی برای مصارف پزشکی و درمانی،‌ همچنین آرام بخشی مفید.', 130000, 100000, 20, '16:08:05', 'images/products/product1.jpeg', 4.2, 10, 4, 25, '2022-02-09', 1),
(2, 'ترشی مخصوص', 1, 2, 2, 'ترشیجات', 'ترشی محلی و فوق‌العاده بی نظیر برای سر سفره شما', 80000, 60000, 15, '13:16:56', 'images/products/product6.jpeg', 3.8, 12, 4, 8, '2022-02-09', 1),
(3, 'جعبه هدیه', 3, 2, 3, 'چوبینجا', 'یک جعبه زیبا برای نگه‌داری هدیه‌هایتان و حمایت از صنایع دستی زیبا خود.', 50000, 30000, 30, '20:19:42', 'images/products/product2.jpeg', 3.9, 15, 12, 8, '2022-02-09', 1),
(4, 'آبمیوه‌گیر', 2, 3, 4, 'سامسونگ', 'یک دستگاه زیبا مخصوص یک آبیموه‌گیری هیجان انگیز، این شما و این دوستان ما در کشور همسایه', 870000, 800000, 12, '06:19:42', 'images/products/product4.jpeg', 0, 38, 17, 26, '2022-02-09', 1),
(5, 'پک دمنوش', 1, 1, 1, 'دمنوش', 'مجموعه از دمنوش‌های گیاهی و محلی برای مصارف پزشکی و درمانی،‌ همچنین آرام بخشی مفید.', 130000, 0, 0, '00:00:00', 'images/products/product1.jpeg', 4.1, 10, 4, 25, '2022-02-09', 1),
(6, 'ترشی مخصوص', 1, 2, 2, 'ترشیجات', 'ترشی محلی و فوق‌العاده بی نظیر برای سر سفره شما', 80000, 0, 0, '00:00:00', 'images/products/product6.jpeg', 2.4, 12, 4, 8, '2022-02-09', 1),
(7, 'جعبه هدیه', 3, 2, 3, 'چوبینجا', 'یک جعبه زیبا برای نگه‌داری هدیه‌هایتان و حمایت از صنایع دستی زیبا خود.', 50000, 0, 0, '00:00:00', 'images/products/product2.jpeg', 3.3, 15, 12, 8, '2022-02-09', 1),
(8, 'آبمیوه‌گیر', 2, 3, 4, 'سامسونگ', 'یک دستگاه زیبا مخصوص یک آبیموه‌گیری هیجان انگیز، این شما و این دوستان ما در کشور همسایه', 870000, 0, 0, '00:00:00', 'images/products/product4.jpeg', 5, 38, 17, 26, '2022-02-09', 1),
(9, 'پک دمنوش', 1, 1, 1, 'دمنوش', 'مجموعه از دمنوش‌های گیاهی و محلی برای مصارف پزشکی و درمانی،‌ همچنین آرام بخشی مفید.', 130000, 100000, 20, '16:08:05', 'images/products/product1.jpeg', 4.2, 10, 4, 25, '2022-02-09', 1),
(10, 'ترشی مخصوص', 1, 2, 2, 'ترشیجات', 'ترشی محلی و فوق‌العاده بی نظیر برای سر سفره شما', 80000, 60000, 15, '13:16:56', 'images/products/product6.jpeg', 1.5, 12, 4, 8, '2022-02-09', 1),
(11, 'جعبه هدیه', 3, 2, 3, 'چوبینجا', 'یک جعبه زیبا برای نگه‌داری هدیه‌هایتان و حمایت از صنایع دستی زیبا خود.', 50000, 30000, 30, '20:19:42', 'images/products/product2.jpeg', 2.6, 15, 12, 8, '2022-02-09', 1),
(12, 'آبمیوه‌گیر', 2, 3, 4, 'سامسونگ', 'یک دستگاه زیبا مخصوص یک آبیموه‌گیری هیجان انگیز، این شما و این دوستان ما در کشور همسایه', 870000, 800000, 12, '06:19:42', 'images/products/product4.jpeg', 5, 38, 17, 26, '2022-02-09', 1),
(13, 'پک دمنوش', 1, 1, 1, 'دمنوش', 'مجموعه از دمنوش‌های گیاهی و محلی برای مصارف پزشکی و درمانی،‌ همچنین آرام بخشی مفید.', 130000, 0, 0, '00:00:00', 'images/products/product1.jpeg', 4.7, 10, 4, 25, '2022-02-09', 1),
(14, 'ترشی مخصوص', 1, 2, 2, 'ترشیجات', 'ترشی محلی و فوق‌العاده بی نظیر برای سر سفره شما', 80000, 0, 0, '00:00:00', 'images/products/product6.jpeg', 3.5, 12, 4, 8, '2022-02-09', 1),
(15, 'جعبه هدیه', 3, 2, 3, 'چوبینجا', 'یک جعبه زیبا برای نگه‌داری هدیه‌هایتان و حمایت از صنایع دستی زیبا خود.', 50000, 0, 0, '00:00:00', 'images/products/product2.jpeg', 3, 15, 12, 8, '2022-02-09', 1),
(16, 'آبمیوه‌گیر', 2, 3, 4, 'سامسونگ', 'یک دستگاه زیبا مخصوص یک آبیموه‌گیری هیجان انگیز، این شما و این دوستان ما در کشور همسایه', 870000, 0, 0, '00:00:00', 'images/products/product4.jpeg', 2.9, 38, 17, 26, '2022-02-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rollbar_tools`
--

CREATE TABLE `tbl_rollbar_tools` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `group_id` tinyint(4) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rollbar_tools`
--

INSERT INTO `tbl_rollbar_tools` (`id`, `title`, `image`, `alt`, `url`, `group_id`, `active`) VALUES
(1, 'هدیه دعوت', 'icons/rollbar_tools/icon1.png', 'هدیه دعوت', '#', 1, 1),
(2, 'تخفیف‌ها', 'icons/rollbar_tools/icon2.png', 'تخفیف‌ها', '#', 1, 1),
(3, 'چرخونه', 'icons/rollbar_tools/icon3.png', 'خرید گروهی', '#', 1, 1),
(4, 'خرید گروهی', 'icons/rollbar_tools/icon4.png', 'هدیه دعوت', '#', 1, 1),
(5, 'بازار به بازار', 'icons/rollbar_tools/icon5.png', 'بازار به بازار', '#', 1, 1),
(6, 'جایزه بازی', 'icons/rollbar_tools/icon6.png', 'جایزه بازی', '#', 1, 1),
(7, 'مواد غذایی', 'icons/rollbar_tools/icon10.png', 'مواد غذایی', '#', 2, 1),
(8, 'لباس و پوشاک', 'icons/rollbar_tools/icon11.png', 'لباس و پوشاک', '#', 2, 1),
(9, 'فرش و تابلو', 'icons/rollbar_tools/icon12.png', 'فرش و تابلو', '#', 2, 1),
(10, 'صنایع دستی', 'icons/rollbar_tools/icon13.png', 'صنایع دستی', '#', 2, 1),
(11, 'عطاری', 'icons/rollbar_tools/icon14.png', 'عطاری', '#', 2, 1),
(12, 'لوازم آرایش', 'icons/rollbar_tools/icon15.png', 'لوازم آرایش', '#', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website_config`
--

CREATE TABLE `tbl_website_config` (
  `id` int(10) UNSIGNED NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `website_domain` varchar(255) NOT NULL,
  `website_owner` varchar(255) NOT NULL,
  `website_logo` varchar(255) NOT NULL,
  `website_favicon` varchar(255) NOT NULL,
  `website_version` varchar(255) NOT NULL,
  `php_version` varchar(255) NOT NULL,
  `database_type` varchar(255) NOT NULL,
  `design_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_website_config`
--

INSERT INTO `tbl_website_config` (`id`, `website_name`, `website_domain`, `website_owner`, `website_logo`, `website_favicon`, `website_version`, `php_version`, `database_type`, `design_by`) VALUES
(1, 'gardooneh', 'gardooneh.ir', 'No Owner', 'images/logo/main_logo.png', 'icons/favicon.png', '1.0', '8.0', 'mysql', 'MSHN (Mohammad Sadegh Nilchi Hesari)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ad_banners`
--
ALTER TABLE `tbl_ad_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_main_slider`
--
ALTER TABLE `tbl_main_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_config`
--
ALTER TABLE `tbl_page_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rollbar_tools`
--
ALTER TABLE `tbl_rollbar_tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_website_config`
--
ALTER TABLE `tbl_website_config`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ad_banners`
--
ALTER TABLE `tbl_ad_banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_main_slider`
--
ALTER TABLE `tbl_main_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_page_config`
--
ALTER TABLE `tbl_page_config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_rollbar_tools`
--
ALTER TABLE `tbl_rollbar_tools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_website_config`
--
ALTER TABLE `tbl_website_config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
