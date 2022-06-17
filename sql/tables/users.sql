create table users(
idUserPK int not null auto_increment,
primary key (idUserPK),
idUserTypeFK int not null,
foreign key (idUserTypeFK) references userType (idUserTypePK),
username varchar(255) not null,
email varchar(255) not null,
pswd varchar(255) not null,
firstName varchar(255) not null,
lastName varchar(255) not null,
dateOfBirthDay date not null,
createdAt date not null
);
