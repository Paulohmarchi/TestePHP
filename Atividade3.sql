CREATE TABLE `Funcionario` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255),
  `Idade` int(3),
  `Salario` numeric(15,2),
  `Ativo` char(1) NOT NULL DEFAULT 'S',
  PRIMARY KEY (`Id`));

INSERT INTO Funcionario(Nome, Idade, Salario, Ativo) VALUES ('João', 34, 800.00, 'S');
INSERT INTO Funcionario(Nome, Idade, Salario, Ativo) VALUES ('José', 52, 1250.00, 'N');
INSERT INTO Funcionario(Nome, Idade, Salario, Ativo) VALUES ('Maria', 54, 1400.00, 'S');
INSERT INTO Funcionario(Nome, Idade, Salario, Ativo) VALUES ('Luana', 48, 900.00, 'S');
INSERT INTO Funcionario(Nome, Idade, Salario, Ativo) VALUES ('Manoel', 52, 1.50, 'S');


