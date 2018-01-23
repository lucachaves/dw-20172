https://www.tutorialspoint.com/mysql/mysql-data-types.htm

show databases;
create database <db-name>;
drop database <db-name>;

use <db-name>;
select DATABASE();
create table host(
  id int not null auto_increment,
  name varchar(100) not null,
  address varchar(100) not null,
  primary key ( id )
);
create table history(
  id int not null auto_increment,
  transmitted int,
  received int,
  time float,
  host_id int,
  primary key ( id ),
  foreign key (host_id) references host(id)
);
rename table history to host;
show tables;
alter table history add ip varchar(100);
alter table history drop column transmitted;
describe history;

insert into history
  (host, transmitted, received, time)
  values
  ('www.ifpb.edu.br', 5, 5, 1000.0),
  ('www.ufpb.br', 5, 4, 2000.0),
  ('8.8.8.8', 5, 5, 500.0);

insert into history
  (host, transmitted, received, time)
  values
  ('www.ifpb.edu.br', 3, 3, 1000.0);

select id, host, transmitted, received, time from history;
select * from history;
select * from history where transmitted = received;
select count(*) from history where transmitted = received;
select sum(time) from history;
select id from history order by id desc limit 1;
select id from history order by id desc limit 1 offset 2;
select * from history order by time desc;
select * from history where id = 4;
select * from history where id = (select id from history order by id desc limit 1);
select * from history where transmitted = received order by host asc;

update history
  set time = 800.0
  where id = 4;

update history
  set received = 4, transmitted = 4
  where id = 4;

delete from history
  where id = 4;


create table request_icmp(
  id int not null auto_increment,
  address varchar(68) not null,
  ip varchar(68) not null,
  transmitted int not null,
  received int not null,
  created_at datetime not null,
  primary key (id)
);
insert into host (address, ip, transmitted, received, created_at) values ('www.ifpb.edu.br', '200.129.77.62', 2, 2, now());
insert into host (address, ip, transmitted, received, created_at) values ('www.ifpb.edu.br', '200.129.77.62', 4, 2, now());
select * from request_icmp;
select address, ip, transmitted, received, transmitted-received as losted  from request_icmp;

create table packet(
  id int not null auto_increment,
  seq int not null,
  ttl int not null,
  time float not null,
  request_icmp_id int not null,
  primary key (id),
  foreign key (request_icmp_id) references request_icmp(id)
);
insert into packet (seq, ttl, time, request_icmp_id) values (1, 63, 2, 2),(2, 63, 1.95, 2);
select * from packet where request_icmp_id = 2;
select sum(time) from packet where request_icmp_id=2;

IMPORT/EXPORT
$ mysqldump -u root -p monitor_app > monitor_app_backup.sql
$ mysql -u root -p monitor_app < monitor_app_backup.sql
