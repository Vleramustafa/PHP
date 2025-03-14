CREATE TABLE users (
    id int(11) NOT NULL,
    name varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    confirm_password varchar(255) NOT NULL
 )
CREATE TABLE clothes (
    id int(11) NOT NULL,
    clothes_image varchar(255) NOT NULL,
    clothes_rating varchar(255) NOT NULL,
    clothes_price varchar(255) NOT NULL,
    clothes_quantity varchar(255) NOT NULL

)
 CREATE TABLE orders (
    id int(11) NOT NULL,
    user_id int(255) NOT NULL,
    clothes_id int(11) NOT NULL
    



 )