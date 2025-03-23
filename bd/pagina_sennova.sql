-- -----------------------------------------------------
-- Table `pagina_sennova`.`proyecto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`proyecto` (
  `id_proyecto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id_proyecto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`eventos` (
  `id_servicio` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `fecha_evento` DATETIME NOT NULL,
  `fk_id_proyecto` INT NOT NULL,
  PRIMARY KEY (`id_servicio`),
  CONSTRAINT `fk_eventos_id_proyecto`
    FOREIGN KEY (`fk_id_proyecto`)
    REFERENCES `pagina_sennova`.`proyecto` (`id_proyecto`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`tipo_cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`tipo_cliente` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NULL,
  `fk_id_proyecto` INT NOT NULL,
  PRIMARY KEY (`id_cliente`),
  CONSTRAINT `fk_tipo_cliente_id_proyecto`
    FOREIGN KEY (`fk_id_proyecto`)
    REFERENCES `pagina_sennova`.`proyecto` (`id_proyecto`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`tipo_asesoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`tipo_asesoria` (
  `id_tipo_asesoria` INT NOT NULL AUTO_INCREMENT,
  `linea_sennova` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_tipo_asesoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`formularios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`formularios` (
  `id_formulario` INT NOT NULL AUTO_INCREMENT,
  `fk_id_tipo_cliente` INT NOT NULL,
  `fk_id_tipo_asesoria` INT NOT NULL,
  PRIMARY KEY (`id_formulario`),
  CONSTRAINT `fk_formularios_id_cliente`
    FOREIGN KEY (`fk_id_tipo_cliente`)
    REFERENCES `pagina_sennova`.`tipo_cliente` (`id_cliente`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_formularios_id_tipo_asesoria`
    FOREIGN KEY (`fk_id_tipo_asesoria`)
    REFERENCES `pagina_sennova`.`tipo_asesoria` (`id_tipo_asesoria`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`aprendices`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`aprendices` (
  `id_aprendices` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(20) NOT NULL,
  `telefono` VARCHAR(10) NULL,
  `fk_id_proyecto` INT NOT NULL,
  PRIMARY KEY (`id_aprendices`),
  CONSTRAINT `fk_aprendices_id_proyecto`
    FOREIGN KEY (`fk_id_proyecto`)
    REFERENCES `pagina_sennova`.`proyecto` (`id_proyecto`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`reunion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`reunion` (
  `id_reunion` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `lugar` VARCHAR(45) NULL,
  `hora_inicio` TIME NOT NULL,
  `hora_fin` TIME NOT NULL,
  `fk_id_proyecto` INT NOT NULL,
  `fk_id_tipo_asesoria` INT NOT NULL,
  PRIMARY KEY (`id_reunion`),
  CONSTRAINT `fk_reunion_id_proyecto`
    FOREIGN KEY (`fk_id_proyecto`)
    REFERENCES `pagina_sennova`.`proyecto` (`id_proyecto`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_reunion_id_tipo_asesoria`
    FOREIGN KEY (`fk_id_tipo_asesoria`)
    REFERENCES `pagina_sennova`.`tipo_asesoria` (`id_tipo_asesoria`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`asesoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`asesoria` (
  `id_asesoria` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `descripcion` VARCHAR(20) NOT NULL,
  `fk_id_tipo_asesoria` INT NOT NULL,
  PRIMARY KEY (`id_asesoria`),
  CONSTRAINT `fk_asesoria_id_tipo_asesoria`
    FOREIGN KEY (`fk_id_tipo_asesoria`)
    REFERENCES `pagina_sennova`.`tipo_asesoria` (`id_tipo_asesoria`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`aprendices_asesoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`aprendices_asesoria` (
  `fk_id_aprendices` INT NOT NULL,
  `fk_id_asesoria` INT NOT NULL,
  PRIMARY KEY (`fk_id_aprendices`, `fk_id_asesoria`),
  CONSTRAINT `fk_aprendices_asesoria_id_aprendices`
    FOREIGN KEY (`fk_id_aprendices`)
    REFERENCES `pagina_sennova`.`aprendices` (`id_aprendices`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_aprendices_asesoria_id_asesoria`
    FOREIGN KEY (`fk_id_asesoria`)
    REFERENCES `pagina_sennova`.`asesoria` (`id_asesoria`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`personal_tecnico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`personal_tecnico` (
  `id_personal_tecnico` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(20) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_personal_tecnico`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`reunion_personal_tecnico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`reunion_personal_tecnico` (
  `fk_id_personal_tecnico` INT NOT NULL,
  `fk_id_reunion` INT NOT NULL,
  PRIMARY KEY (`fk_id_personal_tecnico`, `fk_id_reunion`),
  CONSTRAINT `fk_reunion_personal_tecnico_id_reunion`
    FOREIGN KEY (`fk_id_reunion`)
    REFERENCES `pagina_sennova`.`reunion` (`id_reunion`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_reunion_personal_tecnico_id_personal_tecnico`
    FOREIGN KEY (`fk_id_personal_tecnico`)
    REFERENCES `pagina_sennova`.`personal_tecnico` (`id_personal_tecnico`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pagina_sennova`.`asesoria_personal_tecnico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pagina_sennova`.`asesoria_personal_tecnico` (
  `fk_id_asesoria` INT NOT NULL,
  `fk_id_personal_tecnico` INT NOT NULL,
  PRIMARY KEY (`fk_id_asesoria`, `fk_id_personal_tecnico`),
  CONSTRAINT `fk_asesoria_personal_tecnico_id_asesoria`
    FOREIGN KEY (`fk_id_asesoria`)
    REFERENCES `pagina_sennova`.`asesoria` (`id_asesoria`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `fk_asesoria_personal_tecnico_id_personal_tecnico`
    FOREIGN KEY (`fk_id_personal_tecnico`)
    REFERENCES `pagina_sennova`.`personal_tecnico` (`id_personal_tecnico`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB;