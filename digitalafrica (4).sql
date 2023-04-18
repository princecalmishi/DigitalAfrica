-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 12:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalafrica`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body`, `category`, `image`, `created_at`, `updated_at`) VALUES
(1, '5 Reasons – why small business needs mobile application', '5 Reasons – why small business needs mobile application\r\nAffordable Mobile Applications Development Company - Sinon Tech\r\nAs emerging of Cell phones era, mobile phones become a vital for any individual. Now a days, smart phones are coming with the all the latest features like high resolution cameras, HD video playing etc. Mobile phone becomes a very powerful tool for small business also. One cannot neglect mobile phone while planning marketing strategies for business whether it is small business or big business giants. Tremendous growth in use of social media like facebook, instagram, pinterest through mobile phones influence all the traditional marketing plans for any business.  Now digital media become vital part of marketing strategy and businesses need for their own mobile application development for their business.\r\n\r\nBelow are the main reasons why any small business needs mobile application development.\r\n\r\nGrowth in using smart phones:\r\nCertainly today’s era is mobile phones era. One cannot neglect effect of mobile phone in individual life. Mobile phone becomes vital part of peoples’ life style. Today’s mobile phones come with the mobile application which runs into mobile phones. Mobile applications are the tools from which user can connect to internet and other platforms of the Internet. We can find so many types of mobile applications like – game application, ecommerce application, business related application, messengers, video players, social networks and so many. Anyone can develop its own mobile application for any purpose or business purpose. Small businesses also need mobile application development to increasing their business.\r\n\r\nMobile Application – Powerful tool to reach customers:\r\nAs everyone now has mobile phones and smart phones, mobile phones become a powerful tool for marketing of any business. By developing a robust mobile application any business can reach their targeted customers in very less efforts. All it needs to have is mobile application for its business. Mobile application is developed in such a way that it provides all the functionality as your website or business. People just have to download and installed your business mobile app into their mobile phones then they can start using services of your business. Customers can easily buy, use a services of your business through mobile application. They can also easily contact your business for any needs.\r\n\r\nFor powerful Branding:\r\nThrough mobile application your brand can be a popular among the people. A better mobile application development creates powerful mobile apps to help the small business to grow. People generally remember businesses through its brands. So, mobile applications help your business brands to become popular. Through branding you can increase awareness of your business in the targeted audience.    \r\n\r\nImportant for Customers Feedback:\r\nThrough mobile application customers actually communicate with your business. They are using your products or services and giving their valuable feedback for your business. If customers’ feedbacks are positive then it is best for your business. Through mobile application your customers easily give their feedback for your products and services. You can know directly from your customers feedback that they are happy with your business or not and this is very important for any business to take customer feedback seriously. According to customers’ positive or negative feedback business should make changes in their policies, products or services to grow their business.\r\n\r\nIncreasing Business Profits:\r\nAs mobile phones actually communicate with your customers, it will increase your profits too. Through best mobile application development your business sure can increase. A small business has to go for robust mobile application development to grow their business. As, We have seen that now mobile applications becomes vital for any small or big businesses, at Sinon tech we are having more than a decade experience of mobile application development. Please contact us to affordable mobile application development.', 'In Android App Development', 'swift-app-development_1678916834.jpg', '2023-03-15 18:47:14', '2023-03-15 18:47:14'),
(2, '10 Things You Never Know About Swift App Development', 'Swift is the fastest in transferring codes into the native codes that gets from the modern hardware. As we know that it also provides various object-oriented features like protocols, generics. Somehow it helps to eliminate the unsafe codes and also never able to do nil to swift objects.\r\n\r\nType safely\r\nSwift app has introduced that optional type which can easily be handled even in the value absence. They force to handle those nil case so that you won’t assume what variables hold.\r\n\r\nStructure codes are totally safe and can easily be read by using the code\r\nSwift app is developed by keeping in mind all the errors, language is strict but in the long run that would help you to save time.\r\n\r\nSwift is incomplete\r\nThe language shown isn’t a final product, they are still working on it and add up new features to the product. Just be familiar with the code of swift app, with the language by using iOS 8 SDK.\r\n\r\nGenerics\r\nSwift app development, while you are typing need to mention the parameters used in the functions. Till you were clear of working in different types and circumstances. Generics can easily be used in different those of variables rewritten. In some case floating point numbers and in other integers are used.\r\n\r\nHandle strings easily\r\nYou can easily deal with the strings of the new language in swift app development. The strings can also be used in various of switch statements.\r\n\r\nStrings can be compare by using += and = used for equal to string\r\nSwift app development make the coding vet much easily and save a lot of time by provides these features in their application.\r\n\r\nTuples Offer compound variables\r\nIn this, you can easily group up multiple elements into one single compound variable. Values can differ in a swift tuple can be of any type and there is no need to do the same type of each other.\r\n\r\nTuple can be of any permutation such as Int, Int or int string.\r\nYou can also decompose tuples into variables and constants.\r\n\r\nOffer type inference\r\nSwift app development helps you to save time by not using annotating variables with the mistakes, type information and also the smart optimization you can easily run the codes much faster.\r\n\r\nExperiments with swift code in playgrounds\r\nSwift development provides the most interactive environment feature known as playground. Somehow it helps to see the additions to the type codes or the changes. Even without going through the time-consuming process of executing it.\r\n\r\nIt also provides you a feature to see what variable are typed, name in a separate line code and the current value visible in the sidebar\r\nA quick look allows you to see the graphical display, strings, display images\r\nOpen source\r\nThe swift app provides you with a full transparent look of what all is coming in future\r\n\r\nThe team of the drift provided the entire history just to remind you of the intention that from which year they are working on that particular feature. \r\n\r\nSwift documentation\r\nSwift development helps you to understand everything in simple English, they are able to work in an effective way and provides all the necessary information to their user', 'In Android App Development', 'swift-app-development_1678916881.jpg', '2023-03-15 18:48:01', '2023-03-15 18:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Android App Development', '2023-03-15 18:45:05', '2023-03-15 18:45:05'),
(2, 'Test cat', '2023-03-20 08:52:14', '2023-03-20 08:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `comp_works`
--

CREATE TABLE `comp_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `pcat` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comp_works`
--

INSERT INTO `comp_works` (`id`, `title`, `pcat`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Cum et molestiae cup', 'In Android App Development', 'Mon, 20 Mar 2023 09_07_56 GMT_1679307337.png', '', '2023-03-20 07:15:37', '2023-03-20 07:15:37'),
(4, 'DigitalWorld', 'Android App Development', 'banner_1679316517.jpg', 'https://digitalworld.co.ke/', '2023-03-20 09:48:37', '2023-03-20 09:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(50) DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `subject`, `phone`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Zeph Mathews', 'Nisi harum dolorem e', '+1 (193) 722-1451', 'buvy@mailinator.com', 'Nulla consectetur pl', 'Pending', '2023-03-07 11:50:41', '2023-03-07 11:50:41'),
(2, 'Mari Wolf', 'Laborum Ea qui assu', '+1 (984) 767-5455', 'qilo@mailinator.com', 'Nobis quod consequat', 'Pending', '2023-03-07 11:51:09', '2023-03-07 11:51:09'),
(3, 'Shay Carver', 'Harum adipisicing of', '+1 (886) 303-5458', 'cyzumet@mailinator.com', 'Saepe ipsam magna qu', 'Pending', '2023-03-07 11:51:54', '2023-03-07 11:51:54'),
(4, 'Hanna Fitzgerald', 'Magna optio velit r', '+1 (855) 373-2737', 'sobyqyt@mailinator.com', 'Nihil similique odit', 'Pending', '2023-03-07 11:52:41', '2023-03-07 11:52:41'),
(5, 'Candace Salas', 'Esse voluptatem il', '+1 (942) 299-8781', 'rusiwuw@mailinator.com', 'Eveniet sunt et qui', 'Pending', '2023-03-07 11:53:26', '2023-03-07 11:53:26'),
(6, 'Jared Moran', 'Ullamco molestiae et', '+1 (692) 519-8815', 'cuduqemebi@mailinator.com', 'Est labore anim min', 'Pending', '2023-03-07 11:57:03', '2023-03-07 11:57:03'),
(7, 'Bertha Frost', 'Hic sit corrupti h', '+1 (801) 496-1135', 'hurivaxuno@mailinator.com', 'Quasi fuga Quia nes', 'Pending', '2023-03-07 11:57:35', '2023-03-07 11:57:35'),
(8, 'Demetria Booker', 'Quas iusto perferend', '+1 (945) 981-4575', 'cahu@mailinator.com', 'Illo mollitia fugiat', 'Pending', '2023-03-07 11:58:24', '2023-03-07 11:58:24'),
(9, 'Amber Ellison', 'Id sed numquam volu', '+1 (477) 881-5508', 'dyjahuxof@mailinator.com', 'Adipisci voluptas ma', 'Pending', '2023-03-16 07:32:15', '2023-03-16 07:32:15'),
(10, 'Karly Berg', 'Enim quo voluptate m', '+1 (889) 767-9528', 'wojyq@mailinator.com', 'Doloribus corporis q', 'Pending', '2023-03-16 07:33:40', '2023-03-16 07:33:40'),
(11, 'Tanek Huffman', 'Eveniet molestias v', '+1 (478) 891-7199', 'dalubez@mailinator.com', 'Illum quae eaque vo', 'Pending', '2023-03-16 07:34:39', '2023-03-16 07:34:39'),
(12, 'Noble Parks', 'Dolore quo dolor ver', '+1 (571) 386-3147', 'gobok@mailinator.com', 'Quis saepe qui aut i', 'Pending', '2023-03-16 07:38:22', '2023-03-16 07:38:22'),
(13, 'Alma Espinoza', 'Quibusdam ducimus q', '+1 (768) 559-5562', 'pyto@mailinator.com', 'Voluptatem culpa ad', 'Pending', '2023-03-16 07:44:26', '2023-03-16 07:44:26'),
(14, 'Hanae Harrison', 'Id temporibus nostru', '+1 (125) 135-2606', 'nuvod@mailinator.com', 'Exercitation ea numq', 'Completed', '2023-03-16 08:18:52', '2023-03-20 10:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `dev_services`
--

CREATE TABLE `dev_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dev_services`
--

INSERT INTO `dev_services` (`id`, `Name`, `Price`, `created_at`, `updated_at`) VALUES
(1, 'Myra Dominguez', '119', '2023-03-17 07:43:35', '2023-03-17 07:43:35'),
(2, 'Hollee Shepard', '460', '2023-03-17 08:18:33', '2023-03-17 08:18:33'),
(3, 'Gemma Hogan', '668', '2023-03-17 08:20:24', '2023-03-17 08:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hiredev_records`
--

CREATE TABLE `hiredev_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `hours` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hiredev_records`
--

INSERT INTO `hiredev_records` (`id`, `name`, `email`, `phone`, `hours`, `service`, `created_at`, `updated_at`) VALUES
(1, 'Lars Reynolds', 'qyci@mailinator.com', '+1 (603) 586-3163', '42', 'Maxime porro pariatu', '2023-03-17 10:26:06', '2023-03-17 10:26:06'),
(2, 'Neve Mcguire', 'sohegu@mailinator.com', '+1 (338) 164-5158', '62', '1', '2023-03-17 10:28:41', '2023-03-17 10:28:41'),
(3, 'Quail Perry', 'muluxe@mailinator.com', '+1 (316) 277-6777', '37', '2', '2023-03-17 10:30:11', '2023-03-17 10:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_07_073836_create_settings_table', 2),
(7, '2023_03_07_143842_create_contacts_table', 3),
(8, '2023_03_15_200223_create_blogs_table', 4),
(9, '2023_03_15_212931_create_categories_table', 5),
(10, '2023_03_17_102908_create_dev_services_table', 6),
(11, '2023_03_17_124919_create_hiredev_records_table', 7),
(12, '2023_03_20_100546_create_comp_works_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appname` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `contactemail` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `appname`, `phone1`, `phone2`, `logo`, `contactemail`, `facebook`, `twitter`, `instagram`, `pinterest`, `skype`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Digital World', '0715203024', '4052556919', 'logo_1679318118.jpeg', 'atdmin@gmail.com', 'zavaj@mailinator.com', 'felogeg@mailinator.com', 'gavala@mailinator.com', 'vape@mailinator.com', 'fuqihesa@mailinator.com', '20200 Nairobi', '2023-03-07 08:49:12', '2023-03-20 10:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ishmael Kiptanui', 'atdigitalafrica@gmail.com', 'Admin', NULL, '$2y$10$1BGNjAja1PJI3AKySVjjRuSI7WCIZ4ZHSY4uCy/lX5z1gyaEYjwJy', NULL, '2023-03-07 07:58:21', '2023-03-07 07:58:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comp_works`
--
ALTER TABLE `comp_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dev_services`
--
ALTER TABLE `dev_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hiredev_records`
--
ALTER TABLE `hiredev_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comp_works`
--
ALTER TABLE `comp_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dev_services`
--
ALTER TABLE `dev_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hiredev_records`
--
ALTER TABLE `hiredev_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
