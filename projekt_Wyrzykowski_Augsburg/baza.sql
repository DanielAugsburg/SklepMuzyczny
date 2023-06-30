CREATE DATABASE projektbaza;
CREATE TABLE projektbaza.rejestracja (
  ID int not null auto_increment unique,
  imie varchar(70),
  nazwisko varchar(70),
  nick varchar(50),
  email varchar(70),
  telefon int(9),
  haslo varchar(32)
);
INSERT INTO projektbaza.rejestracja (
  ID,
  imie,
  nazwisko,
  nick,
  email,
  telefon,
  haslo
)
VALUES
(1,'Mateusz','Wyrzykowski','mateusz','m.wyrzykowski@gmail.com','854123951','test'),
(2,'Daniel','Augsburg','daniel','d.augsburg@gmail.com','254894132','test');

CREATE TABLE projektbaza.produkty (
ID int not null auto_increment unique,
nazwa varchar(50),
cena float,
kategoria varchar(50)
);
INSERT INTO projektbaza.produkty (
  ID,
  nazwa,
  cena,
  kategoria
)
VALUES
(1,'EKO S-300 BLK GITARA ELEKTRYCZNA',839.00,'gitary'),
(2,'BE JOE GC-102 GITARA KLASYCZNA 1/4 Z POKROWCEM',319.00,'gitary'),
(3,'TAKAMINE GB72CE-BSB',2999.00,'gitary'),
(4,'BE JOE FZU-110 WH CONCERT UKULELE KONCERTOWE',319.00,'gitary'),
(5,'CASIO AP-470 BK',5899.00,'pianina'),
(6,'YAMAHA P-125B - PIANINO CYFROWE',3199.00,'pianina'),
(7,'CASIO CT-X700 - KEYBOARD',1299.00,'pianina'),
(8,'WELTMEISTER SAPHIR 41/120/IV/11/5 WHITE',14900.00,'pianina'),
(9,'BE JOE HP-580 - SŁUCHAWKI',189.00,'sluchawki'),
(10,'SHURE SRH 240 A-BK-EFS',249.00,'sluchawki'),
(11,'SHURE SRH-440A-EFS - Słuchawki',449.00,'sluchawki'),
(12,'SHURE SRH 840A-EFS - SŁUCHAWKI',554.00,'sluchawki'),
(13,'BE JOE MBC-6 mikrofon',339.00,'mikrofony'),
(14,'NOVOX NCX cyfrowy pojemnościowy mikrofon',449.00,'mikrofony'),
(15,'SHURE SM 57 LCE - mikrofon instrumentalny',549.00,'mikrofony'),
(16,'NOVOX FREE H1 mikrofon bezprzewodowy',349.00,'mikrofony'),
(17,'J.MICHAEL TR-380',1299.00,'trabki'),
(18,'J. MICHAEL TR-300SA',1199.00,'trabki'),
(19,'J. MICHAEL TR-500S',1799.00,'trabki'),
(20,'J.MICHAEL TR-200A',999.00,'trabki');

CREATE TABLE projektbaza.koszyk (
ID int not null auto_increment unique,
nazwa varchar(50),
cena float,
ilosc int,
zdjecie varchar(50)
);
CREATE TABLE projektbaza.kontakt (
ID int not null auto_increment unique,
Imie varchar(40),
email varchar(50),
tresc varchar(500)
);