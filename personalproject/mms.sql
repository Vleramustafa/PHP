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

ALTER TABLE users ADD PRIMARY KEY (id)

ALTER TABLE clothes ADD PRIMARY KEY (id);
ALTER TABLE orders ADD PRIMARY KEY (id);

ALTER TABLE users MODIFY id int(11) NOT NULL AUTO_INCREMENT
ALTER TABLE clothes MODIFY id int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE orders MODIFY id int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `clothes` (`id`, `clothes_image`, `clothes_rating`, `clothes_price`, `clothes_quantity`) VALUES 
(1, 'e.jpg', 10, '30$'),
(2, 'photo(1).webp', 7, '15$'),
(3, 'el.jpg', 9, '25$');

INSERT INTO `orders` (`id`, `user_id`, `clothes_id`, `is_approved`) VALUES
(3,2,1, 'true');



 