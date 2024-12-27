-- Active: 1735251010884@@127.0.0.1@3306@myapp

use myapp ;
create table contact ( id int auto_increment primary key  , 
first_name varchar (60) not null , last_name varchar(60) NOT NULL , email varchar(70) NOT NULL , phone varchar (15) not NULL  ) ;


insert INTO contact VALUES(null, "ahmed", "foullane", "ahmedfoullane@gmail.com", "0708662364");

SELECT * FROM contact;