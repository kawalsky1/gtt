create procedure insert_user (
    in idUserType int,
    in usr varchar(255),
    in email varchar(255),
    in pswd varchar(255),
    in firstName varchar(255),
    in lastName varchar(255),
    in dateOfBirthDay date,
    in createdAt date,
) 

begin 

insert into users(
    idUserTypeFK,
    username,
    email,
    pswd,
    firstName,
    lastName,
    dateOfBithDay,
    createdAt
) values (
    idUserType,
    usr,
    email,
    pswd,
    firstName,
    lastName,
    dateOfBirthDay,
    createdAt,
)

end
