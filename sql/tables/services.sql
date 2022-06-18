create table services(
idServicePK int not null auto_increment, -- primary key
primary key (idServicePK), -- set primary key
name varchar(255) not null, -- service name
category varchar(255) not null, -- service category
type varchar(255) not null, -- service type
description varchar(255) not null, -- service description
n int not null, -- number of tickets or services bought by users
price decimal(10,2) not null, -- price of service
timing int not null, -- time 1, 2,3....
duration varchar(255) not null -- duration years, days, hours, ecc...
);