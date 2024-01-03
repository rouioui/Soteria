-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 01:01 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Soteria`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `campaign_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `goal_amount` decimal(10,2) DEFAULT NULL,
  `current_amount` decimal(10,2) DEFAULT NULL,
  `deadline_date` date DEFAULT NULL,
  `campaign_status` enum('draft','active','completed') DEFAULT 'active',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`campaign_id`, `user_id`, `title`, `description`, `image`, `goal_amount`, `current_amount`, `deadline_date`, `campaign_status`, `date_created`, `date_updated`) VALUES
(1, 1, 'Éducation pour Tous', 'Notre projet Éducation pour Tous vise à offrir des opportunités d\'éducation de qualité aux enfants défavorisés de communautés rurales. Grâce à ce programme, nous avons l\'intention de construire de nouvelles écoles, d\'embaucher des enseignants qualifiés et de fournir du matériel scolaire adéquat aux enfants qui en ont besoin.<br />\r\n<br />\r\n Nous croyons que chaque enfant mérite une éducation solide pour réaliser son plein potentiel. Votre contribution nous aidera à réaliser ce rêve et à changer la vie de nombreux enfants en leur offrant un avenir meilleur.', 'public/img/campaigns/7928recolte-gens-manuels-table.jpg', '50000.00', '0.00', '2023-06-16', 'active', '2023-06-16 22:50:05', '2023-06-16 22:50:05'),
(2, 4, 'Sauvez les Océans, Protégeons la Vie Marine', 'Notre initiative \"Sauvez les Océans, Protégeons la Vie Marine\" vise à lutter contre la pollution plastique et à préserver la biodiversité marine. Nous prévoyons d\'organiser des campagnes de nettoyage des plages, de sensibilisation à la réduction des déchets plastiques et de soutien aux projets de recherche sur la vie marine.<br />\r\n<br />\r\n Votre soutien financier contribuera à la mise en place de mesures concrètes pour protéger nos océans, sauver des espèces marines en voie de disparition et préserver l\'équilibre fragile de notre écosystème.', 'public/img/campaigns/5277composition-marine-phare-filet-peche.jpg', '75000.00', '3000.00', '2023-06-16', 'active', '2023-06-16 22:57:28', '2023-06-16 22:07:39'),
(3, 4, 'Santé pour Tous , Soins Médicaux Accessibles', 'Le Projet Santé pour Tous vise à garantir des soins médicaux accessibles à tous, indépendamment de leur statut socio-économique. Nous avons l\'intention de créer des cliniques mobiles qui offriront des services médicaux de base dans les régions reculées où l\'accès aux soins est limité. De plus, nous souhaitons organiser des campagnes de sensibilisation sur l\'importance de la santé préventive et de l\'hygiène personnelle. <br />\r\n<br />\r\nVotre soutien financier nous permettra de sauver des vies et d\'améliorer la qualité de vie de nombreuses personnes qui n\'ont pas les moyens de se procurer des soins médicaux essentiels.', 'public/img/campaigns/9093assistant-medical-aidant-femme-handicapee-exercices-physiques.jpg', '100000.00', '1500.00', '2023-06-16', 'active', '2023-06-16 22:59:30', '2023-06-21 13:11:20'),
(4, 2, 'Abri pour les sans-abri', 'Notre initiative \"Abri pour les sans-abri\" vise à fournir un logement d\'urgence et des services de soutien aux personnes sans abri. Nous prévoyons de construire des abris temporaires, d\'offrir des repas chauds, des vêtements et des soins de base, ainsi que de mettre en place des programmes de réinsertion sociale pour aider les sans-abri à retrouver leur autonomie. <br />\r\n<br />\r\nVotre contribution nous permettra de fournir un refuge sûr et chaleureux pour ceux qui sont les plus vulnérables dans notre communauté.', 'public/img/campaigns/1028femme-sans-abri-sous-couverture-signe-aide-exterieur.jpg', '50000.00', '0.00', '2023-06-17', 'active', '2023-06-16 23:02:19', '2023-06-16 23:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_categories`
--

CREATE TABLE `campaign_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `icon` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign_categories`
--

INSERT INTO `campaign_categories` (`category_id`, `category_name`, `icon`, `date_created`, `date_updated`) VALUES
(1, 'Médical', 'fa-regular fa-heart', '2023-05-10 23:51:49', '2023-05-10 23:51:49'),
(2, 'Urgence', 'fa-solid fa-tower-broadcast', '2023-05-10 23:51:49', '2023-05-10 23:51:49'),
(3, 'Éducation', 'fa-solid fa-book-open', '2023-05-10 23:53:15', '2023-05-10 23:53:15'),
(4, 'Famille', 'fa-solid fa-people-group', '2023-05-10 23:53:15', '2023-05-10 23:53:15'),
(5, 'Créative', 'fa-solid fa-palette', '2023-05-10 23:53:47', '2023-05-10 23:53:47'),
(6, 'Sportive', 'fa-solid fa-basketball', '2023-05-10 23:53:47', '2023-05-10 23:53:47'),
(7, 'Environnement', 'fa-solid fa-earth-americas', '2023-05-10 23:54:43', '2023-05-10 23:54:43'),
(8, 'Événement', 'fa-solid fa-award', '2023-05-10 23:54:43', '2023-05-10 23:54:43'),
(9, 'Animaux', 'fa-solid fa-paw', '2023-05-11 00:03:25', '2023-05-11 00:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_category_map`
--

CREATE TABLE `campaign_category_map` (
  `campaign_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaign_category_map`
--

INSERT INTO `campaign_category_map` (`campaign_id`, `category_id`) VALUES
(1, 3),
(2, 7),
(2, 9),
(3, 1),
(3, 2),
(4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `comment_text` text DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `donation_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `donation_status` enum('pending','complete','refunded','cancelled') DEFAULT NULL,
  `anonymous_donation` tinyint(1) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`donation_id`, `user_id`, `campaign_id`, `amount`, `donation_status`, `anonymous_donation`, `date_created`, `date_updated`) VALUES
(1, 1, 2, '3000.00', 'pending', 0, '2023-06-16 23:07:39', '2023-06-16 23:07:39'),
(2, 1, 3, '1500.00', 'pending', 0, '2023-06-21 14:11:20', '2023-06-21 14:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `donation_id` int(11) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_amount` decimal(10,2) DEFAULT NULL,
  `payment_status` enum('processing','complete','declined','refunded') DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `reward_id` int(11) NOT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `reward_title` varchar(255) DEFAULT NULL,
  `reward_description` text DEFAULT NULL,
  `reward_amount` decimal(10,2) DEFAULT NULL,
  `reward_limit` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `update_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `update_title` varchar(255) DEFAULT NULL,
  `update_text` text DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `rank` enum('0','1','2') NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'public/img/avatars/default.jpg',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `rank`, `avatar`, `date_created`, `date_updated`) VALUES
(1, 'Sabir', 'Baichou', 'sabir.baichou@gmail.com', '$2y$10$.VnplK2im/GNFsNYmZkGNuTCNctFMz.shY6qmuGKvqAyHR0lC53Ja', '2', 'public/img/avatars/default.jpg', '2023-05-03 03:15:12', '2023-05-08 09:21:28'),
(2, 'Salma', 'El Halba', 'salma.elhalba@gmail.com', '$2y$10$3IunwxsDoF0E8qlixiS16u4YUNEIYO8Z.v9zkjuJ/lxWU0nYl.hQW', '1', 'public/img/avatars/default.jpg', '2023-05-03 03:15:36', '2023-06-21 21:49:33'),
(3, 'Mouhammed', 'Al Khabir', 'mouhammad.alkhabir@gmail.com', '$2y$10$BBV1nrgrZ8FmBJ2XkXY.p.fAC0.I6sUvwJBxiQFmAALHy71duOZBe', '1', 'public/img/avatars/default.jpg', '2023-05-03 03:15:52', '2023-06-21 21:49:37'),
(4, 'Amine', 'El Houjaji', 'amine.elhoujaji@gmail.com', '$2y$10$atlZ6EDmJUj1d86BLmjXruQ3d9dQvU7eIbZNS2I4eVFytT5bEmuSu', '1', 'public/img/avatars/default.jpg', '2023-05-03 03:16:05', '2023-06-21 21:49:39'),
(5, 'Adnane', 'Ihrkachen', 'adnane.ihrkachen@gmail.com', '$2y$10$SOF/1pxXCN071zjTqE7Sx.1GsLK7WLG.dBsNFgjk.JqWpnTX29MG2', '0', 'public/img/avatars/default.jpg', '2023-05-08 09:13:40', '2023-05-08 09:13:40'),
(6, 'Salah', 'Saadaoui', 'salah.saadaoui@gmail.com', '$2y$10$L8pqRSdOgM6OCXiZhZw.luIvVRRYo.G4HVDN6Uz/LWAbp8JqHg0Vq', '0', 'public/img/avatars/default.jpg', '2023-05-11 14:30:11', '2023-05-11 14:30:11'),
(7, 'Saber', 'Ahmad', 'ahmad@gmail.com', '$2y$10$lyLrIlSqEs4hNQ5UdlbvYepyIXK2DEchHxqxuQYqdUbZrIGaPPiaG', '0', 'public/img/avatars/default.jpg', '2023-06-21 12:20:07', '2023-06-21 12:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`view`) VALUES
(2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`campaign_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `campaign_categories`
--
ALTER TABLE `campaign_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `campaign_category_map`
--
ALTER TABLE `campaign_category_map`
  ADD PRIMARY KEY (`campaign_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `donation_id` (`donation_id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`reward_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`update_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `campaign_id` (`campaign_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campaign_categories`
--
ALTER TABLE `campaign_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `reward_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `update_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `campaigns_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `campaign_category_map`
--
ALTER TABLE `campaign_category_map`
  ADD CONSTRAINT `campaign_category_map_ibfk_1` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`campaign_id`),
  ADD CONSTRAINT `campaign_category_map_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `campaign_categories` (`category_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`campaign_id`);

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `donations_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`campaign_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`campaign_id`),
  ADD CONSTRAINT `payments_ibfk_3` FOREIGN KEY (`donation_id`) REFERENCES `donations` (`donation_id`);

--
-- Constraints for table `rewards`
--
ALTER TABLE `rewards`
  ADD CONSTRAINT `rewards_ibfk_1` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`campaign_id`);

--
-- Constraints for table `updates`
--
ALTER TABLE `updates`
  ADD CONSTRAINT `updates_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `updates_ibfk_2` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`campaign_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
