-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lut 2017, 18:44
-- Wersja serwera: 10.1.9-MariaDB
-- Wersja PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shareboard`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ngroup`
--

CREATE TABLE `ngroup` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ngroup`
--

INSERT INTO `ngroup` (`id`, `user_id`, `title`) VALUES
(2, 6, 'Praca'),
(4, 6, 'Nowa nazwa'),
(6, 7, 'Moja nowa grupa'),
(7, 7, 'Praca'),
(8, 8, 'Moje notatki'),
(9, 8, 'Zakupy'),
(10, 6, 'Grupa3 po zmianie'),
(11, 6, 'Trolo 2'),
(12, 9, 'Praca');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `shares`
--

CREATE TABLE `shares` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text CHARACTER SET utf8 NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `group_id`, `title`, `body`, `create_date`) VALUES
(9, 6, 4, 'Po edycji', 'Notatka zmieniona po edycji', '2017-01-14 13:11:32'),
(10, 7, 6, 'Notatka od Kowalskiego', 'Praesent purus quam, elementum a vehicula non, pulvinar pulvinar nibh. Nullam auctor venenatis metus, id porta elit molestie at. Cras eget sapien id ante consequat sollicitudin sed ac justo. Donec lobortis mauris vel tortor vestibulum molestie eget eget risus. Fusce eu lorem eu diam consequat aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin imperdiet dolor vel ante luctus vulputate. Praesent id metus quis dolor viverra convallis sed id eros. Curabitur in nunc iaculis, scelerisque ligula a, lobortis mi. Phasellus laoreet urna eget nunc vehicula aliquam.', '2017-01-15 11:22:19'),
(11, 7, 7, 'Projekt', 'ZrobiÄ‡ projekt aplikacji internetowej.', '2017-01-15 11:24:08'),
(12, 8, 8, 'Do zrobienia', 'ZmyÄ‡ makijaÅ¼', '2017-01-15 11:39:29'),
(13, 8, 8, 'Co kupiÄ‡', 'maslo\r\njajka\r\nchleb', '2017-01-15 11:39:49'),
(14, 6, 2, 'Sprawozdanie', 'OddaÄ‡ jak najszybciej szefowi.', '2017-01-15 14:32:48'),
(15, 6, 2, 'Nowa notatka', 'JakiÅ› tekst', '2017-01-15 16:49:31'),
(16, 6, 11, 'Nowa trolo 2', 'Po edycji', '2017-01-16 17:19:03'),
(17, 9, 12, 'Nowa notatka', 'alsdjlkasjdlaksjd', '2017-01-17 08:09:40');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `perm` varchar(15) NOT NULL DEFAULT 'user',
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `perm`, `register_date`) VALUES
(6, 'Aleksander', 'test@test.pl', '21232f297a57a5a743894a0e4a801fc3', 'user', '2017-01-06 12:50:55'),
(7, 'Piotr', 'kowalski@wp.pl', '21232f297a57a5a743894a0e4a801fc3', 'user', '2017-01-07 14:35:37'),
(8, 'Jessika', 'gawelek@gmail.com', '207023ccb44feb4d7dadca005ce29a64', 'user', '2017-01-15 11:38:32'),
(9, 'Piotr', 'nowak@wp.pl', '21232f297a57a5a743894a0e4a801fc3', 'user', '2017-01-17 08:09:00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ngroup`
--
ALTER TABLE `ngroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
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
-- AUTO_INCREMENT dla tabeli `ngroup`
--
ALTER TABLE `ngroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT dla tabeli `shares`
--
ALTER TABLE `shares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
