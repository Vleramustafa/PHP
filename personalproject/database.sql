CREATE TABLE users (
    id int(11) NOT NULL,
    name varchar(255) NOT NULL,
    surname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    confirm_password varchar(255) NOT NULL,
    is_admin varchar(255) NOT NULL
)

CREATE TABLE books(
    id int(11) NOT NULL,
    book_title varchar(255) NOT NULL,
    book_author varchar(255) NOT NULL,
    book_desc varchar(255) NOT NULL,
    book_price varchar(255) NOT NULL,
    book_stock int(11) NOT NULL,
    book_cover varchar(255) NOT NULL
)

CREATE TABLE orders(
    id int(11) NOT NULL,
    user_id int(11) NOT NULL,
    book_id int(11) NOT NULL,
    quantity int(11) NOT NULL,
    order_date varchar(255) NOT NULL,
    total_price varchar(255) NOT NULL,
    is_approved varchar(255) NOT NULL
)

ALTER TABLE users ADD PRIMARY KEY (id);
ALTER TABLE books ADD PRIMARY KEY (id);
ALTER TABLE orders ADD PRIMARY KEY (id);

ALTER TABLE users MODIFY id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE books MODIFY id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE orders MODIFY id int(11) NOT NULL AUTO_INCREMENT;