-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 09:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_training`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id` int(10) UNSIGNED NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `urlid` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `artikel` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `posting` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id`, `uniqid`, `urlid`, `judul`, `status`, `artikel`, `penulis`, `cover`, `image`, `posting`) VALUES
(20, '', '7-layanan-video-conference-gratis-untuk-work-from-home', '7 Layanan Video Conference Gratis untuk Work from Home', '1', '<p>Pemerintah menegaskan bahwa kebijakan untuk beraktivitas produktif di rumah perlu dilakukan untuk menekan penyebaran virus corona atau penyakit Covid-19. Salah satunya adalah work from home (WFH) atau bekerja dari rumah.</p>\r\n\r\n<p>Bagi sebagian orang mungkin cukup asing dengan&nbsp;<em>work from home&nbsp;</em>atau bekerja dari rumah. Salah satu kekhawatirannya adalah sulit berkoordinasi dengan rekan kerja. Dengan kecanggihan teknologi, hal ini bukan masalah. Ada beberapa layanan&nbsp;<em>video conference</em>&nbsp;yang bisa Anda gunakan untuk berkoordinasi dengan rekan kerja.</p>\r\n\r\n<p><strong>baca juga:&nbsp;</strong></p>\r\n\r\n<p>Berikut beberapa layanan video conference yang mudah digunakan dan gratis untuk pembelajaran online maupun rapat online.</p>\r\n\r\n<p><strong>1. Microsoft Teams&nbsp;</strong><a href=\"https://teams.microsoft.com/downloads\">(Download)</a></p>\r\n\r\n<p>Layanan dari Microsoft termasuk sangat lengkap karena segmen penggunanya sudah di tahap yang akrab dengan teknologi. Meksipun begitu, Microsoft Teams termasuk yang memiliki tampilan atau antarmuka mudah digunakan.</p>\r\n\r\n<p>Kelebihan layanan ini adalah memiliki fitur yang lengkap dan terintegrasi langsung ke aplikasi Office 365. Jadi sudah mendukung produktivitas yang membutuhkan kolaborasi. Sayangnya untuk mengakses layanan Office 365 pengguna juga harus sudah berlangganan lisensi aplikasi di dalamnya.</p>\r\n\r\n<p>Semenjak wabah Corona, Microsoft juga sudah menggratiskan layanan&nbsp;<em>video conference</em>&nbsp;untuk kegiatan pembelajaran jarak jauh. Jadi fitur&nbsp;<em>video conference</em>&nbsp;tetap bisa digunakan tanpa berlangganan.</p>\r\n\r\n<p><strong>2. Skype&nbsp;</strong><a href=\"https://www.skype.com/en/get-skype/\">(Download)</a></p>\r\n\r\n<p>Skype menjadi salah satu layanan populer yang bisa Anda gunakan untuk saling berkomunikasi melalui&nbsp;<em>video call</em>. Tidak hanya secara&nbsp;<em>one on one</em>, layanan milik Microsoft ini juga bisa digunakan untuk melakukan&nbsp;<em>conference call</em>&nbsp;dengan banyak orang sekaligus.</p>\r\n\r\n<p>Untuk melakukan&nbsp;<em>video call</em>&nbsp;secara berkelompok, Skype memungkinkan 50 pengguna untuk bergabung sekaligus dalam sebuah sesi percakapan.</p>\r\n\r\n<p><strong>3. Zoom&nbsp;</strong><a href=\"https://zoom.us/\">(Download)</a></p>\r\n\r\n<p>Aplikasi Zoom sangat sesuai untuk kegiatan pembelajaran online. Tersedia dukungan untuk jumlah peserta belajar mengajar lebih dari 20 orang. Kemudian fitur&nbsp;<em>conference tool</em>&nbsp;bisa digunakan oleh setiap peserta, tidak hanya host atau admin.</p>\r\n\r\n<p>Beberapa fitur yang bisa digunakan adalah,&nbsp;<em>chat/video chat</em>,&nbsp;<em>screen sharing</em>&nbsp;dan&nbsp;<em>whiteboard&nbsp;</em>untuk kolaborasi,&nbsp;<em>record meeting</em>&nbsp;atau merekam sesi&nbsp;<em>video conference</em>, dan absensi peserta.</p>\r\n\r\n<p><strong>4. Google Hangouts Meet&nbsp;</strong><a href=\"https://gsuite.google.com/products/meet/\">(Download)</a></p>\r\n\r\n<p>Layanan Google Hangouts Meet memungkinkan Anda untuk berkomunikasi dengan rekan kerja melalui&nbsp;<em>video call</em>.</p>\r\n\r\n<p>Google Hangouts Meet memungkinkan Anda untuk menggelar sebuah rapat secara online yang melibatkan hingga 350 peserta. Bahkan, platform ini juga dapat menyiarkan&nbsp;<em>live streaming</em>&nbsp;kepada 100 ribu penonton.</p>\r\n\r\n<p>Kelebihan lain dari Google Hangouts Meet adalah Anda bisa menggunakan aplikasi ini dari berbagai perangkat. Mulai dari PC, laptop, atau smartphone sekalipun.</p>\r\n\r\n<p>Selama masa tanggap virus corona, Google Hangouts Meet menawarkan layanan secara gratis.</p>\r\n\r\n<p><strong>5. Webex&nbsp;</strong><a href=\"https://www.webex.com/downloads.html\">(Download)</a></p>\r\n\r\n<p>Webex adalah layanan video conference milik Cisco, perusahaan jaringan dan infrastruktur internet ternama. Jumlah partisipan maksimal yang bisa masuk ke dalam sebuah panggilan&nbsp;<em>video conference</em>&nbsp;bervariasi, tergantung paket berlangganannya. Namun, jumlah maksimalnya bisa sampai 100 orang.</p>\r\n\r\n<p>Fitur di layanan Webex mencakup&nbsp;<em>screen sharing</em>, dukungan Google Assistant dan Google Home Hub, fitur papan virtual untuk menggambar, fitur pengunggah dokumen, hingga fitur untuk merekam percakapan video.</p>\r\n\r\n<p><strong>6. Slack&nbsp;</strong><a href=\"https://slack.com/intl/en-id/downloads/windows\">(Download)</a></p>\r\n\r\n<p>Slack jadi aplikasi alternatif yang bisa Anda gunakan untuk melakukan conference video dengan rekan kerja. Sayangnya fitur optimal dari Slack baru bisa dinikmati di versi berbayar.</p>\r\n\r\n<p>Pasalnya, panggilan video pada versi gratis hanya bisa digunakan untuk panggilan ke satu orang saja. Kelebihan lain pada versi gratis dari Slack adalah adanya penyimpanan cloud yang bisa Anda gunakan.</p>\r\n\r\n<p><strong>7. Discord&nbsp;</strong><a href=\"https://discordapp.com/\">(Download)</a></p>\r\n\r\n<p>Discord memiliki layanan&nbsp;<em>voice chat&nbsp;</em>dan&nbsp;<em>video chat.&nbsp;</em>Discord memiliki tampilan yang lebih menarik dengan adanya sticker dan emoji. Discord termasuk mudah digunakan dan bsia diakses lewat laptop, komputer, dan smartphone. Penggunanya juga bisa mengakses lewat apliaksi yang diunduh atau via browser di perangkat mereka.</p>\r\n', 'Eka Jaya Nagara', 'fd411f6f1efdf735d4e3e27af64a1dd8.jpg', '50d4f7df8526bd16ca9426db03bbe0c9.jpg', '2020-06-26 00:23:13'),
(21, '5ef4c65a45069', 'world-wide-web-consortium', 'World Wide Web Consortium', '1', '<p>The&nbsp;<strong>World Wide Web Consortium</strong>&nbsp;(<strong>W3C</strong>) is the main international&nbsp;<a href=\"https://en.wikipedia.org/wiki/Standards_organization\">standards organization</a>&nbsp;for the&nbsp;<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web\">World Wide Web</a>. Founded in 1994 and currently led by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Tim_Berners-Lee\">Tim Berners-Lee</a>, the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Consortium\">consortium</a>&nbsp;is made up of member organizations that maintain full-time staff working together in the development of standards for the World Wide Web. As of 21&nbsp;October&nbsp;2019, W3C had 443 members.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-consortium-3\">[3]</a><a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-MembersList-2\">[2]</a>&nbsp;W3C also engages in education and outreach, develops software and serves as an open forum for discussion about the Web.</p>\r\n\r\n<h2>HIstori</h2>\r\n\r\n<p>The World Wide Web Consortium (W3C) was founded in 1994 by&nbsp;<a href=\"https://en.wikipedia.org/wiki/Tim_Berners-Lee\">Tim Berners-Lee</a>&nbsp;after he left the European Organization for Nuclear Research (<a href=\"https://en.wikipedia.org/wiki/CERN\">CERN</a>) in October, 1994. It was founded at the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Massachusetts_Institute_of_Technology\">Massachusetts Institute of Technology</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Laboratory_for_Computer_Science\">Laboratory for Computer Science</a>&nbsp;(MIT/LCS) with support from the&nbsp;<a href=\"https://en.wikipedia.org/wiki/European_Commission\">European Commission</a>, the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Defense_Advanced_Research_Projects_Agency\">Defense Advanced Research Projects Agency</a>&nbsp;(DARPA), which had pioneered the&nbsp;<a href=\"https://en.wikipedia.org/wiki/ARPANET\">ARPANET</a>, one of the predecessors to the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Internet\">Internet</a>.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-consortium-3\">[3]</a>&nbsp;It was located in&nbsp;<a href=\"https://en.wikipedia.org/wiki/Technology_Square_(Cambridge,_Massachusetts)\">Technology Square</a>&nbsp;until 2004, when it moved, with CSAIL, to the Stata Center.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-4\">[4]</a></p>\r\n\r\n<p>The organization tries to foster compatibility and agreement among industry members in the adoption of new standards defined by the W3C. Incompatible versions of HTML are offered by different vendors, causing inconsistency in how web pages are displayed. The consortium tries to get all those vendors to implement a set of core principles and components which are chosen by the consortium.</p>\r\n\r\n<p>It was originally intended that CERN host the European branch of W3C; however, CERN wished to focus on particle physics, not information technology. In April 1995, the&nbsp;<a href=\"https://en.wikipedia.org/wiki/French_Institute_for_Research_in_Computer_Science_and_Automation\">French Institute for Research in Computer Science and Automation</a>&nbsp;(INRIA) became the European host of W3C, with&nbsp;<a href=\"https://en.wikipedia.org/wiki/Keio_University\">Keio University</a>&nbsp;Research Institute at&nbsp;<a href=\"https://en.wikipedia.org/wiki/Keio_University_Shonan_Fujisawa_Campus\">SFC</a>&nbsp;(KRIS) becoming the Asian host in September 1996.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-5\">[5]</a>&nbsp;Starting in 1997, W3C created regional offices around the world. As of September 2009, it had eighteen World Offices covering Australia, the Benelux countries (Netherlands, Luxembourg, and Belgium), Brazil, China, Finland, Germany, Austria, Greece, Hong Kong, Hungary, India, Israel, Italy, South Korea, Morocco, South Africa, Spain, Sweden, and, as of 2016, the United Kingdom and Ireland.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-Offices-6\">[6]</a></p>\r\n\r\n<p>In October 2012, W3C convened a community of major web players and publishers to establish a&nbsp;<a href=\"https://en.wikipedia.org/wiki/MediaWiki\">MediaWiki</a>&nbsp;wiki that seeks to document open web standards called the&nbsp;<a href=\"https://en.wikipedia.org/wiki/WebPlatform\">WebPlatform</a>&nbsp;and WebPlatform Docs.</p>\r\n\r\n<p>In January 2013,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Beihang_University\">Beihang University</a>&nbsp;became the Chinese host.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Working draft (WD)</h2>\r\n\r\n<p>After enough content has been gathered from &#39;editor drafts&#39; and discussion, it may be published as a working draft (WD) for review by the community. A WD document is the first form of a standard that is publicly available. Commentary by virtually anyone is accepted, though no promises are made with regard to action on any particular element commented upon.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-W3CDevProc-7\">[7]</a></p>\r\n\r\n<p>At this stage, the standard document may have significant differences from its final form. As such, anyone who implements WD standards should be ready to significantly modify their implementations as the standard matures.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-W3CDevProc-7\">[7]</a></p>\r\n\r\n<h2>Candidate recommendation (CR)</h2>\r\n\r\n<p>A candidate recommendation is a version of a standard that is more mature than the WD. At this point, the group responsible for the standard is satisfied that the standard meets its goal. The purpose of the CR is to elicit aid from the development community as to how implementable the standard is.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-W3CDevProc-7\">[7]</a></p>\r\n\r\n<p>The standard document may change further, but at this point, significant features are mostly decided. The design of those features can still change due to feedback from implementors.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-W3CDevProc-7\">[7]</a></p>\r\n\r\n<h2>Proposed recommendation (PR)</h2>\r\n\r\n<p>A proposed recommendation is the version of a standard that has passed the prior two levels. The users of the standard provide input. At this stage, the document is submitted to the W3C Advisory Council for final approval.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-W3CDevProc-7\">[7]</a></p>\r\n\r\n<p>While this step is important, it rarely causes any significant changes to a standard as it passes to the next phase.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-W3CDevProc-7\">[7]</a></p>\r\n\r\n<h2>W3C recommendation (REC)</h2>\r\n\r\n<p>This is the most mature stage of development. At this point, the standard has undergone extensive review and testing, under both theoretical and practical conditions. The standard is now endorsed by the W3C, indicating its readiness for deployment to the public, and encouraging more widespread support among implementors and authors.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-W3CDevProc-7\">[7]</a></p>\r\n\r\n<p>Recommendations can sometimes be implemented incorrectly, partially, or not at all, but many standards define two or more levels of conformance that developers must follow if they wish to label their product as W3C-compliant.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-W3CDevProc-7\">[7]</a></p>\r\n\r\n<h2>Later revisions</h2>\r\n\r\n<p>A recommendation may be updated or extended by separately-published, non-technical errata or editor drafts until sufficient substantial edits accumulate for producing a new edition or level of the recommendation. Additionally, the W3C publishes various kinds of informative notes which are to be used as references.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-W3CDevProc-7\">[7]</a></p>\r\n\r\n<h2>Certification</h2>\r\n\r\n<p>Unlike the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Internet_Society\">ISOC</a>&nbsp;and other international standards bodies, the W3C does not have a certification program. The W3C has decided, for now, that it is not suitable to start such a program, owing to the risk of creating more drawbacks for the community than benefits.<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web_Consortium#cite_note-W3CDevProc-7\">[7]</a></p>\r\n', 'Eka Jaya Nagara', '9591027be5d8fcc3606fdac64c44304a.jpg', '3a224cda0d3bb8ea70979c34d8144485.jpg', '2020-06-25 22:44:26'),
(22, '5ef4c72616e72', 'pengertian-dan-karakteristik-e-learning', 'Pengertian dan karakteristik e-learning', '1', '<p>Haloo para pembaca setia HIMSISFO, pada kesempatan kali ini kami akan membahas tentang Pengertian dan Karakteristik E-Learning. Yuk kita simak ulasannya dibawah ini</p>\r\n\r\n<p>E-learning adalah suatu sistem atau konsep pendidikan yang memanfaatkan teknologi informasi dalam proses belajar mengajar. Berikut beberapa pengertian E-learning dari berbagai sumber:</p>\r\n\r\n<ol>\r\n	<li>Pembelajaran yang disusun dengan tujuan menggunakan sistem elektronik atau komputer sehingga mampu mendukung proses pembelajaran (Michael, 2013:27).</li>\r\n	<li>Proses pembelajaran jarak jauh dengan menggabungkan prinsip-prinsip dalam proses pembelajaran dengan teknologi (Chandrawati, 2010).</li>\r\n	<li>Sistem pembelajaran yang digunakan sebagai sarana untuk proses belajar mengajar yang dilaksanakan tanpa harus bertatap muka secara langsung antara guru dengan siswa (Ardiansyah, 2013).</li>\r\n</ol>\r\n\r\n<p>Karakteristik E-learning</p>\r\n\r\n<p>Menurut Rosenberg (2001) karakteristik E-learning bersifat jaringan, yang membuatnya mampu memperbaiki secara cepat, menyimpan atau memunculkan kembali, mendistribusikan, dan sharing pembelajaran dan informasi.</p>\r\n\r\n<p>Karakteristik E-learning menurut Nursalam (2008:135) adalah:</p>\r\n\r\n<ol>\r\n	<li>Memanfaatkan jasa teknologi elektronik.</li>\r\n	<li>Memanfaatkan keunggulan komputer (digital media dan komputer networks)</li>\r\n	<li>Menggunakan bahan ajar yang bersifat mandiri (self learning materials) kemudian disimpan di komputer, sehingga dapat diakses oleh doesen dan mahasiswa kapan saja dan dimana saja.</li>\r\n	<li>Memanfaatkan jadwal pembelajaran, kurikulum, hasil kemajuan belajar, dan hal-hal yang berkaitan dengan administrasi pendidikan dapat dilihat setiap saat di komputer.</li>\r\n</ol>\r\n\r\n<p>Sekian pembahasan tentang pengertian dan Karakteristik E-learning, sermoga bermanfaat!</p>\r\n', 'Eka Jaya Nagara', '5f216c554fb0a0f223fb8c5827877f4b.jpg', '91225a4fc765cdacae5524b8c338a653.jpg', '2020-06-25 22:47:50'),
(23, '5ef4c91a3a6b4', 'manfaat-dan-pentingnya-belajar-bahasa-inggris-di-era-globalisasi', 'Manfaat dan Pentingnya Belajar Bahasa Inggris di Era Globalisasi', '1', '<p>Perkembangan zaman dan semakin banyaknya perusahaan asing di Indonesia, mau tak mau memaksa para calon pencari kerja untuk mampu berbahasa Inggris dengan fasih. Pasalnya kebanyakan perusahaan ini mencari karyawan yang mampu mengikuti ritme dan komunikasi dengan klien yang berkebangsaan nonIndonesia. Tak salah bila seleksi ketat saat interview diterapkan oleh beberapa perusahaan ternama. Mereka pastinya tidak ingin menerima calon karyawan yang tidak berkompeten dan fasih dalam penguasaan bahasa asing.</p>\r\n\r\n<h2>Bahasa Inggis dalam Dunia Kerja</h2>\r\n\r\n<p>Berbicara bahasa Inggris yang fasih bisa menjadi nilai tambah tersendiri bagi Anda yang ingin melamar pekerjaan. Kebanyakan para pewawancara memang menekankan bahasa Inggris sejak awal perjumpaan. Tak salah bila survey membuktikan hampir 55% perusahaan di Indonesia menuntut para karyawannya menggunakan bahasa Inggris secara aktif. Hal ini juga dimaksudkan untuk menaikkan citra perusahaan di mata masyarakat dan investor maupun klien mereka.</p>\r\n\r\n<p>Dalam&nbsp; dunia kerja, kita ditawarkan berbagai macam pekerjaan. Namun, ada salah satu persyaratan yang hampir menjadi sebuah kewajiban dalam semua lowongan pekerjaan. Yakni berbahasa Inggris yang baik dan benar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada akhirnya, bahasa Inggris menjadi sebuah momok bagi para calon pekerja dalam mencari lowongan pekerjaan. Bahasa Inggris dianggap ilmu yang hanya menyulitkan, bahkan menghambat dalam mecari kerja. Bahasa Inggris merupakan bahasa umum atau dapat dikatakan sebagai bahasa dunia yang memang wajib dikuasai dalam dunia kerja. Pekerjaan yang ditawarkan kepada orang yang menguasai bahasa inggris pun terkadang lebih menarik dan lebih benefit.</p>\r\n\r\n<p>Di dunia usaha yang makin mengglobal, semakin banyak perusahaan lokal Indonesia yang masuk ke pasar dunia. Juga&nbsp;semakin banyak perusahaan internasional yang masuk ke pasar lokal, penggunaan bahasa Inggris yang menjadi bahasa &rdquo;bisnis&rdquo; makin dirasakan sebagai suatu keharusan. Selain itu, terlihat dari kasus dimana seringkali negosiasi gagal karena salah paham dengan calon mitra asing. Pekerjaan tertunda karena komunikasi yang terbata-bata dengan klien dari Negara lain atau lamaran kerja di sebuah perusahaan asing ditolak karena kemampuan berbahasa Inggris yang kurang dan kesempatan kerja sama dengan perusahaan kelas internasional batal akibat tidak bisa menyediakan tenaga kerja yang bisa berbahasa Inggris.</p>\r\n\r\n<h2>Bahasa Inggris penting di era globalisasi? Alasannya?</h2>\r\n\r\n<p>Jawaban atas pertanyaan tersebut sangatlah sederhana yaitu karena Bahasa Inggris sudah menjadi bahasa universal yang digunakan dalam dunia teknologi, pendidikan, politik, perdagangan, dan lain sebagainya. Bahasa merupakan alat komunikasi yang paling crucial. Dimana suka atau tidak suka, saat ini Bahasa Inggris sudah sangat mendominasi semua aspek dalam hal komunikasi. Kita bisa melihat hampir semua electronic devices menggunakan Bahasa Inggris. Sebagian besar Negara-negara di Asia juga menggunakan Bahasa Inggris sebagai &rsquo;<em>Medium of Instruction</em>&rsquo; ataupun menjadikan Bahasa Inggris sebagai bahasa kedua sesudah bahasa nasional mereka.</p>\r\n\r\n<p>Dalam dunia modern yang penuh dengan tantangan dan persaingan yang super ketat ini, setiap orang disarankan tidak hanya memiliki tingkat pendidikan yang tinggi, namun juga dituntut ketrampilan khusus yang lazim kita sebut &lsquo;skill&rsquo;. Salah satu &rsquo;skill&rsquo; yang paling dibutuhkan saat ini adalah Bahasa Inggris. Sesuai dengan penjelasan di atas, Bahasa Inggris merupakan bahasa global, maka bagi mereka yang ingin selangkah lebih maju dari orang pada umumnya, perlu bahkan harus menguasai Bahasa Inggris.</p>\r\n\r\n<p>Banyak orang yang enggan belajar Bahasa Inggris karena merasa terlalu tua untuk dapat menguasai bahasa tersebut. Namun menurut saya, modal utama untuk berbicara bahasa Inggris dengan baik bukanlah usia seseorang, namun sebesar apa tekad seseorang untuk belajar. Adapun sisi krusial&nbsp;yang harus kita kuasai terlebih dahulu adalah perbendaharaan kata dalam suatu bahasa, atau yang lebih dikenal dengan kosakata. Pengetahuan kosakata dalam bahasa Inggris merupakan modal utama dalam mempelajari bahasa ini. Kosakata adalah hal terpenting dalam mempelajari suatu bahasa. Seseorang yang ingin belajar bahasa baru perlu mendalami pengetahuan tentang kosakata untuk bisa berbicara dengan lancar.</p>\r\n\r\n<p>Saat kita betanya&nbsp;<strong>&ldquo;<em>Kapankah saat yang paling tepat untuk belajar Bahasa Inggris</em>?&rdquo;</strong></p>\r\n\r\n<p>Sekaranglah saatnya. Mempelajari bahasa Inggris adalah hal wajib dan menguasai bahasa Inggris adalah cita-cita yang harus ditanamkan ke dalam diri mulai dari sekarang. Tidak mau kan dianggap sebagai orang yang primitif hanya karena tidak bisa berbahsa Inggris? Jadi, sampai kapan mau menunda belajar Bahasa inggris?</p>\r\n\r\n<p>dikutip :&nbsp;<a href=\"https://krishnalearningcenter.com/pentingnya-belajar-bahasa-inggris-era-globalisasi/\" target=\"_blank\">krishnalearningcenter.com</a></p>\r\n', 'Eka Jaya Nagara', 'bd140f281031605b63612f2b01560fb2.jpg', '415e31d58db564016e73dbcee975bfe2.jpg', '2020-06-25 22:56:10'),
(24, '5ef4cc5cb6ad1', 'scrum-methodology-panduan-project-management', 'Scrum Methodology: Panduan Project Management', '1', '<p>Jika Anda bekerja di bidang teknologi, Anda mungkin pernah mendengar tentang &ldquo;Scrum&rdquo; dan &ldquo;Agile.&rdquo; Ini adalah sistem yang sering-sering disebut di antara orang-orang yang bekerja di industri teknologi dan terkadang terdengar seperti memiliki bahasa mereka sendiri. Istilah seperti &ldquo;planning poker&rdquo;, &ldquo;stand-ups&rdquo;, dan &ldquo;sprint&rdquo; adalah beberapa kata yang sering digunakan saat membahas Scrum dan Agile.</p>\r\n\r\n<p>Ini memang terdengar sedikit menakutkan dan membingungkan bagi Anda yang belum tahu dan mengerti.</p>\r\n\r\n<p>Metode kerja yang satu ini sebenarnya dapat sangat membantu Anda karena cara bekerjanya yang mampu mengatasi masalah yang kompleks. Metode kerja ini memprioritaskan tugas-tugas individual, lalu mendelegasikan tugas-tugas tersebut kepada anggota tim yang dianggap paling sesuai untuk menyelesaikan tugas-tugas tersebut.</p>\r\n\r\n<p>Tapi apakah ini metode kerja ini hanya khusus untuk engineer atau developer software? Bisakah kita yang bukan engineer juga benar-benar mendapat manfaat dari cara kerja ini? Jika ya, bagaimana Anda bisa memulai?</p>\r\n\r\n<p>Untuk mendapat jawaban dari pertanyaan di atas, coba simak artikel berikut untuk tahu lebih dalam apa itu metode Scrum dan bagaimana cara implementasinya!</p>\r\n\r\n<h2>Definisi Scrum dan Agile</h2>\r\n\r\n<p><strong>Scrum adalah sebuah metode iteratif yang termasuk dalam metode Agile tentang bagaimana cara Anda mengelola dan menjalankan sebuah proyek.</strong>&nbsp;Ini bisa digunakan untuk mengelola segala jenis proyek mulai dari pembuatan software, website, hardware, marketing, event planning, dan sebagainya. Scrum membantu Anda untuk mengorganisir sebuah tim dan Anda harus memiliki komunikasi yang kuat antar member tim tersebut. Scrum mengatakan bahwa setiap &ldquo;sprint&rdquo; dimulai dengan meeting singkat untuk perencanaan dan diakhiri dengan review. Ini adalah ide fundamental dari Scrum untuk sebuah project management.</p>\r\n\r\n<blockquote>\r\n<p><em>Proyek yang paling tepat untuk Agile adalah proyek yang memiliki deadline yang agresif, tingkat kerumitan yang tinggi, dan tingkat kebaruan (keunikan) yang tinggi bagi para member tim. Akan lebih baik jika Anda menggunakan Agile saat kita melakukan sesuatu yang baru, atau paling tidak baru bagi tim yang mengerjakannya. Jika itu adalah sesuatu yang tim telah lakukan sebelum berulang-ulang maka tim mungkin tidak memerlukan pendekatan Agile.</em></p>\r\n</blockquote>\r\n\r\n<p>Agile mengacu pada seperangkat &ldquo;metode dan praktik berdasarkan nilai dan prinsip yang diungkapkan dalam&nbsp;<a href=\"http://agilemanifesto.org/iso/id/manifesto.html\" target=\"_blank\">Agile Manifesto&nbsp;</a>,&rdquo; yang mencakup hal-hal seperti kolaborasi, pengorganisasian yang dilakukan sendiri oleh member tim, dan tim yang lintas fungsional.</p>\r\n\r\n<p><strong>Scrum adalah kerangka kerja yang digunakan untuk mengimplementasikan pengembangan Agile.</strong></p>\r\n\r\n<p>Analogi yang bagus untuk membedakan Scrum dan Agile adalah perbedaan antara resep dan diet. Misalnya, diet vegetarian adalah seperangkat metode dan praktik berdasarkan prinsip dan nilai. Resep Taco Kacang akan menjadi kerangka kerja yang bisa Anda gunakan untuk menerapkan diet vegetarian Anda.</p>\r\n\r\n<p>Ini mirip dengan hubungan antara Agile (diet) dan scrum (resep yang anda ikuti).</p>\r\n\r\n<p>Agile lahir dari teknik yang digunakan oleh perusahaan Jepang yang inovatif di tahun 70an dan 80an (perusahaan seperti Toyota, Fuji, dan Honda).</p>\r\n\r\n<p>Pada pertengahan 90-an, seorang pria bernama Jeff Sutherland mendapati dirinya frustrasi oleh perusahaan-perusahaan yang terus-menerus diganggu oleh proyek-proyek yang ketinggalan jadwal dan anggaran lebih tinggi. Dia berusaha menemukan jalan yang lebih baik.</p>\r\n\r\n<p>Penelitiannya membawanya ke perusahaan Jepang ini dan metode Agile mereka. Mendasarkan karyanya pada hal ini, Sutherland menciptakan kerangka kerja Scrum. Setelah serangkaian kesuksesan menggunakan metode barunya, Scrum mulai dengan cepat menyebar ke seluruh dunia pengembangan produk.</p>\r\n\r\n<p><strong>Scrum sendiri bisa dijelaskan dengan poin-poin berikut ini:</strong></p>\r\n\r\n<ol>\r\n	<li>Pemilik produk membuat daftar keinginan yang diprioritaskan yang disebut backlog produk.</li>\r\n	<li>Selama perencanaan sprint, tim memilih salah satu item dari urutan teratas daftar keinginan tersebut dan memutuskan bagaimana mereka akan menjalankan potongan tersebut.</li>\r\n	<li>Tim memiliki sejumlah waktu, yang disebut dengan istilah sprint (biasanya dua sampai empat minggu) untuk menyelesaikan pekerjaannya, namun setiap harinya akan ada pengecekan untuk melihat progress pekerjaan (Scrum harian).</li>\r\n	<li>Sepanjang jalan, ScrumMaster membuat tim tetap fokus pada tujuannya.</li>\r\n	<li>Di akhir sprint, pekerjaan harus berpotensi untuk dikirim: siap untuk diserahkan kepada pelanggan, diletakkan di rak toko, atau ditunjukkan kepada pemangku kepentingan.</li>\r\n	<li>Sprint diakhiri dengan review sprint dan retrospektif.</li>\r\n	<li>Seiring sprint berikutnya dimulai, tim memilih item lain lagi dari backlog produk dan mulai bekerja lagi.</li>\r\n	<li>Hal ini berlangsung sampai proyek dianggap selesai, baik karena deadline dan budget atau dengan melengkapi seluruh daftar item yang sudah ditentukan di awal.</li>\r\n</ol>\r\n\r\n<blockquote>\r\n<p><em>Jadi, Agile adalah metode project management paling tepat pada proyek yang mendesak dengan kompleksitas dan kebaruan yang signifikan &ndash; dan itu bisa saja mulai dari pengembangan software sampai merencanakan wedding.</em></p>\r\n</blockquote>\r\n\r\n<h2><strong>Siapa saja yang Bisa Mendapatkan Manfaat dari Scrum?</strong></h2>\r\n\r\n<p>Mungkin Anda berpikir Scrum adalah suatu metode kerja yang terbatas pada engineer atau developer. Tapi kerangka kerja itu bisa bermanfaat untuk jenis proyek lain juga.</p>\r\n\r\n<blockquote>\r\n<p><em>&ldquo;Scrum dapat digunakan untuk proyek yang kompleks, peringatannya adalah hasilnya bagus bila ada produk beton yang diproduksi. Jika Anda bekerja dalam pemasaran dan kebutuhan menulis salinan untuk sebuah proyek, pasti bisa bermanfaat bagi tim Anda. &rdquo;</em></p>\r\n\r\n<p><em>&ndash; David Matthew, seorang Master Scrum Certified untuk Incentive Technology Group</em></p>\r\n</blockquote>\r\n\r\n<p>Scrum telah digunakan oleh semua orang dari FBI, agen pemasaran, hingga orang-orang konstruksi. Kapan pun Anda perlu menghasilkan beberapa jenis produk, baik itu software atau&nbsp;<a href=\"https://www.dewaweb.com/blog/email-marketing/\" target=\"_blank\">email campaign</a>, Scrum dapat membantu Anda mengatur tim Anda dan menyelesaikan lebih banyak pekerjaan dalam waktu yang lebih singkat.</p>\r\n\r\n<h2><strong>Peran di Scrum</strong></h2>\r\n\r\n<p>Ada tiga peran berbeda yang diperlukan dalam melakukan metode Scrum, yaitu:</p>\r\n\r\n<p><strong>Master Scrum</strong>&nbsp;memastikan prosedur diikuti, memastikan semua berjalan lancar, dan melindungi tim dari gangguan. Master Scrum berbeda dari manajer proyek tradisional dalam banyak hal, termasuk peran ini tidak memberikan arahan sehari-hari kepada tim dan tidak memberikan tugas kepada individu.</p>\r\n\r\n<p><strong>Product Owner (Pemilik Produk),</strong>&nbsp;biasanya merupakan orang yang dianggap paling penting dari sebuah proyek. Bagian dari tanggung jawab pemilik produk adalah memiliki visi tentang apa yang ingin dia buat dan menyampaikan visi tersebut kepada tim Scrum. Tugas utama Pemilik Produk adalah untuk menjadi nilai bagi stakeholder atau pemegang saham.</p>\r\n\r\n<p><strong>Tim Scrum</strong>&nbsp;. Sebuah tim Scrum adalah tim yang bisa mengatur pekerjaan mereka sendiri dan merupakan sebuah tim yang lintas fungsional. Member tim akan melakukan analisis, implementasi, perancangan, pengujian, dan lain-lain. Meskipun individu dapat bergabung dengan tim dengan berbagai jabatan, di Scrum, judul tersebut tidak signifikan. Metodologi scrum menyatakan bahwa setiap orang berkontribusi dengan cara apa pun yang mereka bisa untuk menyelesaikan pekerjaan pada setiap sprint. Individu dengan demikian akan menghabiskan sebagian besar (dan terkadang semua) waktu mereka bekerja dalam disiplin apa pun yang mereka ketahui, baik itu analisis, desain, pengembangan, tes dan lain lain.</p>\r\n\r\n<h2><strong>Apa yang membuat Scrum menarik?</strong></h2>\r\n\r\n<p>Ada beberapa poin penting untuk Scrum yang membuat banyak orang tertarik untuk menggunakannya, misalnya:</p>\r\n\r\n<ol>\r\n	<li>Berorganisasi sendiri dengan fokus pada tim.</li>\r\n	<li>Tidak perlu dokumentasi dalam jumlah besar. Scrum menggunakan pendekatan yang to the point dalam membagikan tugas atau menanyakan progress.</li>\r\n	<li>Tim Scrum adalah sebuah tim yang memiliki lintas fungsional sehingga bisa bekerja sama sebagai satu kesatuan.</li>\r\n	<li>Komunikasi yang kuat dan banyak interaksi.</li>\r\n	<li>Memiliki ritme yang pasti dan berulang untuk menyelesaikan pekerjaan dalam waktu maksimal 30 hari.</li>\r\n	<li>Alih-alih mencoba melakukan keseluruhan pekerjaan pada saat bersamaan, Scrum membantu menyelesaikannya satu persatu dengan interval waktu yang ditentukan.</li>\r\n	<li>Mengaplikasikan Scrum dapat membuat anggota tim member Anda merasa dipercaya dan Anda juga tahu member mana yang ahli di bidangnya dan bisa mengerjakan tugasnya sehingga tidak ada tunggu-menunggu.</li>\r\n</ol>\r\n\r\n<h3><strong>Cara Implementasi Scrum</strong></h3>\r\n\r\n<p>Untuk mencoba metode Scrum, Anda bisa memulai dengan mengerjakan satu proyek yang sederhana dan singkat. Dengan begitu, Anda bisa membantu tim Anda untuk memiliki pola pikir yang benar mengenai metode Scrum.</p>\r\n\r\n<p>Perlu diingat bahwa sama dengan kerja tim pada umumnya, beberapa orang dalam tim akan menyukainya dan beberapa orang akan membencinya. Ini sangat normal dan Anda harus mendorong orang-orang di tim untuk mencobanya dengan benar sebelum mereka menyerah. Jika seseorang akhirnya menyerah, lepaskan mereka dari tim dan biarkan orang lain masuk.</p>\r\n\r\n<p>Untuk memulainya, Anda bisa mengikuti langkah-langkah berikut:</p>\r\n\r\n<p><strong>1. Tentukan Tim Scrum pertama Anda</strong></p>\r\n\r\n<p>Tim terdiri dari 5-9 anggota. Semua anggota ini memiliki kombinasi kompetensi dan dapat mencakup untuk menjadi developer, penguji, pendukung, perancang, analisis bisnis, dan lain-lain. Semua anggota terus bekerja sama. Tim itu sendiri bertanggung jawab untuk memastikan bahwa mereka akan memproduksi produk yang bisa dipresentasikan di akhir setiap sprint.</p>\r\n\r\n<p><strong>2. Tentukan panjang atau lamanya Sprint Anda</strong></p>\r\n\r\n<p>Sprint adalah tenggang waktu yang berlangsung antara 7 dan 30 hari, dan biasanya tetap sama panjang selama proyek berlangsung. Tentukan tenggang waktunya dalam sebuah meeting perencanaan dan tim tersebut harus berkomitmen untuk menyelesaikan pekerjaan ini. Pada akhir sprint, Anda sebaiknya mengadakan sebuah review atau ulasan (bisa berupa meeting) dengan demonstrasi hasil kerja. Disini perbaikannya ditinjau dan dikerjakan agar sprint berikutnya bisa direncanakan. Jika Anda masih tidak yakin dengan tenggang waktu, Anda bisa mulai dengan 2 minggu terlebih dahulu.</p>\r\n\r\n<p><strong>3. Tunjuk Seorang Master Scrum</strong></p>\r\n\r\n<p>Scrum Master adalah seorang katalisator untuk sebuah kelompok scrum. Mereka memastikan bahwa kelompok scrum bekerja secara efektif dan progresif. Jika terjadi hambatan, master Scrum akan menindaklanjuti dan menyelesaikan masalah untuk tim tersebut.</p>\r\n\r\n<p>Master Scrum memang bisa dianggap sebagai manajer proyek untuk tim tersebut, kecuali orang tersebut tidak boleh mendikte apa yang tim kerjakan dan seharusnya tidak terlibat dalam pengelolaan mikro sekalipun. Master Scrum akan membantu tim dalam merencanakan pekerjaan sprint yang akan datang.</p>\r\n\r\n<p><strong>4. Tunjuk Pemilik Produk (Product Owner)</strong></p>\r\n\r\n<p>Pemilik Produk harus merupakan seseorang yang dapat bertanggung jawab memastikan tim menghasilkan sebuah produk yang bisa dipresentasikan dan pasarkan ke bisnis, klien atau siapapun yang menginginkan hasil proyek tersebut (pembeli akhir). Pemilik Produk biasanya menuliskan persyaratan sehubungan dengan apa yang diinginkan dari produk tersebut dalam bentuk sebuah cerita, kemudian memprioritaskan item-item dalam proses pembuatan, dan memasukkannya ke backlog.</p>\r\n\r\n<p><strong>5. Buat Backlog Produk Awal</strong></p>\r\n\r\n<p>Produk backlog adalah daftar keinginan yang berupa semua cerita pengguna yang diharapkan akan dibuat dan diselesaikan dalam proyek tersebut. Cerita yang paling penting harus berada di urutan teratas daftar, jadi keseluruhan simpanan tersusun secara teratur berdasarkan urutan kepentingan cerita.</p>\r\n\r\n<p>Sebuah simpanan biasanya berisi 2 jenis item pekerjaan:</p>\r\n\r\n<p><strong>Epics</strong>&nbsp;&ndash; Cerita tingkat tinggi yang sketsanya sangat kasar tanpa banyak detail.</p>\r\n\r\n<p><strong>Stories</strong>&nbsp;&ndash; Persyaratan lebih rinci untuk apa yang harus dilakukan (mungkin dilakukan).</p>\r\n\r\n<p>Sebuah epics biasanya dapat dibagi menjadi beberapa cerita.</p>\r\n\r\n<p>Sebuah cerita biasanya akan dipecah menjadi beberapa tugas terpisah sehingga tim dapat bekerja dan melaporkan progressnya nanti. Stories juga bisa memiliki beberapa tipe seperti development, bug, tugas, dan lain lain. Stories baru dapat ditulis dan ditambahkan ke backlog produk kapan saja dan oleh siapa saja.</p>\r\n\r\n<p>Jika sebuah epic meningkat dalam prioritas, sebaiknya masukkan detail yang lebih rinci agar tim dapat mulai mengerjakannya. Pemilik Produk bebas untuk memprioritaskan kembali backlog sesuai dengan keinginan dia.</p>\r\n\r\n<p>Contoh stories yang bisa dikembangkan menjadi produk:</p>\r\n\r\n<ul>\r\n	<li>Sebagai power user, saya bisa menentukan file atau folder yang akan di backup berdasarkan ukuran file, tanggal yang dibuat dan tanggal dimodifikasi.</li>\r\n	<li>Sebagai pembelanja buku, saya bisa membaca ulasan sebuah buku pilihan untuk membantu saya memutuskan apakah akan membelinya.</li>\r\n	<li>Seorang nasabah bank bisa mengganti PIN-nya</li>\r\n</ul>\r\n\r\n<p><strong>6. Rencanakan dan Mulailah Sprint Pertama Anda</strong></p>\r\n\r\n<p>Berdasarkan prioritas backlog, tim sekarang mengambil item dari daftar (biasanya dari paling atas). Tim lalu melakukan brainstorming dan memutuskan apa dan berapa banyak yang bisa mereka selesaikan dalam sprint mendatang. Ini disebut rapat perencanaan sprint.</p>\r\n\r\n<p>Begitu tim setuju, sprint dimulai dan tim dapat mulai mengerjakan proyeknya.</p>\r\n\r\n<p><strong>7. Tutup Arus dan Mulai Sprint Berikutnya</strong></p>\r\n\r\n<p>Bila akhir tenggat waktu sudah tercapai dan semua pekerjaan yang direncanakan sudah lengkap dilakukan, tergantung pada tim untuk memutuskan apakah pekerjaan yang tersisa harus ditransfer ke sprint berikutnya atau dimasukkan kembali ke dalam backlog.</p>\r\n\r\n<p>Setiap sebuah tim menyelesaikan tugasnya, tim disarankan untuk melakukan retrospektif di mana mereka mendiskusikan apa yang berjalan dengan baik dan apa yang bisa diperbaiki untuk sprint berikutnya. Setelah itu, pertemuan perencanaan sprint untuk sprint berikutnya dimulai dan prosesnya diulang.</p>\r\n\r\n<p>Tidak ada batasan untuk jumlah sprint kecuali jika ditetapkan oleh deadline (berdasarkan budget atau waktu) atau seluruh backlog selesai. Jika tidak satu pun kriteria ini terpenuhi, sprint terus berlanjut tanpa batas waktu.</p>\r\n\r\n<h3><strong>Kegiatan yang harus dilakukan sebagai bagian dari Scrum</strong></h3>\r\n\r\n<p><strong>1.</strong>&nbsp;<strong>Rapat Perencanaan</strong></p>\r\n\r\n<p>Pertemuan Perencanaan Sprint adalah titik awal Scrum. Ini adalah pertemuan dimana seluruh tim Scrum berkumpul; Bekerja sama dengan Product Owner dan Master Scrum, tim memilih story dari backlog dan brainstorm secara bersama-sama. Berdasarkan percakapan, kelompok Scrum memutuskan kompleksitas story dan memutuskan mana yang harus masuk ke sprint.</p>\r\n\r\n<p><strong>2.</strong>&nbsp;<strong>Melengkapi Pekerjaan</strong></p>\r\n\r\n<p>Seperti judulnya, perlu bagi tim untuk menyelesaikan pekerjaan untuk kemajuan proyek. Orang-orang di tim bekerja pada epics atau story sampai mereka selesai dan kemudian mereka beralih ke yang berikutnya. Biasanya story disusun di papan dengan langkah-langkah terpisah, jadi mudah untuk merasakan bagaimana sprint tersebut berkembang.</p>\r\n\r\n<p><strong>3.</strong>&nbsp;<strong>Pertemuan Scrum Harian</strong></p>\r\n\r\n<p>Melalui siklus sprint, setiap hari tim scrum bertemu maksimal lima belas menit (biasanya di pagi hari). Ada 3 hal yang akan dibahas oleh setiap member tim, yaitu:</p>\r\n\r\n<ul>\r\n	<li>Apa yang saya lakukan kemarin?</li>\r\n	<li>Apa yang ingin saya lakukan hari ini?</li>\r\n	<li>Jelaskan jika orang tersebut memiliki sesuatu yang menghalangi mereka menyelesaikan pekerjaan mereka pada hari itu.</li>\r\n</ul>\r\n\r\n<p><strong>4.</strong>&nbsp;<strong>Pertemuan Review Sprint</strong></p>\r\n\r\n<p>Setelah setiap sprint, tim mengadakan Sprint Review Meeting untuk menunjukkan progress kerja kepada Product Owner dan orang lain yang tertarik. Pertemuan tersebut harus menampilkan demonstrasi langsung, bukan sebuah laporan. Pemilik Produk dapat memverifikasi story sesuai dengan kriteria penerimaan mereka.</p>\r\n\r\n<p><strong>5.</strong>&nbsp;<strong>Rapat Retrospektif</strong></p>\r\n\r\n<p>Pertemuan retrospektif terjadi setelah pertemuan review. Kelompok Scrum bertemu dan berbicara mengenai hal-hal berikut:</p>\r\n\r\n<ul>\r\n	<li>Apa saja yang terjadi dengan baik selama sprint</li>\r\n	<li>Apa saja yang tidak berjalan seperti yang direncanakan dalam sprint.</li>\r\n	<li>Pelajaran yang dipelajari</li>\r\n	<li>Item tindakan yang harus ditindaklanjuti.</li>\r\n</ul>\r\n\r\n<p>Dari pembahasan di atas dapat dilihat bahwa Scrum adalah solusi bagus untuk mendukung perkembangan proyek yang cepat dari hampir semua jenis proyek. Ini sangat efektif dalam menjamin efektifitas bagi organisasi manapun.</p>\r\n\r\n<p>Jika Anda lebih tertarik untuk melakukan project management dengan cara yang lebih tradisional, Anda juga bisa membaca artikel kami tentang berbagai&nbsp;<a href=\"https://www.dewaweb.com/blog/project-management-tools/\" target=\"_blank\">tools project management</a>&nbsp;yang dapat membantu Anda, terutama secara digital.</p>\r\n', 'Eka Jaya Nagara', '6a588338593f5c1adf57c792a96464ca.png', 'be0098e554f4ab186258e00b9e88ecdc.png', '2020-06-25 23:10:04'),
(25, '5ef4cd9f48608', 'zoom-meeting-definisi', 'Zoom Meeting: Definisi ', '1', '<p>Istilah&nbsp;<em>&ldquo;<a href=\"https://www.dewaweb.com/blog/video-conference/\">video</a></em><a href=\"https://www.dewaweb.com/blog/video-conference/\">&nbsp;<em>conference</em></a><em>&rdquo;</em>&nbsp;mungkin sudah tak asing lagi di telingamu. Ya, saat ini, berbagai instansi yang terpaksa melakukan kegiatan mereka dari rumah seringkali menggunakan&nbsp;<em>video</em>&nbsp;<em>conference</em>&nbsp;untuk tetap terhubung dengan rekan atau anggota lain. Ada berbagai media yang digunakan untuk melaksanakan&nbsp;<em>meeting&nbsp;</em>atau&nbsp;<em>video</em>&nbsp;<em>conference,</em>&nbsp;salah satunya adalah Zoom Meeting.</p>\r\n\r\n<p>Mungkin kamu sudah mulai merasakan bahwa Work from Home alias WFH tak lagi menjadi kebiasaan, melainkan sudah menjadi budaya bagi mereka yang cukup beruntung mendapatkan kesempatan ini. Meski tak semua orang dapat merasakan WFH akibat dampak COVID-19, namun setidaknya sejak 12 April 2020 sudah lebih dari 3,7 ribu&nbsp;<a href=\"https://www.instagram.com/p/B-3VsqljTgG/\">perusahaan di Ibukota</a>&nbsp;ikut menerapkan WFH.</p>\r\n\r\n<p>Lantas, apa sih Zoom Meeting yang sering digunakan oleh perusahaan untuk tetap memonitor karyawan mereka saat melakukan WFH? Simak artikelnya berikut ini.</p>\r\n\r\n<h2><strong>Aplikasi Zoom</strong></h2>\r\n\r\n<p>Zoom adalah aplikasi buatan miliarder, Eric Yuan, yang dirilis pada Januari 2013. Selain aplikasi, Zoom juga dapat diakses melalui&nbsp;<em>website,</em>&nbsp;baik untuk OS Mac, Windows, Linux, iOS, dan Android. Ketika mendaftarkan diri, kamu berada di jenis akun Basic yang memiliki beberapa keuntungan, seperti:</p>\r\n\r\n<ul>\r\n	<li>Dapat melakukan&nbsp;<em>meeting&nbsp;</em>hingga 100 partisipan</li>\r\n	<li>Gratis 40 menit&nbsp;<em>video</em>&nbsp;<em>conference&nbsp;</em>untuk rapat kelompok, kamu dapat mengulang lagi jika durasi sudah habis</li>\r\n	<li>Kualitas suara dan gambar HD</li>\r\n	<li>Screen-sharing</li>\r\n	<li>Akses ke&nbsp;<em>virtual background</em></li>\r\n	<li>Menjadwalkan hingga merekam keseluruhan&nbsp;<em>meeting</em></li>\r\n	<li>Membagi partisipan menjadi beberapa &ldquo;ruangan&rdquo; dengan fitur Breakout Rooms</li>\r\n</ul>\r\n\r\n<p>Jika kamu membutuhkan ruang rapat virtual untuk lebih dari 40 menit atau lebih dari 100 partisipan, kamu bisa menggunakan akun Pro, Business, atau Enterprise dengan harga mulai dari US$14,99 atau sekitar Rp200 ribuan per bulan.</p>\r\n\r\n<h2><strong>Zoom Meeting</strong></h2>\r\n\r\n<p>Agar tidak bingung, kamu harus tau bahwa ada beberapa layanan yang ditawarkan oleh Zoom, yaitu:</p>\r\n\r\n<ul>\r\n	<li>Zoom Meeting</li>\r\n	<li>Zoom Webinar</li>\r\n	<li>Zoom Room</li>\r\n	<li>Zoom Phone dan Chats</li>\r\n	<li>Aplikasi Marketplace</li>\r\n</ul>\r\n\r\n<p>Namun, untuk melakukan&nbsp;<em>video</em>&nbsp;<em>conference</em>&nbsp;bersama rekan atau karyawan kantor, perusahaan lebih sering menggunakan Zoom Meeting. Sebab, sama seperti layanan Zoom lainnya, Zoom Meeting dapat diakses dari mana pun. Selain itu, kelengkapan fitur yang disediakan Zoom Meeting juga sudah cukup memadai untuk melakukan diskusi atau rapat secara online.</p>\r\n\r\n<p>Nah, jangan sampai kamu salah membedakan, Zoom Meeting berbeda dengan Zoom Room, ya. Jika di Zoom Meeting kamu hanya memerlukan laptop dengan kamera dan mikrofon, Zoom Room memerlukan alat yang lebih lengkap lagi. Pasalnya, Zoom Room ditujukan untuk melakukan rapat yang memerlukan baik video call maupun tatap muka sehingga kamu memerlukan alat tertentu untuk menggunakan Zoom Room. Sederhananya, Zoom Room dapat mengubah rapat dari dua ruangan berbeda seakan-akan berada di satu ruangan yang sama.</p>\r\n', 'Eka Jaya Nagara', '3fafdc33bfea02dbaa4cb6fb00ca3116.png', 'ffcfd5829ae148cffe4a8da7cc0ef95a.jpg', '2021-08-14 11:03:18'),
(26, '5ef5a3256af14', 'tingkatkan-kualitas-kerja-lewat-training-online', 'Tingkatkan Kualitas Kerja lewat Training Online', '1', '<p>Di dalam dunia kerja, pelatihan kerja atau training merupakan salah satu hal yang penting bagi para pekerja. Sebab melalui training ini para pekerja akan lebih bekali dengan pengembangan keterampilan kerja bagi perusahaan tempatnya bekerja.</p>\r\n\r\n<p>Training menjadi kesempatan bagi para pekerja sebagai bentuk pengenalan perusahaan terhadap karyawan. Begitu pula dengan pengetahun atau pemahaman pekerja akan tugas dan tanggung jawab yang akan dikerjakan sesuai dengan yang tujuan perusahaan.</p>\r\n\r\n<p>Di era digital ini mengikuti training tidak harus dalam kelas, pelatihan atau pun kursus pun diadakan secara online. Salah satu platform training online terbaru adalah OrangT yang bisa diakses melalui website atau aplikasi mobile dan bisa dilakukan di mana pun, kapan pun.</p>\r\n\r\n<p>Online learning bukanlah hal baru bagi perusahaan. Tantangan terbesar di masa ini adalah memastikan semua karyawan meluangkan waktu untuk mengikuti kelas online ini. Selain itu juga harus dipastikan mereka menyelesaikan semua materi dan mendapatkan hasil belajar yang sama baik dengan pelatihan regular.</p>\r\n\r\n<p>Saat ini perusahaan yang telah bekerja sama dengan OrangT terdapat dari berbagai industri seperti distribusi, manufaktur, industri makanan, lembaga keuangan dan perbankan. Sebelum adanya training online ini, pelatihan bagi karyawan dilakukan secara offline dan di lokasi yang jauh. Dengan OrangT ini karyawan cukup login ke platform, menjalankannya di waktu yang nyaman bagi mereka, bahkan mengerjakannya dimana saja.</p>\r\n\r\n<p>Tidak hanya sekedar bekerja, namun karyawan perlu meningkatkan dan mengembangkan diri lewat berbagai training yang disediakan oleh perusahaan maupun pihak luar. Jangan batasi diri Anda untuk belajar banyak hal lain diluar dari kemampuan yang Anda miliki saat ini. Sebab potensi diri menentukan kualitas kerja Anda.<br />\r\n&nbsp;</p>\r\n', 'Eka Jaya Nagara', '85986e00f4accb1ad36492126fbcf869.jpg', '4f6e6a92f9a82297b3725d09a1134bca.jpg', '2020-06-26 14:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(9) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `company` varchar(100) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `nama`, `email`, `mobile`, `company`, `perihal`, `pesan`, `tanggal`) VALUES
(59, 'nagara', 'nagara@gmail.com', '087889053382', 'sps', 'Parnership', 'please let me go', '2021-08-13 10:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_image`
--

CREATE TABLE `tb_image` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(200) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateat` timestamp NULL DEFAULT NULL,
  `updateby` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_info`
--

CREATE TABLE `tb_info` (
  `id` int(11) NOT NULL,
  `host` varchar(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `akses_address` varchar(100) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `sistem_operasi` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_info`
--

INSERT INTO `tb_info` (`id`, `host`, `ip_address`, `akses_address`, `platform`, `sistem_operasi`, `date`) VALUES
(123, 'localhost', '::1', 'News', 'Chrome', 'Windows 10', '2020-06-26 00:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_password_reset`
--

CREATE TABLE `tb_password_reset` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `key_tmp` varchar(255) NOT NULL,
  `expdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sosmed`
--

CREATE TABLE `tb_sosmed` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(200) NOT NULL,
  `sosmed` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateat` timestamp NULL DEFAULT NULL,
  `updateby` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sosmed`
--

INSERT INTO `tb_sosmed` (`id`, `uniqid`, `sosmed`, `link`, `createat`, `updateat`, `updateby`) VALUES
(0, '6117495bbc85b', 'instagram', 'https://www.instagram.com/miyukinagara/', '2021-08-14 04:40:59', '2021-08-14 04:40:59', '0000-00-00 00:00:00'),
(0, '611749b62b6a8', 'youtube', 'https://www.instagram.com/miyukinagara/', '2021-08-14 04:42:30', '2021-08-14 04:42:30', '0000-00-00 00:00:00'),
(0, '6117554fc735f', 'linkedln', 'https://www.instagram.com/miyukinagara/', '2021-08-14 05:31:59', '2021-08-14 05:31:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_text`
--

CREATE TABLE `tb_text` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(200) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  `createat` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateat` timestamp NULL DEFAULT NULL,
  `updateby` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_text`
--

INSERT INTO `tb_text` (`id`, `uniqid`, `judul`, `content`, `createat`, `updateat`, `updateby`) VALUES
(1, '61175958a6853', 'title', 'orangt', '2021-08-14 05:49:12', '2021-08-14 05:49:12', '0000-00-00 00:00:00'),
(2, '6117597bdd511', 'company', 'pt sps strategic partner solution', '2021-08-14 05:49:47', '2021-08-14 05:49:47', '0000-00-00 00:00:00'),
(3, '61175c1563af9', 'company', 'undefined', '2021-08-14 06:00:53', '2021-08-14 06:00:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tmp`
--

CREATE TABLE `tb_tmp` (
  `id` int(11) NOT NULL,
  `name_tmp` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `passw` varchar(255) NOT NULL,
  `level` int(1) NOT NULL COMMENT 'status 0 : root, status 1 : admin ,status 2 : user',
  `status` int(11) NOT NULL COMMENT 'status acc atau tidak acc'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `userid`, `nama`, `deskripsi`, `foto`, `user_name`, `passw`, `level`, `status`) VALUES
(1, '1', 'eka jaya nagara', '<p>programer PHP expert</p>\n\n<p>&nbsp;</p>\n', '24cc910d43b00e4b52d35be4ce225447.jpg', 'root', '4c59916b36b13143d8d4746466d79158', 0, 1),
(19, '19', 'nagara', '<p>admin dari pt sps dan programmer</p>\r\n', '414e54446aa284d88ab0b1ef37cac8b4.jpg', 'programmer', 'c6e6e3b854490d8ff3a50f53e812566a', 1, 1),
(20, '6115dfb883549', 'andi diputra', '<p>digital marketing pt sps</p>\r\n', 'a76e38987135eb9853430a26aa465123.jpg', 'andi', '1d69ded7713f92f0f41ddfc0cdbcdb80', 2, 1),
(21, '6115e068dd139', 'nita', '<p>user add testing</p>\r\n', '5d96b3aa0c8e4b7adfaf35bc0f3703a7.jpg', 'nita12', '89e2758116d9ea57700ce3ef2e1cdedc', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_visitor`
--

CREATE TABLE `tb_visitor` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `urlid` varchar(100) NOT NULL,
  `judul_content` varchar(100) NOT NULL,
  `visit_views` int(11) NOT NULL,
  `visitor_ip` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_visitor`
--

INSERT INTO `tb_visitor` (`id`, `uniqid`, `urlid`, `judul_content`, `visit_views`, `visitor_ip`, `waktu`) VALUES
(22, '5ef4c25666ad0', '7-layanan-video-conference-gratis-untuk-work-from-home', '7 Layanan Video Conference Gratis untuk Work from Home', 15, '::1', '2020-06-25 22:27:18'),
(23, '5ef4c65a45069', 'world-wide-web-consortium', 'World Wide Web Consortium', 4, '::1', '2020-06-25 22:44:26'),
(24, '5ef4c72616e72', 'pengertian-dan-karakteristik-e-learning', 'Pengertian dan karakteristik e-learning', 6, '::1', '2020-06-25 22:47:50'),
(25, '5ef4c91a3a6b4', 'manfaat-dan-pentingnya-belajar-bahasa-inggris-di-era-globalisasi', 'Manfaat dan Pentingnya Belajar Bahasa Inggris di Era Globalisasi', 4, '::1', '2020-06-25 22:56:10'),
(26, '5ef4cc5cb6ad1', 'scrum-methodology-panduan-project-management', 'Scrum Methodology: Panduan Project Management', 2, '::1', '2020-06-25 23:10:04'),
(27, '5ef4cd9f48608', 'zoom-meeting-definisi', 'Zoom Meeting: Definisi ', 14, '::1', '2020-06-25 23:15:27'),
(28, '5ef5a3256af14', 'tingkatkan-kualitas-kerja-lewat-training-online', 'Tingkatkan Kualitas Kerja lewat Training Online', 2, '::1', '2020-06-26 14:26:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqid` (`uniqid`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_password_reset`
--
ALTER TABLE `tb_password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_text`
--
ALTER TABLE `tb_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tmp`
--
ALTER TABLE `tb_tmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqid` (`uniqid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tb_password_reset`
--
ALTER TABLE `tb_password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_text`
--
ALTER TABLE `tb_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tmp`
--
ALTER TABLE `tb_tmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_visitor`
--
ALTER TABLE `tb_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
