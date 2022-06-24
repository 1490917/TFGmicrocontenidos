-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 06:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `def1`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignaturas`
--

CREATE TABLE `assignaturas` (
  `codi` int(11) NOT NULL,
  `curs` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `nom_grau` varchar(65) DEFAULT NULL,
  `nom` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL DEFAULT 'Asignatura',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignaturas`
--

INSERT INTO `assignaturas` (`codi`, `curs`, `semestre`, `nom_grau`, `nom`, `password`, `updated_at`, `created_at`) VALUES
(113, 1, 1, 'Grado TFG', 'Treball de Fi de Grau', 'Asignatura2', '2022-06-18 06:05:12', NULL),
(114, 1, 1, 'Grado TFG', 'TFG', 'Asignatura3', NULL, NULL),
(44445, 2, 3, 'Grado en Testing', 'Test i Qualitat del Software', 'Asignatura', '2022-06-18 06:02:45', '2022-06-18 06:02:29'),
(77777, 4, 1, 'Físicaaa', 'ITX', 'Asignatura', '2022-06-16 11:51:46', '2022-06-14 23:50:15'),
(100137, 1, 1, 'Enginyeria Informàtica', 'Mecànica i Relativitat', 'MR_F_TFG_XATBOT', '2022-05-22 13:27:13', NULL),
(102761, 4, 1, 'Enginyeria Informàtica', 'Gestió de Projectes2', 'GP_ENG_TFG_XATBOT', '2022-06-14 23:49:15', NULL),
(106542, 4, 0, 'Enginyeria Informàtica', 'Treball de Final de Grau', 'TFG_ENG_TFG_XATBOT', '2022-05-22 13:27:30', NULL),
(345322, 4, 1, 'Enginyeria Informàtica', 'Sistemas de Informacion', 'Asignatura', '2022-06-14 23:49:55', '2022-06-14 23:49:55'),
(1027600, 4, 1, 'Enginyeria Informàtica', 'Gestió de Projectes', 'GP_ENG_TFG_XATBOT', '2022-06-16 11:52:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `consulta`
--

CREATE TABLE `consulta` (
  `id_faq` int(11) NOT NULL,
  `titol_faq` varchar(65) NOT NULL,
  `niu_estudiant` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `valoracio` int(11) NOT NULL,
  `codi_assignatura` int(11) DEFAULT NULL,
  `nom_grau` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consulta`
--

INSERT INTO `consulta` (`id_faq`, `titol_faq`, `niu_estudiant`, `data`, `valoracio`, `codi_assignatura`, `nom_grau`) VALUES
(0, 'Horaris de l\'assignatura.', 1111111, '2022-01-31 16:18:20', 0, 1027600, 'Grado TFG'),
(0, 'Horaris de l\'assignatura.', 1456958, '2022-02-01 17:20:26', 0, 1027600, 'Grado TFG'),
(0, 'Informació general sobre el grau.', 1456958, '2022-02-03 12:15:50', 0, NULL, 'Grado TFG'),
(0, 'Informació general sobre el grau.', 1456958, '2022-02-03 12:20:00', 0, NULL, 'Grado TFG'),
(0, 'PREGUNTA B sobre el tema Introducció Gestió de Projectes.', 1456958, '2022-02-03 12:37:11', 0, 1027600, 'Grado TFG'),
(0, 'PREGUNTA B sobre el tema Selecció de projectes.', 1456958, '2022-02-03 12:08:50', 0, 1027600, 'Grado TFG'),
(0, 'PREGUNTA J sobre el tema Cicle de Vida del Projecte.', 1456958, '2022-02-03 12:21:06', 0, 1027600, 'Grado TFG'),
(0, 'PREGUNTA K sobre el tema Cicle de Vida del Projecte.', 1111111, '2022-01-31 16:18:45', 0, 1027600, 'Grado TFG'),
(0, 'Quines mencions té aquest grau?', 1456958, '2022-02-03 12:21:51', 0, NULL, 'Grado TFG'),
(0, 'Quines són les assignatures optatives  d\'aquest grau?', 1456958, '2022-02-03 12:20:05', 0, NULL, 'Grado TFG'),
(0, 'Quines són les assignatures optatives  d\'aquest grau?', 1456958, '2022-02-03 12:36:58', 0, NULL, 'Grado TFG'),
(0, 'Sobre l\'avaluació.', 1111111, '2022-01-31 16:18:05', 0, 1027600, 'Grado TFG'),
(0, 'Sobre l\'avaluació.', 1456958, '2022-02-01 17:20:16', 0, 1027600, 'Grado TFG'),
(0, 'Sobre l\'avaluació.', 1456958, '2022-02-03 12:08:19', 0, 1027600, 'Grado TFG'),
(0, 'Sobre l\'avaluació.', 1456958, '2022-02-03 12:20:41', 0, 1027600, 'Grado TFG'),
(0, 'Sobre l\'avaluació.', 1456958, '2022-02-03 12:37:16', 0, 1027600, 'Grado TFG');

-- --------------------------------------------------------

--
-- Table structure for table `estudiants`
--

CREATE TABLE `estudiants` (
  `codi_assignatura` int(11) NOT NULL,
  `id_users` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `titol` varchar(65) NOT NULL,
  `resposta` text NOT NULL,
  `categoria` varchar(65) NOT NULL DEFAULT 'Información general',
  `codi_assignatura` int(11) DEFAULT NULL,
  `nom_grau` varchar(65) DEFAULT NULL,
  `titol_tema` varchar(65) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`titol`, `resposta`, `categoria`, `codi_assignatura`, `nom_grau`, `titol_tema`, `id`, `updated_at`, `created_at`) VALUES
('Sobre l\'avaluació.', '<b>Càlcul de la nota final:</b>\r\n\r\n- <b>Teoria</b> (mínim 5 de 10), que correspon al 50% de la nota base final. La nota de teoria serà la mitjana ponderada de les parts avaluades:\r\n\r\n<b>Exàmens d’avaluació del coneixement teòric i tècniques de l’assignatura (90%):</b>\r\n\r\n--- 50% - 1er EXAMEN (Octubre): Estudi de Viabilitat del Projecte\r\n--- 50% - 2on EXAMEN (Gener, data prevista pel centre): Implementació i seguiment del Projecte\r\n--- En cas de suspendre una de les parts amb menys de 4, o voler pujar nota: 100% Examen Recuperació (data prevista pel centre). Caldrà fer un examen de les dues parts, independentment de si heu suspès un dels parcials o tots dos.\r\n\r\nNOTA MÍNIMA DELS PARCIALS PER FER MITJANA: 4\r\n\r\n<b>Exercicis de tècniques</b> (10%): Exercicis proposats a classe, que s’hauran d’entregar el dia indicat pel professor. Els exercicis no són obligatoris, però sí molt recomanables i necessaris per optar a matrícula d\'honor. No es poden recuperar.\r\n\r\n<b>Assistència a conferències</b> 0,1 punts a sumar a la nota final de teoria per assistència a cada una de les conferències o activitats proposades.\r\n\r\n- <b>Pràctiques</b> (mínim 5 de 10), que correspon al 50% de la nota base final.\r\n\r\n\r\nPer més info. consultar:\r\nhttps://guies.uab.cat/guies_docents/public/portal/html/2021/assignatura/102760/ca', 'dades', 1027600, 'Enginyeria Informàtica', NULL, 1, NULL, NULL),
('Horaris de l\'assignatura.', 'Els horaris de l\'assignatura es poden trobar en el següent enllaç:\r\nhttps://www.uab.cat/doc/Horari_GEI_Curs4_Sem1', 'dades', 1027600, 'Enginyeria Informàtica', NULL, 2, NULL, NULL),
('PREGUNTA A sobre el tema Introducció Gestió de Projectes.', 'RESPOSTA A Introducció Gestió de Projectes.', 'dades', 1027600, 'Enginyeria Informàtica', 'Introducció Gestió de Projectes', 3, NULL, NULL),
('PREGUNTA B sobre el tema Introducció Gestió de Projectes.', 'RESPOSTA B Introducció Gestió de Projectes.', 'dades', 1027600, 'Enginyeria Informàtica', 'Introducció Gestió de Projectes', 4, NULL, NULL),
('PREGUNTA C sobre el tema Introducció Gestió de Projectes.', 'RESPOSTA C Introducció Gestió de Projectes.', 'dades', 1027600, 'Enginyeria Informàtica', 'Introducció Gestió de Projectes', 5, NULL, NULL),
('PREGUNTA A sobre el tema Selecció de projectes.', 'RESPOSTA A Selecció de projectes.', 'dades', 1027600, 'Enginyeria Informàtica', 'Selecció de Projectes', 6, NULL, NULL),
('PREGUNTA B sobre el tema Selecció de projectes.', 'RESPOSTA B Selecció de projectes.', 'dades', 1027600, 'Enginyeria Informàtica', 'Selecció de Projectes', 7, NULL, NULL),
('PREGUNTA C sobre el tema Selecció de projectes.', 'RESPOSTA C Selecció de projectes.', 'dades', 1027600, 'Enginyeria Informàtica', 'Selecció de Projectes', 8, NULL, NULL),
('PREGUNTA A sobre el tema Cicle de Vida del Projecte.', 'RESPOSTA A Cicle de Vida del Projecte.', 'dades', 1027600, 'Enginyeria Informàtica', 'Cicle de Vida del Projecte', 9, NULL, NULL),
('PREGUNTA B sobre el tema Cicle de Vida del Projecte.', 'RESPOSTA B Cicle de Vida del Projecte.', 'dades', 1027600, 'Enginyeria Informàtica', 'Cicle de Vida del Projecte', 10, NULL, NULL),
('PREGUNTA C sobre el tema Cicle de Vida del Projecte.', 'RESPOSTA C Cicle de Vida del Projecte.', 'dades', 1027600, 'Enginyeria Informàtica', 'Cicle de Vida del Projecte', 11, NULL, NULL),
('PREGUNTA D sobre el tema Cicle de Vida del Projecte.', 'RESPOSTA D Cicle de Vida del Projecte.', 'dades', 1027600, 'Enginyeria Informàtica', 'Cicle de Vida del Projecte', 12, NULL, NULL),
('PREGUNTA E sobre el tema Cicle de Vida del Projecte.', 'RESPOSTA E Cicle de Vida del Projecte.', 'dades', 1027600, 'Enginyeria Informàtica', 'Cicle de Vida del Projecte', 13, NULL, NULL),
('PREGUNTA H sobre el tema Cicle de Vida del Projecte.', 'RESPOSTA H Cicle de Vida del Projecte.', 'dades', 1027600, 'Enginyeria Informàtica', 'Cicle de Vida del Projecte', 14, NULL, NULL),
('PREGUNTA I sobre el tema Cicle de Vida del Projecte.', 'RESPOSTA I Cicle de Vida del Projecte.', 'dades', 1027600, 'Enginyeria Informàtica', 'Cicle de Vida del Projecte', 15, NULL, NULL),
('PREGUNTA J sobre el tema Cicle de Vida del Projecte.', 'RESPOSTA J Cicle de Vida del Projecte.', 'dades', 1027600, 'Enginyeria Informàtica', 'Cicle de Vida del Projecte', 16, NULL, NULL),
('PREGUNTA K sobre el tema Cicle de Vida del Projecte.', 'RESPOSTA K Cicle de Vida del Projecte.', 'dades', 1027600, 'Enginyeria Informàtica', 'Cicle de Vida del Projecte', 17, NULL, NULL),
('Informació general sobre el grau1', '1Pots trobar informació general sobre el grau a la següent pàgina.https://www.uab.cat/web/estudiar/llistat-de-graus/informacio-general/enginyeria-informatica-1216708251447.html?param1=1263367146646', 'Informacion general', 44445, 'Grado TFG', 'Tema Testing', 18, '2022-06-19 14:52:03', NULL),
('Quines mencions té aquest grau?', 'Menció en Enginyeria del Software\r\nMenció en Enginyeria de Computadors\r\nMenció en Computació\r\nMenció en Tecnologies de la Informació\r\nMenció en Sistemes d\'Informació (aquesta menció, actualment, no es programa)\r\n\r\nhttps://www.uab.cat/web/estudiar/llistat-de-graus/pla-d-estudis/pla-d-estudis-i-horaris/enginyeria-informatica-1345467811493.html?param1=1263367146646', 'grau', NULL, 'Enginyeria Informàtica', NULL, 19, NULL, NULL),
('Quines són les assignatures optatives  d\'aquest grau?', '- Pràctiques Externes\r\n- Anglès Professional I\r\n- Anglès Professional II\r\n- Tendències Actuals\r\n- Aplicacions de la Teoria de Codis (1)\r\n- Internet de les Coses\r\n- Tecnologia Blockchain i Criptomonedes (1)\r\n- Tecnologies de Compressió de la Informació (1)(1) Aquestes assignatures optatives s\'ofereixen només als alumnes que cursen la menció en Tecnologies de la Informació.\r\n\r\nL\'estudiant també pot cursar, com a optativa, qualsevol assignatura dels blocs de tecnologia específica que no hagi cursat com a obligatòria.\r\n\r\n\r\nPer més info. consultar:\r\nhttps://www.uab.cat/web/estudiar/llistat-de-graus/pla-d-estudis/pla-d-estudis-i-horaris/enginyeria-informatica-1345467811493.html?param1=1263367146646', 'grau', NULL, 'Enginyeria Informàtica', NULL, 20, NULL, NULL),
('Què és el TFG?', 'És un <b>exercici original a realitzar individualment i presentar i defensar davant un tribunal universitari</b>, consistent en un projecte en l\'àmbit de les tecnologies específiques de l\'Enginyeria en Informàtica de caire professional en el que es sintetitzin i integrin les competències adquirides en els ensenyaments. Aquest treball suposa una càrrega de treball personal de l\'estudiant de 300 hores.\r\n\r\n\r\nPer més info. consultar:\r\nhttps://guies.uab.cat/guies_docents/public/portal/html/2021/assignatura/106542/ca', 'dades', 106542, 'Enginyeria Informàtica', NULL, 21, NULL, NULL),
('Qui pot oferir treballs?', 'a) <b>Professorat/departaments.<7b> Seguint el calendari aprovat per l\'Escola hauran de proposar temes/projectes utilitzant l\'aplicació informàtica corresponent. Si es considera convenient, el responsable de l\'assignatura i/o la Comissió de TFG supervisarà si els treballs proposats són adequats.\r\n\r\nb) <b>Empreses o Institucions externes.</b> El treball es pot realitzar en el marc d\'un conveni de col·laboració amb una empresa o institució externa. L\'entitat haurà de fer arribar la proposta per escrit (seguint el model establert a tal efecte, en les dates especificades) al responsable de l\'assignatura. El responsable i/o la Comissió de TFG supervisarà que el projecte proposat sigui adequat (es valorarà que es puguin avaluar les competències previstes al grau -i a la menció corresponent- i que la durada i càrrega de treball sigui adient). Si s\'accepta la proposta, s\'assignarà un professor tutor de la menció que correspongui i s\'introduiran les dades a l\'aplicació. Aquests projectes estan supervisats pel tutor acadèmic de l\'escola i per un tutor de l\'empresa.\r\n\r\nc) <b>Estudiants.</b> L\'estudiant proposarà per escrit (seguint el model establert a tal efecte, en les dates especificades) un tema o projecte concret al responsable de la menció que està cursant. L\'acceptació no serà immediata, ja que caldrà  valorar que es puguin avaluar les competències previstes al grau (i a la menció) i que la durada i càrrega de treball sigui adient. El responsable de la menció haurà d\'acceptar o declinar la proposta i, en cas de ser acceptada, comunicar a l\'estudiant que es pot buscar tutor. Si l\'estudiant no troba tutor, se n\'hi assignarà un al final del procés d\'assignació..\r\n\r\n\r\nPer més info. consultar:\r\nhttps://guies.uab.cat/guies_docents/public/portal/html/2021/assignatura/106542/ca', 'dades', 106542, 'Enginyeria Informàtica', NULL, 22, NULL, NULL),
('Sobre les sessions de seguiment.', '<b>- 1a sessió de seguiment (setmana 4):</b> l’estudiant lliura un Informe Inicial\r\n<b>- 2a sessió de seguiment (setmana 9):</b> l’estudiant lliura un Informe de progrés (I)\r\n<b>- 3a sessió de seguiment (setmana 14):</b> l’estudiant lliura un Informe de progrés (II)\r\n<b>- 4a sessió de seguiment (setmana 17):</b> l\'estudiant lliura la proposta d\'Informe final i es fa el tancament del projecte (permís per lliurar).\r\n<b>- 5a sessió de seguiment (setmana 18-19):</b> l\'estudiant lliura la proposta de presentació.\r\n\r\n\r\nPer més info. consultar:\r\nhttps://guies.uab.cat/guies_docents/public/portal/html/2021/assignatura/106542/ca', 'dades', 106542, 'Enginyeria Informàtica', NULL, 23, NULL, NULL),
('Sobre l\'informe inicial.', '<b>Informe inicial.</b> L\'objectiu principal de l\'informe és el de consignar una <b>proposta detallada del TFG</b>, en què es proposen els objectius a assolir i la <b>metodologia a utilitzar</b> per assolir els fins proposats. Així mateix, s\'han de <b>planificar detalladament</b> els diferents passos a seguir en el desenvolupament del mateix,  tant pel que fa a tasques a realitzar com de forma temporal. Aquesta proposta requereix, per tant, d\'una reflexió prèvia per part de l\'estudiant, que haurà de consultar les fonts d\'informació pertinents, de manera que li sigui possible justificar les seves eleccions i programade treball. Haurà d’incloure, <b>com a mínim:</b> ...\r\n\r\nPer més info. consultar:\r\nhttps://guies.uab.cat/guies_docents/public/portal/html/2021/assignatura/106542/ca', 'dades', 106542, 'Enginyeria Informàtica', NULL, 24, NULL, NULL),
('Sobre l\'avaluac1ió.', '<b>Càlcul de la nota final:</b>\r\n\r\n- <b>Teoria</b> (mínim 5 de 10), que correspon al 50% de la nota base final. La nota de teoria serà la mitjana ponderada de les parts avaluades:\r\n\r\n<b>Exàmens d’avaluació del coneixement teòric i tècniques de l’assignatura (90%):</b>\r\n\r\n--- 50% - 1er EXAMEN (Octubre): Estudi de Viabilitat del Projecte\r\n--- 50% - 2on EXAMEN (Gener, data prevista pel centre): Implementació i seguiment del Projecte\r\n--- En cas de suspendre una de les parts amb menys de 4, o voler pujar nota: 100% Examen Recuperació (data prevista pel centre). Caldrà fer un examen de les dues parts, independentment de si heu suspès un dels parcials o tots dos.\r\n\r\nNOTA MÍNIMA DELS PARCIALS PER FER MITJANA: 4\r\n\r\n<b>Exercicis de tècniques</b> (10%): Exercicis proposats a classe, que s’hauran d’entregar el dia indicat pel professor. Els exercicis no són obligatoris, però sí molt recomanables i necessaris per optar a matrícula d\'honor. No es poden recuperar.\r\n\r\n<b>Assistència a conferències</b> 0,1 punts a sumar a la nota final de teoria per assistència a cada una de les conferències o activitats proposades.\r\n\r\n- <b>Pràctiques</b> (mínim 5 de 10), que correspon al 50% de la nota base final.\r\n\r\n\r\nPer més info. consultar:\r\nhttps://guies.uab.cat/guies_docents/public/portal/html/2021/assignatura/102760/ca', 'dades', 1027600, NULL, NULL, 233, NULL, NULL),
('PREGUNTA K sobre el tema Cicle de Vida del Projecte.', 'RESPOSTA K Cicle de Vida del Projecte.', 'dades', 77777, 'Enginyeria Informàtica', NULL, 234, NULL, NULL),
('hola', 'hoola', 'Informacion general', 44445, 'Grado TFG', 'Cicle de Vida del Projecte', 235, '2022-06-19 14:50:54', '2022-06-19 14:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `graus`
--

CREATE TABLE `graus` (
  `nom` varchar(65) NOT NULL,
  `codi` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `graus`
--

INSERT INTO `graus` (`nom`, `codi`, `updated_at`, `created_at`) VALUES
('Enginyeria Informàtica', 2502441, NULL, NULL),
('Físicaaa', 2500097, '2022-06-16 11:50:25', NULL),
('Grado en Testing', 4444, '2022-06-18 05:56:26', '2022-06-18 05:56:26'),
('Grado TFG', 111, '2022-06-18 05:56:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leitner_system`
--

CREATE TABLE `leitner_system` (
  `id_user` bigint(20) NOT NULL,
  `id_microcontingut` int(11) NOT NULL,
  `caja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `microcontinguts`
--

CREATE TABLE `microcontinguts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `texto` text DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `pregunta` text DEFAULT NULL,
  `microleccio_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `microcontinguts`
--

INSERT INTO `microcontinguts` (`id`, `title`, `content`, `texto`, `imagen`, `video`, `pregunta`, `microleccio_id`, `updated_at`, `created_at`) VALUES
(28, 'Inicio_html1', 'Toda página web, por bonita o viva que nos parezca, se estructura con 3 elementos esenciales: el lenguaje de marcado (HTML), hojas de estilos (CSS) y scripts (JavaScript). El objetivo de este curso de Diseño Web adaptable orientado al multidispositivo no es enseñarte todos los rincones por muy oscuros que resulten, sino formarte para que maquetes sitios modernos compatibles con cualquier dispositivo (smartphones, tablets, portátiles y escritorio) usando las herramientas más profesionales de la industria.', NULL, NULL, NULL, NULL, 7, NULL, NULL),
(29, 'Inicio_html2', 'Antes de entrar en materia debe quedar muy claro para que se utiliza cada lenguaje. HTML: Para que entiendas que es cada elemento usaré una metáfora cercana a tu rutina diaria: Imaginemos un Robot asesino que viene el futuro, el esqueleto es lo que mantiene cada parte unida y en orden. Eso mismo sería el HTML en una web. CSS: Las hojas de estilos, o el CSS, sería la parte visual del Robot: la piel, el color, pelo… Elementos decorativos para agradar al ojo humano. JavaScript: Este lenguaje de programación es quien le otorga vida. Sencillamente le explica como caminar, en que momento sacar la escopeta, cual es su objetivo… sin él sería una estatua muy cara con funcionalidad de pisapapeles.', NULL, NULL, NULL, NULL, 7, NULL, NULL),
(33, 'Inicio_html4', 'Para este curso necesitarás instalar en tu equipo una serie de herramientas. Todas serán Libres o gratuitas. - VSCode como editor de texto enriquecido. Si lo prefieres también puedes usar cualquier otro de esta lista. - 2 navegadores: Chrome y Firefox. - Editor de imágenes, como puede ser Photoshop, Gimp, Affinity Photo… para optimizar las imágenes. - Lapiz y papel. Vas a necesitar tomar muchos apuntes.', NULL, NULL, NULL, NULL, 7, NULL, NULL),
(34, 'Inicio_html5', 'Si quieres complementar la materia te será de ayuda la Chuleta HTML5 (https://lenguajehtml.com) de José Román Hernández (Manz para los amigos) que además tiene un excelente curso de HTML, o el curso oficial de Introducción a HTML por parte de Mozilla. Si buscas un buen libro y no tienes miedo del inglés HTML & CSS: Design and Build Websites por Duckett Jon es la mejor opción. Si has llegado hasta aquí sin lagrimones que recorran tus mejillas a raíz de amplios bostezos, ¡te felicito! ¿Empezamos a maquetar? Pasa a la siguiente lección.', NULL, NULL, NULL, NULL, 7, NULL, NULL),
(37, 'Etiquetas_html1', 'Todas las páginas webs se componen de texto envuelto en diferentes etiquetas (o tags) donde cada una guarda una propiedad única que es transmitida a su contenido, normalmente texto. Todas ellas se van interconectando por medio de anidamientos (unas dentro de otras) u orden. Todas ellas poseen una estructura similar a la siguiente: <etiqueta>Contenido</etiqueta>', NULL, NULL, NULL, NULL, 8, NULL, NULL),
(38, 'Etiquetas_html2', 'Veamos algunas etiquetas esenciales para dar formato a nuestros textos. <p> Sirve para crear párrafos. <strong> Marca textos importantes en negrita. <i> Da un estilo en cursiva al texto. <h1>, <h2>... Cabeceras o títulos. Se enumeran de mayor a menor importancia. <br> Salto de línea. &nbsp Espacio (actualmente no es tan utilizado).', NULL, NULL, NULL, NULL, 8, NULL, NULL),
(39, 'Hipervinculos_html1', 'Cuando queramos que los visitantes puedan navegar de manera sencilla entre las páginas necesitaremos usar hipervinculos o enlaces. Hablamos de un mecanismo que nos dan el poder de intercambiar la página que estamos visualizando o movernos con rapidez a un apartado a otro. E incluso ir a lugares externos que no nos pertenecen. Un ejemplo de su estructura: <a href=\'https://www.gnu.org/software/emacs/\'>Editor de texto</a>. El texto del hipervinculo se mostrará de color azul con un subrayado, que al ser pulsado abrirá la página descrita en el atributo href. En el navegador se nos mostrará, por defecto, de color azul con un subrayado.', NULL, NULL, NULL, NULL, 9, NULL, NULL),
(40, 'Hipervinculos_html2', 'Si toda nuestra web esta en una sola página se volverá terriblemente aburrida, además de contener un scroll capaz de ahuyentar a los más pacientes. Por ello se divide en diferentes páginas que el visitante cambia a placer. Pongamos el caso que tengo 2 fichero, uno se denominará niño.html y el otro colegio.html. Y ya que estamos, añadamos otra ficción: el niño quiere ir al colegio. Para ello colocaré en el primer HTML (niño.html) en el siguiente enlace: <a href=\'colegio.html\'>Ir al colegio</a>. Al ser pulsado entrará en el colegio. Otro caso, el niño quiere ir a la clase pero la clase esta dentro del colegio. Mi objetivo esta dentro de una carpeta, como puede ser colegio y el archivo interno es clase.html. ¿Y si quisiera ir desde clase.html hasta niño.html? Para retroceder siempre usaríamos ...', NULL, NULL, NULL, NULL, 9, NULL, NULL),
(115, 'MC 1', 'Toda página web, por bonita o viva que nos parezca, se estructura con 3 elementos esenciales: el lenguaje de marcado (HTML), hojas de estilos (CSS) y scripts (JavaScript). El objetivo de este curso de Diseño Web adaptable orientado al multidispositivo no es enseñarte todos los rincones por muy oscuros que resulten, sino formarte para que maquetes sitios modernos compatibles con cualquier dispositivo (smartphones, tablets, portátiles y escritorio) usando las herramientas más profesionales de la industria.', 'aaa', NULL, NULL, NULL, 15, NULL, NULL),
(116, 'MC 2', 'Antes de entrar en materia debe quedar muy claro para que se utiliza cada lenguaje. HTML: Para que entiendas que es cada elemento usaré una metáfora cercana a tu rutina diaria: Imaginemos un Robot asesino que viene el futuro, el esqueleto es lo que mantiene cada parte unida y en orden. Eso mismo sería el HTML en una web. CSS: Las hojas de estilos, o el CSS, sería la parte visual del Robot: la piel, el color, pelo… Elementos decorativos para agradar al ojo humano. JavaScript: Este lenguaje de programación es quien le otorga vida. Sencillamente le explica como caminar, en que momento sacar la escopeta, cual es su objetivo… sin él sería una estatua muy cara con funcionalidad de pisapapeles.', NULL, 'image', NULL, NULL, 16, NULL, NULL),
(118, 'MC 4', 'Si quieres complementar la materia te será de ayuda la Chuleta HTML5 (https://lenguajehtml.com) de José Román Hernández (Manz para los amigos) que además tiene un excelente curso de HTML, o el curso oficial de Introducción a HTML por parte de Mozilla. Si buscas un buen libro y no tienes miedo del inglés HTML & CSS: Design and Build Websites por Duckett Jon es la mejor opción. Si has llegado hasta aquí sin lagrimones que recorran tus mejillas a raíz de amplios bostezos, ¡te felicito! ¿Empezamos a maquetar? Pasa a la siguiente lección.', NULL, NULL, NULL, '¿hola?', 18, NULL, NULL),
(771, 'Hipervinculos_html2', 'Si toda nuestra web esta en una sola página se volverá terriblemente aburrida, además de contener un scroll capaz de ahuyentar a los más pacientes. Por ello se divide en diferentes páginas que el visitante cambia a placer. Pongamos el caso que tengo 2 fichero, uno se denominará niño.html y el otro colegio.html. Y ya que estamos, añadamos otra ficción: el niño quiere ir al colegio. Para ello colocaré en el primer HTML (niño.html) en el siguiente enlace: <a href=\'colegio.html\'>Ir al colegio</a>. Al ser pulsado entrará en el colegio. Otro caso, el niño quiere ir a la clase pero la clase esta dentro del colegio. Mi objetivo esta dentro de una carpeta, como puede ser colegio y el archivo interno es clase.html. ¿Y si quisiera ir desde clase.html hasta niño.html? Para retroceder siempre usaríamos ...', NULL, NULL, NULL, 'a', 11, '2022-06-20 05:59:37', NULL),
(772, 'hola', 'yaaa', NULL, NULL, NULL, 'va', 18, '2022-06-19 13:08:39', '2022-06-19 13:08:20'),
(773, 'Orden lógico de las operaciones', 'Todos sabemos matemáticas, pero no todos sabemos el correcto orden lógico que hay que seguir para completar una operación matemática compleja.', NULL, NULL, NULL, '¿Qué tipo de operación tiene la mayor prioridad?', 11, '2022-06-23 13:40:11', '2022-06-20 07:12:33'),
(774, 'fd', '$respuestas = DB::table(\'respuesta\')         ->where(\'id_microcontingut\',\"=\",$id)         ->update([\'id_microcontingut\'=>null]);', 'a', 'a', 'a', 'a', 14, '2022-06-23 12:10:54', '2022-06-23 12:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `microleccions`
--

CREATE TABLE `microleccions` (
  `id` int(11) NOT NULL,
  `titol_tema` varchar(65) NOT NULL,
  `descrip` varchar(250) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `microleccions`
--

INSERT INTO `microleccions` (`id`, `titol_tema`, `descrip`, `updated_at`, `created_at`) VALUES
(7, 'Cicle de Vida del Projecte', 'Introducción a html, conceptos básicos', NULL, NULL),
(8, 'Cicle de Vida del Projecte', 'Tipos de etiquetas, función y utilidades', NULL, NULL),
(9, 'Cicle de Vida del Projecte', 'El elemento más importante de una web', NULL, NULL),
(10, 'Cicle de Vida del Projecte', 'Introducción a CSS y el estilo de una web.', NULL, NULL),
(11, 'VLAN', 'Redes Locales Virtuales', '2022-06-17 11:34:37', '2022-06-16 15:55:17'),
(12, 'VLAN', 'Historia VLANs', '2022-06-17 11:40:03', '2022-06-16 16:33:39'),
(14, 'VLAN', 'Futuro VLANs', '2022-06-17 11:40:22', '2022-06-16 17:40:34'),
(15, 'Estat del art', 'Introducción a html, conceptos básicosss', '2022-06-17 13:37:24', NULL),
(16, 'Estudi de Viabilitat', 'Tipos de etiquetas, función y utilidades', NULL, NULL),
(17, 'Informe Seguiment I', 'El elemento más importante de una web', NULL, NULL),
(18, 'Informe Seguiment II', 'Introducción a CSS y el estilo de una web.', NULL, NULL),
(19, 'Tema Testing', 'Pruebas unitarias', '2022-06-18 06:19:32', '2022-06-18 06:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `notificacio`
--

CREATE TABLE `notificacio` (
  `codi_assignatura` int(11) DEFAULT NULL,
  `descripcio` text NOT NULL,
  `titol` text DEFAULT NULL,
  `data` datetime NOT NULL,
  `id` int(11) NOT NULL,
  `niu_professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notificacio`
--

INSERT INTO `notificacio` (`codi_assignatura`, `descripcio`, `titol`, `data`, `id`, `niu_professor`) VALUES
(1027600, ' Hello', 'NULL', '2022-02-03 12:57:04', 1, 1456958),
(1027600, ' Hello', 'NULL', '2022-02-03 13:00:03', 2, 0),
(1027600, ' Hello2', 'NULL', '2022-02-03 13:01:18', 3, 1456958),
(NULL, 'hola', 'hola', '2022-06-16 16:03:30', 4356, 12);

-- --------------------------------------------------------

--
-- Table structure for table `opciones`
--

CREATE TABLE `opciones` (
  `id` int(11) NOT NULL,
  `id_microcontingut` int(11) DEFAULT NULL,
  `opcion` varchar(255) NOT NULL,
  `correcta` tinyint(1) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opciones`
--

INSERT INTO `opciones` (`id`, `id_microcontingut`, `opcion`, `correcta`, `updated_at`, `created_at`) VALUES
(1, 773, 'Suma', 0, '2022-06-23 13:44:30', NULL),
(5, 773, 'Potencia', 1, '2022-06-23 13:45:40', '2022-06-20 07:10:41'),
(6, 773, 'Resta', 0, '2022-06-23 13:44:39', '2022-06-20 07:12:54'),
(7, 773, 'Multiplicación', 0, '2022-06-23 13:45:31', '2022-06-20 07:13:05'),
(8, 773, 'División', 0, '2022-06-23 13:45:47', '2022-06-20 07:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id_users` bigint(20) NOT NULL,
  `codi_assignatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`id_users`, `codi_assignatura`) VALUES
(12, 113),
(12, 114),
(12, 44445),
(12, 77777),
(12, 345322);

-- --------------------------------------------------------

--
-- Table structure for table `respuesta`
--

CREATE TABLE `respuesta` (
  `id_sesion` int(11) NOT NULL,
  `id_microcontingut` int(11) NOT NULL,
  `respuesta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sequenciatemari`
--

CREATE TABLE `sequenciatemari` (
  `codi_assignatura` int(11) NOT NULL,
  `titol_tema` varchar(65) NOT NULL,
  `ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sequenciatemari`
--

INSERT INTO `sequenciatemari` (`codi_assignatura`, `titol_tema`, `ordre`) VALUES
(1027600, 'Cicle de Vida del Projecte', 3),
(1027600, 'Gestió de la Integració', 8),
(1027600, 'Gestió de les Comunicacions', 6),
(1027600, 'Gestió de Qualitat', 11),
(1027600, 'Gestió del Temps', 4),
(1027600, 'Gestió dels Costos i Sostenibilitat', 5),
(1027600, 'Gestió dels Recursos Humans i de Gènere', 10),
(1027600, 'Gestió dels Riscos', 9),
(1027600, 'Gestió d’Abast del Projecte', 7),
(1027600, 'Introducció Gestió de Projectes', 1),
(1027600, 'La figura del Project Manager', 12),
(1027600, 'Selecció de Projectes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `sesions`
--

CREATE TABLE `sesions` (
  `id_sesion` int(11) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `valoracion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `temas`
--

CREATE TABLE `temas` (
  `codi_assignatura` int(11) DEFAULT NULL,
  `titol` varchar(65) NOT NULL,
  `id` int(11) NOT NULL,
  `descripcio` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temas`
--

INSERT INTO `temas` (`codi_assignatura`, `titol`, `id`, `descripcio`, `updated_at`, `created_at`) VALUES
(1027600, 'Cicle de Vida del Projecte', 1, '', NULL, NULL),
(113, 'Estat del art', 46, 'ª', NULL, NULL),
(113, 'Estudi de Viabilitat', 45, 'ª', NULL, NULL),
(1027600, 'Gestió de la Integració', 2, '', NULL, NULL),
(1027600, 'Gestió de les Comunicacions', 3, '', NULL, NULL),
(1027600, 'Gestió de Qualitat', 4, '', NULL, NULL),
(1027600, 'Gestió del Temps', 5, '', NULL, NULL),
(1027600, 'Gestió dels Costos i Sostenibilitat', 6, '', NULL, NULL),
(1027600, 'Gestió dels Recursos Humans i de Gènere', 7, '', NULL, NULL),
(1027600, 'Gestió dels Riscos', 8, '', NULL, NULL),
(1027600, 'Gestió d’Abast del Projecte', 9, '', NULL, NULL),
(114, 'Informe Seguiment I', 47, 'ª', NULL, NULL),
(114, 'Informe Seguiment II', 48, 'ª', NULL, NULL),
(1027600, 'Introducció Gestió de Projectes', 10, '', NULL, NULL),
(1027600, 'La figura del Project Manager', 11, '', NULL, NULL),
(1027600, 'Selecció de Projectes', 12, '', NULL, NULL),
(77777, 'Tema 4', 22, 'sdfsfs', '2022-06-16 17:54:33', '2022-06-16 17:54:33'),
(44445, 'Tema Testing', 51, 'aaa', '2022-06-18 06:19:13', '2022-06-18 06:19:13'),
(77777, 'VLAN', 21, 'aaa', '2022-06-17 11:33:48', '2022-06-16 14:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(65) NOT NULL,
  `cognoms` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '123',
  `idioma` varchar(65) NOT NULL DEFAULT 'Català',
  `niu` int(11) NOT NULL,
  `tipus` varchar(65) NOT NULL DEFAULT 'Alumno',
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `cognoms`, `email`, `password`, `idioma`, `niu`, `tipus`, `admin`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(11, 'Angele', 'García Calleja', 'angelgarciacalleja@hotmail.come', '$2y$10$epHGJ9Ti1rbEjBaFU2nCK.84WlPYhZ.wFW9XnwJBS.7kRt3bTiWD2', 'Español', 1490917, 'Alumno', 0, NULL, NULL, '2022-05-05 08:16:02', '2022-05-05 08:16:02'),
(12, 'Angelp', 'García Calleja', 'angelgarciacalleja@hotmail.comp', '$2y$10$zbFu24xEmuf4ZIbR5/llrOWvNcw3OVjhdEgWV6BXB2vXKs0vAM3oe', 'Español', 1490918, 'Profesor', 0, NULL, NULL, '2022-05-05 08:16:30', '2022-05-05 08:16:30'),
(13, 'Angela', 'García Calleja', 'angelgarciacalleja@hotmail.coma', '$2y$10$cl8cDcvGim6JinS3PLjGfOzjylC3Rah2BOsps./nTT25HkICW0C.e', 'Español', 1490919, 'Profesor', 1, NULL, NULL, '2022-05-05 08:16:56', '2022-05-05 08:16:56'),
(20, 'Daniel', 'Calvo Ramos', 'angelgarciacalleja@hotmail.comd', '$2y$10$Nihfgkya7sHPmtA2qiJfqOWfHXjy7c3Xy480uLmo3KpGPU5WsOIqy', 'Català', 1494116, 'Alumno', 0, NULL, NULL, '2022-06-18 05:28:44', '2022-06-18 05:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `usersadmins`
--

CREATE TABLE `usersadmins` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(65) NOT NULL,
  `cognoms` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '123',
  `idioma` varchar(65) NOT NULL DEFAULT 'Català',
  `niu` int(11) NOT NULL,
  `tipus` varchar(65) NOT NULL DEFAULT 'Alumno',
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersadmins`
--

INSERT INTO `usersadmins` (`id`, `nom`, `cognoms`, `email`, `password`, `idioma`, `niu`, `tipus`, `admin`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(11, 'Angele', 'García Calleja', 'angelgarciacalleja@hotmail.come', '$2y$10$epHGJ9Ti1rbEjBaFU2nCK.84WlPYhZ.wFW9XnwJBS.7kRt3bTiWD2', 'Español', 1490920, 'Alumno', 0, NULL, NULL, '2022-05-05 08:16:02', '2022-06-18 05:48:52'),
(12, 'Angelp', 'García Calleja', 'angelgarciacalleja@hotmail.comp', '$2y$10$zbFu24xEmuf4ZIbR5/llrOWvNcw3OVjhdEgWV6BXB2vXKs0vAM3oe', 'Español', 1490918, 'Profesor', 0, NULL, NULL, '2022-05-05 08:16:30', '2022-05-05 08:16:30'),
(13, 'Angela', 'García Calleja', 'angelgarciacalleja@hotmail.coma', '$2y$10$cl8cDcvGim6JinS3PLjGfOzjylC3Rah2BOsps./nTT25HkICW0C.e', 'Español', 1490919, 'Profesor', 1, NULL, NULL, '2022-05-05 08:16:56', '2022-05-05 08:16:56'),
(28, 'xasfda', 'sdf', 'angelgarciacalleja@hotmail.comaadad', '123', 'Español', 142423, 'Alumno', 0, NULL, NULL, '2022-06-18 05:50:03', '2022-06-18 05:50:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignaturas`
--
ALTER TABLE `assignaturas`
  ADD PRIMARY KEY (`codi`),
  ADD KEY `nom_grau` (`nom_grau`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`titol_faq`,`niu_estudiant`,`data`),
  ADD KEY `codi_assignatura` (`codi_assignatura`),
  ADD KEY `nom_grau` (`nom_grau`);

--
-- Indexes for table `estudiants`
--
ALTER TABLE `estudiants`
  ADD PRIMARY KEY (`codi_assignatura`,`id_users`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codi_assignatura` (`codi_assignatura`),
  ADD KEY `nom_grau` (`nom_grau`),
  ADD KEY `titol_tema` (`titol_tema`),
  ADD KEY `titol` (`titol`);

--
-- Indexes for table `graus`
--
ALTER TABLE `graus`
  ADD PRIMARY KEY (`nom`);

--
-- Indexes for table `leitner_system`
--
ALTER TABLE `leitner_system`
  ADD PRIMARY KEY (`id_user`,`id_microcontingut`),
  ADD KEY `leitner_system_ibfk_2` (`id_microcontingut`);

--
-- Indexes for table `microcontinguts`
--
ALTER TABLE `microcontinguts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `microlecc` (`microleccio_id`);

--
-- Indexes for table `microleccions`
--
ALTER TABLE `microleccions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `titol_tema` (`titol_tema`);

--
-- Indexes for table `notificacio`
--
ALTER TABLE `notificacio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codi_assignatura` (`codi_assignatura`);

--
-- Indexes for table `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `micC` (`id_microcontingut`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id_users`,`codi_assignatura`),
  ADD KEY `codi_assignatura` (`codi_assignatura`);

--
-- Indexes for table `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_sesion`,`id_microcontingut`),
  ADD KEY `respuesta_ibfk_2` (`id_microcontingut`);

--
-- Indexes for table `sequenciatemari`
--
ALTER TABLE `sequenciatemari`
  ADD PRIMARY KEY (`titol_tema`,`ordre`),
  ADD KEY `codi_assignatura` (`codi_assignatura`);

--
-- Indexes for table `sesions`
--
ALTER TABLE `sesions`
  ADD PRIMARY KEY (`id_sesion`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`titol`,`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `codi_assignatura` (`codi_assignatura`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersadmins`
--
ALTER TABLE `usersadmins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `microcontinguts`
--
ALTER TABLE `microcontinguts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=775;

--
-- AUTO_INCREMENT for table `microleccions`
--
ALTER TABLE `microleccions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notificacio`
--
ALTER TABLE `notificacio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4357;

--
-- AUTO_INCREMENT for table `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `temas`
--
ALTER TABLE `temas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usersadmins`
--
ALTER TABLE `usersadmins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignaturas`
--
ALTER TABLE `assignaturas`
  ADD CONSTRAINT `assignaturas_ibfk_1` FOREIGN KEY (`nom_grau`) REFERENCES `graus` (`nom`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_3` FOREIGN KEY (`codi_assignatura`) REFERENCES `faqs` (`codi_assignatura`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `consulta_ibfk_4` FOREIGN KEY (`nom_grau`) REFERENCES `faqs` (`nom_grau`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `estudiants`
--
ALTER TABLE `estudiants`
  ADD CONSTRAINT `estudiants_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiants_ibfk_2` FOREIGN KEY (`codi_assignatura`) REFERENCES `assignaturas` (`codi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_ibfk_1` FOREIGN KEY (`codi_assignatura`) REFERENCES `assignaturas` (`codi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `faqs_ibfk_2` FOREIGN KEY (`nom_grau`) REFERENCES `graus` (`nom`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `faqs_ibfk_3` FOREIGN KEY (`titol_tema`) REFERENCES `temas` (`titol`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `leitner_system`
--
ALTER TABLE `leitner_system`
  ADD CONSTRAINT `leitner_system_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `leitner_system_ibfk_2` FOREIGN KEY (`id_microcontingut`) REFERENCES `microcontinguts` (`id`);

--
-- Constraints for table `microcontinguts`
--
ALTER TABLE `microcontinguts`
  ADD CONSTRAINT `microlecc` FOREIGN KEY (`microleccio_id`) REFERENCES `microleccions` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `microleccions`
--
ALTER TABLE `microleccions`
  ADD CONSTRAINT `porfavor` FOREIGN KEY (`titol_tema`) REFERENCES `temas` (`titol`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `notificacio`
--
ALTER TABLE `notificacio`
  ADD CONSTRAINT `notificacio_ibfk_1` FOREIGN KEY (`codi_assignatura`) REFERENCES `assignaturas` (`codi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `micC` FOREIGN KEY (`id_microcontingut`) REFERENCES `microcontinguts` (`id`);

--
-- Constraints for table `professors`
--
ALTER TABLE `professors`
  ADD CONSTRAINT `professors_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `professors_ibfk_2` FOREIGN KEY (`codi_assignatura`) REFERENCES `assignaturas` (`codi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`id_sesion`) REFERENCES `sesions` (`id_sesion`),
  ADD CONSTRAINT `respuesta_ibfk_2` FOREIGN KEY (`id_microcontingut`) REFERENCES `microcontinguts` (`id`);

--
-- Constraints for table `sequenciatemari`
--
ALTER TABLE `sequenciatemari`
  ADD CONSTRAINT `sequenciatemari_ibfk_1` FOREIGN KEY (`codi_assignatura`) REFERENCES `assignaturas` (`codi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sequenciatemari_ibfk_2` FOREIGN KEY (`titol_tema`) REFERENCES `temas` (`titol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sesions`
--
ALTER TABLE `sesions`
  ADD CONSTRAINT `sesions_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `temas`
--
ALTER TABLE `temas`
  ADD CONSTRAINT `temas_ibfk_1` FOREIGN KEY (`codi_assignatura`) REFERENCES `assignaturas` (`codi`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
