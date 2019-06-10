-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Lis 2018, 11:24
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `newsy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykuly`
--

CREATE TABLE `artykuly` (
  `artykulyid` int(11) NOT NULL,
  `dataUkazania` datetime NOT NULL,
  `autor` int(25) NOT NULL,
  `tytul` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `tresc` text COLLATE utf8_polish_ci NOT NULL,
  `obrazek` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `usuniety` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `artykuly`
--

INSERT INTO `artykuly` (`artykulyid`, `dataUkazania`, `autor`, `tytul`, `tresc`, `obrazek`, `usuniety`) VALUES
(5, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/5/image.jpg', 1),
(6, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/6/image.jpg', 1),
(7, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/7/image.jpg', 0),
(8, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/8/image.jpg', 0),
(9, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/9/image.jpg', 1),
(10, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/10/image.jpg', 1),
(11, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/11/image.jpg', 1),
(12, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/12/image.jpg', 1),
(13, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/13/image.jpg', 0),
(14, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/14/image.jpg', 0),
(15, '2018-10-18 01:01:00', 8, 'Test', 'test', 'images/15/image.jpg', 0),
(17, '2018-10-18 01:01:00', 8, 'Test', 'test', 'images/17/image.jpg', 0),
(18, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/18/image.jpg', 1),
(19, '2018-10-18 01:01:00', 8, 'Test123', 'test', 'images/19/image.jpg', 1),
(20, '2018-10-18 01:01:00', 19, 'Test123', 'test', 'images/20/image.jpg', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarz`
--

CREATE TABLE `komentarz` (
  `komentarzid` int(11) NOT NULL,
  `artykul` int(11) NOT NULL,
  `data` date NOT NULL,
  `autor` int(11) NOT NULL,
  `ocena` int(11) NOT NULL,
  `tresc` varchar(128) COLLATE utf8_polish_ci NOT NULL,
  `usuniety` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `komentarz`
--

INSERT INTO `komentarz` (`komentarzid`, `artykul`, `data`, `autor`, `ocena`, `tresc`, `usuniety`) VALUES
(1, 6, '2018-11-02', 8, 1, 'xcvbxcvb', '0'),
(2, 6, '2018-11-02', 8, 4, 'xcvbxcvbxcvbxcb', '0'),
(3, 6, '2018-11-02', 8, 1, 'xcvb', '0'),
(4, 6, '2018-11-02', 8, 1, 'bnm,bnm,', '0'),
(5, 5, '2018-11-02', 8, 1, 'cvbncbvn', '0'),
(6, 5, '2018-11-02', 8, 1, 'cvbncbvncvbn', '0'),
(7, 5, '2018-11-02', 8, 1, 'vbnm', '0'),
(8, 5, '2018-11-02', 8, 1, 'xcvb', '0'),
(9, 5, '2018-11-02', 8, 1, 'xcvb', '0'),
(10, 5, '2018-11-02', 8, 1, 'dziala', '0'),
(11, 6, '2018-11-02', 8, 1, 'wadsawsdASDASD234', '0'),
(12, 7, '2018-11-03', 8, 1, 'sdfgsdf', '1'),
(13, 7, '2018-11-03', 8, 1, 'asdfasdf', '1'),
(14, 7, '2018-11-03', 8, 1, 'zxcvxzcvasdfasdfasdfs', '0');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `powiaty`
--

CREATE TABLE `powiaty` (
  `powiatyid` int(11) NOT NULL,
  `wojewodztwo` int(11) NOT NULL,
  `nazwa` varchar(32) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `powiaty`
--

INSERT INTO `powiaty` (`powiatyid`, `wojewodztwo`, `nazwa`) VALUES
(1, 4, 'Nowosądecki'),
(2, 4, 'Limanowski'),
(3, 4, 'Krakowski'),
(4, 7, 'Bieszczadzki'),
(5, 7, 'Dębicki'),
(6, 7, 'Darosławski'),
(7, 5, 'Będziński'),
(8, 5, 'Bielski'),
(9, 5, 'Cieszyński'),
(10, 6, 'Buski'),
(11, 6, 'Kazimierski'),
(12, 6, 'Kielecki');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `roleid` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`roleid`, `name`) VALUES
(1, 'user'),
(2, 'root');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `uzytkownicyid` int(11) NOT NULL,
  `login` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(64) COLLATE utf8_polish_ci NOT NULL,
  `dataUrodzenia` date NOT NULL,
  `plec` varchar(1) COLLATE utf8_polish_ci NOT NULL,
  `wojewodztwo` int(10) NOT NULL,
  `powiat` int(11) NOT NULL,
  `miejscowosc` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `rola` int(11) NOT NULL,
  `zbanowany` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`uzytkownicyid`, `login`, `haslo`, `dataUrodzenia`, `plec`, `wojewodztwo`, `powiat`, `miejscowosc`, `rola`, `zbanowany`) VALUES
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-10-10', 'm', 4, 1, 'Łukowica', 2, 0),
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-10-10', 'm', 4, 1, 'Łukowica', 1, 0),
(13, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-10-10', 'm', 4, 1, 'Łukowica', 1, 0),
(14, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-10-10', 'm', 4, 1, 'Łukowica', 1, 0),
(15, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-10-10', 'm', 4, 1, 'Łukowica', 1, 0),
(16, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-10-10', 'm', 4, 1, 'Łukowica', 1, 0),
(17, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-10-10', 'm', 4, 1, 'Łukowica', 1, 0),
(18, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-10-10', 'm', 4, 1, 'Łukowica', 1, 0),
(19, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '0001-01-01', 'm', 4, 1, 'Łukowica123123', 1, 0),
(20, 'userewrt', '634ef04a2b49e3a42f893cfd27597f65', '0111-11-01', 'm', 4, 1, 'aasdfsadf', 1, 0),
(21, 'user123', '6ad14ba9986e3615423dfca256d04e3f', '0001-01-01', 'm', 5, 12, '123123', 1, 0),
(22, 'user123', '6ad14ba9986e3615423dfca256d04e3f', '0001-01-01', 'm', 5, 12, '123123', 1, 0),
(23, 'user123', '6ad14ba9986e3615423dfca256d04e3f', '0001-01-01', 'm', 5, 12, '123123', 1, 0),
(24, 'user123', '6ad14ba9986e3615423dfca256d04e3f', '0001-01-01', 'm', 5, 12, '123123', 1, 0),
(25, 'user123', '6ad14ba9986e3615423dfca256d04e3f', '0001-01-01', 'm', 5, 12, '123123', 1, 0),
(26, 'user123', '6ad14ba9986e3615423dfca256d04e3f', '0001-01-01', 'm', 5, 12, '123123', 1, 0),
(27, 'user123', '6ad14ba9986e3615423dfca256d04e3f', '0001-01-01', 'm', 5, 12, '123123', 1, 0),
(30, 'ussser', '62f2596b743b732c244ca5451a334b4f', '0001-01-01', 'm', 6, 7, 'asdf', 1, 0),
(31, 'user123', '62f2596b743b732c244ca5451a334b4f', '0001-01-01', 'm', 6, 7, 'asdf', 1, 0),
(33, 'user555', 'ee11cbb19052e40b07aac0ca060c23ee', '0001-01-01', 'm', 5, 12, '123', 1, 0),
(34, 'user1231231232', 'ee11cbb19052e40b07aac0ca060c23ee', '0111-11-11', 'm', 4, 2, '1', 1, 0),
(58, 'testooo', 'ee11cbb19052e40b07aac0ca060c23ee', '0001-01-01', 'm', 5, 4, 'xcvbcv', 1, 0),
(59, 'usergit', 'ee11cbb19052e40b07aac0ca060c23ee', '0011-11-11', 'm', 4, 1, 'Łukowica123123', 1, 0),
(60, 'userfhfghdfghgdf', 'ee11cbb19052e40b07aac0ca060c23ee', '0001-01-01', 'm', 4, 3, '123', 1, 0),
(61, 'userxcvbcvbcvbxcvb', 'ee11cbb19052e40b07aac0ca060c23ee', '0011-11-11', 'm', 4, 2, '123', 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wojewodztwa`
--

CREATE TABLE `wojewodztwa` (
  `wojewodztwaid` int(11) NOT NULL,
  `nazwa` varchar(32) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wojewodztwa`
--

INSERT INTO `wojewodztwa` (`wojewodztwaid`, `nazwa`) VALUES
(4, 'małopolskie'),
(5, 'śląskie'),
(6, 'świętokrzyskie'),
(7, 'podkarpackie');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `artykuly`
--
ALTER TABLE `artykuly`
  ADD PRIMARY KEY (`artykulyid`),
  ADD KEY `autor` (`autor`);

--
-- Indeksy dla tabeli `komentarz`
--
ALTER TABLE `komentarz`
  ADD PRIMARY KEY (`komentarzid`),
  ADD KEY `artykul` (`artykul`),
  ADD KEY `autor` (`autor`);

--
-- Indeksy dla tabeli `powiaty`
--
ALTER TABLE `powiaty`
  ADD PRIMARY KEY (`powiatyid`),
  ADD KEY `wojewodztwo` (`wojewodztwo`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`uzytkownicyid`),
  ADD KEY `rola` (`rola`),
  ADD KEY `wojewodztwo` (`wojewodztwo`),
  ADD KEY `powiat` (`powiat`);

--
-- Indeksy dla tabeli `wojewodztwa`
--
ALTER TABLE `wojewodztwa`
  ADD PRIMARY KEY (`wojewodztwaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `artykuly`
--
ALTER TABLE `artykuly`
  MODIFY `artykulyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `komentarz`
--
ALTER TABLE `komentarz`
  MODIFY `komentarzid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `powiaty`
--
ALTER TABLE `powiaty`
  MODIFY `powiatyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `roleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `uzytkownicyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT dla tabeli `wojewodztwa`
--
ALTER TABLE `wojewodztwa`
  MODIFY `wojewodztwaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `artykuly`
--
ALTER TABLE `artykuly`
  ADD CONSTRAINT `artykuly_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `uzytkownicy` (`uzytkownicyid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `komentarz`
--
ALTER TABLE `komentarz`
  ADD CONSTRAINT `komentarz_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `uzytkownicy` (`uzytkownicyid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `komentarz_ibfk_2` FOREIGN KEY (`artykul`) REFERENCES `artykuly` (`artykulyid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `powiaty`
--
ALTER TABLE `powiaty`
  ADD CONSTRAINT `powiaty_ibfk_1` FOREIGN KEY (`wojewodztwo`) REFERENCES `wojewodztwa` (`wojewodztwaid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD CONSTRAINT `uzytkownicy_ibfk_1` FOREIGN KEY (`rola`) REFERENCES `role` (`roleid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `uzytkownicy_ibfk_2` FOREIGN KEY (`wojewodztwo`) REFERENCES `wojewodztwa` (`wojewodztwaid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uzytkownicy_ibfk_3` FOREIGN KEY (`powiat`) REFERENCES `powiaty` (`powiatyid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
