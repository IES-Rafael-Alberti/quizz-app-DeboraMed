<?php
$errors = [];

// verificar si cada pregunta ha sido respondida
foreach ($_POST as $question => $answer) {
    if (!isset($answer) || (is_array($answer) && empty($answer))) {
        // agrega un error al array
        $errors[$question] = 'Debes responder a esta pregunta.';
    }
}

// mensaje de error
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
} 

/* echo "<pre>";
print_r($_POST);
echo "</pre>"; */

// manejo de logica del cuestionario
class Quiz {
    private $errors = [];
    private $questions = [];
    private $answers = [
        'q1' => 'b',
        'q2' => 'c',
        'q3' => 'b',
        'q4' => 'a',
        'q5' => 'd'
    ];
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
$quiz->addQuestion('¿Qué significa PHP?', 'b');
$quiz->addQuestion('¿Cuál de los siguientes NO es un tipo de dato de PHP?', 'c');
$quiz->addQuestion('¿Cuál es el resultado de echo "Hola" . " " . "Mundo";?', 'b');
$quiz->addQuestion('En PHP, ¿qué bucle se utiliza para ejecutar un bloque de código un número especificado de veces?', 'a');
$quiz->addQuestion('¿Qué función de PHP se utiliza para abrir un archivo para escritura?', 'd');

// Recoger las respuestas del usuario desde $_POST
$userAnswers = [
    'q1' => isset($_POST['q1']) ? $_POST['q1'] : [],
    'q2' => isset($_POST['q2']) ? $_POST['q2'] : [],
    'q3' => isset($_POST['q3']) ? $_POST['q3'] : [],
    'q4' => isset($_POST['q4']) ? $_POST['q4'] : [],
    'q5' => isset($_POST['q5']) ? $_POST['q5'] : [],
];

// Enviar las respuestas del usuario al cuestionario
$quiz->submitAnswers($userAnswers);

// Calcular la puntuación
$score = $quiz->calculateScore();

// Generar comentarios
$feedback = $quiz->generateFeedback();

// Mostrar la puntuación y los comentarios
echo "Puntuación: $score/5";
foreach ($feedback as $comment) {
    echo "<p>$comment</p>";
}
?>