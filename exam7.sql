drop database if exists db_variant7;
create database if not exists db_variant7;
use db_variant7;

create table films(
	id int primary key auto_increment,
	film_name varchar(255),
	duration int,
    genre varchar(255)
);

INSERT INTO films(film_name, duration, genre) VALUES ('Film1', 1, 'Genre1'),
													('Film2', 2, 'Genre2'),
													('Film3', 3, 'Genre3');
select * from films;
UPDATE films SET film_name = 'NewFilm' WHERE film_name LIKE '%Film%';