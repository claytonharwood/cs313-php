CREATE TABLE player (
	playerId SERIAL primary key,
	firstName VARCHAR(50),
	lastName VARCHAR(50)
);

CREATE TABLE cardInfo (
	cardId SERIAL primary key,
	playerId INT REFERENCES player(playerId),
	year VARCHAR(4),
	cardType VARCHAR(50),
	cardNumber VARCHAR(10)	
);

INSERT INTO player (playerId, firstName, lastName) VALUES ('1', 'Freddie', 'Freeman');
INSERT INTO player (playerId, firstName, lastName) VALUES ('2', 'Chipper', 'Jones');

INSERT INTO cardInfo (playerId, year, cardType, cardNumber) VALUES ('1', '2011', 'Topps', '184');
INSERT INTO cardInfo (playerId, year, cardType, cardNumber) VALUES ('1', '2013', 'Bowman', '68');
INSERT INTO cardInfo (playerId, year, cardType, cardNumber) VALUES ('1', '2018', 'Gypsy Queen', '05');

INSERT INTO cardInfo (playerId, year, cardType, cardNumber) VALUES ('2', '2000', 'Topps', '14');
INSERT INTO cardInfo (playerId, year, cardType, cardNumber) VALUES ('2', '2001', 'Bowman', '205');
INSERT INTO cardInfo (playerId, year, cardType, cardNumber) VALUES ('2', '2007', 'Gypsy Queen', '105');