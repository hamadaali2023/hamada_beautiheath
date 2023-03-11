-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2023 at 07:41 AM
-- Server version: 10.3.38-MariaDB-log-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beaunqrp_coursat`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `name_acount` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `swift_code` varchar(255) DEFAULT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `name_acount`, `number`, `swift_code`, `iban`, `created_at`, `updated_at`) VALUES
(1, 'البنك الاهلي التجاري', 'حساب جاري', '٤١٧٤٧٥٤٩٠٠٠٤٠١', '٣٤٥٦', 'SA10000041747549000401', '2022-04-01 20:19:45', '2022-04-01 20:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `top` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`, `description_ar`, `description_en`, `icon`, `image`, `color`, `slug`, `status`, `top`, `type`, `created_at`, `updated_at`) VALUES
(1, 't53', 'tt5', 'h54', 'h54', '164977444316.jpg', '164977444326.jpg', '45t45', 'tt5', 0, 1, 0, '2022-04-12 18:40:43', '2022-04-12 18:41:34'),
(2, 'tgg', 'rtg', 'grtgrt', 'grtg', '165103535155.jpg', '165103535196.jpg', 'grtgr', 'rtg', 0, 1, 0, '2022-04-27 08:55:51', '2022-04-27 08:55:51'),
(3, 'csdc', 'sdc', 'csdc', 'dsc', '16510372028.jpg', '16510372026.jpg', '#45756', 'sdc', 0, 0, 0, '2022-04-27 09:26:42', '2022-04-27 09:26:42'),
(4, 'حجامة', 'Hijama', 'حجامة نبوية', 'Hejama k', '16510557898.jpg', '165105578956.jpg', 'Red', 'Hijama', 0, 1, 0, '2022-04-27 14:36:29', '2022-04-27 14:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `subCategoryId` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `slug_ar` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `top` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countryId` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `countryId`, `name_ar`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 1, 'الرياض', 'Riyadh', '2022-04-01 20:17:52', '2022-04-01 20:17:52'),
(2, 1, 'جدة', 'Jeda', '2022-04-03 18:04:31', '2022-04-03 18:04:31'),
(3, 2, 'الاحمدي', 'Ahmady', '2022-04-27 14:41:45', '2022-04-27 14:41:45');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `comment` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies_insurances`
--

CREATE TABLE `companies_insurances` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text DEFAULT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address_ar` text DEFAULT NULL,
  `address_en` text DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `privacy_ar` text DEFAULT NULL,
  `privacy_en` text DEFAULT NULL,
  `terms_ar` text DEFAULT NULL,
  `agreements_ar` text DEFAULT NULL,
  `agreements_en` text DEFAULT NULL,
  `agreements_student_ar` text DEFAULT NULL,
  `agreements_student_en` text DEFAULT NULL,
  `terms_en` text DEFAULT NULL,
  `return_ar` text DEFAULT NULL,
  `return_en` text DEFAULT NULL,
  `version` double DEFAULT NULL,
  `favicon` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `logo`, `title_ar`, `title_en`, `phone`, `email`, `address_ar`, `address_en`, `longitude`, `latitude`, `description_ar`, `description_en`, `privacy_ar`, `privacy_en`, `terms_ar`, `agreements_ar`, `agreements_en`, `agreements_student_ar`, `agreements_student_en`, `terms_en`, `return_ar`, `return_en`, `version`, `favicon`, `created_at`, `updated_at`) VALUES
(1, '1644296691.png', 'vevre', 'vrev', '0531927731', 'f123456khkh@gmail.com', 'السعودية', 'Saudi', '33333', '635635', '<p>جمال صحتي</p>\r\n\r\n<p>منصة صحية تربط مقدم الخدمة بطالب الخدمة&nbsp;</p>\r\n\r\n<p>وسيط صحي الكتروني&nbsp;</p>', '<h6><strong>About Astyle Academic</strong></h6>\r\n\r\n<p>&nbsp;</p>', '<h1 style=\"text-align:right\">سياسة الخصوصية</h1>\r\n\r\n<p style=\"text-align:right\">تطبيق جمال صحتي&nbsp;</p>\r\n\r\n<p style=\"text-align:right\">تطبيق طبي منوع</p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<p style=\"text-align:right\">سياسة الخصوصية هذه توفر طريقة جمع البيانات الخاصة بك بالطريقة المستخدمة من قبل كوتبانه. ننصح بقرأة سياسة الخصوصية بعناية. عن طريق الدخول إلى الخدمات التي تقدمها kutuphanah.com انك توافق على جمع و استخدام البيانات الخاصة بك عن طريق kutuphanah.com و بعض مقدمي الخدمة طرف ثالث بالطريقة المنصوص عليها في سياسة الخصوصية هذه. إذا كنت لا توافق على سياسة الخصوصية هذه، يرجى عدم استخدام هذا الموقع kutuphanah.com من خلال قبول سياسة الخصوصية أثناء التسجيل، يجب أن توافق صراحة على استخدامنا و الكشف عن المعلومات الشخصية الخاصة بك وفقاً لسياسة الخصوصية هذه. يتم تضمينها في سياسة الخصوصية هذه و تخضع لشروط اتفاقية المستخدم.</p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:right\">حماية الخصوصية الخاصة بك مع كوتبانه</h2>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<p style=\"text-align:right\">تقدم كوتبانه العلامات التجارية الرائدة عالميًا وتجهز مجموعة منتجات شاملة تتضمن الكتب الرقمية. نريدك أن تشعر بالراحة عند استخدام موقعنا و تشعر بالأمان عند مشاركتك المعلومات الخاصة بك معنا، و بالتالي نحن فخورون للغاية بالتزامنا لحماية خصوصيتك. يرجى مواصلة قرأة السياسة التالية لفهم كيف يتم التعامل مع المعلومات الشخصية الخاصة بك كما تمكنك من الإستفادة الكاملة من موقعنا.</p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:right\">ضمان الخصوصية الخاصة بك مع كوتبانه</h2>\r\n\r\n<h2 style=\"text-align:right\">&nbsp;</h2>\r\n\r\n<p style=\"text-align:right\">كوتبانه تلتزم بعدم بيع أو تأجير معلوماتك الشخصية لأي طرف ثالث (بإستثناء ماهو منصوص عليه في سياسة الخصوصية هذه) دون موافقتك. نحن و / أو المخولين مزودي الخدمة طرف ثالث المخولين لإستخدام المعلومات الشخصية التي قدمتها لنوفر لك الخدمات التي نقدمها.</p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:right\">الطرف الثالث &ndash; مزودي الخدمة</h2>\r\n\r\n<h2 style=\"text-align:right\">نحن نوظف شركات أخرى و أفراد لأداء المهام نيابة عنا. ومن الأمثلة على ذلك مباشرة الطلبات، إرسال البريد الإلكتروني،تحليل البيانات،تقديم المساعدة والتسويق، تقديم نتائج البحث، تجهيز مدفوعات بطاقات الائتمان. لديهم إمكانية الوصول إلى المعلومات الشخصية اللازمة لأداء وظائفهم، ولكن لاتستخدم لأغراض أخرى.</h2>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:right\">المعلومات التي يمكن جمعها منك</h2>\r\n\r\n<h2 style=\"text-align:right\">&nbsp;</h2>\r\n\r\n<p style=\"text-align:right\">كوتبانه تقوم يجمع المعلومات التي قدمت من خلالكم في سجل جنباً إلى جنب مع المعلومات التي عرفناها عنك من خلال زيارة موقعنا و استخدامك لخدماتنا. نحن أيضاً نقوم بجمع المعلومات عن المعاملات التي تقوم بها بما في ذلك تفاصيل بطاقات الدفع المستخدمة. قد نقوم بجمع معلومات إضافية فيما يتعلق بمشاركتكم في أي عروض أو المسابقات التي نوفرها و المعلومات التي تقدمها تعطينا تغذية لإستكمال الملف الشخصي الخاص بك. نحن نراقب أيضاً أنماط حركة المرور للعملاء و استخدام الموقع، و التي تمكننا من تحسين الخدمة التي نقدمها. و سوف نقوم بجمع المعلومات الضرورية فقط وذات الصلة لنا لنقدم لك الخدمات المتاحة على الموقع.</p>\r\n\r\n<p style=\"text-align:right\">قد نقوم بجمع المعلومات الشخصية التالية عنك مثل:</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:right\">الإسم بما في ذلك الإسم الأول وإسم العائلة</li>\r\n	<li style=\"text-align:right\">قم الهاتف الجوال وتفاصيل الإتصال</li>\r\n	<li style=\"text-align:right\">الملف الشخصي الديموغرافي ( مثل العمر، العنوان)</li>\r\n	<li style=\"text-align:right\">البريد الالكتروني</li>\r\n	<li style=\"text-align:right\">بيانات البنك الخاص بك</li>\r\n</ol>\r\n\r\n<p style=\"text-align:right\">يمكنك إنهاء حسابك في أي وقت. ومع ذلك قد تبقى معلوماتك المخزنة في الأرشيف على خدماتنا حتى بعد الحذف أو إنهاء حسابك.</p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<h5 style=\"text-align:right\">تفاصيل بطاقة الائتمان</h5>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<p style=\"text-align:right\">نحن لا تبقي أي تفاصيل بطاقة الائتمان في قاعدة البيانات المتوفرة لدينا أو السيرفر. من المهم بالنسبة لك الحماية ضد وصول غير المصرح لهم إلى كلمة المرور الخاصة بك أو الكمبيوتر الخاص بك. تأكد من تسجيل الخروج عند الانتهاء من استخدام جهاز كمبيوتر مشترك.</p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<h5 style=\"text-align:right\">استخداماتنا لمعلوماتك</h5>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<p style=\"text-align:right\">جميع المعلومات المتاحة على الموقع والي تشمل على الكتب الرقمية المنشورة وجاهزة للبيع، مع إمكانية البحث عن كتاب معين أو موضوع معين</p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:right\">متى يتم الإفصاح عن المعلومات الخاصة بك</h2>\r\n\r\n<h2 style=\"text-align:right\">&nbsp;</h2>\r\n\r\n<p style=\"text-align:right\">لن نستخدم معلوماتك الشخصية لأي غرض آخر سوى إتمام الصفقة معك. نحن لا نؤجر أو نبيع المعلومات الشخصية الخاصة بك، ولن نكشف عن أي معلومات شخصية إلى أي طرف ثالث إلا إذا:</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:right\">أن يكون لدينا إذن منك</li>\r\n	<li style=\"text-align:right\">لتوفير المنتجات والخدمات التي طلبتها</li>\r\n	<li style=\"text-align:right\">للمساعدة في تحقيق ومنع إتخاذ إجراءات تتعلق بأنشطة غير مشروعة وغير قانونية، والمشتبه بهم بالاحتيال، خطراً على سلامة أو أمن أي شخص، انتهاكات شروط استخدام كوتبانه أو للدفاع ضد المطالبات القانونية.</li>\r\n	<li style=\"text-align:right\">ظروف خاصة مثل الامتثال لأوامر الإستدعاء، أوامر المحكمة، طلبات / أمر من السلطة القانونية أو وكالات إنفاذ القانون التي تتطلب مثل هذا الكشف</li>\r\n</ol>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:right\">ماهي الخيارات المتاحة لك بخصوص جمع و استخدام و توزيع المعلومات الخاصة بك؟</h2>\r\n\r\n<h2 style=\"text-align:right\">&nbsp;</h2>\r\n\r\n<p style=\"text-align:right\">تزويد المعلومات الشخصية طوعية تماماً. و ليس مطلوب التسجيل معنا من أجل تصفع موقعنا. و مع ذلك نحن نقدم فقط بعض الخدمات للزوار الغير مسجلين .يمكنك تغيير الإهتمامات الخاصة بك في أي وقت، ووضع في أو خاج التسويق/ الترويج/النشرات الإخبارية. تحتفظ كوتبانه لنفسها بحق أن ترسل لك بعض الاتصالات و الخدمات ذات الصلة، و التي تعتبر جزء من حساب كوتبانه الخاص بك مع سهولة إلغاء الإشتراك. تستطيع القيام بتحديث المعلومات الخاصة بك و تغيير إعدادات حسابك في أي وقت.</p>\r\n\r\n<p style=\"text-align:right\">بناء على طلبك، سنقوم بإزالة / منع معلوماتك الشخصية من قاعدة بياناتنا، و بالتالي إلغاء التسجيل. و مع ذلك قد تبقى معلوماتك المخزنة في الأرشيف على خدماتنا حتى بعد الحذف أو إنهاء حسابك.</p>\r\n\r\n<p style=\"text-align:right\">إذا كنا نخطط لإستخدام معلوماتك الشخصية لأية أغراض تجارية، سنقوم بإعلامك في الوقت في الوقت الذي نقوم بجمع هذه المعلومات و نسمح لك لإختيار عدم المشاركة بمعلوماتك التي تستخدم لهذه الأغراض.</p>\r\n\r\n<p style=\"text-align:right\">&nbsp;</p>', '<div>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h6>Why do we use it?</h6>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<h6>Where does it come from?</h6>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>\r\n\r\n<p>&nbsp;</p>', '<p>منصة جمال صحتي&nbsp;</p>\r\n\r\n<p>منصة خاصة تربط مقدم الخدمة بمتلقي الخدمة&nbsp;</p>\r\n\r\n<p>جميع المعلومات في المنصة لمقدمي الخدمة هي سرية وخاصة لايطلغ عليها الا الادارة لاجل التوثيق والتفعيل ..فلاتكتب الا ماهو صحيح&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '<p dir=\"RTL\"><strong>اتفاقية المؤلف مع المنصة</strong></p>\r\n\r\n<p dir=\"RTL\">يرجى قراءة ما يلي بعناية، &nbsp;شروط الخدمة هذه ، هي اتفاقية ملزمة (&quot;الاتفاقية&quot;) بينك أنت كمؤلف وبين (&quot;المنصة&quot;) وهي منصة لبيع الكتب الالكترونية في كافة دول العالم ذاتية الخدمة بإسم تجاري (كوتبانه) التابعة الى شركة:</p>\r\n\r\n<p dir=\"RTL\"><span dir=\"LTR\">THE ADVANCED STYLE FOR TRAININIG EGITIM VE REHBERLIK HIZ.LTD.STI.</span></p>\r\n\r\n<p dir=\"RTL\">العنوان:&nbsp; تركيا- مدينة اسطنبول</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; Şişli -İstanbul /T&uuml;rkiye,&nbsp;&nbsp;&nbsp; Ergenekon mah. Halaskargazi cad. Kemahlı apt. No:53 ,&nbsp; D:10</p>\r\n\r\n<p dir=\"RTL\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\">قد ترد كلمة (أنت أو المؤلف أو الناشر) لتعبر عن نفس الشخص الذي قام يإنشاء محتوى حصري خاص به ويكون على شكل كتاب رقمي بصيغة <span dir=\"LTR\">PDF</span> ويشار اليه هنا بكلمة (العمل)، &nbsp;ويريد أن يكون هو بنفسه الناشر لعمله والبائع لعمله من خلال المنصة.</p>\r\n\r\n<p dir=\"RTL\">أنت تعتبر المؤلف والناشر لعملك وبالتالي أنت تمتلك حقوق ومسئولية التأليف والنشر وحقوق الملكية الفكرية بالكامل، المنصة ليست دار نشر وانما منصة لبيع الكتب الرقمية فقط، أي أن المنصة هي الوسيط بين البائع وهو أنت المؤلف والناشر لعملك وبين المشتري وهو الشخص الذي يقوم بدفع مبلغ مقابل الحصول على العمل المنشور على المنصة، بحيث يحصل المشتري على الكتاب الرقمي ويستطيع تحميل الكتاب على جهازه الخاص.</p>\r\n\r\n<p dir=\"RTL\">المنصة تحصل على عمولة البيع البالغة 40% من المبيعات، والمؤلف يحصل على 60% من المبيعات الخاصة بعمله، وذلك ضمن هذة الاتفاقية غير الحصرية بمعنى أنك تستطيع أن تنشر عملك بمواقع اخرى بحيث لا يقل سعر الكتاب بالمواقع الاخرى عن السعر الذي تحدده أنت في المنصة، وتقوم المنصة بتحويل المبلغ الخاص بالمؤلف مرة كل شهر بحيث لا يقل المبلغ المستحق عن 100 دولار امريكي، واذا كان المبلغ المستحق أقل من 100 دولار يتم رصد المبلغ الى الموعد القادم للتحويل، وباعتبار ان جميع الكتب معروضه للبيع بعملة الدولار الامريكي فان المؤلف يقبل باستلام المبلغ على حسابه بالبنك&nbsp; سواء بنفس العملة او بعمله اخرى وبسعر الصرف الذي يحدده البنك، وكما يقبل المؤلف أي خصومات يخصمها البنك أو الضرائب الحكومية المفروضه على المبلغ ان وجدت.</p>\r\n\r\n<p dir=\"RTL\">&nbsp;أنت بنفسك تستطيع أن تقوم بنشر عملك على المنصة واتاحته للبيع حول العالم، وأنت مسئول عن جميع البيانات التي تقوم بادخالها على المنصة، وأيضا تتيح لك المنصة أن تنشر العمل أو تزيل العمل أو تعدل على العمل بأي وقت تشاء.</p>\r\n\r\n<p dir=\"RTL\">يتعهد المؤلف أن المنصة ليست الناشر لصاحب حقوق التأليف والنشر وانما فقط لتسويق وبيع الكتب الرقمية، وأن صاحب العمل هو الناشر لعمله الخاص والذي يجب أن يكون مرخص ومسجل لدى الجهات الحكومية المختصة وبالتالي يكون المؤلف مسئولا بالكامل عن نشر العمل الحصري الخاص به ومسئول عن محتوى العمل بالكامل. وأنك تتعهد وتؤكد أنه لا يوجد جانب من عملك ينتهك &nbsp;حقوق شخص أو جهة أو كيان آخر. في دورك كمؤلف و ناشر، فأنت تدرك أنك ناشر لعملك، وبالتالي أنت مسؤول عن كتابة وتحرير وتنسيق وتصميم غلاف كتابك، وعن تحميل كتابك إلى المنصة ، وإدارة البيانات الوصفية لكتابك.</p>\r\n\r\n<p dir=\"RTL\">يمنح المؤلف بموجبه ويتنازل إلى المنصة الحق غير الحصري في بيع عمله في جميع أنحاء العالم (حقوق البيع والتوزيع الرقمي)، &nbsp;ويتحمل المؤلف أية مسئولية تتعلق بحقوق الملكية الفكرية العائدة لقيام المنصة بتوزيع الكتاب الكترونياً، ويلتزم المؤلف بالتعويض عن كل ضرر يلحق بالمنصة من جراء قيام طرف ثالث بالمطالبة بأي مبالغ أو أضرار تتعلق بحق المنصة في بيع العمل الكترونياً حول العالم، ويكون بالتالي المؤلف ملتزماً بالتعويض عن كل ضرر يلحق بالمنصة من جراء قيام أي طرف ثالث بالمطالبة بأية مبالغ أو أضرار تتعلق بمضمون العمل. يتحمل المؤلف مسئولية ترخيص الكتاب &nbsp;من الجهات الحكومية المختصة ولا يجوز له أن ينشر أي عمل غير مرخص على المنصة، واذا قام بنشر عمل غير مرخص يتحمل المؤلف كافة المسئولية القانونية جراء ذلك. وتقع على عاتق المؤلف مسؤولية وضع إشعار حقوق الطبع والنشر على صفحة حقوق الطبع والنشر أو أي مكان بارز آخر في العمل الذي يقوم بنشره على المنصة.</p>\r\n\r\n<p dir=\"RTL\">تتيح المنصة للمؤلف امكانية مراقبة ومتابعة الكتب التي تباع عن طريق المنصة أول بأول وكما تتيح أيضا امكانية التحكم بالعمل المنشور من حيث الغاء العمل أو تغيير الاصدار مع امكانية تغيير بيانات الكتاب كالغلاف والمقدمة والسعر بحيث لا يقل سعر الكتاب عن 2 دولار امريكي ولا يزيد عن 9 دولار امريكي، ويحق للمؤلف أن ينشر عمله أو يزيله بأي وقت يشاء دون الالتزام بمدة معينة.</p>\r\n\r\n<p dir=\"RTL\">المنصة غير مسئولة عن الكتاب الذي تم بيعه للمشتري من حيث اعادة بيعه أو نشره بمواقع أخرى، فالكتاب الرقمي يمكن تداوله بسهولة بين الاشخاص وهذا خارج عن نطاق وسيطرة ومسئولية المنصة. واذا قام المشتري بنشر الكتاب الخاص بالمؤلف بمواقع اخرى فيستطيع المؤلف أن يضع المسئولية على المشتري مباشرة دون الرجوع الى المنصة.</p>\r\n\r\n<p dir=\"RTL\">تتعهد المنصة بالمحافظه على سرية المعلومات والبيانات المعطاه له بما في ذلك نصوص الكتاب بالكامل ولا يحق للمنصة استخدام العمل في غير محل الاتفاقية، كما لا يحق للمنصة اجراء أية تغييرات على محتوى العمل.</p>\r\n\r\n<p dir=\"RTL\">يحق للمنصة ازالة أي عمل من المنصة اذا كان العمل يخالف القانون من حيث المحتوى أو اذا كان العمل قديم ولا يوجد عليه طلب حسب تقدير المنصة، وكما يحق للمنصة ازالة أو تعليق كتاب عن البيع على المنصة اذا كان العمل يخالف أية شروط وارده ضمن هذه الشروط، أو يخالف أي جهة ثالثة من ناحية قانونية.</p>\r\n\r\n<p dir=\"RTL\">اذا تم اكتشاف أن العمل أو جزء منه ليس حق للمؤلف ، فيحق للمنصة بمطالبة المؤلف &nbsp;بجميع المبالغ التي حصل عليها من هذا العمل، وحجز جميع المبالغ المعلقة والتي لم يتم تحويلها بعد، وازالة العمل من الموقع،&nbsp; وبتحميل كافة المسئولية القانونية الى المؤلف.</p>\r\n\r\n<p dir=\"RTL\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\">يحق للمنصة التغيير على هذه الشروط (الاتفاقية) بأي وقت، وبحيث تكون هذه الشروط (الاتفاقية) متاحة دائماً للمؤلف على المنصة ببوابة المؤلف، وسوف يتم وضع تاريخ أخر تعديل بنهاية الاتفاقية حتى يستطيع المؤلف أن يتابع التعديلات المحتملة على هذه الاتفاقية، ويحق للمؤلف أن يقوم بالغاء نشر جميع أعماله من المنصة اذا لم تناسبه الشروط الجديدة، واذا استمر المؤلف بالنشر فهذا يعني انه موافق على الاستمرار بالشروط الجديدة. سوف نعمل جاهدين بأن لا نغير بالشروط الا اذا اضطررنا بذلك فقط.</p>\r\n\r\n<p dir=\"RTL\">كل نزاع ينشأ حول تفسير هذه الشروط أو تنفيذ هذه الشروط يكون من اختصاص محاكم دولة تركيا، ويكون القانون التركي هو القانون الذي يحكم هذه الشروط ( الاتفاقية ) وذلك لان مقر ترخيص المنصة في تركيا.</p>\r\n\r\n<p dir=\"RTL\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\">&nbsp;تاريخ اخر تعديل: 4/7/2021</p>\r\n\r\n<p dir=\"RTL\">&nbsp;</p>', '<p>vever</p>', '<p>ثاثفاف</p>', '<p>refre</p>', NULL, '<h1 style=\"text-align:center\">سياسة الإرجاع</h1>\r\n\r\n<p style=\"text-align:right\">اذا كان هناك خطأ في طلبك كأن يكون عنوان الكتاب الذي اشتريته مختلف عن المحتوى ، وفي هذه الحالة نطلب منك أن تتواصل معنا وأن تقدم طلب استرداد للمبلغ أو طلب استبدال بكتاب اخر.</p>\r\n\r\n<p style=\"text-align:right\">لتقديم طلب استرداد أو إرجاع لطلب تم تقديمه من خلال كوتبانه، ستحتاج إلى الاتصال بـ كوتبانه عبر البريد الإلكتروني على kutubane@yahoo.com أو عبر الهاتف على 00905443807388 أو عن طريق خدمة البلاغات.</p>\r\n\r\n<p style=\"text-align:right\">يتم قبول طلبات الاسترداد أو الإرجاع أو الاستبدال حتى 30 يومًا من تاريخ تقديم الطلب مع كوتبانه. قد تمنح كوتبانه تمديدات لهذه الفترة لبعض الحالات الخاصة وفقًا لتقديرها.</p>\r\n\r\n<p style=\"text-align:right\">إذا تم منح طلب الاسترداد بواسطة كوتبانه ، فسيتم رد المدفوعات على النحو التالي:</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:right\">سيتم رد مدفوعات بطاقات الائتمان / الخصم في غضون يوم الى ثلاثة أيام عمل؛</li>\r\n	<li style=\"text-align:right\">سيتم رد مدفوعات PayPal في غضون يوم الى ثلاثة أيام عمل ؛</li>\r\n	<li style=\"text-align:right\">سيتم رد أموالك ذا كانت تزيد عن 30 دولار عن طرق الدفع الأخرى ما بين خمسة (5) إلى سبعة (7) أيام.</li>\r\n</ol>\r\n\r\n<h1 style=\"text-align:right\">سياسة التوصيل</h1>\r\n\r\n<p style=\"text-align:right\">عند استلام طلبك ، سيُطلب منك إما بدء التنزيل على الفور أو ستتلقى بريدًا إلكترونيًا منا يحتوي على إرشادات لإكمال التنزيل. إذا طُلب منك بدء التنزيل على الفور، فإن إكمال التنزيل سيعني تسليمك للعنصر (العناصر) الذي اشتريته</p>\r\n\r\n<p style=\"text-align:right\">في حالة عدم قدرتك على تنزيل العنصر (العناصر) التي تشتريها أو لم تستلم بريدًا إلكترونيًا منا يحتوي على إرشادات لإكمال التنزيل ، يجب عليك الاتصال بنا في غضون 5 أيام من تاريخ طلبك. إذا لم تتصل بنا في غضون 5 أيام من تاريخ طلبك ، فسيتم اعتبار العنصر (العناصر) الذي اشتريته مستلمًا وتم تنزيله وتسليمه إليك.</p>', '<h2 style=\"text-align:center\"><strong>Return Policy</strong></h2>\r\n\r\n<p>If there is an error in your order, such as the title of the book you purchased is different from the content, and in this case we ask you to contact us and submit a request for a refund or a replacement request with another book.</p>\r\n\r\n<p>To submit a refund or return request for an order placed through Kotban, you will need to contact Kotubane via email at kutubane@yahoo.com, by phone at 00905443807388, or via the reporting service.</p>\r\n\r\n<p>Refund, return or exchange requests are accepted up to 30 days from the date of placing the order with Quetpane. Quebec may grant extensions to this period for some special cases at its discretion.</p>\r\n\r\n<p>If the refund request is granted by Cotpan, then the payments will be refunded as follows:</p>\r\n\r\n<p>Credit/debit card payments will be refunded within one to three business days;<br />\r\nPayPal payments will be refunded within one to three business days;<br />\r\nYour money over $30 for other payment methods will be refunded within five (5) to seven (7) days.<br />\r\nDelivery Policy<br />\r\nUpon receipt of your order, you will either be asked to start the download immediately or you will receive an email from us with instructions to complete the download. If you are prompted to start the download immediately, completing the download will mean that you will be delivered the item(s) you purchased</p>\r\n\r\n<p>In the event that you are unable to download the item(s) you purchase or have not received an email from us with instructions to complete the download, you must contact us within 5 days of your order. If you do not contact us within 5 days of your order date, the item(s) you purchased will be considered received, downloaded, and delivered to you.</p>', 1, '1637310874.png', NULL, '2022-03-15 13:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name_ar`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'السعودية', 'Saudi', '2022-04-01 20:16:54', '2022-04-01 20:16:54'),
(2, 'الكويت', 'Kuait', '2022-04-27 01:28:32', '2022-04-27 01:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_dayId` bigint(20) UNSIGNED NOT NULL,
  `sat` varchar(255) NOT NULL DEFAULT '0',
  `sun` varchar(255) NOT NULL DEFAULT '0',
  `mon` varchar(255) NOT NULL DEFAULT '0',
  `tus` varchar(255) NOT NULL DEFAULT '0',
  `wed` varchar(255) NOT NULL DEFAULT '0',
  `thu` varchar(255) NOT NULL DEFAULT '0',
  `fri` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `work_dayId`, `sat`, `sun`, `mon`, `tus`, `wed`, `thu`, `fri`, `created_at`, `updated_at`) VALUES
(6, 12, '0', '0', '0', '0', '0', '0', '0', '2022-04-04 15:02:38', '2022-04-04 15:02:38'),
(13, 19, '0', '0', '0', '0', '0', '0', '0', '2022-04-27 01:18:44', '2022-04-27 01:18:44'),
(15, 21, '0', '0', '0', '0', '0', '0', '0', '2022-07-27 18:37:46', '2022-07-27 18:37:46'),
(16, 22, '0', '0', '0', '0', '0', '0', '0', '2022-07-28 11:32:04', '2022-07-28 11:32:04'),
(17, 23, '0', '0', '0', '0', '0', '0', '0', '2022-07-28 11:34:38', '2022-07-28 11:34:38'),
(18, 24, '0', '0', '0', '0', '0', '0', '0', '2022-07-28 11:35:31', '2022-07-28 11:35:31'),
(19, 25, '0', '0', '0', '0', '0', '0', '0', '2022-07-28 11:36:50', '2022-07-28 11:36:50'),
(20, 26, '0', '0', '0', '0', '0', '0', '0', '2022-07-28 11:38:28', '2022-07-28 11:38:28'),
(21, 27, '0', '0', '0', '0', '0', '0', '0', '2022-07-28 11:51:29', '2022-07-28 11:51:29'),
(22, 28, '0', '0', '0', '0', '0', '0', '0', '2022-07-28 20:34:04', '2022-07-28 20:34:04'),
(23, 29, '0', '0', '0', '0', '0', '0', '0', '2022-07-28 20:37:45', '2022-07-28 20:37:45'),
(24, 30, '0', '0', '0', '0', '0', '0', '0', '2022-07-28 20:41:31', '2022-07-28 20:41:31'),
(25, 31, '0', '0', '0', '0', '0', '0', '0', '2022-09-28 12:33:06', '2022-09-28 12:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countryId` int(11) DEFAULT NULL,
  `cityId` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `dateOfBirth` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `personality_number` varchar(255) DEFAULT NULL,
  `personality_photo` text DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `membershipTypeId` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_activated` int(11) DEFAULT 0,
  `token` text DEFAULT NULL,
  `device_token` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `countryId`, `cityId`, `first_name`, `last_name`, `email`, `password`, `mobile`, `state`, `gender`, `type`, `longitude`, `latitude`, `dateOfBirth`, `nationality`, `photo`, `personality_number`, `personality_photo`, `bio`, `rate`, `membershipTypeId`, `status`, `is_activated`, `token`, `device_token`, `created_at`, `updated_at`) VALUES
(18, 1, 1, 'gtrg', 'rtgr', 'hamada.ali158@yahoo.com', '$2y$10$lH90yn1F0yzLAIzfZE93Merto14tBHpwghGGyqD5XJ923r1JO4xpO', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, '2022-04-04 15:02:38', '2022-04-04 15:02:53'),
(25, 1, 2, 'فهد', 'سالم', 'falahkh@yahoo.com', '$2y$10$QP21D04fRmR2ZuvUAsIijug1u62nBkEfHWSi1Mkvz5ih6NLKmYk.O', '0534006524', NULL, 'ذكر', 'شخصي', NULL, NULL, '2000-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9iZWF1dGloZWF0aC5jb21cL2FwaVwvdjFcL2RvY3RvclwvbG9naW4iLCJpYXQiOjE2NTEwMDc5NzksImV4cCI6MTY1MTAxMTU3OSwibmJmIjoxNjUxMDA3OTc5LCJqdGkiOiJ4a0owZzlIVmZpb05vbkFOIiwic3ViIjoyNSwicHJ2IjoiOGQ0NDExY2QyNDFmMWE5ZWFkM2NhNzQ4Njc0NGViNGVkMDY3NjgxYiJ9.FFgImH5O6trcUBhSBiOu_EQwQ4Uzz6Le5mHKB7r-xIU', 'enPcEYMaR86LjkttLLtmKy:APA91bE6L-RBvcONiOnua86H2fZrCbeevJuWAWS2DsNQZ4eaw50VAiI_jkY52tn-n_naTk4D7XLTJjfcVZHSEanObHx26CP3us3JjyaluzwjbXPkHo4FA7tGhJSxB6KyuthKt1A-wtqL', '2022-04-27 01:18:44', '2022-04-27 01:19:39'),
(27, 1, 1, 'gtrg', 'rtgr', 'coursesloai2021@gmail.com', '$2y$10$lboKX3rWde01upPNfHleE.7AQEGbo1MNYWgIATndnTZB64VCjuRlu', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-07-27 18:37:46', '2022-07-27 18:37:46'),
(28, 1, 1, 'gtrg', 'rtgr', 'coursesloai20241@gmail.com', '$2y$10$F9oiFo7VMWAT9Qkt8AHdM.n3Bp1znYMThiQ5QjELhuTmsQVE3Hw5e', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-07-28 11:32:04', '2022-07-28 11:32:04'),
(29, 1, 1, 'gtrg', 'rtgr', 'coursesloai2024e1@gmail.com', '$2y$10$7KZiC15fO.eoLP1ADNDl1OYbl34hffW.jjj5HiHcQYN21RNvVSvui', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-07-28 11:34:38', '2022-07-28 11:34:38'),
(30, 1, 1, 'gtrg', 'rtgr', 'coursesloai2024e1e@gmail.com', '$2y$10$B.0eiLfs3kj8CHQFTMnboOHX1vBFANbpRsOf8OXrbiK4kpKmfA9By', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-07-28 11:35:31', '2022-07-28 11:35:31'),
(31, 1, 1, 'gtrg', 'rtgr', 'coursesloai2024e1e@gmail.comd', '$2y$10$AfRaDmCPkPfYdvg3nglLZ.dWB7ZuYqAZ..TtbBwI9KBik9OFZwKAq', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-07-28 11:36:50', '2022-07-28 11:36:50'),
(32, 1, 1, 'gtrg', 'rtgr', 'coursesloai2024e1e@gmail.comds', '$2y$10$HMUg5Yu.bInJssS1Q6U3BOaeiuR47RuZp0MtSmEWZ1iNkHZQmR3Ma', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-07-28 11:38:28', '2022-07-28 11:38:28'),
(33, 1, 1, 'gtrg', 'rtgr', 'coursesloai2024e1ee@gmail.com', '$2y$10$qmRrtKVuHx0RsGZ3WIKpy.zq/nfynOU2V7mRdXlis62vxnGPta4dS', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-07-28 11:51:29', '2022-07-28 11:51:29'),
(34, 1, 1, 'gtrg', 'rtgr', 'coursesloai2024e14ee@gmail.com', '$2y$10$kRYOcgvSqDtZa.fQZSWLVOXL943J9EWVu0wpYAW69LkB/2gouHg7i', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-07-28 20:34:04', '2022-07-28 20:34:04'),
(35, 1, 1, 'gtrg', 'rtgr', 'hamada.ali9030@gmail.com', '$2y$10$tW9CJ6eSJC5lOQrqSOcz2uBT3v8dSfbmV3uEpY/nAQwLUon/eA7J.', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-07-28 20:37:45', '2022-07-28 20:37:45'),
(36, 1, 1, 'gtrg', 'rtgr', 'said5050info@gmail.com', '$2y$10$xLgQ4Ig9wLXLhTc1maTj7OMd0K1plqjEk977X3QuXBN8YuDKhp.TS', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-07-28 20:41:31', '2022-07-28 20:41:31'),
(37, 2, 1, 'gtrg', 'rtgr', 'hamadaali221133@gmail.com', '$2y$10$N51.moa9Fbknc7i2tGc7T.2./RasLmdZuHa3C.K/yVnQVPxeIwTk2', '24564765', NULL, 'male', 'gtrgr', NULL, NULL, 'gtrgtd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYmVhdXRpaGVhdGguY29tXC9hcGlcL3YxXC9kb2N0b3JcL2xvZ2luIiwiaWF0IjoxNjY1ODUxNjE1LCJleHAiOjE2NjU4NTUyMTUsIm5iZiI6MTY2NTg1MTYxNSwianRpIjoiQXZqVkdGdWhBbXE0dDR4ciIsInN1YiI6MzcsInBydiI6IjhkNDQxMWNkMjQxZjFhOWVhZDNjYTc0ODY3NDRlYjRlZDA2NzY4MWIifQ.--V4VtcWJQ1vKV23NnmdNiQBy1AzcrAIhAm__c-C_F4', 'frwfwrfrr', '2022-09-28 12:33:06', '2022-10-15 20:33:35'),
(38, 2, NULL, 'Harper', 'Larson', 'ganipe@mailinator.com', '$2y$10$VN3Nek0M1BNseo4aqUBO2.CgmFLsfF/Zt2zxspZIPH7UPUKq6kZFW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2022-11-17 20:29:44', '2022-11-17 20:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_banks`
--

CREATE TABLE `doctor_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `countryId` int(11) DEFAULT NULL,
  `cityId` int(11) DEFAULT NULL,
  `name_acount` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `International_bank_number` varchar(255) DEFAULT NULL,
  `swift_code` varchar(255) DEFAULT NULL,
  `transit_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_cases`
--

CREATE TABLE `doctor_cases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `status_servic` int(11) NOT NULL DEFAULT 1,
  `status_not` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_cases`
--

INSERT INTO `doctor_cases` (`id`, `doctorId`, `status_servic`, `status_not`, `created_at`, `updated_at`) VALUES
(18, 18, 0, 0, '2022-04-04 15:02:38', '2022-04-04 15:02:38'),
(25, 25, 0, 0, '2022-04-27 01:18:44', '2022-04-27 01:18:44'),
(27, 27, 0, 0, '2022-07-27 18:37:46', '2022-07-27 18:37:46'),
(28, 28, 0, 0, '2022-07-28 11:32:04', '2022-07-28 11:32:04'),
(29, 29, 0, 0, '2022-07-28 11:34:38', '2022-07-28 11:34:38'),
(30, 30, 0, 0, '2022-07-28 11:35:31', '2022-07-28 11:35:31'),
(31, 31, 0, 0, '2022-07-28 11:36:50', '2022-07-28 11:36:50'),
(32, 32, 0, 0, '2022-07-28 11:38:28', '2022-07-28 11:38:28'),
(33, 33, 0, 0, '2022-07-28 11:51:29', '2022-07-28 11:51:29'),
(34, 34, 0, 0, '2022-07-28 20:34:04', '2022-07-28 20:34:04'),
(35, 35, 0, 0, '2022-07-28 20:37:45', '2022-07-28 20:37:45'),
(36, 36, 0, 0, '2022-07-28 20:41:31', '2022-07-28 20:41:31'),
(37, 37, 0, 0, '2022-09-28 12:33:06', '2022-09-28 12:33:06'),
(38, 38, 0, 0, '2022-11-17 20:29:44', '2022-11-17 20:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_certificates`
--

CREATE TABLE `doctor_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `file` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_educations`
--

CREATE TABLE `doctor_educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `degreeId` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_experiences`
--

CREATE TABLE `doctor_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_desc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_insurances`
--

CREATE TABLE `doctor_insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `companies_insuranceId` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_languages`
--

CREATE TABLE `doctor_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `languageId` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_licenses`
--

CREATE TABLE `doctor_licenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `placeLicensesId` int(11) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `num` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_licenses`
--

INSERT INTO `doctor_licenses` (`id`, `doctorId`, `placeLicensesId`, `place`, `num`, `name`, `created_at`, `updated_at`) VALUES
(8, 18, NULL, NULL, NULL, NULL, '2022-04-04 15:02:38', '2022-04-04 15:02:38'),
(14, 25, NULL, NULL, NULL, NULL, '2022-04-27 01:18:44', '2022-04-27 01:18:44'),
(16, 27, NULL, NULL, NULL, NULL, '2022-07-27 18:37:46', '2022-07-27 18:37:46'),
(17, 28, NULL, NULL, NULL, NULL, '2022-07-28 11:32:04', '2022-07-28 11:32:04'),
(18, 29, NULL, NULL, NULL, NULL, '2022-07-28 11:34:38', '2022-07-28 11:34:38'),
(19, 30, NULL, NULL, NULL, NULL, '2022-07-28 11:35:31', '2022-07-28 11:35:31'),
(20, 31, NULL, NULL, NULL, NULL, '2022-07-28 11:36:50', '2022-07-28 11:36:50'),
(21, 32, NULL, NULL, NULL, NULL, '2022-07-28 11:38:28', '2022-07-28 11:38:28'),
(22, 33, NULL, NULL, NULL, NULL, '2022-07-28 11:51:29', '2022-07-28 11:51:29'),
(23, 34, NULL, NULL, NULL, NULL, '2022-07-28 20:34:04', '2022-07-28 20:34:04'),
(24, 35, NULL, NULL, NULL, NULL, '2022-07-28 20:37:45', '2022-07-28 20:37:45'),
(25, 36, NULL, NULL, NULL, NULL, '2022-07-28 20:41:31', '2022-07-28 20:41:31'),
(26, 37, NULL, NULL, NULL, NULL, '2022-09-28 12:33:06', '2022-09-28 12:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_services`
--

CREATE TABLE `doctor_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `subCategoryId` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'not verified',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `local` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_ship_types`
--

CREATE TABLE `member_ship_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chatID` bigint(20) UNSIGNED NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `senderType` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2017_05_12_115258_create_companies_insurances_table', 1),
(4, '2018_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_11_09_035609_create_specialities_table', 1),
(6, '2020_11_09_040310_create_member_ship_types_table', 1),
(7, '2020_11_09_040539_create_contact_infos_table', 1),
(8, '2020_12_30_150639_create_permission_tables', 1),
(9, '2021_05_27_055237_create_banks_table', 1),
(10, '2021_06_12_103149_create_categories_table', 1),
(11, '2021_06_12_103220_create_sub_categories_table', 1),
(12, '2021_06_12_103243_create_child_categories_table', 1),
(13, '2021_06_12_103309_create_countries_table', 1),
(14, '2021_06_12_103324_create_cities_table', 1),
(15, '2021_06_12_103344_create_states_table', 1),
(16, '2021_06_12_103358_create_languages_table', 1),
(17, '2021_06_12_105626_create_foreign_keys_table', 1),
(18, '2021_06_12_112150_create_doctors_table', 1),
(19, '2021_06_12_112203_create_patients_table', 1),
(20, '2021_06_13_040310_create_patient_cases_table', 1),
(21, '2021_06_13_040310_create_patient_health_information_table', 1),
(22, '2021_06_13_040310_create_patient_location_table', 1),
(23, '2021_06_13_040310_create_people_under_care_health_table', 1),
(24, '2021_06_13_040310_create_people_under_care_table', 1),
(25, '2021_06_14_103242_create_vendors_table', 1),
(26, '2021_06_14_103243_create_products_table', 1),
(27, '2021_06_14_112255_create_comments_table', 1),
(28, '2021_06_14_113042_create_favorites_table', 1),
(29, '2021_06_14_113054_create_payments_table', 1),
(30, '2021_06_14_113106_create_reviews_table', 1),
(31, '2021_06_23_054152_create_placeissuancelicenses_table', 1),
(32, '2021_06_23_054354_create_degrees_table', 1),
(33, '2021_06_24_095432_create_doctor_insurances_table', 1),
(34, '2021_06_24_095446_create_doctor_certificates_table', 1),
(35, '2021_06_24_095709_create_doctor_languages_table', 1),
(36, '2021_06_24_111908_create_doctor_banks_table', 1),
(37, '2021_06_25_040310_create_doctor_cases_table', 1),
(38, '2021_06_25_055810_create_doctor_services_table', 1),
(39, '2021_06_25_095532_create_doctor_educations_table', 1),
(40, '2021_06_25_101420_create_doctor_licenses_table', 1),
(41, '2021_06_30_074733_create_doctor_experiences_table', 1),
(42, '2021_06_30_125517_create_work_days_table', 1),
(43, '2021_06_31_122714_create_days_table', 1),
(44, '2021_06_31_122859_create_times_table', 1),
(45, '2021_07_05_040401_create_blocks_table', 1),
(46, '2021_07_05_062136_create_chats_table', 1),
(47, '2021_07_05_062200_create_messages_table', 1),
(48, '2021_07_06_040117_create_orders_table', 1),
(49, '2021_07_07_040117_create_order_images_table', 1),
(50, '2021_07_07_040117_create_orders_products_table', 1),
(51, '2021_07_07_040310_create_Order_sub_categories_table', 1),
(52, '2021_11_10_040310_create_wallets_table', 1),
(53, '2021_11_11_040310_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `count` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `count`, `created_at`, `updated_at`) VALUES
('062dc224-4045-4a8f-8741-2b9e2a60b3fb', 'App\\Notifications\\VendorNewNotification', 'App\\Vendor', 2, '{\"id\":\"2\",\"message\":\"hello\",\"orderId\":\"\"}', NULL, NULL, '2022-02-07 04:50:03', '2022-02-07 04:50:03'),
('0f6d39e9-8257-4b93-a265-6597d21abc5e', 'App\\Notifications\\VendorNewNotification', 'App\\Vendor', 1, '{\"id\":\"1\",\"message\":\"sdddddddd\",\"orderId\":241}', NULL, NULL, '2022-02-07 04:46:45', '2022-02-07 04:46:45'),
('2fd1e65c-90f6-44cb-ad6c-af4ae98001cf', 'App\\Notifications\\VendorNewNotification', 'App\\Vendor', 2, '{\"id\":\"2\",\"message\":\"\\u0645\\u0631\\u062d\\u0628\\u0627\",\"orderId\":\"\"}', NULL, NULL, '2022-04-07 19:36:01', '2022-04-07 19:36:01'),
('623b789d-1a84-4ae7-a640-34270ab0efd0', 'App\\Notifications\\VendorNewNotification', 'App\\Vendor', 1, '{\"id\":\"1\",\"message\":\"\\u0645\\u0631\\u062d\\u0628\\u0627\",\"orderId\":\"\"}', NULL, NULL, '2022-04-07 19:36:01', '2022-04-07 19:36:01'),
('627c0749-3d4d-4e0e-8912-a61e5bbc3267', 'App\\Notifications\\PatientNewNotification', 'App\\Patient', 1, '{\"name\":\"hamada\",\"id\":1,\"message\":\"اهلا بيك\",\"photo\":\"1634446162.jpg\",\"orderId\":215}', NULL, NULL, '2022-02-02 08:42:28', '2022-02-02 08:42:28'),
('9de87576-085c-4adc-9f84-ee1c37d00c71', 'App\\Notifications\\VendorNewNotification', 'App\\Vendor', 2, '{\"id\":\"2\",\"message\":\"sssssssssssssss\",\"orderId\":241}', NULL, NULL, '2022-02-07 04:46:28', '2022-02-07 04:46:28'),
('a1dbf728-68e9-40fa-924c-ecb5ee8e7642', 'App\\Notifications\\VendorNewNotification', 'App\\Vendor', 1, '{\"id\":\"1\",\"message\":\"eeeee\",\"orderId\":241}', NULL, NULL, '2022-02-07 04:45:53', '2022-02-07 04:45:53'),
('b05248fa-1976-473c-8ac5-0855c5d83b6a', 'App\\Notifications\\VendorNewNotification', 'App\\Vendor', 1, '{\"id\":5,\"message\":\"welcome\",\"orderId\":241}', NULL, NULL, '2022-02-05 12:53:23', '2022-02-05 12:53:23'),
('d8868714-5f7f-40dc-987c-c1e10df4e626', 'App\\Notifications\\VendorNewNotification', 'App\\Vendor', 1, '{\"id\":5,\"message\":\"welcome\",\"orderId\":241}', NULL, 'eee', '2022-02-05 12:12:04', '2022-02-05 12:12:04'),
('daa52c04-5f1a-4137-a4ec-a1b35c64fdcd', 'App\\Notifications\\PatientNewNotification', 'App\\Patient', 1, '{\"name\":\"hamada\",\"id\":1,\"message\":\"اهلا\",\"photo\":\"1634446162.jpg\",\"orderId\":214}', NULL, NULL, '2022-02-02 08:41:18', '2022-02-02 08:41:18'),
('de5bf921-7174-4df5-9666-f0e077efc45b', 'App\\Notifications\\VendorNewNotification', 'App\\Vendor', 4, '{\"id\":\"4\",\"message\":\"\\u0645\\u0631\\u062d\\u0628\\u0627\",\"orderId\":\"\"}', NULL, NULL, '2022-04-07 19:36:01', '2022-04-07 19:36:01'),
('ecfd6749-56e5-4c48-bce1-23f3b9cf0641', 'App\\Notifications\\PatientNewNotification', 'App\\Patient', 1, '{\"name\":\"hamada\",\"id\":\"5\",\"message\":\"تتتتت\",\"photo\":\"1634446162.jpg\",\"orderId\":216}', NULL, NULL, '2022-02-02 10:44:29', '2022-02-02 10:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `vendorId` bigint(20) UNSIGNED NOT NULL,
  `patientUnderCareId` int(11) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL,
  `patientlocationId` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `method_payment` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` bigint(20) UNSIGNED NOT NULL,
  `orderProductId` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_images`
--

CREATE TABLE `order_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Order_sub_categories`
--

CREATE TABLE `Order_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` bigint(20) UNSIGNED NOT NULL,
  `subCategoryId` bigint(20) UNSIGNED NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('hamadaali221133@gmail.com', 'Y5Llh9JfBdmGz4jsdoEAzdVo046hyhVg8OKkIb82o3C4St0vKaAvTjPNJLSuSbII', '2022-04-02 17:46:30'),
('hamadaali221133@gmail.com', 'TAVEbsXRAqVym4FP3qw6XCEvjXaS2kLHwpS8h6RVmUCuaWwrfSyb70Q4BHMu5hho', '2022-04-02 17:47:22'),
('hamadaali221133@gmail.com', 'irjM7ijWYOoE6BXwYDCwfVwYo0Gms1LuRdy4mjDD08F8z32ImEns7Nyk814ziYwD', '2022-04-02 17:48:35'),
('hamadaali221133@gmail.com', 'FQOK4mEjfaKjLFBfKLRzTIIBsK7d0TnbhaQQvekgU9M8TRujrZM3LA2VdS3Yjp5l', '2022-04-02 17:48:46'),
('hamadaali221133@gmail.com', 'ZEmdc4ZTx44bM1HwiJH1JsilQsZ0C99LrALY2gVoO4k7VDmUc4bPiSI7jH8mZzE6', '2022-04-02 17:49:34'),
('hamadaali221133@gmail.com', 'pQgtz0sLR76DNTncZCjCEgZytdQ9SrJz6KjSzo5F1ivhck6tpiM4mzqY1fEs5Ioi', '2022-04-02 17:50:59'),
('hamadaali221133@gmail.com', '6PzcNmvNokocn5RQJPNTY1C1Mj6oFtFTSpW967Xpr0hUExQerWqjrOJNvo9mtxoi', '2022-04-02 17:53:13'),
('hamadaali221133@gmail.com', 'Dfj9lKITISkHoN2EoWD2O7bXXBRI6RsEmtaY5Nx4GbOJ7X0PHsJae3sOHgxcF6t6', '2022-04-02 17:54:07'),
('hamadaali221133@gmail.com', 'iLPuhJamXY33yfkGai6goc0hlS9dW8uWHdGTMQWj41u0Q9Yg3ZtEl8VptrOutSva', '2022-04-02 17:54:45'),
('hamadaali221133@gmail.com', 'xVnLBshBq2BGhJZGrf95fQibrU4R2cCM0rkNdkezcILrfgroeYrFlGakkQagrQLd', '2022-04-02 18:02:17'),
('hamadaali221133@gmail.com', 'RQQhfYSSYHnTKjvZU1KJsIBcyyVNX97fxLO1ZxmvXSE1rcBcIzoO4SpbtIVsTDED', '2022-04-02 18:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `countryId` int(11) DEFAULT NULL,
  `cityId` int(11) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `personality_number` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `is_activated` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `paid` int(11) DEFAULT NULL,
  `token` text DEFAULT NULL,
  `device_token` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `first_name`, `last_name`, `email`, `password`, `countryId`, `cityId`, `state`, `personality_number`, `mobile`, `photo`, `gender`, `dateOfBirth`, `is_activated`, `status`, `paid`, `token`, `device_token`, `created_at`, `updated_at`) VALUES
(1, 'حماده ', 'علي', 'hamadaali221133@gmail.com', '$2y$10$v8B8idYHemGAR9EflO7MhebBTSKNWhvmQuqpxrQm0lCUFrRRIcm2m', 1, 1, NULL, 'ewfr', '235346', NULL, NULL, '2022-03-07', 1, 1, NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYmVhdXRpaGVhdGguY29tXC9hcGlcL3YxXC9wYXRpZW50XC9sb2dpbiIsImlhdCI6MTY2NDM1MzEwNywiZXhwIjoxNjY0MzU2NzA3LCJuYmYiOjE2NjQzNTMxMDcsImp0aSI6Ilhyb1Y1T2VTRDdLMEpHa2siLCJzdWIiOjEsInBydiI6IjFmZDU0MjMxNjI4ZmU3NDk3ZGI2ZjkxNjJjMjQ2NTc4YTdjNzgxY2EifQ.PO5ESbSWQegrNwqmSzuNi7MEWWjGDSPAhtOvicPy9H8', 'frwfwrfrr', NULL, '2022-09-28 12:18:27'),
(11, 'gtrg', 'rtgr', 'hamadaali889900@gmail.com', '$2y$10$s8d2ivMZ9rLbgbg7wJ0hi.kp8.NTS3RdkcjMQ2YV.7LVjXrOq4bRm', 1, NULL, NULL, NULL, '24564765', NULL, 'male', '2022-04-07', 1, 1, NULL, NULL, NULL, '2022-04-27 09:30:30', '2022-04-27 09:30:30'),
(12, 'Dudh', '‏hdhdBbb', 'hamagdh@gdh.com', '$2y$10$kGLM5qg5ubCj19mgrnEqd.IkkDEfaf7eYJ9chVJYO.KqcgCXCMNsi', 1, NULL, NULL, NULL, '02737u3', NULL, 'ذكر', '2000-01-01', 1, 1, NULL, NULL, NULL, '2022-04-27 09:33:42', '2022-04-27 09:33:42'),
(13, 'حامد', 'عمران', 'f123456khkh@gmail.com', '$2y$10$9psjubO9al2qGBSu0mEhWuYhDK6fTrAOSrC5UoInM3tGRVaIXU.S6', 1, NULL, NULL, NULL, '0546789965', NULL, 'ذكر', '1988-01-11', 1, 1, NULL, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9iZWF1dGloZWF0aC5jb21cL2FwaVwvdjFcL3BhdGllbnRcL2xvZ2luIiwiaWF0IjoxNjUxMDg3NTUxLCJleHAiOjE2NTEwOTExNTEsIm5iZiI6MTY1MTA4NzU1MSwianRpIjoiQlZKbmFTdDk0aFdIWlJMMSIsInN1YiI6MTMsInBydiI6IjFmZDU0MjMxNjI4ZmU3NDk3ZGI2ZjkxNjJjMjQ2NTc4YTdjNzgxY2EifQ.ij7Kjkcd0p0lMQGU5RDWLLpKXYVMZoqGr70HtM-552k', 'eOVluWU3QviQqQSqPvBxcH:APA91bHfeueJmd-bhhqZyxIz1OAxSEYyJkFEr4rjuhGV3uT7eT0GPl4evA0c5B5Jl21_DgLGvIdLUZp0L6kntebx9CDwplY3GP1Meiqyesf8FHYudqE9RttX-gO8I3inMh5Vu-Z9C6Yg', '2022-04-27 14:31:18', '2022-04-27 23:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `patient_cases`
--

CREATE TABLE `patient_cases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `status_servic` int(11) NOT NULL DEFAULT 1,
  `status_not` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_health_information`
--

CREATE TABLE `patient_health_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `pressure` varchar(255) DEFAULT NULL,
  `chronic` varchar(255) DEFAULT NULL,
  `ege` int(11) DEFAULT NULL,
  `companies_insuranceId` int(11) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_health_information`
--

INSERT INTO `patient_health_information` (`id`, `patientId`, `blood`, `weight`, `height`, `pressure`, `chronic`, `ege`, `companies_insuranceId`, `number`, `type`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-27 09:30:30', '2022-04-27 09:30:30'),
(11, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-27 09:33:42', '2022-04-27 09:33:42'),
(12, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-27 14:31:18', '2022-04-27 14:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `patient_location`
--

CREATE TABLE `patient_location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `countryId` int(11) DEFAULT NULL,
  `cityId` int(11) DEFAULT NULL,
  `location_name` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `building_name` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `floor_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_location`
--

INSERT INTO `patient_location` (`id`, `patientId`, `countryId`, `cityId`, `location_name`, `state`, `street`, `building_name`, `longitude`, `latitude`, `floor_number`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'Hggccc', 'Ggggg', 'Yggvccc', 'Ggccvc', '-6.781072318553925', '-42.76659086668113', '9965556', '2022-04-20 11:48:16', '2022-04-20 11:48:16'),
(2, 1, 1, 1, 'Gzhzb', 'Hshh', 'Hhg', 'Hhhh', '31.278262920677662', '29.84719359547105', '9999', '2022-05-03 19:53:57', '2022-05-03 19:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `cvc` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people_under_care`
--

CREATE TABLE `people_under_care` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `years` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `pressure` varchar(255) DEFAULT NULL,
  `chronic` varchar(255) DEFAULT NULL,
  `companies_insuranceId` int(11) NOT NULL,
  `other_companies_insurance` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people_under_care_health`
--

CREATE TABLE `people_under_care_health` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `pressure` varchar(255) DEFAULT NULL,
  `chronic` varchar(255) DEFAULT NULL,
  `insurance` varchar(255) NOT NULL,
  `ege` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'categories', 'web', NULL, NULL),
(2, 'doctors', 'web', NULL, NULL),
(3, 'patients', 'web', NULL, NULL),
(4, 'shops', 'web', NULL, NULL),
(5, 'countries', 'web', NULL, NULL),
(6, 'cities', 'web', NULL, NULL),
(7, 'all-vendor-orders', 'web', NULL, NULL),
(8, 'all-vendor-orders', 'web', NULL, NULL),
(9, 'settings', 'web', NULL, NULL),
(10, 'المستخدمين', 'web', NULL, NULL),
(11, 'قائمة المستخدمين', 'web', NULL, NULL),
(12, 'صلاحيات المستخدمين', 'web', NULL, NULL),
(13, 'الاعدادات', 'web', NULL, NULL),
(14, 'المنتجات', 'web', NULL, NULL),
(15, 'الاقسام', 'web', NULL, NULL),
(16, 'اضافة فاتورة', 'web', NULL, NULL),
(17, 'حذف الفاتورة', 'web', NULL, NULL),
(18, 'تصدير EXCEL', 'web', NULL, NULL),
(19, 'تغير حالة الدفع', 'web', NULL, NULL),
(20, 'تعديل الفاتورة', 'web', NULL, NULL),
(21, 'ارشفة الفاتورة', 'web', NULL, NULL),
(22, 'طباعةالفاتورة', 'web', NULL, NULL),
(23, 'اضافة مرفق', 'web', NULL, NULL),
(24, 'حذف المرفق', 'web', NULL, NULL),
(25, 'اضافة مستخدم', 'web', NULL, NULL),
(26, 'تعديل مستخدم', 'web', NULL, NULL),
(27, 'حذف مستخدم', 'web', NULL, NULL),
(28, 'عرض صلاحية', 'web', NULL, NULL),
(29, 'اضافة صلاحية', 'web', NULL, NULL),
(30, 'تعديل صلاحية', 'web', NULL, NULL),
(31, 'حذف صلاحية', 'web', NULL, NULL),
(32, 'اضافة منتج', 'web', NULL, NULL),
(33, 'تعديل منتج', 'web', NULL, NULL),
(34, 'حذف منتج', 'web', NULL, NULL),
(35, 'اضافة قسم', 'web', NULL, NULL),
(36, 'تعديل قسم', 'web', NULL, NULL),
(37, 'حذف قسم', 'web', NULL, NULL),
(38, 'الاشعارات', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `placeissuancelicenses`
--

CREATE TABLE `placeissuancelicenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendorId` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `cover_img` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `size` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `vendorId`, `name_ar`, `name_en`, `description_ar`, `description_en`, `price`, `quantity`, `cover_img`, `slug`, `date`, `size`, `color`, `status`, `created_at`, `updated_at`) VALUES
(4, 7, 'everv', 'everv', 'ervr', 'ervr', 33.00, 333, '165108270857.jpg', NULL, NULL, NULL, NULL, 0, '2022-04-27 22:05:08', '2022-04-27 22:05:08'),
(5, 14, 'عطورات ش', 'عطورات ش', 'عطور شرقية', 'عطور شرقية', 200.00, 50, '165108654943.jpg', NULL, NULL, NULL, NULL, 0, '2022-04-27 23:09:09', '2022-04-27 23:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `comment` text DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', NULL, NULL),
(2, 'editor', 'web', NULL, NULL);

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
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countryId` bigint(20) UNSIGNED NOT NULL,
  `cityId` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `description_ar` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug_ar` varchar(255) DEFAULT NULL,
  `slug_en` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `top` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `categoryId`, `title_ar`, `title_en`, `description_ar`, `description_en`, `icon`, `price`, `image`, `slug_ar`, `slug_en`, `status`, `top`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 'rhy', 'herhyt', 'hte', 'hte', '164977454065.jpg', 44.00, '164977454076.jpg', 'rhy', 'herhyt', 0, 1, 0, '2022-04-12 18:42:20', '2022-04-12 18:42:34'),
(2, 1, 'ewvw', 'weve', 'ewv', 'ewv', '165103539380.jpg', NULL, '16510353931.jpg', 'ewvw', 'weve', 0, 0, 0, '2022-04-27 08:56:33', '2022-04-27 09:24:41'),
(3, 1, 'vwv', 'wevw', 'evew', 'vwev', NULL, 33.00, NULL, 'vwv', 'wevw', 0, 0, 0, '2022-04-27 09:25:59', '2022-04-27 09:25:59'),
(4, 4, 'حجامة وقاية', 'Hijama wega', 'تنشيطية', 'Stroong', NULL, 50.00, NULL, 'حجامة وقاية', 'Hijama wega', 0, 0, 0, '2022-04-27 14:38:32', '2022-04-27 14:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_dayId` bigint(20) UNSIGNED NOT NULL,
  `from_time` varchar(255) DEFAULT NULL,
  `to_time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `work_dayId`, `from_time`, `to_time`, `created_at`, `updated_at`) VALUES
(6, 12, NULL, NULL, '2022-04-04 15:02:38', '2022-04-04 15:02:38'),
(13, 19, NULL, NULL, '2022-04-27 01:18:44', '2022-04-27 01:18:44'),
(15, 21, NULL, NULL, '2022-07-27 18:37:46', '2022-07-27 18:37:46'),
(16, 22, NULL, NULL, '2022-07-28 11:32:04', '2022-07-28 11:32:04'),
(17, 23, NULL, NULL, '2022-07-28 11:34:38', '2022-07-28 11:34:38'),
(18, 24, NULL, NULL, '2022-07-28 11:35:31', '2022-07-28 11:35:31'),
(19, 25, NULL, NULL, '2022-07-28 11:36:50', '2022-07-28 11:36:50'),
(20, 26, NULL, NULL, '2022-07-28 11:38:28', '2022-07-28 11:38:28'),
(21, 27, NULL, NULL, '2022-07-28 11:51:29', '2022-07-28 11:51:29'),
(22, 28, NULL, NULL, '2022-07-28 20:34:04', '2022-07-28 20:34:04'),
(23, 29, NULL, NULL, '2022-07-28 20:37:45', '2022-07-28 20:37:45'),
(24, 30, NULL, NULL, '2022-07-28 20:41:31', '2022-07-28 20:41:31'),
(25, 31, NULL, NULL, '2022-09-28 12:33:06', '2022-09-28 12:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `walletId` int(11) DEFAULT NULL,
  `orderId` int(11) DEFAULT NULL,
  `transferFrom` int(11) DEFAULT NULL,
  `transferTo` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `withdraw` double(8,2) DEFAULT NULL,
  `value` double(8,2) DEFAULT NULL,
  `report` text DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `oldValue` int(11) DEFAULT NULL,
  `newValue` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'admin',
  `roles_name` text NOT NULL,
  `Status` varchar(10) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `expire` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=>active 1=>expire',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `dateOfBirth`, `mobile`, `address`, `photo`, `type`, `roles_name`, `Status`, `remember_token`, `expire`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$v8B8idYHemGAR9EflO7MhebBTSKNWhvmQuqpxrQm0lCUFrRRIcm2m', NULL, '023454', 'القاهره', '1613493502.png', 'admin', '[\"owner\"]', 'مفعل', NULL, 1, '2021-01-03 03:43:48', '2021-06-29 05:10:02'),
(2, 'hamada', 'hamada@hamada.com', '$2y$10$bOrXfCIhO5mCFWHeNoPNKuPHfpNxduJn4QDKGuZsnj72RPzSOTZK2', NULL, NULL, NULL, NULL, 'admin', '[\"employee\"]', 'مفعل', NULL, 1, '2021-01-03 07:02:34', '2021-06-29 05:10:02'),
(4, 'khalid', 'khalid@gmail.com', '$2y$10$cMTJJhsHX/NiuB/XH5wI8OaGjCi1dOXP0pnMXbU4EvAz8czIt.Yqq', NULL, '0568645742', 'alazeezia', '1625121236.jpg', 'admin', '[\"Admin\"]', 'مفعل', NULL, 1, '2021-07-01 06:33:56', '2021-07-01 06:48:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_activations`
--

CREATE TABLE `user_activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_activations`
--

INSERT INTO `user_activations` (`id`, `id_user`, `token`, `created_at`) VALUES
(288, 8, 'zzQ2rYSsRej2PinQxVy2kix1fcbwtzZS', '2022-04-26 15:38:27'),
(289, 22, 'mSlnBCRSxJ3vuf34ycnyOYGQFQk2EsFb', '2022-04-26 20:19:55'),
(290, 23, 'qyO5G78Z8LtnkRpcan3pUE0xyZRa6jr7', '2022-04-26 20:28:04'),
(291, 24, 'pHUKgVWQk6FV7SRmoZAzTCa2hWZieqqd', '2022-04-26 20:45:40'),
(292, 9, 'HjRz1FvC59QGatCrbpTa5Qd7DLzSuzqT', '2022-04-26 20:48:47'),
(294, 10, 'WsItQ5NJqoiXuVtgmS1FgvlfWzn8N5ve', '2022-04-26 21:21:42'),
(295, 11, 'gxaJoV51wU3CDCnhGl7IOuupDv56YeVn', '2022-04-27 05:30:30'),
(296, 12, '1uArlXwB5iPTJTMcvbF8egpoFs2M8MyT', '2022-04-27 05:33:42'),
(297, 13, '8deh9rkf4HYrL3JsmjazCsq0ekUlDTFc', '2022-04-27 10:31:18'),
(299, 26, 'WGwRUDpz1KETKbavsxZACzQl8WEHG4kK', '2022-07-27 14:17:28'),
(300, 27, 'UZNJJTrZZwI5Q24A8LXxd88dOw1mipr5', '2022-07-27 14:37:46'),
(301, 28, 'hqGlUxArpszB5apyxijlvaYQUMU912Gu', '2022-07-28 07:32:04'),
(302, 29, 'aQyOSNL2wpbA5Fnp68TiXcnVwdoWFFlN', '2022-07-28 07:34:38'),
(303, 30, 'tfqi8IajzFx9sSucWjV82Yf3gKBkdaFU', '2022-07-28 07:35:31'),
(304, 31, 'JvXyQR9VTcAURUNwL94YdYzPOl7hbLRj', '2022-07-28 07:36:50'),
(305, 32, 'oDfCS79a8YIzodDclVudqh6jrLM4QpFX', '2022-07-28 07:38:28'),
(306, 33, 'yBnlwmYHf2kpDEE49fNZpRRZLl1tk0lt', '2022-07-28 07:51:29'),
(307, 34, 'VByoB0ACuXgcTYjLzohCQ2dStfIoNTEe', '2022-07-28 16:34:04'),
(308, 35, 'XrdD8LwWJhvEGOnnefP8ZEBCL9sfZESX', '2022-07-28 16:37:45'),
(309, 36, '96a8Ks2BGzPUerh86FET3tpDENfWKDZK', '2022-07-28 16:41:31'),
(311, 38, 'GgX5p9gmkciKR9Rdr958CI16Uj6DT1Uy', '2022-11-17 15:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `countryId` int(11) DEFAULT NULL,
  `cityId` int(11) DEFAULT NULL,
  `stateID` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `type` varchar(255) DEFAULT NULL,
  `is_activated` int(11) NOT NULL DEFAULT 0,
  `token` text DEFAULT NULL,
  `device_token` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `countryId`, `cityId`, `stateID`, `name`, `email`, `password`, `dateOfBirth`, `mobile`, `photo`, `gender`, `detail`, `status`, `type`, `is_activated`, `token`, `device_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'vendor', 'hamadaali221133@gmail.com', '$2y$10$354cBa1OkPFlSGIrueq9beYq/ztuLvMmE5F0vPgyZWMdox55CRZR.', NULL, '12345678', '1636529457.jpeg', NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, '2022-04-02 16:50:56'),
(7, 1, NULL, NULL, 'vfdvdf', 'vendors@vendors.com', '$2y$10$v8B8idYHemGAR9EflO7MhebBTSKNWhvmQuqpxrQm0lCUFrRRIcm2m', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, '2022-04-12 18:49:00', '2022-04-12 18:49:00'),
(13, 1, NULL, NULL, 'vfdvdf', 'hamadaali889900@gmail.com', '$2y$10$fhtNBiOmqwS0I5fkbM9b7efC4G7d9SAljF8tvkf.2uOzgU9MuxXQ.', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, '2022-04-12 20:23:36', '2022-04-12 20:24:19'),
(14, 1, NULL, NULL, 'سليم', 'f123456khkh@gmail.com', '$2y$10$TNwRVRvGnWeTpb4LZsqCluoC13V8f7/S.g6sZ1cHQmH1Bl3uiBQc2', NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL, NULL, '2022-04-27 14:47:20', '2022-04-27 14:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `patientId` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `total` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_days`
--

CREATE TABLE `work_days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorId` bigint(20) UNSIGNED NOT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_days`
--

INSERT INTO `work_days` (`id`, `doctorId`, `from_date`, `to_date`, `duration`, `created_at`, `updated_at`) VALUES
(12, 18, NULL, NULL, NULL, '2022-04-04 15:02:38', '2022-04-04 15:02:38'),
(19, 25, NULL, NULL, NULL, '2022-04-27 01:18:44', '2022-04-27 01:18:44'),
(21, 27, NULL, NULL, NULL, '2022-07-27 18:37:46', '2022-07-27 18:37:46'),
(22, 28, NULL, NULL, NULL, '2022-07-28 11:32:04', '2022-07-28 11:32:04'),
(23, 29, NULL, NULL, NULL, '2022-07-28 11:34:38', '2022-07-28 11:34:38'),
(24, 30, NULL, NULL, NULL, '2022-07-28 11:35:31', '2022-07-28 11:35:31'),
(25, 31, NULL, NULL, NULL, '2022-07-28 11:36:50', '2022-07-28 11:36:50'),
(26, 32, NULL, NULL, NULL, '2022-07-28 11:38:28', '2022-07-28 11:38:28'),
(27, 33, NULL, NULL, NULL, '2022-07-28 11:51:29', '2022-07-28 11:51:29'),
(28, 34, NULL, NULL, NULL, '2022-07-28 20:34:04', '2022-07-28 20:34:04'),
(29, 35, NULL, NULL, NULL, '2022-07-28 20:37:45', '2022-07-28 20:37:45'),
(30, 36, NULL, NULL, NULL, '2022-07-28 20:41:31', '2022-07-28 20:41:31'),
(31, 37, NULL, NULL, NULL, '2022-09-28 12:33:06', '2022-09-28 12:33:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blocks_doctorid_foreign` (`doctorId`),
  ADD KEY `blocks_patientid_foreign` (`patientId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_doctorid_foreign` (`doctorId`),
  ADD KEY `chats_patientid_foreign` (`patientId`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_categories_categoryid_foreign` (`categoryId`),
  ADD KEY `child_categories_subcategoryid_foreign` (`subCategoryId`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_countryid_foreign` (`countryId`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_patientid_foreign` (`patientId`);

--
-- Indexes for table `companies_insurances`
--
ALTER TABLE `companies_insurances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`),
  ADD KEY `days_work_dayid_foreign` (`work_dayId`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`);

--
-- Indexes for table `doctor_banks`
--
ALTER TABLE `doctor_banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_banks_doctorid_foreign` (`doctorId`);

--
-- Indexes for table `doctor_cases`
--
ALTER TABLE `doctor_cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_cases_doctorid_foreign` (`doctorId`);

--
-- Indexes for table `doctor_certificates`
--
ALTER TABLE `doctor_certificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_certificates_doctorid_foreign` (`doctorId`);

--
-- Indexes for table `doctor_educations`
--
ALTER TABLE `doctor_educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_educations_doctorid_foreign` (`doctorId`);

--
-- Indexes for table `doctor_experiences`
--
ALTER TABLE `doctor_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_experiences_doctorid_foreign` (`doctorId`);

--
-- Indexes for table `doctor_insurances`
--
ALTER TABLE `doctor_insurances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_insurances_doctorid_foreign` (`doctorId`);

--
-- Indexes for table `doctor_languages`
--
ALTER TABLE `doctor_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_languages_doctorid_foreign` (`doctorId`);

--
-- Indexes for table `doctor_licenses`
--
ALTER TABLE `doctor_licenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_licenses_doctorid_foreign` (`doctorId`);

--
-- Indexes for table `doctor_services`
--
ALTER TABLE `doctor_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_services_categoryid_foreign` (`categoryId`),
  ADD KEY `doctor_services_subcategoryid_foreign` (`subCategoryId`),
  ADD KEY `doctor_services_doctorid_foreign` (`doctorId`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_doctorid_foreign` (`doctorId`),
  ADD KEY `favorites_patientid_foreign` (`patientId`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_ship_types`
--
ALTER TABLE `member_ship_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_chatid_foreign` (`chatID`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`(191),`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_doctorid_foreign` (`doctorId`),
  ADD KEY `orders_patientid_foreign` (`patientId`),
  ADD KEY `orders_vendorid_foreign` (`vendorId`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_products_orderid_foreign` (`orderId`);

--
-- Indexes for table `order_images`
--
ALTER TABLE `order_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_images_orderid_foreign` (`orderId`);

--
-- Indexes for table `Order_sub_categories`
--
ALTER TABLE `Order_sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_sub_categories_orderid_foreign` (`orderId`),
  ADD KEY `order_sub_categories_subcategoryid_foreign` (`subCategoryId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_email_unique` (`email`);

--
-- Indexes for table `patient_cases`
--
ALTER TABLE `patient_cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_cases_patientid_foreign` (`patientId`);

--
-- Indexes for table `patient_health_information`
--
ALTER TABLE `patient_health_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_health_information_patientid_foreign` (`patientId`);

--
-- Indexes for table `patient_location`
--
ALTER TABLE `patient_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_location_patientid_foreign` (`patientId`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_doctorid_foreign` (`doctorId`),
  ADD KEY `payments_patientid_foreign` (`patientId`);

--
-- Indexes for table `people_under_care`
--
ALTER TABLE `people_under_care`
  ADD PRIMARY KEY (`id`),
  ADD KEY `people_under_care_patientid_foreign` (`patientId`);

--
-- Indexes for table `people_under_care_health`
--
ALTER TABLE `people_under_care_health`
  ADD PRIMARY KEY (`id`),
  ADD KEY `people_under_care_health_patientid_foreign` (`patientId`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placeissuancelicenses`
--
ALTER TABLE `placeissuancelicenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_vendorid_foreign` (`vendorId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_doctorid_foreign` (`doctorId`),
  ADD KEY `reviews_patientid_foreign` (`patientId`);

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
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_countryid_foreign` (`countryId`),
  ADD KEY `states_cityid_foreign` (`cityId`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_categoryid_foreign` (`categoryId`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `times_work_dayid_foreign` (`work_dayId`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_activations`
--
ALTER TABLE `user_activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_activations_id_user_foreign` (`id_user`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendors_email_unique` (`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wallets_doctorid_foreign` (`doctorId`),
  ADD KEY `wallets_patientid_foreign` (`patientId`);

--
-- Indexes for table `work_days`
--
ALTER TABLE `work_days`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_days_doctorid_foreign` (`doctorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies_insurances`
--
ALTER TABLE `companies_insurances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `doctor_banks`
--
ALTER TABLE `doctor_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_cases`
--
ALTER TABLE `doctor_cases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `doctor_certificates`
--
ALTER TABLE `doctor_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_educations`
--
ALTER TABLE `doctor_educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor_experiences`
--
ALTER TABLE `doctor_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctor_insurances`
--
ALTER TABLE `doctor_insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_languages`
--
ALTER TABLE `doctor_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_licenses`
--
ALTER TABLE `doctor_licenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `doctor_services`
--
ALTER TABLE `doctor_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_ship_types`
--
ALTER TABLE `member_ship_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_images`
--
ALTER TABLE `order_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Order_sub_categories`
--
ALTER TABLE `Order_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient_cases`
--
ALTER TABLE `patient_cases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_health_information`
--
ALTER TABLE `patient_health_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patient_location`
--
ALTER TABLE `patient_location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `people_under_care`
--
ALTER TABLE `people_under_care`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `people_under_care_health`
--
ALTER TABLE `people_under_care_health`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `placeissuancelicenses`
--
ALTER TABLE `placeissuancelicenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_activations`
--
ALTER TABLE `user_activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_days`
--
ALTER TABLE `work_days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blocks`
--
ALTER TABLE `blocks`
  ADD CONSTRAINT `blocks_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blocks_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chats_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD CONSTRAINT `child_categories_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `child_categories_subcategoryid_foreign` FOREIGN KEY (`subCategoryId`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_countryid_foreign` FOREIGN KEY (`countryId`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `days`
--
ALTER TABLE `days`
  ADD CONSTRAINT `days_work_dayid_foreign` FOREIGN KEY (`work_dayId`) REFERENCES `work_days` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_banks`
--
ALTER TABLE `doctor_banks`
  ADD CONSTRAINT `doctor_banks_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_cases`
--
ALTER TABLE `doctor_cases`
  ADD CONSTRAINT `doctor_cases_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_certificates`
--
ALTER TABLE `doctor_certificates`
  ADD CONSTRAINT `doctor_certificates_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_educations`
--
ALTER TABLE `doctor_educations`
  ADD CONSTRAINT `doctor_educations_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_experiences`
--
ALTER TABLE `doctor_experiences`
  ADD CONSTRAINT `doctor_experiences_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_insurances`
--
ALTER TABLE `doctor_insurances`
  ADD CONSTRAINT `doctor_insurances_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_languages`
--
ALTER TABLE `doctor_languages`
  ADD CONSTRAINT `doctor_languages_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_licenses`
--
ALTER TABLE `doctor_licenses`
  ADD CONSTRAINT `doctor_licenses_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_services`
--
ALTER TABLE `doctor_services`
  ADD CONSTRAINT `doctor_services_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctor_services_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `doctor_services_subcategoryid_foreign` FOREIGN KEY (`subCategoryId`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `favorites_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_chatid_foreign` FOREIGN KEY (`chatID`) REFERENCES `chats` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_vendorid_foreign` FOREIGN KEY (`vendorId`) REFERENCES `vendors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `orders_products_orderid_foreign` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_images`
--
ALTER TABLE `order_images`
  ADD CONSTRAINT `order_images_orderid_foreign` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `Order_sub_categories`
--
ALTER TABLE `Order_sub_categories`
  ADD CONSTRAINT `order_sub_categories_orderid_foreign` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_sub_categories_subcategoryid_foreign` FOREIGN KEY (`subCategoryId`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_cases`
--
ALTER TABLE `patient_cases`
  ADD CONSTRAINT `patient_cases_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_health_information`
--
ALTER TABLE `patient_health_information`
  ADD CONSTRAINT `patient_health_information_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_location`
--
ALTER TABLE `patient_location`
  ADD CONSTRAINT `patient_location_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `people_under_care`
--
ALTER TABLE `people_under_care`
  ADD CONSTRAINT `people_under_care_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `people_under_care_health`
--
ALTER TABLE `people_under_care_health`
  ADD CONSTRAINT `people_under_care_health_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_vendorid_foreign` FOREIGN KEY (`vendorId`) REFERENCES `vendors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_cityid_foreign` FOREIGN KEY (`cityId`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `states_countryid_foreign` FOREIGN KEY (`countryId`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `times`
--
ALTER TABLE `times`
  ADD CONSTRAINT `times_work_dayid_foreign` FOREIGN KEY (`work_dayId`) REFERENCES `work_days` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wallets`
--
ALTER TABLE `wallets`
  ADD CONSTRAINT `wallets_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wallets_patientid_foreign` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `work_days`
--
ALTER TABLE `work_days`
  ADD CONSTRAINT `work_days_doctorid_foreign` FOREIGN KEY (`doctorId`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
