drop database gametetris;
create database gametetris;
	use gametetris;
	create table user (
		Id int NOT NULL AUTO_INCREMENT,
		Nome varchar(255) NOT NULL,
		Nascimento date,
		CPF char(11) UNIQUE,
		Telefone varchar(30),
		Email varchar(255) UNIQUE,
		Username varchar(255) NOT NULL UNIQUE,
		Password varchar(255) NOT NULL,
		PRIMARY KEY (Id)
		);
	create table matches (
		Id int NOT NULL AUTO_INCREMENT,
		UserId int NOT NULL,
		Score int NOT NULL,
		Level int NOT NULL,
		PRIMARY KEY (Id),
		FOREIGN KEY (UserId) REFERENCES user(Id)
		);

	insert into user(Nome, Username, Password)
		values("Vai se foder", "hehe123", MD5 ("selokei"));

	insert into matches(UserId, Score, Level)
		values(1, 1000, 5), (1, 200, 5), (1, 500, 5), (1, 5000, 5), (1, 10000, 5), (1, 100000, 5), (1, 1000000, 5), (1, 1000, 5), (1, 1000, 5), (1, 1777, 5), (1, 666, 5), (1, 777, 5), (1, 888, 5), (1, 999, 5), (1, 1000, 5), (1, 1000, 5);

	select u.Nome, m.Score, m.Level from matches m, user u
	order by m.Score DESC LIMIT 10;