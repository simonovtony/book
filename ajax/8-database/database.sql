CREATE DATABASE `my_db`;

USE `my_db`;

CREATE TABLE `users` (
    id        VARCHAR(255) NOT NULL,
    FirstName VARCHAR(255) NOT NULL,
    LastName  VARCHAR(255) NOT NULL,
    Age       VARCHAR(255) NOT NULL,
    Hometown  VARCHAR(255) NOT NULL,
    Job       VARCHAR(255) NOT NULL
);

INSERT INTO `users` (id, FirstName, LastName, Age, Hometown, Job)
VALUES ('1', 'Peter', 'Griffin', '41', 'Quahog', 'Brewery');

INSERT INTO `users` (id, FirstName, LastName, Age, Hometown, Job)
VALUES ('2', 'Lois', 'Griffin', '40', 'Newport', 'Piano Teacher');

INSERT INTO `users` (id, FirstName, LastName, Age, Hometown, Job)
VALUES ('3', 'Joseph', 'Swanson', '39', 'Quahog', 'Police Officer');

INSERT INTO `users` (id, FirstName, LastName, Age, Hometown, Job)
VALUES ('4', 'Glenn', 'Quagmire', '41', 'Quahog', 'Pilot');