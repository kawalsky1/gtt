create table user_type(
idUserTypePK int not null auto_increment,
primary key (idUserTypePK),
type varchar(255) not null
);
-- 0: registered user
-- 1: admin
