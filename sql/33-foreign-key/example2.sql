CREATE TABLE Orders (
    O_Id int NOT NULL,
    OrderNo int NOT NULL,
    P_Id int,
    PRIMARY KEY (O_Id),
    CONSTRAINT fk_PerOrders 
        FOREIGN KEY (P_Id) REFERENCES Persons (P_Id)
);