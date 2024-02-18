<?php
global $conn;
include 'conectionBD.php';

    $question_id = $_POST['question_id'];
    $new_question_text = $_POST['question_text'];
    $new_correct_option = $_POST['correct_option'];

    $sql = "UPDATE Questions SET question_text = ?, correct_option = ? WHERE question_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $new_question_text, $new_correct_option, $question_id);

    $stmt->execute();
    $stmt->close();

    $conn->close();
?>