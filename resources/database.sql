drop table if exists Persons;
create table Persons (
    id int not null AUTO_INCREMENT primary key,
    name varchar(255) not null,
    lastname varchar(255) not null,
    age int,
    address text,
    telephone int
);

insert into Persons (name, lastname, age, address, telephone) values ('John', 'Doe', 30, 'Fake avenue 123', 999555111),
    ('Maria', 'Laplace', 40, 'Another avenue 456', 777555666),
    ('Julia', 'Winds', 20, 'Other avenue 789', 333222111),
    ('Richard', 'Atkins', 35, 'Diferent avenue', 888999777);