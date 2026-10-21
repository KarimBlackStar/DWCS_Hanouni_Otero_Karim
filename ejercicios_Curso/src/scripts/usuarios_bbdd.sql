CREATE DATABASE bbdd;
USE bbdd;

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido1` varchar(100) NOT NULL,
  `apellido2` varchar(100) NULL,
  `nickname` varchar(30) NOT NULL UNIQUE ,
  `email` varchar(320) NOT NULL UNIQUE ,
  `contrasenha` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

