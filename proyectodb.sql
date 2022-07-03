-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2022 a las 00:29:22
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
(2, 2, 53),
(3, 2, 1),
(4, 2, 2),
(5, 2, 43),
(6, 2, 44),
(7, 2, 45),
(8, 2, 46),
(9, 2, 47),
(10, 2, 48),
(11, 2, 49),
(12, 2, 50),
(13, 2, 51),
(14, 2, 52),
(15, 2, 54),
(16, 2, 55),
(17, 2, 56),
(18, 2, 57),
(19, 2, 58),
(20, 2, 59),
(21, 2, 60),
(22, 3, 61),
(23, 3, 62),
(24, 3, 63),
(25, 3, 64),
(26, 3, 65),
(27, 3, 66),
(28, 3, 67),
(29, 3, 68),
(30, 3, 69),
(31, 3, 70),
(32, 3, 71),
(33, 3, 72),
(34, 3, 73),
(35, 3, 74),
(36, 3, 75),
(37, 3, 76),
(38, 3, 77),
(39, 3, 78),
(40, 3, 80);

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
(2, 1, '1'),
(553, 6, '19'),
(554, 8, '19'),
(555, 3, '20'),
(556, 7, '20'),
(557, 3, '21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `ID` int(11) NOT NULL,
  `IDUsuario` int(11) NOT NULL,
  `IDLibro` int(11) NOT NULL,
  `Contenido` varchar(300) NOT NULL,
  `Fecha` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`ID`, `IDUsuario`, `IDLibro`, `Contenido`, `Fecha`) VALUES
(0, 1, 1, 'Hola', '2022/07/04'),
(0, 1, 1, 'Prueba 2', '2022/07/04'),
(0, 1, 1, 'Prueba 3', '2022/07/04'),
(0, 1, 1, 'Prueba 4', '2022/07/04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Descripcion` varchar(1500) NOT NULL,
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
(50, 'El Prisma Negro', 'Brent Weeks', 'Guile es el Prisma, el hombre más poderoso del mundo. Es sumo sacerdote y emperador, un hombre cuyo poder, ingenio y encanto son todo lo que preserva una tenue paz. Sin embargo, los Prismas nunca duran, y Guile sabe exactamente cuánto tiempo le queda de vida.\r\nCuando Guile descubre que tiene un hijo, nacido en un reino lejano después de la guerra que lo puso en el poder, debe decidir cuánto está dispuesto a pagar para proteger un secreto que podría destrozar su mundo.', 'ElPrismaNegro.jpg'),
(51, 'Confianza', 'Hernán Díaz', 'Incluso a través del rugido y la efervescencia de la década de 1920, todos en Nueva York han oído hablar de Benjamin y Helen Rask. Es un legendario magnate de Wall Street; es la brillante hija de excéntricos aristócratas. Juntos, han llegado a la cima de un mundo de riqueza aparentemente interminable. Pero los secretos en torno a su riqueza y grandeza incitan a los chismes. Los rumores sobre las maniobras financieras de Benjamin y la reclusión de Helen comienzan a extenderse, todo a medida que una década de excesos y especulaciones llega a su fin. ¿A qué costo han adquirido su inmensa fortuna?', 'Confianza.jpg'),
(52, 'Un desgarro a través del tiempo', 'Kelley Armstrong', 'Cuando Mallory se despierta en el cuerpo de Catriona en 1869, debe dejar de lado su conmoción y adaptarse rápidamente a la realidad: la vida como empleada doméstica de un enterrador en la Escocia victoriana. Pronto descubre que su jefe, el Dr. Gray, también trabaja como médico forense y acaba de asumir un caso intrigante, el estrangulamiento de un joven, similar al ataque contra ella misma. Su única esperanza es que atrapar al asesino pueda llevarla de vuelta a su vida moderna. antes de que sea demasiado tarde.', 'UnDesgarroatravesdelTiempo.jpg'),
(53, 'El Lobo y El Leñador', 'Ava Reid', 'En su aldea pagana cubierta de bosque, Évike es la única mujer sin poder, lo que la convierte en una marginada claramente abandonada por los dioses. Los aldeanos culpan a su línea de sangre corrupta: su padre era un hombre Yehuli, uno de los sirvientes muy odiados del rey fanático. Cuando los soldados llegan de la Sagrada Orden de los Leñadores para reclamar a una niña pagana por el sacrificio de sangre del rey, Évike es traicionada por sus compañeros aldeanos y se rinde.\r\n\r\nPero cuando los monstruos atacan a los Leñadores y a su cautivo en el camino, matando a todos menos a Évike y al frío y tuerto capitán, no tienen más remedio que confiar el uno en el otro. Excepto que no es un leñador ordinario: es el príncipe caído en desgracia, Gáspár Bárány, cuyo padre necesita magia pagana para consolidar su poder. Gáspár teme que su hermano cruelmente celoso planee tomar el trono e instigar un reinado violento que condenaría a los paganos y a los yehuli por igual. Como hijo de una reina extranjera vilipendiada, Gáspár entiende lo que es ser un paria, y él y Évike hacen un pacto tenue para detener a su hermano.', 'LoboLeñador.jpg'),
(54, 'Enebro y Espina', 'Ava Reid', 'Una maldición espantosa. Una ciudad en agitación. Un monstruo con apetitos insaciables.\r\n\r\nMarlinchen y sus dos hermanas viven con su padre mago en una ciudad que pasa de la magia a la industria. Como las últimas brujas verdaderas de Oblya, ella y sus hermanas son poco más que una trampa para turistas, ya que tratan a sus clientes con remedios arcaicos y los engañan con un encanto nostálgico. Marlinchen pasa sus días adivinando secretos a cambio de rublos y tratando de aplacar a su padre tiránico y xenófobo, que mantiene a sus hijas secuestradas del mundo exterior. Pero por la noche, Marlinchen y sus hermanas se escabullen para disfrutar de las comodidades de la ciudad y deleitarse con sus emociones, particularmente el teatro de ballet recientemente establecido, donde Marlinchen conoce a una bailarina que rápidamente captura su corazón.', 'EnebroyEspina.jpg'),
(55, 'El Ladrón del Rayo', 'Rick Riordan', 'Percy Jackson es un buen niño, pero parece que no puede concentrarse en sus tareas escolares o controlar su temperamento. Y últimamente, estar fuera en el internado solo está empeorando: Percy podría haber jurado que su maestro de pre-álgebra se convirtió en un monstruo e intentó matarlo. Cuando la madre de Percy se entera, sabe que es hora de que él sepa la verdad sobre de dónde viene, y que vaya al único lugar donde estará a salvo. Ella envía a Percy al Campamento Half Blood, un campamento de verano para semidioses (en Long Island), donde se entera de que el padre que nunca conoció es Poseidón, Dios del Mar. Pronto se desarrolla un misterio y junto con sus amigos, uno un sátiro y el otro la hija semidiós de Atenea, Percy emprende una búsqueda a través de los Estados Unidos para llegar a las puertas del Inframundo (ubicado en un estudio de grabación en Hollywood) y evitar una guerra catastrófica entre los dioses.', 'ElLadronDelRayo.jpg'),
(56, 'Bajo la Puerta Susurrante', 'T.J. Klune', 'Cuando un segador viene a recoger a Wallace de su propio funeral, Wallace comienza a sospechar que podría estar muerto.\r\nY cuando Hugo, el dueño de una peculiar tienda de té, promete ayudarlo a cruzar, Wallace decide que definitivamente está muerto.\r\nPero incluso en la muerte no está listo para abandonar la vida que apenas vivió, por lo que cuando a Wallace se le da una semana para cruzar, se dispone a vivir toda una vida en siete días.\r\nHilarante, inquietante y amable, Under the Whispering Door es una historia edificante sobre una vida pasada en la oficina y una muerte en la construcción de una casa.', 'BajoLaPuertaSusurrante.jpg'),
(57, 'Un maestro de Djinn', 'P. Djèlí Clark', 'Aunque Fatma el-Sha\'arawi es la mujer más joven que trabaja para el Ministerio de Alquimia, Encantamientos y Entidades Sobrenaturales, ciertamente no es una novata, especialmente después de evitar la destrucción del universo el verano pasado.\r\nEntonces, cuando alguien asesina a una hermandad secreta dedicada a uno de los hombres más famosos de la historia, al-Jahiz, el agente Fatma es llamado al caso. Al-Jahiz transformó el mundo hace 50 años cuando abrió el velo entre los reinos mágico y mundano, antes de desaparecer en lo desconocido. Este asesino dice ser al-Jahiz, volvió a condenar a la era moderna por sus opresiones sociales. Sus peligrosas habilidades mágicas instigan disturbios en las calles de El Cairo que amenazan con extenderse al escenario global.\r\nJunto a sus colegas del Ministerio y su inteligente novia Siti, la Agente Fatma debe desentrañar el misterio detrás de este impostor para restaurar la paz en la ciudad, o enfrentar la posibilidad de que pueda ser exactamente quien parece. ', 'UnMaestrodeDjinn.jpg'),
(58, 'El Irrompible', 'C.L. Clark', 'Touraine es un soldado. Robada cuando era niña y criada para matar y morir por el imperio, su única lealtad es a sus compañeros reclutas. Pero ahora, su compañía ha sido enviada de regreso a su tierra natal para detener una rebelión, y los lazos de sangre pueden ser más fuertes de lo que pensaba.\r\nLuca necesita un renegado. Alguien lo suficientemente desesperado como para pasar de puntillas por el borde de la bayoneta entre la traición y las órdenes. Alguien que puede influir en los rebeldes hacia la paz, mientras que Luca se centra en lo que realmente importa: sacar a su tío de su trono.\r\nA través de asesinatos y masacres, en dormitorios y salas de guerra, Touraine y Luca regatearán sobre el precio de una nación. Pero algunas cosas no están a la venta.', 'ElIrrompible.jpg'),
(59, 'La que se convirtió en el Sol', 'Shelley Parker-Chan', 'En un pueblo azotado por la hambruna en una llanura amarilla polvorienta, dos niños reciben dos destinos. Un niño, grandeza. Una niña, la nada...\r\nEn 1345, China se encuentra bajo el duro dominio mongol. Para los campesinos hambrientos de las llanuras centrales, la grandeza es algo que solo se encuentra en las historias. Cuando al octavo hijo de la familia Zhu, Zhu Chongba, se le da un destino de grandeza, todos están desconcertados en cuanto a cómo sucederá. El destino de la nada recibido por la inteligente y capaz segunda hija de la familia, por otro lado, es solo el esperado.\r\n\r\nSin embargo, cuando un ataque de bandidos deja huérfanos a los dos niños, es Zhu Chongba quien sucumbe a la desesperación y muere. Desesperada por escapar de su propia muerte fatal, la niña usa la identidad de su hermano para ingresar a un monasterio como una joven novicia. Allí, impulsada por su ardiente deseo de sobrevivir, Zhu aprende que es capaz de hacer lo que sea necesario, sin importar cuán insensible sea, para mantenerse oculta de su destino.\r\nDespués de que su santuario es destruido por apoyar la rebelión contra el gobierno mongol, Zhu aprovecha la oportunidad para reclamar otro futuro por completo: la grandeza abandonada de su hermano.', 'LaQueSeConvirtioEnElSol.jpg'),
(60, 'Tierra de Dolor', 'Rivers Solomon', 'Vern, embarazada de siete meses y desesperada por escapar del estricto complejo religioso donde se crió, huye al refugio del bosque. Allí, da a luz a gemelos y planea criarlos lejos de la influencia del mundo exterior.\nPero incluso en el bosque, Vern es una mujer cazada. Obligada a luchar contra la comunidad que se niega a dejarla ir, desata una brutalidad increíble mucho más allá de lo que una persona debería ser capaz de hacer, su cuerpo devastado por cambios inexplicables y extraños.\nPara entender su metamorfosis y proteger a su pequeña familia, Vern tiene que enfrentar el pasado y, lo que es más preocupante, el futuro, fuera del bosque. Encontrar la verdad significará descubrir los secretos del complejo del que huyó, pero también la historia violenta en Estados Unidos que lo produjo.', 'TierraDeDolor.jpg'),
(61, 'La Hipótesis del Amor', 'Ali Hazelwood', 'Como candidata a doctorado de tercer año, Olive Smith no cree en las relaciones románticas duraderas, pero su mejor amiga sí, y eso es lo que la llevó a esta situación. Convencer a Anh de que Olive está saliendo y que está en camino a un feliz para siempre siempre iba a tomar más que trucos mentales Jedi ondulados a mano: los científicos requieren pruebas. Entonces, como cualquier biólogo que se precie, Olive entra en pánico y besa al primer hombre que ve.\r\n\r\nEse hombre no es otro que Adam Carlsen, un joven profesor de tiro caliente, y un muy conocido. Es por eso que Olive se siente positivamente impresionada cuando el tirano de laboratorio reinante de Stanford acepta mantener su farsa en secreto y ser su novio falso. Pero cuando una gran conferencia científica se vuelve loca, poniendo la carrera de Olive en el quemador Bunsen, Adam la sorprende de nuevo con su apoyo inquebrantable y aún más inflexible ...', 'LaHipotesisDelAmor.jpg'),
(62, 'El Engaño del Amor Español', 'Elena Armas', 'Catalina Martín necesita desesperadamente una cita para la boda de su hermana. Especialmente porque su pequeña mentira piadosa sobre su novio estadounidense se ha salido de control. Ahora todos los que conoce, incluidos su ex y su prometida, estarán allí y ansiosos por conocerlo.\r\n\r\nSolo tiene cuatro semanas para encontrar a alguien dispuesto a cruzar el Atlántico y ayudar en su engaño. Nueva York a España no es un vuelo corto y su ruidosa familia no será fácil de engañar.', 'ElEngañoDelAmorEspañol.jpg'),
(63, 'Una Última Parada', 'Casey McQuiston', 'Para la cínica August de veintitrés años, mudarse a la ciudad de Nueva York se supone que le da la razón: que cosas como la magia y las historias de amor cinematográficas no existen, y la única forma inteligente de ir por la vida es solo. No puede imaginar cómo esperar mesas en un restaurante de panqueques las 24 horas y mudarse con demasiados compañeros de cuarto extraños podría cambiar eso. Y ciertamente no hay posibilidad de que su viaje en metro sea algo más que un viaje diario a través del aburrimiento y las fallas eléctricas.\r\n\r\nPero luego, está esta hermosa chica en el tren.\r\n\r\nJane. Deslumbrante, encantadora, misteriosa, imposible Jane. Jane con sus bordes ásperos y su cabello caído y su suave sonrisa, apareciendo con una chaqueta de cuero para salvar el día de agosto cuando más lo necesitaba. El enamoramiento del metro de August se convierte en la mejor parte de su día, pero muy pronto, descubre que hay un gran problema: Jane no solo parece una rockera punk de la vieja escuela. Ella está literalmente desplazada en el tiempo desde la década de 1970, y August tendrá que usar todo lo que trató de dejar en su propio pasado para ayudarla. Tal vez es hora de empezar a creer en algunas cosas, después de todo.\r\n', 'UnaUltimaParada.jpg'),
(64, 'Personas que Conocemos en Vacaciones', 'Emily Henry', 'Poppy y Alex. Alex y Poppy. No tienen nada en común. Es una niña salvaje; viste caquis. Tiene una insaciable pasión por los viajes; prefiere quedarse en casa con un libro. Y de alguna manera, desde que un fatídico auto compartió casa desde la universidad hace muchos años, son los mejores amigos. Durante la mayor parte del año viven muy separados, ella está en la ciudad de Nueva York y él en su pequeña ciudad natal, pero cada verano, durante una década, se han tomado una gloriosa semana de vacaciones juntos.\r\n\r\nHasta hace dos años, cuando lo arruinaron todo. No han hablado desde entonces.\r\n\r\nPoppy tiene todo lo que debería querer, pero está atrapada en una rutina. Cuando alguien le pregunta cuándo fue la última vez que fue realmente feliz, ella sabe, sin lugar a dudas, que fue en ese desafortunado y último viaje con Alex. Y así, decide convencer a su mejor amiga de que se tomen unas vacaciones más juntas: ponga todo sobre la mesa, hágalo todo bien. Milagrosamente, está de acuerdo.', 'GenteVacaciones.jpg'),
(65, 'Actúa a tu edad, Eve Brown', 'Talia Hibbert', 'Eve Brown es un desastre caliente certificado. No importa cuánto se esfuerce por hacer lo correcto, su vida siempre va horriblemente mal, por lo que ha dejado de intentarlo. Pero cuando su marca personal de caos arruina una boda costosa (alguien tuvo que liberar a esas pobres palomas), sus padres trazan la línea. Es hora de que Eve crezca y demuestre su valía, a pesar de que no está del todo segura de cómo...\r\n\r\nJacob Wayne tiene el control. Siempre. El propietario del bed and breakfast tiene la misión de dominar la industria de la hospitalidad, y espera nada menos que la perfección. Entonces, cuando un tornado de cabello púrpura de una mujer aparece de la nada para entrevistarlo para su puesto de chef abierto, él le dice la verdad brutal: no es una oportunidad en el infierno. Luego lo golpea con su auto, supuestamente por accidente. Sí, claro.', 'ActuaEve.jpg'),
(66, 'El Ex Hex', 'Erin Sterling', 'Hace nueve años, Vivienne Jones cuidó su corazón roto como lo haría cualquier joven bruja: vodka, música llorosa, baños de burbujas... y una maldición sobre el horrible novio. Claro, Vivi sabe que no debería usar su magia de esta manera, pero con solo una vela perfumada de \"paseo en el huerto\" a mano, no le preocupa que le cause algo más que un mal día de cabello o dos.\r\n\r\nEso es hasta que Rhys Penhallow, descendiente de los antepasados de la ciudad, rompedor de corazones y molesto como siempre fue, regresa a Graves Glen, Georgia. Lo que debería ser un viaje rápido para recargar las líneas ley de la ciudad y hacer una aparición en el festival anual de otoño se vuelve desastrosamente incorrecto. Con una calamidad tras otra golpeando a Rhys, Vivi se da cuenta de que su pequeño y tonto Ex Hex puede no haber sido tan inofensivo después de todo.', 'ElExHex.jpg'),
(67, 'Dioses de Neón', 'Katee Robert', 'Perséfone Dimitriou, querida por la sociedad, planea huir de la ciudad ultramoderna del Olimpo y comenzar de nuevo lejos de la política de puñaladas por la espalda de las Trece Casas. Pero todo eso se rompe cuando su madre la embosca con un compromiso con Zeus, el peligroso poder detrás de la fachada oscura de su brillante ciudad.\r\n\r\nSin opciones, Perséfone huye a la ciudad prohibida y hace un trato del diablo con un hombre que una vez creyó un mito ... un hombre que la despierta a un mundo que nunca supo que existía.', 'DiosesNeon.jpg'),
(68, 'Siete Días en Junio', 'Tia Williams', 'Eva Mercy, de Brooklyn, es una madre soltera y escritora erótica superventas, que se siente presionada por todos lados. Shane Hall es un autor literario solitario, enigmático y galardonado que, para sorpresa de todos, aparece en Nueva York.\r\n\r\nCuando Shane y Eva se encuentran inesperadamente en un evento literario, las chispas vuelan, levantando no solo sus traumas enterrados en el pasado, sino también las cejas de los literatos negros de Nueva York. Lo que nadie sabe es que veinte años antes, los adolescentes Eva y Shane pasaron una semana loca y tórrida locamente enamorados. Pueden estar fingiendo que todo está bien ahora, pero no pueden negar su química, o el hecho de que se han estado escribiendo en secreto en sus libros desde entonces.\r\n', 'SieteJunio.jpg'),
(69, 'Sucedió un Verano', 'Tessa Bailey', 'Piper Bellinger está de moda, es influyente, y su reputación como una niña salvaje significa que los paparazzi están constantemente pisándole los talones. Cuando demasiado champán y una fiesta fuera de control en la azotea aterrizan a Piper en el slammer, su padrastro decide que ya es suficiente. Así que la corta y envía a Piper y a su hermana a aprender algo de responsabilidad dirigiendo el bar de buceo de su difunto padre ... en Washington.\r\n\r\nPiper ni siquiera ha estado en Westport durante cinco minutos cuando conoce al gran y barbudo capitán de mar Brendan, quien cree que no durará una semana fuera de Beverly Hills. Entonces, ¿qué pasa si Piper no puede hacer matemáticas, y la idea de dormir en un apartamento en mal estado con literas le da urticaria? ¿Qué tan malo podría ser realmente? Está decidida a mostrarle a su padrastro, y al local caliente y gruñón, que es más que una cara bonita.\r\n', 'SucedioVerano.jpg'),
(70, 'La Ecuación del Alma Gemela', 'Christina Lauren', 'La madre soltera Jess Davis es una maga de datos y estadísticas, pero ninguna cantidad de cálculo de números puede convencerla de volver al mundo de las citas. Después de todo, su padre nunca estuvo cerca, su madre de fiesta dura desapareció cuando ella tenía seis años, y su ex decidió que no era \"material de padre\" antes de que naciera su hija. Jess mantiene a sus seres queridos cerca, pero trabajar constantemente para mantenerse a flote es difícil ... y solitario.\r\n\r\nPero luego Jess se entera de GeneticAlly, una nueva y bulliciosa compañía de emparejamiento basada en ADN que se predice que cambiará las citas para siempre. ¿Encontrar un alma gemela a través del ADN? La fiabilidad de los números: Esto Jess entiende.\r\n\r\nAl menos pensó que sí, hasta que su prueba muestra una inaudita compatibilidad del 98 por ciento con otro tema de la base de datos: el fundador de GeneticAlly, el Dr. River Peña. ', 'EcuacionGemela.jpg'),
(71, 'El Principio del Corazón', 'Helen Hoang', 'Cuando la violinista Anna Sun logra accidentalmente el éxito de su carrera con un video viral de YouTube, se encuentra incapacitada y agotada por sus intentos de replicar ese momento. Y cuando su novio de toda la vida anuncia que quiere una relación abierta antes de hacer un compromiso final, una Anna herida y enojada decide que si él quiere una relación abierta, entonces ella también lo hace. Traducción: Ella se va a embarcar en una serie de aventuras de una noche. Cuanto más inaceptables sean los hombres, mejor.\r\n', 'PrincipioCorazon.jpg'),
(72, 'El Viaje por Carretera', 'Beth O’Leary ', '¿Qué pasa si el final del camino es solo el comienzo?\r\n\r\nHace cuatro años, Dylan y Addie se enamoraron bajo el sol de la Provenza. El adinerado estudiante de Oxford Dylan se alojaba en la enorme villa francesa de su amigo Cherry; La niña salvaje Addie pasaba su verano como cuidadora en el lugar. Hace dos años, su relación terminó oficialmente. No han hablado desde entonces.\r\n\r\nHoy, las vidas de Dylan y Addie chocan de nuevo. Es el día antes de la boda de Cherry, y Addie y Dylan chocan autos al comienzo del viaje allí. El coche que conducía Dylan está destrozado, y la boda es en la Escocia rural: nunca llegará a tiempo en transporte público.', 'ViajeCarretera.jpg'),
(73, 'La Ofensiva de Encanto', 'Alison Cochrun', 'Dev Deshpande siempre ha creído en los cuentos de hadas. Así que no es de extrañar entonces que haya pasado su carrera elaborándolos en el reality show de citas de larga duración Ever After. Como el productor más exitoso en la historia de la franquicia, Dev siempre escribe la historia de amor perfecta para sus concursantes, incluso cuando su propia vida amorosa se estrella y se quema. Pero luego el programa elige al deshonrado prodigio tecnológico Charlie Winshaw como su estrella.\r\n\r\nCharlie está lejos del romántico príncipe azul que Ever After espera. No cree en el amor verdadero, y solo aceptó el espectáculo como un último esfuerzo para rehabilitar su imagen. Frente a las cámaras, es un desastre rígido y ansioso sin idea de cómo salir con veinte mujeres en la televisión nacional. Detrás de escena, es frío, incómodo y emocionalmente cerrado.', 'OfensivaEncanto.jpg'),
(74, 'La Vida es Demasiado Corta', 'Abby Jimenez', 'Cuando Vanessa Price renunció a su trabajo para perseguir su sueño de viajar por el mundo, no esperaba ganar millones de seguidores en YouTube que compartieron su alegría de aprovechar cada momento. Para ella, vivir cada día al máximo no es solo un lema. Su madre y su hermana nunca vieron la edad de 30 años, y Vanessa no quiere dar nada por sentado.\r\n\r\n\r\nPero después de que su media hermana de repente deja a Vanessa bajo la custodia de su hija pequeña, la vida pasa de la \"aventura diaria\" a la \"mala de siguiente nivel\" (ahora con vómito de bebé adicional en el cabello). La última persona que Vanessa espera que aparezca ofreciendo ayuda es el abogado de al lado, Adrian Copeland. Después de todo, ella apenas lo conoce. Nadie le advirtió que él era el Domador Secreto de Bebés o que pasaría mucho tiempo con él y su Chihuahua geriátrico.\r\n\r\n\r\nAhora está sintiendo cosas que ha jurado no sentir. Porque lo único peor que enamorarse de Adrián es encontrar un poco de esperanza para un futuro que tal vez nunca vea.', 'VidaDemasiadoCorta.jpg'),
(75, 'Segunda Primera Impresión', 'Sally Thorne', 'Ruthie Midona ha trabajado en la recepción de Providence Luxury Retirement Villa durante seis años, dedicando toda su vida adulta a cuidar a los residentes de la Villa, mantener la propiedad (con la ayuda de tutoriales de YouTube de bricolaje) y proteger a las tortugas en peligro de extinción que viven en los jardines de la Villa. En algún momento del camino, ha olvidado que es joven y hermosa, y que hay un mundo fuera del trabajo, hasta que conoce al hijo del promotor inmobiliario que acaba de adquirir el centro de jubilación.\r\n\r\nTeddy Prescott ha pasado los últimos años de fiesta, durmiendo hasta tarde, tatuándose cuando está aburrido y, en general, no se toma la vida demasiado en serio, algo que su padre, que sueña con preparar a Teddy para que sea su sucesor, no puede entender. Cuando Teddy necesita un lugar para estrellarse, su padre aprovecha la oportunidad para que crezca. Dejará que Teddy se quede en una de las cabañas en el lugar en la casa de retiro, pero solo si trabaja para ganarse la vida. Teddy está de acuerdo: puede cambiar algunas bombillas y recortar algunos setos, sin sudor. Pero Ruthie también tiene planes para Teddy.', 'SegundaImpresion.jpg'),
(76, 'La Charla Ex', 'Rachel Lynn Solomon', 'Shay Goldstein ha sido productora en su estación de radio pública de Seattle durante casi una década, y no puede imaginar trabajar en ningún otro lugar. Pero últimamente ha sido un choque constante entre ella y su nuevo colega, Dominic Yun, quien acaba de salir de un programa de maestría en periodismo y está convencido de que sabe todo sobre la radio pública.\r\n\r\nCuando la estación en apuros necesita un nuevo concepto, Shay propone un espectáculo que su jefe ilumina con emoción. En The Ex Talk, dos ex ofrecerán consejos de relación en vivo, en el aire. Su jefe decide que Shay y Dominic son los coanfitriones perfectos, dado lo mucho que ya se desprecian mutuamente. A ninguno de los dos le encanta la idea de mentir a los oyentes, pero es esto o el desempleo. Su audiencia invierte rápidamente, y no pasa mucho tiempo antes de que The Ex Talk se convierta en una escucha obligada en Seattle y suba en las listas de podcasts.', 'LaCharlaEx.jpg'),
(77, 'Mientras Estábamos Saliendo', 'Jasmine Guillory', 'Ben Stephens nunca se ha molestado con relaciones serias. Tiene muchas citas casuales para mantenerlo ocupado, drama familiar que está tratando de ignorar y su trabajo publicitario en el que enfocarse. Sin embargo, cuando Ben aterriza una gran campaña publicitaria con la estrella de cine Anna Gardiner, es difícil mantenerla puramente profesional. Anna no solo es hermosa y sexy, también tiene los pies en la tierra y es considerada, y él no puede evitar coquetear un poco ...\r\n\r\nAnna Gardiner tiene una misión: hacerse un nombre familiar, y esta campaña publicitaria será una gran distracción mientras espera saber si ha reservado su próxima película. Sin embargo, no esperaba que Ben Stephens fuera su mayor distracción. Ella sabe que mezclar negocios con placer nunca funciona, pero ¿por qué no disfrutar de un coqueteo inofensivo?', 'CuandoSaliendo.jpg'),
(78, 'El Plan de Citas', 'Sara Desai', 'Daisy Patel es una ingeniera de software que entiende las listas y la lógica mejor que los jefes y novios. Con su vida todo planeado, y sin interés en el amor, lo único que no puede darle a su familia es el matrimonio que esperan. Con pocas opciones, le pide a su enamorado de la infancia que sea su prometido señuelo.\r\n\r\nLiam Murphy es un capitalista de riesgo con algo que demostrar. Cuando se entera de que su herencia depende de estar casado, se da cuenta de que la hermana pequeña de su mejor amigo tiene la solución perfecta a su problema. Un matrimonio de conveniencia sacará a los parientes de Daisy de su espalda y cumplirá con los términos del testamento de su difunto abuelo. Si tan solo no le hubiera roto el tierno corazón adolescente hace nueve años ...', 'PlanCita.jpg'),
(79, 'Enviado', 'Angie Hockman', 'Entre tomar clases nocturnas para su MBA y su exigente trabajo diario en una línea de cruceros, la gerente de marketing Henley Evans apenas tiene tiempo para sí misma, y mucho menos para su familia, amigos o citas. Pero cuando es preseleccionada para la promoción de sus sueños, todos sus sacrificios finalmente parecen valer la pena.\r\n\r\n¿El único problema? Graeme Crawford-Collins, el gerente remoto de redes sociales y la pesadilla de su existencia, también está listo para el puesto. Aunque nunca se han conocido en persona, sus épicas batallas por correo electrónico son cosa de leyenda de la oficina.\r\n\r\nSu jefe les encarga a cada uno de ellos la redacción de una propuesta sobre cómo aumentar las reservas en galápagos: la mejor propuesta gana la promoción. Solo hay una trampa: tienen que ir en un crucero de compañía a las Islas Galápagos... junto. Pero cuando los dos se encuentran en el barco, Henley se sorprende al descubrir que el verdadero Graeme no se parece en nada a lo que ella imaginaba. Mientras exploran las islas juntos, pronto encuentra la línea entre el odio y el gusto más delgada que una postal.\r\n\r\nCon sus sueños profesionales en la mira y una creciente atracción por la competencia, Henley comienza a cuestionar sus elecciones de vida. Porque, ¿de qué sirve trabajar todo el tiempo si nunca vives realmente?', 'Enviado.jpg'),
(80, 'Cómo fallar en el coqueteo', 'Denise Williams', 'Una atrevida lista de tareas pendientes y un curso intensivo de coqueteo ponen patas arriba el mundo de un triunfador tipo A.\r\n\r\nCuando su departamento de agitación aterriza en el bloque de corte de la universidad, los amigos de la profesora Naya Turner la convencen de que se deshaga de su cárdigan fruncido para una noche en la ciudad. Por una noche, su enfoque se desviará de su exigente trabajo y abordará un nuevo tipo de lista de tareas pendientes. Cuando conoce a un encantador extraño en la ciudad por negocios, él presenta la oportunidad perfecta para marcar los artículos de su lista. Deja que el tipo le compre una bebida. Comprobar. Prueba algo nuevo. Comprobar. Una conexión sin ataduras. Comprobar... casi.\r\n\r\nJake la hace reír y desafía a Naya a reconstruir su confianza, que fue abandonada por su abusivo ex novio. Pronto está coqueteando con la posibilidad de una relación romántica más seria, excepto que nada puede ser tan fácil. Las complicadas cuerdas en torno a su noviazgo con Jake podrían destruir su carrera.\r\n\r\nNaya tiene dos opciones. Puede proteger su reputación profesional y volver a su antigua vida o puede coquetear con lo desconocido y quedarse con la persona que la hace sentir que finalmente está viviendo de nuevo.', 'Comofallarenelcoqueteo.jpg');

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
('simonvillalon10@gmail.com', 'VgpWMlc5VGIDMAEgBzEEJQI+AzhZbFVhUGI=', 'ab44912fa0d30a26daa918a263028e46', 'yes', 'Saimon231', 1),
('hgjkghjkhgjkh@gmail.com', 'BzpSZVBjB2Y=', '96109e4b094c0cfd5b7d85516ac24532', 'no', '2123412342134qwerdsafdsfa', 19),
('aasdfsdfasd@gmail.com', 'ATwDNFFiUjM=', 'd16b6d773fe9fe3d227933e0e58baadb', 'no', '1324123413', 20),
('dairaceballos2345@gmail.com', 'BGxUMAZvDilUZwEwWmwAMVVnB2JQOQJoDHgHZFNjBzcFOlcy', '4e749467ce872295107ba06fdeca2bdd', 'no', 'daiceballos', 21);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `categoriausuario`
--
ALTER TABLE `categoriausuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=558;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
