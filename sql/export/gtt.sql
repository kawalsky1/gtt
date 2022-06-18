-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 18, 2022 alle 19:22
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtt`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `services`
--

CREATE TABLE `services` (
  `idServicePK` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `n` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `timing` int(11) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `services`
--

INSERT INTO `services` (`idServicePK`, `name`, `category`, `type`, `description`, `n`, `price`, `timing`, `duration`) VALUES
(1, 'Formula U', 'rete urbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana di Torino, inclusa la Metropolitana. Nell\'abbonamento Formula U sono inclusi i servizi ferroviari GTT e Trenitalia (in 2° classe), limitatamente alle tratte di percorrenza urbane (', 1, '310.00', 1, 'anni'),
(2, 'Formula U', 'rete urbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana di Torino, inclusa la Metropolitana. Nell\'abbonamento Formula U sono inclusi i servizi ferroviari GTT e Trenitalia (in 2° classe), limitatamente alle tratte di percorrenza urbane (', 1, '38.00', 1, 'mesi'),
(3, 'Formula U', 'rete urbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana di Torino, inclusa la Metropolitana. Nell\'abbonamento Formula U sono inclusi i servizi ferroviari GTT e Trenitalia (in 2° classe), limitatamente alle tratte di percorrenza urbane (', 1, '12.00', 1, 'settimane'),
(4, 'Formula 1', 'rete suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete suburbana GTT di Torino (scopri le linee suburbane e le tratte suburbane delle linee urbane) e nella zona A dell\'area integrata Formula. Dove li puoi acquistare? Online o presso le Rivend', 1, '351.50', 1, 'anni'),
(5, 'Formula 1', 'rete suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete suburbana GTT di Torino (scopri le linee suburbane e le tratte suburbane delle linee urbane) e nella zona A dell\'area integrata Formula. Dove li puoi acquistare? Online o presso le Rivend', 1, '37.00', 1, 'mesi'),
(6, 'Formula 1', 'rete suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete suburbana GTT di Torino (scopri le linee suburbane e le tratte suburbane delle linee urbane) e nella zona A dell\'area integrata Formula. Dove li puoi acquistare? Online o presso le Rivend', 1, '10.30', 1, 'settimane'),
(7, 'Formula 3', 'rete urbana+suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana e suburbana di Torino, inclusa la Metropolitana e, nell\'ambito della zona U+A dell\'area integrata Formula, sui servizi ferroviari GTT e delle linee delle Aziende di Trasporto adere', 1, '560.50', 1, 'anni'),
(8, 'Formula 3', 'rete urbana+suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana e suburbana di Torino, inclusa la Metropolitana e, nell\'ambito della zona U+A dell\'area integrata Formula, sui servizi ferroviari GTT e delle linee delle Aziende di Trasporto adere', 1, '59.00', 1, 'mesi'),
(9, 'Formula 3', 'rete urbana+suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana e suburbana di Torino, inclusa la Metropolitana e, nell\'ambito della zona U+A dell\'area integrata Formula, sui servizi ferroviari GTT e delle linee delle Aziende di Trasporto adere', 1, '16.40', 1, 'settimane'),
(10, 'Formula U', 'rete urbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana di Torino, inclusa la Metropolitana. Nell\'abbonamento Formula U sono inclusi i servizi ferroviari GTT e Trenitalia (in 2° classe), limitatamente alle tratte di percorrenza urbane (', 1, '310.00', 1, 'anni'),
(11, 'Formula U', 'rete urbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana di Torino, inclusa la Metropolitana. Nell\'abbonamento Formula U sono inclusi i servizi ferroviari GTT e Trenitalia (in 2° classe), limitatamente alle tratte di percorrenza urbane (', 1, '38.00', 1, 'mesi'),
(12, 'Formula U', 'rete urbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana di Torino, inclusa la Metropolitana. Nell\'abbonamento Formula U sono inclusi i servizi ferroviari GTT e Trenitalia (in 2° classe), limitatamente alle tratte di percorrenza urbane (', 1, '12.00', 1, 'settimane'),
(13, 'Formula 1', 'rete suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete suburbana GTT di Torino (scopri le linee suburbane e le tratte suburbane delle linee urbane) e nella zona A dell\'area integrata Formula. Dove li puoi acquistare? Online o presso le Rivend', 1, '351.50', 1, 'anni'),
(14, 'Formula 1', 'rete suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete suburbana GTT di Torino (scopri le linee suburbane e le tratte suburbane delle linee urbane) e nella zona A dell\'area integrata Formula. Dove li puoi acquistare? Online o presso le Rivend', 1, '37.00', 1, 'mesi'),
(15, 'Formula 1', 'rete suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete suburbana GTT di Torino (scopri le linee suburbane e le tratte suburbane delle linee urbane) e nella zona A dell\'area integrata Formula. Dove li puoi acquistare? Online o presso le Rivend', 1, '10.30', 1, 'settimane'),
(16, 'Formula 3', 'rete urbana+suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana e suburbana di Torino, inclusa la Metropolitana e, nell\'ambito della zona U+A dell\'area integrata Formula, sui servizi ferroviari GTT e delle linee delle Aziende di Trasporto adere', 1, '560.50', 1, 'anni'),
(17, 'Formula 3', 'rete urbana+suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana e suburbana di Torino, inclusa la Metropolitana e, nell\'ambito della zona U+A dell\'area integrata Formula, sui servizi ferroviari GTT e delle linee delle Aziende di Trasporto adere', 1, '59.00', 1, 'mesi'),
(18, 'Formula 3', 'rete urbana+suburbana', 'abbonamenti', 'Su quali mezzi puoi viaggiare? Su tutti i bus e tram GTT della rete urbana e suburbana di Torino, inclusa la Metropolitana e, nell\'ambito della zona U+A dell\'area integrata Formula, sui servizi ferroviari GTT e delle linee delle Aziende di Trasporto adere', 1, '16.40', 1, 'settimane'),
(19, 'Biglietto City', 'city', 'biglietti', 'Biglietto disponibile su smart card BIP, su supporto chip on paper (alle rivendite o alle emettitrici delle stazioni della metro), tramite l\'app TO Move e con il nuovo sistema di pagamento con le carte contactless dei circuiti Mastercard e Visa ai varchi ', 1, '1.70', 100, 'minuti'),
(20, 'MultiCity', 'multicity', 'biglietti', 'Biglietto chip on paper, contiene 6 biglietti City 100. I 6 biglietti sono validi ciascuno per 100 minuti compresa una corsa in Metropolitana. E\' utilizzabile solo da una persona e deve essere validato ogni volta che si cambia mezzo. Disponibile per l\'acq', 6, '10.00', 100, 'minuti'),
(21, 'Daily 4 corse', 'daily', 'biglietti', 'Biglietto giornaliero disponibile su smart card BIP o tramite l\'app TO Move. E\' valido per un numero illimitato di corse fino al termine del servizio del giorno della prima validazione su tram, bus e in metropolitana. E\' utilizzabile solo da una persona e', 1, '3.00', 400, 'minuti'),
(22, 'Daily giornaliero illimitato', 'daily', 'biglietti', 'Biglietto giornaliero su supporto chip on paper. E\' valido per un numero illimitato di corse fino al termine del servizio del giorno della prima validazione su tram, bus e in metropolitana. E\' utilizzabile solo da una persona e deve essere validato ogni v', 1, '4.00', 24, 'ore'),
(23, 'Biglietto Speciale 48h', 'special', 'biglietti', 'Biglietto chip on paper valorizzato al momento dell\'acquisto. Valido per viaggiare su tram, bus e in metropolitana per 48 o 72 ore dal momento della prima validazione. E\' utilizzabile solo da una persona e deve essere validato ogni volta che si cambia mez', 1, '7.50', 48, 'ore'),
(24, 'Biglietto Speciale 72h', 'special', 'biglietti', 'Biglietto chip on paper valorizzato al momento dell\'acquisto. Valido per viaggiare su tram, bus e in metropolitana per 48 o 72 ore dal momento della prima validazione. E\' utilizzabile solo da una persona e deve essere validato ogni volta che si cambia mez', 1, '10.00', 72, 'ore');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `idUserPK` int(11) NOT NULL,
  `idUserTypeFK` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `dateOfBirthDay` date NOT NULL,
  `createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`idUserPK`, `idUserTypeFK`, `username`, `email`, `pswd`, `firstName`, `lastName`, `dateOfBirthDay`, `createdAt`) VALUES
(1, 0, 'user1', 'user1@example.com', '0cc175b9c0f1b6a831c399e269772661', 'a', 'a', '2022-06-18', '2022-06-18'),
(2, 0, 'user2', 'user2@example.com', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 'b', '2022-06-01', '2022-06-18'),
(3, 1, 'admin', 'admin@example.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '1998-01-23', '2022-06-18');

-- --------------------------------------------------------

--
-- Struttura della tabella `user_type`
--

CREATE TABLE `user_type` (
  `idUserTypePK` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `user_type`
--

INSERT INTO `user_type` (`idUserTypePK`, `type`) VALUES
(0, 'user'),
(1, 'admin');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`idServicePK`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUserPK`),
  ADD KEY `idUserTypeFK` (`idUserTypeFK`);

--
-- Indici per le tabelle `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`idUserTypePK`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `services`
--
ALTER TABLE `services`
  MODIFY `idServicePK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `idUserPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `user_type`
--
ALTER TABLE `user_type`
  MODIFY `idUserTypePK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idUserTypeFK`) REFERENCES `user_type` (`idUserTypePK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
