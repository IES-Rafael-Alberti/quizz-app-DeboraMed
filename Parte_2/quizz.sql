DROP TABLE  Quiz;
DROP TABLE Questions;

CREATE TABLE Quiz (
    quiz_id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    created_at DATETIME,
);

CREATE TABLE Questions (
    question_id INT PRIMARY KEY,
    quiz_id INT,
    question_text TEXT,
    option_a VARCHAR(255),
    option_b VARCHAR(255),
    option_c VARCHAR(255),
    option_d VARCHAR(255),
    correct_option CHAR(1),
    FOREIGN KEY (quiz_id) REFERENCES Quiz(quiz_id)
    );