CREATE TABLE player (
	playerID SERIAL primary key,
	FirstName VARCHAR(50),
	LastName VARCHAR(50)
);

CREATE TABLE cardInfo (
	playerID SERIAL primary key,
	year VARCHAR(4),
	cardType VARCHAR(50),
	cardNumber VARCHAR(10)	
);