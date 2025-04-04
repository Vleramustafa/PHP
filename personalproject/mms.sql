CREATE TABLE GymEquipment(
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `gymEquipment_name` varchar(255) NOT NULL,
    `gymEquipment_desc` varchar (255) NOT NULL,
    `gymEquipment_rating` int(11) NOT NULL,
    `gymEquipment_image` varchar(255) NOT NULL
)

INSERT INTO `gym` (`id`, `gymEquipment_name`, `gymEquipment_desc`, `gymEquipment_rating`, `gymEquipment_image`) VALUES
(1, 'Compression Shirt','desc', 10/10, 'images/compressionshirt.png'),
(2, 'Bench Press', 'desc', 7/10, 'images/benchpress.webp'),
(3, 'Treadmill', 'desc', 7, 'images/treadmill.webp');
