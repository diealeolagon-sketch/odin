CREATE USER IF NOT EXISTS 'odin_app'@'localhost' IDENTIFIED BY 'odin123';
GRANT ALL PRIVILEGES ON odin_db.* TO 'odin_app'@'localhost';
FLUSH PRIVILEGES;
