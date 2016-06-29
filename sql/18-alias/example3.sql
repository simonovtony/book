SELECT CustomerName, CONCAT(Address, ', ', City, ', ', PostalCode, ', ', Country) AS Address
FROM Customers;