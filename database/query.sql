-- creating new database 
create database if not exists OzMusic;

-- client
create table client(
    id_client int auto_increment,
    username varchar(50),
    email varchar(100),
    password_ varchar(20),
    nationality varchar(20),
    adress varchar(100),
    phone_number varchar(20),
    constraint client_pk primary key (id_client)
);

-- client_pics
create table client_pics(
    id_client_pics int AUTO_INCREMENT,
    client_pics varchar(100),
    id_client int,
    CONSTRAINT client_pics_pk PRIMARY KEY (id_client_pics),
    CONSTRAINT client_pics_fk FOREIGN KEY (id_client) REFERENCES client(id_client) 
    on UPDATE CASCADE on delete set null
)

-- products
create table products(
    id_product int auto_increment not null,
    product_name varchar(20),
    product_description varchar(200),
    category varchar(50),
    first_pic varchar(200),
    second_pic varchar(200),
    third_pic varchar(200),
    price varchar(20),
    constraint products_pk primary key (id_product)
)

-- products infos
create table product_infos(
    id_product_infos int auto_increment,
    id_product int,
    color varchar(20),
    picture varchar(200),
    constraint product_infos_pk primary key (id_product_infos),
    constraint id_product_infos_fk FOREIGN key (id_product) REFERENCES products(id_product) on UPDATE CASCADE on delete set null
);
