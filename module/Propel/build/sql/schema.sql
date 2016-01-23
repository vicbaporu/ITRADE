
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- categoriagasto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `categoriagasto`;

CREATE TABLE `categoriagasto`
(
    `idcategoriagasto` INTEGER NOT NULL AUTO_INCREMENT,
    `categoriagasto_nombre` VARCHAR(255) NOT NULL,
    `categoriagasto_descripcion` TEXT,
    PRIMARY KEY (`idcategoriagasto`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cliente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente`
(
    `idcliente` INTEGER NOT NULL AUTO_INCREMENT,
    `cliente_email` VARCHAR(45),
    `cliente_password` VARCHAR(45),
    `cliente_razonsocial` VARCHAR(255),
    `cliente_rfc` VARCHAR(45),
    `cliente_calle` VARCHAR(45),
    `cliente_numero` VARCHAR(45),
    `cliente_interior` VARCHAR(45),
    `cliente_colonia` VARCHAR(45),
    `cliente_codigopostal` VARCHAR(45),
    `cliente_ciudad` VARCHAR(45),
    `cliente_estado` VARCHAR(45),
    `cliente_pais` VARCHAR(45),
    `cliente_telefono` VARCHAR(45),
    `cliente_celular` VARCHAR(45),
    `cliente_nombrecontacto` VARCHAR(255),
    `cliente_cumpleanios` DATE,
    `cliente_callefiscal` VARCHAR(45),
    `cliente_numerofiscal` VARCHAR(45),
    `cliente_interiorfiscal` VARCHAR(45),
    `cliente_coloniafiscal` VARCHAR(45),
    `cliente_codigopostalfiscal` VARCHAR(45),
    `cliente_ciudadfiscal` VARCHAR(45),
    `cliente_estadofiscal` VARCHAR(45),
    `cliente_paisfiscal` VARCHAR(45),
    `cliente_padronimportador` TEXT,
    `cliente_encargadoconferido` TEXT,
    `cliente_r1` TEXT,
    `cliente_r2` TEXT,
    `cliente_identificacionrepresentantelegal` TEXT,
    `cliente_rfcrepresentantelegal` TEXT,
    `cliente_actaconstitutiva` TEXT,
    `cliente_podernotarial` TEXT,
    `cliente_cartaencomienda` TEXT,
    `cliente_comprobantedomicilio` TEXT,
    `cliente_comprobanteclabe` TEXT,
    `cliente_clabe` TEXT,
    `cliente_archivoszip` TEXT,
    `idempleadocomercial` INTEGER,
    `idempleadooperaciones` INTEGER,
    `cliente_ultimologin` DATETIME,
    `cliente_fotografiasdomicilio` TEXT,
    PRIMARY KEY (`idcliente`),
    INDEX `idempleadocomercial` (`idempleadocomercial`),
    INDEX `idempleadooperaciones` (`idempleadooperaciones`),
    CONSTRAINT `idempleadocomercial_cliente`
        FOREIGN KEY (`idempleadocomercial`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempleadooperaciones_cliente`
        FOREIGN KEY (`idempleadooperaciones`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- clientearchivo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `clientearchivo`;

CREATE TABLE `clientearchivo`
(
    `idclientearchivo` INTEGER NOT NULL AUTO_INCREMENT,
    `idcliente` INTEGER NOT NULL,
    `clientearchivo_archivo` TEXT NOT NULL,
    `clientearchivo_size` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idclientearchivo`),
    INDEX `idcliente` (`idcliente`),
    CONSTRAINT `idcliente_clientearchivo`
        FOREIGN KEY (`idcliente`)
        REFERENCES `cliente` (`idcliente`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empleado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado`
(
    `idempleado` INTEGER NOT NULL AUTO_INCREMENT,
    `empleado_nombre` VARCHAR(45) NOT NULL,
    `empleado_apellidopaterno` VARCHAR(45) NOT NULL,
    `empleado_apallidomaterno` VARCHAR(45) NOT NULL,
    `empleado_email` VARCHAR(45) NOT NULL,
    `empleado_password` VARCHAR(45) NOT NULL,
    `empleado_celular` VARCHAR(45) NOT NULL,
    `empleado_telefono` VARCHAR(45),
    `empleado_calle` VARCHAR(45),
    `empleado_numero` VARCHAR(45),
    `empleado_interior` VARCHAR(45),
    `empleado_colonia` VARCHAR(45),
    `empleado_codigopostal` VARCHAR(45),
    `empleado_ciudad` VARCHAR(45),
    `empleado_estado` VARCHAR(45),
    `empleado_nss` VARCHAR(45),
    `empleado_rfc` VARCHAR(45),
    `empleado_iniciocontrato` DATE,
    `empleado_nombrecontacto` VARCHAR(45),
    `empleado_telefonocontacto` VARCHAR(45),
    `empleado_estatus` enum('activo','suspendido','inactivo') NOT NULL,
    `empleado_rol` enum('operaciones','ventas','administrador') NOT NULL,
    `empleado_foto` TEXT,
    PRIMARY KEY (`idempleado`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- expediente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `expediente`;

CREATE TABLE `expediente`
(
    `idexpediente` INTEGER NOT NULL AUTO_INCREMENT,
    `idcliente` INTEGER NOT NULL,
    `idconsignatarioembarcador` INTEGER NOT NULL,
    `expediente_listaempaque` TEXT,
    `expediente_factura` VARCHAR(45),
    `expediente_fechainicio` DATE NOT NULL,
    `expediente_fechafin` DATE,
    `expediente_precio` DECIMAL(10,2),
    `expediente_tipo` enum('exportacion','importacion') NOT NULL,
    `expediente_estatus` enum('abierto','cerrado') NOT NULL,
    `expediente_folio` VARCHAR(45),
    PRIMARY KEY (`idexpediente`),
    INDEX `idconsignatarioembarcador` (`idconsignatarioembarcador`),
    INDEX `idcliente` (`idcliente`),
    CONSTRAINT `idcliente_expediente`
        FOREIGN KEY (`idcliente`)
        REFERENCES `cliente` (`idcliente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idconsignatarioembarcador_expediente`
        FOREIGN KEY (`idconsignatarioembarcador`)
        REFERENCES `proveedorcliente` (`idproveedorcliente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- expedienteanticipo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `expedienteanticipo`;

CREATE TABLE `expedienteanticipo`
(
    `idexpedienteanticipo` INTEGER NOT NULL AUTO_INCREMENT,
    `expedienteanticipo_fecha` DATETIME NOT NULL,
    `idexpediente` INTEGER NOT NULL,
    `expedienteanticipo_cantidad` DECIMAL(10,2) NOT NULL,
    `expedienteanticipo_metodopago` enum('efectivo','cheque','trasnferencia','otro') NOT NULL,
    `expedienteanticipo_comprobante` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idexpedienteanticipo`),
    INDEX `idexpediente` (`idexpediente`),
    CONSTRAINT `idexpediente_expedienteanticipo`
        FOREIGN KEY (`idexpediente`)
        REFERENCES `expediente` (`idexpediente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- expedientearchivo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `expedientearchivo`;

CREATE TABLE `expedientearchivo`
(
    `idexpedientearchivo` INTEGER NOT NULL AUTO_INCREMENT,
    `idexpediente` INTEGER NOT NULL,
    `idempleado` INTEGER NOT NULL,
    `expedientearchivo_fecha` DATETIME NOT NULL,
    `expedientearchivo_tipo` enum('blawb','certificadoorigen','polizaseguro','facturamercancia','facturashipper','pedimento','packinglist','msds','eir','estimaciongastos','documentosaduanales','otro') NOT NULL,
    `expedientearchivo_archivo` TEXT NOT NULL,
    `expedientearchivo_nota` TEXT,
    PRIMARY KEY (`idexpedientearchivo`),
    INDEX `idmpleado` (`idempleado`),
    INDEX `idexpediente` (`idexpediente`),
    CONSTRAINT `idempleado_expedientearchivo`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idexpediente_expedientearchivo`
        FOREIGN KEY (`idexpediente`)
        REFERENCES `expediente` (`idexpediente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- expedientegasto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `expedientegasto`;

CREATE TABLE `expedientegasto`
(
    `idexpedientegasto` INTEGER NOT NULL AUTO_INCREMENT,
    `idexpediente` INTEGER NOT NULL,
    `idgastofacturacion` INTEGER NOT NULL,
    `idproveedoritrade` INTEGER NOT NULL,
    `idempleado` INTEGER NOT NULL,
    `expedientegasto_fecha` DATETIME NOT NULL,
    `expedientegasto_monto` DECIMAL(10,2) NOT NULL,
    `expedientegasto_tipo` enum('gastorecibir','gastoconocido','cobro') NOT NULL,
    `expedientegasto_comprobante` TEXT,
    `expedientegasto_nota` TEXT,
    PRIMARY KEY (`idexpedientegasto`),
    INDEX `idgastofacturacion` (`idgastofacturacion`),
    INDEX `idproveedoritrade` (`idproveedoritrade`),
    INDEX `idexpediente` (`idexpediente`),
    INDEX `idempleado` (`idempleado`),
    CONSTRAINT `idempleado_expedientegasto`
        FOREIGN KEY (`idempleado`)
        REFERENCES `empleado` (`idempleado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idexpediente_expedientegasto`
        FOREIGN KEY (`idexpediente`)
        REFERENCES `expediente` (`idexpediente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idgastofacturacion_expedientegasto`
        FOREIGN KEY (`idgastofacturacion`)
        REFERENCES `gastofacturacion` (`idgastofacturacion`),
    CONSTRAINT `idproveedoritrade_expedientegasto`
        FOREIGN KEY (`idproveedoritrade`)
        REFERENCES `proveedoritrade` (`idproveedoritrade`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- expedientehistorial
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `expedientehistorial`;

CREATE TABLE `expedientehistorial`
(
    `idexpedientehistorial` INTEGER NOT NULL AUTO_INCREMENT,
    `idexpedienteservicio` INTEGER,
    `idestadoservicio` INTEGER,
    `expedientehistorial_fecha` DATETIME,
    `expedientehistorial_nota` VARCHAR(45),
    PRIMARY KEY (`idexpedientehistorial`),
    INDEX `idservicioestado_expedientehistorial_idx` (`idestadoservicio`),
    INDEX `idexpedienteservicio_expedientehistorial_idx` (`idexpedienteservicio`),
    CONSTRAINT `idexpedienteservicio_expedientehistorial`
        FOREIGN KEY (`idexpedienteservicio`)
        REFERENCES `expedienteservicio` (`idexpedienteservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicioestado_expedientehistorial`
        FOREIGN KEY (`idestadoservicio`)
        REFERENCES `servicioestado` (`idservicioestado`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- expedienteservicio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `expedienteservicio`;

CREATE TABLE `expedienteservicio`
(
    `idexpedienteservicio` INTEGER NOT NULL AUTO_INCREMENT,
    `idexpediente` INTEGER NOT NULL,
    `idservicio` INTEGER NOT NULL,
    `expedienteservicio_fecha` DATE NOT NULL,
    `expedienteservicio_fechatermino` DATE,
    PRIMARY KEY (`idexpedienteservicio`),
    INDEX `idexpediente` (`idexpediente`),
    INDEX `idservicio` (`idservicio`),
    CONSTRAINT `idexpediente_expedienteservicio`
        FOREIGN KEY (`idexpediente`)
        REFERENCES `expediente` (`idexpediente`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicio_expedienteservicio`
        FOREIGN KEY (`idservicio`)
        REFERENCES `servicio` (`idservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- gastofacturacion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `gastofacturacion`;

CREATE TABLE `gastofacturacion`
(
    `idgastofacturacion` INTEGER NOT NULL AUTO_INCREMENT,
    `idcategoriagasto` INTEGER NOT NULL,
    `gastofacturacion_nombre` VARCHAR(255) NOT NULL,
    `gastofacturacion_descripcion` TEXT,
    `gastofacturacion_iva` enum('0','16','4'),
    PRIMARY KEY (`idgastofacturacion`),
    INDEX `idcategoriagasto` (`idcategoriagasto`),
    CONSTRAINT `idcategoriagasto_gastofacturacion`
        FOREIGN KEY (`idcategoriagasto`)
        REFERENCES `categoriagasto` (`idcategoriagasto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedorcliente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedorcliente`;

CREATE TABLE `proveedorcliente`
(
    `idproveedorcliente` INTEGER NOT NULL AUTO_INCREMENT,
    `idcliente` INTEGER NOT NULL,
    `proveedorcliente_nombre` VARCHAR(45),
    `proveedorcliente_taxid` VARCHAR(45),
    `proveedorcliente_nombrecontacto` VARCHAR(45),
    `proveedorcliente_telefonocontacto` VARCHAR(45),
    `proveedorcliente_emailcontacto` VARCHAR(45),
    `proveedorcliente_calle` VARCHAR(45),
    `proveedorcliente_numero` VARCHAR(45),
    `proveedorcliente_interior` VARCHAR(45),
    `proveedorcliente_colonia` VARCHAR(45),
    `proveedorcliente_ciudad` VARCHAR(45),
    `proveedorcliente_estado` VARCHAR(45),
    `proveedorcliente_pais` VARCHAR(45),
    `proveedorcliente_tipo` enum('proveedor','cliente'),
    PRIMARY KEY (`idproveedorcliente`),
    INDEX `proveedorcliente_idcliente` (`idcliente`),
    CONSTRAINT `idcliente_proveedorcliente`
        FOREIGN KEY (`idcliente`)
        REFERENCES `cliente` (`idcliente`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedoritrade
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedoritrade`;

CREATE TABLE `proveedoritrade`
(
    `idproveedoritrade` INTEGER NOT NULL AUTO_INCREMENT,
    `proveedoritrade_nombre` VARCHAR(45) NOT NULL,
    `proveedoritrade_nombrecontacto` VARCHAR(45) NOT NULL,
    `proveedoritrade_telefono` VARCHAR(45) NOT NULL,
    `proveedoritrade_calle` VARCHAR(45),
    `proveedoritrade_numero` VARCHAR(45),
    `proveedoritrade_interior` VARCHAR(45),
    `proveedoritrade_colonia` VARCHAR(45),
    `proveedoritrade_ciudad` VARCHAR(45),
    `proveedoritrade_estado` VARCHAR(45),
    `proveedoritrade_pais` VARCHAR(45),
    `proveedoritrade_email` VARCHAR(45),
    `proveedoritrade_rfc` VARCHAR(45),
    `proveedoritrade_clabe` VARCHAR(45),
    PRIMARY KEY (`idproveedoritrade`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedoritradearchivo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedoritradearchivo`;

CREATE TABLE `proveedoritradearchivo`
(
    `idproveedoritradearchivo` INTEGER NOT NULL AUTO_INCREMENT,
    `idproveedoritrade` INTEGER NOT NULL,
    `proveedoritradearchivo_archivo` TEXT NOT NULL,
    `proveedoritradearchivo_size` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idproveedoritradearchivo`),
    INDEX `idproveedoritrade` (`idproveedoritrade`),
    CONSTRAINT `idproveedoritrade_proveedoritradearchivo`
        FOREIGN KEY (`idproveedoritrade`)
        REFERENCES `proveedoritrade` (`idproveedoritrade`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedoritradeservicio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedoritradeservicio`;

CREATE TABLE `proveedoritradeservicio`
(
    `idproveedoritradeservicio` INTEGER NOT NULL AUTO_INCREMENT,
    `idproveedoritrade` INTEGER,
    `idservicio` INTEGER,
    PRIMARY KEY (`idproveedoritradeservicio`),
    INDEX `idproveedoritrade` (`idproveedoritrade`),
    INDEX `idservicio` (`idservicio`),
    CONSTRAINT `idproveedoritrade_proveedoritradeservicio`
        FOREIGN KEY (`idproveedoritrade`)
        REFERENCES `proveedoritrade` (`idproveedoritrade`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idservicio_proveedoritradeservicio`
        FOREIGN KEY (`idservicio`)
        REFERENCES `servicio` (`idservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- servicio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `servicio`;

CREATE TABLE `servicio`
(
    `idservicio` INTEGER NOT NULL AUTO_INCREMENT,
    `servicio_tipo` enum('importacion','exportacion') NOT NULL,
    `servicio_medio` enum('Terrestre LTL','Terrestre FTL','Aereo','Maritimo FCL','Maritimo LCL') NOT NULL,
    `servicio_nombre` VARCHAR(45) NOT NULL,
    `servicio_descripcion` VARCHAR(45),
    PRIMARY KEY (`idservicio`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- servicioestado
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `servicioestado`;

CREATE TABLE `servicioestado`
(
    `idservicioestado` INTEGER NOT NULL AUTO_INCREMENT,
    `idservicio` INTEGER NOT NULL,
    `servicioestado_nombre` VARCHAR(100) NOT NULL,
    `servicioestado_jerarquia` INTEGER NOT NULL,
    PRIMARY KEY (`idservicioestado`),
    INDEX `idservicio` (`idservicio`),
    CONSTRAINT `idservicio_servicioestado`
        FOREIGN KEY (`idservicio`)
        REFERENCES `servicio` (`idservicio`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
