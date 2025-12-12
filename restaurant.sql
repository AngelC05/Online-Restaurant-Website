CREATE DATABASE IF NOT EXISTS restaurant;
USE restaurant;

CREATE TABLE orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  phone VARCHAR(20),
  dish VARCHAR(100),
  quantity INT
);
