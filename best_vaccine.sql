-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 11:50 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `best_vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `lct_id` int(12) NOT NULL,
  `lct_name` varchar(64) DEFAULT NULL,
  `lct_max` int(12) NOT NULL DEFAULT 0,
  `lct_capa` int(12) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`lct_id`, `lct_name`, `lct_max`, `lct_capa`) VALUES
(1, 'สภานีกลางบางซื่อ', 100, 10),
(2, 'โรงพยาบาลบางโพ', 100, 12),
(3, 'โรงพยาบาลรามาธิบดี', 100, 11),
(4, 'โรงพยาบาลธนบุรี 2', 100, 10),
(5, 'โรงพยาบาลบางพลี', 100, 10);

-- --------------------------------------------------------

--
-- Table structure for table `queues`
--

CREATE TABLE `queues` (
  `que_idcard` varchar(20) NOT NULL,
  `que_no` int(12) NOT NULL DEFAULT 0,
  `locationid` int(12) NOT NULL DEFAULT 0,
  `que_status` enum('stable','cancel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `queues`
--

INSERT INTO `queues` (`que_idcard`, `que_no`, `locationid`, `que_status`) VALUES
('1105209234166', 1009, 3, 'stable'),
('1446956215912', 1002, 2, 'stable'),
('1869900440502', 1003, 2, 'stable'),
('2012073461383', 1009, 5, 'stable'),
('2033758469909', 1007, 5, 'stable'),
('2147778739815', 1008, 5, 'stable'),
('2359593758562', 1008, 3, 'stable'),
('2389318030197', 1012, 2, 'stable'),
('2632814956435', 1005, 1, 'stable'),
('2656452285280', 1007, 1, 'stable'),
('2715841875094', 1005, 4, 'stable'),
('3039474669028', 1001, 4, 'stable'),
('4265853260333', 1002, 4, 'stable'),
('4268678789680', 1001, 1, 'stable'),
('4361981364854', 1005, 5, 'stable'),
('4683731963067', 1013, 2, 'stable'),
('4952615107610', 1010, 4, 'stable'),
('5027045302925', 1007, 4, 'stable'),
('5070222958767', 1006, 4, 'stable'),
('5146481014930', 1010, 1, 'stable'),
('5188382135170', 1006, 3, 'stable'),
('5402675819694', 1005, 3, 'stable'),
('5593976835460', 1010, 5, 'stable'),
('5624035338201', 1004, 3, 'stable'),
('5759432345488', 1002, 5, 'stable'),
('5770975878918', 1008, 1, 'stable'),
('6045383894798', 1008, 2, 'stable'),
('6737168114878', 1011, 1, 'stable'),
('6821847085841', 1011, 2, 'stable'),
('7268912365458', 1007, 3, 'stable'),
('7669882993682', 1006, 5, 'stable'),
('7822293074838', 1004, 1, 'stable'),
('8253845192457', 1007, 2, 'stable'),
('8258785123467', 1002, 3, 'stable'),
('8359235434923', 1004, 5, 'stable'),
('8531178797580', 1004, 2, 'stable'),
('8609972343219', 1010, 3, 'stable'),
('8622993117581', 1003, 1, 'stable'),
('8653803596475', 1006, 1, 'stable'),
('8675329370884', 1006, 2, 'stable'),
('8843083518364', 1009, 1, 'stable'),
('8987833707802', 1004, 4, 'stable'),
('9249177609699', 1003, 4, 'stable'),
('9263661847581', 1008, 4, 'stable'),
('9393626796231', 1005, 2, 'stable'),
('9440509276776', 1009, 2, 'stable'),
('9660007653971', 1001, 5, 'stable'),
('9696061815032', 1009, 4, 'stable'),
('9763796627240', 1002, 1, 'stable'),
('9810077632890', 1003, 3, 'stable'),
('9893488537869', 1001, 3, 'stable'),
('9929007199574', 1003, 5, 'stable'),
('9966801435511', 1010, 2, 'stable'),
('NULL', 1001, 2, 'cancel');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `res_idcard` varchar(20) NOT NULL,
  `res_fname` varchar(64) DEFAULT NULL,
  `res_lname` varchar(64) DEFAULT NULL,
  `res_age` int(12) NOT NULL DEFAULT 0,
  `res_address` varchar(64) DEFAULT NULL,
  `res_phone` varchar(20) DEFAULT NULL,
  `res_sex` varchar(64) DEFAULT NULL,
  `res_birth` date NOT NULL,
  `res_disease` varchar(64) DEFAULT NULL,
  `res_email` varchar(128) DEFAULT NULL,
  `res_getvac` tinyint(1) NOT NULL,
  `res_vactype` varchar(64) DEFAULT NULL,
  `res_needles` int(12) NOT NULL DEFAULT 0,
  `res_locationid` int(12) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`res_idcard`, `res_fname`, `res_lname`, `res_age`, `res_address`, `res_phone`, `res_sex`, `res_birth`, `res_disease`, `res_email`, `res_getvac`, `res_vactype`, `res_needles`, `res_locationid`) VALUES
('1105209234166', 'ลำไย', 'ไหมดักแด้', 22, '222/235', '0885351333', 'female', '2000-02-26', 'ไม่มี', 'P3@gmail.com', 0, 'Sinopharm', 2, 3),
('1446956215912', 'ธรมมนัส', 'เจริญแป้ง', 21, 'dczxczxc', '0944353453', 'male', '2021-11-01', 'ไม่มี', 'Test112233@gmail.com', 0, 'Pifzer', 2, 2),
('1869900440502', 'อากิระ', 'ฮิรากิ', 20, 'sdaxzc', '0616450118', 'male', '2021-11-03', 'ไม่มี', 'fullyz1532@gmail.com', 0, 'AstraZeneca', 2, 2),
('2012073461383', 'ดีดกีตาร์ต้องตัดเล็บ', 'รักแล้วเจ็บต้องตัดใจ', 22, '1/3', '0885351351', 'male', '2000-03-23', 'ไม่มี', 'ff1@gmail.com', 0, 'Sinopharm', 2, 5),
('2033758469909', 'แบบไหนที่เข้าตา', 'บอกมาเพื่อเข้าใจ', 22, '289/20', '0885351349', 'male', '2000-05-29', 'ไม่มี', 'f9@gmail.com', 1, 'Moderna', 2, 5),
('2147778739815', 'เจ็บคอเพราะไอ', 'เจ็บใจเพราะยู', 22, '456/10', '0885351350', 'male', '2000-05-22', 'ไม่มี', 'ff0@gmail.com', 1, 'Pifzer', 2, 5),
('2359593758562', 'ไหมไทย', 'ใจบ่มักดี', 22, '66/68', '0885351332', 'male', '2000-01-27', 'ไม่มี', 'p2@gmail.com', 0, 'Moderna', 1, 3),
('2389318030197', 'จอร์ดิ้', 'จอร์จ๊าด', 22, '137/10', '0885351323', 'male', '2000-06-03', 'ไม่มี', 'ppap25@gmail.com', 1, 'Sinopharm', 2, 2),
('2632814956435', 'หม่องแจ๊ะ', 'โลกหมุน', 22, '159/55', '0885351375', 'male', '2000-11-10', 'ไม่มี', 'ppap5@gmail.com', 1, 'Sinopharm', 1, 1),
('2656452285280', 'สมชาย', 'สายเขียว', 22, '222/123', '0885351379', 'male', '2000-10-11', 'ไม่มี', 'ppap7@gamil.com', 1, 'Sinopharm', 1, 1),
('2715841875094', 'เบื่อ', 'ซิลลี่ฟูลส์', 22, '789/445', '0885351338', 'male', '2000-01-27', 'ไม่มี', 'P8@hmail.com', 1, 'Pifzer', 2, 4),
('3039474669028', 'นาตาซา', 'โรมานอฟ', 22, '22/10', '0885351314', 'female', '2000-01-01', 'ไม่มี', 'ppap13@gmail.com', 1, 'Moderna', 2, 4),
('4265853260333', 'ไผ่', 'พงศาวดาร', 22, '9/1', '0885351335', 'male', '2000-05-05', 'ไม่มี', 'p5@gmail.com', 1, 'Pifzer', 2, 4),
('4268678789680', 'สมชาย', 'สายสมอล', 21, '137/123', '0885351371', 'male', '2000-11-07', 'ไม่มี', 'ppap01@gmail.com', 1, 'Sinovac', 2, 1),
('4361981364854', 'อาการไอมันเจ็บคอ', 'อาการรอมันเจ็บใจ', 22, '456/85', '0885351347', 'male', '2000-05-03', 'ไม่มี', 'f7@gmail.com', 1, 'Pifzer', 1, 5),
('4683731963067', 'เหว่ย', 'เส้าหลิน', 22, '88/52', '0885351324', 'male', '2000-11-08', 'ไม่มี', 'ppap26@gmail.com', 1, 'Pifzer', 2, 2),
('4952615107610', 'ไม่หวั่นแม้วันมามาก', 'ซิลลี่ฟูลส์', 22, '445/285', '0885351343', 'male', '2000-12-23', 'ไม่มี', 'f4@gmail.com', 1, 'AstraZeneca', 2, 4),
('5027045302925', 'ผิดที่ไว้ใจ', 'ซิลลี่ฟูลส์', 22, '89/9', '0885351340', 'male', '2000-03-23', 'ไม่มี', 'f0@gmail.com', 0, 'Pifzer', 2, 4),
('5070222958767', 'ไหนว่าจะไม่หลอกกัน', 'ซิลลี่ฟูลส์', 22, '558/2', '0885351339', 'male', '2000-01-25', 'ไม่มี', 'p9@gmail.com', 1, 'Moderna', 2, 4),
('5146481014930', 'มานะ', 'หลับตลอด', 22, '88/9', '0885351311', 'male', '2000-07-07', 'ไม่มี', 'ppap10@gmail.com', 1, 'Sinovac', 1, 1),
('5188382135170', 'บอย', 'พนมใคร', 22, '555/43', '0885351330', 'male', '2000-03-02', 'ไม่มี', 'ppap31@gmail.com', 1, 'Pifzer', 2, 3),
('5402675819694', 'มาริโอ้', 'เมาหรอ', 22, '888/123', '0885351329', 'male', '2000-10-08', 'ไม่มี', 'ppap30@gmail.com', 0, 'Pifzer', 1, 3),
('5593976835460', 'ฝันดีก็สำคัญ', 'ฝันถึงกันบ้างก็ดี', 22, '123/5', '0885351352', 'male', '2000-02-26', 'ไม่มี', 'ff2@gmail.com', 1, 'Pifzer', 2, 5),
('5624035338201', 'เจมส์', 'กิจลาหยุด', 22, '66/6', '0885351328', 'male', '2000-10-07', 'ไม่มี', 'ppap29@gmail.com', 1, 'Sinopharm', 1, 3),
('5759432345488', 'ไม่ต้องบอกว่าอยากนอน', 'ไม่อยากคุยก็บอก', 22, '8/98', '0885351344', 'male', '2000-02-01', 'ไม่มี', 'f3@gmail.com', 0, 'Moderna', 2, 5),
('5770975878918', 'ปานา', 'ติปาตา', 21, '123/321', '0885351370', 'female', '1999-09-12', 'ไม่มี', 'ppap8@gmail.com', 1, 'AstraZeneca', 1, 1),
('6045383894798', 'นิก', 'ฟิวเจอร์', 22, '199/19', '0885351319', 'male', '2000-04-01', 'ไม่มี', 'ppap21@gmail.com', 0, 'Sinopharm', 1, 2),
('6737168114878', 'โอ๊ต', 'ปาเจรา ', 22, '88/8', '0885351325', 'male', '2000-11-08', 'ไม่มี', 'ppap27@gmail.com', 1, 'Sinovac', 2, 3),
('6821847085841', 'พีระพงค์', 'ลงคลอง', 22, '99/10', '0885351322', 'male', '2000-05-23', 'ไม่มี', 'ppap24@gmail.com', 1, 'Moderna', 2, 2),
('7268912365458', 'สิงโต', 'นำขบวน', 22, '20/2', '0885351331', 'male', '2000-03-28', 'ไม่มี', 'p1@gmail.com', 1, 'Pifzer', 2, 3),
('7669882993682', ' อบอุ่นกว่าพี่', 'ก็มีแต่ไมโครเวฟแล้วแหละ', 22, '285/20', '0885351348', 'male', '2000-05-28', 'ไม่มี', 'f8@gmail.com', 1, 'Pifzer', 2, 5),
('7822293074838', 'นครอิน', 'ถิ่นใคร', 22, '99/9', '0885351374', 'male', '2000-06-09', 'ไม่มี', 'ppap4@gmail.com', 1, 'Moderna', 2, 1),
('8253845192457', 'เต้', 'พระนคร', 22, '3/2', '0885351318', 'male', '2000-05-02', 'ไม่มี', 'ppap20@gmail.com', 1, 'Moderna', 2, 2),
('8258785123467', 'คิตตี้', 'ขยี้ใจ', 22, '55/5', '0885351313', 'female', '2000-09-09', 'โรคเบาหวาน', 'ppap12@gamil.com', 1, 'AstraZeneca', 2, 3),
('8359235434923', 'เศรษฐกิจซบเซา', 'หันมาซบเราได้นะ', 22, '6/8', '0885351346', 'male', '2000-08-06', 'ไม่มี', 'f6@gmail.com', 1, 'Sinopharm', 1, 5),
('8531178797580', 'ปารีณา', 'กุ๊กกุ๊ก', 22, '44/4', '0885351312', 'female', '2000-10-05', 'โรคเบาหวาน', 'ppap11@gmail.com', 1, 'AstraZeneca', 2, 2),
('8609972343219', 'ไมค์', 'อภิธรรม', 22, '78/53', '0885351334', 'male', '2000-08-23', 'ไม่มี', 'p4@gmail.com', 1, 'Pifzer', 2, 3),
('8622993117581', 'สุดสวย', 'นะจ๊ะ', 22, '555/10', '0885351373', 'female', '2000-07-11', 'ไม่มี', 'ppap3@gmail.com', 1, 'Pifzer', 2, 1),
('8653803596475', 'ประหยัด', 'จันทร์อังคาร', 22, '66/78', '0885351377', 'male', '2000-12-12', 'ไม่มี', 'ppap6@gmail.com', 1, 'Pifzer', 1, 1),
('8675329370884', 'มณี', 'ทองหล่อ', 22, '3/1', '0885351317', 'female', '2000-02-01', 'ไม่มี', 'ppap18@gmail.com', 1, 'AstraZeneca', 2, 2),
('8843083518364', 'กากมณี', 'หลีม่อ', 21, '78/9', '0885351310', 'male', '1999-06-05', 'ไม่มี', 'ppap9@gmail.com', 1, 'AstraZeneca', 1, 1),
('8987833707802', 'แพ้ความอ่อนแอ', 'ซิลลี่ฟูลส์', 22, '589/1', '0885351337', 'male', '2000-11-26', 'ไม่มี', 'p7@gmail.com', 1, 'Pifzer', 2, 4),
('9249177609699', 'พรศักดิ์', 'ส่องสว่าง', 22, '852/9', '0885351336', 'male', '2000-08-26', 'ไม่มี', 'P6@gmail.com', 1, 'Sinopharm', 2, 4),
('9263661847581', 'เสก', 'สายไหม', 22, '789/987', '0885351341', 'male', '2000-06-23', 'ไม่มี', 'f1@gmail.com', 1, 'Moderna', 1, 4),
('9393626796231', 'โอ', 'เลี้ยง', 12, '137 หมู่ 10', '0885351316', 'male', '2010-10-10', 'ไม่มี', 'ppap15@gmail.com', 1, 'AstraZeneca', 2, 2),
('9440509276776', 'จินตะ', 'หราาาา', 22, '865/552', '0885351320', 'female', '2000-01-29', 'ไม่มี', 'ppap22@gmail.com', 1, 'Sinovac', 2, 2),
('9660007653971', 'อยากตัดใจ', 'แต่กรรไกรดันไม่คม', 22, '66/3', '0885351315', 'male', '2000-01-31', 'ไม่มี', 'ppap14@gamil.com', 1, 'Moderna', 2, 5),
('9696061815032', 'อย่าบอกว่ารัก', 'ซิลลี่ฟูลส์', 22, '25/5', '0885351342', 'male', '2000-05-25', 'ไม่มี', 'f2@gamil.com', 1, 'Sinovac', 2, 4),
('9763796627240', 'สมหญิง', 'สุดใจ', 22, '157/10', '0885351372', 'female', '2000-04-01', 'ไม่มี', 'ppap2@gmail.com', 1, 'AstraZeneca', 2, 1),
('9810077632890', 'ใหม่', 'ยามวิกาล', 22, '11/156', '0885351327', 'male', '2000-09-05', 'ไม่มี', 'ppap28@gmaoil.com', 1, 'Moderna', 2, 3),
('9893488537869', 'มะนาวต่างนุด', 'มนุษย์ต่างดาว', 21, 'xddzsd', '0989455467', 'male', '2021-11-11', 'โรคหัวใจและหลอดเลือด', 'Test12345@gmail.com', 0, 'AstraZeneca', 2, 3),
('9929007199574', 'กาแฟยังใส่นม', 'หน้าไม่คมแต่ใส่ใจ', 22, '598/5', '0885351345', 'male', '2000-05-03', 'ไม่มี', 'f5@gmail.com', 1, 'Pifzer', 2, 5),
('9966801435511', 'เจนจิ', 'หราาาา', 22, '55/10', '0885351321', 'male', '2000-05-02', 'ไม่มี', 'ppap23@gamil.com', 1, 'Pifzer', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `vac_id` int(12) NOT NULL,
  `vac_name` varchar(64) DEFAULT NULL,
  `vac_detail` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`vac_id`, `vac_name`, `vac_detail`) VALUES
(1, 'Sinovac', NULL),
(2, 'AstraZeneca', NULL),
(3, 'Pifzer', NULL),
(4, 'Moderna', NULL),
(5, 'Sinopharm', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`lct_id`);

--
-- Indexes for table `queues`
--
ALTER TABLE `queues`
  ADD PRIMARY KEY (`que_idcard`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`res_idcard`),
  ADD UNIQUE KEY `res_phone` (`res_phone`),
  ADD UNIQUE KEY `res_email` (`res_email`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`vac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `lct_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `vac_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
