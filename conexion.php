<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'mapas';

    $conn = mysqli_connect($host, $user, $password, $database);

    if ($conn->connect_errno) {
        echo "No se pudo conectar a la base de datos: " . $conn->connect_error;
        exit();
    }