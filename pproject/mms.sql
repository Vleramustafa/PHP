-- TABLE STRUCTURE FOR TABLE 'USERS'
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT, 
    name VARCHAR(255) NOT NULL, 
    username VARCHAR(255) NOT NULL, 
    surname VARCHAR(255) NOT NULL, 
    email VARCHAR(255) NOT NULL, 
    password VARCHAR(255) NOT NULL, 
    confirm_password VARCHAR(255) NOT NULL, 
    is_admin VARCHAR(255) NOT NULL, 
    PRIMARY KEY (id)
);

-- TABLE STRUCTURE FOR TABLE 'PRODUCTS'
CREATE TABLE products (
    id INT(11) NOT NULL AUTO_INCREMENT, 
    product_name VARCHAR(255) NOT NULL, 
    product_quality VARCHAR(255) NOT NULL, 
    product_rating INT(11) NOT NULL, 
    product_image VARCHAR(255) NOT NULL, 
    PRIMARY KEY (id)
);

-- TABLE STRUCTURE FOR TABLE 'ORDERS'
CREATE TABLE orders (
    id INT(11) NOT NULL AUTO_INCREMENT, 
    user_id INT(11) NOT NULL, 
    product_id INT(11) NOT NULL, 
    is_approved VARCHAR(255) NOT NULL, 
    PRIMARY KEY (id), 
    FOREIGN KEY (user_id) REFERENCES users(id), 
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Insert Users (make sure passwords are hashed in a real scenario)
INSERT INTO `users` (`id`, `name`, `surname`, `username`, `email`, `password`, `confirm_password`, `is_admin`) 
VALUES 
(1, 'Melisa', 'Terstena', 'melisa2', 'melisa2@mail.com', '12345678','12345678','1'), 
(2, 'Elona', 'Ramiqi', 'elonaramiqi', 'elonaramiqi@mail.com', '12345678','12345678','0');

-- Insert Products
INSERT INTO `products` (`id`, `product_name`, `product_quality`, `product_rating`, `product_image`) 
VALUES
(1, 'highlighter', 'good', 10, 'h.png'),
(2, 'eyeshadow', 'good', 8, 'e.png'),
(3, 'primer', 'good', 9, 'p.png');

-- Insert Orders
INSERT INTO `orders` (`id`, `user_id`, `product_id`, `is_approved`) 
VALUES
(3, 2, 1, 'true');
