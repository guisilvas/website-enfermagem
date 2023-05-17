<?php
    include("conexao.php");

    //Variáveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO contato(nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

    if (mysqli_query($conexao, $sql)) {
    echo "OK"; // Envio bem-sucedido
    } else {
    echo "Erro ao enviar mensagem."; // Envio com erro
    // echo "Erro" . mysqli_connect_error($conexao); // opcional: exibir detalhes do erro
    }
    mysqli_close($conexao);
?>
