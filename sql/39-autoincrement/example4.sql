CREATE TABLE Persons (
    ID int IDENTITY(1, 1) PRIMARY KEY,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);