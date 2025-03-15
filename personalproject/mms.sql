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

-- TABLE STRUCTURE FOR TABLE 'BOOKINGS'
       CREATE TABLE bookings(
     id int(11) NOT NULL ,
     user_id int(11) NOT NULL,
     product_id int(11) NOT NULL,
     nr_tickets int(255) NOT NULL,
     date varchar(255) NOT NULL,
     is_approved varchar(255) NOT NULL,
     time varchar(255) NOT NULL
    )

 ALTER TABLE users ADD PRIMARY KEY (id);
  ALTER TABLE productS ADD PRIMARY KEY (id);
   ALTER TABLE bookings ADD PRIMARY KEY (id);



ALTER TABLE users MODIFY id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE products MODIFY id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE bookings MODIFY id int(11) NOT NULL AUTO_INCREMENT;