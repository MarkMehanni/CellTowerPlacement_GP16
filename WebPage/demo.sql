-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 03:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(255) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `description` varchar(200) NOT NULL,
  `Technology` varchar(255) NOT NULL,
  `Coverage` varchar(255) NOT NULL,
  `Traffic` varchar(255) NOT NULL,
  `rSCP` varchar(255) NOT NULL,
  `Ecno` varchar(255) NOT NULL,
  `CellLabel` varchar(255) NOT NULL,
  `location_status` tinyint(1) DEFAULT 0,
  `Distance` text NOT NULL,
  `Prediction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lat`, `lng`, `description`, `Technology`, `Coverage`, `Traffic`, `rSCP`, `Ecno`, `CellLabel`, `location_status`, `Distance`, `Prediction`) VALUES
(1, 30.121468, 31.412762, '', '3G', '693.82', '744769975', '-95', '-10', '103', 0, '693.82', 'Doesnt satisfy reqiurments'),
(2, 30.035334, 31.214022, '', '3G', '71.63', '337635605', '-60', '-4', '123', 1, '71.63', 'Satisfy Reqiurments'),
(3, 30.111612, 31.396385, '', '4G', '89.98', '359400433', '-95', '-10', '202', 0, '89.98', 'Doesnt satisfy reqiurments'),
(4, 30.060223, 31.185667, '', '4G', '823.24', '433281909', '-95', '-10', '301', 0, '823.24', 'Doesnt satisfy reqiurments'),
(5, 30.038422, 31.211952, '', '3G', '304.42', '444308755', '-95', '-10', '349', 0, '304.42', 'Doesnt satisfy reqiurments'),
(6, 30.112240, 31.397020, '', '4G', '6.42', '526357333', '-60', '-3', '355', 1, '6.42', 'Satisfy Reqiurments'),
(7, 30.101194, 31.402584, '', '3G', '358.9', '429616369', '-95', '-10', '355', 0, '358.9', 'Doesnt satisfy reqiurments'),
(8, 30.123346, 31.454830, '', '3G', '4020', '592118956', '-95', '-10', '375', 0, '4020', 'Doesnt satisfy reqiurments'),
(9, 30.108875, 31.395538, '', '3G', '12.48', '306497484', '-60', '-3', '377', 1, '12.48', 'Satisfy Reqiurments'),
(10, 30.112118, 31.393150, '', '4G', '198.36', '172228940', '-95', '-10', '377', 0, '198.36', 'Doesnt satisfy reqiurments'),
(11, 30.037697, 31.216846, '', '2G', '69.08', '612979093', '-60', '-4', '395', 1, '69.08', 'Satisfy Reqiurments'),
(12, 30.052147, 31.198954, '', '3G', '147.85', '650368082', '-95', '-10', '467', 0, '147.85', 'Doesnt satisfy reqiurments'),
(13, 30.004824, 31.451263, '', '2G', '478.51', '364377274', '-95', '-10', '520', 0, '478.51', 'Doesnt satisfy reqiurments'),
(14, 30.019041, 31.401993, '', '2G', '195.57   ', '111067238', '-95', '-10', '557', 0, '195.57   ', 'Doesnt satisfy reqiurments'),
(15, 30.016563, 31.417566, '', '2G', '68.27   ', '423729647', '-95', '-10', '570', 0, '68.27   ', 'Doesnt satisfy reqiurments'),
(16, 30.020653, 31.401182, '', '2G', '194.66   ', '101617769', '-95', '-10', '584', 0, '194.66   ', 'Doesnt satisfy reqiurments'),
(17, 30.034826, 31.166800, '', '4G', '513.17', '637324095', '-95', '-10', '733', 0, '513.17', 'Doesnt satisfy reqiurments'),
(18, 31.211790, 29.921383, '', '3G', ' 155.86   ', '624836832', '-95', '-10', '941', 0, ' 155.86   ', 'Doesnt satisfy reqiurments'),
(19, 30.049700, 31.217472, '', '4G', '106.15', '567759929', '-95', '-10', '1321', 0, '106.15', 'Doesnt satisfy reqiurments'),
(20, 30.037083, 31.217007, '', '3G', '69.08', '529296251', '-60', '-4', '1359', 1, '69.08', 'Satisfy Reqiurments'),
(21, 30.059795, 31.187885, '', '4G', '218.45', '284427280', '-95', '-10', '1361', 0, '218.45', 'Doesnt satisfy reqiurments'),
(22, 30.048771, 31.218672, '', '4G', '66.41', '160163597', '-60', '-4', '1371', 1, '66.41', 'Satisfy Reqiurments'),
(23, 30.043402, 31.174458, '', '4G', '692.68', '107163705', '-95', '-10', '1391', 0, '692.68', 'Doesnt satisfy reqiurments'),
(24, 31.233170, 29.955929, '', '3G', ' 141.09   ', '337927768', '-95', '-10', '1402', 0, ' 141.09   ', 'Doesnt satisfy reqiurments'),
(25, 30.040571, 31.222631, '', '2G', '533.91', '741812815', '-95', '-10', '1677', 0, '533.91', 'Doesnt satisfy reqiurments'),
(26, 30.060165, 31.194220, '', '4G', '823.24', '426957952', '-95', '-10', '1761', 0, '823.24', 'Doesnt satisfy reqiurments'),
(27, 30.111897, 31.381193, '', '3G', '257.92', '398194534', '-95', '-10', '1772', 0, '257.92', 'Doesnt satisfy reqiurments'),
(28, 30.038540, 31.169966, '', '4G', '513.17', '144707204', '-95', '-10', '2056', 0, '513.17', 'Doesnt satisfy reqiurments'),
(29, 30.054382, 31.217115, '', '4G', '471.23', '512448960', '-95', '-10', '2069', 0, '471.23', 'Doesnt satisfy reqiurments'),
(30, 30.039467, 31.217236, '', '3G', '200.53', '757322299', '-95', '-10', '2159', 0, '200.53', 'Doesnt satisfy reqiurments'),
(31, 30.107059, 31.395235, '', '3G', '72.4', '344619591', '-60', '-4', '2242', 1, '72.4', 'Satisfy Reqiurments'),
(32, 30.124113, 31.400808, '', '3G', '661.68', '260382226', '-95', '-10', '2269', 0, '661.68', 'Doesnt satisfy reqiurments'),
(33, 31.211151, 29.917210, '', '3G', ' 257.02   ', '365392640', '-95', '-10', '2318', 0, ' 257.02   ', 'Doesnt satisfy reqiurments'),
(34, 30.108040, 31.400028, '', '3G', '27.89', '450839276', '-60', '-3', '2329', 1, '27.89', 'Satisfy Reqiurments'),
(35, 30.042177, 31.195139, '', '3G', '5.82', '398374737', '-60', '-3', '2336', 1, '5.82', 'Satisfy Reqiurments'),
(36, 31.217896, 29.946541, '', '3G', ' 101.72   ', '326002910', '-95', '-10', '2360', 0, ' 101.72   ', 'Doesnt satisfy reqiurments'),
(37, 30.033689, 31.211849, '', '3G', '31.63', '660881767', '-60', '-3', '2432', 1, '31.63', 'Satisfy Reqiurments'),
(38, 30.031191, 31.212158, '', '2G', '279.4', '734954918', '-95', '-10', '2432', 0, '279.4', 'Doesnt satisfy reqiurments'),
(39, 30.109011, 31.396420, '', '3G', '86.22', '771057676', '-95', '-10', '2442', 0, '86.22', 'Doesnt satisfy reqiurments'),
(40, 30.119419, 31.388529, '', '4G', '56.2', '332006268', '-60', '-4', '2464', 1, '56.2', 'Satisfy Reqiurments'),
(41, 30.108765, 31.395508, '', '3G', '12.48', '701805457', '-60', '-3', '2475', 1, '12.48', 'Satisfy Reqiurments'),
(42, 31.219490, 29.948156, '', '3G', '58.7', '101391760', '-60', '-4', '2602', 1, '58.7', 'Satisfy Reqiurments'),
(43, 30.108368, 31.397120, '', '3G', '97.81', '679812060', '-95', '-10', '2603', 0, '97.81', 'Doesnt satisfy reqiurments'),
(44, 31.228537, 29.958992, '', '3G', ' 509.57   ', '760162107', '-95', '-10', '2695', 0, ' 509.57   ', 'Doesnt satisfy reqiurments'),
(45, 31.219828, 29.947685, '', '3G', '54.35   ', '200468930', '-95', '-10', '2860', 0, '54.35   ', 'Doesnt satisfy reqiurments'),
(46, 31.220873, 29.947035, '', '3G', '132.23   ', '429406085', '-95', '-10', '2861', 0, '132.23   ', 'Doesnt satisfy reqiurments'),
(47, 30.025986, 31.201313, '', '4G', '235.07', '175028414', '-95', '-10', '2880', 0, '235.07', 'Doesnt satisfy reqiurments'),
(48, 30.020805, 31.413412, '', '3G', '620.06   ', '549750294', '-95', '-10', '2918', 0, '620.06   ', 'Doesnt satisfy reqiurments'),
(49, 29.997355, 31.391956, '', '3G', ' 843.33  ', '542257233', '-95', '-10', '2930', 0, ' 843.33  ', 'Doesnt satisfy reqiurments'),
(50, 30.110628, 31.385315, '', '3G', '520.49', '219143968', '-95', '-10', '2939', 0, '520.49', 'Doesnt satisfy reqiurments'),
(51, 30.124453, 31.386877, '', '3G', '607.63', '138705184', '-95', '-10', '2961', 0, '607.63', 'Doesnt satisfy reqiurments'),
(52, 30.035994, 31.214602, '', '3G', '91.97', '538913962', '-95', '-10', '2997', 0, '91.97', 'Doesnt satisfy reqiurments'),
(53, 31.198732, 29.908314, '', '3G', ' 258.54   ', '102925046', '-95', '-10', '3005', 0, ' 258.54   ', 'Doesnt satisfy reqiurments'),
(54, 31.243408, 29.966743, '', '3G', '498.00   ', '184615044', '-95', '-10', '3018', 0, '498.00   ', 'Doesnt satisfy reqiurments'),
(55, 31.201872, 29.916702, '', '2G', '198.61   ', '349791693', '-95', '-10', '3026', 0, '198.61   ', 'Doesnt satisfy reqiurments'),
(56, 31.217054, 29.946171, '', '3G', ' 101.72   ', '409592017', '-95', '-10', '3039', 0, ' 101.72   ', 'Doesnt satisfy reqiurments'),
(57, 31.203718, 29.916834, '', '2G', '201.96   ', '239035951', '-95', '-10', '3056', 0, '201.96   ', 'Doesnt satisfy reqiurments'),
(58, 31.249111, 29.968307, '', '2G', ' 104.91   ', '631354115', '-95', '-10', '3063', 0, ' 104.91   ', 'Doesnt satisfy reqiurments'),
(59, 31.128653, 29.898052, '', '2G', '900.02   ', '175049658', '-95', '-10', '3123', 0, '900.02   ', 'Doesnt satisfy reqiurments'),
(60, 31.114313, 29.883257, '', '2G', '3330', '707417605', '-95', '-10', '3136', 0, '3330', 'Doesnt satisfy reqiurments'),
(61, 30.106005, 31.397339, '', '4G', '52.42', '661038749', '-60', '-4', '3153', 1, '52.42', 'Satisfy Reqiurments'),
(62, 30.106499, 31.394850, '', '3G', '72.4', '231043350', '-60', '-4', '3153', 1, '72.4', 'Satisfy Reqiurments'),
(63, 31.200029, 29.901026, '', '3G', '78.57   ', '254983307', '-95', '-10', '3181', 0, '78.57   ', 'Doesnt satisfy reqiurments'),
(64, 31.210875, 29.919886, '', '3G', ' 112.36   ', '631765668', '-95', '-10', '3182', 0, ' 112.36   ', 'Doesnt satisfy reqiurments'),
(65, 31.248087, 29.967974, '', '3G', ' 122.61   ', '335385047', '-95', '-10', '3192', 0, ' 122.61   ', 'Doesnt satisfy reqiurments'),
(66, 31.218061, 29.940434, '', '3G', '269.22   ', '218515394', '-95', '-10', '3229', 0, '269.22   ', 'Doesnt satisfy reqiurments'),
(67, 31.158342, 29.928011, '', '2G', '940.80   ', '704001624', '-95', '-10', '3443', 0, '940.80   ', 'Doesnt satisfy reqiurments'),
(68, 30.003361, 31.397333, '', '3G', ' 843.33  ', '526007620', '-95', '-10', '3501', 0, ' 843.33  ', 'Doesnt satisfy reqiurments'),
(69, 30.119974, 31.405758, '', '3G', '661.68', '214495279', '-95', '-10', '3613', 0, '661.68', 'Doesnt satisfy reqiurments'),
(70, 30.048769, 31.217232, '', '3G', '25.56', '251335860', '-60', '-3', '3636', 1, '25.56', 'Satisfy Reqiurments'),
(71, 30.020037, 31.439220, '', '2G', '429.41   ', '207374449', '-95', '-10', '3709', 0, '429.41   ', 'Doesnt satisfy reqiurments'),
(72, 30.012491, 31.426893, '', '3G', '515.43   ', '700648110', '-95', '-10', '3711', 0, '515.43   ', 'Doesnt satisfy reqiurments'),
(73, 30.034876, 31.211752, '', '3G', '61.91', '634941155', '-60', '-4', '3774', 1, '61.91', 'Satisfy Reqiurments'),
(74, 31.210758, 29.937180, '', '3G', ' 656.58   ', '366227209', '-95', '-10', '3812', 0, ' 656.58   ', 'Doesnt satisfy reqiurments'),
(75, 31.222916, 29.932657, '', '3G', '498.00   ', '396876029', '-95', '-10', '3818', 0, '498.00   ', 'Doesnt satisfy reqiurments'),
(76, 31.197411, 29.910633, '', '3G', '277.23', '414764286', '-95', '-10', '3820', 0, '277.23', 'Doesnt satisfy reqiurments'),
(77, 31.219294, 29.927925, '', '3G', '599.79', '203307477', '-95', '-10', '3825', 0, '599.79', 'Doesnt satisfy reqiurments'),
(78, 31.216349, 29.938492, '', '3G', ' 261.30   ', '210057289', '-95', '-10', '3826', 0, ' 261.30   ', 'Doesnt satisfy reqiurments'),
(79, 31.196621, 29.907171, '', '3G', '258.82   ', '768595743', '-95', '-10', '3829', 0, '258.82   ', 'Doesnt satisfy reqiurments'),
(80, 31.169170, 29.934698, '', '3G', '1370', '321481168', '-95', '-10', '3874', 0, '1370', 'Doesnt satisfy reqiurments'),
(81, 31.188631, 29.924128, '', '3G', '885.99   ', '122303677', '-95', '-10', '3903', 0, '885.99   ', 'Doesnt satisfy reqiurments'),
(82, 30.043526, 31.194471, '', '3G', '93.85', '611070871', '-95', '-10', '3952', 0, '93.85', 'Doesnt satisfy reqiurments'),
(83, 31.108614, 29.872070, '', '3G', '3290', '429335197', '-95', '-10', '3961', 0, '3290', 'Doesnt satisfy reqiurments'),
(84, 31.152254, 29.921572, '', '3G', '912.88   ', '721149130', '-95', '-10', '3964', 0, '912.88   ', 'Doesnt satisfy reqiurments'),
(85, 30.104156, 31.401102, '', '3G', '358.9', '719180937', '-95', '-10', '4074', 0, '358.9', 'Doesnt satisfy reqiurments'),
(86, 31.221289, 29.937550, '', '3G', '302.69   ', '287252686', '-95', '-10', '4284', 0, '302.69   ', 'Doesnt satisfy reqiurments'),
(87, 31.213047, 29.930700, '', '3G', ' 309.49   ', '454473979', '-95', '-10', '4305', 0, ' 309.49   ', 'Doesnt satisfy reqiurments'),
(88, 31.211349, 29.928028, '', '3G', ' 315.86   ', '294250341', '-95', '-10', '4306', 0, ' 315.86   ', 'Doesnt satisfy reqiurments'),
(89, 31.223640, 29.947815, '', '3G', '315.23   ', '110388108', '-95', '-10', '4309', 0, '315.23   ', 'Doesnt satisfy reqiurments'),
(90, 30.041058, 31.211121, '', '3G', '304.42', '115836002', '-95', '-10', '4320', 0, '304.42', 'Doesnt satisfy reqiurments'),
(91, 31.231028, 29.954525, '', '3G', ' 271.96   ', '277404040', '-95', '-10', '4549', 0, ' 271.96   ', 'Doesnt satisfy reqiurments'),
(92, 31.200354, 29.900299, '', '3G', '78.57   ', '200226403', '-95', '-10', '4556', 0, '78.57   ', 'Doesnt satisfy reqiurments'),
(93, 31.209545, 29.944441, '', '3G', '57.45', '364265357', '-60', '-4', '4558', 1, '57.45', 'Satisfy Reqiurments'),
(94, 30.129721, 31.403830, '', '3G', '705.84', '122762875', '-95', '-10', '4560', 0, '705.84', 'Doesnt satisfy reqiurments'),
(95, 30.047863, 31.219337, '', '3G', '119.36', '476658958', '-95', '-10', '4581', 0, '119.36', 'Doesnt satisfy reqiurments'),
(96, 30.041706, 31.195238, '', '3G', '27.11', '320320885', '-60', '-3', '4632', 1, '27.11', 'Satisfy Reqiurments'),
(97, 30.019064, 31.425735, '', '3G', '521.06   ', '331430483', '-95', '-10', '4655', 0, '521.06   ', 'Doesnt satisfy reqiurments'),
(98, 30.035334, 31.213276, '', '3G', '71.66', '318717153', '-60', '-4', '4722', 1, '71.66', 'Satisfy Reqiurments'),
(99, 31.237877, 29.953362, '', '3G', ' 156.79   ', '145729669', '-95', '-10', '4861', 0, ' 156.79   ', 'Doesnt satisfy reqiurments'),
(100, 30.054176, 31.199720, '', '3G', '228.85', '623076766', '-95', '-10', '5056', 0, '228.85', 'Doesnt satisfy reqiurments'),
(101, 30.052235, 31.200487, '', '3G', '147.85', '397463760', '-95', '-10', '5081', 0, '147.85', 'Doesnt satisfy reqiurments'),
(102, 31.209890, 29.944038, '', '3G', '50.49', '275729406', '-60', '-3', '5093', 1, '50.49', 'Satisfy Reqiurments'),
(103, 31.222820, 29.942347, '', '3G', ' 196.89   ', '253751658', '-95', '-10', '5095', 0, ' 196.89   ', 'Doesnt satisfy reqiurments'),
(104, 31.211798, 29.947229, '', '3G', ' 317.03   ', '228319578', '-95', '-10', '5097', 0, ' 317.03   ', 'Doesnt satisfy reqiurments'),
(105, 31.214535, 29.946465, '', '3G', ' 275.63   ', '698369602', '-95', '-10', '5104', 0, ' 275.63   ', 'Doesnt satisfy reqiurments'),
(106, 31.210157, 29.980770, '', '3G', '3190', '145674173', '-95', '-10', '5118', 0, '3190', 'Doesnt satisfy reqiurments'),
(107, 31.213617, 29.943340, '', '3G', ' 317.09   ', '263647825', '-95', '-10', '5127', 0, ' 317.09   ', 'Doesnt satisfy reqiurments'),
(108, 30.111277, 31.397339, '', '3G', '114.12', '113189292', '-95', '-10', '5157', 0, '114.12', 'Doesnt satisfy reqiurments'),
(109, 30.112457, 31.396593, '', '3G', '41.75', '627855307', '-60', '-3', '5200', 1, '41.75', 'Satisfy Reqiurments'),
(110, 30.108366, 31.400393, '', '3G', '23.15', '150734779', '-60', '-3', '5206', 1, '23.15', 'Satisfy Reqiurments'),
(111, 30.108231, 31.400215, '', '3G', '22.89', '158771912', '-60', '-3', '5207', 1, '22.89', 'Satisfy Reqiurments'),
(112, 31.235958, 29.956778, '', '3G', ' 190.36   ', '140493835', '-95', '-10', '5336', 0, ' 190.36   ', 'Doesnt satisfy reqiurments'),
(113, 31.201841, 29.900303, '', '3G', '164.38   ', '275647084', '-95', '-10', '5453', 0, '164.38   ', 'Doesnt satisfy reqiurments'),
(114, 31.208963, 29.945728, '', '3G', '138.78   ', '292721714', '-95', '-10', '5519', 0, '138.78   ', 'Doesnt satisfy reqiurments'),
(115, 30.112604, 31.395149, '', '3G', '140.04', '496913977', '-95', '-10', '5590', 0, '140.04', 'Doesnt satisfy reqiurments'),
(116, 30.042206, 31.195093, '', '3G', '5.82', '639952579', '-60', '-3', '5656', 1, '5.82', 'Satisfy Reqiurments'),
(117, 30.048338, 31.218203, '', '3G', '46.83', '356332716', '-60', '-3', '5661', 1, '46.83', 'Satisfy Reqiurments'),
(118, 31.198963, 29.902729, '', '3G', '13.99', '569554008', '-60', '-3', '5683', 1, '13.99', 'Satisfy Reqiurments'),
(119, 31.198839, 29.902735, '', '3G', '94.55', '279300773', '-95', '-10', '5686', 0, '94.55', 'Doesnt satisfy reqiurments'),
(120, 31.196144, 29.919973, '', '3G', '714.75   ', '110634210', '-95', '-10', '5744', 0, '714.75   ', 'Doesnt satisfy reqiurments'),
(121, 31.203035, 29.918751, '', '3G', '96.38   ', '515053938', '-95', '-10', '5790', 0, '96.38   ', 'Doesnt satisfy reqiurments'),
(122, 30.112255, 31.396955, '', '3G', '41.37', '594167483', '-60', '-3', '6355', 1, '41.37', 'Satisfy Reqiurments'),
(123, 31.222773, 29.940214, '', '3G', '206.72   ', '432938371', '-95', '-10', '6356', 0, '206.72   ', 'Doesnt satisfy reqiurments'),
(124, 30.041904, 31.195080, '', '3G', '27.11', '513063601', '-60', '-3', '6404', 1, '27.11', 'Satisfy Reqiurments'),
(125, 30.044357, 31.194628, '', '3G', '93.85', '185765822', '-95', '-10', '6438', 0, '93.85', 'Doesnt satisfy reqiurments'),
(126, 30.028521, 31.199636, '', '4G', '138.99', '576162317', '-95', '-10', '10055', 0, '138.99', 'Doesnt satisfy reqiurments'),
(127, 30.029018, 31.207264, '', '4G', '529.4', '573905717', '-95', '-10', '10056', 0, '529.4', 'Doesnt satisfy reqiurments'),
(128, 30.035322, 31.212147, '', '4G', '61.91', '466310921', '-60', '-4', '10066', 1, '61.91', 'Satisfy Reqiurments'),
(129, 30.034830, 31.219076, '', '4G', '168.64', '483534668', '-95', '-10', '10173', 0, '168.64', 'Doesnt satisfy reqiurments'),
(130, 30.048552, 31.217155, '', '4G', '25.56', '141072358', '-60', '-3', '10180', 1, '25.56', 'Satisfy Reqiurments'),
(131, 30.114182, 31.380690, '', '4G', '257.92', '629690313', '-95', '-10', '10278', 0, '257.92', 'Doesnt satisfy reqiurments'),
(132, 30.016365, 31.430090, '', '4G', '513.33   ', '267741046', '-95', '-10', '10313', 0, '513.33   ', 'Doesnt satisfy reqiurments'),
(133, 30.016407, 31.440746, '', '4G', '1020', '355904997', '-95', '-10', '10315', 0, '1020', 'Doesnt satisfy reqiurments'),
(134, 30.016371, 31.403713, '', '4G', '347.99   ', '481465106', '-95', '-10', '10326', 0, '347.99   ', 'Doesnt satisfy reqiurments'),
(135, 30.005787, 31.446297, '', '4G', '478.51', '405361383', '-95', '-10', '10330', 0, '478.51', 'Doesnt satisfy reqiurments'),
(136, 30.112110, 31.372929, '', '4G', '781.21', '191270558', '-95', '-10', '10470', 0, '781.21', 'Doesnt satisfy reqiurments'),
(137, 30.028082, 31.200983, '', '4G', '138.99', '747607488', '-95', '-10', '10759', 0, '138.99', 'Doesnt satisfy reqiurments'),
(138, 30.108969, 31.404968, '', '4G', '289.4', '445991868', '-95', '-10', '10922', 0, '289.4', 'Doesnt satisfy reqiurments'),
(139, 30.016361, 31.418243, '', '4G', '75.28   ', '186576195', '-95', '-10', '11609', 0, '75.28   ', 'Doesnt satisfy reqiurments'),
(140, 31.211420, 29.913479, '', '4G', ' 353.14   ', '504096754', '-95', '-10', '33034', 0, ' 353.14   ', 'Doesnt satisfy reqiurments'),
(141, 31.199661, 29.904446, '', '4G', '184.35   ', '219485381', '-95', '-10', '33043', 0, '184.35   ', 'Doesnt satisfy reqiurments'),
(142, 31.198629, 29.901760, '', '4G', ' 93.31   ', '411445915', '-95', '-10', '33049', 0, ' 93.31   ', 'Doesnt satisfy reqiurments'),
(143, 31.203381, 29.919670, '', '4G', '95.90   ', '728622262', '-95', '-10', '33056', 0, '95.90   ', 'Doesnt satisfy reqiurments'),
(144, 31.236528, 29.953739, '', '4G', ' 154.89   ', '150621853', '-95', '-10', '33057', 0, ' 154.89   ', 'Doesnt satisfy reqiurments'),
(145, 31.252205, 29.971409, '', '4G', ' 451.65   ', '500765280', '-95', '-10', '33061', 0, ' 451.65   ', 'Doesnt satisfy reqiurments'),
(146, 31.256918, 29.978149, '', '4G', ' 828.92   ', '458257477', '-95', '-10', '33065', 0, ' 828.92   ', 'Doesnt satisfy reqiurments'),
(147, 31.218679, 29.947948, '', '4G', '92.54', '700722548', '-95', '-10', '33081', 0, '92.54', 'Doesnt satisfy reqiurments'),
(148, 31.224358, 29.944336, '', '4G', ' 251.11   ', '691651195', '-95', '-10', '33190', 0, ' 251.11   ', 'Doesnt satisfy reqiurments'),
(149, 31.234419, 29.956076, '', '4G', ' 134.28   ', '575018616', '-95', '-10', '33282', 0, ' 134.28   ', 'Doesnt satisfy reqiurments'),
(150, 31.243103, 29.961611, '', '4G', ' 482.09   ', '353336549', '-95', '-10', '33310', 0, ' 482.09   ', 'Doesnt satisfy reqiurments'),
(151, 31.212000, 29.919727, '', '4G', ' 144.73   ', '661031524', '-95', '-10', '33412', 0, ' 144.73   ', 'Doesnt satisfy reqiurments'),
(152, 30.048206, 31.217739, '', '4G', '46.82', '258297574', '-60', '-3', '200134', 1, '46.82', 'Satisfy Reqiurments'),
(153, 30.058281, 31.215189, '', '4G', '77.91', '447791852', '-60', '-4', '210006', 1, '77.91', 'Satisfy Reqiurments'),
(182, 30.027225, 31.174467, 'SaftElbn', '5G', '45687913', '6062029', '-85', '-10', 'ID7584', 0, '1.9821513092315', 'Doesnt satisfy reqiurments'),
(183, 31.192539, 29.952850, 'AlexAIrport', '4G', '7889546', '540303900', '-60', '-4', 'ID65325', 0, '1.9520321167519', 'Doesnt satisfy reqiurments'),
(184, 30.037203, 31.215689, '6October2', '5G', '445588578', '540303900', '-90', '-4', 'ID5874', 0, '0.074577160360185', 'Doesnt satisfy reqiurments'),
(185, 30.013487, 31.408735, 'NewCairo', '5G', '4562542', '13500000', '-60', '-4', 'ID35241', 0, '10.307083095513', 'Doesnt satisfy reqiurments'),
(186, 30.136440, 31.742617, 'BadrCity', '4G', '105.2', '6505982', '-85', '-10', 'ID55246', 0, '19.350524917629', 'Doesnt satisfy reqiurments'),
(187, 30.419685, 31.576290, 'Belbes', '4G', '75.2', '278746756', '-60', '-3', 'ID998564', 1, '35.007427171764', 'Satisfy Reqiurments');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `usertype` varchar(22) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `password`, `username`, `lastname`, `phone`, `email`, `dateofbirth`, `gender`, `usertype`) VALUES
(25, 'Joy15555', 'joy', 'Abdelmasseh', '01277110442', 'Joy98@gmail.com', '1998-10-01', 'Female', 'engineer'),
(30, '1567', 'Nour', 'Elhuda', '01189700040', 'Nour43@gmail.com', '1997-02-16', 'female', 'engineer'),
(33, '123', 'reta', 'romny', '01254254253', 'reta@romany', '2020-05-13', 'female', 'engineer'),
(1, '1234', 'Mark', 'Samir', '01298756004', 'Mark90@gmail.com', '1998-12-19', 'Male', 'admin'),
(31, '330', 'Ali', 'Ahmed', '01198067895', 'Ali75@gmail.com', '1996-11-14', 'male', 'engineer'),
(32, '339', 'Hussam', 'Mohamed', '01098900050', 'Hussam89@gmail.com', '1996-04-12', 'male', 'engineer'),
(38, 'James123', 'James', 'Abdelmasseh', '01212576988', 'James@hotmail.com', '2000-01-05', 'male', 'engineer'),
(36, 'Mark2323', 'Marknabil', 'Mark Nabil Mehanni', '01234567654', 'mark@yahoo.com', '2000-12-08', 'male', 'admin'),
(41, 'mohamed123456', 'Mohamed', 'ElGebaly', '01236524755', 'mohamed2012@hotmail.com', '1998-12-05', 'male', 'engineer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
