SELECT City FROM Customers
UNION ALL
SELECT City FROM Suppliers
ORDER BY City;