<?php
    $errors = [];

    // conexion DB
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "quizzDB";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // verificacion conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // consulta preparada para recuperar preguntas
    $stmt = $conn->prepare("SELECT question_id, question_text, correct_option FROM Questions WHERE quiz_id = ?");
    $stmt->bind_param("i", $quiz_id); // asume que $quiz_id es el ID del cuestionario que quieres cargar
    $stmt->execute();

    //resultados
    $result = $stmt->get_result();

    // verificar si cada pregunta ha sido respondida
    foreach ($_POST as $question => $answer) {
        if (!isset($answer) || (is_array($answer) && empty($answer))) {
            $errors[$question] = 'Debes responder a esta pregunta.';
        }
    }
    // mensaje de error
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
// manejo de logica del cuestionario
class Quiz {
    private $errors = [];
    private $questions = [];
    private $answers = [];
    private $userAnswers = [];
    // Método para validar las respuestas del usuario
    public function validateAnswers($question, $answer) {
        foreach ($this->userAnswers as $question => $answer) {
            if (!isset($answer) || (is_array($answer) && empty($answer))) {
                // Agrega un error al array
                $errors[$question] = 'Debes responder a esta pregunta.';
            }// mensaje de error
            else if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
            }
        }
        return $errors;
    }
// agregar una pregunta y su respuesta
    public function addQuestion($question, $answer) {
        array_push($this->questions, $question);
        array_push($this->answers, $answer);
    }
    // recuperar todas las preguntas
    public function getQuestions() {
        return $this->questions;
    }
    // almacenar las respuestas del usuario
    public function submitAnswers($userAnswers) {
        $this->userAnswers = $userAnswers;
    }
    // calcular la puntuación
    public function calculateScore() {
        $score = 0;
        foreach ($this->userAnswers as $index => $userAnswer) {
            if ($userAnswer == $this->answers[$index]) {
                $score++;
            }
        }
        return $score;
    }
    // comentarios para cada pregunta
    public function generateFeedback() {
        $feedback = [];
        foreach ($this->userAnswers as $index => $userAnswer) {
            if ($userAnswer == $this->answers[$index]) {
                array_push($feedback, "La respuesta es correcta.");
            } else {
                array_push($feedback, "Respuesta incorrecta. La respuesta correcta es: " . $this->answers[$index]);
            }
        }
        return $feedback;
    }
}
    // Crear una nueva instancia de la clase Quiz
    $quiz = new Quiz();
    // Agregar las preguntas y respuestas correctas al cuestionario
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $quiz->addQuestion($row["question_id"], $row["correct_option"]);
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    // Recoge las respuestas
    $userAnswers = [];
    foreach ($quiz->getQuestions() as $question_id) {
        $userAnswers[$question_id] = isset($_POST[$question_id]) ? $_POST[$question_id] : [];
    }
    // Envialas respuestas al cuestionario
    $quiz->submitAnswers($userAnswers);
    // Calcula la puntuación
    $score = $quiz->calculateScore();
    // Genera comentarios
    $feedback = $quiz->generateFeedback();

    // Mostrar la puntuación y los comentarios
    echo "Puntuación: " . $score . "<br>";
    foreach ($feedback as $comment) {
        echo "<p>" . $comment . "</p>";
    }
?>