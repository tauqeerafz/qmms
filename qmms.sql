-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2015 at 03:02 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qmms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE IF NOT EXISTS `adds` (
  `adds_id` int(11) NOT NULL AUTO_INCREMENT,
  `add_name` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(15) NOT NULL,
  PRIMARY KEY (`adds_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `adds`
--

INSERT INTO `adds` (`adds_id`, `add_name`, `link`, `status`, `email`, `contact`) VALUES
(3, 'add_20141230135130_image6.jpg', 'google.com', 'Active', 'adds@gmail.com', '1234567890'),
(4, 'add_20141230135138_image6.jpg', 'google.com', 'Active', 'goog@yahoo.com', '0987654'),
(5, 'add_20141230135146_image6.jpg', 'google.com', 'Active', 'asd@you.com', '121241415'),
(6, 'add_20141230135157_image6.jpg', 'google.com', 'Active', 'kdkkdkdkd@ko.com', '211412515'),
(7, 'add_20141230135210_image6.jpg', 'google.com', 'Active', 'kick@sal.com', '1212124141'),
(8, 'add_20141230135218_image6.jpg', 'google.com', 'Active', 'got@hbo.com', '1214141515'),
(9, 'add_20141230135226_image6.jpg', 'google.com', 'Active', 'kkk@bik.com', '121414'),
(14, 'add_20150111092909_imag.jpg', 'www.google.com', 'Active', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_login_name` varchar(200) DEFAULT NULL,
  `admin_password` varchar(20) DEFAULT NULL,
  `admin_email` varchar(100) DEFAULT NULL,
  `admin_level` varchar(3) DEFAULT NULL,
  `facebook_link` varchar(300) DEFAULT NULL,
  `twitter_link` varchar(300) DEFAULT NULL,
  `linkdin_link` varchar(300) DEFAULT NULL,
  `google_link` varchar(300) NOT NULL,
  `telephone` text NOT NULL,
  `address` text NOT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `admin_login_name`, `admin_password`, `admin_email`, `admin_level`, `facebook_link`, `twitter_link`, `linkdin_link`, `google_link`, `telephone`, `address`, `site_logo`, `site_status`) VALUES
(1, 'admin', 'goldleaf1', 'nycstudio@gmail.com', '1', 'http://www.facebook.com/', 'http:///www.twitter.com/', 'http://ww.linkdin.com/', 'http://www.google.com', '+92-342-000-1234', '<p>\r\n	Your address here Loram Ipsum Dummy</p>\r\n<p>\r\n	Text , State ABC Ny 123456.</p>\r\n', 'images/1366370524logo.png', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `age`
--

CREATE TABLE IF NOT EXISTS `age` (
  `age_id` int(11) NOT NULL AUTO_INCREMENT,
  `age` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`age_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `age`
--

INSERT INTO `age` (`age_id`, `age`, `status`) VALUES
(1, '45', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area`, `status`) VALUES
(1, 'DHA1', 'Active'),
(2, 'Gulberg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `area_range`
--

CREATE TABLE IF NOT EXISTS `area_range` (
  `area_id` int(11) NOT NULL AUTO_INCREMENT,
  `area_range` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `area_range`
--

INSERT INTO `area_range` (`area_id`, `area_range`, `status`) VALUES
(1, '2 Marla or below ', 'Active'),
(2, '3 Marla ', 'Active'),
(3, '3.5 Marla ', 'Active'),
(4, '4 Marla ', 'Active'),
(5, '5 Marla ', 'Active'),
(6, '6 Marla ', 'Active'),
(7, '7 Marla ', 'Active'),
(8, '8 Marla ', 'Active'),
(9, '9 Marla ', 'Active'),
(10, '10 Marla ', 'Active'),
(11, '12 Marla ', 'Active'),
(12, '15 Marla ', 'Active'),
(13, 'I kanal', 'Active'),
(14, '1.5 Kanal', 'Active'),
(15, '2 Kanal ', 'Active'),
(16, '2.5 Kanal', 'Active'),
(17, '3 Kanal', 'Active'),
(18, '3.5 Kanal', 'Active'),
(19, '4 Kanal', 'Active'),
(20, '5 Kanal', 'Active'),
(21, '6 Kanal', 'Active'),
(22, '7 Kanal ', 'Active'),
(23, '8 Kanak / 1 Acer or above ', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `banner_id` int(10) NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(225) NOT NULL,
  `banner_image` varchar(100) NOT NULL,
  `banner_status` varchar(100) NOT NULL,
  `banner_description` text NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`banner_id`, `banner_title`, `banner_image`, `banner_status`, `banner_description`) VALUES
(1, '', 'images/banner_images/1349264154slider_img.png', 'Active', '<h1>\r\n	&quot;It&#39;s not that I&#39;m so smart; it&#39;s just that I stay with problems longer.&quot;</h1>\r\n<h1>\r\n	Albert Einstein.</h1>\r\n'),
(2, '', 'images/banner_images/1349264200slider_img1.png', 'Active', '<h1>\r\n	Perseverance is Priceless&hellip;</h1>\r\n'),
(3, '', 'images/banner_images/1349264220slider_img.png', 'Active', '<h1>\r\n	&quot;It&#39;s not that I&#39;m so smart; it&#39;s just that I stay with problems longer.&quot;</h1>\r\n<h1>\r\n	Albert Einstein.</h1>\r\n'),
(4, '', 'images/banner_images/1349264239slider_img1.png', 'Active', '<h1>\r\n	Perseverance is Priceless&hellip;</h1>\r\n<p>\r\n	&quot;It&#39;s not that I&#39;m so smart; it&#39;s just that I stay with problems longer.&quot;<br />\r\n	Albert Einstein.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`city_id`),
  KEY `country_id` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city`, `status`, `country_id`) VALUES
(1, 'Lahore', 'Active', 165),
(2, 'Karachi', 'Active', 165),
(3, 'Islamabad', 'ACtive', 165),
(4, 'Multan', 'Active', 165),
(5, 'Faisalabad', 'Active', 165),
(6, 'Gujrat', 'Active', 165),
(7, 'Gujaranwala', 'Active', 165),
(8, 'Sheikopura', 'Active', 165),
(9, 'Rawalpindi', 'Active', 165),
(10, 'DIG Khan', 'Active', 165),
(11, 'Abotabad', 'Active', 165),
(12, 'Taxila', 'Active', 165),
(13, 'Jehlam', 'ACtive', 165),
(14, 'Peshawar', 'Active', 165),
(15, 'Quetta', 'Active', 165),
(16, 'Gawadar', 'Active', 165),
(17, 'Sibi', 'Active', 165),
(18, 'Khuzdar', 'Active', 165),
(19, 'Mastung', 'Active', 165),
(20, 'Patoki', 'Active', 165),
(21, 'Zhob', 'Active', 165),
(22, 'Loralai', 'Active', 165),
(23, 'LA', 'Active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city_area`
--

CREATE TABLE IF NOT EXISTS `city_area` (
  `cityarea_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_area` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`cityarea_id`),
  KEY `city_id` (`city_id`),
  KEY `city_id_2` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `city_area`
--

INSERT INTO `city_area` (`cityarea_id`, `city_area`, `status`, `city_id`) VALUES
(1, 'DHA Phase 1', 'Active', 1),
(2, 'DHA Phase 2', 'Active', 1),
(3, 'DHA Phase 3', 'Active', 1),
(4, 'DHA Phase 4', 'Active', 1),
(5, 'DHA Phase 5', 'Active', 1),
(6, 'DHA Phase 6', 'Active', 1),
(7, 'DHA Phase 7', 'Active', 1),
(8, 'DHA Phase 8', 'Active', 1),
(9, 'Green Acre', 'Active', 1),
(10, 'DHA EME', 'Active', 1),
(11, 'Town Ship', 'Active', 1),
(12, 'Johar Town', 'Active', 1),
(13, 'Model Town', 'Active', 1),
(14, 'Faisal Town', 'Active', 1),
(15, 'Green Town', 'Active', 1),
(16, 'Garden Town', 'Active', 1),
(17, 'Weed City', 'Active', 23);

-- --------------------------------------------------------

--
-- Table structure for table `complexion`
--

CREATE TABLE IF NOT EXISTS `complexion` (
  `complex_id` int(11) NOT NULL AUTO_INCREMENT,
  `complexion` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`complex_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `complexion`
--

INSERT INTO `complexion` (`complex_id`, `complexion`, `status`) VALUES
(1, 'Very Fair ', 'Active'),
(2, 'Fair ', 'Active'),
(3, 'wheatish', 'Active'),
(4, 'Dark ', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=242 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country`, `status`) VALUES
(1, 'United States', 'Active'),
(2, 'Canada', 'Active'),
(3, 'Afghanistan', 'Active'),
(4, 'Albania', 'Active'),
(5, 'Algeria', 'Active'),
(6, 'American Samoa', 'Active'),
(7, 'Andorra', 'Active'),
(8, 'Angola', 'Active'),
(9, 'Anguilla', 'Active'),
(10, 'Antarctica', 'Active'),
(11, 'Antigua and/or Barbuda', 'Active'),
(12, 'Argentina', 'Active'),
(13, 'Armenia', 'Active'),
(14, 'Aruba', 'Active'),
(15, 'Australia', 'Active'),
(16, 'Austria', 'Active'),
(17, 'Azerbaijan', 'Active'),
(18, 'Bahamas', 'Active'),
(19, 'Bahrain', 'Active'),
(20, 'Bangladesh', 'Active'),
(21, 'Barbados', 'Active'),
(22, 'Belarus', 'Active'),
(23, 'Belgium', 'Active'),
(24, 'Belize', 'Active'),
(25, 'Benin', 'Active'),
(26, 'Bermuda', 'Active'),
(27, 'Bhutan', 'Active'),
(28, 'Bolivia', 'Active'),
(29, 'Bosnia and Herzegovina', 'Active'),
(30, 'Botswana', 'Active'),
(31, 'Bouvet Island', 'Active'),
(32, 'Brazil', 'Active'),
(33, 'British lndian Ocean Territory', 'Active'),
(34, 'Brunei Darussalam', 'Active'),
(35, 'Bulgaria', 'Active'),
(36, 'Burkina Faso', 'Active'),
(37, 'Burundi', 'Active'),
(38, 'Cambodia', 'Active'),
(39, 'Cameroon', 'Active'),
(40, 'Cape Verde', 'Active'),
(41, 'Cayman Islands', 'Active'),
(42, 'Central African Republic', 'Active'),
(43, 'Chad', 'Active'),
(44, 'Chile', 'Active'),
(45, 'China', 'Active'),
(46, 'Christmas Island', 'Active'),
(47, 'Cocos (Keeling) Islands', 'Active'),
(48, 'Colombia', 'Active'),
(49, 'Comoros', 'Active'),
(50, 'Congo', 'Active'),
(51, 'Cook Islands', 'Active'),
(52, 'Costa Rica', 'Active'),
(53, 'Croatia (Hrvatska)', 'Active'),
(54, 'Cuba', 'Active'),
(55, 'Cyprus', 'Active'),
(56, 'Czech Republic', 'Active'),
(57, 'Denmark', 'Active'),
(58, 'Djibouti', 'Active'),
(59, 'Dominica', 'Active'),
(60, 'Dominican Republic', 'Active'),
(61, 'East Timor', 'Active'),
(62, 'Ecuador', 'Active'),
(63, 'Egypt', 'Active'),
(64, 'El Salvador', 'Active'),
(65, 'Equatorial Guinea', 'Active'),
(66, 'Eritrea', 'Active'),
(67, 'Estonia', 'Active'),
(68, 'Ethiopia', 'Active'),
(69, 'Falkland Islands (Malvinas)', 'Active'),
(70, 'Faroe Islands', 'Active'),
(71, 'Fiji', 'Active'),
(72, 'Finland', 'Active'),
(73, 'France', 'Active'),
(74, 'France, Metropolitan', 'Active'),
(75, 'French Guiana', 'Active'),
(76, 'French Polynesia', 'Active'),
(77, 'French Southern Territories', 'Active'),
(78, 'Gabon', 'Active'),
(79, 'Gambia', 'Active'),
(80, 'Georgia', 'Active'),
(81, 'Germany', 'Active'),
(82, 'Ghana', 'Active'),
(83, 'Gibraltar', 'Active'),
(84, 'Greece', 'Active'),
(85, 'Greenland', 'Active'),
(86, 'Grenada', 'Active'),
(87, 'Guadeloupe', 'Active'),
(88, 'Guam', 'Active'),
(89, 'Guatemala', 'Active'),
(90, 'Guinea', 'Active'),
(91, 'Guinea-Bissau', 'Active'),
(92, 'Guyana', 'Active'),
(93, 'Haiti', 'Active'),
(94, 'Heard and Mc Donald Islands', 'Active'),
(95, 'Honduras', 'Active'),
(96, 'Hong Kong', 'Active'),
(97, 'Hungary', 'Active'),
(98, 'Iceland', 'Active'),
(99, 'India', 'Active'),
(100, 'Indonesia', 'Active'),
(101, 'Iran (Islamic Republic of)', 'Active'),
(102, 'Iraq', 'Active'),
(103, 'Ireland', 'Active'),
(104, 'Israel', 'Active'),
(105, 'Italy', 'Active'),
(106, 'Ivory Coast', 'Active'),
(107, 'Jamaica', 'Active'),
(108, 'Japan', 'Active'),
(109, 'Jordan', 'Active'),
(110, 'Kazakhstan', 'Active'),
(111, 'Kenya', 'Active'),
(112, 'Kiribati', 'Active'),
(113, 'Korea, Democratic People''s Republic of', 'Active'),
(114, 'Korea, Republic of', 'Active'),
(115, 'Kosovo', 'Active'),
(116, 'Kuwait', 'Active'),
(117, 'Kyrgyzstan', 'Active'),
(118, 'Lao People''s Democratic Republic', 'Active'),
(119, 'Latvia', 'Active'),
(120, 'Lebanon', 'Active'),
(121, 'Lesotho', 'Active'),
(122, 'Liberia', 'Active'),
(123, 'Libyan Arab Jamahiriya', 'Active'),
(124, 'Liechtenstein', 'Active'),
(125, 'Lithuania', 'Active'),
(126, 'Luxembourg', 'Active'),
(127, 'Macau', 'Active'),
(128, 'Macedonia', 'Active'),
(129, 'Madagascar', 'Active'),
(130, 'Malawi', 'Active'),
(131, 'Malaysia', 'Active'),
(132, 'Maldives', 'Active'),
(133, 'Mali', 'Active'),
(134, 'Malta', 'Active'),
(135, 'Marshall Islands', 'Active'),
(136, 'Martinique', 'Active'),
(137, 'Mauritania', 'Active'),
(138, 'Mauritius', 'Active'),
(139, 'Mayotte', 'Active'),
(140, 'Mexico', 'Active'),
(141, 'Micronesia, Federated States of', 'Active'),
(142, 'Moldova, Republic of', 'Active'),
(143, 'Monaco', 'Active'),
(144, 'Mongolia', 'Active'),
(145, 'Montenegro', 'Active'),
(146, 'Montserrat', 'Active'),
(147, 'Morocco', 'Active'),
(148, 'Mozambique', 'Active'),
(149, 'Myanmar', 'Active'),
(150, 'Namibia', 'Active'),
(151, 'Nauru', 'Active'),
(152, 'Nepal', 'Active'),
(153, 'Netherlands', 'Active'),
(154, 'Netherlands Antilles', 'Active'),
(155, 'New Caledonia', 'Active'),
(156, 'New Zealand', 'Active'),
(157, 'Nicaragua', 'Active'),
(158, 'Niger', 'Active'),
(159, 'Nigeria', 'Active'),
(160, 'Niue', 'Active'),
(161, 'Norfork Island', 'Active'),
(162, 'Northern Mariana Islands', 'Active'),
(163, 'Norway', 'Active'),
(164, 'Oman', 'Active'),
(165, 'Pakistan', 'Active'),
(166, 'Palau', 'Active'),
(167, 'Panama', 'Active'),
(168, 'Papua New Guinea', 'Active'),
(169, 'Paraguay', 'Active'),
(170, 'Peru', 'Active'),
(171, 'Philippines', 'Active'),
(172, 'Pitcairn', 'Active'),
(173, 'Poland', 'Active'),
(174, 'Portugal', 'Active'),
(175, 'Puerto Rico', 'Active'),
(176, 'Qatar', 'Active'),
(177, 'Reunion', 'Active'),
(178, 'Romania', 'Active'),
(179, 'Russian Federation', 'Active'),
(180, 'Rwanda', 'Active'),
(181, 'Saint Kitts and Nevis', 'Active'),
(182, 'Saint Lucia', 'Active'),
(183, 'Saint Vincent and the Grenadines', 'Active'),
(184, 'Samoa', 'Active'),
(185, 'San Marino', 'Active'),
(186, 'Sao Tome and Principe', 'Active'),
(187, 'Saudi Arabia', 'Active'),
(188, 'Senegal', 'Active'),
(189, 'Serbia', 'Active'),
(190, 'Seychelles', 'Active'),
(191, 'Sierra Leone', 'Active'),
(192, 'Singapore', 'Active'),
(193, 'Slovakia', 'Active'),
(194, 'Slovenia', 'Active'),
(195, 'Solomon Islands', 'Active'),
(196, 'Somalia', 'Active'),
(197, 'South Africa', 'Active'),
(198, 'South Georgia South Sandwich Islands', 'Active'),
(199, 'Spain', 'Active'),
(200, 'Sri Lanka', 'Active'),
(201, 'St. Helena', 'Active'),
(202, 'St. Pierre and Miquelon', 'Active'),
(203, 'Sudan', 'Active'),
(204, 'Suriname', 'Active'),
(205, 'Svalbarn and Jan Mayen Islands', 'Active'),
(206, 'Swaziland', 'Active'),
(207, 'Sweden', 'Active'),
(208, 'Switzerland', 'Active'),
(209, 'Syrian Arab Republic', 'Active'),
(210, 'Taiwan', 'Active'),
(211, 'Tajikistan', 'Active'),
(212, 'Tanzania, United Republic of', 'Active'),
(213, 'Thailand', 'Active'),
(214, 'Togo', 'Active'),
(215, 'Tokelau', 'Active'),
(216, 'Tonga', 'Active'),
(217, 'Trinidad and Tobago', 'Active'),
(218, 'Tunisia', 'Active'),
(219, 'Turkey', 'Active'),
(220, 'Turkmenistan', 'Active'),
(221, 'Turks and Caicos Islands', 'Active'),
(222, 'Tuvalu', 'Active'),
(223, 'Uganda', 'Active'),
(224, 'Ukraine', 'Active'),
(225, 'United Arab Emirates', 'Active'),
(226, 'United Kingdom', 'Active'),
(227, 'United States minor outlying islands', 'Active'),
(228, 'Uruguay', 'Active'),
(229, 'Uzbekistan', 'Active'),
(230, 'Vanuatu', 'Active'),
(231, 'Vatican City State', 'Active'),
(232, 'Venezuela', 'Active'),
(233, 'Vietnam', 'Active'),
(234, 'Virgin Islands (British)', 'Active'),
(235, 'Virgin Islands (U.S.)', 'Active'),
(236, 'Wallis and Futuna Islands', 'Active'),
(237, 'Western Sahara', 'Active'),
(238, 'Yemen', 'Active'),
(239, 'Yugoslavia', 'Active'),
(240, 'Zaire', 'Active'),
(241, 'Zambia', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `enegies`
--

CREATE TABLE IF NOT EXISTS `enegies` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_status` varchar(250) NOT NULL,
  `service_cat` varchar(250) NOT NULL,
  `service_type` varchar(250) NOT NULL,
  `location_of` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `budget` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `ptcl` varchar(250) NOT NULL,
  `mob` varchar(250) NOT NULL,
  `present_address` varchar(250) NOT NULL,
  `applicant_name` varchar(250) NOT NULL,
  `email_add` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `dateandtime` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `enegies`
--

INSERT INTO `enegies` (`user_id`, `app_status`, `service_cat`, `service_type`, `location_of`, `city`, `area`, `country`, `budget`, `price`, `ptcl`, `mob`, `present_address`, `applicant_name`, `email_add`, `comments`, `dateandtime`) VALUES
(1, 'Individual', 'LED', 'sale', 'Defence', '', '1', '165', '51000-60000', '61000-70000', '35730343', '03334094022', '12-Y block', 'Umair', 'um2@live.com', '', '2015-01-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE IF NOT EXISTS `exchange` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_status` varchar(250) NOT NULL,
  `service_cat` varchar(250) NOT NULL,
  `currency_hand` varchar(250) NOT NULL,
  `currency_req` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `ptcl` varchar(250) NOT NULL,
  `mob` varchar(250) NOT NULL,
  `present_address` varchar(250) NOT NULL,
  `applicnt_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `dateandtime` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `exchange`
--

INSERT INTO `exchange` (`user_id`, `app_status`, `service_cat`, `currency_hand`, `currency_req`, `city`, `area`, `country`, `ptcl`, `mob`, `present_address`, `applicnt_name`, `email`, `comments`, `dateandtime`) VALUES
(1, 'Individual', 'Please select...', 'J yen', 'Euro', '', 'City', 'Please select...', '', '', '', '', '', '', '2015-01-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `height`
--

CREATE TABLE IF NOT EXISTS `height` (
  `height_id` int(11) NOT NULL AUTO_INCREMENT,
  `height` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`height_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `height`
--

INSERT INTO `height` (`height_id`, `height`, `status`) VALUES
(1, '5 FT and Less ', 'Active'),
(2, '5.1 FT', 'Active'),
(3, '5.2 FT', 'Active'),
(4, '5.3 FT', 'Active'),
(5, '5.4 FT ', 'Active'),
(6, '5.5 FT', 'Active'),
(7, '5.6 FT', 'Active'),
(8, '5.7 FT', 'Active'),
(9, '5.8 FT', 'Active'),
(10, '5.9 FT', 'Active'),
(11, '6 FT', 'Active'),
(12, '6.1 FT', 'Active'),
(13, '6.2 FT and Above ', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

CREATE TABLE IF NOT EXISTS `hits` (
  `page` char(100) NOT NULL DEFAULT '',
  `count` int(15) DEFAULT NULL,
  PRIMARY KEY (`page`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(30) DEFAULT NULL,
  `user_agent` varchar(50) DEFAULT NULL,
  `datetime` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jobform`
--

CREATE TABLE IF NOT EXISTS `jobform` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_status` varchar(250) NOT NULL,
  `cat` varchar(250) NOT NULL,
  `job_type` varchar(250) NOT NULL,
  `education` varchar(250) NOT NULL,
  `profession` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `experience` varchar(250) NOT NULL,
  `job_level` varchar(250) NOT NULL,
  `salary_range` varchar(250) NOT NULL,
  `interested_in_overseas` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `applicant_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mob` varchar(250) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `file` varchar(250) NOT NULL,
  `dateandtime` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jobform`
--

INSERT INTO `jobform` (`user_id`, `app_status`, `cat`, `job_type`, `education`, `profession`, `department`, `gender`, `experience`, `job_level`, `salary_range`, `interested_in_overseas`, `country`, `city`, `area`, `applicant_name`, `email`, `mob`, `comments`, `file`, `dateandtime`) VALUES
(1, 'male', 'jobseeker', 'Permanent', 'MBA', 'MBA', 'Sale/operation', 'Male', '1', 'Junior', '1000-5000', 'Yes', '165', '', '1', 'Waheeeeddsds', 'wwq@live.com', '034432323232', '', '', '2015-01-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `location_of_service`
--

CREATE TABLE IF NOT EXISTS `location_of_service` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_service` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `location_of_service`
--

INSERT INTO `location_of_service` (`location_id`, `location_service`, `status`) VALUES
(2, 'Gulberg2', 'Active'),
(3, 'Defence', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `marketingform`
--

CREATE TABLE IF NOT EXISTS `marketingform` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_status` varchar(250) NOT NULL,
  `service_cat` varchar(250) NOT NULL,
  `service_type` varchar(250) NOT NULL,
  `location_of` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `period_of` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `ptcl` varchar(250) NOT NULL,
  `mob` varchar(250) NOT NULL,
  `present_address` varchar(250) NOT NULL,
  `applicant_name` varchar(250) NOT NULL,
  `email_add` varchar(250) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `file` varchar(250) NOT NULL,
  `dateandtime` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marriages`
--

CREATE TABLE IF NOT EXISTS `marriages` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `profile_for` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `marital_status` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  `religion` varchar(250) NOT NULL,
  `ethnic_group` varchar(250) NOT NULL,
  `mother_tounge` varchar(250) NOT NULL,
  `complexion` varchar(250) NOT NULL,
  `height` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `education` varchar(250) NOT NULL,
  `profession` varchar(250) NOT NULL,
  `nature_work` varchar(250) NOT NULL,
  `salary` varchar(250) NOT NULL,
  `prefer_overseas` varchar(250) NOT NULL,
  `partner_abroad` varchar(500) NOT NULL,
  `present_addres` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `describe_yourself` varchar(250) NOT NULL,
  `pics` varchar(250) NOT NULL,
  `dateandtime` datetime NOT NULL,
  `paymentMethod` varchar(250) NOT NULL,
  `houseowned` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `marriages`
--

INSERT INTO `marriages` (`user_id`, `profile_for`, `gender`, `name`, `marital_status`, `contact_no`, `religion`, `ethnic_group`, `mother_tounge`, `complexion`, `height`, `age`, `education`, `profession`, `nature_work`, `salary`, `prefer_overseas`, `partner_abroad`, `present_addres`, `country`, `city`, `area`, `describe_yourself`, `pics`, `dateandtime`, `paymentMethod`, `houseowned`) VALUES
(2, 'Self', 'Male', 'Saad', 'Single', '+9235730343', 'AhliHadees', 'Punjabi', 'Urdu', 'Fair', '6.1 FT', '45', 'Graduate', 'Engineer', '', '', 'Yes', 'No', '', '', '', '1', '                                      \r\n			', 'imag.jpg', '2015-01-11 00:00:00', 'Executive pakage', '10 Marla');

-- --------------------------------------------------------

--
-- Table structure for table `period_service`
--

CREATE TABLE IF NOT EXISTS `period_service` (
  `period_id` int(11) NOT NULL AUTO_INCREMENT,
  `period` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`period_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `period_service`
--

INSERT INTO `period_service` (`period_id`, `period`, `status`) VALUES
(2, '1 Day', 'Active'),
(3, '3 Days ', 'Active'),
(4, '5 Days ', 'Active'),
(5, '1 Week', 'Active'),
(6, '15 Days ', 'Active'),
(7, '30 days/ 1 Month', 'Active'),
(8, '3 Months ', 'Active'),
(9, '6 Months ', 'Active'),
(10, '1 Year', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `price_range`
--

CREATE TABLE IF NOT EXISTS `price_range` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `price_range` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `price_range`
--

INSERT INTO `price_range` (`price_id`, `price_range`, `status`) VALUES
(1, '1000-5000', 'Active'),
(2, '5000-10000', 'Active'),
(3, '11000-15000', 'Active'),
(4, '15000-20000', 'Active'),
(5, '21000-25000', 'Active'),
(6, '25000-30000', 'Active'),
(7, '31000-40000', 'Active'),
(8, '41000-50000', 'Active'),
(9, '51000-60000', 'Active'),
(10, '61000-70000', 'Active'),
(11, '71000-80000', 'Active'),
(12, '81000-90000', 'Active'),
(13, '91000-100000', 'Active'),
(14, '100001-125000', 'Active'),
(15, '126000-150000', 'Active'),
(16, '151000-175000', 'Active'),
(17, '175000-200000', 'Active'),
(18, '200000-250000', 'Active'),
(19, '250000-300000', 'Active'),
(20, '300000-350000', 'Active'),
(21, '351000-400000', 'Active'),
(22, '401000-450000', 'Active'),
(23, '451000-500000', 'Active'),
(24, '500000-600000', 'Active'),
(25, '601000-700000', 'Active'),
(26, '701000-800000', 'Active'),
(27, '801000-900000', 'Active'),
(28, '901000-1000000', 'Active'),
(29, '1000001-1500000', 'Active'),
(30, '1600000-2000000', 'Active'),
(31, '20000001-2500000', 'Active'),
(32, '2600000-3000000', 'Active'),
(33, '3100000-4000000', 'Active'),
(34, '4100000-5000000', 'Active'),
(35, '5100000-7500000', 'Active'),
(36, '7500000-10000000', 'Active'),
(37, '100000000-12500000', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE IF NOT EXISTS `properties` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_status` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `property_type` varchar(250) NOT NULL,
  `price_range` varchar(250) NOT NULL,
  `area_range` varchar(250) NOT NULL,
  `house_no` varchar(250) NOT NULL,
  `no_bed` varchar(250) NOT NULL,
  `furnished` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `city_area` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `app_present_address` varchar(250) NOT NULL,
  `ptcl` varchar(250) NOT NULL,
  `office_address` varchar(250) NOT NULL,
  `app_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `file` varchar(250) NOT NULL,
  `dateandtime` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`user_id`, `app_status`, `category`, `property_type`, `price_range`, `area_range`, `house_no`, `no_bed`, `furnished`, `area`, `city_area`, `country`, `app_present_address`, `ptcl`, `office_address`, `app_name`, `email`, `mobile`, `comments`, `file`, `dateandtime`) VALUES
(6, 'company', 'Sale', 'Apartments', '22300443', '1.5 Kanal', '122-z', '4', 'Yes', '1', '4', '165', '786-g', '34556034', '', 'Twuw', 'wee@live.com', '03345503993', '', '', '2015-01-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `quick_man`
--

CREATE TABLE IF NOT EXISTS `quick_man` (
  `table_id` int(11) NOT NULL AUTO_INCREMENT,
  `dateandtime` datetime NOT NULL,
  `memeberName` varchar(100) NOT NULL,
  `memeber_id` int(11) NOT NULL,
  `memeber_email` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL,
  `source` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`table_id`),
  UNIQUE KEY `memeber_id` (`memeber_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `quick_man`
--

INSERT INTO `quick_man` (`table_id`, `dateandtime`, `memeberName`, `memeber_id`, `memeber_email`, `password`, `source`, `status`) VALUES
(8, '2015-01-11 00:00:00', 'bajwa', 2147483647, 'abajwa@hotmail.com', '03214493302', 'Visitor/Club', ''),
(19, '2015-01-11 00:00:00', 'zaid', 30403434, 'zaid@live.com', '30403434', 'Visitor/Club', ''),
(20, '2015-01-11 00:00:00', 'wahaj', 423162, 'wahaj', '423162', 'Visitor/Club', ''),
(21, '2015-01-13 00:00:00', 'tariq', 333922939, 'waheed-a@live.com', '333922939', 'Visitor/Club', ''),
(23, '2015-01-13 00:00:00', '', 0, '', '', 'Property/Service', ''),
(24, '2015-01-13 00:00:00', 'wjwwkwk', 93983333, 'ahq@live.com', '93983333', 'Property/Service', '');

-- --------------------------------------------------------

--
-- Table structure for table `site_pages`
--

CREATE TABLE IF NOT EXISTS `site_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_order` int(11) NOT NULL,
  `page_main_heading` text,
  `meta_title` varchar(300) DEFAULT NULL,
  `page_image` varchar(100) NOT NULL,
  `page_short_description` text NOT NULL,
  `page_long_description` longtext,
  `page_parent_id` varchar(10) DEFAULT 'NULL',
  `page_status` varchar(10) DEFAULT NULL,
  `page_name` varchar(250) NOT NULL,
  `page_template` varchar(30) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `site_pages`
--

INSERT INTO `site_pages` (`page_id`, `page_order`, `page_main_heading`, `meta_title`, `page_image`, `page_short_description`, `page_long_description`, `page_parent_id`, `page_status`, `page_name`, `page_template`) VALUES
(1, 1, 'Home', 'Home', '', '', '<p>\r\n	hello</p>\r\n', '0', 'Active', 'Home', 'home'),
(2, 2, 'prodetails', 'prodetails', 'add_20121003020223_plane.png', '', '&nbsp;Quick Man Properties &amp; Real<strong>Fair Deals &nbsp;</strong>&nbsp;<br />\r\n&nbsp;<br />\r\nQuick Man is most Reliable Real estate &nbsp;service Providing concern who looks after your short term and long term objective and caters match the need of consumer and corporate sector &nbsp;<br />\r\n<em>Quick Man Properties &amp; Real Estate &nbsp;is the professional member of:</em><br />\r\n&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://dhatoday.com/tag/KCCI/" target="_blank"><strong><em>Lahore &nbsp;Chamber Of Commerce and Industry (LCCI)</em></strong></a><br />\r\n&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://dhatoday.com/tag/defclarea/" target="_blank"><strong><em>Defence &amp; Clifton Association of Real Estate Agents (DEFCLAREA)</em></strong></a><br />\r\n&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://dhatoday.com/tag/REBIC/" target="_blank"><strong><em>Real Estate Business &amp; Investment Club (REBIC)</em></strong></a><br />\r\n&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://dhatoday.com/tag/DSRA/" target="_blank"><strong><em>Defence Society Residents&rsquo; Association (DSRA)</em></strong></a><br />\r\n&nbsp;<br />\r\nWhatever type of transaction you are engaged whether selling, buying, Land Lord, tenant or society developer, Real estate decisions you make today will significantly impact more on you or your business in coming years. This is particularly true in the highly lucrative marketplace like Pakistan where mostly upward change in prices is always seen and there is a need to realize importance of timely decision. Good profitable deal is time decision game where the Quick Man&rsquo;s innovative idea to &nbsp;serve considering timeline is unique and wise for all who are of the same view and understand importance of time .Quick man&rsquo;s team provides ultimate &nbsp;solution to all its clients using &nbsp;analytical expertise with highly Professional negotiating skills through our Transaction&nbsp; management experiences . We Always extent our extraordinary services &nbsp;and attention to &nbsp;all our respectable clients regardless of&nbsp; nature and size of transaction is concerned &nbsp;We claim not to make successful but emerge to put a step forward your lifetime Successes.<br />\r\nQuick Man&rsquo;s Team is committed to facilitate customers by providing &nbsp;value-added on time solutions. We combine our unique insights into the marketplace with a thorough understanding of your business/real estate needs by &nbsp;utilizing our extensive network of relevant resources of clientage of all type of seller / buyers / owners / Tenants / society owners etc etc with a huge volume of properties option in the entire area of Lahore CITY . If there is any property service required <strong>Just APPLY</strong>.<br />\r\n<div style="margin-left:5.35pt;">\r\n	&nbsp;<br />\r\n	NOTICE . QUICK MAN IS LOOKING FOR PROPOSAL OF FRIENCHISES FROM OTHER CITIES ,<br />\r\n	Intrested Candidates we Required to contact us for below cities only&nbsp; .<br />\r\n	LAHORE / KARACHI / Islamabad /FBD/Gujaranwala/Sheikhupura /Multan/Bhawalpur /Gujrat / Sialkot/ Mirpur AJK.<br />\r\n	<br />\r\n	Team</div>\r\nQuick Man Properties &amp; Real Estate &nbsp;is home to some developing talent in real estate business and Mr. Shafi not only encourages them but also share their wisdom and expertise with the junior staff.&nbsp; They have instituted a comprehensive training program for young brokers and property managers to ensure their professional development and longevity with the clients.<br />\r\n<h2>\r\n	Services</h2>\r\nQuick Man Properties &amp; Real Estate &nbsp;offers comprehensive services from selection of site and feasibility studies to construction and property management. The range of properties included in our services includes lands, open plots, warehouses, showrooms, workshops, offices, bungalows and apartment buildings.<br />\r\n<br />\r\n<h2>\r\n	<a href="http://citiassociates.com.pk/buy-and-sell/">Buy and Sell</a></h2>\r\nWe take pride in our ability to rapidly gain a comprehensive understanding of your specific needs and objectives. We then apply their unique experience and creative abilities to develop the right approach:...<br />\r\n<a href="http://citiassociates.com.pk/rentals/"><br />\r\n</a><a href="http://citiassociates.com.pk/rentals/">Rentals</a><br />\r\nQuick Man Properties &amp; Real Estate &rsquo; hands-on approach and positive attitude has benefited property owners for more than 15 years. Through our full range of services, we strive to achieve that delicate balance between a...<br />\r\n<br />\r\n<h2>\r\n	<a href="http://citiassociates.com.pk/investment/">Investment</a></h2>\r\n', '0', 'Active', 'prodetails', 'prodetails'),
(7, 7, 'jobform', 'jobform', '', '', NULL, 'NULL', 'Active', 'jobform', 'jobform'),
(8, 8, 'software', 'software', '', '', NULL, 'NULL', 'Active', 'software', 'software'),
(9, 9, 'club', 'club', '', '', NULL, 'NULL', 'Active', 'club', 'club'),
(10, 10, 'About QMMS', 'About QMMS', 'add_20141230121327_ceo.jpg', '\r\n                                                <h6>What is QMMS.</h6>\r\n\r\n<p>This is a plate form which caters the needs of all segment of society and providing following core services under one roof quickly.<br>\r\n\r\nQuick Properties and real Estate <br>\r\n\r\nQuick Alternative Energies <br> \r\n\r\nQuick currency exchange <br>\r\n\r\nQuick advertisemt <br>\r\n\r\nQuick marriage consultant <br>\r\n\r\nQuick software development services <br>\r\n\r\n Objective of  QMMS.</p>\r\n\r\n\r\n', 'Our core objective to facilitate especially Educated class by focusing their needs and realizing the importance of time where as small needs become worries when we don&#39;t attend them on time small opportunities become heavy investments in future . Time factor is the key thing to do so a lot of people miss such when they find them helpless due to lack of time in their daily busy routine . Quick man is fed up with the pending approach where people adopt a sluggish plocy of&nbsp; ho jia ga kar len ge&nbsp; which consequently result in shape of missing opportunities (make us might we done it earlier ) and small worries becomes big one and some time not repairable loss in life .<br />\r\n<br />\r\n<br />\r\nWe want you to happy by applying the policy : just do it &quot; so the quick man fully understand the importance of its valued customers and qmms&nbsp; team of consultant is fully commited to take on&nbsp; With a wealth of experience in their respective area to fully understand meet needs of their clients and know the challenges to materialize any of the expected order of valuabe customer upto satisfaction .the quick response from the company and their consultant is the only distinction from other companies in the market.', '0', 'Active', 'About QMMS', 'aboutqmms'),
(3, 3, 'Marriage', 'marriage', '', '<br />\r\n', '<h1 id="marrige">\r\n	<em>Quick Man Marriage Services&nbsp;</em></h1>\r\n<h3>\r\n	<span style="font-size:12px;"><em>Marriage is an important decision and a life time contract amoung the partners (A Male and A Female).<br />\r\n	<br />\r\n	<span style="color:#b22222;">Islamic Piont of View in the &nbsp;Light of Quran </span><br />\r\n	Bheing&nbsp;Muslim we are asked for Nikka &nbsp;( quran Ayte )&nbsp;<br />\r\n	<span style="color:#b22222;">Social pointview </span><br />\r\n	Marriage not only bound two indivduals but also develops a connection between two families , Sects , Bradaries and open new social opportunities for people engaged therein where &nbsp;families celebrates their happiness and reduces their sad momentets by sharing and caring each others .<br />\r\n	<span style="color:#b22222;">Quick Man Piont of View</span><br />\r\n	Please value the time and attend your personal matters on time to avoid big worries which pends your Social life . It is requested to plesae leave old /orthodox sort of methods of finding Marriage proposals which only creates discomfort by wasting both your Time and money.<br />\r\n	Yes ! We charge but claim to save your money and precious time so Lets Register Yourself immediately.&nbsp;</em></span></h3>\r\n', '0', 'Active', 'marriage', 'marriage'),
(4, 4, 'marketingform', 'marketingform', '', '', '', '0', 'Active', 'marketingform', 'marketingform'),
(5, 5, 'exchange', 'exchange', '', '<br />\r\n', '<h1>\r\n	Currency Exchange Services</h1>\r\n<dl class="accordion col-lg-12">\r\n	<dt>\r\n		<a href="http://mynycstudio.com/qmms_html/exchange.php">Today&#39;s Market Rate</a></dt>\r\n	<dd style="display: block;">\r\n		<div class="col-lg-8" id="payment_schedule_area">\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area2">\r\n				Currency</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area2">\r\n				Symbol</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area2">\r\n				Buying</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area2">\r\n				Selling</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				Australian Dollar</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				AUD</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				88</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				88.25</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				Bahrain Dinar</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				BHD</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				269.9</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				269.5</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				Canadian Dollar</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				CAD</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				90.5</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				90.75</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				China Yuan</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				CNY</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				16.4</div>\r\n			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="payment_area">\r\n				16.55<br />\r\n				&nbsp;</div>\r\n		</div>\r\n	</dd>\r\n</dl>\r\n<p>\r\n	Under the exchange company license, REC is authorized to deal in the business of currency exchange, travelers&#39; Cheques, notes, postal notes, money order, bank drafts and inward/outward remittances in a regulated environment. The company is authorized to set up its own branches or grant franchise arrangements for full range of services. The Company is also allowed to establish its own or franchised payment booths for inward remittances all over Pakistan. REC has presently its 100 of vendours in Lahore who are registered with QMMS branches in ten cities viz.</p>\r\n<p>\r\n	Covers All Area s of Lahore Net work. REC have planned to open 100 branches in 2007 and another 100 in 2008, so as to have more than 200 branches by 2008 Inshaallah.</p>\r\n<p>\r\n	REC is a customer focused company and has always offered and maintained products, services and policies aimed at best satisfying the customer needs. The infrastructure, systems and procedures are regularly reviewed and improved to ensure the customers are provided with speedy, convenient and secure delivery of service. The Company is a good corporate citizen. It always operates within the provision of the national and international law. It is working closely with the regulatory authorities to promote the awareness and implementation of all regulatory requirements. It is fully aware and responsive to its role &amp; responsibilities in the international anti-money laundering drive.</p>\r\n<h5>\r\n	Some of the Core features of REC Web Portal<br />\r\n	Real Time Forex Rates:</h5>\r\n<p>\r\n	One of the most unique features of Raviexchange is the availability of the current currency rates to the users, which is almost rare on the web from Pakistan. These rates are provided through the courtesy of Ravi Exchange Company (Pvt) Ltd. which are updated round the clock. The purpose of providing most updated information on our portal is to facilitate our valued users and for the justification of visitors</p>\r\n<h5>\r\n	National &amp; International Market Research:</h5>\r\n<p>\r\n	A little effort to provide on air national and international economic news to our visitors, the news section is there. The national news section is covered with the Forex news of Pakistan collaborated with the different News Groups of Pakistan while International news is being grabbed from world&#39;s most authentic news sources. These features infect keeps our visitors well informed with the latest and current issues happening in the Market.</p>\r\n<h5>\r\n	Research News and Analysis:</h5>\r\n<p>\r\n	The coverage of national and international stock markets with graphical representation with the help of charts is another addition to the site. This section is helpful in gaining access to the important events and news marking the national and international stock markets</p>\r\n', '0', 'Active', 'exchange', 'exchange'),
(6, 6, 'energiesform', 'energiesform', '', '', '<p>\r\n	You can subscribe to an Online Aircraft Systems Training Program for any of the following Aircraft Make and Model as well as other Specialty Courses mentioned below. You have the choice of Initial (For those new to that particular Aircraft) or Recurrent (For those who need to renew an existing Type Rating within the regulated time frame.)</p>\r\n<div class="box">\r\n	<br />\r\n	<h2>\r\n		Aircraft Systems Ground School Courses:.</h2>\r\n	<ul>\r\n		<li>\r\n			Airbus 320 series</li>\r\n		<li>\r\n			Airbus 330</li>\r\n		<li>\r\n			Airbus 340</li>\r\n		<li>\r\n			Boeing 737 (all series)</li>\r\n		<li>\r\n			Boeing 747 (classic and 400)</li>\r\n		<li>\r\n			Boeing 757/767</li>\r\n		<li>\r\n			Boeing777</li>\r\n		<li>\r\n			Boeing787</li>\r\n		<li>\r\n			DC9/10</li>\r\n		<li>\r\n			MD80</li>\r\n		<li>\r\n			Embraer&#39;s ERJ series</li>\r\n	</ul>\r\n	<div class="rgt">\r\n		&nbsp;</div>\r\n	<div class="border_page">\r\n		&nbsp;</div>\r\n</div>\r\n<div class="box1">\r\n	<h2>\r\n		Specialty Courses</h2>\r\n	<ul>\r\n		<li>\r\n			Cold Weather Operations</li>\r\n		<li>\r\n			CRM and TEM</li>\r\n		<li>\r\n			ETOPS</li>\r\n		<li>\r\n			Fatigue Resource Management</li>\r\n		<li>\r\n			HAZMAT</li>\r\n		<li>\r\n			Low Visibility Procedures include: CAT II / III</li>\r\n		<li>\r\n			Hypoxia</li>\r\n		<li>\r\n			Jet Upset</li>\r\n		<li>\r\n			MNPS</li>\r\n		<li>\r\n			Volcanic Ash</li>\r\n		<li>\r\n			Weather Radar Operations</li>\r\n	</ul>\r\n	<br />\r\n	<p>\r\n		<strong>How does it work? </strong>- Each Course is delivered in one of 2 ways:</p>\r\n	<br />\r\n	<p>\r\n		<span>Electronically: </span> Upon purchase, you will receive a user name and password to log on to your course. This option requires internet access. Your work and progress will be monitored and recorded automatically. Upon completion a certificate will be issued and sent to you.</p>\r\n	<br />\r\n	<p>\r\n		<span>Flash Drive: </span> Upon purchase, you will be sent by courier a flash drive with the contents of your course. When you confirm reception, an email is sent to you with your user name and password to access your course. This option requires occasional internet access only when you want to upload your work and progress which will be then monitored and recorded. Upon completion a certificate will be issued and sent to you</p>\r\n	<br />\r\n	<p>\r\n		<span>Initial Courses: </span> Provide you with 90 days access to course content.</p>\r\n	<p>\r\n		<span>Recurrent Courses : </span> provide you with 30 days access to course content.</p>\r\n	<p>\r\n		<span>Specialty Courses: </span> provide you with 30 days access to course content..</p>\r\n	<br />\r\n	<p>\r\n		The delivery address given at the time of purchase must be one that a reputable courier will deliver to. PO Boxes are not accepted.</p>\r\n</div>\r\n', '0', 'Active', 'energiesform', 'energiesform'),
(11, 11, 'About CEO', 'About CEO', '', '<br />\r\n', 'Mian N.A Tariq is the Chief Executive Officer&nbsp; of M/S Quick Man Multi Services who is a Master In Business Administration with a 17 years of diversified experience in the public and private financial sectors. He is also a financial advisor of &nbsp;renounced Public sector entities engaged in Construction / Electrification and other Mega Project Associates from last couple of years .<br />\r\n<br />\r\n<br />\r\nThe Launch of Such A Plateform is a great initiative to serve the Educated class to cater their basic needs which are small in nature but becomes Big issue when not addressed properly and cause losses in terms of time or money. Besides the&nbsp; core idea of quick Man is the symbolic services &nbsp;to match your need right on time. &quot; A Stitch in Time Save Nine&quot;.<br />\r\n<br />\r\nQuick Man&#39;s quick services are your Best Rialiance . &nbsp;<br />\r\n<br />\r\n', '0', 'Active', 'About CEO', 'aboutseo'),
(12, 12, 'About Directors', 'About Directors', '', '<br />\r\n', '<div class="col-lg-12" id="inner_container">\r\n	<div class="inner_contant">\r\n		<h1>\r\n			About Directors</h1>\r\n		<div class="drictors_post row">\r\n			<div class="col-lg-4 col-md-4" id="pic_area">\r\n				<img alt="CEO" class="img-responsive" src="http://mynycstudio.com/qmms_html/images/ceo.jpg" /></div>\r\n			<div class="col-lg-8 col-md-8">\r\n				<h1>\r\n					Directors Name Will Go here</h1>\r\n				<p>\r\n					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n			</div>\r\n		</div>\r\n		<div class="drictors_post row">\r\n			<div class="col-lg-4 col-md-4" id="pic_area">\r\n				<img alt="CEO" class="img-responsive" src="http://mynycstudio.com/qmms_html/images/ceo.jpg" /></div>\r\n			<div class="col-lg-8 col-md-8">\r\n				<h1>\r\n					Directors Name Will Go here</h1>\r\n				<p>\r\n					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n			</div>\r\n		</div>\r\n		<div class="drictors_post row">\r\n			<div class="col-lg-4 col-md-4" id="pic_area">\r\n				<img alt="CEO" class="img-responsive" src="http://mynycstudio.com/qmms_html/images/ceo.jpg" /></div>\r\n			<div class="col-lg-8 col-md-8">\r\n				<h1>\r\n					Directors Name Will Go here</h1>\r\n				<p>\r\n					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n			</div>\r\n		</div>\r\n		<div class="drictors_post row">\r\n			<div class="col-lg-4 col-md-4" id="pic_area">\r\n				<img alt="CEO" class="img-responsive" src="http://mynycstudio.com/qmms_html/images/ceo.jpg" /></div>\r\n			<div class="col-lg-8 col-md-8">\r\n				<h1>\r\n					Directors Name Will Go here</h1>\r\n				<p>\r\n					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n			</div>\r\n		</div>\r\n	</div>\r\n</div>\r\n', '0', 'Active', 'About Directors', 'directors'),
(13, 13, 'Marriage Consultants', 'Marriage Consultants', '', '<br />\r\n', '<span style="color:#b22222;"><span style="font-size:16px;"><strong>Welcome To Quick Man Marriage Services.<br />\r\n</strong></span></span><br />\r\nMarriage is a life time decision and a very important while getting a suitable compatible Partner with a good family is everyone&rsquo;s dream.<br />\r\n&nbsp;<br />\r\nQMMS Marriage Consultants are working mainly for all the ethnic groups living in Pakistan and overseas Families throughout the world. Matrimonial services are for the people who are truly interested in&nbsp;marriage and are serious. We listen our clients and put our at most efforts to fulfill their requirement for the compatible match not only to facilitate them rather please them by providing &nbsp;very quick response .We also Request our clients to please Fill up Form properly and openly mention your prime concerns to QMMS about what they really want and what&rsquo;s their main concentration just to find their match and avoid wastage of time because Time is Most Important For our Respectable customers.<br />\r\n&nbsp;<br />\r\nThe people of all age group are available in matrimonial matches also one must register to QMMS &nbsp;site as they provide secure services and special privacy is given to all applicants/Members as their credential&nbsp; will &nbsp;remains secret and all personal information shall be Kept <strong>&ldquo;Strictly Confidential&rdquo;</strong>.<br />\r\nQuick Man Marriage Services are best for match making and unique in nature and provides one step forward Services where as we also provide counter verification when and where required for genuineness of credentials exchanged with the counter party . We also provide full assistance for late Marriage /Widow / Divorce and 2<sup>nd</sup> Marriage case.<br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\nMarriage (Shaadi) is a bond between two individuals and Wedding is occasion of celebrating the event by arranging ceremony with respective common &nbsp;Family customs and traditions territory wise.<br />\r\nIn Islam boy and girl have full freedom to marry according to their choice and make for moon when Parents are engaged so this way marriage develops a relationship between two families and create a new social setup for both bride and groom . According to Islam, it is considered a religious and social necessity of both male and female and marriage is is not only a bond to live together but also a responsibility to take care of each other&rsquo;s rights and relations of other family member in accordance to the religion. The ceremony of Marriage (shaadi) is generally a well-attended affair, though only two male witnesses are required to validate Nikah (Marriage Contract) Legal or official. However, Moral Quality of partner is key to success of the lifelong&nbsp;&nbsp; relationship.<br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\nQuick Man Marriage plate form is best for match making and unique in nature which provides one step forward Services where as we also provide <strong>counter verification</strong>when and where required for genuineness of credentials exchanged with the counter party. We also provide full assistance for late Marriage /Widow / Divorce and 2<sup>nd</sup> marriage cases.<br />\r\n&nbsp;<br />\r\n<div>\r\n	<strong>Note : These services are not like online dating sites etc and considering the moral values QMMS is against all such dating sites and only work professionally on serious ground .</strong>There are lot of Match Making Online Sites and Un-professional people and marriage bureau which not only waste the money but also waste the precious time of people.O,Dear Peoples you are no longer helpless because<strong>Quick Man is Now in Town</strong>to facilitate his customer so let&rsquo;s Register Yourself.</div>\r\n', '0', 'Active', 'Marriage Consultants', 'shadi'),
(22, 22, '', 'noticeboard', '', '<br />\r\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0', 'Active', 'noticeboard', 'noticeboard'),
(14, 14, 'Media Buying Services', 'Media Buying Services', '', '<br />\r\n', '<h1>\r\n	Media Buying Services</h1>\r\n<p>\r\n	Quick Man Marketing and Advertisements<br />\r\n	&nbsp;Claims<br />\r\n	HIGHER RATURNs ON INVESTMENTs&nbsp;<br />\r\n	Successful Business is Time Decision Game<br />\r\n	Radio / Digital Audio<br />\r\n	We have earned the reputation of providing the best RETURN ON INVESTMENTS &nbsp;in the industry. QUICK MARKETING &amp; ADVERTISERS has the lowest negotiated rates, best vendor relationships and proprietary Platinum Matrix software that uses historical analytics to maximize your campaign efficiency.<br />\r\n	TV<br />\r\n	QUICK MARKETING &amp; ADVERTISERS has long standing partnerships with TV media vendors and DRTV experts. Our collaborative negotiation skills and experience allow us to execute well thought out media plans that deliver better RETURN ON INVESTMENTS.<br />\r\n	Online<br />\r\n	QUICK MARKETING &amp; ADVERTISERS can integrate your offline and online campaigns. We will effectively find and target your audience and turn leads into conversions across all platforms. We consistently track and optimize your campaign getting you the best results.<br />\r\n	Print/Out of Home<br />\r\n	QUICK MARKETING &amp; ADVERTISERS can develop and place all print and OOH campaigns. QUICK MARKETING &amp; ADVERTISERS can put together special remnant packages. We can also execute non-traditional and branding events.</p>\r\n<h1>\r\n	&nbsp;</h1>\r\n<h1>\r\n	Print/Out of Home</h1>\r\n<p>\r\n	Increase the reach of your traditional campaigns by adding print or out-of-home to your media mix. We can evaluate each campaign and recommend holistic media strategies to include print and out of home placements. We also can increase brand awareness with large format opportunities. QUICK MARKETING &amp; ADVERTISERS offers versatile and cost efficient print and out-of-home opportunities including:<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; National Consumer Magazines<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Business Publications<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sunday Magazines<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Newspapers<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Local Consumer Magazines<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Free Standing Inserts<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Outdoor Billboards<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Remnant Billboards<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Transit Signage<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Digital Outdoors<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bus Wraps<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bus stops and benches</p>\r\n<h1>\r\n	&nbsp;</h1>\r\n<h1>\r\n	Radio/Digital Audio</h1>\r\n<p>\r\n	With over 20 years of executing radio campaigns, QUICK MARKETING &amp; ADVERTISERS has earned the reputation of providing the best RETURN ON INVESTMENTS &nbsp;in the industry. Very few agencies have the relationships and buying power like QUICK MARKETING &amp; ADVERTISERS. Our creative experts write strong calls to action to provoke powerful results. In addition, with our Platinum Matrix proprietary software we use historical analytics to maximize your campaign efficiency.<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; National Syndicated Radio<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.mediapartnersworldwide.co/remnant-advertising" target="_blank" title="Remnant Radio">Remnant Radio</a><br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Local Radio<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Event Sponsorships<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.mediapartnersworldwide.co/siriusxm" target="_blank" title="Sirius/XM - Satellite">Sirius/XM &ndash; Satellite</a><br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pandora | Spotify<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Streaming<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Per Inquiry Radio<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Long Form<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Spanish Radio</p>\r\n<h1>\r\n	<span style="font-size:16px;">Television</span></h1>\r\n<p>\r\n	Media Partners Worldwide has long standing relationships with TV vendors and partners that can give you more cost effective campaigns. Smarter buying strategies and historical performance are used to zero in on your target audience to deliver the best results. In addition, we can save you thousands on the production and creation of your commercial.<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; National Cable<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Syndication<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Spot Cable<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Local Broadcast<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :10 Second Syndicated Spots<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Per Inquiry TV<br />\r\n	&nbsp;<br />\r\n	&nbsp;</p>\r\n<h1>\r\n	Digital</h1>\r\n<p>\r\n	Allow us to take your traditional campaign and create a one stop shop for your digital needs. We can integrate your offline and online efforts and hit your RETURN ON INVESTMENTS &nbsp;goals. We help you navigate through the fragmented digital landscape and provide a turnkey solution for all of your digital needs. We can help your brand with the following:<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Display Advertising<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lead Generation<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Retargeting<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Online Conversion Marketing<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Search Marketing<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Facebook Media<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Video Advertising<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobile/Tablet Advertising<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email Blasts&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Web Design<br />\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Online Tracking and Reporting<br />\r\n	&nbsp; &nbsp; &nbsp; socila media ------Why Quick Man &hellip;&hellip;. Hurry Up and Promote your Business&nbsp; and contact APPLY ------------ ensure best return on you investments .</p>\r\n', '0', 'Active', 'Media Buying Services', 'advertising'),
(15, 15, 'Energies', 'Energies', '', '', NULL, 'NULL', 'Active', 'Energies', 'energies'),
(16, 16, 'LED', 'LED', '', '<br />\r\n', '<p>\r\n	LED (light emitting diode) is a semi conductor mechanism which produces incoherent thin-spectrum light when electrically inclined in the forward direction. The color of the discharged light is usually based composition and condition of the semi conducting substance applied, and can be infrared, visible or near-ultraviolet. In the year 1955 Rubin Braunstein of the Radio Corporation of America initially accounted on infrared release from gallium arsenide and various supplementary semiconductor alloys.</p>\r\n<h6>\r\n	Benefits of LED Lights</h6>\r\n<p>\r\n	Following are the major advantages which LED lights posses as compared to traditional incandescent bulbs and compact fluorescent lights.</p>\r\n<h5>\r\n	Long Lasting</h5>\r\n<p>\r\n	LED bulbs last up to 10 times as long as compact fluorescent and far longer than typical incandescent bulbs.</p>\r\n<h5>\r\n	Durable</h5>\r\n<p>\r\n	Since LEDs do not have filament, they are not damaged under circumstances when a regular incandescent bulb would be broken. Because of their durability, LED bulbs hold up well to jarring and bumping.</p>\r\n<h5>\r\n	Cool</h5>\r\n<p>\r\n	LED bulbs do not cause heat build- up; LED produces 3.4 btu&#39;s/hour, compared to 85 for incandescent bulbs. This also cut down on air conditioning costs in homes &amp;offices.</p>\r\n<h5>\r\n	Mercury Free</h5>\r\n<p>\r\n	No Mercury is used in the manufacturing of LEDs.</p>\r\n<h5>\r\n	More Efficient</h5>\r\n<p>\r\n	LED light bulbs use only 2-10 watts of electricity (1/3rd to 1/30th of incandescent or CFL).Small LED flashlight bulbs will extend battery life 10 to 15 times longer than incandescent bulbs. Also, because there bulbs lasts for years, energy is saved in maintenance and replacement costs. For example, many cities in the US are replacing their incandescent traffic lights with LED arrays because the electricity cost can be reduced to 80% or more.</p>\r\n<h5>\r\n	Cost Effective</h5>\r\n<p>\r\n	Although LEDs are expensive, the cost is recouped over time due to energy savings, lower maintenance and replacement costs.</p>\r\n<h5>\r\n	Lights for Remote Areas</h5>\r\n<p>\r\n	Because of the low power requirement for LEDs, using solar panels becomes more practical and less expensive than running an electric line or using a generator for lightning.</p>\r\n<h4>\r\n	COLORS OF LED LIGHTS</h4>\r\n<h5>\r\n	Red</h5>\r\n<p>\r\n	Red is the traditional color for maintaining night vision.</p>\r\n<h5>\r\n	Green</h5>\r\n<p>\r\n	Green is now the preferred color of pilots and military. The green color is also great for retaining night vision, and it does not erase the red markings on maps and charts.</p>\r\n<h5>\r\n	Blue</h5>\r\n<p>\r\n	Many people like the blue because it is very easy on the eyes. Blue appears to be good reading light forelderly eyes. Elderly folks report that they can read under the blue light for hours without eyestrain, compared to severe eyestrain in less than 30 minutes with incandescent lightning.</p>\r\n<h5>\r\n	White</h5>\r\n<p>\r\n	White is the most popular of the LED colors. It produces a soft white light, without harsh reflection, glare or shadows.</p>\r\n<h5>\r\n	Amber</h5>\r\n<p>\r\n	LED amber bulbs do not attract flying insects, as do ordinary white bulbs. Amber LEDs are used outdoors in areas such as patios and decks wher insects flying around lights are a nuisance.</p>\r\n', '0', 'Active', 'LED', 'led'),
(17, 17, 'Solar', 'Solar', '', '<br />\r\n', '<h6>\r\n	Solar</h6>\r\n<p>\r\n	QMMS established since 2014, is an energy solutions provider operating through Pakistan and Afghanistan offering services in solar, wind, hydro, and thermal sectors. The organization has worked countrywide from the deserts of Tharparkar to the valleys of Gilgit-Baltistan, leaving its footprint of environmental protection, social responsibility, renewable energy solutions and energy awareness throughout the country. It aims to create energy revolution in the country, whereby the vicious cycle of energy deficiency is broken, helping individuals becoming self reliant and progressive in their daily routines. Working with various national and international partners, the organization is committed towards providing customized, resource efficient solutions to all its clients, for a better and brighter Pakistan. Grace Solar is also a proud technical partner and official representative of many American and European solar brands such Lorentz, OutBack Power, Apollo Solar, Dulas, Senersun and Canadian Solar, which promise credibility to client&#39;s investment due to the highest reliability standards.</p>\r\n<h5>\r\n	pany (Web Page)</h5>\r\n<p>\r\n	Grace Solar established since 2006, is an energy solutions provider company operating through Pakistan and Afghanistan offering services in solar, wind, hydro, and thermal sectors. The organiz ...</p>\r\n<h5>\r\n	Projects (Web Page)</h5>\r\n<p>\r\n	This page is currently being developed and will soon be updated with details of all projects executed by Grace Solar.</p>\r\n<h5>\r\n	Partners (Web Page)</h5>\r\n<p>\r\n	Grace Solar Pakistan is proud partners with renowned international energy brands, being the soul authorized distributor for many vendors in Pakistan and Afghanistan. We believe in providing our cl ...</p>\r\n<h5>\r\n	About Us (Web Page)</h5>\r\n<p>\r\n	Grace Solar Pakistan is a renewable energy solutions provider EPC, established in 2006 with its head office in Lahore. MissionTo design and implement sustainable energy solutions that ...</p>\r\n<h5>\r\n	Team (Web Page)</h5>\r\n<p>\r\n	Nauman Khan (CEO Grace Solar): 13 years of experience in heading one of Pakistan&#39;s oldest renewable energy company, Mr Nauman, cherishes the reputation and credibility of not only his company ...</p>\r\n<h5>\r\n	Services (Web Page)</h5>\r\n<p>\r\n	Grace Solar Pakistan has been providing reliable and cost effective alternate solutions to its diverse clients since 2006, and is guarantees a range of services such as: Turnkey renewable e ...</p>\r\n<h5>\r\n	After Sales (Web Page)</h5>\r\n<p>\r\n	After Sales and Technical Support is the most crucial part as far as the post-implementation period of a project is concerned. In order to establish a strong system for the same that would res ...</p>\r\n<h5>\r\n	Commercial (Web Page)</h5>\r\n<p>\r\n	We provide Off-Grid and Hybrid solutions to our clients in the commercial sector, depending upon the client requirements. These clients may fall in any of the following categories Petrol Pu ...</p>\r\n<h5>\r\n	Development Sector (Web Page)</h5>\r\n<p>\r\n	Grace Solar has worked with various development organizations in providing energy alternate solutions at different sites across Pakistan and Afghanistan. Our expertise and projects include the ...</p>\r\n<h5>\r\n	Industrial (Web Page)</h5>\r\n<p>\r\n	We provide Off-Grid, Hybrid, or Grid-Tied Solar solutions for industrial clients. Grid-Tied Solutions are used for systems that are connected to the Grid, and do not support a battery bank (In ...</p>\r\n<h5>\r\n	Residential (Web Page)</h5>\r\n<p>\r\n	We provide Off-Grid and Hybrid Solar solutions to residential clients depending upon their requirement. Off-Grid Solutions are used in cases where the clients only demand a Solar-based output ...</p>\r\n<h4>\r\n	Solarplus Energy (Pvt) Ltd.</h4>\r\n<p>\r\n	is dedicated solely to providing custom solar based plus other innovative energy solutions to residential, commercial and remote areas of Pakistan. We offer high quality solar based products while focusing on making solar energy a cost-effective, mainstream energy solution. Additionally, we offer other innovative energy products to meet your energy needs. Backed by our knowledgeable staff, management and strategic partners worldwide, only Solarplus offers the widest range of quality products that meet all your energy requirements. Our systems are designed to meet the energy requirements of urban buildings, hospitals, schools, urban houses, farms, villages, resorts, telecom stations and agricultural lands connected or not connected to grid station. Through these products, we will not only solve your energy needs but will also make the environment cleaner by reducing pollution and making Pakistan less reliant on imported oil/gas. We are registered with the Alternate Energy Development Board (AEDB) of Pakistan.</p>\r\n', '0', 'Active', 'Solar', 'solar'),
(18, 18, 'Generator', 'Generator', '', '<br />\r\n', '<h6>\r\n	Generator</h6>\r\n<p>\r\n	Mr. N.A Tariq Chaudhary is the Chief Executive Officer . Mr. Tariq has 17 years of diversified experience in the public and private finnancial sectors. He joined Warid Telecom in March 2005 where he worked as Chief Strategy and Operations Officer until January 20011. he has a vast amount of experience in corporate strategy, procurement, logistics, administration, project management and quality assurance. as the launch director for Warid International, he successfully launched the Bangladesh and African operations for the Warid. Prior to joining QMMS Mr, Tariq Ch was and CEO of WebLight Production Inc. providing B-2-B e-commerce supply chain management solutions for the food industry in the United States. he also has over 10 years of work experience in the information technology department of the public sector in the US. Mr. Tariq Ch is Master in Businss admin finance degrees from LUMS.</p>\r\n', '0', 'InActive', 'Generator', 'generator'),
(19, 19, 'Biotechnology', 'Biotechnology', '', '<br />\r\n', '<h6>\r\n	Why is Biotechnology</h6>\r\n<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '0', 'InActive', 'Biotechnology', 'biotechnology'),
(20, 20, 'Recruitment & Training Services', 'Recruitment & Training Services', '', '<br />\r\n', '<h1>\r\n	Recruitment &amp; Training Services</h1>\r\n<h4>\r\n	International Job in 7 days</h4>\r\n<div class="inner_banner_area col-lg-12">\r\n	<img alt="" class="img-responsive" src="http://mynycstudio.com/qmms_html/images/team.jpg" /></div>\r\n<h3>\r\n	Spend 10 Minutes to make your profile and<br />\r\n	Get International Job in 7 days or less</h3>\r\n<div class="inner_banner_area col-lg-12">\r\n	<img alt="" class="img-responsive" src="http://mynycstudio.com/qmms_html/images/flags.jpg" /></div>\r\n<h2>\r\n	Quick Guide : How to Register</h2>\r\n<p>\r\n	type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n<p>\r\n	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n<p>\r\n	Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n<p>\r\n	The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n<p>\r\n	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a</p>\r\n<div class="apply_now">\r\n	<a href="http://mynycstudio.com/qmms_html/jobform.php"><img alt="" class="img-responsive" src="http://mynycstudio.com/qmms_html/images/form.jpg" /></a></div>\r\n', '0', 'Active', 'Recruitment & Training Services', 'training'),
(21, 21, 'Contact Us', 'Contact Us', '', '', NULL, 'NULL', 'Active', 'Contact Us', 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_status` varchar(250) NOT NULL,
  `cat` varchar(250) NOT NULL,
  `software_type` varchar(250) NOT NULL,
  `industry_for` varchar(250) NOT NULL,
  `allocated_budget` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `service_address` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `city_area` varchar(250) NOT NULL,
  `applicant_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mob` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `dateandtime` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `software_type`
--

CREATE TABLE IF NOT EXISTS `software_type` (
  `software_id` int(11) NOT NULL AUTO_INCREMENT,
  `software_Type` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`software_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `software_type`
--

INSERT INTO `software_type` (`software_id`, `software_Type`, `status`) VALUES
(2, 'Accounting3', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_account_name` varchar(300) NOT NULL,
  `user_account_password` varchar(100) NOT NULL,
  `user_account_email` varchar(300) NOT NULL,
  `user_account_lname` varchar(300) NOT NULL,
  `user_account_sname` varchar(300) NOT NULL,
  `user_billing_fname` varchar(300) NOT NULL,
  `user_billing_lname` varchar(300) NOT NULL,
  `user_billing_mobile` varchar(300) NOT NULL,
  `user_billing_phone` varchar(300) NOT NULL,
  `user_billing_address` text NOT NULL,
  `user_billing_address2` text NOT NULL,
  `user_billing_city` varchar(300) NOT NULL,
  `user_billing_country` varchar(300) NOT NULL,
  `user_billing_state` varchar(300) NOT NULL,
  `user_status` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_account_name`, `user_account_password`, `user_account_email`, `user_account_lname`, `user_account_sname`, `user_billing_fname`, `user_billing_lname`, `user_billing_mobile`, `user_billing_phone`, `user_billing_address`, `user_billing_address2`, `user_billing_city`, `user_billing_country`, `user_billing_state`, `user_status`) VALUES
(12, 'Waheed', '03334094033', 'waheed.a.t@outlook.com', '03334094033', '03334094033', '1202', '', '', '35730343', '1067-Z,DHA', '', '', '', '', 'Active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);

--
-- Constraints for table `city_area`
--
ALTER TABLE `city_area`
  ADD CONSTRAINT `city_area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
