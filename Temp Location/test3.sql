drop table if exists clients;

create table clients

(
clientId INT(11) primary key auto_increment,
clientName varchar(32),
clientPW varchar(64),
activeSession varchar(128),
firstLogin datetime,
lastlogin datetime

);
