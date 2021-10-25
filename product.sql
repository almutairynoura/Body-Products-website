CREATE DATABASE Products;

USE  Products;


CREATE TABLE  productsInformation (
	id INT(18) AUTO_INCREMENT PRIMARY KEY, 
	product_name CHAR(18) ,
	product_price INT(4) ,
	code_number_of_product CHAR (6),
	country_of_origin CHAR(25),
	expiration_date DATE ,
	type_ VARCHAR(25)
	
);


INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('EyeShadow', 240, '11-111', 'KSA' , '2021-11-19','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('EyeLiner', 7, '11-222', 'KSA' , '2021-10-19','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('HighLighter', 145, '11-333', 'KSA' , '2021-9-19','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('Foundation', 68, '11-555', 'KSA' , '2021-5-1','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('Maskara', 23, '11-666', 'KSA' , '2021-11-19','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('Shampoo', 30, '22-111', 'UAE' , '2021-10-1','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('HairMask', 40, '22-222', 'UAE' , '2020-7-19','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('HairOil', 30, '22-333', 'UAE' , '2021-1-19','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('joudperfume', 399, '33-111', 'KWT' , '2021-12-19','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('chanelperfume', 700, '33-222', 'KWT' , '2021-12-20','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('vitaminEOil', 50, '44-111', 'BHR' , '2020-12-11','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('AfricanSoap', 18, '44-222', 'BHR' , '2021-12-20','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('GreenNailPolish', 47, '55-111', 'KWT' , '2021-10-19','product');

INSERT INTO productsInformation ( product_name, product_price, code_number_of_product, country_of_origin, expiration_date, type_) 
	
VALUES ('NailPolishRemover', 40, '55-222', 'KWT' , '2021-12-20','product');

