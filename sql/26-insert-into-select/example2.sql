INSERT INTO Customers (CustomerName, Country)
SELECT SupplierName, Country
FROM Suppliers
WHERE Country = 'Germany';