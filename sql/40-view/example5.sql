CREATE VIEW [Category Sales For 1997] 
AS 
    SELECT DISTINCT CategoryName, Sum(ProductSales) AS CategorySales
    FROM [Product Sales for 1997]
    GROUP BY CategoryName;