CREATE TABLE comments (
    comment_id INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    comment_date VARCHAR(255) NOT NULL,
    student_id INT(11),
    CONSTRAINT fk3 FOREIGN KEY (student_id) REFERENCES students (student_id) ON UPDATE CASCADE ON DELETE CASCADE
);