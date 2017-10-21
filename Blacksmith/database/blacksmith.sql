create table customers(
cid int auto_increment,
primary key (cid),
fname varchar(15) not null,
lname varchar(15) not null,
phone varchar(10) not null,
street varchar(255) not null,
city varchar(30) not null,
state varchar(2) not null,
zip numeric(5) not null);

INSERT INTO customers
VALUES(
'1','bob','smith','555-5555','102 road','Mattoon','IL','61938'),
('2','lance','smithen','555-5578','1000 road','Mattoon','IL','61938'),
('3','jill','johnson','555-5655','101 road','Mattoon','IL','61938'),
('4','dan','ralph','555-5683','1036 road','Mattoon','IL','61938'),
('5','lucy','lane','555-9255','1403 road','Mattoon','IL','61938'),
('6','lara','lane','555-5655','1103 road','Mattoon','IL','61938'),
('7','john','doge','555-4059','1869 road','Mattoon','IL','61938'),
('8','jane','couples','555-5348','1093 road','Mattoon','IL','61938'),
('9','jeremy','hansen','555-8321','1603 road','Mattoon','IL','61938'),
('10','george','lopez','555-0987','10300 road','Mattoon','IL','61938');

create table sales(
sid int auto_increment,
primary key(sid),
date varchar(20),
cid int,
FOREIGN KEY (cid) REFERENCES customers(cid));


INSERT INTO Sales
VALUES('1', 'October 2', '1'),
('2', 'April 2', '3'),
('3', 'September 22', '7'),
('4', 'December 25', '4'),
('5', 'August 3', '9'),
('6', 'March 3', '6'),
('7', 'April 1', '8'),
('8', 'January 30', '5'),
('9', 'June 12', '10'),
('10', 'March 5', '2');

CREATE TABLE products(
pid int auto_increment,
primary key(pid),
molds varchar(30) not null,
price decimal(15) not null);

insert into products
values('1','pulleys','5.00'),
('2','wheels','5.00'),
('3','gears','5.00'),
('4','shafts','2.00'),
('5','blocks','2.00'),
('6','joints','5.00'),
('7','tubes','5.00'),
('8','baskets','10.00'),
('9','cages','15.00'),
('10','custom','20.00');


CREATE TABLE lineitems(
sid int,
pid int,
quantity int(15) NOT NULL,
PRIMARY KEY (sid, pid),
FOREIGN KEY (sid) REFERENCES Sales (sid),
FOREIGN KEY (pid) REFERENCES Products (pid));

insert into lineitems
values
('1','1','4'),
('7', '4','7'),
('9', '9', '9'),
('10','10','1'),
('7', '7', '3'),
('7', '6', '1'),
('4', '7', '5'),
('3', '4', '1'),
('5', '6', '5'),
('3', '3', '7');

create table metals(
mid int auto_increment,
primary key(mid),
type varchar(20) not null,
price_per_oz int not null);

insert into metals
values
('1','Aluminum','1.00'),
('2', 'Brass','3.00'),
('3', 'Bronze', '2.00'),
('4','Cast Iron','1.00'),
('5', 'Copper', '3.00'),
('6', 'Gold', '1500.00'),
('7', 'Nickel', '1.00'),
('8', 'Silver', '20.00'),
('9', 'Steel', '1.00'),
('10', 'platinum', '1600.00');

create table jobs(
jid int auto_increment,
mid int,
pid int,
primary key(jid,mid,pid),
FOREIGN KEY (mid) REFERENCES metals (mid),
FOREIGN KEY (pid) REFERENCES Products (pid),
oz int not null);

insert into jobs
values
('1','1','1','5'),
('2','2','2','10'),
('3','3','3','15'),
('4','4','4','20'),
('5','5','5','25'),
('6','6','6','30'),
('7','7','7','35'),
('8','8','8','40'),
('9','9','9','45'),
('10','10','10','50');


create table employees(
eid int auto_increment,
primary key (eid),
jid int,
FOREIGN KEY (jid) REFERENCES jobs (jid),
fname varchar(15) not null,
lname varchar(15) not null,
phone varchar(10) not null,
street varchar(255) not null,
city varchar(30) not null,
state varchar(2) not null,
zip numeric(5) not null);


INSERT INTO employees
VALUES(
'1','1','jim','johnson','555-5515','13032 road','Mattoon','IL','61938'),
('2','2','carrol','knee','555-6578','2000 road','Mattoon','IL','61938'),
('3','3','dudley','jojo','555-5685','5101 road','Mattoon','IL','61938'),
('4','4','jacob','ralphy','555-5643','10336 road','Mattoon','IL','61938'),
('5','5','tina','cholesterol','555-9445','13403 road','Mattoon','IL','61938'),
('6','6','daniel','flute','555-3335','12132 road','Mattoon','IL','61938'),
('7','7','kira','laderhosen','555-4087','18569 road','Mattoon','IL','61938'),
('8','8','gabriel','soup','555-9480','10934 road','Mattoon','IL','61938'),
('9','9','jeremy','hans','555-8761','14603 road','Mattoon','IL','61938'),
('10','10','enrique','lopez','555-0345','300 road','Mattoon','IL','61938');








