/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 10.1.13-MariaDB : Database - final_dcu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`final_dcu` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `final_dcu`;

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `categoria` */

insert  into `categoria`(`id`,`nombre`) values 
(19,'Dieta'),
(20,'Comida rapida'),
(21,'Postres'),
(22,'Comida diaria'),
(23,'Bebidas'),
(24,'Platos Tradicionales');

/*Table structure for table `comentarios` */

DROP TABLE IF EXISTS `comentarios`;

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receta_id` int(11) DEFAULT NULL,
  `comentario` text,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `comentarios` */

insert  into `comentarios`(`id`,`receta_id`,`comentario`,`fecha`) values 
(1,32,'hola','2018-11-25'),
(2,32,'waaaa','2018-11-25'),
(3,33,'hola','2018-11-25'),
(4,33,'hhhhhhh','2018-11-25'),
(5,31,'waaaa','2018-11-27'),
(6,34,'mmmm\r\n','2018-11-28'),
(7,32,'hahha','2018-11-28');

/*Table structure for table `recetas` */

DROP TABLE IF EXISTS `recetas`;

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL,
  `descripcion` text,
  `imagen` text,
  `video` text,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `recetas` */

insert  into `recetas`(`id`,`titulo`,`categoria`,`descripcion`,`imagen`,`video`,`fecha`) values 
(31,'Pizza',20,'300 g de harina.\r\n160 g de agua.\r\n5 g de levadura de panaderÃ­a instantÃ¡nea.\r\n20 g de aceite de oliva virgen extra.\r\n1 cucharadita de sal.\r\n200 g de salsa de tomate.\r\n100 g de mozzarella.\r\n100 g de jamÃ³n de york.','pizza.jpg','omDPSptKesA','2018-11-24'),
(32,'Batido',23,'Paso 1: Elegir la fruta. ...\r\nPaso 2: Escoger una base. ...\r\nPaso 3: AÃ±adir ingredientes para espesar. ...\r\nPaso 4: Endulzar y aromatizar. ...\r\nPaso 5: AÃ±adir propiedades nutritivas.','batido.jpg','JKvY6bO6zt8','2018-11-24'),
(33,'Arros con habichuela y carne',24,'La comida que se consume diariamente en RepÃºblica Dominicana es \"La Bandera\" que consiste en arroz blanco, habichuelas guisadas y carne guisada (del tipo que sea pero preferiblemente carne de pollo, cerdo o res).','aroz con habichuela y carne.jpg','xjDLpd1FeJw','2018-11-25'),
(34,'Platillo del dia',19,'Os enseÃ±amos a prepararlos en este post y son socorridos como ellos solos porque nos arreglan desde un desayuno hasta una cena. Os enseÃ±amos dos propuestas, con ensalada y taquitos de jamÃ³n o con unas sobras de pisto que, en esta ocasiÃ³n, no tenÃ­a salsa de tomate.','dieta.jpg','RNHyPn6R53I','2018-11-25');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `status` enum('true','false') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`usuario`,`clave`,`status`) values 
(1,'admin','admin','true');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
