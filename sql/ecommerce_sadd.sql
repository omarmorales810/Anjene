-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2022 at 09:46 AM
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
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `quantity` int(11) NOT NULL,
  `SKU` varchar(12) NOT NULL,
  `image` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `description`, `price`, `quantity`, `SKU`, `image`, `created_at`, `modified_at`) VALUES
(1, 1, 'Apple Watch Series 6 GPS with Sport Band', 'Apple Watch Series 6 lets you measure your blood oxygen level with a revolutionary sensor and app. (1) Take an ECG from your wrist. (2) See your fitness metrics on the enhanced Always-On Retina display, now 2.5 times brighter outdoors when your wrist is down. Set a bedtime routine and track your sleep. And reply to calls and messages right from your wrist. It’s the ultimate device for a healthier, more active, more connected life.\n\n•	GPS model lets you take calls and reply to texts from your wrist\n•	Measure your blood oxygen with a sensor and app (1)\n•	Check your heart rhythm with the ECG app (2)\n•	The Always-On Retina display is 2.5x brighter outdoors when your wrist is down\n•	S6 SiP is up to 20% faster than Series 5\n•	5GHz Wi-Fi and U1 Ultra Wideband chip\n•	Track your daily activity on Apple Watch and see your trends in the Fitness app on iPhone\n•	Measure workouts like running, walking, cycling, yoga, swimming, and dance\n•	Swimproof design (3)\n•	Sync your favorite music and podcasts\n•	High and low heart rate notifications and irregular heart rhythm notification (2)\n•	Built-in compass and real-time elevation readings\n•	Can detect if you’ve taken a hard fall, then automatically call emergency services for you\n•	Emergency SOS lets you get help from your wrist (4)\n•	watchOS 7 with sleep tracking, cycling directions, and customizable watch faces\n•	Aluminum cases available\n\nApple Watch Series 6 requires an iPhone 6s or later with iOS 14 or later.\n(1) Blood Oxygen app measurements are not intended for medical use, including self-diagnosis or consultation with a doctor, and are only designed for general fitness and wellness purposes. \n(2) The ECG app and irregular rhythm notification require the latest versions of watchOS and iOS and are not intended for use by people under 22 years old. The ECG app is available on Apple Watch Series 4 or later. The irregular rhythm notification is not designed for people who have been previously diagnosed with atrial fibrillation (AFib).\n(3) ISO standard 22810:2010. Appropriate for shallow-water activities like swimming. Submersion below shallow depth and high-velocity water activities not recommended.\n(4) To use Emergency SOS, your iPhone needs to be nearby. If your iPhone isn’t nearby, your Apple Watch needs to be connected to a known Wi-Fi network and you must set up Wi-Fi Calling.\n\nWhat\'s in the box\n1x Watch Case\n1x USB to Lightning cable with induction charging puck\n1x Instruction Manual\n1x Sport Band', '22490.00', 99, 'Rds2520m', 'product_img1.png', '2022-04-21 06:45:29', '2022-04-21 00:41:14'),
(2, 1, 'Original Nokia 3210 Factory Unlock Rare Vintage Phone', 'Original and extremely rare Nokia 3210. Original housing and case with minimal scratches. The phone has been tested rigorously. All working perfectly - call text, charging, microphone, earpieces, speaker, and battery standby test. A collector\'s item must-have.\n\nThis is a vintage phone to the next level, a 22-year old phone still working perfectly in 2021. You\'re not buying this for its technology, but the exclusivity of owning one of Nokia\'s technological leapfrog in 1999. \n\nNOTE: The battery is no longer original but we use a brand new and high-quality battery (also hard to find). We have tested it and the phone lasted the same as the original one. If you need an extra battery, we also sell batteries separately.\n\nVARIATION:\n• Brandnew Quality & Factory Unlock - With 100% original case and housing that is almost no scratch. The phone looks perfect like it just came from the factory. 100% working and openline, any SIM will work. High Quality Battery with brand new battery cells.\n\n• Factory Unlock - With 100% original case and housing with minimal scratches. 100% working and openline, any SIM will work. High Quality Battery with brand new battery cells.\n\n• Secondhand Quality - Either lock to Smart or Factory Unlock with replacement case,  some case scratches and with slight phone modification such as back light has been changed. Class A battery.\n\nFEATURE HIGHLIGHTS:\n• First phone with Internal Antenna\n• Customizable Ringtones\n• 5 Liner Monochrome Display\n• 3 Built-in Games: Rotation, Snake, and Memory\n\nPRODUCT SPECIFICATION:\n• Brand: Nokia\n• Model: 3210\n• Housing Material: Durable Polycarbonate\n• Display: 5 Liner Monochrome Display\n• SIM Size: Mini\n• Games: Rotation, Snake, and Memory\n• Battery: BML-3 Lithium-Ion 2.4V\n• Customizable Case: Yes\n• Weight: 151g (5.33 oz)\n\nWHAT\'S IN THE BOX:\n• Nokia 3210\n• Big  Pin Charger\n• BML-3 Battery', '8585.00', 7, 'f42Omdf27M', 'product_img2.png', '2022-04-21 12:21:47', '2022-04-21 06:18:44'),
(3, 1, 'OPPO A94 8+128GB | 6.43\" Screen | 48MP AI Quad Camera | 30W VOOC Flash Charge Smartphone', 'Features\r\n\r\nAI Color Portrait Video\r\n\r\nDual-View Video\r\n\r\n30W VOOC Flash Charge 4.0\r\n\r\n4310mAh Large Battery\r\n\r\n\r\n\r\nSize and Weight\r\n\r\nHeight: About 160.1mm\r\n\r\nWidth: About 73.2mm\r\n\r\nThickness: About 7.8mm\r\n\r\nWeight: About 172g\r\n\r\nProduct size and weight may vary by configuration, manufacturing process and measurements. All specifications are subject to the actual product.\r\n\r\n\r\n\r\nMemory\r\n\r\n8GB RAM + 128GB ROM\r\n\r\nThe actual RAM and ROM available will be less than the values above due to several factors. For example, it takes some RAM to run the OS and it takes some ROM to install the OS and some apps.\r\n\r\nRAM Type: LPDDR4X @ 1866MHz\r\n\r\nExternal Memory: Supported\r\n\r\nUSB Version: USB 2.0\r\n\r\nUSB OTG: Supported\r\n\r\nThe available internal storage may be smaller as part of the internal storage is occupied by software. Actual memory space may change due to application updates, user operations, and other related factors.\r\n\r\n\r\n\r\nDisplay\r\n\r\nSize: 6.43\"(16.34cm)\r\n\r\n6.43 inches is the diagonal length when the four rounded corners of the screen are extended into right angles, the actual size is smaller.\r\n\r\nScreen Ratio: 90.8%\r\n\r\nResolution: 2400 x 1080 (FHD+)\r\n\r\nRefresh Rate: 60Hz\r\n\r\nTouch Sampling Rate: 135Hz (Normal), 180Hz (Game mode)\r\n\r\nColour Depth: 16 million (8-bit)\r\n\r\nColour Gamut: 92% DCI-P3 (typical value)/100% sRGB (typical value)\r\n\r\nPixel Density: 409PPI\r\n\r\nContrast Ratio: 1000000:1\r\n\r\nBrightness: 430nits(Normal); 600nits (HBM); 800nits(Peak value)/All of these are typical values.\r\n\r\nPanel: AMOLED\r\n\r\n\r\n\r\nCamera\r\n\r\nRear\r\n\r\nMain camera: f/1.7, FOV 79°, 6P lens, 25mm equivalent focal length, auto focus, open-loop focus motor\r\n\r\nUltra wide-angle Camera: f/2.2, FOV 119°, 5P lens, fixed focus, 16mm equivalent focal length\r\n\r\nMacro camera: f/2.4, FOV 89°, 3P lens, fixed focus\r\n\r\nMono camera: f/2.4, FOV 89°, 3P lens, fixed focus\r\n\r\nFront\r\n\r\n32MP (f/2.4) FOV 85° 5P\r\n\r\nShooting Mode\r\n\r\nRear:\r\n\r\nPhoto, Video, Night, Expert, Panorama, Portrait, Time-lapse, Slow-motion, Text scanner, and Google Lens.\r\n\r\nFront:\r\n\r\nPhoto, Video, Panorama, Portrait, Night, Time-lapse, selfie beautification, and more.\r\n\r\nImage Size\r\n\r\nRear:\r\n\r\nMaximum size: 6000 x 8000 (48MP)\r\n\r\nSupported photo sizes:\r\n\r\n3000 x 4000 (4:3)\r\n\r\n3000 x 3000 (1:1)\r\n\r\n1800 x 4000 (full screen)\r\n\r\n2256 x 4000 (16:9)\r\n\r\nFront:\r\n\r\nMaximum size: 4896 x 6528 (32MP)\r\n\r\nSupported photo sizes:\r\n\r\n4896 x 6528 (4:3)\r\n\r\n4896 x 4896 (1:1)\r\n\r\n2944 x 6528 (full screen)\r\n\r\n3680 x 6528 (16:9)\r\n\r\n\r\n\r\nVideo\r\n\r\nRear\r\n\r\nRear camera: 4K@30fps, 1080P@30fps, 720P@30fps\r\n\r\nVideo Slo-mo: 1080P@120fps, 720P@240fps\r\n\r\nEIS for videos: 1080P@30fps\r\n\r\nVideo zoom: Digital zoom (1-10X), 4K@30fps, 1080P@30fps, 720P@30fps\r\n\r\nFront\r\n\r\n1080P/720P@30fps (default: 720P@30fps)\r\n\r\nEIS for videos (1080P/720P@30fps)\r\n\r\n\r\n\r\nChips\r\n\r\nCPU: MediaTek HelioP95\r\n\r\nCPU Speed: up to 2.2GHz\r\n\r\nCPU Cores: 8 cores\r\n\r\nGPU Model: IMG 9XM-HP8 970MHz\r\n\r\n\r\n\r\nBattery\r\n\r\n4220/4310mAh (Min/Typ)\r\n\r\nVOOC Charge\r\n\r\n30W VOOC Charge\r\n\r\n\r\n\r\nBiometrics\r\n\r\nSupport Hidden Fingerprint Unlock and Face Unlock\r\n\r\n\r\n\r\nSensors\r\n\r\nGeomagnetic sensor\r\n\r\nLight sensor\r\n\r\nProximity sensor\r\n\r\nAccelerometer\r\n\r\nGyroscope\r\n\r\n\r\n\r\nCellular Network\r\n\r\nSIM 2: Supported\r\n\r\nSIM Card Type: Nano SIM card\r\n\r\nFunctions available on the live network depend on the situations of carrier\'s network and related services deployment.\r\n\r\n2G: GSM 850/900/1800/1900 MHz\r\n\r\n3G: UMTS (WCDMA) bands 1/5/8\r\n\r\n4G: TD-LTE bands 38/40/41 (194M)\r\n\r\n4G: LTE FDD bands (FDD-LTE) 1/3/5/7/8/28\r\n\r\nBoth SIM cards 1 and 2 support these frequency bands.\r\n\r\n\r\n\r\nConnectivity\r\n\r\nWLAN: Wi-Fi 2.4GHz, Wi-Fi 5.1GHz, Wi-Fi 5.8GHz, Wi-Fi display\r\n\r\nBluetooth Version: 5.1\r\n\r\nBluetooth Audio Codec: SBC, AAC, aptX, aptX HD, LDAC\r\n\r\nUSB Interface: USB Type C\r\n\r\nEarphone Jack: 3.5mm\r\n\r\nNFC: Not supported\r\n\r\n\r\n\r\nOperating System\r\n\r\nColorOS 11.1 based on Android 11\r\n\r\n\r\n\r\nLocation Technology\r\n\r\nGNSS: Built-in GPS; A-GPS, BeiDou, GLONASS, Galileo, and QZSS\r\n\r\nOthers: Wi-Fi positioning, network-based mobile positioning, and electronic compass\r\n\r\nMaps: Google Maps and other third-party maps apps\r\n\r\n\r\n\r\nIn the box\r\n\r\nPhone x1\r\n\r\nCharger x1\r\n\r\nEarphones x1\r\n\r\nUSB Data Cable x1\r\n\r\nSIM Ejector Tool x1\r\n\r\nSafety Guide x1\r\n\r\nQuick Start Guide x1\r\n\r\nProtective Case x1', '13500.00', 10, 'f42Omdf27M', 'product_img3.png', '2022-04-21 12:26:38', '2022-04-21 06:22:47'),
(4, 1, 'Iphone 7 USA variant original sim 4G LTE original 100% ios15 32GB 128GB', 'The iPhone 7 Plus features all of the camera improvements in the iPhone 7, but in addition to a 28mm wide-angle lens, it has a second 56mm telephoto lens for dual-camera functionality that enables better optical zoom. It also includes a new shallow-depth-of-field portrait mode that uses the two lenses to draw out the portrait subject while blurring the background.\r\n\r\nBoth iPhones have a four-LED flash that\'s 50% brighter and stronger, plus an upgraded 7-megapixel FaceTime HD camera with improved sensor technology and auto image stabilization for better selfies and clearer FaceTime calls.', '150.00', 3, 'f42Omdf27M', 'product_img4.png', '2022-04-21 12:36:03', '2022-04-21 06:34:44'),
(5, 1, 'Samsung Galaxy S8 G950U Snapdragon 4GB RAM 64GB ROM 5.8 Octa Core', 'Video Recording\r\n\r\n4K video recording at 30 fps\r\n1080p HD video recording at 30 fps or 60 fps\r\n720p HD video recording at 30 fps\r\nVDIS (Video Digital Image Stabilization)\r\nDigital zoom 8x\r\nHigh CRI LED Flash\r\nSlow Motion video support for 720p at 240 fps\r\nHyperlapse video with stabilization\r\nContinuous autofocus video\r\nFace detection\r\nTracking AF\r\nTake 9-megapixel still photos while recording 4K video\r\nPlayback zoom\r\nVideo Location tags\r\n\r\n\r\n\r\nPerformance\r\n\r\nOcta-core (2.3GHz Quad + 1.7GHz Quad), 64 bit, 10nm processor\r\nOcta-core (2.35GHz Quad + 1.9GHz Quad), 64 bit, 10nm processor', '300.00', 99, 'f42Omdf27M', 'product_img5.png', '2022-04-21 12:43:20', '2022-04-21 06:41:17'),
(6, 1, 'Lenovo Legion 5 Series R7000 / R7000P 2021 Brand New Gaming Laptop Series 15.6\" 165Hz 16GB RAM 512GB SSD', 'Lenovo Legion 5 Series R7000 / R7000P 2021 Gaming Laptop \r\n\r\nModel A: R7000P R7 RTX 3060\r\n\r\nOperation System: Windows 10 pro\r\n\r\nProcessor: AMD Ryzen 7 5800H\r\n\r\nGraphics: NVIDIA GeForce RTX 3060 6GB  130Watts\r\n\r\nDisplay: 15.6\" 1920x1080 resolution 165Hz 300 nits 100% sRGB Dolby Vision\r\n\r\nMemory: 16GB DDR4 3200MHz\r\n\r\nStorage:  512GB NVME PCIe M.2 SSD\r\n\r\nInterfaces: I/O: 2x USB 3.2 Type C, 1x 3.5mm Audio Jack, 4x USB 3.2 Gen 1, 1x HDMI 2.1, 1x RJ45,\r\n\r\nKeyboard and Touchpad: Backlit\r\n\r\nAudio: Realtek Dolby Audio\r\n\r\nCamera: 720P HD \r\n\r\nWireless Connectivity: Wi-Fi 6 and Bluetooth 5.0-5.1 \r\n\r\nBattery and Power: 80Wh \r\n\r\nWeight and Dimensions:  2.58kgApproximately 360mm*264mm*21.7mm~26.85mm\r\n\r\nIncluded in the Box: Laptop, charger, and quick start guide in Chinese\r\n\r\n\r\nModel B: R7000P  R7 RTX 3050 Ti\r\n\r\nOperation System: Windows 10 pro\r\n\r\nProcessor: AMD Ryzen 7 5800H\r\n\r\nGraphics: NVIDIA GeForce RTX 3050 Ti GDDR6 4GB 95watts\r\n\r\nDisplay: 15.6\" 1920x1080 resolution 165Hz 300 nits 100% sRGB Dolby Vision\r\n\r\nMemory: 16GB DDR4 3200MHz\r\n\r\nStorage:  512GB NVME PCIe M.2 SSD\r\n\r\nInterfaces: I/O: 2x USB 3.2 Type C, 1x 3.5mm Audio Jack, 4x USB 3.2 Gen 1, 1x HDMI 2.1, 1x RJ45,\r\n\r\nKeyboard and Touchpad: Backlit\r\n\r\nAudio: Realtek Dolby Audio\r\n\r\nCamera: 720P HD \r\n\r\nWireless Connectivity: Wi-Fi 6 and Bluetooth 5.0-5.1 \r\n\r\nBattery and Power: 80Wh \r\n\r\nWeight and Dimensions:  2.58kgApproximately 360mm*264mm*21.7mm~26.85mm\r\n\r\nIncluded in the Box: Laptop, charger, and quick start guide in Chinese\r\n\r\n\r\nModel C: R7000P R5 RTX 3050 Ti\r\n\r\nOperation System: Windows 10 pro\r\n\r\nProcessor: AMD Ryzen 5 5600H\r\n\r\nGraphics: NVIDIA GeForce RTX 3050 Ti GDDR6 4GB 95watts\r\n\r\nDisplay: 15.6\" 1920x1080 resolution 165Hz 300 nits 100% sRGB Dolby Vision\r\n\r\nMemory: 16GB DDR4 3200MHz\r\n\r\nStorage:  512GB NVME PCIe M.2 SSD\r\n\r\nInterfaces: I/O: 2x USB 3.2 Type C, 1x 3.5mm Audio Jack, 4x USB 3.2 Gen 1, 1x HDMI 2.1, 1x RJ45,\r\n\r\nKeyboard and Touchpad: Backlit\r\n\r\nAudio: Realtek Dolby Audio\r\n\r\nCamera: 720P HD \r\n\r\nWireless Connectivity: Wi-Fi 6 and Bluetooth 5.0-5.1 \r\n\r\nBattery and Power: 80Wh \r\n\r\nWeight and Dimensions:  2.58kgApproximately 360mm*264mm*21.7mm~26.85mm\r\n\r\nIncluded in the Box: Laptop, charger, and quick start guide in Chinese\r\n\r\n\r\nModel D: R7000 R5 RTX 3050 \r\n\r\nOperation System: Windows 10 pro\r\n\r\nProcessor: AMD Ryzen 5 5600H\r\n\r\nGraphics: NVIDIA GeForce RTX 3050 GDDR6 4GB 95watts\r\n\r\nDisplay: 15.6\" 1920x1080 resolution 60Hz 300 nits 100% sRGB Dolby Vision\r\n\r\nMemory: 16GB DDR4 3200MHz\r\n\r\nStorage:  512GB NVME PCIe M.2 SSD\r\n\r\nInterfaces: I/O: 2x USB 3.2 Type C, 1x 3.5mm Audio Jack, 4x USB 3.2 Gen 1, 1x HDMI 2.1, 1x RJ45,\r\n\r\nKeyboard and Touchpad: Backlit\r\n\r\nAudio: Realtek Dolby Audio\r\n\r\nCamera: 720P HD \r\n\r\nWireless Connectivity: Wi-Fi 6 and Bluetooth 5.0-5.1 \r\n\r\nBattery and Power: 80Wh \r\n\r\nWeight and Dimensions:  2.58kgApproximately 360mm*264mm*21.7mm~26.85mm\r\n\r\nIncluded in the Box: Laptop, charger, and quick start guide in Chinese\r\n\r\n\r\n\r\nModel E: R7000P R7 RX6600MOperation System: Windows 10 proProcessor: AMD Ryzen 7 5800H 3.2GHzGraphics: AMD Radeon™ RX6600MDisplay: 15.6\" FHD IPS 1920x1080 resolution 60Hz 300 nits 100% sRGB Dolby VisionMemory: 16GB DDR4 3200MHzStorage:  512GB NVME PCIe M.2 SSDInterfaces: I/O: 2x USB 3.2 Type C, 1x 3.5mm Audio Jack, 4x USB 3.2 Gen 1, 1x HDMI 2.1, 1x RJ45,Keyboard and Touchpad: BacklitColor: Phantom BlackAudio: Realtek DolbCamera: 720P HD Wireless Connectivity: Wi-Fi 6 and Bluetooth 5.0-5.1 Battery and Power: L20C4PC1 15.36V/80WH/4 CELLWeight and Dimensions:  2.58kg 360mm*264mm*21.7mm~26.85mm\r\n\r\n\r\nIncluded in the Box: Laptop, charger, and quick start guide in Chinese', '75000.00', 100, 'f42Omdf27M', 'product_img6.png', '2022-04-21 14:27:07', '2022-04-21 08:26:04'),
(7, 1, 'Lenovo 2021 ThinkPad E15 20YG0010KD Laptop 39.6CM, 8BG,256GB', 'model name 		ThinkPad E15 G3 Lucienne - 20YG0010KD\r\ncolor				Black\r\noperating system	Free Dos\r\nprocessor		AMD Ryzen 5 5500U Processor\r\ngraphic			AMD Radeon™ Graphics\r\nstorage			256GB SSD M.2 2242 NVME TLC\r\nMemory			DDR4 3200 SODIMM 8GB (8G MB)\r\n					+ 1SLOT UP TO 24GB\r\ndisplay			39.6cm FHD (1920x1080) IPS 30Onits Anti-Glare\r\naudio			Realtek ALC3287 Codec, Dolby Audio\", Dual Array Microphone, \r\n				HARMAN Speakers\r\ncamera			HD 720p (with Thinkshutter)\r\nnetwork			RTL8822CE, 802.11ac Dual Band 2x2 Wi-Fi + Bluetooth 5.0, M.2 card\r\nI/O ports			1x USB 3.2 Gen 1 (Always On), 1x USB 2.0, 1x USB-C 3.2 Gen 1 \r\n				(Data transfer,Supports Power Delivery 3.0 and DisplayPort TM 1.2), \r\n				1x HDMI 1.4b, 1x Ethernet\r\n				(RJ-45), 1x headphone/mic combo\r\nbattery			Up to 10.3 hours 45Wh, support 80% fast charging technology in 1 hour\r\nkeyboard			6-row keyboard, multimedia FN key, number pad, backlit\r\npad				TrackPoint pointing device and Mylar\" surface multi-touch touchpad\r\nsize weight		365 x 240 x 18.9 mm/ 1.7 kg', '30000.00', 45, 'Rds2520m', 'product_img7.png', '2022-04-21 14:30:08', '2022-04-21 08:27:23'),
(8, 1, 'MSI GF63 Thin (GF63 11SC-031PH) Gaming Laptop | Intel i5-11400H (6 cores) | GTX 1650', 'CPU: Up to AMD Ryzen™ 7 5000 U-Processors\r\nOS: Windows 10 Home\r\nWindows 10 Pro (MSI recommends Windows 10 Pro for business.)\r\n(Free upgrade to Windows 11* when available, see below)\r\nDISPLAY	15.6\" FHD (1920x1080), IPS-Level\r\nGRAPHICS: AMD Radeon™ Graphics\r\nMEMORY	Up to DDR4-3200 Memory Type\r\n2 Slots Number of SO-DIMM Slot\r\nMax 64GB Max Capacity\r\nSTORAGE CAPABILITY: 2x M.2 SSD slot (NVMe PCIe Gen3)\r\nWEBCAM	HD type (30fps@720p)\r\nKEYBOARD: Backlight Keyboard (Single-Color, White)\r\nCOMMUNICATION: 802.11 ax Wi-Fi 6 + Bluetooth v5.1\r\nAUDIO JACK: 1x Mic-in/Headphone-out Combo Jack\r\nI/O PORTS: 1x Micro SD\r\n1x (4K @ 30Hz) HDMI\r\n1x Type-C USB3.2 Gen2\r\n3x Type-A USB3.2 Gen2\r\nBATTERY	3-Cell\r\nAC ADAPTER: 65W adapter\r\nDIMENSION (WXDXH): 356.8 x 233.75 x 18.9 mm\r\nWEIGHT (W/ BATTERY): 1.6 kg', '35000.00', 20, 'f42Omdf27M', 'product_img8.png', '2022-04-21 14:43:47', '2022-04-21 08:30:44'),
(9, 5, 'Brand New Lamborghini Murcielago Lp640 ', 'The Lamborghini Murcielago, a super sports car, was first manufactured in 2001. Being the first model introduced by the renowned Lamborghini brand in eleven years, the Murcielago quickly garnered worldwide attention. With its sleek, angular design and dramatic scissor doors, the first generation Murcielago coupe is a masterpiece. Paired with all-wheel drive and a Lamborghini V12 engine, the coupe accelerated from 0-62 mph in a mere 3.8 seconds. In 2004, the roadster version was introduced, allowing the same revolutionary specs in an open-top version. In 2006, Lamborghini upgraded the Murcielago with the unveiling of the LP 640 model and produced the last version, known as the Murcielago LP 670 in 2009. Production halted in 2010, with a total Lamborghini Murcielago specs production number of 4,099.', '12017049.66', 100, 'f42Omdf27M', 'product_img9.png', '2022-04-21 15:00:16', '2022-04-21 08:56:33');

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(20) DEFAULT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `surname` varchar(40) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `email_address` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unique_id`, `first_name`, `surname`, `phone_number`, `email_address`, `password`, `created_at`) VALUES
(4, 'LQWmdazQzo882', 'Omar', 'Morales', '09272162227', 'omarmorales@gmail.com', '09272162227', '2022-04-20 18:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_line1` varchar(70) NOT NULL,
  `address_line2` varchar(70) NOT NULL,
  `city` varchar(85) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `country` varchar(56) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `user_id` (`user_id`),
  ADD KEY `payment_id` (`payment_id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment_details` (`id`);

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
-- Constraints for table `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `user_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD CONSTRAINT `user_payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
