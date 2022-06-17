create table services(
idServicePK int not null auto_increment,
primary key (idServicePK),
name varchar(255) not null,
category varchar(255) not null,
type varchar(255) not null,
description varchar(255) not null,
price decimal not null,
timing int not null,
duration varchar(255)
);