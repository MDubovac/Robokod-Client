CREATE TABLE students (
    student_id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    start_date VARCHAR(255) NOT NULL,
    birth_date VARCHAR(255) NOT NULL,
    customer_id INT(11),
    CONSTRAINT fk2 FOREIGN KEY (customer_id) REFERENCES customers (customer_id) ON UPDATE CASCADE ON DELETE CASCADE
);