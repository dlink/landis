set foreign_key_checks = 0;
 
drop table /*! if exists */ orders;

create table orders (
    id             integer unsigned  not null primary key,
    order_date     datetime          not null,
    customer_id    integer unsigned  not null,

    created        datetime          not null,
    last_updated   timestamp         not null 
         default current_timestamp on update current_timestamp,

    foreign key (customer_id) references customers (id)
)
engine InnoDB default charset=utf8;
;

load data local infile 'data/test_orders.csv' into table orders
fields terminated by ',' optionally enclosed by '"' ignore 1 lines;

show count(*) warnings;
show warnings;

set foreign_key_checks = 1;

select * from orders;


