<?php
global $conn;
include 'conectionBD.php';

    $question_text = $_POST['question_text'];
    $correct_option = $_POST['correct_option'];

    // consulta
    $sql = "INSERT INTO Questions (question_text, correct_option) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $question_text, $correct_option);

    $stmt->execute();
    $stmt->close();

    // cieraa conexion
    $conn->close();
?>