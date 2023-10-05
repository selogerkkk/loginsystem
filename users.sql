-- phpMyAdmin SQL Dump

-- version 5.1.1deb5ubuntu1

-- https://www.phpmyadmin.net/

--

-- Host: localhost:3306

-- Generation Time: Oct 05, 2023 at 09:45 AM

-- Server version: 8.0.34-0ubuntu0.22.04.1

-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Database: `syslogin`

--

-- --------------------------------------------------------

--

-- Table structure for table `users`

--

CREATE TABLE
    `users` (
        `id` int UNSIGNED NOT NULL,
        `name` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `user` varchar(45) NOT NULL,
        `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `user_type` char(1) NOT NULL,
        `date` date NOT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

--

-- Dumping data for table `users`

--

INSERT INTO
    `users` (
        `id`,
        `name`,
        `email`,
        `user`,
        `password`,
        `user_type`,
        `date`
    )
VALUES (
        3,
        'ruan',
        'ruan.teste@gmail.com',
        'ruan',
        '81dc9bdb52d04dc20036dbd8313ed055',
        '1',
        '2023-10-03'
    ), (
        4,
        'teste da silva',
        'testedasilva@gmail.com',
        'teste.eu',
        '827ccb0eea8a706c4c34a16891f84e7b',
        '1',
        '2023-10-05'
    );

--

-- Indexes for dumped tables

--

--

-- Indexes for table `users`

--

ALTER TABLE `users` ADD PRIMARY KEY (`id`);

--

-- AUTO_INCREMENT for dumped tables

--

--

-- AUTO_INCREMENT for table `users`

--

ALTER TABLE
    `users` MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;