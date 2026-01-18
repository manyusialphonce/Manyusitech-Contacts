CREATE DATABASE manyusitech_contacts;

USE manyusitech_contacts;

CREATE TABLE whatsapp_contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  phone VARCHAR(20),
  group_name VARCHAR(50),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);