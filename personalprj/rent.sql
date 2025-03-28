CREATE TABLE users (
    id int(11) NOT NULL,
    name varchar(255) NOT NULL,
    username varchar(255) NOT NULL,
    surname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    confirm_password varchar(255) NOT NULL,
    is_admin varchar(255) NOT NULL 
)

ALTER TABLE users ADD PRIMARY KEY (id)