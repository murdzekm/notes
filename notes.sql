-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Paź 2021, 15:45
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `notes`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `description` text COLLATE utf8_polish_ci NOT NULL,
  `created` datetime NOT NULL,
  `url_address` varchar(60) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `notes`
--

INSERT INTO `notes` (`id`, `title`, `description`, `created`, `url_address`) VALUES
(1, 'Lista zakupów na wtorek', 'Mleko\r\nJaja\r\nChleb', '2021-10-11 15:38:40', 'RDvAz8oowov6iOvY5qUTLwzaboTs3K58ZggrVvys'),
(2, 'Zadanie domowe', 'Wykonać zadanie 4,5,6', '2021-10-13 15:39:07', 'RDvAz8oowov6iOvY5qUTLwzaboTs3K58ZggrVvys'),
(3, 'Plany na weekend', 'Spakować się na wyjazd wyjazd\r\nPrzygotować samochód', '2021-10-13 15:39:49', 'RDvAz8oowov6iOvY5qUTLwzaboTs3K58ZggrVvys'),
(4, 'Zadanie domowe', 'Zadanie z matematyki ', '2021-10-13 15:40:51', 'V05bHd09GJ8kGHBoKqHsJ1dHmF9sw5ue1d4rulijH3yvNHj2JF'),
(5, 'Notataka z historii', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2021-10-13 15:42:00', 'V05bHd09GJ8kGHBoKqHsJ1dHmF9sw5ue1d4rulijH3yvNHj2JF');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `url_address` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `url_address`, `username`, `password`, `email`, `date`) VALUES
(1, 'admin', 'RDvAz8oowov6iOvY5qUTLwzaboTs3K58ZggrVvys', 'Admin', '7af2d10b73ab7cd8f603937f7697cb5fe432c7ff', 'admin@example.com', '2021-10-10 15:37:36'),
(2, 'user', 'V05bHd09GJ8kGHBoKqHsJ1dHmF9sw5ue1d4rulijH3yvNHj2JF', 'User', '2b12e1a2252d642c09f640b63ed35dcc5690464a', 'user@email.com', '2021-10-10 15:40:24');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`,`username`,`password`,`date`),
  ADD KEY `login` (`login`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
