SELECT Employees.LastName,
       COUNT(Orders.OrderID) AS NumberOfOrders
FROM Orders
    INNER JOIN Employees
        ON Orders.EmployeeID = Employees.EmployeeID
WHERE LastName = 'Davolio' OR LastName = 'Fuller'
GROUP BY LastName
HAVING COUNT(Orders.OrderID) > 25;