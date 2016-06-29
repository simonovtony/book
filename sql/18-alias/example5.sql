SELECT Orders.OrderID, Orders.OrderDate, Customers.CustomerName 
FROM Customers, Orders 
WHERE Customers.CustomerName = "Around the Horn" AND Customers.CustomerID = Orders.CustomerID;