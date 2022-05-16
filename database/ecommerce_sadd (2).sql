-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2022 at 03:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_sadd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bag_item`
--

CREATE TABLE `bag_item` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bag_item`
--

INSERT INTO `bag_item` (`id`, `session_id`, `product_id`, `quantity`, `created_at`, `modified_at`) VALUES
(504, 14, 2, 1, '2022-05-08 04:34:50', '2022-05-07 22:34:50'),
(507, 15, 5, 1, '2022-05-08 05:30:46', '2022-05-07 23:30:46'),
(610, 16, 1, 6, '2022-05-09 21:28:37', '2022-05-09 15:28:37'),
(611, 16, 8, 4, '2022-05-09 21:39:57', '2022-05-09 15:39:57'),
(612, 16, 11, 1, '2022-05-09 21:40:48', '2022-05-09 15:40:48'),
(613, 16, 9, 1, '2022-05-09 21:40:52', '2022-05-09 15:40:52'),
(614, 16, 13, 1, '2022-05-09 21:40:58', '2022-05-09 15:40:58'),
(615, 16, 12, 1, '2022-05-09 21:41:06', '2022-05-09 15:41:06'),
(741, 10, 2, 1, '2022-05-16 04:35:31', '2022-05-15 22:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `user_id`, `payment_type`, `total`, `created_at`) VALUES
(7, 10, 'COD', '76120', '2022-05-16 04:18:18'),
(8, 10, 'COD', '22560', '2022-05-16 04:29:06'),
(9, 10, 'COD', '2070', '2022-05-16 04:33:50'),
(10, 4, 'COD', '22560', '2022-05-16 04:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `created_at`) VALUES
(5, 7, 5, 3, '2022-05-16 04:18:51'),
(6, 7, 6, 1, '2022-05-16 04:18:51'),
(7, 7, 4, 1, '2022-05-16 04:18:51'),
(8, 8, 1, 1, '2022-05-16 04:29:06'),
(9, 9, 10, 1, '2022-05-16 04:33:50'),
(10, 9, 1, 1, '2022-05-16 04:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(18,2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `description`, `price`, `image`, `stock`, `created_at`, `modified_at`) VALUES
(1, 1, 'Apple Watch Series 6 GPS ', 'Apple Watch is a wearable smartwatch that allows users to accomplish a variety of tasks, including making phone calls, sending text messages and reading email.', '22490.00', 'product_img1.png', 5, '2022-04-21 06:45:29', '2022-04-21 00:41:14'),
(2, 1, 'Nokia 3210 Phone', 'Original and extremely rare Nokia 3210. Original housing and case with minimal scratches. The phone has been tested rigorously. All working perfectly - call text, charging, microphone, earpieces, speaker, and battery standby test. A collector\'s item must-have.\n\nThis is a vintage phone to the next level, a 22-year old phone still working perfectly in 2021. You\'re not buying this for its technology, but the exclusivity of owning one of Nokia\'s technological leapfrog in 1999. \n\nNOTE: The battery is no longer original but we use a brand new and high-quality battery (also hard to find). We have tested it and the phone lasted the same as the original one. If you need an extra battery, we also sell batteries separately.\n\nVARIATION:\n• Brandnew Quality & Factory Unlock - With 100% original case and housing that is almost no scratch. The phone looks perfect like it just came from the factory. 100% working and openline, any SIM will work. High Quality Battery with brand new battery cells.\n\n• Factory Unlock - With 100% original case and housing with minimal scratches. 100% working and openline, any SIM will work. High Quality Battery with brand new battery cells.\n\n• Secondhand Quality - Either lock to Smart or Factory Unlock with replacement case,  some case scratches and with slight phone modification such as back light has been changed. Class A battery.\n\nFEATURE HIGHLIGHTS:\n• First phone with Internal Antenna\n• Customizable Ringtones\n• 5 Liner Monochrome Display\n• 3 Built-in Games: Rotation, Snake, and Memory\n\nPRODUCT SPECIFICATION:\n• Brand: Nokia\n• Model: 3210\n• Housing Material: Durable Polycarbonate\n• Display: 5 Liner Monochrome Display\n• SIM Size: Mini\n• Games: Rotation, Snake, and Memory\n• Battery: BML-3 Lithium-Ion 2.4V\n• Customizable Case: Yes\n• Weight: 151g (5.33 oz)\n\nWHAT\'S IN THE BOX:\n• Nokia 3210\n• Big  Pin Charger\n• BML-3 Battery', '8585.00', 'product_img2.png', 5, '2022-04-21 12:21:47', '2022-04-21 06:18:44'),
(3, 1, 'OPPO A94 ', 'Features\r\nAI Color Portrait Video\r\nDual-View Video\r\n30W VOOC Flash Charge 4.0\r\n4310mAh Large Battery\r\nSize and Weight\r\nHeight: About 160.1mm\r\nWidth: About 73.2mm\r\nThickness: About 7.8mm\r\nWeight: About 172g\r\n\r\nProduct size and weight may vary by configuration, manufacturing process and measurements. All specifications are subject to the actual product.\r\n\r\nMemory\r\n8GB RAM + 128GB ROM\r\n\r\nThe actual RAM and ROM available will be less than the values above due to several factors. For example, it takes some RAM to run the OS and it takes some ROM to install the OS and some apps.\r\n\r\nRAM Type: LPDDR4X @ 1866MHz\r\nExternal Memory: Supported\r\nUSB Version: USB 2.0\r\nUSB OTG: Supported\r\n\r\nThe available internal storage may be smaller as part of the internal storage is occupied by software. Actual memory space may change due to application updates, user operations, and other related factors.\r\n\r\nDisplay\r\nSize: 6.43\"(16.34cm)\r\n6.43 inches is the diagonal length when the four rounded corners of the screen are extended into right angles, the actual size is smaller.\r\nScreen Ratio: 90.8%\r\nResolution: 2400 x 1080 (FHD+)\r\nRefresh Rate: 60Hz\r\nTouch Sampling Rate: 135Hz (Normal), 180Hz (Game mode)\r\nColour Depth: 16 million (8-bit)\r\nColour Gamut: 92% DCI-P3 (typical value)/100% sRGB (typical value)\r\nPixel Density: 409PPI\r\nContrast Ratio: 1000000:1\r\nBrightness: 430nits(Normal); 600nits (HBM); 800nits(Peak value)/All of these are typical values.\r\nPanel: AMOLED\r\n\r\nCamera\r\nRear\r\nMain camera: f/1.7, FOV 79°, 6P lens, 25mm equivalent focal length, auto focus, open-loop focus motor\r\nUltra wide-angle Camera: f/2.2, FOV 119°, 5P lens, fixed focus, 16mm equivalent focal length\r\nMacro camera: f/2.4, FOV 89°, 3P lens, fixed focus\r\nMono camera: f/2.4, FOV 89°, 3P lens, fixed focus\r\n\r\nFront\r\n32MP (f/2.4) FOV 85° 5P\r\nShooting Mode\r\nRear:\r\nPhoto, Video, Night, Expert, Panorama, Portrait, Time-lapse, Slow-motion, Text scanner, and Google Lens.\r\n\r\nFront:\r\nPhoto, Video, Panorama, Portrait, Night, Time-lapse, selfie beautification, and more.\r\n\r\nImage Size\r\nRear:\r\nMaximum size: 6000 x 8000 (48MP)\r\nSupported photo sizes:\r\n3000 x 4000 (4:3)\r\n3000 x 3000 (1:1)\r\n1800 x 4000 (full screen)\r\n2256 x 4000 (16:9)\r\n\r\nFront:\r\nMaximum size: 4896 x 6528 (32MP)\r\nSupported photo sizes:\r\n4896 x 6528 (4:3)\r\n4896 x 4896 (1:1)\r\n2944 x 6528 (full screen)\r\n3680 x 6528 (16:9)\r\n\r\nVideo\r\nRear camera: 4K@30fps, 1080P@30fps, 720P@30fps\r\nVideo Slo-mo: 1080P@120fps, 720P@240fps\r\nEIS for videos: 1080P@30fps\r\nVideo zoom: Digital zoom (1-10X), 4K@30fps, 1080P@30fps, 720P@30fps\r\n\r\nFront\r\n1080P/720P@30fps (default: 720P@30fps)\r\nEIS for videos (1080P/720P@30fps)\r\n\r\nChips\r\nCPU: MediaTek HelioP95\r\nCPU Speed: up to 2.2GHz\r\nCPU Cores: 8 cores\r\nGPU Model: IMG 9XM-HP8 970MHz\r\n\r\nBattery\r\n4220/4310mAh (Min/Typ)\r\nVOOC Charge\r\n30W VOOC Charge\r\n\r\nBiometrics\r\nSupport Hidden Fingerprint Unlock and Face Unlock\r\n\r\nSensors\r\nGeomagnetic sensor\r\nLight sensor\r\nProximity sensor\r\nAccelerometer\r\nGyroscope\r\n\r\nCellular Network\r\nSIM 2: Supported\r\nSIM Card Type: Nano SIM card\r\n\r\nFunctions available on the live network depend on the situations of carrier\'s network and related services deployment.\r\n\r\n2G: GSM 850/900/1800/1900 MHz\r\n3G: UMTS (WCDMA) bands 1/5/8\r\n4G: TD-LTE bands 38/40/41 (194M)\r\n4G: LTE FDD bands (FDD-LTE) 1/3/5/7/8/28\r\nBoth SIM cards 1 and 2 support these frequency bands.\r\n\r\nConnectivity\r\nWLAN: Wi-Fi 2.4GHz, Wi-Fi 5.1GHz, Wi-Fi 5.8GHz, Wi-Fi display\r\nBluetooth Version: 5.1\r\nBluetooth Audio Codec: SBC, AAC, aptX, aptX HD, LDAC\r\nUSB Interface: USB Type C\r\nEarphone Jack: 3.5mm\r\nNFC: Not supported\r\n\r\nOperating System\r\nColorOS 11.1 based on Android 11\r\n\r\nLocation Technology\r\nGNSS: Built-in GPS; A-GPS, BeiDou, GLONASS, Galileo, and QZSS\r\nOthers: Wi-Fi positioning, network-based mobile positioning, and electronic compass\r\nMaps: Google Maps and other third-party maps apps\r\n\r\nIn the box\r\nPhone x1\r\nCharger x1\r\nEarphones x1\r\nUSB Data Cable x1\r\nSIM Ejector Tool x1\r\nSafety Guide x1\r\nQuick Start Guide x1\r\nProtective Case x1', '13500.00', 'product_img3.png', 5, '2022-04-21 12:26:38', '2022-04-21 06:22:47'),
(4, 1, 'Iphone 7 plus', 'The iPhone 7 Plus features all of the camera improvements in the iPhone 7, but in addition to a 28mm wide-angle lens, it has a second 56mm telephoto lens for dual-camera functionality that enables better optical zoom. It also includes a new shallow-depth-of-field portrait mode that uses the two lenses to draw out the portrait subject while blurring the background.\r\n\r\nBoth iPhones have a four-LED flash that\'s 50% brighter and stronger, plus an upgraded 7-megapixel FaceTime HD camera with improved sensor technology and auto image stabilization for better selfies and clearer FaceTime calls.', '150.00', 'product_img4.png', 5, '2022-04-21 12:36:03', '2022-04-21 06:34:44'),
(5, 1, 'Samsung Galaxy S8 ', 'Video Recording\r\n4K video recording at 30 fps\r\n1080p HD video recording at 30 fps or 60 fps\r\n720p HD video recording at 30 fps\r\nVDIS (Video Digital Image Stabilization)\r\nDigital zoom 8x\r\nHigh CRI LED Flash\r\nSlow Motion video support for 720p at 240 fps\r\nHyperlapse video with stabilization\r\nContinuous autofocus video\r\nFace detection\r\nTracking AF\r\nTake 9-megapixel still photos while recording 4K video\r\nPlayback zoom\r\nVideo Location tags\r\n\r\nPerformance\r\nOcta-core (2.3GHz Quad + 1.7GHz Quad), 64 bit, 10nm processor\r\nOcta-core (2.35GHz Quad + 1.9GHz Quad), 64 bit, 10nm processor', '300.00', 'product_img5.png', 5, '2022-04-21 12:43:20', '2022-04-21 06:41:17'),
(6, 1, 'Lenovo Legion 5 Series R7000 ', 'Lenovo Legion 5 Series R7000 / R7000P 2021 Gaming Laptop \r\nModel A: R7000P R7 RTX 3060\r\nOperation System: Windows 10 pro\r\nProcessor: AMD Ryzen 7 5800H\r\nGraphics: NVIDIA GeForce RTX 3060 6GB  130Watts\r\nDisplay: 15.6\" 1920x1080 resolution 165Hz 300 nits 100% sRGB Dolby Vision\r\nMemory: 16GB DDR4 3200MHz\r\nStorage:  512GB NVME PCIe M.2 SSD\r\nInterfaces: I/O: 2x USB 3.2 Type C, 1x 3.5mm Audio Jack, 4x USB 3.2 Gen 1, 1x HDMI 2.1, 1x RJ45,\r\nKeyboard and Touchpad: Backlit\r\nAudio: Realtek Dolby Audio\r\nCamera: 720P HD \r\nWireless Connectivity: Wi-Fi 6 and Bluetooth 5.0-5.1 \r\nBattery and Power: 80Wh \r\nWeight and Dimensions:  2.58kgApproximately 360mm*264mm*21.7mm~26.85mm\r\nIncluded in the Box: Laptop, charger, and quick start guide in Chinese\r\nModel B: R7000P  R7 RTX 3050 Ti\r\nOperation System: Windows 10 pro\r\nProcessor: AMD Ryzen 7 5800H\r\nGraphics: NVIDIA GeForce RTX 3050 Ti GDDR6 4GB 95watts\r\nDisplay: 15.6\" 1920x1080 resolution 165Hz 300 nits 100% sRGB Dolby Vision\r\nMemory: 16GB DDR4 3200MHz\r\nStorage:  512GB NVME PCIe M.2 SSD\r\nInterfaces: I/O: 2x USB 3.2 Type C, 1x 3.5mm Audio Jack, 4x USB 3.2 Gen 1, 1x HDMI 2.1, 1x RJ45,\r\nKeyboard and Touchpad: Backlit\r\nAudio: Realtek Dolby Audio\r\nCamera: 720P HD \r\nWireless Connectivity: Wi-Fi 6 and Bluetooth 5.0-5.1 \r\nBattery and Power: 80Wh \r\nWeight and Dimensions:  2.58kgApproximately 360mm*264mm*21.7mm~26.85mm\r\n\r\nIncluded in the Box: Laptop, charger, and quick start guide in Chinese\r\n\r\nModel C: R7000P R5 RTX 3050 Ti\r\nOperation System: Windows 10 pro\r\nProcessor: AMD Ryzen 5 5600H\r\nGraphics: NVIDIA GeForce RTX 3050 Ti GDDR6 4GB 95watts\r\nDisplay: 15.6\" 1920x1080 resolution 165Hz 300 nits 100% sRGB Dolby Vision\r\nMemory: 16GB DDR4 3200MHz\r\nStorage:  512GB NVME PCIe M.2 SSD\r\nInterfaces: I/O: 2x USB 3.2 Type C, 1x 3.5mm Audio Jack, 4x USB 3.2 Gen 1, 1x HDMI 2.1, 1x RJ45,\r\nKeyboard and Touchpad: Backlit\r\nAudio: Realtek Dolby Audio\r\nCamera: 720P HD \r\nWireless Connectivity: Wi-Fi 6 and Bluetooth 5.0-5.1 \r\nBattery and Power: 80Wh \r\nWeight and Dimensions:  2.58kgApproximately 360mm*264mm*21.7mm~26.85mm\r\n\r\nIncluded in the Box: Laptop, charger, and quick start guide in Chinese\r\n\r\nModel D: R7000 R5 RTX 3050 \r\nOperation System: Windows 10 pro\r\nProcessor: AMD Ryzen 5 5600H\r\nGraphics: NVIDIA GeForce RTX 3050 GDDR6 4GB 95watts\r\nDisplay: 15.6\" 1920x1080 resolution 60Hz 300 nits 100% sRGB Dolby Vision\r\nMemory: 16GB DDR4 3200MHz\r\nStorage:  512GB NVME PCIe M.2 SSD\r\nInterfaces: I/O: 2x USB 3.2 Type C, 1x 3.5mm Audio Jack, 4x USB 3.2 Gen 1, 1x HDMI 2.1, 1x RJ45,\r\nKeyboard and Touchpad: Backlit\r\nAudio: Realtek Dolby Audio\r\nCamera: 720P HD \r\nWireless Connectivity: Wi-Fi 6 and Bluetooth 5.0-5.1 \r\nBattery and Power: 80Wh \r\nWeight and Dimensions:  2.58kgApproximately 360mm*264mm*21.7mm~26.85mm\r\n\r\nIncluded in the Box: Laptop, charger, and quick start guide in Chinese', '75000.00', 'product_img6.png', 5, '2022-04-21 14:27:07', '2022-04-21 08:26:04'),
(7, 1, 'Lenovo 2021 ThinkPad ', 'model name 		ThinkPad E15 G3 Lucienne - 20YG0010KD\r\ncolor				Black\r\noperating system	Free Dos\r\nprocessor		AMD Ryzen 5 5500U Processor\r\ngraphic			AMD Radeon™ Graphics\r\nstorage			256GB SSD M.2 2242 NVME TLC\r\nMemory			DDR4 3200 SODIMM 8GB (8G MB)\r\n					+ 1SLOT UP TO 24GB\r\ndisplay			39.6cm FHD (1920x1080) IPS 30Onits Anti-Glare\r\naudio			Realtek ALC3287 Codec, Dolby Audio\", Dual Array Microphone, \r\n				HARMAN Speakers\r\ncamera			HD 720p (with Thinkshutter)\r\nnetwork			RTL8822CE, 802.11ac Dual Band 2x2 Wi-Fi + Bluetooth 5.0, M.2 card\r\nI/O ports			1x USB 3.2 Gen 1 (Always On), 1x USB 2.0, 1x USB-C 3.2 Gen 1 \r\n				(Data transfer,Supports Power Delivery 3.0 and DisplayPort TM 1.2), \r\n				1x HDMI 1.4b, 1x Ethernet\r\n				(RJ-45), 1x headphone/mic combo\r\nbattery			Up to 10.3 hours 45Wh, support 80% fast charging technology in 1 hour\r\nkeyboard			6-row keyboard, multimedia FN key, number pad, backlit\r\npad				TrackPoint pointing device and Mylar\" surface multi-touch touchpad\r\nsize weight		365 x 240 x 18.9 mm/ 1.7 kg', '30000.00', 'product_img7.png', 5, '2022-04-21 14:30:08', '2022-04-21 08:27:23'),
(8, 1, 'MSI GF63 Thin', 'CPU: Up to AMD Ryzen™ 7 5000 U-Processors\r\nOS: Windows 10 Home\r\nWindows 10 Pro (MSI recommends Windows 10 Pro for business.)\r\n(Free upgrade to Windows 11* when available, see below)\r\nDISPLAY	15.6\" FHD (1920x1080), IPS-Level\r\nGRAPHICS: AMD Radeon™ Graphics\r\nMEMORY	Up to DDR4-3200 Memory Type\r\n2 Slots Number of SO-DIMM Slot\r\nMax 64GB Max Capacity\r\nSTORAGE CAPABILITY: 2x M.2 SSD slot (NVMe PCIe Gen3)\r\nWEBCAM	HD type (30fps@720p)\r\nKEYBOARD: Backlight Keyboard (Single-Color, White)\r\nCOMMUNICATION: 802.11 ax Wi-Fi 6 + Bluetooth v5.1\r\nAUDIO JACK: 1x Mic-in/Headphone-out Combo Jack\r\nI/O PORTS: 1x Micro SD\r\n1x (4K @ 30Hz) HDMI\r\n1x Type-C USB3.2 Gen2\r\n3x Type-A USB3.2 Gen2\r\nBATTERY	3-Cell\r\nAC ADAPTER: 65W adapter\r\nDIMENSION (WXDXH): 356.8 x 233.75 x 18.9 mm\r\nWEIGHT (W/ BATTERY): 1.6 kg', '35000.00', 'product_img8.png', 5, '2022-04-21 14:43:47', '2022-04-21 08:30:44'),
(9, 3, 'Lamborghini Murcielago Toy ', 'The Lamborghini Murcielago, a super sports car, was first manufactured in 2001. Being the first model introduced by the renowned Lamborghini brand in eleven years, the Murcielago quickly garnered worldwide attention. With its sleek, angular design and dramatic scissor doors, the first generation Murcielago coupe is a masterpiece. Paired with all-wheel drive and a Lamborghini V12 engine, the coupe accelerated from 0-62 mph in a mere 3.8 seconds. In 2004, the roadster version was introduced, allowing the same revolutionary specs in an open-top version. In 2006, Lamborghini upgraded the Murcielago with the unveiling of the LP 640 model and produced the last version, known as the Murcielago LP 670 in 2009. Production halted in 2010, with a total Lamborghini Murcielago specs production number of 4,099.', '5000.99', 'product_img9.png', 5, '2022-04-21 15:00:16', '2022-04-21 08:56:33'),
(10, 5, 'Non-stick Frying Pan ', 'Brand:others\r\nStyle: Korean\r\nMaterial: aluminum alloy\r\nFrying Pan Diameter: 26cm\r\nFrying Pan depth: 5cm\r\n2.0mm Frying Pan Thickness\r\nFeatures: Less oily smoke, non-stick pan\r\n', '2000.00', 'product_img10.png', 5, '2022-04-24 13:32:00', '2022-04-24 07:30:18'),
(11, 5, 'Casserole Set ', 'Product Description:\r\nKey Features\r\nIdeal for cooking and food serving. \r\nHigh-performance healthy coating system \r\nModern style: Design novel \r\nEasy to clean: Non-stick surface \r\nEco-friendly: Fast heat transfer, uniform heating, saves energy by up to 40%  \r\n\r\nGood quality Non-stick coating with durable granite interior\r\n\r\nStock Pot High-Quality Kitchenware 3pcs Set\r\nPerfect for use on all stovetops: Gas, electric, ceramic, glass\r\nFreezer safe\r\nEasy-grip handles\r\nEasy to clean ceramic surface\r\nMaterials: Aluminum\r\nCare instructions: Dishwasher safe\r\n\r\nSizes: 16cm, 18cm, 20cm.\r\nMetallic colorful stainless steel\r\nSuper lightweight\r\n', '7000.00', 'product_img11.png', 5, '2022-04-24 13:35:50', '2022-04-24 07:34:31'),
(12, 5, 'Stainless Steel Steak Spatula', 'The frying shovel has paper-thin edge design, which is practical and handy for the user to cook or bake.\r\nWith its filtering function, the fish slice shovel can stir-fry the food and remove the food from the pot without taking too much oil.\r\nMade of 430 Stainless Steel, it is handy and durable.\r\nThe length of the shovel is 28cm, the width is 8.2cm and  the edge thickness is 0.13cm.\r\nThis frying shovel is perfect for home, kitchen, cooking, baking and so on.\r\nItem Name: Frying Shovel\r\nMaterial: 430 Stainless Steel\r\n\r\nSize Details:\r\nFrying Shovel Size: 28cm x 8.2cm x 1.5cm/ 11.02\" x 3.23\" x 0.59\" (Approx.)\r\nEdge Thickness: 0.13cm/ 0.05\" (Approx.)', '500.00', 'product_img12.png', 5, '2022-04-24 13:47:14', '2022-04-24 07:45:53'),
(13, 5, 'Non-stick bakeware', 'Easy to demould, use less cooking oil and baking time to get an excellent non-stick carbon steel cake mold. Easy to remove the bread/cake from the pan. Multifunctional baking tray, very suitable for making doughnuts, muffin cakes, bread, mousse, custard and cooked food, and also very suitable for baking birthday cakes, cheese cakes, coffee cakes, etc. Non-sticky, you can easily remove food from all molds without affecting the appearance. Long-lasting non-sticky, non-toxic, odorless and easy to clean. Provides excellent food release. It is easy to clean. It is recommended to clean the pot by hand and avoid using metal utensils. Use silicone tools with them, non-stick pans need to do this to keep them. Dishwasher safe.\r\n\r\nMaterial: Use high-quality materials. It is very strong. Reliable service: We provide you with reliable after-sales service. If you have any questions about our products or your package, please feel free to contact us.', '300.00', 'product_img13.png', 5, '2022-04-24 13:50:24', '2022-04-24 07:47:55'),
(14, 5, 'Meat grinder', 'Item name:Meat grinder\r\nWeight:600g/700g\r\nType:kitchen accessories\r\n\r\nItem: Meat Grinder\r\nuse 1: for Pasta Maker Noodles Milling Coffee Making\r\nuse 2: Soybean Milk Making\r\nuse 3: Sausage Stuffer\r\nuse 4:Minced meat\r\n\r\nMaterial: Aluminum alloy', '4000.00', 'product_img14.png', 5, '2022-04-24 13:50:24', '2022-04-24 07:47:55'),
(15, 5, 'Multifunctional storage cabinet', 'Drawer storage box, buckle design, not afraid of dumping, avoid falling when the drawer is pulled\r\nHealth and environmental protection are close to \"zero formaldehyde\"\r\nThe support area is large, the cabinet is very stable, and it is resistant to pressure and fall\r\nReinforced structure, strong bearing capacity, durable and not deformed\r\nConvenient and space-saving to meet different needs\r\n\r\nMaterial: pp material\r\nFace width: 48cm\r\nApplicable: bedroom, study, living room\r\nmaterial: plastic\r\n\r\n✨Six functions✨\r\n 1. Reinforced and thickened, safe and durable\r\n 2. Large space, multi-layer style\r\n 3. Stable and anti-falling, durable load-bearing\r\n 4. Easy to store, wonderful use of space\r\n 5. Environmentally friendly and healthy, food-grade material\r\n 6. Increase the capacity and store without pressure', '9000.00', 'product_img15.png', 5, '2022-04-24 13:52:52', '2022-04-24 07:51:49'),
(16, 5, 'Mosquito Net Canopy', 'Size:\r\n#1 1.5m\r\n#2 1.8m\r\n#3 2m\r\n\r\n100% Polyester\r\nEasy assembly\r\nGood For Bed\r\nAdd romance and elegance to any bedroom\r\nKeeps out mosquitoes, flies and other annoying insects\r\nEffectively protects your baby from flying insects, such as mosquitoes, flies, bugs and so on\r\nThe whole family can sleep inside\r\nConvenient to store\r\nMade up of high quality netting\r\nVery convenient to use\r\nVisible mesh allows you to check up on your baby anytime\r\n\r\nType: Mosquito Net\r\nMaterial: Polyester + Steel Wire\r\nFeatures: Translucent, Useful, Safe, Durable\r\n\r\nIt can keep out all the terrible and annoying flying bugs/mosquitoes/insects at night.\r\nThis net also can be used outdoors as a dramatic way to protect from flying insects.', '500.00', 'product_img16.png', 5, '2022-04-24 13:54:34', '2022-04-24 07:53:33'),
(17, 5, 'Metal Gasoline Can ', '1. Made out of premium steel material, leak proof, anti-corrosive.\r\n2. The gasoline can come with 3 handles, and can be held by two persons to save labor when you lift the tank.\r\n3. Sealed and stable for long-distance transportation, applicable for transporting water, fuel, petrol, diesel, bioethanol, alcohol.\r\n4. Meticulous workmanship to ensure that you will not leak oil or scratch the car during use.\r\n5. Thicker design, more durable.\r\n\r\nSpecifications:\r\nMaterial: Carbon steel\r\nColor: Green\r\nCapacity: 10L\r\nWeight: 1.5kg\r\nSize: 29*12.7*38cm\r\nThickness: 0.8mm', '700.00', 'product_img17.png', 5, '2022-04-24 13:58:23', '2022-04-24 07:55:54'),
(18, 5, 'Travel Portable Medicine Pouch ', 'Waterproof Oxford cloth, capacity: 2L, 4L, high hardness, large capacity.\r\nProduct Category: Medical Kit pouch\r\nProduct Material:oxford\r\nSize: 23x13x7.5cm\r\nWeight: 0.1kg\r\n\r\n Made of premium quality 600D oxford fabric, Durable and Waterproof, provides protection for your medical supplies.\r\n\r\nSize: 23 * 13 * 7.5 cm,standard size and lightweight, excellent for your luggage/handbag/glove box or put in the car, portable and easy to carry around, go hiking, camping, traveling or trip etc.\r\n\r\nMesh Bag & Waterproof Bag Design: There are 1 main compartment, 1 Inside mesh pocket, 3 Elastic band slots, 2 Inside transparent pouch, big content, classify the medicine easily and visible for easy catching .\r\n\r\nMulti-Function: This medicine storage bag is perfect for emergency medicines, first aid accessories etc, you also could take it as a cosmetic bag for the cosmetics and jewelries or for the sanitary napkin.\r\n\r\nThe first aid kit works well both indoors and outdoors. Suitable for home, hiking, camping, office, caravan, etc. Put emergency medicines or tools in your bag, take it with you when you are outdoors or on a trip, and travel safely and sightseeing without worry.', '2000.00', 'product_img18.png', 5, '2022-04-24 13:58:23', '2022-04-24 07:55:54'),
(19, 5, 'Velvet Fleece Queen Size Blanket ', 'Features:\r\n*Coral fleece blanket, soft and comfortable, multi-color optional.\r\n*Bed blanket, sofa blanket\r\n\r\nSpecification:\r\nMaterial: Velvet Fleece (Ultra soft)\r\nSize: 180(W) x 200(L)cm\r\nWash Style: Mechanical Wash\r\nShape: Rectangle\r\nPattern Type: Solid\r\nPackaging Content: 1x Blanket', '270.00', 'product_img19.png', 5, '2022-04-24 14:00:05', '2022-04-24 07:59:26'),
(20, 1, 'Mitsushi Electronics Power Bank\r\n\r\n', 'Brand Name: Mitsushi\r\nPowerBank Capacity: Power Bank 60000mAh\r\nBattery Type: Li-polymer Battery\r\nFeatures 1: 22.5W Quick Charging With Dual USB Flashlight\r\nFeatures 2:Easy to carry，with lanyard，it can be taken anywhere to keep power\r\nFeatures 3 :4 Dual USB Output + 1 Type C,Support five devices to charge at the same time\"\r\nFeatures 4: Led Digital Display, can clearly see the remaining power\r\nOutput Interface: Four USB\r\nOutput Interface: USB-Type C\r\nOrigin: CN(Origin)\r\nInput Interface: USB Type C\r\nType: Portable Fast Charger Power Bank\r\nSupport Quick Charge Technology: Output/Input Two-way Quick Charge\r\nMax input/output: 22.5W\r\nPower Bank Color: Black\r\nType: Power Bank//Portable Charger/High-capacity\r\nPowerBank Model: Mitsushi MF60\r\nOutput USB 1: 5V 3A/9V 2A/12V 1.5A\r\nOutput USB 2: 5V 3A/9V 2A/12V 1.5A\r\nOutput USB 3:5V 3A/9V 2A/12V 1.5A\r\nOutput USB 4(SCP): 4.5V 5A or 5V 4.5A or 9V 2A or 12V 1.5A\r\nOutput (Type-c): 5V 3A/9V 2A/12V 1.5A\r\nInput(Type-C): 5V 3A/9V 2A\r\nFast Charging : 22.5W Fast Charging for cellphones\r\nTIPS：Precautions for the first use of large-Capacity Powerbank1.Firstly discharge the power bank to 0% once you recieved it.And then recharge the power bank to 100% (fully recharged).No interruption is allowed during charging to complete 100% battery activation. You can start to recharge any device by this power bank and Led display will show battery capacity correctly\r\nNOTE:During the 0%-100% battery charging, if the charging is interrupted due to blackout, loose charging cable, powerbank being taking away, etc, please repeat the above steps to activate the battery again.', '3000.00', 'product_img20.png', 5, '2022-04-24 17:42:03', '2022-04-24 11:40:44'),
(21, 1, 'Air Humidifier Electric Aroma Diffuser', 'Size: approx. 100 x 100 x 115 mm\r\nPackage weight: 205 g\r\nAC Apaptor: DC 5V\r\nNominal power: 3 watts\r\nWater capacity: 300ml', '1700.00', 'product_img21.png', 5, '2022-04-24 17:45:38', '2022-04-24 11:44:32'),
(22, 2, 'Katinko Ointment Original', 'Methyl Salicylate + Menthol + Camphor (Katinko) helps relieve minor body pains and itch, muscle strain, neck and shoulder stiffness, sprain, back pain, headache, colds, travel sickness, bruises, flatulence, insect bite.\r\nAvailable in 10g.\r\nSold per piece.\r\nFDA Registration No.: DRHR-1151\r\nValidity:         04 June 2025\r\nManufacturer: Greenstone Pharmaceutical H.K., Inc.\r\n4809012413046  ', '99.00', 'product_img22.png', 5, '2022-04-24 17:50:39', '2022-04-24 11:49:22'),
(23, 3, 'Pampers Baby Dry Diaper', 'Front-to-Back Absorption: Pampers Baby Dry Diaper Pants has Magic Gel Channels that evenly distributes and locks away pee, protecting baby from excessive wetness.\r\nAnti-Leak Guards: The diapers have a snug, anti-sag fit so that baby can move freely without leakage.\r\nAnti-Irritation Layer: With baby lotion to protect baby’s naturally sensitive skin from diaper rashes.\r\nAll-Around Stretchy Waistband: Moves with baby for a customized fit & helps prevent leakage.\r\nBreathable to Let Hot Air Out: Made with light & breathable materials to help air flow.\r\nEasy-On & Easy Tear-Off: Pampers Pants makes changing easy for active babies.\r\nManufacturing date is in YYYYMMDD format\r\n', '100.00', 'product_img23.png', 5, '2022-04-24 17:57:32', '2022-04-24 11:56:24'),
(24, 3, 'T-rex High Quality Toy', '5 inches Height \r\n11 inches length \r\nSolid PVC\r\ncollector\'s item \r\nBrand New no box\r\nSuitable for kids 8 years old and above \r\nWe will secure it with bubble wrap. \r\nHappy shopping and stay safe ', '300.00', 'product_img24.png', 5, '2022-04-24 18:01:04', '2022-04-24 11:59:38'),
(25, 3, 'Doll Baby', 'HAPPY BABY DOLL WITH SOUNDS HAHA \r\nBRAND ：NO BRAND\r\nAGES ：2+ YEARS OLD\r\nGOOD GIFT FOR CHILDREN \r\nSIZE：38CM LENGTH\r\n\r\nTake it out of his clothes（third picture）, take out the plastic, there will be a sound . \r\n\r\nbaby#sounds#amazingtoys ', '400.00', 'product_img25.png', 5, '2022-04-24 18:04:44', '2022-04-24 12:03:15'),
(26, 6, 'Polo Ralph Lauren Striped-Logo Fleece Hoodie Navy', 'In addition to our signature embroidered Pony, this lightweight hoodie features our logo in striped patterns inspired by Polo neckwear. Size medium has a 27½\" body length (front and back), an 18½\" shoulder, a 44½\" chest, and a 35\" sleeve length. Sleeve length is taken from the center back of the neck and changes 1\" between sizes. Drawstring hood. Long sleeves with ribbed cuffs. \"Polo\" and \"Ralph Lauren\" script printed at the center front. Kangaroo pocket. Ribbed hem. Signature embroidered Pony at the right sleeve. Cotton, polyester. Machine washable. Imported. Model is 6\'1\"/185 cm and wears a size medium.', '500.00', 'product_img26.png', 5, '2022-04-24 18:09:18', '2022-04-24 12:08:14'),
(27, 4, 'Full Groceries', 'PACKAGING\r\nAll Items are handled carefully by our Team. We don\'t ship broken / Damage items. We use bubble wrap, box, recycled paper in our packaging and put FRAGILE tape to heavy pouched or package. \r\nAny damage in the items are not our fault. We are not in control how the courier handled our items.\r\n\r\nNote:\r\nBuy with Confidence. Save your money from FAKE Items selling online. \r\n100% of our Items are Original / Authentic please do not compare our prices to FAKE products. \r\n', '500.00', 'product_img27.png', 5, '2022-04-24 18:15:08', '2022-04-24 12:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `created_at`, `modified_at`) VALUES
(1, 'electronic devices', '2022-04-21 05:34:22', '2022-04-20 23:33:45'),
(2, 'health and beauty', '2022-04-21 05:36:16', '2022-04-20 23:34:53'),
(3, 'babies and toys', '2022-04-21 05:36:16', '2022-04-20 23:34:53'),
(4, 'groceries and pets', '2022-04-21 05:37:24', '2022-04-20 23:36:54'),
(5, 'home and living', '2022-04-21 05:37:24', '2022-04-20 23:36:54'),
(6, 'fashion accesories', '2022-04-21 05:37:24', '2022-04-20 23:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_comment`
--

CREATE TABLE `product_comment` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_comment`
--

INSERT INTO `product_comment` (`id`, `product_id`, `user_id`, `comment`, `created_at`) VALUES
(418, 10, 4, 'lkjdfdf', '2022-05-13 20:57:55'),
(419, 10, 4, 'lkdjfgdfg', '2022-05-13 20:57:56'),
(420, 1, 4, 'skdlfjklsdf', '2022-05-13 20:58:07'),
(421, 1, 4, 'sdkljsdf', '2022-05-13 20:58:08'),
(422, 1, 4, 'lksjdfklsdf', '2022-05-13 20:58:09'),
(423, 1, 4, 'lksjdflksdf', '2022-05-13 20:58:10'),
(424, 1, 4, 'test', '2022-05-13 21:09:41'),
(425, 1, 4, 'test', '2022-05-13 21:09:42'),
(426, 1, 4, 'test', '2022-05-13 21:09:43'),
(427, 1, 4, 'kljld', '2022-05-13 21:09:46'),
(428, 1, 4, 'dfgdfg', '2022-05-13 21:09:47'),
(429, 1, 4, '', '2022-05-13 21:09:47'),
(430, 1, 4, '', '2022-05-13 21:09:47'),
(431, 1, 4, 'test', '2022-05-13 21:09:51'),
(432, 1, 4, 'omarmorales', '2022-05-13 21:10:06'),
(433, 2, 4, 'test', '2022-05-13 21:10:12'),
(434, 2, 4, 'tesdfsd', '2022-05-13 21:10:15'),
(435, 2, 4, 'sdf', '2022-05-13 21:10:15'),
(436, 2, 4, 'sdf', '2022-05-13 21:10:16'),
(437, 2, 4, 'sdf', '2022-05-13 21:10:16'),
(438, 2, 4, 'sdf', '2022-05-13 21:10:16'),
(439, 2, 4, 's', '2022-05-13 21:10:16'),
(440, 2, 4, 'df', '2022-05-13 21:10:16'),
(441, 2, 4, 's', '2022-05-13 21:10:16'),
(442, 2, 4, 'df', '2022-05-13 21:10:16'),
(443, 2, 4, 's', '2022-05-13 21:10:16'),
(444, 2, 4, 'df', '2022-05-13 21:10:16'),
(445, 2, 4, 'sdfsdfsdf', '2022-05-13 21:10:20'),
(446, 1, 10, 'test', '2022-05-14 17:46:21'),
(447, 1, 10, 'test', '2022-05-14 17:46:22'),
(448, 1, 10, 'test', '2022-05-14 17:46:23'),
(449, 1, 10, 'test', '2022-05-14 17:46:24'),
(450, 1, 10, 'test', '2022-05-14 17:46:24'),
(451, 1, 10, 'test', '2022-05-14 17:46:25'),
(452, 1, 10, 'test', '2022-05-14 17:46:25'),
(453, 2, 10, 'mahal naman niyan!', '2022-05-14 17:47:29'),
(454, 5, 10, 'test', '2022-05-14 18:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email_address` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email_address`, `password`, `created_at`) VALUES
(4, 'omarmorales@gmail.com', '09272162227', '2022-04-20 18:35:18'),
(10, 'marlonadova@gmail.com', 'adovamarlon', '2022-04-22 12:35:23'),
(14, 'justinmorales@gmail.com', 'justinmorales', '2022-05-08 01:25:14'),
(15, 'jomarmorales@gmail.com', 'jomarmorales', '2022-05-08 05:30:33'),
(16, 'juan07@gmail.com', 'juanjuan', '2022-05-09 20:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `house_address` varchar(150) NOT NULL,
  `municipality_city` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `first_name`, `surname`, `mobile`, `house_address`, `municipality_city`, `barangay`) VALUES
(9, 10, 'Marlon', 'Adova', '09272162227', 'ankara building SAN AUGUSTINE LAW BLDG SAN SEBASTIAN COLLEGE CM RECTO, QUIAPO', 'Metro Manila, Manila', 'Tondo'),
(10, 4, 'Omar', 'Morales', '09121214111313', 'Blk 5343 23423', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `user_payment`
--

CREATE TABLE `user_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `account_no` int(11) NOT NULL,
  `expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bag_item`
--
ALTER TABLE `bag_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_comment`
--
ALTER TABLE `product_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bag_item`
--
ALTER TABLE `bag_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=742;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_comment`
--
ALTER TABLE `product_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bag_item`
--
ALTER TABLE `bag_item`
  ADD CONSTRAINT `bag_item_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `bag_item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`);

--
-- Constraints for table `product_comment`
--
ALTER TABLE `product_comment`
  ADD CONSTRAINT `product_comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `product_comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD CONSTRAINT `user_payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
