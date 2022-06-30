CREATE TABLE users (
    user_id INT(11) PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(255) NOT NULL,
    user_username VARCHAR(255) NOT NULL,
    user_pass VARCHAR(255) NOT NULL
);

INSERT INTO users (user_name, user_username, user_pass)
VALUES
    ("Centar, Niš", "CentarNis", "$2y$10$WHtNKw43XSgJhSLHrYGQqOTHZMdmEVVQblC8UlPX97YCFOipB8Tna"),
    ("Merkator, Niš", "MerkatorNis", "$2y$10$menV.QZ.cIsbZfUup8q3HuJa3jNE6Dr5HlsVAsbLK1/rNbVqO9vwa"),
    ("Leksovac", "Leskovac", "$2y$10$C4j9ioP./rYhUw4ZgCJIb.g6GcvfTzgZ47IbTa3qSajZJ2ZOXbCC.");