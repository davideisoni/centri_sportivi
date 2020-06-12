-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 06, 2020 alle 14:45
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `centri_sportivi`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `campi`
--

CREATE TABLE `campi` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sport` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `campi`
--

INSERT INTO `campi` (`id`, `nome`, `sport`) VALUES
(2, 'calcetto_al_coperto', 'calcetto'),
(3, 'calcetto_all_aperto', 'calcetto'),
(4, 'calcetto_su_cemento', 'calcetto'),
(5, 'calcetto_in_spiaggia', 'calcetto'),
(6, 'tennis_al_coperto', 'tennis'),
(7, 'tennis_all_aperto', 'tennis'),
(8, 'tennis_nel_verde', 'tennis'),
(9, 'tennis_al_mare', 'tennis'),
(10, 'volley_al_coperto', 'volley'),
(11, 'volley_all_aperto', 'volley'),
(12, 'volley_di_classe', 'volley'),
(13, 'volley_in_spiaggia', 'volley'),
(14, 'basket_al_coperto', 'basket'),
(15, 'basket_all_aperto', 'basket'),
(16, 'basket_professionale', 'basket'),
(17, 'basket_in_spiaggia', 'basket');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazioni`
--

CREATE TABLE `prenotazioni` (
  `id` int(11) NOT NULL,
  `campo` int(11) NOT NULL,
  `data_prenotazione` date NOT NULL,
  `id_prenotatore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prenotazioni`
--

INSERT INTO `prenotazioni` (`id`, `campo`, `data_prenotazione`, `id_prenotatore`) VALUES
(10, 3, '2020-06-13', 11),
(23, 2, '2020-06-10', 14),
(40, 5, '2020-06-22', 19),
(41, 17, '2020-06-22', 19),
(42, 14, '2020-06-22', 19),
(45, 8, '2020-06-18', 11),
(46, 6, '2020-06-18', 11),
(47, 10, '2020-06-13', 11),
(48, 11, '2020-06-13', 11),
(49, 5, '2020-06-12', 11);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(11, 'davide', '446fca5553df49ad9c6348cf1ff71d51', 'davide@gmail.com'),
(12, 'davideisoni', '59a3d70ba63297b996c42e2dde226539', 'davideisoni@gmail.com'),
(13, 'isotheking', '7f670e25dd086b1302ddfcc26aeef5a1', 'isotheking@gmail.com'),
(14, 'iso', 'e906ec779ab4ac6cbfdf30db5cbb3f1c', 'iso@gmail.com'),
(15, 'paola', '72a86026abb289634ec64d7f3b544f0c', 'paola@gmail.com'),
(16, 'isoni', 'aba3f0b2b3b12255c033e6dc5649ffb9', 'isoni@gmail.com'),
(19, 'prova', '189bbbb00c5f1fb7fba9ad9285f193d1', 'prova@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `campi`
--
ALTER TABLE `campi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prenotatore` (`id_prenotatore`),
  ADD KEY `campo` (`campo`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `campi`
--
ALTER TABLE `campi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `prenotazioni`
--
ALTER TABLE `prenotazioni`
  ADD CONSTRAINT `prenotazioni_ibfk_1` FOREIGN KEY (`id_prenotatore`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `prenotazioni_ibfk_2` FOREIGN KEY (`campo`) REFERENCES `campi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
