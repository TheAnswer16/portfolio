<?php
    session_start();
    function salvarContato($nome, $email, $mensagem) {
        
        $_SESSION['nome_mensagem'] = $nome;
        $_SESSION['email_mensagem'] = $email;
        $_SESSION['mensagem_mensagem'] = $mensagem;

        return header('Location: ../index.php#contato');
        
    }

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $mensagem = $_GET['mensagem'];

    salvarContato($nome, $email, $mensagem);
?>