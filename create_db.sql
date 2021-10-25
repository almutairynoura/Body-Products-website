CREATE DATABASE customerspage;

USE customerspage;


CREATE TABLE Customers(
	id INT(11) AUTO_INCREMENT PRIMARY KEY, 
	firstname CHAR(11) ,
	lastname CHAR(11) ,
	country CHAR (3),
	age INTEGER(2),
	mobile CHAR(13),
	email CHAR(44),
	comments CHAR(255)
);


INSERT INTO Customers ( firstname, lastname, country, age, mobile, email , comments) 
	
VALUES ( 'sara', 'alharbi','KSA', 26, '966-501882251', 'sara@gmail.com' , ' ');

INSERT INTO Customers(firstname, lastname,country, age, mobile, email , comments) 
	
VALUES ( 'abeer', 'alqhdani','UAE', 33, '971-501772251', 'abeer@gmail.com' , 'How many days does the delivery takes ');

INSERT INTO Customers (  firstname, lastname,country, age, mobile, email , comments) 
	
VALUES ( 'razan', 'alrajhi','KWT', 20, '965-501662251', 'razan@gmail.com' , ' I wanna ask about a product when will it be in stock ');

INSERT INTO Customers(firstname, lastname, country,age, mobile, email , comments) 
	
VALUES ( 'mariam', 'alsdhan', 'KSA',43, '966-501552251', 'mariam@gmail.com' , ' ');

INSERT INTO Customers (  firstname, lastname, country, age, mobile, email , comments) 
	
VALUES ( 'smaher', 'alanzy','BHR', 23, '973-501442251', 'smaher@gmail.com' , '  i wanna ask if i can preorder products ');