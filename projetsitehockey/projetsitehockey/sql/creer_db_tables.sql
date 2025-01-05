CREATE DATABASE ligue DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE ligue;

CREATE TABLE equipe (
  code         INT(8),
  nom  VARCHAR(255),
  ville       VARCHAR(255),
  point     INT(8),
  CONSTRAINT produit_pk PRIMARY KEY (code)
);

INSERT INTO equipe VALUES (1,'Les Tigres','Ottawa',10);
INSERT INTO equipe VALUES (2,'Les Lions','Montral',55);
INSERT INTO equipe VALUES (3,'Les Aigles','Quebec',90);
INSERT INTO equipe VALUES (4,'Les Pantheres','Trois-Rivieres',89);
INSERT INTO equipe VALUES (5,'Les Requins','Chambly',45);
INSERT INTO equipe VALUES (6,'Les Dauphins','Saint-Jean-Sur-Richelieu',34);
INSERT INTO equipe VALUES (7,'Les Coyotes','Laval',09);
INSERT INTO equipe VALUES (8,'Le Rocket','Terrebonne',56);
INSERT INTO equipe VALUES (9,'Les Loups','Sherbrooke',99);
INSERT INTO equipe VALUES (10,'Le Fire','Gatineau',67);




CREATE TABLE utilisateur (
  nom         VARCHAR(255),
  mot_passe   VARCHAR(255),
  CONSTRAINT user_pk PRIMARY KEY (nom)
);

INSERT INTO utilisateur VALUES ('root','root');
INSERT INTO utilisateur VALUES ('moi','1234');
