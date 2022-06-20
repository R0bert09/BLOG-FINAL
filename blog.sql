-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2022 a las 05:44:38
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(20, 3, 29, 'Conjunto de movimientos de Sora Super Smash Bros Ultimate', '1655691955_post1.jpeg', '&lt;p&gt;Nintendo habl&oacute; sobre el juego de movimiento de Sora y mostr&oacute; su arsenal de ataques en un video de 45 minutos.&lt;/p&gt;&lt;p&gt;Todos sus movimientos est&aacute;n inspirados en sus aventuras con Donald y Goofy, y es un luchador que sobresale en el aire. Es f&aacute;cil de lanzar por sus oponentes, pero tiene poderosos ataques basados ​​en combos.&lt;/p&gt;&lt;p&gt;Como fan&aacute;ticos de Kingdom Hearts, como era de esperar, hay combinaciones de botones &uacute;nicos para realizar una gran cantidad de movimientos con la llave espada. Tambi&eacute;n podr&aacute;s realizar magia con los hechizos Firaga, Thundaga y Blizzaga.&lt;/p&gt;&lt;p&gt;Su Final Smash tambi&eacute;n se llama Sellando el ojo de la cerradura, y esto te ayudar&aacute; a asegurar la victoria.&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 1, '2022-06-19 20:25:55'),
(21, 3, 20, 'Un vistazo sobre Kazuya Mishima en Super Smash Bros. Ultimate', '1655692613_post2.jpg', '&lt;p&gt;Kazuya llega a Super Smash Bros. Ultimate, y eso supone una de las&amp;nbsp; adiciones m&aacute;s potentes al incuestionable mayor crossover de la historia de los videojuegos: el abanderado de la saga Tekken llevar&aacute; el brutal estilo de k&aacute;rate Mishima a la ca&oacute;tica experiencia de lucha de Nintendo, y eso es sin&oacute;nimo de espect&aacute;culo y diversi&oacute;n.&lt;/p&gt;&lt;p&gt;Lo creas o no, la serie Tekken se ha resistido a aparecer en Switch. Y eso que Bandai Namco tard&oacute; relativamente poco en llevar los l&iacute;os de la familia Mishima a Wii U y Nintendo 3DS. No es que Katsuhiro Harada no tuviese presente a la consola dos en uno de Nintendo, ah&iacute; tenemos la versi&oacute;n deluxe de Pokken Tournament y la propia Bandai Namco es co-desarrolladora de&amp;nbsp; Super Smash Bros. Ultimate, pero ya iba tocando ver a alguien de la saga del Pu&ntilde;o de Hierro en Nintendo Switch.&lt;/p&gt;&lt;p&gt;Por otro lado, la manera de integrar el enorme repertorio de ataques de Kazuya en Smash es tambi&eacute;n un acierto: los comandos se han simplificado con mucho acierto (ya no hace falta distinguir entre pu&ntilde;etazos y patadas) y se aprovechan las ocho direcciones de la cruceta m&aacute;s el estado neutro para poder desatar sus movimientos especiales con los pies sobre el escenario o en salto.&lt;/p&gt;&lt;p&gt;Como es de esperar, se promover&aacute; que encadenemos golpes simples con movimientos especiales y t&eacute;cnicas m&aacute;s elaboradas, de modo que algunos ataques, como su Leaping Sidekick, expondr&aacute;n totalmente a los enemigos que abusen del escudo.&lt;/p&gt;', 1, '2022-06-19 20:36:53'),
(22, 3, 28, 'Cualquiera diría que el mejor jugador lo es independientemente de dónde proceda', '1655692825_post3.jpg', '&lt;p&gt;&lt;strong&gt;Que s&iacute;, que tambi&eacute;n han tenido suerte&lt;/strong&gt;, la suerte de encontrarse en el momento id&oacute;neo para poder jugar, practicar, y mejorar lo mucho que lo han hecho, dir&aacute;n algunos. Que la pandemia les ha facilitado el poder jugar con m&aacute;s gente ya que, al no haber torneos offline, muchos se han tenido que aguantar y jugar a la versi&oacute;n&amp;nbsp;&lt;i&gt;bootleg&amp;nbsp;&lt;/i&gt;del juego. Pero al C&eacute;sar lo que es del C&eacute;sar: la falta de apoyo social, de clubes de eSports y de empresas al juego en este pa&iacute;s hace que, en la competici&oacute;n en videojuegos, &lt;strong&gt;Espa&ntilde;a y sus jugadores est&eacute;n en desventaja respecto a otros pa&iacute;ses&lt;/strong&gt;. Ya sea en cuanto a apoyo (v&eacute;ase la potencia francesa en el Smash, donde hay much&iacute;simos jugadores con m&aacute;s apoyo de clubes y empresas), prestigio (donde Estados Unidos arrasa en cuanto a torneos prestigiosos se refiere), o econom&iacute;a (siendo los habitantes de Espa&ntilde;a, dentro de Europa, personas con una potencia econ&oacute;mica relativamente baja). Y por eso creo que hay que alabar la labor de aquellos jugadores que se han dejado la piel por jugar a este juego. Porque s&iacute;, han tenido suerte, &lt;strong&gt;pero tambi&eacute;n han trabajado m&aacute;s que nadie&lt;/strong&gt;.&lt;/p&gt;&lt;p&gt;Terminar&eacute; con esta reflexi&oacute;n diciendo que en Smash (como en todos los juegos que se basan en habilidad), las bases, las circunstancias y el contexto de cada uno nos ha llevado por caminos diferentes, pero que, aunque la suerte exista y sea un factor importante, todav&iacute;a lo es m&aacute;s el trabajo de cada uno. &lt;strong&gt;Que nadie niegue lo mucho que trabajan los mejores para serlo. Eso es suyo, y nadie se lo puede quitar&lt;/strong&gt;.&lt;/p&gt;&lt;p&gt;Por cierto, quiero utilizar este &uacute;ltimo p&aacute;rrafo para despedirme de los usuarios como columnista. Dejo esta labor al resto de columnistas, que hacen un trabajo estupendo, por lo que me marcho tranquilo. Quiero dar las gracias a los que me han acompa&ntilde;ado durante este tiempo escribiendo, a Ramonium que ha estado siempre marcando los tiempos, a Jasku que le toma el relevo y a todo columnista que ha dedicado su tiempo a escribir cuatro l&iacute;neas por aqu&iacute;. Os haya hecho gracia, interesado mi contenido, hervido la piel...; si os he despertado alguna sensaci&oacute;n, entonces habr&aacute; valido la pena dedicar tiempo y esfuerzo a escribir en la secci&oacute;n de columnas, pues al final, lo m&aacute;s importante a la hora de escribir es ser le&iacute;do y saber que has tenido un impacto sobre tus lectores. &lt;strong&gt;Por ello, los &uacute;ltimos agradecimientos van a vosotros, los lectores: &iexcl;muchas gracias por todo!&lt;/strong&gt;&lt;/p&gt;', 1, '2022-06-19 20:40:25'),
(23, 3, 24, 'Cómo luchar - Controles básicos de los luchadores', '1655693468_post4.jpg', '&lt;p&gt;Aqu&iacute; tienes los controles b&aacute;sicos para todos los &lt;a href=&quot;https://www.guiasnintendo.com/2c-switch/super-smash-bros-ultimate/guia-super-smash-bros-ultimate/luchadores.html&quot;&gt;luchadores&lt;/a&gt;. Estos no tienen ninguna combinaci&oacute;n de teclas especial para ejecutar sus golpes (como en otros juegos de lucha). Todos realizan sus acciones con los mismos controles descritos abajo, aunque esas acciones s&iacute; son diferentes para cada personaje.&lt;br&gt;B&aacute;sicamente los golpes se pueden realizar con dos botones&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://www.guiasnintendo.com/2c-switch/super-smash-bros-ultimate/guia-super-smash-bros-ultimate/imagenes/controles/switch_a_18.png&quot; alt=&quot;&quot;&gt;&lt;/figure&gt;&lt;p&gt;(para el ataque normal) y&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://www.guiasnintendo.com/2c-switch/super-smash-bros-ultimate/guia-super-smash-bros-ultimate/imagenes/controles/switch_b_18.png&quot; alt=&quot;&quot;&gt;&lt;/figure&gt;&lt;p&gt;(para el ataque especial). Pero estos botones puedes presionarlos solos o junto a una direcci&oacute;n del mando, por lo tanto, son 4 ataques diferentes con cada bot&oacute;n (arriba, abajo, lado y quieto) que hacen un total de 8 ataques entre normales y especiales. Sin embargo, si est&aacute;s en el aire, los ataques pueden ser distintos, por lo que cada personaje puede aumentar en otros 4 (&oacute; 5 ya que puede ser distinto presionar&amp;nbsp;&lt;/p&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;https://www.guiasnintendo.com/2c-switch/super-smash-bros-ultimate/guia-super-smash-bros-ultimate/imagenes/controles/switch_palancal_18.png&quot; alt=&quot;&quot;&gt;&lt;/figure&gt;&lt;p&gt;hacia delante o hacia atr&aacute;s) los ataques a ejecutar. Esa es la norma, aunque hay algunos personajes especiales que tienen m&aacute;s movimientos (como los personajes de Street Fighter que cuentan pr&aacute;cticamente con los mismos golpes que en el juego original). Adem&aacute;s, tambi&eacute;n existen t&eacute;cnicas de defensa que te permiten cubrirte o esquivar ataques, lo que aumentan todav&iacute;a m&aacute;s los movimientos totales de los luchadores.&lt;/p&gt;&lt;p&gt;Con cada golpe ir&aacute;s incrementando el da&ntilde;o en tu adversario, cuanto m&aacute;s da&ntilde;o tenga, m&aacute;s lejos volar&aacute; por los aires cuando sea expulsado del escenario. El objetivo real es expulsarle de los m&aacute;rgenes del escenario, ya que no muere por gastar su barra de energ&iacute;a (excepto en algunos combates especiales o contra jefes finales en el modo aventura). De hecho, un jugador puede caer derrotado con toda su energ&iacute;a si sale de los m&aacute;rgenes del escenario (normalmente por abajo es m&aacute;s f&aacute;cil que suceda).&lt;/p&gt;', 1, '2022-06-19 20:51:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(20, 'Personaje', ''),
(24, 'Combos', ''),
(28, 'Competitivo', ''),
(29, 'Peleas', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users2`
--

INSERT INTO `users2` (`id`, `admin`, `username`, `email`, `password`, `created_at`, `nombres`, `apellidos`) VALUES
(1, 1, 'Cheyo', 'cheyo@cheyo.com', '$2y$10$fUohzITfwibJ80cT77VzHOxJP9yvtd0XLh1R5t0ZbG4MibRVv8Pu.', '2022-06-18 07:56:38', 'Elíseo Antonio', 'Santos Diaz'),
(2, 0, 'Edras', 'edras@edras.com', '$2y$10$XVB.1AbOR.mBzsMLJl07N.hsvELDQi2k.sqBQSq2pVP0U4rQ8F6DK', '2022-06-19 02:16:11', 'Edras Ariel', 'Viera Lazo'),
(3, 1, 'Roberto69', 'roberto@roberto.com', '$2y$10$tfJY1RRE6Q9ZIF4ZzRghMukyGgaUXDRnc6AxkqQ8ymzFGPZMZlO8O', '2022-06-19 02:20:28', 'Roberto Hernán', 'Laínez Trejo'),
(5, 1, 'Roberto', 'new@new.com', '$2y$10$WJSS4PY5urVLkQ1dYsfZ4eyJW5drqpsW4loOoy9VopmPv8R8L/LKe', '2022-06-20 00:38:09', 'Roberto Hernán', 'Laínez Trejo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indices de la tabla `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
