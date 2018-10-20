CREATE TABLE player (
	playerID SERIAL primary key,
	FirstName VARCHAR(50),
	LastName VARCHAR(50)
);

CREATE TABLE cardInfo (
	playerID primary key,
	year VARCHAR(4),
	cardType VARCHAR(50),
	cardNumber VARCHAR(10)	
);

INSERT INTO player (playerId, FirstName, LastName) VALUES ('1', 'Freddie', 'Freeman');

INSERT INTO cardInfo (playerId, year, cardType, cardNumber) VALUES ('1', '2011', 'Topps', '184');
INSERT INTO cardInfo (playerId, year, cardType, cardNumber) VALUES ('1', '2013', 'Bowman', '68');
INSERT INTO cardInfo (playerId, year, cardType, cardNumber) VALUES ('1', '2018', 'Gypsy Queen', '05');