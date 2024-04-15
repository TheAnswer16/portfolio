<?php

    function getUltimaMensagem() {

        if (isset($_SESSION['nome_mensagem'])) {

            $nome = $_SESSION['nome_mensagem'];
            $email = $_SESSION['email_mensagem'];
            $mensagem = $_SESSION['mensagem_mensagem'];

            return "<h1>Nome: $nome</h1><span>Mensagem: $mensagem</span>";
        }

        return "<h1>Nenhuma mensagem enviada! </h1>";

    }