# q1
UPDATE book
SET price = price * 0.9;

# q2
DELETE
FROM book
WHERE price >= 2500
  AND published <= '2015-4-01';

# q3
SELECT title, price, publish, published
FROM book
WHERE title = '翔泳社'
ORDER BY price, published DESC;

# q4
SELECT title, price, publish, published
FROM book
WHERE title LIKE 'ヤスアキ%';

# q5
SELECT publish, AVG(price)
FROM book
GROUP BY publish;