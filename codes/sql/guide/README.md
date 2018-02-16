# SQL

## Referências
---
- [MySQL - SQL Statement Syntax](https://dev.mysql.com/doc/refman/5.7/en/sql-syntax.html)
- Mysql: [Tipos](https://www.tutorialspoint.com/mysql/mysql-data-types.htm), [Funções](https://www.w3schools.com/sql/sql_ref_mysql.asp)
- [Oracle - Database SQL Language Reference](https://docs.oracle.com/database/121/SQLRF/toc.htm)
- SQL Tutorial: [W3Schools](https://www.w3schools.com/sql/default.asp) e [TutorialsPoint](https://www.tutorialspoint.com/sql/index.htm)
- SQL cheat sheet: [ZeroTurnaround](https://zeroturnaround.com/rebellabs/sql-cheat-sheet/), [cse.unl.edu](http://cse.unl.edu/~sscott/ShowFiles/SQL/CheatSheet/SQLCheatSheet.html), [hofmannsven](https://gist.github.com/hofmannsven/9164408), [sqltutorial](http://www.sqltutorial.org/sql-cheat-sheet/)

## Comandos
---

```
$ mysql_secure_installation
```

```
$ mysql -u [username] -p
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 56
Server version: 5.5.59-0ubuntu0.14.04.1 (Ubuntu)

Copyright (c) 2000, 2016, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql>

$ mysql -h127.0.0.1 -P3306 -uroot -pabc123
mysql: [Warning] Using a password on the command line interface can be insecure.
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 57
Server version: 5.5.59-0ubuntu0.14.04.1 (Ubuntu)

Copyright (c) 2000, 2016, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql>
```


> **DICAS:**
> - Os comandos não são *case sensitive*
> - Os nomes são *case sensitive*
> - Não esqueça do `;` nos comandos
> - Em caso de erro tente interpretar a mensagem de erro

```sql
> SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
+--------------------+
3 rows in set (0.00 sec)
```

```sql
> CREATE DATABASE monitor_db;
Query OK, 1 row affected (0.00 sec)

> SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| monitor_db         |
| mysql              |
| performance_schema |
+--------------------+
4 rows in set (0.00 sec)
```

```sql
> DROP DATABASE monitor_db;
Query OK, 0 rows affected (0.00 sec)

> SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
+--------------------+
3 rows in set (0.00 sec)
```

```sql
> USE monitor_db;
Database changed

> SELECT DATABASE();
+------------+
| DATABASE() |
+------------+
| monitor_db |
+------------+
1 row in set (0.00 sec)
```

```sql
> CREATE TABLE host(
  id int not null auto_increment,
  name varchar(100) not null,
  address varchar(100) not null,
  primary key ( id )
);
Query OK, 0 rows affected (0.00 sec)

> SHOW TABLES;
+----------------------+
| Tables_in_monitor_db |
+----------------------+
| host                 |
+----------------------+
1 row in set (0.00 sec)

> DESCRIBE host;
+---------+--------------+------+-----+---------+----------------+
| Field   | Type         | Null | Key | Default | Extra          |
+---------+--------------+------+-----+---------+----------------+
| id      | int(11)      | NO   | PRI | NULL    | auto_increment |
| name    | varchar(100) | NO   |     | NULL    |                |
| address | varchar(100) | NO   |     | NULL    |                |
+---------+--------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)

> DROP TABLE host;
Query OK, 0 rows affected (0.00 sec)
```

```sql
> RENAME TABLE host TO hosts;
Query OK, 0 rows affected (0.00 sec)

> SHOW TABLES;
+----------------------+
| Tables_in_monitor_db |
+----------------------+
| hosts                |
+----------------------+
1 row in set (0.01 sec)
```

```sql
> ALTER TABLE host ADD COLUMN mask varchar(100);
Query OK, 0 rows affected (0.01 sec)
Records: 0  Duplicates: 0  Warnings: 0

> DESCRIBE host;
+---------+--------------+------+-----+---------+----------------+
| Field   | Type         | Null | Key | Default | Extra          |
+---------+--------------+------+-----+---------+----------------+
| id      | int(11)      | NO   | PRI | NULL    | auto_increment |
| name    | varchar(100) | NO   |     | NULL    |                |
| address | varchar(100) | NO   |     | NULL    |                |
| mask    | varchar(100) | YES  |     | NULL    |                |
+---------+--------------+------+-----+---------+----------------+
4 rows in set (0.00 sec)

> ALTER TABLE host DROP COLUMN mask;
Query OK, 0 rows affected (0.01 sec)
Records: 0  Duplicates: 0  Warnings: 0

> DESCRIBE host;
+---------+--------------+------+-----+---------+----------------+
| Field   | Type         | Null | Key | Default | Extra          |
+---------+--------------+------+-----+---------+----------------+
| id      | int(11)      | NO   | PRI | NULL    | auto_increment |
| name    | varchar(100) | NO   |     | NULL    |                |
| address | varchar(100) | NO   |     | NULL    |                |
+---------+--------------+------+-----+---------+----------------+
3 rows in set (0.00 sec)
```

```sql
> INSERT INTO host
    VALUES (1, 'www.ifpb.edu.br', '200.10.10.10');
Query OK, 1 row affected (0.01 sec)
```

```sql
> INSERT INTO host
      (name, address)
    VALUES
      ('www.ifrn.edu.br', '200.10.10.11'),
      ('www.ifpb.edu.br', '200.10.10.12');
Query OK, 2 rows affected (0.01 sec)
Records: 2  Duplicates: 0  Warnings: 0
```

```sql
> SELECT * FROM host;
+----+-----------------+--------------+
| id | name            | address      |
+----+-----------------+--------------+
|  1 | www.ifpb.edu.br | 200.10.10.10 |
|  2 | www.ifrn.edu.br | 200.10.10.11 |
|  3 | www.ifpb.edu.br | 200.10.10.12 |
+----+-----------------+--------------+
3 rows in set (0.00 sec)
```

```sql
> SELECT name, address FROM host;
+-----------------+--------------+
| name            | address      |
+-----------------+--------------+
| www.ifpb.edu.br | 200.10.10.10 |
| www.ifrn.edu.br | 200.10.10.11 |
| www.ifpb.edu.br | 200.10.10.12 |
+-----------------+--------------+
3 rows in set (0.00 sec)
```

```sql
> SELECT name, address FROM host 
    ORDER BY name;
+-----------------+--------------+
| name            | address      |
+-----------------+--------------+
| www.ifpb.edu.br | 200.10.10.10 |
| www.ifpb.edu.br | 200.10.10.12 |
| www.ifrn.edu.br | 200.10.10.11 |
+-----------------+--------------+
3 rows in set (0.01 sec)
```

```sql
> SELECT name, address FROM host 
    WHERE id = 1;
+-----------------+--------------+
| name            | address      |
+-----------------+--------------+
| www.ifpb.edu.br | 200.10.10.10 |
+-----------------+--------------+
1 row in set (0.00 sec)
```

```sql
> SELECT * FROM host LIMIT 2;
+----+-----------------+--------------+
| id | name            | address      |
+----+-----------------+--------------+
|  1 | www.ifpb.edu.br | 200.10.10.10 |
|  2 | www.ifrn.edu.br | 200.10.10.11 |
+----+-----------------+--------------+
2 rows in set (0.00 sec)
```

```sql
> SELECT * FROM host LIMIT 2 OFFSET 1;
+----+-----------------+--------------+
| id | name            | address      |
+----+-----------------+--------------+
|  2 | www.ifrn.edu.br | 200.10.10.11 |
|  3 | www.ifpb.edu.br | 200.10.10.12 |
+----+-----------------+--------------+
2 rows in set (0.00 sec)
```

```sql
> SELECT count(*) FROM host;
+----------+
| count(*) |
+----------+
|        3 |
+----------+
1 row in set (0.00 sec)
```

```sql
> UPDATE host
    SET address = '10.0.0.10'
    WHERE id = 2;
Query OK, 1 row affected (0.01 sec)
Rows matched: 1  Changed: 1  Warnings: 0

> SELECT * FROM host 
    WHERE id = 2;
+----+-----------------+-----------+
| id | name            | address   |
+----+-----------------+-----------+
|  2 | www.ifrn.edu.br | 10.0.0.10 |
+----+-----------------+-----------+
1 row in set (0.00 sec)
```

```sql
> DELETE FROM host
    WHERE id = 2;
Query OK, 1 row affected (0.01 sec)

> SELECT * FROM host 
    WHERE id = 2;
Empty set (0.00 sec)
```

```sql
> CREATE TABLE history(
    id int not null auto_increment,
    transmitted int,
    received int,
    time TIME,
    host_id int,
    primary key ( id ),
    foreign key (host_id) references host(id)
);
Query OK, 0 rows affected (0.02 sec)

> DESCRIBE history;
+-------------+---------+------+-----+---------+----------------+
| Field       | Type    | Null | Key | Default | Extra          |
+-------------+---------+------+-----+---------+----------------+
| id          | int(11) | NO   | PRI | NULL    | auto_increment |
| transmitted | int(11) | YES  |     | NULL    |                |
| received    | int(11) | YES  |     | NULL    |                |
| time        | time    | YES  |     | NULL    |                |
| host_id     | int(11) | YES  | MUL | NULL    |                |
+-------------+---------+------+-----+---------+----------------+
5 rows in set (0.00 sec)
```

```sql
> INSERT INTO history
     (transmitted, received, time, host_id)
    VALUES
      (4, 4, NOW(), 1),
      (8, 4, NOW(), 1),
      (7, 4, NOW(), 3),
      (5, 5, NOW(), 3),
      (4, 3, NOW(), 1);
Query OK, 5 rows affected (0.01 sec)
Records: 5  Duplicates: 0  Warnings: 0

> SELECT * FROM history;
+----+-------------+----------+----------+---------+
| id | transmitted | received | time     | host_id |
+----+-------------+----------+----------+---------+
|  1 |           4 |        4 | 11:53:41 |       1 |
|  2 |           8 |        4 | 11:53:41 |       1 |
|  3 |           7 |        4 | 11:53:41 |       3 |
|  4 |           5 |        5 | 11:53:41 |       3 |
|  5 |           4 |        3 | 11:53:41 |       1 |
+----+-------------+----------+----------+---------+
5 rows in set (0.00 sec)

> SELECT * FROM host, history;
+----+-----------------+--------------+----+-------------+----------+----------+---------+
| id | name            | address      | id | transmitted | received | time     | host_id |
+----+-----------------+--------------+----+-------------+----------+----------+---------+
|  1 | www.ifpb.edu.br | 200.10.10.10 |  1 |           4 |        4 | 11:53:41 |       1 |
|  3 | www.ifpb.edu.br | 200.10.10.12 |  1 |           4 |        4 | 11:53:41 |       1 |
|  1 | www.ifpb.edu.br | 200.10.10.10 |  2 |           8 |        4 | 11:53:41 |       1 |
|  3 | www.ifpb.edu.br | 200.10.10.12 |  2 |           8 |        4 | 11:53:41 |       1 |
|  1 | www.ifpb.edu.br | 200.10.10.10 |  3 |           7 |        4 | 11:53:41 |       3 |
|  3 | www.ifpb.edu.br | 200.10.10.12 |  3 |           7 |        4 | 11:53:41 |       3 |
|  1 | www.ifpb.edu.br | 200.10.10.10 |  4 |           5 |        5 | 11:53:41 |       3 |
|  3 | www.ifpb.edu.br | 200.10.10.12 |  4 |           5 |        5 | 11:53:41 |       3 |
|  1 | www.ifpb.edu.br | 200.10.10.10 |  5 |           4 |        3 | 11:53:41 |       1 |
|  3 | www.ifpb.edu.br | 200.10.10.12 |  5 |           4 |        3 | 11:53:41 |       1 |
+----+-----------------+--------------+----+-------------+----------+----------+---------+
10 rows in set (0.00 sec)

> SELECT * FROM host, history
    WHERE host.id = history.host_id;
+----+-----------------+--------------+----+-------------+----------+----------+---------+
| id | name            | address      | id | transmitted | received | time     | host_id |
+----+-----------------+--------------+----+-------------+----------+----------+---------+
|  1 | www.ifpb.edu.br | 200.10.10.10 |  1 |           4 |        4 | 11:53:41 |       1 |
|  1 | www.ifpb.edu.br | 200.10.10.10 |  2 |           8 |        4 | 11:53:41 |       1 |
|  1 | www.ifpb.edu.br | 200.10.10.10 |  5 |           4 |        3 | 11:53:41 |       1 |
|  3 | www.ifpb.edu.br | 200.10.10.12 |  3 |           7 |        4 | 11:53:41 |       3 |
|  3 | www.ifpb.edu.br | 200.10.10.12 |  4 |           5 |        5 | 11:53:41 |       3 |
+----+-----------------+--------------+----+-------------+----------+----------+---------+
5 rows in set (0.00 sec)
```

```sql
> exit
Bye
```

```
$ mysqldump -u [username] -p [database] > database_backup.sql
```

```
$ mysql -u [username] -p [database] < database_backup.sql
```
