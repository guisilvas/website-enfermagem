<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "enfermagem";

    $conexao=mysqli_connect($nome, $email, $assunto, $mensagem, $dbname);
    if(!$conexao) {
        die("Houve um erro: " . mysqli_connect_error());
    }
?>