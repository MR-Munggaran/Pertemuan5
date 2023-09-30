-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2023 at 10:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web23`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(3) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `subjudul` varchar(30) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `subjudul`, `tgl`, `gambar`, `isi`) VALUES
(1, 'Lorem Ipsum', 'dolorem ipsum quia dolor sit a', '2023-09-29 14:37:36', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare, ex quis vehicula congue, purus dolor pretium sem, consectetur porttitor orci urna pretium ligula. Duis sit amet maximus elit. Nullam eu nisi non ligula placerat consequat eu nec nisi. Nullam at ipsum sapien. Vivamus vitae massa vitae mi sodales pulvinar. Nulla viverra sollicitudin sapien id scelerisque. In ut justo venenatis, tempor orci quis, ultricies ipsum. Nulla imperdiet rhoncus semper. Ut rhoncus nisl quis urna gravida aliquam. Vestibulum vel erat purus. Pellentesque condimentum pellentesque pharetra.</p>\r\n\r\n<p>Integer fermentum condimentum sapien in lobortis. Etiam felis nunc, dapibus a urna in, rhoncus dignissim ex. Cras placerat, risus sed tincidunt tincidunt, ligula augue consectetur elit, id viverra nulla elit vehicula neque. Sed in sem eget nunc venenatis facilisis ac vitae dui. Nam porta aliquet ligula vitae sagittis. Sed sed ex et felis egestas finibus non in dui. Quisque consequat vitae erat sit amet ultricies. Donec id diam eu nulla iaculis faucibus non ac magna. Cras ac blandit risus. Nulla quis purus accumsan, fermentum massa vel, vehicula turpis. Sed tempus arcu a velit commodo, vel congue lorem vulputate. Aliquam pretium tellus odio, at lobortis mi cursus eget.</p>'),
(2, 'Lorem Ipsum 2', 'Yang penting ada', '2023-09-29 14:42:41', '', '\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet sem eu nisi venenatis consectetur. Ut bibendum, eros vel convallis feugiat, nulla eros porta tortor, non vulputate orci nisl porttitor neque. Morbi ultrices quam vel dolor tristique semper. Fusce varius risus tincidunt libero sodales ultrices ut eget leo. Sed vel ipsum a orci pulvinar condimentum. Sed porta justo quis ornare vehicula. In consequat libero urna, cursus elementum ligula vulputate nec. Suspendisse ornare tortor in dui varius, quis tempus est sodales. Sed vitae vehicula ex. Donec et lacinia velit.</p>\r\n\r\n<p>Ut ut sapien et dolor iaculis pellentesque id in ipsum. Sed egestas in sapien ac congue. Sed et posuere enim. Aliquam id posuere elit, sed rhoncus lectus. Donec vel arcu sit amet dui porttitor feugiat. Nunc ultricies vulputate ornare. Phasellus non nibh posuere, iaculis ex nec, mattis massa. Vivamus commodo placerat lacus nec rutrum. Pellentesque elementum felis eu posuere aliquam. Vivamus placerat magna ut felis dapibus blandit.</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
