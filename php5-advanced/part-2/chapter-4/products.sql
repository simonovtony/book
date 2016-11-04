CREATE TABLE products (
          id INTEGER PRIMARY KEY AUTOINCREMENT,
        type TEXT,
   firstname TEXT,
    mainname TEXT,
       title TEXT,
       price FLOAT,
    numpages INT,
  playlength INT,
    discount INT
);

INSERT INTO products
	(
		id, type, firstname, mainname,
		title, price, numpages, playlength, discount
	)
VALUES
	(
	  1, 'book', 'Михаил', 'Булгаков',
	  'Собачье сердце', 5.99, 400, 0, 0
	);

INSERT INTO products
	(
		id, type, firstname, mainname,
		title, price, numpages, playlength, discount
	)
VALUES
	(
	  2, 'cd', 'Группа', 'ДДТ',
	  'Пропавший без вести', 10.99, 0, 80, 20
	);