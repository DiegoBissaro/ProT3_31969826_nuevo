-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2024 a las 16:09:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bissaro_d`
--
CREATE DATABASE IF NOT EXISTS `bissaro_d` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bissaro_d`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--
-- Creación: 13-07-2024 a las 23:22:01
--

CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 19-07-2024 a las 23:17:06
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cuit` varchar(50) NOT NULL,
  `nombreyapellido` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cuit`, `nombreyapellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, '20-37771710-5', 'DIEGO BISSARO', 'diego_bissaro', '', '$2y$10$XoXAHTccMzz6TJt.yDKGPuMQskZ.IEKOhZhL3mNnN3sCfCPTcSZQK', 1, 'NO'),
(2, '20-37771710-3', 'DIEGO BISSARO2', 'diemar.ciudad2@gmail', '', '$2y$10$Oya8H4kcn65kFRfRgZzd4uJHAFUn8.iV3Tt1hdBfxQ3do/sEB7lLm', 2, 'NO'),
(3, '20319698265', 'DIEGOBISSARO3', '32762171', '', '$2y$10$.yCXeOb.rWUkMh70mnb.B.yAO8Zr301QcxH25tc3cqTEp8nnMDp3a', 2, 'NO'),
(4, '20319698265', 'ABC', 'die3mar.ciudad@gmail', '', '$2y$10$i..UhqvbJSjouELgMsQru.RoInlUh6syQSiAbma05y/xgTQ8TThO2', 2, 'NO'),
(5, '20318089265', 'JUAN PEREZ', 'juan_perez', '', '$2y$10$2JS66.fglnZYh3Of53PHRuvBBKuA93WHjoAfXaOVs7NwXIIR8J1Fi', 2, 'NO'),
(6, '10969867099', 'YANINAGOMEZ', 'yani_gomez', '', '$2y$10$AmVmc9w6P4rMUJdCR9YPnOrOBJrF5DTc3s7uI3SOkmsT1iWvxAv/2', 2, 'NO'),
(7, '1234567899', 'LUIS MARCELO', 'luis_marcelo', '', '$2y$10$xBfpgoQNFS6SdgO7tO0rZ.4njAewEIjY6hI35Hfg1pfF8fLjBfFKO', 2, 'NO'),
(8, '20319698880', 'GRACIELA GALARZA', 'graciela_gal', '', '$2y$10$D6Ld5mbhfNVv2gTVzxUpgODL.50dtdrsseo7tXtQV1ye38wNhx9A.', 2, 'NO'),
(9, '20551148260', 'JOAQUIN GALARZA', 'joaquin_galarza', '', '$2y$10$ywypbiBKikM/XrhasG00m.62741VbbORilM.wZjEjwGqjIRx4cs0.', 2, 'NO'),
(10, '20-333333-20', 'GABY LOCO', 'gaby_loco', '', '$2y$10$ECfD1ajYPD83qDoFdttcwe7M8k3iCAZDlplIU.Knjpj900q4DSyQ6', 2, 'NO'),
(11, '20-33444555-1', 'SARA ROMERO', 'sara_romero', '', '$2y$10$LhWoNOfOkwUO.G7IDA8d3enq4Z.5pCotabpmURtZNQy4qpOo9fQEi', 2, 'NO'),
(12, '20-37771710-5', 'MAXI TALENTO', 'maxi_talento', '', '$2y$10$ctBx7zPEWLycn7EWfcFbpOuOy82bVCQgT30zC9bOIDqLE61GPrIgC', 2, 'NO'),
(13, '20-33444555-1', 'NOELIA VELEZ', 'noelia_velez', '', '$2y$10$vhyVU6koB5pLbT3Xctp6AO1RE/QjPfm/r0ZlurrErLHSQ297FgLwa', 2, 'NO'),
(14, '20-22333444-5', 'JUAN JOSE', 'juan_jose', '', '$2y$10$6MfjZHwsCAK.C3IH8nRU7O9qu.2Wbt1p6ISU/lBS9cWiJ7L6/.EIu', 2, 'NO'),
(15, '20-33444666-7', 'BICHO OSLER', 'bicho_osler', '', '$2y$10$Q2hU8dhYrmM6zB3KwlpuvePmQ2yzRbzEKDcs.uZ7vAlITKlwHVaxi', 2, 'NO'),
(16, '20-33-999888-0', 'MARIA MUÑOZ', 'maria_muñoz', '', '$2y$10$nw0od7jTF9wiDMubrXNvOubygki7Q/HXjmWMeKHxk/kTMOksfdp5G', 2, 'NO'),
(17, '203334449', 'JOSE JOSE', 'jose_jose', '', '$2y$10$hIUAjeUB/DvWhCBi2Iz1.eW2X7Qx6/IaJAEkgpC.UyipdxgN.SlhW', 2, 'NO'),
(18, '20-33666888-9', 'TALENTOS DIGITALES', 'talentos_digitales', '', '$2y$10$xA0q3UM8zZjDnc.gu43/mOD8o4c5JvPeokowXE/vLBBymSbU/GHaC', 2, 'NO'),
(19, '20335557770', 'MONICA TIA', 'monica_tia', '', '$2y$10$Vqej0QovLov.eSZ5eiY61OUSZvfei7D6mN8zEmdEmFmpGIcCxJCL2', 2, 'NO'),
(20, '20-33555666-0', 'ISMAEL LOBO', 'ismael_lobo', '', '$2y$10$N/qZijPId6A16O7XZk5be..x.ImiJpGQ0VtZKohQFVQA2xpDfAGHK', 2, 'NO'),
(21, '20-33333444-9', 'JUAN MARADONA', 'juan_maradona', '', '$2y$10$W12jTEU4vJNLaTIF39jCS.0zhEEDBjo1O.o5kW8a6atW2XjkrveQ2', 2, 'NO'),
(22, '20-33444555-3', 'LEO JUAN', 'leo_juan', '', '$2y$10$8v/d82dSvV5cQGKk.abn6ud99Dbu7vMLiIxRy8bBD0KX6Ox4XsuNG', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
