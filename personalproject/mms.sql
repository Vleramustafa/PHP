-- TABLE STRUCTURE FOR TABLE 'USERS'
CREATE TABLE users(
     id int(11) NOT NULL ,
    name varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    surname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    confirm_password varchar(255) NOT NULL,
    is_admin varchar(255) NOT NULL
    )

-- TABLE STRUCTURE FOR TABLE 'PRODUCTS'
    CREATE TABLE products(
     id int(11) NOT NULL ,
     product_name varchar(255) NOT NULL,
     product_quality varchar(255) NOT NULL,
     product_rating int(11) NOT NULL,
     product_image varchar(255) NOT NULL
    )

-- TABLE STRUCTURE FOR TABLE 'ORDERS'
       CREATE TABLE orders(
     id int(11) NOT NULL ,
     user_id int(11) NOT NULL,
     product_id int(11) NOT NULL,
     is_approved varchar(255) NOT NULL,
    )

 ALTER TABLE users ADD PRIMARY KEY (id);
  ALTER TABLE productS ADD PRIMARY KEY (id);
   ALTER TABLE orders ADD PRIMARY KEY (id);



ALTER TABLE users MODIFY id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE products MODIFY id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE orders MODIFY id int(11) NOT NULL AUTO_INCREMENT;


INSERT INTO `users` 
(`id`, `name`, `surname`, `username`, `email`, `password`,`confirm_password`, `is_admin`)
 VALUES (1, 'Melisa', 'Terstena', 'melisa2', 'melisa2@mail.com', '12345678','12345678','1'), 
 (2, 'Elona', 'Ramiqi', 'elonaramiqi', 'elonaramiqi@mail.com', '12345678','12345678','0');


 INSERT INTO `products` (`id`, `product_name`, `product_quality`, `product_rating`, `product_image`) VALUES
(1,  '3D', 10, 'zgjoi.jpg'),
(2,  '2D', 7, 'fastandfurious.jpg'),
(3,  '6D', 7, 'venom.png');


INSERT INTO `orders` (`id`, `user_id`, `product_id`,`is_approved`) VALUES
(3, 2, 1, 'true');