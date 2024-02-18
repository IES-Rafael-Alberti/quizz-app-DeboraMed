<?php
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
?>