-- DB Name: libvirtshop
-- This script initialize the database for the libvirtshop project and adds some test-data

-- Delete Script:
DROP TABLE `libvirtshop`.`orders`;
DROP TABLE `libvirtshop`.`productAddons_products`;
DROP TABLE `libvirtshop`.`productAddons`;
DROP TABLE `libvirtshop`.`products`;
DROP TABLE `libvirtshop`.`categories`;
DROP TABLE `libvirtshop`.`users`;

-- Create Script:
CREATE TABLE `libvirtshop`.`categories` ( `category_id` INT NOT NULL AUTO_INCREMENT,  `category_name_en` TEXT NOT NULL , `category_name_de` TEXT NOT NULL, PRIMARY KEY (`category_id`)) ENGINE = InnoDB;
INSERT INTO `libvirtshop`.`categories` ( `category_id`,  `category_name_en`, `category_name_de`)
VALUES
( '1',  'Virtual Machines', 'Virtuelle Maschinen'),
 ( '2',  'Network Components', 'Netzwerkgeraete'),
( '3',  'Other', 'Anderes');
CREATE TABLE `libvirtshop`.`products` ( `product_id` INT NOT NULL AUTO_INCREMENT, `category_id` INT NOT NULL , `product_name_en` TEXT NOT NULL , `product_name_de` TEXT NOT NULL , `product_description_en` TEXT NOT NULL , `product_description_de` TEXT NOT NULL , `product_price` FLOAT NOT NULL , `product_special_price` FLOAT NOT NULL , PRIMARY KEY (`product_id`) , FOREIGN KEY (`category_id`) REFERENCES `categories`(`category_id`)) ENGINE = InnoDB;
INSERT INTO `libvirtshop`.`products` (`product_id`, `category_id`, `product_name_en`, `product_name_de`, `product_description_en`, `product_description_de`, `product_price`, `product_special_price`)
VALUES
('1', '1', 'VM 1vCPU/1GB Ram/40GB Storage', 'VM 1vCPU/1GB Ram/40GB Speicher', 'Virtual Machine with 1 vCPU, 1 GB RAM and 40 GB Storage. Traffic is unlimited.', 'Virtuelle Maschine mit 1 vCPU, 1 GB RAM und 40 GB Speicher. Traffc ist nicht limietiert.', '30.00', '-1'),
('2', '1', 'VM 2vCPU/2GB Ram/80GB Storage', 'VM 2vCPU/2GB Ram/80GB Speicher', 'Virtual Machine with 2 vCPU, 2 GB RAM and 80 GB Storage. Traffic is unlimited.', 'Virtuelle Maschine mit 2 vCPU, 2 GB RAM und 80 GB Speicher. Traffc ist nicht limietiert.', '60.00', '30.00'),
('3', '1', 'VM 4vCPU/4GB Ram/80GB Storage', 'VM 4vCPU/4GB Ram/80GB Speicher', 'Virtual Machine with 4 vCPU, 4 GB RAM and 80 GB Storage. Traffic is unlimited.', 'Virtuelle Maschine mit 4 vCPU, 4 GB RAM und 80 GB Speicher. Traffc ist nicht limietiert.', '120.00', '-1'),
('4', '1', 'VM 8vCPU/16GB Ram/160GB Storage', 'VM 8vCPU/16GB Ram/160GB Speicher', 'Virtual Machine with 8 vCPU, 8 GB RAM and 160 GB Storage. Traffic is unlimited.', 'Virtuelle Maschine mit 8 vCPU, 16 GB RAM und 160 GB Speicher. Traffc ist nicht limietiert.', '200.00', '-1'),
('5', '1', 'VM 6vCPU/12GB Ram/120GB Storage', 'VM 6vCPU/12GB Ram/120GB Speicher', 'Virtual Machine with 6 vCPU, 6 GB RAM and 120 GB Storage. Traffic is unlimited.', 'Virtuelle Maschine mit 6 vCPU, 12 GB RAM und 120 GB Speicher. Traffc ist nicht limietiert.', '1400.00', '-1'),
('7', '2', 'Load Balancer up to 2 Hosts', 'Load Balancer fuer bis zu 2 Hosts', 'Layer 2 Load Balancer to balance traffic for up to 2 hosts', 'Load Balancer um eine Lastverteilung ueber maximal 2 Systeme zu handhaben.', '40.00', '-1'),
('6', '2', 'Load Balancer up to 4 Hosts', 'Load Balancer fuer bis zu 4 Hosts', 'Layer 4 Load Balancer to balance traffic for up to 4 hosts', 'Load Balancer um eine Lastverteilung ueber maximal 4 Systeme zu handhaben.', '80.00', '-1'),
  ('8', '2', 'Load Balancer up to 16 Hosts', 'Load Balancer fuer bis zu 16 Hosts', 'Layer 16 Load Balancer to balance traffic for up to 16 hosts', 'Load Balancer um eine Lastverteilung ueber maximal 16 Systeme zu handhaben.', '2000.00', '-1'),
('9', '3', 'Empty Box', 'Leere Box', 'Empty box, you can put in whatever you want.', 'Leere Box, kann alles moegliche beinhalten', '2000.00', '-1'),
  ('10', '3', 'Empty Yellow Box', 'Leere gelbe Box', 'This box is yellow!', 'Diese Box ist gelb!', '4500.00', '-1'),
  ('11', '3', 'Support 4h', 'Support 4h', 'Business class support up to 4h.', 'Business support bis zu 4h.', '800.00', '-1'),
  ('12', '3', 'Support 8h', 'Support 8h', 'Business class support up to 8h.', 'Business support bis zu 8h.', '1600.00', '-1'),
  ('13', '3', 'Support 20h', 'Support 20h', 'Business class support up to 20h.', 'Business support bis zu 20h.', '3000.00', '-1'),
  ('14', '2', 'CRF Appliance', 'CRF Geraet', 'A customizable CRF Appliance', 'Eine voll anpassbare CRF Geraet.', '800.00', '-1'),
  ('15', '2', 'Firewall 1GB', 'Firewall 1GB', 'Adds firewall capabilities with up to 1GBps.', 'Fuegt Firewall Funktionalitaet hinzu mit einer maximalen Bandbreite von 1GBps.', '4500.00', '-1'),
  ('16', '2', 'Firewall 4GB', 'Firewall 4GB', 'Adds firewall capabilities with up to 4GBps.', 'Fuegt Firewall Funktionalitaet hinzu mit einer maximalen Bandbreite von 4GBps.', '9000.00', '-1'),
  ('17', '2', 'Firewall 10GB', 'Firewall 10GB', 'Adds firewall capabilities with up to 10GBps.', 'Fuegt Firewall Funktionalitaet hinzu mit einer maximalen Bandbreite von 10GBps.', '32000.00', '-1'),
  ('18', '2', 'Log Collector', 'Log Collector', 'Allows a central log collection.', 'Erlaubt das zentrale sammeln von logs', '2200.00', '-1'),
  ('19', '3', 'Square box', 'Eckige Box', 'This box is squared shaped!', 'Diese box ist eckig!', '12.00', '-1'),
('20', '3', 'Ball', 'Ball', 'A simple ball', 'Ein einfacher Ball', '18.00', '-1');

CREATE TABLE `libvirtshop`.`productAddons`
(
  productAddon_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  productAddon_description_en TEXT NOT NULL,
  productAddon_description_de TEXT NOT NULL,
  productAddon_price FLOAT NOT NULL
);
INSERT INTO `libvirtshop`.`productAddons` (productAddon_id, productAddon_description_en, productAddon_description_de, productAddon_price)
VALUES
  ('1', 'Additional vCPU', 'Zusaetzliche vCPU', '15.00'),
  ('2', 'Additional GB RAM', 'Zusaetzliche GB RAM', '15.00'),
  ('3', 'Additional GB Storage', 'Zusaetzliche GB Storage', '2.50');

CREATE TABLE `productAddons_products`
(
  product_id INT NOT NULL,
  productAddon_id INT NOT NULL,
  CONSTRAINT ```productAddons_products``_product_id_productAddon_id_pk` PRIMARY KEY (product_id, productAddon_id),
  CONSTRAINT ```productAddons_products``_products_product_id_fk` FOREIGN KEY (product_id) REFERENCES libvirtshop.products (product_id),
  CONSTRAINT ```productAddons_products``_productaddons_productAddon_id_fk` FOREIGN KEY (productAddon_id) REFERENCES libvirtshop.productaddons (productAddon_id)
);
INSERT INTO `libvirtshop`.`productAddons_products` (productAddon_id, product_id)
    VALUES
      ('1','1'),
      ('1','3'),
      ('1','2'),
      ('1','5'),
      ('1','4'),
      ('2','1'),
      ('2','2'),
      ('2','3'),
      ('2','4'),
      ('2','5'),
      ('3','1'),
      ('3','2'),
      ('3','3'),
      ('3','4'),
      ('3','5');

CREATE TABLE users
(
  user_id        INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  user_username  TEXT NOT NULL,
  user_email     TEXT NOT NULL,
  user_password  TEXT NOT NULL,
  user_firstname TEXT,
  user_lastname  TEXT,
  user_address   TEXT,
  user_zip       INT,
  user_city      TEXT,
  user_country   TEXT,
  user_salt      TEXT NOT NULL
);
INSERT INTO `libvirtshop`.`users` (user_id, user_username, user_password,  user_firstname, user_lastname, user_address, user_zip, user_city, user_country, user_salt, user_email)
VALUES
  ('1','aa', '6621293b10497dba49c49079acf88d90', 'Sample', 'User', 'Samplestreet 1', '1111', 'Samplecity', 'ch', '7d3c2e78b862ac5a', 'test@fefe.com'),
  ('2','sampleuser', '6621293b10497dba49c49079acf88d90', 'Sample', 'User', 'Samplestreet 1', '1111', 'Samplecity', 'ch', '7d3c2e78b862ac5a', 'somemail@sample.com');

CREATE TABLE `libvirtshop`.`orders`
(
  order_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  user_id  INT             NOT NULL,
  `order`  TEXT            NOT NULL,
  order_date TEXT NOT NULL,
  order_shipment TEXT NOT NULL,
  order_present TEXT NOT NULL,
  order_payment TEXT NOT NULL,
  CONSTRAINT ```oders``_users_user_id_fk` FOREIGN KEY (user_id) REFERENCES libvirtshop.users (user_id)
);