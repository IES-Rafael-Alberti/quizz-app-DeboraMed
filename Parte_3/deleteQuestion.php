<?php
global $conn;
include 'conectionDB.php';

    $question_id = $_POST['question_id'];

    $sql = "DELETE FROM Questions WHERE question_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $question_id);

    $stmt->execute();
    $stmt->close();

    $conn->close();
?>