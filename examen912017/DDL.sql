create database unitbase;

use unitbase;
drop table if exists UnitBase;
create table UnitBase(
    Name varchar(255) character set utf8 not null,
    Description varchar(1024) character set utf8,
    ShippingCostMultiplier float(6,3),
    Code varchar(2) character set utf8 not null,
    Id int not null auto_increment,
    constraint pk_Id primary key(Id),
    constraint uniq_Name unique(Name),
    constraint uniq_Code unique(Code)
);