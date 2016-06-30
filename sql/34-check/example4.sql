ALTER TABLE Persons
ADD CONSTRAINT chk_Person CHECK (P_Id > 0 AND City = 'Sandnes');