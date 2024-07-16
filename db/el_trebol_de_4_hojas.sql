-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 19:17:29
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `el_trebol_de_4_hojas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id`, `producto_id`, `usuario_id`, `cantidad`) VALUES
(1, 9, 1, 2),
(2, 10, 1, 1),
(3, 4, 2, 5),
(4, 1, 2, 1),
(5, 7, 2, 1),
(6, 6, 2, 2),
(7, 2, 2, 1),
(8, 3, 1, 1),
(9, 8, 1, 1),
(10, 1, 1, 1),
(11, 2, 1, 1),
(12, 6, 1, 1),
(13, 4, 1, 1),
(14, 5, 1, 1),
(15, 7, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'manga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `medio_pago` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_compra` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`id`, `nombre`) VALUES
(1, 'panini'),
(2, 'ivrea'),
(3, 'ovni press'),
(4, 'kemuri');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `apellido`, `email`, `telefono`, `comentario`) VALUES
(1, 'Augusto', 'Torres', 'augus.etn26@gmail.com', 1123456789, 'Tienen buenos precio.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `portada` varchar(100) NOT NULL,
  `editorial_id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `stock` int(11) NOT NULL,
  `descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria_id`, `titulo`, `portada`, `editorial_id`, `precio`, `descripcion`, `stock`, `descuento`) VALUES
(1, 1, 'JUJUTSU KAISEN VOL.01', 'productos/jujutsu_kaisen_vol01/', 1, 3000, '¡LLEGA JUJUTSU KAISEN, EL SHÔNEN QUE ESTÁ CAUSANDO FUROR EN JAPÓN!\r\nYûji Itadori es un estudiante con unas habilidades físicas excepcionales. Todos los días, como rutina, va al hospital a visitar a su abuelo enfermo y decide apuntarse al club de ocultismo del instituto para no dar un palo al agua… Sin embargo, un buen día el sello del talismán que se hallaba escondido en su instituto se rompe, y comienzan a aparecer unos monstruos. Ante este giro de los acontecimientos, Itadori decide adentrarse en el instituto para salvar a sus compañeros. ¿Qué le deparará el destino?', 100, 0),
(2, 1, 'DEATH NOTE VOL.01', 'productos/death_note_vol01/', 2, 3200, 'Ivrea se complace en publicar la obra más popular y aclamada de la dupla Tsugumi Ohba + Takeshi Obata, de quienes ya disfrutamos completa la serie BAKUMAN. Ni más ni menos que DEATH NOTE.\r\n\r\nLa historia se centra en Light Yagami, uno de los mejores estudiantes de todo Japón que lleva una vida demasiado aburrida para sus estándares, y que juzga al mundo por estar podrido. Todo cambia radicalmente cuando se topa con un cuaderno (el que da nombre a la serie) que confiere poderes sobrenaturales a su portador: si se escribe el nombre de una persona y se visualiza mentalmente su rostro, esta morirá en la forma deseada (o de un ataque al corazón si no se especifica). Cuando Light confirma que es cierto, decide utilizarlo para matar a todo aquel que está corrompiendo al mundo, para liberarlo de toda maldad. Pronto descubrirtá el origen del cuaderno, quién era su anterior portador, y la trama de consecuencias que sus acciones desencadenarán. Por ejemplo, la aparición de L, un detective decidido a atraparlo y descubrir su verdadera identidad.\r\n\r\nDeath Note se publicó originalmente en la revista Shonen Jump de Shueisha, entre 2003 y 2006, totalizando 12 tomos.', 100, 0),
(3, 1, 'MY HERO ACADEMIA VOL.01', 'productos/my_hero_academia_vol01/', 2, 3200, 'BOKU NO HERO ACADEMIA ES UNA SERIE CREADA POR KOHEI HORIKOSHI, BASADO EN UN ONE-SHOT ANTERIOR DEL MISMO AUTOR; LA HISTORIA SE UBICA EN UNA REALIDAD EN LA QUE MÁS DEL 80% DE LA POBLACIÓN MUNDIAL HA DESARROLLADO UN “DON”, ES DECIR, SUPERPODERES QUE LES OTORGAN GRANDES HABILIDADES. ESO ES LO COMÚN, LO NATURAL, LO QUE TODOS ESPERAN OBTENER EN ALGÚN MOMENTO. COMO CONSECUENCIA, TAMBIÉN SON MONEDA CORRIENTE LOS SUPERHÉROES Y SUPERVILLANOS, Y SUS RESPECTIVOS SEGUIDORES Y DETRACTORES.\r\nEL POBRE IZUKU MIDORIYA, UN MEGA FAN DE LOS SUPERHÉROES, SE ENCUENTRA EN LA PARADÓJICA SITUACIÓN DE PERTENECER A ESA FRACCIÓN MINORITARIA DE GENTE SIN PODERES. ESO NO LE IMPIDE SOÑAR CON ESTUDIAR EN LA ACADEMIA DE HÉROES Y LLEGAR A SER UNO TAN GENIAL COMO SU ÍDOLO, EL INVENCIBLE ALL MIGHT. A PESAR DE QUE LA REALIDAD LO GOLPEA UNA Y OTRA VEZ, UN ENCUENTRO INESPERADO CON SU ÍDOLO CAMBIA EL RUMBO Y SI LOGRA SOBREVIVIR A UNA BATALLA MORTAL CONTRA UN SUPERVILLANO, LLEVAR A CABO UN ENTRENAMIENTO INFERNAL Y TRAGARSE UN PELO TODOPODEROSO (?) SE ACERCARÁ A SUS SUEÑOS. ¡Y ESO ES SÓLO EL COMIENZO, YA QUE ESTA SINOPSIS NI SIQUIERA CUBRE TODO EL PRIMER TOMO! GRANDES DILEMAS, MUCHO HUMOR Y LA MEJOR COMBINACIÓN DE SHONEN DE PELEAS Y LA TRADICIÓN SUPERHEROICA ESPERAN EN CADA TOMO, CON MUCHAS VUELTAS DE TUERCA EN CADA SAGA.\r\nESTE IMPARABLE MANGA COMENZÓ SU ANDADURA EN EL AÑO 2014 EN LAS PÁGINAS DE LA REVISTA SHONEN JUMP (HOGAR DE DRAGON BALL, BLEACH Y BAKUMAN, ENTRE OTROS TANQUES), HOY EN DÍA SIGUE PUBLICÁNDOSE Y ACTUALMENTE ALCANZA YA LOS 16 TOMOS RECOPILATORIOS. CUENTA ADEMÁS CON VARIAS ADAPTACIONES, ENTRE LAS QUE SE DESTACAN DOS TEMPORADAS DE ANIME PARA TV Y NUMEROSOS VIDEOJUEGOS.', 100, 0),
(4, 1, 'KIMETSU NO YAIBA VOL.01', 'productos/kimetsu_no_yaiba_vol01/', 2, 3200, 'Narra las aventuras de Tanjiro Kamado, un joven amable y de buen corazón que vive con su madre y cinco hermanos en las montañas, y se dedica a vender carbón para subsistir. Un día que Tanjiro estaba volviendo de sus labores, un aldeano le sugiere pasar la noche en su casa para prevenir que se lo morfe un Oni. Tanjiro acepta, pero cuando finalmente regresa a su hogar, descubre que aunque él zafó, toda su familia fue devorada por un demonio, salvo su hermanita Nezuko, ¡que terminó convertida en uno de ellos! En su desesperación por encontrar ayuda, Tanjiro se topa con un asesino de demonios llamado Giyu Tomioka, quien descubre que extrañamente Nezuko retiene suficiente de su humanidad para querer proteger a su hermano. Sorprendido por esto, y por las habilidades de combate del chico, le sugiere que vaya a visitar a su maestro. Así comienzan las aventuras de Tanjiro para convertirse en un asesino de demonios y lograr encontrar tanto una cura para su hermana, como al asesino de su familia, mientras se topa con amigos y rivales de lo más inesperados.', 100, 0),
(5, 1, 'BLUE LOCK VOL.01\r\n', 'productos/blue_lock_vol01/', 2, 3200, 'La eliminación del seleccionado japonés del Mundial de 2018 impulsa a la Asociación de Fútbol de Japón a iniciar un programa para captar jugadores de los equipos de escuelas secundarias y prepararlos para la próxima Copa del Mundo en 2022. Pero no de la forma más habitual… El objetivo es destruir la mentalidad perdedora de los futbolistas japoneses. Para eso, introduce un nuevo y radical régimen de entrenamiento: aislar a 300 jóvenes delanteros en una escuela/prisión llamada “Blue Lock” para que entrenen rigurosamente y, así, producir al delantero más egoísta del mundo\r\n\r\nSERIE ABIERTA EN JAPÓN FORMATO: TANKOUBON (11,5x17 cm) con sobrecubierta 200 págs. aprox. INCLUYE PÁGINAS A COLOR', 100, 0),
(6, 1, 'ATTACK ON TITAN VOL.01', 'productos/attack_on_titan_vol01/', 3, 3300, 'Autor: Hajime Isayama\r\n\r\nDurante el último siglo, lo que quedaba de la humanidad se vio obligada a refugiarse en una ciudad enorme y escondida, protegida por tres inmensos muros debido al temor hacia los extraños y gigantescos Titanes. Poco se sabe acerca de sus orígenes, pero la repentina aparición de un enorme Titán está a punto de cambiarlo todo…\r\n\r\nCorresponde a Shingeki no Kyojin Vol. 1\r\n\r\nFormato: Libro con solapas | 13,5x17 cm | 192 págs\r\nISBN: 978-987-724-231-7', 100, 0),
(7, 1, 'TO YOUR ETERNITY VOL.01', 'productos/to_your_eternity_vol01/', 2, 3200, 'Un misterioso ser inmortal es enviado para recabar información. “Eso” puede cambiar de forma, adaptarse a su entorno y aprender de todo lo que lo rodea. Pasando por la más ámplia gama de emociones, sensaciones y vivencias, “Fushi” (por “Fushimi”: Inmortal), tal como lo apodarán varios de los que lo conozcan, transita su viaje eterno, enfrentando enemigos que pueden llegar a arrebatarle hasta su ser. Después del sorprendente Koe no Katachi (Una voz silenciosa), Yoshitoki Oima regresa con una nueva serie para llorar, reír y reflexionar. To Your Eternity es un manga completamente impredecible, como la vida misma. Su éxito derivó en una impactante adaptación a anime cuya primera temporada de 20 episodios puede verse en Crunchyroll. ¡¡Edición idéntica a la japonesa, formato tankoubon que incluye páginas a color exclusivas!!\r\n\r\nSERIE ABIERTA EN JAPÓN FORMATO: TANKOUBON (11,5x17 cm) con sobrecubierta 200 págs. aprox. INCLUYE PÁGINAS COLOR', 100, 0),
(8, 1, 'K-ON COMPLETE EDITION', 'productos/k-on_complete_edition/', 4, 5500, 'Yui Hirasawa está en primero año de preparatoria y debe buscar un club al unirse. Su impaciencia la hace anotarse al club de música moderna a pesar de no saber tocar ningún instrumento. Ahí conoce a Mio, Mugi y Ritsu, tres chicas que tratarán de convencerla de quedarse para que el club no cierre.', 100, 0),
(9, 1, 'KOMI-SAN NO PUEDE COMUNICARSE VOL.01\r\n', 'productos/komi-san_no_puede_comunicarse_vol01/', 2, 6000, 'Hitohito Tadano acaba de empezar la secundaria alta anhelando que sea pura paz y tranquilidad, pero sus planes se truncan cuando termina sentado al lado de la perfecta Shoko Komi. Ella es linda, inteligente, educada y hasta huele bien. Pero tiene 0 dotes sociales y no sabe cómo corno comunicarse con los demás. Es ahí que Tadano se sube al pony y se propone ayudarla a su compañera hasta que se haga de cien amigos, y con suerte algo más.', 100, 0),
(10, 1, 'MIERUKO-CHAN VOL.01\r\n', 'productos/mieruko-chan_vol01/', 2, 3600, '¡Mieruko-chan llega para plantearnos una duda: ¿es mejor mirar lo que nos aterroriza a la cara y enfrentarse a ello o hacer como si no existiera?! Miko es una chica común y corriente que vive su vida escolar tranquilamente hasta que un día empieza a ver horribles monstruos allá donde va y es la única consciente de su presencia. Aunque tenga miedo, decide que lo mejor es no hacerles caso y continuar con su vida como si no pasara nada. Ignorar a los monstruos, a cada cual más grotesco y espantoso, no significa que la pobre no sufra con las terroríficas apariciones y a veces tenga que actuar para que los seres no se ensañen con sus amigos y su familia, pero todo lo hace desde la posición más estoica posible. ¿Por qué Miko es capaz de ver a esas criaturas y además es la única que puede hacerlo?', 100, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `edad` int(11) NOT NULL,
  `DNI` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` int(11) NOT NULL,
  `rol` int(11) NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `fecha_baja` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `edad`, `DNI`, `email`, `contraseña`, `direccion`, `telefono`, `rol`, `fecha_alta`, `fecha_baja`) VALUES
(1, 'Paul', 'Diego', 17, 12345678, 'diego.paul.et.n26@gmail.com', '35a07086b9f199a594fd716c33bba45e69081fe7', '', 1123456789, 1, '2023-11-27 13:27:27', NULL),
(2, 'Augusto', 'Torres', 17, 12345678, 'augusto.etn26@gmail.com', 'e125b4bb04bbd2ec7527bc75812479db10fda4cd', '', 1123456789, 0, '2023-11-27 13:27:27', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
