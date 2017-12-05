/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : kia_site

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-12-05 18:28:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_usuario
-- ----------------------------
DROP TABLE IF EXISTS `admin_usuario`;
CREATE TABLE `admin_usuario` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contrasena` varchar(120) DEFAULT NULL,
  `imagen` varchar(60) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_usuario
-- ----------------------------
INSERT INTO `admin_usuario` VALUES ('1', 'Raúl Ramírez', 'raul.ramirez@garden.com.py', '4530ad981d5c02d9cb0456c360fae460803922f556c56022e1dc0187c16ced50', null, '1');

-- ----------------------------
-- Table structure for ciudad
-- ----------------------------
DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE `ciudad` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ciudad
-- ----------------------------

-- ----------------------------
-- Table structure for color
-- ----------------------------
DROP TABLE IF EXISTS `color`;
CREATE TABLE `color` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `img` varchar(60) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of color
-- ----------------------------
INSERT INTO `color` VALUES ('1', 'Blanco Perla', 'blanco_claro.gif', '1');

-- ----------------------------
-- Table structure for combustible
-- ----------------------------
DROP TABLE IF EXISTS `combustible`;
CREATE TABLE `combustible` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of combustible
-- ----------------------------
INSERT INTO `combustible` VALUES ('1', 'Nafta', '1');
INSERT INTO `combustible` VALUES ('2', 'Diesel', '1');
INSERT INTO `combustible` VALUES ('3', 'Flex', '1');

-- ----------------------------
-- Table structure for config_site
-- ----------------------------
DROP TABLE IF EXISTS `config_site`;
CREATE TABLE `config_site` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(160) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config_site
-- ----------------------------
INSERT INTO `config_site` VALUES ('1', 'testdrive', 'jpena@garden.com.py,dabenitez@garden.com.py,ssomoza@garden.com.py');
INSERT INTO `config_site` VALUES ('2', 'turnos', 'call_center@garden.com.py');
INSERT INTO `config_site` VALUES ('3', 'meta_descripton', 'Explore la amplia gama de autos de Kia desde sedán hasta hatchback, desde híbridos hasta SUV. Solicite una prueba de manejo, busque un concesionario, conoce más.');
INSERT INTO `config_site` VALUES ('4', 'meta_description_encuentra_tu_kia', 'Deja que nuestra red de atención te ayude a comprar un nuevo Kia, realizar un test drive o si ya cuentas con uno realiza el mantenimiento que te corresponda. Localiza la sucursal más cercana, aquí te esperamos!');
INSERT INTO `config_site` VALUES ('5', 'meta_description_ficha', '¿Busca las últimas especificaciones de tu Kia favorito? Descargá las últimas fichas técnicas de Kia aquí.');
INSERT INTO `config_site` VALUES ('6', 'meta_description_cotizar', 'COTIZA TU KIA! Permítanos ayudarle a comprarlo. Solicite una cotización aquí, y deje que uno de nuestros amables asesores lo guíe en sus próximos pasos.');
INSERT INTO `config_site` VALUES ('7', 'meta_description_testdrive', '¿Listo para comprar su modelo favorito de Kia? Programe una prueba de manejo de su modelo Kia preferido hoy.');
INSERT INTO `config_site` VALUES ('8', 'meta_description_postventa', 'En Kia nos comprometemos con ofrecerle una experiencia continua de servicio especializado y mejorado. Descubre más sobre nuestro servicio de post venta.');
INSERT INTO `config_site` VALUES ('9', 'meta_description_talleres', '¿Busca un Centro de Servicio Kia autorizado? Déjenos ayudarle. Utilice la herramienta de Localización del Centro de Servicio Kia y localice el taller más cercano.');
INSERT INTO `config_site` VALUES ('10', 'meta_description_repuestos', '¿Busca accesorios y piezas originales para tu Kia? No busque más. ¡Haga clic aquí y descubra cómo conseguir la las piezas y accesorios correctos de Kia para su Kia!');
INSERT INTO `config_site` VALUES ('11', 'meta_description_vida0', 'Bienvenido a tu vida 0');
INSERT INTO `config_site` VALUES ('12', 'meta_description_turno', 'En Kia nos comprometemos con ofrecerle una experiencia continua de servicio especializado y mejorado. Solicitá aquí un turno al taller o service en casa.');
INSERT INTO `config_site` VALUES ('13', 'meta_description_laempresa', 'Acerca de Kia Paraguay');
INSERT INTO `config_site` VALUES ('14', 'meta_description_filosofia', 'Conozca más acerca de la filosofía corporativa de Kia, el principio que nos guía, y una parte de la visión futurista de Kia.');
INSERT INTO `config_site` VALUES ('15', 'meta_description_historia', 'La rica herencia de 70 años de Kia está adornada con una impresionante lista de logros y galardones. Lea más acerca de nuestro pasado y de cómo ha dado forma a nuestro futuro.');
INSERT INTO `config_site` VALUES ('16', 'meta_description_sostenibilidad', 'Los esfuerzos de sostenibilidad de Kia se centran en proporcionar una diferencia positiva en el mundo a través de los coches. Lea nuestro informe de sostenibilidad para saber más.');
INSERT INTO `config_site` VALUES ('17', 'meta_description_medioambiente', 'Kia Motors se preocupa por el medio ambiente. Lea más sobre nuestros logros en el funcionamiento medioambiental.');
INSERT INTO `config_site` VALUES ('18', 'meta_description_diseno', 'Nuestros principios de diseño de motores son el corazón de nuestra filosofía de diseño en Kia, que guía a nuestros diseñadores de coches para crear los coches mejor diseñados del mundo. Lea más.');
INSERT INTO `config_site` VALUES ('19', 'meta_description_corporativa', 'Lea acerca de nuestra identidad corporativa. Descubra el significado de nuestro logo y cómo simboliza nuestra responsabilidad, credibilidad y orgullo como fabricante de automóviles mundial.');
INSERT INTO `config_site` VALUES ('20', 'meta_description_marca', 'Nuestro eslogan de marca \'El Poder de sorprender\' ejemplifica nuestro deseo de proporcionarle experiencias que superen sus expectativas. Lea más aquí.');
INSERT INTO `config_site` VALUES ('21', 'meta_description_sorprendente', 'Sigue nuestro camino y descubre los resultados récord que creamos.');
INSERT INTO `config_site` VALUES ('22', 'meta_description_noticias', 'Obtenga los últimas noticias que hablan sobre su marca Kia, tanto en su país como en todo el mundo. Lea las notas de prensa oficiales y los artículos de noticias.');
INSERT INTO `config_site` VALUES ('23', 'meta_description_contacto', 'En Kia, nuestro motivo es ayudarlo siempre. No dude en comunicarse con nosotros mediante el siguiente formulario para cualquier tipo de consulta o solicitud que tenga.');

-- ----------------------------
-- Table structure for departamento
-- ----------------------------
DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departamento
-- ----------------------------

-- ----------------------------
-- Table structure for estilo
-- ----------------------------
DROP TABLE IF EXISTS `estilo`;
CREATE TABLE `estilo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(120) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of estilo
-- ----------------------------

-- ----------------------------
-- Table structure for la_empresa
-- ----------------------------
DROP TABLE IF EXISTS `la_empresa`;
CREATE TABLE `la_empresa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(60) DEFAULT NULL,
  `contenido` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_empresa
-- ----------------------------
INSERT INTO `la_empresa` VALUES ('1', 'la-empresa.jpg', '<p>GARDEN AUTOMOTORES S.A., domiciliada en la Avda. República Argentina esq. Isaac Kostianovsky, Asunción-Paraguay, con sucursales en Ciudad del Este y Encarnación, desde hace siete años está Certificada por la KIA MOTORS Corporation, Seúl-Corea, como Distribuidor Oficial en todo el territorio de la República del Paraguay, de sus productos del sector automotriz marca KIA, que incluyen: vehículos, repuestos, accesorios originales y servicios especializados.</p>\r\n<p>GARDEN AUTOMOTORES S.A., es una empresa comercial y de servicios, constituida mediante escritura pública Nº 26, de fecha 17 de junio de 2002, con el objetivo de realizar las actividades de compra, venta, importación y representación de vehículos en general, auto-repuestos, accesorios, así como la explotación de servicios relacionados con la industria automotriz.</p>\r\n<p>El fortalecimiento empresarial que hoy GARDEN AUTOMOTORES S.A. expone al mercado nacional, no se ha generado de la noche a la mañana, sino que constituye la culminación de un proceso pleno de esfuerzos sostenidos y concentrados, con VISIÓN, MISIÓN y OBJETIVOS muy claros, orientados a:</p>\r\n<p>Satisfacer las necesidades de los clientes, mediante productos de calidad mundial marca KIA, que en los últimos años ha demostrado una evolución tecnológica fantástica, basada en la combinación perfecta de rendimiento, estilo, seguridad y valor.</p>\r\n<p>Es importante recordar que la KIA MOTORS Corporation, a inicios del 2009 ya se ubica como el 5to. mayor fabricante de vehículos a nivel mundial, con planes a mediano plazo que contemplan agresivos lanzamientos de nuevos modelos, para ir fortaleciendo la marca y demostrar al mundo, el aún ilimitado potencial de los productos KIA, como lo dice su eslogan “EL PODER DE SORPRENDER”.</p>\r\n<p>Conseguir el bienestar de nuestros funcionarios, en sus diferentes niveles de atribuciones y responsabilidades.</p>\r\n<p>Contamos actualmente con más de 100 empleados, motivados permanentemente a través de entrenamientos periódicos y específicos, en las áreas de su competencia, todas ellas enmarcadas dentro de la filosofía de trabajo del Grupo GARDEN, sintetizada en el esfuerzo continuo, el conocimiento, la tecnología y el trabajo en equipo.</p>\r\n<p>Anunciamos que vamos a seguir potenciando nuestra organización, con el mismo coraje, creatividad y dedicación que nos caracteriza, para beneficio de clientes actuales y potenciales, funcionarios, colaboradores, gobierno nacional y la misma sociedad paraguaya.</p>\r\n<p>GARDEN AUTOMOTORES S.A. está conformada exclusivamente por capital y recursos humanos de origen nacional, convertida actualmente en una empresa moderna y altamente competitiva, que le permite, por un lado, atender con calidad y solvencia la creciente cartera de clientes en el mercado nacional y por el otro, acompañar las exigencias técnicas y administrativas cada vez mayores de la KIA MOTORS Corporation, para los Distribuidores Oficiales de sus productos KIA, en las áreas de Ventas, Post-venta y Administrativas, ya que la misma desarrolla la visión fundamental de convertirse a mediano plazo en uno de los tres mayores fabricantes de automóviles del mundo.</p>\r\n<p>GARDEN AUTOMOTORES S.A., ofrece al mercado paraguayo la mayoría de los modelos de vehículos fabricados por la KIA MOTORS, con una política dirigida a satisfacer la demanda de los diferentes segmentos económicos del país, apoyado en un plan de financiamiento atractivo y un sistema de Post-Venta dinámico, que garantiza la inversión de los clientes en el vehículo de su preferencia, mediante un servicio técnico personalizado y la provisión de repuestos originales.</p>');

-- ----------------------------
-- Table structure for local
-- ----------------------------
DROP TABLE IF EXISTS `local`;
CREATE TABLE `local` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_ciudad` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(80) DEFAULT NULL,
  `direccion` varchar(120) DEFAULT NULL,
  `horario_atencion` varchar(120) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of local
-- ----------------------------

-- ----------------------------
-- Table structure for modelo
-- ----------------------------
DROP TABLE IF EXISTS `modelo`;
CREATE TABLE `modelo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tipo_vehiculo` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `garantia` varchar(255) DEFAULT NULL,
  `logo` varchar(60) DEFAULT NULL,
  `img_thumb` varchar(80) DEFAULT NULL,
  `ficha` varchar(60) DEFAULT NULL,
  `meta_descripcion` varchar(180) DEFAULT NULL,
  `img_w` varchar(80) DEFAULT NULL,
  `img_t` varchar(80) DEFAULT NULL,
  `img_m` varchar(80) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo
-- ----------------------------
INSERT INTO `modelo` VALUES ('1', '1', 'Cerato', '5 años o 100.00 Km.', 'cerato.png', '1_cerato-thumb-menu.png', '1_Cerato_2017_baja.pdf', 'Deje que el nuevo Cerato lo lleve a lugares que usted sólo había imaginado.', '1_kia-cerato-forte-yd-byo-w.png', '1_kia-cerato-forte-yd-byo-t.png', '1_kia-cerato-forte-yd-byo-m.png', '1');
INSERT INTO `modelo` VALUES ('2', '1', 'All New Rio Sedán', '5 años o 100.00 Km.', 'all-new-rio', '2_rio-sedan-thumb-menu.png', '2_Volante_NEW_RIO_2018_baja.pdf', 'Talentoso. Elegante. Supremo y funcional. El Kia Rio Sedán 4 Puertas es sencillamente el mejor coche de su clase. Compruebe su precio, interior y exterior.\r\n', '2_rio-sedan-w.png', '2_rio-sedan-t.png', '2_rio-sedan-m.png', '1');
INSERT INTO `modelo` VALUES ('3', '1', 'All New Rio Hatch', '5 años o 100.00 Km.', 'all-new-rio', '3_rio_hatch-thumb.png', '3_all_new_Rio_Hatch.pdf', 'Entra ahora y conoce el All New Rio, un Hatchback que te va a encantar. Descubre todas sus características y cotiza el modelo que más te guste.', '3_rio_hatch_w.png', '3_rio_hatch_t.png', '3_rio_hatch_m.png', '1');
INSERT INTO `modelo` VALUES ('4', '1', 'Picanto', '5 años o 100.00 Km.', '4_picanto.png', '4_picanto_thumb.png', '4_picanto_baja.pdf', 'Descubre el deportivo Kia Picanto con la mejor garantía del mercado. Conozca más sobre su precio, rendimiento, seguridad y características.', '4_kia_picanto_w.png', '4_kia_picanto_t.png', '4_kia_picanto_m.png', '1');
INSERT INTO `modelo` VALUES ('5', '4', 'Soul', '5 años o 100.00 Km.', '5_kia-new-cars-soul-logo.png', '5_soul_thumb.png', '5_Volante_Soul_baja.pdf', 'Entra ahora y conoce el Kia Soul, una Camioneta SUV que te va a encantar. Descubre todas sus características y cotiza el modelo que más te guste.', '5_kia_soul_w.png', '5_kia_soul_t.png', '5_kia_soul_m.png', '1');
INSERT INTO `modelo` VALUES ('6', '4', 'Sportage', '5 años o 100.00 Km.', '6_sportage.png', '6_sportage_thumb.png', '6_Volante Sportage baja.pdf', 'Kia Sportage, un SUV siempre listo para la aventura, sin importar el camino que tienes por delante. Explore su manejo ágil y características de suave conducción. Cotízalo ya.', '6_sportage_w.png', '6_sportage_t.png', '6_sportage_m.png', '1');
INSERT INTO `modelo` VALUES ('7', '2', 'Grand Carnival', '5 años o 100.00 Km.', '7_grand_carnival.png', '7_grand_carnival_thumb.png', '7_Volante_Carnival_baja.pdf', 'Grand Carnival es un vehículo familiar con características de lujo. Eche un vistazo a su hermosa consola central, asientos altos y otros aspectos prometedores.', '7_grand-carnival-w.png', '7_grand-carnival-t.png', '7_grand-carnival-m.png', '1');

-- ----------------------------
-- Table structure for modelo_360
-- ----------------------------
DROP TABLE IF EXISTS `modelo_360`;
CREATE TABLE `modelo_360` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `id_color` int(11) unsigned DEFAULT NULL,
  `img` varchar(80) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_id_modelo_360` (`id_modelo`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=470 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_360
-- ----------------------------
INSERT INTO `modelo_360` VALUES ('1', '1', '1', '1_UD_L_0000.png', '1');
INSERT INTO `modelo_360` VALUES ('2', '1', '1', '1_UD_L_0001.png', '1');
INSERT INTO `modelo_360` VALUES ('3', '1', '1', '1_UD_L_0002.png', '1');
INSERT INTO `modelo_360` VALUES ('4', '1', '1', '1_UD_L_0003.png', '1');
INSERT INTO `modelo_360` VALUES ('5', '1', '1', '1_UD_L_0004.png', '1');
INSERT INTO `modelo_360` VALUES ('6', '1', '1', '1_UD_L_0005.png', '1');
INSERT INTO `modelo_360` VALUES ('7', '1', '1', '1_UD_L_0006.png', '1');
INSERT INTO `modelo_360` VALUES ('8', '1', '1', '1_UD_L_0007.png', '1');
INSERT INTO `modelo_360` VALUES ('9', '1', '1', '1_UD_L_0008.png', '1');
INSERT INTO `modelo_360` VALUES ('10', '1', '1', '1_UD_L_0009.png', '1');
INSERT INTO `modelo_360` VALUES ('11', '1', '1', '1_UD_L_0010.png', '1');
INSERT INTO `modelo_360` VALUES ('12', '1', '1', '1_UD_L_0011.png', '1');
INSERT INTO `modelo_360` VALUES ('13', '1', '1', '1_UD_L_0012.png', '1');
INSERT INTO `modelo_360` VALUES ('14', '1', '1', '1_UD_L_0013.png', '1');
INSERT INTO `modelo_360` VALUES ('15', '1', '1', '1_UD_L_0014.png', '1');
INSERT INTO `modelo_360` VALUES ('16', '1', '1', '1_UD_L_0015.png', '1');
INSERT INTO `modelo_360` VALUES ('17', '1', '1', '1_UD_L_0016.png', '1');
INSERT INTO `modelo_360` VALUES ('18', '1', '1', '1_UD_L_0017.png', '1');
INSERT INTO `modelo_360` VALUES ('19', '1', '1', '1_UD_L_0018.png', '1');
INSERT INTO `modelo_360` VALUES ('20', '1', '1', '1_UD_L_0019.png', '1');
INSERT INTO `modelo_360` VALUES ('21', '1', '1', '1_UD_L_0020.png', '1');
INSERT INTO `modelo_360` VALUES ('22', '1', '1', '1_UD_L_0021.png', '1');
INSERT INTO `modelo_360` VALUES ('23', '1', '1', '1_UD_L_0022.png', '1');
INSERT INTO `modelo_360` VALUES ('24', '1', '1', '1_UD_L_0023.png', '1');
INSERT INTO `modelo_360` VALUES ('25', '1', '1', '1_UD_L_0024.png', '1');
INSERT INTO `modelo_360` VALUES ('26', '1', '1', '1_UD_L_0025.png', '1');
INSERT INTO `modelo_360` VALUES ('27', '1', '1', '1_UD_L_0026.png', '1');
INSERT INTO `modelo_360` VALUES ('28', '1', '1', '1_UD_L_0027.png', '1');
INSERT INTO `modelo_360` VALUES ('29', '1', '1', '1_UD_L_0028.png', '1');
INSERT INTO `modelo_360` VALUES ('30', '1', '1', '1_UD_L_0029.png', '1');
INSERT INTO `modelo_360` VALUES ('31', '1', '1', '1_UD_L_0030.png', '1');
INSERT INTO `modelo_360` VALUES ('32', '1', '1', '1_UD_L_0031.png', '1');
INSERT INTO `modelo_360` VALUES ('33', '1', '1', '1_UD_L_0032.png', '1');
INSERT INTO `modelo_360` VALUES ('34', '1', '1', '1_UD_L_0033.png', '1');
INSERT INTO `modelo_360` VALUES ('35', '1', '1', '1_UD_L_0034.png', '1');
INSERT INTO `modelo_360` VALUES ('36', '1', '1', '1_UD_L_0035.png', '1');
INSERT INTO `modelo_360` VALUES ('37', '1', '1', '1_UD_L_0036.png', '1');
INSERT INTO `modelo_360` VALUES ('38', '1', '1', '1_UD_L_0037.png', '1');
INSERT INTO `modelo_360` VALUES ('39', '1', '1', '1_UD_L_0038.png', '1');
INSERT INTO `modelo_360` VALUES ('40', '1', '1', '1_UD_L_0039.png', '1');
INSERT INTO `modelo_360` VALUES ('41', '1', '1', '1_UD_L_0040.png', '1');
INSERT INTO `modelo_360` VALUES ('42', '1', '1', '1_UD_L_0041.png', '1');
INSERT INTO `modelo_360` VALUES ('43', '1', '1', '1_UD_L_0042.png', '1');
INSERT INTO `modelo_360` VALUES ('44', '1', '1', '1_UD_L_0043.png', '1');
INSERT INTO `modelo_360` VALUES ('45', '1', '1', '1_UD_L_0044.png', '1');
INSERT INTO `modelo_360` VALUES ('46', '1', '1', '1_UD_L_0045.png', '1');
INSERT INTO `modelo_360` VALUES ('47', '1', '1', '1_UD_L_0046.png', '1');
INSERT INTO `modelo_360` VALUES ('48', '1', '1', '1_UD_L_0047.png', '1');
INSERT INTO `modelo_360` VALUES ('49', '1', '1', '1_UD_L_0048.png', '1');
INSERT INTO `modelo_360` VALUES ('50', '1', '1', '1_UD_L_0049.png', '1');
INSERT INTO `modelo_360` VALUES ('51', '1', '1', '1_UD_L_0050.png', '1');
INSERT INTO `modelo_360` VALUES ('52', '1', '1', '1_UD_L_0051.png', '1');
INSERT INTO `modelo_360` VALUES ('53', '1', '1', '1_UD_L_0052.png', '1');
INSERT INTO `modelo_360` VALUES ('54', '1', '1', '1_UD_L_0053.png', '1');
INSERT INTO `modelo_360` VALUES ('55', '1', '1', '1_UD_L_0054.png', '1');
INSERT INTO `modelo_360` VALUES ('56', '1', '1', '1_UD_L_0055.png', '1');
INSERT INTO `modelo_360` VALUES ('57', '1', '1', '1_UD_L_0056.png', '1');
INSERT INTO `modelo_360` VALUES ('58', '1', '1', '1_UD_L_0057.png', '1');
INSERT INTO `modelo_360` VALUES ('59', '1', '1', '1_UD_L_0058.png', '1');
INSERT INTO `modelo_360` VALUES ('60', '1', '1', '1_UD_L_0059.png', '1');
INSERT INTO `modelo_360` VALUES ('61', '1', '1', '1_UD_L_0060.png', '1');
INSERT INTO `modelo_360` VALUES ('62', '1', '1', '1_UD_L_0061.png', '1');
INSERT INTO `modelo_360` VALUES ('63', '1', '1', '1_UD_L_0062.png', '1');
INSERT INTO `modelo_360` VALUES ('64', '1', '1', '1_UD_L_0063.png', '1');
INSERT INTO `modelo_360` VALUES ('65', '1', '1', '1_UD_L_0064.png', '1');
INSERT INTO `modelo_360` VALUES ('66', '1', '1', '1_UD_L_0065.png', '1');
INSERT INTO `modelo_360` VALUES ('67', '1', '1', '1_UD_L_0066.png', '1');
INSERT INTO `modelo_360` VALUES ('68', '1', '1', '1_UD_L_0067.png', '1');
INSERT INTO `modelo_360` VALUES ('69', '1', '1', '1_UD_L_0068.png', '1');
INSERT INTO `modelo_360` VALUES ('70', '1', '1', '1_UD_L_0069.png', '1');
INSERT INTO `modelo_360` VALUES ('71', '1', '1', '1_UD_L_0070.png', '1');
INSERT INTO `modelo_360` VALUES ('72', '1', '1', '1_UD_L_0071.png', '1');
INSERT INTO `modelo_360` VALUES ('73', '2', '2', '2_all_new_rio_sedan_00.png', '1');
INSERT INTO `modelo_360` VALUES ('74', '2', '2', '2_all_new_rio_sedan_01.png', '1');
INSERT INTO `modelo_360` VALUES ('75', '2', '2', '2_all_new_rio_sedan_02.png', '1');
INSERT INTO `modelo_360` VALUES ('76', '2', '2', '2_all_new_rio_sedan_03.png', '1');
INSERT INTO `modelo_360` VALUES ('77', '2', '2', '2_all_new_rio_sedan_04.png', '1');
INSERT INTO `modelo_360` VALUES ('78', '2', '2', '2_all_new_rio_sedan_05.png', '1');
INSERT INTO `modelo_360` VALUES ('79', '2', '2', '2_all_new_rio_sedan_06.png', '1');
INSERT INTO `modelo_360` VALUES ('80', '2', '2', '2_all_new_rio_sedan_07.png', '1');
INSERT INTO `modelo_360` VALUES ('81', '2', '2', '2_all_new_rio_sedan_08.png', '1');
INSERT INTO `modelo_360` VALUES ('82', '2', '2', '2_all_new_rio_sedan_09.png', '1');
INSERT INTO `modelo_360` VALUES ('83', '2', '2', '2_all_new_rio_sedan_10.png', '1');
INSERT INTO `modelo_360` VALUES ('84', '2', '2', '2_all_new_rio_sedan_11.png', '1');
INSERT INTO `modelo_360` VALUES ('85', '2', '2', '2_all_new_rio_sedan_12.png', '1');
INSERT INTO `modelo_360` VALUES ('86', '2', '2', '2_all_new_rio_sedan_13.png', '1');
INSERT INTO `modelo_360` VALUES ('87', '2', '2', '2_all_new_rio_sedan_14.png', '1');
INSERT INTO `modelo_360` VALUES ('88', '2', '2', '2_all_new_rio_sedan_15.png', '1');
INSERT INTO `modelo_360` VALUES ('89', '2', '2', '2_all_new_rio_sedan_16.png', '1');
INSERT INTO `modelo_360` VALUES ('90', '2', '2', '2_all_new_rio_sedan_17.png', '1');
INSERT INTO `modelo_360` VALUES ('91', '2', '2', '2_all_new_rio_sedan_18.png', '1');
INSERT INTO `modelo_360` VALUES ('92', '2', '2', '2_all_new_rio_sedan_19.png', '1');
INSERT INTO `modelo_360` VALUES ('93', '2', '2', '2_all_new_rio_sedan_20.png', '1');
INSERT INTO `modelo_360` VALUES ('94', '2', '2', '2_all_new_rio_sedan_21.png', '1');
INSERT INTO `modelo_360` VALUES ('95', '2', '2', '2_all_new_rio_sedan_22.png', '1');
INSERT INTO `modelo_360` VALUES ('96', '2', '2', '2_all_new_rio_sedan_23.png', '1');
INSERT INTO `modelo_360` VALUES ('97', '2', '2', '2_all_new_rio_sedan_24.png', '1');
INSERT INTO `modelo_360` VALUES ('98', '2', '2', '2_all_new_rio_sedan_25.png', '1');
INSERT INTO `modelo_360` VALUES ('99', '2', '2', '2_all_new_rio_sedan_26.png', '1');
INSERT INTO `modelo_360` VALUES ('100', '2', '2', '2_all_new_rio_sedan_27.png', '1');
INSERT INTO `modelo_360` VALUES ('101', '2', '2', '2_all_new_rio_sedan_28.png', '1');
INSERT INTO `modelo_360` VALUES ('102', '2', '2', '2_all_new_rio_sedan_29.png', '1');
INSERT INTO `modelo_360` VALUES ('103', '2', '2', '2_all_new_rio_sedan_30.png', '1');
INSERT INTO `modelo_360` VALUES ('104', '2', '2', '2_all_new_rio_sedan_31.png', '1');
INSERT INTO `modelo_360` VALUES ('105', '2', '2', '2_all_new_rio_sedan_32.png', '1');
INSERT INTO `modelo_360` VALUES ('106', '2', '2', '2_all_new_rio_sedan_33.png', '1');
INSERT INTO `modelo_360` VALUES ('107', '2', '2', '2_all_new_rio_sedan_34.png', '1');
INSERT INTO `modelo_360` VALUES ('108', '2', '2', '2_all_new_rio_sedan_35.png', '1');
INSERT INTO `modelo_360` VALUES ('109', '2', '2', '2_all_new_rio_sedan_36.png', '1');
INSERT INTO `modelo_360` VALUES ('110', '2', '2', '2_all_new_rio_sedan_37.png', '1');
INSERT INTO `modelo_360` VALUES ('111', '2', '2', '2_all_new_rio_sedan_38.png', '1');
INSERT INTO `modelo_360` VALUES ('112', '2', '2', '2_all_new_rio_sedan_39.png', '1');
INSERT INTO `modelo_360` VALUES ('113', '2', '2', '2_all_new_rio_sedan_40.png', '1');
INSERT INTO `modelo_360` VALUES ('114', '2', '2', '2_all_new_rio_sedan_41.png', '1');
INSERT INTO `modelo_360` VALUES ('115', '2', '2', '2_all_new_rio_sedan_42.png', '1');
INSERT INTO `modelo_360` VALUES ('116', '2', '2', '2_all_new_rio_sedan_43.png', '1');
INSERT INTO `modelo_360` VALUES ('117', '2', '2', '2_all_new_rio_sedan_44.png', '1');
INSERT INTO `modelo_360` VALUES ('118', '2', '2', '2_all_new_rio_sedan_45.png', '1');
INSERT INTO `modelo_360` VALUES ('119', '2', '2', '2_all_new_rio_sedan_46.png', '1');
INSERT INTO `modelo_360` VALUES ('120', '2', '2', '2_all_new_rio_sedan_47.png', '1');
INSERT INTO `modelo_360` VALUES ('121', '2', '2', '2_all_new_rio_sedan_48.png', '1');
INSERT INTO `modelo_360` VALUES ('122', '2', '2', '2_all_new_rio_sedan_49.png', '1');
INSERT INTO `modelo_360` VALUES ('123', '2', '2', '2_all_new_rio_sedan_50.png', '1');
INSERT INTO `modelo_360` VALUES ('124', '2', '2', '2_all_new_rio_sedan_51.png', '1');
INSERT INTO `modelo_360` VALUES ('125', '2', '2', '2_all_new_rio_sedan_52.png', '1');
INSERT INTO `modelo_360` VALUES ('126', '2', '2', '2_all_new_rio_sedan_53.png', '1');
INSERT INTO `modelo_360` VALUES ('127', '2', '2', '2_all_new_rio_sedan_54.png', '1');
INSERT INTO `modelo_360` VALUES ('128', '2', '2', '2_all_new_rio_sedan_55.png', '1');
INSERT INTO `modelo_360` VALUES ('129', '2', '2', '2_all_new_rio_sedan_56.png', '1');
INSERT INTO `modelo_360` VALUES ('130', '2', '2', '2_all_new_rio_sedan_57.png', '1');
INSERT INTO `modelo_360` VALUES ('131', '2', '2', '2_all_new_rio_sedan_58.png', '1');
INSERT INTO `modelo_360` VALUES ('132', '2', '2', '2_all_new_rio_sedan_59.png', '1');
INSERT INTO `modelo_360` VALUES ('133', '2', '2', '2_all_new_rio_sedan_60.png', '1');
INSERT INTO `modelo_360` VALUES ('134', '2', '2', '2_all_new_rio_sedan_61.png', '1');
INSERT INTO `modelo_360` VALUES ('135', '2', '2', '2_all_new_rio_sedan_62.png', '1');
INSERT INTO `modelo_360` VALUES ('136', '2', '2', '2_all_new_rio_sedan_63.png', '1');
INSERT INTO `modelo_360` VALUES ('137', '2', '2', '2_all_new_rio_sedan_64.png', '1');
INSERT INTO `modelo_360` VALUES ('138', '2', '2', '2_all_new_rio_sedan_65.png', '1');
INSERT INTO `modelo_360` VALUES ('139', '2', '2', '2_all_new_rio_sedan_66.png', '1');
INSERT INTO `modelo_360` VALUES ('140', '2', '2', '2_all_new_rio_sedan_67.png', '1');
INSERT INTO `modelo_360` VALUES ('141', '2', '2', '2_all_new_rio_sedan_68.png', '1');
INSERT INTO `modelo_360` VALUES ('142', '2', '2', '2_all_new_rio_sedan_69.png', '1');
INSERT INTO `modelo_360` VALUES ('143', '2', '2', '2_all_new_rio_sedan_70.png', '1');
INSERT INTO `modelo_360` VALUES ('144', '2', '2', '2_all_new_rio_sedan_71.png', '1');
INSERT INTO `modelo_360` VALUES ('145', '3', null, '3_kia-rio_2017-2-clear-white_0000.png', '1');
INSERT INTO `modelo_360` VALUES ('146', '3', null, '3_kia-rio_2017-2-clear-white_0001.png', '1');
INSERT INTO `modelo_360` VALUES ('147', '3', null, '3_kia-rio_2017-2-clear-white_0002.png', '1');
INSERT INTO `modelo_360` VALUES ('148', '3', null, '3_kia-rio_2017-2-clear-white_0003.png', '1');
INSERT INTO `modelo_360` VALUES ('149', '3', null, '3_kia-rio_2017-2-clear-white_0004.png', '1');
INSERT INTO `modelo_360` VALUES ('150', '3', null, '3_kia-rio_2017-2-clear-white_0005.png', '1');
INSERT INTO `modelo_360` VALUES ('151', '3', null, '3_kia-rio_2017-2-clear-white_0006.png', '1');
INSERT INTO `modelo_360` VALUES ('152', '3', null, '3_kia-rio_2017-2-clear-white_0007.png', '1');
INSERT INTO `modelo_360` VALUES ('153', '3', null, '3_kia-rio_2017-2-clear-white_0008.png', '1');
INSERT INTO `modelo_360` VALUES ('154', '3', null, '3_kia-rio_2017-2-clear-white_0009.png', '1');
INSERT INTO `modelo_360` VALUES ('155', '3', null, '3_kia-rio_2017-2-clear-white_0010.png', '1');
INSERT INTO `modelo_360` VALUES ('156', '3', null, '3_kia-rio_2017-2-clear-white_0011.png', '1');
INSERT INTO `modelo_360` VALUES ('157', '3', null, '3_kia-rio_2017-2-clear-white_0012.png', '1');
INSERT INTO `modelo_360` VALUES ('158', '3', null, '3_kia-rio_2017-2-clear-white_0013.png', '1');
INSERT INTO `modelo_360` VALUES ('159', '3', null, '3_kia-rio_2017-2-clear-white_0014.png', '1');
INSERT INTO `modelo_360` VALUES ('160', '3', null, '3_kia-rio_2017-2-clear-white_0015.png', '1');
INSERT INTO `modelo_360` VALUES ('161', '3', null, '3_kia-rio_2017-2-clear-white_0016.png', '1');
INSERT INTO `modelo_360` VALUES ('162', '3', null, '3_kia-rio_2017-2-clear-white_0017.png', '1');
INSERT INTO `modelo_360` VALUES ('163', '3', null, '3_kia-rio_2017-2-clear-white_0018.png', '1');
INSERT INTO `modelo_360` VALUES ('164', '3', null, '3_kia-rio_2017-2-clear-white_0019.png', '1');
INSERT INTO `modelo_360` VALUES ('165', '3', null, '3_kia-rio_2017-2-clear-white_0020.png', '1');
INSERT INTO `modelo_360` VALUES ('166', '3', null, '3_kia-rio_2017-2-clear-white_0021.png', '1');
INSERT INTO `modelo_360` VALUES ('167', '3', null, '3_kia-rio_2017-2-clear-white_0022.png', '1');
INSERT INTO `modelo_360` VALUES ('168', '3', null, '3_kia-rio_2017-2-clear-white_0023.png', '1');
INSERT INTO `modelo_360` VALUES ('169', '3', null, '3_kia-rio_2017-2-clear-white_0024.png', '1');
INSERT INTO `modelo_360` VALUES ('170', '3', null, '3_kia-rio_2017-2-clear-white_0025.png', '1');
INSERT INTO `modelo_360` VALUES ('171', '3', null, '3_kia-rio_2017-2-clear-white_0026.png', '1');
INSERT INTO `modelo_360` VALUES ('172', '3', null, '3_kia-rio_2017-2-clear-white_0027.png', '1');
INSERT INTO `modelo_360` VALUES ('173', '3', null, '3_kia-rio_2017-2-clear-white_0028.png', '1');
INSERT INTO `modelo_360` VALUES ('174', '3', null, '3_kia-rio_2017-2-clear-white_0029.png', '1');
INSERT INTO `modelo_360` VALUES ('175', '3', null, '3_kia-rio_2017-2-clear-white_0030.png', '1');
INSERT INTO `modelo_360` VALUES ('176', '3', null, '3_kia-rio_2017-2-clear-white_0031.png', '1');
INSERT INTO `modelo_360` VALUES ('177', '3', null, '3_kia-rio_2017-2-clear-white_0032.png', '1');
INSERT INTO `modelo_360` VALUES ('178', '3', null, '3_kia-rio_2017-2-clear-white_0033.png', '1');
INSERT INTO `modelo_360` VALUES ('179', '3', null, '3_kia-rio_2017-2-clear-white_0034.png', '1');
INSERT INTO `modelo_360` VALUES ('180', '3', null, '3_kia-rio_2017-2-clear-white_0035.png', '1');
INSERT INTO `modelo_360` VALUES ('181', '3', null, '3_kia-rio_2017-2-clear-white_0036.png', '1');
INSERT INTO `modelo_360` VALUES ('182', '3', null, '3_kia-rio_2017-2-clear-white_0037.png', '1');
INSERT INTO `modelo_360` VALUES ('183', '3', null, '3_kia-rio_2017-2-clear-white_0038.png', '1');
INSERT INTO `modelo_360` VALUES ('184', '3', null, '3_kia-rio_2017-2-clear-white_0039.png', '1');
INSERT INTO `modelo_360` VALUES ('185', '3', null, '3_kia-rio_2017-2-clear-white_0040.png', '1');
INSERT INTO `modelo_360` VALUES ('186', '3', null, '3_kia-rio_2017-2-clear-white_0041.png', '1');
INSERT INTO `modelo_360` VALUES ('187', '3', null, '3_kia-rio_2017-2-clear-white_0042.png', '1');
INSERT INTO `modelo_360` VALUES ('188', '3', null, '3_kia-rio_2017-2-clear-white_0043.png', '1');
INSERT INTO `modelo_360` VALUES ('189', '3', null, '3_kia-rio_2017-2-clear-white_0044.png', '1');
INSERT INTO `modelo_360` VALUES ('190', '3', null, '3_kia-rio_2017-2-clear-white_0045.png', '1');
INSERT INTO `modelo_360` VALUES ('191', '3', null, '3_kia-rio_2017-2-clear-white_0046.png', '1');
INSERT INTO `modelo_360` VALUES ('192', '3', null, '3_kia-rio_2017-2-clear-white_0047.png', '1');
INSERT INTO `modelo_360` VALUES ('193', '3', null, '3_kia-rio_2017-2-clear-white_0048.png', '1');
INSERT INTO `modelo_360` VALUES ('194', '3', null, '3_kia-rio_2017-2-clear-white_0049.png', '1');
INSERT INTO `modelo_360` VALUES ('195', '3', null, '3_kia-rio_2017-2-clear-white_0050.png', '1');
INSERT INTO `modelo_360` VALUES ('196', '3', null, '3_kia-rio_2017-2-clear-white_0051.png', '1');
INSERT INTO `modelo_360` VALUES ('197', '3', null, '3_kia-rio_2017-2-clear-white_0052.png', '1');
INSERT INTO `modelo_360` VALUES ('198', '3', null, '3_kia-rio_2017-2-clear-white_0053.png', '1');
INSERT INTO `modelo_360` VALUES ('199', '3', null, '3_kia-rio_2017-2-clear-white_0054.png', '1');
INSERT INTO `modelo_360` VALUES ('200', '3', null, '3_kia-rio_2017-2-clear-white_0055.png', '1');
INSERT INTO `modelo_360` VALUES ('201', '3', null, '3_kia-rio_2017-2-clear-white_0056.png', '1');
INSERT INTO `modelo_360` VALUES ('202', '3', null, '3_kia-rio_2017-2-clear-white_0057.png', '1');
INSERT INTO `modelo_360` VALUES ('203', '3', null, '3_kia-rio_2017-2-clear-white_0058.png', '1');
INSERT INTO `modelo_360` VALUES ('204', '3', null, '3_kia-rio_2017-2-clear-white_0059.png', '1');
INSERT INTO `modelo_360` VALUES ('205', '3', null, '3_kia-rio_2017-2-clear-white_0060.png', '1');
INSERT INTO `modelo_360` VALUES ('206', '3', null, '3_kia-rio_2017-2-clear-white_0061.png', '1');
INSERT INTO `modelo_360` VALUES ('207', '3', null, '3_kia-rio_2017-2-clear-white_0062.png', '1');
INSERT INTO `modelo_360` VALUES ('208', '3', null, '3_kia-rio_2017-2-clear-white_0063.png', '1');
INSERT INTO `modelo_360` VALUES ('209', '3', null, '3_kia-rio_2017-2-clear-white_0064.png', '1');
INSERT INTO `modelo_360` VALUES ('210', '3', null, '3_kia-rio_2017-2-clear-white_0065.png', '1');
INSERT INTO `modelo_360` VALUES ('211', '3', null, '3_kia-rio_2017-2-clear-white_0066.png', '1');
INSERT INTO `modelo_360` VALUES ('212', '3', null, '3_kia-rio_2017-2-clear-white_0067.png', '1');
INSERT INTO `modelo_360` VALUES ('213', '3', null, '3_kia-rio_2017-2-clear-white_0068.png', '1');
INSERT INTO `modelo_360` VALUES ('214', '3', null, '3_kia-rio_2017-2-clear-white_0069.png', '1');
INSERT INTO `modelo_360` VALUES ('215', '3', null, '3_kia-rio_2017-2-clear-white_0070.png', '1');
INSERT INTO `modelo_360` VALUES ('216', '3', null, '3_kia-rio_2017-2-clear-white_0071.png', '1');
INSERT INTO `modelo_360` VALUES ('217', '4', null, '4_picanto-feature-360vr-clearwhite-01.png', '1');
INSERT INTO `modelo_360` VALUES ('218', '4', null, '4_picanto-feature-360vr-clearwhite-02.png', '1');
INSERT INTO `modelo_360` VALUES ('219', '4', null, '4_picanto-feature-360vr-clearwhite-03.png', '1');
INSERT INTO `modelo_360` VALUES ('220', '4', null, '4_picanto-feature-360vr-clearwhite-04.png', '1');
INSERT INTO `modelo_360` VALUES ('221', '4', null, '4_picanto-feature-360vr-clearwhite-05.png', '1');
INSERT INTO `modelo_360` VALUES ('222', '4', null, '4_picanto-feature-360vr-clearwhite-06.png', '1');
INSERT INTO `modelo_360` VALUES ('223', '4', null, '4_picanto-feature-360vr-clearwhite-07.png', '1');
INSERT INTO `modelo_360` VALUES ('224', '4', null, '4_picanto-feature-360vr-clearwhite-08.png', '1');
INSERT INTO `modelo_360` VALUES ('225', '4', null, '4_picanto-feature-360vr-clearwhite-09.png', '1');
INSERT INTO `modelo_360` VALUES ('226', '4', null, '4_picanto-feature-360vr-clearwhite-10.png', '1');
INSERT INTO `modelo_360` VALUES ('227', '4', null, '4_picanto-feature-360vr-clearwhite-11.png', '1');
INSERT INTO `modelo_360` VALUES ('228', '4', null, '4_picanto-feature-360vr-clearwhite-12.png', '1');
INSERT INTO `modelo_360` VALUES ('229', '4', null, '4_picanto-feature-360vr-clearwhite-13.png', '1');
INSERT INTO `modelo_360` VALUES ('230', '4', null, '4_picanto-feature-360vr-clearwhite-14.png', '1');
INSERT INTO `modelo_360` VALUES ('231', '4', null, '4_picanto-feature-360vr-clearwhite-15.png', '1');
INSERT INTO `modelo_360` VALUES ('232', '4', null, '4_picanto-feature-360vr-clearwhite-16.png', '1');
INSERT INTO `modelo_360` VALUES ('233', '4', null, '4_picanto-feature-360vr-clearwhite-17.png', '1');
INSERT INTO `modelo_360` VALUES ('234', '4', null, '4_picanto-feature-360vr-clearwhite-18.png', '1');
INSERT INTO `modelo_360` VALUES ('235', '4', null, '4_picanto-feature-360vr-clearwhite-19.png', '1');
INSERT INTO `modelo_360` VALUES ('236', '4', null, '4_picanto-feature-360vr-clearwhite-20.png', '1');
INSERT INTO `modelo_360` VALUES ('237', '4', null, '4_picanto-feature-360vr-clearwhite-21.png', '1');
INSERT INTO `modelo_360` VALUES ('238', '4', null, '4_picanto-feature-360vr-clearwhite-22.png', '1');
INSERT INTO `modelo_360` VALUES ('239', '4', null, '4_picanto-feature-360vr-clearwhite-23.png', '1');
INSERT INTO `modelo_360` VALUES ('240', '4', null, '4_picanto-feature-360vr-clearwhite-24.png', '1');
INSERT INTO `modelo_360` VALUES ('241', '4', null, '4_picanto-feature-360vr-clearwhite-25.png', '1');
INSERT INTO `modelo_360` VALUES ('242', '4', null, '4_picanto-feature-360vr-clearwhite-26.png', '1');
INSERT INTO `modelo_360` VALUES ('243', '4', null, '4_picanto-feature-360vr-clearwhite-27.png', '1');
INSERT INTO `modelo_360` VALUES ('244', '4', null, '4_picanto-feature-360vr-clearwhite-28.png', '1');
INSERT INTO `modelo_360` VALUES ('245', '4', null, '4_picanto-feature-360vr-clearwhite-29.png', '1');
INSERT INTO `modelo_360` VALUES ('246', '4', null, '4_picanto-feature-360vr-clearwhite-30.png', '1');
INSERT INTO `modelo_360` VALUES ('247', '4', null, '4_picanto-feature-360vr-clearwhite-31.png', '1');
INSERT INTO `modelo_360` VALUES ('248', '4', null, '4_picanto-feature-360vr-clearwhite-32.png', '1');
INSERT INTO `modelo_360` VALUES ('249', '4', null, '4_picanto-feature-360vr-clearwhite-33.png', '1');
INSERT INTO `modelo_360` VALUES ('250', '4', null, '4_picanto-feature-360vr-clearwhite-34.png', '1');
INSERT INTO `modelo_360` VALUES ('251', '4', null, '4_picanto-feature-360vr-clearwhite-35.png', '1');
INSERT INTO `modelo_360` VALUES ('252', '4', null, '4_picanto-feature-360vr-clearwhite-36.png', '1');
INSERT INTO `modelo_360` VALUES ('253', '5', null, '5_kia-soul-2-clear-white_0000.png', '1');
INSERT INTO `modelo_360` VALUES ('254', '5', null, '5_kia-soul-2-clear-white_0001.png', '1');
INSERT INTO `modelo_360` VALUES ('255', '5', null, '5_kia-soul-2-clear-white_0002.png', '1');
INSERT INTO `modelo_360` VALUES ('256', '5', null, '5_kia-soul-2-clear-white_0003.png', '1');
INSERT INTO `modelo_360` VALUES ('257', '5', null, '5_kia-soul-2-clear-white_0004.png', '1');
INSERT INTO `modelo_360` VALUES ('258', '5', null, '5_kia-soul-2-clear-white_0005.png', '1');
INSERT INTO `modelo_360` VALUES ('259', '5', null, '5_kia-soul-2-clear-white_0006.png', '1');
INSERT INTO `modelo_360` VALUES ('260', '5', null, '5_kia-soul-2-clear-white_0007.png', '1');
INSERT INTO `modelo_360` VALUES ('261', '5', null, '5_kia-soul-2-clear-white_0008.png', '1');
INSERT INTO `modelo_360` VALUES ('262', '5', null, '5_kia-soul-2-clear-white_0009.png', '1');
INSERT INTO `modelo_360` VALUES ('263', '5', null, '5_kia-soul-2-clear-white_0010.png', '1');
INSERT INTO `modelo_360` VALUES ('264', '5', null, '5_kia-soul-2-clear-white_0011.png', '1');
INSERT INTO `modelo_360` VALUES ('265', '5', null, '5_kia-soul-2-clear-white_0012.png', '1');
INSERT INTO `modelo_360` VALUES ('266', '5', null, '5_kia-soul-2-clear-white_0013.png', '1');
INSERT INTO `modelo_360` VALUES ('267', '5', null, '5_kia-soul-2-clear-white_0014.png', '1');
INSERT INTO `modelo_360` VALUES ('268', '5', null, '5_kia-soul-2-clear-white_0015.png', '1');
INSERT INTO `modelo_360` VALUES ('269', '5', null, '5_kia-soul-2-clear-white_0016.png', '1');
INSERT INTO `modelo_360` VALUES ('270', '5', null, '5_kia-soul-2-clear-white_0017.png', '1');
INSERT INTO `modelo_360` VALUES ('271', '5', null, '5_kia-soul-2-clear-white_0018.png', '1');
INSERT INTO `modelo_360` VALUES ('272', '5', null, '5_kia-soul-2-clear-white_0019.png', '1');
INSERT INTO `modelo_360` VALUES ('273', '5', null, '5_kia-soul-2-clear-white_0020.png', '1');
INSERT INTO `modelo_360` VALUES ('274', '5', null, '5_kia-soul-2-clear-white_0021.png', '1');
INSERT INTO `modelo_360` VALUES ('275', '5', null, '5_kia-soul-2-clear-white_0022.png', '1');
INSERT INTO `modelo_360` VALUES ('276', '5', null, '5_kia-soul-2-clear-white_0023.png', '1');
INSERT INTO `modelo_360` VALUES ('277', '5', null, '5_kia-soul-2-clear-white_0024.png', '1');
INSERT INTO `modelo_360` VALUES ('278', '5', null, '5_kia-soul-2-clear-white_0025.png', '1');
INSERT INTO `modelo_360` VALUES ('279', '5', null, '5_kia-soul-2-clear-white_0026.png', '1');
INSERT INTO `modelo_360` VALUES ('280', '5', null, '5_kia-soul-2-clear-white_0027.png', '1');
INSERT INTO `modelo_360` VALUES ('281', '5', null, '5_kia-soul-2-clear-white_0028.png', '1');
INSERT INTO `modelo_360` VALUES ('282', '5', null, '5_kia-soul-2-clear-white_0029.png', '1');
INSERT INTO `modelo_360` VALUES ('283', '5', null, '5_kia-soul-2-clear-white_0030.png', '1');
INSERT INTO `modelo_360` VALUES ('284', '5', null, '5_kia-soul-2-clear-white_0031.png', '1');
INSERT INTO `modelo_360` VALUES ('285', '5', null, '5_kia-soul-2-clear-white_0032.png', '1');
INSERT INTO `modelo_360` VALUES ('286', '5', null, '5_kia-soul-2-clear-white_0033.png', '1');
INSERT INTO `modelo_360` VALUES ('287', '5', null, '5_kia-soul-2-clear-white_0034.png', '1');
INSERT INTO `modelo_360` VALUES ('288', '5', null, '5_kia-soul-2-clear-white_0035.png', '1');
INSERT INTO `modelo_360` VALUES ('289', '5', null, '5_kia-soul-2-clear-white_0036.png', '1');
INSERT INTO `modelo_360` VALUES ('290', '5', null, '5_kia-soul-2-clear-white_0037.png', '1');
INSERT INTO `modelo_360` VALUES ('291', '5', null, '5_kia-soul-2-clear-white_0038.png', '1');
INSERT INTO `modelo_360` VALUES ('292', '5', null, '5_kia-soul-2-clear-white_0039.png', '1');
INSERT INTO `modelo_360` VALUES ('293', '5', null, '5_kia-soul-2-clear-white_0040.png', '1');
INSERT INTO `modelo_360` VALUES ('294', '5', null, '5_kia-soul-2-clear-white_0041.png', '1');
INSERT INTO `modelo_360` VALUES ('295', '5', null, '5_kia-soul-2-clear-white_0042.png', '1');
INSERT INTO `modelo_360` VALUES ('296', '5', null, '5_kia-soul-2-clear-white_0043.png', '1');
INSERT INTO `modelo_360` VALUES ('297', '5', null, '5_kia-soul-2-clear-white_0044.png', '1');
INSERT INTO `modelo_360` VALUES ('298', '5', null, '5_kia-soul-2-clear-white_0045.png', '1');
INSERT INTO `modelo_360` VALUES ('299', '5', null, '5_kia-soul-2-clear-white_0046.png', '1');
INSERT INTO `modelo_360` VALUES ('300', '5', null, '5_kia-soul-2-clear-white_0047.png', '1');
INSERT INTO `modelo_360` VALUES ('301', '5', null, '5_kia-soul-2-clear-white_0047.png', '1');
INSERT INTO `modelo_360` VALUES ('302', '5', null, '5_kia-soul-2-clear-white_0048.png', '1');
INSERT INTO `modelo_360` VALUES ('303', '5', null, '5_kia-soul-2-clear-white_0049.png', '1');
INSERT INTO `modelo_360` VALUES ('304', '5', null, '5_kia-soul-2-clear-white_0050.png', '1');
INSERT INTO `modelo_360` VALUES ('305', '5', null, '5_kia-soul-2-clear-white_0051.png', '1');
INSERT INTO `modelo_360` VALUES ('306', '5', null, '5_kia-soul-2-clear-white_0052.png', '1');
INSERT INTO `modelo_360` VALUES ('307', '5', null, '5_kia-soul-2-clear-white_0053.png', '1');
INSERT INTO `modelo_360` VALUES ('308', '5', null, '5_kia-soul-2-clear-white_0054.png', '1');
INSERT INTO `modelo_360` VALUES ('309', '5', null, '5_kia-soul-2-clear-white_0055.png', '1');
INSERT INTO `modelo_360` VALUES ('310', '5', null, '5_kia-soul-2-clear-white_0056.png', '1');
INSERT INTO `modelo_360` VALUES ('311', '5', null, '5_kia-soul-2-clear-white_0057.png', '1');
INSERT INTO `modelo_360` VALUES ('312', '5', null, '5_kia-soul-2-clear-white_0058.png', '1');
INSERT INTO `modelo_360` VALUES ('313', '5', null, '5_kia-soul-2-clear-white_0059.png', '1');
INSERT INTO `modelo_360` VALUES ('314', '5', null, '5_kia-soul-2-clear-white_0060.png', '1');
INSERT INTO `modelo_360` VALUES ('315', '5', null, '5_kia-soul-2-clear-white_0061.png', '1');
INSERT INTO `modelo_360` VALUES ('316', '5', null, '5_kia-soul-2-clear-white_0062.png', '1');
INSERT INTO `modelo_360` VALUES ('317', '5', null, '5_kia-soul-2-clear-white_0063.png', '1');
INSERT INTO `modelo_360` VALUES ('318', '5', null, '5_kia-soul-2-clear-white_0064.png', '1');
INSERT INTO `modelo_360` VALUES ('319', '5', null, '5_kia-soul-2-clear-white_0065.png', '1');
INSERT INTO `modelo_360` VALUES ('320', '5', null, '5_kia-soul-2-clear-white_0066.png', '1');
INSERT INTO `modelo_360` VALUES ('321', '5', null, '5_kia-soul-2-clear-white_0067.png', '1');
INSERT INTO `modelo_360` VALUES ('322', '5', null, '5_kia-soul-2-clear-white_0068.png', '1');
INSERT INTO `modelo_360` VALUES ('323', '5', null, '5_kia-soul-2-clear-white_0069.png', '1');
INSERT INTO `modelo_360` VALUES ('324', '5', null, '5_kia-soul-2-clear-white_0070.png', '1');
INSERT INTO `modelo_360` VALUES ('325', '5', null, '5_kia-soul-2-clear-white_0071.png', '1');
INSERT INTO `modelo_360` VALUES ('326', '6', null, '6_kia-sportage-gt-line-fusion-white_0000-min.png', '1');
INSERT INTO `modelo_360` VALUES ('327', '6', null, '6_kia-sportage-gt-line-fusion-white_0001-min.png', '1');
INSERT INTO `modelo_360` VALUES ('328', '6', null, '6_kia-sportage-gt-line-fusion-white_0002-min.png', '1');
INSERT INTO `modelo_360` VALUES ('329', '6', null, '6_kia-sportage-gt-line-fusion-white_0003-min.png', '1');
INSERT INTO `modelo_360` VALUES ('330', '6', null, '6_kia-sportage-gt-line-fusion-white_0004-min.png', '1');
INSERT INTO `modelo_360` VALUES ('331', '6', null, '6_kia-sportage-gt-line-fusion-white_0005-min.png', '1');
INSERT INTO `modelo_360` VALUES ('332', '6', null, '6_kia-sportage-gt-line-fusion-white_0006-min.png', '1');
INSERT INTO `modelo_360` VALUES ('333', '6', null, '6_kia-sportage-gt-line-fusion-white_0007-min.png', '1');
INSERT INTO `modelo_360` VALUES ('334', '6', null, '6_kia-sportage-gt-line-fusion-white_0008-min.png', '1');
INSERT INTO `modelo_360` VALUES ('335', '6', null, '6_kia-sportage-gt-line-fusion-white_0009-min.png', '1');
INSERT INTO `modelo_360` VALUES ('336', '6', null, '6_kia-sportage-gt-line-fusion-white_0010-min.png', '1');
INSERT INTO `modelo_360` VALUES ('337', '6', null, '6_kia-sportage-gt-line-fusion-white_0011-min.png', '1');
INSERT INTO `modelo_360` VALUES ('338', '6', null, '6_kia-sportage-gt-line-fusion-white_0012-min.png', '1');
INSERT INTO `modelo_360` VALUES ('339', '6', null, '6_kia-sportage-gt-line-fusion-white_0013-min.png', '1');
INSERT INTO `modelo_360` VALUES ('340', '6', null, '6_kia-sportage-gt-line-fusion-white_0014-min.png', '1');
INSERT INTO `modelo_360` VALUES ('341', '6', null, '6_kia-sportage-gt-line-fusion-white_0015-min.png', '1');
INSERT INTO `modelo_360` VALUES ('342', '6', null, '6_kia-sportage-gt-line-fusion-white_0016-min.png', '1');
INSERT INTO `modelo_360` VALUES ('343', '6', null, '6_kia-sportage-gt-line-fusion-white_0017-min.png', '1');
INSERT INTO `modelo_360` VALUES ('344', '6', null, '6_kia-sportage-gt-line-fusion-white_0018-min.png', '1');
INSERT INTO `modelo_360` VALUES ('345', '6', null, '6_kia-sportage-gt-line-fusion-white_0019-min.png', '1');
INSERT INTO `modelo_360` VALUES ('346', '6', null, '6_kia-sportage-gt-line-fusion-white_0020-min.png', '1');
INSERT INTO `modelo_360` VALUES ('347', '6', null, '6_kia-sportage-gt-line-fusion-white_0021-min.png', '1');
INSERT INTO `modelo_360` VALUES ('348', '6', null, '6_kia-sportage-gt-line-fusion-white_0022-min.png', '1');
INSERT INTO `modelo_360` VALUES ('349', '6', null, '6_kia-sportage-gt-line-fusion-white_0023-min.png', '1');
INSERT INTO `modelo_360` VALUES ('350', '6', null, '6_kia-sportage-gt-line-fusion-white_0024-min.png', '1');
INSERT INTO `modelo_360` VALUES ('351', '6', null, '6_kia-sportage-gt-line-fusion-white_0025-min.png', '1');
INSERT INTO `modelo_360` VALUES ('352', '6', null, '6_kia-sportage-gt-line-fusion-white_0026-min.png', '1');
INSERT INTO `modelo_360` VALUES ('353', '6', null, '6_kia-sportage-gt-line-fusion-white_0027-min.png', '1');
INSERT INTO `modelo_360` VALUES ('354', '6', null, '6_kia-sportage-gt-line-fusion-white_0028-min.png', '1');
INSERT INTO `modelo_360` VALUES ('355', '6', null, '6_kia-sportage-gt-line-fusion-white_0029-min.png', '1');
INSERT INTO `modelo_360` VALUES ('356', '6', null, '6_kia-sportage-gt-line-fusion-white_0030-min.png', '1');
INSERT INTO `modelo_360` VALUES ('357', '6', null, '6_kia-sportage-gt-line-fusion-white_0031-min.png', '1');
INSERT INTO `modelo_360` VALUES ('358', '6', null, '6_kia-sportage-gt-line-fusion-white_0032-min.png', '1');
INSERT INTO `modelo_360` VALUES ('359', '6', null, '6_kia-sportage-gt-line-fusion-white_0033-min.png', '1');
INSERT INTO `modelo_360` VALUES ('360', '6', null, '6_kia-sportage-gt-line-fusion-white_0034-min.png', '1');
INSERT INTO `modelo_360` VALUES ('361', '6', null, '6_kia-sportage-gt-line-fusion-white_0035-min.png', '1');
INSERT INTO `modelo_360` VALUES ('362', '6', null, '6_kia-sportage-gt-line-fusion-white_0036-min.png', '1');
INSERT INTO `modelo_360` VALUES ('363', '6', null, '6_kia-sportage-gt-line-fusion-white_0037-min.png', '1');
INSERT INTO `modelo_360` VALUES ('364', '6', null, '6_kia-sportage-gt-line-fusion-white_0038-min.png', '1');
INSERT INTO `modelo_360` VALUES ('365', '6', null, '6_kia-sportage-gt-line-fusion-white_0039-min.png', '1');
INSERT INTO `modelo_360` VALUES ('366', '6', null, '6_kia-sportage-gt-line-fusion-white_0040-min.png', '1');
INSERT INTO `modelo_360` VALUES ('367', '6', null, '6_kia-sportage-gt-line-fusion-white_0041-min.png', '1');
INSERT INTO `modelo_360` VALUES ('368', '6', null, '6_kia-sportage-gt-line-fusion-white_0042-min.png', '1');
INSERT INTO `modelo_360` VALUES ('369', '6', null, '6_kia-sportage-gt-line-fusion-white_0043-min.png', '1');
INSERT INTO `modelo_360` VALUES ('370', '6', null, '6_kia-sportage-gt-line-fusion-white_0044-min.png', '1');
INSERT INTO `modelo_360` VALUES ('371', '6', null, '6_kia-sportage-gt-line-fusion-white_0045-min.png', '1');
INSERT INTO `modelo_360` VALUES ('372', '6', null, '6_kia-sportage-gt-line-fusion-white_0046-min.png', '1');
INSERT INTO `modelo_360` VALUES ('373', '6', null, '6_kia-sportage-gt-line-fusion-white_0047-min.png', '1');
INSERT INTO `modelo_360` VALUES ('374', '6', null, '6_kia-sportage-gt-line-fusion-white_0048-min.png', '1');
INSERT INTO `modelo_360` VALUES ('375', '6', null, '6_kia-sportage-gt-line-fusion-white_0049-min.png', '1');
INSERT INTO `modelo_360` VALUES ('376', '6', null, '6_kia-sportage-gt-line-fusion-white_0050-min.png', '1');
INSERT INTO `modelo_360` VALUES ('377', '6', null, '6_kia-sportage-gt-line-fusion-white_0051-min.png', '1');
INSERT INTO `modelo_360` VALUES ('378', '6', null, '6_kia-sportage-gt-line-fusion-white_0052-min.png', '1');
INSERT INTO `modelo_360` VALUES ('379', '6', null, '6_kia-sportage-gt-line-fusion-white_0053-min.png', '1');
INSERT INTO `modelo_360` VALUES ('380', '6', null, '6_kia-sportage-gt-line-fusion-white_0054-min.png', '1');
INSERT INTO `modelo_360` VALUES ('381', '6', null, '6_kia-sportage-gt-line-fusion-white_0055-min.png', '1');
INSERT INTO `modelo_360` VALUES ('382', '6', null, '6_kia-sportage-gt-line-fusion-white_0056-min.png', '1');
INSERT INTO `modelo_360` VALUES ('383', '6', null, '6_kia-sportage-gt-line-fusion-white_0057-min.png', '1');
INSERT INTO `modelo_360` VALUES ('384', '6', null, '6_kia-sportage-gt-line-fusion-white_0058-min.png', '1');
INSERT INTO `modelo_360` VALUES ('385', '6', null, '6_kia-sportage-gt-line-fusion-white_0059-min.png', '1');
INSERT INTO `modelo_360` VALUES ('386', '6', null, '6_kia-sportage-gt-line-fusion-white_0060-min.png', '1');
INSERT INTO `modelo_360` VALUES ('387', '6', null, '6_kia-sportage-gt-line-fusion-white_0061-min.png', '1');
INSERT INTO `modelo_360` VALUES ('388', '6', null, '6_kia-sportage-gt-line-fusion-white_0062-min.png', '1');
INSERT INTO `modelo_360` VALUES ('389', '6', null, '6_kia-sportage-gt-line-fusion-white_0063-min.png', '1');
INSERT INTO `modelo_360` VALUES ('390', '6', null, '6_kia-sportage-gt-line-fusion-white_0064-min.png', '1');
INSERT INTO `modelo_360` VALUES ('391', '6', null, '6_kia-sportage-gt-line-fusion-white_0065-min.png', '1');
INSERT INTO `modelo_360` VALUES ('392', '6', null, '6_kia-sportage-gt-line-fusion-white_0066-min.png', '1');
INSERT INTO `modelo_360` VALUES ('393', '6', null, '6_kia-sportage-gt-line-fusion-white_0067-min.png', '1');
INSERT INTO `modelo_360` VALUES ('394', '6', null, '6_kia-sportage-gt-line-fusion-white_0068-min.png', '1');
INSERT INTO `modelo_360` VALUES ('395', '6', null, '6_kia-sportage-gt-line-fusion-white_0069-min.png', '1');
INSERT INTO `modelo_360` VALUES ('396', '6', null, '6_kia-sportage-gt-line-fusion-white_0070-min.png', '1');
INSERT INTO `modelo_360` VALUES ('397', '6', null, '6_kia-sportage-gt-line-fusion-white_0071-min.png', '1');
INSERT INTO `modelo_360` VALUES ('398', '7', null, '7_grand_carnival_0000.jpg', '1');
INSERT INTO `modelo_360` VALUES ('399', '7', null, '7_grand_carnival_0001.jpg', '1');
INSERT INTO `modelo_360` VALUES ('400', '7', null, '7_grand_carnival_0002.jpg', '1');
INSERT INTO `modelo_360` VALUES ('401', '7', null, '7_grand_carnival_0003.jpg', '1');
INSERT INTO `modelo_360` VALUES ('402', '7', null, '7_grand_carnival_0004.jpg', '1');
INSERT INTO `modelo_360` VALUES ('403', '7', null, '7_grand_carnival_0005.jpg', '1');
INSERT INTO `modelo_360` VALUES ('404', '7', null, '7_grand_carnival_0006.jpg', '1');
INSERT INTO `modelo_360` VALUES ('405', '7', null, '7_grand_carnival_0007.jpg', '1');
INSERT INTO `modelo_360` VALUES ('406', '7', null, '7_grand_carnival_0008.jpg', '1');
INSERT INTO `modelo_360` VALUES ('407', '7', null, '7_grand_carnival_0009.jpg', '1');
INSERT INTO `modelo_360` VALUES ('408', '7', null, '7_grand_carnival_0010.jpg', '1');
INSERT INTO `modelo_360` VALUES ('409', '7', null, '7_grand_carnival_0011.jpg', '1');
INSERT INTO `modelo_360` VALUES ('410', '7', null, '7_grand_carnival_0012.jpg', '1');
INSERT INTO `modelo_360` VALUES ('411', '7', null, '7_grand_carnival_0013.jpg', '1');
INSERT INTO `modelo_360` VALUES ('412', '7', null, '7_grand_carnival_0014.jpg', '1');
INSERT INTO `modelo_360` VALUES ('413', '7', null, '7_grand_carnival_0015.jpg', '1');
INSERT INTO `modelo_360` VALUES ('414', '7', null, '7_grand_carnival_0016.jpg', '1');
INSERT INTO `modelo_360` VALUES ('415', '7', null, '7_grand_carnival_0017.jpg', '1');
INSERT INTO `modelo_360` VALUES ('416', '7', null, '7_grand_carnival_0018.jpg', '1');
INSERT INTO `modelo_360` VALUES ('417', '7', null, '7_grand_carnival_0019.jpg', '1');
INSERT INTO `modelo_360` VALUES ('418', '7', null, '7_grand_carnival_0020.jpg', '1');
INSERT INTO `modelo_360` VALUES ('419', '7', null, '7_grand_carnival_0021.jpg', '1');
INSERT INTO `modelo_360` VALUES ('420', '7', null, '7_grand_carnival_0022.jpg', '1');
INSERT INTO `modelo_360` VALUES ('421', '7', null, '7_grand_carnival_0023.jpg', '1');
INSERT INTO `modelo_360` VALUES ('422', '7', null, '7_grand_carnival_0024.jpg', '1');
INSERT INTO `modelo_360` VALUES ('423', '7', null, '7_grand_carnival_0025.jpg', '1');
INSERT INTO `modelo_360` VALUES ('424', '7', null, '7_grand_carnival_0026.jpg', '1');
INSERT INTO `modelo_360` VALUES ('425', '7', null, '7_grand_carnival_0027.jpg', '1');
INSERT INTO `modelo_360` VALUES ('426', '7', null, '7_grand_carnival_0028.jpg', '1');
INSERT INTO `modelo_360` VALUES ('427', '7', null, '7_grand_carnival_0029.jpg', '1');
INSERT INTO `modelo_360` VALUES ('428', '7', null, '7_grand_carnival_0030.jpg', '1');
INSERT INTO `modelo_360` VALUES ('429', '7', null, '7_grand_carnival_0031.jpg', '1');
INSERT INTO `modelo_360` VALUES ('430', '7', null, '7_grand_carnival_0032.jpg', '1');
INSERT INTO `modelo_360` VALUES ('431', '7', null, '7_grand_carnival_0033.jpg', '1');
INSERT INTO `modelo_360` VALUES ('432', '7', null, '7_grand_carnival_0034.jpg', '1');
INSERT INTO `modelo_360` VALUES ('433', '7', null, '7_grand_carnival_0035.jpg', '1');
INSERT INTO `modelo_360` VALUES ('434', '7', null, '7_grand_carnival_0036.jpg', '1');
INSERT INTO `modelo_360` VALUES ('435', '7', null, '7_grand_carnival_0037.jpg', '1');
INSERT INTO `modelo_360` VALUES ('436', '7', null, '7_grand_carnival_0038.jpg', '1');
INSERT INTO `modelo_360` VALUES ('437', '7', null, '7_grand_carnival_0039.jpg', '1');
INSERT INTO `modelo_360` VALUES ('438', '7', null, '7_grand_carnival_0040.jpg', '1');
INSERT INTO `modelo_360` VALUES ('439', '7', null, '7_grand_carnival_0041.jpg', '1');
INSERT INTO `modelo_360` VALUES ('440', '7', null, '7_grand_carnival_0042.jpg', '1');
INSERT INTO `modelo_360` VALUES ('441', '7', null, '7_grand_carnival_0043.jpg', '1');
INSERT INTO `modelo_360` VALUES ('442', '7', null, '7_grand_carnival_0044.jpg', '1');
INSERT INTO `modelo_360` VALUES ('443', '7', null, '7_grand_carnival_0045.jpg', '1');
INSERT INTO `modelo_360` VALUES ('444', '7', null, '7_grand_carnival_0046.jpg', '1');
INSERT INTO `modelo_360` VALUES ('445', '7', null, '7_grand_carnival_0047.jpg', '1');
INSERT INTO `modelo_360` VALUES ('446', '7', null, '7_grand_carnival_0048.jpg', '1');
INSERT INTO `modelo_360` VALUES ('447', '7', null, '7_grand_carnival_0049.jpg', '1');
INSERT INTO `modelo_360` VALUES ('448', '7', null, '7_grand_carnival_0050.jpg', '1');
INSERT INTO `modelo_360` VALUES ('449', '7', null, '7_grand_carnival_0051.jpg', '1');
INSERT INTO `modelo_360` VALUES ('450', '7', null, '7_grand_carnival_0052.jpg', '1');
INSERT INTO `modelo_360` VALUES ('451', '7', null, '7_grand_carnival_0053.jpg', '1');
INSERT INTO `modelo_360` VALUES ('452', '7', null, '7_grand_carnival_0054.jpg', '1');
INSERT INTO `modelo_360` VALUES ('453', '7', null, '7_grand_carnival_0055.jpg', '1');
INSERT INTO `modelo_360` VALUES ('454', '7', null, '7_grand_carnival_0056.jpg', '1');
INSERT INTO `modelo_360` VALUES ('455', '7', null, '7_grand_carnival_0057.jpg', '1');
INSERT INTO `modelo_360` VALUES ('456', '7', null, '7_grand_carnival_0058.jpg', '1');
INSERT INTO `modelo_360` VALUES ('457', '7', null, '7_grand_carnival_0059.jpg', '1');
INSERT INTO `modelo_360` VALUES ('458', '7', null, '7_grand_carnival_0060.jpg', '1');
INSERT INTO `modelo_360` VALUES ('459', '7', null, '7_grand_carnival_0061.jpg', '1');
INSERT INTO `modelo_360` VALUES ('460', '7', null, '7_grand_carnival_0062.jpg', '1');
INSERT INTO `modelo_360` VALUES ('461', '7', null, '7_grand_carnival_0063.jpg', '1');
INSERT INTO `modelo_360` VALUES ('462', '7', null, '7_grand_carnival_0064.jpg', '1');
INSERT INTO `modelo_360` VALUES ('463', '7', null, '7_grand_carnival_0065.jpg', '1');
INSERT INTO `modelo_360` VALUES ('464', '7', null, '7_grand_carnival_0066.jpg', '1');
INSERT INTO `modelo_360` VALUES ('465', '7', null, '7_grand_carnival_0067.jpg', '1');
INSERT INTO `modelo_360` VALUES ('466', '7', null, '7_grand_carnival_0068.jpg', '1');
INSERT INTO `modelo_360` VALUES ('467', '7', null, '7_grand_carnival_0069.jpg', '1');
INSERT INTO `modelo_360` VALUES ('468', '7', null, '7_grand_carnival_0070.jpg', '1');
INSERT INTO `modelo_360` VALUES ('469', '7', null, '7_grand_carnival_0071.jpg', '1');

-- ----------------------------
-- Table structure for modelo_color
-- ----------------------------
DROP TABLE IF EXISTS `modelo_color`;
CREATE TABLE `modelo_color` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `id_color` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_color
-- ----------------------------
INSERT INTO `modelo_color` VALUES ('1', '1', '1');
INSERT INTO `modelo_color` VALUES ('2', '2', '1');

-- ----------------------------
-- Table structure for modelo_desempeno
-- ----------------------------
DROP TABLE IF EXISTS `modelo_desempeno`;
CREATE TABLE `modelo_desempeno` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` text,
  `img_w` varchar(80) DEFAULT NULL,
  `img_t` varchar(80) DEFAULT NULL,
  `img_m` varchar(80) DEFAULT NULL,
  `portada` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_id_modelo_desempeno` (`id_modelo`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_desempeno
-- ----------------------------
INSERT INTO `modelo_desempeno` VALUES ('1', '1', 'Diseñado para ti y el medioambiente', null, '1_kia-cerato-forte-yd-performance-01-w.jpg', '1_kia-cerato-forte-yd-performance-01-t.jpg', '1_kia-cerato-forte-yd-performance-01-m.jpg', '1', '1');
INSERT INTO `modelo_desempeno` VALUES ('2', '1', 'Transmisión DCT de 7 velocidades (transmisión de doble embrague)', 'DCT no solo es capaz de manejar grandes salidas de par y cambios rápidos de marchas, sino que también ofrece una conducción extremadamente eficiente en el consumo de combustible.', '1_kia-pop-cerato-forte-yd-performance-01-w.jpg', '1_kia-pop-cerato-forte-yd-performance-01-t.jpg', '1_kia-pop-cerato-forte-yd-performance-01-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('3', '1', 'Paletas de cambio', 'Las paletas de cambio deportivas en la columna de dirección le permiten cambiar de marcha con los dedos sin tener que quitar las manos del volante.', '1_kia-pop-cerato-forte-yd-performance-02-w.jpg', '1_kia-pop-cerato-forte-yd-performance-02-t.jpg', '1_kia-pop-cerato-forte-yd-performance-02-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('4', '1', 'Control de crucero automático', 'Con la presión de un interruptor convenientemente ubicado en el volante, el control de crucero automático le permite mantener una velocidad constante para una economía de combustible mejorada.', '1_kia-pop-cerato-forte-yd-performance-03-w.jpg', '1_kia-pop-cerato-forte-yd-performance-03-t.jpg', '1_kia-pop-cerato-forte-yd-performance-03-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('5', '1', 'Transmisión automática de 6 velocidades', 'Equipada con una perilla TGS tipo bota para un aspecto refinado y deportivo, la transmisión automática de 6 velocidades garantiza cambios de marcha sedosos y precisos.', '1_kia-pop-cerato-forte-yd-performance-04-w.jpg', '1_kia-pop-cerato-forte-yd-performance-04-t.jpg', '1_kia-pop-cerato-forte-yd-performance-04-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('6', '2', 'Motor', 'Equipados con motor de inyección multipunto (MPI) de 1.4 litros, con su reconocida eficiencia, economía y durabilidad.', '2_Allnew_rio_sedan_performance_01_w.jpg', '2_Allnew_rio_sedan_performance_01_t.jpg', '2_Allnew_rio_sedan_performance_01_m.jpg', '1', '1');
INSERT INTO `modelo_desempeno` VALUES ('7', '2', 'Transmisión mecánica de 6 velocidades', 'Toma el control del camino y lleva al límite tu All New Rio', '2_img_performance_detail2.jpg', '2_img_performance_detail2.jpg', '2_img_performance_detail2.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('8', '2', 'Transmisión automática de 6 velocidades', 'Olvídate de los cambios manuales y disfruta de cada segundo manejando.', '2_img_performance_detail1.jpg', '2_img_performance_detail1.jpg', '2_img_performance_detail1.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('9', '3', 'El poder de seguir adelante', 'El nuevo Kia Rio combina la eficiencia de ahorro de combustible con una reserva constante de energía. Su manejo alrededor de la ciudad es suave y ágil, y cuando la velocidad es necesaria, le encantará el rendimiento que ofrece.	', '3_kia-rio-sc-performancekv-w.jpg', '3_kia-rio-sc-performancekv-w.jpg', '3_kia-rio-sc-performancekv-w.jpg', '1', '1');
INSERT INTO `modelo_desempeno` VALUES ('13', '3', 'Transmisión automática de 6 velocidades', 'Transmisión automática de 6 velocidades. Transfiere con ligero esfuerzo del motor a las ruedas.', '2_img_performance_detail1.jpg', '2_img_performance_detail1.jpg', '2_img_performance_detail1.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('14', '3', 'Transmisión mecánica de 6 velocidades', 'Eficiente transmisión manual de 6 velocidades que ofrece cambios rápidos y suaves.', '2_img_performance_detail2.jpg', '2_img_performance_detail2.jpg', '2_img_performance_detail2.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('15', '4', 'Motor', '1.000 cc.<br>\r\nDOHC 12 válvulas<br>\r\ninyección multipunto', '4_kia-picanto-performance-01-2-w.jpg', '4_kia-picanto-performance-01-2-t.jpg', '4_kia-picanto-performance-01-2-m.jpg', '1', '1');
INSERT INTO `modelo_desempeno` VALUES ('16', '4', 'Transmision Automática', 'Transmisión automática para los que buscan la comodidad y practicidad por sobre todo.', '4_kia-performance-detail1_960-w.jpg', '4_kia-performance-detail1_960-t.jpg', '4_kia-performance-detail1_960-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('17', '4', 'Transmision Manual', 'Tanto la transmisión manual de 5 velocidades como la transmisión automática de 4 velocidades ofrecen cambios de marcha suaves y a su vez silenciosos.', '4_picanto-2017-showroom-features-performance-thumbnail-02-w.jpg', '4_picanto-2017-showroom-features-performance-thumbnail-02-t.jpg', '4_picanto-2017-showroom-features-performance-thumbnail-02-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('18', '5', 'Diseñado para acelerar tus sentidos', 'El totalmente nuevo Soul tiene disposicion un motor eficiente en conjunto con avanzada transmision de 6V. Sea cual sea la combinación que elija, agregará emoción a su viaje.', '5_kia-soul-performance-01-w.jpg', '5_kia-soul-performance-01-t.jpg', '5_kia-soul-performance-01-m.jpg', '1', '1');
INSERT INTO `modelo_desempeno` VALUES ('19', '5', 'Motor 1.6L, 16 Válvulas MLA', 'Cilindraje:1.600 cc Potencia max: 120 HP @6.300 RPM, Torque maximo: 15.5 kg-m@4850 RPM', '5_kia-soul-performance-03-w.jpg', '5_kia-soul-performance-03-t.jpg', '5_kia-soul-performance-03-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('20', '5', 'Transmisión mecánica de 6 velocidades', 'Una nueva experiencia. Estrenando mejoras considerables en el funcionamiento de la transmisión mecánica y mayor eficiencia en el consumo de combustible, esta novedosa transmisión de 6 velocidades te entregará una experiencia de conducción más deportiva y emocionante.', '5_kia-soul-performance-05-w.jpg', '5_kia-soul-performance-05-t.jpg', '5_kia-soul-performance-05-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('21', '5', 'Transmisión automática secuencial de 6 velocidades', 'Porque la comodidad es una prioridad en el Soul, esta transmisión automática, compacta y mucho más ligera ofrece suavidad para facilitar su manipulación y la conducción en general.', '5_kia-soul-performance-07-w.jpg', '5_kia-soul-performance-07-t.jpg', '5_kia-soul-performance-07-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('22', '6', 'Tecnología de vanguardia para máxima estabilidad de conducción', 'No hay nada como la sensación de la tecnología AWD de Kia cuando el nuevo Sportage toma todas las curvas en el camino. Girar nunca ha sido más divertido.', '6_kia-sportage-performance-01-w.jpg', '6_kia-sportage-performance-01-t.jpg', '6_kia-sportage-performance-01-m.jpg', '1', '1');
INSERT INTO `modelo_desempeno` VALUES ('23', '6', 'Transmisión automática', 'Esta unidad de seis velocidades cuenta con bloqueo de cambio automático para evitar cualquier aceleración no deseada.', '6_kia-sportage-performance-02-w.jpg', '6_kia-sportage-performance-02-t.jpg', '6_kia-sportage-performance-02-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('24', '6', 'Transmisión manual', 'La sexta marcha le permite navegar con comodidad y máxima eficiencia de combustible.', '6_kia-sportage-performance-03-w.jpg', '6_kia-sportage-performance-03-t.jpg', '6_kia-sportage-performance-03-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('25', '6', 'Mejoras aerodinámicas', 'El inteligente adorno lateral del alerón posterior minimiza el coeficiente de resistencia para mejora la resistencia del combustible mientras una cortina de aire de la rueda mejorará el flujo de viento alrededor de las ruedas frontales ofreciendo una experiencia al conducir más cómoda.', '6_kia-sportage-performance-07-w.jpg', '6_kia-sportage-performance-07-t.jpg', '6_kia-sportage-performance-07-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('26', '6', 'Suspensión', 'El diseño y la geometría de la nueva y mejorada suspensión del Sportage da un manejo aún más estable a altas velocidades para su seguridad y comodidad de conducción.', '6_kia-sportage-performance-05-w.jpg', '6_kia-sportage-performance-05-t.jpg', '6_kia-sportage-performance-05-m.jpg', '0', '1');

-- ----------------------------
-- Table structure for modelo_destacado
-- ----------------------------
DROP TABLE IF EXISTS `modelo_destacado`;
CREATE TABLE `modelo_destacado` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` text,
  `img_w` varchar(80) DEFAULT NULL,
  `img_t` varchar(80) DEFAULT NULL,
  `img_m` varchar(80) DEFAULT NULL,
  `portada` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_destacado
-- ----------------------------
INSERT INTO `modelo_destacado` VALUES ('1', '1', 'Detección de punto ciego', 'Usando radares que monitorean tus puntos ciegos, un ícono parpadea en el espejo retrovisor lateral para advertirte de la cercanía de autos que normalmente no verías.', '1_kia-cerato-forte-yd-highlights-01-w.jpg', '1_kia-cerato-forte-yd-highlights-01-t.jpg', '1_kia-cerato-forte-yd-highlights-01-m.jpg', '1', '1');
INSERT INTO `modelo_destacado` VALUES ('2', '1', 'Sistema de asistencia de aparcamiento delantero y trasero', 'Activado por un interruptor en la consola del piso, el sistema de asistencia de estacionamiento delantero y trasero muestra la distancia entre el automóvil y cualquier obstrucción por medio de un gráfico en el grupo de supervisión.', '1_kia-pop-cerato-forte-yd-highlights-01-w.jpg', '1_kia-pop-cerato-forte-yd-highlights-01-t.jpg', '1_kia-pop-cerato-forte-yd-highlights-01-m.jpg', '0', '1');
INSERT INTO `modelo_destacado` VALUES ('3', '1', 'Sistema de 6 airbags', 'El nuevo sistema de bolsas de aire de Cerato comprende bolsas de aire para el conductor y el asiento delantero, bolsas de aire laterales delanteras, además de bolsas de aire de cortina que recorren todo el interior a cada lado.', '1_kia-pop-cerato-forte-yd-highlights-02-w.jpg', '1_kia-pop-cerato-forte-yd-highlights-02-t.jpg', '1_kia-pop-cerato-forte-yd-highlights-02-m.jpg', '0', '1');
INSERT INTO `modelo_destacado` VALUES ('4', '1', 'Sistema de baulera inteligente', 'Ya no es necesario hacer malabares con sus comestibles, equipaje y paraguas. Configure la tapa del maletero para que se abra automáticamente cuando la llave inteligente esté en el área de detección durante al menos tres segundos.', '1_kia-pop-cerato-forte-yd-highlights-03-w.jpg', '1_kia-pop-cerato-forte-yd-highlights-03-t.jpg', '1_kia-pop-cerato-forte-yd-highlights-03-m.jpg', '0', '1');
INSERT INTO `modelo_destacado` VALUES ('5', '3', 'Todo el espacio necesario para vivir sus sueños', 'Ya sea para un día en la ciudad o el viaje de la vida, el nuevo Kia Rio hace que la buena vida sea más fácil de alcanzar. Familiarizate con sus metodos inteligentes de almacenar cargas y poner a la gente comoda.', '3_kia-rio-5-door-highlights-01-w.jpg', '3_kia-rio-5-door-highlights-01-t.jpg', '3_kia-rio-5-door-highlights-01-m.jpg', '1', '1');
INSERT INTO `modelo_destacado` VALUES ('6', '3', 'Red de equipaje', 'Una red elástica mantiene el equipaje de moverse en el espacio de carga.', '3_kia-rio-5-door-highlights-02-w.jpg', '3_kia-rio-5-door-highlights-02-t.jpg', '3_kia-rio-5-door-highlights-02-m.jpg', '0', '1');
INSERT INTO `modelo_destacado` VALUES ('7', '3', 'Estante de cubierta', 'Con un estante trasero que mantiene la carga y el equipaje fuera de la vista. Se levanta al momento de abrir el maletero.', '3_kia-rio-5-door-highlights-03-w.jpg', '3_kia-rio-5-door-highlights-03-t.jpg', '3_kia-rio-5-door-highlights-03-m.jpg', '0', '1');
INSERT INTO `modelo_destacado` VALUES ('8', '3', 'Sistema de auto desempañador', 'El desempañador automático detecta la niebla en el parabrisa y automáticamente despliega los ventiladores para limpiar el vidrio.', '3_kia-rio-5-door-highlights-04-w.jpg', '3_kia-rio-5-door-highlights-04-t.jpg', '3_kia-rio-5-door-highlights-04-m.jpg', '0', '1');

-- ----------------------------
-- Table structure for modelo_dimension
-- ----------------------------
DROP TABLE IF EXISTS `modelo_dimension`;
CREATE TABLE `modelo_dimension` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `largo` decimal(20,3) DEFAULT NULL,
  `ancho` decimal(20,3) DEFAULT NULL,
  `altura` decimal(20,3) DEFAULT NULL,
  `distancia_ejes` decimal(20,3) DEFAULT NULL,
  `img_all` varchar(120) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_dimension
-- ----------------------------
INSERT INTO `modelo_dimension` VALUES ('1', '1', '4.560', '1.780', '1.460', null, '1_kia-cerato-forte-yd-dimensions-all-view.png', '1');
INSERT INTO `modelo_dimension` VALUES ('2', '2', '4.385', '1.725', '1.475', '2.580', '2_Allnew_rio_sedan_dimension_04_w.png', '1');
INSERT INTO `modelo_dimension` VALUES ('3', '3', '4.065', '1.725', '1.460', '2.580', '3_kia-rio-sc-dimensions-all-view.png', '1');
INSERT INTO `modelo_dimension` VALUES ('4', '4', '3.595', '1.595', '1.480', '2.385', '4_picanto-ta-pe-dimensions-all-view.png', '1');
INSERT INTO `modelo_dimension` VALUES ('5', '5', '4.140', '1.800', '1.619', '2.570', '5_kia-soul-dimensions-all-view.png', '1');
INSERT INTO `modelo_dimension` VALUES ('6', '6', '4.480', '1.855', '1.655', '2.670', '6_new-sportage-r-showroom-specification-dimensions-all-view.png', '1');
INSERT INTO `modelo_dimension` VALUES ('7', '7', '5.115', '1.985', '1.755', '3.060', '7-grand-carnival-dimensions-allview.png', '1');

-- ----------------------------
-- Table structure for modelo_dimension_img
-- ----------------------------
DROP TABLE IF EXISTS `modelo_dimension_img`;
CREATE TABLE `modelo_dimension_img` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `tipo` enum('FRENTE','LATERAL','ATRAS') DEFAULT NULL,
  `img_w` varchar(120) DEFAULT NULL,
  `img_t` varchar(120) DEFAULT NULL,
  `img_m` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_dimension_img
-- ----------------------------
INSERT INTO `modelo_dimension_img` VALUES ('1', '1', 'FRENTE', '1_kia-cerato-forte-yd-dimensions-slide-list-01-w.png', '1_kia-cerato-forte-yd-dimensions-slide-list-01-t.png', '1_kia-cerato-forte-yd-dimensions-slide-list-01-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('2', '1', 'ATRAS', '1_kia-cerato-forte-yd-dimensions-slide-list-02-w.png', '1_kia-cerato-forte-yd-dimensions-slide-list-02-t.png', '1_kia-cerato-forte-yd-dimensions-slide-list-02-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('3', '1', 'LATERAL', '1_kia-cerato-forte-yd-dimensions-slide-list-03-w.png', '1_kia-cerato-forte-yd-dimensions-slide-list-03-t.png', '1_kia-cerato-forte-yd-dimensions-slide-list-03-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('4', '2', 'FRENTE', '2_Allnew_rio_sedan_dimension_01_w.png', '2_Allnew_rio_sedan_dimension_01_t.png', '2_Allnew_rio_sedan_dimension_01_m.png');
INSERT INTO `modelo_dimension_img` VALUES ('5', '2', 'ATRAS', '2_Allnew_rio_sedan_dimension_02_w.png', '2_Allnew_rio_sedan_dimension_02_t.png', '2_Allnew_rio_sedan_dimension_02_m.png');
INSERT INTO `modelo_dimension_img` VALUES ('6', '2', 'LATERAL', '2_Allnew_rio_sedan_dimension_03_w.png', '2_Allnew_rio_sedan_dimension_03_t.png', '2_Allnew_rio_sedan_dimension_03_m.png');
INSERT INTO `modelo_dimension_img` VALUES ('7', '3', 'FRENTE', '3_kia-rio-sc-dimensions-slide-list-01_w.png', '3_kia-rio-sc-dimensions-slide-list-01_t.png', '3_kia-rio-sc-dimensions-slide-list-01_m.png');
INSERT INTO `modelo_dimension_img` VALUES ('8', '3', 'ATRAS', '3_kia-rio-sc-dimensions-slide-list-02_w.png', '3_kia-rio-sc-dimensions-slide-list-02_t.png', '3_kia-rio-sc-dimensions-slide-list-02_m.png');
INSERT INTO `modelo_dimension_img` VALUES ('9', '3', 'LATERAL', '3_kia-rio-sc-dimensions-slide-list-03_w.png', '3_kia-rio-sc-dimensions-slide-list-03_t.png', '3_kia-rio-sc-dimensions-slide-list-03_m.png');
INSERT INTO `modelo_dimension_img` VALUES ('10', '4', 'FRENTE', '4_picanto-ta-pe-dimensions-slide-list-01-w.png', '4_picanto-ta-pe-dimensions-slide-list-01-t.png', '4_picanto-ta-pe-dimensions-slide-list-01-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('11', '4', 'ATRAS', '4_picanto-ta-pe-dimensions-slide-list-02-w.png', '4_picanto-ta-pe-dimensions-slide-list-02-t.png', '4_picanto-ta-pe-dimensions-slide-list-02-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('12', '4', 'LATERAL', '4_picanto-ta-pe-dimensions-slide-list-03-w.png', '4_picanto-ta-pe-dimensions-slide-list-03-t.png', '4_picanto-ta-pe-dimensions-slide-list-03-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('13', '5', 'FRENTE', '5_showroom-soul-dimensions-slide-list-01-w.png', '5_showroom-soul-dimensions-slide-list-01-t.png', '5_showroom-soul-dimensions-slide-list-01-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('14', '5', 'ATRAS', '5_showroom-soul-dimensions-slide-list-02-w.png', '5_showroom-soul-dimensions-slide-list-02-t.png', '5_showroom-soul-dimensions-slide-list-02-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('15', '5', 'LATERAL', '5_showroom-soul-dimensions-slide-list-03-w.png', '5_showroom-soul-dimensions-slide-list-03-t.png', '5_showroom-soul-dimensions-slide-list-03-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('16', '6', 'FRENTE', '6_new-sportage-r-showroom-specification-dimensions-list-01-w.png', '6_new-sportage-r-showroom-specification-dimensions-list-01-t.png', '6_new-sportage-r-showroom-specification-dimensions-list-01-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('17', '6', 'ATRAS', '6_new-sportage-r-showroom-specification-dimensions-list-02-w.png', '6_new-sportage-r-showroom-specification-dimensions-list-02-t.png', '6_new-sportage-r-showroom-specification-dimensions-list-02-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('18', '6', 'LATERAL', '6_new-sportage-r-showroom-specification-dimensions-list-03-w.png', '6_new-sportage-r-showroom-specification-dimensions-list-03-t.png', '6_new-sportage-r-showroom-specification-dimensions-list-03-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('19', '7', 'FRENTE', '7-grand-carnival-dimensions-slide-list-01-w.png', '7-grand-carnival-dimensions-slide-list-01-t.png', '7-grand-carnival-dimensions-slide-list-01-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('20', '7', 'ATRAS', '7-grand-carnival-dimensions-slide-list-02-w.png', '7-grand-carnival-dimensions-slide-list-02-t.png', '7-grand-carnival-dimensions-slide-list-02-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('21', '7', 'LATERAL', '7-grand-carnival-dimensions-slide-list-03-w.png', '7-grand-carnival-dimensions-slide-list-03-t.png', '7-grand-carnival-dimensions-slide-list-03-m.png');

-- ----------------------------
-- Table structure for modelo_especificacion
-- ----------------------------
DROP TABLE IF EXISTS `modelo_especificacion`;
CREATE TABLE `modelo_especificacion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `img` varchar(60) DEFAULT NULL,
  `descripcion` text,
  `estado` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_especificacion
-- ----------------------------

-- ----------------------------
-- Table structure for modelo_estilo
-- ----------------------------
DROP TABLE IF EXISTS `modelo_estilo`;
CREATE TABLE `modelo_estilo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `id_estilo` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_estilo
-- ----------------------------

-- ----------------------------
-- Table structure for modelo_general
-- ----------------------------
DROP TABLE IF EXISTS `modelo_general`;
CREATE TABLE `modelo_general` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `img_w` varchar(120) DEFAULT NULL,
  `img_t` varchar(120) DEFAULT NULL,
  `img_m` varchar(120) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `descripcion` text,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_general
-- ----------------------------
INSERT INTO `modelo_general` VALUES ('1', '1', '1_kia-cerato-forte-yd-overview-02-w.jpg', '1_kia-cerato-forte-yd-overview-02-t.jpg', '1_kia-cerato-forte-yd-overview-02-m.jpg', 'CERATO', 'Un regalo de verdadera innovación', '1');
INSERT INTO `modelo_general` VALUES ('2', '2', '2_general_rio_w.jpg', '2_general_rio_t.jpg', '2_general_rio_m.jpg', 'All New Rio Sedán', 'Totalmente Nuevo Kia Rio', '1');
INSERT INTO `modelo_general` VALUES ('3', '3', '3_rio_hatch_general_w.jpg', '3_rio_hatch_general_t.jpg', '3_rio_hatch_general_m.jpg', 'MÁS GRANDE, MÁS AUDAZ Y LISTO PARA LA AVENTURA', null, '1');
INSERT INTO `modelo_general` VALUES ('4', '4', '4_kia-picanto-overview-01-w.jpg', '4_kia-picanto-overview-01-t.jpg', '4_kia-picanto-overview-01-m.jpg', 'Todo en un Picanto', 'Conducir debería ser una extensión de ti mismo. Di hola al nuevo Picanto.', '1');
INSERT INTO `modelo_general` VALUES ('5', '5', '5_kia-new-cars-soul-hero-kv-w.jpg', '5_kia-new-cars-soul-hero-kv-t.jpg', '5_kia-new-cars-soul-hero-kv-m.jpg', 'Soul, más elegante que nunca', 'Presentamos un diseño innovador con un ADN urbano que lo ha transportado al futuro. El nuevo Kia Soul ha sido reforzado y refinado por dentro y por fuera con un estilo de SUV deportivo, una serie de tecnologías a la vanguardia y rendimiento mejorado para una mejor conducción.', '1');
INSERT INTO `modelo_general` VALUES ('6', '6', '6_kia-sportage-overview-01-w.jpg', '6_kia-sportage-overview-01-t.jpg', '6_kia-sportage-overview-01-m.jpg', 'Nacida en el mundo moderno', 'Atrevida, con diseño dinámico que cautiva por su aspecto sofisticado. La nueva Sportage te hará vivir tu vida al máximo.', '1');
INSERT INTO `modelo_general` VALUES ('7', '7', '7_by_grand_carnival_2017_features_overview_kv_1_w.jpg', '7_by_grand_carnival_2017_features_overview_kv_1_t.jpg', '7_by_grand_carnival_2017_features_overview_kv_1_m.jpg', 'Cambia las reglas y llega más lejos', 'El gran Carnival te lleva a un lugar donde el diseño superior y características verdaderamente inteligentes se combinan para entedender profundamente tus necesidades de conducción. Es un lugar donde el lujo va de la mano con la economía - un lugar donde lo excepcional cumple con lo cotidiano.', '1');

-- ----------------------------
-- Table structure for modelo_imagenes
-- ----------------------------
DROP TABLE IF EXISTS `modelo_imagenes`;
CREATE TABLE `modelo_imagenes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `tipo` enum('INT','EXT') DEFAULT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` text,
  `img_principal` varchar(120) DEFAULT NULL,
  `img_thumb` varchar(120) DEFAULT NULL,
  `img_w` varchar(120) DEFAULT NULL,
  `img_t` varchar(120) DEFAULT NULL,
  `img_m` varchar(120) DEFAULT NULL,
  `principal` int(1) DEFAULT '0',
  `galeria` int(1) DEFAULT '0',
  `caracteristica` int(1) DEFAULT '0',
  `caracteristica_pie` int(1) DEFAULT '0',
  `caracteristicain` int(1) DEFAULT '0',
  `caracteristicain_pie` int(1) DEFAULT '0',
  `orden` int(1) unsigned DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_id_modelo_imagenes` (`id_modelo`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=176 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_imagenes
-- ----------------------------
INSERT INTO `modelo_imagenes` VALUES ('1', '1', 'EXT', 'Agrega una dosis extraordinaria a tu vida', 'Tal vez nunca pensaste que la innovación, la excelencia técnica y el estilo excepcional se pudieran unir en un automóvil de pasajeros asequible. Pero finalmente lo hacen.\r\nDeja que el nuevo Cerato te lleve a lugares que solo has imaginado.', null, '1_ico_cerato_forte_yd_paging5_on.png', '1_kia-cerato-forte-yd-exterior-05-w.jpg', '1_kia-cerato-forte-yd-exterior-05-t.jpg', '1_kia-cerato-forte-yd-exterior-05-m.jpg', '0', '0', '1', '0', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('2', '1', 'EXT', 'Un atractivo estético que hace que el tiempo se detenga', 'Redefiniendo lo mejor en diseño de automóviles, el nuevo Cerato es audaz,\r\nlas proporciones parecidas a un coupé y las líneas y curvas llamativas exudan una rápida aceleración y una fluidez de movimiento sin esfuerzo.', null, '1_ico_cerato_forte_yd_paging6_on.png', '1_kia-cerato-forte-yd-exterior-06-w.jpg', '1_kia-cerato-forte-yd-exterior-06-t.jpg', '1_kia-cerato-forte-yd-exterior-06-m.jpg', '0', '0', '1', '0', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('3', '1', 'EXT', 'Una experiencia de conducción que despierta tus emociones.', '\r\n283/5000\r\nCombina un hermoso diseño exterior con excelente rendimiento y potencia, y la emoción de conducir realmente cobra vida.\r\nYa sea que navegue por curvas cerradas, acelere en las carreteras o frene en situaciones de parada repentina, el nuevo Cerato responde instintivamente a sus comandos.', null, '1_ico_cerato_forte_yd_paging7_on.png', '1_kia-cerato-forte-yd-exterior-07-w.jpg', '1_kia-cerato-forte-yd-exterior-07-t.jpg', '1_kia-cerato-forte-yd-exterior-07-m.jpg', '0', '0', '1', '0', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('4', '1', 'EXT', 'Lámparas LED combinadas traseras ', 'Las luces traseras combinadas LED no solo brindan una gran visibilidad para los conductores que se acercan por detrás, sino que también agregan un elemento de modernidad y estilo con su diseño multidimensional.', null, null, '1_kia-pop-cerato-forte-yd-exterior-01-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-01-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-01-m.jpg', '0', '0', '0', '1', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('5', '1', 'EXT', 'Faros antiniebla', '\r\n152/5000\r\nCon un diseño único de carcasa dividida que proporciona un efecto visual sorprendente, las luces antiniebla se colocan a baja altura en el paragolpes delantero para una mejor iluminación.', null, null, '1_kia-pop-cerato-forte-yd-exterior-02-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-02-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-02-m.jpg', '0', '0', '0', '1', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('6', '1', 'EXT', 'Faros HID', 'Al emitir un tono azul distintivo, los faros de proyección iluminan más la carretera con un rayo penetrante y preciso.', null, null, '1_kia-pop-cerato-forte-yd-exterior-03-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-03-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-03-m.jpg', '0', '0', '0', '1', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('7', '1', 'EXT', 'Sistema de iluminación de bienvenida inteligente', 'Una serie de luces exteriores se sincronizan con la tecla inteligente para iluminarlo y darle la bienvenida al automóvil.', null, null, '1_kia-pop-cerato-forte-yd-exterior-04-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-04-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-04-m.jpg', '0', '0', '0', '1', '0', '0', '4', '1');
INSERT INTO `modelo_imagenes` VALUES ('8', '1', 'INT', 'Entorno confortable 365 días al año', 'Un avanzado sistema de control del clima significa que usted y sus pasajeros pueden relajarse en cada viaje, durante todo el año. Un volante con calefacción y calentadores de asiento proporcionan una comodidad tranquilizadora en días fríos, mientras que el aire acondicionado automático y el asiento del conductor con ventilación de aire lo mantienen fresco cuando sube la temperatura. Un sistema automático de desempañado se activa por sí mismo cuando se detecta condensación en el cristal del parabrisas, y un ionizador de racimo garantiza que el aire que fluye al interior del automóvil esté limpio y libre de olores.', null, null, '1_kia-cerato-forte-yd-interior-01-w.jpg', '1_kia-cerato-forte-yd-interior-01-t.jpg', '1_kia-cerato-forte-yd-interior-01-m.jpg', '0', '0', '0', '0', '1', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('9', '1', 'INT', 'clúster de supervisión', 'La interfaz intuitiva del clúster de supervisión le permite acceder a una amplia gama de configuraciones de usuario.', null, null, '1_kia-pop-cerato-forte-yd-interior-01-w.jpg', '1_kia-pop-cerato-forte-yd-interior-01-t.jpg', '1_kia-pop-cerato-forte-yd-interior-01-m.jpg', '0', '0', '0', '0', '0', '1', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('10', '1', 'INT', 'Volante con calefacción', 'El volante térmico forrado en piel es práctico y cómodo en los fríos días de invierno.', null, null, '1_kia-pop-cerato-forte-yd-interior-02-w.jpg', '1_kia-pop-cerato-forte-yd-interior-02-t.jpg', '1_kia-pop-cerato-forte-yd-interior-02-m.jpg', '0', '0', '0', '0', '0', '1', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('11', '1', 'INT', 'Asiento delantero ventilado', 'El aire que sopla a través del cojín del asiento y la espalda le ahorra la incomodidad de calentarse y pegarse durante el verano.', null, null, '1_kia-pop-cerato-forte-yd-interior-03-w.jpg', '1_kia-pop-cerato-forte-yd-interior-03-t.jpg', '1_kia-pop-cerato-forte-yd-interior-03-m.jpg', '0', '0', '0', '0', '0', '1', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('12', '1', 'EXT', null, null, '1_kia-cerato-forte-yd-gallery-01.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('13', '1', 'INT', null, null, '1_kia-cerato-forte-yd-gallery-02.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('14', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-05.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-05-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-05-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('15', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-06.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-06-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-06-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('16', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-07.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-07-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-07-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('17', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-08.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-08-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-08-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-08-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('18', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-09.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-09-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-09-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-09-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('19', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-10.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-10-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-10-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-10-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('20', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-11.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-11-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-11-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-11-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('21', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-12.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-12-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-12-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-12-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('22', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-13.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-13-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-13-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-13-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('23', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-01.jpg', '1_kia-cerato-forte-yd-wide-b-interior-01-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-01-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('24', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-02.jpg', '1_kia-cerato-forte-yd-wide-b-interior-02-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-02-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('25', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-03.jpg', '1_kia-cerato-forte-yd-wide-b-interior-03-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-03-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('26', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-04.jpg', '1_kia-cerato-forte-yd-wide-b-interior-04-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-04-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('27', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-05.jpg', '1_kia-cerato-forte-yd-wide-b-interior-05-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-05-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('28', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-06.jpg', '1_kia-cerato-forte-yd-wide-b-interior-06-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-06-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('29', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-07.jpg', '1_kia-cerato-forte-yd-wide-b-interior-07-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-07-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('30', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-08.jpg', '1_kia-cerato-forte-yd-wide-b-interior-08-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-08-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-08-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('31', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-09.jpg', '1_kia-cerato-forte-yd-wide-b-interior-09-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-09-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-09-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('32', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-10.jpg', '1_kia-cerato-forte-yd-wide-b-interior-10-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-10-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-10-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('33', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-11.jpg', '1_kia-cerato-forte-yd-wide-b-interior-11-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-11-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-11-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('34', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-12.jpg', '1_kia-cerato-forte-yd-wide-b-interior-12-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-12-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-12-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('36', '2', 'EXT', 'Totalmente Renovado', 'All New Rio se renueva para ser uno de los vehículos más confortables y atractivos, equipado con la más reciente tecnología Kia.', null, '2_ico_rio_sc_4dr_paging1_on.png', '2_Allnew_rio_sedan_exterior_03_w.jpg', '2_Allnew_rio_sedan_exterior_03_t.jpg', '2_Allnew_rio_sedan_exterior_03_m.jpg', '0', '0', '1', '0', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('37', '2', 'EXT', 'Una personalidad única', 'All New Rio es el perfecto compañero para tus recorridos, con un espacio interior que te sorprenderá. Descúbrelo!', null, '2_ico_rio_sc_4dr_paging2_on.png', '2_Allnew_rio_sedan_exterior_04_w.jpg', '2_Allnew_rio_sedan_exterior_04_t.jpg', '2_Allnew_rio_sedan_exterior_04_m.jpg', '0', '0', '1', '0', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('38', '2', 'EXT', 'Espejos exteriores rebatibles eléctronicamente', 'Mira tu camino favorito con la mejor tecnología', null, null, '2_kia_rio_sedan_exterior_03_w.jpg', '2_kia_rio_sedan_exterior_03_t.jpg', '2_kia_rio_sedan_exterior_03_m.jpg', '0', '0', '0', '1', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('39', '2', 'EXT', 'Luces Delanteras de Tipo Proyector', 'Las luces delanteras de tipo proyector ofrecen una mejor iluminación, lo cual permite detectar obstáculos a tiempo durante su recorrido.', null, null, '2_kia_rio_sedan_exterior_01_w.jpg', '2_kia_rio_sedan_exterior_01_t.jpg', '2_kia_rio_sedan_exterior_01_m.jpg', '0', '0', '0', '1', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('40', '2', 'EXT', 'Parrilla del Radiador', 'Nuestra icónica parrilla del radiador ha sido completamente reestructurada. La mayor parte del flujo de aire es utilizado para el enfriamiento eficiente del motor.', null, null, '2_kia-rio-5-door-exterior-06-w.jpg', '2_kia-rio-5-door-exterior-06-t.jpg', '2_kia-rio-5-door-exterior-06-m.jpg', '0', '0', '0', '1', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('41', '2', 'INT', 'Controles ergonómicos para cualquier situación', 'La cabina da prioridad a la información y limita las distracciones visuales y manuales. El grupo presenta datos de conducción, mientras que una pantalla flotante central simplifica el acceso a una amplia gama de controles de entretenimiento y comodidad.', null, null, '2_kia_rio_sc_4dr_highlights_kv01_w.jpg', '2_kia_rio_sc_4dr_highlights_kv01_t.jpg', '2_kia_rio_sc_4dr_highlights_kv01_m.jpg', '0', '0', '0', '0', '1', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('42', '2', 'INT', 'Controles de audio en el volante', 'Ajuste las opciones de audio solo utilizando el\r\npulgar para una mayor seguridad de conducción.', null, null, '2_kia-rio-sc-interior-02-w.jpg', '2_kia-rio-sc-interior-02-t.jpg', '2_kia-rio-sc-interior-02-m.jpg', '0', '0', '0', '0', '0', '1', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('43', '2', 'INT', 'Aire Acondicionado Manual', null, null, null, '2_kia-rio-sc-interior-05-w.jpg', '2_kia-rio-sc-interior-05-t.jpg', '2_kia-rio-sc-interior-05-m.jpg', '0', '0', '0', '0', '0', '1', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('44', '2', 'INT', 'Entrada auxiliar de audio y usb', 'Tu música favorita siempre estará abordo de tu All New Rio', null, null, '2_kia-rio-sc-interior-04-w.jpg', '2_kia-rio-sc-interior-04-t.jpg', '2_kia-rio-sc-interior-04-m.jpg', '0', '0', '0', '0', '0', '1', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('45', '2', 'INT', 'Más espacio en cabina', 'Con un interior diseñado pensado en cada uno de tus acompañantes podrás hacer de cada viaje más cómodo y entretenido.', null, null, '2_kia-rio-sc-interior-08-w.jpg', '2_kia-rio-sc-interior-08-t.jpg', '2_kia-rio-sc-interior-08-m.jpg', '0', '0', '0', '0', '0', '1', '4', '1');
INSERT INTO `modelo_imagenes` VALUES ('46', '2', 'EXT', null, null, '2_kia_rio_sc_4dr_gallery_main_left.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('47', '2', 'INT', null, null, '2_kia-rio-sc-gallery-02.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('48', '2', 'EXT', null, null, null, '2_kia_rio_sc_4dr_gallery_exterior_thum_01.jpg', '2_kia_rio_sc_4dr_gallery_exterior_01_w.jpg', '2_kia_rio_sc_4dr_gallery_exterior_01_t.jpg', '2_kia_rio_sc_4dr_gallery_exterior_01_m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('49', '2', 'EXT', null, null, null, '2_kia_rio_sc_4dr_gallery_exterior_thum_02.jpg', '2_kia_rio_sc_4dr_gallery_exterior_02_w.jpg', '2_kia_rio_sc_4dr_gallery_exterior_02_t.jpg', '2_kia_rio_sc_4dr_gallery_exterior_02_m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('50', '2', 'EXT', null, null, null, '2_kia_rio_sc_4dr_gallery_exterior_thum_03.jpg', '2_kia_rio_sc_4dr_gallery_exterior_03_w.jpg', '2_kia_rio_sc_4dr_gallery_exterior_03_t.jpg', '2_kia_rio_sc_4dr_gallery_exterior_03_m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('51', '2', 'EXT', null, null, null, '2_kia_rio_sc_4dr_gallery_exterior_thum_04.jpg', '2_kia_rio_sc_4dr_gallery_exterior_04_w.jpg', '2_kia_rio_sc_4dr_gallery_exterior_04_t.jpg', '2_kia_rio_sc_4dr_gallery_exterior_04_m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('52', '2', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-01.jpg', '2_kia-rio-5-door-wide-b-interior-01-w.jpg', '2_kia-rio-5-door-wide-b-interior-01-t.jpg', '2_kia-rio-5-door-wide-b-interior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('53', '2', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-02.jpg', '2_kia-rio-5-door-wide-b-interior-02-w.jpg', '2_kia-rio-5-door-wide-b-interior-02-t.jpg', '2_kia-rio-5-door-wide-b-interior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('54', '2', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-03.jpg', '2_kia-rio-5-door-wide-b-interior-03-w.jpg', '2_kia-rio-5-door-wide-b-interior-03-t.jpg', '2_kia-rio-5-door-wide-b-interior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('55', '2', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-04.jpg', '2_kia-rio-5-door-wide-b-interior-04-w.jpg', '2_kia-rio-5-door-wide-b-interior-04-t.jpg', '2_kia-rio-5-door-wide-b-interior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('56', '2', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-05.jpg', '2_kia-rio-5-door-wide-b-interior-05-w.jpg', '2_kia-rio-5-door-wide-b-interior-05-t.jpg', '2_kia-rio-5-door-wide-b-interior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('57', '2', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-06.jpg', '2_kia-rio-5-door-wide-b-interior-06-w.jpg', '2_kia-rio-5-door-wide-b-interior-06-t.jpg', '2_kia-rio-5-door-wide-b-interior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('58', '2', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-07.jpg', '2_kia-rio-5-door-wide-b-interior-07-w.jpg', '2_kia-rio-5-door-wide-b-interior-07-t.jpg', '2_kia-rio-5-door-wide-b-interior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('59', '2', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-08.jpg', '2_kia-rio-5-door-wide-b-interior-08-w.jpg', '2_kia-rio-5-door-wide-b-interior-08-t.jpg', '2_kia-rio-5-door-wide-b-interior-08-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('60', '3', 'EXT', 'Diseño con espíritu dinámico y deportivo', 'El increíble y atractivo diseño del All New Rio te llevará a vivir al máximo cada momento de tu vida.', null, '3_ico_rio_hatch_exterior_01_on.png', '3_Allnew_rio_hatchback_exterior_02_w.jpg', '3_Allnew_rio_hatchback_exterior_02_t.jpg', '3_Allnew_rio_hatchback_exterior_02_m.jpg', '0', '0', '1', '0', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('61', '3', 'EXT', 'Un auto insuperable', 'El nuevo diseño exterior y la mejor tecnología en su interior se unen para crear All New Rio', null, '3_ico_rio_hatch_exterior_02_on.png', '3_Allnew_rio_hatchback_exterior_03_w.jpg', '3_Allnew_rio_hatchback_exterior_03_t.jpg', '3_Allnew_rio_hatchback_exterior_03_m.jpg', '0', '0', '1', '0', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('62', '3', 'EXT', 'Spoiler trasero', 'Un Spoiler trasero mejora el vótice de aire alrededor del pilar C, para mejorar la fuerza aerodinámica en las llantas traseras.', null, null, '3_kia-rio-5-door-exterior-08-w.jpg', '3_kia-rio-5-door-exterior-08-t.jpg', '3_kia-rio-5-door-exterior-08-m.jpg', '0', '0', '0', '1', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('63', '3', 'EXT', 'Espejos exteriores rebatibles eléctronicamente', 'Mira tu camino favorito con la mejor tecnología', null, null, '2_kia_rio_sedan_exterior_03_w.jpg', '2_kia_rio_sedan_exterior_03_t.jpg', '2_kia_rio_sedan_exterior_03_m.jpg', '0', '0', '0', '1', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('64', '3', 'EXT', 'Parrilla del Radiador', 'Nuestra icónica parrilla del radiador ha sido completamente reestructurada. La mayor parte del flujo de aire es utilizado para el enfriamiento eficiente del motor.', null, null, '2_kia-rio-5-door-exterior-06-w.jpg', '2_kia-rio-5-door-exterior-06-t.jpg', '2_kia-rio-5-door-exterior-06-m.jpg', '0', '0', '0', '1', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('65', '3', 'INT', 'Espacio interior rediseñado', 'Brinda una experiencia de conducción mucho más segura y confortable con un toque refinado y elegante que está presente en todos los materiales del vehículo.', null, null, '3_kia-rio-5-door-interior-01-w.jpg', '3_kia-rio-5-door-interior-01-t.jpg', '3_kia-rio-5-door-interior-01-m.jpg', '0', '0', '0', '0', '1', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('66', '3', 'INT', 'Asientos de segunda fila plegables', 'Los asientos traseros se pliegan completamente planos. Cuando sea necesario se pueden acomodar objetos largos o voluminosos en el espacio de atrás extendida.', null, null, '3_kia-rio-5-door-interior-10-w.jpg', '3_kia-rio-5-door-interior-10-t.jpg', '3_kia-rio-5-door-interior-10-m.jpg', '0', '0', '0', '0', '0', '1', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('67', '3', 'INT', 'Aire Acondicionado Manual', 'Sencillos botones que permiten ajustar la temperatura rápidamente con la mínima distracción.', null, null, '2_kia-rio-sc-interior-05-w.jpg', '2_kia-rio-sc-interior-05-t.jpg', '2_kia-rio-sc-interior-05-m.jpg', '0', '0', '0', '0', '0', '1', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('68', '3', 'INT', 'Controles de audio en el volante', 'Ajuste las opciones de audio solo utilizando el\r\npulgar para una mayor seguridad de conducción.', null, null, '2_kia-rio-sc-interior-02-w.jpg', '2_kia-rio-sc-interior-02-t.jpg', '2_kia-rio-sc-interior-02-m.jpg', '0', '0', '0', '0', '0', '1', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('69', '3', 'INT', 'Entrada auxiliar de audio y usb', 'Tu música favorita siempre estará abordo de tu All New Rio', null, null, '2_kia-rio-sc-interior-04-w.jpg', '2_kia-rio-sc-interior-04-t.jpg', '2_kia-rio-sc-interior-04-m.jpg', '0', '0', '0', '0', '0', '1', '4', '1');
INSERT INTO `modelo_imagenes` VALUES ('70', '3', 'EXT', null, null, '3_kia-rio-sc-gallery-01.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('71', '3', 'INT', null, null, '3_kia-rio-sc-gallery-02.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('72', '3', 'EXT', null, null, null, '3_kia-rio-5-door-wide-exterior-01.jpg', '3_kia-rio-5-door-wide-b-exterior-01-w.jpg', '3_kia-rio-5-door-wide-b-exterior-01-m.jpg', '3_kia-rio-5-door-wide-b-exterior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('73', '3', 'EXT', null, null, null, '3_kia-rio-5-door-wide-exterior-02.jpg', '3_kia-rio-5-door-wide-b-exterior-02-w.jpg', '3_kia-rio-5-door-wide-b-exterior-02-m.jpg', '3_kia-rio-5-door-wide-b-exterior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('74', '3', 'EXT', null, null, null, '3_kia-rio-5-door-wide-exterior-03.jpg', '3_kia-rio-5-door-wide-b-exterior-03-w.jpg', '3_kia-rio-5-door-wide-b-exterior-03-m.jpg', '3_kia-rio-5-door-wide-b-exterior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('75', '3', 'EXT', null, null, null, '3_kia-rio-5-door-wide-exterior-04.jpg', '3_kia-rio-5-door-wide-b-exterior-04-w.jpg', '3_kia-rio-5-door-wide-b-exterior-04-m.jpg', '3_kia-rio-5-door-wide-b-exterior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('76', '3', 'EXT', null, null, null, '3_kia-rio-5-door-wide-exterior-05.jpg', '3_kia-rio-5-door-wide-b-exterior-05-w.jpg', '3_kia-rio-5-door-wide-b-exterior-05-m.jpg', '3_kia-rio-5-door-wide-b-exterior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('77', '3', 'EXT', null, null, null, '3_kia-rio-5-door-wide-exterior-06.jpg', '3_kia-rio-5-door-wide-b-exterior-06-w.jpg', '3_kia-rio-5-door-wide-b-exterior-06-m.jpg', '3_kia-rio-5-door-wide-b-exterior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('78', '3', 'EXT', null, null, null, '3_kia-rio-5-door-wide-exterior-07.jpg', '3_kia-rio-5-door-wide-b-exterior-07-w.jpg', '3_kia-rio-5-door-wide-b-exterior-07-m.jpg', '3_kia-rio-5-door-wide-b-exterior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('79', '3', 'EXT', null, null, null, '3_kia-rio-5-door-wide-exterior-08.jpg', '3_kia-rio-5-door-wide-b-exterior-08-w.jpg', '3_kia-rio-5-door-wide-b-exterior-08-m.jpg', '3_kia-rio-5-door-wide-b-exterior-08-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('80', '3', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-01.jpg', '2_kia-rio-5-door-wide-b-interior-01-w.jpg', '2_kia-rio-5-door-wide-b-interior-01-t.jpg', '2_kia-rio-5-door-wide-b-interior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('81', '3', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-02.jpg', '2_kia-rio-5-door-wide-b-interior-02-w.jpg', '2_kia-rio-5-door-wide-b-interior-02-t.jpg', '2_kia-rio-5-door-wide-b-interior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('82', '3', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-03.jpg', '2_kia-rio-5-door-wide-b-interior-03-w.jpg', '2_kia-rio-5-door-wide-b-interior-03-t.jpg', '2_kia-rio-5-door-wide-b-interior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('83', '3', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-04.jpg', '2_kia-rio-5-door-wide-b-interior-04-w.jpg', '2_kia-rio-5-door-wide-b-interior-04-t.jpg', '2_kia-rio-5-door-wide-b-interior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('84', '3', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-05.jpg', '2_kia-rio-5-door-wide-b-interior-05-w.jpg', '2_kia-rio-5-door-wide-b-interior-05-t.jpg', '2_kia-rio-5-door-wide-b-interior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('85', '3', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-06.jpg', '2_kia-rio-5-door-wide-b-interior-06-w.jpg', '2_kia-rio-5-door-wide-b-interior-06-t.jpg', '2_kia-rio-5-door-wide-b-interior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('86', '3', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-07.jpg', '2_kia-rio-5-door-wide-b-interior-07-w.jpg', '2_kia-rio-5-door-wide-b-interior-07-t.jpg', '2_kia-rio-5-door-wide-b-interior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('87', '3', 'INT', null, null, null, '2_kia-rio-5-door-wide-interior-08.jpg', '2_kia-rio-5-door-wide-b-interior-08-w.jpg', '2_kia-rio-5-door-wide-b-interior-08-t.jpg', '2_kia-rio-5-door-wide-b-interior-08-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('88', '4', 'EXT', 'Da vida a un nuevo color\r\n', null, null, '4_ico_picanto_paging1_1_on.png', '4_kia-picanto-exterior-01-w.jpg', '4_kia-picanto-exterior-01-t.jpg', '4_kia-picanto-exterior-01-m.jpg', '0', '0', '1', '0', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('89', '4', 'EXT', 'Los ojos se encuentran con la profundidad del alma', null, null, '4_ico_picanto_paging2_1_on.png', '4_kia-picanto-exterior-02-w.jpg', '4_kia-picanto-exterior-02-t.jpg', '4_kia-picanto-exterior-02-m.jpg', '0', '0', '1', '0', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('90', '4', 'EXT', 'La diversión simplemente acaba de comenzar', null, null, '4_ico_picanto_paging3_1_on.png', '4_kia-picanto-exterior-03-w.jpg', '4_kia-picanto-exterior-03-t.jpg', '4_kia-picanto-exterior-03-m.jpg', '0', '0', '1', '0', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('91', '4', 'EXT', 'Luces anti-niebla', null, null, null, '4_picanto-2017-showroom-features-exterior-thumbnail-01-w.jpg', '4_picanto-2017-showroom-features-exterior-thumbnail-01-t.jpg', '4_picanto-2017-showroom-features-exterior-thumbnail-01-m.jpg', '0', '0', '0', '1', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('92', '4', 'EXT', 'Desempañador de vidrio trasero', null, null, null, '4_picanto-2017-showroom-features-exterior-thumbnail-02-w.jpg', '4_picanto-2017-showroom-features-exterior-thumbnail-02-t.jpg', '4_picanto-2017-showroom-features-exterior-thumbnail-02-m.jpg', '0', '0', '0', '1', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('93', '4', 'EXT', 'Tercera Luz de Freno', null, null, null, '4_picanto-2017-showroom-features-exterior-thumbnail-03-w.jpg', '4_picanto-2017-showroom-features-exterior-thumbnail-03-t.jpg', '4_picanto-2017-showroom-features-exterior-thumbnail-03-m.jpg', '0', '0', '0', '1', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('94', '4', 'INT', 'Siéntete más cómodo y confiado', null, null, null, '4_kia-picanto-interior-01-w.jpg', '4_kia-picanto-interior-01-t.jpg', '4_kia-picanto-interior-01-m.jpg', '0', '0', '0', '0', '1', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('95', '4', 'EXT', null, null, '4_img_gt_ci_001.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('96', '4', 'INT', null, null, '4_kia-picanto-ta-pe-gallery-02.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('97', '4', 'EXT', null, null, null, '4_kia-picanto-ta-pe-wide-exterior-01.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-01-w.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-01-t.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('98', '4', 'EXT', null, null, null, '4_kia-picanto-ta-pe-wide-exterior-02.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-02-w.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-02-t.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('99', '4', 'EXT', null, null, null, '4_kia-picanto-ta-pe-wide-exterior-03.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-03-w.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-03-t.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('100', '4', 'EXT', null, null, null, '4_kia-picanto-ta-pe-wide-exterior-04.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-04-w.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-04-t.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('101', '4', 'EXT', null, null, null, '4_kia-picanto-ta-pe-wide-exterior-05.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-05-w.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-05-t.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('102', '4', 'EXT', null, null, null, '4_kia-picanto-ta-pe-wide-exterior-06.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-06-w.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-06-t.jpg', '4_kia-picanto-ta-pe-wide-b-exterior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('103', '4', 'INT', null, null, null, '4_kia-picanto-ta-pe-wide-interior-01.jpg', '4_kia-picanto-ta-pe-wide-b-interior-01-w.jpg', '4_kia-picanto-ta-pe-wide-b-interior-01-t.jpg', '4_kia-picanto-ta-pe-wide-b-interior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('105', '4', 'INT', null, null, null, '4_kia-picanto-ta-pe-wide-interior-02.jpg', '4_kia-picanto-ta-pe-wide-b-interior-02-w.jpg', '4_kia-picanto-ta-pe-wide-b-interior-02-t.jpg', '4_kia-picanto-ta-pe-wide-b-interior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('106', '4', 'INT', null, null, null, '4_kia-picanto-ta-pe-wide-interior-03.jpg', '4_kia-picanto-ta-pe-wide-b-interior-03-w.jpg', '4_kia-picanto-ta-pe-wide-b-interior-03-t.jpg', '4_kia-picanto-ta-pe-wide-b-interior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('107', '4', 'INT', null, null, null, '4_kia-picanto-ta-pe-wide-interior-04.jpg', '4_kia-picanto-ta-pe-wide-b-interior-04-w.jpg', '4_kia-picanto-ta-pe-wide-b-interior-04-t.jpg', '4_kia-picanto-ta-pe-wide-b-interior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('108', '4', 'INT', null, null, null, '4_kia-picanto-ta-pe-wide-interior-05.jpg', '4_kia-picanto-ta-pe-wide-b-interior-05-w.jpg', '4_kia-picanto-ta-pe-wide-b-interior-05-t.jpg', '4_kia-picanto-ta-pe-wide-b-interior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('109', '4', 'INT', null, null, null, '4_kia-picanto-ta-pe-wide-interior-06.jpg', '4_kia-picanto-ta-pe-wide-b-interior-06-w.jpg', '4_kia-picanto-ta-pe-wide-b-interior-06-t.jpg', '4_kia-picanto-ta-pe-wide-b-interior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('110', '5', 'EXT', 'Un estilo que rompe todos los moldes', 'Los llamativos colores del exterior en sus versiones doble tonos, el estilo de las luces LED delanteras y traseras, son algunos puntos clave en el moderno diseño', null, '5_ico_gt_soul_paging1_1_on.png', '5_kia-soul-pe-exterior-01-w.jpg', '5_kia-soul-pe-exterior-01-t.jpg', '5_kia-soul-pe-exterior-01-m.jpg', '0', '0', '1', '0', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('111', '5', 'EXT', 'El aliado perfecto para una ciudad salvaje', 'No importa el camino, los recorridos, ni los rincones que quieras descubrir y explorar. El Soul es ese aliado perfecto que sabrá brillar con luces propias en una ciudad salvaje, sin perder nunca su icónico estilo.', null, '5_ico_soul_pe_paging2_on.png', '5_kia-soul-pe-exterior-02-w.jpg', '5_kia-soul-pe-exterior-02-t.jpg', '5_kia-soul-pe-exterior-02-m.jpg', '0', '0', '1', '0', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('112', '5', 'EXT', 'Diseño sofisticadamente futurista', 'La pintura bitono (en algunas versiones) junto con las luces, hacen del Kia Soul un vehículo único.', null, null, '5_kia-soul-exterior-07-w.jpg', '5_kia-soul-exterior-07-t.jpg', '5_kia-soul-exterior-07-m.jpg', '0', '0', '0', '1', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('113', '5', 'EXT', 'Faros anti-niebla', 'Detalles que hacen la diferencia, para que tu camino sea mucho más seguro.', null, null, '5_kia-soul-exterior-05-w.jpg', '5_kia-soul-exterior-05-t.jpg', '5_kia-soul-exterior-05-m.jpg', '0', '0', '0', '1', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('114', '5', 'EXT', 'Puerta trasera', 'El maletero auténtico y original posee un estilo innovador y único que le da presencia en la calle', null, null, '5_kia-pop-soul-pe-exterior-04-w.jpg', '5_kia-pop-soul-pe-exterior-04-t.jpg', '5_kia-pop-soul-pe-exterior-04-m.jpg', '0', '0', '0', '1', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('115', '5', 'EXT', 'Luces LED traseras', 'Las lámparas de combinación traseras LED de Soul ofrecen una visibilidad sobresaliente junto con una dosis seria de estilo ultramoderno.', null, null, '5_kia-pop-soul-pe-exterior-02-w.jpg', '5_kia-pop-soul-pe-exterior-02-t.jpg', '5_kia-pop-soul-pe-exterior-02-m.jpg', '0', '0', '0', '1', '0', '0', '4', '1');
INSERT INTO `modelo_imagenes` VALUES ('116', '5', 'INT', 'Un concepto revolucionario desde su punto de vista', null, null, null, '5_kia-soul-pe-interior-01-w.jpg', '5_kia-soul-pe-interior-01-t.jpg', '5_kia-soul-pe-interior-01-m.jpg', '0', '0', '0', '0', '1', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('117', '5', 'INT', 'Volante ajustable en altura y profundidad', 'Conducción hecha a tu medida. Personaliza la forma en que conduces, graduando y ajustando el volante a tus necesidades para hacer del manejo del Soul una experiencia mucho más placentera y hecha a tu medida.', null, null, '5_kia-soul-interior-04-w.jpg', '5_kia-soul-interior-04-t.jpg', '5_kia-soul-interior-04-m.jpg', '0', '0', '0', '0', '0', '1', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('118', '5', 'INT', 'Asiento del conductor ajustable en altura', 'La comodidad también puede ajustarse. Sabemos que la comodidad de un asiento no se resume solo a su funcionalidad, en el nuevo Soul, el asiento del conductor puede ajustarse para conducir con mayor comodidad.', null, null, '5_kia-soul-interior-09-w.jpg', '5_kia-soul-interior-09-t.jpg', '5_kia-soul-interior-09-m.jpg', '0', '0', '0', '0', '0', '1', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('119', '5', 'INT', 'Radio MP3 USB Aux', null, null, null, '5_soul-2017-showroom-features-interior-thumbnail-07-w.jpg', '5_soul-2017-showroom-features-interior-thumbnail-07-t.jpg', '5_soul-2017-showroom-features-interior-thumbnail-07-m.jpg', '0', '0', '0', '0', '0', '1', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('120', '5', 'INT', 'Camara de retroceso integrada', null, null, null, '5_kia-soul-interior-02-w.jpg', '5_kia-soul-interior-02-t.jpg', '5_kia-soul-interior-02-m.jpg', '0', '0', '0', '0', '0', '1', '4', '1');
INSERT INTO `modelo_imagenes` VALUES ('121', '5', 'EXT', null, null, '5_kia-soul-gallery-01.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('122', '5', 'INT', null, null, '5_kia-soul-gallery-02.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('123', '5', 'EXT', null, null, null, '5_kia-soul-wide-exterior-01.jpg', '5_kia-soul-wide-b-exterior-01-w.jpg', '5_kia-soul-wide-b-exterior-01-t.jpg', '5_kia-soul-wide-b-exterior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('124', '5', 'EXT', null, null, null, '5_kia-soul-wide-exterior-02.jpg', '5_kia-soul-wide-b-exterior-02-w.jpg', '5_kia-soul-wide-b-exterior-02-t.jpg', '5_kia-soul-wide-b-exterior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('125', '5', 'EXT', null, null, null, '5_kia-soul-wide-exterior-03.jpg', '5_kia-soul-wide-b-exterior-03-w.jpg', '5_kia-soul-wide-b-exterior-03-t.jpg', '5_kia-soul-wide-b-exterior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('126', '5', 'EXT', null, null, null, '5_kia-soul-wide-exterior-04.jpg', '5_kia-soul-wide-b-exterior-04-w.jpg', '5_kia-soul-wide-b-exterior-04-t.jpg', '5_kia-soul-wide-b-exterior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('127', '5', 'EXT', null, null, null, '5_kia-soul-wide-exterior-05.jpg', '5_kia-soul-wide-b-exterior-05-w.jpg', '5_kia-soul-wide-b-exterior-05-t.jpg', '5_kia-soul-wide-b-exterior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('128', '5', 'EXT', null, null, null, '5_kia-soul-wide-exterior-06.jpg', '5_kia-soul-wide-b-exterior-06-w.jpg', '5_kia-soul-wide-b-exterior-06-t.jpg', '5_kia-soul-wide-b-exterior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('129', '5', 'EXT', null, null, null, '5_kia-soul-wide-exterior-07.jpg', '5_kia-soul-wide-b-exterior-07-w.jpg', '5_kia-soul-wide-b-exterior-07-t.jpg', '5_kia-soul-wide-b-exterior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('130', '5', 'EXT', null, null, null, '5_kia-soul-wide-exterior-08.jpg', '5_kia-soul-wide-b-exterior-08-w.jpg', '5_kia-soul-wide-b-exterior-08-t.jpg', '5_kia-soul-wide-b-exterior-08-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('131', '5', 'INT', null, null, null, '5_kia-soul-wide-interior-01.jpg', '5_kia-soul-wide-b-interior-01-w.jpg', '5_kia-soul-wide-b-interior-01-t.jpg', '5_kia-soul-wide-b-interior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('132', '5', 'INT', null, null, null, '5_kia-soul-wide-interior-02.jpg', '5_kia-soul-wide-b-interior-02-w.jpg', '5_kia-soul-wide-b-interior-02-t.jpg', '5_kia-soul-wide-b-interior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('133', '5', 'INT', null, null, null, '5_kia-soul-wide-interior-03.jpg', '5_kia-soul-wide-b-interior-03-w.jpg', '5_kia-soul-wide-b-interior-03-t.jpg', '5_kia-soul-wide-b-interior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('134', '5', 'INT', null, null, null, '5_kia-soul-wide-interior-04.jpg', '5_kia-soul-wide-b-interior-04-w.jpg', '5_kia-soul-wide-b-interior-04-t.jpg', '5_kia-soul-wide-b-interior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('135', '5', 'INT', null, null, null, '5_kia-soul-wide-interior-05.jpg', '5_kia-soul-wide-b-interior-05-w.jpg', '5_kia-soul-wide-b-interior-05-t.jpg', '5_kia-soul-wide-b-interior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('136', '5', 'INT', null, null, null, '5_kia-soul-wide-interior-06.jpg', '5_kia-soul-wide-b-interior-06-w.jpg', '5_kia-soul-wide-b-interior-06-t.jpg', '5_kia-soul-wide-b-interior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('137', '5', 'INT', null, null, null, '5_kia-soul-wide-interior-07.jpg', '5_kia-soul-wide-b-interior-07-w.jpg', '5_kia-soul-wide-b-interior-07-t.jpg', '5_kia-soul-wide-b-interior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('138', '6', 'EXT', 'Listo para reinventar el juego', 'Toma tu experiencia de manejo a un nuevo nivel gracias al nuevo y único Sportage, las cabezas giraran con las miradas, el innovador uso de la tecnología y excepcional atención al detalle.', null, '6_ico_sportage_paging1_on.png', '6_kia-sportage-exterior-01-w.jpg', '6_kia-sportage-exterior-01-t.jpg', '6_kia-sportage-exterior-01-m.jpg', '0', '0', '1', '0', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('139', '6', 'EXT', 'Conducir en la ciudad nunca ha sido tan genial', 'El Sportage es el nuevo rey de la selva urbana con potencia suficiente para conducir de forma segura y sin problemas por los caminos de la ciudad con una perfecta combinación de estilo contemporáneo y recursos deportivos.', null, '6_ico_sportage_paging2_on.png', '6_kia-sportage-exterior-02-w.jpg', '6_kia-sportage-exterior-02-t.jpg', '6_kia-sportage-exterior-02-m.jpg', '0', '0', '1', '0', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('140', '6', 'EXT', 'Líneas llamativas que dibujan miradas de admiración', 'Todos queremos destacar y distinguirnos entre la multitud. Con esta línea elegante y deportiva, el nuevo y revolucionario Sportage es un SUV del cual se sentirá orgulloso al manejarlo.', null, '6_ico_sportage_paging3_on.png', '6_kia-sportage-exterior-03-w.jpg', '6_kia-sportage-exterior-03-t.jpg', '6_kia-sportage-exterior-03-m.jpg', '0', '0', '1', '0', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('141', '6', 'EXT', 'Mejoras aerodinámicas', null, null, null, '6_kia-sportage-exterior-08-w.jpg', '6_kia-sportage-exterior-08-t.jpg', '6_kia-sportage-exterior-08-m.jpg', '0', '0', '0', '1', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('142', '6', 'EXT', 'Retrovisores retráctiles con luces direccionales LED', null, null, null, '6_kia-sportage-exterior-09-w.jpg', '6_kia-sportage-exterior-09-t.jpg', '6_kia-sportage-exterior-09-m.jpg', '0', '0', '0', '1', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('143', '6', 'EXT', 'Luces Diurnas', null, null, null, '6_kia-sportage-exterior-04-w.jpg', '6_kia-sportage-exterior-04-t.jpg', '6_kia-sportage-exterior-04-m.jpg', '0', '0', '0', '1', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('144', '6', 'EXT', 'Lámparas combinadas traseras de tipo LED', null, null, null, '6_kia-sportage-exterior-06-w.jpg', '6_kia-sportage-exterior-06-t.jpg', '6_kia-sportage-exterior-06-m.jpg', '0', '0', '0', '1', '0', '0', '4', '1');
INSERT INTO `modelo_imagenes` VALUES ('145', '6', 'INT', 'Máxima comodidad y diseño deportivo', null, null, null, '6_kia-sportage-interior-01-w.jpg', '6_kia-sportage-interior-01-t.jpg', '6_kia-sportage-interior-01-m.jpg', '0', '0', '0', '0', '1', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('146', '6', 'INT', 'Tome asiento para el impulso de su vida', 'Nuestros dedicados diseñadores cuidadosamente han combinado, los materiales más finos y duraderos con atención a los detalles para crear sensaciones de elegancia y pura comodidad que aumentará su sentimiento de paz interior, sin importar lo que pueda estar pasando afuera.', null, null, '6_kia-sportage-interior-02-w.jpg', '6_kia-sportage-interior-02-t.jpg', '6_kia-sportage-interior-02-m.jpg', '0', '0', '0', '0', '0', '1', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('147', '6', 'INT', 'Pantalla a color LCD de 4,2 pulgadas', 'La información es poder y la pantalla a color LCD de 4,2 pulgadas perfectamente situada entre los indicadores de agrupación muestra un vehículo vivaz y la información de manejo con una visibilidad sobresaliente.', null, null, '6_kia-sportage-interior-05-w.jpg', '6_kia-sportage-interior-05-t.jpg', '6_kia-sportage-interior-05-m.jpg', '0', '0', '0', '0', '0', '1', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('148', '6', 'INT', 'Asientos traseros totalmente abatibles', 'Los asientos posteriores se pliegan completamente para transportar la carga más fácilmente y con seguridad.', null, null, '6_kia-sportage-interior-16-w.jpg', '6_kia-sportage-interior-16-t.jpg', '6_kia-sportage-interior-16-m.jpg', '0', '0', '0', '0', '0', '1', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('149', '6', 'INT', 'Desempañador automático', 'Un sofisticado sensor detecta el empañamiento en el parabrisas frontal y lo limpia automáticamente, dándote claridad en todo momento al manejar.', null, null, '6_kia-sportage-interior-13-w.jpg', '6_kia-sportage-interior-13-t.jpg', '6_kia-sportage-interior-13-m.jpg', '0', '0', '0', '0', '0', '1', '4', '1');
INSERT INTO `modelo_imagenes` VALUES ('150', '6', 'EXT', null, null, '6_kia-sportage-gallery-01.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('151', '6', 'INT', null, null, '6_kia-sportage-gallery-02.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('152', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-01.jpg', '6_kia-sportage-wide-exterior-01.jpg', '6_kia-sportage-wide-b-exterior-01-t.jpg', '6_kia-sportage-wide-b-exterior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('153', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-02.jpg', '6_kia-sportage-wide-exterior-02.jpg', '6_kia-sportage-wide-b-exterior-02-t.jpg', '6_kia-sportage-wide-b-exterior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('154', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-03.jpg', '6_kia-sportage-wide-exterior-03.jpg', '6_kia-sportage-wide-b-exterior-03-t.jpg', '6_kia-sportage-wide-b-exterior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('155', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-04.jpg', '6_kia-sportage-wide-exterior-04.jpg', '6_kia-sportage-wide-b-exterior-04-t.jpg', '6_kia-sportage-wide-b-exterior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('156', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-05.jpg', '6_kia-sportage-wide-exterior-05.jpg', '6_kia-sportage-wide-b-exterior-05-t.jpg', '6_kia-sportage-wide-b-exterior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('157', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-06.jpg', '6_kia-sportage-wide-exterior-06.jpg', '6_kia-sportage-wide-b-exterior-06-t.jpg', '6_kia-sportage-wide-b-exterior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('158', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-07.jpg', '6_kia-sportage-wide-exterior-07.jpg', '6_kia-sportage-wide-b-exterior-07-t.jpg', '6_kia-sportage-wide-b-exterior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('159', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-08.jpg', '6_kia-sportage-wide-exterior-08.jpg', '6_kia-sportage-wide-b-exterior-08-t.jpg', '6_kia-sportage-wide-b-exterior-08-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('160', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-09.jpg', '6_kia-sportage-wide-exterior-09.jpg', '6_kia-sportage-wide-b-exterior-09-t.jpg', '6_kia-sportage-wide-b-exterior-09-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('161', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-10.jpg', '6_kia-sportage-wide-exterior-10.jpg', '6_kia-sportage-wide-b-exterior-10-t.jpg', '6_kia-sportage-wide-b-exterior-10-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('162', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-11.jpg', '6_kia-sportage-wide-exterior-11.jpg', '6_kia-sportage-wide-b-exterior-11-t.jpg', '6_kia-sportage-wide-b-exterior-11-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('163', '6', 'EXT', null, null, null, '5_kia-soul-wide-exterior-12.jpg', '6_kia-sportage-wide-exterior-12.jpg', '6_kia-sportage-wide-b-exterior-12-t.jpg', '6_kia-sportage-wide-b-exterior-12-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('164', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-01.jpg', '6_kia-sportage-wide-b-interior-01-w.jpg', '6_kia-sportage-wide-b-interior-01-t.jpg', '6_kia-sportage-wide-b-interior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('165', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-02.jpg', '6_kia-sportage-wide-b-interior-02-w.jpg', '6_kia-sportage-wide-b-interior-02-t.jpg', '6_kia-sportage-wide-b-interior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('166', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-03.jpg', '6_kia-sportage-wide-b-interior-03-w.jpg', '6_kia-sportage-wide-b-interior-03-t.jpg', '6_kia-sportage-wide-b-interior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('167', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-04.jpg', '6_kia-sportage-wide-b-interior-04-w.jpg', '6_kia-sportage-wide-b-interior-04-t.jpg', '6_kia-sportage-wide-b-interior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('168', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-05.jpg', '6_kia-sportage-wide-b-interior-05-w.jpg', '6_kia-sportage-wide-b-interior-05-t.jpg', '6_kia-sportage-wide-b-interior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('169', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-06.jpg', '6_kia-sportage-wide-b-interior-06-w.jpg', '6_kia-sportage-wide-b-interior-06-t.jpg', '6_kia-sportage-wide-b-interior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('170', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-07.jpg', '6_kia-sportage-wide-b-interior-07-w.jpg', '6_kia-sportage-wide-b-interior-07-t.jpg', '6_kia-sportage-wide-b-interior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('171', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-08.jpg', '6_kia-sportage-wide-b-interior-08-w.jpg', '6_kia-sportage-wide-b-interior-08-t.jpg', '6_kia-sportage-wide-b-interior-08-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('172', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-09.jpg', '6_kia-sportage-wide-b-interior-09-w.jpg', '6_kia-sportage-wide-b-interior-09-t.jpg', '6_kia-sportage-wide-b-interior-09-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('173', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-10.jpg', '6_kia-sportage-wide-b-interior-10-w.jpg', '6_kia-sportage-wide-b-interior-10-t.jpg', '6_kia-sportage-wide-b-interior-10-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('174', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-11.jpg', '6_kia-sportage-wide-b-interior-11-w.jpg', '6_kia-sportage-wide-b-interior-11-t.jpg', '6_kia-sportage-wide-b-interior-11-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('175', '6', 'INT', null, null, null, '6_kia-sportage-wide-interior-12.jpg', '6_kia-sportage-wide-b-interior-12-w.jpg', '6_kia-sportage-wide-b-interior-12-t.jpg', '6_kia-sportage-wide-b-interior-12-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');

-- ----------------------------
-- Table structure for modelo_imagenes_thumb
-- ----------------------------
DROP TABLE IF EXISTS `modelo_imagenes_thumb`;
CREATE TABLE `modelo_imagenes_thumb` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo_imagenes` int(11) unsigned DEFAULT NULL,
  `tipo` enum('INT','EXT') DEFAULT NULL,
  `descripcion` text,
  `img` varchar(80) DEFAULT NULL,
  `principal` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_imagenes_thumb
-- ----------------------------
INSERT INTO `modelo_imagenes_thumb` VALUES ('1', '1', 'EXT', null, '1_ico_cerato_forte_yd_paging5_on.png', '0', '1');
INSERT INTO `modelo_imagenes_thumb` VALUES ('2', '2', 'EXT', null, '1_ico_cerato_forte_yd_paging6_on.png', '0', '1');
INSERT INTO `modelo_imagenes_thumb` VALUES ('3', '3', 'EXT', null, '1_ico_cerato_forte_yd_paging7_on.png', '0', '1');

-- ----------------------------
-- Table structure for modelo_llantas
-- ----------------------------
DROP TABLE IF EXISTS `modelo_llantas`;
CREATE TABLE `modelo_llantas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_version` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `tipo` varchar(80) DEFAULT NULL,
  `img` varchar(60) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_llantas
-- ----------------------------
INSERT INTO `modelo_llantas` VALUES ('1', '1', '205/55 R16', 'Llanta de Acero', '1_kia-cerato-forte-yd-wheel-slide-01.png', '1');
INSERT INTO `modelo_llantas` VALUES ('2', '2', '205/55 R16', 'Llanta de Acero', '1_kia-cerato-forte-yd-wheel-slide-01.png', '1');
INSERT INTO `modelo_llantas` VALUES ('3', '3', '205/55 R16', 'Llanta de Acero', '1_kia-cerato-forte-yd-wheel-slide-02.png', '1');
INSERT INTO `modelo_llantas` VALUES ('4', '4', 'R15', 'Llanta de Acero', '2_rio_sedan_acero.png', '1');
INSERT INTO `modelo_llantas` VALUES ('5', '5', 'R15', 'Llanta de Aleación', '2_rio_sedan_aleacion.png', '1');
INSERT INTO `modelo_llantas` VALUES ('6', '6', 'R15', 'Llanta de Aleación', '2_rio_sedan_aleacion.png', '1');
INSERT INTO `modelo_llantas` VALUES ('7', '7', 'R15', 'Llanta de Aleación', '3_kia-rio-sc-wheel-slide-03.png', '1');
INSERT INTO `modelo_llantas` VALUES ('8', '8', '165/60 R14', 'Llanta de Acero', '2_rio_sedan_acero.png', '1');
INSERT INTO `modelo_llantas` VALUES ('9', '9', '165/60 R14', 'Llanta de Aleación', '4_kia-picanto-wheel-slide-06.png', '1');
INSERT INTO `modelo_llantas` VALUES ('10', '10', '215/55 R17', 'Llanta de Aleación', '5_kia-soul-py-wheel-slide-04.png', '1');
INSERT INTO `modelo_llantas` VALUES ('11', '11', '215/55 R17', 'Llanta de Aleación', '5_kia-soul-py-wheel-slide-04.png', '1');
INSERT INTO `modelo_llantas` VALUES ('12', '12', '215/55 R17', 'Llanta de Aleación', '5_kia-soul-py-wheel-slide-04.png', '1');
INSERT INTO `modelo_llantas` VALUES ('13', '13', '255/60 R17', 'Llanta de Aleación', '6_kia-sportage-wheel-slide-17.png', '1');
INSERT INTO `modelo_llantas` VALUES ('14', '14', '255/60 R17', 'Llanta de Aleación', '6_kia-sportage-wheel-slide-17.png', '1');
INSERT INTO `modelo_llantas` VALUES ('15', '15', '255/60 R17', 'Llanta de Aleación', '6_kia-sportage-wheel-slide-17.png', '1');
INSERT INTO `modelo_llantas` VALUES ('16', '16', '225/55 R18 ', 'Llanta de Aleación', '6_kia-sportage-wheel-slide-18.png', '1');
INSERT INTO `modelo_llantas` VALUES ('17', '17', '245/45 R19', 'Llanta de Aleación', '6_kia-sportage-wheel-slide-19.png', '1');
INSERT INTO `modelo_llantas` VALUES ('18', '18', '245/45 R19', 'Llanta de Aleación', '6_kia-sportage-wheel-slide-19.png', '1');
INSERT INTO `modelo_llantas` VALUES ('19', '19', '235/60 R18', 'Llanta de Aleación', '7_kia-grand-carnival-wheel-slide-01.png', '1');

-- ----------------------------
-- Table structure for modelo_motor
-- ----------------------------
DROP TABLE IF EXISTS `modelo_motor`;
CREATE TABLE `modelo_motor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_version` int(11) unsigned DEFAULT NULL,
  `id_combustible` int(11) unsigned DEFAULT NULL,
  `tipo_motor` varchar(80) DEFAULT NULL,
  `cilindraje` varchar(80) DEFAULT NULL,
  `potencia_max` varchar(80) DEFAULT NULL,
  `torque_max` varchar(80) DEFAULT NULL,
  `cilindros` varchar(80) DEFAULT NULL,
  `valvula` varchar(80) DEFAULT NULL,
  `img` varchar(120) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_motor
-- ----------------------------
INSERT INTO `modelo_motor` VALUES ('1', '1', '3', 'DOHC 16 Valvulas / InyecciOn multipunto', '1.600 c.c', '130/6300', '16.0/4850', '4 en Línea', null, '1_kia-cerato-forte-yd-engine-slide-01.png', '1');
INSERT INTO `modelo_motor` VALUES ('2', '2', '3', 'DOHC 16 Valvulas / InyecciOn multipunto', '1.600 c.c', '130/6300', '16.0/4850', '4 en Línea', null, '1_kia-cerato-forte-yd-engine-slide-01.png', '1');
INSERT INTO `modelo_motor` VALUES ('3', '3', '3', 'DOHC 16 Valvulas / InyecciOn multipunto', '1.600 c.c', '130/6300', '16.0/4850', '4 en Línea', null, '1_kia-cerato-forte-yd-engine-slide-01.png', '1');
INSERT INTO `modelo_motor` VALUES ('4', '4', '1', 'D-CVVT 16 válvulas', '1.400 c.c', '98/6000', '13.6/4000', '4 en Línea', null, '1_kia-cerato-forte-yd-engine-slide-01.png', '1');
INSERT INTO `modelo_motor` VALUES ('5', '5', '1', 'D-CVVT 16 válvulas', '1.400 c.c', '98/6300', '15.4/4850', '4 en Línea', null, '1_kia-cerato-forte-yd-engine-slide-01.png', '1');
INSERT INTO `modelo_motor` VALUES ('6', '6', '1', 'D-CVVT 16 válvulas', '1.400 c.c', '98/6300', '15.4/4850', '4 en Línea', null, '1_kia-cerato-forte-yd-engine-slide-01.png', '1');
INSERT INTO `modelo_motor` VALUES ('7', '7', '3', 'FFV', '1.600 c.c', '128/6300', '15.4/4850', '4 en Línea', null, '3_rio_hatch.png', '1');
INSERT INTO `modelo_motor` VALUES ('8', '8', '3', 'DOHC 12 v?lvulas', '1.000 cc', '80/6000', '12.2/4000', '3 en Línea', null, '4_kia-picanto-engine-slide-03.png', '1');
INSERT INTO `modelo_motor` VALUES ('9', '9', '3', 'DOHC 12 v?lvulas', '1.000 cc', '80/6000', '12.2/4000', '3 en Línea', null, '4_kia-picanto-engine-slide-03.png', '1');
INSERT INTO `modelo_motor` VALUES ('10', '10', '3', '16 Válvulas MLA', '1.600 c.c.', '120/6300', '15.5/4850', '4 en Línea', null, '5_kia-soul-pe-engine-slide-02.png', '1');
INSERT INTO `modelo_motor` VALUES ('11', '11', '3', '16 Válvulas MLA', '1.600 c.c.', '120/6300', '15.5/4850', '4 en Línea', null, '5_kia-soul-pe-engine-slide-02.png', '1');
INSERT INTO `modelo_motor` VALUES ('12', '12', '3', '16 Válvulas MLA', '1.600 c.c.', '120/6300', '15.5/4850', '4 en Línea', null, '5_kia-soul-pe-engine-slide-02.png', '1');
INSERT INTO `modelo_motor` VALUES ('13', '13', '1', 'D-CVVT (16 valvulas) MPI', '2.000 c.c.', '155/6200', '19,6/4000', '4 en Línea', null, '6_kia-sportage-engine-slide-02.png', '1');
INSERT INTO `modelo_motor` VALUES ('14', '14', '1', 'D-CVVT (16 valvulas) MPI', '2.000 c.c.', '155/6200', '19,6/4000', '4 en Línea', null, '6_kia-sportage-engine-slide-02.png', '1');
INSERT INTO `modelo_motor` VALUES ('15', '15', '2', ' 16 valvulas HLA CRDI', '2.000 c.c.', '155/6200', '19,6/4000', '4 en Línea', null, '6_kia-sportage-engine-slide-02.png', '1');
INSERT INTO `modelo_motor` VALUES ('16', '16', '2', ' 16 valvulas HLA CRDI', '2.000 c.c.', '155/6200', '19,6/4000', '4 en Línea', null, '6_kia-sportage-engine-slide-02.png', '1');
INSERT INTO `modelo_motor` VALUES ('17', '17', '2', ' 16 valvulas HLA CRDI', '2.000 c.c.', '155/6200', '19,6/4000', '4 en Línea', null, '6_kia-sportage-engine-slide-02.png', '1');
INSERT INTO `modelo_motor` VALUES ('18', '18', '2', ' 16 valvulas HLA CRDI', '2.000 c.c.', '155/6200', '19,6/4000', '4 en Línea', null, '6_kia-sportage-engine-slide-02.png', '1');
INSERT INTO `modelo_motor` VALUES ('19', '19', '2', '2.2L TCI (VGT) CRDI ', '2,199 c.c.', '190/6300', '45/2750', '4 en Línea', null, '7_kia-grand-carnival-engine-slide-02.png', '1');

-- ----------------------------
-- Table structure for modelo_seguridad
-- ----------------------------
DROP TABLE IF EXISTS `modelo_seguridad`;
CREATE TABLE `modelo_seguridad` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` text,
  `img_w` varchar(80) DEFAULT NULL,
  `img_t` varchar(80) DEFAULT NULL,
  `img_m` varchar(80) DEFAULT NULL,
  `portada` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_seguridad
-- ----------------------------
INSERT INTO `modelo_seguridad` VALUES ('1', '1', 'Armazón del cuerpo', 'Featuring a collision dispersal structure that diffuses forces upon impact, the new Cerato’s body shell is sturdy and intelligent at the same time.', '1_kia-cerato-forte-yd-safety-01-w.jpg', '1_kia-cerato-forte-yd-safety-01-t.jpg', '1_kia-cerato-forte-yd-safety-01-m.jpg', '1', '1');
INSERT INTO `modelo_seguridad` VALUES ('2', '1', 'Suspensión\r\n', 'Una suspensión delantera de puntal MacPherson presenta un aislador de puntal de doble trayectoria para dispersar golpes y vibraciones y mejorar la estabilidad de la dirección. La suspensión trasera del eje de la viga de torsión acoplada ofrece una calidad de conducción estable y suave.', '1_kia-pop-cerato-forte-yd-safety-01-w.jpg', '1_kia-pop-cerato-forte-yd-safety-01-t.jpg', '1_kia-pop-cerato-forte-yd-safety-01-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('3', '1', 'Respuesta de freno', 'La respuesta y la sensación de frenado se mejoran gracias a un cilindro maestro ampliado y la adición de un tirante al amplificador.', '1_kia-pop-cerato-forte-yd-safety-02-w.jpg', '1_kia-pop-cerato-forte-yd-safety-02-t.jpg', '1_kia-pop-cerato-forte-yd-safety-02-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('4', '1', 'Flex Steer', 'El sistema Flex Steer brinda tres modos de conducción (Comfort, Normal y Sport) que brindan el nivel apropiado de asistencia y retroalimentación de dirección para diferentes condiciones de manejo.', '1_kia-pop-cerato-forte-yd-safety-03-w.jpg', '1_kia-pop-cerato-forte-yd-safety-03-t.jpg', '1_kia-pop-cerato-forte-yd-safety-03-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('5', '1', 'Hill-start Assist Control (HAC)', 'Al mantener el agarre de los frenos hasta que se presiona el acelerador, HAC evita que el vehículo ruede peligrosamente hacia atrás cuando se retira de una parada en una pendiente.', '1_kia-pop-cerato-forte-yd-safety-04-w.jpg', '1_kia-pop-cerato-forte-yd-safety-0-t.jpg', '1_kia-pop-cerato-forte-yd-safety-04-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('6', '2', 'Nos obsesiona la seguridad', 'Creemos que un auto tiene un deber primordial: proteger a la gente dentro de él y alrededor de él. El nuevo Rio cuenta con tecnologías inteligentes de seguridad activa y sustanciales mejoras de seguridad pasiva para su tranquilidad.\r\n\r\n* La imagen debajo es un Rio-5-door.', '2_kia-rio-sc-safetykv-02-w.jpg', '2_kia-rio-sc-safetykv-02-m.jpg', '2_kia-rio-sc-safetykv-02-t.jpg', '1', '1');
INSERT INTO `modelo_seguridad` VALUES ('7', '2', 'Frenos ABS', 'El Sistema Antibloqueo de Freno (ABS) acorta la distancia de frenado previniendo derrapes para mantener el control del vehículo.', '2_Allnew_rio_sedan_Safety_02_w.jpg', '2_Allnew_rio_sedan_Safety_02_w.jpg', '2_Allnew_rio_sedan_Safety_02_w.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('8', '2', 'Sensores de estacionamiento traseros', null, '2_kia-rio-sedan-sh-sensores-estacionamiento-1.jpg', '2_kia-rio-sedan-sh-sensores-estacionamiento-1.jpg', '2_kia-rio-sedan-sh-sensores-estacionamiento-1.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('9', '3', null, null, '3_Allnew_rio_hatch_Safety_01_w.jpg', '3_Allnew_rio_hatch_Safety_01_t.jpg', '3_Allnew_rio_hatch_Safety_01_m.jpg', '1', '1');
INSERT INTO `modelo_seguridad` VALUES ('10', '3', 'Airbags para conductor y copiloto', 'El sistema de airbags brinda protección para el conductor y el copiloto', '3_kia-rio-4-door-Safety-04-w.jpg', '3_kia-rio-4-door-Safety-04-t.jpg', '3_kia-rio-4-door-Safety-04-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('11', '3', 'Frenos ABS', 'El Sistema Antibloqueo de Freno (ABS) acorta la distancia de frenado previniendo derrapes para mantener el control del vehículo.', '2_Allnew_rio_sedan_Safety_02_w.jpg', '2_Allnew_rio_sedan_Safety_02_w.jpg', '2_Allnew_rio_sedan_Safety_02_w.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('12', '5', 'Bolsas de aire para conductor y pasajero delantero', 'El sistema de airbag(s) brinda protección para los ocupantes del vehículo.', '5_soul-2017-showroom-features-safety-thumbnail-07-w.jpg', '5_soul-2017-showroom-features-safety-thumbnail-07-t.jpg', '5_soul-2017-showroom-features-safety-thumbnail-07-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('13', '5', 'Tecnologías inteligentes para una seguridad definitiva', null, '5_kia-soul-safety-01-w.jpg', '5_kia-soul-safety-01-t.jpg', '5_kia-soul-safety-01-m.jpg', '1', '1');
INSERT INTO `modelo_seguridad` VALUES ('14', '5', 'Sistema Antibloqueo de Frenos (ABS)', 'Preparados para toda situaciones. El sistema de frenos antibloqueo ABS del nuevo Soul, reduce la distancia del frenado en aquellas emergencias, aplicando la máxima fuerza de frenado cuando es necesario.', '5_kia-soul-safety-05-w.jpg', '5_kia-soul-safety-05-t.jpg', '5_kia-soul-safety-05-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('15', '6', 'La Fuerza y la seguridad van acompañadas', 'EL uso de acero avanzado de alta resistencia combinado con la fuerza del chasis y el proceso de estampado en caliente hace a la nueva Sportage más comfiable y tranquila', '6_kia-sportage-safety-01-w.jpg', '6_kia-sportage-safety-01-t.jpg', '6_kia-sportage-safety-01-m.jpg', '1', '1');
INSERT INTO `modelo_seguridad` VALUES ('16', '6', '6 airbags', 'Los airbags colocados estratégicamente en todo el interior le ofrecen protección y también sus pasajeros en caso de una colisión.', '6_kia-sportage-safety-02-w.jpg', '6_kia-sportage-safety-02-t.jpg', '6_kia-sportage-safety-02-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('17', '6', 'Sensores de reversa', 'El sensor de reversa detecta y alerta al conductor sobre los vehículos que se acercan desde el lado izquierdo o derecho.', '6_kia-sportage-safety-04-w.jpg', '6_kia-sportage-safety-04-t.jpg', '6_kia-sportage-safety-04-m.jpg', '0', '1');

-- ----------------------------
-- Table structure for modelo_version
-- ----------------------------
DROP TABLE IF EXISTS `modelo_version`;
CREATE TABLE `modelo_version` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` decimal(20,3) DEFAULT NULL,
  `bono` int(11) DEFAULT '0',
  `ano` int(4) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_id_modelo_version` (`id_modelo`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_version
-- ----------------------------
INSERT INTO `modelo_version` VALUES ('1', '1', 'Ex Mec.', '17990.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('2', '1', 'Ex. Aut.', '20000.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('3', '1', 'SX Aut.', '22400.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('4', '2', 'Lx. Mec. 1.4 G.', '14990.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('5', '2', 'Ex. Aut. 1.4 G Full', '17600.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('6', '2', 'Ex. Aut. 1.4 G Limeted', '18800.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('7', '3', 'Ex. Aut. Full', '18000.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('8', '4', 'Lx. Mec. 1.0 FFV', '9200.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('9', '4', 'Lx. Aut. 1.0 FFV', '11200.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('10', '5', 'Mec. 1,6 FFV	MID', '16400.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('11', '5', 'Aut. 1,6 FFV	FULL', '19200.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('12', '5', 'Aut. 1,6 FFV	FULL BI-COLOR LIMITED', '21200.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('13', '6', 'LX. Mec. 2,0 FFV 2WD FLEX', '23800.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('14', '6', 'LX. Aut. 2,0 FFV 2WD FLEX', '24400.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('15', '6', 'EX. Aut. 2,0 FFV 2WD FLEX', '27200.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('16', '6', 'EX. Aut. 2,0 DSL 2WD', '30400.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('17', '6', 'EX. Aut. 2,0 DSL 4WD DSL FULL ll\r\n', '32400.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('18', '6', 'EX. Aut. 2,0 DSL 4WD DSL LIMITED', '37600.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('19', '7', 'Ex. Aut. 2.2 DSL Limited 8 Pasajeros', '44000.000', '0', '2018', '1');

-- ----------------------------
-- Table structure for modelo_version_cuotas
-- ----------------------------
DROP TABLE IF EXISTS `modelo_version_cuotas`;
CREATE TABLE `modelo_version_cuotas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_version` int(11) unsigned DEFAULT NULL,
  `id_moneda` int(11) unsigned DEFAULT NULL,
  `cuota` decimal(22,3) DEFAULT NULL,
  `entrega_inicial` decimal(22,3) DEFAULT NULL,
  `cantidad_cuotas` int(3) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_id_version_vcuotas` (`id_version`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_version_cuotas
-- ----------------------------
INSERT INTO `modelo_version_cuotas` VALUES ('1', '1', '2', '338.000', '2250.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('2', '2', '2', '383.000', '2550.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('3', '3', '2', '428.000', '2850.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('4', '4', '2', '284.000', '1950.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('5', '5', '2', '338.000', '2250.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('6', '6', '2', '360.000', '2400.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('7', '7', '2', '340.000', null, '0');
INSERT INTO `modelo_version_cuotas` VALUES ('8', '10', '2', '330.000', '2200.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('9', '11', '2', '375.000', '2500.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('10', '12', '2', '398.000', '2650.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('11', '8', '2', '195.000', '1300.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('12', '9', '2', '225.000', '1500.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('13', '13', '2', '473.000', '3150.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('14', '14', '2', '503.000', '3350.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('15', '15', '2', '540.000', '3600.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('16', '16', '2', '600.000', '4000.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('17', '17', '2', '638.000', '4250.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('18', '18', '2', '735.000', '4900.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('19', '19', '2', '825.000', '5500.000', '60');

-- ----------------------------
-- Table structure for moneda
-- ----------------------------
DROP TABLE IF EXISTS `moneda`;
CREATE TABLE `moneda` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) DEFAULT NULL,
  `simbologia` varchar(3) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of moneda
-- ----------------------------
INSERT INTO `moneda` VALUES ('1', 'Guaraní', 'Gs.', '1');
INSERT INTO `moneda` VALUES ('2', 'Dolar', 'U$D', '1');

-- ----------------------------
-- Table structure for noticia
-- ----------------------------
DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(60) DEFAULT NULL,
  `img_thumb` varchar(60) DEFAULT NULL,
  `titulo` varchar(140) DEFAULT NULL,
  `contenido` longtext,
  `fecha` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of noticia
-- ----------------------------
INSERT INTO `noticia` VALUES ('1', 'noticia1.jpg', 'noticia1-thumb.jpg', 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pretium, lectus in vestibulum dapibus, magna dui venenatis tortor, in porttitor justo arcu ut odio. Cras eget tortor at ligula congue porttitor sed nec enim. Mauris eu scelerisque turpis, sed finibus nulla. In quis scelerisque risus, id lacinia erat. Sed quis auctor magna. Donec leo nisi, dictum id consectetur sed, fermentum ac mauris. Etiam et turpis pretium, euismod arcu ac, volutpat urna. Vestibulum sit amet ante at nisi auctor fermentum id ut mi.</p>\r\n<p>In viverra rutrum vestibulum. Aenean dignissim vestibulum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus quis elit ipsum. Fusce a orci quis lacus elementum finibus eget sit amet felis. Phasellus a nunc ligula. Cras sed orci a dui volutpat gravida sit amet nec justo. Nunc quis eleifend magna. Pellentesque velit ipsum, eleifend condimentum egestas quis, tincidunt ut nisi. Nunc dictum interdum lorem eget tincidunt. Aenean tempus purus sit amet odio condimentum, vitae bibendum augue pulvinar. Ut in nunc tincidunt, fermentum enim auctor, pretium tortor. Pellentesque et pharetra magna, eget consequat sapien.</p>\r\n<p>Etiam consequat dui arcu, ut hendrerit eros faucibus et. Suspendisse vestibulum ac purus vel iaculis. Phasellus at luctus dui. Quisque neque orci, rhoncus vel turpis ullamcorper, dapibus tempus lacus. Aenean malesuada enim et eros consequat, ac rhoncus tortor feugiat. Suspendisse nec egestas velit. Fusce venenatis at odio quis porta. Nulla eget ante ornare, facilisis orci in, cursus mauris. Vestibulum pulvinar sollicitudin elit nec dictum. Nunc pulvinar augue eu turpis sodales posuere. Curabitur pellentesque neque vitae sapien vehicula, eget sagittis lectus malesuada. Etiam blandit pulvinar ante in varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla sapien mi, eleifend vitae lacus eu, tristique eleifend leo.</p>\r\n<p>Aliquam faucibus nisi et mi feugiat, sit amet vestibulum massa ultricies. Quisque sed purus eleifend, aliquam eros congue, dictum arcu. Morbi malesuada nibh dolor, id pharetra neque mattis quis. Nullam pharetra urna id dui laoreet, sit amet scelerisque dolor lobortis. Fusce maximus mauris at porta interdum. Aliquam nec odio nulla. Vestibulum aliquam nisi mauris, nec dictum enim sagittis ut. Pellentesque suscipit feugiat diam sit amet dictum. Suspendisse rhoncus accumsan urna at sagittis. Mauris mollis ex ultricies, vulputate tortor eget, dictum leo. Nunc nec interdum lectus. Ut sed molestie turpis. Cras et eros et massa ullamcorper elementum at non mauris.</p>\r\n<p>Maecenas eu efficitur ipsum. Morbi sit amet mattis lacus. Nulla ultrices justo non magna pulvinar consequat. Vestibulum consequat augue at augue commodo, ut hendrerit nisl varius. Quisque ac purus sit amet diam elementum lobortis. Integer lacinia, leo eu placerat malesuada, lacus augue cursus sapien, non maximus urna lorem sit amet nunc. Fusce porta aliquam metus, eu accumsan neque pellentesque et. Etiam ut leo molestie, placerat odio sit amet, vehicula ipsum. Quisque vitae nisi vestibulum, semper diam a, tristique orci. Sed rutrum felis vitae urna suscipit, a blandit est maximus. Integer imperdiet sodales lacinia. Aliquam posuere justo tellus, a condimentum nisl auctor at. Morbi fermentum nunc tempus nulla ultricies, et feugiat velit finibus. Ut neque turpis, suscipit ac odio nec, semper tempor diam. Nunc auctor erat urna, sit amet luctus lectus dictum sed. Curabitur ultricies in ipsum at cursus.</p>', '2017-11-03 12:00:09', '1');
INSERT INTO `noticia` VALUES ('2', 'noticia2.jpg', 'noticia2-thumb.jpg', 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pretium, lectus in vestibulum dapibus, magna dui venenatis tortor, in porttitor justo arcu ut odio. Cras eget tortor at ligula congue porttitor sed nec enim. Mauris eu scelerisque turpis, sed finibus nulla. In quis scelerisque risus, id lacinia erat. Sed quis auctor magna. Donec leo nisi, dictum id consectetur sed, fermentum ac mauris. Etiam et turpis pretium, euismod arcu ac, volutpat urna. Vestibulum sit amet ante at nisi auctor fermentum id ut mi.</p>\r\n<p>In viverra rutrum vestibulum. Aenean dignissim vestibulum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus quis elit ipsum. Fusce a orci quis lacus elementum finibus eget sit amet felis. Phasellus a nunc ligula. Cras sed orci a dui volutpat gravida sit amet nec justo. Nunc quis eleifend magna. Pellentesque velit ipsum, eleifend condimentum egestas quis, tincidunt ut nisi. Nunc dictum interdum lorem eget tincidunt. Aenean tempus purus sit amet odio condimentum, vitae bibendum augue pulvinar. Ut in nunc tincidunt, fermentum enim auctor, pretium tortor. Pellentesque et pharetra magna, eget consequat sapien.</p>\r\n<p>Etiam consequat dui arcu, ut hendrerit eros faucibus et. Suspendisse vestibulum ac purus vel iaculis. Phasellus at luctus dui. Quisque neque orci, rhoncus vel turpis ullamcorper, dapibus tempus lacus. Aenean malesuada enim et eros consequat, ac rhoncus tortor feugiat. Suspendisse nec egestas velit. Fusce venenatis at odio quis porta. Nulla eget ante ornare, facilisis orci in, cursus mauris. Vestibulum pulvinar sollicitudin elit nec dictum. Nunc pulvinar augue eu turpis sodales posuere. Curabitur pellentesque neque vitae sapien vehicula, eget sagittis lectus malesuada. Etiam blandit pulvinar ante in varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla sapien mi, eleifend vitae lacus eu, tristique eleifend leo.</p>\r\n<p>Aliquam faucibus nisi et mi feugiat, sit amet vestibulum massa ultricies. Quisque sed purus eleifend, aliquam eros congue, dictum arcu. Morbi malesuada nibh dolor, id pharetra neque mattis quis. Nullam pharetra urna id dui laoreet, sit amet scelerisque dolor lobortis. Fusce maximus mauris at porta interdum. Aliquam nec odio nulla. Vestibulum aliquam nisi mauris, nec dictum enim sagittis ut. Pellentesque suscipit feugiat diam sit amet dictum. Suspendisse rhoncus accumsan urna at sagittis. Mauris mollis ex ultricies, vulputate tortor eget, dictum leo. Nunc nec interdum lectus. Ut sed molestie turpis. Cras et eros et massa ullamcorper elementum at non mauris.</p>\r\n<p>Maecenas eu efficitur ipsum. Morbi sit amet mattis lacus. Nulla ultrices justo non magna pulvinar consequat. Vestibulum consequat augue at augue commodo, ut hendrerit nisl varius. Quisque ac purus sit amet diam elementum lobortis. Integer lacinia, leo eu placerat malesuada, lacus augue cursus sapien, non maximus urna lorem sit amet nunc. Fusce porta aliquam metus, eu accumsan neque pellentesque et. Etiam ut leo molestie, placerat odio sit amet, vehicula ipsum. Quisque vitae nisi vestibulum, semper diam a, tristique orci. Sed rutrum felis vitae urna suscipit, a blandit est maximus. Integer imperdiet sodales lacinia. Aliquam posuere justo tellus, a condimentum nisl auctor at. Morbi fermentum nunc tempus nulla ultricies, et feugiat velit finibus. Ut neque turpis, suscipit ac odio nec, semper tempor diam. Nunc auctor erat urna, sit amet luctus lectus dictum sed. Curabitur ultricies in ipsum at cursus.</p>', '2017-11-04 10:58:54', '1');
INSERT INTO `noticia` VALUES ('3', 'noticia3.jpg', 'noticia3-thumb.jpg', 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pretium, lectus in vestibulum dapibus, magna dui venenatis tortor, in porttitor justo arcu ut odio. Cras eget tortor at ligula congue porttitor sed nec enim. Mauris eu scelerisque turpis, sed finibus nulla. In quis scelerisque risus, id lacinia erat. Sed quis auctor magna. Donec leo nisi, dictum id consectetur sed, fermentum ac mauris. Etiam et turpis pretium, euismod arcu ac, volutpat urna. Vestibulum sit amet ante at nisi auctor fermentum id ut mi.</p>\r\n<p>In viverra rutrum vestibulum. Aenean dignissim vestibulum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus quis elit ipsum. Fusce a orci quis lacus elementum finibus eget sit amet felis. Phasellus a nunc ligula. Cras sed orci a dui volutpat gravida sit amet nec justo. Nunc quis eleifend magna. Pellentesque velit ipsum, eleifend condimentum egestas quis, tincidunt ut nisi. Nunc dictum interdum lorem eget tincidunt. Aenean tempus purus sit amet odio condimentum, vitae bibendum augue pulvinar. Ut in nunc tincidunt, fermentum enim auctor, pretium tortor. Pellentesque et pharetra magna, eget consequat sapien.</p>\r\n<p>Etiam consequat dui arcu, ut hendrerit eros faucibus et. Suspendisse vestibulum ac purus vel iaculis. Phasellus at luctus dui. Quisque neque orci, rhoncus vel turpis ullamcorper, dapibus tempus lacus. Aenean malesuada enim et eros consequat, ac rhoncus tortor feugiat. Suspendisse nec egestas velit. Fusce venenatis at odio quis porta. Nulla eget ante ornare, facilisis orci in, cursus mauris. Vestibulum pulvinar sollicitudin elit nec dictum. Nunc pulvinar augue eu turpis sodales posuere. Curabitur pellentesque neque vitae sapien vehicula, eget sagittis lectus malesuada. Etiam blandit pulvinar ante in varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla sapien mi, eleifend vitae lacus eu, tristique eleifend leo.</p>\r\n<p>Aliquam faucibus nisi et mi feugiat, sit amet vestibulum massa ultricies. Quisque sed purus eleifend, aliquam eros congue, dictum arcu. Morbi malesuada nibh dolor, id pharetra neque mattis quis. Nullam pharetra urna id dui laoreet, sit amet scelerisque dolor lobortis. Fusce maximus mauris at porta interdum. Aliquam nec odio nulla. Vestibulum aliquam nisi mauris, nec dictum enim sagittis ut. Pellentesque suscipit feugiat diam sit amet dictum. Suspendisse rhoncus accumsan urna at sagittis. Mauris mollis ex ultricies, vulputate tortor eget, dictum leo. Nunc nec interdum lectus. Ut sed molestie turpis. Cras et eros et massa ullamcorper elementum at non mauris.</p>\r\n<p>Maecenas eu efficitur ipsum. Morbi sit amet mattis lacus. Nulla ultrices justo non magna pulvinar consequat. Vestibulum consequat augue at augue commodo, ut hendrerit nisl varius. Quisque ac purus sit amet diam elementum lobortis. Integer lacinia, leo eu placerat malesuada, lacus augue cursus sapien, non maximus urna lorem sit amet nunc. Fusce porta aliquam metus, eu accumsan neque pellentesque et. Etiam ut leo molestie, placerat odio sit amet, vehicula ipsum. Quisque vitae nisi vestibulum, semper diam a, tristique orci. Sed rutrum felis vitae urna suscipit, a blandit est maximus. Integer imperdiet sodales lacinia. Aliquam posuere justo tellus, a condimentum nisl auctor at. Morbi fermentum nunc tempus nulla ultricies, et feugiat velit finibus. Ut neque turpis, suscipit ac odio nec, semper tempor diam. Nunc auctor erat urna, sit amet luctus lectus dictum sed. Curabitur ultricies in ipsum at cursus.</p>', '2017-11-06 10:58:49', '1');

-- ----------------------------
-- Table structure for paginas
-- ----------------------------
DROP TABLE IF EXISTS `paginas`;
CREATE TABLE `paginas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `privacidad` longtext,
  `terminos` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of paginas
-- ----------------------------
INSERT INTO `paginas` VALUES ('1', '<strong class=\"fontBl\">PRIVACIDAD Y DE PROTECCIÓN DE DATOS</strong> \r\n                                    <ul class=\"pt20 pb10\"> \r\n                                        <li>En relación con la información recolectada en el formulario de registro dispuesto en la página web se enuncian las siguientes Políticas de Privacidad y Protección de Datos, y sus condiciones las cuales se entenderán aceptadas en forma automática, una vez el usuario diligencie sus datos Protección de datos. </li> \r\n                                        <li><u><b>a. Protección de Datos:</b></u></li> \r\n                                        <li>En cumplimiento de la ley 1682 de 2001 que reglamenta la información de caracter privado, Garden Automotores S.A. ha desarrollado una Política de Protección de Datos Personales la cual le garantizará la seguridad debida sobre los mismos y el ejercicio pleno de sus derechos. Los datos personales suministrados por usted a Garden Automotores S.A., incluyendo aquellos que gozan de carácter sensible, podrán ser utilizados por ésta y por terceros que tengan vínculos comerciales con ésta, para el desarrollo de actividades comerciales, estudios con fines estadísticos y de conocimiento del cliente, para la ejecución de servicios contratados, para informarle a sus clientes sobre novedades, productos, servicios y ofertas especiales, para el desarrollo de actividades comerciales. Garden Automotores S.A., podrá transferir y transmitir sus datos personales a terceros que tengan vínculo comercial con Garden Automotores S.A. incluyendo terceros ubicados en países que no proporcionen niveles adecuados de protección de Datos Personales. </li> \r\n                                        <li>La recolección de datos realizada a través de los formularios dispuestos en la página web se realiza con fines comerciales. Garden Automotores S.A. es responsable de manejo de los datos diligenciados. Garden Automotores S.A. utilizará la base de datos recolectada, para ofrecer los servicios de asesoría comercial en línea sobre todo el portafolio de vehículos, planes financieros y promociones. Esta asesoría, será brindada a cada cliente que diligencie el formulario, únicamente por un asesor comercial de Garden Automotores S.A. </li> \r\n                                        <li>El Usuario es libre de suministrar la información requerida en el formulario de recolección de datos dispuesto en la página web Garden Automotores S.A. </li> \r\n                                        <li>Para poder enviar la información requerida en el formulario de recolección de datos, el Usuario deberá proporcionar sus datos personales completos y verídicos. </li> \r\n                                        <li>Una vez leídas y aceptadas las políticas de privacidad y de protección de datos, la información suministrada por el usuario será enviada a una base de datos de Metrokia S.A. </li> \r\n                                        <li>El Usuario puede ejercitar su derecho de acceso, rectificación, cancelación y oposición. </li> \r\n                                        <li>El Usuario al aceptar las políticas de privacidad y protección de datos, autoriza a ser contactado telefónicamente o a través de la dirección diligenciada para envío de información comercial y/o aquella que Garden Automotores S.A. considere de importancia para sus usuarios. Para mayor información sobre la Política de Tratamiento de Datos Personales consulte la página web www.kia.com.py o para el ejercicio de cualquiera de los derechos de información, actualización, rectificación o supresión de los datos personales, deberá enviar un correo electrónico a:dabenitez@garden.com.py </li> \r\n                                        <li><u><b>b. Seguridad de la información</b></u></li> \r\n                                        <li>Garden Automotores S.A., ha acatado y adoptado los niveles de seguridad de protección de datos personales legalmente requeridos.<br> Se ha empleado todas las medidas para evitar la pérdida, acceso no autorizado, mal manejo o de los datos suministrados por el Usuario. No obstante, el Usuario debe ser consciente de que las medidas de seguridad en Internet no son inexpugnables. </li> \r\n                                        <li><u><b>c. Protección frente a accesos no autorizados</b></u></li> \r\n                                        <li>La base de datos recolectada a través del formulario de registro es almacenada en el servidor de la página web de Garden Automotores S.A. El servidor cuenta con las normas de seguridad brindadas por el proveedor. </li> \r\n                                        <li><u><b>d. Cesión de información personal a terceros</b></u></li> \r\n                                        <li>Garden Automotores S.A. hace uso de las bases de datos recolectadas para uso interno, y de terceros que tengan vínculos comerciales con ésta, para el desarrollo de actividades comerciales, estudios con fines estadísticos y de conocimiento del cliente, para la ejecución de servicios contratados, para informarle a sus clientes sobre novedades, productos, servicios y ofertas especiales, , dentro o fuera del país </li> \r\n                                        <li><u><b>e. Manejo y usos de los datos personales diligenciados</b></u></li> \r\n                                        <li>Garden Automotores S.A. puede remitirle correos electrónicos al Usuario, una vez este diligencie esta información requerida en el formulario de recolección de datos, además luego de haber aceptado expresamente su intención de recibir información a través de este medio electrónico. </li> \r\n                                        <li><u><b>f. Cambios en la Política de Privacidad y Protección de Datos</b></u></li> \r\n                                        <li>Garden Automotores S.A. se reserva el derecho de hacer alguna modificación en las políticas de privacidad y protección de datos<br> Los cambios que afecten el manejo de datos personales se comunicarán a través de la página web y del correo electrónico diligenciado por los Usuarios. </li> \r\n                                        <li><b>3. DERECHOS RESERVADOS</b></li> \r\n                                        <li>Todos los materiales (imágenes, presentaciones, textos, animaciones, etc.) Son propiedad de Garden Automotores S.A. y de KIA MOTORS CORP, usted no puede modificar, publicar, transmitir, crear trabajos derivados o explotar de cualquier manera ningún de estos contenidos sin la expresa autorización de Garden Automotores S.A. </li> \r\n                                        <li><b>4. AVISOS LEGALES PLANES DE FINANCIACIÓN</b></li> \r\n                                        <li>Para todos los planes financieros que se publiquen mes a mes, se debe corroborar la información con un asesor comercial en cualquier vitrina del país y con la entidad financiera correspondiente. Aplican condiciones y restricciones dependiendo del plan de financiación las cuales podrá encontrar en el sección de noticias. </li> \r\n                                    </ul>', '<strong class=\"fontBl\">1. EXACTITUD DE LA INFORMACIÓN:</strong> \r\n                                    <ul class=\"pt20 pb10\"> \r\n                                        <li>Garden Automotores S.A. ha hecho todo lo posible para que la información contenida en esta web sea lo más completa posible; no obstante debido a la política internacional de KIA MOTORS CORP de mejoramiento continuo tanto en sus productos como en la información para sus clientes, todos los datos acá expuestos están siempre en constante revisión y actualización. Es por esto que Garden Automotores S.A. se reserva el derecho de modificar, cambiar, o sustituir, las especificaciones, textos, ofertas, versiones y modelos de los accesorios y de los vehículos y demás información sin previo aviso y en cualquier momento. </li> \r\n                                        <li>La información de esta web está dirigida a los compradores residentes en Paraguay, es por esto que no podemos cumplir con cualquier solicitud de fichas técnicas o información de los residentes fuera de Paraguay con respecto a versiones, disponibilidad, servicios, precios o tarifas de los vehículos y accesorios. </li> \r\n                                        <li>La información contenida en este sitio cumple con las leyes del territorio paraguayo, por esto no es posible para Garden Automotores S.A.. aplicar las normas o disposiciones de cualquier otro país para la adquisición de productos o servicios. </li> \r\n                                        <li>Las imágenes expuestas en este sitio son de referencia y algunos accesorios hacen parte de la ambientación fotográfica, razón por la cual se hace necesario que usted se acerque al concesionario o showroom más cercana para conocer las especificaciones del producto que desea adquirir. </li> \r\n                                        <li>Usted debe consultar en el showroom de su preferencia sobre la veracidad de la información suministrada en este sitio antes de realizar alguna acción. Tenga en cuenta que los precios o algunas versiones están sujetos a disponibilidad de inventario o dispuestos a cambios sin previo aviso. </li> \r\n                                        <li>Catálogo público:</li> \r\n                                        <li>Cada galería publicada en esta página web, es tomada del catálogo de producto desarrollado por la Corporación Kia Motors Internacional el cual debe ser tomado sólo como referencia. El vehículo presentado hace referencia a la versión full existente en diferentes mercados, el cual podrá tener variaciones locales en equipamiento y colores, de acuerdo a las estandarizaciones y necesidades de cada país. Se recomienda preguntar por la ficha técnica en el concesionario más cercano y verificar las especificaciones del producto que desea adquirir. </li> \r\n                                        <li><b>Precio:</b></li> \r\n                                        <li>El precio *DESDE, publicado en cada galería corresponde al precio mínimo de cada vehículo y a la versión menos equipada. Este precio debe ser tomado como referencia. Se recomienda consultar cada precio, con un asesor comercial en el concesionario Kia más cercano. </li> \r\n                                    </ul>');

-- ----------------------------
-- Table structure for preferencia_contacto
-- ----------------------------
DROP TABLE IF EXISTS `preferencia_contacto`;
CREATE TABLE `preferencia_contacto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of preferencia_contacto
-- ----------------------------
INSERT INTO `preferencia_contacto` VALUES ('1', 'Correo', '1');
INSERT INTO `preferencia_contacto` VALUES ('2', 'Celular', '1');
INSERT INTO `preferencia_contacto` VALUES ('3', 'Casa', '1');

-- ----------------------------
-- Table structure for promociones
-- ----------------------------
DROP TABLE IF EXISTS `promociones`;
CREATE TABLE `promociones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(80) DEFAULT NULL,
  `url` varchar(120) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of promociones
-- ----------------------------
INSERT INTO `promociones` VALUES ('1', 'cerato.jpg', '#', '2017-11-05 08:56:11', '1');
INSERT INTO `promociones` VALUES ('2', 'k2700.jpg', '#', '2017-11-05 08:56:36', '1');
INSERT INTO `promociones` VALUES ('3', 'sorento.jpg', '#', '2017-11-05 08:56:48', '1');
INSERT INTO `promociones` VALUES ('4', 'soul.jpg', '#', '2017-11-05 08:57:01', '1');
INSERT INTO `promociones` VALUES ('5', 'sportage.jpg', '#', '2017-11-05 08:57:17', '1');

-- ----------------------------
-- Table structure for redes
-- ----------------------------
DROP TABLE IF EXISTS `redes`;
CREATE TABLE `redes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `red` varchar(60) DEFAULT NULL,
  `url` varchar(80) DEFAULT NULL,
  `clase` varchar(30) DEFAULT NULL,
  `estado` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of redes
-- ----------------------------
INSERT INTO `redes` VALUES ('1', 'Facebook', 'https://www.facebook.com/KiaParaguay/', 'spr_facebook', '1');
INSERT INTO `redes` VALUES ('2', 'Twitter', 'https://twitter.com/KiaParaguay', 'spr_twitter', '1');
INSERT INTO `redes` VALUES ('3', 'Youtube', 'https://www.youtube.com/channel/UC6ow4QOv7vw_EspYwuWJbUg', 'spr_youtube', '1');
INSERT INTO `redes` VALUES ('4', 'Instagram', 'http://instagram.com/kiaparaguay', 'spr_instagram', '1');

-- ----------------------------
-- Table structure for respuestos_accesorios
-- ----------------------------
DROP TABLE IF EXISTS `respuestos_accesorios`;
CREATE TABLE `respuestos_accesorios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) DEFAULT NULL,
  `contenido` text,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of respuestos_accesorios
-- ----------------------------
INSERT INTO `respuestos_accesorios` VALUES ('1', 'Respaldo de la Marca', '<p>Nosotros entendemos la importancia de elegir KIA, es por eso que honramos su elección contando con la más amplia gama de repuestos originales de la marca. Nuestra política de repuestos originales le asegura contar con las piezas originales de la manera más rápida y cómoda, de manera casi inmediata.</p>\r\n<p>Contamos con la tecnología más avanzada de control de stock de repuestos, y junto con la red de servicio técnico en todo el país trabajamos para que usted sólo tenga que preocuparse de disfrutar de su KIA.</p>', '1');
INSERT INTO `respuestos_accesorios` VALUES ('2', 'Beneficios de los Repuestos Originales KIA', '<p>Garden Automotores le recomienda utilizar siempre repuestos originales, y para su mayor tranquilidad, siempre que su vehículo necesite mantenimiento o reparación visite los talleres Autorizados KIA, que cuentan con la tecnología y el personal capacitado para responder a sus exigencias. Además disfrute de los beneficios de utilizar repuestos originales que prolongan la duración de su KIA, velan por su seguridad y la de sus seres queridos, evitan daños mayores y mantienen la garantía de su vehículo.</p>', '1');
INSERT INTO `respuestos_accesorios` VALUES ('3', 'Importancia y Derechos de usar Repuestos Originales KIA', '<p>Los repuestos originales KIA están fabricados bajo las mismas normas de seguridad y calidad que las piezas originales de su vehículo. Cada vez que utiliza repuestos originales usted contribuye no solamente a la conservación del valor de su Kia sino también a conservar el medio ambiente y la seguridad durante la conducción, asegurando mayor economía del combustible y el buen desempeño de su vehículo.</p>', '1');

-- ----------------------------
-- Table structure for seccion_contacto
-- ----------------------------
DROP TABLE IF EXISTS `seccion_contacto`;
CREATE TABLE `seccion_contacto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) DEFAULT NULL,
  `email` text,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seccion_contacto
-- ----------------------------
INSERT INTO `seccion_contacto` VALUES ('1', 'Ventas', 'ssomoza@garden.com.py,dabenitez@garden.com.py,jpena@garden.com.py', '1');
INSERT INTO `seccion_contacto` VALUES ('2', 'Taller', 'adelavellova@garden.com.py,recepcionkia@garden.com.py,dhan@garden.com.py,namarilla@garden.com.py', '1');
INSERT INTO `seccion_contacto` VALUES ('3', 'Presidencia', 'darias@garden.com.py,avazquez@garden.com.py', '1');
INSERT INTO `seccion_contacto` VALUES ('4', 'Marketing', 'rcolman@garden.com.py', '1');
INSERT INTO `seccion_contacto` VALUES ('5', 'Recursos Humanos', 'seleccion@garden.com.py', '1');

-- ----------------------------
-- Table structure for servicio
-- ----------------------------
DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(120) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of servicio
-- ----------------------------

-- ----------------------------
-- Table structure for servicio_local
-- ----------------------------
DROP TABLE IF EXISTS `servicio_local`;
CREATE TABLE `servicio_local` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_servicio` int(11) unsigned DEFAULT NULL,
  `id_local` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of servicio_local
-- ----------------------------

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned NOT NULL,
  `img_banner_w` varchar(70) DEFAULT NULL,
  `img_banner_t` varchar(70) DEFAULT NULL,
  `img_banner_m` varchar(70) DEFAULT NULL,
  `img_galeria` varchar(70) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES ('1', '1', 'kia-gt-interbrand-b-1610-01-w.jpg', 'kia-gt-interbrand-b-1610-01-t.jpg', 'kia-gt-interbrand-b-1610-01-m.jpg', '1_cerato_galeria.jpg', '1');

-- ----------------------------
-- Table structure for solicitud_contacto
-- ----------------------------
DROP TABLE IF EXISTS `solicitud_contacto`;
CREATE TABLE `solicitud_contacto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_seccion_contacto` int(11) DEFAULT NULL,
  `id_preferencia_contacto` int(11) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `mensaje` text,
  `fecha` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `leido` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solicitud_contacto
-- ----------------------------
INSERT INTO `solicitud_contacto` VALUES ('1', '1', '1', 'RaÃºl', 'RamÃ­rez', 'hola@hola.com', '0976921801', '601606', 'Hola, esto es un mensaje de prueba. AcciÃ³n', '2017-11-02 10:46:39', '0');
INSERT INTO `solicitud_contacto` VALUES ('2', '2', '1', 'Raúl', 'Ramírez', 'hola@hola.com', '0976921801', '', 'Hola, acción. Eñe', '2017-11-02 10:48:14', '0');
INSERT INTO `solicitud_contacto` VALUES ('3', null, null, 'raul', '', 'hola@hola.com', null, '232323', '', '2017-11-02 15:49:16', '0');

-- ----------------------------
-- Table structure for solicitud_cotizador
-- ----------------------------
DROP TABLE IF EXISTS `solicitud_cotizador`;
CREATE TABLE `solicitud_cotizador` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `modelo` varchar(60) DEFAULT NULL,
  `version` varchar(60) DEFAULT NULL,
  `precio` decimal(20,3) DEFAULT NULL,
  `entrega` decimal(20,3) DEFAULT NULL,
  `cuotas` decimal(20,3) DEFAULT NULL,
  `cantidad` int(4) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `leido` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solicitud_cotizador
-- ----------------------------

-- ----------------------------
-- Table structure for solicitud_testdrive
-- ----------------------------
DROP TABLE IF EXISTS `solicitud_testdrive`;
CREATE TABLE `solicitud_testdrive` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `nombre` varchar(180) DEFAULT NULL,
  `ci` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `ciudad` varchar(60) DEFAULT NULL,
  `direccion` varchar(120) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `leido` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solicitud_testdrive
-- ----------------------------
INSERT INTO `solicitud_testdrive` VALUES ('1', '1', 'Raúl Ramírez', '3749219', '601606', 'hola@hola.com', 'Asunción', 'Sarací 588', '2017-11-02 16:08:35', '0');

-- ----------------------------
-- Table structure for solicitud_turno
-- ----------------------------
DROP TABLE IF EXISTS `solicitud_turno`;
CREATE TABLE `solicitud_turno` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tipo_servicio` int(11) unsigned DEFAULT NULL,
  `nombre_completo` varchar(120) DEFAULT NULL,
  `ci` varchar(30) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `barrio` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `kilometraje` int(8) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `leido` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solicitud_turno
-- ----------------------------
INSERT INTO `solicitud_turno` VALUES ('1', '1', 'RaÃºl RamÃ­rez', '3749219', '0976921801', '601606', 'Saravi', 'Asuncion', 'Recoleta', 'Sorento', '50000', '2017-11-04 08:22:43', '0');
INSERT INTO `solicitud_turno` VALUES ('2', '2', 'Raúl Ramírez', '3749219', '0976921801', '601606', 'Saravi', 'Asuncion', 'Recoleta', 'Sorento', '55555', '2017-11-04 08:25:53', '0');

-- ----------------------------
-- Table structure for sostenibilidad
-- ----------------------------
DROP TABLE IF EXISTS `sostenibilidad`;
CREATE TABLE `sostenibilidad` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) DEFAULT NULL,
  `archivo` varchar(120) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sostenibilidad
-- ----------------------------
INSERT INTO `sostenibilidad` VALUES ('1', 'Informe de sustentabilidad 2009', '2009+Sustainability+Magazine+Move.pdf', '2009-03-18 00:00:00', '1');
INSERT INTO `sostenibilidad` VALUES ('2', 'Informe de sustentabilidad 2010', '2010+Sustainability+Magazine+Move.pdf', '2010-03-23 00:00:00', '1');
INSERT INTO `sostenibilidad` VALUES ('3', 'Informe de sustentabilidad 2011', '2011+Sustainability+Magazine+Move.pdf', '2011-03-18 00:00:00', '1');
INSERT INTO `sostenibilidad` VALUES ('4', 'Informe de sustentabilidad 2012', '2012+Sustainability+Magazine+Move.pdf', '2012-03-22 00:00:00', '1');
INSERT INTO `sostenibilidad` VALUES ('5', 'Informe de sustentabilidad 2013', '2013+Sustainability+Magazine+Move.pdf', '2013-03-18 00:00:00', '1');
INSERT INTO `sostenibilidad` VALUES ('6', 'Informe de sustentabilidad 2014', '2014+Sustainability+Magazine+Move.pdf', '2014-12-05 00:00:00', '1');
INSERT INTO `sostenibilidad` VALUES ('7', 'Informe de sustentabilidad 2015', '2015+Sustainability+Magazine+Move.pdf', '2015-04-04 00:00:00', '1');
INSERT INTO `sostenibilidad` VALUES ('8', 'Informe de Sustentabilidad 2016', '2016+Sustainability+Magazine+Move.pdf', '2016-05-25 00:00:00', '1');

-- ----------------------------
-- Table structure for sucursal
-- ----------------------------
DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE `sucursal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sucursal` varchar(60) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `direccion` varchar(160) DEFAULT NULL,
  `horario_atencion` varchar(255) DEFAULT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `casa_central` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucursal
-- ----------------------------
INSERT INTO `sucursal` VALUES ('1', 'Asunción: Casa Central:', '(021) 237 – 7090', 'Rca. Argentina esq. Isaac Kostianovsky', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-25.306564', '-57.583621', '1', '1');
INSERT INTO `sucursal` VALUES ('2', 'Asunción: Choferes del Chaco:', '(021) 238 9300', 'Avda. Choferes del Chaco esq. Capitan Pedro Carpinelli', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-25.297172', '-57.592678', '0', '1');
INSERT INTO `sucursal` VALUES ('3', 'Centro de Servicios y Repuestos KIA:', '(021) 237 – 7095', 'Avda. 	Fernando de la Mora esq. De la Victoria.', 'Lunes a Viernes 07:30 a 18:00, Sábados 07:30 a 12:00', '-25.333892', '-57.590092', '0', '1');
INSERT INTO `sucursal` VALUES ('4', 'División Multimarcas', '(021) 237 – 7110', 'Avda. Fernando de la Mora esq. Ybapuru', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-25.332820', '-57.590859', '0', '1');
INSERT INTO `sucursal` VALUES ('5', 'Ciudad del Este:', '(021) 237 6910', ' Ruta Internacional Nro. 7, km 6,5.', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-25.500003', '-54.657923', '0', '1');
INSERT INTO `sucursal` VALUES ('6', 'Encarnación:', ' (021) 238 9500 | (071) 206702', 'Avda. Caballero esq. Artigas.', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-27.329225', '-55.870781', '0', '1');
INSERT INTO `sucursal` VALUES ('7', 'Caaguazu:', '(021) 338 6339', 'Ruta Internacional Nº 7, José Gaspar Rodríguez de Francia Km 182 (Barrio Industrial)', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-25.460485', '-55.995753', '0', '1');

-- ----------------------------
-- Table structure for talleres
-- ----------------------------
DROP TABLE IF EXISTS `talleres`;
CREATE TABLE `talleres` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `taller` varchar(80) DEFAULT NULL,
  `direccion` varchar(120) DEFAULT NULL,
  `ciudad` varchar(40) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of talleres
-- ----------------------------
INSERT INTO `talleres` VALUES ('1', 'Centro de Servicios y Repuestos KIA', 'Av. Fernando de la Mora y De la Victoria.', 'Asunción', '(021) 237 7095', 'lmiranda@garden.com.py', '1');
INSERT INTO `talleres` VALUES ('2', 'NS Servicios Multimarcas', 'Av. Felix Bogado 2045 c/ 22 Proyectadas.', 'Asunción', '(021) 333 272', 'ns_multimarcas@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('3', 'Juan K Servicios y Repuestos', 'Ruta Nro. 6 y Jazmín del Paraguay, Km 3.', 'Encarnación', '(595 71) 203 251', 'Juank@itacom.com.py', '1');
INSERT INTO `talleres` VALUES ('4', 'Taller GT', 'Capellan Molas 600', 'Encarnación', '(595 71) 200 816', 'hugotomas555@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('5', 'Garden  S.A.', 'Av. San Blas e/ O’huggins, Km. 6,2.', 'Ciudad del Este', '(595 21) 237 6910', 'fcrosa@garden.com.py', '1');
INSERT INTO `talleres` VALUES ('6', 'Cristian Paats y Cia.', 'Carlos Antonio Lopez c/ Jose II Decoud', 'Coronel Oviedo', '(595 521) 202 345', 'cristianpaatsycia@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('7', 'Leiva Automotores S.R.L', 'Ruta Internacional Nro. 7, Km. 178', 'Caaguazú', '(535 522) 43 610', 'florens90@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('8', 'Taller Mk Autoservice', 'Colonia Menno, C.C. 883', 'Loma Plata', '(595 4922) 52 726', 'mkautoservice17@gmail.com', '1');
INSERT INTO `talleres` VALUES ('9', 'Taller Motormack SRL', 'Avenida Central', 'Loma Plata', '(595 4922) 52 351', 'motormack@click.com.py', '1');
INSERT INTO `talleres` VALUES ('10', 'Norte Autos', 'Avda. Tte. Herreros esq. Benjamin Aceval', 'Pedro Juan Caballero', '595 336) 273 450', null, '1');
INSERT INTO `talleres` VALUES ('11', 'Taller Albert Neufeld', 'Calle Principal Hindenburg e/ Palo Santo', 'Filadelfia', '(595 4914) 32 521', null, '1');
INSERT INTO `talleres` VALUES ('12', 'Taller Auto Latina', 'Calle Industrial 174-E c/ O. Miller', 'Filadelfia', '(595 4914) 32 521', 'tallerautolatina@gmail.com', '1');
INSERT INTO `talleres` VALUES ('13', 'Mecanica Ruschel', 'Carlos Antonio Lopez y Juan E O’leary', 'Hohenau', '(595 775) 232 042', 'oscar-ruschel@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('14', 'Juan K Servicios y Repuestos', 'Eusebio Ayala c/ Tte. Fariña', 'Hohenau', '(595 775) 232 042', 'juank.colonias@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('15', 'Car Center', 'Ruta Internacional N° 7, km. 212', 'Campo 9', '(595 528) 222 988', 'carcentercampo9@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('16', 'Julio Mueller', 'Supercarretera a Salto del Guaira, km. 2.5', 'Hernandarias', '(595 0631) 22 710', 'mueller.julio@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('17', 'Parana Diesel', 'San Roque González de Santa Cruz c/ Perpetuo Socorro', 'Colonia Katuete', '(595 0471) 234 340', null, '1');
INSERT INTO `talleres` VALUES ('18', 'Mecanica y Chaperia Do Kady', 'Fraccion Alexandrino, Ruta 6ta. Salida a 14 de Mayo', 'Santa Rita', '(595 0471) 234 340', null, '1');
INSERT INTO `talleres` VALUES ('19', 'Taller H.P. Peters', 'Avenida Industrial', 'Colonia Neuland (Chaco)', '(595 0493) 240 656', null, '1');

-- ----------------------------
-- Table structure for tipo_servicio
-- ----------------------------
DROP TABLE IF EXISTS `tipo_servicio`;
CREATE TABLE `tipo_servicio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_servicio
-- ----------------------------
INSERT INTO `tipo_servicio` VALUES ('1', 'Service en Casa', '1');
INSERT INTO `tipo_servicio` VALUES ('2', 'Service en Taller Kia', '1');

-- ----------------------------
-- Table structure for tipo_vehiculo
-- ----------------------------
DROP TABLE IF EXISTS `tipo_vehiculo`;
CREATE TABLE `tipo_vehiculo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `orden` int(2) unsigned DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_vehiculo
-- ----------------------------
INSERT INTO `tipo_vehiculo` VALUES ('1', 'Automóviles', '1', '1');
INSERT INTO `tipo_vehiculo` VALUES ('2', 'Familiares', '2', '1');
INSERT INTO `tipo_vehiculo` VALUES ('3', 'Crossover', '3', '1');
INSERT INTO `tipo_vehiculo` VALUES ('4', 'Suv', '4', '1');
INSERT INTO `tipo_vehiculo` VALUES ('5', 'Comerciales', '5', '1');

-- ----------------------------
-- Table structure for turno
-- ----------------------------
DROP TABLE IF EXISTS `turno`;
CREATE TABLE `turno` (
  `id` int(11) NOT NULL,
  `img` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of turno
-- ----------------------------
INSERT INTO `turno` VALUES ('1', 'reserva_turnos.jpg');

-- ----------------------------
-- Table structure for vida_0
-- ----------------------------
DROP TABLE IF EXISTS `vida_0`;
CREATE TABLE `vida_0` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(80) DEFAULT NULL,
  `contenido` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vida_0
-- ----------------------------
INSERT INTO `vida_0` VALUES ('1', 'vida0-2017.jpg', null);
SET FOREIGN_KEY_CHECKS=1;
