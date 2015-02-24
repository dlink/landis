set foreign_key_checks = 0;
 
drop table /*! if exists */ order_items;

create table order_items (
    id             integer unsigned  not null primary key,
    order_id       integer unsigned  not null,
    product_id     integer unsigned  not null,
    quantity       integer           not null,

    created        datetime          not null,
    last_updated   timestamp         not null 
         default current_timestamp on update current_timestamp,

    foreign key (order_id) references orders (id),
    foreign key (product_id) references products (id)
)
engine InnoDB default charset=utf8;
;

load data local infile 'data/test_order_items.csv' into table order_items
fields terminated by ',' optionally enclosed by '"' ignore 1 lines;

show count(*) warnings;
show warnings;

set foreign_key_checks = 1;

select * from order_items;


