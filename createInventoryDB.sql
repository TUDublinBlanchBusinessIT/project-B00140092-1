drop database if exists Inventory;
create database Inventory;
use Inventory;
create table usedCars (
    id int auto_increment,
    firstname varchar(30),
    surname varchar(30),
    carReg varchar(30), 
    carMiles INT,
    carYear INT,
    primary key(id)
);
insert into usedCars