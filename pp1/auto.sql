CREATE TABLE users(
 id int(11)NOT NULL ,
    name varchar(255)NOT NULL,
    username varchar(255) NOT NULL,
  
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    confirm_password varchar(255) NOT NULL,
    is_admin varchar(255) NOT NULL
    
)
ALTER TABLE users ADD PRIMARY KEY (id)

CREATE TABLE cars(
id int(11) NOT NULL,
    car_name varchar(255) NOT NULL,
  car_km varchar(255) NOT NULL,
   car_year  varchar(255) NOT NULL,
    car_rating varchar(255) NOT NULL,
    car_image varchar(255) NOT NULL,
     car_value varchar(255) NOT NULL
)
ALTER TABLE cars ADD PRIMARY KEY (id);

CREATE TABLE buy_car(
  id int(11) NOT NULL,
    car_name varchar(255) NOT NULL,
    car_value varchar(255) NOT NULL,
    user_adress varchar(255) NOT NULL,
    user_phoneNumber varchar(255) NOT NULL,
);
ALTER TABLE buy_car ADD PRIMARY KEY (id);