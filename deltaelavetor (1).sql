-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 09:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deltaelavetor`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/about/10-years-of-experience-2024-02-11-03-11-17-4666.png', '2023-11-28 10:39:51', '2024-02-11 01:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `about_translations`
--

CREATE TABLE `about_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_translations`
--

INSERT INTO `about_translations` (`id`, `about_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', '10 Years of experience', 'K.Mix Co. is one of the pioneer companies in concrete,trading and industries in the Kingdom of Saudi Arabia since 2Ol4 with a Head Office located in Yanbu and a branch in Jizan. The newly established ready mix concrete division in Yanbu. The Factory is located in Yanbu industrial city on a lot of 20,000 m2 With two batching plants using state of the an technology, computerized batching plants have highly competent de-livery system with a production capacity of 260 m3/hou', '<p>تقوم الشركة بأعمال التوريد و التركيب و الصيانة لجميع أنواع المصاعد سواء التي تعتمد في أسلوب عملها على ماكينات الجر ذات الجير بوكس أو الهيدروليك بأحدث التقنيات و أجود الخامات</p>\r\n<p>توفر الشركة في جميع أعمالها نظم الامان و الحماية لمستخدمي المصعد وكذلك الحفاظ على مهمات المصعد</p>\r\n<p>تمتلك الشركة فريق عمل متميز و متكامل سواء المهندسين و الفنيين وخدمة العملاء على أعلى مستوى من الخبرة و المهنية حيث تمتد خبرة فريق العمل لأكثر من عشرون عاما في مجال المصاعد</p>\r\n<p>تقوم الشركة بالنيابة عن العميل بانهاء جميع الاعمال المكملة لعملية التركيب من تجهيز بئر المصعد أو انشاء بئر معدني أو خرساني في حالة عدم وجود مكان مخصص للمصعد وبناء غرف الماكينات</p>', NULL, NULL),
(2, 1, 'en', '10 Years of experience', 'K.Mix Co. is one of the pioneer companies in concrete,trading and industries in the Kingdom of Saudi Arabia since 2Ol4 with a Head Office located in Yanbu and a branch in Jizan. The newly established ready mix concrete division in Yanbu. The Factory is located in Yanbu industrial city on a lot of 20,000 m2 With two batching plants using state of the an technology, computerized batching plants have highly competent de-livery system with a production capacity of 260 m3/hou', '<p>The company carries out supply, installation and maintenance work for all types of elevators, whether they rely on gear-box or hydraulic traction machines using the latest technologies and the finest materials.</p>\r\n<p>In all its work, the company provides safety and protection systems for elevator users, as well as maintaining elevator equipment</p>\r\n<p>The company has a distinguished and integrated work team, including engineers, technicians, and customer service at the highest level of experience and professionalism, as the work team&rsquo;s experience extends for more than twenty years in the field of elevators.</p>\r\n<p>The company, on behalf of the client, completes all the work completing the installation process, including preparing the elevator well or constructing a metal or concrete well in the absence of a designated place for the elevator and building machine rooms.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `phone`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '0123456789', '$2y$10$iMdExR5xTIOgc8vgYpi9AeSE9C15Sa/E2ypNfGMtXGSwjVOtF2IDK', 'uploads/admins/admin-2023-12-03-11-37-56-6704.jpg', '2023-11-28 10:39:51', '2023-12-03 09:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/brands/laboriosam-aut-occa-2023-12-07-09-45-18-3189.png', '2023-11-28 10:44:08', '2023-12-07 09:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `brand_translations`
--

CREATE TABLE `brand_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_translations`
--

INSERT INTO `brand_translations` (`id`, `brand_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'Voluptas et perspici', 'Fugit velit volupt', NULL, NULL),
(2, 1, 'en', 'Laboriosam aut occa', 'Temporibus occaecat', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` enum('products','projects') NOT NULL DEFAULT 'products'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `created_at`, `updated_at`, `type`) VALUES
(1, 'uploads/products-cats/elevators-2023-11-29-03-24-18-2446.jpg', '2023-11-28 10:47:31', '2023-11-29 13:24:18', 'products'),
(3, 'uploads/products-cats/door-2023-11-29-03-26-12-5670.png', '2023-11-29 13:26:12', '2023-11-29 13:26:12', 'products'),
(5, NULL, '2024-02-12 12:12:12', '2024-02-12 12:12:12', 'products'),
(6, NULL, '2024-02-12 12:13:04', '2024-02-12 12:13:04', 'projects'),
(8, NULL, '2024-02-12 12:14:55', '2024-02-12 12:14:55', 'projects');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'hollan', 'elevators', NULL, NULL),
(2, 1, 'en', 'hollan', 'elevators', NULL, NULL),
(5, 3, 'ar', 'DOOR', 'DOOR', NULL, NULL),
(6, 3, 'en', 'DOOR', 'DOOR', NULL, NULL),
(9, 5, 'ar', 'Id est impedit et c', 'Voluptatem quo nulla', NULL, NULL),
(10, 5, 'en', 'Ipsa nihil ex alias', 'Reprehenderit molest', NULL, NULL),
(11, 6, 'ar', 'Eaque sint aliquam e', 'Excepturi voluptate', NULL, NULL),
(12, 6, 'en', 'Aut sit quidem et id', 'Nulla et amet molli', NULL, NULL),
(15, 8, 'ar', 'Molestias dolor dele', NULL, NULL, NULL),
(16, 8, 'en', 'Velit est assumenda', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/certifications/1-2024-02-12-12-27-59-3973.png', '2024-02-12 10:27:59', '2024-02-12 10:27:59'),
(2, 'uploads/certifications/2-2024-02-12-12-28-38-4793.png', '2024-02-12 10:28:38', '2024-02-12 10:28:38');

-- --------------------------------------------------------

--
-- Table structure for table `countrs`
--

CREATE TABLE `countrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countrs`
--

INSERT INTO `countrs` (`id`, `image`, `number`, `created_at`, `updated_at`) VALUES
(1, 'uploads/counters/our-customers-2023-12-07-09-05-52-5272.png', '100', '2023-12-01 07:07:46', '2023-12-07 09:05:52'),
(3, 'uploads/counters/our-partners-2023-12-07-09-06-55-9854.png', '50', '2023-12-07 09:06:55', '2023-12-07 09:06:55'),
(4, 'uploads/counters/our-projects-2023-12-07-09-07-51-3352.png', '200', '2023-12-07 09:07:51', '2023-12-07 09:07:51'),
(5, 'uploads/counters/our-services-2023-12-07-09-10-22-6427.png', '150', '2023-12-07 09:10:22', '2023-12-07 09:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `countr_translations`
--

CREATE TABLE `countr_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countr_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countr_translations`
--

INSERT INTO `countr_translations` (`id`, `countr_id`, `locale`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'عملاؤنا', NULL, NULL),
(2, 1, 'en', 'Our customers', NULL, NULL),
(5, 3, 'ar', 'شركاؤنا', NULL, NULL),
(6, 3, 'en', 'Our partners', NULL, NULL),
(7, 4, 'ar', 'مشاريعنا', NULL, NULL),
(8, 4, 'en', 'Our projects', NULL, NULL),
(9, 5, 'ar', 'خدماتنا', NULL, NULL),
(10, 5, 'en', 'Our services', NULL, NULL);

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/features/design-2024-02-11-03-48-50-9972.png', '2023-12-01 06:58:28', '2024-02-11 01:48:50'),
(3, 'uploads/features/aman-2024-02-11-03-55-53-3267.png', '2023-12-07 08:33:40', '2024-02-11 01:55:53'),
(4, 'uploads/features/high-quality-2023-12-07-08-35-51-1596.png', '2023-12-07 08:35:51', '2023-12-07 08:35:51'),
(5, 'uploads/features/periodic-maintenance-2023-12-07-08-58-00-4986.png', '2023-12-07 08:58:00', '2023-12-07 08:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `feature_translations`
--

CREATE TABLE `feature_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_translations`
--

INSERT INTO `feature_translations` (`id`, `feature_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'تصميم', 'كل مصعد هو تحفة فنية استثنائية في دلتا للمصاعد، نصممها بتفانٍ وتميز لتكون النتيجة مصعداً راقياً بكل ما تحمله كلمة الرقي من معنى. الفخامة والأناقة والبساطة كلاً في واحد', NULL, NULL),
(2, 1, 'en', 'design', 'Every elevator is an exceptional masterpiece at Delta Elevators. We design it with dedication and excellence, so that the result is a high-end elevator in all the meanings of the word sophistication. Luxury, elegance and simplicity all in one', NULL, NULL),
(5, 3, 'ar', 'أمان', 'معايير الأمان والسلامة أولويتنا في دلتا للمصاعد، وفي سبيل تحقيقها في مختلف أنواع المصاعد نعتمد مواد عالية الجودة ومواصفات قياسية عالمية تضمن للركاب رحلة تنقل آمنة وسلسة بين الطوابق وتضمن للبضائع والمعدات نقلاً آمناً من طابق إلى آخر بكفاءة عالية.', NULL, NULL),
(6, 4, 'ar', 'جودة عالية', 'تعتمد دلتا للمصاعد معيار الجودة العالية كأهمية قصوى، لذلك كان خيارنا في اعتماد أحدث التقنيات الإيطالية عالية الجودة، مما يمنح منتجاتنا وخدماتنا متانة تدوم بمرور الزمن وأماناً عالياً', NULL, NULL),
(7, 4, 'en', 'High quality', 'Delta Elevators adopts the high quality standard as a matter of utmost importance, so it was our choice to adopt the latest high-quality Italian technology, which gives our products and services durability that lasts over time and high safety.', NULL, NULL),
(8, 5, 'ar', 'صيانة دورية', 'دلتا للمصاعد تحرص دائمًا على تقديم صيانة دورية لمنتجاتها من خلال مهندسيين وفنيين متخصصين في الكشف عن الأعطال وإصلاحها', NULL, NULL),
(9, 5, 'en', 'Periodic maintenance', 'Delta Elevators is always keen to provide periodic maintenance products through technical engineers specialized in uncovering small wonders.', NULL, NULL),
(10, 3, 'en', 'أمان', 'معايير الأمان والسلامة أولويتنا في دلتا للمصاعد، وفي سبيل تحقيقها في مختلف أنواع المصاعد نعتمد مواد عالية الجودة ومواصفات قياسية عالمية تضمن للركاب رحلة تنقل آمنة وسلسة بين الطوابق وتضمن للبضائع والمعدات نقلاً آمناً من طابق إلى آخر بكفاءة عالية.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meta_tag_banners`
--

CREATE TABLE `meta_tag_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) NOT NULL COMMENT 'this column will be enum',
  `title` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `description_en` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meta_tag_banners`
--

INSERT INTO `meta_tag_banners` (`id`, `page`, `title`, `title_en`, `keywords`, `description`, `description_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'products', 'المنتجات', 'Our Products', 'المنتجات  Our Products', 'Vel dignissimos odit', 'Vel illum minus quo', 'uploads/metatags/our-products-2023-12-07-10-18-31-6888.jpg', '2023-11-28 10:49:00', '2023-12-07 10:18:31'),
(2, 'home', 'الصفحة الرئيسية', 'HomePage', 'home , slider', 'يسشيسش', 'يسشيشسيسش', NULL, '2023-11-29 08:12:22', '2023-11-29 08:44:04'),
(3, 'about', 'من نحن', 'About', 'About', 'About', 'About', 'uploads/metatags/about-2024-04-14-05-17-52-5171.jpg', '2023-11-29 18:22:51', '2024-04-14 15:17:52'),
(4, 'contact', 'تواصل معنا الآن', 'Contact Us', 'تواصل معنا الآن  Contact Us', 'يمكنك التواصل معنا من خلال ملء الاستمارة التالية', 'Enim voluptas You can contact us by filling out the following form', 'uploads/metatags/contact-us-2023-12-07-10-26-34-1606.jpg', '2023-11-29 18:44:20', '2023-12-07 10:26:34'),
(5, 'project', 'Our Gallery', 'Our Gallery', 'المشاريع Our Projects', 'Welcome to our gallery page, where you can explore our wide range of high-quality concrete products and ready-mix solutions', 'Welcome to our gallery page, where you can explore our wide range of high-quality concrete products and ready-mix solutions', 'uploads/metatags/our-projects-2023-12-07-10-15-47-4870.jpg', '2023-11-29 19:33:18', '2024-02-12 12:29:05'),
(6, 'service', 'خدماتنا', 'Our Services', 'خدماتنا services', 'Non voluptatibus odi', 'Working on all project phases to ensure nurturing your ideas and needs to a compete, coherence project.', 'uploads/metatags/our-services-2024-02-12-11-20-49-9660.png', '2023-11-30 04:47:24', '2024-04-03 17:44:34');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_27_163450_create_admins_table', 1),
(6, '2023_11_28_005105_create_sliders_table', 1),
(7, '2023_11_28_005122_create_slider_translations_table', 1),
(8, '2023_11_28_005417_create_meta_tag_banners_table', 1),
(9, '2023_11_28_035602_create_abouts_table', 1),
(10, '2023_11_28_035616_create_about_translations_table', 1),
(11, '2023_11_28_045816_create_parteners_table', 1),
(12, '2023_11_28_054923_create_service_categories_table', 1),
(13, '2023_11_28_054933_create_service_category_translations_table', 1),
(14, '2023_11_28_054942_create_services_table', 1),
(15, '2023_11_28_054952_create_service_translations_table', 1),
(16, '2023_11_28_055527_create_service_images_table', 1),
(17, '2023_11_28_114315_create_projects_table', 1),
(18, '2023_11_28_114334_create_project_translations_table', 1),
(19, '2023_11_28_121000_create_brands_table', 1),
(20, '2023_11_28_121019_create_brand_translations_table', 1),
(21, '2023_11_28_121032_create_categories_table', 1),
(22, '2023_11_28_121043_create_category_translations_table', 1),
(23, '2023_11_28_121103_create_products_table', 1),
(24, '2023_11_28_121114_create_product_translations_table', 1),
(25, '2023_11_28_121124_create_product_images_table', 1),
(26, '2023_11_28_130445_create_settings_table', 2),
(27, '2023_11_30_083456_create_countrs_table', 3),
(28, '2023_11_30_083535_create_countr_translations_table', 3),
(29, '2023_11_30_083555_create_features_table', 3),
(30, '2023_11_30_083606_create_feature_translations_table', 3),
(31, '2023_12_03_095804_add_type_column_to_sliders_table', 4),
(32, '2024_02_12_122120_create_certifications_table', 5),
(33, '2024_02_12_124038_create_teams_table', 6),
(35, '2024_02_12_124056_create_team_translations_table', 7),
(36, '2024_02_12_140302_add_type_to_categories_table', 8),
(37, '2024_02_12_141751_add_category_id_to_projects_table', 9),
(39, '2024_02_16_214444_drop_service_category_id_from_services_table', 10),
(40, '2024_04_14_164807_add_title_to_parteners_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `parteners`
--

CREATE TABLE `parteners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parteners`
--

INSERT INTO `parteners` (`id`, `image`, `created_at`, `updated_at`, `title`) VALUES
(2, 'uploads/partener/2-2024-02-12-10-10-35-8582.png', '2023-12-01 09:07:39', '2024-04-14 14:54:04', 'dsadsa'),
(3, 'uploads/partener/3-2024-02-12-10-10-45-4185.png', '2024-02-12 08:10:45', '2024-04-14 14:54:17', 'fdfdsfsdfds');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `category_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(3, 'uploads/products/passenger-elevators-2023-12-07-09-17-21-8648.jpg', 1, 1, '2023-11-28 11:03:59', '2024-02-13 18:57:44'),
(4, 'uploads/products/automatic-doors-2023-12-07-09-24-18-5676.jpg', 1, 1, '2023-12-07 09:24:18', '2024-02-13 18:58:35'),
(5, NULL, 3, NULL, '2024-02-13 19:07:11', '2024-02-13 19:07:11'),
(6, NULL, 5, NULL, '2024-02-13 19:07:40', '2024-02-13 19:07:40'),
(7, NULL, 5, NULL, '2024-02-13 19:08:07', '2024-02-13 19:08:07'),
(8, NULL, 5, NULL, '2024-02-13 19:08:29', '2024-02-13 19:08:29'),
(9, 'uploads/products/modi-perferendis-con-2024-04-14-06-23-27-8611.png', NULL, NULL, '2024-04-14 16:23:27', '2024-04-14 16:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(9, 3, 'uploads/products/images/passenger-elevators-2023-12-07-09-17-21-3080.jpg', '2023-12-07 09:17:21', '2023-12-07 09:17:21'),
(10, 3, 'uploads/products/images/passenger-elevators-2023-12-07-09-17-21-7155.jpg', '2023-12-07 09:17:21', '2023-12-07 09:17:21'),
(11, 3, 'uploads/products/images/passenger-elevators-2023-12-07-09-17-21-2469.jpg', '2023-12-07 09:17:21', '2023-12-07 09:17:21'),
(12, 3, 'uploads/products/images/passenger-elevators-2023-12-07-09-17-21-3427.jpg', '2023-12-07 09:17:21', '2023-12-07 09:17:21'),
(13, 4, 'uploads/products/images/automatic-doors-2023-12-07-09-24-18-1898.jpg', '2023-12-07 09:24:18', '2023-12-07 09:24:18'),
(14, 4, 'uploads/products/images/automatic-doors-2023-12-07-09-24-18-7891.jpg', '2023-12-07 09:24:18', '2023-12-07 09:24:18'),
(15, 4, 'uploads/products/images/automatic-doors-2023-12-07-09-24-18-6565.jpg', '2023-12-07 09:24:18', '2023-12-07 09:24:18'),
(16, 4, 'uploads/products/images/automatic-doors-2023-12-07-09-24-18-5908.jpg', '2023-12-07 09:24:18', '2023-12-07 09:24:18'),
(17, 4, 'uploads/products/images/automatic-doors-2023-12-07-09-24-18-4663.jpg', '2023-12-07 09:24:18', '2023-12-07 09:24:18'),
(18, 9, 'uploads/products/images/modi-perferendis-con-2024-04-14-06-23-27-1736.jpg', '2024-04-14 16:23:27', '2024-04-14 16:23:27'),
(19, 9, 'uploads/products/images/modi-perferendis-con-2024-04-14-06-23-27-2487.jpg', '2024-04-14 16:23:27', '2024-04-14 16:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 9, 'ar', 'Voluptas alias sed l', NULL, '<p>dsadsa</p>', NULL, NULL),
(2, 9, 'en', 'Modi perferendis con', NULL, '<p>dsadsadsa</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'uploads/projects/residential-villa-2023-12-07-09-30-08-8057.jpg', '2023-11-29 13:39:36', '2024-02-12 12:28:07', 6),
(2, 'uploads/projects/dolorem-iste-hic-vol-2023-12-07-09-32-28-9094.jpg', '2023-11-29 13:40:09', '2024-02-12 12:28:15', 8),
(3, 'uploads/projects/image-2024-02-12-02-26-36-5656.png', '2024-02-12 12:26:36', '2024-02-12 12:26:36', 6);

-- --------------------------------------------------------

--
-- Table structure for table `project_translations`
--

CREATE TABLE `project_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_translations`
--

INSERT INTO `project_translations` (`id`, `project_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'فيلا سكنية', NULL, 'فيلا سكنية بمدينة الخبر علي مساحة 650م مكونة من طابقين.', NULL, NULL),
(2, 1, 'en', 'Residential villa', NULL, 'A residential villa in Al-Khobar, on an area of ​​650 square meters, consisting of two floors.', NULL, NULL),
(3, 2, 'ar', 'Ut ab non enim sunt', NULL, 'Laudantium illo ius', NULL, NULL),
(4, 2, 'en', 'Dolorem iste hic vol', NULL, 'Duis nostrud nulla t', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/services/gearbox-elevators-2024-02-12-11-34-35-5749.png', '2023-11-30 04:18:56', '2024-02-12 09:34:36'),
(2, 'uploads/services/panorama-elevators-2023-12-07-09-02-03-2180.jpg', '2023-12-07 09:02:03', '2023-12-07 09:02:03'),
(3, 'uploads/services/hydraulic-elevators-2023-12-07-09-03-46-7399.jpg', '2023-12-07 09:03:46', '2023-12-07 09:03:46'),
(4, 'uploads/services/expedita-veritatis-n-2024-02-16-09-51-07-9468.png', '2024-02-16 19:51:07', '2024-02-16 19:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `service_id`, `locale`, `title`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'مصاعد جيربوكس', 'The service of testing ready-made concrete, such as strength and endurance test, and other quality tests to be\r\nsure of meeting the specific specifications.', '<p>حد انواع المصاعد وتستخدم في بعض الحالات ذات الطبيعة الخاصة بالانشاءات</p>\r\n<p>هي احد انواع المصاعد التي تحتوي على غرفة المحركات&nbsp;<br />هناك المباني التي تحتاج إلى تطبيق المصاعد &nbsp;تحتوي على غرفة للمحرك. لهذا الغرض تم تطوير تكنولوجيا المحركات الآلية حيث يتم وضع المحرك داخل غرفة خاصة به.<br />&nbsp;<br />وتستخدم المصاعد من هذا النوع بكثافة في الابراج و المباني السكنية العالية او على حسب طبيعة المنشأة</p>', NULL, NULL),
(2, 1, 'en', 'gearbox elevators', 'The service of testing ready-made concrete, such as strength and endurance test, and other quality tests to be\r\nsure of meeting the specific specifications.', '<p>Limit the types of elevators and are used in some cases of a special construction nature</p>\r\n<p>It is one of the types of elevators that contain an engine room<br />There are buildings that need to apply elevators containing an engine room. For this purpose, automated motor technology was developed, where the motor is placed inside its own room.<br />&nbsp;<br />Elevators of this type are widely used in towers and high-rise residential buildings, or depending on the nature of the facility</p>', NULL, NULL),
(3, 2, 'ar', 'مصاعد بانوراما', 'يتميز هذا النوعمن المصاعد  بأشكالها وأنواعها والكبينة تتميز بكشف المشهد الخارجي بوضوح من داخل الكبينة\r\n\r\nحيث انها انتشرت في السنين الأخيرة في بعض الاستعمالات الخاصة للمباني التجارية والفنادق', '<p>&nbsp; &nbsp;كعلامات مميزة علي واجهات المباني Glass Tube وهي استخدام مصاعد رؤية زجاجية مكشوفة من الخارج و المتحركة داخل أنبوب زجاجي<br />كما استعملت كمصاعد مكشوفة في الأفنية الداخلية المغطاة للمبنى&nbsp;<br />عند تصميم هذه المصاعد يراعي تقليل الأجزاء الميكانيكية الظاهرة منها بقدر الإمكان بحيث تقتصر علي المجاري الحديدية الجانبية فقط ، وتكون الكابينة كلها من الزجاج لإتاحة الرؤية في كل الاتجاهات ويراعي إخفاء الأجزاء الميكانيكية<br />اللازمة سواء علي الكابينة أو أسفلها بأجزاء مصمتة تأخذ أشكالا متعددة فهي إما نصف كروية أو متعددة الإضلاع أو علي شكل مخروط ناقص.<br />ويمكن تركيب مصاعد بانوراما بطريقتين:</p>\r\n<p>- النظام الأول يمكن تركيبه بغرف الماكينات والتي تحتوي على أحبال الجر.</p>\r\n<p>- النظام الثاني يمكن تركيبه بدون غرف ماكينات بنظام المصاعد الهيدروليكية ويمكن وضع الماكينة بأسفل المصعد بالدور الأرضي والتي تعمل بضخ الزيت إلى البستم المتواجد بأسفل الصاعدة.<br />&nbsp;</p>', NULL, NULL),
(4, 2, 'en', 'Panorama elevators', 'This type of elevator is distinguished by its different shapes and types, and the cabin is characterized by clearly revealing the external scene from inside the cabin\r\n\r\nAs it has spread in recent years in some special uses for commercial buildings and hotels', '<p>As a distinctive sign on the facades of buildings, Glass Tube is the use of glass viewing elevators exposed from the outside and moving inside a glass tube.<br />They were also used as open elevators in the building\'s covered inner courtyards<br />When designing these elevators, care should be taken to reduce the visible mechanical parts as much as possible, so that they are limited to the side iron runners only. The entire cabin should be made of glass to allow visibility in all directions, and care must be taken to hide the mechanical parts.<br />Necessary, whether on the cab or below it, with solid parts that take multiple shapes. They are either hemispherical, polygonal, or in the shape of an incomplete cone.<br />Panorama elevators can be installed in two ways:</p>\r\n<p>The first system can be installed in machine rooms that contain traction ropes.</p>', NULL, NULL),
(5, 3, 'ar', 'مصاعد هيدروليك', 'تتوفر المصاعد الهيدروليكية لتناسب شروط المبنى واحتياجات الاستخدام الخاصة بك\r\nتعتمدالمصاعد الهيدروليكية على وجود مكبس اسفل كابينة المصعد و يوجد اسفله زيت خاص يعمل على رفع و خفض المصعد', '<p>و يتم التحكم فى ارتفاع الزيت و بالتالى ارتفاع الكابينة عن طريق مضخة زيت يتم تشغيلها بواسطة محرك كهربى ( three phase induction motor )</p>\r\n<p>عاده يتم استخدام المصعد الهيدروليكى حتى سرعة 11 م فى الثانية ( سرعة منخفضة بالنسبة لسرعة المصعد المجرور بالحبال الذى نعتاد عليه )</p>\r\n<p>و لتحقيق الفائدة الاقتصادية يجب الا يزيد ارتفاع المصعد عن 255 متر فقط ( ايضا ارتفاع صغير جدا بالنسبة للمصعد المجرور بالحبال الذى يصل الى 20 دور او اكثر )</p>', NULL, NULL),
(6, 3, 'en', 'Hydraulic elevators', 'Hydraulic lifts are available to suit your building conditions and usage needs\r\nHydraulic elevators depend on the presence of a piston at the bottom of the elevator cabin, and underneath there is a special oil that works to raise and lower the elevator.', '<p>The oil height, and consequently the cab height, is controlled by an oil pump operated by an electric motor (three phase induction motor).</p>\r\n<p>The hydraulic elevator is usually used up to a speed of 11 m per second (a low speed compared to the speed of the rope-towed elevator that we are accustomed to).</p>\r\n<p>To achieve economic benefit, the height of the elevator must not exceed 255 meters only (also a very small height for a roped elevator that reaches 20 floors or more).</p>', NULL, NULL),
(7, 4, 'ar', 'Quas sit aliquip re', 'Aut reiciendis elige', NULL, NULL, NULL),
(8, 4, 'en', 'Expedita veritatis n', 'Ipsum maxime minim', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name_ar', 'K-MIX', '2023-11-29 07:27:57', '2024-02-11 00:21:45'),
(2, 'site_name_en', 'K-MIX', '2023-11-29 07:27:57', '2024-02-11 00:21:45'),
(3, 'address_ar', 'عنوان باللغة العربية', '2023-11-29 07:27:57', '2023-11-29 19:04:15'),
(4, 'address_en', 'Illo quidem sit quae', '2023-11-29 07:27:57', '2023-11-29 07:27:57'),
(5, 'short_description_ar', 'Dolore sit consectet', '2023-11-29 07:27:57', '2023-11-29 07:27:57'),
(6, 'short_description_en', 'Aliqua Voluptate ap', '2023-11-29 07:27:57', '2023-11-29 07:27:57'),
(7, 'phone', '01270122393', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(8, 'whatsapp', '201270122393', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(9, 'email_1', 'ramadaba29@gmail.com', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(10, 'email_2', '', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(11, 'facebook_link', 'https://www.facebook.com/profile.php?id=100014484707215', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(12, 'youtube_link', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(13, 'twitter', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(14, 'instagram', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(15, 'snapchat', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(16, 'telegram', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(17, 'linkedin', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(18, 'tiktok', 'https://www.youtube.com/watch?v=FTdnHyrsMgI', '2023-11-29 09:17:37', '2023-11-29 09:17:37'),
(19, 'logo', 'uploads/settings/logo-2024-04-03-07-23-25-1469.png', '2023-11-29 09:17:37', '2024-04-03 17:23:25'),
(20, 'logo_white', 'uploads/settings/logo-white-2024-04-03-07-23-25-7326.png', '2023-11-29 09:17:37', '2024-04-03 17:23:25'),
(21, 'favicon', 'uploads/settings/favicon-2024-04-03-07-23-25-2307.png', '2023-11-29 09:17:37', '2024-04-03 17:23:25'),
(22, 'contact_image', 'uploads/settings/-2023-12-07-10-22-25-2071.jpg', '2023-11-29 19:11:12', '2023-12-07 10:22:25'),
(23, 'company_profile', 'uploads/settings/-2024-02-11-02-21-24-9033.pdf', '2024-02-11 00:20:38', '2024-02-11 00:21:24'),
(24, 'vision_description_ar', '<p>K.Mix will be the first choice in the Kingdom of Saudi Arabia, the Gulf region and an international benchmark for project delivery by value creation. K.Mix will establish, manage and operate a growing and diversified portfolio of excellent businesses K.Mix is Ready-Mix has been built around a set of strategic values. K.Mix adheres to these principles of operation, ensuring consistency in approach and a common foundation for sustaining growth</p>\r\n<p><strong>All of K Mix business activities:</strong></p>\r\n<ol>\r\n<li>Create sustainable competitive advantage, expressed in successful financial performance with contribution to the growth of The Kingdom of Saudi Arabia.</li>\r\n</ol>', '2024-02-12 10:14:05', '2024-02-12 10:14:05'),
(25, 'vision_description_en', '<p>K.Mix will be the first choice in the Kingdom of Saudi Arabia, the Gulf region and an international benchmark for project delivery by value creation. K.Mix will establish, manage and operate a growing and diversified portfolio of excellent businesses K.Mix is Ready-Mix has been built around a set of strategic values. K.Mix adheres to these principles of operation, ensuring consistency in approach and a common foundation for sustaining growth</p>\r\n<p><strong>All of K Mix business activities:</strong></p>\r\n<ol>\r\n<li>Create sustainable competitive advantage, expressed in successful financial performance with contribution to the growth of The Kingdom of Saudi Arabia.</li>\r\n</ol>', '2024-02-12 10:14:05', '2024-02-12 10:20:09'),
(26, 'vision_bg', 'uploads/settings/-2024-02-12-12-14-05-7705.png', '2024-02-12 10:14:05', '2024-02-12 10:14:05'),
(27, 'ifram_map', '<div style=\"width: 100%\"><iframe width=\"100%\" height=\"600\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/maps?width=100%25&height=600&hl=en&q=29.9804626,31.159573+(Tarseya)&t=h&z=17&ie=UTF8&iwloc=B&output=embed\"><a href=\"https://www.gps.ie/\">gps trackers</a></iframe></div>', '2024-02-13 06:01:41', '2024-04-03 17:23:25'),
(28, 'story_description_ar', '<h2><strong>THE STORY</strong></h2>', '2024-04-14 15:25:20', '2024-04-14 15:28:44'),
(29, 'story_description_en', '<h2><strong>THE STORY</strong></h2>', '2024-04-14 15:25:20', '2024-04-14 15:28:44'),
(30, 'culture_description_ar', '<h2><strong>THE CULTURE</strong></h2>', '2024-04-14 15:25:20', '2024-04-14 15:25:20'),
(31, 'culture_description_en', '<h2><strong>THE CULTURE</strong></h2>', '2024-04-14 15:25:21', '2024-04-14 15:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `link`, `created_at`, `updated_at`, `type`) VALUES
(6, 'uploads/sliders/delta-elavetor-2024-04-03-07-38-00-8684.jpg', 1, NULL, '2023-12-07 09:58:03', '2024-04-03 17:38:00', 'image'),
(7, 'uploads/sliders/explore-kmix-ready-mix-concrete-2024-02-11-02-13-28-6623.png', 1, NULL, '2024-02-11 00:13:28', '2024-02-11 00:13:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `slider_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(11, 6, 'ar', 'دلتا للمصاعد', 'شركة دلتا للمصاعد تمتلك الخبرات اللأزمة لتنفيذ \r\n\r\n	كبرى المشاريع الخاصة بالمصاعد بكافة أنواعها', NULL, NULL),
(12, 6, 'en', 'Delta Elavetor', 'Delta Elevators Company has the necessary experience for implementation\r\n\r\nMajor projects for elevators of all types', NULL, NULL),
(13, 7, 'ar', 'Explore K.MIX Ready MIX Concrete', 'division for the latest in concrete technology, including advanced mixers, pumps, and cooling-equipped batch plants', NULL, NULL),
(14, 7, 'en', 'Explore K.MIX Ready MIX Concrete', 'division for the latest in concrete technology, including advanced mixers, pumps, and cooling-equipped batch plants', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'uploads/teams/architects-2024-04-14-05-38-24-3561.jpg', '2024-02-12 11:04:01', '2024-04-14 15:38:24'),
(2, NULL, '2024-02-12 11:04:16', '2024-02-12 11:04:16'),
(3, NULL, '2024-02-12 11:04:23', '2024-02-12 11:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `team_translations`
--

CREATE TABLE `team_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `jop` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_translations`
--

INSERT INTO `team_translations` (`id`, `team_id`, `locale`, `title`, `jop`, `created_at`, `updated_at`) VALUES
(1, 1, 'ar', 'Architects', 'مدير عام', NULL, NULL),
(2, 1, 'en', 'Architects', 'GENERAL MANAGER', NULL, NULL),
(3, 2, 'ar', 'Velit dicta iste dig', 'Id praesentium sint', NULL, NULL),
(4, 2, 'en', 'Reprehenderit deseru', 'Numquam aut exceptur', NULL, NULL),
(5, 3, 'ar', 'Quam porro nisi magn', 'Quam voluptate tempo', NULL, NULL),
(6, 3, 'en', 'Est exercitation ius', 'Cumque voluptas in n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_translations_about_id_foreign` (`about_id`),
  ADD KEY `about_translations_locale_index` (`locale`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand_translations`
--
ALTER TABLE `brand_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_translations_brand_id_foreign` (`brand_id`),
  ADD KEY `brand_translations_locale_index` (`locale`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_translations_category_id_foreign` (`category_id`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countrs`
--
ALTER TABLE `countrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countr_translations`
--
ALTER TABLE `countr_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countr_translations_countr_id_foreign` (`countr_id`),
  ADD KEY `countr_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feature_translations_feature_id_foreign` (`feature_id`),
  ADD KEY `feature_translations_locale_index` (`locale`);

--
-- Indexes for table `meta_tag_banners`
--
ALTER TABLE `meta_tag_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parteners`
--
ALTER TABLE `parteners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_translations_product_id_foreign` (`product_id`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_category_id_foreign` (`category_id`);

--
-- Indexes for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_translations_project_id_foreign` (`project_id`),
  ADD KEY `project_translations_locale_index` (`locale`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_translations_service_id_foreign` (`service_id`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_translations_slider_id_foreign` (`slider_id`),
  ADD KEY `slider_translations_locale_index` (`locale`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_translations_team_id_foreign` (`team_id`),
  ADD KEY `team_translations_locale_index` (`locale`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_translations`
--
ALTER TABLE `about_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand_translations`
--
ALTER TABLE `brand_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countrs`
--
ALTER TABLE `countrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `countr_translations`
--
ALTER TABLE `countr_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feature_translations`
--
ALTER TABLE `feature_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `meta_tag_banners`
--
ALTER TABLE `meta_tag_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `parteners`
--
ALTER TABLE `parteners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_translations`
--
ALTER TABLE `project_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_translations`
--
ALTER TABLE `team_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD CONSTRAINT `about_translations_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `brand_translations`
--
ALTER TABLE `brand_translations`
  ADD CONSTRAINT `brand_translations_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `countr_translations`
--
ALTER TABLE `countr_translations`
  ADD CONSTRAINT `countr_translations_countr_id_foreign` FOREIGN KEY (`countr_id`) REFERENCES `countrs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD CONSTRAINT `feature_translations_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD CONSTRAINT `project_translations_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD CONSTRAINT `team_translations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
