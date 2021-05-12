-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2021 at 02:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '<p><strong>Description</strong></p>', '2021-05-11 20:53:49', '2021-05-11 20:53:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(1, 'created', 2, 'App\\Models\\User', NULL, '{\"name\":\"Rosalyn Higgins\",\"email\":\"kucukis@mailinator.com\",\"updated_at\":\"2021-05-11 22:24:16\",\"created_at\":\"2021-05-11 22:24:16\",\"id\":2,\"profile_picture\":null,\"media\":[]}', '127.0.0.1', '2021-05-11 19:24:17', '2021-05-11 19:24:17'),
(2, 'updated', 2, 'App\\Models\\User', NULL, '{\"name\":\"Rosalyn Higgins\",\"email\":\"kucukis@mailinator.com\",\"updated_at\":\"2021-05-11 22:24:16\",\"created_at\":\"2021-05-11 22:24:16\",\"id\":2,\"verification_token\":\"mgreXJNth65T4xnGLFLQeX6K3DzTsCeu25MrucT7xMUPR4ZHTDG8PF4B5ETJrz96\",\"profile_picture\":null,\"media\":[]}', '127.0.0.1', '2021-05-11 19:24:17', '2021-05-11 19:24:17'),
(3, 'created', 1, 'App\\Models\\Room', 1, '{\"number\":\"F21\",\"status\":\"0\",\"floor_id\":\"1\",\"rent\":\"5000\",\"details\":null,\"updated_at\":\"2021-05-11 22:33:43\",\"created_at\":\"2021-05-11 22:33:43\",\"id\":1}', '127.0.0.1', '2021-05-11 19:33:43', '2021-05-11 19:33:43'),
(4, 'created', 2, 'App\\Models\\Room', 1, '{\"number\":\"F3\",\"status\":\"0\",\"floor_id\":\"2\",\"rent\":\"3500\",\"details\":null,\"updated_at\":\"2021-05-11 22:33:57\",\"created_at\":\"2021-05-11 22:33:57\",\"id\":2}', '127.0.0.1', '2021-05-11 19:33:57', '2021-05-11 19:33:57'),
(5, 'updated', 1, 'App\\Models\\User', 1, '{\"id\":1,\"name\":\"Isaiah Mccall\",\"gender\":\"Male\",\"email\":\"admin@admin.com\",\"email_verified_at\":null,\"verified\":1,\"verified_at\":\"11-05-2021 19:11:35\",\"verification_token\":\"\",\"created_at\":null,\"updated_at\":\"2021-05-11 23:00:12\",\"deleted_at\":null,\"profile_picture\":null,\"media\":[]}', '127.0.0.1', '2021-05-11 20:00:12', '2021-05-11 20:00:12'),
(6, 'created', 3, 'App\\Models\\User', 1, '{\"name\":\"Mark Benson\",\"gender\":\"Male\",\"email\":\"markbenson@gmail.com\",\"updated_at\":\"2021-05-11 23:08:24\",\"created_at\":\"2021-05-11 23:08:24\",\"id\":3,\"profile_picture\":null,\"media\":[]}', '127.0.0.1', '2021-05-11 20:08:24', '2021-05-11 20:08:24'),
(7, 'updated', 3, 'App\\Models\\User', 1, '{\"name\":\"Mark Benson\",\"gender\":\"Male\",\"email\":\"markbenson@gmail.com\",\"updated_at\":\"2021-05-11 23:08:24\",\"created_at\":\"2021-05-11 23:08:24\",\"id\":3,\"verified\":1,\"verified_at\":\"11-05-2021 23:08:24\",\"profile_picture\":null,\"media\":[]}', '127.0.0.1', '2021-05-11 20:08:24', '2021-05-11 20:08:24'),
(8, 'updated', 3, 'App\\Models\\User', 3, '{\"id\":3,\"name\":\"Mark Benson\",\"gender\":\"Male\",\"email\":\"markbenson@gmail.com\",\"email_verified_at\":null,\"verified\":1,\"verified_at\":\"11-05-2021 23:08:24\",\"verification_token\":null,\"created_at\":\"2021-05-11 23:08:24\",\"updated_at\":\"2021-05-11 23:08:24\",\"deleted_at\":null,\"profile_picture\":{\"id\":2,\"model_type\":\"App\\\\Models\\\\User\",\"model_id\":3,\"uuid\":\"35a4867a-fec6-4456-ad80-59de7c45288c\",\"collection_name\":\"profile_picture\",\"name\":\"609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA\",\"file_name\":\"609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":36953,\"manipulations\":[],\"custom_properties\":{\"generated_conversions\":{\"thumb\":true,\"preview\":true}},\"responsive_images\":[],\"order_column\":2,\"created_at\":\"2021-05-11T23:08:24.000000Z\",\"updated_at\":\"2021-05-11T23:08:25.000000Z\",\"url\":\"http:\\/\\/localhost:8000\\/storage\\/2\\/609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA.png\",\"thumbnail\":\"http:\\/\\/localhost:8000\\/storage\\/2\\/conversions\\/609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA-thumb.jpg\",\"preview\":\"http:\\/\\/localhost:8000\\/storage\\/2\\/conversions\\/609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA-preview.jpg\"},\"media\":[{\"id\":2,\"model_type\":\"App\\\\Models\\\\User\",\"model_id\":3,\"uuid\":\"35a4867a-fec6-4456-ad80-59de7c45288c\",\"collection_name\":\"profile_picture\",\"name\":\"609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA\",\"file_name\":\"609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA.png\",\"mime_type\":\"image\\/png\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":36953,\"manipulations\":[],\"custom_properties\":{\"generated_conversions\":{\"thumb\":true,\"preview\":true}},\"responsive_images\":[],\"order_column\":2,\"created_at\":\"2021-05-11T23:08:24.000000Z\",\"updated_at\":\"2021-05-11T23:08:25.000000Z\",\"url\":\"http:\\/\\/localhost:8000\\/storage\\/2\\/609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA.png\",\"thumbnail\":\"http:\\/\\/localhost:8000\\/storage\\/2\\/conversions\\/609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA-thumb.jpg\",\"preview\":\"http:\\/\\/localhost:8000\\/storage\\/2\\/conversions\\/609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA-preview.jpg\"}]}', '127.0.0.1', '2021-05-11 20:08:34', '2021-05-11 20:08:34'),
(9, 'updated', 1, 'App\\Models\\Room', 1, '{\"id\":1,\"number\":\"F21\",\"status\":\"0\",\"rent\":\"5000.00\",\"details\":\"Details\",\"created_at\":\"2021-05-11 22:33:43\",\"updated_at\":\"2021-05-11 23:16:51\",\"deleted_at\":null,\"floor_id\":\"1\",\"created_by_id\":\"1\"}', '127.0.0.1', '2021-05-11 20:16:51', '2021-05-11 20:16:51'),
(10, 'created', 3, 'App\\Models\\Room', 1, '{\"created_by_id\":\"1\",\"number\":\"Alea Foster\",\"floor_id\":\"2\",\"rent\":\"82\",\"details\":\"Reprehenderit fugit\",\"updated_at\":\"2021-05-11 23:20:19\",\"created_at\":\"2021-05-11 23:20:19\",\"id\":3}', '127.0.0.1', '2021-05-11 20:20:19', '2021-05-11 20:20:19'),
(11, 'created', 4, 'App\\Models\\Room', 1, '{\"created_by_id\":\"1\",\"number\":\"Beatrice Pratt\",\"status\":\"1\",\"floor_id\":\"2\",\"rent\":\"22\",\"details\":\"Excepteur ut ipsum\",\"updated_at\":\"2021-05-11 23:22:44\",\"created_at\":\"2021-05-11 23:22:44\",\"id\":4}', '127.0.0.1', '2021-05-11 20:22:44', '2021-05-11 20:22:44'),
(12, 'created', 5, 'App\\Models\\Room', 1, '{\"created_by_id\":\"1\",\"number\":\"Lionel Marsh\",\"status\":\"0\",\"floor_id\":\"2\",\"rent\":\"12\",\"details\":\"Sit harum earum qui\",\"updated_at\":\"2021-05-11 23:22:57\",\"created_at\":\"2021-05-11 23:22:57\",\"id\":5}', '127.0.0.1', '2021-05-11 20:22:57', '2021-05-11 20:22:57'),
(13, 'created', 1, 'App\\Models\\Complaint', 1, '{\"created_by_id\":\"1\",\"complaint_title\":\"Maji Kukosa\",\"complaint_content\":\"Kindly check on the water supply\",\"updated_at\":\"2021-05-11 23:34:50\",\"created_at\":\"2021-05-11 23:34:50\",\"id\":1,\"files_videos\":[],\"media\":[]}', '127.0.0.1', '2021-05-11 20:34:50', '2021-05-11 20:34:50'),
(14, 'deleted', 1, 'App\\Models\\Complaint', 1, '{\"id\":1,\"complaint_title\":\"Maji Kukosa\",\"complaint_content\":\"Kindly check on the water supply\",\"created_at\":\"2021-05-11 23:34:50\",\"updated_at\":\"2021-05-11 23:42:29\",\"deleted_at\":\"2021-05-11 23:42:29\",\"created_by_id\":1,\"files_videos\":[{\"id\":5,\"model_type\":\"App\\\\Models\\\\Complaint\",\"model_id\":1,\"uuid\":\"160008c8-17f1-4d4b-bc01-7c509aeb6a6a\",\"collection_name\":\"files_videos\",\"name\":\"609b149684a0c_blog-793047_1920\",\"file_name\":\"609b149684a0c_blog-793047_1920.jpg\",\"mime_type\":\"image\\/jpeg\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":561841,\"manipulations\":[],\"custom_properties\":{\"generated_conversions\":{\"thumb\":true,\"preview\":true}},\"responsive_images\":[],\"order_column\":5,\"created_at\":\"2021-05-11T23:34:50.000000Z\",\"updated_at\":\"2021-05-11T23:34:50.000000Z\"},{\"id\":6,\"model_type\":\"App\\\\Models\\\\Complaint\",\"model_id\":1,\"uuid\":\"a9cd892f-7ae4-4302-b59d-a2f6a4da679f\",\"collection_name\":\"files_videos\",\"name\":\"609b149694e39_img143\",\"file_name\":\"609b149694e39_img143.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":691120,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":6,\"created_at\":\"2021-05-11T23:34:50.000000Z\",\"updated_at\":\"2021-05-11T23:34:50.000000Z\"}],\"media\":[{\"id\":5,\"model_type\":\"App\\\\Models\\\\Complaint\",\"model_id\":1,\"uuid\":\"160008c8-17f1-4d4b-bc01-7c509aeb6a6a\",\"collection_name\":\"files_videos\",\"name\":\"609b149684a0c_blog-793047_1920\",\"file_name\":\"609b149684a0c_blog-793047_1920.jpg\",\"mime_type\":\"image\\/jpeg\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":561841,\"manipulations\":[],\"custom_properties\":{\"generated_conversions\":{\"thumb\":true,\"preview\":true}},\"responsive_images\":[],\"order_column\":5,\"created_at\":\"2021-05-11T23:34:50.000000Z\",\"updated_at\":\"2021-05-11T23:34:50.000000Z\"},{\"id\":6,\"model_type\":\"App\\\\Models\\\\Complaint\",\"model_id\":1,\"uuid\":\"a9cd892f-7ae4-4302-b59d-a2f6a4da679f\",\"collection_name\":\"files_videos\",\"name\":\"609b149694e39_img143\",\"file_name\":\"609b149694e39_img143.pdf\",\"mime_type\":\"application\\/pdf\",\"disk\":\"public\",\"conversions_disk\":\"public\",\"size\":691120,\"manipulations\":[],\"custom_properties\":[],\"responsive_images\":[],\"order_column\":6,\"created_at\":\"2021-05-11T23:34:50.000000Z\",\"updated_at\":\"2021-05-11T23:34:50.000000Z\"}]}', '127.0.0.1', '2021-05-11 20:42:29', '2021-05-11 20:42:29'),
(15, 'created', 2, 'App\\Models\\Complaint', 1, '{\"created_by_id\":\"1\",\"complaint_title\":\"Maji Kukosa\",\"complaint_content\":\"Check on Water Wastage\",\"updated_at\":\"2021-05-11 23:43:40\",\"created_at\":\"2021-05-11 23:43:40\",\"id\":2,\"files_videos\":[],\"media\":[]}', '127.0.0.1', '2021-05-11 20:43:41', '2021-05-11 20:43:41'),
(16, 'created', 1, 'App\\Models\\AboutUs', 1, '{\"description\":\"<h2><strong>What is a Company Profile Template?<\\/strong><\\/h2><p>A company profile template is a marketing tool that showcases your brand\\u2019s products, services, and activities. A powerful <strong>company profile template presentation<\\/strong> should be more than just a brochure. It vibrantly showcases your business and engages with stakeholders about your company\\u2019s offerings and unique qualities.<\\/p><p>Most small businesses don\'t spend time building a company profile template... until they need it. While these profiles are sometimes designed as one-pager documents or even infographics, we continue to defend that the slide presentation format is probably the best.<\\/p><p>The challenge with one-pagers and infographics is that once built, adding or removing information is complicated. With a presentation, on the other hand, you can add, or hide slides to be able to tailor the company to whoever is receiving it.<\\/p><p><i>Related article: <\\/i><a href=\\\"https:\\/\\/slidebean.com\\/blog\\/startups-what-is-a-company-profile-template\\\"><i>what is a company profile template?<\\/i><\\/a><\\/p><h3>How to write a Company Profile Template<\\/h3><p>You need to create a killer profile for your business that doesn\\u2019t bore your audience. An effective one is a combination of stunning design and engaging content. Starting a new business is all about costs, costs, and costs. Does this mean you have to hire a graphic designer to make one? It can be a solution, but this is also what our <a href=\\\"https:\\/\\/slidebean.com\\/templates\\/company-profile-template\\\"><strong>company profile templates<\\/strong><\\/a> are for.<\\/p><h3><strong>Uses for a Company Profile Template<\\/strong><\\/h3><p>When we initially designed these slides, we called them \'Public Company Intro Template,\' since they were meant to be a sort of public investor deck that the companies could embed on their websites (we still think that\'s a good idea, BTW).<\\/p><p>Depending on the kind of website your company has, a company intro in presentation form might be a good way to get people engaged in what to do.<\\/p><p><a href=\\\"http:\\/\\/help.slidebean.com\\/sharing\\/embedding-your-presentation\\\">All Slidebean presentations are embeddable<\\/a>, all you need is a code snippet, and the frame will automatically adapt to the width of your site and the device where it\'s been loaded.<\\/p><p>Still, we\'ve revamped the deck to be more fitting for a short company profile that could be shared as a standalone presentation, or included as an introduction to a sales pitch or a consulting proposal.<\\/p><p>These standalone presentations can be shared as an intro to a potential client, included in your website contact form or your email autoresponder. They can also be appended to your email signature or used for social media marketing. .<\\/p><p>Finally, if you set your privacy settings to Public, the slides may be indexed by Google and other search engines, providing yet another result for your Search Engine Optimization efforts (back in 2016,<a href=\\\"https:\\/\\/slidebean.com\\/blog\\/marketing\\/content-marketing-the-real-cost\\\"> we invested about $70,000 in SEO and so far, have made over $500,000 in revenue just from those campaigns<\\/a>).<\\/p><h4>Why You Need a Company Profile<\\/h4><ul><li>It creates an opportunity for collaborations. Your profile acts like a dossier that highlights the philosophy and roadmap of your business. Stakeholders can decide from it if you are the right fit and possess the same business ethics that aligns with their own goals.<\\/li><li>An effective profile can raise capital, win investors, differentiate you from your competitors, and persuade clients. All of which ultimately leads to your business growth.<\\/li><li>It creates your brand identity through storytelling. You can share your brand story, company culture, strengths, and achievements through this simple presentation.<\\/li><li>With the right positioning and segmentation, your company profile complements your brand promotion and sales strategy.<\\/li><li>It is a complementary and dynamic brand awareness tool that can help you create new business relationships and penetrate new markets.<\\/li><\\/ul><h4>Compelling Content that Engages<\\/h4><p>Since our company profile templates have been designed to accommodate all the essential info you need to create an effective impression, all you have to do is inject your business stats and info. Yet many company profiles just get thrown in with the rest of the pile when deemed a snooze fest.<\\/p><p>What exactly makes a company profile boring? Long wordy texts of vision and mission statements on top of dense tables and long product descriptions fit the bill.<\\/p><h3><strong>The Company Profile slides<\\/strong><\\/h3><p>These are the slides you need to include in your company profile template:<\\/p><h4><strong>1- Cover<\\/strong><\\/h4><p><strong>\\u200d<\\/strong>Keep it simple, choose the best company image you can find. If you don\'t have one, try using our<a href=\\\"http:\\/\\/help.slidebean.com\\/design-editor\\/images-icons-and-gifs\\\"> Flickr and Unsplash integrations<\\/a> to find one that relates to your business.<\\/p><h4><strong>2- Basic Numbers<\\/strong><\\/h4><p><strong>\\u200d<\\/strong>We used founding year, customers served and monthly active users as examples, but the idea here is to find some metrics, accomplishments or awards that you can brag about.<\\/p><h4><strong>3- Mission and Vision<\\/strong><\\/h4><p><strong>\\u200d<\\/strong>We\'ve exchanged the traditional mission\\/vision statements for our concept of company culture (vision-less), but understand all the reasons why these have to be there.<\\/p><h4><strong>4- Team<\\/strong><\\/h4><p><strong>\\u200d<\\/strong>Talk about your core team, or at least, the part that is relevant to whomever you are sharing this document with. Try to keep it to 2-4 people, and add the shortest possible summary about them.<\\/p><h4><strong>5- Services<\\/strong><\\/h4><p><strong>\\u200d<\\/strong>This is a kind of \'what we do\' slide which again, might not apply to every single context. If you are using this presentation for a business proposal, you may want to mention other services or products your company has, as a way to bring some context into the pitch.<\\/p><h4><strong>6- Clients<\\/strong><\\/h4><p><strong>\\u200d<\\/strong>There is no better proof than social proof. This slide is your chance to brag about your most nameworthy customers and some of the projects you\'ve developed with them.<\\/p><h4><strong>7- Projects<\\/strong><\\/h4><p><strong>\\u200d<\\/strong>As an extension of the Clients slide, bring in some highlight projects\\/products that you\'ve developed. Get a star, hero image for each one of them and add a small brief of what your company did.<\\/p><h4><strong>8- Quotes<\\/strong><\\/h4><p><strong>\\u200d<\\/strong>Again, social proof is really valuable for these presentations. If you have quotes from press or reviews from relevant people, this is where they belong.<\\/p><h4><strong>9- Contact information<\\/strong><\\/h4><p><strong>\\u200d<\\/strong>Website, email and social. Not much to add here.<\\/p><h4><strong>Create your company profile today!<\\/strong><\\/h4><p>We hope, this summary of what a company profile template is, had helped you to get a better idea of what you need to work on your company profile. Just remember to keep it updated with any additions or changes you need. Our Slidebean template saves you time while creating your presentation.<\\/p><figure class=\\\"media\\\"><oembed url=\\\"https:\\/\\/www.youtube.com\\/embed\\/s9IHYN535Lk?autoplay=1\\\"><\\/oembed><\\/figure><p><br>&nbsp;<\\/p>\",\"updated_at\":\"2021-05-11 23:48:37\",\"created_at\":\"2021-05-11 23:48:37\",\"id\":1}', '127.0.0.1', '2021-05-11 20:48:37', '2021-05-11 20:48:37'),
(17, 'created', 2, 'App\\Models\\AboutUs', 1, '{\"description\":\"<p>sddssd<\\/p>\",\"updated_at\":\"2021-05-11 23:51:17\",\"created_at\":\"2021-05-11 23:51:17\",\"id\":2}', '127.0.0.1', '2021-05-11 20:51:17', '2021-05-11 20:51:17'),
(18, 'created', 1, 'App\\Models\\AboutUs', 1, '{\"description\":\"<p><strong>Description<\\/strong><\\/p>\",\"updated_at\":\"2021-05-11 23:53:49\",\"created_at\":\"2021-05-11 23:53:49\",\"id\":1}', '127.0.0.1', '2021-05-11 20:53:49', '2021-05-11 20:53:49'),
(19, 'created', 1, 'App\\Models\\Payment', 1, '{\"created_by_id\":\"1\",\"tenant_id\":\"1\",\"payment_method\":\"Other\",\"total_amount\":\"7700\",\"total_paid\":\"7300\",\"transactionid\":\"MPESA00232\",\"notes\":\"Ullamco incidunt ut\",\"updated_at\":\"2021-05-12 00:04:12\",\"created_at\":\"2021-05-12 00:04:12\",\"id\":1}', '127.0.0.1', '2021-05-11 21:04:12', '2021-05-11 21:04:12'),
(20, 'created', 2, 'App\\Models\\Payment', 1, '{\"created_by_id\":\"1\",\"tenant_id\":\"2\",\"payment_method\":\"Other\",\"total_amount\":\"740\",\"total_paid\":\"760\",\"transactionid\":\"Provident laudantiu\",\"notes\":\"Sit sequi dignissimo\",\"updated_at\":\"2021-05-12 00:04:30\",\"created_at\":\"2021-05-12 00:04:30\",\"id\":2}', '127.0.0.1', '2021-05-11 21:04:30', '2021-05-11 21:04:30'),
(21, 'created', 1, 'App\\Models\\UserAlert', 1, '{\"created_by_id\":\"1\",\"alert_text\":\"Perspiciatis et aut\",\"alert_link\":\"Inventore occaecat q\",\"updated_at\":\"2021-05-12 00:10:38\",\"created_at\":\"2021-05-12 00:10:38\",\"id\":1}', '127.0.0.1', '2021-05-11 21:10:38', '2021-05-11 21:10:38'),
(22, 'created', 6, 'App\\Models\\Room', 1, '{\"created_by_id\":\"1\",\"number\":\"Madeson Kelley\",\"status\":\"0\",\"floor_id\":\"2\",\"rent\":\"48\",\"details\":\"Temporibus est omnis\",\"updated_at\":\"2021-05-12 00:43:36\",\"created_at\":\"2021-05-12 00:43:36\",\"id\":6}', '127.0.0.1', '2021-05-11 21:43:36', '2021-05-11 21:43:36'),
(23, 'created', 3, 'App\\Models\\Complaint', 3, '{\"created_by_id\":\"3\",\"complaint_title\":\"ewwe\",\"complaint_content\":\"wewe\",\"updated_at\":\"2021-05-12 00:46:05\",\"created_at\":\"2021-05-12 00:46:05\",\"id\":3,\"files_videos\":[],\"media\":[]}', '127.0.0.1', '2021-05-11 21:46:05', '2021-05-11 21:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `complaint_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complaint_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `complaint_title`, `complaint_content`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`) VALUES
(1, 'Maji Kukosa', 'Kindly check on the water supply', '2021-05-11 20:34:50', '2021-05-11 20:42:29', '2021-05-11 20:42:29', 1),
(2, 'Maji Kukosa', 'Check on Water Wastage', '2021-05-11 20:43:40', '2021-05-11 20:43:40', NULL, 1),
(3, 'ewwe', 'wewe', '2021-05-11 21:46:05', '2021-05-11 21:46:05', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`) VALUES
(1, 'Information Technology', 'Description Information Technology', '2021-05-11 21:09:00', '2021-05-11 21:09:00', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense_name`, `category`, `payment_method`, `reference_number`, `amount`, `description`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`) VALUES
(1, 'Kuvunja Wall', 'Cleaning Service', 'Cash', '766aw343ADD', '2700.00', 'Molestiae adipisicin', '2019-09-03 00:07:07', '2021-05-11 21:03:16', NULL, 1),
(2, 'Whilemina Stark', 'Cleaning Service', 'Cash', 'WESDSD56', '383.00', 'Necessitatibus in op', '2021-05-11 21:05:12', '2021-05-11 21:05:31', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Computer Tech', NULL, '2021-05-11 21:09:16', '2021-05-11 21:09:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `floor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT 0,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `floor_name`, `floor_number`, `active`, `description`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`) VALUES
(1, 'First Floor', '1', 1, 'Floor Description', '2021-05-11 19:31:59', '2021-05-11 19:31:59', NULL, 1),
(2, 'Second Floor', '2', 1, 'Second Floor', '2021-05-11 19:33:14', '2021-05-11 19:33:14', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level_name`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`) VALUES
(1, '100', '2021-05-11 21:09:29', '2021-05-11 21:09:29', NULL, 1),
(2, '200', '2021-05-11 21:09:35', '2021-05-11 21:09:35', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, '5a25cf97-2e34-4d3e-8752-fa8cc2eabe21', 'profile_picture', '609b0c78dc67a_1_PiHoomzwh9Plr9_GA26JcA', '609b0c78dc67a_1_PiHoomzwh9Plr9_GA26JcA.png', 'image/png', 'public', 'public', 36953, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 1, '2021-05-11 20:00:12', '2021-05-11 20:00:13'),
(2, 'App\\Models\\User', 3, '35a4867a-fec6-4456-ad80-59de7c45288c', 'profile_picture', '609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA', '609b0e65da96f_1_PiHoomzwh9Plr9_GA26JcA.png', 'image/png', 'public', 'public', 36953, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 2, '2021-05-11 20:08:24', '2021-05-11 20:08:25'),
(3, 'App\\Models\\Tenant', 1, 'bbe9fb07-add4-4587-8503-fd8029a55577', 'tenant_image', '609b0f92ea2c6_1_PiHoomzwh9Plr9_GA26JcA', '609b0f92ea2c6_1_PiHoomzwh9Plr9_GA26JcA.png', 'image/png', 'public', 'public', 36953, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 3, '2021-05-11 20:13:32', '2021-05-11 20:13:32'),
(4, 'App\\Models\\Tenant', 1, 'a98578b3-d13d-4694-b87b-d8797432d13a', 'tenant_id_image', '609b0f984a531_blog-793047_1920', '609b0f984a531_blog-793047_1920.jpg', 'image/jpeg', 'public', 'public', 561841, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 4, '2021-05-11 20:13:32', '2021-05-11 20:13:33'),
(5, 'App\\Models\\Complaint', 1, '160008c8-17f1-4d4b-bc01-7c509aeb6a6a', 'files_videos', '609b149684a0c_blog-793047_1920', '609b149684a0c_blog-793047_1920.jpg', 'image/jpeg', 'public', 'public', 561841, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 5, '2021-05-11 20:34:50', '2021-05-11 20:34:50'),
(6, 'App\\Models\\Complaint', 1, 'a9cd892f-7ae4-4302-b59d-a2f6a4da679f', 'files_videos', '609b149694e39_img143', '609b149694e39_img143.pdf', 'application/pdf', 'public', 'public', 691120, '[]', '[]', '[]', 6, '2021-05-11 20:34:50', '2021-05-11 20:34:50'),
(7, 'App\\Models\\Complaint', 2, '55deae8f-12bc-4745-9ca6-6d2e283c6397', 'files_videos', '609b1699b4928_img-cta', '609b1699b4928_img-cta.png', 'image/png', 'public', 'public', 9496, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 7, '2021-05-11 20:43:41', '2021-05-11 20:43:41'),
(8, 'App\\Models\\Complaint', 2, '50935b8c-7061-4153-a99b-1ae60996a887', 'files_videos', '609b16a041f50_industrial-hall-1630742_1920', '609b16a041f50_industrial-hall-1630742_1920.jpg', 'image/jpeg', 'public', 'public', 786971, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 8, '2021-05-11 20:43:41', '2021-05-11 20:43:42'),
(9, 'App\\Models\\Complaint', 2, 'e3093a9a-67b4-4068-8182-c7591845101b', 'files_videos', '609b16aa8394d_Screencast 2021-01-27 16:08:25', '609b16aa8394d_Screencast-2021-01-27-16:08:25.mp4', 'video/mp4', 'public', 'public', 726990, '[]', '[]', '[]', 9, '2021-05-11 20:43:42', '2021-05-11 20:43:42'),
(10, 'App\\Models\\Expense', 1, 'd1099ef5-a3ad-4a9b-a454-24908f029846', 'expense_receipt', '609b1b4082777_1612173259moneymanagement', '609b1b4082777_1612173259moneymanagement.jpg', 'image/jpeg', 'public', 'public', 1671363, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 10, '2021-05-11 21:03:16', '2021-05-11 21:03:18'),
(11, 'App\\Models\\Expense', 2, '3a25f338-9924-4c51-ba99-b6ec8f25b5e0', 'expense_receipt', '609b1bb642ee0_i-hostel MS', '609b1bb642ee0_i-hostel-MS.pdf', 'application/pdf', 'public', 'public', 18429, '[]', '[]', '[]', 11, '2021-05-11 21:05:12', '2021-05-11 21:05:12'),
(12, 'App\\Models\\Complaint', 3, '3ffa8b5a-46fc-42e6-8b62-83fa26924b47', 'files_videos', '609b254c3e616_1_PiHoomzwh9Plr9_GA26JcA', '609b254c3e616_1_PiHoomzwh9Plr9_GA26JcA.png', 'image/png', 'public', 'public', 36953, '[]', '{\"generated_conversions\":{\"thumb\":true,\"preview\":true}}', '[]', 12, '2021-05-11 21:46:05', '2021-05-11 21:46:05');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_05_11_000001_create_audit_logs_table', 1),
(4, '2021_05_11_000002_create_media_table', 1),
(5, '2021_05_11_000003_create_notices_table', 1),
(6, '2021_05_11_000004_create_levels_table', 1),
(7, '2021_05_11_000005_create_faculties_table', 1),
(8, '2021_05_11_000006_create_complaints_table', 1),
(9, '2021_05_11_000007_create_departments_table', 1),
(10, '2021_05_11_000008_create_tenants_table', 1),
(11, '2021_05_11_000009_create_floors_table', 1),
(12, '2021_05_11_000010_create_rooms_table', 1),
(13, '2021_05_11_000011_create_payments_table', 1),
(14, '2021_05_11_000012_create_aboutuses_table', 1),
(15, '2021_05_11_000013_create_user_alerts_table', 1),
(16, '2021_05_11_000014_create_users_table', 1),
(17, '2021_05_11_000015_create_roles_table', 1),
(18, '2021_05_11_000016_create_permissions_table', 1),
(19, '2021_05_11_000017_create_expenses_table', 1),
(20, '2021_05_11_000018_create_user_user_alert_pivot_table', 1),
(21, '2021_05_11_000019_create_role_user_pivot_table', 1),
(22, '2021_05_11_000020_create_permission_role_pivot_table', 1),
(23, '2021_05_11_000021_add_relationship_fields_to_complaints_table', 1),
(24, '2021_05_11_000022_add_relationship_fields_to_payments_table', 1),
(25, '2021_05_11_000023_add_relationship_fields_to_tenants_table', 1),
(26, '2021_05_11_000024_add_relationship_fields_to_expenses_table', 1),
(27, '2021_05_11_000025_add_relationship_fields_to_levels_table', 1),
(28, '2021_05_11_000026_add_relationship_fields_to_departments_table', 1),
(29, '2021_05_11_000027_add_relationship_fields_to_floors_table', 1),
(30, '2021_05_11_000028_add_relationship_fields_to_rooms_table', 1),
(31, '2021_05_11_000029_add_relationship_fields_to_user_alerts_table', 1),
(32, '2021_05_11_000030_add_verification_fields', 1),
(33, '2021_05_11_000031_create_qa_topics_table', 1),
(34, '2021_05_11_000032_create_qa_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `notice`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Keep the environment Complete', '<p>Kindly follow the rules</p>', '2021-05-11 19:35:11', '2021-05-11 19:35:11', NULL),
(2, 'Ready Through it', '<h2><strong>What is a Company Profile Template?</strong></h2><p>A company profile template is a marketing tool that showcases your brand’s products, services, and activities. A powerful <strong>company profile template presentation</strong> should be more than just a brochure. It vibrantly showcases your business and engages with stakeholders about your company’s offerings and unique qualities.</p><p>Most small businesses don\'t spend time building a company profile template... until they need it. While these profiles are sometimes designed as one-pager documents or even infographics, we continue to defend that the slide presentation format is probably the best.</p><p>The challenge with one-pagers and infographics is that once built, adding or removing information is complicated. With a presentation, on the other hand, you can add, or hide slides to be able to tailor the company to whoever is receiving it.</p><p><i>Related article: </i><a href=\"https://slidebean.com/blog/startups-what-is-a-company-profile-template\"><i>what is a company profile template?</i></a></p><h3>How to write a Company Profile Template</h3><p>You need to create a killer profile for your business that doesn’t bore your audience. An effective one is a combination of stunning design and engaging content. Starting a new business is all about costs, costs, and costs. Does this mean you have to hire a graphic designer to make one? It can be a solution, but this is also what our <a href=\"https://slidebean.com/templates/company-profile-template\"><strong>company profile templates</strong></a> are for.</p><h3><strong>Uses for a Company Profile Template</strong></h3><p>When we initially designed these slides, we called them \'Public Company Intro Template,\' since they were meant to be a sort of public investor deck that the companies could embed on their websites (we still think that\'s a good idea, BTW).</p><p>Depending on the kind of website your company has, a company intro in presentation form might be a good way to get people engaged in what to do.</p><p><a href=\"http://help.slidebean.com/sharing/embedding-your-presentation\">All Slidebean presentations are embeddable</a>, all you need is a code snippet, and the frame will automatically adapt to the width of your site and the device where it\'s been loaded.</p><p>Still, we\'ve revamped the deck to be more fitting for a short company profile that could be shared as a standalone presentation, or included as an introduction to a sales pitch or a consulting proposal.</p><p>These standalone presentations can be shared as an intro to a potential client, included in your website contact form or your email autoresponder. They can also be appended to your email signature or used for social media marketing. .</p><p>Finally, if you set your privacy settings to Public, the slides may be indexed by Google and other search engines, providing yet another result for your Search Engine Optimization efforts (back in 2016,<a href=\"https://slidebean.com/blog/marketing/content-marketing-the-real-cost\"> we invested about $70,000 in SEO and so far, have made over $500,000 in revenue just from those campaigns</a>).</p><h4>Why You Need a Company Profile</h4><ul><li>It creates an opportunity for collaborations. Your profile acts like a dossier that highlights the philosophy and roadmap of your business. Stakeholders can decide from it if you are the right fit and possess the same business ethics that aligns with their own goals.</li><li>An effective profile can raise capital, win investors, differentiate you from your competitors, and persuade clients. All of which ultimately leads to your business growth.</li><li>It creates your brand identity through storytelling. You can share your brand story, company culture, strengths, and achievements through this simple presentation.</li><li>With the right positioning and segmentation, your company profile complements your brand promotion and sales strategy.</li><li>It is a complementary and dynamic brand awareness tool that can help you create new business relationships and penetrate new markets.</li></ul><h4>Compelling Content that Engages</h4><p>Since our company profile templates have been designed to accommodate all the essential info you need to create an effective impression, all you have to do is inject your business stats and info. Yet many company profiles just get thrown in with the rest of the pile when deemed a snooze fest.</p><p>What exactly makes a company profile boring? Long wordy texts of vision and mission statements on top of dense tables and long product descriptions fit the bill.</p><h3><strong>The Company Profile slides</strong></h3><p>These are the slides you need to include in your company profile template:</p><h4><strong>1- Cover</strong></h4><p><strong>‍</strong>Keep it simple, choose the best company image you can find. If you don\'t have one, try using our<a href=\"http://help.slidebean.com/design-editor/images-icons-and-gifs\"> Flickr and Unsplash integrations</a> to find one that relates to your business.</p><h4><strong>2- Basic Numbers</strong></h4><p><strong>‍</strong>We used founding year, customers served and monthly active users as examples, but the idea here is to find some metrics, accomplishments or awards that you can brag about.</p><h4><strong>3- Mission and Vision</strong></h4><p><strong>‍</strong>We\'ve exchanged the traditional mission/vision statements for our concept of company culture (vision-less), but understand all the reasons why these have to be there.</p><h4><strong>4- Team</strong></h4><p><strong>‍</strong>Talk about your core team, or at least, the part that is relevant to whomever you are sharing this document with. Try to keep it to 2-4 people, and add the shortest possible summary about them.</p><h4><strong>5- Services</strong></h4><p><strong>‍</strong>This is a kind of \'what we do\' slide which again, might not apply to every single context. If you are using this presentation for a business proposal, you may want to mention other services or products your company has, as a way to bring some context into the pitch.</p><h4><strong>6- Clients</strong></h4><p><strong>‍</strong>There is no better proof than social proof. This slide is your chance to brag about your most nameworthy customers and some of the projects you\'ve developed with them.</p><h4><strong>7- Projects</strong></h4><p><strong>‍</strong>As an extension of the Clients slide, bring in some highlight projects/products that you\'ve developed. Get a star, hero image for each one of them and add a small brief of what your company did.</p><h4><strong>8- Quotes</strong></h4><p><strong>‍</strong>Again, social proof is really valuable for these presentations. If you have quotes from press or reviews from relevant people, this is where they belong.</p><h4><strong>9- Contact information</strong></h4><p><strong>‍</strong>Website, email and social. Not much to add here.</p><h4><strong>Create your company profile today!</strong></h4><p>We hope, this summary of what a company profile template is, had helped you to get a better idea of what you need to work on your company profile. Just remember to keep it updated with any additions or changes you need. Our Slidebean template saves you time while creating your presentation.</p><p>&nbsp;</p><p><br>&nbsp;</p><figure class=\"media\"><oembed url=\"https://www.youtube.com/embed/s9IHYN535Lk?autoplay=1\"></oembed></figure>', '2021-05-11 20:59:36', '2021-05-11 20:59:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$xHj9RfxdZRL8KY7fsAp/D.zkFFFjQlnPJczs/2eR82Vi/nFWiL1re', '2021-05-11 19:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(15,2) NOT NULL,
  `total_paid` decimal(15,2) NOT NULL,
  `transactionid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `tenant_id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_method`, `total_amount`, `total_paid`, `transactionid`, `notes`, `created_at`, `updated_at`, `deleted_at`, `tenant_id`, `created_by_id`) VALUES
(1, 'Other', '7700.00', '7300.00', 'MPESA00232', 'Ullamco incidunt ut', '2021-01-02 21:04:12', '2021-05-26 21:04:12', NULL, 1, 1),
(2, 'Other', '740.00', '760.00', 'Provident laudantiu', 'Sit sequi dignissimo', '2021-05-11 21:04:30', '2021-05-11 21:04:30', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'audit_log_show', NULL, NULL, NULL),
(18, 'audit_log_access', NULL, NULL, NULL),
(19, 'user_alert_create', NULL, NULL, NULL),
(20, 'user_alert_show', NULL, NULL, NULL),
(21, 'user_alert_delete', NULL, NULL, NULL),
(22, 'user_alert_access', NULL, NULL, NULL),
(23, 'room_create', NULL, NULL, NULL),
(24, 'room_edit', NULL, NULL, NULL),
(25, 'room_show', NULL, NULL, NULL),
(26, 'room_delete', NULL, NULL, NULL),
(27, 'room_access', NULL, NULL, NULL),
(28, 'manage_room_access', NULL, NULL, NULL),
(29, 'floor_create', NULL, NULL, NULL),
(30, 'floor_edit', NULL, NULL, NULL),
(31, 'floor_show', NULL, NULL, NULL),
(32, 'floor_delete', NULL, NULL, NULL),
(33, 'floor_access', NULL, NULL, NULL),
(34, 'tenant_create', NULL, NULL, NULL),
(35, 'tenant_edit', NULL, NULL, NULL),
(36, 'tenant_show', NULL, NULL, NULL),
(37, 'tenant_delete', NULL, NULL, NULL),
(38, 'tenant_access', NULL, NULL, NULL),
(39, 'manage_setting_access', NULL, NULL, NULL),
(40, 'department_create', NULL, NULL, NULL),
(41, 'department_edit', NULL, NULL, NULL),
(42, 'department_show', NULL, NULL, NULL),
(43, 'department_delete', NULL, NULL, NULL),
(44, 'department_access', NULL, NULL, NULL),
(45, 'faculty_create', NULL, NULL, NULL),
(46, 'faculty_edit', NULL, NULL, NULL),
(47, 'faculty_show', NULL, NULL, NULL),
(48, 'faculty_delete', NULL, NULL, NULL),
(49, 'faculty_access', NULL, NULL, NULL),
(50, 'level_create', NULL, NULL, NULL),
(51, 'level_edit', NULL, NULL, NULL),
(52, 'level_show', NULL, NULL, NULL),
(53, 'level_delete', NULL, NULL, NULL),
(54, 'level_access', NULL, NULL, NULL),
(55, 'accounting_access', NULL, NULL, NULL),
(56, 'expense_create', NULL, NULL, NULL),
(57, 'expense_edit', NULL, NULL, NULL),
(58, 'expense_show', NULL, NULL, NULL),
(59, 'expense_delete', NULL, NULL, NULL),
(60, 'expense_access', NULL, NULL, NULL),
(61, 'payment_create', NULL, NULL, NULL),
(62, 'payment_edit', NULL, NULL, NULL),
(63, 'payment_show', NULL, NULL, NULL),
(64, 'payment_delete', NULL, NULL, NULL),
(65, 'payment_access', NULL, NULL, NULL),
(66, 'complaint_create', NULL, NULL, NULL),
(67, 'complaint_edit', NULL, NULL, NULL),
(68, 'complaint_show', NULL, NULL, NULL),
(69, 'complaint_delete', NULL, NULL, NULL),
(70, 'complaint_access', NULL, NULL, NULL),
(71, 'notice_create', NULL, NULL, NULL),
(72, 'notice_edit', NULL, NULL, NULL),
(73, 'notice_show', NULL, NULL, NULL),
(74, 'notice_delete', NULL, NULL, NULL),
(75, 'notice_access', NULL, NULL, NULL),
(76, 'about_us_create', NULL, NULL, NULL),
(77, 'about_us_edit', NULL, NULL, NULL),
(78, 'about_us_show', NULL, NULL, NULL),
(79, 'about_us_delete', NULL, NULL, NULL),
(80, 'about_us_access', NULL, NULL, NULL),
(81, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(2, 25),
(2, 27),
(2, 28),
(2, 68),
(2, 70),
(2, 73),
(2, 75),
(2, 78),
(2, 80),
(2, 81),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 33),
(3, 34),
(3, 35),
(3, 36),
(3, 38),
(3, 55),
(3, 56),
(3, 57),
(3, 58),
(3, 59),
(3, 60),
(3, 61),
(3, 62),
(3, 63),
(3, 64),
(3, 65),
(3, 66),
(3, 67),
(3, 68),
(3, 70),
(3, 71),
(3, 72),
(3, 73),
(3, 75),
(3, 81),
(2, 34),
(2, 35),
(2, 38),
(2, 66);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qa_messages`
--

CREATE TABLE `qa_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qa_messages`
--

INSERT INTO `qa_messages` (`id`, `topic_id`, `sender_id`, `read_at`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-05-11 21:44:59', 'Laboris velit nostru', '2021-05-11 21:11:42', '2021-05-11 21:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `qa_topics`
--

CREATE TABLE `qa_topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creator_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qa_topics`
--

INSERT INTO `qa_topics` (`id`, `subject`, `creator_id`, `receiver_id`, `created_at`, `updated_at`) VALUES
(1, 'In maiores eum commo', 1, 3, '2021-05-11 21:11:41', '2021-05-11 21:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'Tenant', NULL, '2021-05-11 19:55:33', NULL),
(3, 'Staff', '2021-05-11 19:57:54', '2021-05-11 19:57:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `rent` decimal(15,2) NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `floor_id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `number`, `status`, `rent`, `details`, `created_at`, `updated_at`, `deleted_at`, `floor_id`, `created_by_id`) VALUES
(1, 'F21', 1, '5000.00', 'Details', '2021-05-11 19:33:43', '2021-05-11 20:16:51', NULL, 1, 1),
(2, 'F3', 0, '3500.00', NULL, '2021-05-11 19:33:57', '2021-05-11 19:33:57', NULL, 2, NULL),
(6, 'Madeson Kelley', 0, '48.00', 'Temporibus est omnis', '2021-05-11 21:43:36', '2021-05-11 21:43:36', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` int(11) NOT NULL,
  `home_address_line_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_address_line_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_person_phone_number_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_person_phone_number_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_note` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `department`, `phone`, `email`, `id_type`, `id_number`, `home_address_line_1`, `home_address_line_2`, `emergency_person_name`, `emergency_person_phone_number_1`, `emergency_person_phone_number_2`, `status`, `extra_note`, `created_at`, `updated_at`, `deleted_at`, `room_id`, `created_by_id`) VALUES
(1, 'Cecilia', 'Dora Baker', 'Macdonald', 'Male', 'Ut commodo dolore ve', '+1 (623) 321-6907', 'vaqolija@mailinator.com', 'NID', 644, '185 East White Clarendon Road', 'Consequatur asperior', 'Hoyt Chang', '+1 (804) 331-5736', '+1 (992) 734-1539', 'Inactive', 'Minim non reprehende', '2021-05-11 19:34:17', '2021-05-11 19:34:17', NULL, 2, 1),
(2, 'Arsenio', 'Venus Carter', 'Wong', 'Female', 'Temporibus repudiand', '+1 (144) 408-3196', 'lacojeha@mailinator.com', 'Driving License', 472, '142 Fabien Boulevard', 'Ex modi aperiam impe', 'Chastity Perkins', '+1 (314) 613-5746', '+1 (666) 543-9072', 'Active', 'Doloremque dolore re', '2021-05-11 19:40:52', '2021-05-11 19:40:52', NULL, 1, 1),
(3, 'sdsdsd', 'sdsd', 'sdsd', 'Female', 'dssd', '55445', 'mail@mail.com', 'Passport', 1234, NULL, NULL, 'wewe', 'wewe', NULL, 'Inactive', NULL, '2021-05-11 21:39:06', '2021-05-11 21:39:06', NULL, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `verified_at` datetime DEFAULT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `email`, `email_verified_at`, `password`, `verified`, `verified_at`, `verification_token`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Isaiah Mccall', 'Male', 'admin@admin.com', NULL, '$2y$10$WOGOC/MWrICtjar6tH5Zv.ZVKjJ1oeavlxfjdkXbKf45V51SI4Jhm', 1, '2021-05-11 19:11:35', '', NULL, '2021-05-10 23:01:37', '2021-05-11 20:00:12', NULL),
(2, 'Rosalyn Higgins', NULL, 'kucukis@mailinator.com', NULL, '$2y$10$SPzhihLCwhyj8j/nMLShTeg3i4FPLH3ky97FW2aHThJxcIFseeWAC', 0, NULL, 'mgreXJNth65T4xnGLFLQeX6K3DzTsCeu25MrucT7xMUPR4ZHTDG8PF4B5ETJrz96', NULL, '2021-05-11 19:24:16', '2021-05-11 19:24:16', NULL),
(3, 'Mark Benson', 'Male', 'markbenson@gmail.com', NULL, '$2y$10$R2INvYg2803ar69sj.mnNeeBFWL7IlQ.PZDmlo8asvrrBlUeb8jUm', 1, '2021-05-11 23:08:24', NULL, 'gZ5GOxDCzUETpNBrjFKrzXxqVY4znmoqpevZGIDXfUhr6JFOsh1nOG8ZkXGu', '2021-05-11 20:08:24', '2021-05-11 20:08:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_alerts`
--

CREATE TABLE `user_alerts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alert_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alert_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_alerts`
--

INSERT INTO `user_alerts` (`id`, `alert_text`, `alert_link`, `created_at`, `updated_at`, `deleted_at`, `created_by_id`) VALUES
(1, 'Perspiciatis et aut', 'Inventore occaecat q', '2021-05-11 21:10:38', '2021-05-11 21:10:38', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_user_alert`
--

CREATE TABLE `user_user_alert` (
  `user_alert_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_user_alert`
--

INSERT INTO `user_user_alert` (`user_alert_id`, `user_id`, `read`) VALUES
(1, 1, 1),
(1, 2, 0),
(1, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_3887105` (`created_by_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_3886625` (`created_by_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_3886914` (`created_by_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `floors_floor_number_unique` (`floor_number`),
  ADD KEY `created_by_fk_3886472` (`created_by_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_3886657` (`created_by_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tenant_fk_3886937` (`tenant_id`),
  ADD KEY `created_by_fk_3886946` (`created_by_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_3886204` (`role_id`),
  ADD KEY `permission_id_fk_3886204` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qa_messages`
--
ALTER TABLE `qa_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qa_messages_topic_id_foreign` (`topic_id`),
  ADD KEY `qa_messages_sender_id_foreign` (`sender_id`);

--
-- Indexes for table `qa_topics`
--
ALTER TABLE `qa_topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qa_topics_creator_id_foreign` (`creator_id`),
  ADD KEY `qa_topics_receiver_id_foreign` (`receiver_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_3886213` (`user_id`),
  ADD KEY `role_id_fk_3886213` (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_number_unique` (`number`),
  ADD KEY `floor_fk_3886483` (`floor_id`),
  ADD KEY `created_by_fk_3886463` (`created_by_id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tenants_phone_unique` (`phone`),
  ADD UNIQUE KEY `tenants_email_unique` (`email`),
  ADD UNIQUE KEY `tenants_id_number_unique` (`id_number`),
  ADD KEY `room_fk_3886764` (`room_id`),
  ADD KEY `created_by_fk_3886618` (`created_by_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_alerts`
--
ALTER TABLE `user_alerts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by_fk_3886426` (`created_by_id`);

--
-- Indexes for table `user_user_alert`
--
ALTER TABLE `user_user_alert`
  ADD KEY `user_alert_id_fk_3886325` (`user_alert_id`),
  ADD KEY `user_id_fk_3886325` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qa_messages`
--
ALTER TABLE `qa_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qa_topics`
--
ALTER TABLE `qa_topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_alerts`
--
ALTER TABLE `user_alerts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `created_by_fk_3887105` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `created_by_fk_3886625` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `created_by_fk_3886914` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `floors`
--
ALTER TABLE `floors`
  ADD CONSTRAINT `created_by_fk_3886472` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `created_by_fk_3886657` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `created_by_fk_3886946` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tenant_fk_3886937` FOREIGN KEY (`tenant_id`) REFERENCES `tenants` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_3886204` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_3886204` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `qa_messages`
--
ALTER TABLE `qa_messages`
  ADD CONSTRAINT `qa_messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_messages_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `qa_topics` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `qa_topics`
--
ALTER TABLE `qa_topics`
  ADD CONSTRAINT `qa_topics_creator_id_foreign` FOREIGN KEY (`creator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `qa_topics_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_3886213` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_3886213` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `created_by_fk_3886463` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `floor_fk_3886483` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`);

--
-- Constraints for table `tenants`
--
ALTER TABLE `tenants`
  ADD CONSTRAINT `created_by_fk_3886618` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `room_fk_3886764` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `user_alerts`
--
ALTER TABLE `user_alerts`
  ADD CONSTRAINT `created_by_fk_3886426` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_user_alert`
--
ALTER TABLE `user_user_alert`
  ADD CONSTRAINT `user_alert_id_fk_3886325` FOREIGN KEY (`user_alert_id`) REFERENCES `user_alerts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_3886325` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
