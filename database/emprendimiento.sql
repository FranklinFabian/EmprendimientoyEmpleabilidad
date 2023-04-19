-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.22-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para emprendimiento
CREATE DATABASE IF NOT EXISTS `emprendimiento` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `emprendimiento`;

-- Volcando estructura para tabla emprendimiento.autodiagnostico
CREATE TABLE IF NOT EXISTS `autodiagnostico` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_actitud_abierta` bigint(20) DEFAULT NULL,
  `id_ayuda` bigint(20) DEFAULT NULL,
  `id_confianza` bigint(20) DEFAULT NULL,
  `id_periodo_covid` bigint(20) DEFAULT NULL,
  `id_motivacion` bigint(20) DEFAULT NULL,
  `id_perfeccionista` bigint(20) DEFAULT NULL,
  `id_considero_timido` bigint(20) DEFAULT NULL,
  `id_afronto_problemas` bigint(20) DEFAULT NULL,
  `id_asumir_retos` bigint(20) DEFAULT NULL,
  `id_autonomia_trabajo` bigint(20) DEFAULT NULL,
  `id_era_digital` bigint(20) DEFAULT NULL,
  `id_tiempo_libre` bigint(20) DEFAULT NULL,
  `id_conflictos_personales` bigint(20) DEFAULT NULL,
  `id_expresar_malestar` bigint(20) DEFAULT NULL,
  `id_impulsos_emocionales` bigint(20) DEFAULT NULL,
  `id_tolerar_stress` bigint(20) DEFAULT NULL,
  `id_satisfecho` bigint(20) DEFAULT NULL,
  `id_asignar_tareas` bigint(20) DEFAULT NULL,
  `id_trabajo_equipo` bigint(20) DEFAULT NULL,
  `id_administrar_recursos` bigint(20) DEFAULT NULL,
  `id_proyectarme` bigint(20) DEFAULT NULL,
  `id_conseguir_metas` bigint(20) DEFAULT NULL,
  `id_relacion_proveedores` bigint(20) DEFAULT NULL,
  `id_relacion_clientes` bigint(20) DEFAULT NULL,
  `id_adaptar_negocio` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico1_idx` (`id_actitud_abierta`),
  KEY `fk_autodiagnostico_users1_idx` (`id_usuario`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico2_idx` (`id_ayuda`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico3_idx` (`id_confianza`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico4_idx` (`id_periodo_covid`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico5_idx` (`id_motivacion`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico6_idx` (`id_perfeccionista`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico7_idx` (`id_considero_timido`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico8_idx` (`id_afronto_problemas`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico9_idx` (`id_asumir_retos`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico10_idx` (`id_autonomia_trabajo`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico11_idx` (`id_era_digital`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico12_idx` (`id_tiempo_libre`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico13_idx` (`id_conflictos_personales`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico14_idx` (`id_expresar_malestar`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico15_idx` (`id_impulsos_emocionales`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico16_idx` (`id_tolerar_stress`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico17_idx` (`id_satisfecho`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico18_idx` (`id_asignar_tareas`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico19_idx` (`id_trabajo_equipo`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico20_idx` (`id_administrar_recursos`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico21_idx` (`id_proyectarme`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico22_idx` (`id_conseguir_metas`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico23_idx` (`id_relacion_proveedores`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico24_idx` (`id_relacion_clientes`),
  KEY `fk_autodiagnostico_catalogo_autodiagnostico25_idx` (`id_adaptar_negocio`),
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico1` FOREIGN KEY (`id_actitud_abierta`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico10` FOREIGN KEY (`id_autonomia_trabajo`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico11` FOREIGN KEY (`id_era_digital`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico12` FOREIGN KEY (`id_tiempo_libre`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico13` FOREIGN KEY (`id_conflictos_personales`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico14` FOREIGN KEY (`id_expresar_malestar`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico15` FOREIGN KEY (`id_impulsos_emocionales`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico16` FOREIGN KEY (`id_tolerar_stress`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico17` FOREIGN KEY (`id_satisfecho`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico18` FOREIGN KEY (`id_asignar_tareas`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico19` FOREIGN KEY (`id_trabajo_equipo`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico2` FOREIGN KEY (`id_ayuda`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico20` FOREIGN KEY (`id_administrar_recursos`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico21` FOREIGN KEY (`id_proyectarme`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico22` FOREIGN KEY (`id_conseguir_metas`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico23` FOREIGN KEY (`id_relacion_proveedores`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico24` FOREIGN KEY (`id_relacion_clientes`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico25` FOREIGN KEY (`id_adaptar_negocio`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico3` FOREIGN KEY (`id_confianza`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico4` FOREIGN KEY (`id_periodo_covid`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico5` FOREIGN KEY (`id_motivacion`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico6` FOREIGN KEY (`id_perfeccionista`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico7` FOREIGN KEY (`id_considero_timido`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico8` FOREIGN KEY (`id_afronto_problemas`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_catalogo_autodiagnostico9` FOREIGN KEY (`id_asumir_retos`) REFERENCES `catalogo_autodiagnostico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_autodiagnostico_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.autodiagnostico: ~5 rows (aproximadamente)
DELETE FROM `autodiagnostico`;
/*!40000 ALTER TABLE `autodiagnostico` DISABLE KEYS */;
INSERT INTO `autodiagnostico` (`id`, `id_usuario`, `fecha`, `id_actitud_abierta`, `id_ayuda`, `id_confianza`, `id_periodo_covid`, `id_motivacion`, `id_perfeccionista`, `id_considero_timido`, `id_afronto_problemas`, `id_asumir_retos`, `id_autonomia_trabajo`, `id_era_digital`, `id_tiempo_libre`, `id_conflictos_personales`, `id_expresar_malestar`, `id_impulsos_emocionales`, `id_tolerar_stress`, `id_satisfecho`, `id_asignar_tareas`, `id_trabajo_equipo`, `id_administrar_recursos`, `id_proyectarme`, `id_conseguir_metas`, `id_relacion_proveedores`, `id_relacion_clientes`, `id_adaptar_negocio`, `created_at`, `updated_at`) VALUES
	(2, 1, '2022-01-16 10:18:12', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-16 22:18:12', '2022-01-16 22:18:12'),
	(3, 1, '2022-01-21 09:21:18', 3, 3, 1, 4, 3, 4, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 21:21:18', '2022-01-21 21:21:18'),
	(4, 1, '2022-01-21 09:21:43', 4, 3, 2, 4, 2, 4, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 21:21:43', '2022-01-21 21:21:43'),
	(5, 1, '2022-01-21 09:24:36', 4, 3, 3, 3, 3, 2, 3, 3, 2, 3, 1, 4, 2, 4, 2, 3, 1, 1, 3, 2, 2, 3, 2, 3, 3, '2022-01-21 21:24:36', '2022-01-23 18:08:05');
/*!40000 ALTER TABLE `autodiagnostico` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.canva
CREATE TABLE IF NOT EXISTS `canva` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `id_negocio` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `publico_objetivo` text DEFAULT NULL,
  `propuesta_valor` text DEFAULT NULL,
  `canal` text DEFAULT NULL,
  `relacion_cliente` text DEFAULT NULL,
  `fuente_ingreso` text DEFAULT NULL,
  `recurso_clave` text DEFAULT NULL,
  `actividad_clave` text DEFAULT NULL,
  `socio_clave` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_canva_users1_idx` (`id_usuario`),
  KEY `fk_canva_negocio1_idx` (`id_negocio`),
  CONSTRAINT `fk_canva_negocio1` FOREIGN KEY (`id_negocio`) REFERENCES `negocio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_canva_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.canva: ~1 rows (aproximadamente)
DELETE FROM `canva`;
/*!40000 ALTER TABLE `canva` DISABLE KEYS */;
INSERT INTO `canva` (`id`, `id_usuario`, `id_negocio`, `fecha`, `publico_objetivo`, `propuesta_valor`, `canal`, `relacion_cliente`, `fuente_ingreso`, `recurso_clave`, `actividad_clave`, `socio_clave`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, '2022-01-30 01:21:24', 'gfdg', 'gdfg', 'gfdg', 'gdfg', 'gfdg', 'gdfgdf', 'gfdgdf', 'fgdsg', '2022-01-30 13:21:24', '2022-01-30 13:21:24');
/*!40000 ALTER TABLE `canva` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.carta
CREATE TABLE IF NOT EXISTS `carta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `institucion` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `referencia` varchar(255) DEFAULT NULL,
  `parrafo_motivo` text DEFAULT NULL,
  `parrafo_puesto` text DEFAULT NULL,
  `parrafo_interes` text DEFAULT NULL,
  `parrafo_despedida` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_carta_users1_idx` (`id_usuario`),
  CONSTRAINT `fk_carta_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.carta: ~0 rows (aproximadamente)
DELETE FROM `carta`;
/*!40000 ALTER TABLE `carta` DISABLE KEYS */;
INSERT INTO `carta` (`id`, `id_usuario`, `fecha`, `institucion`, `nombre`, `cargo`, `referencia`, `parrafo_motivo`, `parrafo_puesto`, `parrafo_interes`, `parrafo_despedida`, `created_at`, `updated_at`) VALUES
	(1, 1, '2022-01-26 10:18:20', 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe', 'asd xx', 'asd xx', 'asd xx', 'asd xx', '2022-01-22 21:18:41', '2022-01-26 22:18:20');
/*!40000 ALTER TABLE `carta` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_apoyo
CREATE TABLE IF NOT EXISTS `catalogo_apoyo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_apoyo: ~3 rows (aproximadamente)
DELETE FROM `catalogo_apoyo`;
/*!40000 ALTER TABLE `catalogo_apoyo` DISABLE KEYS */;
INSERT INTO `catalogo_apoyo` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Suficiente', 'Suficiente', '2022-01-29 16:03:17', '2022-01-29 16:03:17'),
	(2, 'Un poco', 'Un poco', '2022-01-29 16:03:31', '2022-01-29 16:03:32'),
	(3, 'Nada', 'Nada', '2022-01-29 16:03:37', '2022-01-29 16:03:38');
/*!40000 ALTER TABLE `catalogo_apoyo` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_autodiagnostico
CREATE TABLE IF NOT EXISTS `catalogo_autodiagnostico` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_autodiagnostico: ~4 rows (aproximadamente)
DELETE FROM `catalogo_autodiagnostico`;
/*!40000 ALTER TABLE `catalogo_autodiagnostico` DISABLE KEYS */;
INSERT INTO `catalogo_autodiagnostico` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Si', 'Si', '2022-01-13 20:19:23', '2022-01-13 20:19:23'),
	(2, 'A Veces', 'A Veces', '2022-01-13 20:19:31', '2022-01-13 20:19:31'),
	(3, 'Muy Poco', 'Muy Poco', '2022-01-13 20:19:39', '2022-01-13 20:19:40'),
	(4, 'No', 'No', '2022-01-13 20:19:44', '2022-01-13 20:19:44');
/*!40000 ALTER TABLE `catalogo_autodiagnostico` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_cantidad_hijos
CREATE TABLE IF NOT EXISTS `catalogo_cantidad_hijos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_cantidad_hijos: ~0 rows (aproximadamente)
DELETE FROM `catalogo_cantidad_hijos`;
/*!40000 ALTER TABLE `catalogo_cantidad_hijos` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalogo_cantidad_hijos` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_conocer_proceso
CREATE TABLE IF NOT EXISTS `catalogo_conocer_proceso` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_conocer_proceso: ~4 rows (aproximadamente)
DELETE FROM `catalogo_conocer_proceso`;
/*!40000 ALTER TABLE `catalogo_conocer_proceso` DISABLE KEYS */;
INSERT INTO `catalogo_conocer_proceso` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Muy Bien', 'Muy Bien', '2022-01-29 16:00:27', '2022-01-29 16:00:27'),
	(2, 'Suficiente', 'Suficiente', '2022-01-29 16:00:37', '2022-01-29 16:00:37'),
	(3, 'Un poco', 'Un poco', '2022-01-29 16:00:47', '2022-01-29 16:00:47'),
	(4, 'Nada', 'Nada', '2022-01-29 16:00:53', '2022-01-29 16:00:53');
/*!40000 ALTER TABLE `catalogo_conocer_proceso` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_costoso
CREATE TABLE IF NOT EXISTS `catalogo_costoso` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_costoso: ~4 rows (aproximadamente)
DELETE FROM `catalogo_costoso`;
/*!40000 ALTER TABLE `catalogo_costoso` DISABLE KEYS */;
INSERT INTO `catalogo_costoso` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Un Poco', 'Un Poco', '2022-01-29 15:49:13', '2022-01-29 15:49:14'),
	(2, 'Mas o Menos', 'Mas o Menos', '2022-01-29 15:49:31', '2022-01-29 15:49:31'),
	(3, 'Muy Costoso', 'Muy Costos', '2022-01-29 15:49:42', '2022-01-29 15:49:43'),
	(4, 'No se', 'No se', '2022-01-29 15:49:52', '2022-01-29 15:49:52');
/*!40000 ALTER TABLE `catalogo_costoso` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_dinero
CREATE TABLE IF NOT EXISTS `catalogo_dinero` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_dinero: ~4 rows (aproximadamente)
DELETE FROM `catalogo_dinero`;
/*!40000 ALTER TABLE `catalogo_dinero` DISABLE KEYS */;
INSERT INTO `catalogo_dinero` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Suficiente', 'Suficiente', '2022-01-29 16:01:44', '2022-01-29 16:01:45'),
	(2, 'Poco', 'Poco', '2022-01-29 16:01:55', '2022-01-29 16:01:55'),
	(3, 'Muy poco', 'Muy poco', '2022-01-29 16:02:10', '2022-01-29 16:02:11'),
	(4, 'Nada', 'Nada', '2022-01-29 16:02:16', '2022-01-29 16:02:17');
/*!40000 ALTER TABLE `catalogo_dinero` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_estado
CREATE TABLE IF NOT EXISTS `catalogo_estado` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_estado: ~2 rows (aproximadamente)
DELETE FROM `catalogo_estado`;
/*!40000 ALTER TABLE `catalogo_estado` DISABLE KEYS */;
INSERT INTO `catalogo_estado` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Activo', '2021-08-05 14:27:24', '2021-08-05 14:27:24'),
	(2, 'Inactivo', '2021-08-05 14:28:11', '2021-08-05 14:28:11');
/*!40000 ALTER TABLE `catalogo_estado` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_estado_civil
CREATE TABLE IF NOT EXISTS `catalogo_estado_civil` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_estado_civil: ~2 rows (aproximadamente)
DELETE FROM `catalogo_estado_civil`;
/*!40000 ALTER TABLE `catalogo_estado_civil` DISABLE KEYS */;
INSERT INTO `catalogo_estado_civil` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Casado', 'Casado', '2022-01-21 21:16:33', '2022-01-21 21:16:33'),
	(2, 'Soltero', 'Soltero', '2022-01-21 21:16:38', '2022-01-21 21:16:39');
/*!40000 ALTER TABLE `catalogo_estado_civil` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_experiencia
CREATE TABLE IF NOT EXISTS `catalogo_experiencia` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_experiencia: ~0 rows (aproximadamente)
DELETE FROM `catalogo_experiencia`;
/*!40000 ALTER TABLE `catalogo_experiencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalogo_experiencia` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_familia
CREATE TABLE IF NOT EXISTS `catalogo_familia` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_familia: ~6 rows (aproximadamente)
DELETE FROM `catalogo_familia`;
/*!40000 ALTER TABLE `catalogo_familia` DISABLE KEYS */;
INSERT INTO `catalogo_familia` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, '0', '0', '2022-01-22 12:36:28', '2022-01-22 12:36:28'),
	(2, '1', '1', '2022-01-22 12:38:29', '2022-01-22 12:38:29'),
	(3, '2', '2', '2022-01-22 12:38:33', '2022-01-22 12:38:34'),
	(4, '3', '3', '2022-01-22 12:38:37', '2022-01-22 12:38:38'),
	(5, '4', '4', '2022-01-22 12:38:40', '2022-01-22 12:38:41'),
	(6, '5 o más', '5 o más', '2022-01-22 12:38:49', '2022-01-22 12:38:49');
/*!40000 ALTER TABLE `catalogo_familia` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_gusta_idea
CREATE TABLE IF NOT EXISTS `catalogo_gusta_idea` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_gusta_idea: ~2 rows (aproximadamente)
DELETE FROM `catalogo_gusta_idea`;
/*!40000 ALTER TABLE `catalogo_gusta_idea` DISABLE KEYS */;
INSERT INTO `catalogo_gusta_idea` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Mucho', 'Mucho', '2022-01-29 15:59:34', '2022-01-29 15:59:35'),
	(2, 'Poco', 'Poco', '2022-01-29 15:59:43', '2022-01-29 15:59:43'),
	(3, 'Nada', 'Nada', '2022-01-29 15:59:49', '2022-01-29 15:59:50');
/*!40000 ALTER TABLE `catalogo_gusta_idea` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_hacer_idea
CREATE TABLE IF NOT EXISTS `catalogo_hacer_idea` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_hacer_idea: ~3 rows (aproximadamente)
DELETE FROM `catalogo_hacer_idea`;
/*!40000 ALTER TABLE `catalogo_hacer_idea` DISABLE KEYS */;
INSERT INTO `catalogo_hacer_idea` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Facil', 'Facil', '2022-01-29 15:55:11', '2022-01-29 15:55:12'),
	(2, 'No tan facil', 'No tan facil', '2022-01-29 15:55:12', '2022-01-29 15:55:13'),
	(3, 'Dificil', 'Dificil', '2022-01-29 15:55:13', '2022-01-29 15:55:14'),
	(4, 'No se', 'No se', '2022-01-29 15:55:14', '2022-01-29 15:55:14');
/*!40000 ALTER TABLE `catalogo_hacer_idea` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_horario
CREATE TABLE IF NOT EXISTS `catalogo_horario` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_horario: ~0 rows (aproximadamente)
DELETE FROM `catalogo_horario`;
/*!40000 ALTER TABLE `catalogo_horario` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalogo_horario` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_idea_negocio
CREATE TABLE IF NOT EXISTS `catalogo_idea_negocio` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_idea_negocio: ~2 rows (aproximadamente)
DELETE FROM `catalogo_idea_negocio`;
/*!40000 ALTER TABLE `catalogo_idea_negocio` DISABLE KEYS */;
INSERT INTO `catalogo_idea_negocio` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Produccion', 'Produccion', '2022-01-29 15:16:55', '2022-01-29 15:16:56'),
	(2, 'Comercializacion', 'Comercializacion', '2022-01-29 15:17:08', '2022-01-29 15:17:09'),
	(3, 'Servicios', 'Servicios', '2022-01-29 15:17:20', '2022-01-29 15:17:20');
/*!40000 ALTER TABLE `catalogo_idea_negocio` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_nivel_instruccion
CREATE TABLE IF NOT EXISTS `catalogo_nivel_instruccion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_nivel_instruccion: ~4 rows (aproximadamente)
DELETE FROM `catalogo_nivel_instruccion`;
/*!40000 ALTER TABLE `catalogo_nivel_instruccion` DISABLE KEYS */;
INSERT INTO `catalogo_nivel_instruccion` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Primaria', 'Primaria', '2022-01-22 11:38:15', '2022-01-22 11:38:16'),
	(2, 'Secundaria', 'Secundaria', '2022-01-22 11:38:23', '2022-01-22 11:38:23'),
	(3, 'Educación Superior', 'Educación Superior', '2022-01-22 11:38:36', '2022-01-22 11:38:36'),
	(4, 'Otro', 'Otro', '2022-01-22 11:38:44', '2022-01-22 11:38:45');
/*!40000 ALTER TABLE `catalogo_nivel_instruccion` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_proveedores_compradores
CREATE TABLE IF NOT EXISTS `catalogo_proveedores_compradores` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_proveedores_compradores: ~2 rows (aproximadamente)
DELETE FROM `catalogo_proveedores_compradores`;
/*!40000 ALTER TABLE `catalogo_proveedores_compradores` DISABLE KEYS */;
INSERT INTO `catalogo_proveedores_compradores` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Si, muy bien', 'Si, muy bien', '2022-01-29 16:04:26', '2022-01-29 16:04:26'),
	(2, 'Si, pero no lo suficiente', 'Si, pero no lo suficiente', '2022-01-29 16:04:27', '2022-01-29 16:04:28'),
	(3, 'No', 'No', '2022-01-29 16:04:29', '2022-01-29 16:04:29');
/*!40000 ALTER TABLE `catalogo_proveedores_compradores` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_tipo_referencia
CREATE TABLE IF NOT EXISTS `catalogo_tipo_referencia` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_tipo_referencia: ~2 rows (aproximadamente)
DELETE FROM `catalogo_tipo_referencia`;
/*!40000 ALTER TABLE `catalogo_tipo_referencia` DISABLE KEYS */;
INSERT INTO `catalogo_tipo_referencia` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Laboral', 'Laboral', '2022-01-25 00:35:24', '2022-01-25 00:35:24'),
	(2, 'Personal', 'Personal', '2022-01-25 00:35:37', '2022-01-25 00:35:38');
/*!40000 ALTER TABLE `catalogo_tipo_referencia` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_tipo_vivienda
CREATE TABLE IF NOT EXISTS `catalogo_tipo_vivienda` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_tipo_vivienda: ~0 rows (aproximadamente)
DELETE FROM `catalogo_tipo_vivienda`;
/*!40000 ALTER TABLE `catalogo_tipo_vivienda` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalogo_tipo_vivienda` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.catalogo_vivienda
CREATE TABLE IF NOT EXISTS `catalogo_vivienda` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.catalogo_vivienda: ~0 rows (aproximadamente)
DELETE FROM `catalogo_vivienda`;
/*!40000 ALTER TABLE `catalogo_vivienda` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalogo_vivienda` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `rango_edad` varchar(255) DEFAULT NULL,
  `sexo` tinyint(4) DEFAULT NULL,
  `nivel_social` tinyint(4) DEFAULT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clientes_users1_idx` (`id_usuario`),
  CONSTRAINT `fk_clientes_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.cliente: ~0 rows (aproximadamente)
DELETE FROM `cliente`;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id`, `id_usuario`, `fecha`, `nombre`, `rango_edad`, `sexo`, `nivel_social`, `ubicacion`, `created_at`, `updated_at`) VALUES
	(1, 1, '2022-01-29 05:32:01', 'dasd', 'dasd', 2, 2, 'ddd', '2022-01-27 22:33:06', '2022-01-29 17:32:01');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.competencia
CREATE TABLE IF NOT EXISTS `competencia` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_curriculo` bigint(20) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_competencia_curriculum1_idx` (`id_curriculo`),
  CONSTRAINT `fk_competencia_curriculum1` FOREIGN KEY (`id_curriculo`) REFERENCES `curriculo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.competencia: ~2 rows (aproximadamente)
DELETE FROM `competencia`;
/*!40000 ALTER TABLE `competencia` DISABLE KEYS */;
INSERT INTO `competencia` (`id`, `id_curriculo`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 9, 'asdasdasdasd', '2022-01-24 20:29:52', '2022-01-24 20:29:52'),
	(2, 9, 'asdasdasd', '2022-01-24 20:29:59', '2022-01-24 20:29:59');
/*!40000 ALTER TABLE `competencia` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.complementaria
CREATE TABLE IF NOT EXISTS `complementaria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_curriculo` bigint(20) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_formacion_curriculum2_idx` (`id_curriculo`),
  CONSTRAINT `fk_formacion_curriculum2` FOREIGN KEY (`id_curriculo`) REFERENCES `curriculo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='		';

-- Volcando datos para la tabla emprendimiento.complementaria: ~12 rows (aproximadamente)
DELETE FROM `complementaria`;
/*!40000 ALTER TABLE `complementaria` DISABLE KEYS */;
INSERT INTO `complementaria` (`id`, `id_curriculo`, `descripcion`, `created_at`, `updated_at`) VALUES
	(2, 9, 'asdasdasdasd', '2022-01-23 17:07:48', '2022-01-23 17:07:48'),
	(4, 9, 'formacion complementria', '2022-01-25 00:08:49', '2022-01-25 00:08:49'),
	(5, 9, '1', '2022-01-25 00:09:17', '2022-01-25 00:09:17'),
	(6, 9, '2', '2022-01-25 00:09:21', '2022-01-25 00:09:21'),
	(7, 9, '3', '2022-01-25 00:09:25', '2022-01-25 00:09:25'),
	(8, 9, '4', '2022-01-25 00:09:29', '2022-01-25 00:09:29'),
	(10, 9, '5', '2022-01-25 00:09:42', '2022-01-25 00:09:42'),
	(11, 9, '6', '2022-01-25 00:09:46', '2022-01-25 00:09:46'),
	(12, 9, '7', '2022-01-25 00:09:50', '2022-01-25 00:09:50'),
	(13, 9, '8', '2022-01-25 00:09:56', '2022-01-25 00:09:56'),
	(14, 9, '9', '2022-01-25 00:10:09', '2022-01-25 00:10:09'),
	(15, 9, '10', '2022-01-25 00:10:17', '2022-01-25 00:10:17');
/*!40000 ALTER TABLE `complementaria` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.curriculo
CREATE TABLE IF NOT EXISTS `curriculo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_curriculo_users1_idx` (`id_usuario`),
  CONSTRAINT `fk_curriculo_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.curriculo: ~0 rows (aproximadamente)
DELETE FROM `curriculo`;
/*!40000 ALTER TABLE `curriculo` DISABLE KEYS */;
INSERT INTO `curriculo` (`id`, `id_usuario`, `fecha`, `descripcion`, `created_at`, `updated_at`) VALUES
	(9, 1, '2022-01-22 10:19:53', 'asdasdasdasd', '2022-01-22 10:19:53', '2022-01-22 10:19:53');
/*!40000 ALTER TABLE `curriculo` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.elevador
CREATE TABLE IF NOT EXISTS `elevador` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_negocio` bigint(20) DEFAULT NULL,
  `necesidad` text DEFAULT NULL,
  `problematica` text DEFAULT NULL,
  `solucion` text DEFAULT NULL,
  `diferencia` text DEFAULT NULL,
  `recursos` text DEFAULT NULL,
  `equipo` text DEFAULT NULL,
  `experiencia` text DEFAULT NULL,
  `caso` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_elevador_users1_idx` (`id_usuario`),
  KEY `fk_elevador_negocio1_idx` (`id_negocio`),
  CONSTRAINT `fk_elevador_negocio1` FOREIGN KEY (`id_negocio`) REFERENCES `negocio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_elevador_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.elevador: ~0 rows (aproximadamente)
DELETE FROM `elevador`;
/*!40000 ALTER TABLE `elevador` DISABLE KEYS */;
/*!40000 ALTER TABLE `elevador` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.empleabilidad_evaluacion
CREATE TABLE IF NOT EXISTS `empleabilidad_evaluacion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `ley_general` tinyint(4) DEFAULT NULL,
  `contrato` tinyint(4) DEFAULT NULL,
  `descuento_afp` tinyint(4) DEFAULT NULL,
  `acosado_trabajo` tinyint(4) DEFAULT NULL,
  `beneficios_sociales1` tinyint(4) DEFAULT NULL,
  `beneficios_sociales2` tinyint(4) DEFAULT NULL,
  `beneficios_sociales3` tinyint(4) DEFAULT NULL,
  `beneficios_sociales4` tinyint(4) DEFAULT NULL,
  `beneficios_sociales5` tinyint(4) DEFAULT NULL,
  `beneficios_sociales6` tinyint(4) DEFAULT NULL,
  `beneficios_sociales7` tinyint(4) DEFAULT NULL,
  `relacion_laboral` tinyint(4) DEFAULT NULL,
  `proceso_comunicacion` varchar(255) DEFAULT NULL,
  `comunicacion_no_verbal` varchar(255) DEFAULT NULL,
  `estructura_carta` tinyint(4) DEFAULT NULL,
  `carta_presentacion1` varchar(255) DEFAULT NULL,
  `carta_presentacion2` varchar(255) DEFAULT NULL,
  `habilidades_blandas1` tinyint(4) DEFAULT NULL,
  `habilidades_blandas2` tinyint(4) DEFAULT NULL,
  `habilidades_blandas3` tinyint(4) DEFAULT NULL,
  `habilidades_blandas4` tinyint(4) DEFAULT NULL,
  `partes_cv` varchar(255) DEFAULT NULL,
  `entrevista` varchar(255) DEFAULT NULL,
  `pae` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_empleabilidad_evaluacion_users1_idx` (`id_usuario`),
  CONSTRAINT `fk_empleabilidad_evaluacion_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.empleabilidad_evaluacion: ~3 rows (aproximadamente)
DELETE FROM `empleabilidad_evaluacion`;
/*!40000 ALTER TABLE `empleabilidad_evaluacion` DISABLE KEYS */;
INSERT INTO `empleabilidad_evaluacion` (`id`, `id_usuario`, `fecha`, `ley_general`, `contrato`, `descuento_afp`, `acosado_trabajo`, `beneficios_sociales1`, `beneficios_sociales2`, `beneficios_sociales3`, `beneficios_sociales4`, `beneficios_sociales5`, `beneficios_sociales6`, `beneficios_sociales7`, `relacion_laboral`, `proceso_comunicacion`, `comunicacion_no_verbal`, `estructura_carta`, `carta_presentacion1`, `carta_presentacion2`, `habilidades_blandas1`, `habilidades_blandas2`, `habilidades_blandas3`, `habilidades_blandas4`, `partes_cv`, `entrevista`, `pae`, `created_at`, `updated_at`) VALUES
	(1, 1, '2022-01-20 10:18:41', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'xsxxx', 'xxxxx', 1, 'xxxx', 'xxxx', NULL, 2, 3, NULL, 'xxxx', 'xxxx', 'xxxxxx', '2022-01-20 22:18:49', '2022-01-25 21:33:59'),
	(2, 1, '2022-01-25 08:45:40', 2, 1, 2, 2, 7, 2, 3, 4, 5, NULL, NULL, 2, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-25 19:52:00', '2022-01-25 20:45:40'),
	(3, 1, '2022-01-25 09:06:09', 2, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cargo', 'cargo', 1, 'carta1', 'carta2', NULL, 2, 3, NULL, '12', '13', '14', '2022-01-25 20:54:06', '2022-01-25 21:06:09'),
	(4, 1, '2022-01-25 09:33:40', 2, 2, 2, 1, NULL, 2, 3, 4, 5, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-25 21:33:40', '2022-01-25 21:33:40');
/*!40000 ALTER TABLE `empleabilidad_evaluacion` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.emprendedurismo_evaluacion
CREATE TABLE IF NOT EXISTS `emprendedurismo_evaluacion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `monitoreo_global` tinyint(4) DEFAULT NULL,
  `tipo_emprendimientos` tinyint(4) DEFAULT NULL,
  `piramide_maslow` tinyint(4) DEFAULT NULL,
  `afirmaciones` tinyint(4) DEFAULT NULL,
  `modelo_canvas` tinyint(4) DEFAULT NULL,
  `segmentacion_clientes` tinyint(4) DEFAULT NULL,
  `tipos_costos` tinyint(4) DEFAULT NULL,
  `costos_fijos` tinyint(4) DEFAULT NULL,
  `depreciacion` tinyint(4) DEFAULT NULL,
  `productos_servicios` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_emprendedurismo_evaluacion_users1_idx` (`id_usuario`),
  CONSTRAINT `fk_emprendedurismo_evaluacion_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.emprendedurismo_evaluacion: ~2 rows (aproximadamente)
DELETE FROM `emprendedurismo_evaluacion`;
/*!40000 ALTER TABLE `emprendedurismo_evaluacion` DISABLE KEYS */;
INSERT INTO `emprendedurismo_evaluacion` (`id`, `id_usuario`, `fecha`, `monitoreo_global`, `tipo_emprendimientos`, `piramide_maslow`, `afirmaciones`, `modelo_canvas`, `segmentacion_clientes`, `tipos_costos`, `costos_fijos`, `depreciacion`, `productos_servicios`, `created_at`, `updated_at`) VALUES
	(1, 1, '2022-01-30 04:34:18', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-01-30 15:43:52', '2022-01-30 16:34:18'),
	(2, 1, '2022-01-30 04:36:16', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, '2022-01-30 16:36:16', '2022-01-30 16:36:16');
/*!40000 ALTER TABLE `emprendedurismo_evaluacion` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.experiencia
CREATE TABLE IF NOT EXISTS `experiencia` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_curriculo` bigint(20) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_experiencia_curriculum1_idx` (`id_curriculo`),
  CONSTRAINT `fk_experiencia_curriculum1` FOREIGN KEY (`id_curriculo`) REFERENCES `curriculo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.experiencia: ~0 rows (aproximadamente)
DELETE FROM `experiencia`;
/*!40000 ALTER TABLE `experiencia` DISABLE KEYS */;
INSERT INTO `experiencia` (`id`, `id_curriculo`, `descripcion`, `created_at`, `updated_at`) VALUES
	(2, 9, 'prueba 222', '2022-01-23 19:40:53', '2022-01-23 19:40:53');
/*!40000 ALTER TABLE `experiencia` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla emprendimiento.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.ficha_social
CREATE TABLE IF NOT EXISTS `ficha_social` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_estado_civil` bigint(20) DEFAULT NULL,
  `id_cantidad_hijos` bigint(20) DEFAULT NULL,
  `madre` tinyint(1) DEFAULT NULL,
  `familia_madre` tinyint(1) DEFAULT NULL,
  `padre` tinyint(1) DEFAULT NULL,
  `familia_padre` tinyint(1) DEFAULT NULL,
  `estudias_actualmente` tinyint(1) DEFAULT NULL,
  `id_nivel_instruccion` bigint(20) DEFAULT NULL,
  `estudio` varchar(255) DEFAULT NULL,
  `institucion` varchar(255) DEFAULT NULL,
  `nivel` varchar(255) DEFAULT NULL,
  `trabajas_actualmente` tinyint(1) DEFAULT NULL,
  `empresa` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `id_horarios` bigint(20) DEFAULT NULL,
  `experiencia_laboral` tinyint(1) DEFAULT NULL,
  `id_tiempo` bigint(20) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `negocio_familiar` tinyint(1) DEFAULT NULL,
  `rubro` varchar(255) DEFAULT NULL,
  `trabajo_negocio` tinyint(1) DEFAULT NULL,
  `capacitacion` tinyint(1) DEFAULT NULL,
  `certificado` tinyint(1) DEFAULT NULL,
  `conocimiento` varchar(255) DEFAULT NULL,
  `integrante` tinyint(1) DEFAULT NULL,
  `id_familia` bigint(20) DEFAULT NULL,
  `id_vivienda` bigint(20) DEFAULT NULL,
  `id_tipo_vivienda` bigint(20) DEFAULT NULL,
  `agua` tinyint(1) DEFAULT NULL,
  `energia_electrica` tinyint(1) DEFAULT NULL,
  `gas` tinyint(1) DEFAULT NULL,
  `sanitario` tinyint(1) DEFAULT NULL,
  `telefono` tinyint(1) DEFAULT NULL,
  `celular` tinyint(1) DEFAULT NULL,
  `internet` tinyint(1) DEFAULT NULL,
  `tvcable` tinyint(1) DEFAULT NULL,
  `ausencia` tinyint(1) DEFAULT NULL,
  `ausencia_internet` tinyint(1) DEFAULT NULL,
  `ausencia_progenitores` tinyint(1) DEFAULT NULL,
  `escolaridad` tinyint(1) DEFAULT NULL,
  `discapacidad` tinyint(1) DEFAULT NULL,
  `ausencia_recursos` tinyint(1) DEFAULT NULL,
  `violencia` tinyint(1) DEFAULT NULL,
  `tratamiento` tinyint(1) DEFAULT NULL,
  `dependientes` tinyint(1) DEFAULT NULL,
  `inestabilidad` tinyint(1) DEFAULT NULL,
  `desestabilidad_emocional` tinyint(1) DEFAULT NULL,
  `otros` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ficha_social_catalogo_estado_civil1_idx` (`id_estado_civil`),
  KEY `fk_ficha_social_catalogo_cantidad_hijos1_idx` (`id_cantidad_hijos`),
  KEY `fk_ficha_social_catalogo_nivel_educacion1_idx` (`id_nivel_instruccion`),
  KEY `fk_ficha_social_catalogo_horarios1_idx` (`id_horarios`),
  KEY `fk_ficha_social_catalogo_tipo_vivienda1_idx` (`id_tipo_vivienda`),
  KEY `fk_ficha_social_catalogo_vivienda1_idx` (`id_vivienda`),
  KEY `fk_ficha_social_catalogo_familia1_idx` (`id_familia`),
  KEY `fk_ficha_social_users1_idx` (`id_usuario`),
  KEY `fk_ficha_social_catalogo_experiencia1_idx` (`id_tiempo`),
  CONSTRAINT `fk_ficha_social_catalogo_cantidad_hijos1` FOREIGN KEY (`id_cantidad_hijos`) REFERENCES `catalogo_cantidad_hijos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_social_catalogo_estado_civil1` FOREIGN KEY (`id_estado_civil`) REFERENCES `catalogo_estado_civil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_social_catalogo_experiencia1` FOREIGN KEY (`id_tiempo`) REFERENCES `catalogo_experiencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_social_catalogo_familia1` FOREIGN KEY (`id_familia`) REFERENCES `catalogo_familia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_social_catalogo_horarios1` FOREIGN KEY (`id_horarios`) REFERENCES `catalogo_horario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_social_catalogo_nivel_educacion1` FOREIGN KEY (`id_nivel_instruccion`) REFERENCES `catalogo_nivel_instruccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_social_catalogo_tipo_vivienda1` FOREIGN KEY (`id_tipo_vivienda`) REFERENCES `catalogo_tipo_vivienda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_social_catalogo_vivienda1` FOREIGN KEY (`id_vivienda`) REFERENCES `catalogo_vivienda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ficha_social_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.ficha_social: ~5 rows (aproximadamente)
DELETE FROM `ficha_social`;
/*!40000 ALTER TABLE `ficha_social` DISABLE KEYS */;
INSERT INTO `ficha_social` (`id`, `id_usuario`, `fecha`, `id_estado_civil`, `id_cantidad_hijos`, `madre`, `familia_madre`, `padre`, `familia_padre`, `estudias_actualmente`, `id_nivel_instruccion`, `estudio`, `institucion`, `nivel`, `trabajas_actualmente`, `empresa`, `cargo`, `id_horarios`, `experiencia_laboral`, `id_tiempo`, `area`, `negocio_familiar`, `rubro`, `trabajo_negocio`, `capacitacion`, `certificado`, `conocimiento`, `integrante`, `id_familia`, `id_vivienda`, `id_tipo_vivienda`, `agua`, `energia_electrica`, `gas`, `sanitario`, `telefono`, `celular`, `internet`, `tvcable`, `ausencia`, `ausencia_internet`, `ausencia_progenitores`, `escolaridad`, `discapacidad`, `ausencia_recursos`, `violencia`, `tratamiento`, `dependientes`, `inestabilidad`, `desestabilidad_emocional`, `otros`, `created_at`, `updated_at`) VALUES
	(2, 1, '2022-01-21 09:17:56', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 21:17:56'),
	(3, 1, '2022-01-21 09:18:18', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 21:18:18', '2022-01-21 21:18:18'),
	(4, 1, '2022-01-21 09:30:31', 1, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 21:19:08', '2022-01-21 21:30:31'),
	(7, 1, '2022-01-21 09:30:55', 2, NULL, 1, NULL, NULL, NULL, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 21:30:55', '2022-01-22 11:40:19'),
	(8, 1, '2022-01-22 11:42:23', 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'xxxxx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-22 11:42:23', '2022-01-22 17:33:58');
/*!40000 ALTER TABLE `ficha_social` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.formacion
CREATE TABLE IF NOT EXISTS `formacion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_curriculo` bigint(20) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_formacion_curriculum1_idx` (`id_curriculo`),
  CONSTRAINT `fk_formacion_curriculum1` FOREIGN KEY (`id_curriculo`) REFERENCES `curriculo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.formacion: ~2 rows (aproximadamente)
DELETE FROM `formacion`;
/*!40000 ALTER TABLE `formacion` DISABLE KEYS */;
INSERT INTO `formacion` (`id`, `id_curriculo`, `descripcion`, `created_at`, `updated_at`) VALUES
	(7, 9, 'Bachiller Tecnico', '2022-01-22 20:11:06', '2022-01-22 20:11:06'),
	(8, 9, 'Licenciado en Informatica', '2022-01-22 20:11:14', '2022-01-22 20:11:14');
/*!40000 ALTER TABLE `formacion` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.idioma
CREATE TABLE IF NOT EXISTS `idioma` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_curriculo` bigint(20) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idioma_curriculum1_idx` (`id_curriculo`),
  CONSTRAINT `fk_idioma_curriculum1` FOREIGN KEY (`id_curriculo`) REFERENCES `curriculo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.idioma: ~0 rows (aproximadamente)
DELETE FROM `idioma`;
/*!40000 ALTER TABLE `idioma` DISABLE KEYS */;
INSERT INTO `idioma` (`id`, `id_curriculo`, `descripcion`, `created_at`, `updated_at`) VALUES
	(2, 9, 'sssssasasz', '2022-01-23 21:09:10', '2022-01-23 21:09:10');
/*!40000 ALTER TABLE `idioma` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla emprendimiento.migrations: ~0 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `permission_id` bigint(20) DEFAULT NULL,
  `model_id` bigint(20) DEFAULT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  KEY `fk_model_has_permissions_permissions1_idx` (`permission_id`),
  CONSTRAINT `fk_model_has_permissions_permissions1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla emprendimiento.model_has_permissions: ~0 rows (aproximadamente)
DELETE FROM `model_has_permissions`;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) DEFAULT NULL,
  `model_id` bigint(20) DEFAULT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  KEY `fk_model_has_roles_roles1_idx` (`role_id`),
  CONSTRAINT `fk_model_has_roles_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla emprendimiento.model_has_roles: ~18 rows (aproximadamente)
DELETE FROM `model_has_roles`;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` (`id`, `role_id`, `model_id`, `model_type`) VALUES
	(1, 1, 1, 'App\\Models\\Administracion\\User'),
	(112, 2, 1, 'App\\Models\\Administracion\\User'),
	(113, 25, 1, 'App\\Models\\Administracion\\User'),
	(114, 7, 1, 'App\\Models\\Administracion\\User'),
	(115, 27, 1, 'App\\Models\\Administracion\\User'),
	(116, 29, 1, 'App\\Models\\Administracion\\User'),
	(117, 10, 1, 'App\\Models\\Administracion\\User'),
	(118, 30, 1, 'App\\Models\\Administracion\\User'),
	(119, 28, 1, 'App\\Models\\Administracion\\User'),
	(120, 26, 1, 'App\\Models\\Administracion\\User'),
	(121, 32, 1, 'App\\Models\\Administracion\\User'),
	(122, 33, 1, 'App\\Models\\Administracion\\User'),
	(123, 34, 1, 'App\\Models\\Administracion\\User'),
	(124, 35, 1, 'App\\Models\\Administracion\\User'),
	(125, 36, 1, 'App\\Models\\Administracion\\User'),
	(126, 37, 1, 'App\\Models\\Administracion\\User'),
	(127, 38, 1, 'App\\Models\\Administracion\\User'),
	(128, 39, 1, 'App\\Models\\Administracion\\User');
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.negocio
CREATE TABLE IF NOT EXISTS `negocio` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_idea_negocio` bigint(20) DEFAULT NULL,
  `id_costoso` bigint(20) DEFAULT NULL,
  `id_hacer_idea` bigint(20) DEFAULT NULL,
  `id_gusta_idea` bigint(20) DEFAULT NULL,
  `id_conocer_proceso` bigint(20) DEFAULT NULL,
  `id_dinero` bigint(20) DEFAULT NULL,
  `id_apoyo` bigint(20) DEFAULT NULL,
  `id_proveedores_compradores` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_negocio_users1_idx` (`id_usuario`),
  KEY `fk_negocio_catalogo_idea_negocio1_idx` (`id_idea_negocio`),
  KEY `fk_negocio_catalogo_costoso1_idx` (`id_costoso`),
  KEY `fk_negocio_catalogo_hacer_idea1_idx` (`id_hacer_idea`),
  KEY `fk_negocio_catalogo_gusta_idea1_idx` (`id_gusta_idea`),
  KEY `fk_negocio_catalogo_conocer_proceso1_idx` (`id_conocer_proceso`),
  KEY `fk_negocio_catalogo_dinero1_idx` (`id_dinero`),
  KEY `fk_negocio_catalogo_apoyo1_idx` (`id_apoyo`),
  KEY `fk_negocio_catalogo_proveedores_compradores1_idx` (`id_proveedores_compradores`),
  CONSTRAINT `fk_negocio_catalogo_apoyo1` FOREIGN KEY (`id_apoyo`) REFERENCES `catalogo_apoyo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_negocio_catalogo_conocer_proceso1` FOREIGN KEY (`id_conocer_proceso`) REFERENCES `catalogo_conocer_proceso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_negocio_catalogo_costoso1` FOREIGN KEY (`id_costoso`) REFERENCES `catalogo_costoso` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_negocio_catalogo_dinero1` FOREIGN KEY (`id_dinero`) REFERENCES `catalogo_dinero` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_negocio_catalogo_gusta_idea1` FOREIGN KEY (`id_gusta_idea`) REFERENCES `catalogo_gusta_idea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_negocio_catalogo_hacer_idea1` FOREIGN KEY (`id_hacer_idea`) REFERENCES `catalogo_hacer_idea` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_negocio_catalogo_idea_negocio1` FOREIGN KEY (`id_idea_negocio`) REFERENCES `catalogo_idea_negocio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_negocio_catalogo_proveedores_compradores1` FOREIGN KEY (`id_proveedores_compradores`) REFERENCES `catalogo_proveedores_compradores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_negocio_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.negocio: ~3 rows (aproximadamente)
DELETE FROM `negocio`;
/*!40000 ALTER TABLE `negocio` DISABLE KEYS */;
INSERT INTO `negocio` (`id`, `id_usuario`, `nombre`, `fecha`, `id_idea_negocio`, `id_costoso`, `id_hacer_idea`, `id_gusta_idea`, `id_conocer_proceso`, `id_dinero`, `id_apoyo`, `id_proveedores_compradores`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, '2022-01-29 04:04:54', 1, 3, 3, 2, 3, 2, 2, 2, '2022-01-28 21:04:15', '2022-01-29 16:04:54'),
	(2, 1, 'hamburguesa', '2022-01-29 04:05:16', 1, 1, 2, 2, 1, 4, 2, 2, '2022-01-29 16:05:16', '2022-01-29 16:05:16');
/*!40000 ALTER TABLE `negocio` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla emprendimiento.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla emprendimiento.permissions: ~0 rows (aproximadamente)
DELETE FROM `permissions`;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.problematica
CREATE TABLE IF NOT EXISTS `problematica` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `problema` text DEFAULT NULL,
  `solucion` text DEFAULT NULL,
  `resuelve` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_registro_problemas_users1_idx` (`id_usuario`),
  CONSTRAINT `fk_registro_problemas_users1` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.problematica: ~2 rows (aproximadamente)
DELETE FROM `problematica`;
/*!40000 ALTER TABLE `problematica` DISABLE KEYS */;
INSERT INTO `problematica` (`id`, `id_usuario`, `fecha`, `problema`, `solucion`, `resuelve`, `created_at`, `updated_at`) VALUES
	(2, 1, '2022-01-27 03:21:14', 'problema', 'solucion', 'resultado', '2022-01-27 14:17:03', '2022-01-27 15:21:14'),
	(3, 1, '2022-01-27 08:06:25', 'aaaaaaaaaaaaa dfsdf', 'asddddddddddddd', 'gfssssssssssssvdbcxvbcvx', '2022-01-27 16:54:28', '2022-01-27 20:06:25');
/*!40000 ALTER TABLE `problematica` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.referencia
CREATE TABLE IF NOT EXISTS `referencia` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_curriculo` bigint(20) DEFAULT NULL,
  `id_tipo_referencia` bigint(20) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_referencia_curriculum1_idx` (`id_curriculo`),
  KEY `fk_referencia_catalogo_tipo_referencia1_idx` (`id_tipo_referencia`),
  CONSTRAINT `fk_referencia_catalogo_tipo_referencia1` FOREIGN KEY (`id_tipo_referencia`) REFERENCES `catalogo_tipo_referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_referencia_curriculum1` FOREIGN KEY (`id_curriculo`) REFERENCES `curriculo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.referencia: ~2 rows (aproximadamente)
DELETE FROM `referencia`;
/*!40000 ALTER TABLE `referencia` DISABLE KEYS */;
INSERT INTO `referencia` (`id`, `id_curriculo`, `id_tipo_referencia`, `descripcion`, `created_at`, `updated_at`) VALUES
	(3, 9, 2, 'dpersoanl', '2022-01-25 00:36:00', '2022-01-25 00:36:00'),
	(4, 9, 1, 'laborall', '2022-01-25 00:40:51', '2022-01-25 00:40:51');
/*!40000 ALTER TABLE `referencia` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_estado` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `padre` bigint(20) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `root` tinyint(1) DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `newtab` tinyint(1) DEFAULT NULL,
  `submenu` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`),
  KEY `fk_roles_catalogo_estado1_idx` (`id_estado`),
  CONSTRAINT `fk_roles_catalogo_estado1` FOREIGN KEY (`id_estado`) REFERENCES `catalogo_estado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla emprendimiento.roles: ~19 rows (aproximadamente)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `id_estado`, `name`, `guard_name`, `section`, `order`, `padre`, `title`, `root`, `icon`, `page`, `newtab`, `submenu`, `created_at`, `updated_at`) VALUES
	(1, 1, 'administrador', 'web', 'Administración', 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-03 15:12:41', '2021-08-03 15:12:41'),
	(2, 1, 'administracion_usuarios', 'web', '', 1, 1, 'Cliente', 1, 'media/svg/icons/General/User.svg', 'administracion/item', 0, 0, '2021-08-05 11:24:13', '2021-08-05 11:24:13'),
	(7, 1, 'inicio', 'web', 'Inicio', 1, 0, NULL, NULL, '', NULL, NULL, NULL, '2021-08-12 12:42:05', '2021-08-12 12:42:07'),
	(10, 1, 'subinicio', 'web', '', 1, 7, 'Inicio', 1, 'media/svg/icons/Home/Home.svg', 'dashboard', 0, 0, '2021-08-12 12:44:37', '2021-08-12 12:44:37'),
	(25, 1, 'autodiagnostico', 'web', 'Autodiagnostico', 7, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-02 19:13:28', '2022-01-02 19:13:28'),
	(26, 1, 'autodiagnostico_test_item', 'web', NULL, 1, 25, 'Usuarios', 1, 'media/svg/icons/Design/Layers.svg', 'autodiagnostico/usuarios/item', 0, 0, '2022-01-02 19:14:48', '2022-01-02 19:14:48'),
	(27, 1, 'empleabilidad', 'web', 'Dashboard', 8, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-02 19:20:36', '2022-01-02 19:20:36'),
	(28, 1, 'empleabilidad_ficha_item', 'web', '', 1, 27, 'Dashboard', 1, 'media/svg/icons/Design/Layers.svg', 'empleabilidad/dashboard/item', 0, 0, '2022-01-02 19:24:05', '2022-01-02 19:24:05'),
	(29, 1, 'emprendedurismo', 'web', 'Emprendedurismo', 9, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-02 19:24:30', '2022-01-02 19:24:30'),
	(30, 1, 'emprendedurismo_problematica_item', 'web', NULL, 1, 29, 'Problematica', 1, 'media/svg/icons/Design/Layers.svg', 'emprendedurismo/problematica/item', 0, 0, '2022-01-02 19:25:11', '2022-01-02 19:25:12'),
	(31, 1, 'autodianostico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-20 18:40:18', '2022-01-20 18:40:19'),
	(32, 1, 'empleabilidad_evaluacion_item', 'web', NULL, 4, 27, 'Evaluación', 1, 'media/svg/icons/Design/Layers.svg', 'empleabilidad/evaluacion/item', 0, 0, '2022-01-20 18:40:14', '2022-01-20 18:40:14'),
	(33, 1, 'empleabilidad_curriculo_item', 'web', NULL, 2, 27, 'Curriculo', 1, 'media/svg/icons/Design/Layers.svg', 'empleabilidad/curriculo/item', 0, 0, '2022-01-22 06:56:38', '2022-01-22 06:56:39'),
	(34, 1, 'empleabilidad_carta_item', 'web', NULL, 3, 27, 'Carta', 1, 'media/svg/icons/Design/Layers.svg', 'empleabilidad/carta/item', 0, 0, '2022-01-22 20:43:24', '2022-01-22 20:43:25'),
	(35, 1, 'emprendedurismo_cliente_item', 'web', NULL, 2, 29, 'Cliente', 1, 'media/svg/icons/Design/Layers.svg', 'emprendedurismo/cliente/item', 0, 0, '2022-01-27 16:29:40', '2022-01-27 16:29:41'),
	(36, 1, 'emprendedurismo_negocio_item', 'web', NULL, 3, 29, 'Registro Negocio', 1, 'media/svg/icons/Design/Layers.svg', 'emprendedurismo/negocio/item', 0, 0, '2022-01-28 21:00:32', '2022-01-28 21:00:34'),
	(37, 1, 'emprendedurismo_canva_item', 'web', NULL, 4, 29, 'Canva', 1, 'media/svg/icons/Design/Layers.svg', 'emprendedurismo/canva/item', 0, 0, '2022-01-30 13:20:27', '2022-01-30 13:20:27'),
	(38, 1, 'emprendedurismo_elevador_item', 'web', NULL, 5, 29, 'Elevador Pitch', 1, 'media/svg/icons/Design/Layers.svg', 'emprendedurismo/elevador/item', 0, 0, '2022-01-30 13:21:49', '2022-01-30 13:21:48'),
	(39, 1, 'emprendedurismo_evaluacion_item', 'web', NULL, 6, 29, 'Evaluacion', 1, 'media/svg/icons/Design/Layers.svg', 'emprendedurismo/evaluacion/item', 0, 0, '2022-01-30 13:24:26', '2022-01-30 13:24:27');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `permission_id` bigint(20) DEFAULT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_role_has_permissions_roles1_idx` (`role_id`),
  KEY `fk_role_has_permissions_permissions1_idx` (`permission_id`),
  CONSTRAINT `fk_role_has_permissions_permissions1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_role_has_permissions_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla emprendimiento.role_has_permissions: ~0 rows (aproximadamente)
DELETE FROM `role_has_permissions`;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla emprendimiento.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_estado` bigint(20) DEFAULT NULL,
  `id_tipo_usuario` bigint(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla emprendimiento.users: ~4 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `id_estado`, `id_tipo_usuario`, `name`, `nombres`, `paterno`, `materno`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'Administrador del Sistema', NULL, NULL, NULL, 'admin@admin.com', NULL, '$2y$10$kz1MIZCgXkF55hRqsb7vhuI.BJmSgqHjQhudlhuSCbWE49MHmy/Ee', NULL, '2022-01-02 23:58:30', '2022-01-02 23:58:31'),
	(2, 1, 2, 'usuario 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 1, 2, 'cliente 3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 1, 2, 'cliente 4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
