CREATE TABLE `equipos_laboratorio` (
  `id` int(11) NOT NULL,
  `numero_serie` varchar(50) NOT NULL,
  `nombre_equipo` varchar(100) NOT NULL,
  `tipo` enum('Computadora','Proyector','Servidor','Redes') NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `estado_operativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos_laboratorio`
--

INSERT INTO `equipos_laboratorio` (`id`, `numero_serie`, `nombre_equipo`, `tipo`, `fecha_adquisicion`, `estado_operativo`) VALUES
(111, 'E1', 'PC Oficina Central', 'Computadora', '2023-05-10', 1),
(112, 'E2', 'Proyector Epson X500', 'Proyector', '2022-11-20', 0),
(113, 'E3', 'Servidor Dell PowerEdge', 'Servidor', '2021-08-15', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos_laboratorio`
--
ALTER TABLE `equipos_laboratorio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_serie` (`numero_serie`);

ALTER TABLE `equipos_laboratorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;



CREATE TABLE `eventos_academicos` (
  `id` int(11) NOT NULL,
  `titulo_evento` varchar(150) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_evento` datetime NOT NULL,
  `modalidad` enum('Presencial','Virtual','Hibrido') NOT NULL,
  `cupo_maximo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos_academicos`
--

INSERT INTO `eventos_academicos` (`id`, `titulo_evento`, `descripcion`, `fecha_evento`, `modalidad`, `cupo_maximo`) VALUES
(221, 'Conferencia de Inteligencia Artificial', 'Evento sobre aplicaciones de IA en educación y empresas.', '2024-06-15 10:00:00', 'Presencial', 100),
(222, 'Taller de Programación en PHP', 'Curso práctico para aprender desarrollo web con PHP y MySQL.', '2024-07-10 18:00:00', 'Virtual', 50),
(223, 'Seminario de Redes y Seguridad', 'Análisis de seguridad informática y configuración de redes.', '2024-08-05 09:30:00', 'Hibrido', 80);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos_academicos`
--
ALTER TABLE `eventos_academicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos_academicos`
--
ALTER TABLE `eventos_academicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;
