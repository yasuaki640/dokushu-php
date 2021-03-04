create table products
(
    id       int primary key auto_increment,
    pname    varchar(255) not null,
    price    int,
    category varchar(255) default 'stationery'
);

insert into products(id, pname, price, category)
values (1, 'meron', 500, 'food'),
       (2, 'mango', 120, 'food'),
       (3, 'sharp pencil', 100, 'stationery'),
       (4, 'eraser', 50, 'stationery');