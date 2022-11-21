-- -- To acces local Data Base (Mysql) in a web browser:
-- -- http://localhost/phpmyadmin

-- -- To acces local Data Base (Mysql) in command line (MAC):
-- -- cd/Applocation/MAMP/Library/
-- -- ./mysql --version
-- -- ./mysql -u root -p

-- -- To acces local Data Base (Mysql) in command line (Windows):
-- -- Open control Panel XAMPP / Click on a booton shall
-- -- Password without carctheres
-- -- ./mysql --version
-- -- ./mysql -u root -p

-- -- Show version Mysql
-- SELECT version();
-- -- Show All Data Bases:
-- SHOW databases;

-- -- Create a databases
-- CREATE DATABASE adsi2338200;

-- --Conect data base
-- CONNECT adsi2338200;

-- -- USE a adta base
-- USE adsi2338200;

-- -- Show tables
-- SHOW TABLE;

-- --create table
-- CREATE TABLE gyms;
--  CREATE TABLE trainers (
-- id INT AUTO_INCREMENT,
-- name VARCHAR(32) NOT NULL ,
-- level INT NOT NULL,
-- gym_id INT NOT NULL,
-- FOREIGN KEY(gym_id) REFERENCES gyms(id),
-- PRIMARY KEY(id));
--     );
-- -- Another Way(create)
-- CREATE TABLE pokemons(
--     id INT AUTO_INCREMENT,
--     name VARCHAR(32) not null UNIQUE,
--     type VARCHAR(32)not null,
--     strength INT not null,
--     stamina int not null,
--     speed int not null,
--     accuracy int not null,
--     trainer_id int not NULL,
--     FOREIGN KEY(trainer_id) REFERENCES trainers(id),
--     PRIMARY KEY (id));

--     -- describe table
--     Describe pokemons;
--     -- Agrgar campo en tabla
--     ALTER table pokemons add COLUMN trainer_id int not null after accuracy;
--     -- Eliminar columna de la tabla
--     alter TABLE pokemons drop column trainer_id;
--     -- Delete a tabla
--     DROP TABLE pokemons;
--     -- Borrar todos los registros
--     TRUNCATE TABLE pokemons;
--     DELETE * FROM pokemons;
--     -- insert pokemons
--     insert into gyms values(default,'Smartfit');
--     insert into trainers VALUE(default,'Homero',default,1);

--     -- create securyty copy(Backup)
--     ./mysqldump -u root -p adsi2338200 > /Users/AUTOCAD/desktop/backup.sql

--     -- recuperar security copy()
--     CREATE database adsi2338200;
--     ./mysqldump -u root -p adsi2338200 > /Users/AUTOCAD/desktop/backup.sql
--     -- insert data in another table
--     insert into pokemons_bk SELECT*FROM pokemons;




