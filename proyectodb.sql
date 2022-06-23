-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2022 a las 00:08:58
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
-- Base de datos: `proyectodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Descripcion` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID`, `Nombre`, `Descripcion`) VALUES
(1, 'Ciencia Ficción', 'BLA BLA BLA'),
(2, 'Fantasia', 'BLA BLA BLA'),
(3, 'Romance', 'BLA BLA BLA'),
(4, 'Comedia', 'BLA BLA BLA'),
(5, 'Policial', 'BLA BLA BLA'),
(6, 'Horror', 'BLA BLA BLA'),
(7, 'Musica', 'BLA BLA BLA'),
(8, 'Misterio', 'BLA BLA BLA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorialibro`
--

CREATE TABLE `categorialibro` (
  `ID` int(11) NOT NULL,
  `IDCategoria` int(11) NOT NULL,
  `IDLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorialibro`
--

INSERT INTO `categorialibro` (`ID`, `IDCategoria`, `IDLibro`) VALUES
(3, 2, 1),
(4, 2, 2),
(5, 2, 43),
(6, 2, 44),
(7, 2, 45),
(8, 2, 46),
(9, 2, 47),
(10, 2, 48),
(11, 2, 49),
(12, 2, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriausuario`
--

CREATE TABLE `categoriausuario` (
  `ID` int(11) NOT NULL,
  `IDCategoria` int(11) NOT NULL,
  `IDUsuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoriausuario`
--

INSERT INTO `categoriausuario` (`ID`, `IDCategoria`, `IDUsuario`) VALUES
(1, 2, '1'),
(2, 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Descripcion` varchar(700) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`ID`, `Titulo`, `Autor`, `Descripcion`, `img`) VALUES
(1, 'El Imperio Final', 'Brandon Sanderson', 'Durante mil años la ceniza cayó y no floreció ninguna flor. Durante mil años los Skaa se esclavizaron en la miseria y vivieron con miedo. Durante mil años, el Lord Legislador, la \"Astilla del Infinito\", reinó con poder absoluto y terror definitivo, divinamente invencible. Entonces, cuando la esperanza estaba tan perdida que ni siquiera quedaba su recuerdo, un medio Skaa terriblemente marcado y con el corazón roto la redescubrió en las profundidades de la prisión más infernal del Señor Gobernante. Kelsier \"rompió\" y encontró en sí mismo los poderes de un Mistborn. Ladrón brillante y líder natural, volcó su talento en la última travesura, con el propio Lord Gobernante como objetivo.', 'Elimperiofinal.jpg'),
(2, 'El Nombre Del Viento', 'Patrick Rothfuss', 'Contada con la propia voz de Kvothe, esta es la historia del joven con dotes mágicas que se convierte en el mago más famoso que su mundo haya visto jamás.\r\nLa narración íntima de su infancia en una compañía de jugadores ambulantes, los años que pasó como huérfano casi salvaje en una ciudad plagada de delincuencia, su atrevido y exitoso intento de entrar en una legendaria escuela de magia y su vida como fugitivo tras el asesinato de un rey forman una apasionante historia de madurez sin parangón en la literatura reciente.', 'Elnombredelviento.jpg'),
(43, 'Harry Potter y la Piedra Filosofal', ' J.K. Rowling', 'La vida de Harry Potter es miserable. Sus padres han muerto y está atrapado con sus despiadados parientes, que le obligan a vivir en un pequeño armario bajo la escalera. Pero su suerte cambia cuando recibe una carta que le dice la verdad sobre sí mismo: es un mago. Un misterioso visitante lo rescata de sus parientes y lo lleva a su nuevo hogar, el Colegio Hogwarts de Magia y Hechicería.\r\nDespués de toda una vida reprimiendo sus poderes mágicos, Harry por fin se siente un niño normal. Pero incluso dentro de la comunidad de magos, él es especial. Es el niño que vivió: la única persona que ha sobrevivido a una maldición asesina infligida por el malvado Lord Voldemort, que lanzó una brutal toma ', 'HarryPotterylaPiedraFilosofal.jpg'),
(44, 'El Camino de los Reyes', 'Brandon Sanderson', 'Roshar es un mundo de piedra y tormentas. Las tormentas de increíble poder barren el terreno rocoso con tanta frecuencia que han moldeado la ecología y la civilización por igual. Los animales se esconden en caparazones, los árboles se retraen en las ramas y la hierba se retrae en el suelo sin tierra. Las ciudades se construyen sólo donde la topografía ofrece refugio.\r\n\r\nHan pasado siglos desde la caída de las diez órdenes consagradas conocidas como los Caballeros Radiantes, pero sus Esquirlas permanecen: espadas místicas y trajes de armadura que transforman a los hombres ordinarios en guerreros casi invencibles. Los hombres cambian reinos por Esquirlas. Las guerras se libraron por ellos y se', 'ElCaminodelosReyes.jpg'),
(45, 'La Brújula Dorada', 'Philip Pullman', 'Lyra se precipita al frío y lejano Norte, donde gobiernan los clanes de brujas y los osos acorazados. El Norte, donde los Devoradores se llevan a los niños que roban, incluido su amigo Roger. El Norte, donde su temible tío Asriel está intentando construir un puente hacia un mundo paralelo.\r\n¿Puede una pequeña niña marcar la diferencia en tan grandes y terribles esfuerzos? Ella es Lyra: una salvaje, una intrigante, una mentirosa, y una campeona tan feroz y verdadera como Roger o Asriel podrían desear pero lo que Lyra no sabe es que ayudar a uno de ellos será traicionar al otro.', 'LaBrujulaDorada.jpg'),
(46, 'El Ojo Del Mundo', 'Robert Jordan', 'La Rueda del Tiempo gira y las Edades van y vienen, dejando recuerdos que se convierten en leyenda. La leyenda se desvanece y se convierte en mito, e incluso el mito se olvida hace tiempo cuando la Era que lo originó regresa de nuevo. En la Tercera Edad, la Edad de la Profecía, el mundo y el propio tiempo penden de un hilo. Lo que fue, lo que será y lo que es, aún puede caer bajo la Sombra.\r\nCuando Los Dos Ríos es atacado por los Trollocs una tribu salvaje de mitad hombres, mitad bestias cinco aldeanos huyen esa noche a un mundo que apenas imaginaban, con nuevos peligros esperando en las sombras y en la luz.', 'ElOjoDelMundo.jpg'),
(47, 'Sabriel', 'Garth Nix', 'Enviada a un internado en Ancelstierre cuando era pequeña, Sabriel ha tenido poca experiencia con el poder aleatorio de la Magia Libre o con los Muertos que se niegan a permanecer muertos en el Viejo Reino. Pero durante su último semestre, su padre, el Abhorsen, desaparece, y Sabriel sabe que debe entrar en el Viejo Reino para encontrarlo.', 'Sabriel.jpg'),
(48, 'El Aliento de los Dioses', 'Brandon Sanderson', 'Es la historia de dos hermanas, que resultan ser princesas, el rey dios con el que una de ellas tiene que casarse, el dios menor al que no le gusta su trabajo y el inmortal que aún intenta deshacer los errores que cometió hace cientos de años.\r\nSu mundo es uno en el que los que mueren en la gloria regresan como dioses para vivir confinados en un panteón en la capital de Hallandren y en el que un poder conocido como magia biocromática se basa en una esencia conocida como aliento que sólo puede recogerse una unidad cada vez de personas individuales.', 'Elalientodelosdioses.jpg'),
(49, 'Eragon', 'Christopher Paolini', 'Cuando Eragon encuentra una piedra azul pulida en el bosque, piensa que es el descubrimiento afortunado de un pobre granjero; tal vez le sirva para comprar carne a su familia para el invierno. Pero cuando la piedra trae una cría de dragón, Eragon pronto se da cuenta de que ha tropezado con un legado casi tan antiguo como el propio Imperio.\r\nDe la noche a la mañana, su sencilla vida se ve destrozada y se ve empujado a un nuevo y peligroso mundo de destino, magia y poder. Con tan sólo una antigua espada y el consejo de un viejo narrador como guía, Eragon y el incipiente dragón deberán sortear el peligroso terreno y los oscuros enemigos de un Imperio gobernado por un rey cuya maldad no tiene lí', 'Eragon.jpg'),
(50, 'El Prisma Negro', 'Brent Weeks', 'Guile es el Prisma, el hombre más poderoso del mundo. Es sumo sacerdote y emperador, un hombre cuyo poder, ingenio y encanto son todo lo que preserva una tenue paz. Sin embargo, los Prismas nunca duran, y Guile sabe exactamente cuánto tiempo le queda de vida.\r\nCuando Guile descubre que tiene un hijo, nacido en un reino lejano después de la guerra que lo puso en el poder, debe decidir cuánto está dispuesto a pagar para proteger un secreto que podría destrozar su mundo.', 'ElPrismaNegro.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Email` varchar(50) NOT NULL,
  `Contraseña` varchar(70) NOT NULL,
  `verification_key` varchar(250) NOT NULL,
  `is_email_verified` enum('no','yes') NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Email`, `Contraseña`, `verification_key`, `is_email_verified`, `Nombre`, `ID`) VALUES
('simonvillalon10@gmail.com', 'VgpWMlc5VGIDMAEgBzEEJQI+AzhZbFVhUGI=', 'ab44912fa0d30a26daa918a263028e46', 'yes', 'Saimon231', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `categorialibro`
--
ALTER TABLE `categorialibro`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDCategoria` (`IDCategoria`),
  ADD KEY `IDLibro` (`IDLibro`);

--
-- Indices de la tabla `categoriausuario`
--
ALTER TABLE `categoriausuario`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `categorialibro`
--
ALTER TABLE `categorialibro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `categoriausuario`
--
ALTER TABLE `categoriausuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=553;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorialibro`
--
ALTER TABLE `categorialibro`
  ADD CONSTRAINT `categorialibro_ibfk_1` FOREIGN KEY (`IDLibro`) REFERENCES `libro` (`ID`),
  ADD CONSTRAINT `categorialibro_ibfk_2` FOREIGN KEY (`IDCategoria`) REFERENCES `categoria` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
