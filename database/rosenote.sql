-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2025 a las 22:32:55
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
-- Base de datos: `rosenote`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario_usuario`
--

CREATE TABLE `inventario_usuario` (
  `id` int(11) NOT NULL,
  `usuarioID` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventario_usuario`
--

INSERT INTO `inventario_usuario` (`id`, `usuarioID`, `producto_id`) VALUES
(1, 7, 11),
(2, 7, 2),
(3, 7, 13),
(4, 7, 6),
(5, 7, 7),
(6, 7, 9),
(7, 8, 2),
(8, 7, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `creador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `imagen`, `precio`, `creador`) VALUES
(2, 'Marco nieve', 'https://i.pinimg.com/736x/e3/2f/3b/e32f3bcfaee6ef47f61ab3928c005266.jpg', 100, '1@1'),
(6, 'Marco rosas 1', 'https://i.pinimg.com/736x/5e/15/3a/5e153ace445c9aac8c98ce22375df576.jpg', 100, '1@1'),
(7, 'Marco nieve 2', 'https://img.freepik.com/vector-gratis/fondo-navidad-borde-copo-nieve-grunge_1048-17522.jpg?semt=ais_hybrid&w=740&q=80', 100, '1@1'),
(8, 'Marco Rosas 2', 'https://img.freepik.com/vector-gratis/fondo-abstracto-acuarela_23-2149126003.jpg?semt=ais_incoming&w=740&q=80', 100, '1@1'),
(9, 'Marco plantas', 'https://i.pinimg.com/736x/d7/1d/b5/d71db58ea2a1eb993c1aa8730a290725.jpg', 100, '1@1'),
(10, 'Marco 1', 'https://e0.pxfuel.com/wallpapers/337/1001/desktop-wallpaper-pink-dog-paw-background-pink.jpg', 110, '1@1'),
(11, 'Marco 2', 'https://static3.depositphotos.com/1000939/123/i/450/depositphotos_1231425-stock-photo-green-leaves-frame.jpg', 120, '1@1'),
(12, 'Marco 3', 'https://static.vecteezy.com/system/resources/thumbnails/000/690/856/small/pink-floral-frame-on-a-white-background.jpg', 130, '1@1'),
(13, 'Marco 4', 'https://png.pngtree.com/thumb_back/fh260/background/20250423/pngtree-a-minimalistic-floral-frame-design-featuring-delicate-pink-cherry-blossom-flowers-image_17224007.jpg', 140, '1@1'),
(14, 'Marco 5', 'https://png.pngtree.com/thumb_back/fh260/background/20210316/pngtree-pink-cute-baby-clouds-stars-background-image_585930.jpg', 150, '1@1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuarioID` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuarioID`, `nombre`, `correo`, `contraseña`) VALUES
(7, '1', '1@1', '$2y$10$bgBgU6pH5Uvl8EYOyN/jIOuAJ68lpIXW6q1GGFMZcebeY6j6kE6hC'),
(8, '2', '2@2', '$2y$10$uu8DPr1hV5rGELO89AFMPOkG4AdfAxpnPA5RlMNFWZtckqw6cqX0G'),
(9, '3', '3@3', '$2y$10$/YBESyeDFm7KFcfTT/UkF.KJox92IWjeA6NMeyIe2Q8YwEaPtWgJu'),
(10, 'a', 'a@a', '$2y$10$fy/vFQHmogvtBzalIhXXRe0qVETeCoWyUZwPx8MLvxAe2fJq4kz/i');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario_usuario`
--
ALTER TABLE `inventario_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuarioID` (`usuarioID`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario_usuario`
--
ALTER TABLE `inventario_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inventario_usuario`
--
ALTER TABLE `inventario_usuario`
  ADD CONSTRAINT `inventario_usuario_ibfk_1` FOREIGN KEY (`usuarioID`) REFERENCES `usuario` (`usuarioID`),
  ADD CONSTRAINT `inventario_usuario_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
