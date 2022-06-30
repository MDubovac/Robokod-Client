CREATE TABLE customers (
    customer_id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    num VARCHAR(255) NOT NULL,
    jmbg VARCHAR(255) NOT NULL,
    user_id INT(11),
    CONSTRAINT fk1 FOREIGN KEY (user_id) REFERENCES users(user_id) ON UPDATE CASCADE ON DELETE CASCADE
);