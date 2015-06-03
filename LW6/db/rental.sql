/* БД */
mysql> CREATE database rental;
mysql> USE rental;

/* таблицы */
mysql> CREATE TABLE dvd
       (
       dvd_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255),
       production_year YEAR
       );
    
mysql> CREATE TABLE customer
       (
       customer_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       first_name VARCHAR(255),
       last_name VARCHAR(255),
       passport_code INT(10),
       registration_date DATE
       );
    
mysql> CREATE TABLE offer
       (
       offer_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       dvd_id INT(11),
       customer_id INT(11),
       offer_date DATE,
       return_date DATE
       );
    
/* dvd */
mysql> INSERT INTO dvd
       (title, production_year)
       VALUES
       ('The Green Mile', 1999),
       ('Forrest Gump', 1994),
       ('Transformers', 2007),
       ('Inception ', 2010),
       ('How to Train Your Dragon ', 2010),
	   ('Avengers', 2012);
    
/* Клиенты */
mysql> INSERT INTO customer
       (first_name, last_name, passport_code, registration_date)
       VALUES
       ('Ivanov', 'Alexey', 1234567890, 2015-05-27),
       ('Hanks', 'Tom', 1234554321, 2014-05-27),
       ('Fox', 'Megan', 1234512345, 1999-05-27),
       ('Theron', 'Charlize', 0987654321, 2000-05-27);

/* Выдача */    
mysql> INSERT INTO offer
       (dvd_id, customer_id, offer_date)
       VALUES
       (1, 3, '2015-03-27'),
       (2, 4, '2015-01-01'),
       (3, 2, '2014-03-27'),
       (5, 1, '2015-03-27'),
       (6, 2, '2014-12-27');
    
/* Возврат */    
mysql> UPDATE offer SET return_date = '2015-05-27'
       WHERE offer_id=1;
mysql> UPDATE offer SET return_date = '2015-03-22'
       WHERE offer_id=2
mysql> UPDATE offer SET return_date = '2015-05-20'
       WHERE offer_id=5
    
/* 4 */
mysql> SELECT * FROM dvd
       WHERE production_year=2010
       ORDER BY title;
    
/* 5 */
mysql> SELECT d.title FROM dvd d
       JOIN offer of USING (dvd_id)
       WHERE of.return_date IS NULL;
    
/* 6 */
mysql> SELECT c.first_name, c.last_name, d.title, o.offer_date
       FROM customer c
       JOIN dvd d USING (dvd_id)
       JOIN offer o USING (customer_id)
       WHERE YEAR(o.offer_date) = YEAR(CURDATE());