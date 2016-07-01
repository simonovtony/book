/*
SQL Агрегатные функции
SQL агрегатные функции возвращают одно значение, рассчитанное из значений в столбце.

AVG (x)   - Возвращает среднее значение
COUNT (x) - Возвращает количество строк
FIRST (x) - Возвращает первое значение
LAST (x)  - возвращает последнее значение
MAX (x)   - Возвращает наибольшее значение
MIN (x)   - Возвращает наименьшее значение
SUM (x)   - Возвращает сумму
*/

SELECT AVG(Price) AS PriceAverage FROM Products;
SELECT ProductName, Price FROM Products WHERE Price > (SELECT AVG(Price) FROM Products);

SELECT COUNT(CustomerID) AS OrdersFromCustomerID7 FROM Orders WHERE CustomerID = 7;
SELECT COUNT(*) AS NumberOfOrders FROM Orders;
SELECT COUNT(DISTINCT CunstomerID) NumberOfCustomers FROM Orders;

SELECT FIRST(CustomerName) AS FirstCustomer FROM Customers;
SELECT CustomerName AS FirstCustomer FROM Customers ORDER BY CustomerID ASC LIMIT 1;

SELECT LAST(CustomerName) AS FirstCustomer FROM Customers;
SELECT CustomerName AS FirstCustomer FROM Customers ORDER BY CustomerID DESC LIMIT 1;

SELECT MAX(Price) AS HighestPrice FROM Products;

SELECT MIN(Price) AS SmallestOrderPrice FROM Products;

SELECT SUM(Quantity) AS TotalItemsOrdered FROM OrderDetails;

/*
SQL скалярные функции возвращают одно значение, на основе значения входного сигнала.

UCASE ()  - преобразует поле в верхний регистр
LCASE ()  - преобразует поле в нижний регистр
MID ()    - Извлечение символов из текстового поля
LEN ()    - Возвращает длину текстового поля
ROUND ()  - Округление числовое поле с числом десятичных знаков, указанных
NOW ()    - Возвращает текущую дату и время
FORMAT () - форматы, как поле будет отображаться
*/

SELECT UCASE(CustomerName) AS Customer, City
FROM Customers;

SELECT LCASE(CustomerName) AS Customer, City
FROM Customers;

SELECT MID(City, 1, 4) AS ShortCity
FROM Customers;

SELECT CustomerName, LEN(Address) as LengthOfAddress
FROM Customers;

SELECT ProductName, ROUND(Price, 0) AS RoundedPrice
FROM Products;

SELECT ProductName, Price, NOW() AS PerDate
FROM Products;

SELECT ProductName, Price, FORMAT(NOW(), 'YYYY-MM-DD') AS PerDate
FROM Products;