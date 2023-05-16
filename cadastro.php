<?php
    include("conexao.php");

    $nome= $_POST['nome'];
    $email=$_POST['email'];
    $assunto=$_POST['assunto'];
    $mensagem=$_POST['mensagem'];

    $sql="INSERT INTO contato(nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

    if (mysqli_query($conexao, $sql)) {
        echo "Agradecemos pelo seu contato!";
    }
    else {
        echo "Erro ao enviar mensagem.";
        // echo "Erro" . mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>