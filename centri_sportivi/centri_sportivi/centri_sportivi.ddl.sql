DROP DATABASE IF EXISTS centri_sportivi;

DROP DATABASE IF EXISTS campi;
DROP DATABASE IF EXISTS prenotazioni;
DROP DATABASE IF EXISTS users;

CREATE TABLE campi (
  id INT(11) AUTO_INCREMENT NOT NULL,
  nome VARCHAR(45) NOT NULL,
  sport VARCHAR(45) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE `users` (
  id int(11) AUTO_INCREMENT NOT NULL,
  username varchar(100) NOT NULL,
  password varchar(45) NOT NULL,
  email varchar(45) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE prenotazioni (
  id int(11) AUTO_INCREMENT NOT NULL,
  campo int(11) NOT NULL,
  data_prenotazioni date NOT NULL,
  id_prenotatore int(11) NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY (id_prenotatore) REFERENCES users(id),
  FOREIGN KEY (campo) REFERENCES campi (id)
);
