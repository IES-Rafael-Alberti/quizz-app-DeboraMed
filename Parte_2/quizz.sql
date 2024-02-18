DROP TABLE  QuizQuestions;

CREATE TABLE QuizQuestions (
    id INT AUTO_INCREMENT,
    question TEXT,
    options TEXT,
    correct_answer CHAR(1),
    feedback TEXT,
    PRIMARY KEY(id)
);