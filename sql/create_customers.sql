set foreign_key_checks = 0;
 
drop table /*! if exists */ customers;

create table customers (
    id             integer unsigned  not null primary key auto_increment,
    type_id        integer unsigned  not null,
    email          varchar(128)      not null,
    first_name     varchar(128)      ,
    last_name      varchar(128)      not null,
    company        varchar(128)      ,
    phone          varchar(128)      ,

    created        datetime          not null,
    last_updated   timestamp         not null 
         default current_timestamp on update current_timestamp,

    unique key email (email),
    -- unique key company (company),
    unique key name (first_name, last_name),
    foreign key (type_id) references customer_types (id)
)
engine InnoDB default charset=utf8;
;

load data local infile 'data/test_customers.csv' into table customers
fields terminated by ',' optionally enclosed by '"' ignore 1 lines;

show count(*) warnings;
show warnings;

set foreign_key_checks = 1;

select * from customers;


