<?php

    function cria_conexao() {
        
        $conn = new mysqli("localhost", "root", "", "oficinaphp") or die("Unable to connect");
        
        return $conn;
    }   