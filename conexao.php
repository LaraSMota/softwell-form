<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "softwell_candidatos";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    mysqli_set_charset($conn, 'utf8');

    if ($conn->connect_error){
        die("Falha ao realizar conexão: " . $conn->connect_error);
    }
?>