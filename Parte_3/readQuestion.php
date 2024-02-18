<?php
global $conn;
include 'conectionBD.php';

    $sql = "SELECT question_id, question_text, correct_option FROM Questions";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["question_id"]. " - Pregunta: " . $row["question_text"]. " - Opción correcta: " . $row["correct_option"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>