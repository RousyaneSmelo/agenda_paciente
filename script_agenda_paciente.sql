CREATE SCHEMA `agenda_paciente` ;

CREATE TABLE `agenda_paciente`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `senha` VARCHAR(50) NOT NULL,
  `login` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idusuario`));

CREATE TABLE `agenda_paciente`.`pessoa` (
  `idpessoa` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL,
  `email` VARCHAR(100) NULL,
  `login` INT NULL,
  PRIMARY KEY (`idpessoa`),
  INDEX `fk_login_idx` (`login` ASC) VISIBLE,
  CONSTRAINT `fk_login`
    FOREIGN KEY (`login`)
    REFERENCES `agenda_paciente`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	
	

ALTER TABLE `agenda_paciente`.`pessoa` 
ADD CONSTRAINT `fk_login`
  FOREIGN KEY (`login`)
  REFERENCES `agenda_paciente`.`usuario` (`idusuario`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

ALTER TABLE `agenda_paciente`.`pessoa` 
ADD COLUMN `tipo` CHAR(1) NOT NULL DEFAULT 'P' AFTER `login`;

CREATE TABLE `agenda_paciente`.`agenda` (
  `idagenda` INT NOT NULL AUTO_INCREMENT,
  `data_inicio` DATETIME NOT NULL,
  `data_fim` DATETIME NOT NULL,
  `pessoa` INT NOT NULL,
  PRIMARY KEY (`idagenda`),
  CONSTRAINT `fk_pessoa`
    FOREIGN KEY (`pessoa`)
    REFERENCES `agenda_paciente`.`pessoa` (`idpessoa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

ALTER TABLE `agenda_paciente`.`agenda` 
ADD COLUMN `descricao` VARCHAR(250) NULL AFTER `pessoa`;

INSERT INTO `agenda_paciente`.`usuario` (`idusuario`, `senha`, `login`) VALUES ('1', '123', '123');
