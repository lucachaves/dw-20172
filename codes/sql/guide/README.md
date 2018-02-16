# SQL

## Referências
---
- [MySQL - SQL Statement Syntax](https://dev.mysql.com/doc/refman/5.7/en/sql-syntax.html)
- [Typos do Mysql](https://www.tutorialspoint.com/mysql/mysql-data-types.htm)
- [Oracle - Database SQL Language Reference](https://docs.oracle.com/database/121/SQLRF/toc.htm)
- SQL Tutorial: [W3Schools](https://www.w3schools.com/sql/default.asp) e [TutorialsPoint](https://www.tutorialspoint.com/sql/index.htm)
- SQL cheat sheet: [ZeroTurnaround](https://zeroturnaround.com/rebellabs/sql-cheat-sheet/), [cse.unl.edu](http://cse.unl.edu/~sscott/ShowFiles/SQL/CheatSheet/SQLCheatSheet.html), [hofmannsven](https://gist.github.com/hofmannsven/9164408), [sqltutorial](http://www.sqltutorial.org/sql-cheat-sheet/)

## Comandos
---

```
$ mysql -u [username] -p
```

```sql
show databases;
```

```sql
create database <db-name>;
show databases;
```

```sql
drop database <db-name>;
show databases;
```

```sql
use <db-name>;
select DATABASE();
```

```sql
create table host(
  id int not null auto_increment,
  name varchar(100) not null,
  address varchar(100) not null,
  primary key ( id )
);
show tables;
describe host;
```

```sql
rename table host to hosts;
show tables;
```

```sql
alter table host add mask varchar(100);
alter table host drop column mask;
```

```sql
insert into host
  values
  (1, 'www.ifpb.edu.br', '200.10.10.10');
```

```sql
insert into host
  (name, address)
  values
  ('www.ifrn.edu.br', '200.10.10.11'),
  ('www.ifpb.edu.br', '200.10.10.12');
```

```sql
select * from host;
```

```sql
select name, address from host;
```

```sql
select name, address from host order by name;
```

```sql
select name, address from host where id = 1;
```

```sql
select count(*) from host;
```

```sql
update host
  set address = '10.0.0.10'
  where id = 2;
```

```sql
delete from host
  where id = 2;
```

```sql
$ mysqldump -u [username] -p [database] > database_backup.sql
```

```sql
$ mysql -u [username] -p [database] < database_backup.sql
```
