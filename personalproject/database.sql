CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    confirm_password VARCHAR(255) NOT NULL,
    is_admin VARCHAR(255) NOT NULL
);

CREATE TABLE books (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    book_title VARCHAR(255) NOT NULL,
    book_author VARCHAR(255) NOT NULL,
    book_desc VARCHAR(255) NOT NULL,
    book_price VARCHAR(255) NOT NULL,
    book_stock INT(11) NOT NULL,
    book_cover VARCHAR(255) NOT NULL
);


CREATE TABLE orders (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11) NOT NULL,
    book_id INT(11) NOT NULL,
    quantity INT(11) NOT NULL,
    order_date VARCHAR(255) NOT NULL,
    is_approved VARCHAR(255) NOT NULL
);
