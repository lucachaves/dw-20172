# SQL

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
```

```sql
create table history(
  id int not null auto_increment,
  transmitted int,
  received int,
  time float,
  host_id int,
  primary key ( id ),
  foreign key (host_id) references host(id)
);
```

```sql
rename table history to host;
```

```sql
```

```sql
```

```sql
```

```sql
```